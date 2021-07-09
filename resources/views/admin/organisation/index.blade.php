@extends('admin.layouts.master')

@section('admin_content')

    <div class="mn-bx client-organization-pg">
        @include('admin.layouts.navbar')
        <div class="mn-cntnt">
            <div class="logo">
                <img src="{{ asset('backend/images/cbt_logo.png') }}" alt="Logo">
            </div>
            <div class="small-white-bx dataTable-white-bx">

                <span id="success" style="color:green;  font-size:20px;"></span>

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
                                  <!--   <a href="{{ route('organisation.create') }}">Create new organization</a> -->
                            </div>

                            @include('admin.organisation.modal')

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
                                    <th>Sr. No</th>
                                    <th>
                                        
                                        Organization ID
                                    </th>
                                    <th>Organisation Name</th>
                                    <th>Name</th>
                                  
                                    <th>action</th>
                                </tr>
                            </thead>
                            <tbody id="myTable">
                               @if(count($organisations) > 0)
                                @php $i = 0; @endphp
                                @foreach($organisations as $or => $row)
                                <tr>
                                    <td>  {{ ($organisations->currentpage()-1) * $organisations->perpage() + $or + 1 }} </td>
                                    <td>
                                       <!--  <div class="checkbx-td-mn">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox"
                                                    class="custom-control-input custom-checkbox-input" id="Checkbox1"
                                                    name="Checkbox1">
                                                <label class="custom-control-label custom-checkbox-label"
                                                    for="Checkbox1"></label>
                                            </div>
                                            <span>Organization name</span>
                                        </div> -->
                                        212345
                                    </td>
                                    
                                    <td>{{ $row->organisation_name }}</td>
                                    <td>{{ $row->name }}</td>
                                   
                                    <td class="action-mn-td">
                                        <div class="action-btn-mn">
                                            <a href="#" style="color: #3c4876;" data-toggle="modal" data-target="#exampleModal{{ $row->id }}"><i class="fa fa-eye"></i></a>
                                             @if($row->is_active == 1)
                                                  <a href="{{ url('admin/deactivate/organisation/'.$row->id) }}" id = "active" class="text-success"><i class="fa fa-thumbs-up"></i></a>
                                            @else
                                                 <a href="{{ url('admin/activate/organisation/'.$row->id) }}" id = "deactive" class="text-danger"><i class="fa fa-thumbs-down"></i></a>
                                            @endif

                                             <a href="{{ url('admin/edit/organisation/'.$row->id) }}" style="color: #668cf6;"><i class="fa fa-pencil"></i></a>

                                            <a href="{{ url('admin/organisation/softdelete/'.$row->id) }}" id="delete" style="color: #ffbd66;"><i class="fa fa-trash"></i></a>

                                        </div>
                                    </td>
                                </tr>
                              
                                @include('admin.organisation.view_modal') 
                                @endforeach
                                @else
                                    No Client Organisation Found
                                @endif
                               
                            </tbody>
                        </table>
                         {{ $organisations->links() }}
                    </div>

                    <!-- start table section is here -->
                </div>
            </div>
        </div>
    </div>



@endsection