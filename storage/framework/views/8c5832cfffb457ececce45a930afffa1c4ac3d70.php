<?php
use App\Models\Notifications;
$notification = Notifications::with('from_user')->with('artist')->where('to_user_id',auth()->user()->id)->orderby('id','DESC')->offset(0)->limit(5)->get();
use \App\Models\Business;
use App\Models\Artist;
?>

<style>


    .navbar-brand-box {
        width: 70px;
    }

    .vertical-collpsed .logo span.logo-lg {
        display: block;
        margin-left: 24px !important;
    }

    .vertical-collpsed .logo span.logo-lg img {
        max-width: 110px;
    }

    .notification_image {
        margin-right: 4px;
        max-width: 12px;
        margin-top: 2px;
    }
    .notification_text{
        margin-bottom: 0;
        text-align: left;
    }
    .font-size-12.text-muted{
        display: flex;
        flex-flow: row;
        align-items: end;
        justify-content: space-between;
    }
    .notification-item .media{
        display: flex;
        align-items: center;
    }
    .dropdown-menu.show{
        min-width:17rem !important;
    }
    .navbar-expand-lg .navbar-nav .nav-link {
        padding-right: 7px;
        padding-left: 24px;
        font-weight: 300;
        font-size: 13px;
        color: #050F2F;
        font-family: 'Roboto', sans-serif;
    }
    .topbar-new {
        display: flex;
        align-items: center;
    }

    .topbar-new-desktop {
        display: flex;
    }

    .topbar-new-mob {
        display: none;
    }

    .header-topbar {
        width: 100%;
        justify-content: space-between;
    }

    .topbar-desktop {
        display: flex;
        align-items: center;
        justify-content: flex-end;
    }

    .mdi-chevron-down {
        display: none !important;
    }
    .navbar-header .dropdown .dropdown-menu.dropnewstuff{
        right: 53px !important;
        top: -9px !important;
    }

    @media (max-width: 993px){
        .logo span.logo-lg {
            display: block;
        }
        .logo-xs img {
            margin-bottom: -3px !important;
        }
        .logo-lg img {
            margin-bottom: -3px !important;
        }
    }

    @media (max-width: 768px) and (min-width: 426px)  {

    }

    /* tab problem fixed */
    @media (min-width: 576px) and (max-width: 779px){
        .logo-xs img {
            margin-left: 22px !important;
        }
    }

    @media (max-width: 670px) {
        .topbar-desktop {
            display: none;
        }
        .topbar-new-mob {
            display: flex;
        }
        .btnbar.mv {
            display: flex !important;
        }
        .topbar-mobile{
            width: 100%;
            display: flex;
            justify-content: flex-end;
        }
    }

    @media (max-width: 575px) {
        .header-topbar{
            align-items: center;
        }
        .navbar-brand-box.mv {
            padding: 0 0 0 15px;
            margin-right: 10px;
        }

        .navbar-header {
            padding-right: 0;
        }

        .btn-neg-m {
            margin-right: -5px;
        }

        .topbar-new-desktop {
            display: none;
        }

        .topbar-new-mob {
            display: flex;
        }
        .topbar-new-mob button{
            padding: .47rem 6px;
        }
        .navbar-header .dropdown .dropdown-menu.switch-dropdownmenu{
            left: 15%!important;
            top: 25%!important;
        }
        .btnbar.mv{
            padding: 0 !important;
        }
        .inner-flex-end {
            padding-right: 20px;
        }
    }

    button.swal2-confirm.swal2-styled{
        background: #71ea31 !important;
    }
    .nav-right-margin{
        margin-right: 200px;
    }
</style>

<header id="page-topbar">
    <div class="navbar-header">
        <div class="d-flex header-topbar align-items-center">
            <!-- LOGO -->
            <div class="navbar-brand-box dv">
                <a href="https://www.valyoux.io/" class="logo">
                    <span class="float-left logo-lg ml-4">
                        <img src="<?php echo e(URL::asset('/assets/images/valyou_x_black_logo.svg')); ?>" alt="" height="27">
                    </span>
                </a>
            </div>
            <div class="navbar-brand-box mv">
                <a href="https://www.valyoux.io/" class="logo">
                    <span class="logo-xs">
                        <img src="<?php echo e(URL::asset('/assets/images/valyou_x_black_logo.svg')); ?>" alt="" height="27">
                    </span>
                </a>
            </div>
            <?php
            if (auth()->user()->wallet !='') {
                $wallet = auth()->user()->wallet;
            } else {
                $wallet = '0.0';
            }
            ?>
            <div class="inner-flex-end topbar-mobile">
                <div class=" mr-2 topbar-new topbar-new-mob">
                    <div class="dropdown">
                        <button type="button" class="btn header-item noti-icon waves-effect" data-toggle="dropdown" id="totalbalance">
                            <!--<i class="mdi mdi-wallet"></i>-->
                            <img src="<?php echo e(asset('assets/images/valyoux/wallet-1.svg')); ?>" width="20">
                        </button>
                        <div class="dropdown-menu dropdown-menu-right">
                            <p class="m-0 py-1">Total Balance: $ <?php echo e($wallet); ?> VXD</p>
                        </div>
                    </div>
                    <div class="dropdown d-inline-block">
                        <button type="button" class="btn header-item noti-icon waves-effect">
                            <a class="nav-link msg-link" href="<?php echo e(url('chat')); ?>">
                                <img src="<?php echo e(asset('assets/images/valyoux/message icon.svg')); ?>" width="20">
                                <span class="badge badge-danger badge-pill">3</span>
                            </a>
                        </button>
                    </div>

                    <?php
                	
                    if ($user->roles->contains(2)) {
                	
                    $image = asset('assets/images/valyoux/artist.svg');
                    $url='admin-profile';
                    $title = 'Artist';
                	$artist=Artist::where(['user_id'=>$user->id])->first();
                	$user_image = isset($artist->photo) ? asset($artist->photo) : asset('/assets/images/users/avatar-1.jpg');
                    } elseif ($user->roles->contains(3)) {
                	$user = auth()->user();
                    $image = asset('assets/images/valyoux/investor.svg');
                    $title = 'Investor';
                    $url='investor';
                	$user_image = isset($user->avatar) ? asset($user->avatar) : asset('/assets/images/users/avatar-1.jpg');
                    } elseif ($user->roles->contains(4)) {
                	
                    $image = asset('assets/images/valyoux/business.svg');
                    $title = 'Business';
                    $url='business-profile';
                	$business=Business::where(['user_id'=>$user->id])->first();
                	$user_image = isset($business->photo) ? asset($business->photo) : asset('/assets/images/users/avatar-1.jpg');
                    } else {
                    $admin=1;
                    $image = asset('assets/images/valyoux/accountSwitch.svg');
                    $title = 'Admin';
                    $url='/';
                	$user_image = isset($user->avatar) ? asset($user->avatar) : asset('/assets/images/users/avatar-1.jpg');
                    }
                    ?>
                	
                    <div class="dropdown d-inline-block">
                        <button type="button" class="btn header-item noti-icon waves-effect" id="page-header-notifications-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                            <img src="<?php echo e(asset($image)); ?>" alt="<?php echo e(asset($image)); ?>" title="<?php echo e($title); ?>" width="25" />
                        </button>
                        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right p-0 switch-dropdownmenu" aria-labelledby="page-header-notifications-dropdown" style="position: absolute; transform: translate3d(-274px, 70px, 0px); top: 0px; left: 0px; will-change: transform;" x-placement="bottom-end">
                            <div data-simplebar="init" style="max-height: 230px;">
                                <div class="simplebar-wrapper" style="margin: 0px;">
                                    <div class="simplebar-height-auto-observer-wrapper">
                                        <div class="simplebar-height-auto-observer"></div>
                                    </div>
                                    <div class="simplebar-mask">
                                        <div class="simplebar-offset" style="right: -17px; bottom: 0px;">
                                            <div class="simplebar-content-wrapper" style="height: auto; overflow: hidden scroll;">
                                                <div class="simplebar-content" style="padding: 0px;">
                                                    <a href="<?php echo e(route('admin.role.switch',['role_id' => 2])); ?>" class="text-reset notification-item">
                                                        <div class="media">
                                                            <div class="avatar-xs mr-3">
                                                                <span class="avatar-title rounded-circle font-size-16">
                                                                    <img src="<?php echo e(asset('assets/images/valyoux/artist.svg')); ?>" alt="<?php echo e(asset('assets/images/valyoux/artist.svg')); ?>" width="16" />
                                                                </span>
                                                            </div>
                                                            <div class="media-body">
                                                                <h5>Artist</h5>
                                                            </div>
                                                        </div>
                                                    </a>
                                                    <a href="<?php echo e(route('admin.role.switch',['role_id' => 4])); ?>" class="text-reset notification-item">
                                                        <div class="media">
                                                            <div class="avatar-xs mr-3">
                                                                <span class="avatar-title rounded-circle font-size-16">
                                                                    <img src="<?php echo e(asset('assets/images/valyoux/business.svg')); ?>" alt="<?php echo e(asset('assets/images/valyoux/business.svg')); ?>" width="16" />
                                                                </span>
                                                            </div>
                                                            <div class="media-body">
                                                                <h5>Business</h5>
                                                            </div>
                                                        </div>
                                                    </a>
                                                    <a href="<?php echo e(route('admin.role.switch',['role_id' => 3])); ?>" class="text-reset notification-item">
                                                        <div class="media">
                                                            <div class="avatar-xs mr-3">
                                                                <span class="avatar-title rounded-circle font-size-16">
                                                                    <img src="<?php echo e(asset('assets/images/valyoux/investor.svg')); ?>" alt="<?php echo e(asset('assets/images/valyoux/investor.svg')); ?>" width="16" />
                                                                </span>
                                                            </div>
                                                            <div class="media-body">
                                                                <h5>Investor</h5>
                                                            </div>
                                                        </div>
                                                    </a>
                                                    <?php if($user->is_admin): ?>
                                                     <a href="<?php echo e(route('admin.role.switch',['role_id' => 1])); ?>" class="text-reset notification-item">
                                                        <div class="media">
                                                            <div class="avatar-xs mr-3">
                                                                <span class="avatar-title rounded-circle font-size-16">
                                                                    <img src="<?php echo e(asset('assets/images/valyoux/accountSwitch.svg')); ?>" alt="<?php echo e(asset('assets/images/valyoux/accountSwitch.svg')); ?>" width="16" />
                                                                </span>
                                                            </div>
                                                            <div class="media-body">
                                                                <h5>Admin</h5>
                                                            </div>
                                                        </div>
                                                    </a>
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="simplebar-placeholder" style="width: auto; height: 386px;"></div>
                                </div>
                                <div class="simplebar-track simplebar-horizontal" style="visibility: hidden;">
                                    <div class="simplebar-scrollbar" style="transform: translate3d(0px, 0px, 0px); display: none;"></div>
                                </div>
                                <div class="simplebar-track simplebar-vertical" style="visibility: visible;">
                                    <div class="simplebar-scrollbar" style="transform: translate3d(0px, 0px, 0px); display: block; height: 137px;"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="dropdown d-inline-block">
                        <a href="<?php echo e($url); ?>" class="btn header-item waves-effect">
                            <img class="rounded-circle header-profile-user user-avatar-obj-fit-cover" src="<?php echo e($user_image); ?>"
                                 alt="Header Avatar">
                            <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
                        </a>
                    </div>
                </div>

                <button type="button" class="btn btn-sm px-3 font-size-16 header-item waves-effect btnbar mv vertical-menu-btn btn-neg-m">
                    <i class="fa fa-fw fa-bars"></i>
                </button>
            </div>

            <nav class="navbar navbar-expand-lg navbar-light nav-right-margin">
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo e($url); ?>">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo e(url('account-balance')); ?>">Bank</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo e(url('market')); ?>">Market</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo e(route('admin.social-media')); ?>">Social Media</a>
                        </li>
                        
                        <li class="nav-item">
                            <a href="<?php echo e(route('admin.watch')); ?>" class="nav-link">Watch & Earn</a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo e(route('admin.listenandearn')); ?>" class="nav-link">Listen & Earn</a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo e(url('store')); ?>" class="nav-link">Store</a>
                        </li>
                        
                        <?php if(request()->route()->getName() == 'admin.investor'): ?>
                        <li class="nav-item">
                            

                        </li>
                        <?php endif; ?>
                    </ul>
                </div>
            </nav>
            <div class="topbar-desktop">
                <div class="mr-2 topbar-new topbar-new-desktop">
                    <div class="dropdown">
                        <button type="button" class="btn header-item noti-icon waves-effect" data-toggle="dropdown" id="totalbalance">
                            <img src="<?php echo e(asset('assets/images/valyoux/wallet-1.svg')); ?>" width="20">
                        </button>
                        <div class="dropdown-menu dropdown-menu-right align-left dropnewstuff">
                            <p class="m-0 py-2"><a href="deposit" class="nav-link" >Deposit Balance: $ <?php echo e($wallet); ?> VXD</a></p>

                        </div>
                    </div>
                    <div class="dropdown d-inline-block">
                        <button type="button" class="btn header-item noti-icon waves-effect">
                            <a class="nav-link msg-link" href="<?php echo e(url('chat')); ?>">
                                <img src="<?php echo e(asset('assets/images/valyoux/message icon.svg')); ?>" width="20">
                                <span class="badge badge-danger badge-pill">3</span>
                            </a>
                        </button>
                    </div>
                    <!-- notification start -->
                    <div class="dropdown d-inline-block">
                    <button type="button" class="btn header-item noti-icon waves-effect" id="page-header-notifications-dropdown"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="bx bx-bell bx-tada"></i>
                        <span class="badge badge-danger badge-pill"></span>
                    </button>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right p-0" aria-labelledby="page-header-notifications-dropdown" style="position: absolute; transform: translate3d(-274px, 70px, 0px); top: 0px; left: 0px; will-change: transform;" x-placement="bottom-end">
                        <div data-simplebar="init" style="max-height: 350px;">
                            <div class="simplebar-wrapper" style="margin: 0px;">
                                <div class="simplebar-height-auto-observer-wrapper">
                                    <div class="simplebar-height-auto-observer"2></div>
                                </div>
                                <div class="simplebar-mask">
                                    <div class="simplebar-offset" style="right: -17px; bottom: 0px;">
                                        <div class="simplebar-content-wrapper" style="height: auto; overflow: hidden scroll;">
                                        <!--  <h6 class="mt-0 mb-1">Notifications</h6> -->
                                            <div class="simplebar-content" style="padding: 0px;">

                                            <?php $__currentLoopData = $notification; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <?php
                                            $html ='';

                                            if($row->status == 0){
                                                $class = 'unread';
                                            }else{
                                                $class = 'read';
                                            }
                                            ?>
                                                <a href="" class="text-reset notification-item  <?php echo e($class); ?>" >
                                                    <div class="media">
                                                            <img class="mr-3 rounded-circle avatar-xs"  src="<?php echo e(asset($row['from_user']['avatar'])); ?>" alt="<?php echo e(asset('assets/images/valyoux/artist.svg')); ?>" width="16" />
                                                        <div class="media-body">
                                                        <div class="font-size-12 text-muted">
                                                            <p class="notification_text"><?php echo e($row->notification_text); ?></p>
                                                            <?php if($row->status == 0){ ?>
                                                            <img class="notification_image" src="<?php echo e(URL::asset('/assets/images/valyoux/message icon.svg')); ?>" width="20">
                                                            <?php  }else{ ?>
                                                            <img class="notification_image" src="<?php echo e(URL::asset('/assets/images/valyoux/open.svg')); ?>" width="20">
                                                            <?php }?>
                                                        </div>
                                                        </div>
                                                    </div>
                                                </a>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                            <a href="<?php echo e(route('admin.notifications')); ?>"><p>View All</p></a>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="simplebar-placeholder" style="width: auto; height: 386px;"></div>
                            </div>
                            <div class="simplebar-track simplebar-horizontal" style="visibility: hidden;">
                                <div class="simplebar-scrollbar" style="transform: translate3d(0px, 0px, 0px); display: none;"></div>
                            </div>
                            <div class="simplebar-track simplebar-vertical" style="visibility: visible;">
                                <div class="simplebar-scrollbar" style="transform: translate3d(0px, 0px, 0px); display: block; height: 137px;"></div>
                            </div>
                        </div>
                    </div>
                    </div>
                    <!-- notification end -->
                    <div class="dropdown d-inline-block">
                        <button type="button" class="btn header-item noti-icon waves-effect" id="page-header-notifications-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                            <img src="<?php echo e($image); ?>" width="25" title="<?php echo e($title); ?>" alt="" />
                        </button>
                        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right p-0" aria-labelledby="page-header-notifications-dropdown" style="position: absolute; transform: translate3d(-274px, 70px, 0px); top: 0px; left: 0px; will-change: transform;" x-placement="bottom-end">
                            <div data-simplebar="init" style="max-height: 230px;">
                                <div class="simplebar-wrapper" style="margin: 0px;">
                                    <div class="simplebar-height-auto-observer-wrapper">
                                        <div class="simplebar-height-auto-observer"></div>
                                    </div>
                                    <div class="simplebar-mask">
                                        <div class="simplebar-offset" style="right: -17px; bottom: 0px;">
                                            <div class="simplebar-content-wrapper" style="height: auto; overflow: hidden scroll;">
                                                <div class="simplebar-content" style="padding: 0px;">
                                                    <a href="<?php echo e(route('admin.role.switch',['role_id' => 2])); ?>" class="text-reset notification-item">
                                                        <div class="media">
                                                            <div class="avatar-xs mr-3">
                                                                <span class="avatar-title rounded-circle font-size-16">
                                                                    <img src="<?php echo e(asset('assets/images/valyoux/artist.svg')); ?>" alt="<?php echo e(asset('assets/images/valyoux/artist.svg')); ?>" width="16" />
                                                                </span>
                                                            </div>
                                                            <div class="media-body">
                                                                <h5>Artist</h5>
                                                            </div>
                                                        </div>
                                                    </a>
                                                    <a href="<?php echo e(route('admin.role.switch',['role_id' => 4])); ?>" class="text-reset notification-item">
                                                        <div class="media">
                                                            <div class="avatar-xs mr-3">
                                                                <span class="avatar-title rounded-circle font-size-16">
                                                                    <img src="<?php echo e(asset('assets/images/valyoux/business.svg')); ?>" alt="<?php echo e(asset('assets/images/valyoux/business.svg')); ?>" width="16" />
                                                                </span>
                                                            </div>
                                                            <div class="media-body">
                                                                <h5>Business</h5>
                                                            </div>
                                                        </div>
                                                    </a>
                                                    <a href="<?php echo e(route('admin.role.switch',['role_id' => 3])); ?>" class="text-reset notification-item">
                                                        <div class="media">
                                                            <div class="avatar-xs mr-3">
                                                                <span class="avatar-title rounded-circle font-size-16">
                                                                    <img src="<?php echo e(asset('assets/images/valyoux/investor.svg')); ?>" alt="<?php echo e(asset('assets/images/valyoux/investor.svg')); ?>" width="16" />
                                                                </span>
                                                            </div>
                                                            <div class="media-body">
                                                                <h5>Investor</h5>
                                                            </div>
                                                        </div>
                                                    </a>
                                                   <?php if($user->is_admin): ?>
                                                     <a href="<?php echo e(route('admin.role.switch',['role_id' => 1])); ?>" class="text-reset notification-item">
                                                        <div class="media">
                                                            <div class="avatar-xs mr-3">
                                                                <span class="avatar-title rounded-circle font-size-16">
                                                                    <img src="<?php echo e(asset('assets/images/valyoux/accountSwitch.svg')); ?>" alt="<?php echo e(asset('assets/images/valyoux/accountSwitch.svg')); ?>" width="16" />
                                                                </span>
                                                            </div>
                                                            <div class="media-body">
                                                                <h5>Admin</h5>
                                                            </div>
                                                        </div>
                                                    </a>
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="simplebar-placeholder" style="width: auto; height: 386px;"></div>
                                </div>
                                <div class="simplebar-track simplebar-horizontal" style="visibility: hidden;">
                                    <div class="simplebar-scrollbar" style="transform: translate3d(0px, 0px, 0px); display: none;"></div>
                                </div>
                                <div class="simplebar-track simplebar-vertical" style="visibility: visible;">
                                    <div class="simplebar-scrollbar" style="transform: translate3d(0px, 0px, 0px); display: block; height: 137px;"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="dropdown d-inline-block">
                        <a href="<?php echo e($url); ?>" class="btn header-item waves-effect">
                            <img class="rounded-circle header-profile-user user-avatar-obj-fit-cover" src="<?php echo e($user_image); ?>"
                                 alt="Header Avatar">
                            <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
                        </a>
                    </div>
                </div>
                <button type="button" class="btn btn-sm px-3 font-size-16 header-item waves-effect btnbar dv vertical-menu-btn mr-3">
                    <i class="fa fa-fw fa-bars"></i>
                </button>
            </div>
        </div>
    </div>
	
    <?php echo $__env->yieldContent('bottom-navbar'); ?>
</header>
<?php /**PATH /home/testvps/public_html/resources/views/layouts/topbar.blade.php ENDPATH**/ ?>