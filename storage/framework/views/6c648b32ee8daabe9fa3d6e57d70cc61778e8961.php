<?php

use App\Models\Country;
?>
<?php $__env->startSection('pageCSS'); ?>
<link rel="stylesheet" type="text/css" href="<?php echo e(URL::asset('assets/libs/select2/select2.min.css')); ?>">
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.css">
<link rel="stylesheet" type="text/css" href="<?php echo e(URL::asset('assets/css/pages/promote-music.css')); ?>">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo e(URL::asset('assets/libs/tagify/tagify.css')); ?>">
<link rel="stylesheet" type="text/css" href="<?php echo e(URL::asset('assets/libs/intl-tel-input/css/intlTelInput.css')); ?>">

<!-- Stylesheet for the Gear Player, keep this one. -->
<link rel="stylesheet" href="<?php echo e(URL::asset('assets/gear_app/css/gear.css')); ?>">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('css'); ?>
<style>

/* @media  only screen and (max-width: 768px) {
    .for_web{display: none!important;}
    .for_mob{display: flex!important;}
    .btn_mbl{display: block!important    ;}
    .btn_web{display: none!important;}
   
}
@media  only screen and (min-width: 600px) {
    .for_mob{display: none!important;}
    .for_web{display: flex!important;}
    .btn_mbl{display: none!important;}
    .btn_web{display: block!important;}
} */
/* media */
/* Extra small devices (phones, 600px and down) */
@media  only screen and (max-width: 600px) {
    .for_web{display: none!important;}
    .for_mob{display: flex!important;}
    .btn_mbl{display: block!important    ;}
    .btn_web{display: none!important;}
}

/* Small devices (portrait tablets and large phones, 600px and up) */
@media  only screen and (min-width: 600px) {
    .for_web{display: none!important;}
    .for_mob{display: flex!important;}
    .btn_mbl{display: block!important    ;}
    .btn_web{display: none!important;}
}

/* Medium devices (landscape tablets, 768px and up) */
@media  only screen and (min-width: 768px) {
    .for_web{display: none!important;}
    .for_mob{display: flex!important;}
    .btn_mbl{display: block!important    ;}
    .btn_web{display: none!important;}
}

/* Large devices (laptops/desktops, 992px and up) */
@media  only screen and (min-width: 992px) {
    .for_mob{display: none!important;}
    .for_web{display: flex!important;}
    .btn_mbl{display: none!important;}
    .btn_web{display: block!important;}
}

/* Extra large devices (large laptops and desktops, 1200px and up) */
@media  only screen and (min-width: 1200px) {
    .for_mob{display: none!important;}
    .for_web{display: flex!important;}
    .btn_mbl{display: none!important;}
    .btn_web{display: block!important;}
}
/* end media */

.green-gradient {
    background: linear-gradient(80.48deg,#00ffc2 7.18%,#00b8ba 97.46%);
}
/* video	 */
.social-media-profile-wrap {
    background-color: #ffffff;
}
.sm-left-desc span {
    color: #000;
    font-size: 13px;
    margin-left: 10px;
    margin-top: 5px;
    display: flex;
}
.for_mob h5 {
    font-size: 13px !important;
    width: max-content;
    margin-top: 12px !important;
}
.for_mob span {
    font-size: 13px;
    margin-top: 0px;

}
.for_mob p{
    font-size: 13px;
    display: flex;
    margin-top: 18px;
    margin-left: 10px;
    color: black;
}

.for_mob h2{
    font-size: 9px;
    margin-top: 19px;
    width: 81px;
}
.artist-name {
    color: #FF4182 !important;
    margin-bottom: 5px !important;
    font-weight: 600 !important;
    font-size: 23px !important;
    line-height: 1.2 !important;
    width: 172px;
    margin-left: 6px;
}
.sm-left-desc h5 {
    font-size: 20px;
    border: 1px solid #FF4182;
    border-radius: 25px;
    padding: 6px;
    margin-top: -4px;
    margin-left: 15px;
    display: flex;
}
.sm-left-desc span {
    color: #000;
}
.color-white{
    color: black;
}
.sm-left-desc .for_web{
    display: flex !important;
}
		.vw_single{ margin-bottom: 0px;}
	 	.my-video {
        	width: 100%;
        	height: auto;
        	object-fit: cover;
        	z-index: -100;
    	}
/*  end video*/
	.iti{width:100%!important;}
    /* btn close section */
    .modal-header .btn-close {
        padding: 0.5rem 0.5rem;
        margin: -0.5rem -0.5rem -0.5rem auto;
    }
    .sm-left-wrap{
        /* overflow-x: scroll !important; */
        width: 100%;
    }

    .btn-close:hover {
        color: #000;
        text-decoration: none;
        opacity: .75;
    }

    .btn-close {
        -webkit-box-sizing: content-box;
        box-sizing: content-box;
        width: 1em;
        height: 1em;
        padding: .25em .25em;
        color: #000;
        background: transparent url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='%23000'%3e%3cpath d='M.293.293a1 1 0 011.414 0L8 6.586 14.293.293a1 1 0 111.414 1.414L9.414 8l6.293 6.293a1 1 0 01-1.414 1.414L8 9.414l-6.293 6.293a1 1 0 01-1.414-1.414L6.586 8 .293 1.707a1 1 0 010-1.414z'/%3e%3c/svg%3e") center/1em auto no-repeat;
        border: 0;
        border-radius: .25rem;
        opacity: .5
    }

    /* user list with avatar */
    /* Suggestions items */
    .tagify__dropdown.users-list .tagify__dropdown__item {
        padding: .5em .7em;
        display: grid;
        grid-template-columns: auto 1fr;
        gap: 0 1em;
        grid-template-areas: "avatar name"
            "avatar email";
    }

    .tagify__dropdown.users-list .tagify__dropdown__item:hover .tagify__dropdown__item__avatar-wrap {
        transform: scale(1.2);
    }

    .tagify__dropdown.users-list .tagify__dropdown__item__avatar-wrap {
        grid-area: avatar;
        width: 36px;
        height: 36px;
        border-radius: 50%;
        overflow: hidden;
        background: #EEE;
        transition: .1s ease-out;
    }

    .tagify__dropdown.users-list img {
        width: 100%;
        vertical-align: top;
    }

    .tagify__dropdown.users-list strong {
        grid-area: name;
        width: 100%;
        align-self: center;
    }

    .tagify__dropdown.users-list span {
        grid-area: email;
        width: 100%;
        font-size: .9em;
        opacity: .6;
    }

    .tagify__dropdown.users-list .addAll {
        border-bottom: 1px solid #DDD;
        gap: 0;
    }

    .users-list .tagify__tag {
        white-space: nowrap;
    }

    .users-list .tagify__tag:hover .tagify__tag__avatar-wrap {
        transform: scale(1.6) translateX(-10%);
    }

    .users-list .tagify__tag .tagify__tag__avatar-wrap {
        width: 16px;
        height: 16px;
        white-space: normal;
        border-radius: 50%;
        background: silver;
        margin-right: 5px;
        transition: .12s ease-out;
    }

    .users-list .tagify__tag img {
        width: 100%;
        vertical-align: top;
        pointer-events: none;
    }

    /* section end */

    .select2-container--default .select2-results__option[aria-selected=true] {
        background-color: #dee2e7 !important;
    }

    .tagify--outside {
        border: 0 !important;
    }

    .tagify--outside .tagify__input {
        order: -1;
        flex: 100%;
        border: 1px solid var(--tags-border-color);
        margin-bottom: 1em;
        transition: .1s;
        padding: 0.65rem 0.75rem;
        border-radius: 3px;
    }

    .tagify__input {
        margin: 0 !important;
        margin-bottom: 0.5rem !important;
    }


    .tagify--outside-sms .tagify__input {
        display: none;
    }

    .tagify--outside .tagify__input:hover {
        border-color: var(--tags-hover-border-color);
    }

    .tagify--outside.tagify--focus .tagify__input {
        transition: 0s;
        border-color: var(--tags-focus-border-color);
    }

    .add-shadow-after-selected {
        box-shadow: 0 1.5px 4px 0 rgba(0, 0, 0, 0.3) !important;
        border-radius: 28px;
    }

    .add-shadow-after-selected-425 {
        box-shadow: 0 1.5px 4px 0 rgba(0, 0, 0, 0.3) !important;
        border-radius: 17px;
    }
    /* end tagify */

    .card-body {
        padding: 1rem;
    }
	
	.vw_head{
    		margin-left: 12px!important;
    	}
    @media (max-width: 1024px) {
    	.vw_head{
    		margin-left: 12px!important;
    	}
        .tab-select a {
            padding-left: 35px;
            padding-right: 35px;
        }
    	.vw_single {
            margin-bottom: 5px !important;
        }
    	.my-video {
            width: 100%;
            height: auto;
            object-fit: cover;
            z-index: -100;
        }

        .vws_caption a {
            font-size: 25px;
        }

        .vws_caption p {
            font-size: 18px !important;
            line-height: 150%;
        }
    	
    }

    @media (max-width: 768px) {
        .tab-select a {
            padding-left: 30px;
            padding-right: 30px;
        }

        .followers-wrapper-main .tab-select a {
            padding-left: 25px;
            padding-right: 25px;
        }
    	
    }

    .main-tab-link.active::before {
        content: '';
        width: 50px;
        height: 2px;
        background: #ff0093;
        display: block;
        position: absolute;
        bottom: -6px;
        left: 50%;
        transform: translateX(-50%);
    }

    tbody tr td .team span {
        padding-left: 0%;
    }

    /* a.active{
            color: #FF0093 !important;
            border-bottom: 2px solid #FF0093;
        } */
    .tab-select .active {
        text-decoration: none !important;
        color: #FF0093 !important;
        position: relative !important;
    }

    .tab-select .active::before {
        content: '';
        width: 100px;
        height: 2px;
        background: #ff0093;
        display: block;
        position: absolute;
        bottom: -6px;
        left: 50%;
        transform: translateX(-50%);
    }

    .tab-select input {
        border-bottom: none;
    }

    .invest-new img.rounded-circle.avatar-xm.m-1 {
        width: 60px !important;
       
    }

    .logo img {
        max-width: 101px;
    }

    .tab-input {}

    .tab-input input {
        margin-top: -4px;
    }

    .footer {
        position: fixed;
    }

    .tab-content {
        padding-top: 25px;
    }

    .tab-select {
        padding-bottom: 30px;
    }

    @media (max-width: 575px) {
    	.vw_head{
        	margin-left: 12px!important;
  		}

        .font-12 {
            font-size: 12px;
        }
    }

    @media (max-width: 525px) {
    	.vw_head{
        	margin-left: 12px!important;
  		}
        .promoteCover h4 {
            font-size: 14px;
            font-weight: 600;
            margin-bottom: 5px;
            line-height: 1;
            margin-top: 2px;
            margin-left: -5px !important;
            padding-bottom: 8px;
        }

        .text-muted p {
            margin-bottom: 4px !important;
        }

        .promoteCover p {
            font-size: 12px !important;
            line-height: 1;
            margin-left: -5px !important;
        }

        .promoteCover .btn-follow {
            margin-top: 17px;
            float: right;
            padding: 2px 9px !important;
        }

        .promoteCover .investment {
            padding-left: 0;
            padding-right: 0;
            text-align: center;
        }

        .promoteCover .song-valyou {
            text-align: center;
        }
    	.parent-for-video video {
    		max-height: 214px!important;
		}
    }
	
  @media (max-width: 425px) {
  		.chat-input{
        	width: 90%!important;
        	padding-right:60px!important;
        	margin-left: 60px!important;
  		}
  		.spycustcomment{
  			width: 90%!important;
        	margin-left: -25px!important;
  		}
  		.vw_head{
        	margin-left: 12px!important;
  		}
        .vws_caption a {
            font-size: 16px;
        }

        .my-video {
            width: 100%;
            height: auto;
            object-fit: cover;
            z-index: -100;
        }

        .vws_caption p {
            margin: 3px 0 3px 0;
            color: #656565;
            font-size: 12px !important;
            line-height: 110%;
        }
  		
    }
    .pt-3{
        padding-top: 5px!important;
    }
	   .videothumbnail_wrapper {
/*         padding: 10px; */
        /* border: 1px solid #ccc; */
        -webkit-box-shadow: 0px 2px 2px #eee;
        box-shadow: 0px 2px 2px #eee;
       	
    }

    .videothumbnail_wrapper .vw_head {
        margin-bottom: 20px;
    }

    .videothumbnail_wrapper .vw_head h4 {
        margin: 0;
        font-size: 18px;
        font-weight: 600;
        margin-bottom: 5px;
        line-height: 1.2;
        color: #000;
    }

    .videothumbnail_wrapper .vw_head h6 {
        margin: 0;
        font-size: 13px;
        color: #656565;
        line-height: 1.2;
    }

input.form-control::placeholder {
    color: #bbb;
}
.tab-select {
    padding-bottom: 30px;
    overflow-x: scroll;
}




 .searchresultmain, .activesearchr{
	display: block;
    box-shadow: 0 0.5px 1px 0 rgba(0,0,0,.3)!important;
    cursor:pointer;
    float: left;
     padding-bottom: 7px !important;
}
.searimg{
float: left;


}
.btn-pdning button{
    padding: 3px 22px !important;
    font-size: 10px !important;
}
    
    .mains3{
        display: block;
    border: 1px solid #b4b4b4;
    border-radius: 20px;
    float: left;
     height: 323px;
/*     height: 400px; */
    overflow-x: unset;
    overflow-y: scroll;
    
    
    }

.searimg > img{
width:50px !important;
height:50px !important;
    margin-top: 7px;

}

.searcon{
/* 	margin-top: 10px; */
/*     float: left; */
  
margin-top: 11px;

}
.searcon p{
margin-bottom: 0px;

}
    
    .main {
   	box-shadow: 0 0.5px 4px 0 rgba(0,0,0,.3)!important;
    display: block;
    float: left;
  
   
}

.sm-left-wrap  {
  /* border: 3px solid black;
  border-radius: 5px; */
  overflow: hidden;
  background-color: white;
  z-index: 999;
}

 .scroll-marqee{
  /* animation properties */
  -moz-transform: translateX(100%);
  -webkit-transform: translateX(100%);
  transform: translateX(100%);
  
  -moz-animation: my-animation 15s linear infinite;
  -webkit-animation: my-animation 15s linear infinite;
  animation: my-animation 15s linear infinite;
}


/* for Firefox */
@-moz-keyframes my-animation {
  from { -moz-transform: translateX(100%); }
  to { -moz-transform: translateX(-100%); }
}

/* for Chrome */
@-webkit-keyframes my-animation {
  from { -webkit-transform: translateX(100%); }
  to { -webkit-transform: translateX(-100%); }
}

@keyframes  my-animation {
  from {
    -moz-transform: translateX(100%);
    -webkit-transform: translateX(100%);
    transform: translateX(100%);
  }
  to {
    -moz-transform: translateX(-100%);
    -webkit-transform: translateX(-100%);
    transform: translateX(-100%);
  }
  }
</style>
<?php $__env->stopSection(); ?>



<?php $__env->startSection('title'); ?> Market <?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>


<div class="row">
    <div class="col-lg-12">
        <div class="card mb-0">
            <div class="card-body promoteCover">
                <div class="row align-items-center">
                    <div class="col-6 col-md-4 col-lg-5">
                        <div class="media">
                            <div class="mr-3 align-self-center">
                                <img src="<?php echo e(isset(Auth::user()->avatar) ? asset(Auth::user()->avatar) : asset('/assets/images/users/avatar-1.jpg')); ?>" alt="" class="avatar-md rounded-circle ">
                            </div>
                            <div class="media-body align-self-center">
                                <div class="text-muted">
                                    <h4 class="mb-1 ml-4" style="font-family: 'Roboto', sans-serif; color: #050F2F; font-weight:500;  "><?php echo e(Auth::user()->first_name.' '.Auth::user()->last_name); ?></h4>
                                        <p class="mb-2 ml-4" style="font-family: 'Roboto', sans-serif; color: #ffffff; font-weight:300; ">Music Fan</p>
                                        <p class="mb-2 ml-4" style="font-family: 'Roboto', sans-serif; color: #ffffff; font-weight:400; ">Investor</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-6 col-md-8 col-lg-7">
                        <div class="row">
                            <div class="col-md-8 col-lg-9">
                                <div class="text-lg-center mt-lg-0">
                                    <div class="row">
                                        <div class="col-12 col-sm-12 col-lg-12">
                                             <div class="row">
                                                <div class="col-6 col-sm-6 col-lg-6 investment">
                                                    <p class="text-muted text-truncate mb-2 font-12 " style="color:#ffffff !important; font-family: 'Roboto', sans-serif; font-weight:400; ">Artist Investments</p>
                                                    <p class="mb-0 total_investments" style="color:#ffffff !important; font-family: 'Roboto', sans-serif; font-weight:600; font-size: 25px ">0</p>
                                                </div>
                                                 <div class="col-6 col-sm-6 col-lg-6 pad_right-0 song-valyou">
                                                    <p class="text-muted text-truncate mb-2 font-12 " style="color:#ffffff !important; font-family: 'Roboto', sans-serif; font-weight:400; ">Song Valyou's</p>
                                                    <p class="mb-0 buy_total" style="color:#ffffff !important; font-family: 'Roboto', sans-serif; font-weight:600;  font-size: 25px">0</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="col-md-4 col-lg-3 align-self-center text-center">
                                <button class="btn btn-follow" type="button" aria-haspopup="true">
                                    Follow
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="nav nav-tabs tab-select" id="nav-tab" role="tablist">
    <a class="" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Valyou Audio Playlist</a>
    <a class="active" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Valyou Video Playlist</a>
    <a class="" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Investments</a>
    <a class="" id="nav-listen-earn-tab" data-toggle="tab" href="#nav-listen-earn" role="tab" aria-controls="nav-listen-earn" aria-selected="false">Listen & Earn</a>
    <a class="" id="nav-watch-earn-tab" data-toggle="tab" href="#nav-watch-earn" role="tab" aria-controls="nav-watch-earn" aria-selected="false">Watch & Earn</a>
    <a class="" id="nav-profile-tab1" data-toggle="tab" href="#nav-profile1" role="tab" aria-controls="nav-profile1" aria-selected="false">Profile</a>
    <a class="" id="nav-follower-tab" data-toggle="tab" href="#nav-follower" role="tab" aria-controls="nav-follower" aria-selected="false">Followers</a>
    <a class="" id="nav-following-tab" data-toggle="tab" href="#nav-following" role="tab" aria-controls="nav-following" aria-selected="false">Following</a>
    <a class="" id="nav-rewards-tab" data-toggle="tab" href="#nav-rewards" role="tab" aria-controls="nav-rewards" aria-selected="false">Rewards</a>
    <a class="" id="nav-sign-artist-tab" data-toggle="tab" href="#nav-sign-artist" role="tab" aria-controls="nav-sign-artist" aria-selected="false">Sign Artist</a>
</div>

<div class="tab-content" id="myTabContent">
<div class="tab-pane fade" id="nav-listen-earn" role="tabpanel" aria-labelledby="nav-listen-earn-tab">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title mb-4">Please listen songs and earn VXD</h4>
            </div>
        </div>
    </div>
    <div class="tab-pane fade" id="nav-watch-earn" role="tabpanel" aria-labelledby="nav-watch-earn-tab">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title mb-4">Please watch videos and earn VXD</h4>
                <div class="all_social_videos"></div>
            </div>
        </div>
    </div>
      <!-- end scroll bar for desktop -->

    
	
      <div class="tab-pane fade invest-new" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-nowrap table-centered mb-0">
                        <thead>
                            <tr>
                                <th scope="col">Artist</th>
                                <th scope="col">Holdings</th>
                                <th scope="col">Current Price</th>
                                <th scope="col">Invested</th>
                                <th scope="col">Value</th>
                                <th scope="col">Dividends</th>
                            	<th scope="col">Your Share</th>
                                <th scope="col" colspan="2">Value</th>
                            </tr>
                        </thead>
                        <tbody class="investor_list">
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="tab-pane fade invest-new" id="nav-follower" role="tabpanel" aria-labelledby="nav-follower-tab">
        <div class="card">
            <div class="card-body">

                <div class="followers-wrapper-main">
                    <div class="container mb-3 mt-3">
                        <div class="nav nav-tabs tab-select" id="nav-tab" role="tablist">
                            <a class="active" id="nav-followers-tab" data-toggle="tab" href="#nav-followers" role="tab" aria-controls="nav-followers" aria-selected="true">
                                Followers
                                <span class="total_follower"></span>
                            </a>
                            <a class="" id="nav-following-tab" data-toggle="tab" href="#nav-following" role="tab" aria-controls="nav-profile" aria-selected="false">
                            Following
                            <span class="total_following"></span>
                            </a>
                            <a class="" id="nav-vip-tab" data-toggle="tab" href="#nav-vip" role="tab" aria-controls="nav-contact" aria-selected="false">VIP</a>
                            </a>
                        </div>
                        <br>

                        <div class="tab-content" id="myTabContent1">
                            <div class="tab-pane fade show active" id="nav-followers" role="tabpanel" aria-labelledby="nav-followers-tab">
                                <div class="row follower_list">
                                </div>
                            </div>
                            <div class="tab-pane fade" id="nav-following" role="tabpanel" aria-labelledby="nav-following-tab">
                                <div class="row following_list">
                                </div>
                            </div>
                            <div class="tab-pane fade " id="nav-vip" role="tabpanel" aria-labelledby="nav-vip-tab">
                                VIP
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="tab-pane fade " id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
        <div class="row">
            <div class="col-lg-12">
                <div class="table-responsive">
                    <table class="table project-list-table table-nowrap table-centered table-borderless">
                        <tbody>
                            <tr>
                                <td>
                                    <div class="team" data-gearPath="<?php echo e(asset('assets/gear_app/json/audiojungle.json')); ?>">
                                        <a href="javascript: void(0);" class="team-member d-inline-block" data-toggle="tooltip" data-placement="top" title="" data-original-title="Bobby">
                                            <img src="<?php echo e(asset('assets/images/play-button.svg')); ?>" class="rounded-circle avatar-xm m-1  play-button" alt="">
                                        </a>
                                    </div>
                                </td>
                                <td>
                                    <div class="team" data-gearPath="<?php echo e(asset('assets/gear_app/json/audiojungle.json')); ?>">
                                        <h3 class="text-truncate font-size-20"><a href="#" class="text-dark"><b>1.Dark Fantasy</b></a></h3>
                                    </div>
                                </td>
                               
                                <td class="w-25">
                                    <div class="row">
                                      
                                        <div class="col-md-4">
                                            <p class="m-0">04:00</p>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <a href="<?php echo e(route('promote-music')); ?>">
                                        <button type="button" class="btn valyou-o-btn"> Promote</button>
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="tab-pane fade" id="nav-profile1" role="tabpanel" aria-labelledby="nav-profile-tab1">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title mb-4">Personal Information    
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#editUserModal"><i class="fas fa-pen"></i></button>
                </h4>
                <div class="table-responsive">
                    <table class="table mb-0">
                        <tbody>
                            <tr>
                                <th scope="row">Full Name :</th>
                                <td><?php echo e(Auth::user()->first_name.' '.Auth::user()->last_name); ?></td>
                            </tr>
                            <tr>
                                <th scope="row">Mobile :</th>
                                <td><?php echo e(Auth::user()->phone_number); ?></td>
                            </tr>
                            <tr>
                                <th scope="row">E-mail :</th>
                                <td><?php echo e(Auth::user()->email); ?></td>
                            </tr>
                            <tr>
                                <th scope="row">Location :</th>
                                <td><?php
                                    if (Auth::user()->country) {
                                        $country = country::where(['cnt_code' => Auth::user()->country])->first();
                                        echo $country->cnt_name;
                                    }
                                    ?></td>
                            </tr>
                            <tr>
                                <th scope="row">Date of Birth :</th>
                                <td><?php echo e(Auth::user()->dob); ?></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="tab-pane fade show active" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
    <div class="row">
    <!--  load videos -->
     		<div id="watch_div" class="col-lg-8 col-xl-8 col-md-12 col-12 col-sm-12">
    <?php if($single_videos): ?>
    <?php $__currentLoopData = $single_videos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            
    <?php if(isset($item->artist['id'])): ?>
    <div class="social-post <?php echo e($item->id); ?>">
    <div class="margin-n">
        <div>
        
            <div class="row">
            
                <div class="col-lg-12 col-12">
                    
                    <div class="row">
                        
                        <div class="col-lg-9 col-9 profile_img_name">
                            <?php
                                if ($item->artist['category'] == 0) {
                                    $category = 'EOI Profile';
                                } else if ($item->artist['category'] == 1) {
                                    $category =  'Upcoming';
                                } else if ($item->artist['category'] == 2) {
                                    $category =  'Professional';
                                } else if ($item->artist['category'] == 3) {
                                    $category =  'Major Artist';
                                }
                                if ($item['video_id'] > 0) {
                                    $media = VideoUploads::find($item['video_id']);
                                    $c_user = User::find($item->user_id);

                                    $full_name = $c_user->first_name . ' ' . $c_user->last_name;
                                    $brand = $full_name . ' shared ' .  $item->artist['brand'] . ' video';
                                } else {
                                    $brand = $item->artist['brand'];
                                }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-12 col-12 padding-n parent-for-video">
                    <video controls id="video<?php echo e($item->id); ?>" src="<?php echo e(asset($item->name)); ?>" data-video="<?php echo e($item->artist->brand); ?>" class="video" type="video/mp4" controls playsinline></video>
			 </div>
        </div>
    </div>
    
     
    <!-- Button Start-->
    <section class="valyou-button btn_web pt-3">
        <div class="main-btn d-flex justify-content-between align-items-center" >
                <div class="main-valyou-button d-flex align-items-center share-comments" data-commentid="<?php echo e($item->id); ?>">
                    <button class="comment-button d-flex align-items-center mr-2 ">
                        <span class="text-img mr-2">
                        <img class="mb-1 share-box-image img-fluid" src="<?php echo e(asset('assets/images/comments.svg')); ?>">
                        </span>
                        <span class="comment">COMMENTS</span>
                    </button>

                    <button class="comment-button d-flex align-items-center mr-2 share-promote-song" data-promoteid="<?php echo e($item->id); ?>">
                        <span class="text-img mr-2">
                        <img class="mb-1 share-box-image img-fluid" style="width: 75%;" src="<?php echo e(asset('assets/images/promote.svg')); ?>">
                        </span>
                        <span class="comment">PROMOTE</span>
                    </button>

                    
                </div>

                <div class="main-valyou-button  d-flex align-items-center ">
                <button class="comment-button d-flex align-items-center mr-2 share-valyou-music" data-valyouid="<?php echo e($item->id); ?>" style="height: 35px;">
                        
                        <span class="comment" style="color:#000" >VALYOU SONG</span>
                    </button>
                    <button class="comment-button comment-btn d-flex align-items-center full-width" style="height:35px; border-color:#00FEC2" onclick="location.href='artist/profile/<?php echo isset($item->artist->id) ? $item->artist->id : '';?>'">
                        
                        <span class="comment" style="color: #ffff;">INVEST IN ARTIST</span>
                    </button>
                </div>
            </div>

        </section>

        <!--Button for mobile view-->
        <div class="for-mobile-view btn_mbl">
            
        <section class="valyou-button mobile pt-3 card">
            <div class="main-btn d-flex justify-content-between align-items-center" >
                <div class="main-valyou-button d-flex align-items-center">
                    <button class="comment-button d-flex align-items-center mr-2  share-comments" data-commentid="<?php echo e($item->id); ?>" style="border: none;">
                        <span class="text-img mr-2">
                        <img class="mb-1 share-box-image img-fluid" src="<?php echo e(asset('assets/images/comments.svg')); ?>">
                        </span>
                        <span class="comment">COMMENTS</span>
                    </button>

                    <button class="comment-button d-flex align-items-center mr-2 share-promote-song" data-promoteid="<?php echo e($item->id); ?>" style="border: none;">
                        <span class="text-img mr-2">
                        <img class="mb-1 share-box-image img-fluid" style="width: 75%;" src="<?php echo e(asset('assets/images/promote.svg')); ?>">
                        </span>
                        <span class="comment">PROMOTE</span>
                    </button>

                    <button class="comment-button d-flex align-items-center mr-2 share-valyou-music" data-valyouid="<?php echo e($item->id); ?>" style="height: 29px; padding:12px;">
                        <!-- <span class="text-img mr-2">
                        <!-- <img class="mb-1 share-box-image img-fluid" src="<?php echo e(asset('assets/images/comments.svg')); ?>"> -->
                        </span> 
                        <span class="comment" >VALYOU SONG</span>
                    </button>
                </div>
            </section>

            <!--Artist Start-->
            <div class="row btn_mbl" style="margin-top: -62px;">
            <div class="col-lg-12">
            <!--new desc text-->
            <div class="mt-5 social-media-profile-wrap">
                <div class="sm-left-wrap">
                    <img src="<?php echo e(URL::asset($item->artist->photo ?? '')); ?>" alt="" class="avatar-md avatar-md-cover rounded-circle" style="z-index: 999;">
                    <div class="sm-left-desc for_web mt-4">
                        <span><?php echo e(isset($item->artist->brand) ? $item->artist->brand : ''); ?></span>
                        <span><i class="fa fa-clock-o" aria-hidden="true"></i> <?php echo e(isset($item->artist->about) ? $item->artist->about : ''); ?></span>
                        <h5>Artist share price: <span class="color-white">$<?php echo e(numberformat(@$item->artist->stock_value)); ?> VXD </span>
                            <?php if($item->artist->change_stock > 0): ?>
                                <img class="uploading-section-artist-icon-img " src="<?php echo e(asset('assets/images/valyoux/green_arrow_price_going_up.svg')); ?>">
                                <span class="text-green">+ <?php echo e(numberformat(@$item->artist->change_stock)); ?>%</span>
                        </h5>
                            <?php else: ?>
                                <img class="uploading-section-artist-icon-img" src="<?php echo e(asset('assets/images/valyoux/pink_arrow_circle_down.svg')); ?>">
                                <span class="text-danger"><?php echo e(signFormat(@$item->artist->change_stock,0)); ?>%</span></h5>
                        <?php endif; ?>
                    </div>
                    <div class="sm-left-desc  for_mob">
                        <h2 class="sm-left-wrap"><?php echo e(isset($item->artist->brand) ? $item->artist->brand : ''); ?></h2>
                        <div class="scroll-marqee d-flex">
                        <p ><i class="fa fa-clock-o" aria-hidden="true"></i> <?php echo e(isset($item->artist->about) ? $item->artist->about : ''); ?></p>
                        <h5 >Artist share price: <span class="color-white mr-1">$<?php echo e(numberformat(@$item->artist->stock_value)); ?> VXD </span>
                            <?php if($item->artist->change_stock > 0): ?>
                                <img class="uploading-section-artist-icon-img" src="<?php echo e(asset('assets/images/valyoux/green_arrow_price_going_up.svg')); ?>">
                                <span class="text-green"> <?php echo e(numberformat(@$item->artist->change_stock)); ?>%</span>
                        </h5>

                    <?php else: ?>
                        <img class="uploading-section-artist-icon-img ml-2" src="<?php echo e(asset('assets/images/valyoux/pink_arrow_circle_down.svg')); ?>">
                        <span class="text-danger"> <?php echo e(signFormat(@$item->artist->change_stock,0)); ?>%</span></h5>

                    <?php endif; ?>
                        </div>
                    </div>
                </div>
                
                </div>
             </div>
            </div>
            
                <!--Artist end-->
                <div class="main-valyou-button btn_mbl button-mobile d-flex align-items-center" >
                    <button class="comment-button comment-btn d-flex align-items-center full-width" style="border-color:#00FEC2" onclick="location.href='artist/profile/<?php echo isset($item->artist->id) ? $item->artist->id : '';?>'" >
                        <!-- <span class="text-img mr-2">
                        <img class="mb-1 share-box-image img-fluid" src="<?php echo e(asset('assets/images/comments.svg')); ?>">
                        </span> -->
                        <span class="comment">INVEST IN ARTIST</span>
                    </button>
                </div>
            </div>
</div>          
                <!--End Button mobile view-->
            <style>
                .valyou-button .comment-button{ border-radius: 5px; border: 1px solid rgba(255, 0, 147, 0.5);  background-color:#fff;}
                .valyou-button .text-img {width:30px;}
                .valyou-button .comment{font-size:11px; color:gray; font-weight:bold;}
                .main-valyou-button .comment-btn{ height: 49px;background: linear-gradient(80.48deg,#00ffc2 7.18%,#00b8ba 97.46%);}
                .button-mobile .comment-button {width:100%;justify-content: center;border-radius:5px;font-size: 16px;color: #fff;font-weight:bold;border: 1px solid rgba(255, 0, 147, 0.5);}

                /* @media  only screen and (max-width: 1800px) {
                    .for-mobile-view { display: none;}        
                } */
                @media  only screen and (max-width: 1305px){
                    .valyou-button .comment-button { padding: 4px 26px;}
                    .valyou-button .text-img {width:28px;}
                    .valyou-button .comment{font-size:10px !important;}
                }

                @media  only screen and (max-width: 1199px){
                    .valyou-button .comment-button {padding: 9px 6px;}
                }

                @media  only screen and (max-width: 991px){
                    .main-btn{  display:block !important;}
                    .main-valyou-button { justify-content:space-between; margin-bottom:7px;}
                    .comment-button.full-width{ width:100%;  justify-content:center; align-item:center;}
                }
            </style>

            <!--Button End-->
            <div style="display: none;" id="valyou-music-section-<?php echo e($item->id); ?>" class="valyou-music-hide valyou-media">
                <!-- <button type="button" class="close" data-dismiss="modal" style="padding: 1rem; padding-top: 0; margin: -1rem -1rem -1rem auto; font-size: 2rem; font-weight: 700;  line-height: 1; text-shadow: 0 1px 0 #fff; opacity: .5;">
                                <span>×</span>
                            </button> -->
                <div class="container">
            <div class="btn-margin">
                <div class="row">
                    <div class="col-1 col-md-1">
                    </div>
                    <?php $artist_poits = artistPoints(); ?>
                    <?php $__currentLoopData = $artist_poits; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-2 col-md-2">
                        <button type="button" class=" btn btn-light radio dollar-price " data-toggle="tooltip" data-placement="top" data-original-title="This song is nice, might be a hit, Valyou for $<?php echo e($row->amount); ?>." class="btn btn-light radio" value="<?php echo e($row->amount); ?>">$<?php echo e($row->amount); ?></button>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
            <div class="container col-md-12 text-center mb-5 proceed-valyou-song-div">
                <p class="text-danger error_message">Please choose an option above</p>
                <button type="button" class="btn valyou-g-btn add_value spycust-margin-10" value="<?php echo e($item->id); ?>">Proceed to Valyou Song</button>
                <button type="button" class="btn valyou-close-btn spycust-margin-10" value="<?php echo e($item->id); ?>">Cancel</button>

                    </div>
                </div>
            </div>
            <div style="display: none" class="mt-3" id="comments-section-<?php echo e($item->id); ?>">
                <div class="w-100 user-chat">
                    <div class="card">
                <div class="col-md-12 container">
                    <ul class="list-unstyled mt-3" data-simplebar style="max-height: 470px;">

                        <?php $__currentLoopData = $item->comments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $comment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li id="comment_<?php echo e($comment->id); ?>">
                            <!--new working -->
                            <div class="row">
                                <div class="col-12 single-comment">
                                    <img src="<?php echo e(URL::asset(\App\User::find($comment->user_id)->avatar)); ?>" alt="" class="avatar-md avatar-md-cover rounded-circle sc-img img-fluid">
                                    <div class="sc-inner">
                                        <p class="sc-name artist-comment-name"><?php echo e(\App\User::find($comment->user_id)->first_name); ?> <?php echo e(\App\User::find($comment->user_id)->last_name); ?></p>
                                        <p class="sc-comment"><?php echo e($comment->comment); ?> </p>
                                        <?php if(auth()->user()->id == $comment->user_id): ?>
                                        <p class="ml-auto">
                                            <a href="javascript:;" class="sc-name ml-2 edit_comment" data-id="<?php echo e($comment->id); ?>"> <i class=" fa fa-edit"></i> </a>
                                            <a href="javascript:;" class="sc-name ml-2 delete_comment" data-id="<?php echo e($comment->id); ?>"> <i class=" fa fa-trash"></i> </a>
                                        </p>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                            <hr class="mb-2">
                        </li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                </div>
                <div class="p-3 chat-input-section">
                    <div class="row text-center">
                        <div class="col-md-2 col-2">
                            <div class="mr-3">
                                <img src="<?php echo e(URL::asset(auth()->user()->avatar)); ?>" alt="" class="avatar-md avatar-md-cover rounded-circle ">
                            </div>
                        </div>
                        <div class="col-md-8 mt-3 mt-0-mobile col-8 pad-left-0">
                            <div class="position-relative spycustcomment" >
                                <input type="text" class="form-control chat-input" name="comment-<?php echo e($item->id); ?>" placeholder="Enter Comment...">
                            </div>
                        </div>

                        <div class="col-md-2 col-2 spycustcomment">

                            <img style="transform: rotate(90deg); margin-top:6px;" class="mr-3 comment-btn" data-media="<?php echo e($item->id); ?>" src="<?php echo e(asset('assets/images/valyoux/green_arrow_price_going_up.svg')); ?>">
                        </div>
                    </div>
                </div>
            </div>
            </div>
            </div>
            <form method="post" action="<?php echo e(url('promotevideo/'.$item->id)); ?>" id="promotevideo-form-<?php echo e($item->id); ?>">
                <?php echo csrf_field(); ?>
                <div style="display: none" id="promote-song-section-<?php echo e($item->id); ?>">
                    <div class="container">
                <!-- Set Promotion Budget -->
                <div class="row card">
                    <div class="modal-header">
                        <h5 class="modal-title">Invite your friends, new fans & potential investors to listen to your song</h5>
                        <button type="button" class="btn-close close-btn-promote-song-section" data-bs-dismiss="modal" data-promoteid="<?php echo e($item->id); ?>" aria-label="Close"></button>
                    </div>
                    <div class="card-body price-card mb-5 text-center">
                        <div class="row">
                            <div class="col-md-3"></div>
                            <div class="col-md-6">
                                <div class="input-price-div">
                                    <p>How much money would you like to spend to promote?</p>
                                </div>
                            </div>
                            <div class="col-md-3"></div>
                        </div>
                        <div class="quantity">
                            <input type='button' value='-' id="minus" class='minus' field='quantity' />
                            <span class="input-qty pt-3"></span>
                            <input type='text' id="quantity<?php echo e($item->id); ?>" name='quantity' value='50' class='qty input-qty dollar' />
                            <input type='button' value='+' id="plus" class='plus ' field='quantity' />
                        </div>
                    </div>

                    <div class="col-md-12 text-center mb-3">
                        
                            <img src="<?php echo e(asset('assets/images/PReward per listen .svg')); ?>" class="img-fluid listen_img">
                            <div class="card-body">
                                <p class="card-text">Reward each listener. Amount you would like to pay each listener. <br> Minimum 1VXD</p>
                                <input type='button' value='-' class='minus' id="minus2" field='quantity2' />
                                <span class="input-qty pt-3"></span>
                                <input type='text' id="quantity2<?php echo e($item->id); ?>" name='quantity2' value='2' class='qty input-qty pt-3' />
                                <input type='button' value='+' class='plus ' id="plus2" field='quantity2' />
                                <p class="card-text">In that case you want to spend $50 budget.<br>If you pay each listener $2, you can reach 25 people.<br>
                                    Else you pay one listener $50, you can reach 1 person.<br>To reach more people Increase your budget or reduce the amount you would like to pay each listener</p>
                            </div>
                        
                    </div>

                    <!-- Set investors, invitations emails, Phone numbers -->
                    <div class="mb-3">
                        <div id="valyoux<?php echo e($item->id); ?>" class="col-12 valyoux users-list">
                            <h2 class="fw-600">Investors on Valyou X </h2>
                            <input name='investor-list'id="investorlist<?php echo e($item->id); ?>" value='abatisse2@nih.gov, Justinian Hattersley'  class='tagify--outside'>
                        </div>
                        
                        
                        <div id="email<?php echo e($item->id); ?>" class="col-12">
                            <h2 class="fw-600">Promote via Email</h2>
                            <input name='email-promote' id="promoteemail<?php echo e($item->id); ?>" class='tagify--outside' placeholder='Please enter Multi Emails'>
                        </div>

                        <div id="email<?php echo e($item->id); ?>" class="col-12">
                            <h2 class="fw-600">Promote via SMS</h2>
                            <input id="phone<?php echo e($item->id); ?>" type="tel" name="phone-promote" data-id="<?php echo e($item->id); ?>" class="form-control" />
                            <div style="width: 100%;" class="mb-2"></div>
                            <input name='sms-promote' id="promotephone<?php echo e($item->id); ?>" class='tagify--outside tagify--outside-sms' placeholder='Please enter Multi SMS'>
                        </div>
                     </div>
                    <div class="col-md-12 mb-2">
                        <button type="button" class="btn post-now-btn float-right mb-3 promote-btn-<?php echo e($item->id); ?>" onclick="promoteVideo('<?php echo e($item->id); ?>')"> Promote </button>
                    </div>
                </div>
                
                 </div>
                </div>
            </form>
            </div>

 <?php endif; ?>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php else: ?>
   <?php $__currentLoopData = $videos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <?php if($key==0): ?>
<div class="social-post <?php echo e($item->id); ?>">
    <div class="margin-n">
        <div>
        
            <div class="row">
            
                <div class="col-lg-12 col-12">
                    
                    <div class="row">
                        
                        <div class="col-lg-9 col-9 profile_img_name">
                            <?php
                                if ($item->artist['category'] == 0) {
                                    $category = 'EOI Profile';
                                } else if ($item->artist['category'] == 1) {
                                    $category =  'Upcoming';
                                } else if ($item->artist['category'] == 2) {
                                    $category =  'Professional';
                                } else if ($item->artist['category'] == 3) {
                                    $category =  'Major Artist';
                                }
                                if ($item['video_id'] > 0) {
                                    $media = VideoUploads::find($item['video_id']);
                                    $c_user = User::find($item->user_id);

                                    $full_name = $c_user->first_name . ' ' . $c_user->last_name;
                                    $brand = $full_name . ' shared ' .  $item->artist['brand'] . ' video';
                                } else {
                                    $brand = $item->artist['brand'];
                                }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-12 col-12 padding-n parent-for-video">
                    <video controls id="video<?php echo e($item->id); ?>" src="<?php echo e(asset($item->name)); ?>" data-video="<?php echo e($item->artist->brand); ?>" class="video" type="video/mp4" controls playsinline></video>
			 </div>
        </div>
    </div>
    
     
    <!-- Button Start-->
    <section class="valyou-button btn_web pt-3 btn-pdning">
        <div class="main-btn d-flex justify-content-between align-items-center" >
                <div class="main-valyou-button d-flex align-items-center share-comments" data-commentid="<?php echo e($item->id); ?>">
                    <button class="comment-button d-flex align-items-center mr-2 ">
                        <span class="text-img mr-2">
                        <img class="mb-1 share-box-image img-fluid" src="<?php echo e(asset('assets/images/comments.svg')); ?>">
                        </span>
                        <span class="comment">COMMENTS</span>
                    </button>

                    <button class="comment-button d-flex align-items-center mr-2 share-promote-song" data-promoteid="<?php echo e($item->id); ?>">
                        <span class="text-img mr-2">
                        <img class="mb-1 share-box-image img-fluid" style="width: 75%;" src="<?php echo e(asset('assets/images/promote.svg')); ?>">
                        </span>
                        <span class="comment">PROMOTE</span>
                    </button>

                    
                </div>

                <div class="main-valyou-button  d-flex align-items-center ">
                <button class="comment-button d-flex align-items-center mr-2 share-valyou-music" data-valyouid="<?php echo e($item->id); ?>" style="height: 35px;">
                        
                        <span class="comment" style="color:#000" >VALYOU SONG</span>
                    </button>
                    <button class="comment-button comment-btn d-flex align-items-center full-width" style="height:35px; border-color:#00FEC2" onclick="location.href='artist/profile/<?php echo e(isset($item->artist->id) ? $item->artist->id : ''); ?>'">
                        
                        <span class="comment" style="color: #ffff;">INVEST IN ARTIST</span>
                    </button>
                </div>
            </div>

        </section>

        <!--Button for mobile view-->
        <div class="for-mobile-view btn_mbl">
            
        <section class="valyou-button mobile pt-3 card">
            <div class="main-btn d-flex justify-content-between align-items-center" >
                <div class="main-valyou-button d-flex align-items-center ">
                    <button class="comment-button d-flex align-items-center mr-2 share-comments" data-commentid="<?php echo e($item->id); ?>" style="border: none;">
                        <span class="text-img mr-2">
                        <img class="mb-1 share-box-image img-fluid" src="<?php echo e(asset('assets/images/comments.svg')); ?>">
                        </span>
                        <span class="comment">COMMENTS</span>
                    </button>

                    <button class="comment-button d-flex align-items-center mr-2 share-promote-song" data-promoteid="<?php echo e($item->id); ?>" style="border: none;">
                        <span class="text-img mr-2">
                        <img class="mb-1 share-box-image img-fluid" style="width: 75%;" src="<?php echo e(asset('assets/images/promote.svg')); ?>">
                        </span>
                        <span class="comment">PROMOTE</span>
                    </button>

                    <button class="comment-button d-flex align-items-center mr-2 share-valyou-music" data-valyouid="<?php echo e($item->id); ?>" style="height: 29px; padding:12px;">
                       
                        <span class="comment" >VALYOU SONG</span>
                    </button>
                </div>
            </section>

            <!--Artist Start-->
            <div class="row btn_mbl" style="margin-top: -62px;">
            <div class="col-lg-12">
            <!--new desc text-->
            <div class="mt-5 social-media-profile-wrap">
                <div class="sm-left-wrap">
                    <img src="<?php echo e(URL::asset($item->artist->photo ?? '')); ?>" alt="" class="avatar-md avatar-md-cover rounded-circle" style="z-index: 999;">
                    <div class="sm-left-desc for_web mt-4" style="">
                        <span><?php echo e(isset($item->artist->brand) ? $item->artist->brand : ''); ?></span>
                        <span><i class="fa fa-clock-o" aria-hidden="true"></i> <?php echo e(isset($item->artist->about) ? $item->artist->about : ''); ?></span>
                        <h5>Artist share price: <span class="color-white">$<?php echo e(numberformat(@$item->artist->stock_value)); ?> VXD </span>
                            <?php if($item->artist->change_stock > 0): ?>
                                <img class="uploading-section-artist-icon-img " src="<?php echo e(asset('assets/images/valyoux/green_arrow_price_going_up.svg')); ?>">
                                <span class="text-green">+ <?php echo e(numberformat(@$item->artist->change_stock)); ?>%</span>
                        </h5>
                            <?php else: ?>
                                <img class="uploading-section-artist-icon-img" src="<?php echo e(asset('assets/images/valyoux/pink_arrow_circle_down.svg')); ?>">
                                <span class="text-danger"><?php echo e(signFormat(@$item->artist->change_stock,0)); ?>%</span></h5>
                        <?php endif; ?>
                    </div>
                    <div class="sm-left-desc  for_mob">
                        <h2 class="sm-left-wrap"><?php echo e(isset($item->artist->brand) ? $item->artist->brand : ''); ?></h2>
                        <div class="scroll-marqee d-flex">
                        <p ><i class="fa fa-clock-o" aria-hidden="true"></i> <?php echo e(isset($item->artist->about) ? $item->artist->about : ''); ?></p>
                        <h5 >Artist share price: <span class="color-white mr-1">$<?php echo e(numberformat(@$item->artist->stock_value)); ?> VXD </span>
                            <?php if($item->artist->change_stock > 0): ?>
                                <img class="uploading-section-artist-icon-img" src="<?php echo e(asset('assets/images/valyoux/green_arrow_price_going_up.svg')); ?>">
                                <span class="text-green"> <?php echo e(numberformat(@$item->artist->change_stock)); ?>%</span>
                        </h5>

                    <?php else: ?>
                        <img class="uploading-section-artist-icon-img ml-2" src="<?php echo e(asset('assets/images/valyoux/pink_arrow_circle_down.svg')); ?>">
                        <span class="text-danger"> <?php echo e(signFormat(@$item->artist->change_stock,0)); ?>%</span></h5>

                    <?php endif; ?>
                        </div>
                    </div>
                </div>
                
                </div>
             </div>
            </div>
            
                <!--Artist end-->
                <div class="main-valyou-button btn_mbl button-mobile d-flex align-items-center" >
                    <button class="comment-button comment-btn d-flex align-items-center full-width" style="border-color:#00FEC2" onclick="location.href='artist/profile/<?php echo isset($item->artist->id) ? $item->artist->id : '';?>' ">
                        <!-- <span class="text-img mr-2">
                        <img class="mb-1 share-box-image img-fluid" src="<?php echo e(asset('assets/images/comments.svg')); ?>">
                        </span> -->
                        <span class="comment">INVEST IN ARTIST</span>
                    </button>
                </div>
            </div>
</div>          
                <!--End Button mobile view-->
            <style>
                .valyou-button .comment-button{ border-radius: 5px; border: 1px solid rgba(255, 0, 147, 0.5); padding:10px 30px;  background-color:#fff;}
                .valyou-button .text-img {width:30px;}
                .valyou-button .comment{font-size:12px; color:gray; font-weight:bold;}
                .main-valyou-button .comment-btn{ height: 49px;background: linear-gradient(80.48deg,#00ffc2 7.18%,#00b8ba 97.46%);}
                .button-mobile .comment-button {width:100%;justify-content: center;border-radius:5px;font-size: 16px;color: #fff;font-weight:bold;border: 1px solid rgba(255, 0, 147, 0.5);}

                /* @media  only screen and (max-width: 1800px) {
                    .for-mobile-view { display: none;}        
                } */
                @media  only screen and (max-width: 1305px){
                    .valyou-button .comment-button { padding: 4px 26px;}
                    .valyou-button .text-img {width:28px;}
                    .valyou-button .comment{font-size:10px;}
                }

                @media  only screen and (max-width: 1199px){
                    .valyou-button .comment-button {padding: 9px 6px;}
                }

                @media  only screen and (max-width: 991px){
                    .main-btn{  display:block !important;}
                    .main-valyou-button { justify-content:space-between; margin-bottom:7px;}
                    .comment-button.full-width{ width:100%;  justify-content:center; align-item:center;}
                }
            </style>

            <!--Button End-->
            <div style="display: none;" id="valyou-music-section-<?php echo e($item->id); ?>" class="valyou-music-hide valyou-media">
                <!-- <button type="button" class="close" data-dismiss="modal" style="padding: 1rem; padding-top: 0; margin: -1rem -1rem -1rem auto; font-size: 2rem; font-weight: 700;  line-height: 1; text-shadow: 0 1px 0 #fff; opacity: .5;">
                                <span>×</span>
                            </button> -->
                <div class="container">
            <div class="btn-margin">
                <div class="row">
                    <div class="col-1 col-md-1">
                    </div>
                    <?php $artist_poits = artistPoints(); ?>
                    <?php $__currentLoopData = $artist_poits; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-2 col-md-2">
                        <button type="button" class=" btn btn-light radio dollar-price " data-toggle="tooltip" data-placement="top" data-original-title="This song is nice, might be a hit, Valyou for $<?php echo e($row->amount); ?>." class="btn btn-light radio" value="<?php echo e($row->amount); ?>">$<?php echo e($row->amount); ?></button>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
            <div class="container col-md-12 text-center mb-5 proceed-valyou-song-div">
                <p class="text-danger error_message">Please choose an option above</p>
                <button type="button" class="btn valyou-g-btn add_value spycust-margin-10" value="<?php echo e($item->id); ?>">Proceed to Valyou Song</button>
                <button type="button" class="btn valyou-close-btn spycust-margin-10" value="<?php echo e($item->id); ?>">Cancel</button>

                    </div>
                </div>
            </div>
            <div style="display: none" class="mt-3" id="comments-section-<?php echo e($item->id); ?>">
                <div class="w-100 user-chat">
                    <div class="card">
                <div class="col-md-12 container">
                    <ul class="list-unstyled mt-3" data-simplebar style="max-height: 470px;">

                        <?php $__currentLoopData = $item->comments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $comment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li id="comment_<?php echo e($comment->id); ?>">
                            <!--new working -->
                            <div class="row">
                                <div class="col-12 single-comment">
                                    <img src="<?php echo e(URL::asset(\App\User::find($comment->user_id)->avatar)); ?>" alt="" class="avatar-md avatar-md-cover rounded-circle sc-img img-fluid">
                                    <div class="sc-inner">
                                        <p class="sc-name artist-comment-name"><?php echo e(\App\User::find($comment->user_id)->first_name); ?> <?php echo e(\App\User::find($comment->user_id)->last_name); ?></p>
                                        <p class="sc-comment"><?php echo e($comment->comment); ?> </p>
                                        <?php if(auth()->user()->id == $comment->user_id): ?>
                                        <p class="ml-auto">
                                            <a href="javascript:;" class="sc-name ml-2 edit_comment" data-id="<?php echo e($comment->id); ?>"> <i class=" fa fa-edit"></i> </a>
                                            <a href="javascript:;" class="sc-name ml-2 delete_comment" data-id="<?php echo e($comment->id); ?>"> <i class=" fa fa-trash"></i> </a>
                                        </p>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                            <hr class="mb-2">
                        </li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                </div>
                <div class="p-3 chat-input-section">
                    <div class="row text-center">
                        <div class="col-md-2 col-2">
                            <div class="mr-3">
                                <img src="<?php echo e(URL::asset(auth()->user()->avatar)); ?>" alt="" class="avatar-md avatar-md-cover rounded-circle ">
                            </div>
                        </div>
                        <div class="col-md-8 mt-3 mt-0-mobile col-8 pad-left-0">
                            <div class="position-relative spycustcomment" >
                                <input type="text" class="form-control chat-input" name="comment-<?php echo e($item->id); ?>" placeholder="Enter Comment...">
                            </div>
                        </div>

                        <div class="col-md-2 col-2 spycustcomment">

                            <img style="transform: rotate(90deg); margin-top:6px;" class="mr-3 comment-btn" data-media="<?php echo e($item->id); ?>" src="<?php echo e(asset('assets/images/valyoux/green_arrow_price_going_up.svg')); ?>">
                        </div>
                    </div>
                </div>
            </div>
            </div>
            </div>
            <form method="post" action="<?php echo e(url('promotevideo/'.$item->id)); ?>" id="promotevideo-form-<?php echo e($item->id); ?>">
                <?php echo csrf_field(); ?>
                <div style="display: none" id="promote-song-section-<?php echo e($item->id); ?>">
                    <div class="container">
                <!-- Set Promotion Budget -->
                <div class="row card">
                    <div class="modal-header">
                        <h5 class="modal-title">Invite your friends, new fans & potential investors to listen to your song</h5>
                        <button type="button" class="btn-close close-btn-promote-song-section" data-bs-dismiss="modal" data-promoteid="<?php echo e($item->id); ?>" aria-label="Close"></button>
                    </div>
                    <div class="card-body price-card mb-5 text-center">
                        <div class="row">
                            <div class="col-md-3"></div>
                            <div class="col-md-6">
                                <div class="input-price-div">
                                    <p>How much money would you like to spend to promote?</p>
                                </div>
                            </div>
                            <div class="col-md-3"></div>
                        </div>
                        <div class="quantity">
                            <input type='button' value='-' id="minus" class='minus' field='quantity' />
                            <span class="input-qty pt-3"></span>
                            <input type='text' id="quantity<?php echo e($item->id); ?>" name='quantity' value='50' class='qty input-qty dollar' />
                            <input type='button' value='+' id="plus" class='plus ' field='quantity' />
                        </div>
                    </div>

                    <div class="col-md-12 text-center mb-3">
                        
                            <img src="<?php echo e(asset('assets/images/PReward per listen .svg')); ?>" class="img-fluid listen_img">
                            <div class="card-body">
                                <p class="card-text">Reward each listener. Amount you would like to pay each listener. <br> Minimum 1VXD</p>
                                <input type='button' value='-' class='minus' id="minus2" field='quantity2' />
                                <span class="input-qty pt-3"></span>
                                <input type='text' id="quantity2<?php echo e($item->id); ?>" name='quantity2' value='2' class='qty input-qty pt-3' />
                                <input type='button' value='+' class='plus ' id="plus2" field='quantity2' />
                                <p class="card-text">In that case you want to spend $50 budget.<br>If you pay each listener $2, you can reach 25 people.<br>
                                    Else you pay one listener $50, you can reach 1 person.<br>To reach more people Increase your budget or reduce the amount you would like to pay each listener</p>
                            </div>
                        
                    </div>

                    <!-- Set investors, invitations emails, Phone numbers -->
                    <div class="mb-3">
                        <div id="valyoux<?php echo e($item->id); ?>" class="col-12 valyoux users-list">
                            <h2 class="fw-600">Investors on Valyou X </h2>
                            <input name='investor-list'id="investorlist<?php echo e($item->id); ?>" value='abatisse2@nih.gov, Justinian Hattersley'  class='tagify--outside'>
                        </div>
                        
                        
                        <div id="email<?php echo e($item->id); ?>" class="col-12">
                            <h2 class="fw-600">Promote via Email</h2>
                            <input name='email-promote' id="promoteemail<?php echo e($item->id); ?>" class='tagify--outside' placeholder='Please enter Multi Emails'>
                        </div>

                        <div id="email<?php echo e($item->id); ?>" class="col-12">
                            <h2 class="fw-600">Promote via SMS</h2>
                            <input id="phone<?php echo e($item->id); ?>" type="tel" name="phone-promote" data-id="<?php echo e($item->id); ?>" class="form-control" />
                            <div style="width: 100%;" class="mb-2"></div>
                            <input name='sms-promote' id="promotephone<?php echo e($item->id); ?>" class='tagify--outside tagify--outside-sms' placeholder='Please enter Multi SMS'>
                        </div>
                     </div>
                    <div class="col-md-12 mb-2">
                        <button type="button" class="btn post-now-btn float-right mb-3 promote-btn-<?php echo e($item->id); ?>" onclick="promoteVideo('<?php echo e($item->id); ?>')"> Promote </button>
                    </div>
                </div>
                
                 </div>
                </div>
            </form>
            </div>
                    <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php endif; ?>
            			
    		
            <!--  load end video-->
            <div id="watch_div2"  class="col-lg-4 col-xl-4 col-md-12 col-12 col-sm-12">
                <div class="videothumbnail_wrapper card" style=" overflow: auto; max-height:78vh!important;">
                    <div class="vw_head mt-3">
                        <h4>All Videos </h4>
                    </div>
                    <div class="all_videos">
                    	<?php if(count($videos)): ?>
                    		<?php $__currentLoopData = $videos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							<div class="vw_single" >
   				 				<div class="vws_video col-lg-6">
								<?php if(!empty($row->id)): ?>
            					<a href="investor?vid=<?php echo e(isset($row->id)?$row->id:''); ?>">
        						<?php else: ?>
            					<a href="socialmedia/details/<?php echo e(isset($row->id)?$row->id:''); ?>">
        						<?php endif; ?>
            					<?php if($row->audio_cover_image): ?>
                					<img class="my-video" src="<?php echo e(asset($row->audio_cover_image)); ?>">
            					<?php else: ?>
                				<video class = "my-video" controlsList="nodownload" src="<?php echo e(asset($row->name)); ?>" type="video/mp4"></video>
            					<?php endif; ?>
        						</a>
								</div>
    							<div class="vws_caption col-lg-6">
        						<h5>
        						<?php if(empty($row->id)): ?>
            					<a href="investor?vid=<?php echo e(isset($row->id)?$row->id:''); ?>">
        						<?php else: ?>
           						 <a href="socialmedia/details/<?php echo e(isset($row->id)?$row->id:''); ?>">
        						<?php endif; ?>
								 <?php echo e(isset($row->artist->brand)?$row->artist->brand:''); ?></a></h5>
       							 <p><?php echo e(isset($row->artist->about)?$row->artist->about:''); ?></p>
        						 <p class="font-size-12">Song Valyou: $<?php echo e(numberformat(@$row->artist->stock_value)); ?></p>
        						 <p class="font-size-12"><?php echo e(videoCount($row->id)); ?> views <?php echo e(time_format($row->created_at)); ?></p>
    							</div>
								</div>
							<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    	<?php else: ?>
                    	<div class="vw_single">No data found</div>
                    	<?php endif; ?>
               		 </div>
                </div>
            </div>
            </div>
            <!--  end videos    -->
       

        <!-- scroll bar for desktop -->
        <div class="row btn_web " style="margin-top:-41px">
        <div class="col-lg-12">
            <!--new desc text-->
            <div class="mt-5 social-media-profile-wrap">
            <img src="<?php echo e(URL::asset($item->artist->photo ?? '')); ?>" alt="" class="avatar-md avatar-md-cover rounded-circle">
            <h2 class="artist-name"><?php echo e(isset($item->artist->brand) ? $item->artist->brand : ''); ?></h2>   
            <div class="sm-left-wrap">
                    
                    
                <div class="sm-left-desc for_web mt-4">
                       
                    <div class="scroll-marqee" style="display: flex;">
                        <span><i class="fa fa-clock-o mr-2" aria-hidden="true" ></i> <?php echo e(isset($item->artist->about) ? $item->artist->about : ''); ?></span>
                        <span><i class="fa fa-music mr-2" aria-hidden="true"></i>Song Title:Started from the Bottom</span>
                        
                        <h5>Artist share price: <span class="color-white">$<?php echo e(numberformat(@$item->artist->stock_value)); ?> VXD </span>
                            <?php if($item->artist->change_stock > 0): ?>
                                <img class="uploading-section-artist-icon-img ml-2" src="<?php echo e(asset('assets/images/valyoux/green_arrow_price_going_up.svg')); ?>">
                                <span class="text-green">+ <?php echo e(numberformat(@$item->artist->change_stock)); ?>%</span>
                        </h5>
                        
                            <?php else: ?>
                                <img class="uploading-section-artist-icon-img" src="<?php echo e(asset('assets/images/valyoux/pink_arrow_circle_down.svg')); ?>">
                                <span class="text-danger"><?php echo e(signFormat(@$item->artist->change_stock,0)); ?>%</span></h5>
                        <?php endif; ?>
                    </div>
                    
                    <div class="sm-left-desc for_mob">
                        <h2><?php echo e(isset($item->artist->brand) ? $item->artist->brand : ''); ?></h2>
                        <p><i class="fa fa-clock-o" aria-hidden="true"></i> <?php echo e(isset($item->artist->about) ? $item->artist->about : ''); ?></p>
                        <h5>Artist share price: <span class="color-white">$<?php echo e(numberformat(@$item->artist->stock_value)); ?> VXD </span>
                            <?php if($item->artist->change_stock > 0): ?>
                                <img class="uploading-section-artist-icon-img ml-2" src="<?php echo e(asset('assets/images/valyoux/green_arrow_price_going_up.svg')); ?>">
                                <span class="text-green"> <?php echo e(numberformat(@$item->artist->change_stock)); ?>%</span>
                        </h5>

                        <?php else: ?>
                            <img class="uploading-section-artist-icon-img ml-2" src="<?php echo e(asset('assets/images/valyoux/pink_arrow_circle_down.svg')); ?>">
                            <span class="text-danger"> <?php echo e(signFormat(@$item->artist->change_stock,0)); ?>%</span></h5>

                        <?php endif; ?>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
      
   

        
<!--         edit modal user profile -->
        
        <div class="modal fade proceed_modal" id="editUserModal" aria-labelledby="editUserModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h4><b class="color-pinkk">Edit Profile</b></h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                	<form method="POST" action="<?php echo e(route('admin.update.user.profile')); ?>"  enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                    <input type="hidden" name="id" value="<?php echo e(Auth::user()->id); ?>">
                    <div class="form-group">
                            <label>First Name</label>
                            <input type="text" class="form-control " required="" value="<?php echo e(Auth::user()->first_name); ?>" name="first_name" id="first_name" placeholder="First Name">
                                                    </div>
                        <div class="form-group">
                            <label>Last Name</label>
                            <input type="text" class="form-control " required="" value="<?php echo e(Auth::user()->last_name); ?>" name="last_name" id="last_name" placeholder="Last Name">
                                                    </div>
                    
                    <div class="form-group">
                            <label>Mobile Number</label>
                            <input type="text" class="form-control" required="" value="<?php echo e(Auth::user()->phone_number); ?>" name="mobile" id="mobile" placeholder="Dob">
                        </div>
                      
                        <div class="form-group">
                            <label>Dob</label>
                            <input type="date" class="form-control" required="" value="<?php echo e(Auth::user()->dob); ?>" name="dob" id="dob" placeholder="Dob">
                        </div>
                        <div class="form-group">
                            <label>Profile</label>
                            <input type="file" class="form-control" required="" accept="image/*" value="<?php echo e(isset(Auth::user()->avatar) ? asset(Auth::user()->avatar) : asset('/assets/images/users/avatar-1.jpg')); ?>" name="avatar" id="avatar" placeholder="Profile">
                            
                        </div>
                        <div class="form-group">
                        <img id="blah" src="<?php echo e(isset(Auth::user()->avatar) ? asset(Auth::user()->avatar) : asset('/assets/images/users/avatar-1.jpg')); ?>" style="width: 50px;height: auto;border-radius:70px;">
                        </div>
                    
                        <div class="form-group">
                            <div>
                                <button id="submitUserProfile" class="btn btn-primary waves-effect waves-light mr-1">Submit</button>
                            </div>
                        </div>
                    </form>
                    
                </div>
            </div>
        </div>
    </div>
   
        

<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
<script src="<?php echo e(URL::asset('assets/libs/select2/select2.min.js')); ?>"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/multiselect/2.2.9/js/multiselect.js"></script>
<!--     <script src="<?php echo e(URL::asset('assets/js/pages/promote-music.js')); ?>"></script> -->
<script src="<?php echo e(URL::asset('assets/js/pages/custom-player.js')); ?>"></script>
<script src="<?php echo e(URL::asset('assets/libs/tagify/tagify.min.js')); ?>"></script>
<script src="<?php echo e(URL::asset('assets/libs/intl-tel-input/js/intlTelInput.js')); ?>"></script>
<script class="iti-load-utils" async="" src="<?php echo e(URL::asset('assets/libs/intl-tel-input/js/utils.js')); ?>"></script>

<!-- <script src="<?php echo e(URL::asset('assets/gear_app/js/jquery.gearplayer.libs.min.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('assets/gear_app/js/jquery.gearplayer.js')); ?>"></script> -->

<!-- <script src="<?php echo e(URL::asset('assets/gear_app/js/app.js')); ?>"></script> -->
<script>
    avatar.onchange = evt => {
  const [file] = avatar.files
  if (file) {
    blah.src = URL.createObjectURL(file)
  }
}
</script>
<script>
    $(document).ready(function() {
        // watch to earn
        loadmoreData(0, 'watch-to-earn');
        function loadmoreData(page, type) {
            $.ajax({
                url: "loadmoredata",
                type: "GET",
                cache: false,
                data: {
                    offset: page,
                    page_type: type
                },
                success: function(data) {
                    if (data) {
                        const data1 = JSON.parse(data);
                        $(".loadbtnvideos").hide();
                        $(".all_social_videos").append(data1.html);
                    }
                }
            });
        }
        $(document).on('click', '.added-feature .card .body-p', function() {
        if ($(window).width() <= 425) {
            $('.added-feature .card .body-p').removeClass('add-shadow-after-selected-425');
            $('.added-feature .card .body-p').removeClass('add-shadow-after-selected');
            $(this).addClass('add-shadow-after-selected-425');
        } else {
            $('.added-feature .card .body-p').removeClass('add-shadow-after-selected-425');
            $('.added-feature .card .body-p').removeClass('add-shadow-after-selected');
            $(this).addClass('add-shadow-after-selected');
        }
    });

    $(document).on('click', '.close-btn-promote-song-section', function() {
        let id = $(this).data('promoteid');
        $(`#promote-song-section-${id}`).css('display', 'none');
        $('.added-feature .card .body-p').removeClass('add-shadow-after-selected-425');
        $('.added-feature .card .body-p').removeClass('add-shadow-after-selected');
    });
	
    $(document).on('click','.valyou-close-btn', function(){
    	
    	let id = $(this).data('promoteid');
    	$('.valyou-music-hide').css('display','none');
    });
    
    $(document).on('click','.share-promote-song',function () {
        let id = $(this).data('promoteid');
        $(`#valyou-music-section-${id}`).css('display','none');
        $(`#comments-section-${id}`).css('display','none');
        $(`#promote-song-section-${id}`).css('display','block');

        // var email_input = document.querySelector('input[name=email-promote]');
        var email_input = document.getElementById('promoteemail'+id);
        var email_tagify = new Tagify(email_input, {
            dropdown: {
                position: "input",
                enabled: 0 // always opens dropdown when input gets focus
            },
            // pattern: /^[a-zA-Z0-9.!#$%&'*+\/=?^_`{|}~-]+@(?:\S{1,63})$/
            transformTag: function(tagData) {
                // example of basic custom validation
                var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
                if (!emailReg.test(tagData.value)) {
                    tagData.value = '';
                    alert('Please enter a valid email address!');
                }
            }
        });

        // var sms_input = document.querySelector('input[name=sms-promote]')
        var sms_input = document.getElementById('promotephone'+id);
        var sms_tagify = new Tagify(sms_input, {
            dropdown: {
                position: "input",
                enabled: 0 // always opens dropdown when input gets focus
            },
            transformTag: function(tagData) {
                // example of basic custom validation
                //https://www.twilio.com/docs/glossary/what-e164#regex-matching-for-e164
                var emailReg = /^\+[1-9]\d{1,14}$/;
                if (!emailReg.test(tagData.value)) {
                    tagData.value = '';
                    alert('Please enter a valid phone number(E. 164 formatting)!');
                }
            }
        });

        phone_number = window.intlTelInput(document.getElementById('phone'+id), ({
            autoPlaceholder: "polite",
            formatOnDisplay: true,
            placeholderNumberType: "MOBILE",
            separateDialCode: true,
            hiddenInput: "full",
            utilsScript: "<?php echo e(URL::asset('assets/libs/intl-tel-input/js/utils.js')); ?>"
        }));

        $('#phone'+id).keypress(function(event) {
            var keycode = (event.keyCode ? event.keyCode : event.which);
            if (keycode == '13' || keycode == '44' || event.key == "Escape") {
                event.preventDefault();
                sms_tagify.addTags(phone_number.getNumber());
                $(this).val('');
            }
        });

        $("#phone"+id).blur(function() {
            sms_tagify.addTags(phone_number.getNumber());
            $(this).val('');
        });

        // investors list with avatar
        // var inputElm = document.querySelector('input[name=investor-list]');
        // var inputElm = document.querySelector('input[name=investor-list]');
        var inputElm = document.getElementById('investorlist'+id);

        function tagTemplate(tagData) {
            return `
                <tag title="${tagData.email}"
                        contenteditable='false'
                        spellcheck='false'
                        tabIndex="-1"
                        class="tagify__tag ${tagData.class ? tagData.class : ""}"
                        ${this.getAttributes(tagData)}>
                    <x title='' class='tagify__tag__removeBtn' role='button' aria-label='remove tag'></x>
                    <div>
                        <div class='tagify__tag__avatar-wrap'>
                            <img onerror="this.style.visibility='hidden'" src="${tagData.avatar}">
                        </div>
                        <span class='tagify__tag-text'>${tagData.name}</span>
                    </div>
                </tag>
            `
        }

        function suggestionItemTemplate(tagData) {
            return `
                <div ${this.getAttributes(tagData)}
                    class='tagify__dropdown__item ${tagData.class ? tagData.class : ""}'
                    tabindex="0"
                    role="option">
                    ${ tagData.avatar ? `
                    <div class='tagify__dropdown__item__avatar-wrap'>
                        <img onerror="this.style.visibility='hidden'" src="${tagData.avatar}">
                    </div>` : ''
                    }
                    <strong>${tagData.name}</strong>
                    <span>${tagData.email}</span>
                </div>
            `
        }

        <?php
        $user_list = array();
        foreach ($users as $user) {
            array_push($user_list, array(
                "value" => $user->id,
                "name" => $user->first_name . " " . $user->last_name,
                "avatar" => asset($user->avatar),
                "email" => $user->email
            ));
        }
        ?>
        var $user_json = <?php echo json_encode($user_list); ?>;
        var whitelist = $user_json;
        // initialize Tagify on the above input node reference
        var tagify = new Tagify(inputElm, {
            tagTextProp: 'name', // very important since a custom template is used with this property as text
            enforceWhitelist: true,
            skipInvalid: true, // do not remporarily add invalid tags
            dropdown: {
                position: "input",
                closeOnSelect: false,
                enabled: 0,
                classname: 'users-list',
                searchKeys: ['name', 'email'], // very important to set by which keys to search for suggesttions when typing
            },
            templates: {
                tag: tagTemplate,
                dropdownItem: suggestionItemTemplate
            },
            whitelist: whitelist
        })

        tagify.on('dropdown:show dropdown:updated', onDropdownShow)
        tagify.on('dropdown:select', onSelectSuggestion)

        var addAllSuggestionsElm;

        function onDropdownShow(e) {
            var dropdownContentElm = e.detail.tagify.DOM.dropdown.content;

            if (tagify.suggestedListItems.length > 1) {
                addAllSuggestionsElm = getAddAllSuggestionsElm();

                // insert "addAllSuggestionsElm" as the first element in the suggestions list
                dropdownContentElm.insertBefore(addAllSuggestionsElm, dropdownContentElm.firstChild)
            }
        }

        function onSelectSuggestion(e) {
            if (e.detail.elm == addAllSuggestionsElm)
                tagify.dropdown.selectAll();
        }

        // create a "add all" custom suggestion element every time the dropdown changes
        function getAddAllSuggestionsElm() {
            // suggestions items should be based on "dropdownItem" template
            return tagify.parseTemplate('dropdownItem', [{
                class: "addAll",
                name: "Add all",
                email: tagify.whitelist.reduce(function(remainingSuggestions, item) {
                    return tagify.isTagDuplicate(item.value) ? remainingSuggestions : remainingSuggestions + 1
                }, 0) + " Members"
            }])
        }
    });

    function promoteVideo(video_id) {
        var formdata = $('#promotevideo-form-' + video_id).serialize();
        $.ajax({
            url: 'promotevideo/' + video_id,
            type: "POST",
            cache: false,
            data: formdata,
            beforeSend: function() {
                $(".promote-btn-" + video_id).attr("disabled", true);
            },
            success: function(data) {
                if (data) {
                    if (data.type == 'error') {
                        js_error(data.msg);
                    } else {
                        js_success(data.msg);
                    }

                    $(".promote-btn-" + video_id).attr("disabled", false);
                }
            }
        });
    }

// Play Video in 
<?php if(request()->segment(2) == "watch-to-earn"){
?>
$(document).on('click','.overlay-for-video',function () {
    let id = $(this).data('videoid');
    let brand =$(this).data('brand');
    let userId = $(this).data('userid');
    let video = $(this).data('video');
    
    $('#brandName-watch-to-earn').html(brand);
    $('#reward').html($(this).data('reward'));
    if(video == 1){
        $(`#video`+id).trigger('play');
        $(`#overlay`+id).remove();

    }else{
        $('#watch-to-earn').modal('show');
        $('button.playvideo').attr('id',`${id}`);
    	
    }
});

$(document).on('click', '.playvideo', function() {
    
    // video ID
    var id = $(this).attr('id');
    //artist ID
    let userId = $(`#overlay${id}`).data('userid');
    //promotion ID
    let promotionDetailsID = $(`#overlay${id}`).data('promotion-details-id');
    
    axios({
        method: "post",
        url: "<?php echo e(route('admin.promotereward')); ?>",
        data: {
            id: id,
            userId,
            promotion_details_id: promotionDetailsID,
            brand: $(`#overlay${id}`).data('brand')
        }
    }).then((res) => {
        console.log(res);
        // js_success("Enjoy this a lot!");
        $(`#video${id}`).trigger('play');
        $(`#overlay${id}`).remove();
    }).catch((err) => {
        throw err;
    });
});
<?php
}elseif(request()->segment(2) == "listen-to-earn"){
    
}
?>
        loadInvestorData(0, 2);
        loadMoreDataUnknown(0, <?= $id ?>, 1);
        loadFollowersData(0, <?= $id ?>, 2);

        function loadMoreDataUnknown(page, artist_id, follow_type) {
            $.ajax({
                url: "getfollowerlist",
                type: "GET",
                cache: false,
                data: {
                    offset: page,
                    artist_id: artist_id,
                    follow_type: follow_type
                },
                success: function(data) {
                    if (data) {
                        const data1 = JSON.parse(data);
                        if (page) {
                            $(".loadbtn").hide();
                            $(".follower_list").append(data1.following_list);
                            $(".total_follower").html(" &nbsp;&nbsp;&nbsp;" + data1.total_following);
                            // $(".total_follower").html('('+data1.total_follower+')');
                        } else {
                            $(".follower_list").html(data1.following_list);
                            $(".total_follower").html(" &nbsp;&nbsp;&nbsp;" + data1.total_following);
                        }

                    }
                }
            });
        }
        $(document).on('click', '.loadbtn', function() {
            $(".loadbtn").html('<i class="bx bx-loader bx-spin font-size-18 align-middle mr-2"></i> Loading...');
            var pId = $(this).data("id");
            loadMoreDataUnknown(pId, <?= $id ?>, 1);
        });

        function loadFollowersData(page, artist_id, follow_type) {
        	
            $.ajax({
                url: "getfollowerlist",
                type: "GET",
                cache: false,
                data: {
                    offset: page,
                    artist_id: artist_id,
                    follow_type: follow_type
                },
                success: function(data) {
                    if (data) {
                        const data1 = JSON.parse(data);
                        if (page) {
                            $(".loadbtn").hide();
                            $(".following_list").append(data1.following_list);
                            $(".total_following").html(" &nbsp;&nbsp;&nbsp;" + data1.total_following);
                            // $(".total_following").html('('+data1.total_following+')');
                        	


                        } else {
                            $(".following_list").html(data1.following_list);
                            $(".total_following").html(" &nbsp;&nbsp;&nbsp;" + data1.total_following);
                        	
                        }
                    }
                }
            });
        }
        $(document).on('click', '.loadbtn1', function() {
            $(".loadbtn1").html('<i class="bx bx-loader bx-spin font-size-18 align-middle mr-2"></i> Loading...');

            var pId = $(this).data("id");
            loadFollowersData(pId, <?= $id ?>, 2);
        });

        $(document).on('click', '.loadbtn2', function() {
            $(".loadbtn2").html('<i class="bx bx-loader bx-spin font-size-18 align-middle mr-2"></i> Loading...');
            var pId = $(this).data("id");

            loadInvestorData(pId, 2);
        });
    });

    function loadInvestorData(page, type) {
        $.ajax({
            url: 'loadinvestordata',
            type: "GET",
            cache: false,
            data: {
                offset: page,
                type: type
            },
            success: function(data) {
                if (data) {
                    const data1 = JSON.parse(data);
                    if (page) {
                        $(".pagination-loadmore").hide();
                        $(".investor_list").append(data1.investors_list);
                    } else {
                        $(".investor_list").html(data1.investors_list);
                    }
                    console.log(data1);
                    $(".total_investments").html(data1.total_investments);
                    $(".buy_total").html(data1.total_valyou_songs);
                }
            }
        });


    }

//     $("#search-investor").on("input", function(e) {
//         console.log(123);

//     });



$('body').delegate('#search-investor','keyup input',function() {
	
	var user_name = $(this).val();
	
	if(user_name!=''){
    	$.ajax({
            url: "investors",
            type: "GET",
            //cache: false,
            data: {
                user_name: user_name,
            },
            success: function(data) {
                if (data) {
                	
                	$('.mains3').show();
                	$('.mains3').html(data.result);
                }
            	else{
                	$('.mains3').show();
                	$('.searchresultmain').html(data.result);
                }
            }
        });
    }
	else{
    	$('.mains3').hide();
    
    	}
	
    });

$(document).on('click','.searchresultmain',function(){
	var user_id = $(this).data('id');
	var investor_name = $(this).data('name');
	var investor_url = "<?php echo e(url('get/investor')); ?>"+'?user_id='+user_id;
	$('#search-investor').val(investor_name);
	if(user_id){
    	$.ajax({
            url: "get/investor",
            type: "GET",
            //cache: false,
            data: {
                user_id: user_id,
            },
            success: function(data) {
                if (data) {
                	$('.mains3').hide();
                	window.location.replace(investor_url);
                }
            	
            }
        });
    }
	else{
    	alert('please select investor first');
    }
});


    var inputElm = document.getElementById('investorlist'+id);


    function suggestionItemTemplate(tagData) {
        return `
            <div ${this.getAttributes(tagData)}
                class='tagify__dropdown__item ${tagData.class ? tagData.class : ""}'
                tabindex="0"
                role="option">
                ${ tagData.avatar ? `
                <div class='tagify__dropdown__item__avatar-wrap'>
                    <img onerror="this.style.visibility='hidden'" src="${tagData.avatar}">
                </div>` : ''
                }
                <strong>${tagData.name}</strong>
                <span>${tagData.email}</span>
            </div>
        `
    }

    <?php
        $user_list = array();
        foreach ($users as $user) {
            array_push($user_list, array(
                "value" => $user->id,
                "name" => $user->first_name . " " . $user->last_name,
                "avatar" => asset($user->avatar),
                "email" => $user->email
            ));
        }
        ?>
        var $user_json = <?php echo json_encode($user_list); ?>;
        var whitelist = $user_json;
        // initialize Tagify on the above input node reference
        var tagify = new Tagify(inputElm, {
            tagTextProp: 'name', // very important since a custom template is used with this property as text
            enforceWhitelist: true,
            skipInvalid: true, // do not remporarily add invalid tags
            dropdown: {
                position: "input",
                closeOnSelect: false,
                enabled: 0,
                classname: 'users-list',
                searchKeys: ['name', 'email'], // very important to set by which keys to search for suggesttions when typing
            },
            templates: {
                tag: tagTemplate,
                dropdownItem: suggestionItemTemplate
            },
            whitelist: whitelist
        })

        tagify.on('dropdown:show dropdown:updated', onDropdownShow)
        tagify.on('dropdown:select', onSelectSuggestion)




</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/testvps/public_html/resources/views/valyou-playlist.blade.php ENDPATH**/ ?>