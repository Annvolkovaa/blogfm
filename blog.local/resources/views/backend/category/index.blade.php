@extends('layout')
@section('meta_desc',$meta_desc)
@section('title',$title)
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
      <i class="fas fa-table"></i> Категории
      <a href="{{url('admin/category/create')}}" class="float-right btn btn-sm btn-dark">Добавить данные</a>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>#</th>
              <th>Заголовок</th>
              <th>Изображение</th>
              <th>Действие</th>
            </tr>
          </thead>
          <tbody>
              @foreach($data as $cat)
              <tr>
                <td>{{$cat->id}}</td>
                <td>{{$cat->title}}</td>
                <td><img src="{{ asset('imgs').'/'.$cat->image }}" width="100" /></td>
                <td>
                  <a class="btn btn-info btn-sm" href="{{url('admin/category/'.$cat->id.'/edit')}}">Изменить</a>
                  <a onclick="return confirm('Вы уверены, что хотите удалить?')" class="btn btn-danger btn-sm" href="{{url('admin/category/'.$cat->id.'/delete')}}">Удалить</a>
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
