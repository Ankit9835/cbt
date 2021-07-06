 <div class="modal fade common-modal createNewOrganizationModal"
                                id="createNewOrganizationModal">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>

                                        <h4 class="modal-hdng">Create new Therapist</h4>

                                        <form method = "POST" action = "{{ route('store.therapist') }}">
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

                                        </div>
                                    </form>
                                    </div>
                                </div>
                            </div>

