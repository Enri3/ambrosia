$(document).ready(function () {
    $(".boton").click(function() {
        $(".ver").hide();
        $(".boton").addClass("w3-red").removeClass("w3-white");
        $("#div_" + this.id).show("slow");
        $(this).addClass("w3-white").removeClass("w3-red");    
    });

$("#registro").submit(function(e) {
        e.preventDefault();
        var data = new FormData(this);
        $.ajax({
            url: 'accederbase.php',
            type: 'POST',
            data: data,
            contentType: false,
            processData: false,
            success: function(res) {
                if (res == -1)
                    alert('Cliente ya registrado');
                $(':input').val('');
            }
        });
    });