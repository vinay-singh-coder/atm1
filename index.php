<?php 
session_start();
if(isset($_SESSION['name'])){
  header("location:dashboard.php");
}

?>
<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="shortcut icon" href="../../favicon.ico" />
    <link rel="stylesheet" href="css/index.css" />

    <title>ATM machine</title>
  </head>

  <body>
    <section class="user">
      <div class="user_options-container">
        <div class="user_options-text">
          <div class="user_options-unregistered">
            <h2 class="user_unregistered-title">Don't have an account? IN</h2>
            <p class="user_unregistered-text">
              Isha Tech Bank ATM System<br>
              Lorem ipsum dolor sit amet consectetur adipisicing elit.
            </p>
            <button class="user_unregistered-signup" id="signup-button">
              Sign up
            </button>
          </div>

          <div class="user_options-registered">
            <h2 class="user_registered-title">Have an account?</h2>
            <p class="user_registered-text">
               Isha Tech Bank ATM System<br>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. 
            </p>
            <button class="user_registered-login" id="login-button">
              Login
            </button>
          </div>
        </div>

        <div class="user_options-forms" id="user_options-forms">
          <div class="user_forms-login">
            <h2 class="forms_title">Login</h2>
            <form class="forms_form" method="post">
              <fieldset class="forms_fieldset">
                <div class="forms_field">
                  <input type="text" name="uname" class="forms_field-input" required />
                  <label class="forms_field-label">user name</label>
                </div>
                <div class="forms_field">
                  <input type="password" name="pwd" class="forms_field-input" required />
                  <label class="forms_field-label">Password</label>
                </div>
              </fieldset>
              <div class="forms_buttons">
                <button type="button" class="forms_buttons-forgot">
                  Forgot password?
                </button>
                <input type="submit" value="Log In" name="signin" class="forms_buttons-action"/>
              </div>
            </form>
          </div>
          <div class="user_forms-signup">
            <h2 class="forms_title">Sign Up</h2>
            <form class="forms_form" method="post">
              <fieldset class="forms_fieldset">
                <div class="forms_field">
                  <input type="text" name="uname" class="forms_field-input" required />
                  <label class="forms_field-label"> Full Name </label>
                </div>
                <div class="forms_field">
                  <input type="text" name="email" class="forms_field-input" required />
                  <label class="forms_field-label">Email</label>
                </div>
                <div class="forms_field">
                  <input type="Number" name="phone_number" class="forms_field-input" required />
                  <label class="forms_field-label">Phone Number</label>
                </div>
                <div class="forms_field">
                  <input type="password" name="pwd" class="forms_field-input" required />
                  <label class="forms_field-label">Password</label>
                </div>
                
              </fieldset>
              <div class="forms_buttons">
                <input type="submit" value="Sign up" name="signup" class="forms_buttons-action"/>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>

    
   

    <!-- sign up backend-->
<?php
 include_once 'db.php';
 


if(isset($_POST['signup'])){

  $uname=$_POST['uname'];
  $email=$_POST['email'];
  $phone_number=$_POST['phone_number'];
  $pwd=$_POST['pwd'];
 
  $sql1="SELECT * FROM `user` WHERE name='".$uname."' AND password='".$pwd."'";
  $res1=mysqli_query($conn,$sql1);
  $dublicate_row=mysqli_num_rows($res1);

  // now of records
  $sql2="SELECT * FROM `user`";
  $res2=mysqli_query($conn,$sql2);
  $row=mysqli_num_rows($res2);
  echo $row;
  if($dublicate_row>=1){
    echo '<script type="text/javascript">alert ("username already exist")</script>';
  }

 

  else if($row<10){
  $sql="INSERT INTO `user`(`name`, `email`, `phone_number`, `password`,`avl_bal`) VALUES('".$uname."','".$email."','".$phone_number."','".$pwd."',30000)";

 
  $res=mysqli_query($conn,$sql);
  
  if(mysqli_affected_rows($conn)==1)
  {    
    echo '<script type="text/javascript">alert("**yaay!!! you have been registered sucessfully please SignIn**")</script>';
  }
  else{
    echo "error";
  }
}
 else {
    echo '<script type="text/javascript">alert ("members are full")</script>';

  }
}

?>

<!-- sign in backend-->

<?php
if(isset($_POST['signin']))
{
  $un=$_POST['uname'];
  $pwd=$_POST['pwd'];
  
  $sql="SELECT * FROM `user` WHERE name='".$un."' AND password='".$pwd."'";
  $res=mysqli_query($conn,$sql);
  $row=mysqli_num_rows($res);

  
  if($row==0)
  {
    echo '<script type="text/javascript">alert ("** username or password is invalid **")</script>';
  }
  else
  {
    
  $data=mysqli_fetch_assoc($res);
 
  $_SESSION['id']=$data['id'];
  $_SESSION['name']=$data['name'];
  $_SESSION['email']=$data['email'];
  $_SESSION['phone_number']=$data['phone_number'];
  $_SESSION['avl_bal']=$data['avl_bal'];


   header("location: dashboard.php");
   exit;
  }
}
?>

 <script>

      /**
       * Variables
       */
      const signupButton = document.getElementById('signup-button'),
        loginButton = document.getElementById('login-button'),
        userForms = document.getElementById('user_options-forms');

      /**
       * Add event listener to the "Sign Up" button
       */
      signupButton.addEventListener(
        'click',
        () => {
          userForms.classList.remove('bounceRight');
          userForms.classList.add('bounceLeft');
        },
        false,
      );

      /**
       * Add event listener to the "Login" button
       */
      loginButton.addEventListener(
        'click',
        () => {
          userForms.classList.remove('bounceLeft');
          userForms.classList.add('bounceRight');
        },
        false,
      );
    </script>
 
 </body>
</html>