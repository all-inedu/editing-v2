@extends('user.editor.utama.utama')
@section('css')
  <link rel="stylesheet" href="/css/per-editor/dashboard.css">
  <style>
    .selectize-input {padding: 8px 16px; border-radius: 6px}
    .alert {font-size: 14px; margin: 0 -12px 16px -12px}
    .alert-danger {font-size: 14px; margin: -12px -12px 16px -12px}
  </style>
@endsection

@section('content')
<div class="container-fluid p-0">
  <div class="row flex-nowrap main" id="main">

    {{-- Sidenav --}}
    @include('user.editor.utama.menu')

    {{-- Content --}}
    <div class="col" style="overflow: auto !important">
      @include('user.editor.utama.head')
      <div class="container main-content m-0">

        @if(session()->has('update-profile-successful'))
        <div class="row alert alert-success fade show d-flex justify-content-between" role="alert">
          {{ session()->get('update-profile-successful') }}
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif

        <div class="row gap-2">
          <div class="col-md col-12 p-0 userCard profile" style="cursor: default">
            <div class="headline d-flex align-items-center px-4 py-4 gap-3">
              <img src="/assets/pic.png" alt="">
              <h6>Picture Profile</h6>
            </div>
            <div class="col d-flex align-items-center justify-content-center py-md-4 py-4">
              <div class="pic-profile d-flex align-items-center justify-content-center">
                <img class="img-fluid" id="img-profile" src={{ asset('uploaded_files/user/editors/'.$editor->image) }} alt="">
              </div>
            </div>
            <div class="col d-none px-md-4 px-3" id="chooseFile">
              <div class="mb-4">
                <input class="form-control form-control-sm" id="formFileSm" name="uploaded_file" form="form-profile" type="file" onchange="previewImage()">
              </div>
            </div>
          </div>
          
          <div class="col-md-8 col-12 p-0 userCard" style="cursor: default">
            <div class="headline d-flex justify-content-between" style="padding: 22px 24px !important">
              <div class="col-md-6 col-8 d-flex align-items-center gap-3">
                <img src="/assets/edit.png" alt="">
                <h6>Profile Editor</h6>
              </div>
              <div class="col-md-4 col-4 d-flex align-items-center justify-content-end gap-md-3 gap-2">
                <button class="btn-edit border-0" onclick="enableEdit()">
                  <img src="/assets/pencil.png" alt="" style="margin-bottom: 2px">
                </button>
              </div>
            </div>
            
            <div class="row field px-md-3 py-md-4 px-3 py-4" style="overflow: auto !important">
              @if($errors->any())
                <div class="error-style">
                  <div class="alert alert-danger p-3" role="alert">
                    <ul>
                      {!! implode('', $errors->all('<li>:message</li>')) !!}
                    </ul>
                    
                  </div>
                </div>
              @endif
              <form action="{{ route('update-managing-profile', ['id_editors' => $editor->id_editors]) }}" class="p-0" id="form-profile" onsubmit="swal.showLoading()" enctype="multipart/form-data" method="POST">
                @csrf
                <div class="col-12 d-flex flex-lg-row flex-column mb-3 gap-lg-0 gap-3">
                  <div class="col">
                    <h6 class="pb-2">First Name :</h6>
                    <input type="text" class="form-control inputField py-2 px-3" id="first" name="first_name" disabled value="{{ $editor->first_name }}">
                  </div>
                  <div class="col">
                    <h6 class="pb-2">Last Name :</h6>
                    <input type="text" class="form-control inputField py-2 px-3" id="last" name="last_name" disabled value="{{ $editor->last_name }}">
                  </div>
                </div>
                <div class="col-12 d-flex flex-lg-row flex-column mb-3 gap-lg-0 gap-3">
                  <div class="col">
                    <h6 class="pb-2">Email :</h6>
                    <input type="email" class="form-control inputField py-2 px-3" id="email" name="email" disabled value="{{ $editor->email }}">
                  </div>
                  <div class="col">
                    <h6 class="pb-2">Phone :</h6>
                    <input type="text" class="form-control inputField py-2 px-3" id="phone" name="phone" disabled value="{{ $editor->phone }}">
                  </div>
                </div>
                <div class="col-12 d-flex flex-lg-row flex-column mb-3 gap-lg-0 gap-3">
                  <div class="col">
                    <h6 class="pb-2">Graduated From :</h6>
                    <input type="text" class="form-control inputField py-2 px-3" id="graduated" name="graduated_from" disabled value="{{ $editor->graduated_from }}">
                  </div>
                  <div class="col">
                    <h6 class="pb-2">Major :</h6>
                    <input type="text" class="form-control inputField py-2 px-3" id="major" name="major" disabled value="{{ $editor->major }}">
                  </div>
                </div>
                <div class="col-12 d-flex mb-3" style="overflow: auto !important">
                  <div class="col">
                    <h6 class="pb-2">Address :</h6>
                    <textarea name="address" class="textarea" placeholder="Address">{{ $editor->address }}</textarea>
                  </div>
                </div>
                <div class="col-12 d-flex mb-3" style="overflow: auto !important">
                  <div class="col">
                    <h6 class="pb-2">About Me :</h6>
                    <textarea name="about_me" class="textarea" placeholder="About Me">{{ $editor->about_me }}</textarea>
                  </div>
                </div>
                <div class="col-12 d-flex flex-lg-row flex-column mb-3 gap-lg-0 gap-3">
                  <div class="col">
                    <h6 class="pb-2">Password :</h6>
                    <input type="password" class="form-control inputField py-2 px-3" id="pass" name="password" disabled>
                  </div>
                  <div class="col">
                    <h6 class="pb-2">Password Confirm :</h6>
                    <input type="password" class="form-control inputField py-2 px-3" id="confirm" name="password_confirmation" disabled>
                  </div>
                </div>
                <div class="col-12 d-flex mb-4">
                  <div class="col">
                    <h6 class="pb-2" style="font-size: 10px; color: var(--red)">* if you don't want to change your password, don't fill in the password field</h6>
                  </div>
                </div>
                <div class="col-12 d-none d-flex justify-content-center pt-3" id="btnUpdate" style="border-top: 1px solid var(--light-grey)">
                  <button class="btn btn d-flex align-items-center gap-2">
                    <img src="/assets/update.png" alt="">
                    <h6>Update Editor</h6>
                  </button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    {{-- End Content --}}
  </div>
</div>
@endsection

@section('js')
<script>
  var check = false;
  function enableEdit(){
    var chooseFile = document.getElementById('chooseFile');
    var first = document.getElementById('first');
    var last = document.getElementById('last');
    var email = document.getElementById('email');
    var phone = document.getElementById('phone');
    var graduated = document.getElementById('graduated');
    var major = document.getElementById('major');
    var pass = document.getElementById('pass');
    var confirm = document.getElementById('confirm');
    var btnUpdate = document.getElementById('btnUpdate');
    if (check == false){
      chooseFile.classList.remove('d-none');
      first.disabled = false;
      last.disabled = false;
      email.disabled = false;
      phone.disabled = false;
      graduated.disabled = false;
      major.disabled = false;
      pass.disabled = false;
      confirm.disabled = false;
      btnUpdate.classList.remove('d-none');
      check = true;
    } else if (check == true){
      chooseFile.classList.add('d-none');
      first.disabled = true;
      last.disabled = true;
      email.disabled = true;
      phone.disabled = true;
      graduated.disabled = true;
      major.disabled = true;
      pass.disabled = true;
      confirm.disabled = true;
      btnUpdate.classList.add('d-none');
      check = false;
    }
  }
</script>
@endsection