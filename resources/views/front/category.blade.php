@extends('front.layouts.master')
@section('title',$category->name)
@section('content')

@include('front.widgets.categoryWidget')
@include('front.widgets.articleWidget')
                
                <!-- Side widgets-->
                <div class="col-md-3">
                    <!-- Search widget-->
                    @include('front.widgets.searchWidget')
                    
                    @include('front.widgets.socialWidget')
                    
                
                </div>

@endsection