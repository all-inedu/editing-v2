@extends('user.admin.utama.utama')
@section('css')
  <link rel="stylesheet" href="/css/admin/essay-completed.css">
  <style>
    .pagination { margin: 15px 0}
    .pagination .page-item .page-link { padding: 10px 15px; font-size: 12px; }
  </style>
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
        {{-- Table Student --}}
        <div class="row">
          <div class="col-md col-12 p-0 studentList">
            <div class="headline d-flex justify-content-between" style="background-color: var(--green)">
              <div class="col-md-6 col-7 d-flex align-items-center gap-md-3 gap-2">
                <img src="/assets/completed-essay.png" alt="">
                <h6>List of Completed Essay</h6>
              </div>
              <div class="col-md-4 col-4 d-flex align-items-center justify-content-end">
                <div class="input-group">
                  <input type="email" class="form-control inputField py-2 px-3" placeholder="Search">
                </div>
              </div>
            </div>
            <div class="container text-center" style="overflow-x: auto !important">
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Student Name</th>
                    <th>Mentor Name</th>
                    <th>Editor Name</th>
                    <th>Essay Title</th>
                    <th>Essay Deadline</th>
                    <th>Status</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $i = ($essays->currentpage()-1)* $essays->perpage() + 1;?>
                  @foreach ($essays as $essay)
                  <tr onclick="window.location='/admin/essay-list/completed/detail/{{ $essay->id_essay_clients }}'">
                    <th scope="row">{{ $i++ }}</th>

                    @if ($essay->client_by_id)
                      <td>{{ $essay->client_by_id->first_name.' '.$essay->client_by_id->last_name }}</td>
                      <td>{{ $essay->client_by_id->mentors->first_name.' '.$essay->client_by_id->mentors->last_name  }}</td>
                    @elseif ($essay->client_by_email)
                      <td>{{ $essay->client_by_email->first_name.' '.$essay->client_by_email->last_name }}</td>
                      <td>{{ $essay->client_by_email->mentors->first_name.' '.$essay->client_by_email->mentors->last_name }}</td>
                    @endif

                    <td>{{ $essay->editor ? $essay->editor->first_name.' '.$essay->editor->last_name : '-' }}</td>
                    <td>{{ $essay->essay_title }}</td>
                    <td>{{ date('D, d M Y', strtotime($essay->essay_deadline)) }}</td>
                    <td style="color: var(--green)">{{ $essay->status->status_title }}</td>
                  </tr>
                  @endforeach
                  
                  @unless (count($essays)) 
                  <tr>
                    <td colspan="7">No data</td>
                  </tr>
                  @endunless
                  {{-- <tr onclick="window.location='/admin/essay-list/completed/detail'">
                    <th scope="row">1</th>
                    <td>Student Dummy</td>
                    <td>Mentor Dummy</td>
                    <td>Senior Editor Dummy</td>
                    <td>Supplemental Essay</td>
                    <td>Thu, 28 Jul 2022</td>
                    <td style="color: var(--green)">Completed</td>
                  </tr> --}}
                </tbody>
              </table>
              {{-- Pagination --}}
              <div class="d-flex justify-content-center">
                {{ $essays->links() }}
              </div>
            </div>
          </div>
        </div>
        {{-- End Table Student --}}
      </div>
    </div>
    {{-- End Content --}}
  </div>
</div>
@endsection