@extends('layouts.site')
@section('css')
    <link rel="stylesheet" type="text/css" href="{{ url('site') }}/css/user.css" />
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
                        <div class="lyric-wrap">
                            <div class="lyric"></div>
                        </div>

                    </div>
                </div>
            </div>

        </div>
        <div class="ms-user-profile">
            <div class="ms-user-profile-bg">
                <div class="blur-song-bg"></div>
                <div class="blur-song-bg-1"></div>
                <img class="user-profile-bg" src="{{ url('site') }}/image/banner-user.gif" />
            </div>
            <div class="wrapper-user-profile ">
                <div class="container-user-profile ">
                    <div class="user-profile-avatar" <img class="profile-avatar"
                        onerror="this.src='{{ url('uploads/user/avatar_default.jpg') }}'" src="" />
                    <div class="user-profile-info">
                        <p class="title-suggesstion name-user">{{ Auth::guard('customer')->user()->name }}</p>
                        <p class="user-info">Thông tin cá nhân: </p>
                        <p class="user-info"></p>
                        <p class="user-info">Giới tính:</p>
                        <p class="user-info">Thưởng thức những bản nhạc do chính bạn lựa chọn!</p>
                    </div>
                    <div class="user-suggession-play-song">
                        <button class="btn btn-user-play"><i class="fas fa-play btn-play"></i>
                            Phát ngay</button>
                    </div>

                </div>
            </div>
            <div class="container-user-song">
                <p class="title-suggesstion ">Bài Hát Yêu Thích</p>
                <div class="ms-list-song">
                    <div class="wrap-list-song">
                        <ul class="list-song-user list-music">
                            @foreach ($cart->items as $item)
                                <li class="list-music-item" data-music="{{ url('uploads/mp3') }}/{{ $item['mp3'] }}"
                                    data-lrc="{{ url('uploads/lrc') }}/{{ $item['lrc'] }}" data-name="{{ $item['name'] }}"
                                    data-creator="{{ $item['artist'] }}"
                                    data-avatar="{{ url('uploads/image_song') }}/{{ $item['avatar'] }}"
                                    data-img="{{ url('uploads/banner_song') }}/{{ $item['banner'] }}" data-index="">
                                    <div class="equalizer-and-number">
                                        <p class="number-item">01</p>
                                    </div>
                                    <div class="list-music-item-info">
                                        <div class="avatar">
                                            <div class="btn-play"><span class="material-icons">
                                                    play_arrow
                                                </span></div>
                                            <div class="over-lay-item-info"></div>
                                            <img onerror="this.src='{{ url('uploads/image_song/song_default.jpg') }}'"
                                                src="{{ url('uploads/image_song') }}/{{ $item['image'] }}">
                                        </div>
                                        <div class="item-info">
                                            <div class="name">{{ $item['name'] }}</div>
                                            <div class="creator">{{ $item['artist'] }}</div>
                                        </div>
                                        <div class="item-control">
                                            <a href="{{ route('view.song', ['id' => $item['id']]) }}">
                                                <span class="play-lyrics material-icons-outlined">
                                                    mic_none
                                                </span>
                                            </a>
                                            <a href="{{ route('removeSong', ['id' => $item['id']]) }}">
                                                <span class="remove-playlist material-icons-outlined">
                                                    highlight_off
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
    </div>
    <div class="ms-user-playlist ">
        <div class="wrapper-user-playlist">
            <p class="title-suggesstion">Playlist Yêu Thích</p>
            <div class="ms-sugesstion-song">
                <div class="owl-carousel carousel-play-list-user">
                    <!--
                            <div class="item">
                                <div class="playlist-user-item-avatar">
                                    <img src="{{ url('site') }}/image/edm_playlist.png" />
                                </div>
                                <div class="playlist-user-item-info playlist-user-item-add flex-center">

                                    <span class="btn-add-playlist-user material-icons-outlined">
                                        add_circle_outline
                                    </span>
                                    <p class="title-add-playlist">THÊM PLAYLIST</p>
                                </div>
                            </div>
                            -->
                    @foreach ($registeredTop100 as $item)
                        <a href="{{ route('view.top100', ['id' => $item->top100->id]) }}">
                            <div class="item">
                                <div class="playlist-user-item-avatar">
                                    <img src="{{ url('uploads') }}/top100/{{ $item->top100->image_top100 }}" />
                                </div>
                                <div class="playlist-user-item-info">
                                    <p class="name-playlist">{{ $item->top100->name_top100 }}</p>
                                    <p class="date-create-playlist">Ngày thêm: {{ $item->created_at->format('d/m/Y') }}</p>
                                </div>

                            </div>
                        </a>
                    @endforeach
                    @foreach ($registeredCategory as $item)
                        <a href="{{ route('view.category', ['id' => $item->category->id]) }}">
                            <div class="item">
                                <div class="playlist-user-item-avatar">
                                    <img src="{{ url('uploads') }}/category/{{ $item->category->image_category }}" />
                                </div>
                                <div class="playlist-user-item-info">
                                    <p class="name-playlist">{{ $item->category->name_category }}</p>
                                    <p class="date-create-playlist">Ngày thêm: {{ $item->created_at->format('d/m/Y') }}</p>
                                </div>

                            </div>
                        </a>
                    @endforeach
                </div>

            </div>

        </div>
    </div>
    <div class="ms-user-artist ">
        <div class="wrapper-user-artist">
            <div class="ms-favorite-artist">
                <p class="title-suggesstion">Nghệ Sĩ Yêu Thích</p>
                <div class="owl-carousel carousel-favorite-artist">
                    @foreach ($registeredArist as $item)
                        <a href="{{ route('view', ['id' => $item->artist->id, 'slug' => $item->artist->slug_artist]) }}">
                            <div class="item">
                                <div class="wrapper-artist">
                                    <div class="overlay"></div>
                                    <span class="material-icons">play_arrow</span>
                                    <img src="{{ url('uploads/artist') }}/{{ $item->artist->image_artist }}" />

                                </div>
                                <div class="name-artist">{{ $item->artist->name_artist }}</div>

                            </div>
                        </a>
                    @endforeach
                </div>

            </div>
        </div>
    </div>
    </div>
@endsection
