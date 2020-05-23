function showdetailLicense(license_id,row_no){
    alert("55555555");
    alert(license_id);
    console.log(license_id);

    $.ajax({
        url: 'php/php_all.php',
        type: 'POST',
        data: {
            license_id: license_id
        },
        success: function(response){
            response = JSON.parse(response);
            if(response.success){
                alert(license_id+"...");
            }
        }
    });
}

$(document).ready(function(){
    $(document).ready(function(){
        $("th.index").each(function(index){
            $(this).text(++index);
        });
        $("tbody.index").each(function(index){
            $(this).attr("id",++index);
        });
    });
});