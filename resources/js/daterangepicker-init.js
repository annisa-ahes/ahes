import 'daterangepicker/daterangepicker.css';
import $ from 'jquery';
import moment from 'moment';
import 'daterangepicker';

$(document).ready(function() {
    const fullyBookedDates = window.Laravel.fullyBookedDates.map(date => moment(date));
    const availableRoomCounts = window.Laravel.availableRoomCounts;

    let dateRangeSelector = $('input[name="daterange"]');
    dateRangeSelector.daterangepicker({
        opens: 'left',
        startDate: moment(),
        endDate: moment().add(1, 'days'),
        minDate: moment(),
        autoApply: true,
        isInvalidDate: function(date) {
            return fullyBookedDates.some(d => d.isSame(date, 'day'));
        }
    }, function(start, end, label) {
        console.log(start)
        // updateRoomOptions(start, end);
    });

    // function updateRoomOptions(start, end) {
    //     const startDate = start.format('YYYY-MM-DD');
    //     const endDate = end.format('YYYY-MM-DD');
    //     console.log(startDate);
    //     console.log(endDate);
    //     console.log(availableRoomCounts);
    //     let totalAvailableRooms = 8;
    //
    //     for (let m = moment(startDate); m.isBefore(endDate); m.add(1, 'days')) {
    //         const date = m.format('YYYY-MM-DD');
    //         if (availableRoomCounts[date] !== undefined) {
    //             totalAvailableRooms = Math.min(totalAvailableRooms, availableRoomCounts[date]);
    //         }
    //     }
    //
    //     // Populate room select options
    //     const roomSelect = $('#room');
    //     roomSelect.empty();
    //     for (let i = 1; i <= totalAvailableRooms; i++) {
    //         roomSelect.append(new Option(i + ' Room', i));
    //     }
    // }

    // Initial population of room options
    // updateRoomOptions(moment(), moment().add(1, 'days'));
});
