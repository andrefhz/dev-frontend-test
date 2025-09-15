// Iniciando banners

$(document).ready(function(){
    $('.banners').slick({
    autoplay: true,
    autoplaySpeed: 4000,
    arrows: false,
    dots: false
    });
});



// Numeros paralax index

document.addEventListener('DOMContentLoaded', () => {
  const numbers = document.querySelectorAll('.number');

  numbers.forEach(number => {
    const target = +number.getAttribute('data-target');
    let count = 0;
    const increment = Math.ceil(target / 300); 

    const updateNumber = () => {
      count += increment;
      if (count > target) count = target;
      number.textContent = count;
      if (count < target) {
        requestAnimationFrame(updateNumber);
      }
    };

    updateNumber();
  });
});

