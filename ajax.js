$(document).ready(function() {
    $("#btn").click(function() {
        var price =$("#price").val();
        var city =$("#city").val();
        var availability =$("#availability").val();
        var square_meter=$("#square_meter").val();

        $.post("actions/insert.php", {
            price:price,
            city:city,
            availability:availability,
            square_meter:square_meter
        },
        function(data,status){

        });
    });
});

