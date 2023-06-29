<div class="row">
    <div class="col-xs-12 col-lg-4">
        <div class="rounded" style="background: url('<?= base_url() ?>public/images/menu/img-1.webp');background-size:cover;">
            <div class="card rounded bg-primary bg-opacity-50">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div class="flex-grow-1">
                            <h3 class="pt-5 pb-3 text-white fw-medium align-center text-center ">Add Members</h3>
                        </div>
                    </div>
                    <div class="d-flex justify-content-center">
                        <button type="button" onclick="logout('sis')" class="mb-5 fw-medium btn btn-secondary waves-effect waves-light"> <i class=" ri-account-box-line me-2"></i> Click to Add</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xs-12 col-lg-4">
        <div class="rounded" style="background: url('<?= base_url() ?>public/images/menu/img-10.webp');background-size:cover;">
            <div class="card rounded bg-primary bg-opacity-50">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div class="flex-grow-1">
                            <h3 class="pt-5 pb-3 text-white align-center text-center ">Total Members</h3>
                        </div>
                    </div>
                    <div class="d-flex justify-content-center">
                        <button type="button" onclick="logout('vass')" class="mb-5 btn fw-medium btn-secondary waves-effect waves-light"> <i class=" ri-building-4-line me-2"></i> Current Members : </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xs-12 col-lg-4">
        <div class=" rounded" style="background: url('<?= base_url() ?>public/images/menu/img-7.webp');background-size:cover;">
            <div class="card rounded bg-primary bg-opacity-50">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div class="flex-grow-1">
                            <h3 class="pt-5 pb-3 text-white align-center text-center ">Completed Events</h3>
                        </div>
                    </div>
                    <div class="d-flex justify-content-center">
                        <button type="button" onclick="logout('osssac')" class="mb-5 btn fw-medium btn-secondary waves-effect waves-light"> <i class=" ri-discuss-line me-2"></i> History</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    
    <div class="col-xs-12 col-lg-12">
        <div class="card card-animate">
            <div class="card-header">
                <h4 class="card-title mb-0 align-center text-center ">EVRSERS TRACKER - <span class="fs-15">Upcoming Events</span>
                </h4>
            </div>
            <!-- end card header -->
            <div class="card-body">
                <div class="me-n3">
                    <div data-simplebar data-simplebar-auto-hide="false" data-simplebar-track="warning" style="max-height: 382px">
                        <ul class="list-group list-group-flush border-dashed" id="upcoming-events">
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-12">
        <div class="rounded mb-4" style="background: url('<?= base_url() ?>public/images/menu/img-3.webp');background-size:cover;">
            <div class="rounded bg-primary bg-opacity-50 d-flex justify-content-center align-items-center flex-column" style="height: 300px;">
                <h1 class="pb-4 text-white fw-medium align-center text-center ">Add Event</h1>
                <div class="d-flex justify-content-center">
                <button onclick="window.location.href='<?= base_url() ?>student/odrs/request'" class="mb-5 btn btn-secondary waves-effect waves-light"> <i class="ri-article-line me-2"></i> Register Event
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-xs-12 col-xl-4 medical">
        <div class="card card-animate">
            <div class="card-body">
                <div class="text-center">
                    <h4 class="mt-4 fw-semibold">Are You Feeling Unwell?</h4>
                    <p class=" mt-3">
                        Expect the quality health care services as you conveniently book your appointments, and get e-prescriptions from our university doctor.
                    </p>
                    <div class="my-3">
                        <button onclick="window.location.href='<?= base_url() ?>student/omsss/medical-services/medical-consultation'" class="btn fw-medium btn-secondary waves-effect waves-light"> <i class="las la-first-aid me-2"></i> Book a Medical Consultation Appointment</button>
                    </div>
                    <img src="<?= base_url() ?>public/images/doctor.png" class="img-fluid" style="height: 200px;" />
                </div>
            </div>
        </div>
        <!--end card-->
    </div>
    <div class="col-xs-12 col-xl-4 dental">
        <div class="card card-animate">
            <div class="card-body">
                <div class="text-center">
                    <h4 class="mt-4 fw-semibold">Do You Have a Tooth Decay?</h4>
                    <p class=" mt-3">
                        With regular dental check-ups, our dentists can help and give you a perfect treatment plan towards a perfect beautiful smile.
                    </p>
                    <div class="my-3">
                    <button onclick="window.location.href='<?= base_url() ?>student/omsss/dentist-services'" class="btn fw-medium btn-secondary waves-effect waves-light"> <i class="las la-tooth me-2"></i> Book a Dental Consultation Appointment</button>
                    </div>
                    <img src="<?= base_url() ?>public/images/dentist.jpg" class="img-fluid" style="height: 200px;" />
                </div>
            </div>
        </div>
        <!--end card-->
    </div>
    <div class="col-xs-12 col-xl-4 guidance">
        <div class="card card-animate">
            <div class="card-body">
                <div class="text-center">
                    <h4 class="mt-4 fw-semibold">Want to let Your Thoughts Out?</h4>
                    <p class=" mt-3">
                        Our experienced psychologist offer free counselling support. Talk to us now if you're having emotional or psychological issues.
                    </p>
                    <div class="my-3">
                    <button onclick="window.location.href='<?= base_url() ?>student/omsss/guidance-services'" class="btn fw-medium btn-secondary waves-effect waves-light"> <i class="mdi mdi-brain me-2"></i> Book a Guidance Consultation Appointment</button>
                    </div>
                    <img src="<?= base_url() ?>public/images/guidance.jpg" class="img-fluid" style="height: 200px;" />
                </div>
            </div>
        </div>
        <!--end card-->
    </div>
</div>

<div class="row">
    <div class="col-xs-12 col-md-6">
        <div class="rounded" style="background: url('<?= base_url() ?>public/images/menu/img-8.webp');background-size:cover;">
            <div class="card rounded bg-primary bg-opacity-50">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div class="flex-grow-1">
                            <h3 class="pt-5 pb-3 text-white align-center text-center text-uppercase">Check Property Accountabilities</h3>
                        </div>
                    </div>
                    <div class="d-flex justify-content-center">
                        <button type="button" class="mb-5 btn fw-medium btn-secondary waves-effect waves-light"> <i class=" ri-file-paper-2-line me-2"></i> Visit eClearance</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xs-12 col-md-6">
        <div class="rounded" style="background: url('<?= base_url() ?>public/images/menu/img-4.webp');background-size:cover;">
            <div class="card rounded bg-primary bg-opacity-50">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div class="flex-grow-1">
                            <h3 class="pt-5 pb-3 text-white align-center text-center text-uppercase">Report Academic Issues & Concerns</h3>
                        </div>
                    </div>
                    <div class="d-flex justify-content-center">
                        <button type="button" class="mb-5 btn fw-medium btn-secondary waves-effect waves-light"> <i class="ri-eye-fill me-2"></i> Go to EyeUlat</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>