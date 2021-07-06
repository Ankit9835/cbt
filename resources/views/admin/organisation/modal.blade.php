<div class="modal-body">
                                        <form method = "POST" action="{{ route('store.organisation') }}">
                                            @csrf
                                            <div class="option-bx">
                                                <div class="hdng">
                                                    <p>Organization Name</p>
                                                </div>
                                                <div class="cntnt">
                                                    <input type="text" name = "organisation_name" placeholder="Organisation"
                                                        class="mdl-inpt-bx @error('organisation_name') is-invalid @enderror" value="{{ old('organisation_name') }}">
                                                     @error('organisation_name')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                         @enderror
                                                </div>
                                            </div>

                                            <div class="option-bx">
                                                <div class="hdng">
                                                    <p>Organization ID</p>
                                                </div>
                                                <div class="cntnt">
                                                    <input type="text" name = "organisation_id" placeholder="Organization ID"
                                                        class="mdl-inpt-bx @error('organisation_id') is-invalid @enderror" value="{{ old('organisation_id') }}">
                                                    @error('organisation_id')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                         @enderror
                                                </div>
                                            </div>

                                            <div class="option-bx">
                                                <div class="hdng">
                                                    <p>Address</p>
                                                </div>
                                                <div class="cntnt">
                                                    <textarea placeholder="Address" name="address" class="mdl-inpt-bx @error('address') is-invalid @enderror" value="{{ old('address') }}"></textarea>
                                                     @error('address')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                         @enderror
                                                </div>
                                            </div>

                                            <div class="option-bx">
                                                <div class="hdng">
                                                    <p> Name</p>
                                                </div>
                                                <div class="cntnt">
                                                    <input type="text" name="name" class="mdl-inpt-bx @error('name') is-invalid @enderror" value="{{ old('name') }}" placeholder="Name">
                                                @error('name')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                @enderror
                                                </div>
                                            </div>

                                            <div class="option-bx">
                                                <div class="hdng">
                                                    <p>Email</p>
                                                </div>
                                                <div class="cntnt">
                                                    <input type="email" name="email" placeholder="Email" class="mdl-inpt-bx @error('email') is-invalid @enderror" value="{{ old('email') }}">
                                                     @error('email')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                @enderror
                                                </div>
                                            </div>

                                            <div class="approved-plan-chckbx-mn">

                                                <div class="hdng">
                                                    <p>Approved Plans</p>
                                                </div>

                                                <div class="checkbox-mn">
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" name = "one_month_plan"
                                                            class="custom-control-input custom-checkbox-input"
                                                            id="month1" value="1">
                                                        <label class="custom-control-label custom-checkbox-label"
                                                            for="month1">1-Month</label>
                                                    </div>
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox"
                                                            class="custom-control-input custom-checkbox-input"
                                                            id="month3" name = "three_month_plan" value="1">
                                                        <label class="custom-control-label custom-checkbox-label"
                                                            for="month3">3-Month</label>
                                                    </div>
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox"
                                                            class="custom-control-input custom-checkbox-input"
                                                            id="month6" name = "six_month_plan" value="1">
                                                        <label class="custom-control-label custom-checkbox-label"
                                                            for="month6">6-Month</label>
                                                    </div>
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox"
                                                            class="custom-control-input custom-checkbox-input"
                                                            id="month12" name = "twelve_month_plan" value="1">
                                                        <label class="custom-control-label custom-checkbox-label"
                                                            for="month12">12-Month</label>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="submit-btn-mn">
                                              
                                                <button type = "submit" class="submit-btn orange-btn">Create <i
                                                        class="fa fa-chevron-right"></i></button>
                                            </div>
                                        </form>
 </div>