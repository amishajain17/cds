<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
  <title>CDS Products</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style1.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  
</head>
<body>
<header>
  <nav class="red accent-4" role="navigation">
    <div class="nav-wrapper">
      <a id="logo-container" href="#" class="brand-logo"><img src="images/image1.png"></a>
      <ul class="right hide-on-med-and-down">
        <li><a class="shadowText white-text" href="index.php">Home</a></li>
        <li><a class="shadowText white-text modal-trigger" href="#modal1">Login</a></li>
        <li><a class="shadowText white-text modal-trigger" href="#modal2">Sign up</a></li>
        <li><a class="shadowText white-text" href="#">Help?</a></li>
      <ul class="right hide-on-med-and-down">
      <form>
        <div class="input-field">
          <input placeholder="Search Items"  id="search" type="search" required>
          <label for="search"><i class="material-icons">search</i></label>
          <i class="material-icons">close</i>
        </div>
       </form>
       </ul>
       </ul>


      <ul id="nav-mobile" class="side-nav">
        <li>
         
          <form>
          <div class="input-field">
          <input class="black-text" placeholder="Search Items"  id="search" type="search" required>
          <label for="search"><i class="material-icons black-text">search</i></label>
          <i class="material-icons">close</i>
          </div>
          </form>
       
        </li>
        <li><a  href="index.php">Home</a></li>
        <li><a class=" modal-trigger" href="#modal1">Login</a></li>
        <li><a class=" modal-trigger" href="#modal2">Sign up</a></li>
        <li><a href="#">Help?</a></li>
        
      </ul>
      <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
    </div>
  </nav>
 </header>
 <!-- Modal Trigger -->

  <!-- Modal Structure -->
  <div id="modal1" class="modal">
    <div class="modal-header">
      <a href="#!" class=" modal-action modal-close"><i class="material-icons right">close</i></a>
  </div>
    <div class="modal-content">
      <div class="row">
      <fieldset>
    <form class="col s12">
    <div class="row">
        <div class="input-field grey-text text-darken-4 col s12">
          <input placeholder="Email" id="email" type="email" class="validate" required>
        </div>
      </div>
      <div class="row">
        <div class="input-field grey-text text-darken-4 col s12">
          <input placeholder="Password" id="password" type="password" class="validate" required>
        </div>
      </div>
    </form>
    </fieldset>
  </div>
    </div>
    <div class="modal-footer">
      <a class=" shadowText modal-action modal-close waves-effect waves-deep-orange accent-4 btn-flat modal-trigger" href="#modal2">Register</a>
      <a href="#!" class=" shadowText modal-action modal-close waves-effect waves-deep-orange accent-4 btn-flat">Cancel</a>
      <a href="#!" class=" shadowText modal-action modal-close waves-effect waves-deep-orange accent-4 btn-flat">Login</a>
    </div>
  </div>
    

    <!-- Modal for registration -->
    <div id="modal2" class="modal">
    
    <!-- form validation php -->
    
    
  <div class="modal-header">
      <a href="#!" class=" modal-action modal-close"><i class="material-icons right">close</i></a>
  </div>
    <div class="modal-content">
      <div>
      <form class="col s12" method="POST" action="sendmail.php"  name="form">
      <fieldset>
        <div class="row">
        <!-- <label class="input-field grey-text text-darken-4 col s12" for="uname">Name: -->
        <input type="text" placeholder="Your Name" id="uname" name="user_name"></label>
        </div>

        <div class="row">
      <!-- <label class="input-field grey-text text-darken-4 col s12" for="uemail">Email: -->
        <input type="text" placeholder="Your Email" id="uemail" class="form-control" name="user_email">
        </label>
        </div>

        <div class="row">
        <!-- <label class="input-field grey-text text-darken-4 col s12" for="pass1">Password: -->
        <input type="password" placeholder="Password" id="pass1" class="form-control" name="password">
        </label>
        </div>

        <div class="row">
        <!-- <label class="input-field grey-text text-darken-4 col s12" for="pass1">Confirm Password: -->
        <input type="password" placeholder="Confirm Password" id="pass2" class="form-control" name="confirm_password">
        </label>
        </div>

       <!-- <div class="row">
       <div class="col-lg-10">
       <button class="btn btn-primary" type="submit" name="sub">Submit</button> 
       </div>
       </div> -->
      </fieldset>
   


    </div>
    </div>
    <div class="modal-footer">
      <!-- <a href="#!" class=" modal-action modal-close waves-effect waves-deep-orange accent-4 btn-flat">Login</a> -->
      <a href="#!" class="shadowText modal-action modal-close waves-effect waves-deep-orange accent-4 btn-flat">Cancel</a>
      <button class="shadowText waves-effect waves-deep-orange accent-4 btn-flat" type="submit">Register</button>

      
    </div>
    </form>
  </div>    
<!--page start-->


<?php
$link = mysqli_connect('localhost', 'root', '','cds') or die('Could not connect: ' . mysqli_error());
//echo 'Connected successfully';
$selectSQL = mysqli_query($link,"select * from users");

  $query=mysqli_query($link,"select * from users");
while ($row=mysqli_fetch_array($query)) {
  # code...
  //echo $row['email'];
}


if( !( $selectRes = mysqli_query($link,"select * from category")) ){
    echo 'Retrieval of data from Database Failed - #'.mysql_errno().': '.mysql_error();
  }
 else{
    ?>
  <div class="container1 portfolio">
        <h5 class="shadowText">CDS Products</h5>
        <h6>CHOOSE YOUR CATEGORY</h6>
        <hr>
        <!-- <div class="product1"> -->
        <div class="row">
        <ul class="col s12 m12">
          
          <?php
      if( mysqli_num_rows($selectRes )==0 ){
        echo 'No Rows Returned';
      }else{
        while( $row = mysqli_fetch_assoc($selectRes ) ){
          ?>
        <li class="col s12 m4">
          <div class="product_img"><a href=product.php?id=<?php echo $row['cat_id']?> ><img src=<?php echo $row['image']; ?> /></a></div>
          <div class="product_text center"><p><h5><strong><?php echo $row['cat_name'] ; ?></strong></h5></p></div>
        </li>
         <?php
        }
      }
         ?>   

          
        </ul>

    </div>
    </div>
    <?php
  
  }
//mysqli_close($link);

?>

                



<!-- footer -->
  <footer class="page-footer red accent-4 z-depth-1">
    <div class="container">
      <div class="row">
        <div class="col l6 s12">
          <h5 class="white-text shadow-text">Company Bio</h5>
          <p class="grey-text text-lighten-4">We are a team of college students working on this project to serve you a more focused online shopping to take your Dining Standards at a lavishing level. :)</p>


        </div>
        <div class="col l3 s12">
          <h5 class="white-text shadow-text">More Info</h5>
          <ul>
            <!-- <a class='dropdown-button btn' href='#' data-activates='dropdown1'>Drop Me!</a> -->

            <li><a class="white-text" href="aboutus.html">About us</a></li>
            <li><a class="dropdown-button white-text" href="#!" data-activates='dropdown1'>Contact us</a></li>
            <li><a class="white-text" href="#!">Suggest a Product</a></li>
            <li><a class="white-text" href="#!">Feedback</a></li>
          </ul>
        </div>
          <!-- Dropdown Structure -->
          <ul id='dropdown1' class='dropdown-content'>
            <li><a href="#!">Contact us via mail:cds202350@gmail.com</br>Contact us via call: +910000000000</a></li>
          </ul>

        <div class="col l3 s12">
          <h5 class="white-text shadow-text">Connect us</h5>
          <ul>
            <li><a class="white-text" href="#!">Amisha Jain</a></li>
            <li><a class="white-text" href="#!">Akshita Dubey</a></li>
            <li><a class="white-text" href="#!">Bandana Mahapatra</a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="footer-copyright">
      <div class="container">
      Made by <a class="grey-text darken-4" href="#!"><b>Bob The Builder</b></a>
      </div>
    </div>
  </footer>


  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>
  <script type="text/javascript">
  //slider initialization
       $(document).ready(function() {
       $('.slider').slider({
          full_width: true,
          interval: 5000,
          transition: 800
          });
       });
       //modal trigger
     $(document).ready(function(){
      // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
      $('.modal-trigger').leanModal({dismissible : false});
    });
     
     //jplugin initialization for dropdown of footer
    $('.dropdown-button').dropdown({
      inDuration: 300,
      outDuration: 225,
      constrain_width: true, // Does change width of dropdown to that of the activator
      hover: true, // Activate on hover
      gutter: 0, // Spacing from edge
      belowOrigin: true, // Displays dropdown below the button
      alignment: 'bottom' // Displays dropdown with edge aligned to the left of button
    }
    );
    </script>

  </body>
</html>
