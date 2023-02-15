<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Rent Books | @yield ('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer"/>
</head>
<style>
    .main{
        height: 100vh;
    }
    .sidebar{
        background-color: #93BFCF;
    }

    .sidebar a{
        text-decoration: none;
        padding: 20px 40px;
        color: white;
        display: block;
    }

    .sidebar a:hover{
        background-color: #3C84AB;
    }

    .sidebar a.active{
        background-color: #3C84AB;
        border-right: solid 4px #6096B4; 
        border-radius: 10px;
    }

    .books{
        background-color: pink;
    }

    .card-data{
        border-radius: 5px;
        padding: 20px 40px;
        border-solid: 1px;
        color: #fff;
    }

    .card-data i{
        font-size: 50px;
    }

    .desc{
        font-size: 25px;
    }

    .count {
        font-size: 25px;
    }

    .category {
        color: #fff;
        background-color: #CDE990;
    }

    .user {
        color: #fff;
        background-color: #E5E0FF;
    }
</style>
<body>

    <div class="main d-flex flex-column justify-content-between">
   {{-- navbar --}}
    <nav class="navbar navbar-expand-lg" style="background-color: #5B7DB1;">
        <div class="container">
          <a class="navbar-brand text-white" href="#">Rent-Books</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            
          </div>
        </div>
      </nav>

      <div class="body-main h-100">
        <div class="row g-0 h-100">
            <div class="col-lg-2 p-3 sidebar collapse d-lg-block" id="navbarSupportedContent">
                @if(Auth::user()->roles_id == 1)
               <a href="/dashboard" @if(request()->route()->uri == 'dashboard') class= 'active' @endif><i class="bi bi-house-lock-fill"></i>  Dashboard</a>
               <a href="/user" @if(request()->route()->uri == 'user') class= 'active' @endif><i class="bi bi-person-fill-check"></i>  User</a>
               <a href="/category" @if(request()->route()->uri == 'category') class= 'active' @endif><i class="bi bi-bookmarks-fill"></i>  Category</a>
               <a href="/books" @if(request()->route()->uri == 'books') class= 'active' @endif><i class="bi bi-book-fill"></i>  Books</a>  
               <a href="/rent" @if(request()->route()->uri == 'rent') class= 'active' @endif><i class="bi bi-bag-check-fill"></i> Rent Logs</a>
               <a href="/logout" @if(request()->route()->uri == 'logout') class= 'active' @endif><i class="bi bi-arrow-right-square-fill"></i>  Logout</a>  
               @else
               <a href="/profile"  @if(request()->route()->uri == 'profile') class= 'active' @endif><i class="bi bi-person-fill"></i>  Profile</a>
               <a href="/rent" @if(request()->route()->uri == 'rent') class= 'active' @endif><i class="bi bi-bookmark-check-fill"></i> Rent Logs</a>  
               @endif 
            </div>
            <div class="col-lg-10 p-5 content">
                @yield('content')
            </div>
        </div>
      </div>
    </div>



    
</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
</html>
