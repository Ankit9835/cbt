<div class="modal fade" id="exampleModal{{ $row->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Therapist Information</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <form method="POST" action="{{ url('admin/update/therapist/'.$row->id) }}">
        @csrf

         <div class="row mb-4">
            <div class="col-sm-12">
               <input type="text" class="form-control" name="first_name" value="{{ $row->first_name }}">  
            </div>
         </div>

          <div class="row mb-4">
            <div class="col-sm-12">
               <input type="text" class="form-control" name="last_name" value="{{ $row->last_name }}">  
            </div>
         </div>

          <div class="row mb-4">
            <div class="col-sm-12">
               <input type="text" class="form-control" name="email" value="{{ $row->email }}">  
            </div>
         </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
    </form>
    </div>
  </div>
</div>