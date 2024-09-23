$(document).ready(function () {
  //create unit
  $(document).on("submit", "#create-unit", function (e) {
    e.preventDefault();
    const formValue = $(this).serialize();
    $.ajax({
      url: BASE_URL + "create-unit",
      type: "POST",
      data: formValue,
      dataType: "json",
      beforeSend: () => {
        $(".loader").show();
      },
      success: (response) => {
        $(".create-modal").hide();
        if (response.message === "error") {
          $(".form-error").show();
          setTimeout(function () {
            $(".form-error").hide("slow");
          }, 5000);
        } else if (response.message === "success") {
          $(".form-create-success").show();
          $(".unit-list").html(response.value);
          setTimeout(function () {
            $(".form-create-success").hide("slow");
          }, 5000);
        }
      },
      complete: () => {
        $(".loader").hide();
      },
    });
  });
  //show update modal
  $(document).on("click", ".btn-update-unit", function () {
    $(".update-modal").show();
    const value = $(this).siblings("input").val();
    $("#unit-id").val(value);
    const tr = $(this).closest("tr");
    const unitName = tr.children("td:eq(0)").text();
    const shortName = tr.children("td:eq(1)").text();
    $("#update-unit-name").val($.trim(unitName));
    $("#update-short-name").val($.trim(shortName));
  });
  // update unit
  $(document).on("submit", "#update-modal", function (e) {
    e.preventDefault();
    const formValue = $(this).serialize();
    $.ajax({
      url: BASE_URL + "update-unit",
      type: "POST",
      data: formValue,
      dataType: "json",
      beforeSend: () => {
        $(".loader").show();
      },
      success: (response) => {
        $(".update-modal").hide();
        if (response.message === "error") {
          $(".form-error").show();
          setTimeout(function () {
            $(".form-error").hide("slow");
          }, 5000);
        } else if (response.message === "success") {
          $(".form-update-success").show();
          $(".unit-list").html(response.value);
          setTimeout(function () {
            $(".form-update-success").hide("slow");
          }, 5000);
        }
      },
      complete: () => {
        $(".loader").hide();
      },
    });
  });
  //handle delete unit
  $("#delete").on("submit", function (e) {
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
        $("#modal-delete").addClass("hidden");
        $("#modal-delete-id").val();
        $(".unit-list").html(value);
        $(".delete-success").show("slow");
        setTimeout(function () {
          $(".delete-success").hide("slow");
        }, 5000);
      },
      complete: () => {
        $(".loader").hide();
      },
    });
  });
  //show delete modal
  $(document).on("click", ".btn-delete-unit", function (e) {
    e.preventDefault();
    $("#modal-delete").addClass("flex").removeClass("hidden");
    $("#modal-delete-id").val($(this).siblings(".delete-unit-id").val());
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
