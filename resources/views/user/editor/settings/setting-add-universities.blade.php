@extends('user.editor.utama.utama')
@section('css')
    <link rel="stylesheet" href="/css/editor/setting-add-universities.css">
    <style>
        .error-style {
            font-size: 12px;
            margin-bottom: 20px;
            padding: 0px;
        }

        .error-style ul {
            list-style-type: none;
            margin: 0px;
            padding: 0px;
        }
        .fs-10 {
            font-size: 10px
        }
    </style>
@endsection

@section('content')
    <div class="container-fluid" style="padding: 0">
        <div class="row flex-nowrap main" id="main">

            {{-- Sidenav --}}
            @include('user.editor.utama.menu')

            {{-- Content --}}
            <div class="col" style="overflow: auto !important">
                @include('user.editor.utama.head')
                <div class="container main-content m-0">

                    @if (session()->has('input-successful'))
                        <div class="row alert alert-success fade show" role="alert">
                            {{ session()->get('input-successful') }}
                        </div>
                    @endif

                    <div class="row gap-2">
                        <div class="col-md col-12 p-0 userCard profile" style="cursor: default">
                            <div class="headline d-flex align-items-center gap-3">
                                <img src="/assets/pic.png" alt="">
                                <h6>Profile Picture</h6>
                            </div>
                            <div class="col d-flex align-items-center justify-content-center py-md-4 py-4">
                                <div class="pic-profile d-flex align-items-center justify-content-center">
                                    <img class="img-fluid" id="img-profile" src="/assets/editor-bg.png" alt="">
                                </div>
                            </div>
                            <div class="col px-md-4 px-3">
                                <div class="mb-4">
                                    <input class="form-control py-1 px-1" id="formFileSm" name="uploaded_file"
                                        form="form-university" type="file" onchange="previewImage()">
                                </div>
                            </div>
                        </div>

                        <div class="col-md-8 col-12 p-0 userCard" style="cursor: default">
                            <div class="headline d-flex justify-content-between">
                                <div class="col-md-6 col-8 d-flex align-items-center gap-md-3 gap-2">
                                    <img src="/assets/edit.png" alt="">
                                    <h6>New University</h6>
                                </div>
                                <div class="col-md-4 col-4 d-flex align-items-center justify-content-end gap-md-3 gap-2">
                                    <a href="/editor/setting/universities"><img src="/assets/back.png" alt=""></a>
                                </div>
                            </div>
                            <div class="row profile-editor px-md-3 py-md-4 px-3 py-4" style="overflow: auto !important">

                                {{-- @if ($errors->any())
                                    <div class="error-style">
                                        <div class="alert alert-danger" role="alert">
                                            <ul>
                                                {!! implode('', $errors->all('<li>:message</li>')) !!}
                                            </ul>

                                        </div>
                                    </div>
                                @endif --}}

                                <form action="{{ route('add-universities') }}" id="form-university" method="POST" class="p-0"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="col-12 d-flex mb-3">
                                        <div class="col-6">
                                            <h6 class="pb-2">University Name :</h6>
                                            <input type="text" name="university_name"
                                                class="form-control inputField py-2 px-3">
                                            @error('university_name')
                                                <div class="alert text-danger fs-10">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="col-6">
                                            <h6 class="pb-2">Email :</h6>
                                            <input type="email" name="email" class="form-control inputField py-2 px-3">
                                        </div>
                                    </div>
                                    <div class="col-12 d-flex mb-3">
                                        <div class="col-12">
                                            <h6 class="pb-2">Website :</h6>
                                            <input type="url" pattern="https://.*" name="website"
                                                class="form-control inputField py-2 px-3" style="width: 96.5%;">
                                        </div>
                                    </div>
                                    <div class="col-12 d-flex mb-3">
                                        <div class="col-6">
                                            <h6 class="pb-2">Phone :</h6>
                                            <input type="text" name="phone" class="form-control inputField py-2 px-3">
                                        </div>
                                        <div class="col-6">
                                            <h6 class="pb-2">Country :</h6>
                                            <input type="text" name="country" class="form-control inputField py-2 px-3">
                                            @error('country')
                                                <small class="alert text-danger fs-10">{{ $message }}</small>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-12 d-flex mb-5" style="overflow: auto !important">
                                        <div class="col">
                                            <h6 class="pb-2">Address :</h6>
                                            <textarea name="address" class="textarea" placeholder="Address"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-12 d-flex justify-content-center pt-3"
                                        style="border-top: 1px solid var(--light-grey)">
                                        <button class="btn btn-create d-flex align-items-center gap-2">
                                            <img src="/assets/add.png" alt="">
                                            <h6>Add University</h6>
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
