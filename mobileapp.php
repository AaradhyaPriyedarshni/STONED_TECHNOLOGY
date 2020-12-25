<!DOCTYPE html>
<html lang="en">
<head>
  <title>Stoned Technology</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link rel="stylesheet" href="home.css">
  <link href="https://fonts.googleapis.com/css2?family=Rock+Salt&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Merienda&family=Rock+Salt&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.js" integrity="sha512-14GPUgKFTeCsgj5WWZpTNQ525GYlOK3DMTqrjsly3TDIDnOUbZ5sWyfI6HqsWUmMmaCoa6q7FHrbq9xdqNhmYg==" crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<style>
  .container-fluid{
  width: 100%;
  height: 700px;
  background: url(tech.jpg);
  background-size: cover;
  background-attachment: fixed;
  position: relative;
  overflow: hidden;
 
 

}
</style>

<body>

<div class="container-fluid">
    <div class="navigation">
        <ul >
          <li >
            <a href="home.php" class="text-white">
              <span class="icon"><i class="fa fa-home" aria-hidden="true"></i></span>
              <span class="title"> Home</span>
            </a>
          </li>
          
          
          <li >
            <a href="webapp.php" class="text-white">
              <span class="icon"><i class="fa fa-laptop" aria-hidden="true"></i></span>
              <span class="title">Web Development</span>
            </a>
          </li>
          <li >
            <a href="#"class="text-white" style="background:  #ea1d63;">
              <span class="icon"><i class="fa fa-mobile" aria-hidden="true"></i></span>
              <span class="title">Mobile App</span>
            </a>
          </li>
          <li >
            <a href="game.php"class="text-white">
              <span class="icon"><i class="fa fa-gamepad" aria-hidden="true"></i></span>
              <span class="title">Game Development</span>
            </a>
          </li>
          <li >
        <a href="index.php"class="text-white">
          <span class="icon"><i class="fas fa-user"></i></span>
          <span class="title">CONTACT US</span>
        </a>
      </li>
        </ul>
    
      </div>
      <div class="toggle" onclick="toggleMenu()">
        
      </div>
      <script type="text/javascript">
        function toggleMenu(){
          let navigation = document.querySelector('.navigation');
          let toggle = document.querySelector('.toggle');
          navigation.classList.toggle('active');
         toggle.classList.toggle('active');
    
        }
      </script>
      <div class="blue">
        <h3 class="p-5 text-white ml-5" style="font-family: 'Rock Salt', cursive;">Stone Technology</h3>
          <h1 class="text-white text-center py-3" style="position: absolute;top: 30%;left: 50%; transform: translateX(-50%);">Mobile App Development Services</h1>
          <h3 class="text-white text-center px-5 pt-1" style="position: absolute;top: 40%;left: 50%; transform: translateX(-50%);">We offer exactly the applications that you need.</h3>
      </div>
</div>

<div class="container">
    <h3 class="text-center py-5" style="color: #190B07;">What Mobile App Development Services Do We Offer?</h3>
    <div class="row">
      <div class="col-sm-12">
        <a href="android.php">

          <div class="flipcard">
              <div class="inner">
                  <div class="front" style="background:  #190B07;">
                        <img src="icon-android.svg" alt="hhhhh">
                        <h3 class="my-5 text-white">Android App </h3> 
                  </div>
                  <div class="back">
                       <h3 class="my-5">Android App </h3> 
                       <p class="text-center p-3" style="color: #190B07;">Android devices are more affordable and accessible than their Apple counterparts due to a wide range of prices that Android manufacturers offer. Therefore, your app can reach any audience you want.</p>  
                  </div>
  
              </div>
  
          </div>
  

      </a>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-12">
        <a href="ios.php">
          <div class="flipcard" style="">
              <div class="inner" style="border-top-left-radius: 50px;">
                  <div class="front" style="background:  #190B07; ">
                      <img src="icon-apple (1).svg" alt="hhhhh">
                      <h3 class="my-5 text-white">iOS App</h3> 
                  </div>
                  <div class="back" >
                       <h3 class="my-5">iOS App</h3> 
                       <p class="text-center" style="color: #190B07;">Apple is an undoubted leader in the technology field, and iPhones must be the most common smartphones used worldwide.</p>  
                  </div>
  
              </div>
  
          </div>

      </a>
      </div>
    </div>
    

    
</div>
        

        
</div>


<div class="container mt-5" style="position: relative;top: 50px;">

    <h3 class="text-center py-5" style="color: #190B07;">Why Should You Go Mobile?</h3>

    <div class="flex d-flex">

        <img src="everywhere.svg" alt="" class="px-3" style="width: 100px; height: 100px;">
        
        <p style="color: #190B07;">Laptops and desktops are used mainly for education or work, while for all the other purposes, from shopping to socializing, people prefer using smartphones. As smartphones grow even “smarter”, sorry for the paradox, they seem to have the potential to completely squeeze computers out of everyday use.</p>

    </div>
 

    <div class="flex d-flex">

        <img src="dislike.svg" alt="" class="px-3" style="width: 100px; height: 100px;">
        
        <p style="color: #190B07;">The absolute majority of applications if AppStore or Google Play are installed, opened once, and deleted because they are regular, there is nothing interesting about them, or, what is worse, they do not function as supposed to.</p>

    </div>

    <div class="flex d-flex">

        <img src="like.svg" alt="" class="px-3" style="width: 100px; height: 100px;">
        
        <p style="color: #190B07;">Your app will leave the rows of install-open-and-delete applications if you trust your idea to a reliable partner. A company providing high-quality custom mobile application development services can help you to enter this market and to firmly establish yourself in it.</p>

    </div>

    



</div>

<div class="mt-5 " style="position: relative;top: 100px;">
    <div class="wave mt-5" style=" background:#190B07;  ; height: 92vh; width: 100%; ">
        <h1 class="text-center text-white py-5 px-4" style="font-family: 'Merienda', cursive;">Can’t find your industry?</h1>
        <p class="text-center text-white py-2 px-4" style="font-family: 'Merienda', cursive;">We’ve worked in other markets too. Tell us about your project ideas and we’ll get back to you with guidance on how to get the ball rolling.</p>
        <p class="text-center text-white px-4" style="font-size: 20px;font-weight: bold;font-family: 'Merienda', cursive;">Working together to innovate your industry, Scopic’s all-in-one solution helps growing companies <br> like yours to overcome their biggest challenges and drive real change.</p>
        <a href="index.php">
          <button class="btn btn-lg btn-outline-light mt-5 long " type="button" data-toggle="modal" data-target="#myModal" style="position :absolute; left: 50%; transform: translateX(-50%); width: 300px; border-radius: 50px; ">Connect with us!</button>
        </a>
        <img src="wave.png" style="width: 100%; position: relative;top: 200px;" alt="">
        <div style="background-color: white; width: 100%; height: 200px;position: relative;top: 250px;" class="">
    
          <ul class="py-5 text-center">
            <li class="pb-5" style="font-weight: bolder;color: #190B07;">COMPANY INFO</li>
            <li ><a href="#about" style="text-decoration: #190B07; color: #190B07;">About Us</a></li>
            <li ><a href="#services" style="text-decoration: #190B07; color: #190B07;">Services</a></li>
            <li ><a href="" style="text-decoration: #190B07; color: #190B07;">Portfolio</a></li>
            <li ><a href="" style="text-decoration: #190B07; color: #190B07;">Resources</a></li>
            
          </ul>
    
        </div>
          
    </section>
    
    <div class="icon-bar " style="position: fixed;top: 50%;z-index: 10; right: 0%; background-color:white; ">

        <ul style="list-style: none;">
            <li>
                <a href="https://www.facebook.com/Stoned-Technologies-103055898354650">
                    <i class="fab fa-facebook-square pl-2" style="font-size: 50px; color:#190B07"></i>
                  </a>
            </li>
            <li>
                <a href="https://www.instagram.com/stoned_technologies/" style="text-decoration: none; ">
                    <i class="fab fa-instagram-square pl-2" style="font-size: 50px;color:#190B07;"></i>
                  </a>
            </li>
            <li>
                <a href="https://twitter.com/StonedTechnolo1">
                    <i class="fab fa-twitter-square pl-2" style="font-size: 50px; color:#190B07;"></i>
                  </a>
            </li>
            <li>
              <a href="https://www.linkedin.com/in/stoned-technologies-373b74201/"  >
                <i class="fab fa-linkedin pl-2" style="font-size: 50px; color:#190B07;"></i>
                </a>
          </li>
        </ul>
      
    
      
    
      

      
    
    </div>
    
</div>


</body>
</html>
