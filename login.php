<!-- Insert Header PHP Code -->
<?php 
    include_once 'templates/header.php';
    @include 'templates/config.php';

    session_start();

    if(isset($_POST['submit'])){
      // Escape any special characters in the user-provided 'name' and 'email' values
      $name = mysqli_real_escape_string($conn, $_POST['name']);
      $email = mysqli_real_escape_string($conn, $_POST['email']);
      // Hash the user-provided 'password' value using md5.
      $pass = md5($_POST['password']);
    
      // Construct a query to select all columns from a table called 'user_form' where the 'email' and 'password' column match the values of the 'email' and 'pass' variables.
      $select = " SELECT * FROM user_form WHERE email = '$email' && password = '$pass' ";
    
      // Execute the query and assign the result to a variable 'result'
      $result = mysqli_query($conn, $select);
    
      // Check if there are any rows returned in the result
      if(mysqli_num_rows($result) > 0){
        // Retrieve the first row and assign the 'name' column value to the 'user_name' key of the $_SESSION superglobal
        $row = mysqli_fetch_array($result);
        $_SESSION['user_name'] = $row['name'];
        // Redirect to 'welcome.php'
        header('location:welcome.php');
      }
      else{
        // If no rows are returned, add an error message to an array 'error'
        $error[] = 'Please Re-Enter Your Credentials!';
      }
    };
?>
<div class="main-content">
    <div class="form-container">
        <form action="" method="post">
            <h3>Login Now</h3>
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
            <input type="email" name="email" required placeholder="Please Enter Your Email">
            <input type="password" name="password" required placeholder="Please Enter Your Password">
            <input type="submit" name="submit" value="Login Now" class="form-btn">
            <p>Don't have an account? <a href="signup.php">Signup Now</a></p>
        </form>
    </div> <!-- .form-container -->
</div> <!-- .main-content -->
<!-- Insert Footer PHP Code -->
<?php 
  include_once 'templates/footer.php';    
?>