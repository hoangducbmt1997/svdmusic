
@extends('layouts.site')
@section('title', 'Trang chủ')
@section('css')
    <link rel="stylesheet" type="text/css" href="{{ url('/public/site') }}/css/index.css" />
@endsection
@section('main')
    <div class="ms-wrapper-slide">
        <div class="bg-blur"></div>
        <div class="ms-slide">
            <input type="radio" name="slider" id="item-1" checked>
            <input type="radio" name="slider" id="item-2">
            <input type="radio" name="slider" id="item-3">
            <div class="cards flex-center">
                <div class="wrap-control-slide">
                    <span class="material-icons-outlined btn-carousel-prev">arrow_forward</span>
                    <span class="material-icons-outlined btn-carousel-next">arrow_back</span>
                </div>
                <?php
                $countSlide = 1;
                ?>
                @foreach ($banner as $item)
                <label class="card" for="item-{{$countSlide}}" id="song-{{$countSlide++}}">
                    <img src="{{ url('public/uploads/banner') }}/{{ $item->image_banner}}" alt="song">
                </label>
                @endforeach

            </div>
        </div>
    </div>
    <div class="ms-wrapper-mobile">
            <div class="ms-wrapper-content-song">
                <div class="ms-sugesstion-song">
                    <p class="title-suggesstion">Gợi Ý Hôm Nay</p>
                    <div class="owl-carousel carousel-suggesstion-song">
                        @foreach ($top100 as $item)
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
                                    <img onerror="this.src='{{ url('public/uploads/top100/top100_default.jpg') }}'"
                                        src="{{ url('public/uploads/top100') }}/{{ $item->image_top100 }}" />
                                </div>
                            </div>
                            </a>
                        @endforeach
                    </div>
                </div>

                <div class="ms-sugesstion-song">
                    <p class="title-suggesstion">Thể loại</p>
                    <div class="owl-carousel carousel-suggesstion-song">
                        @foreach ($category as $item)
                        <a href="{{ route('view.category', ['id' => $item->id]) }}">
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
                                    <img onerror="this.src='{{ url('public/uploads/category/category_default.jpg') }}'"
                                        src="{{ url('public/uploads/category') }}/{{ $item->image_category }}" />
                                </div>
                            </div>
                        </a>
                        @endforeach

                    </div>
                </div>
                <div class="ms-song-lyrics hidden">
                    <div class="blur-song-bg"></div>
                    <img class="img-blur" />
                    <div class="wrapper-ms-song-lyrics">
                        <div class="song-action">
                            <div class="wrapper-song-action">
                                <p class="title-suggesstion title-playing">Đang phát :</p>
                                <div class="wrapper-img-action">
                                    <div class="overlay"></div>
                                    <img src="">
                                </div>
                                <audio id="audio" class="lrc" data-lrc="" controls></audio>
                            </div>
                        </div>
                        <div class="wrapper-lyric">
                            <div class="container-lyrics">
                                <div class="wrapper-title-lyrics">
                                    <p class="title-suggesstion">Lời bài hát :</p>
                                </div>
                                <div id="abc" class="lyricwrap">
                                    <div class="lyric"></div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="ms-list-song">
                    <p class="title-suggesstion">Bài Hát Mới</p>
                    <div class="owl-carousel carousel-new-song top-ranking-song">
                    @foreach ($songnew as $item)
                            <li class="list-music-top" data-id="{{$item->id}}">
                                <div class="item">
                                        <div class="number-new-song">
                                            <h2 class="number-rank-song"></h2>
                                        </div>
                                    <div class="wrapper-suggesstion">
                                        <span class="material-icons flex-center">play_arrow</span>
                                        <div class="overlay"></div>

                                        <img height="190" onerror="this.src='{{ url('public/uploads/banner_song/video_default.jpg') }}'"
                                            src="{{ url('public/uploads/banner_song') }}/{{ $item->image_bannersong }}"  />
                                    </div>
                                    <div class="info-new-song">
                                        <div class="name">{{ $item->name_song }}</div>
                                        <div class="creator">{{ $item->artist->name_artist }}</div>
                                    </div>
                                </div>
                            </li>
                        @endforeach
                    </div>
                    <div class="ms-list-song">
                        <div class="wrap-list-song">
                            <ul class="list-music ">
                                @foreach ($song as $item)
                                    <li class="list-music-item"
                                        data-music="{{ url('public/uploads/mp3') }}/{{ $item->link_mp3 }}"
                                        data-lrc="{{ url('public/uploads/lrc') }}/{{ $item->link_lyrics }}"
                                        data-name="{{ $item->name_song }}"
                                        data-creator="{{ $item->artist->name_artist }}"
                                        data-avatar="{{ url('public/uploads/image_song') }}/{{ $item->image_song }}"
                                        data-img="{{ url('public/uploads/banner_song') }}/{{ $item->image_bannersong }}"
                                        data-index=""
                                        data-id="{{$item->id}}">

                                        <div class="equalizer-and-number">
                                            <p class="number-item"></p>
                                        </div>
                                        <div class="list-music-item-info">
                                            <div class="avatar">
                                                <div class="btn-play"><span class="material-icons">
                                                        play_arrow
                                                    </span></div>
                                                <div class="over-lay-item-info"></div>
                                                <img onerror="this.src='{{ url('public/uploads/image_song/song_default.jpg') }}'"
                                                    src="{{ url('public/uploads/image_song') }}/{{ $item->image_song }}">
                                            </div>
                                            <div class="item-info">
                                                <div class="name">{{ $item->name_song }}</div>
                                                <div class="creator">{{ $item->artist->name_artist }}</div>
                                            </div>
                                            <div class="item-control">
                                                <a href="{{ route('view.song', ['id' => $item->id]) }}">
                                                <span class="play-lyrics material-icons-outlined">
                                                mic_none
                                                </span>
                                                </a>
                                                <?php
                                                $check = 'playlist_add';
                                                ?>
                                                    @foreach($cart->items as $itemCheck)
                                                        @if($itemCheck['id'] == $item->id)
                                                            <?php
                                                            $check = 'playlist_add_check';
                                                            ?>
                                                        @endif
                                                    @endforeach
                                                <a href="{{route('home.addSong',['id'=>$item->id])}}">

                                                <span class=" add-playlist material-icons-outlined">
                                                    {{$check}}
                                                </span>

                                                </a>
                                            </div>
                                        </div>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="ms-theme-of-song">
                    <p class="title-suggesstion">Chủ Đề Âm Nhạc</p>

                    <div class="owl-carousel carousel-area-song">
                        @foreach ($area as $item)
                            <div class="item">
                                <a href="{{ route('home.view', ['id' => $item->id, 'slug' => $item->slug_area]) }}">
                                    <div class="wrapper-theme-song-img">
                                        <img src="{{ url('public/uploads/area') }}/{{ $item->image_area }}" />
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>

                <div class="ms-favorite-artist">
                    <p class="title-suggesstion">Nghệ Sĩ Yêu Thích</p>
                    <div class="owl-carousel carousel-favorite-artist">
                        @foreach ($artist as $item)
                        <a href="{{ route('home.view', ['id' => $item->id, 'slug' => $item->slug_artist]) }}">
                            <div class="item">
                                <div class="wrapper-artist">
                                    <div class="overlay"></div>
                                    <span class="material-icons">play_arrow</span>
                                    <img onerror="this.src='{{ url('public/uploads/artist/avatar_default.jpg') }}'"
                                        src="{{ url('public/uploads/artist') }}/{{ $item->image_artist }}" />
                                </div>
                                <div class="name-artist">{{ $item->name_artist }}</div>
                            </div>
                        </a>
                        @endforeach
                    </div>
                </div>

                <div class="ms-mv-song">

                        <p class="title-suggesstion">MV Hot</p>
                        <div class="owl-carousel carousel-mv-song">
                            @foreach ($mv as $item)
                                <a href="{{ route('view.mv', ['id' => $item->id]) }}">
                                    <div class="item">
                                        <div class="wrapper-mv-song">
                                            <div class="overlay"></div>
                                            <span class="material-icons">play_arrow</span>
                                            <img onerror="this.src='{{ url('public/uploads/mv/mv_default.jpg') }}'"
                                                src="{{ url('public/uploads/mv') }}/{{ $item->image_mv }}" />
                                        </div>
                                        <div class="info-mv-song">
                                            <div class="name">{{ $item->name_mv }}</div>
                                            <div class="creator">{{ $item->name_artist }}</div>
                                        </div>
                                    </div>
                                </a>
                            @endforeach
                        </div>
                    </div>

            </div>
    </div>

@endsection
@section('js')
    <script src="{{url('/public/site')}}/js/slide.js"></script>
@endsection
