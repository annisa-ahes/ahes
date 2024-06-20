import 'daterangepicker/daterangepicker.css';
import $ from 'jquery';
import moment from 'moment';
import 'daterangepicker';

$(document).ready(function() {
    const fullyBookedDates = window.Laravel.fullyBookedDates.map(date => moment(date));
    console.log(fullyBookedDates);

    function isDateDisabled(date, checkInDate, isCheckOut = false) {
        if (isCheckOut && checkInDate) {
            const nextDayAfterCheckIn = checkInDate.clone().add(1, 'days');
            if (fullyBookedDates.some(d => d.isSame(nextDayAfterCheckIn, 'day'))) {
                // Allow check-out date to be the day after check-in if it is fully booked
                return !date.isSame(nextDayAfterCheckIn, 'day');
            }
        }
        return fullyBookedDates.some(d => d.isSame(date, 'day'));
    }

    $('#check-in').daterangepicker({
        singleDatePicker: true,
        startDate: moment(),
        minDate: moment(),
        autoApply: true,
        isInvalidDate: function(date) {
            return isDateDisabled(date, null, false);
        },
        locale: {
            format: 'MM/DD/YYYY'
        },
    });

    $('#check-out').daterangepicker({
        singleDatePicker: true,
        startDate: moment().add(1, 'days'),
        minDate: moment().add(1, 'days'),
        autoApply: true,
        isInvalidDate: function(date) {
            const checkInDate = $('#check-in').data('daterangepicker').startDate;
            return isDateDisabled(date, checkInDate, true);
        },
        locale: {
            format: 'MM/DD/YYYY'
        },
    });

    function getEarliestDisabledDateAfterCheckIn(checkInDate) {
        for (const date of fullyBookedDates) {
            const bookedDate = moment(date);
            if (bookedDate.isAfter(checkInDate)) {
                return bookedDate;
            }
        }
        return null;
    }

    $('#check-in').on('apply.daterangepicker', function(ev, picker) {
        const checkInDate = picker.startDate;
        const nextDayAfterCheckIn = checkInDate.clone().add(1, 'days');

        if (fullyBookedDates.includes(nextDayAfterCheckIn.format('YYYY-MM-DD'))) {
            $('#check-out').daterangepicker({
                singleDatePicker: true,
                startDate: nextDayAfterCheckIn,
                minDate: nextDayAfterCheckIn,
                maxDate: nextDayAfterCheckIn,
                autoApply: true,
                locale: {
                    format: 'MM/DD/YYYY'
                }
            });
        } else {
            $('#check-out').daterangepicker({
                singleDatePicker: true,
                startDate: nextDayAfterCheckIn,
                minDate: nextDayAfterCheckIn,
                maxDate: getEarliestDisabledDateAfterCheckIn(checkInDate),
                autoApply: true,
                // isInvalidDate: function(date) {
                //     return isDateDisabled(date, checkInDate, true);
                // },
                locale: {
                    format: 'MM/DD/YYYY'
                }
            });
        }
    });

    $('input[name="daterange"]').daterangepicker({
        opens: 'left',
        startDate: moment(),
        endDate: moment().add(1, 'days'),
        minDate: moment(),
        isInvalidDate: function(date) {
            // Array of dates to disable (in Moment.js format)
            // const disabledDates = [
            //     moment("2024-06-10"),
            //     moment("2024-06-15"),
            //     moment("2024-06-22"),
            // ];

            // Check if the current date is in the disabledDates array
            // return disabledDates.some(d => d.isSame(date, 'day'));
            return fullyBookedDates.some(d => d.isSame(date, 'day'));
        }
    }, function(start, end, label) {
        console.log("A new date selection was made: " + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD'));
    });
});
