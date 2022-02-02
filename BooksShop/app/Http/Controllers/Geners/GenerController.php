<?php

namespace App\Http\Controllers\Geners;

use App\Http\Controllers\Controller;
use App\Models\Gener;
use Illuminate\Http\Request;

class GenerController extends Controller
{
    public function index(){
        $gener = Gener::paginate(3);
        return response()->json($gener);

    }
    public function show($id){

         $gener = Gener::find($id);
          return response()->json($gener);

    }

}
