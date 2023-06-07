@extends('books.layout')
@section('content')
 
<div class="card">
  <div class="card-header">Books Page</div>
  <div class="card-body">
      
      <form action="{{ url('book') }}" method="post">
        {!! csrf_field() !!}
        <label>Name</label></br>
        <input type="text" name="name" id="name" class="form-control"></br>
        <label>Author Name</label></br>
        <input type="text" name="authorname" id="authorname" class="form-control"></br>
        <label>Price</label></br>
        <input type="text" name="price" id="price" class="form-control"></br>
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop