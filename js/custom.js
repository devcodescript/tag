$(document).ready(function() {
              $('.owl-carousel').owlCarousel({
                margin: 10,
                responsiveClass: true,
				nav: false,
				dots: true,
                loop: false,
                responsive: {
                  0: {
                    items: 1,
                  },
                  600: {
                    items: 1,
                  },
                  1000: {
                    items:1,
                  }
                }
              })
})