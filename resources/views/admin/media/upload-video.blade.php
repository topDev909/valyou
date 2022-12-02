@extends('layouts.master')
@section('title') Upload {{ $title }} @endsection
@section('css')
    <!-- Dropify css -->
    <link rel="stylesheet" href="{{ URL::asset('assets/libs/dropify/css/dropify.min.css') }}">
@endsection
@section('content')
    <!-- end row -->
    <div class="row">
        
    </div> <!-- end row -->

@endsection
@section('script')
    <script src="{{ URL::asset('assets/libs/parsleyjs/parsleyjs.min.js') }}"></script>
    <!-- Plugins js -->
    <script src="{{ URL::asset('assets/js/pages/form-validation.init.js') }}"></script>
    <script src="{{ URL::asset('assets/libs/dropify/js/dropify.js') }}"></script>
@endsection
@section('script-bottom')
    <script>
        $(function () {
            $('.dropify').dropify();
        })
    </script>
@endsection
