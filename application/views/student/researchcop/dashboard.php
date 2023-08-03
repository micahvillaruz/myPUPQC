<section class="dashboard">

    <div class="card col-lg-12">
        <div class="card-header border-0">
            <div class="col-lg-12 text-center">
                <img src="<?= base_url() ?>public/images/researchcop_logo.png" alt="user-img" class="rounded w-25" />
            </div>
        </div>
        <div class="card-body border-0">
            <div class="row justify-content-center mb-4">
                <div class="col-lg-6">
                    <div class="row g-2">
                        <div class="col">
                            <div class="position-relative mb-3">
                                <input type="text" id="searchQuery" class="form-control form-control-lg bg-light border-light" placeholder="Search Research here..">
                            </div>
                        </div>
                        <div class="col-auto">
                            <button onclick="search()" class="btn btn-primary btn-lg waves-effect waves-light"><i class="mdi mdi-magnify me-1"></i> Search</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12" id="search_result">
            </div>
            <div id="research_display">
            </div>
        </div> <!--Card header end-->
    </div>
</section>