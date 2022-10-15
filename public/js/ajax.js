$("#button1").click(function (event) {
    var idroom = document.getElementById("idroom").value;
    var guests = document.getElementById("guests").value;
    var board = document.getElementById("board").value;
    var startDate = document.getElementById("startDate").value;
    var endDate = document.getElementById("endDate").value;

    $.ajax({
        url:
            "/showRoom/calculatePrice/" +
            board +
            "/" +
            guests +
            "/" +
            idroom +
            "/" +
            startDate +
            "/" +
            endDate,
        type: "get",
        data: {},
        datatype: "json",
        success: function (data) {
            document.getElementById("total_amount").value = data;
        },
    });
});
