import './bootstrap';
Fancybox.bind("[data-fancybox]", {
    // Your custom options
  });
Fancybox.bind('[data-fancybox="gallery"]', {
    // Your custom options
  });

const container = document.getElementById("myCarousel");
const options = {infinite: true};

new Carousel(container, options);

// let truncate = document.querySelector("#ProductInfo p");
// $clamp(truncate, {
//  clamp: 4, // Число строк
//  useNativeClamp: true // НЕ используем -webkit-line-clamp
// });
