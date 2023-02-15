@extends('layouts.main')
@section('title', 'Update')

@section('content')
<h1>Update Category</h1>
@if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
@endif
@if (session('status'))
    <div class="alert alert-success mt-3">
        {{ session ('status')}}
    </div>
    @endif
<form action="/categoryEdit/{{$category->slug}}" method="POST" class="mt-4">
    {{-- "/category-edit/{{$category->slug}}" masuk ke route dan cari yg slug --}}
    @csrf
    @method('put')
    <input type="text" name="name" id="name" class="form-control w-50" value="{{$category->name}}">
    <button type="submit" class="btn btn-success mt-4">save</button>
</form>
@endsection