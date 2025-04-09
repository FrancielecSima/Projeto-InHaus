const loginBtn = document.getElementById('btnLogin');
const loginForm = document.getElementById('loginForm');

loginBtn.addEventListener('click', () => {
  loginForm.classList.toggle('hidden');
});
