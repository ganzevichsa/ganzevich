@extends('layouts.apppeople')


@section('content')
    <div class="page new-skin">
        <!-- preloader -->
        <div class="preloader" style="display: none;">
            <div class="centrize full-width">
                <div class="vertical-center">
                    <div class="spinner" style="display: none;">
                        <div class="double-bounce1"></div>
                        <div class="double-bounce2"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- background -->
        <div class="background gradient">
            <ul class="bg-bubbles">
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
            </ul>
        </div>
        <!--
            Container
        -->
        <div class="container opened" data-animation-in="fadeInLeft" data-animation-out="fadeOutLeft">
            <!--
                Header
            -->

            <header class="header">
                <!-- menu -->
                <div class="top-menu">
                    <ul>
                        <li class="active">
                            <a href="/people/{{$people->id}}">
                                <span class="icon ion-person"></span>
                                <span class="link">Назад</span>
                            </a>
                        </li>
                        <li>
                            <a href="#home-card">
                                <span class="icon ion-android-list"></span>
                                <span class="link">Главная</span>
                            </a>
                        </li>
                        <li>
                            <a href="/people/{{$people->id}}/albumvideo/{{$videoname->id}}/edit">
                                <span class="icon ion-android-list"></span>
                                <span class="link">Редактировать</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </header>
            <!--
                Card - Started
            -->
            <div class="card-started" id="home-card" style="height: auto">
                <!--
                    Album
                -->
                <div class="profile no-photo" style="align-items: baseline; justify-content: flex-start; height: auto;min-height: auto;}">
                    <!-- profile socials -->
                    <div class="social" >
                        @foreach($album as $itemAlbum)
                            <a target="" href="{{$itemAlbum->id}}" style="display: grid; float: left">
                                <img width="100px" src="{{ asset('photos/a.png') }}">
                                <span>{{$itemAlbum->name}}</span>
                            </a>
                        @endforeach
                    </div>
                </div>
            </div>

            <!--
                Card - Photo
            -->
            <div class="card-inner active" id="about-card">
                <div class="card-wrap" style="">
                    <!--
                        About
                    -->
                    <div class="content about">
                        <!-- title -->
                        <div class="title"><span class="first-letter">Видео {{$videoname->name}}</span></div>
                        <!-- content -->
                        <div class="row">
                            <div class="col-lg-12 col-d-12 col-t-12 col-m-12 border-line-v">
                                @foreach($video as $itemVideo)
                                    <div class="box-item" style="float: left">
                                        <div class="image">
                                            <video width="100%" controls="controls">
                                                <source src="{{ asset('images/video') }}/{{$itemVideo->url}}" type='video/ogg; codecs="theora, vorbis"'>
                                            </video>
{{--                                            <a data-fancybox="gallery" href="{{ asset('images/photos') }}/{{$itemVideo->url}}">--}}
{{--                                                <img src="{{ asset('images/photos') }}/{{$itemVideo->url}}" alt="">--}}
{{--                                                <span class="date" style="padding: 10px 10px 10px 10px; width: auto; height: 33px;">{{$itemVideo->name}}</span>--}}
{{--                                            </a>--}}
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                            <div class="clear"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
