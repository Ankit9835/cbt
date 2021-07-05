@extends('admin.layouts.master')

@section('admin_content')



    <div class="mn-bx client-organization-pg">
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
                            <a href="{{ route('admin.therapists') }}">Manange therapist</a>
                            <i class="fa fa-angle-right"></i>
                        </li>
                        <li>
                            <span>Therapist</span>
                        </li>
                    </ul>
                </div>
                <!-- end breadcumb section is here -->

                <!-- start search section is here -->
                <div class="search-sctn">
                    <div class="row search-sctn-mn-row">
                        <div class="col-sm-6">
                            <div class="lft srch-bx">
                                <input class="form-control" id="myInput" type="text" placeholder="Search">
                                <!-- <button type="submit">
                                    <i class="fa fa-search"></i>
                                </button> -->
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="rght text-right">
                                <a href="#" class="modal-open-link" type="button" data-toggle="modal"
                                    data-target="#createNewOrganizationModal">Create new Therapist</a>
                            </div>

                            <!-- start modal is here -->

                            <div class="modal fade common-modal createNewOrganizationModal"
                                id="createNewOrganizationModal">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>

                                        <h4 class="modal-hdng">Create new Therapist</h4>

                                        <div class="modal-body">

                                            <div class="option-bx">
                                                <div class="hdng">
                                                    <p>Therapist ID</p>
                                                </div>
                                                <div class="cntnt">
                                                    <input type="text" placeholder="Therapist ID"
                                                        class="mdl-inpt-bx">
                                                </div>
                                            </div>

                                            <div class="option-bx">
                                                <div class="hdng">
                                                    <p>Name</p>
                                                </div>
                                                <div class="cntnt">
                                                    <div class="cntnt-dual-bx">
                                                        <input type="text" placeholder="First" class="mdl-inpt-bx">
                                                        <input type="text" placeholder="Last" class="mdl-inpt-bx">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="option-bx">
                                                <div class="hdng">
                                                    <p>Email</p>
                                                </div>
                                                <div class="cntnt">
                                                    <input type="text" placeholder="Email" class="mdl-inpt-bx">
                                                </div>
                                            </div>

                                            <div class="submit-btn-mn">
                                                <a href="#" class="submit-btn blue-btn"><i
                                                        class="fa fa-chevron-left"></i> Clear</a>
                                                <a href="#" class="submit-btn orange-btn">Create <i
                                                        class="fa fa-chevron-right"></i></a>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- end modal is here -->

                        </div>
                    </div>
                </div>
                <!-- end search section is here -->
                <div class="small-white-bx-cntnt">

                    <!-- start table section is here -->
                    <div class="data-table-mn cmn-table table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>
                                        <div class="checkbx-td-mn">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox"
                                                    class="custom-control-input custom-checkbox-input" id="ckbCheckAll"
                                                    name="ckbCheckAll">
                                                <label class="custom-control-label custom-checkbox-label"
                                                    for="ckbCheckAll"></label>
                                            </div>
                                            <span>Therapist Id</span>
                                        </div>
                                    </th>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Email</th>
                                    <th>action</th>
                                </tr>
                            </thead>
                            <tbody id="myTable">
                                @if(count($therapists) > 0)
                                @foreach($therapists as $row)
                                <tr>
                                    <td>
                                        <div class="checkbx-td-mn">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox"
                                                    class="custom-control-input custom-checkbox-input" id="Checkbox1"
                                                    name="Checkbox1">
                                                <label class="custom-control-label custom-checkbox-label"
                                                    for="Checkbox1"></label>
                                            </div>
                                            <span>Mike neil</span>
                                        </div>
                                    </td>
                                    <td>Kevin</td>
                                    <td>Roy</td>
                                    <td class="email-td">kevin.roy@gmail.com</td>
                                    <td class="action-mn-td">
                                        <div class="action-btn-mn">
                                            <a href="#" style="color: #3c4876;"><i class="fa fa-eye"></i></a>
                                            <a href="#" style="color: #668cf6;"><i class="fa fa-download"></i></a>
                                            <a href="#" style="color: #ffbd66;"><i class="fa fa-trash"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                                @else
                                    No Therapist Found
                                @endif
                               
                            </tbody>
                        </table>
                         {{ $therapists->links() }}
                    </div>

                    <!-- start table section is here -->
                </div>
            </div>
        </div>
    </div>




  @endsection