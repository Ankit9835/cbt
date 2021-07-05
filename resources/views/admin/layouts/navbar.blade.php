 <div class="header">
            <div class="row header-mn-row align-items-center">
                <div class="col-5">
                    <div class="lft">
                        <img src="{{ asset('backend/images/vemdr_header_logo.png') }}" alt="Logo">
                    </div>
                </div>
                <div class="col-7">
                    <div class="rght">
                        <div class="dropdown nav-accnt-drop">
                            <button type="button" class="btn dropdown-toggle" data-toggle="dropdown">
                                <span class="user-name">Adeline Ng</span>
                                <span><i class="fa fa-angle-down"></i></span>
                                <span class="icon-fr-mobile">
                                    <img src="{{ asset('backend/images/user-icon-mobile.png') }}">
                                </span>
                            </button>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="#">My Account</a>
                               
                                <a class="dropdown-item" href="#">My Dashboard</a>
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">Logout</a>

                                 <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </div>

                        <div class="home-icon-mn">
                            <a href="#">
                                <i class="fa fa-home"></i>
                            </a>
                        </div>

                    </div>
                </div>
            </div>
        </div>