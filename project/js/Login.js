const signInBtnLink = document.querySelector('.signInBtn-link');
const signUpBtnLink = document.querySelector('.signUpBtn-link');
const wrapper = document.querySelector('.wrapper');
signUpBtnLink.addEventListener('click', () => {
    wrapper.classList.toggle('active');
});
signInBtnLink.addEventListener('click', () => {
    wrapper.classList.toggle('active');
});

document.addEventListener("DOMContentLoaded", function () {
    const loginForm = document.querySelector('.wrapper');
  
    loginForm.addEventListener("submit", function (event) {
      event.preventDefault();
      // window.location.href = "Profile.html";
    });
  });