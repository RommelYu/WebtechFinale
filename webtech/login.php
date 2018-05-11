
<?php 
session_start();
?>

<?php
//start use session
 $user="root";
$password="";
$database="webtek";
$host="localhost";
$table="accounts";
session_start();
$conn = mysqli_connect($host, $user, $password) or die("Connection Failed");
mysqli_select_db($conn, $database) or die("Connection Failed");

if(isset($_POST['submit'])){
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$password = $_POST['pass'];
$confirm = $_POST['confirm'];

if ($_POST["pass"] == $_POST["confirm"]) {

  $query = "INSERT INTO users (`firstname`, `lastname`, `email`,  `password`) VALUES('$firstname', '$lastname', '$email', '$password')";

  $sql = mysqli_query($conn,$query);

  if($sql){
  echo '';
}
  else{
  echo "";}
}
}else{
?>


<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Sign-Up/Login Form</title>
  <link href='https://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

      <link rel="stylesheet" href="bootstrap/css/login.css">

  
</head>

<body>
  <script>
function checkPasswordMatch() {
    var password = $("#passwordid").val();
    var confirmPassword = $("#passwordid2").val();

    if (password != confirmPassword)
        $("#divCheckPasswordMatch").html("Passwords do not match!");
    else
        $("#divCheckPasswordMatch").html("Passwords match.");
}
</script>
  <div class="form">
      
      <ul class="tab-group">
        <li class="tab active"><a href="#signup">Sign Up</a></li>
        <li class="tab"><a href="#login">Log In</a></li>
      </ul>
      
      <div class="tab-content">
        <div id="signup">   
          <h1>Sign Up Here</h1>
          
          <form action="register" method="post">
          
          <div class="top-row">
            <div class="field-wrap">
              First Name
              <input type="text" name="firstname" id="firstname" required autocomplete="on" required/>
            </div>
        
            <div class="field-wrap">
              Last Name
              <input type="text" name="lastname" id="lastname" required autocomplete="on" required/>
            </div>
          </div>

          <div class="field-wrap">
             User Name
            <input type="text" name="username" id="username" required autocomplete="on" required/>
          </div>

          <div class="field-wrap">
              Password
            <input type="password" name="pass" id="passwordid" required autocomplete="on" required/>
          </div>

            <div class="field-wrap">
              Re-Type Password
            <input type="password" name="confirm" id="passwordid2" onChange="checkPasswordMatch();" required autocomplete="on" required/>
          </div>
          <div class="registrationFormAlert" id="divCheckPasswordMatch"></div>
                             

          <button type="submit" class="button button-block">Register</button>
          
          </form>
            <script>
function check(str) {
if (str.length == 0) { 
document.getElementById("demo").innerHTML = "";
return;
} else {
var xmlhttp = new XMLHttpRequest();
xmlhttp.onreadystatechange = function() {
if (this.readyState == 4 && this.status == 200) {
document.getElementById("demo").innerHTML = this.responseText;
}
};
xmlhttp.open("GET", "test.php?id=" + str, true);
xmlhttp.send();
}
}
</script>


        </div>
        
        <?php
    

        if(isset($_POST['submit'])){

            $username = $_POST['username'];
            $password = $_POST['password'];

            $query = "SELECT username, password FROM accounts WHERE username = '$username' and password = '$password'";

            $result = mysqli_query($conn,$query) or die (mysql_error());
            $rows = mysqli_num_rows($result);

            if($rows == 1){

                $_SESSION['username'] = $username;
                $_SESSION['password'] = $password;

                header("Location: index.php");

    
            } else{

                    echo "<div class = 'contentfs'>

                            <div> 

                                <i class = 'fa fa-times-circle-o fa-5x fail'></i>

                            </div>

                            Your username and password is incorrect.</h3><br/>Click here to <a href = 'login.php' class = 'fail'>Login</a> again

                            </div>";

                }

        }else{

    ?>
        <div id="login">   
          
          <form action="login" method="post" >
          
            <div class="field-wrap">
              Username
            <input type="text" name="username" id="username" required autocomplete="off" required/>
          </div>
          
          <div class="field-wrap">
              Password
            <input type="password" name="password" id="password" required autocomplete="off" required/>
          </div>
          
        
          
          <button type="submit" class="button button-block">Log In</button>
          
          </form>

        </div>
        
      </div><!-- tab-content -->
      
</div> <!-- /form -->
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script src="bootstrap/js/index.js"></script>


</body>
</html>
