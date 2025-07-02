document.querySelectorAll('input[type="checkbox"]').forEach(checkbox => {
    checkbox.addEventListener('change', function () {
      let targetFields = [];

      // Identify which checkbox is being toggled
      if (this.id === 'showPass') {
        targetFields = ['signUpPassword', 'confirmPassword'];
      } else if (this.id === 'showNewPasswords') {
        targetFields = ['currentPassword', 'newPassword', 'confirmNewPassword'];
      }

      targetFields.forEach(id => {
        const input = document.getElementById(id);
        if (input) {
          input.type = this.checked ? 'text' : 'password';
        }
      });
    });
  });