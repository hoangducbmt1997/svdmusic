<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> @yield('title')</title>
    <!--===============================================================================================-->
    <link rel="shortcut icon" type="image/png" href="{{ url('public/site') }}/image/Logo-mini.png" />
    <!--===============================================================================================-->
    <link href="https://fonts.googleapis.com/css2?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Material+Icons+Outlined" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Material+Icons+Round" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Material+Icons+Sharp" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Material+Icons+Two+Tone" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lexend:wght@100;200;300;400;500;600&display=swap"
        rel="stylesheet">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ url('public/site') }}/css/style.css" />
    <!--===============================================================================================-->
    @yield('css')
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ url('public/site') }}/css/responsive.css" />
    <!--===============================================================================================-->
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
    <!--===============================================================================================-->
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ url('public/site') }}/css/animsition.min.css" />
    <!--===============================================================================================-->
    <script src="{{ url('public/site') }}/js/jquery.js"></script>
    <!--===============================================================================================-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <!--===============================================================================================-->
    <script src="https://kit.fontawesome.com/f9275dded9.js" crossorigin="anonymous"></script>
    <!--===============================================================================================-->

</head>

<body class="animsition">

    <!---------------TOAST MESSAGE--------------------------->

    @if (Session::has('success'))
        <div id="toast">
            <div class="toast toast--success">
                <div class="toast__icon ">
                    <i class="fas fa-check-circle"></i>
                </div>
                <div class="toast__body">
                    <h3 class="toast__title">Success</h3>
                    <p class="toast__message">

                    <div class="alert alert--success">
                        {{ Session::get('success') }}
                    </div>

                    </p>
                </div>
                <div class="toast__close">
                    <i class="fas fa-times"></i>
                </div>
            </div>
        </div>
    @endif
    <!---------------CONTROL PLAYER--------------------------->

    <div id='control-player' class="ms-play-control-container">
        <div class="ms-play-control-container-bg"></div>
        <div class="ms-play-control-wrapper">
            <div class="ms-play-control-info">
                <div class="ms-play-control-img-song">
                    <button class="equalizer">
                        <span class="eq1"></span>
                        <span class="eq2"></span>
                        <span class="eq3"></span>
                    </button>
                    <img onerror="this.src='{{ url('uploads/image_song/song_default.jpg') }}'"
                        class="play-control-img-song" />
                </div>
                <div class="ms-control-info-song">
                    <div class="name-song"></div>
                    <div class="creator"></div>
                </div>
            </div>
            <div class="ms-play-control-player">
                <div class="ms-control-player-button-control">
                    <i class="fas fa-step-backward btn-prev"></i>
                    <a class="play-button">
                        <i class="fas fa-play btn-play"></i>
                    </a>
                    <i class="fas fa-step-forward btn-next"></i>

                </div>
                <div class="ms-player-progress-bar">
                    <div class="wrapper-proggress-bar">
                        <div class=" time current-time">00:00</div>
                        <input class="progress-bar" value="0" step="1" min="0" max="100"
                            type="range" />
                        <div class="time duration-time"></div>
                    </div>
                </div>
            </div>
            <div class="ms-play-control-right">
                <div class="ms-play-control-random">
                    <span class="material-icons-outlined btn-random">
                        shuffle
                    </span>
                </div>
                <div class="ms-play-control-loop "><span class="material-icons-outlined btn-loop">
                        loop
                    </span></div>
                <div class="ms-play-control-add-play-list">
                    <span class="play-lyrics material-icons-outlined">
                        mic_none
                    </span>
                    </a>
                </div>
                <div class="ms-play-control-volume">
                    <i class="fas fa-volume-up btn-volume"></i>
                    <input class="volume" type="range" value="50" min="0" max="100" />
                </div>

            </div>
        </div>
    </div>

    <div id="app" class="container-app">
        <div class="overlay-nav-bar-mobile"></div>
        <!--NAVBAR-->
        <div class="ms-nav-bar" id="nav-bar">
            <div id="logo" class="ms-logo">
                <a href="{{ route('home.index') }}">
                    <img class="logo-desktop" src="{{ url('public/site') }}/image/Logo.png" width="150" />
                </a>
                <img class="logo-mobile" src="{{ url('public/site') }}/image/Logo-mini.png" width="50"
                    height="50" />
                <img class="logo-tablet" src="{{ url('public/site') }}/image/Logo-mini.png" width="50"
                    height="50" />
                <div id="close-id" class="close-logo ">
                    <span class="material-icons-outlined">close</span>
                </div>


            </div>
            <div class="wrapper-nav-bar">
                <ul class="nav-bar-top">
                    <a href="{{ route('customer.profile') }}"
                        class="{{ 'user' == request()->path() ? 'is-active' : '' }}">
                        <li><span class="material-icons-outlined">album</span>
                            <p>Cá Nhân</p>
                        </li>
                    </a>

                    <a href="{{ route('home.index') }}" class="{{ '/' == request()->path() ? 'is-active' : '' }}">

                        <li>
                            <span class="material-icons-outlined">graphic_eq</span>
                            <p>Trang Chủ</p>
                        </li>
                    </a>
                    <a href="{{ route('home.bxh') }}" class="{{ 'bxh' == request()->path() ? 'is-active' : '' }}">
                        <li><span class="material-icons-outlined">equalizer</span>
                            <p>BXH</p>
                        </li>
                    </a>
                    <a href="{{ route('home.newsong') }}"
                        class="{{ 'newsong' == request()->path() ? 'is-active' : '' }}">
                        <li><span class="material-icons-outlined">music_note</span>
                            <p>Nhạc Mới</p>
                        </li>
                    </a>
                    <a href="{{ route('home.artist') }}"
                        class="{{ 'artist' == request()->path() ? 'is-active' : '' }}">
                        <li><span class="material-icons-outlined">people_outline</span>
                            <p>Nghệ Sĩ</p>
                        </li>
                    </a>
                </ul>
                <div class="hr-nav-bar"></div>
                <ul class="nav-bar-bottom">
                    <a href="{{ route('home.top100') }}"
                        class="{{ 'top100' == request()->path() ? 'is-active' : '' }}">
                        <li><span class="material-icons-outlined">show_chart</span>
                            <p>Top 100</p>
                        </li>
                    </a>
                    <a href="{{ route('home.theme') }}"
                        class="{{ 'theme' == request()->path() ? 'is-active' : '' }}">
                        <li><span class="material-icons-outlined">library_books</span>
                            <p>Chủ đề</p>
                        </li>
                    </a>
                    @if (Auth::guard('customer')->check())
                        <a href="{{ route('customer.logout') }}">
                            <li class="login-mobile"><span class="material-icons-outlined">
                                    logout
                                </span>
                                <p>Đăng xuất</p>
                            </li>
                        </a>
                    @else
                        <a href="{{ route('customer.login') }}">
                            <li class="login-mobile"><span class="material-icons-outlined ">
                                    login
                                </span>
                                <p>Đăng nhập</p>
                            </li>
                        </a>
                    @endif

                </ul>
                <div class="suggesstion-login">
                    <p>Tham gia ngay để khám phá những playlist dành riêng cho chính bạn.</p>
                    <a href="{{ route('customer.register') }}">
                        <button id="join-now" class="btn btn-gradient">Tham Gia</button>
                    </a>
                </div>
            </div>
        </div>
        <!--CONTENT APP-->
        <div class="ms-content">
            <!-----------------------------------------------------HEADER -------------------------------------->
            <div id="header" class="ms-wrapper-header">
                <div class="ms-header">
                    <div id="search" class="search-container">
                        <button class="ms-btn-search">
                            <span class="material-icons-outlined">
                                search
                            </span>
                        </button>
                        <div class="input-wrapper"><input type="text" id="input-search"
                                class="input-search-ajax form-control" placeholder="Nhập tên bài hát, nghệ sĩ…"
                                value=""></div>
                        <div class="search-ajax-result" id="search-result">

                        </div>
                    </div>
                    <div class="ms-header-control">
                        @if (Auth::guard('customer')->check())
                            <div class="wrapper-header-control">
                                <a id="signUpHeader" class="btn hidden sign-up-trigger"
                                    href="{{ route('customer.register') }}" data-target="#login"
                                    data-toggle="modal">Đăng Ký</a>
                                <a id="signInHeader" href="{{ route('customer.logout') }}" class="btn login-trigger"
                                    data-toggle="modal">Đăng Xuất</a>
                                <a href="{{ route('customer.profile') }}">
                                    <img class="user-image" src="{{ url('public/site') }}/image/default.jpg" />
                                </a>
                            </div>
                        @else
                            <div class="wrapper-header-control">
                                <a id="signUpHeader" class="btn sign-up-trigger"
                                    href="{{ route('customer.register') }}" data-target="#login"
                                    data-toggle="modal">Đăng Ký</a>
                                <a id="signInHeader" href="{{ route('customer.login') }}" class="btn login-trigger"
                                    data-toggle="modal">Đăng Nhập</a>
                            </div>
                        @endif

                    </div>
                </div>
            </div>
            @yield('main')
            <!---------------------FOOTER------------------------------------------>
            <div class="ms-footer ms-wrapper-mobile">
                <div class="footer-contact">
                    <div class="wrapper-bg-contact">
                        <div class="wrapper-item-contact">
                            <div class="bg-footer-alpha"></div>
                            <div class="wrapper-item-footer">
                                <div class="about-us item-contact">
                                    <ul>
                                        <li>
                                            <p class="title-footer">Về chúng tôi</p>
                                        </li>
                                        <li>
                                            <div class="hr-footer"></div>
                                        </li>
                                        <li><span class="material-icons-outlined">
                                                stay_primary_portrait
                                            </span>036-282-3931</li>
                                        <li><span class="material-icons-outlined">
                                                lightbulb
                                            </span>info@iamrocklee.org</li>
                                        <li><span class="material-icons-outlined">
                                                school
                                            </span>TayNguyen University, Buon Ma Thuot, DakLak.</li>
                                    </ul>
                                </div>
                                <div class="support-client item-contact">
                                    <ul>
                                        <li>
                                            <p class="title-footer">Hỗ trợ khách hàng</p>
                                        </li>
                                        <li>
                                            <div class="hr-footer"></div>
                                        </li>
                                        <li>Email: hotro@svdmusic.com</li>
                                        <li>Đường dây nóng: 1900 1997</li>
                                    </ul>
                                </div>
                                <div class="contact-adv item-contact">
                                    <ul>
                                        <li>
                                            <p class="title-footer">Liên hệ</p>
                                        </li>
                                        <li>
                                            <div class="hr-footer"></div>
                                        </li>
                                        <li>Hotline: (036) 282 3931</li>
                                        <li>Email: hoangducbmt1997@gmail.com</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer-copyright">
                    <div class="wrapper-footer-copyright container-content">
                        <div class="wrapper-footer-info footer-item">
                            <?php $date = getdate(); ?>
                            <p>© {{ $date['year'] }} SVD Music. Copyright by<a
                                    href="https://www.facebook.com/iamrockleee"> songvedem</a>
                            </p>
                        </div>
                        <div class="wrapper-icon-footer footer-item">
                            <ul>
                                <li>
                                    <img src="{{ url('public/site') }}/image/t_ic_facebook.png" width="25px" />
                                </li>
                                <li>
                                    <img src="{{ url('public/site') }}/image/t_ic_instagram.png" width="25px" />
                                </li>
                                <li>
                                    <img src="{{ url('public/site') }}/image/t_ic_tiktok.png" width="25px" />
                                </li>
                                <li>
                                    <img src="{{ url('public/site') }}/image/t_ic_twitter.png" width="25px" />
                                </li>
                            </ul>
                        </div>
                        <div class="wrapper-privacy footer-item">
                            <p>© SVD Corp. All rights reserved</p>
                        </div>
                    </div>

                </div>

            </div>
        </div>

    </div>



    <!--===============================================================================================-->
    <script src="{{ url('public/site') }}/js/control.js"></script>
    <!--===============================================================================================-->
    <script src="{{ url('public/site') }}/js/app.js"></script>
    <!--===============================================================================================-->
    <script src="{{ url('public/site') }}/js/jquery-3.2.1.min.js"></script>
    <!--===============================================================================================-->
    <script src="{{ url('public/site') }}/js/animsition.min.js"></script>
    <!--===============================================================================================-->
    <script src="{{ url('public/site') }}/js/loading.js"></script>

    <script>
        $('.search-ajax-result').hide();
        $('.input-search-ajax').keyup(function() {
            var text = $(this).val().trim().toLowerCase();
            var _html = '';
            if (text != '') {
                $.ajax({
                    url: '' + url + 'api/ajax-search-song?key=' + text,
                    type: 'GET',
                    success: function(res) {
                        console.log(res);
                        for (var song of res) {
                            _html += '<div class="media">';
                            _html += '<a class="d-flex" href="' + url + '' + song.id + '.html">';
                            _html += '<img  src="{{ url('uploads/image_song') }}/' + song
                                .image_song + '"  height="40" >';
                            _html += '<div class="media-body">';
                            _html += '<h5>' + song.name_song + '</h5>';
                            _html += '</div>';
                            _html += '</a>';
                            _html += '</div>';


                        }
                        $('.search-ajax-result').html(_html);
                    }
                });
                $.ajax({
                    url: '' + url + 'api/ajax-search-artist?key=' + text,
                    type: 'GET',
                    success: function(res) {
                        for (var song of res) {
                            _html += '<div class="media">';
                            _html += '<a class="d-flex" href="' + url + '' + song.id + '/' + song
                                .slug_artist + '.html">';
                            _html += '<img  src="{{ url('uploads/artist') }}/' + song
                                .image_artist + '"  height="40" >';
                            _html += '<div class="media-body">';
                            _html += '<h5>' + song.name_artist + '</h5>';
                            _html += '</div>';
                            _html += '</a>';
                            _html += '</div>';
                        }
                        $('.search-ajax-result').show();
                        $('.search-ajax-result').html(_html);
                    }
                });

            } else {
                $('.search-ajax-result').html('');
                $('.search-ajax-result').hide();
            }

        });
        $(document).click(function(event) {
            $target = $(event.target);
            if (!$target.closest('.input-search-ajax').length &&
                $('.input-search-ajax').is(":visible")) {
                $('.search-ajax-result').hide();
            }
        });
    </script>
    @yield('js')
</body>

</html>
