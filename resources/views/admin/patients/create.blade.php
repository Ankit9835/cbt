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
                            <a href="{{ route('admin.patients') }}">Manange Patients</a>
                            <i class="fa fa-angle-right"></i>
                        </li>
                        <li>
                            <span>Patients</span>
                        </li>
                    </ul>
                </div>
                <!-- end breadcumb section is here -->

                <!-- start search section is here -->
             
                <!-- end search section is here -->

                <div class="small-white-bx-cntnt">
                    <h4 class="text-uppercase text-center mb-4"> Create Patients </h4>
                                    <form method="POST" action="{{ route('store.patient') }}">
                                        @csrf
                                            <div class = "row">
                                                <div class="col-sm-6">
                                                    <div class="option-bx mb-4">
                                                        <div class="hdng">
                                                            <p>Patient ID</p>
                                                        </div>
                                                        <div class="cntnt">
                                     <input type="text"  placeholder="Patient Id" class="mdl-inpt-bx  @error('p_id') is-invalid @enderror" name="p_id">
                                                         @error('p_id')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                         @enderror 
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                     <div class="option-bx mb-4">
                                                <div class="hdng">
                                                    <p>First Name</p>
                                                </div>
                                                <div class="cntnt">
                                                    <div class="cntnt-dual-bx">
                                                        <input type="text" name="first_name" placeholder="First" class="mdl-inpt-bx  @error('first_name') is-invalid @enderror" value="{{ old('first_name') }}">
                                                         @error('first_name')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                         @enderror 
                                                    </div>
                                                </div>
                                            </div>
                                                </div>
                                            </div>

                                             <div class = "row">
                                                <div class="col-sm-6">
                                                    <div class="option-bx mb-4">
                                                <div class="hdng">
                                                    <p>Last Name</p>
                                                </div>
                                                <div class="cntnt">
                                                    <input type="text" name="last_name" placeholder="Last Name" class="mdl-inpt-bx @error('last_name') is-invalid @enderror" value="{{ old('first_name') }}">
                                                      @error('last_name')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                         @enderror 
                                                </div>
                                            </div>
                                                </div>
                                                <div class="col-sm-6">
                                                     <div class="option-bx mb-4">
                                                <div class="hdng">
                                                    <p>Email</p>
                                                </div>
                                                <div class="cntnt">
                                                    <input type="text" name="email" placeholder="Email" class="mdl-inpt-bx @error('email') is-invalid @enderror" value="{{ old('email') }}">
                                                     @error('email')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                         @enderror 
                                                </div>
                                            </div>
                                                </div>
                                            </div>

                                             <div class = "row">
                                                <div class="col-sm-6">
                                                     <div class="option-bx mb-4">
                                                <div class="hdng">
                                                    <p>Organization</p>
                                                </div>
                                                <div class="cntnt">
                                                    <div class="selectdiv">
                                                        <select class="modal-select-bx @error('organisation_id') is-invalid @enderror" name="organisation_id">
                                                            <option selected="true" disabled="disabled">Choose Organisation</option>
                                                             @foreach($org as $name)
                                                            <option value="{{ $name->id }}">{{ $name->organisation_name }}</option>
                                                            @endforeach
                                                        </select>
                                                        @error('organisation_id')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                         @enderror 
                                                    </div>
                                                </div>
                                            </div>
                                                </div>
                                                <div class="col-sm-6">
                                                     <div class="option-bx mb-4">
                                                <div class="hdng">
                                                    <p>Therapist</p>
                                                </div>
                                                <div class="cntnt">
                                                    <div class="selectdiv">
                                                        <select class="modal-select-bx  @error('therapist_id') is-invalid @enderror" name="therapist_id">
                                                             <option selected="true" disabled="disabled">Choose Therapist</option>
                                                              @foreach($therapists as $therapist)
                                                            <option value="{{ $therapist->id }}">{{ $therapist->first_name }}</option>
                                                            @endforeach
                                                            
                                                        </select>
                                                         @error('therapist_id')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                         @enderror 
                                                    </div>
                                                </div>
                                            </div>
                                                </div>
                                            </div>

                                             <div class = "row">
                                                <div class="col-sm-6">
                                                     <div class="option-bx mb-4">
                                                <div class="hdng">
                                                    <p>Plan</p>
                                                </div>
                                                <div class="cntnt">
                                                    <div class="selectdiv">
                                                        <select class="modal-select-bx @error('plain') is-invalid @enderror" name="plain">
                                                            <option selected="true" disabled="disabled">Choose Plan</option>
                                                            <option value="1-month">1 Month</option>
                                                            <option value="3-month">3 Month</option>
                                                            <option value="6-month">6 Month</option>
                                                            <option value="12-month">12 Month</option>
                                                        </select>
                                                         @error('plain')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                         @enderror 
                                                    </div>
                                                </div>
                                            </div>
                                                </div>
                                                <div class="col-sm-6">
                                                     <div class="option-bx mb-4">
                                                <div class="hdng">
                                                    <p>Start Date</p>
                                                </div>
                                                <div class="cntnt">
                                                    <div class="form-group">
                                                        <div class="input-group">
                                                            <input type="date" placeholder="DD/MM/YY"
                                                                class="mdl-inpt-bx @error('start_date') is-invalid @enderror" name="start_date">
                                                             @error('start_date')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                         @enderror   
                                                            
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                                </div>
                                            </div>


                                             <div class = "row">
                                               
                                                <div class="col-sm-12">
                                                      <div class="option-bx mb-4">
                                                <div class="hdng">
                                                    <p>Renew</p>
                                                </div>
                                                <div class="cntnt">
                                                    <div class="selectdiv">
                                                        <select class="modal-select-bx @error('renew') is-invalid @enderror" name="renew">
                                                            <option selected="true" disabled="disabled">Choose</option>
                                                            <option value="0">No</option>
                                                            <option value="1">Yes</option>
                                                        </select>
                                                         @error('renew')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                         @enderror   
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