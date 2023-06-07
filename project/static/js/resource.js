//to hide/show the nav-bar with scroll
const navBar = document.querySelector('.nav-bar');
let prevScrollPos = window.pageYOffset;
let delayTimeout;

window.addEventListener('scroll', () => {
  clearTimeout(delayTimeout);

  const currentScrollPos = window.pageYOffset;

  if (prevScrollPos > currentScrollPos) {
    // Scrolling up, show the nav bar
    navBar.classList.remove('hidden');
  } else {
    delayTimeout = setTimeout(() => {
      navBar.classList.add('hidden');
    }, 20);
  }

  prevScrollPos = currentScrollPos;
});

