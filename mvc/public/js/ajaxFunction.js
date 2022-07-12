function ajaxRequest() {
    $.ajax({
        url: "/", //Current url
        type: "GET",
        data: {
            name: 'simpletine'
        },
        dataType: 'json',
        success: function(response) {
            $('.result').html(response);
        }
    });
}