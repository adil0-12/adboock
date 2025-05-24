<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Password toggle functionality
        document.querySelectorAll('.toggle-password').forEach(toggle => {
            toggle.addEventListener('click', function() {
                const target = document.querySelector(this.getAttribute('data-target'));
                const icon = this.querySelector('.password-toggle-icon');
                
                if (target.type === 'password') {
                    target.type = 'text';
                    icon.classList.remove('bi-eye-slash');
                    icon.classList.add('bi-eye');
                } else {
                    target.type = 'password';
                    icon.classList.remove('bi-eye');
                    icon.classList.add('bi-eye-slash');
                }
            });
        });
        
        // Password strength indicator (optional)
        const passwordInput = document.getElementById('form3Example4cg');
        if (passwordInput) {
            passwordInput.addEventListener('input', function() {
                const strengthBar = this.nextElementSibling?.nextElementSibling?.querySelector('.progress-bar');
                const strengthText = this.nextElementSibling?.nextElementSibling?.querySelector('.strength-text');
                
                if (strengthBar && strengthText) {
                    const strength = calculatePasswordStrength(this.value);
                    strengthBar.style.width = strength.percentage + '%';
                    strengthBar.className = 'progress-bar ' + strength.class;
                    strengthText.textContent = strength.text;
                    strengthText.className = 'text-muted strength-text ' + strength.textClass;
                }
            });
        }
        
        function calculatePasswordStrength(password) {
            let strength = 0;
            if (password.length > 0) strength += 10;
            if (password.length >= 8) strength += 30;
            if (/[A-Z]/.test(password)) strength += 20;
            if (/[0-9]/.test(password)) strength += 20;
            if (/[^A-Za-z0-9]/.test(password)) strength += 20;
            
            if (strength < 30) return { percentage: 30, class: 'bg-danger', text: 'Weak', textClass: 'text-danger' };
            if (strength < 70) return { percentage: 70, class: 'bg-warning', text: 'Medium', textClass: 'text-warning' };
            return { percentage: 100, class: 'bg-success', text: 'Strong', textClass: 'text-success' };
        }
    });
    </script>

<style>
    .password-input-group , .form-control{
        box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.05);
        transition: all 0.3s ease;
    }
    
    .password-input-group:focus-within {
        box-shadow: 0 0.5rem 1rem rgba(0, 123, 255, 0.1);
    }
    
    .toggle-password {
        transition: all 0.3s ease;
    }
    
    .toggle-password:hover {
        background-color: #f8f9fa !important;
    }
    
    .password-toggle-icon {
        font-size: 1.2rem;
        color: #6c757d;
        transition: all 0.3s ease;
    }
    
    .toggle-password:hover .password-toggle-icon {
        color: #0d6efd;
    }
    
    .password-strength {
        opacity: 0;
        transition: opacity 0.3s ease;
    }
    
    input:focus + .input-group + .password-strength,
    input:not(:placeholder-shown) + .input-group + .password-strength {
        opacity: 1;
    }
</style>