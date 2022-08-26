@extends('user.admin.utama.utama')
@section('css')
  <link rel="stylesheet" href="/css/admin/user-student-detail.css">
@endsection

@section('content')
<div class="container-fluid" style="padding: 0">
  <div class="row flex-nowrap main" id="main">

    {{-- Sidenav --}}
    @include('user.admin.utama.menu')

    {{-- Content --}}
    <div class="col" style="overflow: auto !important">
      @include('user.admin.utama.head')
      <div class="container main-content m-0">
        {{-- Detail Student --}}
        <div class="row">
          <div class="col-md col-12 p-0 studentList">
            <div class="headline d-flex justify-content-between">
              <div class="col-md-6 col-5 d-flex align-items-center gap-md-3 gap-2">
                <img src="/assets/student.png" alt="">
                <h6>Students</h6>
              </div>
              <div class="col-md-4 col-6 d-flex align-items-center justify-content-end gap-md-3 gap-2">
                <a href="/admin/user/student"><img src="/assets/back.png" alt=""></a>
              </div>
            </div>
            <div class="row student-info pb-md-0 pb-4">
              <div class="col-md-4 d-flex align-items-center justify-content-center py-md-0 py-4">
                <div class="pic-profile">
                  <img class="img-fluid" src="/assets/student-bg.png" alt="">
                </div>
              </div>
              <div class="col-md-8 student-desc d-flex flex-column justify-content-center gap-lg-3 gap-2 ps-md-5 px-4">
                <div class="row d-flex align-items-center">
                  <div class="col-md-3 col-4">
                    <h6>Full Name</h6>
                  </div>
                  <div class="col-1 titik2"><p>:</p></div>
                  <div class="col-7">
                    <p>Student Dummy</p>
                  </div>
                </div>
                <div class="row d-flex align-items-center">
                  <div class="col-md-3 col-4">
                    <h6>Phone Number</h6>
                  </div>
                  <div class="col-1 titik2"><p>:</p></div>
                  <div class="col-7">
                    <p>12345678</p>
                  </div>
                </div>
                <div class="row d-flex align-items-center">
                  <div class="col-md-3 col-4">
                    <h6>Email</h6>
                  </div>
                  <div class="col-1 titik2"><p>:</p></div>
                  <div class="col-7">
                    <p>student.dummy@gmail.com</p>
                  </div>
                </div>
                <div class="row d-flex align-items-center">
                  <div class="col-md-3 col-4">
                    <h6>Address</h6>
                  </div>
                  <div class="col-1 titik2"><p>:</p></div>
                  <div class="col-7">
                    <p>Jl Jeruk Kembar blok Q9 no.15</p>
                  </div>
                </div>
                <div class="row d-flex align-items-center">
                  <div class="col-md-3 col-4">
                    <h6>Mentor Name</h6>
                  </div>
                  <div class="col-1 titik2"><p>:</p></div>
                  <div class="col-7">
                    <select class="select-beast inputField">
                      <option value="value 1">Value 1</option>
                      <option value="value 2">Value 2</option>
                      <option value="value 3">Value 3</option>
                    </select>
                  </div>
                </div>
              </div>
            </div>

            <div class="row student-addition p-md-5 p-3">
              {{-- Text Area --}}
              <div class="text-area p-md-1 mb-3">
                <h6 class="pb-3">Personal Brand Statement :</h6>
                <textarea name="" class="textarea"></textarea>
              </div>
              <div class="text-area p-md-1 mb-3">
                <h6 class="pb-3">Academic Goals & Interest :</h6>
                <textarea name="" class="textarea"></textarea>
              </div>
              <div class="text-area p-md-1 mb-3">
                <h6 class="pb-3">Life Philosophy (Values) & Personalities :</h6>
                <textarea name="" class="textarea"></textarea>
              </div>
              {{-- End Text Area --}}
              {{-- Attachment --}}
              <div class="col-lg-2 col-3 mb-lg-4 mb-3 attachment d-flex align-items-center justify-content-center">
                <h6 class="text-center">Attachment</h6>
              </div>
              <div class="row d-flex flex-lg-row flex-column attachment-status gap-lg-0 gap-2 ps-lg-0 ps-2 mb-3">
                <div class="col-lg-4 me-2">
                  <h6>Activities Resume<span class="px-2">:</span><span style="color: var(--red)">Not Available</span></h6>
                </div>
                <div class="col-lg">
                  <h6>Questionnaire<span class="px-2">:</span><span style="color: var(--red)">Not Available</span></h6>
                </div>
                <div class="col-lg">
                  <h6>Others<span class="px-2">:</span><span style="color: var(--red)">Not Available</span></h6>
                </div>
              </div>
              {{-- End Attachment --}}
            </div>
          </a>
        </div>
        {{-- End Detail Student --}}
      </div>
    </div>
    {{-- End Content --}}
  </div>
</div>
@endsection