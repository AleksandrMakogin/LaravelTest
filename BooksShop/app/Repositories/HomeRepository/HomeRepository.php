<?php

namespace App\Repositories\HomeRepository;

use App\Models\Books;
use App\Models\Gener;
use App\Models\MainTabel;
use App\Repositories\CoreRepository;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;

class HomeRepository
{


    public function  getAllFilms() {

        $data =  MainTabel::all();
        $gener = Gener::all();
        $films = Books::all();
        $arr = [$data,$gener,$films];
        return $arr;
    }

    public  function getMainTableId($id){
        $data_id = MainTabel::findOrFail($id);
        return $data_id;
    }

    public function upadateFilm(Request  $request){

        $film_id = $request->id;
        $data = MainTabel::find($film_id);
        $find_film = $data->book_id;
        $old_image = $request->old_image;
        $new_image =  $request->file('film_image');

        if($new_image){
            $name_gen = hexdec(uniqid());
            $img_ext = strtolower($new_image ->getClientOriginalExtension());
            $img_name = $name_gen.'.'.$img_ext;
            $up_location = 'image/films/';
            $last_img = $up_location.$img_name;
            $new_image ->move($up_location,$img_name);

            Books::find($find_film)->update([
                'image' => $last_img,
                'status' => (int)$request->film_status,
                'updated_at'  => Carbon::now()
            ]);
            MainTabel::find($film_id)->update([
                'gener_id' => $request->namegener,

            ]);
            return Redirect()->route('home');

        }else{
            Books::find($find_film )->update([

                'status' => (int)$request->film_status,
                'updated_at'  => Carbon::now()
            ]);
            MainTabel::find($film_id)->update([
                'book_id' => $request->film_name,
                'gener_id' => $request->namegener,

            ]);
            return Redirect()->route('home');
        }
    }
}
