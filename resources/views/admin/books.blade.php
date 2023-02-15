@extends('layouts.main')
@section('title', 'User')

@section('content')
@if (session('status'))
    <div class="alert alert-success mt-3">
        {{ session ('status')}}
    </div>
@endif
<h1>Books List</h1>
<div class="mt-4 d-flex justify-content-end">
    <a href="/books-add" class="btn btn-success">Add Book</a>
    {{-- category-add dipanggil berdasarkan name dari web.php bkn controller --}}
</div>
  <div class="mt-5"></div>
    <table class="table">
        <thead>
            <tr>
                <th>No</th>
                <th>Books Code</th>
                <th>Title</th>
                <th>Cover</th>
                <th>Category</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($books as $value)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$value->book_code}}</td>
                <td>{{$value->title}}</td>
                <td> 
                    @if($value->cover != '')
                    <img src="{{asset('storage/cover/'.$value->cover)}}" alt="" width="100px">
                    @else 
                    <img src="{{asset('assets/img/no_cover.jpg')}}" alt="" width="75px">
                    @endif
                <td>
                    @foreach($value->categories as $category){{$category->name}},
                    @endforeach
                </td>
                <td>{{$value->status}}</td>
                <td>
                    <a href="/booksEdit/{{$value->slug}}" class="btn btn-primary">Edit</a> 
                    {{-- memanggil berdasarkamn route --}}
                    <a href="/books-delete/{{$value->slug}}" class="btn btn-danger">Delete</a>
                </td>
                @endforeach
        </tbody>
    </table>
@endsection
