//SLIDING PANEL

$(document).ready(function(){
  $('.sliding-panel-button,.sliding-panel-fade-screen,.sliding-panel-close,.jumper').on('click touchstart',function (e) {
    $('.sliding-panel-content,.sliding-panel-fade-screen').toggleClass('is-visible');
    e.preventDefault();
  });
});

//ANIMATED NAV BUTTON

$(document).ready(function(){
  $('.navicon-button').on('click touchstart',function (e) {
    $(this).toggleClass('open');
    e.preventDefault();
  });
});

$(document).ready(function(){
  $('.sliding-panel-fade-screen,.jumper').on('click touchstart',function (e) {
    $('.navicon-button').toggleClass('open');
    e.preventDefault();
  });
});

