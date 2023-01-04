$('.home-slider').slick({
  dots: false,
  infinite: false,
  slidesToShow: 1,
  slidesToScroll: 1,
  autoplay: true,
  autoplaySpeed: 2000,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        infinite: true,
        dots: true
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 1,
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
// mobile toggle
// Function for navigation close btn
function navCloseFunction() {
document.getElementById("closeBtn");
document.getElementById("navigatiList").style.width = "0px";}
// Function for navigation open btn
function navOpenFunction() {
document.getElementById("navigationMenu");
document.getElementById("navigatiList").style.width = "350px";}
// hide mobile menu
$('body,html').click(function(e){
  //$('#navOpenFunction').removeID('navCloseFunction');
});