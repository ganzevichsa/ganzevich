<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
class PeopleController extends Controller
{
    //
    // Просмотр карточки человека
    public function show($id)
    {
        $album_photos = App\AlbumPhoto::all()->where('people_id',$id);
        $album_video = App\AlbumVideo::all()->where('people_id',$id);
        $people = App\People::all()->where('id',$id);
        $articles = App\Articles::all()->where('people_id', $id);
        return view('people.index',compact('people', 'album_photos', 'album_video', 'articles'));
    }
    //Редактирование карточки человека
    public function edit($id)
    {
        $album_photos = App\AlbumPhoto::all()->where('people_id',$id);
        $album_video = App\AlbumVideo::all()->where('people_id',$id);
        $people = App\People::all()->where('id',$id);
        $articles = App\Articles::all()->where('people_id', $id);
        return view('people.edit',compact('people', 'album_photos', 'album_video', 'articles'));
    }
    //Добавление главного фото человека
    public function imageslogo($id, Request $request)
    {
        $people = App\People::find($id);
        if($request->hasFile('logo'))
        {
            $destinationPath=('photos');
            $file = $request->file('logo');
            $filename=$file->getClientOriginalName();
            $request->file('logo')->move($destinationPath,time().'_'.$filename);
            $people->logo = time().'_'.$filename;
            $people->save();
        }
        return redirect('/people/'.$id.'/edit');
    }
    //сохранение главной информации о человеке в карточке
    public function onesave($id, Request $request)
    {

        $people = App\People::find($id);
        $people->title = $request->title;
        $people->date_of_birth = $request->date_of_birth;
        $people->date_of_death = $request->date_of_death;
        $people->facebook = $request->facebook;
        $people->twitter = $request->twitter;
        $people->instagram = $request->instagram;
        $people->wikipedia = $request->wikipedia;
        $people->save();

        return redirect('/people/'.$id.'/edit');
    }
    //сохранение дополнительной информации о человеке в карточке
    public function tosave($id, Request $request)
    {

        $people = App\People::find($id);
        $people->biography = $request->biography;
        $people->groupTitle = $request->groupTitle;
        $people->save();

        return redirect('/people/'.$id.'/edit');
    }
    //сохранение другой информации о человеке в карточке
    public function articlessave($id, Request $request)
    {
        $articles = new \App\Articles;
        $articles->title = $request->title;
        $articles->people_id = $id;
        $articles->url = $request->url;
        $articles->save();

        return redirect('/people/'.$id.'/edit');
    }
    //Просмотр альбома фото человека
    public function albumfoto($id, $id_album)
    {
        $fotoname = App\AlbumPhoto::find($id_album);
        $album = App\AlbumPhoto::all()->where('people_id', $id);
        $people = App\People::find($id);
        $foto = App\Photo::all()->where('people_id',$id)->where('album_id',$id_album);
        return view('people.albumfoto', compact('foto', 'people', 'album', 'fotoname'));
    }
    //Редактирование альбома с фото
    public function albumfotoedit($id, $id_album)
    {
        $fotoname = App\AlbumPhoto::find($id_album);
        $album = App\AlbumPhoto::all()->where('people_id', $id);
        $people = App\People::find($id);
        $foto = App\Photo::all()->where('people_id',$id)->where('album_id',$id_album);
        $album_photos = App\AlbumPhoto::all()->where('people_id',$id);

        return view('people.albumfotoedit', compact('foto', 'people', 'album', 'fotoname', 'album_photos'));
    }
    //Добавление альбома человеку
    public function addalbumfoto($id, Request $request)
    {

        $people = new \App\AlbumPhoto;
        $people->people_id = $id;
        $people->name = $request->name;
        $people->save();

        return redirect('/people/'.$id.'/edit');
    }
    //Редактирование имени альбома фото
    public function editnamealbumfoto($id, Request $request)
    {
        $people = App\AlbumPhoto::find($request->id);
        $people->name = $request->name;
        $people->save();

        return redirect('/people/'.$id.'/edit');
    }
    //Просмотр альбома с видео
    public function albumvideo($id, $id_album)
    {
        $videoname = App\AlbumVideo::find($id_album);
        $album = App\AlbumVideo::all()->where('people_id', $id);
        $people = App\People::find($id);
        $video = App\Video::all()->where('people_id',$id)->where('album_id',$id_album);
        return view('people.albumvideo', compact('video', 'people', 'album', 'videoname'));
    }
    //Редактирование альбома с видео
    public function albumvideoedit($id, $id_album)
    {
        $videoname = App\AlbumVideo::find($id_album);
        $album = App\AlbumVideo::all()->where('people_id', $id);
        $people = App\People::find($id);
        $video = App\Video::all()->where('people_id',$id)->where('album_id',$id_album);
        $album_video = App\AlbumVideo::all()->where('people_id',$id);

        return view('people.albumvideoedit', compact('video', 'people', 'album', 'videoname', 'album_video'));
    }
    //Редактирование названия под фото
    public function editnamefoto($id, Request $request)
    {
        $photo = App\Photo::find($request->id);
        $photo->name = $request->name;
        $photo->save();

        return redirect('/people/'.$photo->people_id.'/albumfoto/'.$photo->album_id.'/edit');
    }
    //Редактирование название под видео
    public function editnamevideo($id, Request $request)
    {
        $video = App\Video::find($request->id);
        $video->name = $request->name;
        $video->save();

        return redirect('/people/'.$video->people_id.'/albumvideo/'.$video->album_id.'/edit');
    }
    //Удаление альбома фото
    public function deletealbumphoto($id, $id_album)
    {
        $people = App\AlbumPhoto::find($id_album);
        $people->delete();

        return redirect('/people/'.$id.'/edit');
    }
    //Удаление фото
    public function deletephoto($id, $album_id, $foto_id)
    {
        $people = App\Photo::find($foto_id);
        $people->delete();

        return redirect('/people/'.$id.'/albumfoto/'.$people->album_id.'/edit');
    }
    //Удаление видео
    public function deletevideo($id, $album_id, $foto_id)
    {
        $people = App\Video::find($foto_id);
        $people->delete();

        return redirect('/people/'.$id.'/albumvideo/'.$people->album_id.'/edit');
    }
    //Добавление альбома с видео
    public function addalbumvideo($id, Request $request)
    {

        $people = new \App\AlbumVideo;
        $people->people_id = $id;
        $people->name = $request->name;
        $people->save();

        return redirect('/people/'.$id.'/edit');
    }
    //Удаление альбома видео
    public function deletealbumvideo($id, $id_album)
    {
        $people = App\AlbumVideo::find($id_album);
        $people->delete();

        return redirect('/people/'.$id.'/edit');
    }
    //Удаление записи ссылки в карточке
    public function deletearticles($id, $id_articles)
    {
        $articles = App\Articles::find($id_articles);
        $articles->delete();

        return redirect('/people/'.$id.'/edit');
    }
    //Изменить имя альбома с видео
    public function editnamealbumvideo($id, Request $request)
    {
        $people = App\AlbumVideo::find($request->id);
        $people->name = $request->name;
        $people->save();

        return redirect('/people/'.$id.'/edit');
    }
    //страница добавление ребенка
    public function addchildone($id, Request $request)
    {

        $people = App\People::all()->where('id',$id);
        $peoplemum = App\People::all()->where('husband', $id);
        return view('people.addchildone',compact('people','peoplemum'));
    }
    //Страница добавление человека
    public function addpeople(Request $request)
    {

        return view('people.add');

    }
    //Добавление человека
    public function addpeopleyes(Request $request)
    {

        $people = new \App\People;
        $people->title = $request->title;
        $people->gender = $request->gender;
        $people->date_of_birth = $request->date_of_birth;
        $people->groupTitle  = $request->groupTitle;;

        $people->save();
        return redirect('/home');

    }
    //Добавление ребенка
    public function addchildoneyes(Request $request)
    {

        $people = new \App\People;
        $people->title = $request->title;
        $people->groupTitle  = $request->groupTitle ;
        $people->date_of_birth = $request->date_of_birth;
        $people->date_of_death = $request->date_of_death;
        $people->dad = $request->dad;
        $people->mum = $request->mum;
        $people->gender = $request->gender;
        if($people->gender == 2){
            $people->logo = 'p.png';
        }
        $people->save();
        return view('people.infosave');

    }
    //Страница добавление ребенка
    public function addchildto($id, Request $request)
    {

        $people = App\People::all()->where('id',$id);
        $peopledad = App\People::all()->where('wife', $id);
        return view('people.addchildto',compact('people','peopledad'));
    }
    //Добавление ребенка
    public function addchildtoeyes(Request $request)
    {

        $people = new \App\People;
        $people->title = $request->title;
        $people->groupTitle  = $request->groupTitle ;
        $people->date_of_birth = $request->date_of_birth;
        $people->date_of_death = $request->date_of_death;
        $people->dad = $request->dad;
        $people->mum = $request->mum;
        $people->gender = $request->gender;
        if($people->gender == 2){
            $people->logo = 'p.png';
        }
        $people->save();
        return view('people.infosave');

    }
    //Страница добавление жены
    public function addwife($id, Request $request)
    {

        $people = App\People::all()->where('id',$id);
        return view('people.addwife',compact('people'));

    }
    //Добавление жены
    public function addwifeyes(Request $request)
    {

        $people = new \App\People;
        $people->title = $request->title;
        $people->date_of_birth = $request->date_of_birth;
        $people->date_of_death = $request->date_of_death;
        $people->husband = $request->husband;
        $people->gender = 2;
        $people->logo = 'p.png';
        $people->save();

        $peopleto = App\People::find($request->husband);
        $peopletr = App\People::all()->where('husband', $request->husband);
        foreach ($peopletr as $item){
            $peopleto->wife = $item->id;
            $peopleto->save();
        }
        return view('people.infosave');
    }
    //Страница добавление родителей
    public function addparents($id)
    {

        $people = App\People::all()->where('id',$id);
        return view('people.addparents',compact('people'));
    }
    //Добавление родителей
    public function addparentsyes(Request $request)
    {

        $people = new \App\People;
        $people->title = $request->title;
        $people->date_of_birth = $request->date_of_birth;
        $people->temp_child = $request->child;
        $people->groupTitle  = $request->groupTitle;
        $people->gender = 1;
        $people->save();

        $peopleto = new \App\People;
        $peopleto->title = $request->title_to;
        $peopleto->date_of_birth = $request->date_of_birth_to;
        $peopleto->temp_child = $request->child;
        $peopleto->groupTitle  = $request->groupTitle;
        $peopleto->gender = 2;
        $peopleto->logo = 'p.png';
        $peopleto->save();

        global $husband;
        global $wife;

        $peoplep = App\People::find($request->child);
        $peopletr = App\People::all()->where('temp_child', $request->child)->where('gender', 1);
        foreach ($peopletr as $item){
            $peoplep->dad = $item->id;
            $peoplep->save();
            $husband = $item->id;

        }
        $peoplefr = App\People::all()->where('temp_child', $request->child)->where('gender', 2);
        foreach ($peoplefr as $item){
            $peoplep->mum = $item->id;
            $peoplep->save();
            $wife = $item->id;
        }

        $peoplesh = App\People::find($husband);
        $peoplesh->wife = $wife;
        $peoplesh->save();

        $peoplesev = App\People::find($wife);
        $peoplesev->husband = $husband;
        $peoplesev->save();
        return view('people.infosave');
    }
    //Добавление фото в альбом в карточке на главной
    public function imagesalbum($id, Request $request)
    {
        foreach ($request->file() as $file) {
            foreach ($file as $f) {
                $f->move(storage_path('images'), time().'_'.$f->getClientOriginalName());
                $foto = new App\Photo;
                $filename=$f->getClientOriginalName();
                $foto->url = time().'_'.$filename;
                $foto->people_id = $id;
                $foto->album_id = $request->category;
                $foto->save();
            }
        }
        return redirect('/people/'.$id.'/edit');
    }
    //Добавление фото в альбом в альбоме
    public function imagesalbumedit($id, Request $request)
    {
        foreach ($request->file() as $file) {

            foreach ($file as $f) {
                $f->move(public_path('images/photos'), time().'_'.$f->getClientOriginalName());
                $foto = new App\Photo;
                $filename=$f->getClientOriginalName();
                $foto->url = time().'_'.$filename;
                $foto->people_id = $id;
                $foto->album_id = $request->category;
                $foto->save();
            }
        }
        return redirect('/people/'.$id.'/albumfoto/'.$foto->album_id.'/edit');
    }
    //Добавление видео в альбом
    public function videoalbumedit($id, Request $request)
    {
        foreach ($request->file() as $file) {

            foreach ($file as $f) {
                $f->move(public_path('images/video'), time().'_'.$f->getClientOriginalName());
                $video = new App\Video;
                $filename=$f->getClientOriginalName();
                $video->url = time().'_'.$filename;
                $video->people_id = $id;
                $video->album_id = $request->category;
                $video->save();
            }
        }

        return redirect('/people/'.$id.'/albumvideo/'.$video->album_id.'/edit');
    }


}
