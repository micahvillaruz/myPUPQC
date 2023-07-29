<section class="dashboard">
<div class="card">
        <div class="card-header alert alert-info border-0 rounded-top rounded-0 d-flex align-items-center" role="alert">
                <i class="ri-book-line text-info me-2 fs-20"></i>
                <span class="fw-bold fs-15 m-1">ResearchCop</span>
        </div>
    <div class="card-header border-0">
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
                <div class="col-lg-12"  id="search_result">
                </div>

    </div> <!--Card header end-->

    <div id="research_display">
    </div>

</section>