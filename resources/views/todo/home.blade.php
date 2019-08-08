@extends('layout.app')

@section('body')
    

    <div class="col-lg-10 col-lg-offset-10 text-center">
        <br>
        <center>  <h1>TodoList</h1></center>
        <a href="todo/create" class="btn btn-info" >Add New Item</a>
        <ul class="list-group">
            <li class="list-group-item d-flex justify-content-between align-items-center">
              First List Item
            </li>
            
          </ul>
    </div>

@endsection