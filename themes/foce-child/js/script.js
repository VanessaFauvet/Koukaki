// Apparition des sections au chargement
const SectionOptions = {
    root: null, // Utilise le viewport comme zone de défilement
    rootMargin: '0px', // Marge autour du root. Ici, vous pouvez ajouter votre offset
    threshold: 0.1 // L'élément doit être visible à 10% avant de déclencher l'observer
};
  
const sectionObserver = new IntersectionObserver((entries) => {
    for(const entry of entries) {
        if(entry.isIntersecting) {
            entry.target.classList.add('visible')
        }
    }
}, SectionOptions)

document.querySelectorAll('.fade-in').forEach(element => {
  sectionObserver.observe(element);
});

// Apparition des titres au scroll
const options = {
    root: null, // Utilise le viewport comme zone de défilement
    rootMargin: '0px', // Marge autour du root. Ici, vous pouvez ajouter votre offset
    threshold: 1 // L'élément doit être visible à 100% avant de déclencher l'observer
};

const observer = new IntersectionObserver((entries) => {
    for(const entry of entries) {
        if(entry.isIntersecting) {
            entry.target.classList.add('visible')
        }
    }
}, options)

document.querySelectorAll('.appear').forEach(element => {
    observer.observe(element);
});

// Carrousel Swiper
var swiper = new Swiper(".mySwiper", {
    effect: "coverflow",
    spaceBetween: 30,
    grabCursor: true,
    slidesPerView: 3,
    loop: true,
    coverflowEffect: {
      rotate: 0,
      stretch: 0,
      depth: 100,
      modifier: 1,
      slideShadows: false,
    },
});

// Ouverture et fermeture du menu
(function($) {
    $(".burger-open").click(function () {
    console.log("burger-trigger cliqué");
    $(".burger-content").toggleClass("open");
    $(".burger-icon").toggleClass("close");
  });
  $("a").click(function () {
    if ($(".burger-content").hasClass("open")) {
      $(".burger-content").removeClass("open");
      $(".burger-icon").removeClass("close");
    }
  });    
})(jQuery);

// Parallaxe nuages
const placeSection = document.getElementById("place");
const bigCloud = placeSection.querySelector(".big-cloud");
const littleCloud = placeSection.querySelector(".little-cloud");

window.addEventListener("scroll", () => {
  const scroll = window.scrollY;
  const maxXOffset = 300; // Réglage de la valeur maximale de déplacement horizontal

  const posX = maxXOffset - scroll / 5; // Division pour ajuster la vitesse du défilement

  bigCloud.style.transform = `translateX(${posX}px)`;
  littleCloud.style.transform = `translateX(${posX}px)`;
});