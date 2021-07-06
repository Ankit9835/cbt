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

                            @include('admin.therapist.modal')

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
                                       <!--  <div class="checkbx-td-mn">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox"
                                                    class="custom-control-input custom-checkbox-input" id="ckbCheckAll"
                                                    name="ckbCheckAll">
                                                <label class="custom-control-label custom-checkbox-label"
                                                    for="ckbCheckAll"></label>
                                            </div>
                                            <span>Therapist Id</span>
                                        </div> -->
                                        Sr. No
                                    </th>
                                    <th>Therapist ID</th>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Email</th>
                                    <th>action</th>
                                </tr>
                            </thead>
                            <tbody id="myTable">
                                @if(count($therapists) > 0)
                                @php $i = 0; @endphp
                                @foreach($therapists as $th => $row)
                                <tr>
                                    <td>
                                       <!--  <div class="checkbx-td-mn">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox"
                                                    class="custom-control-input custom-checkbox-input" id="Checkbox1"
                                                    name="Checkbox1">
                                                <label class="custom-control-label custom-checkbox-label"
                                                    for="Checkbox1"></label>
                                            </div>
                                            <span>Mike neil</span>
                                        </div> -->
                                       {{ ($therapists->currentpage()-1) * $therapists->perpage() + $th + 1 }}
                                    </td>
                                    <td> {{ $row->t_id }} </td>
                                    <td>{{ $row->first_name }}</td>
                                    <td>{{ $row->last_name }}</td>
                                    <td class="email-td">{{ $row->email }}</td>
                                    <td class="action-mn-td">
                                        <div class="action-btn-mn">
                                            @if($row->is_active == 1)
                                                  <a href="{{ url('admin/deactivate/therapist/'.$row->id) }}" id = "active" class="text-success"><i class="fa fa-thumbs-up"></i></a>
                                            @else
                                                 <a href="{{ url('admin/activate/therapist/'.$row->id) }}" id = "deactive" class="text-danger"><i class="fa fa-thumbs-down"></i></a>
                                            @endif
                                          
                                            <a href="#" style="color: #668cf6;" data-toggle="modal" data-target="#exampleModal{{ $row->id }}"><i class="fa fa-pencil"></i></a>
                                            <a href="{{ url('admin/therapist/softdelete/'.$row->id) }}" id = "delete" class="text-danger"><i class="fa fa-trash"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                @include('admin.therapist.edit_modal')
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