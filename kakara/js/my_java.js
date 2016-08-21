
$.post( $("#myForm").attr("action"),
    $("#myForm :input").serializeArray(),
    function(event) {

        event.preventDefault();

}).done(function(info) {
    $("#ack").empty().html(info);
});