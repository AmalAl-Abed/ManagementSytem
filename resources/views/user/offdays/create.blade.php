@extends('dashboard')

@section('content')

<div class="col-xl">
    <div class="card mb-4">
<div class="card-body">

    <div class="row">



    <div class="col-lg-4 col-md-12 col-6 mb-4">
        <div class="card">
          <div class="card-body">
            <div class="card-title d-flex align-items-start justify-content-between">
              <div class="avatar flex-shrink-0">
                <img
                  src="../assets/img/icons/unicons/chart-success.png"
                  alt="chart success"
                  class="rounded"
                />
              </div>
              <div class="dropdown">
                <button
                  class="btn p-0"
                  type="button"
                  id="cardOpt3"
                  data-bs-toggle="dropdown"
                  aria-haspopup="true"
                  aria-expanded="false"
                >
                  <i class="bx bx-dots-vertical-rounded"></i>
                </button>

              </div>
            </div>
            <h1 class="fw-semibold d-block mb-1" style="font-size: 30p">Vacation Days</h1>
            <h3 class="card-title mb-2">{{$offdays->no_vacation}}Days</h3>
            <small class="text-success fw-semibold"><i class="bx bx-up-arrow-alt"></i> +72.80%</small>
          </div>
        </div>
      </div>



      <div class="col-lg-4 col-md-12 col-6 mb-4">
        <div class="card">
          <div class="card-body">
            <div class="card-title d-flex align-items-start justify-content-between">
              <div class="avatar flex-shrink-0">
                <img
                  src="../assets/img/icons/unicons/chart-success.png"
                  alt="chart success"
                  class="rounded"
                />
              </div>
              <div class="dropdown">
                <button
                  class="btn p-0"
                  type="button"
                  id="cardOpt3"
                  data-bs-toggle="dropdown"
                  aria-haspopup="true"
                  aria-expanded="false"
                >
                  <i class="bx bx-dots-vertical-rounded"></i>
                </button>

              </div>
            </div>
            <h1 class="fw-semibold d-block mb-1" style="font-size: 30p">Sick Leave Days</h1>
            <h3 class="card-title mb-2">{{$offdays->no_sickLeave}}Days</h3>
            <small class="text-success fw-semibold"><i class="bx bx-up-arrow-alt"></i> +72.80%</small>
          </div>
        </div>
      </div>




      <div class="col-lg-4 col-md-12 col-6 mb-4">
        <div class="card">
          <div class="card-body">
            <div class="card-title d-flex align-items-start justify-content-between">
              <div class="avatar flex-shrink-0">
                <img
                  src="../assets/img/icons/unicons/chart-success.png"
                  alt="chart success"
                  class="rounded"
                />
              </div>
              <div class="dropdown">
                <button
                  class="btn p-0"
                  type="button"
                  id="cardOpt3"
                  data-bs-toggle="dropdown"
                  aria-haspopup="true"
                  aria-expanded="false"
                >
                  <i class="bx bx-dots-vertical-rounded"></i>
                </button>

              </div>
            </div>
            <h1 class="fw-semibold d-block mb-1" style="font-size: 30p">Work From Home Days</h1>
            <h3 class="card-title mb-2">{{$offdays->no_WFH}}Days</h3>
            <small class="text-success fw-semibold"><i class="bx bx-up-arrow-alt"></i> +72.80%</small>
          </div>
        </div>
      </div>

    </div>




    @if (session('status'))
                        <div class="alert alert-success">

                            {{ session('status') }}<i class="fa fa-check" aria-hidden="true"></i>

                        </div>
                    @endif


                    @if (session('wrong'))
                    <div class="alert alert-danger">

                        {{ session('wrong') }}<i class="fa fa-check" aria-hidden="true"></i>

                    </div>
                @endif
    <form action="{{route('offdays.store')}}"  method="POST" enctype="multipart/form-data">

        @csrf
        <div class="mb-3">
            <label class="form-label" for="basic-icon-default-fullname">Type Of Leave</label>
            <div class="input-group input-group-merge">
              <span id="basic-icon-default-fullname2" class="input-group-text">
                <i class="bx bx-image"></i>
            </span>

              <select class="form-select form-control"  aria-describedby="basic-icon-default-fullname2" name="holiday_type">
                <option  value="vacation" selected>Vacation</option>
                <option value="sick">Sick leave</option>
                <option value="work">Work From Home</option>
              </select>
            </div>
          </div>






      <div class="mb-3">
        <label class="form-label" for="basic-icon-default-fullname">Date Of Leave</label>
        <div class="input-group input-group-merge">
          <span id="basic-icon-default-fullname2" class="input-group-text"
            ><i class="bx bx-user"></i></span>



          <input type="date" class="form-control"   aria-describedby="basic-icon-default-fullname2" name="date"
                 value="2022-08-09"
                 min="2022-01-01" max="2022-12-31">

        </div>
      </div>





      <div class="mb-3">
        <label class="form-label" for="basic-icon-default-fullname">Number Of Leave Days</label>
        <div class="input-group input-group-merge">
          <span id="basic-icon-default-fullname2" class="input-group-text">
            <i class="bx bx-comment"></i>
        </span>
          <input type="text" class="form-control" id="basic-icon-default-fullname"  aria-describedby="basic-icon-default-fullname2"  name="no_of_days"/>
        </div>
      </div>

      <div class="mb-3">
        <label class="form-label" for="basic-icon-default-fullname">Reason Of Leave</label>
        <div class="input-group input-group-merge">
          <span id="basic-icon-default-fullname2" class="input-group-text">
            <i class="bx bx-comment"></i>
        </span>
          <input type="text" class="form-control" id="basic-icon-default-fullname"  aria-describedby="basic-icon-default-fullname2"  name="reason"/>
        </div>
      </div>





      <button type="submit" class="btn btn-primary" style="background-color: #f7ca44 ;border:#f7ca44">Request Leave</button>

    </form>
  </div>
    </div>
    </div>
<!-- / Content -->

@endsection
