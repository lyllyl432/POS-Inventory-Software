$(document).ready(function () {
  $(".create").on("click", function () {
    $(".create-modal").show();
  });
  //show update modal
  $(document).on("click", ".btn-update-category", function () {
    $(".update-modal").show();
    const value = $(this).siblings("input").val();
    $("#id").val(value);
    const tr = $(this).closest("tr");
    const categoryCode = tr.children("td:eq(0)").text();
    const categoryName = tr.children("td:eq(1)").text();

    $("#update-category-code").val($.trim(categoryCode));
    $("#update-category-name").val($.trim(categoryName));
  });
  //create category
  $("#create-category").on("submit", function (e) {
    e.preventDefault();
    var formData = $(this).serialize();
    $.ajax({
      url: BASE_URL + "create-category", // URL to the upload route
      method: "POST",
      data: formData,
      dataType: "json",
      success: function (response) {
        $(".create-modal").hide();
        if (response.message === "error") {
          $(".category-list").html(response.value);
          $(".form-error").show();
          setTimeout(function () {
            $(".form-error").hide("slow");
          }, 5000);
        } else if (response.message === "success") {
          $(".form-create-success").show();
          setTimeout(function () {
            $(".form-create-success").hide("slow");
          }, 5000);
          $(".category-list").html(response.value);
        }
      },
    });
  });
  //update category
  $("#update-category").on("submit", function (e) {
    e.preventDefault();
    var formData = $(this).serialize();
    $.ajax({
      url: BASE_URL + "update-category", // URL to the upload route
      method: "POST",
      data: formData,
      dataType: "json",
      success: function (response) {
        $(".update-modal").hide();
        if (response.message === "error") {
          $(".category-list").html(response.value);
          $(".form-error").show();
          setTimeout(function () {
            $(".form-error").hide("slow");
          }, 5000);
        } else if (response.message === "success") {
          $(".form-update-success").show();
          setTimeout(function () {
            $(".form-update-success").hide("slow");
          }, 5000);
          $(".category-list").html(response.value);
        }
      },
    });
  });
  //show delete modal
  $(document).on("click", ".btn-delete-category", function (e) {
    e.preventDefault();
    $("#modal-delete").addClass("flex").removeClass("hidden");
    $("#modal-delete-id").val($(this).siblings("input").val());
  });
  //handle delete unit
  $("#delete").on("submit", function (e) {
    e.preventDefault();
    const formValue = $(this).serialize();
    $.ajax({
      url: BASE_URL + "delete-category",
      type: "POST",
      data: formValue,
      beforeSend: () => {
        $(".loader").show();
      },
      success: (value) => {
        $("#modal-delete").addClass("hidden");
        $("#modal-delete-id").val();
        $(".category-list").html(value);
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
    url: BASE_URL + "category/table",
    type: "GET",
    dataType: "html",
    beforeSend: () => {
      $(".loader").show();
    },
    success: (value) => {
      $(".category-list").html(value);
    },
    complete: () => {
      $(".loader").hide();
    },
  });
});
