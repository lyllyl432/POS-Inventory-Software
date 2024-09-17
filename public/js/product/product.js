$(document).ready(function () {
  console.log(BASE_URL);
  $(document).on("submit", ".update-product", function (e) {
    e.preventDefault();
    $(".modal").css("display", "block");
    const value = $(this).find("input").val();
    $("#edit-product-code").val(value);
  });
  $(document).on("submit", "#update-modal", function (e) {
    e.preventDefault();
    const formValue = $(this).serialize();
    $.ajax({
      url: BASE_URL + "update-product",
      type: "POST",
      dataType: "html",
      data: formValue,
      success: (value) => {
        $("#edit-product-code").val("");
        $(".modal").hide();
        $(".product-list").html(value);
      },
    });
  });
  $(document).on("submit", ".delete-product", function (e) {
    e.preventDefault();
    const productCode = $(this).serialize();
    $.ajax({
      url: BASE_URL + "delete-product",
      type: "POST",
      dataType: "html",
      data: productCode,
      beforeSend: () => {
        $(".loader").show();
      },
      success: (value) => {
        $(".product-list").html(value);
      },
      complete: () => {
        $(".loader").hide();
      },
    });
  });

  $.ajax({
    url: BASE_URL + "product/table",
    type: "GET",
    dataType: "html",
    beforeSend: () => {
      $(".loader").show();
    },
    success: (value) => {
      $(".product-list").html(value);
    },
    complete: () => {
      $(".loader").hide();
    },
  });
  $("#create-unit").on("click", function () {
    $(".modal").show();
  });
});
