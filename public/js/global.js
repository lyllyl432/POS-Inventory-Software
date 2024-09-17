$(document).ready(function () {
  $(".dropdown-list").on("click", function (e) {
    e.preventDefault();
    //add total height accumolator
    let totalHeight = 0;
    console.log($(this));
    if (!$(this).hasClass("active")) {
      //add class  to the dropdown list
      $(this).addClass("active");
      $(this)
        .next()
        .children()
        .each(function () {
          totalHeight = totalHeight + $(this).outerHeight();
        });
    } else {
      $(this).removeClass("active");
      totalHeight = 0;
    }

    $(this).next().height(totalHeight);
  });
  //show create modal for every settings
  $(".create").on("click", function () {
    $(".create-modal").css("display", "block");
  });
});