@extends('layout')
@section('meta_desc','Все комментарии')
@section('title','Все комментарии')
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
      <i class="fas fa-table"></i> комментарии
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>#</th>
              <th>Комментарий</th>
              <th>Действие</th>
            </tr>
          </thead>
          <tbody>
              @foreach($data as $comment)
              <tr>
                <td>{{$comment->id}}</td>
                <td>{{$comment->comment}}</td>
                <td>
                  <a onclick="return confirm('Вы уверены, что хотите удалить?')" class="btn btn-danger btn-sm" href="{{url('admin/comment/delete/'.$comment->id)}}">Удалить</a>
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
