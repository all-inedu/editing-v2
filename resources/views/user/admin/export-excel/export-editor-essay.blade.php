@extends('user.admin.utama.utama')
@section('css')
  <link rel="stylesheet" href="/css/admin/export-editor-essay.css">
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
            <div class="headline d-flex justify-content-between">
              <div class="col d-flex align-items-center gap-md-3 gap-2">
                <img src="/assets/completed-essay.png" alt="">
                <h6>Export - Editor Essay</h6>
              </div>
            </div>
            <div class="col-12 search-essay">
              <form action="{{ route('export-excel') }}" id="export-submit" method="GET" class="col d-flex flex-column align-items-center justify-content-center p-0 my-2">
                @csrf
                <div class="col-md-8 col-10 d-flex py-md-3 py-2">
                  <div class="col">
                    <h6 class="pb-2">Editor Name</h6>
                    <select class="select-normal" style="width: 96.5%;" name="f-editor-name">
                      <option value="all">All Editors</option>
                      @foreach ($editors as $editor)
                        <option value="{{ $editor->email }}">{{ $editor->first_name.' '.$editor->last_name }}</option>
                      @endforeach
                    </select>
                  </div>
                </div>
                <div class="col-md-8 col-10 d-flex py-md-3 py-2">
                  <div class="col-6">
                    <h6 class="pb-2">Month</h6>
                    <select class="select-date inputField" name="f-month">
                      <option value="01">January</option>
                      <option value="02">February</option>
                      <option value="03">March</option>
                      <option value="04">April</option>
                      <option value="05">May</option>
                      <option value="06">June</option>
                      <option value="07">July</option>
                      <option value="08">August</option>
                      <option value="09">September</option>
                      <option value="10">October</option>
                      <option value="11">November</option>
                      <option value="12">December</option>
                    </select>
                  </div>
                  <div class="col-6">
                    <h6 class="pb-2">Year</h6>
                    <select class="select-date inputField" name="f-year">
                      @for ($i = date('Y') ; $i >= 2016  ; $i--)
                        <option value="{{ $i }}">{{ $i }}</option>
                      @endfor
                    </select>
                  </div>
                </div>
                <div class="col-md-8 col-10 d-flex py-md-3 py-2">
                  <div class="col-8">
                    <h6 class="pb-2">Essay Type</h6>
                    <select class="select-normal" style="width: 96.5%;" name="f-essay-type">
                      <option value="all">All Essay Type</option>
                      @for ($i = 0 ; $i < count($essay_type) ; $i++)
                        <option value="{{ $essay_type[$i] }}">{{ $essay_type[$i] }}</option>
                      @endfor
                    </select>
                  </div>
                  <div class="col-4">
                    <h6 class="pb-2">Status</h6>
                    <select class="select-normal" style="width: 96.5%;" name="f-status">
                      <option value="all">All Status</option>
                      @foreach ($status as $_status)
                        <option value="{{ $_status->id }}">{{ $_status->status_title }}</option>
                      @endforeach
                    </select>
                  </div>
                </div>
                <div class="col-12 d-flex justify-content-center py-md-3 py-2">
                  <button type="submit" class="btn btn-search d-flex align-items-center gap-2">
                    <img src="/assets/search.png" alt="">
                    <h6>Search</h6>
                  </button>
                </div>
              </form>
            </div>
            <section id="search-result" 
              @if (!$results)
              class="d-none"
              @endif
              >
            <div class="headline d-flex justify-content-end">
              <div class="col-md-5 col-12 d-flex align-items-center justify-content-end gap-md-2 gap-2">
                <a class="btn-export col-auto d-flex gap-2 align-items-center justify-content-center" href="">
                  <img src="/assets/excel.png" alt="">
                  <h6>Export to Excel</h6>
                </a>
                <div class="input-group">
                  <input type="email" class="form-control inputField py-2 px-3" placeholder="Search">
                </div>
              </div>
            </div>
            <div class="container text-center p-0" style="overflow-x: auto !important">
              <table class="table table-bordered" id="table-result">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Editors Name</th>
                    <th>Students Name</th>
                    <th>Program Name</th>
                    <th>Essay Title</th>
                    <th>Editors Files</th>
                    <th>Clients Files</th>
                    <th>Status</th>
                    <th>Essay Rating</th>
                    <th>Work Duration (Minutes)</th>
                    <th>Completed Date</th>
                  </tr>
                </thead>
                <tbody>
                  @if (($results != NULL) && ($results->hasPages())) 
                  <?php $i = ($results->currentpage()-1)* $results->perpage() + 1;?>
                  @foreach ($results as $result )
                  {{-- <tr onclick="window.location='/admin/user/student/detail'"> --}}
                  <tr>
                    <td>{{ $i++ }}</td>
                    <td>{{ $result->editor->first_name.' '.$result->editor->last_name }}</td>
                    <td>
                        @if ($result->essay_clients->client_by_id == NULL)
                            {{ $result->essay_clients->client_by_email->first_name.' '.$result->essay_clients->client_by_email->last_name }}
                        @else
                            {{ $result->essay_clients->client_by_id->first_name.' '.$result->essay_clients->client_by_id->last_name }}
                        @endif
                    </td>
                    <td>{{ $result->essay_clients->program->program_name }}</td>
                    <td>{{ $result->essay_clients->essay_title }}</td>
                    <td><a href="{{ public_path('uploaded_files/program/essay/editors/').$result->attached_of_editors }}" rel="noopener" target="_blank" title="{{ $result->attached_of_editors }}">Download</a></td>
                    <td><a href="{{ public_path('uploaded_files/program/essay/students/').$result->essay_clients->attached_of_clients }}" rel="noopener" target="_blank" title="{{ $result->essay_clients->attached_of_clients }}">Download</a></td>
                    <td>{{ $result->status->status_title }}</td>
                    <td>{{ $result->essay_clients->essay_rating }}</td>
                    <td>{{ $result->work_duration }}</td>
                    <td>{{ $result->essay_clients->completed_at }}</td>
                  </tr>
                  @endforeach
                  @else
                  <tr>
                    <td colspan="11">No data</td>
                  </tr>
                  @endif
                </tbody>
              </table>
              @if ($results)
              {{-- Pagination --}}
              <div class="d-flex justify-content-center">
                {{ $results->links() }}
              </div>
              @endif
            </div>
            </section>
          </div>
        </div>
        {{-- End Table Student --}}
      </div>
    </div>
    {{-- End Content --}}
  </div>
</div>
@endsection