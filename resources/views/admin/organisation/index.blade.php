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
                            <a href="{{ route('admin.organisation') }}">Manange organisations</a>
                            <i class="fa fa-angle-right"></i>
                        </li>
                        <li>
                            <span>Clients organization</span>
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
                                    data-target="#createNewOrganizationModal">Create new organization</a>
                            </div>

                            <!-- start modal is here -->

                            <div class="modal fade common-modal createNewOrganizationModal"
                                id="createNewOrganizationModal">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>

                                        <h4 class="modal-hdng">Create new client organization</h4>

                                        <div class="modal-body">

                                            <div class="option-bx">
                                                <div class="hdng">
                                                    <p>Organization</p>
                                                </div>
                                                <div class="cntnt">
                                                    <input type="text" placeholder="Organization" class="mdl-inpt-bx">
                                                </div>
                                            </div>

                                            <div class="option-bx">
                                                <div class="hdng">
                                                    <p>Organization ID</p>
                                                </div>
                                                <div class="cntnt">
                                                    <input type="text" placeholder="Organization ID"
                                                        class="mdl-inpt-bx">
                                                </div>
                                            </div>

                                            <div class="option-bx">
                                                <div class="hdng">
                                                    <p>Address</p>
                                                </div>
                                                <div class="cntnt">
                                                    <textarea placeholder="Address" class="mdl-inpt-bx"></textarea>
                                                </div>
                                            </div>

                                            <div class="option-bx">
                                                <div class="hdng">
                                                    <p>Contact Name</p>
                                                </div>
                                                <div class="cntnt">
                                                    <input type="text" placeholder="Contact Name" class="mdl-inpt-bx">
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

                                            <div class="approved-plan-chckbx-mn">

                                                <div class="hdng">
                                                    <p>Approved Plans</p>
                                                </div>

                                                <div class="checkbox-mn">
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox"
                                                            class="custom-control-input custom-checkbox-input"
                                                            id="month1" name="month1">
                                                        <label class="custom-control-label custom-checkbox-label"
                                                            for="month1">1-Month</label>
                                                    </div>
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox"
                                                            class="custom-control-input custom-checkbox-input"
                                                            id="month3" name="month3">
                                                        <label class="custom-control-label custom-checkbox-label"
                                                            for="month3">3-Month</label>
                                                    </div>
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox"
                                                            class="custom-control-input custom-checkbox-input"
                                                            id="month6" name="month6">
                                                        <label class="custom-control-label custom-checkbox-label"
                                                            for="month6">6-Month</label>
                                                    </div>
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox"
                                                            class="custom-control-input custom-checkbox-input"
                                                            id="month12" name="month12">
                                                        <label class="custom-control-label custom-checkbox-label"
                                                            for="month12">12-Month</label>
                                                    </div>
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
                                            <span>Organization</span>
                                        </div>
                                    </th>
                                    <th>billing code</th>
                                    <th>department</th>
                                    <th>contact</th>
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
                                            <span>Organization name</span>
                                        </div>
                                    </td>
                                    <td>127634</td>
                                    <td>Police</td>
                                    <td>34567-12763</td>
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
                                            <span>Organization name</span>
                                        </div>
                                    </td>
                                    <td>127635</td>
                                    <td>Police</td>
                                    <td>34567-12767</td>
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
                                            <span>Organization name</span>
                                        </div>
                                    </td>
                                    <td>127636</td>
                                    <td>Police</td>
                                    <td>34567-12768</td>
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
                                            <span>Organization name</span>
                                        </div>
                                    </td>
                                    <td>127637</td>
                                    <td>Police</td>
                                    <td>34567-12769</td>
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
                                            <span>Organization name</span>
                                        </div>
                                    </td>
                                    <td>127639</td>
                                    <td>Police</td>
                                    <td>34567-12760</td>
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
                                            <span>Organization name</span>
                                        </div>
                                    </td>
                                    <td>127630</td>
                                    <td>Police</td>
                                    <td>34567-12760</td>
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