<?php 
    // Include the header template for the website
    include_once 'templates/header.php';
    // Include the config file for the website
    @include 'templates/config.php';

    // Check if the form is submitted
    if(isset($_POST['submit'])) {
    
       // Escape and store the submitted name, email, and password
       $name = mysqli_real_escape_string($conn, $_POST['name']);
       $email = mysqli_real_escape_string($conn, $_POST['email']);
       $pass = md5($_POST['password']);
       $cpass = md5($_POST['cpassword']);
    
       // Check if the user already exists in the database
       $select = " SELECT * FROM user_form WHERE email = '$email' && password = '$pass' ";
       $result = mysqli_query($conn, $select);
    
       // If the user already exists, display an error message
       if(mysqli_num_rows($result) > 0) {
          $error[] = 'User Already Exists!';
         }
       else{
            // Check if the passwords match
            if($pass != $cpass) {
                $error[] = 'Password Does Not Match!';
               }
            else {
                  // Insert the user's information into the database
                  $insert = "INSERT INTO user_form(name, email, password) VALUES('$name','$email','$pass')";
                  mysqli_query($conn, $insert);
                  // Redirect the user to the login page
                  header('location:login.php');
               }
         }    
    };
?>
<div class="main-content">
   <div class="form-container">
         <!-- Form for creating a new user account -->
      <form action="" method="post">
         <h3>Signup Now</h3>
         <?php
            // check if the 'error' variable is set
            if(isset($error)){
               // iterate through the 'error' array
               foreach($error as $error){
                 // output current error message
                 echo '<span class="error-msg">'.$error.'</span>';
               };
             };
         ?>
         <!-- Input fields for user name, email, password, and confirm password -->
         <input type="text" name="name" required placeholder="Please Enter Your Name" />
         <input type="email" name="email" required placeholder="Please Enter Your Email" />
         <input type="password" name="password" required placeholder="Please Enter Your Password" />
         <input type="password" name="cpassword" required placeholder="Please Confirm Your Password" />
         <!-- Submit button for creating a new account -->
         <input type="submit" name="submit" value="register now" class="form-btn" />
         <!-- Link to the login page for existing users -->
         <p>Already Haven An Account? <a href="login.php">Login Now</a></p>
      </form>
   </div> <!-- .form-container -->
</div> <!-- .main-content -->
<!-- Insert Footer PHP Code -->
<?php 
  include_once 'templates/footer.php';    
?>