$(document).ready(function () {
  console.log(BASE_URL);
  $(document).on("click", ".btn-update-product", function () {
    $(".update-modal").show();
    //get value from closest tr
    const tr = $(this).closest("tr");
    const productCode = tr.children("td:eq(0)").text();
    const productName = tr.children("td:eq(1)").text();
    const category = tr.children("td:eq(2)").text();
    const brand = tr.children("td:eq(3)").text();
    const barcodeSymbology = tr.children("td:eq(4)").text();
    const productCost = tr.children("td:eq(5)").text();
    const productPrice = tr.children("td:eq(6)").text();
    const productUnit = tr.children("td:eq(7)").text();
    const salesUnit = tr.children("td:eq(8)").text();
    const purchaseUnit = tr.children("td:eq(9)").text();
    const stocksAlert = tr.children("td:eq(10)").text();
    const orderTax = tr.children("td:eq(11)").text();
    const taxType = tr.children("td:eq(12)").text();
    $("#edit-product-code").val($.trim(productCode));
    $("#update-product-code").val($.trim(productCode));
    $("#update-product-name").val($.trim(productName));
    $("#update-category").val($.trim(category)).change();
    $("#update-brand").val($.trim(brand)).change();
    $("#update-barcode-symbology").val($.trim(barcodeSymbology));
    $("#update-product-cost").val($.trim(productCost));
    $("#update-product-price").val($.trim(productPrice));
    $("#update-product-unit").val($.trim(productUnit)).change();
    $("#update-sales-unit").val($.trim(salesUnit));
    $("#update-purchase-unit").val($.trim(purchaseUnit)).change();
    $("#update-stocks-alert").val($.trim(stocksAlert));
    $("#update-order-tax").val($.trim(orderTax));
    $("#update-tax-type").val($.trim(taxType)).change();
  });
  $(document).on("submit", "#update-modal", function (e) {
    e.preventDefault();
    const formValue = $(this).serialize();

    $.ajax({
      url: BASE_URL + "update-product",
      type: "POST",
      dataType: "json",
      data: formValue,
      success: (response) => {
        $(".update-modal").hide();
        if (response.message === "error") {
          $(".form-error").show();
          setTimeout(function () {
            $(".form-error").hide("slow");
          }, 5000);
        } else if (response.message === "success") {
          $(".form-success").show();
          $(".product-list").html(response.value);
          setTimeout(function () {
            $(".form-success").hide("slow");
          }, 5000);
        }
      },
    });
  });
  $(document).on("submit", "#delete", function (e) {
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
        $("#modal-delete").addClass("hidden");
        $("#modal-delete-id").val();
        $(".product-list").html(value);
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
  $(document).on("click", ".btn-delete-product", function (e) {
    e.preventDefault();
    $("#modal-delete").addClass("flex").removeClass("hidden");
    $("#modal-delete-id").val($(this).siblings(".delete-product-code").val());
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
