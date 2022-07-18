<div class="page-sidebar navbar-collapse collapse">
    <!-- BEGIN SIDEBAR MENU -->
    <!-- DOC: Apply "page-sidebar-menu-light" class right after "page-sidebar-menu" to enable light sidebar menu style(without borders) -->
    <!-- DOC: Apply "page-sidebar-menu-hover-submenu" class right after "page-sidebar-menu" to enable hoverable(hover vs accordion) sub menu mode -->
    <!-- DOC: Apply "page-sidebar-menu-closed" class right after "page-sidebar-menu" to collapse("page-sidebar-closed" class must be applied to the body element) the sidebar sub menu mode -->
    <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
    <!-- DOC: Set data-keep-expand="true" to keep the submenues expanded -->
    <!-- DOC: Set data-auto-speed="200" to adjust the sub menu slide up/down speed -->
    <ul class="page-sidebar-menu   " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200">
        <li class="nav-item start {{ (request()->is('admin/dashboard')) ? 'active open' : '' }}">
            <a href="{{ route('admin_dashboard') }}" class="nav-link nav-toggle">
                <i class="icon-home"></i>
                <span class="title">Family tree</span>
                <span class="selected"></span>
                {{--<span class="arrow open"></span>--}}
            </a>
        </li>

        <li class="nav-item  {{ (request()->is('admin/family_tree/list/*') || request()->is('admin/family_tree/list')) ? 'active' : '' }}">
            <a href="{{ route('admin_family_tree_list') }}" class="nav-link ">
                <i class="icon-list"></i>
                <span class="title">Danh sách</span>
            </a>
        </li>

        <li class="nav-item {{ (request()->is('admin/product/*')) ? 'open' : '' }}">
            <a href="javascript:;" class="nav-link nav-toggle">
                <i class="icon-graph"></i>
                <span class="title">Sản phẩm</span>
                <span class="arrow"></span>
            </a>
            <ul class="sub-menu" style="{{ (request()->is('admin/product/*')) ? 'display:block' : '' }}">
                <li class="nav-item  {{ (request()->is('admin/product/category/*') || request()->is('admin/product/category')) ? 'active' : '' }}">
                    <a href="{{ route('admin_products_category') }}" class="nav-link ">
                        <span class="title">Danh mục</span>
                    </a>
                </li>
                <li class="nav-item  {{ (request()->is('admin/product/product/*') || request()->is('admin/product/product')) ? 'active' : '' }}">
                    <a href="{{ route('admin_products_products') }}" class="nav-link ">
                        <span class="title">Danh sách</span>
                    </a>
                </li>
            </ul>
        </li>

    </ul>
    <!-- END SIDEBAR MENU -->
</div>
