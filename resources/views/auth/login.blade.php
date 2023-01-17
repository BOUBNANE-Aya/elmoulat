<!doctype html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>StrikingDash</title>

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- inject:css-->

    <link rel="stylesheet" href="assets/vendor_assets/css/bootstrap/bootstrap.css">

    <link rel="stylesheet" href="assets/vendor_assets/css/daterangepicker.css">

    <link rel="stylesheet" href="assets/vendor_assets/css/fontawesome.css">

    <link rel="stylesheet" href="assets/vendor_assets/css/footable.standalone.min.css">

    <link rel="stylesheet" href="assets/vendor_assets/css/fullcalendar@5.2.0.css">

    <link rel="stylesheet" href="assets/vendor_assets/css/jquery-jvectormap-2.0.5.css">

    <link rel="stylesheet" href="assets/vendor_assets/css/jquery.mCustomScrollbar.min.css">

    <link rel="stylesheet" href="assets/vendor_assets/css/leaflet.css">

    <link rel="stylesheet" href="assets/vendor_assets/css/line-awesome.min.css">

    <link rel="stylesheet" href="assets/vendor_assets/css/magnific-popup.css">

    <link rel="stylesheet" href="assets/vendor_assets/css/MarkerCluster.css">

    <link rel="stylesheet" href="assets/vendor_assets/css/MarkerCluster.Default.css">

    <link rel="stylesheet" href="assets/vendor_assets/css/select2.min.css">

    <link rel="stylesheet" href="assets/vendor_assets/css/slick.css">

    <link rel="stylesheet" href="assets/vendor_assets/css/star-rating-svg.css">

    <link rel="stylesheet" href="assets/vendor_assets/css/trumbowyg.min.css">

    <link rel="stylesheet" href="assets/vendor_assets/css/wickedpicker.min.css">

    <link rel="stylesheet" href="style.css">

    <!-- endinject -->

    <link rel="icon" type="image/png" sizes="16x16" href="img/favicon.png">
</head>

<body>
    <main class="main-content">

        <div class="signUP-admin">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-xl-4 col-lg-5 col-md-5 p-0">
                        <div class="signUP-admin-left signIn-admin-left position-relative">
                            <div class="signUP-overlay">
                                <img class="svg signupTop" src="{{asset('img/svg/signuptop.svg"')}}" alt="img" />
                                <img class="svg signupBottom" src="img/svg/signupbottom.svg" alt="img" />
                            </div><!-- End: .signUP-overlay  -->
                            <div class="signUP-admin-left__content">
                                <div class="text-capitalize mb-md-30 mb-15 d-flex align-items-center justify-content-center justify-content-center">
                                    <img class="" width="100" src="{{asset('img/logo.png')}}" alt="img" />
                                </div>
                                <h1 class="text-capitalize mb-md-30 mb-15 d-flex align-items-center justify-content-center"> AL MOULAT IMMOBLIER</h1>
                            </div><!-- End: .signUP-admin-left__content  -->
                            <div class="signUP-admin-left__img">
                                <img class="img-fluid svg" src="{{asset('img/svg/signupIllustration.svg')}}" alt="img" />
                            </div><!-- End: .signUP-admin-left__img  -->
                        </div><!-- End: .signUP-admin-left  -->
                    </div><!-- End: .col-xl-4  -->
                    <div class="col-xl-8 col-lg-7 col-md-7 col-sm-8">
                        <div class="signUp-admin-right signIn-admin-right  p-md-40 p-10">
                            
                            <div class="row justify-content-center">
                                <div class="col-xl-7 col-lg-8 col-md-12" style="margin-top:200px">
                                    <div class="edit-profile mt-md-25 mt-0">
                                        <div class="card border-0">
                                            <div class="card-header border-0  pb-md-15 pb-10 pt-md-20 pt-10 ">
                                                <div class="edit-profile__title">
                                                    <h6>Se  <span class="color-primary">Connecter</span></h6>
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <div class="edit-profile__body">
                                                @if ( Session::get('error'))
									                <div class="alert alert-danger">
										                  {{ Session::get('error') }}
									                    </div>
								                        @endif
                                                 <form method="POST" action="{{ route('login') }}">
                                                       @csrf
                                                    <div class="form-group mb-20">
                                                        <label for="username">Saisie votre email</label>
                                                        <input type="text" name="email" class="form-control  @error('email') is-invalid @enderror" placeholder="Email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                                        @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                              </span>
                                                     @enderror
                                                    </div>
                                                    <div class="form-group mb-15">
                                                        <label for="password-field">Mot de passe</label>
                                                        <div class="position-relative">
                                                            <input id="password-field" name="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" >
                                                            <div class="fa fa-fw fa-eye-slash text-light fs-16 field-icon toggle-password2"></div>
                                                             @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                                        </div>
                                                    </div>
                                                    <div class="signUp-condition signIn-condition">
                                                        <div class="checkbox-theme-default custom-checkbox ">
                                                            <input class="checkbox" name="remember" value="1" type="checkbox" id="check-1">
                                                            <label for="check-1">
                                                                <span class="checkbox-text">Se souvenir de moi</span>
                                                            </label>
                                                        </div>
                                                        
                                                    </div>
                                                    <div class="button-group d-flex pt-1 justify-content-md-start justify-content-center">
                                                        <button type="submit" class="btn btn-primary btn-default btn-squared mr-15 text-capitalize lh-normal px-50 py-15 signIn-createBtn ">
                                                            {{ __('Login') }}
                                                        </button>
                 
                                                        </form>
                                                    </div>
                                                   
                                                </div>
                                            </div><!-- End: .card-body -->
                                        </div><!-- End: .card -->
                                    </div><!-- End: .edit-profile -->
                                </div><!-- End: .col-xl-5 -->
                            </div>
                        </div><!-- End: .signUp-admin-right  -->
                    </div><!-- End: .col-xl-8  -->
                </div>
            </div>
        </div><!-- End: .signUP-admin  -->

    </main>
    <div id="overlayer">
        <span class="loader-overlay">
            <div class="atbd-spin-dots spin-lg">
                <span class="spin-dot badge-dot dot-primary"></span>
                <span class="spin-dot badge-dot dot-primary"></span>
                <span class="spin-dot badge-dot dot-primary"></span>
                <span class="spin-dot badge-dot dot-primary"></span>
            </div>
        </span>
    </div>

    <!-- inject:js-->

    <script src="assets/vendor_assets/js/jquery/jquery-3.5.1.min.js"></script>

    <script src="assets/vendor_assets/js/jquery/jquery-ui.js"></script>

    <script src="assets/vendor_assets/js/bootstrap/popper.js"></script>

    <script src="assets/vendor_assets/js/bootstrap/bootstrap.min.js"></script>

    <script src="assets/vendor_assets/js/moment/moment.min.js"></script>

    <script src="assets/vendor_assets/js/accordion.js"></script>

    <script src="assets/vendor_assets/js/autoComplete.js"></script>

    <script src="assets/vendor_assets/js/Chart.min.js"></script>

    <script src="assets/vendor_assets/js/charts.js"></script>

    <script src="assets/vendor_assets/js/daterangepicker.js"></script>

    <script src="assets/vendor_assets/js/drawer.js"></script>

    <script src="assets/vendor_assets/js/dynamicBadge.js"></script>

    <script src="assets/vendor_assets/js/dynamicCheckbox.js"></script>

    <script src="assets/vendor_assets/js/feather.min.js"></script>

    <script src="assets/vendor_assets/js/footable.min.js"></script>

    <script src="assets/vendor_assets/js/fullcalendar@5.2.0.js"></script>

    <script src="assets/vendor_assets/js/google-chart.js"></script>

    <script src="assets/vendor_assets/js/jquery-jvectormap-2.0.5.min.js"></script>

    <script src="assets/vendor_assets/js/jquery-jvectormap-world-mill-en.js"></script>

    <script src="assets/vendor_assets/js/jquery.countdown.min.js"></script>

    <script src="assets/vendor_assets/js/jquery.filterizr.min.js"></script>

    <script src="assets/vendor_assets/js/jquery.magnific-popup.min.js"></script>

    <script src="assets/vendor_assets/js/jquery.mCustomScrollbar.min.js"></script>

    <script src="assets/vendor_assets/js/jquery.peity.min.js"></script>

    <script src="assets/vendor_assets/js/jquery.star-rating-svg.min.js"></script>

    <script src="assets/vendor_assets/js/leaflet.js"></script>

    <script src="assets/vendor_assets/js/leaflet.markercluster.js"></script>

    <script src="assets/vendor_assets/js/loader.js"></script>

    <script src="assets/vendor_assets/js/message.js"></script>

    <script src="assets/vendor_assets/js/moment.js"></script>

    <script src="assets/vendor_assets/js/muuri.min.js"></script>

    <script src="assets/vendor_assets/js/notification.js"></script>

    <script src="assets/vendor_assets/js/popover.js"></script>

    <script src="assets/vendor_assets/js/select2.full.min.js"></script>

    <script src="assets/vendor_assets/js/slick.min.js"></script>

    <script src="assets/vendor_assets/js/trumbowyg.min.js"></script>

    <script src="assets/vendor_assets/js/wickedpicker.min.js"></script>

    <script src="assets/theme_assets/js/drag-drop.js"></script>

    <script src="assets/theme_assets/js/footable.js"></script>

    <script src="assets/theme_assets/js/full-calendar.js"></script>

    <script src="assets/theme_assets/js/googlemap-init.js"></script>

    <script src="assets/theme_assets/js/icon-loader.js"></script>

    <script src="assets/theme_assets/js/jvectormap-init.js"></script>

    <script src="assets/theme_assets/js/leaflet-init.js"></script>

    <script src="assets/theme_assets/js/main.js"></script>

    <!-- endinject-->
</body>

</html>


