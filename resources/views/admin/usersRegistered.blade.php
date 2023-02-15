@extends('layouts.main')
@section('title', 'Registered User')

@section('content')
<h1>List Registered User</h1>
<div class="mt-4 d-flex justify-content-end">
    <a href="/user" class="btn btn-secondary me-3">Approved User List</a>
</div>
<div class="mt-4">
    <table class="table">
        <thead>
            <tr>
                <td>No.</td>
                <td>Phone</td>
                <td>Username</td>
                <td>Action</td>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $data)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$data->username}}</td>
                <td>{{$data->phone}}</td>
                <td>
                    <a href="/users-detail/{{$data->slug}}" class="btn btn-primary">Detail</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection