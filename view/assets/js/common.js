$(function(){
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