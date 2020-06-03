function showdetailLicense(license_id,row_no){
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
$(document).ready(function() {
    $(document).ready(function(){
        $("th.index").each(function(index) {
            $(this).text(++index);
        });
        $("tbody.index").each(function(index) {
            $(this).attr("id",++index);
        });
    })
});
$('#show_detail').click(function() {
    $('#detail_license').modal('show');
});