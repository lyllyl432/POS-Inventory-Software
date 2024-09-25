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
  $("#side-nav-hamburger").click(function () {
    $("#side-nav").toggleClass("active");
    // $("#helloworld").toggleClass("hide");a
    if ($("#side-nav").hasClass("active")) {
      $("#side-nav-logo").hide();
      $(".main-links").hide();
      $(".collapsed-icon").show();
      $("#side-content").css({
        "margin-left": "100px",
        "max-width": "100%",
      });
    } else {
      $("#side-content").css({
        "margin-left": "240px",
        "max-width": "1024px",
      });
      $("#side-nav-logo").show();
      $(".main-links").show();
      $(".collapsed-icon").hide();
    }
  });
  //show create modal for every settings
  $(".create").on("click", function () {
    $(".create-modal").show();
  });
  //remove delete confirmation
  $("#cancel-btn").on("click", function () {
    $("#modal-delete").addClass("hidden");
    $("#modal-delete-id").val();
  });
  //close delete modal
  $("#close-mark").on("click", function () {
    $("#modal-delete").addClass("hidden");
    $("#modal-delete-id").val();
  });
  //close update modal
  $("#update-close-mark").click(() => {
    $(".update-modal").hide();
  });
  //close create modal
  $("#create-close-mark").click(() => {
    $(".create-modal").hide();
  });
});
