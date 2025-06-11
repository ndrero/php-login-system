const passwordInput = document.getElementById('password');
const confirmInput = document.getElementById('confirmPassword');
const strengthText = document.getElementById('strengthText');
const strengthMeter = document.getElementById('strengthMeter');
const form = document.getElementById('resetForm');
const successMessage = document.getElementById('successMessage');
const errorMessage = document.getElementById('errorMessage');

let strength;

passwordInput.addEventListener('input', () => {
    const val = passwordInput.value;
    strength = 0;

    if(val.length >= 8) strength++;
    if(/[A-Z]/.test(val)) strength++;
    if(/[0-9]/.test(val)) strength++;
    if(/[^A-Za-z0-9]/.test(val)) strength++;

    if (strength <= 1) {
        strengthMeter.className = 'weak';
        strengthText.textContent = 'Fraca';
    } else if (strength == 2 || strength == 3) {
        strengthMeter.className = 'medium';
        strengthText.textContent = 'Média';
    } else {
        strengthMeter.className = 'strong';
        strengthText.textContent = 'Forte';
    }
});

document.getElementById('togglePassword').addEventListener('click', () => {
    passwordInput.type = passwordInput.type === 'password' ? 'text' : 'password'
});

document.getElementById('toggleConfirmPassword').addEventListener('click', () => {
    confirmInput.type = confirmInput.type === 'password' ? 'text' : 'password'
});

form.addEventListener('submit', (e) => {
    e.preventDefault();

    if(passwordInput.value !== confirmInput.value){
        errorMessage.style.display = 'block';
        errorMessage.textContent = 'As senhas não coincidem';
        return;
    }

    if(strength <= 3) {
        errorMessage.style.display = 'block';
        errorMessage.textContent = 'A senha não é forte o suficiente.';
        return;
    }

    successMessage.style.display = 'block';
    errorMessage.style.display = 'none';

    setTimeout(() => {
        form.submit();
    }, 2000);
});
