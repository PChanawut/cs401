$('#type_license').submit(function(e){
    let typelicense = $("#licensetype").val();
    e.preventDefault();
    $.ajax({
        type: 'POST',
        url: 'php/php_license.php',
        data: {
            typelicense: typelicense
        },
        success: function(dataResult){
            var dataResult = JSON.parse(dataResult);
            if(dataResult.statusCode == 200){
                $('#typelicense').show();
            }
            else if(dataResult.statusCode == 201){
                alert("Error occured!");
            }
        }
    });
});