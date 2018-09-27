<?php
/*
 * Template Name: Template Login
 */
 get_header();
?>
<div class="login-context">
  <div class="login-title">
    Login
  </div>
  <?php
  $redirect_to = 'http://purple.local';
  ?>
  <form name="loginform" id="loginform" action="<?php echo site_url( '/wp-login.php' ); ?>" method="post">
  <p>Username: <input id="user_login" type="text" size="20" value="" name="log"></p>
  <p>Password: <input id="user_pass" type="password" size="20" value="" name="pwd"></p>
  <p><input id="rememberme" type="checkbox" value="forever" name="rememberme">Remember Me</p>

  <p><input id="wp-submit" type="submit" value="Login" name="wp-submit"></p>

  <input type="hidden" value="<?php echo esc_attr( $redirect_to ); ?>" name="redirect_to">

  </form>
</div>






<?php get_footer(); ?>
