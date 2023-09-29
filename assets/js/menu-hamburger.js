$(document).ready(function() {
  $('.menu-icon').click(function() {
    $(this).toggleClass('open');
    $('.navbar-links').slideToggle();
  });
});