<?php
$servername = "localhost";
$username = "root";
$password = "";
$database ="kalambaDb";

session_start();

// Create connection
$conn=mysqli_connect($servername, $username, $password,$database);

// Check connection

if (!$conn) {
  die("Connection failed: ".mysqli_connect_error());
}else{
 if(isset($_POST['submit'])){
  $name=$_POST['name'];
  $email=$_POST['email'];
  $phone=$_POST['phone'];
  $comment=$_POST['comment'];

//   $_SESSION["name"]=$name;  
    
  
    $sql="INSERT INTO user2 (fname,email,phone,comment) VALUES('$name','$email','$phone','$comment')";
  if(mysqli_query($conn,$sql)){
    echo "Yes Data inserted..";
  }else{
    echo "Error...: ";
  }
}
}
?>

<!DOCTYPE html>
<html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-compatible" content="IE-edge">
    <meta name="viewport" content="width=device;-width, initial-scale=1.0">

    <title>kalamba</title>
  
    <link rel="stylesheet" href="./kalamba.css">
    <link rel="stylesheet" href="./fontawesome-free-6.1.1-web/css/all.min.css">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" /> -->

</head>   

 <body>

   <div class="cousor-1"></div>
   <div class="cousor-2"></div>
     
   <div id="menu-bars" <i class="fa fa-bars" aria-hidden="true"></i></div>
    
   <header>
       
      <a href="#" class="logo"> <span>kalamba</span> yes</a>

         <div class="navb">
            <nav class="navbar">
               <a href="#home" <i class="fa fa-home" aria-hidden="true"></i></a>
               <a href="#About" <i class="fa fa-key" aria-hidden="true"></i></a>
               <a href="#service" <i class="fa fa-share-square" aria-hidden="true"></i></a>
               <a href="#contact" <i class="fa fa-phone-square" aria-hidden="true"></i></a>
               <a href="#portfolio"><i class="fa-solid fa-window-restore"></i></a>
               <a href="kalaretrive.php"><i class="fa fa-mobile" aria-hidden="true"></i></a>
            </nav>
         </div>

      <div class="follow">
         <ul>
            <li>
         <a href="https://twitter.com/mkushi49175242" class="twitter-follow-button" data-show-count="false">@mkushi</a>
         <a href="https://twitter.com/mkushi49175242" class="twitter-follow-button" data-show-count="false">@mkushi</a>
         <a href="https://twitter.com/mkushi49175242" class="twitter-follow-button" data-show-count="false">@mkushi</a>
         <a href="https://twitter.com/mkushi49175242" class="twitter-follow-button" data-show-count="false">@mkushi</a>
           <!-- <a href="#" <i class="fa fa-facebook" aria-hidden="true"></i>facebook</a>
           <a href="#" <i class="fa fa-twitter" aria-hidden="true"></i>twitter</a>
           <a href="#" <i class="fa fa-instagram" aria-hidden="true"></i>instagram</a>
           <a href="#" <i class="fa fa-linkedin" aria-hidden="true"></i>linkdin</a> -->
         </li>
         </ul>

      </div>

   </header>

   <section class="home" id="home">

      <div class="content">
         <span class="hi">hi ..... there</span>
         <h3>
            <?php 
            
            $a=$_SESSION["name"];
            $id=$_SESSION["id"];
  
            ?>
         </h3>
         <p class="info"> i am a developer</p>
         <p> This is a comment card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
         <a href="#About" class="btn">Abiut me</a>
      </div>

      <div class="image">

         <img src="./kalambapicha/picha7.jpg" alt="my view">

      </div>

      <!-- <div class="image1">

         <img src="kalambapicha/kelvin_pic (13).jpeg" aria-hidden="true" alt="my view">

      </div> -->


   </section>

<!-- about section start -->

<section class="About" id="About">

  <h1 class="heading">About <span> me</span></h1>
  <!-- <h4><span> <hr class="line">who i am <hr class="line"> </span></h4> -->
  <br>
  <div class="row-1">
     <div class="image">
       <img src="./kalambapicha/picha7.jpg" alt="my photo">
     </div>

     <div class="content">
        <h3> My name is kalamba </h3>
         <div class="par"> 
            <p>hhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhh</p>
         </div>
        <div class="box-container">
           <div class="box">
              <p> <span> Age: </span>22</p>
              <p> <span> Gender: </span>Male</p>
              <p> <span> Language: </span>Swahili, English</p>
              <p> <span> Work: </span>Student</p>
           </div>

           <div class="box">
            <p> <span> Agency: </span>workhard</p>
            <p> <span> Phone: </span>0712205849</p>
            <p> <span> Email: </span>kelvindeus1999@gmail.com</p>
            <p> <span> Status: </span>Student</p>
         </div>
        </div>

        <a href="#" class="btn">Download cv</a>
        <a href="#" class="btn">Hire Me</a>

     </div>

  </div>

  <h1 class="heading">My skills</h1>

  <div class="row-2">
     <div class="skills">
        <div class="progress">
           <h3>Web design <span> 90% </span></h3>
           <div class="bar"> <span> </span> </div>
        </div>
        <div class="progress">
         <h3>Web design <span> 90% </span></h3>
         <div class="bar"> <span> </span> </div>
      </div>
      <div class="progress">
         <h3>Web design <span> 90% </span></h3>
         <div class="bar"> <span> </span> </div>
      </div>
      <div class="progress">
         <h3>Web design <span> 90% </span></h3>
         <div class="bar"> <span> </span> </div>
      </div>
     </div>

     <div class="box-container">
        <div class="box">
           <h3>2+</h3>
           <p>Years of Exprience</p>
        </div>
        <div class="box">
         <h3>2500</h3>
         <p>Happy client</p>
      </div>
      <div class="box">
         <h3>
            <?php

            if (!isset($_SESSION["oursession"])) {
               $_SESSION["oursession"]=1;
               
               echo $_SESSION["oursession"]."\tviewer";
               
            } elseif($_SESSION["oursession"]=$_SESSION["oursession"]+1) {
               
               echo $_SESSION["oursession"]."+";
            }else {
               echo "nothing found!!";
            }
            ?>
         </h3>
         <p>
            viewers
         </p>
      </div>
      <div class="box">
         <h3>10</h3>
         <p>reward</p>
      </div>
     </div>

  </div>

</section>

<!-- service section start -->

<section class="service" id="service">

   <h1 class="heading">My <span>service</span></h1>

   <div class="box-container">
      <div class="box">
         <i class="fa fa-code" aria-hidden="true"></i>
         <h3>Web design</h3>
         <p> jkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkk</p>
        </div>

        <div class="box">
         <i class="fa fa-paint-brush" aria-hidden="true"></i>
         <h3>Graphic desgn</h3>
         <p> jkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkk</p>
        </div>

        <div class="box">
         <i class="fa fa-mobile" aria-hidden="true"></i>
         <h3>Responsive</h3>
         <p> jkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkk</p>
        </div>

        <div class="box">
         <i class="fa fa-bullhorn" aria-hidden="true"></i>
         <h3>Marketing</h3>
         <p> jkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkk</p>
        </div>

        <div class="box">
         <!-- <i class="fa-duotone fa-chart-pyramid"></i> -->
         <i class="fa fa-arrow-circle-down" aria-hidden="true"></i>
         <h3>marketig desgn</h3>
         <p> jkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkk</p>
        </div>

        <div class="box">
        <!-- <i class="fa-solid fa-diagram-venn"></i> -->
        <i class="fa fa-diamond" aria-hidden="true"></i>
         <h3>Graphic desgn</h3>
         <p> jkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkk</p>
        </div>



   </div>

</section>

<!-- Exprience section start -->

<section class="exprience" id="exprience">

   <h1 class="heading">My <span>Expriebnce</span></h1>
   
   <div class="box-container">

      <div class="box"> 
         <div class="content">
            <span>2011 - 2012</span>
            <h3>front End</h3>
            <p>ggggggggggggggggggggggggggggg</p>
         </div>
      </div>

      <div class="box"> 
         <div class="content">
            <span>2011 - 2012</span>
            <h3>front End</h3>
            <p>ggggggggggggggggggggggggggggg</p>
         </div>
      </div>

      <div class="box"> 
         <div class="content">
            <span>2011 - 2012</span>
            <h3>front End</h3>
            <p>ggggggggggggggggggggggggggggg</p>
         </div>
      </div>

      <div class="box"> 
         <div class="content">
            <span>2011 - 2012</span>
            <h3>front End</h3>
            <p>ggggggggggggggggggggggggggggg</p>
         </div>
      </div>

      <div class="box"> 
         <div class="content">
            <span>2011 - 2012</span>
            <h3>front End</h3>
            <p>ggggggggggggggggggggggggggggg</p>
         </div>
      </div>

      <div class="box"> 
         <div class="content">
            <span>2011 - 2012</span>
            <h3>front End</h3>
            <p>ggggggggggggggggggggggggggggg</p>
         </div>
      </div>
   </div>

</section>

<!-- portfolio start now  -->

<section class="portfolio" id="portfolio">

   <h1 class="heading"><span>My</span> portfolio</h1>

   <div class="box-container">
      <div class="box box1">
          <img src="./kalambapicha/kelvin_pic (2).jpeg" alt="">
          <h3>Project 01</h3>
           <div class="icon">
            <a href="#"  class="fa fa-link" aria-hidden="true"></a>
            <a href="#"  class="fa fa-share" aria-hidden="true"></a>
            <a href="#"  class="fa fa-search" aria-hidden="true"></a>
           </div>
      </div>

      <div class="box box2">
         <img src="./kalambapicha/kelvin_pic (13).jpeg" alt="">
         <h3>Project 02</h3>
          <div class="icon">
           <a href="#"  class="fa fa-link" aria-hidden="true"></a>
           <a href="#"  class="fa fa-share" aria-hidden="true"></a>
           <a href="#"  class="fa fa-search" aria-hidden="true"></a>
          </div>
     </div>

   <div class="box">
      <img src="./kalambapicha/kelvin_pic (3).jpeg" alt="">
      <h3>Project 03</h3>
       <div class="icon">
        <a href="#"  class="fa fa-link" aria-hidden="true"></a>
        <a href="#"  class="fa fa-share" aria-hidden="true"></a>
        <a href="#"  class="fa fa-search" aria-hidden="true"></a>
       </div>
  </div>

  <div class="box">
   <img src="./kalambapicha/picha.jpg" alt="">
   <h3>Project 04</h3>
    <div class="icon">
     <a href="#" class="fa fa-link" aria-hidden="true"></a>
     <a href="#" class="fa fa-share" aria-hidden="true"></a>
     <a href="#" class="fa fa-search" aria-hidden="true"></a>
    </div>
</div>
<div class="box">
   <img src="./kalambapicha/kelvin_pic (6).jpeg" alt="">
   <h3>Project 05</h3>
    <div class="icon">
     <a href="#" class="fa fa-link" aria-hidden="true"></a>
     <a href="#" class="fa fa-share" aria-hidden="true"></a>
     <a href="#" class="fa fa-search" aria-hidden="true"></a>
    </div>
</div>

<div class="box">
   <img src="./kalambapicha/shop.jpg" alt="">
   <h3>Project 06</h3>
    <div class="icon">
     <a href="#" class="fa fa-link" aria-hidden="true"></a>
     <a href="#" class="fa fa-share" aria-hidden="true"></a>
     <a href="#" class="fa fa-search" aria-hidden="true"></a>
    </div>
</div>
   </div>

</section>


<!-- contact section start  -->

<section class="contact" id="contact">

   <h1 class="heading">contact <span>me</span></h1>
    <div class="icon-container">
       <div class="icons">
         <i class="fa fa-envelope" aria-hidden="true"></i>
         <h3>My <span>Email</span></h3>
         <p>kelvindeus1999@gmail.com</p>
        </div>

        <div class="icons">
         <i class="fa fa-phone" aria-hidden="true"></i>
         <h3>My <span>Phone</span></h3>
         <p>+255 712205849</p>
         <p>+255 769552964</p>
        </div>

        <div class="icons">
         <i class="fa fa-address-book" aria-hidden="true"></i>
         <h3>My <span>Address</span></h3>
         <p>Universty of Dododma (UDOM) Tanzania</p>
        </div>

        <div class="icons">
         <i class="fa fa-map-marker" aria-hidden="true"></i>
         <h3>My <span>Location</span></h3>
         <p>Universty of Dododma (UDOM) Tanzania</p>
         <div class="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126933.91268067033!2d35.703109602523476!3d-6.172943023314996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x184de55feeaa7ec9%3A0x8040bf1262e19cee!2sDodoma!5e0!3m2!1sen!2stz!4v1649870631530!5m2!1sen!2stz"  style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
         </div>
        </div>

    </div>

    <div class="row">

       <form action="<?php $_SERVER['PHP-SELF'];?>" method="post" enctype="multipart/form-data">
<? echo $_SESSION["name"];?>
         <input type="text" placeholder="Name" name="name" class="box">
         <input type="email" placeholder="Email" name="email" class="box">
         <input type="number" placeholder="Number" name="phone" id="number" class="box">

         <textarea name="comment" id="" placeholder="Message" cols="30" rows="10"></textarea>
         
         <input type="submit" name="submit" class="btn" value="send Message">

      </form>
 
    </div>

</section>

<!-- footer section start  -->

<footer class="footer">created by <span>mkushi</span> || all right are reserved</footer>




<script src="./kalamba.js"></script>
<script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
<!-- <script src="fontawesome-free-5.15.3-web/js/all.js"></script> -->
<script src="./fontawesome-free-6.1.1-web/js/all.min.js"></script>

 </body>

</html>