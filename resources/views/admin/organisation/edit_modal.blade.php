<div class="modal fade" id="example{{ $row->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Organisation Information</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      
        <form id = "contactform" class="php-email-form">
        @csrf

         

          <div class="row mb-4">
            <div class="col-sm-12">
               <input type="text" id = "orgname" class="form-control @error('organisation_name') is-invalid @enderror" placeholder="Enter Organisation Name" name="organisation_name" value="{{ $row->organisation_name }}">
                 @error('organisation_name')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                 @enderror   
            </div>
         </div>

          <div class="row mb-4">
            <div class="col-sm-12">
               <input type="text" id = "name" class="form-control @error('name') is-invalid @enderror" placeholder="Enter Your Name" name="name" value="{{ $row->name }}">  
                 @error('name')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                 @enderror  
            </div>
         </div>

         <div class="row mb-4">
            <div class="col-sm-12">
               <input type="text" id = "" class="form-control @error('email') is-invalid @enderror" placeholder="Enter Your Email" name="email" value="{{ $row->email }}">
                 @error('email')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                 @enderror  
            </div>
         </div>

         <div class="row mb-4">
            <div class="col-sm-3">
               <input type="checkbox" name = "one_month_plan" value = "1" <?php if($row->one_month_plan == 1) echo 'checked'; ?>>
               <span>One Month Plan</span>
            </div>
             <div class="col-sm-3">
              <input type="checkbox" name = "three_month_plan" value = "1" <?php if($row->three_month_plan == 1) echo 'checked'; ?>>
              <span>Three Month Plan</span>
            </div>
             <div class="col-sm-3">
              <input type="checkbox" name = "six_month_plan" value = "1" <?php if($row->six_month_plan == 1) echo 'checked'; ?>>
              <span>Six Month Plan</span>
            </div>
             <div class="col-sm-3">
               <input type="checkbox" name = "twelve_month_plan" value = "1" <?php if($row->twelve_month_plan == 1) echo 'checked'; ?>>
               <span>Twelve Month Plan</span>  
            </div>
         </div>

          <div class="row mb-4">
            <div class="col-sm-12">
              <textarea class="form-control @error('address') is-invalid @enderror" name = "address" rows = "5">{{ $row->address }}</textarea>
                 @error('address')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                 @enderror  
            </div>
         </div>

      </div>
       <span id="alert" style="color:red; font-size:20px;"></span>
            <span id="success" style="color:green; font-size:20px;"></span>
      <div class="modal-footer">
       <!--  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> -->
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
    </form>
    </div>
  </div>
</div>


<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

 <script>
    $(document).ready(function(){
    $('#contactform').on('submit', function(e){
      e.preventDefault();
       var orgname = $("#orgname").val();
       var name = $("#name").val();
       var email = $("#email").val();
       var address = $("#address").val();
      // var id = $(this).data('id');
      //alert(this.id);
      $.ajax({
        type: "GET",
        url: "../../admin/update/organisation/" + <?php echo $row->id ?>,
        data: $('#contactform').serialize(),
        success: function(response){
          //console.log(response)
          //document.getElementById('success').innerHTML = 'Organisation Updated SuccessFully';
           $('#example{{ $row->id }}').modal('hide');
          
        },
        error: function(error) {
         
          // document.getElementById('alert').innerHTML = 'Something Went Wrong!';
        }
      });
    });
    });
  </script>