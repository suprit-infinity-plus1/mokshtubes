<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title><?php echo $__env->yieldContent('title'); ?> || Pearl Fertility and IVF</title>



    <!-- General CSS Files -->
    <link rel="stylesheet" href="<?php echo asset('admin/css/app.min.css'); ?>">
    <!-- Custom style CSS -->
    
    <!-- <link rel='shortcut icon' type='image/x-icon' href="<?php echo asset('assets/img/favicon.png'); ?>" /> -->
    <link rel="stylesheet" href="<?php echo asset('admin/bundles/select2/dist/css/select2.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo asset('admin/bundles/bootstrap-daterangepicker/daterangepicker.css'); ?>">
    <link rel="stylesheet" href="<?php echo asset('admin/css/style.css'); ?>">
    <link rel="stylesheet" href="<?php echo asset('admin/bundles/chocolat/dist/css/chocolat.css'); ?>">
    <link rel="stylesheet" href="<?php echo asset('admin/css/components.css'); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
    <link rel="stylesheet" href="<?php echo asset('admin/bundles/summernote/summernote-bs4.css'); ?>">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="<?php echo asset('admin/bundles/summernote/summernote-bs4.css'); ?>">
    <link rel="stylesheet" href="<?php echo asset('admin/css/assetsstyle.css'); ?>">

    <link rel="stylesheet" href="<?php echo e(asset('assets/vendor/bootstrap/bootstrap.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo asset('admin/css/custom.css'); ?>">

    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo e(asset('assets/img/favicon-32x32.png')); ?>">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo e(asset('assets/img/favicon-16x16.png')); ?>">



    

    <link
        href="https://cdn.datatables.net/v/bs5/dt-2.2.1/b-3.2.1/date-1.5.5/fh-4.0.1/r-3.0.3/rr-1.5.0/sc-2.4.3/sb-1.8.1/sp-2.3.3/datatables.min.css"
        rel="stylesheet">


    <?php echo $__env->yieldContent('extracss'); ?>
</head>

<body>
    <div class="loader"></div>
    <div id="app">
        <div class="main-wrapper main-wrapper-1">
            <div class="navbar-bg"></div>
            <nav class="navbar navbar-expand-lg main-navbar sticky">
                <div class="form-inline mr-auto">
                    <ul class="navbar-nav mr-3">
                        <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg
									collapse-btn">
                                <i data-feather="align-justify"></i></a></li>
                        <li><a href="#" class="nav-link nav-link-lg fullscreen-btn">
                                <i data-feather="maximize"></i>
                            </a></li>
                    </ul>
                </div>
                <ul class="navbar-nav navbar-right">
                    <?php if(auth()->check()): ?>
                        <li class="dropdown">
                            <a href="#" data-toggle="dropdown"
                                class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                                <?php if(auth()->user()->image_url): ?>
                                    <img alt="<?php echo e(auth()->user()->name); ?>"
                                        src="/storage/images/users/<?php echo e(auth()->user()->image_url); ?>"
                                        class="user-img-radious-style">
                                <?php else: ?>
                                    <img alt="Profile Photo" src="/admin/img/admin2.png" class="user-img-radious-style">
                                <?php endif; ?>
                                <span class="d-sm-none d-lg-inline-block"></span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right pullDown pt-0">
                                <div class="p-2 pb-0">
                                    <div class="text-center bg-secondary bg-opacity-25 rounded">
                                        <div class="dropdown-title pb-0"><?php echo e(auth()->user()->name); ?></div>
                                        <div class="dropdown-title pt-0"><?php echo e(auth()->user()->email); ?></div>
                                    </div>
                                </div>
                                
                                <a href="<?php echo e(route('profile.edit')); ?>" class="dropdown-item has-icon action-edit-btn1">
                                    <i class="far fa-user"></i> Profile
                                </a>
                                
                                <div class="dropdown-divider"></div>
                                <a href="#"
                                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                                    class="dropdown-item has-icon text-danger">
                                    <i class="fas fa-sign-out-alt"></i> Logout
                                </a>
                                <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST"
                                    style="display: none;">
                                    <?php echo csrf_field(); ?>
                                </form>
                            </div>
                        </li>
                    <?php endif; ?>

                </ul>
            </nav>
            <div class="main-sidebar sidebar-style-2">
                <aside id="sidebar-wrapper">
                    <div class="sidebar-brand">
                        <a href="">
                            
                            <h4 class="my-2 font-bold text-white">Mokshtubes</h4>

                        </a>
                    </div>
                    <ul class="sidebar-menu">



                        <li class="menu-header">Manage Menu</li>
                        <li class="dropdown">
                            <a href="<?php echo e(route('dashboard')); ?>"
                                class="nav-link <?php echo e(Request::routeIs('dashboard') ? 'active' : ''); ?>"><i
                                    data-feather="monitor" class="mt-1"></i><span>Dashboard</span></a>
                        </li>
                        
                        
                        
                        <li class="dropdown">
                            <a href="<?php echo e(route('datasheet')); ?>"
                                class="nav-link <?php echo e(Request::routeIs('datasheet') ? 'active' : ''); ?>">
                                <i data-feather="users" class="mt-1"></i>
                                <span>Datasheet Leads</span>
                            </a>
                        </li>
                        <li class="dropdown <?php echo e(Request::routeIs('admin.blogs*') ? 'active' : ''); ?>">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button"
                                aria-haspopup="true" aria-expanded="false">
                                <i data-feather="file" class="mt-1"></i><span>Blogs</span>
                            </a>
                            <div class="dropdown-menu w-100 rounded-0 p-0 m-0">
                                <a class="nav-link dropdown-item <?php echo e(Request::routeIs('admin.blogs') ? 'active' : ''); ?>"
                                    href="<?php echo e(route('admin.blogs')); ?>">All Blogs</a>
                                <a class="nav-link dropdown-item <?php echo e(Request::routeIs('admin.blogs.categories') ? 'active' : ''); ?>"
                                    href="<?php echo e(route('admin.blogs.categories')); ?>">Categories</a>
                                <a class="nav-link dropdown-item <?php echo e(Request::routeIs('admin.blogs.tags') ? 'active' : ''); ?>"
                                    href="<?php echo e(route('admin.blogs.tags')); ?>">Tags</a>
                            </div>
                        </li>
                        

                        




                    </ul>



                </aside>
            </div>
            <!-- Main Content -->
            <div class="main-content">
                <?php echo $__env->yieldContent('content'); ?>

                <div class="settingSidebar">
                    <a href="javascript:void(0)" class="settingPanelToggle"> <i class="fa fa-spin fa-cog"></i>
                    </a>
                    <div class="settingSidebar-body ps-container ps-theme-default">
                        <div class=" fade show active">
                            <div class="setting-panel-header">Setting Panel
                            </div>
                            <div class="p-15 border-bottom">
                                <h6 class="font-medium m-b-10">Select Layout</h6>
                                <div class="selectgroup layout-color w-50">
                                    <label class="selectgroup-item">
                                        <input type="radio" name="value" value="1"
                                            class="selectgroup-input-radio select-layout" checked>
                                        <span class="selectgroup-button">Light</span>
                                    </label>
                                    <label class="selectgroup-item">
                                        <input type="radio" name="value" value="2"
                                            class="selectgroup-input-radio select-layout">
                                        <span class="selectgroup-button">Dark</span>
                                    </label>
                                </div>
                            </div>
                            <div class="p-15 border-bottom">
                                <h6 class="font-medium m-b-10">Sidebar Color</h6>
                                <div class="selectgroup selectgroup-pills sidebar-color">
                                    <label class="selectgroup-item">
                                        <input type="radio" name="icon-input" value="1"
                                            class="selectgroup-input select-sidebar">
                                        <span class="selectgroup-button selectgroup-button-icon" data-toggle="tooltip"
                                            data-src-title="Light Sidebar"><i class="fas fa-sun"></i></span>
                                    </label>
                                    <label class="selectgroup-item">
                                        <input type="radio" name="icon-input" value="2"
                                            class="selectgroup-input select-sidebar" checked>
                                        <span class="selectgroup-button selectgroup-button-icon" data-toggle="tooltip"
                                            data-src-title="Dark Sidebar"><i class="fas fa-moon"></i></span>
                                    </label>
                                </div>
                            </div>
                            <div class="p-15 border-bottom">
                                <h6 class="font-medium m-b-10">Color Theme</h6>
                                <div class="theme-setting-options">
                                    <ul class="choose-theme list-unstyled mb-0">
                                        <li title="white" class="active">
                                            <div class="white"></div>
                                        </li>
                                        <li title="cyan">
                                            <div class="cyan"></div>
                                        </li>
                                        <li title="black">
                                            <div class="black"></div>
                                        </li>
                                        <li title="purple">
                                            <div class="purple"></div>
                                        </li>
                                        <li title="orange">
                                            <div class="orange"></div>
                                        </li>
                                        <li title="green">
                                            <div class="green"></div>
                                        </li>
                                        <li title="red">
                                            <div class="red"></div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="p-15 border-bottom">
                                <div class="theme-setting-options">
                                    <label class="m-b-0">
                                        <input type="checkbox" name="custom-switch-checkbox"
                                            class="custom-switch-input" id="mini_sidebar_setting">
                                        <span class="custom-switch-indicator"></span>
                                        <span class="control-label p-l-10">Mini Sidebar</span>
                                    </label>
                                </div>
                            </div>
                            <div class="p-15 border-bottom">
                                <div class="theme-setting-options">
                                    <label class="m-b-0">
                                        <input type="checkbox" name="custom-switch-checkbox"
                                            class="custom-switch-input" id="sticky_header_setting">
                                        <span class="custom-switch-indicator"></span>
                                        <span class="control-label p-l-10">Sticky Header</span>
                                    </label>
                                </div>
                            </div>
                            <div class="mt-4 mb-4 p-3 align-center rt-sidebar-last-ele">
                                <a href="#" class="btn btn-icon icon-left btn-primary btn-restore-theme">
                                    <i class="fas fa-undo"></i> Restore Default
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <footer class="main-footer bg-dark">
                <div class="footer-left">
                    Copyright &copy; 2025
                    
                    <div class="bullet"></div>
                    Mokshtubes
                    
                </div>
            </footer>
        </div>
    </div>
    <!-- General JS Scripts -->
    <script src="<?php echo asset('admin/js/app.min.js'); ?>"></script>
    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery.lazy/1.7.9/jquery.lazy.min.js"></script>
    <script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/jquery.lazy/1.7.9/jquery.lazy.plugins.min.js"></script>
    <!-- JS Libraies -->
    <!-- Template JS File -->
    <!-- Custom JS File -->
    <script src="<?php echo asset('admin/js/custom.js'); ?>"></script>
    <script src="<?php echo asset('admin/js/jquery.validate.min.js'); ?>"></script>
    <script src="<?php echo asset('admin/bundles/select2/dist/js/select2.full.min.js'); ?>"></script>
    <script src="<?php echo asset('admin/js/scripts.js'); ?>"></script>
    <script src="<?php echo asset('admin/bundles/bootstrap-daterangepicker/daterangepicker.js'); ?>"></script>
    <script src="<?php echo asset('assets/js/jquery.lazyload.js'); ?>"></script>
    <script src="<?php echo asset('admin/bundles/summernote/summernote-bs4.js'); ?>"></script>
    <script src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.4/js/dataTables.bootstrap4.min.js"></script>
    <script src="<?php echo e(asset('assets/vendor/bootstrap/bootstrap.bundle.min.js')); ?>"></script>

    
    <script
        src="https://cdn.datatables.net/v/bs5/dt-2.2.1/b-3.2.1/date-1.5.5/fh-4.0.1/r-3.0.3/rr-1.5.0/sc-2.4.3/sb-1.8.1/sp-2.3.3/datatables.min.js">
    </script>


    <script>
        $(document).ready(function() {

            $(".lazy").Lazy({
                effect: 'fadeIn',
                visibleOnly: true,
            });

            $('.datatable').dataTable();
        });
    </script>
    <?php echo $__env->yieldContent('extrajs'); ?>
</body>

</html>
<?php /**PATH C:\xampp\htdocs\mokshtube-new\mokshtube\resources\views/layouts/admin-master.blade.php ENDPATH**/ ?>