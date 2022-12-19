@extends('layouts.site')
@section('css')
    <link rel="stylesheet" type="text/css" href="{{url('public/site')}}/css/mv.css" />
@endsection
@section('main')
<div class="ms-wrapper-mobile">
                <div class="ms-mv-content">
                    <div class="ms-mv-action">
                    <div class="blur-mv-bg"></div>
                    <img class="img-blur" src="{{url('public/site')}}/image/lac-troi-banner.jpg" />
                    <div class="wrapper-mv-action">
                    <p class="title-suggesstion title-mv">{{$mv->name_mv}}, {{$mv->name_artist}}</p>
                    <div class="wrapper-video ">
                    <iframe width="100%" height="400px" src="{{$mv->link_mv}}"
                        title="YouTube video player" frameborder="0" allow="accelerometer; autoplay;
                         clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                          allowfullscreen>
                    </iframe>
                    </div>
                </div>

                </div>

                <div class="ms-mv-song">
                    <div class="container-content">
                        <p class="title-suggesstion">MV Hot</p>
                        <div class="owl-carousel carousel-mv-song">
                            <div class="item">
                                <div class="wrapper-mv-song">
                                    <div class="overlay"></div>
                                    <span class="material-icons">play_arrow</span>
                                    <img src="{{url('public/site')}}/image/mv-song-1.jpg"></img>
                                </div>
                                <div class="info-mv-song">
                                    <div class="name">Độ tộc 2</div>
                                    <div class="creator">Độ Mixi</div>
                                </div>
                            </div>

                            <div class="item">
                                <div class="wrapper-mv-song">
                                    <div class="overlay"></div>
                                    <span class="material-icons">play_arrow</span>
                                    <img src="{{url('public/site')}}/image/mv-song-2.jpg"></img>
                                </div>
                                <div class="info-mv-song">
                                    <div class="name">Đường tôi chở em về</div>
                                    <div class="creator">Buitruonglinh</div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="wrapper-mv-song">
                                    <div class="overlay"></div>
                                    <span class="material-icons">play_arrow</span>
                                    <img src="{{url('public/site')}}/image/mv-song-3.jpg" />
                                </div>
                                <div class="info-mv-song">
                                    <div class="name">Sài Gòn Hôm Nay Mưa</div>
                                    <div class="creator">JSOL</div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="wrapper-mv-song">
                                    <div class="overlay"></div>
                                    <span class="material-icons">play_arrow</span>
                                    <img src="{{url('public/site')}}/image/mv-song-4.jpg"></img>
                                </div>
                                <div class="info-mv-song">
                                    <div class="name">Thức Giấc</div>
                                    <div class="creator">Da LAB</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                </div>
            </div>
@endsection
