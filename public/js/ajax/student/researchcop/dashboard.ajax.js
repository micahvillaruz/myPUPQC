$(function () {
	fetchResearch()
})

fetchResearch = () => {
    $.ajax({
      url: apiURL + 'researchcop/dashboard/research',
      type: 'GET',
      dataType: 'json',
      success: (result) => {
        const researchData = result.data;
        
      },
    });
  }
  