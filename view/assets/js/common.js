$(function(){
  var wwidth = $(window).width();

  function responsive(){
    if(wwidth <= 1100){
      if($('#searchNav').hasClass('activated')){
        $('#searchNav').removeClass('activated')
      }
    }
  }
  responsive();

  if($('.alert').length > 0){
    setTimeout(function(){
      $('.alert').fadeOut(700);
    }, 2000);
  }

  $('nav .responsive-menu').click(function(){
    if($('nav').hasClass('open')){
      $('nav').removeClass('open');
    }else{
      $('nav').addClass('open');
    }
  });

  $('#searchbar').click(function(e){
    e.preventDefault();

    if($(this).hasClass('ion-android-search')){
      $(this).attr({'class': 'ion-android-close'});
      $('#searchNav').addClass('activated');

    }else{
      $(this).attr({'class': 'ion-android-search'});
      $('#searchNav').removeClass('activated');
    }

  });
});