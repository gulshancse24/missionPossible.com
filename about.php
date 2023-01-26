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
    font-family:  sans-serif;
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
          <a class="nav-link" aria-current="page" href="index.php">Home</a>
        </li>
        <!-- <li class="nav-item">
          <a class="nav-link" href="#">Services</a>
        </li> -->
        <li class="nav-item">
          <a class="nav-link active" href="about.php">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php">Contact</a>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="text" placeholder="Search">
        <button class="btn btn-primary" type="button">Search</button>
      </form>
    </div>
  </div>
</nav>
<?php /*include 'menu.php'*/?>
<div class="jumbotron py-2">
    <h1>
        Mission: Possible :)
    </h1>
    <p>This is Mission: Possible Team.........</p>
</div>

<section class="my-4">
  <div class=py-5>
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
          Mission: Possible
        </h2>
        <p class="py-2.5" style="line-height:35px;">This is Team of 4 (Four Full-Stack developer, All members of Mission:Possible Team are Good in Programing. Leader of Team is <b>Gulshan Kumar</b> and Co-Leader of Team is <b>Rashmi Pacheriya</b>, other two members are <b>Sanjay Kunal</b> and <b>Shreya Priyadarshi.</b> All members are the student of Government Polytechnic College of saharsa, From Computer Science and Engineering Branch.The project is given By The CEO of VIDYAYAN EDUVENTURE PVT. LTD. Mr. Suresh Kumar.</p>
      </div>
    </div>
  </div>
</section>
<footer>
  <p class='p-2 m-0 bg-primary text-white text-center'>Made With <i class="fas fa-heart" ></i> Team: @Mission: Possible</p>
</footer>
<script type="text/javascript" src="https://kit.fontawesome.com/a076d05399.js"></script>
</body>
</html>