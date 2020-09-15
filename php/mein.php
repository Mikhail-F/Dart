<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dart</title>
    <link rel="stylesheet" href="../style/style.css">
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,600,700,800&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
</head>
<body>

    <!-- Спрайты -->
    <svg style="display: none">
        <symbol id="facebook" viewBox="0 0 430.113 430.114">
            <g>
            	<path d="M158.081,83.3c0,10.839,0,59.218,0,59.218h-43.385v72.412h43.385v215.183h89.122V214.936h59.805
            		c0,0,5.601-34.721,8.316-72.685c-7.784,0-67.784,0-67.784,0s0-42.127,0-49.511c0-7.4,9.717-17.354,19.321-17.354
            		c9.586,0,29.818,0,48.557,0c0-9.859,0-43.924,0-75.385c-25.016,0-53.476,0-66.021,0C155.878-0.004,158.081,72.48,158.081,83.3z"/>
            </g>
        </symbol>
    </svg>
    <svg style="display: none">
        <symbol id="instagram" viewBox="0 0 48 48">
            <g>
		        <path d="M5.583,13c-0.553,0-1-0.447-1-1V3c0-0.553,0.447-1,1-1s1,0.447,1,1v9C6.583,12.553,6.136,13,5.583,13z"/>
		        <path d="M8.958,13c-0.553,0-1-0.447-1-1V2.25c0-0.553,0.447-1,1-1s1,0.447,1,1V12C9.958,12.553,9.511,13,8.958,13z"/>
		        <path d="M12.333,13c-0.553,0-1-0.447-1-1V2.25c0-0.553,0.447-1,1-1s1,0.447,1,1V12C13.333,12.553,12.886,13,12.333,13z"/>
		        <path d="M37.292,48H11.917C4.344,48,0,44.014,0,37.062V12.125C0,4.873,4.27,0,10.625,0h27.584C42.918,0,48,4.524,48,11.834v25.083
		        	C48,43.132,43.297,48,37.292,48z M10.625,2C4.259,2,2,7.454,2,12.125v24.938C2,44.449,7.393,46,11.917,46h25.375
		        	C42.257,46,46,42.095,46,36.917V11.834C46,5.76,41.956,2,38.209,2H10.625z"/>
		        <path d="M23.999,15.25c-4.234,0-7.667,3.434-7.667,7.668c0,4.234,3.433,7.666,7.667,7.666c4.233,0,7.667-3.432,7.667-7.666
		        	C31.666,18.684,28.232,15.25,23.999,15.25z M23.999,26.75c-2.117,0-3.834-1.716-3.834-3.833s1.717-3.834,3.834-3.834
		        	s3.834,1.717,3.834,3.834S26.116,26.75,23.999,26.75z"/>
		        <path d="M23.999,35.084c-6.709,0-12.167-5.458-12.167-12.167S17.29,10.75,23.999,10.75s12.167,5.458,12.167,12.167
		        	S30.708,35.084,23.999,35.084z M23.999,12.75c-5.606,0-10.167,4.561-10.167,10.167c0,5.606,4.561,10.167,10.167,10.167
		        	c5.606,0,10.167-4.561,10.167-10.167C34.166,17.311,29.605,12.75,23.999,12.75z"/>
		        <rect x="32.999" y="14.92" width="14" height="2.16"/>
		        <rect x="1.499" y="14.949" width="13.25" height="2.102"/>
		        <path d="M41.333,10.133c0,1.215-0.985,2.201-2.202,2.201h-3.264c-1.217,0-2.202-0.986-2.202-2.201V6.867
		        	c0-1.215,0.985-2.201,2.202-2.201h3.264c1.217,0,2.202,0.986,2.202,2.201V10.133z"/>
	        </g>
        </symbol>
    </svg>
    <svg style="display: none">
        <symbol id="twitter" viewBox="0 0 612 612">
            <g>
		        <path d="M612,116.258c-22.525,9.981-46.694,16.75-72.088,19.772c25.929-15.527,45.777-40.155,55.184-69.411
		        	c-24.322,14.379-51.169,24.82-79.775,30.48c-22.907-24.437-55.49-39.658-91.63-39.658c-69.334,0-125.551,56.217-125.551,125.513
		        	c0,9.828,1.109,19.427,3.251,28.606C197.065,206.32,104.556,156.337,42.641,80.386c-10.823,18.51-16.98,40.078-16.98,63.101
		        	c0,43.559,22.181,81.993,55.835,104.479c-20.575-0.688-39.926-6.348-56.867-15.756v1.568c0,60.806,43.291,111.554,100.693,123.104
		        	c-10.517,2.83-21.607,4.398-33.08,4.398c-8.107,0-15.947-0.803-23.634-2.333c15.985,49.907,62.336,86.199,117.253,87.194
		        	c-42.947,33.654-97.099,53.655-155.916,53.655c-10.134,0-20.116-0.612-29.944-1.721c55.567,35.681,121.536,56.485,192.438,56.485
		        	c230.948,0,357.188-191.291,357.188-357.188l-0.421-16.253C573.872,163.526,595.211,141.422,612,116.258z"/>
	        </g>
        </symbol>
    </svg>

    <!-- Nav -->
    <div class="nav__head">
        <div class="container">
            <div class="nav__hInner">
                <div class="title">
                    <img src="../img/Shape.png" alt="">
                    <p>Dart <br> <span>Service manager</span></p>
                </div>
                <nav class="nav-h" >
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Service</a></li>
                    <li><a href="#">Extension</a></li>
                    <li><a href="#">Pricing</a></li>
                    <li><a href="#">Help</a></li>
                </nav>
                <?php
                    if($_COOKIE['user'] == ''):
                ?>

                <?php else: ?>
                    <p class="good">Привет <?=$_COOKIE['user']?>, для выхода нажмите на - <a class="exit" href="exit.php">Выход</a></p>
                <?php endif; ?>

            </div>
        </div>
    </div>

    <!-- Header -->
    <header class="header">
        <div class="container">
            <div class="header__inner">
                <div class="head__left">
                    <div class="Hleft--title">lorem Ipsum Dolor sit amet</div>
                    <div class="Hleft--text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamc</div>
                    <div class="Hleft--buttons">
                        <a class="h-btn" href="#">By now</a>
                        <a class="h-btn" href="#">Try for free</a>
                    </div>
                </div>
                <div class="head__right">
                    <video controls src="Up.mp4"></video>
                </div>
            </div>
        </div>
    </header>

    <!-- Easy -->
    <div class="easy">
        <div class="container">
            <div class="easy__inner">
                <div class="useful">
                    <div class="useful__title">Easy & Useful</div>
                    <div class="useful__subtitle">Project Management Tool</div>
                    <div class="useful__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud</div>
                </div>
                <div class="goes">
                    <div class="Gblock">
                        <img src="../img/G1.png" alt="">
                        <p class="Gtitle">Title Goes Here</p>
                        <p class="Gtext">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div>
                    <div class="Gblock">
                        <img src="../img/G2.png" alt="">
                        <p class="Gtitle">Title Goes Here</p>
                        <p class="Gtext">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div>
                    <div class="Gblock">
                        <img src="../img/G3.png" alt="">
                        <p class="Gtitle">Title Goes Here</p>
                        <p class="Gtext">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div>
                </div>
                <a class="easy__start" href="">Get started</a>
            </div>
        </div>
    </div>

    <!-- Use -->
    <div class="use">
        <div class="use__block lightblue">
            <div class="circle">
                <img src="../img/U1.png" alt="">
            </div>
            <p>12000+ Business</p>
        </div>
        <div class="use__block blue">
            <div class="circle">
                <img src="../img/U2.png" alt="">
            </div>
            <p>60000+ Downloads</p>
        </div>
        <div class="use__block purple">
            <div class="circle">
                <img src="../img/U3.png" alt="">
            </div>
            <p>30000+ Free Installs</p>
        </div>
        <div class="use__block pink">
            <div class="circle">
                <img src="../img/U4.png" alt="">
            </div>
            <p>40000+ Pro Users</p>
        </div>
    </div>

    <!-- Services -->
    <div class="services">
        <div class="container">
            <div class="services__inner">
                <div class="st">
                    <div class="services__title">Services</div>
                    <div class="services__subtitle">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna</div>
                </div>
                <div class="accordion">
                    <div class="tab">
                        <input id="t1" type="checkbox" name="tab-group">
                        <label class="tab-title" for="t1"> <img src="../img/S1.png" alt=""> Statics</label>
                        <section class="tab-content" >
                            <img src="../img/TabImg.png" alt="">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in</p>
                        </section>
                    </div>
                    <div class="tab">
                        <input id="t2" type="checkbox" name="tab-group">
                        <label class="tab-title" for="t2"> <img src="../img/S2.png" alt=""> Inbox</label>
                        <section class="tab-content" >
                            <img src="../img/TabImg.png" alt="">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in</p>
                        </section>
                    </div>
                    <div class="tab">
                        <input id="t3" type="checkbox" name="tab-group">
                        <label class="tab-title" for="t3"> <img src="../img/S3.png" alt=""> Team</label>
                        <section class="tab-content" >
                            <img src="../img/TabImg.png" alt="">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in</p>
                        </section>
                    </div>
                    <div class="tab">
                        <input id="t4" type="checkbox" name="tab-group">
                        <label class="tab-title" for="t4"> <img src="../img/S4.png" alt=""> Settings</label>
                        <section class="tab-content" >
                            <img src="../img/TabImg.png" alt="">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in</p>
                        </section>
                    </div>
                    <div class="tab">
                        <input id="t5" type="checkbox" name="tab-group">
                        <label class="tab-title" for="t5"> <img src="../img/S5.png" alt=""> Feed</label>
                        <section class="tab-content" >
                            <img src="../img/TabImg.png" alt="">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in</p>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Customers -->
    <div class="customers">
        <div class="contianer">
            <div class="customers__inner">
                <div class="customers__left">
                    <div class="customers__title">What our customers have to say about us.</div>
                    <div class="customers__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna</div>
                    <div class="c-button">
                        <a class="c-btn" href="#">Get started</a>
                    </div>
                </div>
                <div class="slider single-item">
                    <div class="slider-block">
                        <div class="slider__item">
                            <div class="face"><img src="../img/Face1.png" alt=""></div>
                            <div class="slider__inner">
                                <div class="slider__title">John Doe</div>
                                <div class="slider__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea</div>
                            </div>
                        </div>
                    </div>
                    <div class="slider-block">
                        <div class="slider__item">
                                <div class="face"><img src="../img/Face2.png" alt=""></div>
                            <div class="slider__inner">
                                <div class="slider__title">Khalessi</div>
                                <div class="slider__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea</div>
                            </div>
                        </div>
                    </div>
                    <div class="slider-block">
                        <div class="slider__item">
                                <div class="face"><img src="../img/Face1.png" alt=""></div>
                            <div class="slider__inner">
                                <div class="slider__title">Jack Tyler</div>
                                <div class="slider__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea</div>
                            </div>
                        </div>
                    </div>
                    <div class="slider-block">
                        <div class="slider__item">
                                <div class="face"><img src="../img/Face2.png" alt=""></div>
                            <div class="slider__inner">
                                <div class="slider__title">Tim</div>
                                <div class="slider__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea</div>
                            </div>
                        </div>
                    </div>
                    <div class="slider-block">
                        <div class="slider__item">
                                <div class="face"><img src="../img/Face1.png" alt=""></div>
                            <div class="slider__inner">
                                <div class="slider__title">Prosto</div>
                                <div class="slider__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea</div>
                            </div>
                        </div>
                    </div>
                    <div class="slider-block">
                        <div class="slider__item">
                                <div class="face"><img src="../img/Face2.png" alt=""></div>
                            <div class="slider__inner">
                                <div class="slider__title">John Doe</div>
                                <div class="slider__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Team -->
    <div class="team">
        <div class="container">
            <div class="team__inner">
                <div class="services__inner">
                    <div class="st">
                        <div class="services__title">Our Team</div>
                        <div class="services__subtitle">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna</div>
                    </div>
                </div>
            <div class="Slider-h">
                <div class="tslider">
                <div class="tslider__block">
                    <div class="tslider-b">
                        <img src="../img/Face3.png" alt="">
                        <p class="name">Sophie Turner</p>
                        <p class="b">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magnaLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt </p>
                        <div class="icon">
                            <svg class="svg__icon">
                            <use xlink:href="#facebook"></use>
                            </svg>
                            <svg class="svg__icon">
                                <use xlink:href="#instagram"></use>
                            </svg>
                            <svg class="svg__icon">
                                <use xlink:href="#twitter"></use>
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="tslider__block">
                    <div class="tslider-b">
                        <img src="../img/Face4.png" alt="">
                        <p class="name">Sophie Turner</p>
                        <p class="b">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magnaLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt </p>
                        <div class="icon">
                            <svg class="svg__icon">
                                <use xlink:href="#facebook"></use>
                            </svg>
                            <svg class="svg__icon">
                                <use xlink:href="#instagram"></use>
                            </svg>
                            <svg class="svg__icon">
                                <use xlink:href="#twitter"></use>
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="tslider__block">
                    <div class="tslider-b">
                        <img src="../img/Face5.png" alt="">
                        <p class="name">Sophie Turner</p>
                        <p class="b">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magnaLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt </p>
                        <div class="icon">
                            <svg class="svg__icon">
                                <use xlink:href="#facebook"></use>
                            </svg>
                            <svg class="svg__icon">
                                <use xlink:href="#instagram"></use>
                            </svg>
                            <svg class="svg__icon">
                                <use xlink:href="#twitter"></use>
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="tslider__block">
                    <div class="tslider-b">
                        <img src="../img/Face3.png" alt="">
                        <p class="name">Sophie Turner</p>
                        <p class="b">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magnaLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt </p>
                        <div class="icon">
                            <svg class="svg__icon">
                                <use xlink:href="#facebook"></use>
                            </svg>
                            <svg class="svg__icon">
                                <use xlink:href="#instagram"></use>
                            </svg>
                            <svg class="svg__icon">
                                <use xlink:href="#twitter"></use>
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="tslider__block">
                    <div class="tslider-b">
                        <img src="../img/Face4.png" alt="">
                        <p class="name">Sophie Turner</p>
                        <p class="b">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magnaLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt </p>
                        <div class="icon">
                            <svg class="svg__icon">
                                <use xlink:href="#facebook"></use>
                            </svg>
                            <svg class="svg__icon">
                                <use xlink:href="#instagram"></use>
                            </svg>
                            <svg class="svg__icon">
                                <use xlink:href="#twitter"></use>
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="tslider__block">
                    <div class="tslider-b">
                        <img src="../img/Face5.png" alt="">
                        <p class="name">Sophie Turner</p>
                        <p class="b">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magnaLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt </p>
                        <div class="icon">
                            <svg class="svg__icon">
                                <use xlink:href="#facebook"></use>
                            </svg>
                            <svg class="svg__icon">
                                <use xlink:href="#instagram"></use>
                            </svg>
                            <svg class="svg__icon">
                                <use xlink:href="#twitter"></use>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>
    </div>
    
    <!-- Contact -->
    <div class="contact">
        <div class="container">
            <div class="contact__inner">
                <div class="st">
                    <div class="services__title">Contact Us</div>
                    <div class="services__subtitle">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna</div>
                </div>
                <div class="form">
                    <div class="top">
                        <div class="tleft">
                            <input type="text" placeholder="First Name">
                            <input class="tl2" type="email" placeholder="Email">
                        </div>
                        <div class="tright">
                            <input type="text" placeholder="Last Name">
                            <input class="tr2" type="text" placeholder="Phone">
                        </div>
                    </div>
                    <div class="buttom">
                        <textarea placeholder="Message"></textarea>
                    </div>
                    <div class="subscribe">
                        <div class="check">
                            <input type="checkbox" name="check" id="check">
                            <label class="check" for="check">subscribe to the newsletter</label>
                        </div>
                         <a href="#">Send</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="footer__inner">
                <div class="footer__top">
                    <div class="title">
                        <img src="../img/Shape.png" alt="">
                        <p>Dart <br> <span>Service manager</span></p>
                    </div>
                    <nav class="nav-h" >
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Service</a></li>
                        <li><a href="#">Extension</a></li>
                        <li><a href="#">Pricing</a></li>
                        <li><a href="#">Help</a></li>
                    </nav>
                </div>
                <div class="footer__buttom">
                    <div class="about__us">
                        <li><a href="#">Privecy Policy</a></li>
                        <li><a href="#">Contact Us</a></li>
                        <li><a href="#">About Us</a></li>
                    </div>
                    <div class="icon__footer">
                        <svg class="svg__icon">
                            <use xlink:href="#facebook"></use>
                        </svg>
                        <svg class="svg__icon">
                            <use xlink:href="#instagram"></use>
                        </svg>
                        <svg class="svg__icon">
                            <use xlink:href="#twitter"></use>
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="../js/js.js"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
</body>
</html>