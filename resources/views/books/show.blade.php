@extends('books.layout')
@section('content')
 
 
<div class="card">
  <div class="card-header">Books Page</div>
  <div class="card-body">
   
 
        <div class="card-body">
        <h5 class="card-title">Name : {{ $books->name }}</h5>
        <p class="card-text">Author Name : {{ $books->authorname }}</p>
        <p class="card-text">Price : {{ $books->price }}</p>
  </div>
       
    </hr>
  
  </div>
</div>