@extends('front.layouts.master')
@section('title','Anasayfa')
@section('content')

@include('front.widgets.categoryWidget')
@include('front.widgets.articleSearchWidget')

                
                <!-- Side widgets-->
                <div class="col-md-3">
                    @include('front.widgets.searchWidget')

                    @include('front.widgets.socialWidget')
                </div>
                        </div>
                    </div>
                </div>
                
@endsection