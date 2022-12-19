@extends('layouts.site')
@section('title', $song->name_song)
@section('css')
    <link rel="stylesheet" type="text/css" href="{{ url('/public/site') }}/css/song.css" />
@endsection
@section('main')
<div class="ms-wrapper-mobile">
                <div class="ms-song-lyrics">
                    <div class="blur-song-bg"></div>
                    <img class="img-blur" onerror="this.src='{{url('/public/uploads/image_song/song_default.jpg')}}'"/>
                    <div class="wrapper-ms-song-lyrics">
                        <div class="song-action">
                            <div class="wrapper-song-action">
                                <p class="title-suggesstion title-playing">Đang phát :</p>
                                <div class="wrapper-img-action">
                                    <div class="overlay"></div>
                                    <img onerror="this.src='{{url('/public/uploads/image_song/song_default.jpg')}}'" src="">
                                </div>
                                <audio id="audio" class="lrc" data-lrc=""></audio>
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
                <div class="ms-wrapper-content-song ms-content-mobile ms-list-ranking-song">
                    <p class="title-suggesstion">Nghe tiếp</p>
                    <div class="ms-list-song">
                    <div class="wrap-list-song">
                            <ul class="list-music ">
                                    <li class="list-music-item  "
                                        data-music="{{ url('/public/uploads/mp3') }}/{{ $song->link_mp3 }}"
                                        data-lrc="{{ url('/public/uploads/lrc') }}/{{ $song->link_lyrics }}"
                                        data-name="{{ $song->name_song }}"
                                        data-creator="{{ $song->artist->name_artist }}"
                                        data-avatar="{{ url('/public/uploads/image_song') }}/{{ $song->image_song }}"
                                        data-img="{{ url('/public/uploads/banner_song') }}/{{ $song->image_bannersong }}"
                                        data-index="0"
                                        data-id="{{$song->id}}">
                                        <div class="equalizer-and-number">
                                            <p class="number-item"></p>
                                        </div>
                                        <div class="list-music-item-info">
                                            <div class="avatar">
                                                <div class="btn-play"><span class="material-icons">
                                                        play_arrow
                                                    </span></div>
                                                <div class="over-lay-item-info"></div>
                                                <img onerror="this.src='{{ url('/public/uploads/image_song/song_default.jpg')}}'"
                                                    src="{{ url('/public/uploads/image_song') }}/{{ $song->image_song }}">
                                            </div>
                                            <div class="item-info">
                                                <div class="name">{{ $song->name_song }}</div>
                                                <div class="creator">{{ $song->artist->name_artist }}</div>
                                            </div>
                                            <div class="item-control">
                                            <span class="material-icons-outlined">
                                            mic_none
                                            </span>
                                            <a href="{{route('home.addSong',['id'=>$song->id])}}">
                                            <?php
                                            $check = 'playlist_add';
                                            ?>
                                            @foreach($cart->items as $itemCheck)
                                                @if($itemCheck['id'] == $song->id)
                                                    <?php
                                                    $check = 'playlist_add_check';
                                                    ?>
                                                @endif
                                            @endforeach
                                            <span class=" add-playlist material-icons-outlined">
                                                {{ $check }}
                                            </span>
                                            </a>
                                            </div>
                                        </div>
                                    </li>
                                    @foreach($songSuggestion as $item)
                                    <li class="list-music-item"
                                        data-music="{{ url('/public/uploads/mp3') }}/{{ $item->link_mp3 }}"
                                        data-lrc="{{ url('/public/uploads/lrc') }}/{{ $item->link_lyrics }}"
                                        data-name="{{ $item->name_song }}"
                                        data-creator="{{ $item->artist->name_artist }}"
                                        data-avatar="{{ url('/public/uploads/image_song') }}/{{ $item->image_song }}"
                                        data-img="{{ url('/public/uploads/banner_song') }}/{{ $item->image_bannersong }}"
                                        data-index="">
                                        <div class="equalizer-and-number">
                                            <p class="number-item"></p>
                                        </div>
                                        <div class="list-music-item-info">
                                            <div class="avatar">
                                                <div class="btn-play"><span class="material-icons">
                                                        play_arrow
                                                    </span></div>
                                                <div class="over-lay-item-info"></div>
                                                <img onerror="this.src='{{ url('/public/uploads/image_song/song_default.jpg')}}'"
                                                    src="{{ url('/public/uploads/image_song') }}/{{ $item->image_song }}">
                                            </div>
                                            <div class="item-info">
                                                <div class="name">{{ $item->name_song }}</div>
                                                <div class="creator">{{ $item->artist->name_artist }}</div>
                                            </div>
                                            <div class="item-control">
                                            <span class="material-icons-outlined">
                                            mic_none
                                            </span>
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
                    <div class="ms-favorite-artist">
                    <p class="title-suggesstion">Nghệ Sĩ Yêu Thích</p>
                    <div class="owl-carousel carousel-favorite-artist">
                        @foreach ($artist as $item)
                        <a href="{{ route('home.view', ['id' => $item->id, 'slug' => $item->slug_artist]) }}">
                            <div class="item">
                                <div class="wrapper-artist">
                                    <div class="overlay"></div>
                                    <span class="material-icons">play_arrow</span>
                                    <img onerror="this.src='{{ url('/public/uploads/artist/avatar_default.jpg') }}'"
                                        src="{{ url('/public/uploads/artist') }}/{{ $item->image_artist }}" />
                                </div>
                                <div class="name-artist">{{ $item->name_artist }}</div>
                            </div>
                        </a>
                        @endforeach
                    </div>
                </div>
                </div>

        </div>
@endsection
