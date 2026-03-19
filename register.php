<?php include 'header.php'; ?>

<div class="container my-5">
  <div class="row justify-content-center">
    <div class="col-md-6">

      <div class="card shadow">
        <div class="card-body p-4">
          <h3 class="card-title text-center mb-4">Create an Account</h3>

          <form action="register_process.php" method="POST">
            <div class="mb-3">
              <label for="fullname" class="form-label">Full Name</label>
              <input type="text" class="form-control" id="fullname" name="fullname" placeholder="Juan Dela Cruz" required>
            </div>
            <div class="mb-3">
              <label for="email" class="form-label">Email Address</label>
              <input type="email" class="form-control" id="email" name="email" placeholder="juan@email.com" required>
            </div>
             <div class="mb-3">
              <label for="contactNumber" class="form-label">Contact Number</label>
              <input type="number" class="form-control" id="contactNumber" name="contactNumber" required>
            </div>
            <div class="mb-3">
              <label for="address" class="form-label">Address</label>
              <input type="text" class="form-control" id="address" name="address" required>
            </div>
            <div class="mb-3">
              <label for="gender" class="form-label">Gender</label>
              <input type="text" class="form-control" id="gender" name="gender" required>
            </div>                                   
            <div class="mb-3">
              <label for="password" class="form-label">Password</label>
              <input type="password" class="form-control" id="password" name="password" required>
            </div>
            <div class="mb-3">
              <label for="confirmPassword" class="form-label">Confirm Password</label>
              <input type="password" class="form-control" id="confirmPassword" name="confirmPassword" required>
            </div>

            <div class="d-grid gap-2">
              <button type="submit" class="btn btn-primary">Register</button>
              <a href="index.php" class="btn btn-outline-secondary">Back to Home</a>
            </div>

            <p class="text-center mt-3">Already have an account? <a href="login.php">Log In</a></p>
          </form>

        </div>
      </div>

    </div>
  </div>
</div>
