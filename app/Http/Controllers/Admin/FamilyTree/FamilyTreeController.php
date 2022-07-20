<?php

namespace App\Http\Controllers\Admin\FamilyTree;

use App\Http\Controllers\Admin\FileUploadController;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\addFamilyTree;
use App\Models\admin\FamilyTree\FamilyTreeModel;
use Illuminate\Http\Request;

class FamilyTreeController extends Controller
{
    //
    public $path_base;
    public $fileUploadController;
    public $array_size;


    public function __construct()
    {
        $this->array_size=[
            'large' => '1170, 768',
            'small' => '370, 330',
            'tiny' => '83, 83',
        ];
        $this->fileUploadController = new FileUploadController();
        $this->path_base = '/images/family_tree/';
    }

    //
    public function index()
    {
        $familyTree = new FamilyTreeModel();
        $listFamilyTree = $familyTree->getAll();
        return view("admin.FamilyTree.list", compact('listFamilyTree'));
    }


    // thêm mới
    public function view_add(){
        $familyTree = new FamilyTreeModel();
        $listFamilyTree = $familyTree->getAll();
        return view("admin.FamilyTree.add", compact('listFamilyTree'));
    }


    public function add(addFamilyTree $request){
        $familyTree = new FamilyTreeModel();
        $familyTree->name = $request->name;
        $familyTree->mid = $request->mid;
        $familyTree->fid = $request->fid;
        $familyTree->pids = $request->pids;
        $familyTree->orderId = $request->orderId;
        $familyTree->relationship = $request->relationship;
        $familyTree->bdate = $request->bdate;
        $familyTree->ddate = $request->ddate;
        $familyTree->tags = $request->tags;
        $familyTree->status = $request->status;

        if($request->mid){
            $getDetailMId = FamilyTreeModel::findOrFail($familyTree->id);
            $familyTree->mid_name = $getDetailMId->name;
        }
        if($request->fid){
            $getDetailFId = FamilyTreeModel::findOrFail($familyTree->id);
            $familyTree->fid_name = $getDetailFId->name;
        }
        if($request->pids){
            $getDetailPIds = FamilyTreeModel::findOrFail($familyTree->id);
            $familyTree->pids_name = $getDetailPIds->name;
        }



        // Kiểm tra xem người dùng có upload file lên không
        if ($request->hasFile('img')) {

            $image = $request->file('img');

            $file_path = $this->fileUploadController->uploadImage($image, $this->path_base);
            $this->fileUploadController->uploadImageFit($image, $this->path_base, $this->array_size);

            $familyTree->img = $file_path;
        }

        $familyTree->save();
        return redirect()->route('admin_family_tree_list')->with('success', 'Add ' . $request->name . ' successful!');
    }


    public function view_edit($id)
    {
        $familyTree = new FamilyTreeModel();
        $listFamilyTree = $familyTree->getAll();

        $detail = FamilyTreeModel::findOrFail($id);

        $compact = [
            'detail',
            'familyTree',
            'listFamilyTree'
        ];
        return view('admin.FamilyTree.edit', compact($compact));
    }

    public function update(addFamilyTree $request, $id){

        $detail = FamilyTreeModel::findOrFail($id);

        $detail->name = $request->name;

        $detail->mid = $request->mid;
        $detail->fid = $request->fid;
        $detail->pids = $request->pids;
        $detail->orderId = $request->orderId;
        $detail->relationship = $request->relationship;
        $detail->bdate = $request->bdate;
        $detail->ddate = $request->ddate;
        $detail->tags = $request->tags;
        $detail->status = $request->status;

        if($request->mid){
            $getDetailMId = FamilyTreeModel::findOrFail($detail->id);
            $detail->mid_name = $getDetailMId->name;
        }
        if($request->fid){
            $getDetailFId = FamilyTreeModel::findOrFail($detail->id);
            $detail->fid_name = $getDetailFId->name;
        }
        if($request->pids){
            $getDetailPIds = FamilyTreeModel::findOrFail($detail->id);
            $detail->pids_name = $getDetailPIds->name;
        }




        // Kiểm tra xem người dùng có upload file lên không
        if ($request->hasFile('img')) {

            $image = $request->file('img');

            $file_path = $this->fileUploadController->uploadImage($image, $this->path_base);
            $this->fileUploadController->uploadImageFit($image, $this->path_base, $this->array_size);

            $detail->img = $file_path;
        }

        $detail->save();
        return redirect()->route('admin_family_tree_list')->with('success', 'Edit ' . $request->name . ' successfull!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        //
        $modelFamilyTree = new FamilyTreeModel();
        $modelFamilyTree->destroyById($request->id);

        return redirect()->route('admin_family_tree_list')
            ->with('success','Xóa thành công !');
    }

}
