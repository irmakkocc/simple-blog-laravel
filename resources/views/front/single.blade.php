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
                    @include('front.widgets.searchWidget')

                    @include('front.widgets.socialWidget')
                
                </div>


@endsection
