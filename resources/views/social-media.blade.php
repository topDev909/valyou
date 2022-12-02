<?php

use App\Models\VideoUploads;
use App\User;
?>
@extends('layouts.master')

@if(request()->segment(2) == "watch-to-earn")
@section('title') Watch to earn @endsection
@elseif(request()->segment(2) == "listen-to-earn")
@section('title') Listen to earn @endsection
@else
@section('title') Social Media @endsection
@endif
@section('pageCSS')
<link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/libs/select2/select2.min.css') }}">
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.css">
<link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/css/pages/social-media.css') }}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/libs/tagify/tagify.css') }}">
<link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/libs/intl-tel-input/css/intlTelInput.css') }}">
@endsection
@section('css')
<style>
    /* btn close section */
    .modal-header .btn-close {
        padding: 0.5rem 0.5rem;
        margin: -0.5rem -0.5rem -0.5rem auto;
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

    .post-now-button {
        max-width: 133px;
    }

    .scrolling-wrapper-lower {
        overflow-x: scroll;
        cursor: grab;
    }

    /* Hide scrollbar for Chrome, Safari and Opera */
    .scrolling-wrapper-lower::-webkit-scrollbar {
        display: none;
    }

    /* Hide scrollbar for IE, Edge and Firefox */
    .scrolling-wrapper-lower {
        -ms-overflow-style: none;
        /* IE and Edge */
        scrollbar-width: none;
        /* Firefox */
    }

    .scrolling-wrapper-lower.active {
        cursor: grabbing !important;
        cursor: -webkit-grabbing !important;
        transform: scale(1);
    }

    img.avatar-md.post-img {
        height: 85px;
        width: 85px;
        object-fit: cover;
    }


    @media (max-width: 1024px) {
        .image_wrapper .image_ratio {
            margin: 0;
            font-size: 27px;
            color: #0000004a;
            padding-top: 20px;
        }

        .image_wrapper .image_placeholder {
            margin-top: 10px;
            font-size: 30px;
            font-weight: 500;
            margin: 0px;
            color: #5D5D5D;
            padding-bottom: 20px;
        }

        .image_wrapper .image_placeholder span {
            font-size: 20px;
            color: gray;
            font-weight: 100;
            display: block;
            /* padding-top: 8px; */
        }
    }

    @media (max-width: 992px) {
        .scrolling-wrapper {
            overflow-x: scroll;
        }

        .scrolling-wrapper::-webkit-scrollbar {
            display: none;
        }

        .scrolling {
            justify-content: left !important;
        }
    }
	
	@media(max-width: 700px){
		
    	.avatar-md {
    		height: 4.5rem!important;
    		width: 4.5rem!important;
    		object-fit: cover;
		}
    
	}


    @media (max-width: 768px) {
        div.page-content:before {
            content: '';
            position: fixed;
            top: 190px;
            width: 125%;
            height: 140px;
            left: 0;
            background-image: url(http://myprojectstaging.com/valyouxmusic/public/assets/images/valyoux/linear_slant_gradient@3x.png) !important;
            background-size: cover;
            background-position: left center;
        }

        .page-content {
            padding: 191px 12px 60px !important;
            /*background-image: url(http://myprojectstaging.com/valyouxmusic/public/assets/images/valyoux/linear_slant_gradient@3x.png) !important;*/
            /*background-repeat: no-repeat  !important;*/
            /*background-attachment: fixed !important;*/
            /*background-size: cover  !important;*/
            /*background-position: center  !important;*/
            min-height: 500px !important;
        }
    }

    @media (max-width: 425px) {
        div.page-content:before {
            content: '';
            position: fixed;
            top: 190px;
            width: 100% !important;
            height: 100px !important;
            left: 0;
            background-image: url(http://myprojectstaging.com/valyouxmusic/public/assets/images/valyoux/linear_slant_gradient@3x.png) !important;
            background-size: cover;
            background-position: left center;
        }

        @media (max-width: 375px) {
            p.post-section-artist-p1 {
                font-size: 13px;
                margin: 0px;
                color: #F24336;
                font-family: 'Roboto';
            }
        }



        .page-content {
            padding: 191px 12px 60px !important;
            /*background-image: url("img_parallax.jpg");*/
            /* Set a specific height */
            /*  height: 500px;*/
            /*background-size: 500px 500px;*/
            /* Create the parallax scrolling effect */
            /*background-attachment: fixed;*/
            /*background-position: center;*/
            /*background-repeat: no-repeat;*/
            /*background-size: cover;*/
        }

        .image_wrapper .image_ratio {
            margin: 0;
            font-size: 20px;
            color: #0000004a;
            padding-top: 20px;
        }

        .image_wrapper .image_placeholder {

            font-size: 25px;
            font-weight: 500;
            margin: 0px;
            color: #5D5D5D;
            padding-bottom: 20px;
        }

        .image_wrapper .image_placeholder span {
            font-size: 15px;
            color: gray;
            font-weight: 100;
            display: block;
            line-height: 150%;
            margin-top: 7px;
        }
    }

    @media (min-width: 1025px) {
        .image_wrapper .image_ratio {
            margin: 0;
            font-size: 40px;
            color: #0000004a;
            padding-top: 20px;
        }

        .image_wrapper .image_placeholder {
            padding-top: 8px;
            font-size: 45px;
            font-weight: 500;
            margin: 0px;
            color: #5D5D5D;
            padding-bottom: 20px;
        }

        .image_wrapper .image_placeholder span {
            font-size: 29px;
            color: gray;
            font-weight: 100;
            display: block;
            margin-top: 12px;
        }
    }

    .artist-list-photo {
        object-fit: cover;
    }

    audio {
        background-color: #c8c8c8;
    }

    audio::-webkit-media-controls-panel {
        background-color: rgba(200, 200, 200, 1);
        width: 350px;

    }

    .audio-text {
        margin-left: 15px;
        margin-bottom: 0px;
        font-size: 24px;
        font-weight: 500;
        margin: 0px;
        color: #000;
        margin-left: 10px;
        line-height: normal;
    }

    .audio-text span {
        font-size: 17px;
        float: left;
        width: 100%;
        display: block;
        color: gray;
        font-weight: 400;
    }

    img.audio-cover-image {
        width: 80px;
        height: 80px;
    }

    #lower-exchange:hover {
        -webkit-animation-play-state: paused;
        -moz-animation-play-state: paused;
        -o-animation-play-state: paused;
        animation-play-state: paused;
        /* cursor: pointer; */

    }

    p.no-videos {
        text-align: center;
        font-size: xx-large;
        margin: 0;

    }

    .videos-div {
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .for-padd-row {
        padding-right: 15px;
    }

    .col-lg-7.col-6.post-header-bar {
        margin-top: 10px;
        padding: 0;
        margin-left: -20px;
    }

    #comments-section-1 ul {
        overflow: auto;
        overflow-x: hidden;
    }

    .profile_img_name {
        display: flex;
        align-items: flex-start;
    }

    .profile_img_name .post-section-artist-img {
        width: 100%;
        height: 70px;
        width: 70px;
        margin-right: 15px;
        object-fit: cover;

    }

    .profile_img_name .inner_img_name {
        margin-top: .5rem !important;

    }

    .uploading-section-artist-p3 img.uploading-section-artist-icon-img {
        margin-top: -2px;
    }

    .color-white {
        color: #fff;
    }

    .valyou-o-btn-invest {
        padding: 8px 20px;
        font-size: 20px;
        margin-top: 0;
    }

    .social-media-profile-wrap {
        background: #000;
        padding: 10px 22px 10px 20px;
        box-shadow: 0 1.5px 4px 0 rgba(0, 0, 0, 0.3) !important;
        margin-bottom: 10px;
        border-radius: 4px;
        display: flex;
        align-items: center;
        justify-content: space-between;
    }

    .sm-left-wrap {
        display: flex;
        align-items: center;
    }

    .sm-left-wrap img {
        margin: 3px 10px;
        width: 65px;
        height: 65px;
    }

    .sm-left-desc {}

    .sm-left-desc h5 {
        font-size: 14px;
        color: #FF4182;
        margin-bottom: 8px;
    }

    .sm-left-desc h2 {
        color: #FF4182;
        margin-bottom: 5px;
        font-weight: 600;
        font-size: 24px;
        line-height: 1.2;
    }

    .sm-left-desc p {
        color: #fff;
        font-size: 13px;
        margin: 0
    }

    .sm-left-desc p i {
        margin-right: 2px
    }

    .sm-right-wrap .btn-invest-pink-grad {
        color: #fff;
        background-image: linear-gradient(77deg, #FF4182, #FFA85B 100%);
        border: none;
        width: 100%;
        border-radius: 4px;
        font-size: 20px;
        padding: 7px 20px;
    }

    .color-pinkk {
        color: #F9508A !important;
        font-weight: 600;
    }

    .card.shadow-none {
        border-radius: 17px;
    }

    .artist-comment-desc {
        margin-left: 0;
    }

    .tooltip {
        z-index: 1 !important;
    }

    .proceed_modal {}

    .proceed_modal .modal-body {
        padding: 0 1rem;
    }

    .proceed_modal .modal-header {
        border-bottom: none;
    }

    .popup-text {}

    .width-40 {
        max-width: 40px;
    }

    .for-btn-post {
        align-items: center;
        display: flex;
        justify-content: flex-end;
    }

    /*comment css */
    .single-comment {
        display: flex;
        align-items: flex-start;
    }

    .sc-img {
        margin-right: 15px;
        margin-bottom: 20px;
        height: 60px;
        width: 60px;
    }

    .sc-inner {
        display: flex;
        align-items: baseline;
        width: 100%;
        background: #ededed;
        padding: 15px;
        border-radius: 10px;
        height: 100%;
    }

    .sc-name {
        white-space: nowrap;
        width: 90%;
        /*margin-top: 25px;*/
        margin-bottom: 0;
        font-size: 14px;
        font-weight: 600;
        color: #F9508A;
        max-width: 170px;
        min-width: 170px;
    }

    .sc-comment {
        margin-bottom: 0;
        font-size: 12px;
    }

    .sidebar-enable.vertical-collpsed .single-comment {}

    .sidebar-enable.vertical-collpsed .sc-img {
        margin-right: 35px;
    }

    .sidebar-enable.vertical-collpsed .sc-inner {}

    .sidebar-enable.vertical-collpsed .sc-name {
        width: 70%;
    }

    .sm-left-wrap .uploading-section-artist-icon-img {
        width: auto;
        height: auto;
        margin: 0;
        margin-top: -4px;
        max-width: 12px;
    }

    .green-percentage {
        color: #72eb31;
    }

    @media (max-width: 701px) {
        .sm-right-wrap {
            top: 29px !important;
        }
    }

    @media (max-width: 575px) {


        .social-media-profile-wrap {
            padding: 10px 1px 10px 3px;
            align-items: flex-start;
            position: relative;
        }

        .sm-left-wrap {
            margin-right: 5px;
        }

        .sm-left-wrap img {
            margin: 1px 5px 0 2px;
            width: 40px;
            height: 40px;
        }

        .sm-left-wrap .uploading-section-artist-icon-img {
            width: auto;
            height: auto;
            margin: 0;
            margin-top: -4px;
            max-width: 12px;
        }

        .green-percentage {
            color: #72eb31;
        }

        .sm-left-desc h2 {
            font-size: 16px;
        }

        .sm-left-desc p {
            font-size: 12px;
            margin-bottom: 5px;
        }

        .sm-right-wrap .btn-invest-pink-grad {
            font-size: 11px;
            padding: 5px 5px;
            white-space: nowrap;
        }

        .sm-left-wrap img.img-40 {
            width: 40px;
        }


        img.avatar-md.post-img {
            height: 59px;
            width: 59px;
            object-fit: cover;
        }

        .artist-comment-desc {
            margin-top: 0;
            margin-right: 0;
            margin-bottom: 0;
            margin-left: 16.6666666667%;
        }

        .sc-inner {
            flex-wrap: wrap;
            background: #ededed;
            padding: 10px;
            border-radius: 10px;
        }

        .sc-name {
            width: 100%;
            margin-top: 0;
        }

        .sc-comment {
            margin-top: 5px;
            width: 100%;
        }

        .sc-img {
            margin-bottom: 0;
            margin-top: 2px;
        }

        .post-section {
            padding: 10px;
        }

        .sm-right-wrap {
            /*margin-right: 7px;*/
            position: absolute;
            right: 7px;
        }

        .uploading-section-upload-img {
            padding: 5px 0px 9px;
            margin: 5px 2px 0;
            margin-right: 10px;
            max-width: 27px;
        }

        .width-40 {
            max-width: 24px;
            margin-right: 10px;
        }

        .col-lg-7.col-6.post-header-bar {
            margin: 8px 0px 0px;
            padding: 0;
            margin-left: -3px;
        }
    }

    @media (max-width: 700px) {

        .post-now-button {
            font-size: 12px;
            height: 26px;
        }

        .social-media-profile-wrap {
            padding: 10px 1px 10px 3px;
            align-items: flex-start;
            position: relative;
        }

        .sm-left-wrap {
            margin-right: 5px;
        }

        .sm-left-wrap img {
            margin: 1px 5px 0 2px;
            width: 40px;
            height: 40px;
        }

        .sm-left-wrap .uploading-section-artist-icon-img {
            width: auto;
            height: auto;
            margin: 0;
            margin-top: -4px;
            max-width: 12px;
        }

        .green-percentage {
            color: #72eb31;
        }

        .sm-left-desc h2 {
            font-size: 16px;
        }

        .sm-left-desc p {
            font-size: 12px;
            margin-bottom: 5px;
        }

        .sm-right-wrap .btn-invest-pink-grad {
            font-size: 11px;
            padding: 5px 5px;
            white-space: nowrap;
        }

        .sm-left-wrap img.img-40 {
            width: 40px;
        }




        .artist-comment-desc {
            margin-top: 0;
            margin-right: 0;
            margin-bottom: 0;
            margin-left: 16.6666666667%;
        }

        .sc-inner {
            flex-wrap: wrap;
            background: #ededed;
            padding: 10px;
            border-radius: 10px;
        }

        .sc-name {
            width: 100%;
            margin-top: 0;
        }

        .sc-comment {
            margin-top: 5px;
            width: 100%;
        }

        .sc-img {
            margin-bottom: 0;
            margin-top: 2px;
        }

        .post-section {
            padding: 10px;
        }

        .sm-right-wrap {
            /*margin-right: 7px;*/
            position: absolute;
            right: 7px;
        }

        .uploading-section-upload-img {
            padding: 5px 0px 9px;
            margin: 5px 2px 0;
            margin-right: 10px;
            max-width: 27px;
        }

        .width-40 {
            max-width: 24px;
            margin-right: 10px;
        }
    }

    .artist-maker-tabs {
        overflow-x: scroll;
    }

    .artist-maker-tabs a {
        padding: 5px 25px;
    }

    .artist-maker-tabs::-webkit-scrollbar {
        -webkit-appearance: none;
    }

    .artist-maker-tabs::-webkit-scrollbar:vertical {
        width: 6px;
    }

    .artist-maker-tabs::-webkit-scrollbar:horizontal {
        height: 6px;
    }

    .artist-maker-tabs::-webkit-scrollbar-thumb {
        border-radius: 8px;
        border: 2px solid white;
        /* should match background, can't be transparent */
        background-color: #ff0093;
    }

    .artist-markets-content-wrap {
        padding-top: 20px;
    }

    .parent-for-video {
        position: relative;
    }

    .overlay-for-video {
        position: absolute;
        top: 0;
        background: rgb(0 0 0 / 54%);
        bottom: 0;
        right: 0;
        left: 0;
        cursor: pointer;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .valyou-g-btn {
        color: #fff;
        padding: 10px 11px;
        background-image: linear-gradient(77deg, #00B8BA, #00FFC2 100%);
        border: none;
        width: 100%;
        max-width: 175px;
    }

    .valyou-g-btn:hover {
        color: #fff;
        background-image: linear-gradient(77deg, #00FFC2, #00B8BA 100%);
    }

    .listen_img {
        max-width: 100px;
        margin: 0 auto;

    }

    .send_start {
        font-size: 22px;
        margin-bottom: 10px;
        border: none;
        background: transparent;
    }

    .sponsered-inner {
        display: flex;
        align-items: center;
        justify-content: space-between;
    }

    .sponsered-inner .green-one {
        color: #90eb82;
        font-size: 14px;
    }

    .sponsered-inner .pink-one {
        color: #e62e51;
        text-decoration: underline;
        font-size: 14px;
        cursor: pointer;
    }

    .for_web {
        display: block;
    }

    .for_mob {
        display: none;
    }

    @media (max-width: 575px) {
        .for_web {
            display: none;
        }

        .for_mob {
            display: block;
        }

        .for_mob.sm-left-desc h5 {
            font-size: 12px;
        }
    }

    @media (max-width: 700px) {
        .for_web {
            display: none;
        }

        .for_mob {
            display: block;
        }

        .for_mob.sm-left-desc h5 {
            font-size: 12px;
        }
    }

    /*bid now modal css*/
    .bidnow_modal .modal-body {
        padding-bottom: 1rem;
    }

    .bidnow_modal .price-card {
        background: #000;
    }

    .bidnow_modal .quantity input {
        color: #fff;
    }

    .bidnow_modal .modal-body button {
        background: #000;
    }

    .bidnow_modal .modal-header {
        position: relative;
    }

    .bidnow_modal .btn_close {
        position: absolute;
        right: 15px;
    }

    .bidnow_modal .spot_heading {
        margin-left: 5px;
        font-size: 18px;
    }

    .bidnow_modal .bidnow_upload {
        position: relative;
        display: inline-block;
        margin-right: 25px;
        cursor: pointer;
        border-radius: 2.5px;
        box-shadow: 0 1.5px 3px 0 rgb(0 0 0 / 16%);
        color: #fff;
        font-size: 14px;
        background: #000;
        margin-bottom: 0;
        padding: 2px 10px;
    }

    .bidnow_modal .bidnow_upload input {
        position: absolute;
        width: 0;
        height: 0;
    }

    /*video Ad card styling*/
    .videoAd_card {}

    .videoAd_card .image__innerwrapper,
    .image__innerwrapper {
        border: 1px solid #dfdede;
        border-radius: 4px;
        margin-bottom: 5px;
    }

    .videoAd_card .video_wrapper {}

    .videoAd_card .video_wrapper iframe {}

    .color-redd {
        color: #F24336;
    }

    a.text-success.loadbtn.loadbtn-mobile {
        align-items: center;
        display: flex;
    }

    .ml-s-5 {
        margin-left: 10px;
    }

    .scrolling-wrapper-display {
        display: none;
    }
</style>
@endsection
@section('title') Market @endsection
@section('bottom-navbar')
<div id="uploading-section-artist-mobile" class="uploading-section-artist-mobile" style="display: none">
    <div class="tab-select mtab_all ">

    </div>
</div>
<!-- CURL -->


<div class="scrolling-wrapper">
    <div class="scrolling" id="upper-exchange"> Exchange Rates
        <span class="pink">:</span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <img src="{{ asset('assets/images/valyoux/ethereum_logo_valyou_x_music.svg') }}" width="15" height="15" alt="">&nbsp;&nbsp;1 Ethereum (ETH) &nbsp;=&nbsp;
        <p>0.02776 BTC</p> &nbsp;=&nbsp; $
        <p>{{ $ETHUSDT ?? '' }} USD</p> &nbsp;&nbsp;
        <p class="text-green"> + 0.25% </p> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <img src="{{ asset('assets/images/valyoux/bitcoinlogo.svg') }}" width="15" height="15">&nbsp;&nbsp;1 Bitcoin (BTC) &nbsp;=&nbsp; $
        <p>{{ $BTCUSDT ?? '' }} USD</p> &nbsp;&nbsp;
        <p class="text-red"> - 0.15% </p> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <img src="{{ asset('assets/images/valyoux/vuxlogo.svg') }}" width="15" height="15">&nbsp;&nbsp;1 Valyou X Dollar (VXD) = &nbsp;&nbsp; $
        <p>{{ $USDCUSDT ?? '' }} USDC</p> &nbsp;&nbsp;
        <p class="text-red"> - 0.1% </p> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <img src="{{ asset('assets/images/valyoux/vuxlogo.svg') }}" width="15" height="15">&nbsp;&nbsp;1 VALYOU X MUSIC (VALYOU X) = &nbsp;&nbsp;
        <p>$0.50 USDC</p> &nbsp;&nbsp;
        <p class="text-green"> + 2.5% </p>
        &nbsp;&nbsp;&nbsp;

        Exchange Rates
        <span class="pink">:</span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <img src="{{ asset('assets/images/valyoux/ethereum_logo_valyou_x_music.svg') }}" width="15" height="15" alt="">&nbsp;&nbsp;1 Ethereum (ETH) &nbsp;=&nbsp;
        <p>0.02776 BTC</p> &nbsp;=&nbsp; $
        <p>{{ $ETHUSDT ?? '' }} USD</p> &nbsp;&nbsp;
        <p class="text-green"> + 0.25% </p> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <img src="{{ asset('assets/images/valyoux/bitcoinlogo.svg') }}" width="15" height="15">&nbsp;&nbsp;1 Bitcoin (BTC) &nbsp;=&nbsp; $
        <p>{{ $BTCUSDT ?? '' }} USD</p> &nbsp;&nbsp;
        <p class="text-red"> - 0.15% </p> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <img src="{{ asset('assets/images/valyoux/vuxlogo.svg') }}" width="15" height="15">&nbsp;&nbsp;1 Valyou X Dollar (VXD) = &nbsp;&nbsp; $
        <p>{{ $USDCUSDT ?? '' }} USDC</p> &nbsp;&nbsp;
        <p class="text-red"> - 0.1% </p> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <img src="{{ asset('assets/images/valyoux/vuxlogo.svg') }}" width="15" height="15">&nbsp;&nbsp;1 VALYOU X MUSIC (VALYOU X) = &nbsp;&nbsp;
        <p>$0.50 USDC</p> &nbsp;&nbsp;
        <p class="text-green"> + 2.5% </p>
        &nbsp;&nbsp;&nbsp;

        Exchange Rates
        <span class="pink">:</span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <img src="{{ asset('assets/images/valyoux/ethereum_logo_valyou_x_music.svg') }}" width="15" height="15" alt="">&nbsp;&nbsp;1 Ethereum (ETH) &nbsp;=&nbsp;
        <p>0.02776 BTC</p> &nbsp;=&nbsp; $
        <p>{{ $ETHUSDT ?? '' }} USD</p> &nbsp;&nbsp;
        <p class="text-green"> + 0.25% </p> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <img src="{{ asset('assets/images/valyoux/bitcoinlogo.svg') }}" width="15" height="15">&nbsp;&nbsp;1 Bitcoin (BTC) &nbsp;=&nbsp; $
        <p>{{ $BTCUSDT ?? '' }} USD</p> &nbsp;&nbsp;
        <p class="text-red"> - 0.15% </p> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <img src="{{ asset('assets/images/valyoux/vuxlogo.svg') }}" width="15" height="15">&nbsp;&nbsp;1 Valyou X Dollar (VXD) = &nbsp;&nbsp; $
        <p>{{ $USDCUSDT ?? '' }} USDC</p> &nbsp;&nbsp;
        <p class="text-red"> - 0.1% </p> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <img src="{{ asset('assets/images/valyoux/vuxlogo.svg') }}" width="15" height="15">&nbsp;&nbsp;1 VALYOU X MUSIC (VALYOU X) = &nbsp;&nbsp;
        <p>$0.50 USDC</p> &nbsp;&nbsp;
        <p class="text-green"> + 2.5% </p>
        &nbsp;&nbsp;&nbsp;

        Exchange Rates
        <span class="pink">:</span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <img src="{{ asset('assets/images/valyoux/ethereum_logo_valyou_x_music.svg') }}" width="15" height="15" alt="">&nbsp;&nbsp;1 Ethereum (ETH) &nbsp;=&nbsp;
        <p>0.02776 BTC</p> &nbsp;=&nbsp; $
        <p>{{ $ETHUSDT ?? '' }} USD</p> &nbsp;&nbsp;
        <p class="text-green"> + 0.25% </p> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <img src="{{ asset('assets/images/valyoux/bitcoinlogo.svg') }}" width="15" height="15">&nbsp;&nbsp;1 Bitcoin (BTC) &nbsp;=&nbsp; $
        <p>{{ $BTCUSDT ?? '' }} USD</p> &nbsp;&nbsp;
        <p class="text-red"> - 0.15% </p> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <img src="{{ asset('assets/images/valyoux/vuxlogo.svg') }}" width="15" height="15">&nbsp;&nbsp;1 Valyou X Dollar (VXD) = &nbsp;&nbsp; $
        <p>{{ $USDCUSDT ?? '' }} USDC</p> &nbsp;&nbsp;
        <p class="text-red"> - 0.1% </p> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <img src="{{ asset('assets/images/valyoux/vuxlogo.svg') }}" width="15" height="15">&nbsp;&nbsp;1 VALYOU X MUSIC (VALYOU X) = &nbsp;&nbsp;
        <p>$0.50 USDC</p> &nbsp;&nbsp;
        <p class="text-green"> + 2.5% </p>
        &nbsp;&nbsp;&nbsp;

        Exchange Rates
        <span class="pink">:</span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <img src="{{ asset('assets/images/valyoux/ethereum_logo_valyou_x_music.svg') }}" width="15" height="15" alt="">&nbsp;&nbsp;1 Ethereum (ETH) &nbsp;=&nbsp;
        <p>0.02776 BTC</p> &nbsp;=&nbsp; $
        <p>{{ $ETHUSDT ?? '' }} USD</p> &nbsp;&nbsp;
        <p class="text-green"> + 0.25% </p> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <img src="{{ asset('assets/images/valyoux/bitcoinlogo.svg') }}" width="15" height="15">&nbsp;&nbsp;1 Bitcoin (BTC) &nbsp;=&nbsp; $
        <p>{{ $BTCUSDT ?? '' }} USD</p> &nbsp;&nbsp;
        <p class="text-red"> - 0.15% </p> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <img src="{{ asset('assets/images/valyoux/vuxlogo.svg') }}" width="15" height="15">&nbsp;&nbsp;1 Valyou X Dollar (VXD) = &nbsp;&nbsp; $
        <p>{{ $USDCUSDT ?? '' }} USDC</p> &nbsp;&nbsp;
        <p class="text-red"> - 0.1% </p> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <img src="{{ asset('assets/images/valyoux/vuxlogo.svg') }}" width="15" height="15">&nbsp;&nbsp;1 VALYOU X MUSIC (VALYOU X) = &nbsp;&nbsp;
        <p>$0.50 USDC</p> &nbsp;&nbsp;
        <p class="text-green"> + 2.5% </p>
        &nbsp;&nbsp;&nbsp;

        Exchange Rates
        <span class="pink">:</span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <img src="{{ asset('assets/images/valyoux/ethereum_logo_valyou_x_music.svg') }}" width="15" height="15" alt="">&nbsp;&nbsp;1 Ethereum (ETH) &nbsp;=&nbsp;
        <p>0.02776 BTC</p> &nbsp;=&nbsp; $
        <p>{{ $ETHUSDT ?? '' }} USD</p> &nbsp;&nbsp;
        <p class="text-green"> + 0.25% </p> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <img src="{{ asset('assets/images/valyoux/bitcoinlogo.svg') }}" width="15" height="15">&nbsp;&nbsp;1 Bitcoin (BTC) &nbsp;=&nbsp; $
        <p>{{ $BTCUSDT ?? '' }} USD</p> &nbsp;&nbsp;
        <p class="text-red"> - 0.15% </p> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <img src="{{ asset('assets/images/valyoux/vuxlogo.svg') }}" width="15" height="15">&nbsp;&nbsp;1 Valyou X Dollar (VXD) = &nbsp;&nbsp; $
        <p>{{ $USDCUSDT ?? '' }} USDC</p> &nbsp;&nbsp;
        <p class="text-red"> - 0.1% </p> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <img src="{{ asset('assets/images/valyoux/vuxlogo.svg') }}" width="15" height="15">&nbsp;&nbsp;1 VALYOU X MUSIC (VALYOU X) = &nbsp;&nbsp;
        <p>$0.50 USDC</p> &nbsp;&nbsp;
        <p class="text-green"> + 2.5% </p>
    </div>
</div>

@endsection

@section('content')


<div class="scrolling-wrapper-lower">
    <div class="scrolling" id="lower-exchange">
        Exchange Rates
        <span class="pink">:</span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <img src="{{ asset('assets/images/valyoux/ethereum_logo_valyou_x_music.svg') }}" width="15" height="15" alt="">&nbsp;&nbsp;1 Ethereum (ETH) &nbsp;=&nbsp;
        <p>0.02776 BTC</p> &nbsp;=&nbsp; $
        <p>{{ $ETHUSDT ?? '' }} USD</p> &nbsp;&nbsp;
        <p class="text-green"> + 0.25% </p> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <img src="{{ asset('assets/images/valyoux/bitcoinlogo.svg') }}" width="15" height="15">&nbsp;&nbsp;1 Bitcoin (BTC) &nbsp;=&nbsp; $
        <p>{{ $BTCUSDT ?? '' }} USD</p> &nbsp;&nbsp;
        <p class="text-red"> - 0.15% </p> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <img src="{{ asset('assets/images/valyoux/vuxlogo.svg') }}" width="15" height="15">&nbsp;&nbsp;1 Valyou X Dollar (VXD) = &nbsp;&nbsp; $
        <p>{{ $USDCUSDT ?? '' }} USDC</p> &nbsp;&nbsp;
        <p class="text-red"> - 0.1% </p> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <img src="{{ asset('assets/images/valyoux/vuxlogo.svg') }}" width="15" height="15">&nbsp;&nbsp;1 VALYOU X MUSIC (VALYOU X) = &nbsp;&nbsp;
        <p>$0.50 USDC</p> &nbsp;&nbsp;
        <p class="text-green"> +2.5% </p>
        &nbsp;&nbsp;&nbsp;

        Exchange Rates
        <span class="pink">:</span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <img src="{{ asset('assets/images/valyoux/ethereum_logo_valyou_x_music.svg') }}" width="15" height="15" alt="">&nbsp;&nbsp;1 Ethereum (ETH) &nbsp;=&nbsp;
        <p>0.02776 BTC</p> &nbsp;=&nbsp; $
        <p>{{ $ETHUSDT ?? '' }} USD</p> &nbsp;&nbsp;
        <p class="text-green"> + 0.25% </p> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <img src="{{ asset('assets/images/valyoux/bitcoinlogo.svg') }}" width="15" height="15">&nbsp;&nbsp;1 Bitcoin (BTC) &nbsp;=&nbsp; $
        <p>{{ $BTCUSDT ?? '' }} USD</p> &nbsp;&nbsp;
        <p class="text-red"> - 0.15% </p> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <img src="{{ asset('assets/images/valyoux/vuxlogo.svg') }}" width="15" height="15">&nbsp;&nbsp;1 Valyou X Dollar (VXD) = &nbsp;&nbsp; $
        <p>{{ $USDCUSDT ?? '' }} USDC</p> &nbsp;&nbsp;
        <p class="text-red"> - 0.1% </p> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <img src="{{ asset('assets/images/valyoux/vuxlogo.svg') }}" width="15" height="15">&nbsp;&nbsp;1 VALYOU X MUSIC (VALYOU X) = &nbsp;&nbsp;
        <p>$0.50 USDC</p> &nbsp;&nbsp;
        <p class="text-green"> +2.5% </p>
        &nbsp;&nbsp;&nbsp;

        Exchange Rates
        <span class="pink">:</span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <img src="{{ asset('assets/images/valyoux/ethereum_logo_valyou_x_music.svg') }}" width="15" height="15" alt="">&nbsp;&nbsp;1 Ethereum (ETH) &nbsp;=&nbsp;
        <p>0.02776 BTC</p> &nbsp;=&nbsp; $
        <p>{{ $ETHUSDT ?? '' }} USD</p> &nbsp;&nbsp;
        <p class="text-green"> + 0.25% </p> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <img src="{{ asset('assets/images/valyoux/bitcoinlogo.svg') }}" width="15" height="15">&nbsp;&nbsp;1 Bitcoin (BTC) &nbsp;=&nbsp; $
        <p>{{ $BTCUSDT ?? '' }} USD</p> &nbsp;&nbsp;
        <p class="text-red"> - 0.15% </p> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <img src="{{ asset('assets/images/valyoux/vuxlogo.svg') }}" width="15" height="15">&nbsp;&nbsp;1 Valyou X Dollar (VXD) = &nbsp;&nbsp; $
        <p>{{ $USDCUSDT ?? '' }} USDC</p> &nbsp;&nbsp;
        <p class="text-red"> - 0.1% </p> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <img src="{{ asset('assets/images/valyoux/vuxlogo.svg') }}" width="15" height="15">&nbsp;&nbsp;1 VALYOU X MUSIC (VALYOU X) = &nbsp;&nbsp;
        <p>$0.50 USDC</p> &nbsp;&nbsp;
        <p class="text-green"> +2.5% </p>
        &nbsp;&nbsp;&nbsp;

        Exchange Rates
        <span class="pink">:</span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <img src="{{ asset('assets/images/valyoux/ethereum_logo_valyou_x_music.svg') }}" width="15" height="15" alt="">&nbsp;&nbsp;1 Ethereum (ETH) &nbsp;=&nbsp;
        <p>0.02776 BTC</p> &nbsp;=&nbsp; $
        <p>{{ $ETHUSDT ?? '' }} USD</p> &nbsp;&nbsp;
        <p class="text-green"> + 0.25% </p> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <img src="{{ asset('assets/images/valyoux/bitcoinlogo.svg') }}" width="15" height="15">&nbsp;&nbsp;1 Bitcoin (BTC) &nbsp;=&nbsp; $
        <p>{{ $BTCUSDT ?? '' }} USD</p> &nbsp;&nbsp;
        <p class="text-red"> - 0.15% </p> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <img src="{{ asset('assets/images/valyoux/vuxlogo.svg') }}" width="15" height="15">&nbsp;&nbsp;1 Valyou X Dollar (VXD) = &nbsp;&nbsp; $
        <p>{{ $USDCUSDT ?? '' }} USDC</p> &nbsp;&nbsp;
        <p class="text-red"> - 0.1% </p> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <img src="{{ asset('assets/images/valyoux/vuxlogo.svg') }}" width="15" height="15">&nbsp;&nbsp;1 VALYOU X MUSIC (VALYOU X) = &nbsp;&nbsp;
        <p>$0.50 USDC</p> &nbsp;&nbsp;
        <p class="text-green"> +2.5% </p>
        &nbsp;&nbsp;&nbsp;

        Exchange Rates
        <span class="pink">:</span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <img src="{{ asset('assets/images/valyoux/ethereum_logo_valyou_x_music.svg') }}" width="15" height="15" alt="">&nbsp;&nbsp;1 Ethereum (ETH) &nbsp;=&nbsp;
        <p>0.02776 BTC</p> &nbsp;=&nbsp; $
        <p>{{ $ETHUSDT ?? '' }} USD</p> &nbsp;&nbsp;
        <p class="text-green"> + 0.25% </p> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <img src="{{ asset('assets/images/valyoux/bitcoinlogo.svg') }}" width="15" height="15">&nbsp;&nbsp;1 Bitcoin (BTC) &nbsp;=&nbsp; $
        <p>{{ $BTCUSDT ?? '' }} USD</p> &nbsp;&nbsp;
        <p class="text-red"> - 0.15% </p> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <img src="{{ asset('assets/images/valyoux/vuxlogo.svg') }}" width="15" height="15">&nbsp;&nbsp;1 Valyou X Dollar (VXD) = &nbsp;&nbsp; $
        <p>{{ $USDCUSDT ?? '' }} USDC</p> &nbsp;&nbsp;
        <p class="text-red"> - 0.1% </p> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <img src="{{ asset('assets/images/valyoux/vuxlogo.svg') }}" width="15" height="15">&nbsp;&nbsp;1 VALYOU X MUSIC (VALYOU X) = &nbsp;&nbsp;
        <p>$0.50 USDC</p> &nbsp;&nbsp;
        <p class="text-green"> +2.5% </p>
        &nbsp;&nbsp;&nbsp;

        Exchange Rates
        <span class="pink">:</span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <img src="{{ asset('assets/images/valyoux/ethereum_logo_valyou_x_music.svg') }}" width="15" height="15" alt="">&nbsp;&nbsp;1 Ethereum (ETH) &nbsp;=&nbsp;
        <p>0.02776 BTC</p> &nbsp;=&nbsp; $
        <p>{{ $ETHUSDT ?? '' }} USD</p> &nbsp;&nbsp;
        <p class="text-green"> + 0.25% </p> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <img src="{{ asset('assets/images/valyoux/bitcoinlogo.svg') }}" width="15" height="15">&nbsp;&nbsp;1 Bitcoin (BTC) &nbsp;=&nbsp; $
        <p>{{ $BTCUSDT ?? '' }} USD</p> &nbsp;&nbsp;
        <p class="text-red"> - 0.15% </p> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <img src="{{ asset('assets/images/valyoux/vuxlogo.svg') }}" width="15" height="15">&nbsp;&nbsp;1 Valyou X Dollar (VXD) = &nbsp;&nbsp; $
        <p>{{ $USDCUSDT ?? '' }} USDC</p> &nbsp;&nbsp;
        <p class="text-red"> - 0.1% </p> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <img src="{{ asset('assets/images/valyoux/vuxlogo.svg') }}" width="15" height="15">&nbsp;&nbsp;1 VALYOU X MUSIC (VALYOU X) = &nbsp;&nbsp;
        <p>$0.50 USDC</p> &nbsp;&nbsp;
        <p class="text-green"> +2.5% </p>
    </div>
</div>

<div class="row">
    <div class="col-lg-12">
        <!--tri-angle-->
        <div class="row mt-4 ">
            <div class="col-lg-8 col-12">
                @if (!Auth::user()->roles->contains(3))
                <!-- <p class="uploading-section-artist-sub-heading mb-2"> Create a new post </p> -->
                <div class="card post-card-mobile-body">
                    <div class="uploading-section card-body row align-items-center">
                        <div class="col-lg-2 col-sm-2 col-3">
                            <img src="{{ isset($user_profile['photo']) ? asset($user_profile['photo']) : asset('assets/images/users/avatar-1.jpg') }}" alt="" class="avatar-md rounded-circle post-img ">
                        </div>
                        <div class="col-lg-5 col-sm-5 col-9">
                            <input type="text" class="form-control uploading-section-title" placeholder="Share Your Tracks and videos">
                        </div>
                        <div class="col-lg-5 col-sm-5 col-12">
                            <div class="row justify-content-end align-items-center">
                                <a href="{{ route('admin.upload-media') }}" title="Upload Video">
                                    <img class="uploading-section-upload-img width-40" src="{{ asset('assets/images/valyoux/video_player.svg') }}">
                                    <img class="uploading-section-upload-img " src="{{ asset('assets/images/valyoux/news_feed_post.svg') }}">
                                </a>
                                <a href="{{ route('admin.upload-media') }}" class="btn btn-pink btn-sm w-md waves-effect waves-light mr-3 post-now-button" style> Post Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                @endif

                {{-- Custom Work Start --}}
                <div class="all_social_videos"></div>
                {{-- Custom Work End --}}

            </div>
            <div class="col-lg-4 col-4">
                <div class="uploading-section-artist">
                    <div class="row">
                        <span class="uploading-section-artist-main-heading"> Trending Artists In Stock Market </span>
                        <div class="align-self-end ml-auto">
                            <span class="up-change-stock">up<i class="mdi mdi-arrow-up"></i></span>
                            <span class="down-change-stock ml-2">down<i class="mdi mdi-arrow-down"></i></span>
                        </div>
                    </div>
                    @include('partician.artist_markets',['artist_by_country'=>$artist_by_country])
                </div>
            </div>
        </div>
        <!-- end row -->

        <!--Bid now Modal -->
        <div class="modal fade proceed_modal bidnow_modal" id="bidNowModal" aria-labelledby="bidNowModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4>
                            <b class="color-pinkk">Bid Now</b>
                            <span class="spot_heading">60 spots remaining | Biding war </span>
                        </h4>
                        <label for="uploadbid" class="bidnow_upload">
                            <input id="uploadbid" type="file" />
                            Upload Ad
                        </label>
                        <button type="button" class="close btn_close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="text-center">
                            <div class="card-body price-card">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="input-price-div">
                                            <p>Minimum Bid $10.</p>
                                            <!--when the list of all bid is completed we need to show the below text and hide the above one. By default below text would be hidden-->
                                            <p class="d-none">Place a bid higher than $20</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="quantity">
                                    <input type='button' value='-' id="minus" class='minus' field='quantity' />
                                    <input type='text' name='quantity' value='25' class='qty input-qty dollar' />
                                    <input type='button' value='+' id="plus" class='plus ' field='quantity' />
                                </div>
                            </div>
                            <br><br>
                            <h2 style="font-size: 24px; text-align: center; padding: 0 0 0; color: #1EDD0E;    font-weight: 700;">Total Cost + Fees: $ 1490 VXD</h2>
                            <br>
                            <!--<h2 style="font-size: 16px; text-align: center; padding: 0 0 20px; color: #000;">Amount of Shares X Current Stock Price + Fees % = Total Cost.</h2>-->
                            <button class="btn btn-green btn-sm waves-effect waves-light">Bid Now</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="edit_comment" aria-labelledby="bidNowModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4><b class="color-pinkk">Edit Comment ! </b></h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="#" method="post" class="update_comment_form">
                        <div class="modal-body">
                            <div class="text-center">
                                <input type="hidden" class="comment_id">

                                <input type="text" class="form-control comment" name="comment">
                            </div>
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="modal fade video-modal" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel"><b class="color-pinkk">Pay $0.03 cents and Watch</b>
                        </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p>You will be charged $0.03 cents if you watch this video. Do you wish to proceed? </p>
                        <p>If you do not wish to be charged again each time you listen to this song, you have the option to click and Valyou this song
                            for an amount of your choice in order to receive unlimited plays of this song as well Vip artist-fan reward points the more you Valyou .</p>
                        <p>Thank you. We appreciate your support. </p>
                        <b id="brandName">Artist Name or Brand.</b>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn valyou-g-btn playvideo" data-dismiss="modal">OK</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade video-modal" id="staticBackdropSong" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropSongLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropSongLabel"><b class="color-pinkk">Pay $0.02 cents and listen</b>
                        </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p>You will be charged $0.01 cents if you listen to this song. Do you wish to proceed? </p>
                        <p>If you do not wish to be charged again each time you listen to this song, you have the option to click and Valyou this song for an
                            amount of your choice to receive unlimited plays for this particular song as well Vip artist-fan reward point the more you .</p>
                        <p>Thank you for supporting </p>
                        <b>Artist Name or Brand.</b>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn valyou-g-btn playsong" data-dismiss="modal">OK</button>
                    </div>
                </div>
            </div>
        </div>


        <!-- When play to earn -->
        <div class="modal fade video-modal" id="watch-to-earn" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">
                            <b class="color-pinkk">Watch and Earn</b>
                            <p></p>
                        </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p>You will get $<span id="reward"></span> VXD if you watch this video. Do you wish to proceed? </p>
                        <b id="brandName-watch-to-earn">Artist Name or Brand.</b>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn valyou-g-btn playvideo" data-dismiss="modal">OK</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade video-modal" id="listen-to-earn" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel"><b class="color-pinkk">Listen and Earn</b>
                        </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p>You will get $<span id="reward"></span>VXD if you watch this video. Do you wish to proceed? </p>
                        <b id="brandName">Artist Name or Brand.</b>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn valyou-g-btn playvideo" data-dismiss="modal">OK</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
<!-- <script src="{{ URL::asset('assets/libs/select2/select2.min.js') }}"></script> -->
<!-- <script src="{{ URL::asset('assets/js/pages/form-advanced.init.js') }}"></script> -->
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.min.js"></script> -->
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/multiselect/2.2.9/js/multiselect.js"></script> -->
<script src="{{ URL::asset('assets/libs/axios/axios.min.js') }}"></script>
<script src="{{ URL::asset('assets/libs/tagify/tagify.min.js') }}"></script>
<script src="{{ URL::asset('assets/libs/intl-tel-input/js/intlTelInput.js') }}"></script>
<script class="iti-load-utils" async="" src="{{ URL::asset('assets/libs/intl-tel-input/js/utils.js') }}"></script>
<!-- <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script> -->
@endsection

@section('script-bottom')
<script>
    $(document).ready(function() {

        $(document).on('click', '.vertical-menu-btn', function() {
            if ($(window).width() <= 768) {
                if ($("boddy").hasClass("vertical-collpsed")) {

                } else {
                    if ($("body").hasClass("sidebar-enable")) {
                        $('#uploading-section-artist-mobile').removeClass('uploading-section-artist-mobile');
                        $('.scrolling-wrapper').addClass('scrolling-wrapper-display');
                    } else {
                        $('#uploading-section-artist-mobile').addClass('uploading-section-artist-mobile');
                        $('.scrolling-wrapper').removeClass('scrolling-wrapper-display');
                    }
                }
            }
        });

        loadmoresocialdata(0, 'all');
        <?php if(request()->segment(2) == "watch-to-earn"){
            echo "loadmoreData(0, 'watch-to-earn');";
        }elseif(request()->segment(2) == "listen-to-earn"){
            echo "loadmoreData(0, 'listen-to-earn');";
        }else
            echo "loadmoreData(0);";
        ?>
        

        //web version -> Loading artists
        $(document).on('click', '.loadbtn', function() {
            var pId = $(this).data("id");
            var tab = $(this).data("tab");
            loadmoresocialdata(pId, tab, 1);
        });

        $(".sorting").on("click", function() {
            var type = $(this).attr('type');
            loadmoresocialdata(0, type);
        });

        // up & down button
        $(document).on('click', '.up-change-stock', function() {
            var tab = $(".artist-maker-tabs").find(".active").attr("aria-controls");
            loadmoresocialdata(0, tab, 0, 'up');
        });

        $(document).on('click', '.down-change-stock', function() {
            var tab = $(".artist-maker-tabs").find(".active").attr("aria-controls");
            loadmoresocialdata(0, tab, 0, 'down');
        });

        //mobile version -> Loading artists
        $(document).on('click', '.loadbtnvideos', function() {
            $(".loadbtnvideos").html('<i style="color: #46c899;"  class="bx bx-loader bx-spin font-size-18 align-middle mr-2"></i> Loading...');
            var pId = $(this).data("id");
            loadmoreData(pId);
        });

        // Valyou Song En
        function loadmoresocialdata(page, tabId, loadingMore = 0, filter = '') {
            $.ajax({
                url: "loadmoresocialdata",
                type: "GET",
                cache: false,
                data: {
                    offset: page,
                    tabId: tabId,
                    filter: filter
                },
                beforeSend: function() { // Before we send the request, remove the .hidden class from the spinner and default to inline-block.
                    if (loadingMore == 1) {
                        $(".loadbtn").remove();
                        $(".loading-btn").html(' <i style="color: #46c899;"  class="bx bx-loader bx-spin font-size-18 align-middle mr-2"></i> Loading...');
                    }
                },
                success: function(data) {
                    if (data) {
                        const data1 = JSON.parse(data);

                        if (page) {
                            $(".tab_" + tabId).append(data1.web);
                            $(".mtab_" + tabId).append(data1.mobile);
                        } else {
                            $(".tab_" + tabId).html(data1.web);
                            $(".mtab_" + tabId).html(data1.mobile);
                        }
                    }
                },
                complete: function(data) { // Set our complete callback, adding the .hidden class and hiding the spinner.
                    if (loadingMore == 1)
                        $(".loading-btn").html('');
                },
            });
        }

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
    });

    const slider = document.querySelector('.scrolling-wrapper-lower');
    let isDown = false;
    let startX;
    let scrollLeft;
    slider.addEventListener('mousedown', (e) => {
        console.log('mousedown');
        isDown = true;
        slider.classList.add('active');
        startX = e.pageX - slider.offsetLeft;
        scrollLeft = slider.scrollLeft;
    });
    slider.addEventListener('mouseleave', () => {
        console.log('mouseleave');
        isDown = false;
        slider.classList.remove('active');
    });
    slider.addEventListener('mouseup', () => {
        isDown = false;
        slider.classList.remove('active');
    });
    slider.addEventListener('mousemove', (e) => {
        if (!isDown) return;
        e.preventDefault();
        const x = e.pageX - slider.offsetLeft;
        const walk = (x - startX) * 3; //scroll-fast
        slider.scrollLeft = scrollLeft - walk;
        console.log(walk);
    });


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
            utilsScript: "{{ URL::asset('assets/libs/intl-tel-input/js/utils.js') }}"
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
        url: "{{ route('admin.promotereward') }}",
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
    
}else{
?>
$(document).on('click','.overlay-for-video',function () {
    let id = $(this).data('videoid');
    let brand =$(this).data('brand');
    let userId = $(this).data('userid');
    let video = $(this).data('video');
    $('#brandName').html(brand);
    if(video == 1){
        $(`#video`+id).trigger('play');
        $(`#overlay`+id).remove();

    }else{
        $('#staticBackdrop').modal('show');
        $('button.playvideo').attr('id',`${id}`);
    }
});

$(document).on('click', '.playvideo', function() {
    var id = $(this).attr('id');
    let userId = $(`#overlay${id}`).data('userid');
    let wallet = "{{ auth()->user()->wallet }}";
    console.log(wallet);
    if (Number(wallet) > 0.03) {
        axios({
            method: "post",
            url: "{{ route('admin.valyousong') }}",
            data: {
                id: id,
                userId
            }
        }).then((res) => {
            console.log(res);
            // js_success("Enjoy this a lot!");
            $(`#video${id}`).trigger('play');
            $(`#overlay${id}`).remove();
        }).catch((err) => {
            throw err;
        });
    } else {
        js_error("You don't have sufficient amount in your wallet to play this Video.");
    }
});
<?php
}
?>

// Play to earn Video
</script>

<?php
if (Session::has('error')) {
?>
    <script type="text/javascript">
        swal("{{ Session::get('error') }}");
    </script>
<?php }
if (Session::has('success')) {
?>
    <script type="text/javascript">
        swal("{{ Session::get('success') }}");
    </script>
<?php } ?>
@endsection