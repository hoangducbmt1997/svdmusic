@extends('layouts.admin')
@section('title', 'Dashboard')
@section('main')
    <div class="jumbotron">
        <h1 class="display-3">Trang quản trị</h1>

        <hr class="my-2">

        <p class="lead">
            <a class="btn btn-primary btn-lg" role="button">Thống kê</a>
        </p>

                    <div class="row">
                        <div class="col-lg-3 col-6">

                            <div class="small-box bg-info">
                                <div class="inner">
                                    <h3>{{$song_count}}</h3>
                                    <p>New Song</p>
                                </div>
                                <div class="icon">
                                <i class="fab fa-itunes-note"></i>
                                </div>
                                <a href="#" class="small-box-footer">
                                    More info <i class="fas fa-arrow-circle-right"></i>
                                </a>
                            </div>
                        </div>

                        <div class="col-lg-3 col-6">

                            <div class="small-box bg-success">
                                <div class="inner">
                                    <h3>{{$mv_count}}<sup style="font-size: 20px"></sup></h3>
                                    <p>MV</p>
                                </div>
                                <div class="icon">
                                <i class="fas fa-tv"></i>
                                </div>
                                <a href="#" class="small-box-footer">
                                    More info <i class="fas fa-arrow-circle-right"></i>
                                </a>
                            </div>
                        </div>

                        <div class="col-lg-3 col-6">

                            <div class="small-box bg-warning">
                                <div class="inner">
                                    <h3>{{$user_count}}</h3>
                                    <p>User Registrations</p>
                                </div>
                                <div class="icon">
                                    <i class="fas fa-user-plus"></i>
                                </div>
                                <a href="#" class="small-box-footer">
                                    More info <i class="fas fa-arrow-circle-right"></i>
                                </a>
                            </div>
                        </div>

                        <div class="col-lg-3 col-6">

                            <div class="small-box bg-danger">
                                <div class="inner">
                                    <h3>{{$artist_count}}</h3>
                                    <p>Artist</p>
                                </div>
                                <div class="icon">
                                    <i class="fas fa-chart-pie"></i>
                                </div>
                                <a href="#" class="small-box-footer">
                                    More info <i class="fas fa-arrow-circle-right"></i>
                                </a>
                            </div>
                        </div>

                    </div>
        </div>
@endsection