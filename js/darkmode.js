function toggleDarkMode() {
  const contentDiv = document.getElementById('belso');
  const containerDiv = document.getElementById('container');
  contentDiv.classList.toggle('dark-mode');
  containerDiv.classList.toggle('dark-mode');
}