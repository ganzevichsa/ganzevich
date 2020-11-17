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
                            <a href="#home-card">
                                <span class="icon ion-person"></span>
                                <span class="link">Главная</span>
                            </a>
                        </li>
                        <li>
                            <a href="#about-card">
                                <span class="icon ion-android-list"></span>
                                <span class="link">Биография</span>
                            </a>
                        </li>
                        <li>
                            <a href="#resume-card">
                                <span class="icon ion-camera"></span>
                                <span class="link">Фото</span>
                            </a>
                        </li>
                        <li>
                            <a href="#works-card">
                                <span class="icon ion-videocamera"></span>
                                <span class="link">Видео</span>
                            </a>
                        </li>
                        <li>
                            <a href="#blog-card">
                                <span class="icon ion-at"></span>
                                <span class="link">Другие материалы</span>
                            </a>
                        </li>
                        <li>
                            <a href="#contacts-card">
                                <span class="icon ion-at"></span>
                                <span class="link">Редактирование</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </header>
            <!--
                Card - Started
            -->
            <div class="card-started" id="home-card">
                <!--
                    Profile
                -->
                @foreach($people as $itemPeople)
                <div class="profile no-photo">
                    <!-- profile image -->
                    <div class="slide" style="background-image: url({{ asset('photos') }}/{{$itemPeople->logo}})"></div>
                    <!-- profile photo -->
                    <div class="image">
                        <img src="{{ asset('photos/b.png') }}" alt="">
                    </div>
                    <!-- profile titles -->
                    <div class="title">{{$itemPeople->title}}</div>
                    <div class="subtitle" style="padding-bottom: 33px;">{{$itemPeople->date_of_birth}}-{{$itemPeople->date_of_death}}</div>

                    <!-- profile socials -->
                    <div class="social">
                        <a target="_blank" href="{{$itemPeople->facebook}}"><span class="fab fa-facebook"></span></a>
                        <a target="_blank" href="{{$itemPeople->twitter}}"><span class="fab fa-twitter"></span></a>
                        <a target="_blank" href="{{$itemPeople->instagram}}"><span class="fab fa-instagram"></span></a>
                        <a target="_blank" href="{{$itemPeople->wikipedia}}"><span class="fab fa-wikipedia-w"></span></a>
                        {{--                        <a target="_blank" href="https://stackoverflow.com/"><span class="fab fa-stack-overflow"></span></a>--}}
                    </div>
                    <!-- profile buttons -->
                    <div class="lnks">
                        <a href="#" class="lnk">
                            <span class="text">Download CV</span>
                            <span class="ion ion-archive"></span>
                        </a>
                        <a href="#contacts-card" class="lnk discover">
                            <span class="text">Редактирование</span>
                            <span class="arrow"></span>
                        </a>
                    </div>
                </div>
            </div>
            <!--
                Card - About
            -->
            <div class="card-inner active" id="about-card">
                <div class="card-wrap" style="">
                    <!--
                        About
                    -->
                    <div class="content about">
                        <!-- title -->
                        <div class="title"><span class="first-letter">Биография</span></div>
                        <!-- content -->
                        <div class="row">
                            <div class="col-lg-12 col-d-12 col-t-12 col-m-12 border-line-v">
                                <div class="text-box">
                                    <p>
                                        {{$itemPeople->biography}}
                                    </p>
                                </div>
                            </div>
                            <div class="clear"></div>
                        </div>
                    </div>
                </div>
            </div>

            <!--
                Card - Foto
            -->
            <div class="card-inner" id="resume-card">
                <div class="card-wrap" style="">
                    <!--
                        Фото
                    -->
                    <div class="content resume">
                        <!-- title -->
                        <div class="title"><div class="first-letter">Фото</div></div>
                        <!-- content -->
                        <div class="row">
                            <!-- experience -->
                            <table style="font-size: 15px" class="table table-striped table-centered mb-0">
                                <thead>
                                <tr>
                                    <th>Album</th>
                                    <th>Name</th>
                                    <th>View</th>

                                </tr>
                                </thead>
                                <tbody>
                                @foreach($album_photos as $item_album_photos)
                                    <tr>
                                        <td class="table-user">
                                            <img src="{{ asset('photos') }}/c.png" alt="" class="mr-2 rounded-circle">
                                        </td>
                                        <td><a href="/people/{{$item_album_photos->people_id}}/albumfoto/{{$item_album_photos->id}}">{{$item_album_photos->name}}</a></td>
                                        <td><a href="/people/{{$item_album_photos->people_id}}/albumfoto/{{$item_album_photos->id}}"><i class="icon ion-ios-grid-view"></i></a></td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="clear"></div>
                        </div>
                    </div>
                </div>
            </div>
            <!--
                Card Video
            -->
            <div class="card-inner" id="works-card">
                <div class="card-wrap" style="">
                    <!--
                        Video
                    -->
                    <div class="content works">
                        <!-- title -->
                        <div class="title"><div class="first-letter">Видео</div></div>
                        <!-- content -->
                        <div class="row">
                            <!-- experience -->
                            <table style="font-size: 15px" class="table table-striped table-centered mb-0">
                                <thead>
                                <tr>
                                    <th>Album</th>
                                    <th>Name</th>
                                    <th>View</th>

                                </tr>
                                </thead>
                                <tbody>
                                @foreach($album_video as $item_album_video)
                                    <tr>
                                        <td class="table-user">
                                            <img src="{{ asset('photos') }}/c.png" alt="" class="mr-2 rounded-circle">
                                        </td>
                                        <td><a href="/people/{{$item_album_video->people_id}}/albumvideo/{{$item_album_video->id}}">{{$item_album_video->name}}</a></td>
                                        <td><a href="/people/{{$item_album_video->people_id}}/albumvideo/{{$item_album_video->id}}"><i class="icon ion-ios-grid-view"></i></a></td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="clear"></div>
                        </div>
                    </div>
                </div>
            </div>
            <!--
                Card - Blog
            -->
            <div class="card-inner blog" id="blog-card">
                <div class="card-wrap" style="">
                    <!--
                        Blog
                    -->
                    <div class="content blog">
                        <!-- title -->
                        <div class="title"><span class="first-word">Другие</span> материалы</div>
                        <!-- content -->
                        <div class="row border-line-v">
                            @foreach($articles as $itemArticles)
                                <div class="col-d-12 col-t-12 col-m-12 border-line-h">
                                <div class="box-item" style="padding: 10px">
{{--                                    <div class="image">--}}
{{--                                        <a href="blog-post-new.html">--}}
{{--                                            <img src="{{ asset('images/blog/blog1.jpg') }}" alt="">--}}
{{--                                            <span class="info">--}}
{{--												<span class="ion ion-document-text"></span>--}}
{{--											</span>--}}
{{--                                            <span class="date"><strong>20</strong>Jun</span>--}}
{{--                                        </a>--}}
{{--                                    </div>--}}
                                    <div class="desc">
                                        <a href="{{$itemArticles->url}}" class="name">{{$itemArticles->title}}</a>
{{--                                        <div class="category">Design</div>--}}
                                    </div>
                                </div>
                            </div>
                            @endforeach

                            <div class="clear"></div>
                        </div>
                    </div>
                </div>
            </div>
            <!--
                Card - Редактор
            -->
            <div class="card-inner contacts" id="contacts-card">
                <div class="card-wrap" style="">
                    <!--
                        Редактирование
                    -->
                    <div class="content contacts">
                        <!-- title -->
                        <div class="title"><span class="first-letter">Редактирование</span></div>
                        <!-- content -->
                        <div class="row">
                            <div class="col-d-12 col-t-12 col-m-12 border-line-v">
                                @if($itemPeople->gender==1):
                                <a href="/people/{{$itemPeople->id}}/addwife" class="btn btn-lg btn-block btn-outline-primary">Добавить жену</a>
                                <a href="/people/{{$itemPeople->id}}/addchildone" class="btn btn-lg btn-block btn-outline-primary">Добавить ребенка</a>
                                @else:
                                <a href="/people/{{$itemPeople->id}}/addhusband" class="btn btn-lg btn-block btn-outline-primary">Добавить мужа</a>
                                <a href="/people/{{$itemPeople->id}}/addchildto" class="btn btn-lg btn-block btn-outline-primary">Добавить ребенка</a>
                                @endif

                                <a href="/people/{{$itemPeople->id}}/addparents" class="btn btn-lg btn-block btn-outline-primary">Добавить родителей</a>
                                <a href="/people/{{$itemPeople->id}}/edit" class="btn btn-lg btn-block btn-outline-primary">Редактировать профиль</a>
                            </div>
                            <div class="clear"></div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
@endsection
