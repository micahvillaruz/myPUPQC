$(function() {
  $('#search_button').on('onclick', function (e) {

    const query = $('#searchQuery').val();
    $('#search_result').html(query)
	})
})

fetchResearch = () => {
    $.ajax({
      url: apiURL + 'researchcop/dashboard/allresearch',
      type: 'GET',
      dataType: 'json',
      success: (result) => {
        const researchData = result.data;
        
      },
    });
  }

search = () => {

      // Perform the search and get the results using AJAX
      $.ajax({
        url: `researchcop/dashboard/allresearch`,
        type: 'GET',
        dataType: 'json',
        success: (result) => {
          const searchResultsDiv = $('#research_display');
          searchResultsDiv.empty();

        },
        error: (err) => {
          console.error('Error during search:', err);
        },
      });
}
  