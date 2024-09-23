$(document).ready(function () {
  $(document).on("click", ".btn-update-brand", function () {
    $(".update-modal").show();
    const value = $(this).siblings("input").val();
    $("#brand-id").val(value);
    const tr = $(this).closest("tr");
    const brandImage = tr.children("td:eq(0)").children("img").attr("src");
    const brandName = tr.children("td:eq(1)").text();
    const brandDescription = tr.children("td:eq(2)").text();

    $("#update-brand-name").val($.trim(brandName));
    $("#update-brand-description").val($.trim(brandDescription));
    $("#recent_image_src").val(brandImage);
  });
  //show delete modal
  $(document).on("click", ".btn-delete-brand", function (e) {
    e.preventDefault();
    $("#modal-delete").addClass("flex").removeClass("hidden");
    $("#modal-delete-id").val($(this).siblings("input").val());
  });
  //handle delete unit
  $("#delete").on("submit", function (e) {
    e.preventDefault();
    const formValue = $(this).serialize();
    $.ajax({
      url: BASE_URL + "delete-brand",
      type: "POST",
      data: formValue,
      beforeSend: () => {
        $(".loader").show();
      },
      success: (value) => {
        $("#modal-delete").addClass("hidden");
        $("#modal-delete-id").val();
        $(".brand-list").html(value);
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
  $("#create-brand").on("submit", function (e) {
    e.preventDefault();
    var formData = new FormData(this);
    var fileInput = $("#create-brand-image")[0].files[0]; // Get the file input
    formData.append("userfile", fileInput); // Append the file to the FormData object
    $.ajax({
      url: BASE_URL + "create-brand", // URL to the upload route
      method: "POST",
      data: formData,
      contentType: false, // Important for file uploads
      processData: false, // Important for file uploads
      dataType: "json",
      success: function (response) {
        $(".create-modal").hide();
        if (response.message === "error") {
          $(".brand-list").html(response.value);
          $(".form-error").show();
          setTimeout(function () {
            $(".form-error").hide("slow");
          }, 5000);
        } else if (response.message === "success") {
          $(".form-create-success").show();
          setTimeout(function () {
            $(".form-create-success").hide("slow");
          }, 5000);
          $(".brand-list").html(response.value);
        }
      },
    });
  });

  //update
  $("#update-brand").on("submit", function (e) {
    e.preventDefault();
    var formData = new FormData(this);
    var fileInput = $("#update-brand-image")[0].files[0]; // Get the file input
    formData.append("userfile", fileInput); // Append the file to the FormData object
    $.ajax({
      url: BASE_URL + "update-brand", // URL to the upload route
      method: "POST",
      data: formData,
      contentType: false, // Important for file uploads
      processData: false, // Important for file uploads
      dataType: "json",
      success: function (response) {
        $(".update-modal").hide();
        if (response.message === "error") {
          $(".brand-list").html(response.value);
          $(".form-error").show();
          setTimeout(function () {
            $(".form-error").hide("slow");
          }, 5000);
        } else if (response.message === "success") {
          $(".form-update-success").show();
          setTimeout(function () {
            $(".form-update-success").hide("slow");
          }, 5000);
          $(".brand-list").html(response.value);
        }
      },
    });
  });

  //load brand table template
  $.ajax({
    url: BASE_URL + "brand/table",
    type: "GET",
    dataType: "html",
    beforeSend: () => {
      $(".loader").show();
    },
    success: (value) => {
      $(".brand-list").html(value);
    },
    complete: () => {
      $(".loader").hide();
    },
  });
});
