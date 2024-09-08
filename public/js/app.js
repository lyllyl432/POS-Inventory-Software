$(document).ready(function () {
  $(".dropdown-list").on("click", function (e) {
    e.preventDefault();
    //add total height accumolator
    let totalHeight = 0;
    if (!$(this).hasClass("active")) {
      //add class  to the dropdown list
      $(this).addClass("active");
      $(".dropdown-menu")
        .children()
        .each(function () {
          totalHeight = totalHeight + $(this).outerHeight();
        });
    } else {
      $(this).removeClass("active");
      totalHeight = 0;
    }

    $(".dropdown-menu").height(totalHeight);
  });

  $("#create-unit").on("click", function () {
    $(".modal").css("display", "block");
  });
});
