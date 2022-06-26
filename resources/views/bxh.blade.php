@extends('layouts.site')
@section('title', 'Bảng xếp hạng')
@section('css')
    <link rel="stylesheet" type="text/css" href="{{ url('site') }}/css/rank-song.css" />
@endsection
@section('main')
<div class="ms-wrapper-mobile">
                <div class="ms-ranking-song">
                    <div class="blur-song-bg"></div>
                    <div class="blur-song-bg-1"></div>
                    <img class="ms-ranking-bg" src="{{url('site/image')}}/banner-bxh.gif" />
                    <h1 class="title-ranking-song text-title"># BẢNG XẾP HẠNG</h1>
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
                <div class="ms-wrapper-content-song ms-content-mobile ms-list-ranking-song">
                    <div class="owl-carousel carousel-new-song top-ranking-song">
                        @foreach ($topSong as $item)
                            <li class="list-music-top" data-id="{{$item->id}}">
                                <div class="item">
                                    <div class="number-new-song">
                                            <h2 class="number-rank-song"></h2>
                                        </div>
                                    <div class="wrapper-suggesstion">
                                        <span class="material-icons flex-center">play_arrow</span>
                                        <div class="overlay"></div>

                                        <img height="190" onerror="this.src='{{ url('uploads/banner_song/video_default.jpg') }}'"
                                            src="{{ url('uploads/banner_song') }}/{{ $item->image_bannersong }}"  />
                                    </div>
                                    <div class="info-new-song">
                                        <div class="name">{{ $item->name_song }}</div>
                                        <div class="creator">{{ $item->artist->name_artist }}</div>
                                    </div>
                                </div>
                            </li>
                        @endforeach
                    </div>
                </div>
                <div class="ms-list-song container-content">
                        <div class="wrap-list-song">
                            <ul class="list-music ">
                                @foreach ($song as $item)
                                    <li class="list-music-item"
                                        data-music="{{ url('uploads/mp3') }}/{{ $item->link_mp3 }}"
                                        data-lrc="{{ url('uploads/lrc') }}/{{ $item->link_lyrics }}"
                                        data-name="{{ $item->name_song }}"
                                        data-creator="{{ $item->artist->name_artist }}"
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
                <div class="ms-favorite-artist container-content">
                    <p class="title-suggesstion">Nghệ Sĩ Yêu Thích</p>
                    <div class="owl-carousel carousel-favorite-artist">
                        @foreach ($artist as $item)
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
@endsection


