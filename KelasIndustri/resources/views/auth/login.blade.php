<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <title>Login | Kelas Industri</title>
    <meta content="" name="description" />
    <meta content="" name="keywords" />

    <!-- Favicons -->
    <link rel="shortcut icon" href="assets/images/userpremium/logo/logo_pln.png" />
    <link href="assets/img/favicon.png" rel="icon" />
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon" />

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect" />
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet" />

    <!-- Vendor CSS Files -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous" />

    <!-- Main CSS File -->
    <link href="css/style.css" rel="stylesheet" />
</head>

<body class="custom_login-page">
    <main>
        <div class="container">
            <section
                class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">
                            <div class="d-flex justify-content-center py-4">
                                <a href="/" class="logo d-flex align-items-center w-auto">
                                    <img src="assets/images/logo.png" alt=""
                                        width="150 justify-content-center" />
                                </a>
                            </div>
                            <!-- End Logo -->

                            <div class="card mb-3 rounded-3">
                                <div class="card-body">
                                    <div class="pt-4 pb-2">
                                        <h5 class="card-title text-center pb-0 fs-4">
                                            Login to Your Account
                                        </h5>
                                        <p class="text-center small">
                                            Enter Your Email & Password to Login
                                        </p>
                                    </div>

                                    <form class="row g-3 needs-validation" novalidate method="POST">
                                        @csrf
                                        <div class="col-12"> 
                                            <label for="email" class="form-label">Email</label>
                                            <div class="input-group has-validation">
                                                <span class="input-group-text fs-5" id="inputGroupPrepend"><i
                                                        class="bi bi-envelope"></i>
                                                </span>
                                                <input type="text" name="email"
                                                    class="form-control shadow-none @error('email')
                            is-invalid
                            @enderror"
                                                    id="email" autofocus required value="{{ old('email') }}">
                                                @error('email')
                                                    <div class="invalid-feedback">{{ $message }} </div>
                                                @enderror

                                                <div class="invalid-feedback">
                                                    Please enter your Email.
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-12 pt-3">
                                            <label for="password" class="form-label">Password</label>
                                            <div class="input-group has-validation">
                                                <span class="input-group-text fs-5" id="inputGroupPrepend"><i
                                                        class="bi bi-lock"></i></span>
                                                <input type="password" name="password" class="form-control shadow-none"
                                                    id="Password" required />
                                            </div>
                                            <div class="invalid-feedback">
                                                Please enter your password!
                                            </div>
                                        </div>
                                        <div class="col-12 pt-3 pb-3">
                                            <button class="btn btn-primary w-100" type="submit">
                                                Login
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </main>
    <!-- End #main -->

    <!-- Vendor JS Files -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
    </script>
</body>

</html>
