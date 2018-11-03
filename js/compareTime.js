/*

// define the banner to show/hide
var banner = document.getElementsByClassName('banner')[0];

// define variable for current time and convert to timestamp
var t = new Date();
var currentTime = t.getTime();

function toTimestamp(date) {
    return Date.UTC(
        date.getFullYear(),
        date.getMonth(),
        date.getDate(),
        date.getHours(),
        date.getMinutes(),
        date.getSeconds(),
        date.getMilliseconds()
    );
}
toTimestamp(t);

// define variable for time to show banner and convert to timestamp
var s = new Date("2018-11-03T12:00:00Z");
var startTime = s.getTime();
// should be 1541246400000

// define variable for time to re-hide banner [after event] and convert to timestamp (optional)
var e = new Date("2018-11-03T23:59:59Z");
var endTime = e.getTime();
// should be 1541289599000

// if current time > start time AND <= end time then show the banner
if (currentTime > startTime	&& currentTime <= endTime) {..........}

// else if current time > end time then hide the banner
else if (currentTime > endTime) {..........}

// define function
function compareTime() {..........}

// run function on page load
window.onload = function() {
  compareTime();
};
document.addEventListener("DOMContentLoaded", function(event) {
  compareTime();
});

*/

function displayMaintenance() {
	var currentTime = new Date();
	var banner = document.getElementsByClassName('banner')[0];
	// Converts currentTime (client local time) to UTC
	function toUTC(date) {
			return Date.UTC(
					date.getFullYear(),
					date.getMonth(),
					date.getDate(),
					date.getHours(),
					date.getMinutes(),
					date.getSeconds(),
					date.getMilliseconds()
			);
	}
	toUTC(currentTime);

	var startTime = new Date("2018-11-01T20:12:00Z");
	var endTime = new Date("2018-11-01T20:15:00Z");

	if (currentTime.getTime() > startTime.getTime()
			&&
			currentTime.getTime() <= endTime.getTime()) {
				$('.banner').show();
	} else if (currentTime.getTime() > endTime.getTime) {
			$('.banner').hide();
	}
}

// Invoke displayMaintenance()
displayMaintenance();
