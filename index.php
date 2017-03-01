<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
  <title>Complete Dining Solutions</title>

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
  <div class="slider">
    <ul class="slides z-depth-4">
      
      <li>
        <!-- <a href="#"> -->
        <img src="images/diningware11.jpg">
        <!-- </a> -->
        <div class="caption left-align">
          <h3 class="shadowText">Get the best range of Cutleries</h3>
          <h5 class="grey-text text-darken-4">Have an amazing experience</h5>
        </div>
      </li>
      <li>
        <!-- <a href="#"> -->
        <img src="images/diningware22.jpg">
        <!-- </a> -->
        <div class="caption right-align">
          <h3 class="shadowText">Best offers on Dinner Sets</h3>
          <h5 class="grey-text text-darken-4">Quality on which you can trust</h5>
        </div>
      </li>
      <li>
        <!-- <a href="#"> -->
        <img src="images/diningware33.jpg">
        <!-- </a> -->
        <div class="caption center-align">
          <h3 class="shadowText">A Wide Range of Cup, Mugs and Glasses</h3>
          <h5 class="grey-text text-darken-4">To serve your favorite brew</h5>
        </div>
      </li>
    </ul>
  </div>
  <div class="container1">
  	<div class="row">
  	      <table class="col s12 m2 highlight">
        <thead>
          <tr>
              <th data-field="Top categories">Top categories</th>
          </tr>
        </thead>

        <tbody>
          <tr>
            <td><a class="black-text" href="#!">Dinner Sets</a></td>
          </tr>
          <tr>
            <td><a class="black-text" href="#!">Cutlery Sets</a></td>
          </tr>
          <tr>
            <td><a class="black-text" href="#!">Drinking Sets</a></td>
          </tr>
          <tr>
            <td><a class="black-text" href="#!">Tea and coffee Sets</a></td>
          </tr>
          <tr>
            <td><a class="black-text" href="#!">Cookware</a></td>
          </tr>
          <tr>
            <td><a class="black-text" href="#!">Containers</a></td>
          </tr>
        </tbody>
      </table>
      <ul class="col s12 m6 center">
        <li><img src="images/middle1.jpeg"></li>
        <hr>
        <li >
        	<table>
        	<tr><td><img width="150px" src="images/1234.jpg"></td>
        	<td><a class="btn-large black white-text" href="categories.php"><b>SHOP NOW</b></a></td></tr>
        	</table>
    
        </li>
      </ul>
      

      <ul class="col s12 m4 center">
            <li><a href="#!"><img width="200px" height="170px" src="images/middle11.jpeg"></a></li>
            <hr>
            <li><a href="#!"><img width="200px" height="170px" src="images/middle12.jpeg"></a></li>
            <hr>
      </ul>
          

  </div>

  </div>

  <div id="index-banner" class="parallax-container">
    <div class="section no-pad-bot">
      <div class="container">
        <br><br>
        <h1 class="header center red-text text-accent-4">Complete Dining Solutions</h1>
        <div class="row center">
          <h5 class="header col s12 light shadowText">Get your favourite Dining wares with great offers and superb Quality</h5>
        </div>
        <div class="row center">
          <!--<a href="#" id="login-button" class="btn-large waves-effect waves-light deep-orange accent-4">login</a>-->
          <a class="btn-large waves-effect waves-light red darken-2 accent-4 btn modal-trigger" href="#modal1">Login</a>
        </div>
        <br><br>

      </div>
    </div>
    <!-- Modal Trigger --><!-- Modal Structure for login-->
    <div id="modal1" class="modal">
    <div class="modal-header">

      <a href="#!" class=" modal-action modal-close"><i class="material-icons right">close</i></a>
      <h1 class="center teal-text">Login</h1>
  </div>
    <div class="modal-content">
      <div class="row">
      
    <form class="col s12" method="POST" action="login.php <?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" name="form">
    <div class="row">
        <div class="input-field grey-text text-darken-4 col s12">
          <input placeholder="Email" id="email" type="email" class="validate" name="user_email" required>
        </div>
      </div>
      <div class="row">
        <div class="input-field grey-text text-darken-4 col s12">
          <input placeholder="Password" id="password" type="password" class="validate" name="password" required>
        </div>
      </div>
    
    
  </div>
    </div>
    <div class="modal-footer">
      
      <a href="#!" class=" shadowText modal-action modal-close waves-effect waves-deep-orange accent-4 btn-flat">Cancel</a>
      <a class=" shadowText modal-action modal-close waves-effect waves-deep-orange accent-4 btn-flat modal-trigger" href="#modal2">Register</a>
      <button class="shadowText waves-effect waves-deep-orange accent-4 btn-flat" type="submit">Login</button>
    </div>
    </form>
  </div>

  

    
    <!-- Modal for registration -->
    <div id="modal2" class="modal">
    
    <!-- form validation php -->
    
    
    <div class="modal-header">
      <a href="#!" class=" modal-action modal-close"><i class="material-icons right">close</i></a>
      <h1 class="center teal-text">Sign Up</h1>
  </div>
    <div class="modal-content">
      <div>
    <form class="col s12" method="POST" action="sendmail.php <?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" onsubmit="return validate_pass(this)" name="form">
  
  <div class="row">
    <!-- <label class="input-field grey-text text-darken-4 col s12" for="uname">Name: -->
      <input type="text" placeholder="Your Full Name" id="uname" class="validate" name="user_name" required>
      </label>
    </div>

    <div class="row">
      <!-- <label class="input-field grey-text text-darken-4 col s12" for="uemail">Email: -->
        <input type="email" placeholder="Your Email" id="uemail" class="form-control validate" name="user_email" required>
        </label>
      </div>

      <div class="row">
        <!-- <label class="input-field grey-text text-darken-4 col s12" for="pass1">Password: -->
        <input type="password" placeholder="Password" id="pass1" class="form-control validate" name="password" required>
        </label>
     </div>

     <div class="row">
       <!-- <label class="input-field grey-text text-darken-4 col s12" for="pass1">Confirm Password: -->
       <input type="password" placeholder="Confirm Password" id="pass2" class="form-control validate" name="confirm_password" required>
        </label>
       </div>

       
   


  </div>
    </div>
    <div class="modal-footer">
      <!-- <a href="#!" class=" modal-action modal-close waves-effect waves-deep-orange accent-4 btn-flat">Login</a> -->
      <a href="#!" class="shadowText modal-action modal-close waves-effect waves-deep-orange accent-4 btn-flat">Cancel</a>
      <button class="shadowText waves-effect waves-deep-orange accent-4 btn-flat" type="submit">Register</button>

      
    </div>
    </form>
  </div>    
  
    <div class="parallax"><img src="images/123.jpg" alt="Unsplashed background img 1"></div>
  </div>

  <?php
// include 'db.php';
// $msg='';
// if(!empty($_POST['email']) && isset($_POST['email']) &&  !empty($_POST['password']) &&  isset($_POST['password']) )
// {
// // username and password sent from form
// $email=mysqli_real_escape_string($connection,$_POST['email']);
// $password=mysqli_real_escape_string($connection,$_POST['password']);
// // regular expression for email check
// $regex = '/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,4})$/';

// if(preg_match($regex, $email))
// { 
// $password=md5($password); // encrypted password
// $activation=md5($email.time()); // encrypted email+timestamp
// $count=mysqli_query($connection,"SELECT uid FROM users WHERE email='$email'");
// // email check
// if(mysqli_num_rows($count) < 1)
// {
// mysqli_query($connection,"INSERT INTO users(email,password,activation) VALUES('$email','$password','$activation')");
// // sending email
// include 'smtp/Send_Mail.php';
// $to=$email;
// $subject="Email verification";
// $body='Hi, <br/> <br/> We need to make sure you are human. Please verify your email and get started using your Website account. <br/> <br/> <a href="'.$base_url.'activation/'.$activation.'">'.$base_url.'activation/'.$activation.'</a>';

// Send_Mail($to,$subject,$body);
// $msg= "Registration successful, please activate email."; 
// }
// else
// {
// $msg= 'The email is already taken, please try new.'; 
// }

// }
// else
// {
// $msg = 'The email you have entered is invalid, please try again.'; 
// }

// }
?>
<?php
$link = mysqli_connect('localhost', 'root', '','cds') or die('Could not connect: ' . mysqli_error());
//echo 'Connected successfully';
$selectSQL = mysqli_query($link,"select * from users");

$query=mysqli_query($link,"select * from users");
while ($row=mysqli_fetch_array($query)) {
  # code...
  //echo $row['email'];
}


if( !( $selectRes = mysqli_query($link,"select * from latest_product")) ){
    echo 'Retrieval of data from Database Failed - #'.mysql_errno().': '.mysql_error();
  }
 else{
    ?>
	<div class="container1 portfolio">
        <h5 class="shadowText">CDS Products</h5>
        <h6>LATEST PRODUCTS</h6>
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
        <li class="col s12 m3">
          <div class="product_img"><img class="materialboxed" src=<?php echo $row['image']; ?> /></div>
          <div class="product_text"><p><?php echo $row['prod_name']; ?></p></div>
          <div class="product_text"><p><?php echo $row['price']; ?></p></div>
          <div class="center"><a class="btn orange lighten-1 black-text" href="#!">Add to cart</a></div>
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
  <!-- <?php
//  $servername = "localhost";
 //$username = "root";
 //$password = "";
 //$dbname = "test";

// Create connection
//$con=mysqli_connect("localhost",$username,$password);
//@mysqli_select_db($dbname) or die( "Unable to select database");
// Check connection
//if ($conn->connect_error) {
    //die("Connection failed: " . $conn->connect_error);
//} 

//echo "djskljsl";

?>
<?php
// $username = "root";
// $password = "";
// $hostname = "localhost"; 

// //connection to the database
// $conn = mysqli_connect($hostname, $username, $password) 
//  or die("Unable to connect to MySQL");
// echo "Connected to MySQL<br>";

// //select a database to work with
// $selected = mysqli_select_db($conn,"test") 
//   or die("Could not select database");
//   $sql = "SELECT * FROM category";
// $result = $conn->query($sql);

// if ($result->num_rows > 0) {
//     // output data of each row
//     while($row = $result->fetch_assoc()) {
//         echo "id: " . $row["id"]. " - Name: " . $row["name"].  "<br>";
//     }
// } else {
//     echo "0 results";
// }
// $conn->close();

// //execute the SQL query and return records
// $result = mysqli_query("SELECT * FROM category");

// //fetch tha data from the database 
// while ($row = mysqli_fetch_array($result)) {
//    echo "ID:".$row{'id'}." Name:".$row{'name'}."Year: ". "<br>";
// }
// //close the connection
// mysql_close($dbhandle);
?>
 <?php
// $servername = "localhost";
// $username = "root";
// $password = "";
// $dbname = "test";

// // Create connection
// $conn = new mysqli($servername, $username, $password, $dbname);
// // Check connection
// if ($conn->connect_error) {
//     die("Connection failed: " . $conn->connect_error);
// } 

// $sql = "SELECT id, name FROM category";
// $result = $conn->query($sql);


// if ($result[0]->num_rows > 0) {
//     // output data of each row
//     while($row = $result->fetch_assoc()) {
//         echo "id: " . $row["id"]. " - Name: " . $row["name"].  "<br>";
//     }
// } else {
//     echo "0 results";
// }
// $conn->close();
?> 
 <?php
 // $con=mysqli_connect("localhost","root","");
 // mysqli_select_db("cds",$con);
 // $r=mysqli_query("select * from user_auth");
 // while($row=mysqli_fetch_array($r))
 // {
 //  echo "<br> $row[0] $row[1]";
 // }
 // mysqli_close($con);
 ?>    
    &nbsp<br>
    &nbsp<br>
    &nbsp<br>
    &nbsp<br>
    &nbsp<br>
    &nbsp<br>
    &nbsp<br>
    &nbsp<br>
    &nbsp<br>
    &nbsp<br>
    &nbsp<br>
    &nbsp<br>
    &nbsp<br>
    &nbsp<br>
    &nbsp<br><-->


                



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
     //jquery for password validation
     function validate_pass(thisform){
      with(thisform){
        if(password.value !=confirm_password.value){
          password.value="";
          confirm_password.value="";
          alert("Please enter identical passwords");
          password.focus();
          return false;

        }
      }
     }
   	 
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
  );</script>

  </body>
</html>
