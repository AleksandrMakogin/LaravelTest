
@extends('admin_master')
@section('content')
<body>

<h1 style="text-align:center">{{$data_id->book->namefilm}}а</h1>

<div class="card">
    <img src="{{asset($data_id->book->image == '' ? 'image/films/nofound.png' : $data_id->book->image)}}" alt="" style="width:100%">
    <p>{{$data_id->book->image}}</p>
  <h1>{{$data_id->gener->namegener}}</h1>
  <p class="price" > Cтатус : {{$data_id->book->status}}</p>
  <p>  </p>

</div>

</body>

<style>
    .card {
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
        max-width: 600px;
        margin: auto;
        text-align: center;
        font-family: arial;
    }

    .price {
        color: grey;
        font-size: 22px;
    }

    .card button {
        border: none;
        outline: 0;
        padding: 12px;
        color: white;
        background-color: #000;
        text-align: center;
        cursor: pointer;
        width: 100%;
        font-size: 18px;
    }

    .card button:hover {
        opacity: 0.7;
    }
</style>
@endsection
