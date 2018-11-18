<!--Modal: Login / Register Form-->
        <div class="modal fade" id="modalLRForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog cascading-modal" role="document">
                <!--Content-->
                <div class="modal-content">

                    <!--Modal cascading tabs-->
                    <div class="modal-c-tabs">

                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs md-tabs tabs-2 blue-gradient darken-3" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#panel7" role="tab"><i class="fa fa-user mr-1"></i>
                                    Login</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#panel8" role="tab"><i class="fa fa-user-plus mr-1"></i>
                                    Daftar</a>
                            </li>
                        </ul>

                        <!-- Tab panels -->
                        <div class="tab-content">
                            <!--Panel 7-->
                            <div class="tab-pane fade in show active" id="panel7" role="tabpanel">

                                <!--Body-->
                                <div class="modal-body mb-1">
                                	<form method="POST" action="{{ route('login') }}">
                                	@csrf
	                                    <div class="md-form form-sm mb-4">
	                                        <div class="file-field">

	                                            <div class="file-path-wrapper">

	                                                <i class="fa fa-envelope prefix"></i>
	                                                <input type="email" id="modalLRInput11" class="form-control form-control-sm validate" name="email">
	                                                <label data-error="wrong" data-success="right" for="modalLRInput11"> Your Email</label>
	                                            </div>
	                                        </div>
	                                    </div>

	                                    <div class="md-form form-sm mb-4">
	                                        <div class="file-field">

	                                            <div class="file-path-wrapper">

	                                                <i class="fa fa-lock prefix"></i>
	                                                <input type="password" id="modalLRInput11" class="form-control form-control-sm validate" name="password">
	                                                <label data-error="wrong" data-success="right" for="modalLRInput11"> Your password</label>
	                                            </div>
	                                        </div>
	                                    </div>
	                                    <div class="text-center mt-2">
	                                        <button class="btn blue-gradient btn-block btn-rounded z-depth-1a">Log in <i class="fa fa-sign-in ml-1"></i></button>
	                                    </div>
                                	</form>
                                </div>
                                <!--Footer-->
                                <div class="modal-footer">
                                    <div class="options text-center text-md-right mt-1">
                                        <p>Lupa <a href="/password/reset" class="blue-text">Password?</a></p>
                                    </div>
                                    <button type="button" class="btn btn-outline-info waves-effect ml-auto" data-dismiss="modal">Close</button>
                                </div>

                            </div>
                            <!--/.Panel 7-->

                            <!--Panel 8-->
                            <div class="tab-pane fade" id="panel8" role="tabpanel">

                                <!--Body-->
                                <div class="modal-body">
                                	<form method="POST" action="{{ route('register') }}">
                                		@csrf
	                                    <div class="md-form form-sm mb-5">
	                                        <div class="file-field">

	                                            <div class="file-path-wrapper">

	                                                <i class="fa fa-user prefix"></i>
	                                                <input type="text" id="modalLRInput12" class="form-control form-control-sm validate" placeholder="Nama Lengkap" name="name">
	                                              
	                                            </div>
	                                        </div>
	                                        <br>
	                                        <div class="file-field">

	                                            <div class="file-path-wrapper">

	                                                <i class="fa fa-envelope prefix"></i>
	                                                <input type="email" id="modalLRInput12" class="form-control form-control-sm validate" placeholder="E-mail" name="email">
	                                              
	                                            </div>
	                                        </div>
	                                        <br>
	                                        <div class="file-field">

	                                            <div class="file-path-wrapper">

	                                                <i class="fa fa-mobile-phone prefix"></i>
	                                                <input type="text" id="modalLRInput13" class="form-control form-control-sm validate" placeholder="Phone Number" name="phone_number">
	                                             
	                                            </div>
	                                        </div>
	                                        <br>
	                                        <div class="file-field">

	                                            <div class="file-path-wrapper">

	                                                <i class="fa fa-lock prefix"></i>
	                                                <input type="password" id="modalLRInput13" class="form-control form-control-sm validate" placeholder="Password" name="password">
	                                             
	                                            </div>
	                                        </div>
	                                        <br>

	                                        <div class="file-field">

	                                            <div class="file-path-wrapper">

	                                                <i class="fa fa-lock prefix"></i>
	                                                <input type="password" id="modalLRInput14" class="form-control form-control-sm validate" placeholder="Ulangi Password" name="password_confirmation">
	                                                
	                                            </div>
	                                        </div>
	                                    </div>

	                                    <div class="text-center form-sm mt-2">
	                                        <button class="btn blue-gradient btn-block btn-rounded z-depth-1a">Daftar <i class="fa fa-sign-in ml-1"></i></button>
	                                    </div>
	                                </form>
                                </div>
                                <!--Footer-->
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-outline-info waves-effect ml-auto" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                            <!--/.Panel 8-->
                        </div>

                    </div>
                </div>
                <!--/.Content-->
            </div>
        </div>
        <!--Modal: Login / Register Form-->