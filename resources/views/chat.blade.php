@extends('layouts.master')

@section('title') @lang('translation.Chat') @endsection

@section('content')

    @component('common-components.breadcrumb')
        @slot('title') 
		<div class="container mb-3 mt-3 added-feature">
        	 <div class="nav nav-tabs tab-select" id="nav-tab" role="tablist" bis_skin_checked="1">
                    <a href="#messages_data" class="active" id="messages_data" data-toggle="pill" role="tab"
                        aria-controls="all" aria-selected="true">Messages</a>
                    <a href="#notifications_data" class="unclicked" id="notifications_data" data-toggle="pill" role="tab"
                        aria-controls="expression_of_interest" aria-selected="false">Notifications</a>
             </div>
   	 	</div>
		@endslot
        @slot('li_1') Skote1 @endslot
        @slot('li_2') Chat2 @endslot
    @endcomponent

<style>

	   @media (max-width: 700px) {
   			.tab-select a{
			    padding: 5px 22px!important;
       		}
		}
	.nav-tabs {
    	border-bottom: 0px solid #ced4da!important;
	}
	.tab-select .active{
            text-decoration: none solid #ff0093 2px!important;
    	}
   		.tab-select .active{
         	border-bottom: 2px solid #ff0a97!important;
    	}
    .breadcrumb{
        display: none !important;
    }
    .nav-pills .nav-link.active, .nav-pills .show > .nav-link {
        color: #fff;
        background-color: #556ee6; 
        background-image: linear-gradient(257deg, #00ffc2 0%, #00b8ba 100%);
    }
    .nav-pills .nav-link.active, .nav-pills .show > .nav-link:hover {
        color: #fff;
    }
    /*user chat css new*/
    /*.user-chat-mobile{*/
    /*    display: none;*/
    /*}*/
    .back-btn-chat{
        display: none;
    }
    .back-btn-chat img{
        max-width: 20px;
        margin-bottom: 20px;
    }
    .chat-conversation .conversation-list .ctext-wrap .conversation-name{
        color: #e62e91;
    }
    .right .conversation-list .ctext-wrap .conversation-name{
        color: #5fc490;
    }
    .chat-send{
        background-image: linear-gradient(257deg, #00ffc2 0%, #00b8ba 100%);
        border-color: #5fc490;
    }
    .chat-input-links li a{
        color: #5fc490;
      /*  background: linear-gradient(257deg, #00ffc2 0%, #00b8ba 100%);*/
      /*-webkit-background-clip: text;*/
      /*-webkit-text-fill-color: transparent;*/
      /*-webkit-mask-image: linear-gradient(257deg, #00ffc2 0%, #00b8ba 100%);*/
    }
</style>
	<div class="row"  id="messages_seen" style="display:block">
    	<div class="d-lg-flex">
        <div class="back-btn-chat">
            <img src="assets/images/left-arrow.svg" title="Go Back" >
        </div>
        <div class="w-100 user-chat user-chat-mobile mr-lg-4">
            <div class="card">
                <div class="p-4 border-bottom ">
                    <div class="row">
                        <div class="col-md-4 col-9">
                            <h5 class="font-size-15 mb-1">Steven Franklin</h5>
                            <p class="text-muted mb-0"><i class="mdi mdi-circle text-success align-middle mr-1"></i> Active
                                now</p>
                        </div>
                        <div class="col-md-8 col-3">
                            <ul class="list-inline user-chat-nav text-right mb-0">
                                <li class="list-inline-item d-none d-sm-inline-block">
                                    <div class="dropdown">
                                        <button class="btn nav-btn dropdown-toggle" type="button" data-toggle="dropdown"
                                            aria-haspopup="true" aria-expanded="false">
                                            <i class="bx bx-search-alt-2"></i>
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-md">
                                            <form class="p-3">
                                                <div class="form-group m-0">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control" placeholder="Search ..."
                                                            aria-label="Recipient's username">
                                                        <div class="input-group-append">
                                                            <button class="btn btn-primary" type="submit"><i
                                                                    class="mdi mdi-magnify"></i></button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-inline-item  d-none d-sm-inline-block">
                                    <div class="dropdown">
                                        <button class="btn nav-btn dropdown-toggle" type="button" data-toggle="dropdown"
                                            aria-haspopup="true" aria-expanded="false">
                                            <i class="bx bx-cog"></i>
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="#">View Profile</a>
                                            <a class="dropdown-item" href="#">Clear chat</a>
                                            <a class="dropdown-item" href="#">Muted</a>
                                            <a class="dropdown-item" href="#">Delete</a>
                                        </div>
                                    </div>
                                </li>

                                <li class="list-inline-item">
                                    <div class="dropdown">
                                        <button class="btn nav-btn dropdown-toggle" type="button" data-toggle="dropdown"
                                            aria-haspopup="true" aria-expanded="false">
                                            <i class="bx bx-dots-horizontal-rounded"></i>
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <a class="dropdown-item" href="#">Something else</a>
                                        </div>
                                    </div>
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>

                <div>
                    <div class="chat-conversation p-3">
                        <ul class="list-unstyled" data-simplebar style="max-height: 470px;">
                            <li>
                                <div class="chat-day-title">
                                    <span class="title">Today</span>
                                </div>
                            </li>
                            <li>
                                <div class="conversation-list">
                                    <div class="dropdown">

                                        <a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                                            aria-haspopup="true" aria-expanded="false">
                                            <i class="bx bx-dots-vertical-rounded"></i>
                                        </a>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="#">Copy</a>
                                            <a class="dropdown-item" href="#">Save</a>
                                            <a class="dropdown-item" href="#">Forward</a>
                                            <a class="dropdown-item" href="#">Delete</a>
                                        </div>
                                    </div>
                                    <div class="ctext-wrap">
                                        <div class="conversation-name">Steven Franklin</div>
                                        <p>
                                            Hello!
                                        </p>
                                        <p class="chat-time mb-0"><i class="bx bx-time-five align-middle mr-1"></i> 10:00
                                        </p>
                                    </div>

                                </div>
                            </li>

                            <li class="right">
                                <div class="conversation-list">
                                    <div class="dropdown">

                                        <a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                                            aria-haspopup="true" aria-expanded="false">
                                            <i class="bx bx-dots-vertical-rounded"></i>
                                        </a>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="#">Copy</a>
                                            <a class="dropdown-item" href="#">Save</a>
                                            <a class="dropdown-item" href="#">Forward</a>
                                            <a class="dropdown-item" href="#">Delete</a>
                                        </div>
                                    </div>
                                    <div class="ctext-wrap">
                                        <div class="conversation-name">Henry Wells</div>
                                        <p>
                                            Hi, How are you? What about our next meeting?
                                        </p>

                                        <p class="chat-time mb-0"><i class="bx bx-time-five align-middle mr-1"></i> 10:02
                                        </p>
                                    </div>
                                </div>
                            </li>

                            <li>
                                <div class="conversation-list">
                                    <div class="dropdown">

                                        <a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                                            aria-haspopup="true" aria-expanded="false">
                                            <i class="bx bx-dots-vertical-rounded"></i>
                                        </a>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="#">Copy</a>
                                            <a class="dropdown-item" href="#">Save</a>
                                            <a class="dropdown-item" href="#">Forward</a>
                                            <a class="dropdown-item" href="#">Delete</a>
                                        </div>
                                    </div>
                                    <div class="ctext-wrap">
                                        <div class="conversation-name">Steven Franklin</div>
                                        <p>
                                            Yeah everything is fine
                                        </p>

                                        <p class="chat-time mb-0"><i class="bx bx-time-five align-middle mr-1"></i> 10:06
                                        </p>
                                    </div>

                                </div>
                            </li>

                            <li class="last-chat">
                                <div class="conversation-list">
                                    <div class="dropdown">

                                        <a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                                            aria-haspopup="true" aria-expanded="false">
                                            <i class="bx bx-dots-vertical-rounded"></i>
                                        </a>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="#">Copy</a>
                                            <a class="dropdown-item" href="#">Save</a>
                                            <a class="dropdown-item" href="#">Forward</a>
                                            <a class="dropdown-item" href="#">Delete</a>
                                        </div>
                                    </div>
                                    <div class="ctext-wrap">
                                        <div class="conversation-name">Steven Franklin</div>
                                        <p>& Next meeting tomorrow 10.00AM</p>
                                        <p class="chat-time mb-0"><i class="bx bx-time-five align-middle mr-1"></i> 10:06
                                        </p>
                                    </div>

                                </div>
                            </li>

                            <li class=" right">
                                <div class="conversation-list">
                                    <div class="dropdown">

                                        <a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                                            aria-haspopup="true" aria-expanded="false">
                                            <i class="bx bx-dots-vertical-rounded"></i>
                                        </a>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="#">Copy</a>
                                            <a class="dropdown-item" href="#">Save</a>
                                            <a class="dropdown-item" href="#">Forward</a>
                                            <a class="dropdown-item" href="#">Delete</a>
                                        </div>
                                    </div>
                                    <div class="ctext-wrap">
                                        <div class="conversation-name">Henry Wells</div>
                                        <p>
                                            Wow that's great
                                        </p>

                                        <p class="chat-time mb-0"><i class="bx bx-time-five align-middle mr-1"></i> 10:07
                                        </p>
                                    </div>
                                </div>
                            </li>


                        </ul>
                    </div>
                    <div class="p-3 chat-input-section">
                        <div class="row">
                            <div class="col">
                                <div class="position-relative">
                                    <input type="text" class="form-control chat-input" placeholder="Enter Message...">
                                    <div class="chat-input-links">
                                        <ul class="list-inline mb-0">
                                            <li class="list-inline-item"><a href="#" data-toggle="tooltip"
                                                    data-placement="top" title="Emoji"><i
                                                        class="mdi mdi-emoticon-happy-outline"></i></a></li>
                                            <li class="list-inline-item"><a href="#" data-toggle="tooltip"
                                                    data-placement="top" title="Images"><i
                                                        class="mdi mdi-file-image-outline"></i></a></li>
                                            <li class="list-inline-item"><a href="#" data-toggle="tooltip"
                                                    data-placement="top" title="Add Files"><i
                                                        class="mdi mdi-file-document-outline"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-auto" id="myDiv">
                                <button type="submit"
                                    class="btn btn-primary btn-rounded chat-send w-md waves-effect waves-light"><span
                                        class="d-none d-sm-inline-block mr-2">Send</span> <i
                                        class="mdi mdi-send"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="chat-leftsidebar ">
            <div class="">
                <div class="py-4 border-bottom">
                    <div class="media">
                        <div class="align-self-center mr-3">
                            <img src="public/assets/images/users/avatar-1.jpg" class="avatar-xs rounded-circle" alt="">
                        </div>
                        <div class="media-body">
                            <h5 class="font-size-15 mt-0 mb-1">Henry Wells</h5>
                            <p class="text-muted mb-0"><i class="mdi mdi-circle text-success align-middle mr-1"></i> Active
                            </p>
                        </div>

                        <div>
                            <div class="dropdown chat-noti-dropdown active">
                                <button class="btn dropdown-toggle" type="button" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                    <i class="bx bx-bell bx-tada"></i>
                                </button>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="search-box chat-search-box py-4">
                    <div class="position-relative">
                        <input type="text" class="form-control" placeholder="Search...">
                        <i class="bx bx-search-alt search-icon"></i>
                    </div>
                </div>

                <div class="chat-leftsidebar-nav">
                    <ul class="nav nav-pills nav-justified">
                        <li class="nav-item">
                            <a href="#chat" data-toggle="tab" aria-expanded="true" class="nav-link active">
                                <i class="bx bx-chat font-size-20 d-sm-none"></i>
                                <span class="d-none d-sm-block">Chat</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#group" data-toggle="tab" aria-expanded="false" class="nav-link">
                                <i class="bx bx-group font-size-20 d-sm-none"></i>
                                <span class="d-none d-sm-block">Group</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#contact" data-toggle="tab" aria-expanded="false" class="nav-link">
                                <i class="bx bx-book-content font-size-20 d-sm-none"></i>
                                <span class="d-none d-sm-block">Contacts</span>
                            </a>
                        </li>
                    </ul>
                    <div class="tab-content py-4">
                        <div class="tab-pane show active" id="chat">
                            <div>
                                <h5 class="font-size-14 mb-3">Recent</h5>
                                <ul class="list-unstyled chat-list" data-simplebar style="max-height: 410px;">
                                    <li class="active">
                                        <a href="#" class="chat-open">
                                            <div class="media">
                                                <div class="align-self-center mr-3">
                                                    <i class="mdi mdi-circle font-size-10"></i>
                                                </div>
                                                <div class="align-self-center mr-3">
                                                    <img src="public/assets/images/users/avatar-2.jpg"
                                                        class="rounded-circle avatar-xs" alt="">
                                                </div>

                                                <div class="media-body overflow-hidden">
                                                    <h5 class="text-truncate font-size-14 mb-1">Steven Franklin</h5>
                                                    <p class="text-truncate mb-0">Hey! there I'm available</p>
                                                </div>
                                                <div class="font-size-11">05 min</div>
                                            </div>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="#" class="chat-open">
                                            <div class="media">
                                                <div class="align-self-center mr-3">
                                                    <i class="mdi mdi-circle text-success font-size-10"></i>
                                                </div>
                                                <div class="align-self-center mr-3">
                                                    <img src="public/assets/images/users/avatar-3.jpg"
                                                        class="rounded-circle avatar-xs" alt="">
                                                </div>
                                                <div class="media-body overflow-hidden">
                                                    <h5 class="text-truncate font-size-14 mb-1">Adam Miller</h5>
                                                    <p class="text-truncate mb-0">I've finished it! See you so</p>
                                                </div>
                                                <div class="font-size-11">12 min</div>
                                            </div>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="#" class="chat-open">
                                            <div class="media">
                                                <div class="align-self-center mr-3">
                                                    <i class="mdi mdi-circle text-success font-size-10"></i>
                                                </div>
                                                <div class="avatar-xs align-self-center mr-3">
                                                    <span class="avatar-title rounded-circle bg-soft-primary text-primary">
                                                        K
                                                    </span>
                                                </div>
                                                <div class="media-body overflow-hidden">
                                                    <h5 class="text-truncate font-size-14 mb-1">Keith Gonzales</h5>
                                                    <p class="text-truncate mb-0">This theme is awesome!</p>
                                                </div>
                                                <div class="font-size-11">24 min</div>
                                            </div>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="#" class="chat-open">
                                            <div class="media">
                                                <div class="align-self-center mr-3">
                                                    <i class="mdi mdi-circle text-warning font-size-10"></i>
                                                </div>
                                                <div class="align-self-center mr-3">
                                                    <img src="public/assets/images/users/avatar-4.jpg"
                                                        class="rounded-circle avatar-xs" alt="">
                                                </div>
                                                <div class="media-body overflow-hidden">
                                                    <h5 class="text-truncate font-size-14 mb-1">Jose Vickery</h5>
                                                    <p class="text-truncate mb-0">Nice to meet you</p>
                                                </div>
                                                <div class="font-size-11">1 hr</div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="chat-open">
                                            <div class="media">
                                                <div class="align-self-center mr-3">
                                                    <i class="mdi mdi-circle font-size-10"></i>
                                                </div>

                                                <div class="avatar-xs align-self-center mr-3">
                                                    <span class="avatar-title rounded-circle bg-soft-primary text-primary">
                                                        M
                                                    </span>
                                                </div>
                                                <div class="media-body overflow-hidden">
                                                    <h5 class="text-truncate font-size-14 mb-1">Mitchel Givens</h5>
                                                    <p class="text-truncate mb-0">Hey! there I'm available</p>
                                                </div>
                                                <div class="font-size-11">3 hrs</div>
                                            </div>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="#" class="chat-open">
                                            <div class="media">
                                                <div class="align-self-center mr-3">
                                                    <i class="mdi mdi-circle text-success font-size-10"></i>
                                                </div>
                                                <div class="align-self-center mr-3">
                                                    <img src="public/assets/images/users/avatar-6.jpg"
                                                        class="rounded-circle avatar-xs" alt="">
                                                </div>
                                                <div class="media-body overflow-hidden">
                                                    <h5 class="text-truncate font-size-14 mb-1">Stephen Hadley</h5>
                                                    <p class="text-truncate mb-0">I've finished it! See you so</p>
                                                </div>
                                                <div class="font-size-11">5hrs</div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="chat-open">
                                            <div class="media">
                                                <div class="align-self-center mr-3">
                                                    <i class="mdi mdi-circle text-success font-size-10"></i>
                                                </div>
                                                <div class="avatar-xs align-self-center mr-3">
                                                    <span class="avatar-title rounded-circle bg-soft-primary text-primary">
                                                        K
                                                    </span>
                                                </div>
                                                <div class="media-body overflow-hidden">
                                                    <h5 class="text-truncate font-size-14 mb-1">Keith Gonzales</h5>
                                                    <p class="text-truncate mb-0">This theme is awesome!</p>
                                                </div>
                                                <div class="font-size-11">24 min</div>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="tab-pane" id="group">
                            <h5 class="font-size-14 mb-3">Group</h5>
                            <ul class="list-unstyled chat-list" data-simplebar style="max-height: 410px;">
                                <li>
                                    <a href="#">
                                        <div class="media align-items-center">
                                            <div class="avatar-xs mr-3">
                                                <span class="avatar-title rounded-circle bg-soft-primary text-primary">
                                                    G
                                                </span>
                                            </div>

                                            <div class="media-body">
                                                <h5 class="font-size-14 mb-0">General</h5>
                                            </div>
                                        </div>
                                    </a>
                                </li>

                                <li>
                                    <a href="#">
                                        <div class="media align-items-center">
                                            <div class="avatar-xs mr-3">
                                                <span class="avatar-title rounded-circle bg-soft-primary text-primary">
                                                    R
                                                </span>
                                            </div>

                                            <div class="media-body">
                                                <h5 class="font-size-14 mb-0">Reporting</h5>
                                            </div>
                                        </div>
                                    </a>
                                </li>

                                <li>
                                    <a href="#">
                                        <div class="media align-items-center">
                                            <div class="avatar-xs mr-3">
                                                <span class="avatar-title rounded-circle bg-soft-primary text-primary">
                                                    M
                                                </span>
                                            </div>

                                            <div class="media-body">
                                                <h5 class="font-size-14 mb-0">Meeting</h5>
                                            </div>
                                        </div>
                                    </a>
                                </li>

                                <li>
                                    <a href="#">
                                        <div class="media align-items-center">
                                            <div class="avatar-xs mr-3">
                                                <span class="avatar-title rounded-circle bg-soft-primary text-primary">
                                                    A
                                                </span>
                                            </div>

                                            <div class="media-body">
                                                <h5 class="font-size-14 mb-0">Project A</h5>
                                            </div>
                                        </div>
                                    </a>
                                </li>

                                <li>
                                    <a href="#">
                                        <div class="media align-items-center">
                                            <div class="avatar-xs mr-3">
                                                <span class="avatar-title rounded-circle bg-soft-primary text-primary">
                                                    B
                                                </span>
                                            </div>

                                            <div class="media-body">
                                                <h5 class="font-size-14 mb-0">Project B</h5>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>

                        <div class="tab-pane" id="contact">
                            <h5 class="font-size-14 mb-3">Contact</h5>

                            <div data-simplebar style="max-height: 410px;">
                                <div>
                                    <div class="avatar-xs mb-3">
                                        <span class="avatar-title rounded-circle bg-soft-primary text-primary">
                                            A
                                        </span>
                                    </div>

                                    <ul class="list-unstyled chat-list">
                                        <li>
                                            <a href="#">
                                                <h5 class="font-size-14 mb-0">Adam Miller</h5>
                                            </a>
                                        </li>

                                        <li>
                                            <a href="#">
                                                <h5 class="font-size-14 mb-0">Alfonso Fisher</h5>
                                            </a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="mt-4">
                                    <div class="avatar-xs mb-3">
                                        <span class="avatar-title rounded-circle bg-soft-primary text-primary">
                                            B
                                        </span>
                                    </div>

                                    <ul class="list-unstyled chat-list">
                                        <li>
                                            <a href="#">
                                                <h5 class="font-size-14 mb-0">Bonnie Harney</h5>
                                            </a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="mt-4">
                                    <div class="avatar-xs mb-3">
                                        <span class="avatar-title rounded-circle bg-soft-primary text-primary">
                                            C
                                        </span>
                                    </div>

                                    <ul class="list-unstyled chat-list">
                                        <li>
                                            <a href="#">
                                                <h5 class="font-size-14 mb-0">Charles Brown</h5>
                                            </a>
                                            <a href="#">
                                                <h5 class="font-size-14 mb-0">Carmella Jones</h5>
                                            </a>
                                            <a href="#">
                                                <h5 class="font-size-14 mb-0">Carrie Williams</h5>
                                            </a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="mt-4">
                                    <div class="avatar-xs mb-3">
                                        <span class="avatar-title rounded-circle bg-soft-primary text-primary">
                                            D
                                        </span>
                                    </div>

                                    <ul class="list-unstyled chat-list">
                                        <li>
                                            <a href="#">
                                                <h5 class="font-size-14 mb-0">Dolores Minter</h5>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
	</div>
	<div class="row"  id="notifications_seen" style="display:none">
	  <div class="d-lg-flex">
        <div class="back-btn-chat">
            <img src="assets/images/left-arrow.svg" title="Go Back">
        </div>
        <div class="w-100 user-chat user-chat-mobile mr-lg-4">
            <div class="card">
           		   <div class="simplebar-content-wrapper" style="height: auto; overflow: hidden scroll;">
                                        <!--  <h6 class="mt-0 mb-1">Notifications</h6> -->
                                            <div class="simplebar-content" style="padding: 0px;">
												<a href="" class="text-reset notification-item" >
                                                    <div class="media">
                                                            <img class="mr-3 rounded-circle avatar-xs"  src="Bobby" alt="{{ asset('assets/images/valyoux/artist.svg') }}" width="16" />

                                                        <div class="media-body">
                                                        <div class="font-size-12 text-muted">
                                                            <p class="notification_text">Bobby Oparaocha purchased stock in your brand</p>
                                                           
                                                            <img class="notification_image" src="https://testvps.valyoux.io/public/assets/uploads/user/415903533.png" width="20">
                                                           
                                                        </div>
                                                        </div>
                                                    </div>
                                                </a>
                                           
                                            </div>
                                        </div>
                                    
             </div>
      	</div>
      </div>
    </div>
@section('script')
    <script src="{{ URL::asset('assets/libs/parsleyjs/parsleyjs.min.js') }}"></script>
    <!-- Plugins js -->
    <script src="{{ URL::asset('assets/js/pages/form-validation.init.js') }}"></script>
    <script src="{{ URL::asset('assets/libs/dropify/js/dropify.js') }}"></script>
    <script src="{{ URL::asset('assets/js/pages/country-state-city.js') }}"></script>
@endsection
@section('script-bottom')
    <script>
      $(document).ready(function() {
          if ($(window).width() < 991) {
              $('.user-chat-mobile').hide();
          $('.chat-open').click(function() {
            $(this).closest(".chat-leftsidebar-nav").hide('fast');
            $('.back-btn-chat').show();
            $('.user-chat-mobile').show('fast');
            $('html, body').animate({
            scrollTop: $("#myDiv").offset().top
        }, 1000);
          });
          
          $('.back-btn-chat').click(function() {
            $(this).hide();
            $('.user-chat-mobile').hide('fast');
            
            $('.chat-leftsidebar-nav').show('fast');
          });
          }
      });
    //
        $(document).ready(function() {
        
        $('#messages_data').click(function() {
            $("#messages_seen").attr("style", "display:block;")
            $("#notifications_seen").attr("style", "display:none;")
        });
        $('#notifications_data').click(function() {
            $("#notifications_seen").attr("style", "display:block;")
            $("#messages_seen").attr("style", "display:none;")
        });
       
    });
    </script>
@endsection
    <!-- end row -->
@endsection
