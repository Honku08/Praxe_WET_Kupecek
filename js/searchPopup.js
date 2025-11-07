const btn = document.getElementById('search--button');
const input = document.getElementById('search--input');

btn.addEventListener('click', (e) => {
  e.stopPropagation();
  input.classList.toggle('active');
  if (input.classList.contains('active')) input.focus();
});

document.addEventListener('click', (e) => {
  if (!input.contains(e.target) && !btn.contains(e.target)) {
    input.classList.remove('active');
  }
});