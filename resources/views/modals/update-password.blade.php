<div class="modal fade" id="changePasswordModal" tabindex="-1" aria-labelledby="changePasswordModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content bg-black border border-primary">
      <div class="modal-header text-light">
        <h5 class="modal-title" id="changePasswordModalLabel">Change Password</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body glassmorphism text-light">
        <form method="POST" action="{{ route('password.change') }}">
          @csrf
          <div class="mb-3">
            <label for="currentPassword" class="form-label">Current Password</label>
            <input type="password" class="form-control" minlength="8" id="currentPassword" name="current_password" placeholder="Enter current password" required>
          </div>
          <div class="mb-3">
            <label for="newPassword" class="form-label">New Password</label>
            <input type="password" class="form-control" minlength="8" id="newPassword" name="password" placeholder="Enter new password" required>
          </div>
          <div class="mb-3">
            <label for="confirmNewPassword" class="form-label">Confirm New Password</label>
            <input type="password" class="form-control" minlength="8" id="confirmNewPassword" name="password_confirmation" placeholder="Confirm new password" required>
          </div>
          <div class="mb-3">
            <label for="showNewPasswords">
              <input type="checkbox" class="form-check-input" id="showNewPasswords" /> Show Passwords
            </label>
          </div>
          <button type="submit" class="btn btn-outline-primary w-100">Update Password</button>
        </form>
      </div>
    </div>
  </div>
</div>

<script src="{{ asset('assets/js/passwords.js') }}"></script>