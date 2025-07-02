<div class="modal fade" id="signUpModal" tabindex="-1" aria-labelledby="signUpModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content bg-black border border-primary">
      <div class="modal-header text-light">
        <h5 class="modal-title" id="signUpModalLabel">Sign Up</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body glassmorphism text-light">
        <form method="POST" action="{{ route('register') }}">
            @csrf
          <div class="mb-3">
            <label for="signUpName" class="form-label">Name</label>
            <input type="text" class="form-control" name="name"  id="signUpName" placeholder="Enter Your Name" required>
          </div>
          <div class="mb-3">
            <label for="signUpEmail" class="form-label">Email address</label>
            <input type="email" class="form-control" name="email" id="signUpEmail" placeholder="Enter Your Email" required>
          </div>
          <div class="mb-3">
            <label for="signUpPassword" class="form-label">Password</label>
            <input type="password" class="form-control" minlength="8" name="password" id="signUpPassword" placeholder="Enter Your Password" required>
          </div>
          <div class="mb-3">
            <label for="signUpPassword" class="form-label">Confirm Password</label>
            <input type="password" class="form-control" minlength="8" name="password_confirmation" id="confirmPassword" placeholder="Enter Your Confirm Password" required>
          </div>
          <div class="mb-3">
            <label for="showPass">
                <input type="checkbox" class="form-check-input" id="showPass"/> Show Password
            </label>
          </div>
          <button type="submit" class="btn btn-primary w-100">Sign Up</button>
        </form>
      </div>
    </div>
  </div>
</div>
<script src="{{ asset('assets/js/passwords.js') }}"></script>

