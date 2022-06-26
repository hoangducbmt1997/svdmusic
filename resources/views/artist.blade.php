@extends('layouts.site')
@section('title', $artist->name_artist)
@section('css')
    <link rel="stylesheet" type="text/css" href="{{ url('site') }}/css/artist.css" />
@endsection
@section('main')
<div class="ms-wrapper-mobile">
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
                    <audio id="audio" class="lrc" data-lrc=""></audio>
                </div>
            </div>
            <div class="wrapper-lyric">
                <div class="container-lyrics">
                    <div class="wrapper-title-lyrics">
                        <p class="title-suggesstion">Lời bài hát :</p>
                    </div>
                    <div class="lyricwrap">
                        <div class="lyric"></div>
                    </div>

                </div>
            </div>
        </div>

    </div>
    <div class="ms-artist-banner">
        <div class="ms-artist-bg">
            <div class="blur-song-bg"></div>
            <div class="blur-song-bg-1"></div>
            <img class="artist-profile-bg" src="{{ url('site') }}/image/banner-artist.gif" />
        </div>
        <div class="wrapper-ms-artist-banner">
            <div class="ms-artist-info ">
                <div class="wrapper-artist-info">
                    <img class="avatar-artist" onerror="this.src='{{ url('uploads/artist/avatar_default.jpg') }}'" src="{{ url('uploads/artist') }}/{{ $artist->image_artist }}" />
                    <div class="ms-artist-profile">
                        <p class="title-suggesstion ">{{$artist->name_artist}}</p>
                        <p class="artist-story">{{$artist->description_artist ? $artist->description_artist : 'Thông tin: Đang cập nhật'}} ...</p>
                        <p class="artist-info">Ngày sinh: </p>
                        <p class="artist-info">Giới tính: </p>

                    </div>
                    <div class="artist-suggession-play-song">
                        <button class="btn btn-artist-play"><i class="fas fa-play btn-play"></i>
                            Phát ngay</button>
                         <!--Neu da dang ki thi check-->
                         @if($checkRegistered)
                        <a href="{{route('home.artist.unregistered',['id_user'=>Auth::guard('customer')->user()->id,'id_artist'=>$artist->id])}}">
                        <button class="btn btn-artist-register"><i class="fas fa-check"></i>
                            Đã quan tâm</button></a>
                        @else
                        <!--Neu chua dang ki thi kt user dang nhap roi check-->
                            @if(Auth::guard('customer')->check())
                            <a href="{{route('home.artist.registered',['id_user'=>Auth::guard('customer')->user()->id,'id_artist'=>$artist->id])}}">
                            <button class="btn btn-artist-register"><i class="fas fa-user-plus"></i>
                                Quan tâm</button>
                            </a>
                            @else
                            <a href="{{route('customer.login')}}">
                            <button class="btn btn-artist-register"><i class="fas fa-user-plus"></i>
                                Quan tâm</button>
                            </a>

                            @endif
                        @endif
                    </div>
                </div>

            </div>

            <div class="ms-artist-list-song ">
                <p class="title-suggesstion title-artist-song">Bài Hát</p>
                <div class="ms-list-song">
                    <div class="wrap-list-song ">
                        <ul class="list-music list-music-artist">
                            @foreach ($model->songs as $item)
                            <li class="list-music-item"
                                data-music="{{ url('uploads/mp3') }}/{{ $item->link_mp3 }}"
                                data-lrc="{{ url('uploads/lrc') }}/{{ $item->link_lyrics }}"
                                data-name="{{ $item->name_song }}" data-creator="{{ $item->artist->name_artist }}"
                                data-avatar="{{ url('uploads/image_song') }}/{{ $item->image_song }}"
                                data-img="{{ url('uploads/banner_song') }}/{{ $item->image_bannersong }}"
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
                                        <img onerror="this.src='{{ url('uploads/image_song/song_default.jpg') }}'"
                                            src="{{ url('uploads/image_song') }}/{{ $item->image_song }}">
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

        </div>
        <div class="ms-artist-playlist ms-content-mobile">
            <div class="ms-sugesstion-song">
                <p class="title-suggesstion">Playlist</p>
                <div class="owl-carousel carousel-suggesstion-song">
                    <div class="item">
                        <div class="wrapper-suggesstion">
                            <div class="wraper-equalizer">
                                <button class="equalizer ">
                                    <span class="eq1"></span>
                                    <span class="eq2"></span>
                                    <span class="eq3"></span>
                                </button>
                            </div>
                            <div class="overlay"></div>
                            <img
                                src="https://photo-resize-zmp3.zadn.vn/w320_r1x1_jpeg/cover/7/2/f/6/72f66c005fa69fae38ddb07c34d49486.jpg" />
                        </div>
                    </div>
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
                            <img
                                src="https://photo-resize-zmp3.zadn.vn/w320_r1x1_jpeg/cover/a/7/5/7/a75731d04aa9876440572e3d76853d52.jpg" />
                        </div>
                    </div>
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
                            <img
                                src="https://photo-resize-zmp3.zadn.vn/w320_r1x1_jpeg/cover/1/4/d/5/14d592977f3500b02e24e2c031b3bc61.jpg" />
                        </div>
                    </div>

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
                            <img
                                src="https://avatar-ex-swe.nixcdn.com/playlist/2018/09/13/2/6/2/f/1536805686434.jpg" />
                        </div>
                    </div>

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
                            <img src="{{ url('site') }}/image/hit-quoc-dan.jpg" />
                        </div>
                    </div>


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
                            <img
                                src="https://photo-resize-zmp3.zadn.vn/w320_r1x1_jpeg/cover/6/5/7/3/6573250283b579c3b0ecc3646305ac8a.jpg" />
                        </div>
                    </div>


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
                            <img
                                src="https://photo-resize-zmp3.zadn.vn/w320_r1x1_jpeg/cover/7/2/0/0/7200f823d087c9f8b89129cef845e253.jpg" />
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="ms-artist-suggesstion ms-content-mobile">
            <div class="ms-favorite-artist">
                <p class="title-suggesstion">Có Thể Bạn Sẽ Thích</p>
                <div class="owl-carousel carousel-favorite-artist">
                    @foreach($artists as $item)
                    <a href="{{ route('home.view', ['id' => $item->id, 'slug' => $item->slug_artist]) }}">
                            <div class="item">
                                <div class="wrapper-artist">
                                    <div class="overlay"></div>
                                    <span class="material-icons">play_arrow</span>
                                    <img onerror="this.src='{{ url('uploads/artist/avatar_default.jpg') }}'"
                                        src="{{ url('uploads/artist') }}/{{ $item->image_artist }}" />
                                </div>
                                <div class="name-artist">{{ $item->name_artist }}</div>
                            </div>
                        </a>
                    @endforeach
                </div>

            </div>
        </div>

    </div>
</div>
@endsection
