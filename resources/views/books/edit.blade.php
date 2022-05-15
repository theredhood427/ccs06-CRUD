@extends('books.layout')
@section('content')
 
<div class="card">
  <div class="card-header">Edit Book Page</div>
  <div class="card-body">
      
      <form action="{{ url('book/' .$books->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$books->id}}" id="id" />
        <label>Book Title</label></br>
        <input type="text" name="title" id="title" value="{{$books->title}}" class="form-control"></br>
        <label>Author Name</label></br>
        <input type="text" name="name" id="name" value="{{$books->name}}" class="form-control"></br>
        <label>Book Description</label></br>
        <input type="text" name="book_desk" id="book_desk" value="{{$books->book_desk}}" class="form-control"></br>
        <label>Year Published</label></br>
        <input type="text" name="year" id="year" value="{{$books->year}}" class="form-control"></br>
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop