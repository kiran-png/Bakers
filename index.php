<!DOCTYPE html>
<html>

<?php
     include('include/head.php');

?>
<body>
  <head>
  <title>Home Page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <style>
    /* Remove the navbar's default margin-bottom and rounded borders */ 
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
    
    /* Add a gray background color and some padding to the footer */
    footer {
      background-color: #f2f2f2;
      padding: 25px;
    }
    
  .carousel-inner img {
      width: 100%; /* Set width to 100% */
      margin: auto;
      min-height:200px;
  }

  /* Hide the carousel text when the screen is less than 600 pixels wide */
  @media (max-width: 600px) {
    .carousel-caption {
      display: none;
    }
  }
  </style>
</head>
<body>
<section id="nav-bar">
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Bakers</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#top">Home</a></li>
        <li><a href="#about">About</a></li>
        <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Cakes
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="user_side/pastries_list.php">PASTRIES CAKE</a></li>
          <li><a href="user_side/cupcake_list.php">MUFFINS</a></li>
          <li><a href="user_side/specialcake_list.php">COOKIES</a></li>
        </ul>
      </li>
        <li><a href="#contact">Contact</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        
         

        
          
         <li> <?php
session_start();
if(isset($_SESSION['user_email']))
{

echo '<a class="nav-link" href="">Welcome :'.$_SESSION['user_email'].'</a>';
echo '<li><a class="nav-link" href="logout.php">Logout</a></li>';
echo '<li><a class="glyphicon glyphicon-shopping-cart" href="user_side/viewcart.php"></a></li>';

}
else
{
  echo '<li><a class="glyphicon glyphicon-user" href="Admin/admin_login.php">&nbspAdmin</a></li>';
  echo '<li><a class="glyphicon glyphicon-log-in" href="cousm_login.php">&nbspLogin</a></li>';
  
}
?></li>
<!-- cart icon-->




        </li>
      </ul>
    </div>
  </div>
</nav>
</section>
<marquee><center><b><p><h1>Welcome To Bakers</h1></p></b></center></marquee>


<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="images/banner.jpg" alt="Image">
        <div class="carousel-caption">
                 </div>
      </div>

      <div class="item">
        <img src="images/banner2.jpg" alt="Image">
        <div class="carousel-caption">
          
        </div>
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
</div>
   <!--------------ABOUT US----------------------->
  <section id="about">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <u><h2>ABOUT US</h2><br><h5><b>Bakers</b></h5></u>
           <div class="about-content">
            <p>We are not just a bakery, we are not just bakers. In fact, we are just like you, a bunch of food lovers fascinated with sweet indulgence, who dreamt of creating an appetizing fairy land of divine delicacies that relishes the utmost desires.</p>
          </div>
          
        </div>

        <div class="col-md-6">
          <img src="images/baking.jpeg">
        </div>
        
      </div>
      
    </div>
    
  </section>
<section id="services">
    <div class="container">
      <U><h1>CATEGORY<br><h5></h5></h1></U>
      <div class="row services">
       <div class="col-sm-4">
      <a href="user_side/pastries_list.php"><img src="images/cake2.jpg" class="img-responsive" style="width:100%" alt="Image"></a>
      <p><B>PASTRIES CAKE</B></p><br>
      <p>Bakers we make good quality of pastries with rich ingredients we have both egg and eggless pastries with different flavor's with nicely baked. 

 </p>
    </div>
    <div class="col-sm-4">
      <a  href="user_side/cupcake_list.php"><img  src="images/muffin2.jpg" class="img-responsive" style="width:100%" alt="Image"></a>
      <p><b>MUFFINS</b></p><br>
      <p>Bakers we make good muffins we have various types of muffins which are nicely baked with rich ingredients.

 </p>
    </div>
    <div class="col-sm-4">
      <a  href="user_side/specialcake_list.php"><img  src="images/cookie4.jpg" class="img-responsive" style="width:100%" alt="Image"></a>
      <p><b>COOKIES</b></p><br>
      <p>Bakers have nicely baked cookies with different toppings and we have more numbers of flavor's  in cookies.</p>
    </div>
  </div>
</div>
<!--button type="button" class="btn btn-primary">Read More>></button-->
</section>
<!----------------------promo------------------------>
<section id="promo">
<div class="container">
  <div class="text">
  <b style="color: white"><p></p>
  <p><h4></h4></p>
  </div></b>
</div>   
</section>

<section id="testimonials">
  <div class="container">
    <h1>Testimonials</h1>
    <p class="text-center"></p>
    <div class="row">
      <div class="col-md-4 text-center">
        <div class="profile">
          <img src="images/user1.jpeg" class="user">
          <blockquote>Simple, unpretentious, affordable, excellent. What more can I say. Everything is fresh with taht homemade taste and quality. Their glazed donuts are the best!</blockquote>
          <h3>Pooja B  <span>Co-Founder</span></h3>
        </div>
      </div>
      <div class="col-md-4 text-center">
        <div class="profile">
          <img src="images/user2.jpeg" class="user">
          <blockquote>Simple, unpretentious, affordable, excellent. What more can I say. Everything is fresh with taht homemade taste and quality. Their glazed donuts are the best!</blockquote>
          <h3>PP  <span>Co-Founder</span></h3>
        </div>
      </div>
      <div class="col-md-4 text-center">
        <div class="profile">
          <img src="images/user3.jpeg" class="user">
          <blockquote>Simple, unpretentious, affordable, excellent. What more can I say. Everything is fresh with taht homemade taste and quality. Their glazed donuts are the best!</blockquote>
          <h3>SPYDER  <span>Co-Founder</span></h3>
        </div>
      </div>
    </div>
  </div>
</section>
<!------------------contact us-------------->
<section id="contact">
  <div class="container">
    <h1>Get In Touch</h1>
    <div class="row">
      <div class="col-md-6">
        <form class="contact-form">
          <div class="form-group">
            <input type="text" name="" class="form-control" placeholder="Your Name">
          </div>
          <div class="form-group">
            <input type="number" name="" class="form-control" placeholder="Phone no.">
          </div>
          <div class="form-group">
            <input type="email" name="" class="form-control" placeholder="Email id">
          </div>
          <div class="form-group">
            <textarea  class="form-control" rows="4" placeholder="Message....."></textarea>
          </div>
          <button type="submit" class="btn btn-primary">SEND MESSAGE</button>
        </form>
      </div>
      <div class="col-md-6 contact-info">
        <div class="follow"><b>Address:</b><i class="fa fa-map-marker"></i>XYZ Road,Bangalore,IN</div>

        <div class="follow"><b>Phone:</b><i class="fa fa-phone"></i>+91 257454</div>

        <div class="follow"><b>Email:</b><i class="fa fa-envelope-o"></i>email@gmail.com</div>
        
        <div class="follow"><label><b>Get Social:</b></label>
        <a href=""><i class="fa fa-facebook"></i></a>
         <a href=""><i class="fa fa-youtube-play"></i></a>
          <a href=""><i class="fa fa-twitter"></i></a>
           <a href=""><i class="fa fa-google-plus"></i></a>
        </div>

      </div>
    </div>
  </div>
</section>
<!------------------footer------------------------>
<section id="footer">
  <div class="container text-center">
    <p>Happy<i class="fa fa-heart-o"></i>shopping</p>
    
  </div>
</section>
<!-------------footer ends------------->
<script src="js/smooth-scroll.js"></script>
<script>
  var scroll = new SmoothScroll('a[href*="#"]');
</script>
</body>
</html>


<style type="text/css">
   h1 {
    text-align: -webkit-center;
    font-family: fantasy;
    color: darkred;
}

body {
    background-color:;
}


.container
{
  text-align: center;
}
p
{
  padding-top: 20px;
}
u
{
  color:black;
}
#promo
{
  background-image:url(images/cupbk.jpg);
  background-size: cover;
  background-position: center;
  color: white;
  text-align: center;
  padding: 100px;
  font-family: sans-serif;
  font-size: 38px;
}
.text
{
  font-size: 1.5em;
  line-height: 1.25em;
  color: black;
}
a.btn.btn-primary {
    background-color: black;
    border-color: black;
}
#testimonials
{
  padding-top: 50px;
  padding-bottom: 50px;
}
#testimonials  .row
{
  margin-top: 30px;
}
.col-md-4
{
  margin: 40px auto;
}
.profile
{
  padding: 70px 10px 10px;
  background-color: #efefef;
}
.user
{
  width: 120px;
  height: 120px;
  border-radius: 50%
}
.profile img
{
  top: -60px;
  position: absolute;
  left: calc(50% - 60px);
  border:10px solid #fff;

}
.profile h3
{
  font-size: 20px;
  margin-top: 15px;
  color: #007bff;
}
#testimonials span
{
  font-size: 12px;
  color: #333;
}
blockquote
{
  font-size: 16px;
  line-height: 30px;
}

blockquote::before
{
  
  font-size: 50px;
  content: #007bff;
  position: relative;
  line-height: 20px;
  bottom: -15px;
  right: 5px; 

}
blockquote::after
{
  
  font-size: 50px;
  content: #007bff;
  position: relative;
  line-height: 10px;
  bottom: -15px;
  right: 5px;

}
.profile:hover
{
  box-shadow: 0 0 15px 5px rgba(0,0,0,0.2);
  cursor: pointer;
  transition: 0.5s;
}
/*------------------contact us-------------*/
#contact
{
  background-color: #efefef;
  padding-top: 40px;
  padding-bottom: 40px;
  color: #777;
}
.contact-form
{
  padding: 15px;
}
.form-control
{
  border-radius: 0 !important;                                                                  
  border:none !important;
}
.follow
{
  background-color: #fff;
  padding: 10px;
  margin: 15px;
}
.contact-info .fa
{
  margin: 10px;
  color: #007bff;
  font-weight: bold;
}
/*-----------------footer----------------*/
#footer
{
  background-color: #333;
  color: #fff;
  padding: 12px;
}
.fa-heart-o
{
  margin: 3px;
  color: red;
}
/*--------------About Us---------------*/
#about
{
  padding-top: 50px;
  padding-bottom: 50px;
  color: #555;
}
#about .btn
{
  margin-top: 20px;
  margin-bottom: 30px;
}
.about-content
{
  padding-top: 20px;
}
.skills-bar p
{
  margin-bottom: 6px;
  font-weight: 600;
}
.progress-bar
{
  border-radius: 16px;
}
.progress
{
  border-radius: 16px !important;
  margin-bottom: 20px;
}
#nav-bar{
  position: sticky;
  top: 0;
  z-index: 10;
}
</style>