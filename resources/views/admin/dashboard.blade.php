@extends('layouts.main')
@section('title', 'User')

@section('content')
{{-- memanggil user yg login --}}
<h3>Welcome, {{Auth::user()->username}}! </h3> 

{{-- cards --}}
<div class="row mt-4">
    <div class="col-4">
        <div class="books card-data">
        <div class="row">
            <div class="col-6">
                <i class="bi bi-journals"></i>
            </div>
            <div class="col-6 d=flex flex-column content-center align-items-end">
                <div class="desc">
                    Books
                </div>
                <div class="count">
                    {{$book_count}}
                </div>
            </div>
        </div>
    </div>
    </div>
    <div class="col-4">
        <div class="category card-data">
        <div class="row">
            <div class="col-6">
                <i class="bi bi-bookmark-plus"></i>
            </div>
            <div class="col-6 d=flex flex-column content-center align-items-end">
                <div class="desc">
                    Category
                </div>
                <div class="count">
                    {{$category_count}}
                </div>
            </div>
        </div>
    </div>
    </div>
    <div class="col-4">
        <div class="user card-data">
        <div class="row">
            <div class="col-6">
                <i class="bi bi-person-circle"></i>
            </div>
            <div class="col-6 d=flex flex-column content-center align-items-end">
                <div class="desc">
                    User
                </div>
                <div class="count">
                    {{$user_count}}
                </div>
            </div>
        </div>
    </div>
    </div>
</div>
{{-- end table --}}

{{-- tabel rent-log --}}
<div class="mt-5">
    <table class="table">
        <thead>
            <tr>
                <th>No</th>
                <th>Username</th>
                <th>Book Title</th>
                <th>Rent Date</th>
                <th>Return Date</th>
                <th>Actual Return Date</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td colspan="7" class="text-center">No Data</td>
            </tr>
        </tbody>
    </table>
</div>
{{-- end table rent-log --}}



@endsection