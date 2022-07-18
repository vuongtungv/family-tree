<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

//ImageController.php

use App\ImageModel;
use Image;

class FileUploadController extends Controller
{
    //

    //
    private $year;
    private $month;
    private $day;
    private $timestamp;
    private $path;


    public function __construct()
    {
        $this->current_timestamp = Carbon::now()->timestamp;
        $this->year = Carbon::now()->year;
        $this->month = Carbon::now()->month;
        $this->day = Carbon::now()->day;
    }

    public function uploadImage($image, $path_base){

        $this->path = $path_base.$this->year.'/'.$this->month.'/'.$this->day.'/original';

        // check forder created
        $path_check = storage_path('app/public'.$this->path);
        if(!File::isDirectory($path_check)){
            File::makeDirectory($path_check, 0777, true, true);
        }

        $original_name = strtolower(trim($image->getClientOriginalName()));
        $file_name = $this->current_timestamp.'_'.$original_name;

        // lưu file vào storage

        Storage::disk('local')->putFileAs($this->path, $image, $file_name);

        return $this->path.'/'.$file_name;
    }



    /***
     *
     * Upload image fit
     *
    ***/
    public function uploadImageFit($image, $path_base, $array_size){
        if($array_size){
            foreach ($array_size as $key => $item){
                $this->path = $path_base.$this->year.'/'.$this->month.'/'.$this->day.'/'.$key;
                // check forder created
                $path_check = storage_path('app/public'.$this->path);

                if(!File::isDirectory($path_check)){
                    File::makeDirectory($path_check, 0777, true, true);
                }

                $size = explode(',',$item);

                $img = Image::make($image)->fit((int)$size[0], (int)$size[1]);

                $original_name = strtolower(trim($image->getClientOriginalName()));
                $file_name = $this->current_timestamp.'_'.$original_name;

                $img->save($path_check.'/'.$file_name);
            }
        }
        return true;
    }
}
