@extends('layouts.apppeople')


@section('content')
    @foreach($people as $itemPeople)
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
            <div class="container opened" data-animation-in="fadeInLeft" data-animation-out="fadeOutLeft">
                <!--
                    Header
                -->
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
                        </ul>
                    </div>
                </header>
                <form action="{{route('addwifeyes')}}" method="POST">
                    @csrf
                    <div class="card-started" id="home-card">
                        <div class="row m-2">
                            <div class="mb-3 mt-5" style="padding: 0">
                                <input style="width: 318px;" type="text" class="form-control" name="title" placeholder="Фамилия Имя Отчество" value="" required="">
                            </div>
                        </div>
                        <div class="row m-2">
                            <div class="col mb-1" style="padding: 0">
                                <label for="firstName">Дата рождения</label>
                                <input type="text" class="form-control" name="date_of_birth" placeholder="01.01.2020" value="" required="">
                            </div>
                            <div class="col mb-1" style="padding: 0">
                                <label for="lastName">Дата смерти</label>
                                <input type="text" class="form-control" name="date_of_death" placeholder="01.01.2020" value="">
                            </div>
                        </div>
                        <div class="row m-2">
                            <div class="mb-1" style="padding: 0">
                                <label for="firstName">Муж: {{$itemPeople->title}}</label>
                                <input name="husband" value="{{$itemPeople->id}}" style="display: none">
                            </div>
                        </div>
                        <div class="row m-2">
                            <button type="submit" class="btn btn-primary" style="width: 100%">Добавить</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    @endforeach

@endsection
