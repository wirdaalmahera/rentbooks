@extends('layouts.main')
@section('title', 'User')

@section('content')
<h1>Category List</h1>
    @if (session('status'))
    <div class="alert alert-success mt-3">
        {{ session ('status')}}
    </div>
    @endif
<div class="mt-4 d-flex justify-content-end">
    <a href="/category-add" class="btn btn-success">Add Category</a>
    {{-- category-add dipanggil berdasarkan name dari web.php bkn controller --}}
</div>
  <div class="mt-5"></div>
    <table class="table">
        <thead>
            <tr>
                <th>No</th>
                <th>Name</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($categories as $item)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$item->name}}</td>
                <td>
                    <a href="/categoryEdit/{{$item->slug}}" class="btn btn-primary">Edit</a> 
                    {{-- memanggil berdasarkamn route --}}
                    <a href="/category-delete/{{$item->slug}}" class="btn btn-danger">Delete</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection