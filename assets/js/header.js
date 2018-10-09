$( "li" ).not(".active").hover(
  function() {
      $(this).find("span").stop().animate({
      width:"100%",
      opacity:"0.95",
    }, 400, function () {
    })
  }, function() {
      $(this).find("span").stop().animate({
      width:"0%",
      opacity:"0",
    }, 400, function () {
    })
  }
);
console.log("working");
// console.log($("li").find("span").stop);