
<?php
/**
 * Template Name: Login
 */

ob_start(); // buffer output
get_header();?>
<?php

$errors = array();

if (isset($_POST['login'])) {
    $user_login = $_POST['username'];
    $user_password = $_POST['password'];
    $remember_me = isset($_POST['remember_me']) && $_POST['remember_me'] == 'on' ? true : false;

    $user = wp_signon(array(
        'user_login' => $user_login,
        'user_password' => $user_password,
        'remember' => $remember_me,
    ));

 if (is_wp_error($user)) {
    $error_message = $user->get_error_message();
    $errors[] = $error_message;
} else {
    // Redirect user based on their role
    if (in_array('student', $user->roles) || in_array('subscriber', $user->roles)) {
        wp_redirect(home_url('/student-dashboard/'));
    } elseif (in_array('teacher', $user->roles)) {
        wp_redirect(home_url('/teacher-dashboard/'));
    }
    exit;
}

}
?>


<div class="container mt-5" style='margin-top=50px'>
  <div class="row justify-content-center">
    <div class="col-md-6 mt-5">
      <?php if (!empty($errors)): ?>
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
          <?php foreach ($errors as $error): ?>
            <span><?php echo $error; ?></span><br>
          <?php endforeach; ?>
        </div>
      <?php endif; ?>
      <div class="card mt-5 mb-5">
        <div class="card-header">
          <h3 class="text-center">Login</h3>
        </div>
        <div class="card-body">
          <form action="" method="post">
            <div class="mb-3">
              <label for="username" class="form-label">Username</label>
              <input type="text" name="username" id="username" class="form-control" required>
            </div>
            <div class="mb-3">
              <label for="password" class="form-label">Password</label>
              <input type="password" name="password" id="password" class="form-control" required>
            </div>
            <div class="mb-3 form-check">
              <input type="checkbox" name="remember_me" id="remember_me" class="form-check-input">
              <label for="remember_me" class="form-check-label">Remember me</label>
            </div>
            <div class="d-grid mb-3">
              <button type="submit" name="login" class="btn btn-primary">Login</button>
            </div>
            <div class="mb-3 text-center">
              <a href="#" class="text-decoration-none">Forgot Password?</a>
            </div>
            <div class="text-center">
              <!-- <p class="mb-0">Don't have an account? <a href="#" class="text-decoration-none">Sign Up</a></p> -->
              <p class="mt-0">Continue to site <a href="<?php echo esc_url(home_url('/')); ?>" class="text-decoration-none">without login</a></p>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<?php get_footer(); 
ob_end_flush();?>
