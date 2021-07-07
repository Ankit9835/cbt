@extends('admin.layouts.master')

@section('admin_content')


    <div class="mn-bx patients-pg">
        @include('admin.layouts.navbar')
        <div class="mn-cntnt">
            <div class="logo">
                <img src="{{ asset('backend/images/cbt_logo.png') }}" alt="Logo">
            </div>
            <div class="small-white-bx dataTable-white-bx">

                <!-- start breadcumb section is here -->
                <div class="breadcumb-sctn">
                    <ul>
                        <li>
                            <a href="{{ route('admin.dashboard') }}">Administrator</a>
                            <i class="fa fa-angle-right"></i>
                        </li>
                        <li>
                            <a href="{{ route('admin.organisation') }}">Manange Organisations</a>
                            <i class="fa fa-angle-right"></i>
                        </li>
                        <li>
                            <span>Organisation</span>
                        </li>
                    </ul>
                </div>
                <!-- end breadcumb section is here -->

                <!-- start search section is here -->
             
                <!-- end search section is here -->

                <div class="small-white-bx-cntnt">
                    <h4 class="text-uppercase text-center mb-4"> Create Organisation </h4>
                                    <form method="POST" action="{{ url('admin/update/organisation/'.$row->id) }}">
                                        @csrf
                                            <div class = "row mt-4">
                                                <div class="col-sm-6">
                                                    <div class="option-bx">
                                                <div class="hdng">
                                                    <p>Organization Name</p>
                                                </div>
                                                <div class="cntnt">
                                                   <input type="text" id = "orgname" class="form-control @error('organisation_name') is-invalid @enderror" placeholder="Enter Organisation Name" name="organisation_name" value="{{ $row->organisation_name }}">
                                                 @error('organisation_name')
                                                      <span class="invalid-feedback" role="alert">
                                                          <strong>{{ $message }}</strong>
                                                      </span>
                                                 @enderror
                                                </div>
                                            </div>
                                                </div>
                                                <div class="col-sm-6">
                                                      <div class="option-bx">
                                                <div class="hdng">
                                                    <p>Name</p>
                                                </div>
                                                <div class="cntnt">
                                                    < <input type="text" id = "name" class="form-control @error('name') is-invalid @enderror" placeholder="Enter Your Name" name="name" value="{{ $row->name }}">  
                                                     @error('name')
                                                          <span class="invalid-feedback" role="alert">
                                                              <strong>{{ $message }}</strong>
                                                          </span>
                                                     @enderror  
                                                </div>
                                            </div>
                                                </div>
                                            </div>

                                             <div class = "row mt-4">
                                                <div class="col-sm-12">
                                                      <div class="option-bx">
                                                <div class="hdng">
                                                    <p>Email</p>
                                                </div>
                                                <div class="cntnt">
                                                      <input type="text" id = "" class="form-control @error('email') is-invalid @enderror" placeholder="Enter Your Email" name="email" value="{{ $row->email }}">
                                                     @error('email')
                                                          <span class="invalid-feedback" role="alert">
                                                              <strong>{{ $message }}</strong>
                                                          </span>
                                                     @enderror  
                                                </div>
                                            </div>
                                                </div> 
                                                <br>
                                               <div class="col-sm-3">
                                                   <input type="checkbox" name = "one_month_plan" value = "1" <?php if($row->one_month_plan == 1) echo 'checked'; ?>>
                                                   <span>One Month Plan</span>
                                                </div>
                                                 <div class="col-sm-3">
                                                  <input type="checkbox" name = "three_month_plan" value = "1" <?php if($row->three_month_plan == 1) echo 'checked'; ?>>
                                                  <span>Three Month Plan</span>
                                                </div>
                                                 <div class="col-sm-3">
                                                  <input type="checkbox" name = "six_month_plan" value = "1" <?php if($row->six_month_plan == 1) echo 'checked'; ?>>
                                                  <span>Six Month Plan</span>
                                                </div>
                                                 <div class="col-sm-3">
                                                   <input type="checkbox" name = "twelve_month_plan" value = "1" <?php if($row->twelve_month_plan == 1) echo 'checked'; ?>>
                                                   <span>Twelve Month Plan</span>  
                                                </div>
                                            </div>

                                             <div class = "row mt-4">
                                                <div class="col-sm-12">
                                                     <div class="option-bx">
                                                <div class="hdng">
                                                    <p>Email</p>
                                                </div>
                                                <div class="cntnt">
                                                    <textarea class="form-control @error('address') is-invalid @enderror" name = "address" rows = "5">{{ $row->address }}</textarea>
                                             @error('address')
                                                  <span class="invalid-feedback" role="alert">
                                                      <strong>{{ $message }}</strong>
                                                  </span>
                                             @enderror  
                                                </div>
                                            </div>
                                                </div>
                                                
                                            </div>

                                           



                                            <div class="submit-btn-mn">
                                                
                                                <button type = "submit" class="submit-btn orange-btn">Update <i
                                                        class="fa fa-chevron-right"></i></button>
                                            </div>
                                        </form>

                    <!-- start table section is here -->
                </div>
            </div>
        </div>
    </div>




@endsection