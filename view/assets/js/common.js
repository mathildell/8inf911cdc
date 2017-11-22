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


  $('nav .responsive-menu').click(function(){
    if($('nav').hasClass('open')){
      $('nav').removeClass('open');
    }else{
      $('nav').addClass('open');
    }
  });

  $('#searchbar').click(function(e){
    e.preventDefault();

    if($(this).hasClass('icon-search')){
      $(this).attr({'class': 'icon-x'});
      $('#searchNav').addClass('activated');

    }else{
      $(this).attr({'class': 'icon-search'});
      $('#searchNav').removeClass('activated');
    }

  });
});