<!doctype html>
<html lang="en">
  <head>
    <title>B5 website</title>
<!-- //////css end///////////// -->
<?php
include('style.php');
?>
<style>
  
html{
    scroll-behavior:smooth;
}

*{
    padding:0;
    margin:0;
    box-sizing:border-box;
}

body{
    overflow-x:hidden;
}
h1{
      font-family: 'Cedarville Cursive', cursive;
    font-family: 'Dancing Script', cursive;
}

.carousel-item img{
    width:100%;
    height:80vh;
}

.card-body img{
    min-width:40%;
    max-height:200px;
}
.card1{
    width: 18rem;
}
/* /////////////meadia quary start//////////////// */

@media(max-width:991px){
    .card1{
        width:13rem;
    }
    .out_team{
        margin-top:auto;
    }
    .card-3{
        font-size:16px;
        font-weight:bold;
    }
}

@media(max-width:767px)
{
    .about_img img{
        margin-top:30px;
    }
    .services_2ndcard{
        margin:20px;
    }
}
/* /////////////meadia quary end//////////////// */

  </style>
<!-- ////////////////font////////// -->

</head>
<body>

<!-- //////////////navbar start/////////////// -->
<header class="header_main" id="nav-up">
  <nav class="navbar navbar-expand-lg navbar-light bg-white mx-2 border-bottom fixed-top">
    <div class="container-fluid">
    <a class="navbar-brand fs-2" href="#">Techno-<span class="text-primary">web</span></a>
    <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navid"
    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>
       <div class="collapse navbar-collapse" id="navid">
          <ul class="navbar-nav  text-center ms-auto mb-2 mb-lg-0 fs-5">
            <li class="nav-item"> <a class="nav-link active" href="#">Home</a></li>
            <li class="nav-item"> <a class="nav-link" href="#my-about">About</a></li>
            <li class="nav-item"> <a class="nav-link" href="#my-service">Services</a></li>
            <li class="nav-item"> <a class="nav-link" href="#my-team">Our Team</a></li>
            <li class="nav-item"> <a class="nav-link" href="#my-contact">Contact</a></li>
          </ul>
       </div>
    </div>
  </nav>
</header>
<!-- //////////////navbar end/////////////// -->

<!-- //////////////////carousel start//////////////////// -->
<section class="carousel_section">
  <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/banner1.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-md-block">
        <h5>First slide label</h5>
        <p>Some representative placeholder content for the first slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="img/banner.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-md-block">
        <h5>Second slide label</h5>
        <p>Some representative placeholder content for the second slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="img/banner3.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-md-block">
        <h5>Third slide label</h5>
        <p>Some representative placeholder content for the third slide.</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
</section>

<!-- //////////////////carousel end//////////////////// -->

<!-- ////////////////////about start//////////////// -->
<section class="about my-5" id="my-about">
   <div class="container text-center">
     <h1 data-aos="fade-up"  data-aos-easing="ease-out-cubic"
     data-aos-duration="2000"><span class="text-primary">About me</span></h1>
     <hr class="w-25 m-auto" />
   </div>
   <div class="container my-5">
     <div class="row mx-auto" >
        <div class="col-lg-6 col-md-6 col-12" data-aos="zoom-in"  data-aos-easing="ease-out-cubic"
     data-aos-duration="2000">
           <h1>What do you <span class="text-primary">want to know?</span></h1>
           <p class="my-4">Use our poweful mobil-first flexbox grid to build layouts of all
            shapes and sizes thanks to a twelve column system, six defult responsive
            tiers, sass variables and mixins, and dozens of perdefined classes</p>
            <button class="btn btn-outline-primary mb-5"> More about me</button>

<!-- /////////////////accordion start//////////////// -->
            <div class="accordion" id="accordionExample" data-aos="fade-right"
     data-aos-offset="300"
     data-aos-easing="ease-in-sine">
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingOne">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
        My Hobbies
      </button>
    </h2>
    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <strong>This is the first item's accordion body.</strong> It is shown by default, 
        until the collapse plugin adds the appropriate classes that we use to style each element. 
        
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingTwo">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
        My Qualification
      </button>
    </h2>
    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <strong>This is the second item's accordion body.</strong> It is hidden by default, until the 
        collapse plugin adds the appropriate classes that we use to style each element. 
         </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingThree">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
        My Dreams
      </button>
    </h2>
    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <strong>This is the third item's accordion body.</strong> It is hidden by default, until the 
        collapse plugin adds the appropriate classes that we use to style each element. 
        </div>
    </div>
  </div>
</div>
<!-- /////////////////accordion end//////////////// -->

        </div>
         <div class="col-lg-6 col-md-6 col-12 m-auto  about_img text-end" data-aos="zoom-in-left" data-aos-easing="ease-out-cubic"
     data-aos-duration="2000">
            <img src="img/s4.jpg" class="img-fluid img-thumbnail">
         </div>
     </div>
   </div>
</section>

<!-- ////////////////////about end//////////////// -->

<!-- ///////////////////services start///////////////// -->
<section class="our_services bg-light py-5" id="my-service" data-aos="flip-left"
     data-aos-easing="ease-out-cubic"
     data-aos-duration="2000">
   <div class="container text-center">
     <h1>Our<span class="text-primary"> Services</span></h1>
     <hr class="w-25 m-auto" />
   </div>
   <div class="container my-5">
     <div class="row" data-aos="flip-down" data-aos-easing="ease-out-cubic"
     data-aos-duration="2000">
       <div class="col-lg-4 col-md-4 col-12">
          <div class="card">
            <div class="card-body">
            <i class="fab fa-dropbox bg-primary text-white rounded p-1 fa-2x mb-2"></i>
             <h5 class="card-title">Web Developement</h5>
                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                  <a href="#" class="btn btn-primary">Book now!</a>
             </div>
           </div>
       </div>
       <div class="col-lg-4 col-md-4 col-12 services_2ndcard">
         <div class="card">
           <div class="card-body bg-success text-white">
           <i class="fab fa-dropbox bg-primary text-white rounded p-1 fa-2x mb-2"></i>
             <h5 class="card-title">App Developement</h5>
                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                  <a href="#" class="btn btn-outline-warning">Book now!</a>
           </div>
         </div>
       </div>
       <div class="col-lg-4 col-md-4 col-12">
           <div class="card">
           <div class="card-body">
           <i class="fab fa-dropbox bg-primary text-white rounded p-1 fa-2x mb-2"></i>
             <h5 class="card-title card-3">Graphics Developement</h5>
                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                  <a href="#" class="btn btn-primary">Book now!</a>
           </div>
         </div>
       </div>
     </div>
     <!-- //////////row end////////// -->
     <div class="row my-5" data-aos="zoom-in-down" data-aos-easing="ease-out-cubic"
     data-aos-duration="2000">
       <div class="col-lg-4 col-md-4 col-12">
          <div class="card">
            <div class="card-body">
            <i class="fab fa-dropbox bg-primary text-white rounded p-1 mb-2 fa-2x"></i>
             <h5 class="card-title">Web Developement</h5>
                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                  <a href="#" class="btn btn-primary">Book now!</a>
             </div>
           </div>
       </div>
       <div class="col-lg-4 col-md-4 col-12 services_2ndcard">
         <div class="card">
           <div class="card-body bg-success text-white">
           <i class="fab fa-dropbox bg-primary text-white rounded p-1 fa-2x mb-2"></i>
             <h5 class="card-title">App Developement</h5>
                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                  <a href="#" class="btn btn-outline-warning">Book now!</a>
           </div>
         </div>
       </div>
       <div class="col-lg-4 col-md-4 col-12">
           <div class="card">
           <div class="card-body">
           <i class="fab fa-dropbox bg-primary text-white rounded p-1 fa-2x mb-2"></i>
             <h5 class="card-title card-3">Graphics Developement</h5>
                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                  <a href="#" class="btn btn-primary">Book now!</a>
           </div>
         </div>
       </div>
     </div>
   </div>

</section>
<!-- ///////////////////service end///////////////// -->

<!-- /////////////////////out team start//////////////////// -->
<section class="out_team  py-5" id="my-team">
  <div class="container text-center" >
     <h1 data-aos="fade-right"  data-aos-easing="ease-out-cubic"
     data-aos-duration="2000">Our<span class="text-primary"> Team</span></h1>
     <hr class="w-25 m-auto">
  </div>
  
  <div class="container my-5 ">
     <div class="row mx-auto">
        <div class="col-lg-4 col-md-4 col-sm-12 col-12" data-aos="fade-down-right"  data-aos-easing="ease-out-cubic"
     data-aos-duration="2000">
           
           <div class="card card1">
 
                <div class="card-body text-center">
                   <img src="img/s4.jpg" class="card-img-top img-fluid rounded-circle border border-primary p-2" alt="our team img">
                    <h5 class="card-title pt-4 ">Andrew</h5>
                    <p class="card-text">Front-end Developer</p>
                    <a href="#" class="btn btn-primary">Read More</a>
                </div>
            </div>

        </div>
        <div class="col-lg-4 col-md-4 col-sm-12 col-12 services_2ndcard" data-aos="fade-up"  data-aos-easing="ease-out-cubic"
     data-aos-duration="2000">
           
           <div class="card card1">
 
                <div class="card-body text-center">
                             <img src="img/s2.jpg" class="card-img-top img-fluid rounded-circle border border-primary p-2" alt="our team img">
                    <h5 class="card-title pt-4 ">Keren D'souza</h5>
                    <p class="card-text">Back-end Developer</p>
                    <a href="#" class="btn btn-primary">Read More</a>
                </div>
            </div>

        </div>
        <div class="col-lg-4 col-md-4 col-sm-12 col-12" data-aos="fade-down-left"  data-aos-easing="ease-out-cubic"
     data-aos-duration="2000">
           
           <div class="card card1">
 
                <div class="card-body text-center">
                             <img src="img/s3.jpg" class="card-img-top img-fluid rounded-circle border border-primary p-2" alt="our team img">
                    <h5 class="card-title pt-4">Kristina</h5>
                    <p class="card-text">Front-end Developer</p>
                    <a href="#" class="btn btn-primary">Read More</a>
                </div>
            </div>

        </div>
     </div>
  </div>
</section>
<!-- /////////////////////out team end//////////////////// -->

<!-- /////////////////contact start/////////////// -->
<section class="contact" id="my-contact">
  <div class="container text-center my-5">
     <h1  data-aos="fade-up" data-aos-easing="ease-out-cubic"
     data-aos-duration="2000">Feel free<span class="text-primary"> to Connect</span></h1>
     <hr class="w-25 m-auto">
  </div>
  <div class="container">
     <div class="row">
         <div class="col-lg-6 col-md-6 col-12" data-aos="fade-right"
     data-aos-offset="300"
     data-aos-easing="ease-in-sine">
             <form class="row g-3" action="" method="POST">
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">Email</label>
    <input type="email" name="email" class="form-control" id="inputEmail4">
  </div>
  <div class="col-md-6">
    <label for="inputPassword4" class="form-label">Password</label>
    <input type="password" name="pass"class="form-control" id="inputPassword4">
  </div>
  <div class="col-12">
    <label for="inputAddress" class="form-label">Address</label>
    <input type="text" name="address"class="form-control" id="inputAddress" placeholder="1234 Main St">
  </div>
  <div class="col-md-6">
    <label for="inputCity" class="form-label">City</label>
    <input type="text" name="city" class="form-control" id="inputCity">
  </div>
  <div class="col-md-4">
    <label for="inputState" class="form-label">State</label>
    <select id="inputState" name="state"class="form-select">
      <option selected>Choose...</option>
      <option>jharkhand</option>
      <option>mumbai</option>
      <option>delhi</option>
      <option>up</option>

    </select>
  </div>
  <div class="col-md-2">
    <label for="inputZip" class="form-label">Zip</label>
    <input type="text" name="zip" class="form-control" id="inputZip">
  </div>
  <div class="col-12">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        Check me out
      </label>
    </div>
  </div>
  <div class="col-12">
    <button type="submit" name="signin" class="btn btn-primary">Sign in</button>
  </div>
</form>
         </div>
         <div class="col-lg-6 col-md-6 col-12 m-auto text-end p-4" data-aos="flip-left"
     data-aos-easing="ease-out-cubic"
     data-aos-duration="2000">
             <img src="img/s6.jpg "class="img-fluid img-thumbnail p-2">
         </div>
     </div>
  </div>
</section>

<!-- /////////////////contact end/////////////// -->


<!-- ////////footer start//////// -->

<footer class="footer_section">
  <div class="container-fluid py-2 bg-dark text-center text-white">
     <p>&copy;copyright Rk technical</p>
  </div>
</footer>
<!-- ////////footer end//////// -->

<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

<script>
  AOS.init();
</script>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

</body>
</html>

<?php
include('connection.php');

if(isset($_POST['signin']))
{
  $email=$_POST['email'];
  $pass=$_POST['pass'];
  $address=$_POST['address'];
  $city=$_POST['city'];
  $state=$_POST['state'];
  $zip=$_POST['zip'];
   
  $insertdata="insert into feedback(email,password,address,city,state,zip)
  values('$email','$pass','$address','$city','$state','$zip')";
  $res=mysqli_query($con,$insertdata);

  if($res)
  {
    ?>
    <script>
      alert("submit feedback");
      </script>
  <?php
  }
  else{
    ?>
    <script>
      alert("conn't submit");
      </script>
      <?php
  }
}
?>
