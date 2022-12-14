<div class="row head py-4 align-items-center">
  <div class="col-md-6 col-10 ps-md-5 ps-3">
    <h4 class="">Admin Dashboard</h4>
  </div>
  <div class="col-md-6 col-2 pe-md-5 pe-3">
    <div class="head-content d-flex flex-row align-items-center justify-content-end gap-md-4 gap-2">
      <a class="help d-flex flex-row align-items-center gap-md-2 gap-1" href="/admin/help">
        <img class="img-fluid" src="/assets/help-grey.png" alt="">
        <h6 class="d-none d-md-inline">Help</h6>
      </a>
      <h6 class="d-none d-md-inline">{{ Auth::guard('web-admin')->user()->full_name }}</h6>
    </div>
  </div>
</div>