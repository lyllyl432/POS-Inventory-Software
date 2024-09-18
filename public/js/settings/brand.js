$(document).ready(function () {
  $(".create").on("click", function () {
    $(".create-modal").show();
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
