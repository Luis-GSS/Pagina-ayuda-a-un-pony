$('.btn').click(function(){
    $(this).toggleClass("click");
    $('.sidebar').toggleClass("show");
  });
    $('.ISC').click(function(){
      $('nav ul .ISC').toggleClass("show");
      $('nav ul .first').toggleClass("rotate");
    });
    $('.IBQ').click(function(){
      $('nav ul .IBQ').toggleClass("show1");
      $('nav ul .second').toggleClass("rotate");
    });
    $('.IND').click(function(){
      $('nav ul .IND').toggleClass("show2");
      $('nav ul .third').toggleClass("rotate");
    });
    $('.IE').click(function(){
      $('nav ul .IE').toggleClass("show3");
      $('nav ul .fourth').toggleClass("rotate");
    });
    $('nav ul li').click(function(){
      $(this).addClass("active").siblings().removeClass("active");
    });