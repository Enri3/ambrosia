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