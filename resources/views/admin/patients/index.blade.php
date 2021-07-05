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
                            <a href="">Manange users</a>
                            <i class="fa fa-angle-right"></i>
                        </li>
                        <li>
                            <span>Patients</span>
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
                                    data-target="#createNewOrganizationModal">Create new user</a>
                            </div>

                            <!-- start modal is here -->

                            <div class="modal fade common-modal createNewOrganizationModal"
                                id="createNewOrganizationModal">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>

                                        <h4 class="modal-hdng">Create new user</h4>

                                        <div class="modal-body">

                                            <div class="option-bx">
                                                <div class="hdng">
                                                    <p>Client ID</p>
                                                </div>
                                                <div class="cntnt">
                                                    <input type="text" placeholder="Client ID" class="mdl-inpt-bx">
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

                                            <div class="option-bx">
                                                <div class="hdng">
                                                    <p>Organization</p>
                                                </div>
                                                <div class="cntnt">
                                                    <div class="selectdiv">
                                                        <select class="modal-select-bx">
                                                            <option value="1">Organization 1</option>
                                                            <option value="2">Organization 2</option>
                                                            <option value="3">Organization 3</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="option-bx">
                                                <div class="hdng">
                                                    <p>Billing Code</p>
                                                </div>
                                                <div class="cntnt">
                                                    <div class="selectdiv">
                                                        <select class="modal-select-bx">
                                                            <option value="1">125236</option>
                                                            <option value="2">254632</option>
                                                            <option value="3">248632</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="option-bx">
                                                <div class="hdng">
                                                    <p>Therapist</p>
                                                </div>
                                                <div class="cntnt">
                                                    <div class="selectdiv">
                                                        <select class="modal-select-bx">
                                                            <option value="1">Therapist Name</option>
                                                            <option value="1">Jason roy</option>
                                                            <option value="2">Alex hales</option>
                                                            <option value="3">Johny bairstow</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="option-bx">
                                                <div class="hdng">
                                                    <p>Plan</p>
                                                </div>
                                                <div class="cntnt">
                                                    <div class="selectdiv">
                                                        <select class="modal-select-bx">
                                                            <option value="1">1 Month</option>
                                                            <option value="2">2 Month</option>
                                                            <option value="3">3 Month</option>
                                                            <option value="6">6 Month</option>
                                                            <option value="12">12 Month</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="option-bx">
                                                <div class="hdng">
                                                    <p>Start Date</p>
                                                </div>
                                                <div class="cntnt">
                                                    <div class="form-group datepicker-mn-bx">
                                                        <div class="datepicker date input-group">
                                                            <input type="text" placeholder="DD/MM/YY"
                                                                class="mdl-inpt-bx" id="startDate">
                                                            <div class="input-group-append">
                                                                <i class="fa fa-calendar"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="option-bx">
                                                <div class="hdng">
                                                    <p>Renew</p>
                                                </div>
                                                <div class="cntnt">
                                                    <div class="selectdiv">
                                                        <select class="modal-select-bx">
                                                            <option value="1">No</option>
                                                            <option value="2">Yes</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="submit-btn-mn">
                                                <a href="#" class="submit-btn blue-btn"><i
                                                        class="fa fa-chevron-left"></i>
                                                    Clear</a>
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
                    <div class="data-table-mn cmn-table table-responsive patients-table">
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
                                            <span>Client ID</span>
                                        </div>
                                    </th>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Organization</th>
                                    <th>billing code</th>
                                    <th>Therapist</th>
                                    <th class="plan-th">Plan</th>
                                    <th>action</th>
                                </tr>
                            </thead>
                            <tbody id="myTable">
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
                                            <span>874585</span>
                                        </div>
                                    </td>
                                    <td class="firstName-td">Kevin</td>
                                    <td class="lastName-td">Roy</td>
                                    <td>Police</td>
                                    <td>98758</td>
                                    <td class="therapist-td">Mike neil</td>
                                    <td class="plan-td">1-month</td>
                                    <td class="action-mn-td">
                                        <div class="action-btn-mn">
                                            <a href="#" style="color: #3c4876;"><i class="fa fa-eye"></i></a>
                                            <a href="#" style="color: #668cf6;"><i class="fa fa-download"></i></a>
                                            <a href="#" style="color: #ffbd66;"><i class="fa fa-trash"></i></a>
                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <div class="checkbx-td-mn">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox"
                                                    class="custom-control-input custom-checkbox-input" id="Checkbox2"
                                                    name="Checkbox2">
                                                <label class="custom-control-label custom-checkbox-label"
                                                    for="Checkbox2"></label>
                                            </div>
                                            <span>685758</span>
                                        </div>
                                    </td>
                                    <td class="firstName-td">David</td>
                                    <td class="lastName-td">Jascon</td>
                                    <td>Police</td>
                                    <td>56858</td>
                                    <td class="therapist-td">Jason roy</td>
                                    <td class="plan-td">3-month</td>
                                    <td class="action-mn-td">
                                        <div class="action-btn-mn">
                                            <a href="#" style="color: #3c4876;"><i class="fa fa-eye"></i></a>
                                            <a href="#" style="color: #668cf6;"><i class="fa fa-download"></i></a>
                                            <a href="#" style="color: #ffbd66;"><i class="fa fa-trash"></i></a>
                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <div class="checkbx-td-mn">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox"
                                                    class="custom-control-input custom-checkbox-input" id="Checkbox3"
                                                    name="Checkbox3">
                                                <label class="custom-control-label custom-checkbox-label"
                                                    for="Checkbox3"></label>
                                            </div>
                                            <span>124586</span>
                                        </div>
                                    </td>
                                    <td class="firstName-td">Shawn</td>
                                    <td class="lastName-td">Belly</td>
                                    <td>Police</td>
                                    <td>76585</td>
                                    <td class="therapist-td">Alex hales</td>
                                    <td class="plan-td">6-month</td>
                                    <td class="action-mn-td">
                                        <div class="action-btn-mn">
                                            <a href="#" style="color: #3c4876;"><i class="fa fa-eye"></i></a>
                                            <a href="#" style="color: #668cf6;"><i class="fa fa-download"></i></a>
                                            <a href="#" style="color: #ffbd66;"><i class="fa fa-trash"></i></a>
                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <div class="checkbx-td-mn">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox"
                                                    class="custom-control-input custom-checkbox-input" id="Checkbox4"
                                                    name="Checkbox4">
                                                <label class="custom-control-label custom-checkbox-label"
                                                    for="Checkbox4"></label>
                                            </div>
                                            <span>324586</span>
                                        </div>
                                    </td>
                                    <td class="firstName-td">Virat</td>
                                    <td class="lastName-td">Belly</td>
                                    <td>Police</td>
                                    <td>25252</td>
                                    <td class="therapist-td">Jason hales</td>
                                    <td class="plan-td">2-month</td>
                                    <td class="action-mn-td">
                                        <div class="action-btn-mn">
                                            <a href="#" style="color: #3c4876;"><i class="fa fa-eye"></i></a>
                                            <a href="#" style="color: #668cf6;"><i class="fa fa-download"></i></a>
                                            <a href="#" style="color: #ffbd66;"><i class="fa fa-trash"></i></a>
                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <div class="checkbx-td-mn">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox"
                                                    class="custom-control-input custom-checkbox-input" id="Checkbox5"
                                                    name="Checkbox5">
                                                <label class="custom-control-label custom-checkbox-label"
                                                    for="Checkbox5"></label>
                                            </div>
                                            <span>124586</span>
                                        </div>
                                    </td>
                                    <td class="firstName-td">David</td>
                                    <td class="lastName-td">Belly</td>
                                    <td>Police</td>
                                    <td>76585</td>
                                    <td class="therapist-td">Smith hales</td>
                                    <td class="plan-td">6-month</td>
                                    <td class="action-mn-td">
                                        <div class="action-btn-mn">
                                            <a href="#" style="color: #3c4876;"><i class="fa fa-eye"></i></a>
                                            <a href="#" style="color: #668cf6;"><i class="fa fa-download"></i></a>
                                            <a href="#" style="color: #ffbd66;"><i class="fa fa-trash"></i></a>
                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <div class="checkbx-td-mn">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox"
                                                    class="custom-control-input custom-checkbox-input" id="Checkbox6"
                                                    name="Checkbox6">
                                                <label class="custom-control-label custom-checkbox-label"
                                                    for="Checkbox6"></label>
                                            </div>
                                            <span>758458</span>
                                        </div>
                                    </td>
                                    <td class="firstName-td">Kane</td>
                                    <td class="lastName-td">eoin</td>
                                    <td>Police</td>
                                    <td>76585</td>
                                    <td class="therapist-td">Morgan williams</td>
                                    <td class="plan-td">1-month</td>
                                    <td class="action-mn-td">
                                        <div class="action-btn-mn">
                                            <a href="#" style="color: #3c4876;"><i class="fa fa-eye"></i></a>
                                            <a href="#" style="color: #668cf6;"><i class="fa fa-download"></i></a>
                                            <a href="#" style="color: #ffbd66;"><i class="fa fa-trash"></i></a>
                                        </div>
                                    </td>
                                </tr>

                            </tbody>
                        </table>
                    </div>

                    <!-- start table section is here -->
                </div>
            </div>
        </div>
    </div>




@endsection