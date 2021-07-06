<div class="modal fade" id="exampleModal{{ $row->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Organisation Information</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>
          
         <p> <strong> Organisation ID: </strong> &nbsp; {{ $row->organisation_id }} </p>
         <p> <strong> Organisation Name: </strong> {{ $row->organisation_name }} </p>
         <p> <strong> Name: </strong> {{ $row->name }} </p>
         <p> <strong> Email: </strong> {{ $row->email }} </p>
         @if($row->one_month_plan == 0)
          <p> <strong> One Month Plan: </strong> <span class="badge badge-warning"> No Plan </span> </p>
         @else
         <p> <strong> One Month Plan: </strong> <span class="badge badge-success"> Available </span> </p>
         @endif

         @if($row->three_month_plan == 0)
          <p> <strong> Three Month Plan: </strong> <span class="badge badge-warning"> No Plan </span> </p>
         @else
         <p> <strong> Three Month Plan: </strong> <span class="badge badge-success"> Available </span> </p>
         @endif

         @if($row->six_month_plan == 0)
          <p> <strong> Six Month Plan: </strong> <span class="badge badge-warning"> No Plan </span> </p>
         @else
         <p> <strong> Six Month Plan: </strong> <span class="badge badge-success"> Available </span> </p>
         @endif

         @if($row->twelve_month_plan == 0)
          <p> <strong> Twelve Month Plan: </strong> <span class="badge badge-warning"> No Plan </span> </p>
         @else
         <p> <strong> Twelve Month Plan: </strong> <span class="badge badge-success"> Available </span> </p>
         @endif 

         @if($row->is_active == 0)
          <p> <strong> Status: </strong> <span class="badge badge-danger"> In Active </span> </p>
         @else
         <p> <strong> Status: </strong> <span class="badge badge-success"> Active </span> </p>
         @endif 
       
        </p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>