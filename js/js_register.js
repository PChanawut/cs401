$("#customRadioInline1").click(function() {
    $("#main_register_person").fadeIn(250);
    $("#main_register_company").fadeOut(0);
});
$("#customRadioInline2").click(function() {
    $("#main_register_person").fadeOut(0);
    $("#main_register_company").fadeIn(250);
});
$.Thailand({
    database: './js/jquery.Thailand.js/database/db.json',

    $district: $('#person-district'),
    $amphoe: $('#person-amphoe'),
    $province: $('#person-province'),
    $zipcode: $('#person-zipcode'),
});