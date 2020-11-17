<form action="{{route('addpeopleyes')}}" method="POST">
    @csrf
    <div class="card-started" id="home-card">
        <div class="row m-2">
            <div class="mb-3 mt-5" style="padding: 0">
                <label for="title">ФИО</label>
                <input style="width: 318px;" type="text" class="form-control" name="title" placeholder="Фамилия Имя Отчество" value="" required="">
            </div>
        </div>
        <div class="row m-2">
            <div class="col mb-1" style="padding: 0">
                <label for="date_of_birth">Дата рождения</label>
                <input type="text" class="form-control" name="date_of_birth" placeholder="01.01.2020" value="" required="">
            </div>
        </div>
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
        <div class="mb-1" style="padding: 0">
            <label for="groupTitle">Семья: </label>
            <input name="groupTitle" value="" placeholder="Family 1">
        </div>
        <div class="row m-2">
            <button type="submit" class="btn btn-primary" style="width: 100%">Добавить</button>
        </div>
    </div>
</form>
