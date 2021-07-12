 $(document).ready(function(){





  $('.header .dropdown-menu a.dropdown-toggle').on('click', function(e) {
    if (!$(this).next().hasClass('show')) {
      $(this).parents('.header .dropdown-menu').first().find('.show').removeClass("show");
    }
    var $subMenu = $(this).next(".header .dropdown-menu");
    $subMenu.toggleClass('show');


    $(this).parents('.header li.nav-item.dropdown.show').on('.header hidden.bs.dropdown', function(e) {
      $('.header .dropdown-submenu .show').removeClass("show");
    });


    return false;
  });


  $('#owl-clients').owlCarousel({

    items:3,
    loop: true,
    autoplay:true,
     margin:60, 
     dots: false,
     responsive:{
                0:{
                    items:1,
                    nav:false,
                    dots:false
                },
                580:{
                    items:2,
                    nav:false
                }, 
                992:{
                    items:3,
                    nav:false
                } 
            } 

  });


    $('#owl-clients-reviews-page').owlCarousel({

      items:3,
      loop: true,
      autoplay:true,
       margin:60, 
       dots: true,
       nav:true,
       responsive:{
                  0:{
                      items:1,
                      nav:false,
                    dots:false 
                  },
                  580:{
                      items:2,
                      nav:false,
                    dots:false
                  }, 
                  992:{
                      items:3,
                      nav:false
                  } 
              } 

    });


// ==== Home Banner slider ====

$('.home-banner-carousal').owlCarousel({

  items:1,
  loop: true,
  autoplay:false,
  slideSpeed: 300,
   dots: true,
   responsive:{
              0:{
                  items:1,
                  nav:false,
                dots:false 
              },
              580:{
                  items:1,
                  nav:false,
                dots:false
              }, 
              992:{
                  items:1,
                  nav:false
              } 
          } 

});

// === End Home Banner ===
 





// ============== Chart code ================
$('.case-results-row').appear(function() {

 
  setTimeout(function() {

    $('.chart').easyPieChart({
      easing: 'easeOutElastic',
      delay: 3000,
      barColor: '#369670',
      trackColor: '#0c5079',
      scaleColor: false,
      lineWidth: 30,
      trackWidth: 30,
      size: 250,
      lineCap: 'round',
      onStep: function(from, to, percent) {
        this.el.children[0].innerHTML = Math.round(percent);
      }
    });
  }, 150);
});



// ----- For Case Study Detail Page -----

$('.detail-page-charts').appear(function() {

  setTimeout(function() {
    $('.chart').easyPieChart({
      easing: 'easeOutElastic',
      delay: 3000,
      barColor: '#369670',
      trackColor:'#0064a173',
      scaleColor: false,
      lineWidth: 30,
      trackWidth: 30,
      size: 250,
      lineCap: 'round',
      onStep: function(from, to, percent) {
        this.el.children[0].innerHTML = Math.round(percent);
      }
    });
  }, 150);
});

// ------ End Case Study Detail Page ------

// ================== End Chart code ===============

// ===== View more filters ====
$('.filter-view-more').click(function() {
      $('.filters-hidden').show(500);
      $('.filter-view-more').hide(500);
      $('.filter-view-less').show(500);
    });

$('.filter-view-less').click(function() {
      $('.filters-hidden').hide(500);
      $('.filter-view-less').hide(500);
      $('.filter-view-more').show(500);
    });
// ======== End more filter ======


// ======== Lisitings tab filter ========

  $(".case-studies-filter .filter-item").click(function(){

        var value = $(this).attr('data-filter');
        
        if(value == "all")
        {
            //$('.filter').removeClass('hidden');
            $('.filter').show('1000');
        }
        else
        {
//            $('.filter[filter-item="'+value+'"]').removeClass('hidden');
//            $(".filter").not('.filter[filter-item="'+value+'"]').addClass('hidden');
            $(".filter").not('.'+value).hide('3000');
            $('.filter').filter('.'+value).show('3000');
            
        }

        $('.case-studies-filter .filter-item').not(this).removeClass('active');
           $(this).addClass('active');
    });


    
//     if ($(".case-studies-filter .filter-item").hasClass("active")) {
//     $(this).removeClass("active");

// }

// $(this).addClass("active");


// ====== End Lisitings Tab filters ======




});


function openmobileNav() {
      document.getElementById("mobileNav").style.width = "100%";
      var animateNav = document.getElementById("mobileNavInner");
      animateNav.classList.add("nav-mobile-is-open");
      
    }

    /* Close when someone clicks on the "x" symbol inside the overlay */
 function closemobileNav() {
      document.getElementById("mobileNav").style.width = "0%";
      var animateNav = document.getElementById("mobileNavInner");
      animateNav.classList.remove("nav-mobile-is-open");
    } 


   // $(window).scroll(function(){
   //     var fromTopPx = 15; // distance to trigger
   //     var scrolledFromtop = $(window).scrollTop();
   //     if(scrolledFromtop > fromTopPx){
   //         $('.home-banner-sect').addClass('scrolled-true');
           
   //     }else{
   //         $('.home-banner-sect').removeClass('scrolled-true');
   //     }
   // }); 