const baseURL = 'http://localhost/myPUPQC/'
const apiURL = 'http://localhost:3600/mypupqc/v1/'
// Token
const TOKEN = localStorage.getItem('TOKEN')

// AJAX Headers
const AJAX_HEADERS = {
	Accept: 'application/json',
	Authorization: `Bearer ${TOKEN}`,
}
