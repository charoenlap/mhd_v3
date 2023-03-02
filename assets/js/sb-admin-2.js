(function($) {
  "use strict"; // Start of use strict

  // Toggle the side navigation
  $("#sidebarToggle, #sidebarToggleTop").on('click', function(e) {
    $("body").toggleClass("sidebar-toggled");
    $(".sidebar").toggleClass("toggled");
    if ($(".sidebar").hasClass("toggled")) {
      $('.sidebar .collapse').collapse('hide');
    };
  });

  // Close any open menu accordions when window is resized below 768px
  $(window).resize(function() {
    if ($(window).width() < 768) {
      $('.sidebar .collapse').collapse('hide');
    };
    
    // Toggle the side navigation when window is resized below 480px
    if ($(window).width() < 480 && !$(".sidebar").hasClass("toggled")) {
      $("body").addClass("sidebar-toggled");
      $(".sidebar").addClass("toggled");
      $('.sidebar .collapse').collapse('hide');
    };
  });

  // Prevent the content wrapper from scrolling when the fixed side navigation hovered over
  $('body.fixed-nav .sidebar').on('mousewheel DOMMouseScroll wheel', function(e) {
    if ($(window).width() > 768) {
      var e0 = e.originalEvent,
        delta = e0.wheelDelta || -e0.detail;
      this.scrollTop += (delta < 0 ? 1 : -1) * 30;
      e.preventDefault();
    }
  });

  // Scroll to top button appear
  $(document).on('scroll', function() {
    var scrollDistance = $(this).scrollTop();
    if (scrollDistance > 100) {
      $('.scroll-to-top').fadeIn();
    } else {
      $('.scroll-to-top').fadeOut();
    }
  });

  // Smooth scrolling using jQuery easing
  $(document).on('click', 'a.scroll-to-top', function(e) {
    var $anchor = $(this);
    $('html, body').stop().animate({
      scrollTop: ($($anchor.attr('href')).offset().top)
    }, 1000, 'easeInOutExpo');
    e.preventDefault();
  });

})(jQuery); // End of use strict

function limit_decimal(ele,limit){
  // $this.val(parseFloat($this.val(),10).toFixed($limit));
  // console.log(parseFloat(ele.val()).toFixed(limit));
  // ele.val();
  if(parseFloat(ele.val())>0){
      ele.val(parseFloat(ele.val()).toFixed(limit));
  }else{
      ele.val(0);
  }
  // console.log($(this).val()+'<<<');
  // if($(this).val().indexOf('.')!=-1){         
  //    if($(this).val().split(".")[1].length > 2){                
  //        if( isNaN( parseFloat( this.value ) ) ) return;
  //        this.value = parseFloat(this.value).toFixed(2);
  //    }  
  // }            
  // return this; //for chaining
}
$(document).ready(function(){
  $("input.checkbox-two-0").click(function() {
    var bol = $("input.checkbox-two-0:checked").length >= 2;
    $("input.checkbox-two-0").not(":checked").attr("disabled", bol);
});
$("input.checkbox-two-1").click(function() {
    var bol = $("input.checkbox-two-1:checked").length >= 2;
    $("input.checkbox-two-1").not(":checked").attr("disabled", bol);
});
})