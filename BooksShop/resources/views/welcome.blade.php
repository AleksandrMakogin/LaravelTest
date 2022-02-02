        @extends('admin_master')

         @section('content')
            <!-- Main content -->
            <section class="content">
                <div class="row">
                    @foreach($gener as $g)
                    <div class="col-xl-2 col-6">
                        <div class="box overflow-hidden pull-up">
                            <div class="box-body">
                                <div class="icon bg-primary-light rounded w-60 h-60">
                                    <i class="text-primary mr-0 font-size-24 mdi mdi-account-multiple"></i>
                                </div>
                                <div>
                                    <p class="text-mute mt-20 mb-0 font-size-16">{{$g->namegener}}</p>
                                    @php
                                         $qty = \App\Models\MainTabel::all()->where('gener_id', $g->id)
                                    @endphp
                                    <h3 class="text-white mb-0 font-weight-500">к-во фильмов :  <small class="text-success">{{ count($qty)}}<i class="fa fa-caret-up"></i> </small></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach

                    </div>

                    <div class="col-12">
                        <div class="box">
                            <div class="box-header">
                                <h4 class="box-title align-items-start flex-column">
                                    Список фильмов
                                    <small class="subtitle"> количество </small>
                                </h4>
                            </div>
                            <div class="box-body">
                                <div class="table-responsive">
                                    <table class="table no-border">
                                        <thead>
                                        <tr class="text-uppercase bg-lightest">
                                            <th style="min-width: 250px"><span class="text-white">Название</span></th>
                                            <th style="min-width: 100px"><span class="text-fade">Жанр </span></th>
                                            <th style="min-width: 100px"><span class="text-fade">Статус </span></th>
                                            <th style="min-width: 150px"><span class="text-fade">Фото </span></th>
                                            <th style="min-width: 130px"><span class="text-fade">создан </span></th>
                                            <th style="min-width: 120px">Действия</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                       @foreach( $data as $d )
                                        <tr>
                                            <td class="pl-0 py-8">
                                                <div class="d-flex align-items-center">
                                                    <div class="flex-shrink-0 mr-20">
                                                        <div class="bg-img h-50 w-50" style="background-image: url(../images/gallery/creative/img-1.jpg)"></div>
                                                    </div>

                                                    <div>
                                                        {{$d->id}} ).   <a href="#" class="text-white font-weight-600 hover-primary mb-1 font-size-16"> {{$d->book->namefilm}} </a>
                                                        <span class="text-fade d-block"> </span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
												<span class="text-fade font-weight-600 d-block font-size-16">

												</span>
                                                <span class="text-white font-weight-600 d-block font-size-16">
{{--													{{$d->gener->namegener}}--}}
												</span>
                                            </td>
                                            <td>

                                                <span class="text-white font-weight-600 d-block font-size-16">
													{{$d->book->status}}
												</span>
                                            </td>
                                            <td>
												<img style="width: 50px; height: 50px" src="{{ $d->book->image == '' ? 'image/films/nofound.png' : $d->book->image}}">

                                            </td>
                                            <td>
                                                <span class="badge badge-primary-light badge-lg">{{$d->created_at}}</span>
                                            </td>
                                            <td class="text-right">
                                                <a href="{{route('edit', $d->id)}}" class="waves-effect waves-light btn btn-warning btn-circle mx-5"><span class="mdi  mdi-pencil-box-outline"></span></a>
                                                <a href="{{route('delete', $d->id)}}" class="waves-effect waves-light btn btn-danger btn-circle mx-5"><span class="mdi  mdi-delete-variant"></span></a>
                                                <a href="{{route('showe', $d->id)}}" class="waves-effect waves-light btn btn-success btn-circle mx-5"><span class="mdi  mdi-eye"></span></a>
                                            </td>
                                        </tr>
                                       @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </section>
            <!-- /.content -->
         @endsection

