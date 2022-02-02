<?php

namespace App\Http\Controllers;

use App\Models\Books;
use App\Models\Gener;
use App\Models\MainTabel;
use App\Repositories\HomeRepository\HomeRepository;
use Carbon\Carbon;
use Illuminate\Http\Request;

use MongoDB\Driver\Manager;
use phpDocumentor\Reflection\Types\Integer;

class HomeController extends Controller
{

    public function index(){

       $homeRepo = new HomeRepository();
       $arr = $homeRepo->getAllFilms();
        $data = $arr[0];
        $gener =$arr[1];
        $films =$arr[2];
        return view('welcome', compact('gener','data','films') );

    }
    public function show($id){

        $homeRepo = new HomeRepository();
        $data_id = $homeRepo->getMainTableId($id);
          return view('films.showe', compact('data_id') );
    }

    public function edit($id){

        $homeRepo = new HomeRepository();
        $data_id = $homeRepo->getMainTableId($id);
        $arr = $homeRepo->getAllFilms();

        $gener =  $arr[0];
        $films = $arr[2];
        return view('films.edit', compact('data_id', 'films', 'gener') );
    }

    public function  update(Request $request){
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


    public function delete($id){

        MainTabel::findOrFail($id)->delete();
        return redirect()->back();

    }




}
