<nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
    <a class="navbar-brand " href="/">
        <img src="{{ url('assets/img/logo-crop.svg') }}" alt="">
    </a>
    <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto" id="navItem">
            <li class="nav-item pl-4 pr-4"><a class="nav-link " href="#">Event</a></li>
            <li class="nav-item pl-4 pr-4"><a class="nav-link " href="#">Gallery</a></li>
            <li class="nav-item pl-4 pr-4"><a class="nav-link " href="/help">Help</a>
            </li>
            <li class="nav-item pl-4 pr-4"><a class="nav-link " href="/aboutus">About Us</a>
            </li>
            @if(Auth::check())
                <li class="nav-item dropdown  pl-4 pr-4 ">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        Profile
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="profile">My Profile</a>
                        <a class="dropdown-item" href="/logout">Log Out</a>
                    </div>
                </li>
            @else
                <li class="nav-item pr-4 pl-4 mr-4"><a class="nav-link cursor" data-bs-toggle="modal"
                        data-bs-target="#login" id="joinUsBorder">Login</a></li>
                </li>
            @endif
        </ul>

    </div>
</nav>

<!-- Modal login -->
<div class="modal fade login-modal" id="login" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="row">
                <div class="col-sm-12 col-lg-12 px-5 ">
                    <div class="modal-title mt-4 ">
                        <button type="button" class="btn-close float-right" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="row mt-5">
                        <strong style="color:#22577A; font-size:34px" class="text-center"> Masuk </strong>
                    </div>
                    <div class="content-2 my-5">
                        <div class=" text-center rounded mx-auto d-block">
                            <img src="{{ url('assets/img/login 1.svg') }}">
                        </div>
                        <form class="mt-4" method="POST" action="/login">
                            @csrf
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Username</label>
                                <input type="text" class="form-control" id="username" name="username" required
                                    placeholder="Enter your Username">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Password</label>
                                <input type="password" class="form-control show-pass" id="password" name="password"
                                    required placeholder="Enter your Password">
                            </div>
                            <div class="d-flex flex-column flex-wrap">
                                <button type="submit" class="btn mt-3" style="background-color:#FFB319">Masuk</button>
                                <span class="change-register text-center mt-2">Belum punya akun ?
                                    <a class="cursor" data-bs-toggle="modal" data-bs-target="#register"
                                        data-bs-dismiss="modal" style="color: #fca311">Daftar</a></span>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal Register -->
<div class=" modal fade" id="register" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="row">
                <div class="col-sm-12 col-lg-12 px-5 ">
                    <div class="modal-title mr-4 mt-4">
                        <button type="button" class="btn-close float-right" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="row mt-5">
                        <strong style="color:#22577A; font-size:34px" class="text-center"> Daftar </strong>
                    </div>
                    <div class="content-2 my-5">
                        <form class="mt-4" method="POST" action="/register">
                            @csrf
                            <div class="form-group">
                                <label for="namalengkap">Nama Lengkap </label>
                                <input type="text" class="form-control" id="name" name="namalengkap" required
                                    placeholder="Masukkan nama lengkap">
                            </div>
                            
                            <div class="form-group">
                                <label for="username">Phone </label>
                                <input type="text" class="form-control" id="phone" name="phone" required
                                placeholder="Masukkan Nomer ">
                            </div>
                            <div class="form-group">
                                <label for="email">Email </label>
                                <input type="email" class="form-control" id="email" name="email" required
                                    placeholder="Masukkan email ">
                            </div>
                            <div class="form-group">
                                <label for="password">Username </label>
                                <input type="text" class="form-control" id="username"
                                    name="username" required placeholder="Masukkan Username">
                            </div>
                            <div class="form-group">
                                <label for="password">Password </label>
                                <input type="password" class="form-control show-pass password_register" id="password"
                                    name="password" required placeholder="Masukkan Password">
                            </div>
                            <div class="d-flex flex-column flex-wrap">
                            <button type="submit" class="btn mt-3" style="background-color:#FFB319">Daftarkan</button>
                                <span class="change-register text-center mt-2">Sudah
                                    punya akun ?
                                    <a class="cursor" data-bs-toggle="modal" data-bs-target="#login"
                                        data-bs-dismiss="modal" style="color: #fca311 ">Masuk</a></span>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
