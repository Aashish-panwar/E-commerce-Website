<?php
session_start();
include('server/connection.php');
// if(isset($_SESSION['logged_in'])){
//   header('location: account.php');
//   exit;
// }
if (isset($_POST['login_btn'])) {
  $email = $_POST['email'];
  $password = $_POST['password'];

  // Prepare the SQL statement
  $stmt = $conn->prepare("SELECT user_id, user_name, user_email, user_password FROM users WHERE user_email = ? LIMIT 1");
  $stmt->bind_param('s', $email);

  if ($stmt->execute()) {
      $stmt->bind_result($user_id, $user_name, $user_email, $user_password);
      $stmt->store_result();

      if ($stmt->num_rows == 1) {
          $stmt->fetch();
          $_SESSION['user_id'] = $user_id;
          $_SESSION['user_name'] = $user_name;
          $_SESSION['user_email'] = $user_email;
          $_SESSION['logged_in'] = true;
          header('Location: account.php?message=login Successfully');
          
      } 
      else {
          // No account found
          header('Location: login.php?error=no account');
          exit();
      }
  } else {
      // SQL execution error
      header('Location: login.php?error=something went wrong');
      exit();
  }
}
?>


<?php include('layouts/header.php');?>

      
      <!--login-->
      <section class="my-5 py-5">
        <div class="container text-center mt-3 pt-5">
            <h2 class="form-weight-bold">Login</h2>
            <hr class="mx-auto"> 
        </div>
        <div class="mx-auto container">
            <form id="login-form" method="POST" action="login.php">
              <p style="color:red" class="text_center"><?php if(isset($_GET['error'])) { echo $_GET['error'];}?></p>
                <div class="form-group">
                    <label>Email</label>
                    <input type="text" class="form-control" id="login-email" name="email" placeholder="Email" required>
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" class="form-control" id="login-password" name="password" placeholder="Password" required>
                </div>
                <div class="form-group">
                    <input type="submit" class="btn" name="login_btn" id="login-btn" value="Login">
                </div>
                <div class="form-group">
                    <a id="register-url" class="btn" href="register.php">Don't account? Register</a>
                </div>
            </form>
        </div>
      </section>



      <?php include('layouts/footer.php');?>