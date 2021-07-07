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
                    <h4 class="text-uppercase text-center mb-4"> Create Therapist </h4>
                                    <form method="POST" action="{{ route('store.therapist') }}">
                                        @csrf
                                            <div class = "row">
                                                <div class="col-sm-6">
                                                     <div class="option-bx">
                                                <div class="hdng">
                                                    <p>Therapist ID</p>
                                                </div>
                                                <div class="cntnt">
                                                    <input type="text" name = "t_id" placeholder="Therapist ID"
                                                        class="mdl-inpt-bx @error('t_id') is-invalid @enderror" value="{{ old('t_id') }}">
                                                         @error('t_id')
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
                                                    <div class="cntnt-dual-bx">

                                                        <input type="text" name = "first_name" placeholder="First" class="mdl-inpt-bx @error('first_name') is-invalid @enderror" value="{{ old('first_name') }}">
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
                                                    <div class="option-bx">
                                                <div class="hdng">
                                                    <p>Last Name</p>
                                                </div>
                                                <div class="cntnt">
                                                    <input type="text" name = "last_name" placeholder="Last" class="mdl-inpt-bx @error('last_name') is-invalid @enderror">
                                                        @error('last_name')
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
                                                    <p>Email</p>
                                                </div>
                                                <div class="cntnt">
                                                    <input type="text" name = "email" placeholder="Email" class="mdl-inpt-bx @error('email') is-invalid @enderror" value="{{ old('email') }}">

                                                     @error('email')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                         @enderror
                                                </div>
                                            </div>
                                                </div>
                                                
                                            </div>

                                            

                                            <div class="submit-btn-mn mt-5">
                                                
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