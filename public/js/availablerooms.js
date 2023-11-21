// const { start } = require("@popperjs/core");

$(window).on("load", function () {
    let today = new Date();
    let day =
        today.getFullYear() +
        "/" +
        (today.getMonth()) +
        "/" +
        today.getDate() + 1;
    let tomorrow =
        today.getFullYear() +
        "/" +
        (today.getMonth() + 1) +
        "/" +
        today.getDate() + 1;
    $('input[name="daterange"]').daterangepicker({
        opens: "left",
        drops: "left",
        startDate: moment(),
        minDate: moment().add(1, 'day'),
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
    daterange = document.getElementById("daterange").value;
    document.getElementById("start_Date").value = daterange.split(' - ')[0];
    document.getElementById("end_Date").value = daterange.split(' - ')[1];
});
