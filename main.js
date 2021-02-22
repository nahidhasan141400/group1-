const btn = document.querySelector('.btnlogin');
const pop = document.querySelector('.login');
const po = document.querySelector('.po');

btn.addEventListener('click', function() {
  pop.style.left = "0%"
})
po.addEventListener('click', function() {
  pop.style.left = "-100%";
});