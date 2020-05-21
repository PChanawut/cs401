$(document).ready(function(){
    $("th.index").each(function(index) {
        $(this).text(++index);
    });
    $("tbody.index").each(function(index) {
        $(this).attr("id",++index);
    });
})