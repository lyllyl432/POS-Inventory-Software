$(document).ready(function () {
  $(".main-links").on("click", function (e) {
    e.preventDefault();
    //add total height accumolator
    let totalHeight = 0;
    console.log($(this).parent().parent());
    if (!$(this).hasClass("active")) {
      //add class  to the dropdown list
      $(this).addClass("active");
      $(this)
        .parent()
        .parent()
        .next()
        .children()
        .each(function () {
          totalHeight = totalHeight + $(this).outerHeight();
        });
    } else {
      $(this).removeClass("active");
      totalHeight = 0;
    }

    $(this).parent().parent().next().height(totalHeight);
  });
  $("#side-nav-hamburger").click(function () {
    $("#side-nav").toggleClass("active");
    $(".dropdown-menu").css("height", "0");
    $(".shrink-sidebar-links").removeClass("active");
    if ($("#side-nav").hasClass("active")) {
      $("#side-nav-logo").hide();
      $(".main-links").hide();
      $(".collapsed-icon").show();
      $("#side-content").css({
        "margin-left": "100px",
      });
    } else {
      $("#side-content").css({
        "margin-left": "240px",
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
  //mouse enter event for shrink sidebar icon link
  $(".collapsed-icon").on("click", function () {
    var isActive = $(this).children(".shrink-sidebar-links").hasClass("active");
    $(".shrink-sidebar-links").removeClass("active");
    if (!isActive) {
      $(this).children(".shrink-sidebar-links").addClass("active");
    }
  });
  $(document).on("click", function (e) {
    if ($(e.target).closest("#side-nav").length === 0) {
      $(".shrink-sidebar-links").removeClass("active");
    }
  });
});
