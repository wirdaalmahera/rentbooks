@extends('layouts.main')
@section('title', 'Add Category')

@section('content')
<h1>Add Category</h1>
@if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
@endif
<form action="" method="POST">
    @csrf
    <label for="name" class="form label">Category Name</label>
    <input type="text" name="name" id="name" class="form-control w-50">
    <button type="submit" class="btn btn-success mt-4">save</button>
</form>

@endsection