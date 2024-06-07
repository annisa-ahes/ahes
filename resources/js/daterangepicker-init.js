import 'daterangepicker/daterangepicker.css';
import $ from 'jquery';
import moment from 'moment';
import 'daterangepicker';

$(document).ready(function() {
    $('input[name="daterange"]').daterangepicker({
        opens: 'left',
        startDate: moment(),
        endDate: moment().add(1, 'days'),
        minDate: moment(),
        isInvalidDate: function(date) {
            // Array of dates to disable (in Moment.js format)
            const disabledDates = [
                moment("2024-06-10"),
                moment("2024-06-15"),
                moment("2024-06-22"),
            ];

            // Check if the current date is in the disabledDates array
            return disabledDates.some(d => d.isSame(date, 'day'));
        }
    }, function(start, end, label) {
        console.log("A new date selection was made: " + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD'));
    });
});
