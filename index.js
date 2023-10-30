$(document).ready(function () {

    let $qty_up = $(".qty .qty-up");
    let $qty_down = $(".qty .qty-down");
    let $deal_price = $("#deal-price");

    $qty_up.click(function (e) {

        let $input = $(`.qty_input[data-id='${$(this).data("id")}']`);
        let $price = $(`.product_price[data-id='${$(this).data("id")}']`);

        $.ajax({
            url: "include/ajax.php", type: "post", data: { itemid: $(this).data("id") }, success: function (result) {
                let obj = JSON.parse(result);
                let item_price = obj[0]['Price'];

                if ($input.val() >= 1) {
                    $input.val(function (i, oldval) {
                        return ++oldval;
                    });

                    $price.text(parseInt(item_price * $input.val()).toFixed(2));

                    let subtotal = parseInt($deal_price.text()) + parseInt(item_price);
                    $deal_price.text(subtotal.toFixed(2));
                    $("#price_price").val(subtotal.toFixed(2));


                }

            }
        });


    });


    $qty_down.click(function (e) {

        let $input = $(`.qty_input[data-id='${$(this).data("id")}']`);
        let $price = $(`.product_price[data-id='${$(this).data("id")}']`);

        $.ajax({
            url: "include/ajax.php", type: 'post', data: { itemid: $(this).data("id") }, success: function (result) {
                let obj = JSON.parse(result);
                let item_price = obj[0]['Price'];

                if ($input.val() > 1 && $input.val() <= 10) {
                    $input.val(function (i, oldval) {
                        return --oldval;
                    });


                    $price.text(parseInt(item_price * $input.val()).toFixed(2));


                    let subtotal = parseInt($deal_price.text()) - parseInt(item_price);
                    $deal_price.text(subtotal.toFixed(2));
                    $("#price_price").val(subtotal.toFixed(2));

                }

            }
        });
    });


    let $qty_up1 = $(".qty1 .qty-up1");
    let $qty_down1 = $(".qty1 .qty-down1");

    $qty_up1.click(function (e) {

        let $input = $(`.qty_input1[data-id='${$(this).data("id")}']`);
        let $price = $(`.product_price1[data-id='${$(this).data("id")}']`);

        $.ajax({
            url: "include/ajax.php", type: "post", data: { itemid1: $(this).data("id") }, success: function (result) {
                let obj = JSON.parse(result);
                let item_price = obj[0]['menu_price'];

                if ($input.val() >= 1) {
                    $input.val(function (i, oldval) {
                        return ++oldval;
                    });


                    $price.text(parseInt(item_price * $input.val()).toFixed(2));

                    let subtotal = parseInt($deal_price.text()) + parseInt(item_price);
                    $deal_price.text(subtotal.toFixed(2));
                    $("#price_price").val(subtotal.toFixed(2));
                }

            }
        }); //closing ajax

    });

    $qty_down1.click(function (e) {

        let $input = $(`.qty_input1[data-id='${$(this).data("id")}']`);
        let $price = $(`.product_price1[data-id='${$(this).data("id")}']`);

        // change product price using ajax call
        $.ajax({
            url: "include/ajax.php", type: 'post', data: { itemid1: $(this).data("id") }, success: function (result) {
                let obj = JSON.parse(result);
                let item_price = obj[0]['menu_price'];

                if ($input.val() > 1 && $input.val() <= 10) {
                    $input.val(function (i, oldval) {
                        return --oldval;
                    });


                    $price.text(parseInt(item_price * $input.val()).toFixed(2));

                    // set subtotal price
                    let subtotal = parseInt($deal_price.text()) - parseInt(item_price);
                    $deal_price.text(subtotal.toFixed(2));
                    $("#price_price").val(subtotal.toFixed(2));
                    

                }

            }
        });
    });

});

$('#button').click(function () {
    var price = getTxtValue;
    $.ajax({
        url: 'Done.php',
        data: 'price=' + price, success: function (data) {
            $('#price_price').html(data);
        }
    })
});