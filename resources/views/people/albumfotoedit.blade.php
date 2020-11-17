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
                            <a href="/people/{{$people->id}}/albumfoto/{{$fotoname->id}}">
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
                            <a target="" href="/people/{{$people->id}}/albumfoto/{{$itemAlbum->id}}/edit" style="display: grid; float: left">
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
                    <!-- title -->
                    <div class="title"><span class="first-letter">Редактировать фото в альбоме {{$fotoname->name}}</span></div>
                    <label>Добавить фото</label>
                    <form action="{{route('images.album.edit', $people->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="media d-sm-flex align-items-center">

                            <div class="media-body pl-sm-3 text-center text-sm-left">
                                <select class="form-control" name="category" id="exampleFormControlSelect1">
                                    <option value="{{$fotoname->id}}">{{$fotoname->name}}</option>
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

                            <th>Delete</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($foto as $itemFoto)
                            <tr>
                                <td class="table-user">
                                    <img src="{{ asset('images/photos') }}/{{$itemFoto->url}}" alt="" class="mr-2 rounded-circle">
                                </td>
                                <form action="{{route('editnamefoto', $itemFoto->id)}}" method="POST" style="width: 90%; margin: 0 auto;">
                                    @csrf
                                    <td><input name="id" style="display: none" value="{{$itemFoto->id}}"><input name="name" class="inputalbumname" value="{{$itemFoto->name}}"></td>
                                    <td style="display: none"><button type="submit" class="action-icon inputnamesave"> <i class="icon ion-checkmark"></i></button></td>
                                </form>

                                <td class="table-action">
                                    <a href="/people/{{$itemFoto->people_id}}/{{$itemFoto->album_id}}/foto/delete/{{$itemFoto->id}}" class="action-icon"> <i class="icon ion-android-delete"></i></a>
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
@endsection
