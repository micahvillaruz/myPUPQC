$(function () {
	loadResearchTable()
    
})
// Load  research datatables
loadResearchTable = () => {
	const dt = $('#research-author-datatable')

	$.ajaxSetup({
		headers: AJAX_HEADERS,
	})

	if (dt.length) {
		dt.DataTable({
			dom:
				"<'row'<'col-xl-12 mb-2'B>>" +
				"<'row'<'col-sm-12 col-md-6'l><'col-sm-12 col-md-6'f>>" +
				"<'row'<'col-sm-12'tr>>" +
				"<'row'<'col-sm-12 col-md-5'i><'col-sm-12 col-md-7'p>>",
			buttons: [
				
			],
			bDestroy: true,
			ajax: {
				url: apiURL + 'researchcop/author/allresearch',
				type: 'GET',
				ContentType: 'application/x-www-form-urlencoded',
			},
			columns: [
				// Title
				{
					data: null,
					width: '40%',
					class: 'text-center',
					render: (data) => {
						const rTitle = data.research_title
						return `<div style="width: 400px; white-space: nowrap; overflow-y: auto;">${rTitle}</div>`
					},
				},

                // Author
				{
					data: null,
                    width: '10%',
					class: 'text-center',
                    render: (data) => {
                    const rAuthor = data.research_author
                    return `<span class="badge rounded-pill bg-primary">${rAuthor}</span>`
                    },
				},

				// Co-Author
				{
					data: null,
					class: 'text-center',
					render: (data) => {

					},
				},


                // Actions
				{
					data: null,
					class: 'text-center',
					render: (data) => {
                        return `
                          <div class="dropdown d-inline-block">
                              <button type="button" class="btn btn-warning btn-icon waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#editCoAuthorModal" onclick="populateEditForm('${data.user_id}')"><i class="ri-pencil-fill fs-5"></i></button> 
                          </div>
                              `
					},
				},
				
			],
			order: [[0, 'asc']],
		})
	}
}