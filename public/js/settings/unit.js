$(document).ready(function () {
  //show update modal
  $(document).on("submit", ".update-unit", function (e) {
    e.preventDefault();
    $(".update-modal").show();
    const value = $(this).find("input").val();
    $("#unit-id").val(value);
  });
  // update unit
  $(document).on("submit", "#update-modal", function (e) {
    e.preventDefault();
    const formValue = $(this).serialize();
    $.ajax({
      url: BASE_URL + "update-unit",
      type: "POST",
      data: formValue,
      beforeSend: () => {
        $(".loader").show();
      },
      success: (value) => {
        $(".update-modal").hide();
        $(".unit-list").html(value);
      },
      complete: () => {
        $(".loader").hide();
      },
    });
  });
  //delete unit
  $(document).on("submit", ".delete-unit", function (e) {
    e.preventDefault();
    const formValue = $(this).serialize();
    $.ajax({
      url: BASE_URL + "delete-unit",
      type: "POST",
      data: formValue,
      beforeSend: () => {
        $(".loader").show();
      },
      success: (value) => {
        // $(".update-modal").hide();
        $(".unit-list").html(value);
      },
      complete: () => {
        $(".loader").hide();
      },
    });
  });

  //load unit table template
  $.ajax({
    url: BASE_URL + "unit/table",
    type: "GET",
    dataType: "html",
    beforeSend: () => {
      $(".loader").show();
    },
    success: (value) => {
      $(".unit-list").html(value);
    },
    complete: () => {
      $(".loader").hide();
    },
  });
});
