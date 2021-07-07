<div class="modal fade" id="exampleModal{{ $row->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Patient Information</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>
          
         <p> <strong> Patient ID: </strong> &nbsp; {{ $row->p_id }} </p>
         <p> <strong> First Name: </strong> {{ $row->first_name }} </p>
         <p> <strong> Last Name: </strong> {{ $row->last_name }} </p>
         <p> <strong> Email: </strong> {{ $row->email }} </p> 
         <p> <strong> Organisation Name: </strong>  {{ $row->organisation->organisation_name }}   </p>
          <p> <strong> Therapist Name: </strong>  {{ $row->therapist->first_name }}   </p>
        <p> <strong> Plain: </strong>  {{ $row->plain }}   </p>
        @if($row->renew == 1)
          <p> <strong> Renew: </strong>  YES   </p>
        @else
        <p> <strong> Renew: </strong>  NO   </p>
        @endif
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>