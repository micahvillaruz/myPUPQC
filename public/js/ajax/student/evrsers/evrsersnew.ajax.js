$(function() {

    loadFullName()

    $('#addNewReservation').on('submit', function(e) {
        e.preventDefault() // prevent page refresh
        addNewReservation()
    })

    // $('#updateStudentForm').on('submit', function (e) {
    // 	e.preventDefault() // prevent page refresh

    // 	// pass data to API for updating of student's info
    // 	updateStudentAJAX($('#edit_user_id').val())
    // })
})

loadFullName = () => {
    $.ajax({
        type: 'GET',
        url: apiURL + `student/info`,
        headers: AJAX_HEADERS,
        success: (result) => {
            const data = result.data
            const full_name = data.full_name
            console.log(full_name)
            $('input[name="full_name"]').val(full_name);
        },
        error: function() {},
    })
}