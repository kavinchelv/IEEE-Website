
//for scrollspy to be hidden until reach over the video

$('#scrollspy').hide();
$(window).scroll(function() {
    if ($(this).scrollTop() > 880)
     {
        $('#scrollspy').fadeIn();
     }
    else
     {
      $('#scrollspy').fadeOut();
     }

 });
// for background parralaax
$(window).scroll(function(e){
    parallax();
});
function parallax(){
    var scrolled=$(window).scrollTop();
    $('.background').css('top', -(scrolled * 0.2) + 'px');
}
$(function() {
    
    // contact form animations
    $('#contact').click(function() {
      $('#contactForm').fadeToggle();
    })
    
    $(document).mouseup(function (e) {
      var container = $("#contactForm");
    
      if (!container.is(e.target) // if the target of the click isn't the container...
          && container.has(e.target).length === 0) // ... nor a descendant of the container
      {
          container.fadeOut();
      }
    });
    
  });