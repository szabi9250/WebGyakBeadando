function toggleDarkMode() {
  const contentDiv = document.getElementById('belso');
  const containerDiv = document.getElementById('container');

  const isDarkMode = contentDiv.classList.toggle('dark-mode');
  containerDiv.classList.toggle('dark-mode');

  if (isDarkMode) {
    localStorage.setItem('dark-mode', 'enabled');
  } else {
    localStorage.setItem('dark-mode', 'disabled');
  }
}


window.addEventListener('DOMContentLoaded', () => {
  if (localStorage.getItem('dark-mode') === 'enabled') {
    const contentDiv = document.getElementById('belso');
    const containerDiv = document.getElementById('container');
    contentDiv.classList.add('dark-mode');
    containerDiv.classList.add('dark-mode');
  }
});