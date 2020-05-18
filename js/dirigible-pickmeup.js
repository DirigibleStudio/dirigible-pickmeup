jQuery(document).ready(function ($) {
  $('ul#shipping_method input').each(function () {
    var $this = $(this);
    if ($this.val().indexOf("local_pickup") != -1) {
      if ($this.prop('checked')) {
        hideShippingFields();
      }
    }
  });

  $(document).on('change', 'ul#shipping_method input', function () {
    var $this = $(this);
    if ($this.val().indexOf("local_pickup") != -1) {
      hideShippingFields();
    } else {
      showShippingFields();
    }
  });

  function hideShippingFields() {
    var $col1 = $('.col-1');
    $('#ship-to-different-address-checkbox').prop('checked', false);
    $('.woocommerce-shipping-fields').closest('.col-2').hide();
    $('.woocommerce-additional-fields').appendTo($col1);
    $col1.css({
      marginLeft: "auto",
      marginRight: "auto"
    });
  }

  function showShippingFields() {
    $col2 = $('.woocommerce-shipping-fields').closest('.col-2');
    var $col1 = $('.col-1');
    $('.woocommerce-additional-fields').appendTo($col2);
    $col2.show();
    $col1.css({
      marginLeft: "",
      marginRight: ""
    });
  }
});