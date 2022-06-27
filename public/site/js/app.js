const start = document.querySelectorAll(".list-music-item");
if (start.length == 0) {
    document.getElementById('control-player').classList.add("hidden");
} else {
    window.onload = async() => {
        getSong();
    }
}
/*--Variable--*/
const resetLyrics = document.querySelector('.lyricwrap');
const btnPlay = document.querySelector('.btn-play');
const btnUserPlay = document.querySelector('.btn-user-play');
const btnArtistPlay = document.querySelector('.btn-artist-play');
const btnPrev = document.querySelector('.btn-prev');
const btnNext = document.querySelector('.btn-next');

const musicContent = document.querySelector('.ms-play-control-container');
const timesong = document.querySelector(".duration-time");
const currentTimeDisplay = document.querySelector(".current-time");
const progressBar = document.querySelector(".progress-bar");
const rangeVolume = document.querySelector(".volume");
const btnLoop = document.querySelector('.btn-loop');
const btnRandom = document.querySelector('.btn-random');

const avatarControl = document.querySelector('.play-control-img-song');
const imgBlurSong = document.querySelector('.img-blur');
const avatar = document.querySelector(".wrapper-img-action img");
const nameSong = document.querySelector(".ms-control-info-song .name-song");
const creator = document.querySelector(".ms-control-info-song .creator");
const songs = document.querySelectorAll(".list-music-item");
const addPlaylist = document.querySelectorAll('.add-playlist');
const removePlaylist = document.querySelectorAll('.remove-playlist');
const playLyrics = document.querySelectorAll('.play-lyrics');


var arraySongs = [];
var lyric;
var url = window.location.hostname + '/';

var isRandom = false;
let isActiveSong = false;
const btnVolume = document.querySelector('.btn-volume');
const listSong = document.querySelector('.list-music');
const listRankSong = document.querySelector('.top-ranking-song');
const dataNumber = document.querySelectorAll(".list-music-item");
const number = document.querySelectorAll(".number-item");
const numberTop = document.querySelectorAll(".number-rank-song");
const listMusicTop = document.querySelectorAll(".list-music-top");
const idSong = document.querySelector(".ms-play-control-add-play-list");
const songlist = listSong.getElementsByTagName("li");



/*--INIT--*/
var songIndex = 0;
var valueVolume = 0.5;

if (avatar != null) {
    avatar.style.animationPlayState = 'paused';
}
if (typeof audio != "undefined") {
    audio.volume = valueVolume;
}
/*--Set number and data-index  ranking song--*/
for (let i = 0; i < numberTop.length; i++) {
    if (i % 3) {
        numberTop[i].innerHTML = '#' + (i % 3 + 1) + 'st';
        numberTop[i].classList.add("number-" + (i % 3 + 1));
        listMusicTop[i].setAttribute("data-index", (i % 3));

    } else {
        numberTop[i].innerHTML = '#' + 1 + 'st';
        numberTop[i].classList.add("number-" + 1);
        listMusicTop[i].setAttribute("data-index", 0);
    }
}


/*--Set id song--*/
for (let i = 0; i < songs.length; i++) {
    number[i].innerHTML = i + 1;
    dataNumber[i].setAttribute("data-index", i);
}

getSong = async() => {
    let songs = document.querySelectorAll(".list-music-item");

    for (let i = 0; i < songs.length; i++) {
        arraySongs.push(songs[i].getAttribute("data-music"));
    }
    loadSong();
}
var check = 0;
getLrc = function(url) {
        $.ajax({
                type: "get",
                url: url,
                dataType: "text",
            })
            .done(function(data) {
                var text = data;
                text = text.replace(/\n/g, '#').replace(/\r/g, '').replace(/######/g, '#').replace(/######/g, '#').replace(/####/g, '#').replace(/###/g, '#').replace(/##/g, '#');
                lyric = parseLyric(text);
                appendLyric(lyric);

            })
            .fail(function() {
                document.getElementById("abc").innerHTML = "<p class='alert-song'> Bài hát hiện tại chưa có lời </p>";
            });
    },
    appendLyric = function(lyric) {
        lyric.forEach(function(v, i, a) {
            $("<p id='line-" + i + "'>").html(v[1]).appendTo(".lyric");
        });
    },
    scrollbar = function() {
        var line = $(".current-line"),
            scrolltop = $(".lyric").scrollTop(),
            anchor = line.offset().top;
        $(".lyricwrap").animate({
            scrollTop: anchor
        }, 1000, 'swing');
        if (anchor - 50 != scrolltop) {
            if (line.length && anchor >= 50) {
                $(".lyricwrap").animate({
                    scrollTop: anchor - 50
                }, 1000, "swing");
            }
        }
    };
loadSong = async() => {
    song = songIndex;
    if (typeof audio != "undefined") {
        audio.src = arraySongs[song];
        audio.addEventListener('loadedmetadata', () => {
            const time = formatTime(audio.duration);
            timesong.textContent = time;
        })
        let detailSong = document.querySelectorAll(".list-music-item");
        nameSong.textContent = detailSong[song].getAttribute("data-name");
        creator.textContent = detailSong[song].getAttribute("data-creator");
        avatar.src = detailSong[song].getAttribute("data-avatar");
        avatarControl.src = detailSong[song].getAttribute("data-avatar");
        imgBlurSong.src = detailSong[song].getAttribute("data-img");
        getLrc(detailSong[song].getAttribute("data-lrc"));
        idSong.innerHTML = '<a href="' + url + '' + detailSong[song].getAttribute("data-id") + '.html"><span class="play-lyrics material-icons-outlined">mic_none</span></a>';

        document.title = detailSong[song].getAttribute("data-name") + ", " + detailSong[song].getAttribute("data-creator");
        if ('mediaSession' in navigator) {
            navigator.mediaSession.metadata = new MediaMetadata({
                title: detailSong[song].getAttribute("data-name"),
                artist: detailSong[song].getAttribute("data-creator"),
                /*
                album: 'Whenever You Need Somebody',*/
                artwork: [
                    { src: detailSong[song].getAttribute("data-avatar"), sizes: '96x96', type: 'image/png' },
                    { src: detailSong[song].getAttribute("data-avatar"), sizes: '128x128', type: 'image/png' },
                    { src: detailSong[song].getAttribute("data-avatar"), sizes: '192x192', type: 'image/png' },
                    { src: detailSong[song].getAttribute("data-avatar"), sizes: '256x256', type: 'image/png' },
                    { src: detailSong[song].getAttribute("data-avatar"), sizes: '384x384', type: 'image/png' },
                    { src: detailSong[song].getAttribute("data-avatar"), sizes: '512x512', type: 'image/png' },
                ]
            });
            navigator.mediaSession.setActionHandler('previoustrack', function() {
                // User clicked "Previous Track" media notification icon.
                prevSong();
                playSong();

            });
            navigator.mediaSession.setActionHandler('nexttrack', function() {
                // User clicked "Next Track" media notification icon.
                nextSong();
                playSong();
            });
            navigator.mediaSession.setActionHandler('pause', function() {
                // User clicked "Pause Track" media notification icon.
                pauseSong();
            });
            navigator.mediaSession.setActionHandler('play', function() {
                // User clicked "Play Track" media notification icon.
                playSong();
            });

        }
        for (let i = 0; i < songlist.length; i++) {
            songlist[i].classList.remove("active-song-play");
        }
        if (isActiveSong == false) {
            songlist[song].classList.add("active-song-play");
        }

    }
}

playSong = () => {
    musicContent.classList.add("playing");
    if (avatar != null) {
        avatar.style.animationPlayState = 'running';
    }
    btnPlay.classList.remove('fa-play');
    btnPlay.classList.add('fa-pause');
    audio.play();
}
pauseSong = () => {
    musicContent.classList.remove("playing");
    avatar.style.animationPlayState = 'paused';
    btnPlay.classList.add('fa-play');
    btnPlay.classList.remove('fa-pause');
    audio.pause();
}

nextSong = () => {
    songIndex++;
    resetLyrics.innerHTML = `<div class="lyric"></div>`;
    if (songIndex > arraySongs.length - 1) {
        songIndex = 0;
    }
    loadSong(songIndex);
}
prevSong = () => {
    songIndex--;
    resetLyrics.innerHTML = `<div class="lyric"></div>`;
    if (songIndex < 0) {
        songIndex = arraySongs.length - 1;
    }
    loadSong(songIndex);
}

addLoopSong = () => {
    btnLoop.classList.add('add-color-btn');
    musicContent.classList.add("looping");
    audio.loop = true;
}
removeLoopSong = () => {
    btnLoop.classList.remove('add-color-btn');
    musicContent.classList.remove("looping");
    audio.loop = false;
}

addRandomSong = () => {
    btnRandom.classList.add('add-color-btn');
}
removeRandomSong = () => {
    btnRandom.classList.remove('add-color-btn');
}

addVolume = () => {
    musicContent.classList.add("volume");
    btnVolume.classList.add('fa-volume-up');
    btnVolume.classList.remove('fa-volume-mute');
    btnVolume.classList.remove('add-color-btn');
    audio.volume = valueVolume;
}

muteVolume = () => {
    musicContent.classList.remove("volume");
    btnVolume.classList.remove('fa-volume-up');
    btnVolume.classList.add('fa-volume-mute');
    btnVolume.classList.add('add-color-btn');
    valueVolume = audio.volume;
    audio.volume = 0;
}

function parseLyric(text) {
    //Split text into line and push in array
    var lines = text.split('#'),
        pattern = /\[\d{2}:\d{2}.\d{2,3}\]/g,
        result = [];
    while (!pattern.test(lines[0])) {
        lines = lines.slice(1);
    };
    lines[lines.length - 1].length === 0 && lines.pop();
    lines.forEach(function(v /*value array*/ , i /*index*/ , a /*array*/ ) {
        var time = v.match(pattern),
            value = v.replace(pattern, '');
        time.forEach(function(v1, i1, a1) {
            var t = v1.slice(1, -1).split(':');
            result.push([parseInt(t[0], 10) * 60 + parseFloat(t[1]), value]);
        });
    });
    //SORT SIZE BY TIME
    result.sort(function(a, b) {
        return a[0] - b[0];
    });
    return result;
}
if (btnUserPlay != null) {
    btnUserPlay.addEventListener("click", () => {
        playSong();
    })
}
if (btnArtistPlay != null) {
    btnArtistPlay.addEventListener("click", () => {
        playSong();
    })
}
if (btnPlay != null) {
    btnPlay.addEventListener("click", () => {

        if (musicContent.classList.contains("playing")) {
            pauseSong();
        } else
            playSong();
    })
}
if (btnNext != null) {
    if (btnNext) {
        btnNext.addEventListener("click", () => {
            nextSong();
            setTimeout(() => {
                playSong();
            }, 2000)
        })
    }
}

if (btnPrev) {
    btnPrev.addEventListener("click", () => {
        prevSong();
        setTimeout(() => {
            playSong();
        }, 2000)
    })
}
if (btnLoop) {
    btnLoop.addEventListener("click", () => {
        if (musicContent.classList.contains("looping")) {
            removeLoopSong();
        } else
            addLoopSong();
    })
}
if (btnRandom) {
    btnRandom.addEventListener("click", () => {
        if (isRandom == false) {
            isRandom = true;
            addRandomSong();
        } else if (isRandom == true) {
            isRandom = false;
            removeRandomSong();
        }
    })
}
if (btnVolume) {
    btnVolume.addEventListener("click", () => {
        if (musicContent.classList.contains('volume')) {
            muteVolume();
        } else {
            addVolume();
        }
    })
}
if (listSong) {
    listSong.addEventListener("click", (e) => {
        songIndex = e.target.closest("li").getAttribute("data-index");
        idSong.innerHTML = '<a href="' + url + '' + e.target.closest('li').getAttribute("data-id") + '.html"><span class="play-lyrics material-icons-outlined">mic_none</span></a>';
        if (resetLyrics) {
            resetLyrics.innerHTML = `<div class="lyric"></div>`;
        }
        loadSong(songIndex);
        playSong();
    })
}


if (listRankSong != null) {
    listRankSong.addEventListener("click", (e) => {
        songIndex = e.target.closest("li").getAttribute("data-index");
        idSong.innerHTML = '<a href="' + url + '' + e.target.closest('li').getAttribute("data-id") + '.html"><span class="play-lyrics material-icons-outlined">mic_none</span></a>';
        resetLyrics.innerHTML = `<div class="lyric"></div>`;
        loadSong(songIndex);
        playSong();
    })
}


for (let i = 0; i < addPlaylist.length; i++) {
    addPlaylist[i].addEventListener("click", (e) => {
        addPlaylist[i].innerHTML = 'playlist_add_check';
    })
}

for (let i = 0; i < addPlaylist.length; i++) {
    addPlaylist[i].addEventListener('click', function(event) {
        event.stopPropagation();
    })
}

for (let i = 0; i < removePlaylist.length; i++) {
    removePlaylist[i].addEventListener("click", function(event) {
        event.stopPropagation();
    })
}
for (let i = 0; i < playLyrics.length; i++) {
    playLyrics[i].addEventListener("click", function(event) {
        event.stopPropagation();
    })
}


updateProgressTime = (e) => {
    const { currentTime, duration } = e.srcElement;
    currentTimeDisplay.textContent = formatTime(currentTime);
}
if (typeof audio != "undefined") {
    audio.addEventListener('loadedmetadata', () => {
        const time = formatTime(audio.duration);
        timesong.textContent = time;
    })
    audio.addEventListener("timeupdate", updateProgressTime);

    audio.addEventListener("ended", () => {
        avatar.style.animationPlayState = 'paused';
        if (isRandom == true) {
            let valueRandom;
            do {
                valueRandom = Math.floor(Math.random() * arraySongs.length);
            } while (valueRandom === songIndex);
            songIndex = valueRandom
            console.log(songIndex);
            nextSong();
            setTimeout(() => {
                playSong();
            }, 2000)
        } else {
            nextSong();
            setTimeout(() => {
                playSong();
            }, 2000)
        }
    })
    audio.ontimeupdate = function() {
        if (audio.duration) {
            const progressPercent = (audio.currentTime / audio.duration) * 100;
            progressBar.value = progressPercent;
        }
    };
    progressBar.onchange = function(e) {
        const seekTime = (audio.duration / 100) * e.target.value;
        audio.currentTime = seekTime;
    };
    rangeVolume.onchange = function(e) {
        valueVolume = e.target.value / 100;
        audio.volume = valueVolume;
    }
    audio.addEventListener('timeupdate', function(e) {
        for (var i = 0, l = lyric.length; i < l; i++) {
            if (this.currentTime > lyric[i][0]) {
                var prevLine = $("#line-" + (i > 0 ? i - 1 : i) + "");
                var line = $("#line-" + i + "");
                var lineClass = $(".current-line").attr("id");
                var anchor = line.position().top;
                $(".current-line").attr("class", "");
                line.attr("class", "current-line");
                $(".lyric").css("top", "" + (115 - anchor) + "px");
            }
        }
    });
}

formatTime = (second) => {
    let hours = Math.floor(second / 3600);
    let minutes = Math.floor((second - hours * 3600) / 60);
    let seconds = Math.floor(second - hours * 3600 - minutes * 60);
    hours = hours < 10 ? (hours > 0 ? '0' + hours : 0) : hours;
    if (minutes < 10) {
        minutes = '0' + minutes;
    }
    if (seconds < 10) {
        seconds = '0' + seconds;
    }
    return (hours !== 0 ? hours + ':' : '') + minutes + ':' + seconds;
}