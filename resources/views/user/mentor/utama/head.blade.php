<div class="row head py-4 align-items-center">
    <div class="col-md-6 col-10 ps-md-5 ps-3">
        <h4 class="">Mentor Dashboard</h4>
    </div>
    <div class="col-md-6 col-2 pe-md-5 pe-3">
        <div
            class="head-content d-flex flex-row align-items-center justify-content-md-end justify-content-center gap-md-4 gap-2">
            <a class="d-flex flex-row align-items-center gap-md-2">
                {{-- <img class="img-fluid" src="/assets/profile-grey.png" alt=""> --}}
                <h6 class="d-none d-md-inline ps-1">
                    {{ Auth::guard('web-mentor')->user()->first_name . ' ' . Auth::guard('web-mentor')->user()->last_name }}
                </h6>
            </a>
        </div>
    </div>
</div>
