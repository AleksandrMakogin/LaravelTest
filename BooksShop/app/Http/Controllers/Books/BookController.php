<?php

namespace App\Http\Controllers\Books;

use App\Http\Controllers\Controller;
use App\Models\MainTabel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use mysql_xdevapi\Table;

class BookController extends Controller
{
    public function  index(){

        $books = DB::table('main_tabels')
            ->join('books','main_tabels.book_id','books.id')
            ->join('geners','main_tabels.gener_id','geners.id')
            ->select('books.namefilm','books.status','geners.namegener')
            ->orderBy('main_tabels.created_at','DESC')
            ->paginate(5);
        return response()->json($books);
    }

    public function show($id)
    {
        $books = DB::table('main_tabels')->where('id',$id)->first();
        return response()->json($books);
    }

    public function bookWithStatus(){

    }


}
