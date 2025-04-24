const scrollBox = document.getElementById('destinations');

function scrollLeft() {
  scrollBox.scrollBy({ left: -280, behavior: 'smooth' });
  console.log("Scroll kiri dijalankan");
}

function scrollRight() {
  scrollBox.scrollBy({ left: 280, behavior: 'smooth' });
  console.log("Scroll kanan dijalankan");
}

document.addEventListener('DOMContentLoaded', function() {
  const leftBtn = document.querySelector('.arrow.left');
  const rightBtn = document.querySelector('.arrow.right');
  
  if (leftBtn) {
    leftBtn.addEventListener('click', function(e) {
      e.preventDefault();
      scrollLeft();
    });
  }
  
  if (rightBtn) {
    rightBtn.addEventListener('click', function(e) {
      e.preventDefault();
      scrollRight();
    });
  }
});