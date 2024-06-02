@extends('front.layouts.master')
@section('title',$article->title)
@section('bg', $article->image)
@section('content')


@include('front.widgets.categoryWidget')
                <!-- Blog entries-->
                <div class="col-md-6">

                    <!-- Nested row for non-featured blog posts-->
                    <div class="card-body">
                        <div class="small text-muted">{{$article->created_at->format('d M Y')}}</div>
                        <hr>
                        <p class="card-text">{!!$article->content!!}</p>
                    </div>

                    
                </div>
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
