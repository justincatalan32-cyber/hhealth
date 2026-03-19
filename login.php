<?php include 'header.php'; ?>

<div class="container my-5">
  <div class="row justify-content-center">
    <div class="col-md-5">

      <div class="card shadow">
        <div class="card-body p-4">
          <h3 class="card-title text-center mb-4">Log In to Your Account</h3>

          <form action="login_process.php" method="POST">
            <div class="mb-3">
              <label for="email" class="form-label">Email Address</label>
              <input type="email" class="form-control" id="email" name="email" placeholder="juan@email.com" required>
            </div>
            <div class="mb-3">
              <label for="password" class="form-label">Password</label>
              <input type="password" class="form-control" id="password" name="password" required>
            </div>
            <div class="mb-3 form-check">
              <input type="checkbox" class="form-check-input" id="rememberMe" name="rememberMe">
              <label class="form-check-label" for="rememberMe">Remember Me</label>
            </div>

            <div class="d-grid gap-2">
              <button type="submit" class="btn btn-primary">Log In</button>
              <a href="index.php" class="btn btn-outline-secondary">Back to Home</a>
            </div>

            <p class="text-center mt-3">Don't have an account? <a href="register.php">Register</a></p>
          </form>

        </div>
      </div>

    </div>
  </div>
</div>