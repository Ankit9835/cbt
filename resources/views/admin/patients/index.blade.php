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
                               <!--  <a href="#" class="modal-open-link" type="button" data-toggle="modal"
                                    data-target="#createNewOrganizationModal">Create new Patient</a> -->
                                     <a href="{{ route('patient.create') }}" class="modal-open-link">Create new Patient</a>
                            </div>

                           

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
                                    <th> Sr. No </th>
                                    <th>
                                        <!-- <div class="checkbx-td-mn">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox"
                                                    class="custom-control-input custom-checkbox-input" id="ckbCheckAll"
                                                    name="ckbCheckAll">
                                                <label class="custom-control-label custom-checkbox-label"
                                                    for="ckbCheckAll"></label>
                                            </div>
                                            <span>Client ID</span>
                                        </div> -->
                                        Patient ID
                                    </th>
                                    <th>First Name</th>
                                   
                                    <th>Email</th>
                                    <th>Organization</th>
                                    
                                    
                                    <th>action</th>
                                </tr>
                            </thead>
                            <tbody id="myTable">
                                 @if(count($patients) > 0)
                                @php $i = 0; @endphp
                                @foreach($patients as $pt => $row)
                                <tr>
                                    <td> {{ ($patients->currentpage()-1) * $patients->perpage() + $pt + 1 }} </td>
                                    <td>
                                        <!-- <div class="checkbx-td-mn">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox"
                                                    class="custom-control-input custom-checkbox-input" id="Checkbox1"
                                                    name="Checkbox1">
                                                <label class="custom-control-label custom-checkbox-label"
                                                    for="Checkbox1"></label>
                                            </div>
                                            <span>874585</span>
                                        </div> -->
                                        {{ $row->p_id }}
                                    </td>
                                    <td class="firstName-td">{{ $row->first_name }}</td>
                                    
                                    <td>{{ $row->email }}</td>
                                    <td>{{ $row->organisation->organisation_name }}</td>
                                   
                                    <td class="action-mn-td">
                                        <div class="action-btn-mn">
                                            <a href="#" style="color: #3c4876;" data-toggle="modal" data-target="#exampleModal{{ $row->id }}"><i class="fa fa-eye"></i></a>
                                             @if($row->is_active == 1)
                                                  <a href="{{ url('admin/deactivate/patient/'.$row->id) }}" id = "active" class="text-success"><i class="fa fa-thumbs-up"></i></a>
                                            @else
                                                 <a href="{{ url('admin/activate/patient/'.$row->id) }}" id = "deactive" class="text-danger"><i class="fa fa-thumbs-down"></i></a>
                                            @endif
                                            <a href="{{ url('admin/patient/edit/'.$row->id) }}" style="color: #668cf6;"><i class="fa fa-pencil"></i></a>
                                            <a href="{{ url('admin/patient/softdelete/'.$row->id) }}" id ="delete" style="color: #ffbd66;"><i class="fa fa-trash"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                 @include('admin.patients.view_modal')
                                 @endforeach
                                @else
                                    No Client Organisation Found
                                @endif
                               

                            </tbody>
                        </table>
                        {{ $patients->links() }}
                    </div>

                    <!-- start table section is here -->
                </div>
            </div>
        </div>
    </div>




@endsection