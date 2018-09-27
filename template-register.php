<?php
/*
 * Template Name: Template Register
 */
 get_header();
 global $wpdb;

 if ($_POST) {
   $username = $wpdb->escape($_POST['txtUsername']);
   $email = $wpdb->escape($_POST['txtEmail']);
   $password = $wpdb->escape($_POST['txtPassword']);
   $ConfPassword = $wpdb->escape($_POST['txtConfirmPassword']);

   $error = array();
   if (strpos($username, ' ') !== FALSE) {
     $error['username_space'] = "Username can not have space.";
   }
   if (empty($username)) {
     $error['username_empty'] = "Please fill in the username.";
   }
   if (username_exists($username)) {
     $error['username_exists'] = "Username already exists.";
   }
   if (!is_email($email)) {
     $error['email_valid'] = "Email not valid.";
   }
   if (email_exists($email)) {
     $error['email_existence'] = "Email already exists.";
   }
   if (strcmp($password, $ConfPassword) !== 0) {
     $error['password'] = "Password didn't match.";
   }

   if (count($error) == 0) {
     wp_create_user($username, $password, $email);
     echo "User Created Successfully";
     wp_redirect( home_url() );
     exit();
   } else {
     print_r($error);
   }
 }
?>

<div class="register-context">
  <div class="register-title">
    Register
  </div>
  <form method="post">
    <p>
      <label>Username</label>
      <div>
        <input type="text" name="txtUsername" id="txtUsername" placeholder="Username" />
      </div>
    </p>

    <p>
      <label>Email</label>
      <div>
        <input type="email" name="txtEmail" id="txtEmail" placeholder="Email" />
      </div>
    </p>

    <p>
      <label>Password</label>
      <div>
        <input type="password" name="txtPassword" id="txtPassword" placeholder="Password" />
      </div>
    </p>

    <p>
      <label>Confirm Password</label>
      <div>
        <input type="password" name="txtConfirmPassword" id="txtConfirmPassword" placeholder="ConfirmPassword" />
      </div>
    </p>

    <input type="submit" name="btnSubmit" />
  </form>
</div>






<?php get_footer(); ?>
