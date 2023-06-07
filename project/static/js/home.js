const titleElement = document.querySelector('.title2');

const titleContent = titleElement.innerText;

// animate typing
function animateTyping(text, index, isTypingForward) {
  if (index === text.length && isTypingForward) {
    isTypingForward = false;
  }  

  if (index === -1 && !isTypingForward) {
    isTypingForward = true;
    setTimeout(() => {
      animateTyping(text, 0, isTypingForward);
    }, 400);
    return;
  }
  
  const currentText = isTypingForward ? text.slice(0, index + 1) : text.slice(0, index);

  titleElement.innerText = currentText;

  const delay = isTypingForward ? 100 : 80;
  setTimeout(() => {
    const nextIndex = isTypingForward ? index + 1 : index - 1;
    animateTyping(text, nextIndex, isTypingForward);
  }, delay);
}

animateTyping(titleContent, 0, true);


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
    }, 50);
  }

  prevScrollPos = currentScrollPos;
});

