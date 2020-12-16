var swiper = new Swiper('.partner-list', {
      slidesPerView: 6,
      spaceBetween: 0,
      slidesPerGroup: 3,
      loop: true,
      loopFillGroupWithBlank: true,
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
      breakpoints:{
        1024: {
          slidesPerView: 4,
          spaceBetween: 40,
          slidesPerGroup: 2,
        },
        768: {
          slidesPerView: 2,
          spaceBetween: 30,
          slidesPerGroup: 1,
          
        },
      },
    });
    
    $(document).ready(function() {
 var swiper = new Swiper('.content-list', {
    navigation: {
       nextEl: '.flex-next',
      prevEl:  '.flex-prev',
    },
  });
});