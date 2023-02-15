<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Rent Books</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-secondary">
        <div class="container">
          <i class="fa-solid fa-book-open-cover" style="color: #fff;"></i><a class="navbar-brand text-light" href="#"> Rent Books</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-light" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Kategori
                    </a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="#">Fiksi</a></li>
                      <li><a class="dropdown-item" href="#">Horror</a></li>
                      <li><a class="dropdown-item" href="#">Humor</a></li>
                    </ul>
                  </li>
              <li class="nav-item">
                <a class="nav-link text-light" href="/login">Login</a>
              </li>
              <li class="nav-item dropdown">  
            </ul>
        </div>
      </nav>
      <img src="https://img.freepik.com/free-vector/female-smiling-librarian-standing-counter-book-shelf-paper-flat-vector-illustration-city-library-knowledge_74855-8364.jpg?w=2000" style="width: 900px; margin-left: 190px;">
      <div class="content" style="margin-top: 150px;">
        {{-- <img src="https://img.freepik.com/free-vector/library-interior-empty-room-reading-with-books-wooden-shelves_33099-1722.jpg?w=360" style="width: 1000px;"> --}}
        <div id="carouselExampleDark" class="carousel carousel-dark slide">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
          {{-- <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button> --}}
        </div>
        <div class="container my-5 text-left">
            <h4>Wirda's Rent</h4>
          </div>
        <div class="carousel-inner">
          <div class="carousel-item active" data-bs-interval="10000">
            <img src="https://img.freepik.com/free-vector/bookstore-interior-with-shelves-desk-cashier-counter_107791-3016.jpg?w=2000" class="d-block w-5" style="width: 900px; margin-left: 190px;" alt="">
            <div class="carousel-caption d-none d-md-block">
              <h5>First slide label</h5>
              <p>Some representative placeholder content for the first slide.</p>
            </div>
          </div>
          <div class="carousel-item" data-bs-interval="10000">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ3gbosXKSrgZROQCgfhtIkyq2nsiog7X2UVVipIp1FH8Z667Z67vMri69aJcqzr_ApqGc&usqp=CAU" class="d-block w-5" style="width: 900px; margin-left: 190px;" alt="">
            <div class="carousel-caption d-none d-md-block">
              <h5>Second slide label</h5>
              <p>Some representative placeholder content for the second slide.</p>
            </div>
          </div>
          {{-- <div class="carousel-item" data-bs-interval="10000">
            <img src="https://img.freepik.com/free-vector/library-with-books-shelves-laptop-table_107791-1758.jpg?w=2000" class="d-block w-20" alt="">
            <div class="carousel-caption d-none d-md-block">
              <h5>Third slide label</h5>
              <p>Some representative placeholder content for the third slide.</p>
            </div>
          </div> --}}
        </div>
        
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>

      <br>
      <div class="container my-5" style="margin-top: 150px;">
        <div class="row">
            <div class="col-lg-4 mt-5">
                <h1> About Us </h1>
                <a href=""><button type="button" class="btn btn-primary" style="margin-left: 45px; margin-top: 20px;">Register</button></a>
            </div>
            <div class="col-lg-8 mt-5">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero error similique deleniti commodi, libero quasi odio quam optio hic nisi dicta, placeat totam debitis temporibus eius nam? Magnam, sed ipsa.
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero error similique deleniti commodi, libero quasi odio quam optio hic nisi dicta, placeat totam debitis temporibus eius nam? Magnam, sed ipsa.
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero error similique deleniti commodi, libero quasi odio quam optio hic nisi dicta, placeat totam debitis temporibus eius nam? Magnam, sed ipsa.
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero error similique deleniti commodi, libero quasi odio quam optio hic nisi dicta, placeat totam debitis temporibus eius nam? Magnam, sed ipsa.
            </div>
      </div>

      {{-- card books --}}
      <div class="container" style="margin-top: 150px;">
        <div class="row text-center mt-5">
          <h2> Top 3 Books in this week </h2>
        </div>
        <div class="row mt-5">
          <div class="col-lg-4">
            <div class="card" style="width: 18rem;">
              <img src="https://pub-static.fotor.com/assets/projects/pages/dddda0b59fb9433eb53e7174981c8b67/blue-minimal-novel-cover-6e355184dc3545c6bec6a9f618f83e0d.jpg" class="card-img-top" alt="">
              <div class="card-body">
                <h5 class="card-title" style="text-align: center">Bintang</h5>
                <p class="card-text text-center">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary" style="margin-left: 80px;">Read More</a>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="card" style="width: 18rem;">
              <img src="https://marketplace.canva.com/EAFFC7J8mbI/1/0/1003w/canva-putih-kuning-lanskap-minimalis-sampul-buku-novel-qBdCH1piX8E.jpg" class="card-img-top" alt="">
              <div class="card-body">
                <h5 class="card-title" style="text-align: center">Bulan</h5>
                <p class="card-text text-center">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary" style="margin-left:80px;">Read More</a>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="card" style="width: 18rem;">
              <img src="https://www.adobe.com/express/create/cover/media_178ebed46ae02d6f3284c7886e9b28c5bb9046a02.jpeg?width=400&format=jpeg&optimize=medium" class="card-img-top" alt="">
              <div class="card-body">
                <h5 class="card-title" style="text-align: center">Matahari</h5>
                <p class="card-text text-center">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary" style="margin-left:80px;">Read More</a>
              </div>
            </div>
          </div>
        </div>
      </div> 

      <div class="container" style="margin-top: 150px;">
        <div class="row text-center">
          <h2> Contact Admin </h2>
        </div>
        <div class="row justify-content-center">
          <div class="col-lg-7">
            <form>
              <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="inputname" aria-describedby="name">
              </div>
              <div class="mb-3">
                <label for="massage" class="form-label">Massage</label>
                <input type="text" class="form-control" id="massage">
              </div>
              <button type="submit" class="btn btn-primary w-50" style="margin-left: 170px;">Send</button>
            </form>
          </div>
        </div>
      </div>

      <footer style="margin-top: 150px;">
        <p style="text-align: center;">Made by <b>@WirdaRents</b>.</p>
      </footer>
</body>
</html>