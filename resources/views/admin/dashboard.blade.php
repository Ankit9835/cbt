@extends('admin.layouts.master')

@section('admin_content')


 <div class="mn-bx admnstratr-dshbrd-pg">
       @include('admin.layouts.navbar')
        <div class="mn-cntnt">
            <div class="logo">
                <img src="{{ asset('backend/images/cbt_logo.png') }}" alt="Logo">
            </div>
            <div class="small-white-bx">
                <div class="small-white-bx-cntnt">
                    <div class="heading">
                        <p>Welcome, <span>Adeline Ng!</span></p>
                        <h1>Administrator dashboard</h1>
                    </div>
                    <div class="optn-bx-mn">
                        <div class="row">
                            <div class="col-md-4 col-sm-6 col-12 p-0 optn-bx-col">
                                <a href="{{ route('admin.patients') }}" class="optn-bx-mn-a">
                                    <div class="optn-bx-cntnt">
                                        <img src="{{ asset('backend/images/manage_users_logo.png') }}" class="bx-icon">
                                        <h3 class="bx-hdng">Manage patients</h3>
                                    </div>
                                </a>
                            </div>
                             <div class="col-md-4 col-sm-6 col-12 p-0 optn-bx-col">
                                <a href="{{ route('admin.therapists') }}" class="optn-bx-mn-a">
                                    <div class="optn-bx-cntnt">
                                        <img src="{{ asset('backend/images/manage_users_logo.png') }}" class="bx-icon">
                                        <h3 class="bx-hdng">Manage therapist</h3>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-4 col-sm-6 col-12 p-0 optn-bx-col">
                                <a href="{{ route('admin.organisation') }}" class="optn-bx-mn-a">
                                    <div class="optn-bx-cntnt">
                                        <img src="{{ asset('backend/images/manage_users_logo.png') }}" class="bx-icon">
                                        <h3 class="bx-hdng">Manage organisation</h3>
                                    </div>
                                </a>
                            </div>
                             
                           <!--  <div class="col-md-3 col-sm-6 col-12 p-0 optn-bx-col">
                                <a href="#" class="optn-bx-mn-a">
                                    <div class="optn-bx-cntnt">
                                        <img src="{{ asset('backend/images/quick_view.png') }}" class="bx-icon">
                                        <h3 class="bx-hdng">Quick view</h3>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-3 col-sm-6 col-12 p-0 optn-bx-col">
                                <a href="#" class="optn-bx-mn-a">
                                    <div class="optn-bx-cntnt">
                                        <img src="{{ asset('backend/images/billing_logo.png') }}" class="bx-icon">
                                        <h3 class="bx-hdng">Billing</h3>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-3 col-sm-6 col-12 p-0 optn-bx-col">
                                <a href="#" class="optn-bx-mn-a">
                                    <div class="optn-bx-cntnt">
                                        <img src="{{ asset('backend/images/reports_logo.png') }}" class="bx-icon">
                                        <h3 class="bx-hdng">Reports</h3>
                                    </div>
                                </a>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection