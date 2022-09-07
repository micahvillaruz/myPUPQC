// * prod = production, dev = development
const webEnv = 'dev'
const apiEnv = 'prod'

const baseURL = webEnv === 'prod' ? 'https://www.mypupqc.live/' : 'http://localhost/myPUPQC/'
const apiURL =
	apiEnv === 'prod'
		? 'https://mypupqc-api.azurewebsites.net/mypupqc/v1/'
		: 'http://localhost:3600/mypupqc/v1/'
// Token
const TOKEN = localStorage.getItem('TOKEN')

// AJAX Headers
const AJAX_HEADERS = {
	Accept: 'application/json',
	Authorization: `Bearer ${TOKEN}`,
}

console.log(webEnv)
console.log(apiEnv)
