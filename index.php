<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- <link rel="stylesheet" href="style.css">  -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@100&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Mission: Popssible | Home</title>
    <style>
      *{
    margin: 0;
    padding: 0;
    font-family:sans-serif;
    /* font-weight:bolder; */
    box-sizing:border-box;
}
body,.card
{
background:rgba(112, 225, 253, 0.741);
}
.form-control
{
  background:rgb(1, 210, 255);
}
.form-control:focus
{
  background:rgb(181, 210, 255);
}
::-webkit-scrollbar
{
	width: 5px;
  border-radius:20px;

}
::-webkit-scrollbar:hover
{
  border-radius:20px;
}
::-webkit-scrollbar-track
{
  width: 5px;
	background: rgb(255, 255, 255);
}
::-webkit-scrollbar-track:hover
{
  width: 5px;
	background: rgba(122, 122, 122, 0.28);
}
::-webkit-scrollbar-thumb
{
	background-color: #006fe6d9;
  border-radius:20px;
  width: 5px;
}


.carousel-inner img {
    width: 100%;
    height: 92.5vh;
}
.aboutimg
{
  width: 100%;
  height: 250px!important;
}
    </style>
</head>
<body>

<nav class="navbar navbar-expand-sm navbar-dark bg-primary">
  <div class="container-fluid">
    <a class="navbar-brand" href="javascript:void(0)">Mission: Possible</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="mynavbar">
      <ul class="navbar-nav me-auto">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <!-- <li class="nav-item">
          <a class="nav-link" href="#">Services</a>
        </li> -->
        <li class="nav-item">
          <a class="nav-link" href="about.php">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contact</a>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="text" placeholder="Search">
        <button class="btn btn-primary" type="button">Search</button>
      </form>
    </div>
  </div>
</nav>
<div id="demo" class="carousel slide" data-bs-ride="carousel">

  <div class="carousel-indicators">
    <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
  </div>
  
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/image 1.jpg" alt="Los Angeles" class="d-block" style="width:100%">
      <div class="carousel-caption">
      </div>
    </div>
    <div class="carousel-item">
      <img src="images/image 2.jpg" alt="Chicago" class="d-block" style="width:100%">
      <div class="carousel-caption">
      </div> 
    </div>
    <div class="carousel-item">
      <img src="images/image 3.jpg" alt="New York" class="d-block" style="width:100%">
      <div class="carousel-caption">
      </div>  
    </div>
  </div>

  <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
    <span class="carousel-control-next-icon"></span>
  </button>
</div>
</div>

<section class="my-4">
  <div class=py-4>
    <h2 class="text-center display-5" style="font-weight:bold;">
      About Us
    </h2>
  </div>
  <div class="container-fluid">
  <div class="row">
      <div class="col-lg-6 col-md-6 col-12">
        <img src="images/la.jpg" alt="" class="img-fluid about-img" >
      </div>
      <div class="col-lg-6 col-md-6 col-12">
        <h2 class="display-4 py-2">
          This is Team_work
        </h2>
        <p class="py-2.5" style="line-height:25px;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga, veniam minima. Voluptatibus, officiis harum, nihil quaerat aperiam ullam tempore sed quia voluptas reiciendis recusandae doloremque ea dolorem totam doloribus et error accusamus, molestiae praesentium. Animi vom distins </p>
<a class="btn btn-success" href="about.php">Check More</a>
      </div>
    </div>
  </div>
</section>
<section class="my-4">
  <div class=py-4>
    <h2 class="text-center display-5" style="font-weight:bold;">
      Our Members
    </h2>
  </div>
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-3 col-md-3 col-6">
        <div class="card">
          <img class="card-img-top" src="images/gulshan-kumar.png" alt="Card image">
          <div class="card-body">
            <h4 class="card-title">Gulshan Kumar</h4>
            <p class="card-text">Student of Computer Science and Engineering.</p>
            <a href="#" class="btn btn-primary">See Profile</a>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-3 col-6">
        <div class="card">
          <img class="card-img-top" src="images/sanjay-kunal.png" alt="Card image">
          <div class="card-body">
            <h4 class="card-title">Sanjay Kunal</h4>
            <p class="card-text">Student of Computer Science and Engineering.</p>
            <a href="#" class="btn btn-primary">See Profile</a>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-3 col-6">
        <div class="card">
          <img class="card-img-top" src="images/rashmi-pacheriya2.png" alt="Card image">
          <div class="card-body">
            <h4 class="card-title">Rashmi Pacheriya</h4>
            <p class="card-text">Student of Computer Science and Engineering.</p>
            <a href="#" class="btn btn-primary">See Profile</a>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-3 col-6">
        <div class="card">
          <img class="card-img-top" src="images/shreya-priyadarshi.png" alt="Card image">
          <div class="card-body">
            <h4 class="card-title">Shreya Priyadarshi</h4>
            <p class="card-text">Student of Computer Science and Engineering.</p>
            <a href="#" class="btn btn-primary">See Profile</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- 
<section class="my-4">
  <div class=py-4>
    <h2 class="text-center display-5" style="font-weight:bold;">
      Our Gallary
    </h2>
  </div>
  <div class="container-fluid"> -->
    <!-- <div class="row">
      <div class="col-lg-4 col-md-4 col-12">
        <img src="images/la.jpg" class="img-fluid pb-3"alt="">
      </div>
      <div class="col-lg-4 col-md-4 col-12">
        <img src="images/la.jpg" class="img-fluid pb-3"alt="">
      </div>
      <div class="col-lg-4 col-md-4 col-12">
        <img src="images/la.jpg" class="img-fluid pb-3"alt="">
      </div>
      <div class="col-lg-4 col-md-4 col-12">
        <img src="images/la.jpg" class="img-fluid pb-3"alt="">
      </div>
      <div class="col-lg-4 col-md-4 col-12">
        <img src="images/la.jpg" class="img-fluid pb-3"alt="">
      </div>
      <div class="col-lg-4 col-md-4 col-12">
        <img src="images/la.jpg" class="img-fluid pb-3"alt="">
      </div>
      <div class="col-lg-4 col-md-4 col-12">
        <img src="images/la.jpg" class="img-fluid pb-3"alt="">
      </div>
      <div class="col-lg-4 col-md-4 col-12">
        <img src="images/la.jpg" class="img-fluid pb-3"alt="">
      </div>
      <div class="col-lg-4 col-md-4 col-12">
        <img src="images/la.jpg" class="img-fluid pb-3"alt="">
      </div>
      <div class="col-lg-4 col-md-4 col-12">
        <img src="images/la.jpg" class="img-fluid pb-3"alt="">
      </div>
      <div class="col-lg-4 col-md-4 col-12">
        <img src="images/la.jpg" class="img-fluid pb-3"alt="">
      </div>
      <div class="col-lg-4 col-md-4 col-12">
        <img src="images/la.jpg" class="img-fluid pb-3"alt="">
      </div>
    </div> -->
<!-- </section> -->
<section class="my-5">
  <div class=py-5>
    <h2 class="text-center display-5" style="font-weight:bold;">
      Contact Us
    </h2>
  </div>
  <div class='w-50 m-auto'>
    <form action="userinfo.php" method=POST>
      <div class="form-group" >
        <label for="">Username</label>
        <input type="text" name="user" autocomplete="off" class="form-control" required>
      </div><br>
      <div class="form-group" >
        <label for="">Email-Id</label>
        <input type="text" name="email" autocomplete="off" class="form-control" required>
      </div><br>
      <div class="form-group" >
        <label for="">Mobile</label>
        <input type="text" name="mobile" autocomplete="off" class="form-control" required>
      </div><br>
      <div class="form-group" >
        <label for="">Comment</label>
        <textarea name="comments" id="" class="form-control" cols="4" rows="3" required></textarea>
      </div><br>
      <button type="submit" class="btn btn-primary">SUBMIT</button>
    </form>
  </div>
</section>
<footer>
  <p class='p-2 m-0 bg-primary text-white text-center'>Made With <i class="fas fa-heart" ></i> Team: @Mission: Possible</p>
</footer>
<script type="text/javascript" src="https://kit.fontawesome.com/a076d05399.js"></script>
</body>
</html>