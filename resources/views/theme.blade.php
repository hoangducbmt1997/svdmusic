@extends('layouts.site')
@section('css')
    <link rel="stylesheet" type="text/css" href="{{ url('public/site') }}/css/category.css" />
@endsection
@section('main')
<div class="ms-wrapper-mobile">
            <div class="ms-list-category-song ">
                <div class="list-category-bg">
                    <div class="blur-song-bg "></div>
                    <div class="blur-song-bg-1"></div>
                     <h1 class="title-category-song text-title"># CHỦ ĐỀ ÂM NHẠC</h1>
                    <img src="{{url('public/site') }}/image/banner-theme.gif"/>
                </div>
                <div class="wrapper-list-category-song ms-content-mobile">
                    <div class="ms-mv-song ms-category-song">
                        <p class="title-suggesstion">Hoạt động</p>
                        <div class="owl-carousel carousel-mv-song">
                            @foreach($theme as $item)
                            <div class="item">
                                <div class="wrapper-mv-song">
                                    <div class="overlay"></div>
                                    <span class="material-icons">play_arrow</span>
                                    <img src="{{ url('public/uploads/theme') }}/{{ $item->image_theme}}"/>
                                </div>
                                <div class="info-mv-song">
                                    <div class="name">{{$item->name_theme}}</div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="ms-mv-song ms-category-song">
                        <p class="title-suggesstion">Tâm trạng</p>
                        <div class="owl-carousel carousel-mv-song">
                        @foreach($theme as $item)
                            <div class="item">
                                <div class="wrapper-mv-song">
                                    <div class="overlay"></div>
                                    <span class="material-icons">play_arrow</span>
                                    <img src="{{ url('public/uploads/theme') }}/{{ $item->image_theme}}"/>
                                </div>
                                <div class="info-mv-song">
                                    <div class="name">{{$item->name_theme}}</div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
</div>
@endsection
