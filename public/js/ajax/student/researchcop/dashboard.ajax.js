$(function () {
  fetchResearch()
})

fetchResearch = () => {
    $.ajax({
      url: apiURL + 'researchcop/dashboard/allresearch',
      type: 'GET',
      dataType: 'json',
      headers: AJAX_HEADERS,
      success: (result) => {
        const randomData = result.data;

        let display = $('#research_display')

        if (randomData.length > 0) {
          randomData.forEach((researchData) => {
            let showViewButton = researchData.research_pdf != null;
            let categ = researchData.research_category === 'Research';
            let rtype = researchData.research_type === 'Copyrighted';

            let researchFormat = `
              <div class="card-body p-4"> 
                <div class="tab-content text-muted">
                  <div class="tab-pane active" id="all" role="tabpanel">
                    <div class="pb-3">
                      <h5 class="text-primary mb-1">${researchData.research_title}</h5>
                      <p class="text-success mb-2">${researchData.research_author}</p>
                      <p class="text-dark mb-2" style="width: 1000px; white-space: nowrap; overflow: hidden; text-overflow: ellipsis;">${researchData.research_abstract}</p>
                      <p class="text-primary mb-2">
                      ${categ
                        ? `<span class="badge rounded-pill bg-success">Research</span>`
                        : `<span class="badge rounded-pill bg-info">Capstone</span>`}
                        ${rtype
                          ? `<span class="badge rounded-pill bg-success">Copyrighted</span>`
                          : `<span class="badge rounded-pill bg-danger">Non-Copyrighted</span>`}
                        </p>
                      <div>
                          <button type="button" class="btn btn-info btn-icon waves-effect waves-light" onclick="viewResearchRecord('${researchData.research_id}')" data-bs-toggle="modal" data-bs-target="#viewResearchInfo"><i class="ri-eye-fill fs-5"></i></button>
                          ${showViewButton
                          ? `<button type="button" class="btn btn-success btn-label waves-effect waves-light" onclick="viewResearchRecord('${researchData.research_id}')" data-bs-toggle="modal" data-bs-target="#research_document_preview"><i class="ri-file-line label-icon align-middle fs-16 me-2"></i>View</button>`
                          : ''
                          }
                      </div>
                    </div>
                    <div class="border border-dashed"><p class="text-dark mb-2">${researchData.research_program}</p></div>
                  </div>
                </div>
              </div>
            `;
            display.append(researchFormat);
        });
      } else {
        // If there are no research records, display a message or handle the empty case as needed
        display.append('No research records found.');
      }
    },
    error: () => {
      // Handle AJAX error here, if any
      console.error('Error in fetching research records.');
    },
  });
};

search = () => {
      const query = $('#searchQuery').val();
      let display = $('#research_display')
      display.empty()
      
      if (!query) {
        $('#search_result').html('<h5 class="fs-16 fw-semibold text-center mb-0">Search query is empty.</h5>');
        return;
      }
      $('#search_result').html(`
      <h5 class="fs-16 fw-semibold text-center mb-0">Loading...</h5>
      `)

      data = {query: $('#searchQuery').val()}

      // Perform the search and get the results using AJAX
      $.ajax({
        url: apiURL + `researchcop/dashboard/research`,
        type: 'POST',
        data: data,
        dataType: 'json',
        headers: AJAX_HEADERS,
        success: (result) => {
          const randomData = result.data

        if (randomData.length > 0) {
          randomData.forEach((randomData) => {
            let showViewButton = randomData.research_pdf != null;
            let categ = randomData.research_category === 'Research';
            let rtype = randomData.research_type === 'Copyrighted';

            let researchFormat = `
              <div class="card-body p-4"> 
                <div class="tab-content text-muted">
                  <div class="tab-pane active" id="all" role="tabpanel">
                    <div class="pb-3">
                      <h5 class="text-primary mb-1">${randomData.research_title}</h5>
                      <p class="text-success mb-2">${randomData.research_author}</p>
                      <p class="text-dark mb-2" style="width: 1000px; white-space: nowrap; overflow: hidden; text-overflow: ellipsis;">${randomData.research_abstract}</p>
                      <p class="text-primary mb-2">
                      ${categ
                        ? `<span class="badge rounded-pill bg-success">Research</span>`
                        : `<span class="badge rounded-pill bg-info">Capstone</span>`}
                        ${rtype
                          ? `<span class="badge rounded-pill bg-success">Copyrighted</span>`
                          : `<span class="badge rounded-pill bg-danger">Non-Copyrighted</span>`}
                        </p>
                      <div>
                          <button type="button" class="btn btn-info btn-icon waves-effect waves-light" onclick="viewResearchRecord('${randomData.research_id}')" data-bs-toggle="modal" data-bs-target="#viewResearchInfo"><i class="ri-eye-fill fs-5"></i></button>
                          ${showViewButton
                          ? `<button type="button" class="btn btn-success btn-label waves-effect waves-light" onclick="viewResearchRecord('${randomData.research_id}')" data-bs-toggle="modal" data-bs-target="#research_document_preview"><i class="ri-file-line label-icon align-middle fs-16 me-2"></i>View</button>`
                          : ''
                          }
                      </div>
                    </div>
                    <div class="border border-dashed"><p class="text-dark mb-2">${randomData.research_program}</p></div>
                  </div>
                </div>
              </div>
            `;
            display.append(researchFormat);
      
        });
        $('#search_result').html(`
      <h5 class="fs-16 fw-semibold text-center mb-0">Showing results for "<span class="text-primary fw-medium fst-italic">${query}</span> "</h5>
      `)
      } else {
        // If there are no research records, display a message or handle the empty case as needed
        $('#search_result').html(`
      <h5 class="fs-16 fw-semibold text-center mb-0">No Results Found.</h5>
      `)
      }
    },
    error: () => {
      // Handle AJAX error here, if any
      console.error('Error in fetching research records.');
        },
      });
}

// View Research Record Modal
viewResearchRecord = (research_id) => {
	$.ajax({
		type: 'GET',
		cache: false,
		url: apiURL + `researchcop/my-submissions/${research_id}`,
		headers: AJAX_HEADERS,
		dataType: 'json',
		success: (result) => {
			const researchRecord = result.data
				$('#view_research_title').html(researchRecord.research_title)
				$('#view_research_author').html(researchRecord.research_author)
				$('#view_research_co_author').html(researchRecord.research_co_author)
				$('#view_research_date_accomplished').html(researchRecord.research_date_accomplished)
        $('#view_research_adviser').html(researchRecord.research_adviser)
				$('#view_research_program').html(researchRecord.research_program)
				$('#view_research_type').html(researchRecord.research_type)
				$('#view_research_abstract').html(researchRecord.research_abstract)
				$('#view_research_category').html(researchRecord.research_category)
				$('#display_research_title').html(researchRecord.research_title)
				$('#research_id').val(researchRecord.research_id)

        $('#hid_research_id').val(researchRecord.research_id)
        $('#hid_research_title').html(researchRecord.research_title)
        $('#document_preview').attr('src', researchRecord.research_pdf)

		},
	})
}