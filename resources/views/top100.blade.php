@extends('layouts.site')
@section('css')
    <link rel="stylesheet" type="text/css" href="{{ url('site') }}/css/top100.css" />
    <link rel="stylesheet" type="text/css" href="{{ url('site') }}/css/rank-song.css" />
@endsection
@section('main')
<div class="ms-wrapper-mobile">
            <div class="ms-ranking-song">
                <div class="blur-song-bg blur-100-song"></div>
                <div class="blur-song-bg-1"></div>
                <img class="ms-ranking-bg ms-100-song-bg" src="{{ url('site') }}/image/banner-3.gif"  />
                <h1 class="title-ranking-song text-title"># TOP 100 BÀI HÁT</h1>
            </div>
            <div class="ms-wrapper-content-song ms-content-mobile ms-list-ranking-song">
            @foreach($areas as $area)
                <div class="ms-sugesstion-song">
                    <p class="title-suggesstion">{{ $area->name_area}}</p>
                    <div class="owl-carousel carousel-suggesstion-song">
                        @foreach($top100 as $item)
                        <?php
                        $selected= $item->area_id ;
                        ?>
                        @if( $selected ==  $area->id )
                        <a href="{{ route('view.top100', ['id' => $item->id]) }}">
                        <div class="item">
                            <div class="wrapper-suggesstion">
                                <div class="wraper-equalizer">
                                    <button class="equalizer">
                                        <span class="eq1"></span>
                                        <span class="eq2"></span>
                                        <span class="eq3"></span>
                                    </button>
                                </div>
                                <div class="overlay"></div>
                                <img onerror="this.src='{{url('uploads/top100/top100_default.jpg')}}'" src="{{ url('uploads/top100') }}/{{ $item->image_top100 }}" />
                            </div>
                        </div>
                        </a>
                        @else
                        @endif
                        @endforeach
                    </div>
                </div>
            @endforeach
            </div>
            </div>
@endsection
