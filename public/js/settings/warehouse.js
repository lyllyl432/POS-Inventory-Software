$(document).ready(function () {
  $(".create").on("click", function () {
    $(".create-modal").show();
  });
  //show update modal
  $(document).on("click", ".btn-update-warehouse", function () {
    $(".update-modal").show();
    const value = $(this).siblings("input").val();
    $("#id").val(value);
    const tr = $(this).closest("tr");
    const warehouseName = tr.children("td:eq(0)").text();
    const warehousePhone = tr.children("td:eq(1)").text();
    const warehouseCountry = tr.children("td:eq(2)").text();
    const warehouseCity = tr.children("td:eq(3)").text();
    const warehouseEmail = tr.children("td:eq(4)").text();
    const warehouseZipCode = tr.children("td:eq(5)").text();

    $("#update-warehouse-name").val($.trim(warehouseName));
    $("#update-warehouse-phone").val($.trim(warehousePhone));
    $("#update-warehouse-country").val($.trim(warehouseCountry));
    $("#update-warehouse-city").val($.trim(warehouseCity));
    $("#update-warehouse-email").val($.trim(warehouseEmail));
    $("#update-warehouse-zip-code").val($.trim(warehouseZipCode));
  });
  //update warehouse
  $("#update-warehouse").on("submit", function (e) {
    e.preventDefault();
    var formData = $(this).serialize();
    $.ajax({
      url: BASE_URL + "update-warehouse", // URL to the upload route
      method: "POST",
      data: formData,
      dataType: "json",
      success: function (response) {
        $(".update-modal").hide();
        if (response.message === "error") {
          $(".form-error").show();
          setTimeout(function () {
            $(".form-error").hide("slow");
          }, 5000);
        } else if (response.message === "success") {
          $(".form-update-success").show();
          setTimeout(function () {
            $(".form-update-success").hide("slow");
          }, 5000);
        }
        $(".warehouse-list").html(response.value);
      },
    });
  });
  //create warehouse
  $("#create-warehouse").on("submit", function (e) {
    e.preventDefault();
    var formData = $(this).serialize();
    $.ajax({
      url: BASE_URL + "create-warehouse", // URL to the upload route
      method: "POST",
      data: formData,
      dataType: "json",
      success: function (response) {
        $(".create-modal").hide();
        if (response.message === "error") {
          $(".warehouse-list").html(response.value);
          $(".form-error").show();
          setTimeout(function () {
            $(".form-error").hide("slow");
          }, 5000);
        } else if (response.message === "success") {
          $(".form-create-success").show();
          setTimeout(function () {
            $(".form-create-success").hide("slow");
          }, 5000);
          $(".warehouse-list").html(response.value);
        }
      },
    });
  });
  //show delete modal
  $(document).on("click", ".btn-delete-warehouse", function (e) {
    e.preventDefault();
    $("#modal-delete").addClass("flex").removeClass("hidden");
    $("#modal-delete-id").val($(this).siblings("input").val());
  });
  //handle delete unit
  $("#delete").on("submit", function (e) {
    e.preventDefault();
    const formValue = $(this).serialize();
    $.ajax({
      url: BASE_URL + "delete-warehouse",
      type: "POST",
      data: formValue,
      beforeSend: () => {
        $(".loader").show();
      },
      success: (value) => {
        $("#modal-delete").addClass("hidden");
        $("#modal-delete-id").val();
        $(".warehouse-list").html(value);
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

  $.ajax({
    url: BASE_URL + "warehouse/table",
    type: "GET",
    dataType: "html",
    beforeSend: () => {
      $(".loader").show();
    },
    success: (value) => {
      $(".warehouse-list").html(value);
    },
    complete: () => {
      $(".loader").hide();
    },
  });
});
