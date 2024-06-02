@extends('front.layouts.master')
@section('title',$category->name)
@section('content')

@include('front.widgets.categoryWidget')
@include('front.widgets.articleWidget')
                
                <!-- Side widgets-->
                <div class="col-md-3">
                    <!-- Search widget-->
                    <div class="card mb-4">
                        <div class="card-header">Search</div>
                        <div class="card-body">
                            <div class="input-group">
                                <input class="form-control" type="text" placeholder="Enter search term..." aria-label="Enter search term..." aria-describedby="button-search" />
                                <button class="btn btn-primary" id="button-search" type="button">Go!</button>
                            </div>
                        </div>
                    </div>
                    
                    @include('front.widgets.socialWidget')
                    
                
                </div>

@endsection