<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Landing Page - Start Bootstrap Theme</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet"
        type="text/css" />
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet"
        type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="{{ asset('assets/styles.css') }}" rel="stylesheet" />
</head>

<body>
    <!-- Masthead-->
    <header class="masthead">
        <div class="position-relative">
            <div class="row justify-content-center">
                <div class="col-xl-8">
                    <div class="text-center text-white">
                        <!-- Page heading-->
                        <div class="mb-5 fs-4">Join us in building a supportive environment where every student's voice
                            is heard, and every leader's guidance is valued.
                            Together, let's create a community where knowledge is shared, challenges are overcome, and
                            aspirations are achieved. Welcome aboard!</div>
                        <a href="{{ route('register') }}" class="btn btn-primary" data-mdb-ripple-init>Get Start</a>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Icons Grid-->
    <section class="features-icons bg-light text-center">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
                        <div class="features-icons-icon d-flex"><i class="bi-window m-auto text-primary"></i></div>
                        <h3>Architecture and Built</h3>
                        <p class="lead mb-0">This theme will look great on any device, no matter the size!</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
                        <div class="features-icons-icon d-flex"><i class="bi-layers m-auto text-primary"></i></div>
                        <h3> Engineering</h3>
                        <p class="lead mb-0">Featuring the latest build of the new Bootstrap 5 framework!</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="features-icons-item mx-auto mb-0 mb-lg-3">
                        <div class="features-icons-icon d-flex"><i class="bi-terminal m-auto text-primary"></i></div>
                        <h3>ICT</h3>
                        <p class="lead mb-0">Ready to use with your own content, or customize the source files!</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="features-icons-item mx-auto mb-0 mb-lg-3">
                        <div class="features-icons-icon d-flex"><i class="bi-terminal m-auto text-primary"></i></div>
                        <h3>Mining and Geology </h3>
                        <p class="lead mb-0">Ready to use with your own content, or customize the source files!</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Testimonials-->
    <section class="testimonials text-center bg-light">
        <div class="container">
            <h2 class="mb-5">Peaple you meet</h2>
            <div class="row">
                <div class="col-lg-3">
                    <div class="testimonial-item mx-auto mb-5 mb-lg-0">
                        <img class="img-fluid rounded-circle mb-3" src="assets/img/testimonials-1.jpg" alt="..." />
                        <h5>Professor Ntaganda</h5>
                        <p class="font-weight-light mb-0">"Mathematician"</p>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="testimonial-item mx-auto mb-5 mb-lg-0">
                        <img class="img-fluid rounded-circle mb-3" src="assets/img/testimonials-2.jpg" alt="..." />
                        <h5>Dr Peace</h5>
                        <p class="font-weight-light mb-0">"ICT lecture"</p>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="testimonial-item mx-auto mb-5 mb-lg-0">
                        <img class="img-fluid rounded-circle mb-3" src="assets/img/testimonials-3.jpg" alt="..." />
                        <h5>Dr Theoneste</h5>
                        <p class="font-weight-light mb-0">"Ai lecture"</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="">
        <footer class="text-center text-white" style="background-color: #0a4275;">
          <div class="container p-4 pb-0">
            <section class="">
              <p class="d-flex justify-content-center align-items-center">
                <span class="me-3">Register for free</span>
                <a href="{{ route('register') }}" data-mdb-ripple-init type="button" class="btn btn-outline-light btn-rounded">
                  Sign up!
                </a>
              </p>
            </section>
          </div>
          <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            © 2020 Copyright:
            <a class="text-white" href="#">University Of Rwanda Student</a>
          </div>
        </footer>
      </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
</body>

</html>
