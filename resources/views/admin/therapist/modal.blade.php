 <div class="modal fade common-modal createNewOrganizationModal"
                                id="createNewOrganizationModal">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>

                                        <h4 class="modal-hdng">Create new Therapist</h4>

                                        <form id = "contactform">
                                            @csrf
                                        <div class="modal-body">

                                            <div class="option-bx">
                                                <div class="hdng">
                                                    <p>Therapist ID</p>
                                                </div>
                                                <div class="cntnt">
                                                    <input type="text" name = "t_id" placeholder="Therapist ID"
                                                        class="mdl-inpt-bx @error('t_id') is-invalid @enderror" value="{{ old('t_id') }}">
                                                         @error('t_id')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                         @enderror
                                                </div>
                                            </div>

                                            <div class="option-bx">
                                                <div class="hdng">
                                                    <p>Name</p>
                                                </div>
                                                <div class="cntnt">
                                                    <div class="cntnt-dual-bx">

                                                        <input type="text" name = "first_name" placeholder="First" class="mdl-inpt-bx @error('first_name') is-invalid @enderror" value="{{ old('first_name') }}">
                                                         @error('first_name')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                         @enderror


                                                        <input type="text" name = "last_name" placeholder="Last" class="mdl-inpt-bx @error('last_name') is-invalid @enderror">
                                                        @error('last_name')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                         @enderror

                                                    </div>
                                                </div>
                                            </div>

                                            <div class="option-bx">
                                                <div class="hdng">
                                                    <p>Email</p>
                                                </div>
                                                <div class="cntnt">
                                                    <input type="text" name = "email" placeholder="Email" class="mdl-inpt-bx @error('email') is-invalid @enderror" value="{{ old('email') }}">

                                                     @error('email')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                         @enderror
                                                </div>
                                            </div>

                                            <div class="submit-btn-mn">
                                              <!--   <a href="#" class="submit-btn blue-btn"><i
                                                        class="fa fa-chevron-left"></i> Clear</a> -->
                                                <button type = "submit" class="submit-btn orange-btn">Create <i
                                                        class="fa fa-chevron-right"></i></button>

                                            </div>
                                             <span id="alert" style="color:red; font-size:20px;"></span>

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
       // var orgname = $("#orgname").val();
       // var name = $("#name").val();
       // var email = $("#email").val();
       // var address = $("#address").val();
      // var id = $(this).data('id');
      //alert(this.id);
      $.ajax({
        type: "POST",
        url: "../../admin/store/therapist/",
        data: $('#contactform').serialize(),
        success: function(response){
          //console.log(response)
         // $('#createNewOrganizationModal').location.reload();

         $('#createNewOrganizationModal').modal('hide'); 

         document.getElementById('success').innerHTML = 'Therapist Inserted SuccessFully';

          $('#createNewOrganizationModal').on('hidden.bs.modal', function (e) {
            location.reload();
        });




          
         

        
          
        },
        error: function(error) {
         
           document.getElementById('alert').innerHTML = 'All Fields Are Compulsory Or Something Went Wrong!';

            $('#createNewOrganizationModal').on('hidden.bs.modal', function (e) {
                location.reload();
            });
        }
      });
    });
    });
  </script>

