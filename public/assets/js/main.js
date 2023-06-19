$('.testimonial__sliderWrapperCenter').slick({
    dots: false,
    infinite: true,
    arrows:false,
    speed: 300,
    centerMode:true,
    centerPadding: '100px',
    slidesToShow: 3,
    slidesToScroll: 1,
    pauseOnFocus:false,
    pauseOnHover:false,
    autoplay: true,
    autoplaySpeed: 2000,
    speed:900,
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 1,
          infinite: true,
          dots: true
        }
      },
      {
        breakpoint: 600,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1
        }
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      }
      // You can unslick at a given breakpoint now by adding:
      // settings: "unslick"
      // instead of a settings object
    ]
  });

  $('.testimonial__sliderWrapper').slick({
    dots: false,
    infinite: true,
    arrows:false,
    speed: 300,
    pauseOnFocus:false,
    pauseOnHover:false,
    slidesToShow: 3,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 2000,
    speed:900,
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 1,
          infinite: true,
          dots: true
        }
      },
      {
        breakpoint: 600,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1
        }
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      }
      // You can unslick at a given breakpoint now by adding:
      // settings: "unslick"
      // instead of a settings object
    ]
  });