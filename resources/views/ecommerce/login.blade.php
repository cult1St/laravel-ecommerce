<x-body>
    <main class="main">
        <nav aria-label="breadcrumb" class="breadcrumb-nav border-0 mb-0">
            <div class="container">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Login</li>
                </ol>
            </div><!-- End .container -->
        </nav><!-- End .breadcrumb-nav -->

        <div class="login-page bg-image pt-8 pb-8 pt-md-12 pb-md-12 pt-lg-17 pb-lg-17" style="background-image: url('assets/images/backgrounds/login-bg.jpg')">
            <div class="container">
                <div class="form-box">
                    <div class="form-tab">
                        <ul class="nav nav-pills nav-fill" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link" id="signin-tab-2" data-toggle="tab" href="#signin-2" role="tab" aria-controls="signin-2" aria-selected="true">Sign In</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" id="register-tab-2" data-toggle="tab" href="#register-2" role="tab" aria-controls="register-2" aria-selected="false">Register</a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane fade" id="signin-2" role="tabpanel" aria-labelledby="signin-tab-2">
                                <form action="login" method="POST">
                                    @csrf
                                    <div class="form-group">
                                        <label for="singin-email-2">Username or email address *</label>
                                        <input type="text" class="form-control" id="singin-email-2" name="email" required>
                                        @error('email')
                                            <p class="text-danger">{{$message}}</p>
                                        @enderror
                                    </div><!-- End .form-group -->

                                    <div class="form-group">
                                        <label for="singin-password-2">Password *</label>
                                        <input type="password" class="form-control" id="singin-password-2" name="password" required>
                                        @error('password')
                                            <p class="text-danger">{{$message}}</p>
                                        @enderror
                                    </div><!-- End .form-group -->

                                    <div class="form-footer">
                                        <button type="submit" class="btn btn-outline-primary-2">
                                            <span>LOG IN</span>
                                            <i class="icon-long-arrow-right"></i>
                                        </button>

                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="signin-remember-2"  name="remember">
                                            <label class="custom-control-label" for="signin-remember-2">Remember Me</label>
                                        </div><!-- End .custom-checkbox -->

                                        <a href="{{ route('password.request') }}" class="forgot-link">Forgot Your Password?</a>
                                    </div><!-- End .form-footer -->
                                </form>
                               
                            </div><!-- .End .tab-pane -->
                            <div class="tab-pane fade show active" id="register-2" role="tabpanel" aria-labelledby="register-tab-2">
                                <form action="register" method="POST">
                                    <div class="form-group">
                                        @csrf
                                        <label for="register-email-2">Your Full name *</label>
                                        <input type="text" class="form-control" id="register-email-2" name="name" required>
                                        @error('name')
                                            <p class="text-danger">{{$message}}</p>
                                        @enderror
                                    </div><!-- End .form-group -->
                                    <div class="form-group">
                                        <label for="register-email-2">Your email address *</label>
                                        <input type="email" class="form-control" id="register-email-2" name="email" required>
                                        @error('email')
                                            <p class="text-danger">{{$message}}</p>
                                        @enderror
                                    </div><!-- End .form-group -->

                                    <div class="form-group">
                                        <label for="register-password-2">Password *</label>
                                        <input type="password" class="form-control" id="register-password-2" name="password" required>
                                        @error('password')
                                            <p class="text-danger">{{$message}}</p>
                                        @enderror
                                    </div><!-- End .form-group -->
                                    <div class="form-group">
                                        <label for="register-password-2">Password *</label>
                                        <input type="password" class="form-control" id="register-password-2" name="password_confirmation" required>
                                        @error('password_confirmation')
                                            <p class="text-danger">{{$message}}</p>
                                        @enderror
                                    </div><!-- End .form-group -->
                                   
                                    <div class="form-footer">
                                        <button type="submit" class="btn btn-outline-primary-2">
                                            <span>SIGN UP</span>
                                            <i class="icon-long-arrow-right"></i>
                                        </button>

                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="register-policy-2" required>
                                            <label class="custom-control-label" for="register-policy-2">I agree to the <a href="#">privacy policy</a> *</label>
                                        </div><!-- End .custom-checkbox -->
                                    </div><!-- End .form-footer -->
                                </form>
                            </div><!-- .End .tab-pane -->
                        </div><!-- End .tab-content -->
                    </div><!-- End .form-tab -->
                </div><!-- End .form-box -->
            </div><!-- End .container -->
        </div><!-- End .login-page section-bg -->
    </main><!-- End .main -->
</x-body>