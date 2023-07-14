<section class="addresearch">
<div class="card">
         <div class="card-header align-items-center d-flex">
                <a href="<?= base_url() ?>student/researchcop/my-submissions">
                <button type="button" class="btn btn-info btn-label waves-effect waves-light">
                <i class="ri-arrow-go-back-line label-icon align-middle fs-16 me-2" style="color: #fff;"></i>
                Back
                </button>
                </a>
        </div>
    <div class="card-body">
        <div id="addResearchPage">
                <form id="addResearchForm" class="needs-validation" novalidate>
                    <div class="mb-3">
                        <input type="hidden" id="r_author" name="r_author">
                        <label for="r_title" class="form-label">Research Title<span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="r_title" name="r_title" placeholder="Enter Research Title" required />
                    </div>
                    <div class="mb-3">
                        <label for="fkr_author" class="form-label">Research Author<span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="fkr_author" name="fkr_author" placeholder="Enter Research Author" required />
                    </div>
                    <div class="mb-3">
                        <label for="r_co_author" class="form-label">Research Co-Author</label>
                        <input type="text" class="form-control" id="r_co_author" name="r_co_author" placeholder="Enter Research Co-Author">
                    </div>
                    <div class="mb-3">
                        <label for="r_abstract" class="form-label">Research Abstract<span class="text-danger">*</span></label>
                        <textarea class="form-control" id="r_abstract" name="r_abstract" rows="5" placeholder="Enter Abstract" required></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="r_date_accomplished" class="form-label">Date Accomplished<span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="r_date_accomplished" name="r_date_accomplished" data-provider="flatpickr" data-date-format="F j, Y" placeholder="Pick the Date" required>
                    </div>
                    <div class="mb-3">
                        <label for="r_adviser" class="form-label">Adviser<span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="r_adviser" name="r_adviser" placeholder="Enter Research Adviser" required/>
                    </div>
                    <div class="mb-3">
                        <label for="r_program" class="form-label">Program<span class="text-danger">*</span></label>
                        <select class="form-select mb-3" id="r_program" name="r_program" required>
                            <option selected disabled value="">Select Program</option>
                            <option value="Bachelor of Public Administration Major in Public Financial Management Diploma in Office Management Technology">[DOMT] Diploma in Office Management Technology</option>
                                        <option value="Bachelor of Science in Business Administration Major in Entrepreneurship">[ENTREP] Bachelor of Science in Business Administration Major in Entrepreneurship</option>
                                        <option value="Bachelor of Science in Business Administration Major in Human Resource Development Management">[HRDM] Bachelor of Science in Business Administration Major in Human Resource Development Management</option>
                                        <option value="Bachelor of Science in Business Administration Major in Marketing Management">[MM] Bachelor of Science in Business Administration Major in Marketing Management</option>
                                        <option value="Bachelor of Science in Business Teacher's Education">[BTLED] Bachelor of Science in Business Teacher's Education</option>
                                        <option value="Bachelor of Science in Information Technology">[IT] Bachelor of Science in Information Technology</option>
                        </select>
                    </div>

                    <div class="text-end">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
    </div>
</div>
</section>