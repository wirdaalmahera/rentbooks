@extends('layouts.main')
@section('title', 'List User Bannedd')

@section('content')
<h1>User Banned</h1>
<div class="mt-4 d-flex justify-content-end">
    <a href="/user" class="btn btn-primary me-3">Back</a>
</div>
<div class="mt-4">
    <table class="table">
        <thead>
            <tr>
                <td>No.</td>
                <td>Phone</td>
                <td>Username</td>
                <td>Address</td>
                <td>Action</td>
            </tr>
        </thead>
        <tbody>
            @foreach($usersban as $data)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$data->username}}</td>
                <td>{{$data->phone}}</td>
                <td>{{$data->address}}</td>
                <td>
                    <a href="/users-restored/{{$data->slug}}" class="btn btn-primary">Restored</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection