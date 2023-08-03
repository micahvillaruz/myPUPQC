$(function () {
	// register Image Preview plugin
	FilePond.registerPlugin(FilePondPluginImagePreview)

	const logoFileTypes = ['image/jpeg', 'image/png']

	pond1 = FilePond.create(document.querySelector('#logo-file'), {
		allowImagePreview: true,
		allowFileEncode: true,
		imagePreviewMaxHeight: 200,
		instantUpload: false,
		allowProcess: false,
		acceptedFileTypes: logoFileTypes,
		beforeAddFile: (file) => {
			if (!logoFileTypes.includes(file.fileType)) {
				Swal.fire({
					iconHtml: `<lord-icon src="https://cdn.lordicon.com/nduddlov.json" trigger="loop-on-hover" colors="outline:#f06548,primary:#ffffff,secondary:#f06548" style="width:100px;height:100px"></lord-icon>`,
					customClass: {
						icon: 'border-white',
					},
					title: 'Oops...',
					text: `Only JPG and PNG files are allowed! The one you are uploading is a: ${file.fileType}`,
					showCancelButton: !0,
					showConfirmButton: !1,
					cancelButtonClass: 'btn btn-danger w-xs mb-1',
					cancelButtonText: 'Dismiss',
					buttonsStyling: !1,
					showCloseButton: !0,
				})
				return false
			}
			return true
		},
	})
})

addOfficerField = () => {
	// Add fields on button press
	let officerFields = document.getElementById('officers-container')
	let officerField = document.createElement('div')
	officerField.classList.add('row', 'mb-3')
	officerField.innerHTML = `
        <div class="col-xl-5">
            <input type="text" class="form-control" name="officer-name[]" placeholder="Name" required>
        </div>
        <div class="col-xl-5">
            <input type="text" class="form-control" name="officer-position[]" placeholder="Position" required>
        </div>
        <div class="col-xl-2">
            <button type="button" class="btn btn-danger btn-icon waves-effect waves-light mb-2" onclick="removeField()"><i class="ri-delete-bin-fill" fs-6 align-middle"></i></button>
        </div>
        `
	officerFields.appendChild(officerField)
}

removeField = () => {
    // Remove fields on button press
    let officerFields = document.getElementById('officers-container')
    let officerField = document.getElementsByClassName('row mb-3')
    if (officerField.length > 1) {
        officerFields.removeChild(officerField[officerField.length - 1])
    }
}

