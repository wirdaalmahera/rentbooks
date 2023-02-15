@extends('layouts.main')
@section('title', 'Add Book')

@section('content')
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<h1>Update Book</h1>
@if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
@endif
<form action="" method="POST" class="mt-4" enctype="multipart/form-data">
    @csrf
    @method('put')
    <div class="row g-3">
        <div class="col">
          <input type="text" class="form-control" placeholder="Book Code" name="book_code" value="{{$books->book_code}}">
        </div>
        <div class="col">
          <input type="text" class="form-control" placeholder="Title" name="title" value="{{$books->title}}">
        </div>
      </div>
    <div class="mt-3 w-50">
        <label for="image" class="form-label" name="image">Add Cover</label>
        <input class="form-control" type="file" id="image" name="image">
        <div class="mb-3"></div>
            <label for="currentImage" class="form-label">Current Cover</label>
            <br>
            @if($books->cover != '')
            <img src="{{asset('storage/cover/'.$books->cover)}}" alt="" width="100px">
            @else 
            <img src="{{asset('assets/img/no_cover.jpg')}}" alt="" width="75px">
            @endif
        </div>

    <div class="option mt-4">
    <label for="categories" name="categories">Category</label>
    <select class="form-control select w-50" name="categories" id="categories"
    multiple="multiple">
        @foreach($categories as $item)
        <option value="{{$item->id}}">{{$item->name}}</option>
        @endforeach
    </select>
    <br>
    <label for="listcategory" class="form-label">Current Category</label>
    <ul>
        @foreach($books->categories as $category)
        <li>{{$category->name}}</li>
        @endforeach
    </ul>
    </div>
    <button type="submit" class="btn btn-success mt-3 w-50">Update</button>
</form>

<script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script>
        $(document).ready(function() {
        $('.select').select2();
        });
</script>
@endsection