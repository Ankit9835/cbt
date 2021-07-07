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
                                    <form method="POST" action="{{ route('store.organisation') }}">
                                        @csrf
                                            <div class = "row mt-4">
                                                <div class="col-sm-6">
                                                    <div class="option-bx">
                                                <div class="hdng">
                                                    <p>Organization Name</p>
                                                </div>
                                                <div class="cntnt">
                                                    <input type="text" name = "organisation_name" placeholder="Organisation"
                                                        class="mdl-inpt-bx @error('organisation_name') is-invalid @enderror" value="{{ old('organisation_name') }}">
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
                                                    <p>Organization ID</p>
                                                </div>
                                                <div class="cntnt">
                                                    <input type="text" name = "organisation_id" placeholder="Organization ID"
                                                        class="mdl-inpt-bx @error('organisation_id') is-invalid @enderror" value="{{ old('organisation_id') }}">
                                                    @error('organisation_id')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                         @enderror
                                                </div>
                                            </div>
                                                </div>
                                            </div>

                                             <div class = "row mt-4">
                                                <div class="col-sm-6">
                                                     <div class="option-bx">
                                                <div class="hdng">
                                                    <p>Address</p>
                                                </div>
                                                <div class="cntnt">
                                                    <textarea placeholder="Address" name="address" class="mdl-inpt-bx @error('address') is-invalid @enderror" value="{{ old('address') }}"></textarea>
                                                     @error('address')
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
                                                    <p> Name</p>
                                                </div>
                                                <div class="cntnt">
                                                    <input type="text" name="name" class="mdl-inpt-bx @error('name') is-invalid @enderror" value="{{ old('name') }}" placeholder="Name">
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
                                                    <input type="email" name="email" placeholder="Email" class="mdl-inpt-bx @error('email') is-invalid @enderror" value="{{ old('email') }}">
                                                     @error('email')
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
                                                     
                                            <div class="approved-plan-chckbx-mn">

                                                <div class="hdng">
                                                    <p>Approved Plans</p>
                                                </div>

                                                <div class="checkbox-mn">
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" name = "one_month_plan"
                                                            class="custom-control-input custom-checkbox-input"
                                                            id="month1" value="1">
                                                        <label class="custom-control-label custom-checkbox-label"
                                                            for="month1">1-Month</label>
                                                    </div>
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox"
                                                            class="custom-control-input custom-checkbox-input"
                                                            id="month3" name = "three_month_plan" value="1">
                                                        <label class="custom-control-label custom-checkbox-label"
                                                            for="month3">3-Month</label>
                                                    </div>
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox"
                                                            class="custom-control-input custom-checkbox-input"
                                                            id="month6" name = "six_month_plan" value="1">
                                                        <label class="custom-control-label custom-checkbox-label"
                                                            for="month6">6-Month</label>
                                                    </div>
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox"
                                                            class="custom-control-input custom-checkbox-input"
                                                            id="month12" name = "twelve_month_plan" value="1">
                                                        <label class="custom-control-label custom-checkbox-label"
                                                            for="month12">12-Month</label>
                                                    </div>
                                                </div>
                                            </div>

                                                </div>
                                               
                                            </div>



                                            <div class="submit-btn-mn">
                                                
                                                <button type = "submit" class="submit-btn orange-btn">Create <i
                                                        class="fa fa-chevron-right"></i></button>
                                            </div>
                                        </form>

                    <!-- start table section is here -->
                </div>
            </div>
        </div>
    </div>




@endsection