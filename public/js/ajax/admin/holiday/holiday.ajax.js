$(function () {
	viewAllHolidays()

	// get the values in the form
	$('#addHolidayForm').on('submit', function (e) {
		e.preventDefault() // prevent page refresh
		// pass data to API for updating of student's info
		addHolidayAJAX()
	})
})

viewAllHolidays = () => {}

addHolidayAJAX = () => {}
