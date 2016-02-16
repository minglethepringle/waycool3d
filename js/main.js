$(function() {
  $(".toggle").click( function(){
      var divVisible = $(this).parent().parent().parent();
      var divId = divVisible.attr('id');
      $(".togglediv").each(function(){
        if($(this).hasClass('hidden')){
          $(this).removeClass('hidden');
        }else{
          if($(this).attr('id') !== divId){
            $(this).addClass('hidden');
          }else{
            $("#h" + $(this).attr('id')).toggleClass("hidden", 1000, "swing");
          }
        }
      });
  });
});