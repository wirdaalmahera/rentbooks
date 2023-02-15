@extends('layouts.main')
@section('title', 'User')

@section('content')
<h1>List User</h1>
@if (session('status'))
    <div class="alert alert-success mt-3">
        {{ session ('status')}}
    </div>
    @endif
<div class="mt-4 d-flex justify-content-end">
    <a href="/users-banned" class="btn btn-secondary me-3">View Ban User</a>
    <a href="/users-registered" class="btn btn-primary me-3">View New Registered User</a>
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
            @foreach($users as $data)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$data->username}}</td>
                <td>{{$data->phone}}</td>
                <td>{{$data->address}}</td>
                <td>
                    <a href="/users-detail/{{$data->slug}}" class="btn btn-primary">Detail</a>
                    <a href="/users-ban/{{$data->slug}}" class="btn btn-danger">Ban User</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection