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
            <form action="{{route('addchildoneyes')}}" method="POST">
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
                        <label for="firstName">Папа: {{$itemPeople->title}}</label>
                        <input name="dad" value="{{$itemPeople->id}}" style="display: none">
                    </div>
                </div>
                <div class="row m-2">
                    <div class="mb-1" style="padding: 0">
                        <label for="firstName">Семья: {{$itemPeople->groupTitle }}</label>
                        <input name="groupTitle" value="{{$itemPeople->groupTitle }}" style="display: none">
                    </div>
                </div>
                <div class="row m-2">
                    <div class="mb-1" style="padding: 0; width: 100%">
                        <label for="firstName">Мама:</label>
                        <select class="form-control" name="mum" multiple="multiple">
                            <option selected value="">Неизвесто</option>
                            @foreach ($peoplemum as $ItemPeopleMum)
                                <option  value="{{ $ItemPeopleMum->id }}">{{ $ItemPeopleMum->title }}</option>
                            @endforeach
                        </select>
                        <small>Если вы не нашли человека, пропускаем это поле</small>
                    </div>
                </div>
                <div class="row m-2">
                    <h6 class="font-15 mt-3">Пол ребенка</h6>
                    <div class="mt-3 ml-5">
                        <div class="custom-control custom-radio">
                            <input type="radio" id="customRadio1" name="gender" value="1" class="custom-control-input">
                            <label class="custom-control-label" for="customRadio1">Мужчина</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input type="radio" id="customRadio2" name="gender" value="2" class="custom-control-input">
                            <label class="custom-control-label" for="customRadio2">Женщина</label>
                        </div>
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
