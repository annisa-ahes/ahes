import 'daterangepicker/daterangepicker.css';
import $ from 'jquery';
import moment from 'moment';
import 'daterangepicker';

$(document).ready(function() {
    $('input[name="daterange"]').daterangepicker({
        opens: 'left'
    }, function(start, end, label) {
        console.log("A new date selection was made: " + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD'));
    });
});
