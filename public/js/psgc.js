const regionSelect = document.getElementById('region')
const provinceSelect = document.getElementById('province')
const municipalitySelect = document.getElementById('municipality')
const barangaySelect = document.getElementById('barangay')

const apiEndpoint = 'https://psgc.gitlab.io/api'

let isNCR = false

fetch(`${apiEndpoint}/regions`)
	.then((response) => response.json())
	.then((regions) => {
		regions.forEach((region) => {
			const option = document.createElement('option')
			option.value = region.code
			option.textContent = region.name
			regionSelect.appendChild(option)
		})
	})

regionSelect.addEventListener('change', () => {
	provinceSelect.innerHTML = '<option value="">Select Province</option>'
	municipalitySelect.innerHTML = '<option value="">Select City/Municipality</option>'
	barangaySelect.innerHTML = '<option value="">Select Barangay</option>'

	const selectedRegionCode = regionSelect.value

	if (selectedRegionCode == '130000000') {
		provinceSelect.innerHTML = '<option value="130000000">Metro Manila</option>'

		fetch(`${apiEndpoint}/regions/130000000/cities`)
			.then((response) => response.json())
			.then((cities) => {
				cities.forEach((city) => {
					const option = document.createElement('option')
					option.value = city.code
					option.textContent = city.name
					municipalitySelect.appendChild(option)
				})
			})

		isNCR = true
	} else {
		fetch(`${apiEndpoint}/regions/${selectedRegionCode}/provinces`)
			.then((response) => response.json())
			.then((provinces) => {
				provinces.forEach((province) => {
					const option = document.createElement('option')
					option.value = province.code
					option.textContent = province.name
					provinceSelect.appendChild(option)
				})
			})
		isNCR = false
	}
})

provinceSelect.addEventListener('change', () => {
	municipalitySelect.innerHTML = '<option value="">Select City/Municipality</option>'
	barangaySelect.innerHTML = '<option value="">Select Barangay</option>'

	const selectedProvinceCode = provinceSelect.value

	fetch(`${apiEndpoint}/provinces/${selectedProvinceCode}/municipalities`)
		.then((response) => response.json())
		.then((municipalities) => {
			municipalities.forEach((municipality) => {
				const option = document.createElement('option')
				option.value = municipality.code
				option.textContent = municipality.name
				municipalitySelect.appendChild(option)
			})
		})
})

municipalitySelect.addEventListener('change', () => {
	barangaySelect.innerHTML = '<option value="">Select Barangay</option>'

	const selectedMunicipalityCode = municipalitySelect.value

	if (!isNCR) {
		fetch(`${apiEndpoint}/municipalities/${selectedMunicipalityCode}/barangays`)
			.then((response) => response.json())
			.then((barangays) => {
				barangays.forEach((barangay) => {
					const option = document.createElement('option')
					option.value = barangay.code
					option.textContent = barangay.name
					barangaySelect.appendChild(option)
				})
			})
	} else {
		fetch(`${apiEndpoint}/cities/${selectedMunicipalityCode}/barangays`)
			.then((response) => response.json())
			.then((barangays) => {
				barangays.forEach((barangay) => {
					const option = document.createElement('option')
					option.value = barangay.code
					option.textContent = barangay.name
					barangaySelect.appendChild(option)
				})
			})
	}
})
