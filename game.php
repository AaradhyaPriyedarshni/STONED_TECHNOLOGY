<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap 4 Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://fonts.googleapis.com/css2?family=Rock+Salt&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link rel="stylesheet" href="home.css">
<link href="https://fonts.googleapis.com/css2?family=Merienda&family=Rock+Salt&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.js" integrity="sha512-14GPUgKFTeCsgj5WWZpTNQ525GYlOK3DMTqrjsly3TDIDnOUbZ5sWyfI6HqsWUmMmaCoa6q7FHrbq9xdqNhmYg==" crossorigin="anonymous"></script>
</head>
<body>

<style>
  .container-fluid{
  width: 100%;
  height: 700px;
  background: url(game.jpg);
  background-size: cover;
  background-attachment: fixed;
  position: relative;
  overflow: hidden;
 
 

}
</style>







<div class="container-fluid top">

<div class="navigation">
    <ul >
      <li >
        <a href="home.php" class="text-white" >
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
        <a href="mobileapp.php"class="text-white">
          <span class="icon"><i class="fa fa-mobile" aria-hidden="true"></i></span>
          <span class="title">Mobile App</span>
        </a>
      </li>
      <li >
        <a href="game.php"class="text-white" style="background:  #ea1d63;">
          <span class="icon"><i class="fa fa-gamepad" aria-hidden="true"></i></span>
          <span class="title">Game Development</span>
        </a>
      </li>
      <li >
        <a href="index.php"class="text-white" >
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
  <div class="blue" >
    
    <h3 class="p-5 text-white ml-5" style="font-family: 'Rock Salt', cursive;">Stoned Technology</h3>
    <h1 class="text-white text-center py-3" style="position: absolute;top: 30%;left: 50%; transform: translateX(-50%);">Game Development Services</h1>
   
  </div>

</div>

<div class="container">
<h3 class="text-center py-5">We offer practical, profitable, and compatible apps.</h3>

<p class="text-center py-5" >Video games are exceedingly popular these days. To a lot of people’s surprise, they even outstrip the movies and music when it comes to revenue generated through sales. There is hardly anyone who would not love the vibrant games that let you become the hero for a while in your very own way. The good news is that many scientists and psychologists back video game playing as they say that they offer great benefits and also tend to make you intelligent and smarter. If you play video games intently, you are more likely to develop higher skills of observation and increase your level of thinking. In a way, video games are the best workout for your brain.</p>

</div>



</body>
</html>
