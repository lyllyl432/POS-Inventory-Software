$(document).ready(function () {
  const base = "http://localhost:8080/";
  function baseUrl(uri) {
    return base + uri;
  }
  $(document).on("submit", ".edit-product", function (e) {
    e.preventDefault();
    $(".modal").css("display", "block");
    const value = $(this).find("input").val();
    $("#edit-product-code").val(value);
  });
  $(document).on("submit", "#edit-modal", function (e) {
    e.preventDefault();
    const formValue = $(this).serialize();
    $.ajax({
      url: baseUrl("edit-product"),
      type: "POST",
      dataType: "html",
      data: formValue,
      success: (value) => {
        $("#edit-product-code").val("");
        $(".modal").css("display", "none");
        $(".product-list").html(value);
      },
    });
  });
  $(document).on("submit", ".delete-product", function (e) {
    e.preventDefault();
    const productCode = $(this).serialize();
    $.ajax({
      url: baseUrl("delete-product"),
      type: "POST",
      dataType: "html",
      data: productCode,
      success: (value) => {
        $(".product-list").html(value);
      },
    });
  });

  $.ajax({
    url: baseUrl("product/table"),
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
    $(".modal").css("display", "block");
  });
});
