<div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content bg-black border border-primary">
      <div class="modal-header text-light">
        <h5 class="modal-title" id="loginModalLabel">Login</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body glassmorphism text-light rounded-bottom-3">
        <form method="POST" action="{{ route('login') }}">
            @csrf
          <div class="mb-3">
            <label for="loginEmail" class="form-label">Email address</label>
            <input type="email" class="form-control" name="email" id="loginEmail" placeholder="Enter Email" required>
            @error('email')
              <p class="ms-1 text-danger">{{$message}}</p>
            @enderror
          </div>
          <div class="mb-3">
            <label for="loginPassword" class="form-label">Password</label>
            <input type="password" class="form-control" minlength="8" name="password" id="loginPassword" placeholder="Enter Password" required>
            @error('password')
              <p class="ms-1 text-danger">{{$message}}</p>
            @enderror
          </div>
          <div class="mb-3">
            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
            <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
          </div>
          <div class="mb-3">
              <a href="{{ route('password.request') }}">Forgot Password?</a>
          </div>
          <button type="submit" class="btn btn-primary w-100">Login</button>
        </form>
      </div>
    </div>
  </div>
</div>