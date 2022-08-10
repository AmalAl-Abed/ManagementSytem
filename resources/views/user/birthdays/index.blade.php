@extends('dashboard')

@section('content')
              <!-- Hoverable Table rows -->
              @if(session()->has('message'))
                <div class="alert alert-success ">
                    {{ session()->get('message') }}
                </div>
              @endif
              <div class="card">

                <div class="table-responsive text-nowrap">
                  <table class="table table-hover">
                    <thead>
                      <tr>
                        <th>Name</th>
                        <th>Email</th>
                      <th>Upcoming Birthday</th>
                        <th>Actions</th>
                      </tr>
                    </thead>

                    <tbody class="table-border-bottom-0">
                        @foreach ($birthday as  $user)
                      <tr>
                        <td>{{$user->name}}</td>
                        <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{$user->email}}</strong></td>
                        <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong></strong>{{$user->birthday}}</td>
                        <td><span class="badge bg-label- me-1"></span><a href="mailto:{{$user->email}}">Wish them A HappyBirthday</a>  </td>


                        <td>
                          {{-- <div class="dropdown">
                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                              <i class="bx bx-dots-vertical-rounded"></i>
                            </button>
                            <div class="dropdown-menu">
                              <a class="dropdown-item" href=""
                                ><i class="bx bx-edit-alt me-1"></i> Edit</a
                              >

                              <form action="" method="POST" class="d-inline">
                                @method('DELETE')
                                @csrf
                                <span  class="dropdown-item"
                                  ><i class="bx bx-trash me-1"></i> <button style="border: none; background-color:transparent;margin:0;padding:0;font-weight: 400;
                                  color: #697a8d;">Delete</button></span
                                >
                            </form>
                            </div>
                          </div> --}}

                        </td>



                      </tr>

                      @endforeach

                    </tbody>
                  </table>
                </div>
              </div>

              {{-- pagination --}}
              {{-- <div class="pagination-wrapper">
                {{ $users->links('pagination::bootstrap-4')}}
              </div> --}}

              <!--/ Hoverable Table rows -->
@endsection
