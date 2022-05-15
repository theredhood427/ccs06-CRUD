@extends('books.layout')
@section('content')
 
 
<div class="card">
  <div class="card-header">books Page</div>
  <div class="card-body">
        <div class="card-body">
        <h5 class="card-title">Book Title : {{ $books->title }}</h5>
        <p class="card-text">Author Name : {{ $books->name }}</p>
        <p class="card-text">Book Description : {{ $books->book_desk }}</p>
        <p class="card-text">Year Published : {{ $books->year }}</p>
  </div>
       
    </hr>
  
  </div>
</div>