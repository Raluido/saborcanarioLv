$(document).ready(function () {
    var today = new Date();
    var day =
        today.getFullYear() +
        "/" +
        (today.getMonth() + 1) +
        "/" +
        today.getDate();
    $('input[name="daterange"]').daterangepicker({
        opens: "left",
        drops: "left",
        minDate: day,
        maxSpan: {
            days: 15,
        },
        locale: {
            format: "YYYY/MM/DD",
        },
    });
    $('input[name="daterange"]').on(
        "change.daterangepicker",
        function (ev, picker) {

            startDate = $('input[name="daterange"]').data(
                "daterangepicker"
            ).startDate;

            var d = new Date(startDate),
                month = "" + (d.getMonth() + 1),
                day = "" + d.getDate(),
                year = d.getFullYear();
            start_Date_fix = year + "-" + month + "-" + day;
            document.getElementById("start_Date").value = start_Date_fix;

            endDate = $('input[name="daterange"]').data(
                "daterangepicker"
            ).endDate;

            var d = new Date(endDate),
                month = "" + (d.getMonth() + 1),
                day = "" + d.getDate(),
                year = d.getFullYear();
            end_Date_fix = year + "-" + month + "-" + day;
            document.getElementById("end_Date").value = end_Date_fix;
        }
    );

    startDate = document.getElementById("start_Date");
    endDate = document.getElementById("end_Date");

});
