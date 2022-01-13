@extends('layout')
@section('content')
<div class="container-fluid">

  <!-- Breadcrumbs-->
  <ol class="breadcrumb">
    <li class="breadcrumb-item">
      <a href="index.html">Панель управления</a>
    </li>
    <li class="breadcrumb-item active">Обзор</li>
  </ol>


  <!-- DataTables Example -->
  <div class="card mb-3">
    <div class="card-header">
      <i class="fas fa-table"></i> Новости
      <a href="{{url('admin/post/create')}}" class="float-right btn btn-sm btn-dark">Добавить данные</a>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>#</th>
              <th>Категория</th>
              <th>Заголовок</th>
              <th>Иконка</th>
              <th>Полное изображение</th>
              <th>Действие</th>
            </tr>
          </thead>
          <tbody>
              @foreach($data as $post)
              <tr>
                <td>{{$post->id}}</td>
                <td>{{$post->category->title}}</td>
                <td>{{$post->title}}</td>
                <td><img src="{{ asset('imgs/thumb').'/'.$post->thumb }}" width="100" /></td>
                <td><img src="{{ asset('imgs/full').'/'.$post->full_img }}" width="100" /></td>
                <td>
                  <a class="btn btn-info btn-sm" href="{{url('admin/post/'.$post->id.'/edit')}}">Изменить</a>
                  <a onclick="return confirm('Вы уверены, что хотите удалить это?')" class="btn btn-danger btn-sm" href="{{url('admin/post/'.$post->id.'/delete')}}">Удалить</a>
                </td>
              </tr>
              @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>

</div>
<!-- /.container-fluid -->
@endsection
