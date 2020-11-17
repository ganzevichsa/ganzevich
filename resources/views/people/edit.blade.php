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
            @foreach($people as $itemPeople)
            <header class="header">
                <!-- menu -->
                <div class="top-menu">
                    <ul>
                        <li class="active">
                            <a href="/people/{{$itemPeople->id}}">
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
                    <div class="profile no-photo">
                        <!-- profile image -->
                        <form action="{{route('images.logo', $itemPeople->id)}}" method="POST" enctype="multipart/form-data">
                            @csrf
                        <div class="media d-sm-flex align-items-center"><img class="d-block rounded-circle mx-auto mb-3 mb-sm-0" width="110" src="{{ asset('photos') }}/{{$itemPeople->logo}}" alt="Amanda Wilson">
                            <div class="media-body pl-sm-3 text-center text-sm-left">
                                <input name="logo" type="file" name="file[]">
                                <button class="btn btn-light box-shadow btn-sm mb-2" type="submit"><i class="fe-refresh-cw mr-2"></i>Change avatar</button>
                            </div>
                        </div>
                        </form>
                        <!-- profile titles -->
                        <form action="{{route('onesave', $itemPeople->id)}}" method="POST">
                            @csrf
                        <div class="">
                            <div class="mb-3" style="padding: 0">
                                <input style="width: 318px;" type="text" class="form-control" name="title" placeholder="Фамилия Имя Отчество" value="{{$itemPeople->title}}" required="">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col mb-1" style="padding: 0">
                                <label for="firstName">Дата рождения</label>
                                <input type="text" class="form-control" name="date_of_birth" placeholder="01.01.2020" value="{{$itemPeople->date_of_birth}}" required="">
                            </div>
                            <div class="col mb-1" style="padding: 0">
                                <label for="lastName">Дата смерти</label>
                                <input type="text" class="form-control" name="date_of_death" placeholder="01.01.2020" value="{{$itemPeople->date_of_death}}">
                            </div>
                        </div>
                        <!-- profile socials -->
                        <div class="social">
                            <span target="_blank" href="https://dribbble.com/" style="display: flex; width: 350px;"><span class="fab fa-facebook" ></span><input type="text" class="form-control"  name="facebook" value="{{$itemPeople->facebook}}" style="margin-left: 10px"></span>
                            <span target="_blank" href="https://twitter.com/" style="display: flex; width: 350px;"><span class="fab fa-twitter" ></span><input type="text" class="form-control" name="twitter" value="{{$itemPeople->twitter}}" style="margin-left: 10px"></span>
                            <span target="_blank" href="https://github.com/" style="display: flex; width: 350px;"><span class="fab fa-instagram" ></span><input type="text" class="form-control" name="instagram" value="{{$itemPeople->instagram}}" style="margin-left: 10px"></span>
                            <span target="_blank" href="https://www.spotify.com/" style="display: flex; width: 350px;"><span class="fab fa-wikipedia-w" ></span><input type="text" class="form-control" name="wikipedia" value="{{$itemPeople->wikipedia}}" style="margin-left: 5px"></span>
                            {{--                        <a target="_blank" href="https://stackoverflow.com/"><span class="fab fa-stack-overflow"></span></a>--}}
                        </div>
                        <!-- profile buttons -->
                        <div class="lnks">
                            <a href="#" class="lnk">
                                <button type="submit" class="savebutton">Сохранить</button>
                                <span class="ion ui-icon-disk"></span>
                            </a>
                        </div>
                        </form>
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
                    <form action="{{route('tosave', $itemPeople->id)}}" method="POST">
                        @csrf
                    <div class="content about">
                        <!-- title -->
                        <div class="title"><span class="first-letter">Биография</span></div>
                        <!-- content -->
                        <div class="col row mb-3">
                            <label for="lastName">Группа</label>
                            <input type="text" class="form-control" name="groupTitle" placeholder="Family №" value="{{$itemPeople->groupTitle}}">
                        </div>
                        <div class="row">
                            <div class="col-lg-12 col-d-12 col-t-12 col-m-12 border-line-v">
                                <textarea class="form-control" name="biography" rows="10">{{$itemPeople->biography}}</textarea>
                            </div>
                            <div class="clear"></div>
                        </div>
                    </div>
                    <div class="lnks">
                        <a href="#" class="lnk">
                            <button type="submit" class="savebutton">Сохранить</button>
                            <span class="ion ui-icon-disk"></span>
                        </a>
                    </div>
                    </form>
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
                            <form action="{{route('addalbumfoto', $itemPeople->id)}}" method="POST" style="width: 90%; margin: 0 auto;">
                                @csrf
                            <div class="form-group mt-3">
                                <label>Создать альбом</label>
                                <div class="input-group">
                                    <input type="text" name="name" class="form-control" placeholder="Укажите название альбома" aria-label="Recipient's username">
                                    <div class="input-group-append">
                                        <button class="btn btn-dark" style="height: calc(2.19rem + 2px);" type="submit">Создать</button>
                                    </div>
                                </div>
                            </div>
                            </form>
                        </div>
                        <div class="row col">
                            <!-- profile image -->
                            <label>Добавить фото</label>
                            <form action="{{route('images.album', $itemPeople->id)}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="media d-sm-flex align-items-center">

                                    <div class="media-body pl-sm-3 text-center text-sm-left">
                                        <select class="form-control" name="category" id="exampleFormControlSelect1">
                                            <option value="0">Выбирете альбом</option>
                                            @foreach($album_photos as $item_album_photos)
                                                <option  value="{{ $item_album_photos->id }}">{{ $item_album_photos->name }}</option>
                                            @endforeach
                                        </select>
                                        <input  type="file" multiple name="file[]">
                                        <button class="btn btn-light box-shadow btn-sm mb-2" type="submit"><i class="fe-refresh-cw mr-2"></i>Добавить</button>
                                    </div>
                                </div>
                            </form>
                            <!-- experience -->
                            <table style="font-size: 15px" class="table table-striped table-centered mb-0">
                                <thead>
                                <tr>
                                    <th>Album</th>
                                    <th>Name</th>
                                    <th style="display: none;">Save name</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($album_photos as $item_album_photos)
                                <tr>
                                    <td class="table-user">
                                        <img src="{{ asset('photos') }}/c.png" alt="" class="mr-2 rounded-circle">
                                    </td>
                                    <form action="{{route('editnamealbumfoto', $itemPeople->id)}}" method="POST" style="width: 90%; margin: 0 auto;">
                                        @csrf
                                    <td><input name="id" style="display: none" value="{{$item_album_photos->id}}"><input name="name" class="inputalbumname" value="{{$item_album_photos->name}}"></td>
                                    <td style="display: none"><button type="submit" class="action-icon inputnamesave"> <i class="icon ion-checkmark"></i></button></td>
                                    </form>
                                    <td><a href="/people/{{$itemPeople->id}}/albumfoto/{{$item_album_photos->id}}/edit"><i class="icon ion-edit"></i></a></td>
                                    <td class="table-action">
                                        <a href="/people/{{$itemPeople->id}}/edit/deletealbumphoto/{{$item_album_photos->id}}" class="action-icon"> <i class="icon ion-android-delete"></i></a>
                                    </td>
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
                            <form action="{{route('addalbumvideo', $itemPeople->id)}}" method="POST" style="width: 90%; margin: 0 auto;">
                                @csrf
                                <div class="form-group mt-3">
                                    <label>Создать альбом</label>
                                    <div class="input-group">
                                        <input type="text" name="name" class="form-control" placeholder="Укажите название альбома" aria-label="Recipient's username">
                                        <div class="input-group-append">
                                            <button class="btn btn-dark" style="height: calc(2.19rem + 2px);" type="submit">Создать</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <table style="font-size: 15px" class="table table-striped table-centered mb-0">
                                <thead>
                                <tr>
                                    <th>Album</th>
                                    <th>Name</th>
                                    <th style="display: none;">Save name</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($album_video as $item_album_video)
                                    <tr>
                                        <td class="table-user">
                                            <img src="{{ asset('photos') }}/e.png" alt="" class="mr-2 rounded-circle">
                                        </td>
                                        <form action="{{route('editnamealbumvideo', $itemPeople->id)}}" method="POST" style="width: 90%; margin: 0 auto;">
                                            @csrf
                                            <td><input name="id" style="display: none" value="{{$item_album_video->id}}"><input name="name" class="inputalbumname" value="{{$item_album_video->name}}"></td>
                                            <td style="display: none;"><button type="submit" class="action-icon inputnamesave"> <i class="icon ion-checkmark"></i></button></td>
                                        </form>
                                        <td><a href="/people/{{$itemPeople->id}}/albumvideo/{{$item_album_video->id}}/edit"><i class="icon ion-edit"></i></a></td>
                                        <td class="table-action">
                                            <a href="/people/{{$itemPeople->id}}/edit/deletealbumvideo/{{$item_album_video->id}}" class="action-icon"> <i class="icon ion-android-delete"></i></a>
                                        </td>
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
                        <div class="box-item">
                            <form action="{{route('articlessave', $itemPeople->id)}}" method="POST">
                                @csrf
                                <div class="content about">
                                    <!-- content -->
                                    <div class="row">
                                        <label for="lastName" style="margin: 10px">Заголовок</label>
                                        <div class="col-lg-12 col-d-12 col-t-12 col-m-12 border-line-v">
                                            <textarea class="form-control" name="title" rows="5"></textarea>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <label for="lastName" style="margin: 10px">Ссылка</label>
                                        <div class="col-lg-12 col-d-12 col-t-12 col-m-12 border-line-v">
                                            <textarea class="form-control" name="url" rows="5">{{$itemPeople->url}}</textarea>
                                        </div>
                                        <div class="clear"></div>
                                    </div>
                                </div>
                                <div class="">
                                    <a href="#" class="lnk">
                                        <button type="submit" class="savebutton">Сохранить</button>
                                        <span class="ion ui-icon-disk"></span>
                                    </a>
                                </div>
                            </form>
                        </div>
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
                                            <div class="category"><a href="/people/{{$itemPeople->id}}/edit/deletearticles/{{$itemArticles->id}}">Удалить</a></div>
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
            @endforeach
        </div>
    </div>
@endsection
