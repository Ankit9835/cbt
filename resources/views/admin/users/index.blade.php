@extends('admin.layouts.master')

@section('admin_content')




<div class="mn-bx admnstratr-dshbrd-pg manage-users-pg">
       @include('admin.layouts.navbar')
        <div class="mn-cntnt">
            <div class="logo">
                <img src="{{ asset('backend/images/cbt_logo.png') }}" alt="Logo">
            </div>
            <div class="small-white-bx">
                <div class="breadcumb-sctn">
                    <ul>
                        <li>
                            <a href="#">Administrator</a>
                            <i class="fa fa-angle-right"></i>
                        </li>
                        <li>
                            <span>Manage users</span>
                        </li>
                    </ul>
                </div>
                <div class="small-white-bx-cntnt">
                    <div class="optn-bx-mn">
                        <div class="row">
                            <div class="col-md-4 col-sm-6 col-12 p-0 optn-bx-col">
                                <a href="#" class="optn-bx-mn-a">
                                    <div class="optn-bx-cntnt">
                                        <img src="{{ asset('backend/images/manage_clients_logo.png') }}" class="bx-icon">
                                        <h3 class="bx-hdng">Manage client organizations</h3>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-4 col-sm-6 col-12 p-0 optn-bx-col">
                                <a href="#" class="optn-bx-mn-a">
                                    <div class="optn-bx-cntnt">
                                        <img src="{{ asset('backend/images/manage_user_logo.png') }}" class="bx-icon">
                                        <h3 class="bx-hdng">Manage user <span>(patients)</span></h3>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-4 col-sm-6 col-12 p-0 optn-bx-col">
                                <a href="#" class="optn-bx-mn-a">
                                    <div class="optn-bx-cntnt">
                                        <img src="{{ asset('backend/images/manage_therapists_logo.png') }}" class="bx-icon">
                                        <h3 class="bx-hdng">Manage therapist</h3>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>




    

@endsection