<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        /* =====  Nav section   ========  */

        #navbar_top {
            background-color: rgba(0, 0, 0, 0);
        }

        .fixed-top {
            background-color: #751912 !important;
        }

        .fixed-top {
            top: -40px;
            transform: translateY(40px);
            transition: transform .3s;
        }

        .navbar-brand {
            display: none;
        }

        .fixed-top .navbar-brand {
            display: block;
        }

        .nav-phone {
            display: block;
        }

        .fixed-top .nav-phone {
            display: none !important;
        }

        .fixed-top .navbar-brand img {
            width: 150px;
        }

        .navbar-nav .nav-item,
        .navbar-nav .nav-item a {
            color: #fff;
        }

        .navbar-toggler {
            padding: .25rem .75rem;
            font-size: 1.25rem;
            line-height: 1;
            background-color: rgba(237, 237, 237, 0.24);
            border: 1px solid rgb(252, 252, 252);
            border-radius: .25rem;
            transition: box-shadow .15s ease-in-out;
            color: #000;
        }

        @media (max-width: 1399px) {}

        /* Large devices (desktops, less than 1200px)*/
        @media (max-width: 1199.98px) {}

        /*// Medium devices (tablets, less than 992px)*/
        @media (max-width: 991.98px) {

            .navbar-nav .nav-item,
            .navbar-nav .nav-item a {
                color: #000;
            }

            .fixed-top .navbar-nav .nav-item,
            .fixed-top .navbar-nav .nav-item a {
                color: #fff !important;
            }

            .hide-mobile {
                display: none;
            }
        }

        /*// Small devices (landscape phones, less than 768px)*/
        @media (max-width: 767.98px) {}

        /* Extra small devices (portrait phones, less than 576px)*/
        @media (max-width: 575.98px) {}


        /* =====================================*/
        /* =============  Hero  ===============*/
        /* =====================================*/

        .mobile-tool-bar {
            display: none;
            font-size: 36px;
            height: 100px;
        }

        .hero {
            margin-top: -60px;
            height: 800px;
            background: linear-gradient(90deg, rgba(0, 0, 0, .2) 0%, rgba(0, 0, 0, .1) 46%, rgba(0, 0, 0, .1) 100%), url('http://shippo.imoodev.com/wp-content/uploads/2023/03/soccer-children-and-training-or-practice-for-sports-competition-or-game-on-soccer-field-for-fitnes-e1683718381418.jpg');
            background-repeat: no-repeat !important;
            background-position: bottom top;
            background-size: cover !important;
        }

        .bg-theme {}


        @media screen and (max-width: 981px) {
            #navbar_top {
                position: absolute;
                top: 0;
                left: 0;
                right: 0;
            }

            #navbar_top .navbar-collapse.show {
                padding: 0 10px;
                background: rgba(255, 255, 255, 0.5);
            }

            #navbar_top.fixed-top {
                position: fixed;
                top: -40px;
            }

            #navbar_top.fixed-top .navbar-collapse.show {
                padding: 0;
                background: transparent;
            }
        }
    </style>
</head>

<body>
    <header id="" class="site-header">

        <nav id="navbar_top" class="navbar navbar-expand-lg ">
            <div class="container">
                <a class="navbar-brand" href="#">
                    <img src = "{{ asset('images/logo/logo.svg') }}" alt="Dja Sports Academy SVG Logo"/>
                </a>


                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main_nav"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="main_nav">
                    <ul class="navbar-nav mx-auto">

                        <li class="nav-item"><a class="nav-link" href="#">Link</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Link</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Link</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Link</a></li>

                        <li class="nav-item dropdown">
                            <a class="nav-link  dropdown-toggle" href="#" data-bs-toggle="dropdown"> Dropdown
                                right </a>
                            <ul class="dropdown-menu dropdown-menu-right">
                                <li><a class="dropdown-item" href="#"> Submenu item 1</a></li>
                                <li><a class="dropdown-item" href="#"> Submenu item 2 </a></li>
                            </ul>
                        </li>


                    </ul>

                    <ul class="navbar-nav ml-auto hide-mobile">
                        <li class="nav-item social-nav-item">
                            <a class="nav-link social-nav-link red" href="" target="_blank"><i
                                    class="fab fa-facebook-f"></i></a>
                        </li>

                        <li class="nav-item social-nav-item">
                            <a class="nav-link social-nav-link red" href="" target="_blank"><i
                                    class="fab fa-instagram-square"></i></a>
                        </li>

                        <li class="nav-item social-nav-item">
                            <a class="nav-link social-nav-link red" href="" target="_blank"><i
                                    class="fab fa-twitter-square"></i></a>
                        </li>
                    </ul>

                </div> <!-- navbar-collapse.// -->
            </div> <!-- container-fluid.// -->
        </nav>
    </header><!-- #masthead -->


    <section class="hero">
        <div class="container h-100">
            <div class="row h-100">
                <div class="col-md-10 offset-md-1 my-auto text-center">
                    <h1 class="headingLg text-white uc " data-aos="fade-right" data-aos-delay="400">Bienvenue 
                        Chez&nbsp;Dja Sports Academy</h1>
                    <h2 class="headingSm text-white uc" data-aos="fade-right" data-aos-delay="400">Meyomessala</h2>
                </div>
            </div><!-- close row -->
        </div><!-- close container  -->
    </section>

    <section class="mobile-tool-bar bg-theme">
        <div class="row d-flex justify-content-evenly h-100">
            <div class="collapse navbar-collapse" id="main_nav">
                <ul class="navbar-nav mx-auto">

                    <li class="nav-item"><a class="nav-link" href="#">Link</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Link</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Link</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Link</a></li>

                    <li class="nav-item dropdown">
                        <a class="nav-link  dropdown-toggle" href="#" data-bs-toggle="dropdown"> Dropdown
                            right </a>
                        <ul class="dropdown-menu dropdown-menu-right">
                            <li><a class="dropdown-item" href="#"> Submenu item 1</a></li>
                            <li><a class="dropdown-item" href="#"> Submenu item 2 </a></li>
                        </ul>
                    </li>


                </ul>

                <ul class="navbar-nav ml-auto hide-mobile">
                    <li class="nav-item social-nav-item">
                        <a class="nav-link social-nav-link red" href="" target="_blank"><i
                                class="fab fa-facebook-f"></i></a>
                    </li>

                    <li class="nav-item social-nav-item">
                        <a class="nav-link social-nav-link red" href="" target="_blank"><i
                                class="fab fa-instagram-square"></i></a>
                    </li>

                    <li class="nav-item social-nav-item">
                        <a class="nav-link social-nav-link red" href="" target="_blank"><i
                                class="fab fa-twitter-square"></i></a>
                    </li>
                </ul>

            </div> <!-- navbar-collapse.// -->
        </div>
    </section>


    {{-- About --}}
    <section class="mt-5 " id="about">
        <div class="container">
            <div class="row">
                <div class="col"><p>About</p></div>
                <div class="col"><p>Total Football Immersion</p></div>
            </div>
            <div class="row mt-5">
                <div class="col">
                    <p>About</p>
                    <p>About</p>
                    <p>About</p>
                </div>
                <div class="col">
                    <p>Total Football Immersion</p>
                    <p>Total Football Immersion</p>
                    <p>Total Football Immersion</p>
                </div>
                <div class="col">
                    <p>Total Football Immersion</p>
                    <p>Total Football Immersion</p>
                    <p>Total Football Immersion</p>
                </div>
                <div class="col">
                    <p>Total Football Immersion</p>
                    <p>Total Football Immersion</p>
                    <p>Total Football Immersion</p>
                </div>
            </div>
        </div>

    </section>
    {{-- Speech --}}
    <section class="mt-5" id="speech" style="background-color: green;">
        <div class="container-fluid mx-center">
            <div class="row mt-5 ">
                <div class="col">
                    <div class="card mb-3 mx-auto my-auto mt-4" style="max-width: 740px;">
                        <div class="row g-2">
                          <div class="col-md-4 mr-4">
                            <img src="http://shippo.imoodev.com/wp-content/uploads/elementor/thumbs/daily-sport-routine-healthy-lifestyle-gray-haired-smiling-coach-man-portrait-in-the-gym-e1683722269801-q69c15ootoreboy3ds1hi9h8uc5xdni6a4ixh6cnt4.jpg" class="img-fluid rounded-start mx-3 my-4 mr-5" alt="..." style="transform: rotate(-10deg);">
                          </div>
                          <div class="col-md-8 ml-4">
                            <div class="card-body">
                              <h5 class="card-title">Card title</h5>
                              <p class="card-text">"On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue."</p>
                              <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
                            </div>
                          </div>
                        </div>
                      </div>
                </div>
            </div>
        </div>

    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <script>
        	
		
		window.addEventListener('scroll', function() {
	       
           if (window.scrollY > 200) {
               document.getElementById('navbar_top').classList.add('fixed-top');
               // add padding top to show content behind navbar
               navbar_height = document.querySelector('.navbar').offsetHeight;
               document.body.style.paddingTop = navbar_height + 'px';
           } else {
                document.getElementById('navbar_top').classList.remove('fixed-top');
                // remove padding top from body
               document.body.style.paddingTop = '0';
           } 
       });

    </script>
</body>

</html>
