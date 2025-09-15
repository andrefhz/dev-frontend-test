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


// API

const API_KEY = "pub_3fc8435fa0204c5ab55dba0c0eff1094";
  const URL = `https://newsdata.io/api/1/news?apikey=${API_KEY}&country=br&language=pt&category=business`;

  async function carregarNoticias() {
    try {
      const response = await fetch(URL);
      const data = await response.json();

      const container = document.getElementById("news-container");
      container.innerHTML = "";

      if (!data.results || data.results.length === 0) {
        container.innerHTML = "<p>Nenhuma notícia encontrada no momento.</p>";
        return;
      }

      data.results.slice(0, 6).forEach(noticia => {
        const card = document.createElement("div");
        card.classList.add("col-sm-12", "col-md-6", "col-lg-4");
        card.innerHTML =
        '<div class="card-noticia">' +
          (noticia.image_url
            ? '<img src="' + noticia.image_url + '" alt="' + noticia.title + '" class="img-fluid">'
            : "") +
          "<h3>" + noticia.title + "</h3>" +
          "<p>" + (noticia.description ? noticia.description.substring(0, 120) + "..." : "") + "</p>" +
          '<a href="' + noticia.link + '" target="_blank" rel="noopener">Leia mais</a>' +
        "</div>";
        container.appendChild(card);
      });
    } catch (error) {
      console.error("Erro:", error);
      document.getElementById("news-container").innerHTML = "<p>Erro ao carregar notícias.</p>";
    }
  }

  carregarNoticias();


  // Galeria


  Fancybox.bind("[data-fancybox]", {
  // Your custom options
  });

