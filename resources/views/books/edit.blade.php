@extends('books.layout')
@section('content')
 
<div class="card">
  <div class="card-header">Contactus Page</div>
  <div class="card-body">
      
      <form action="{{ url('book/' .$books->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$books->id}}" id="id" />
        <label>Name</label></br>
        <input type="text" name="name" id="name" value="{{$books->name}}" class="form-control"></br>
        <label>Author Name</label></br>
        <input type="text" name="authorname" id="authorname" value="{{$books->authorname}}" class="form-control"></br>
        <label>Price</label></br>
        <input type="text" name="price" id="price" value="{{$books->price}}" class="form-control"></br>
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop