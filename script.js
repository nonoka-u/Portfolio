$(function(){
    $(window).on('load',function(){
        $('#index #container').delay(500).fadeOut(500);
        $('#index .loading').delay(800).fadeOut(500);
    });
    setTimeout(function(){
        $('#index .loading').fadeOut(500);
    },2000);
});

$(document).ready(function(){
    if(window.location.href.indexOf("about.html") > -1) {
      $('body').hide().fadeIn(1000); // 500ms でフェードイン
    }
  });
  $(document).ready(function(){
    if(window.location.href.indexOf("skills.html") > -1) {
      $('body').hide().fadeIn(1000); // 500ms でフェードイン
    }
  });
  $(document).ready(function(){
    if(window.location.href.indexOf("works.html") > -1) {
      $('body').hide().fadeIn(1000); // 500ms でフェードイン
    }
  });
  $(document).ready(function(){
    if(window.location.href.indexOf("contact.html") > -1) {
      $('body').hide().fadeIn(1000); // 500ms でフェードイン
    }
  });