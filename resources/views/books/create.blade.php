@extends('books.layout')
@section('content')
 
<div class="card">
  <div class="card-header">Books Page</div>
  <div class="card-body">
      
      <form action="{{ url('book') }}" method="post">
        {!! csrf_field() !!}
        <label>Book Title</label></br>
        <input type="text" name="title" id="title" class="form-control"></br>
        <label>Author Name</label></br>
        <input type="text" name="name" id="name" class="form-control"></br>
        <label>Book Description</label></br>
        <input type="text" name="book_desk" id="book_desk" class="form-control"></br>
        <label>Year Published</label></br>
        <input type="text" name="year" id="year" class="form-control"></br>
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop