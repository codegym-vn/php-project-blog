
$(document).ready(function () {
    $('#registration').submit(function (e) {
        e.preventDefault();
        var title = $("#text-title").val();
        var desc = $("#desc-select").val();
        var content = $("#content-select").val();
        $(".error").remove();
        if(title.length < 1) {
            $("#text-title").after('<span class="error">This field is required </span>')
        }
        if(desc.length < 3) {
            $("#desc-select").after('<span class="error">This field is required</span>')
        }
        if(content.length < 1) {
            $("#content-select").after('<span class="error">This field is required</span>')
        }
    });
});
