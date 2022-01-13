
@extends('layout')
@section('content')
        <div class="container-fluid">

          <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="#">Панель управления</a>
            </li>
            <li class="breadcrumb-item active">Обзор</li>
          </ol>


          <!-- DataTables Example -->
          <div class="card mb-3">
            <div class="card-header">
              <i class="fas fa-table"></i> Добавить категорию
              <a href="{{url('admin/category')}}" class="float-right btn btn-sm btn-dark">Все данные</a>
            </div>
            <div class="card-body">
              <div class="table-responsive">

                @if($errors)
                  @foreach($errors->all() as $error)
                    <p class="text-danger">{{$error}}</p>
                  @endforeach
                @endif

                @if(Session::has('success'))
                <p class="text-success">{{session('success')}}</p>
                @endif

                <form method="post" action="{{url('admin/category')}}" enctype="multipart/form-data">
                  @csrf
                  <table class="table table-bordered">
                      <tr>
                          <th>Заголовок</th>
                          <td><input type="text" name="title" class="form-control" /></td>
                      </tr>
                      <tr>
                          <th>Детальное описание</th>
                          <td><input type="text" name="detail" class="form-control" /></td>
                      </tr>
                      <tr>
                          <th>Изображение</th>
                          <td><input type="file" name="cat_image" /></td>
                      </tr>
                      <tr>
                          <td colspan="2">
                              <input type="submit" class="btn btn-primary" />
                          </td>
                      </tr>
                  </table>
                </form>
              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->
@endsection

      