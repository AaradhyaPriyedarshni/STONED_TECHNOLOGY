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
        <a href="game.php"class="text-white">
          <span class="icon"><i class="fa fa-gamepad" aria-hidden="true"></i></span>
          <span class="title">Game Development</span>
        </a>
      </li>
      <li >
        <a href="index.php"class="text-white" style="background:  #ea1d63;">
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
   
    <div class="container" style="position:relative; top = 400px; ">

<div class="row "  >
            <div class="col-lg-6 m-auto">
                <div class="card mt-5" style=" background:rgba(7, 4, 0, 0.7) ; ">
                    <div class="card-title" >
                        <h2 class="text-center text-white pt-2"> Contact Us </h2>
                        <hr>
                        <?php 
                            $Msg = "";
                            if(isset($_GET['error']))
                            {
                                $Msg = " Please Fill in the Blanks ";
                                echo '<div class="alert alert-danger">'.$Msg.'</div>';
                            }

                            if(isset($_GET['success']))
                            {
                                $Msg = " Your Message Has Been Sent ";
                                echo '<div class="alert alert-success">'.$Msg.'</div>';
                            }
                        
                        ?>
                    </div>
                    <div class="card-body">
                        <form action="process.php" method="post">
                            <input type="text" name="UName" placeholder="User Name" class="form-control mb-2">
                            <input type="email" name="Email" placeholder="Email" class="form-control mb-2">
                            <input type="text" name="Subject" placeholder="Subject" class="form-control mb-2">
                            <textarea name="msg" class="form-control mb-2" placeholder="Write The Message"></textarea>
                            <button class="btn btn-success" name="btn-send"> Send </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>



</div>



 
     
     
  </div>
  
 
        
</div>

</div>



</body>
</html>
