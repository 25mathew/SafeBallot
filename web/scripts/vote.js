$(".pres").click(function () {

     console.log("clicked");
     $(".pres").removeClass("selected");
     
     $(this).addClass("selected");
     $(".pres").addClass("not-selected");
  
     $(this).removeClass("not-selected");
 });