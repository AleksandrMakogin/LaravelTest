@extends('admin_master')

@section('content')
<div class="container-md-full">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="d-flex align-items-center">
                <div class="mr-auto">

                </div>
            </div>
        </div>


        <!-- Main content -->

        <div id="media_quiry" class="d-lg-flex justify-content-lg-center">



            <!-- /.col -->
            <div class="col-lg-auto">

                <div class="box">
                    <div class="box-header with-border">
                        <h3 class="box-title">Редактировать  film </h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="">
                            <form  method="post" action="{{route('update',$data_id->id )}}"  enctype="multipart/form-data">
                                   @csrf
                                          <input type="hidden" name="id" value="{{$data_id->id}}">
                                          <input type="hidden" name="old_image" value="{{$data_id->book->image}}">
                             <div class="form-group">
                             <h5>Название фильма <span class="text-danger">*</span></h5>
                                 <select name="film_name"   class="form-control" >
                                     <option value="" selected="" disabled="">Выбрать подкатегорию</option>
                                     @foreach($films as $f)
                                         <option value="{{$f->id}}"{{$f->id == $data_id->book_id ? 'selected' : ''}}>{{$f->namefilm}}</option>
                                     @endforeach
                                 </select>
                                 @error('film_status')
                                 <span class="text-danger">{{$message}}</span>
                                 @enderror
                             <div class="form-group">
                                 <h5>Статус  фильма <span class="text-danger">*</span></h5>
                                 <div class="controls">
                                     <select name="film_status"   class="form-control" >
                                         <option value="{{$data_id->book->status}}" selected="{{$data_id->book->status}}" disabled=""> выберете статус </option>

                                             <option value="1">1</option>
                                             <option value="2">2</option>
                                     </select>
                                     @error('film_status')
                                     <span class="text-danger">{{$message}}</span>
                                     @enderror

                                 </div>
                                 <div class="form-group">
                                     <h5>Жанр <span class="text-danger">*</span></h5>
                                     <div class="controls">
                                         <select name="namegener"   class="form-control" >
                                             <option value="" selected="" disabled="">Выбрать подкатегорию</option>
                                             @foreach($gener as $g)
                                                 <option value="{{$g->id}}"{{$g->id == $data_id->gener_id ? 'selected' : ''}}>{{$g->namegener}}</option>
                                             @endforeach
                                         </select>
                                         @error('namegener')
                                         <span class="text-danger">{{$message}}</span>
                                         @enderror
                                     </div>

                            <h5>Фото бренда  <span class="text-danger">*</span></h5>
                           <div class="controls">
                             <input type="file" id="film_image" name="film_image" class="form-control"    >
                                 @error('film_image')
                                 <span class="text-danger">{{$message}}</span>
                                 @enderror
                           </div>
                        </div>
                         <div class="mb-4">
                                <img src="{{asset($data_id->book->image)}}" style="height: 100px;width: 100px">
                         </div>
                         <div class="text-xs-right ">
                           <button type="submit" class="btn btn-rounded  btn-info">Редактировать Film </button>
                         </div>
                     </div>
                             </div>

       </form>



</div>
</div>
<!-- /.box-body -->
</div>
<!-- /.box -->


<!-- /.box -->
</div>

</div>
<!-- /.row -->

<!-- /.content -->

</div>
@endsection
