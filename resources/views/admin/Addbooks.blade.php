@extends('layouts.main')
@section('title', 'Add Book')

@section('content')
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<h1>Add Book</h1>
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
    <div class="row g-3">
        <div class="col">
          <input type="text" class="form-control" placeholder="Book Code" name="book_code">
        </div>
        <div class="col">
          <input type="text" class="form-control" placeholder="Title" name="title">
        </div>
      </div>
    <div class="mt-3 w-50">
        <label for="image" class="form-label" name="image">Add Cover</label>
        <input class="form-control" type="file" id="image" name="image">
    </div>

    <div class="option mt-4">
    <label for="categories" name="categories">Category</label>
    <select class="form-control select w-50" name="categories" id="categories"
    multiple="multiple">
        @foreach($categories as $item)
        <option value="{{$item->id}}">{{$item->name}}</option>
        @endforeach
    </select>
    </div>
    <button type="submit" class="btn btn-success mt-3 w-50">save</button>
</form>

<script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script>
        $(document).ready(function() {
        $('.select').select2();
        });
</script>
@endsection