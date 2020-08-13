
var url =new URL(location.href);
var startTime = url.searchParams.get("start");
var endTime = url.searchParams.get("end");
if (startTime === null || startTime.length == 0){
    startTime = new Date();
}
if (endTime === null || endTime.length == 0){
    endTime = new Date();
}
$('input[name="start"]').val(moment(startTime).format('YYYY-MM-DD'));
$('input[name="end"]').val(moment(endTime).format('YYYY-MM-DD'));
$('input[name="dates"]').daterangepicker(
    {
        startDate: moment(startTime).format('DD/MM/YYYY'),
        endDate: moment(endTime).format('DD/MM/YYYY'),
        locale: {
            format: 'DD/MM/YYYY'
        },
        ranges: {
            'Today': [moment(), moment()],
            'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
            'Last 7 Days': [moment().subtract(6, 'days'), moment()],
            'Last 30 Days': [moment().subtract(29, 'days'), moment()],
            'This Month': [moment().startOf('month'), moment().endOf('month')],
            'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
        }
    }
);
$('input[name="dates"]').on('apply.daterangepicker', function (ev, picker) {
    $('input[name="start"]').val(picker.startDate.format('YYYY-MM-DD'));
    $('input[name="end"]').val(picker.endDate.format('YYYY-MM-DD'));
    $('#filter_form').submit();
});

