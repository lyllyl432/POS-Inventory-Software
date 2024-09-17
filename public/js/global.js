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
  //remove delete confirmation
  $("#cancel-btn").on("click", function () {
    $("#modal-delete").addClass("hidden");
    $("#modal-delete-id").val();
  });
  $("#close-mark").on("click", function () {
    $("#modal-delete").addClass("hidden");
    $("#modal-delete-id").val();
  });
  //show delete modal
  $(document).on("click", ".btn-delete-unit", function (e) {
    e.preventDefault();
    $("#modal-delete").addClass("flex").removeClass("hidden");
    $("#modal-delete-id").val($(this).siblings(".delete-unit-id").val());
  });
});
