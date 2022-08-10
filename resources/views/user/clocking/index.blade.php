
@extends('dashboard')

@section('content')

<div class="col-12 col-md-8 col-lg-4 order-3 order-md-2">
    <div class="row">
   <div class="col-12 mb-4">
    <div class="card">
      <div class="card-body">
        <div class="d-flex justify-content-between flex-sm-row flex-column gap-3">
          <div class="d-flex flex-sm-column flex-row align-items-start justify-content-between">
            <div class="card-title">
              <h1 class="text-nowrap mb-2" style="font-size: 30px">Clock-In:</h1>

            </div>
            <div class="mt-sm-auto">
              <small class="text-success text-nowrap fw-semibold"
                >
              <h1><span class="badge bg-label-warning rounded-pill">{{$userdata->login_time}}</span></h1>

            </div>
          </div>
          <div id="profileReportChart"></div>
        </div>
      </div>
    </div>
  </div>

  <div class="col-12 mb-4">
    <div class="card">
      <div class="card-body">
        <div class="d-flex justify-content-between flex-sm-row flex-column gap-3">
          <div class="d-flex flex-sm-column flex-row align-items-start justify-content-between">
            <div class="card-title">
              <h1 class="text-nowrap mb-2" style="font-size: 30px">Clock-Out:</h1>

            </div>
            <div class="mt-sm-auto">
              <small class="text-success text-nowrap fw-semibold"
                >
              <h1><span class="badge bg-label-warning rounded-pill">{{$userdata->logout_time}}</span></h1>

            </div>
          </div>
          <div id="profileReportChart"></div>
        </div>
      </div>
    </div>
  </div>

</div>
</div>
  @endsection
