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

  <!-- Icon Cards-->
  <div class="row">
    <div class="col-xl-3 col-sm-6 mb-3">
      <div class="card text-white bg-primary o-hidden h-100">
        <div class="card-body">
          <div class="card-body-icon">
            <i class="fas fa-fw fa-list"></i>
          </div>
          <div class="mr-5">{{\App\Models\Category::count()}} Категории</div>
        </div>
        <a class="card-footer text-white clearfix small z-1" href="{{url('admin/category')}}">
          <span class="float-left">Подробнее</span>
          <span class="float-right">
            <i class="fas fa-angle-right"></i>
          </span>
        </a>
      </div>
    </div>
    <div class="col-xl-3 col-sm-6 mb-3">
      <div class="card text-white bg-warning o-hidden h-100">
        <div class="card-body">
          <div class="card-body-icon">
            <i class="fas fa-fw fa-address-card"></i>
          </div>
          <div class="mr-5">{{\App\Models\Post::count()}} Новости</div>
        </div>
        <a class="card-footer text-white clearfix small z-1" href="{{url('admin/post')}}">
          <span class="float-left">Подробнее</span>
          <span class="float-right">
            <i class="fas fa-angle-right"></i>
          </span>
        </a>
      </div>
    </div>
    <div class="col-xl-3 col-sm-6 mb-3">
      <div class="card text-white bg-success o-hidden h-100">
        <div class="card-body">
          <div class="card-body-icon">
            <i class="fas fa-fw fa-comments"></i>
          </div>
          <div class="mr-5">{{\App\Models\Comment::count()}} Комментарии</div>
        </div>
        <a class="card-footer text-white clearfix small z-1" href="{{url('admin/comment')}}">
          <span class="float-left">Подробнее</span>
          <span class="float-right">
            <i class="fas fa-angle-right"></i>
          </span>
        </a>
      </div>
    </div>
    <div class="col-xl-3 col-sm-6 mb-3">
      <div class="card text-white bg-danger o-hidden h-100">
        <div class="card-body">
          <div class="card-body-icon">
            <i class="fas fa-fw fa-users"></i>
          </div>
          <div class="mr-5">{{\App\Models\User::count()}} Пользователи</div>
        </div>
        <a class="card-footer text-white clearfix small z-1" href="{{url('admin/user')}}">
          <span class="float-left">Подробнее</span>
          <span class="float-right">
            <i class="fas fa-angle-right"></i>
          </span>
        </a>
      </div>
    </div>
  </div>


  <!-- DataTables Example -->
  <div class="card mb-3">
    <div class="card-header">
      <i class="fas fa-table"></i>
      Последние новости</div>
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
              @foreach($posts as $post)
              <tr>
                <td>{{$post->id}}</td>
                <td>{{$post->category->title}}</td>
                <td>{{$post->title}}</td>
                <td><img src="{{ asset('imgs/thumb').'/'.$post->thumb }}" width="100" /></td>
                <td><img src="{{ asset('imgs/full').'/'.$post->full_img }}" width="100" /></td>
                <td>
                  <a class="btn btn-info btn-sm" href="{{url('admin/post/'.$post->id.'/edit')}}">Изменить</a>
                  <a onclick="return confirm('Вы уверены, что хотите удалить?')" class="btn btn-danger btn-sm" href="{{url('admin/post/'.$post->id.'/delete')}}">Удалить</a>
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
        
