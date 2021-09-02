@extends('main')




@section('content')
<table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Url</th>
      <th scope="col">Name</th>
      <th scope="col">Description</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
      @foreach ($datas as $data )
          
      <tr>
        <th scope="row">{{$data->id}}</th>
        <th scope="row"><a href="{{$data->url}}" class="btn btn-{{$data->color}}">Url</a></th>
        <td>{{$data->Name}}</td>
        <td>{{$data->description}}</td>
        <td class="d-flex">
      
    <form action="" method="post" class="me-1">
    @csrf
    @method('PUT')
    <button class="btn btn-info ">EDIT</button>
    </form>
       
     <a href="#" class="btn btn-warning me-1">SHOW</a>

        <form action="" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">DELETE</button>
        </form>
    </td>
      </tr>
      @endforeach


  </tbody>
</table>
@endsection