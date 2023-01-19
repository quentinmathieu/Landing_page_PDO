<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- ------------ CSS ------------ -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
        integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
    <link rel="stylesheet" href="css/style.css">
    <title>Beep</title>
</head>

<body>

    <!-- ------------ Scroll to top ------------ -->
    <a href="#main" class="stt"><i class="fa-solid fa-arrow-up"></i></a>

    <!-- ------------ MAIN ------------ -->
    <main id="main">
        <!-- ------------ HEADER ------------ -->
        <header>
            <div class="container">
                <div class="color-picker">
                    <div class="colors-container">
                        <p>Select your color</p>
                        <div class="colors">
                            <span class="circle default" data-color="#1294b8"><i class="fa-solid fa-rotate-right"></i></span>
                            <span class="circle red" data-color="rgb(231, 79, 79)"></span>
                            <span class="circle blue" data-color="rgb(96, 96, 225)"></span>
                            <span class="circle green" data-color="rgb(81, 148, 81)"></span>
                            <span class="circle purple" data-color="rgb(130, 75, 130)"></span>
                            <span class="circle dark" data-color="rgb(71, 71, 71)"></span>
                        </div>
                    </div>
                    <div class="settings"><i class="fa-solid fa-gear"></i></div>
                </div>

                <!-- ------------ NAVBAR ------------ -->
                <div class="navbar">
                    <div class="logo">
                        <span>Beep</span>
                    </div>
                    <nav>
                        <ul>
                            <li><a href="">Home</a></li>
                            <li><a href="#features">Features</a></li>
                            <li><a href="#clients">Client</a></li>
                            <li><a href="#pricing">Pricing</a></li>
                            <li><a href="">FAQ</a></li>
                            <li><a href="#team">About</a></li>
                            <li><a href="#blog">Blog</a></li>
                            <li><a href="#contact">Contact</a></li>
                        </ul>
                    </nav>

                    <div class="social-links">
                        <ul>
                            <li><a href=""><i class="fa-brands fa-facebook-f"></a></i></li>
                            <li><a href=""><i class="fa-brands fa-twitter"></i></a></li>
                            <li><a href=""><i class="fa-brands fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>

                <!-- ------------ Main content HEADER ------------ -->
                <div class="row">
                    <div class="intro-text col-2">
                        <h1>We are StartUp<br>Creative Beep Agency</h1>
                        <p>Carefully crafted after analysing the needs of different industries and the design achieves a
                            great balance between purpose & presentation</p>
                        <form action="">
                            <div class="news">
                                <input placeholder="Enter your email" class="news-text" type="text">
                                <button class="btn">Subscribe</button>
                            </div>
                        </form>
                    </div>
                    <div class="col-2">
                        <img src="img/illustration.svg">
                    </div>
                </div>
            </div>
        </header>

        <article>
            <!-- ------------ Section PRODUCTS FEATURES ------------ -->
            <section class="products-features" id="features">
                <div class="section-header">
                    <h1>Products Features</h1>
                    <p>
                        It is a long established fact that a reader will be of a page when established fact looking at
                        its
                        layout.
                    </p>
                </div>
                <div class="row">
                    <div class="cards">
                        <div class="card col-3">
                            <i class="fa-solid fa-globe"></i>
                            <h2>Digital Design</h2>
                            <p>
                                Some quick example text to build on the card title and make up the bulk of the card the
                                platform.
                            </p>
                        </div>
                        <div class="card col-3">
                            <i class="fa-solid fa-brush"></i>
                            <h2>Unlimited Colors</h2>
                            <p>
                                Credibly brand stanaads compliant user exteible services College Anibh ocean euismod
                                tincidunt laoreet.
                            </p>
                        </div>
                        <div class="card col-3">
                            <i class="fa-solid fa-chess"></i>
                            <h2>Strategy Solutions</h2>
                            <p>
                                Separated they live in Bookmarks grove right at the coast of the Semantics, a large
                                ocean regelialia.
                            </p>
                        </div>
                    </div>
                </div>
            </section>
            <!-- ------------ Section HOW IT WORKS ------------ -->
            <section class="how-works gray" id="works">
                <div class="section-header">
                    <h1>How It Works ?</h1>
                    <p>
                        It is a long established fact that a reader will be of a page when established fact looking at
                        its
                        layout.
                    </p>
                </div>
                <div class="works-cards">
                    <!--<div class="vertical-line"></div>-->
                    <div class="work-card">
                        <div class="work-card-img">
                            <img src="img/work-1.png" alt="">
                        </div>
                        <div class="work-card-text">
                            <div class="work-card-timeline timeline-left"></div>
                            <h3>Tell us your idea</h3>
                            <p>
                                It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less. It is a long established fact that a reader will be distracted.
                            </p>
                        </div>
                    </div>
                    <div class="work-card">
                        <div class="work-card-text">
                            <div class="work-card-timeline timeline-right"></div>
                            <h3>Debut with users</h3>
                            <p>
                                Some quick example text to build on the card title and make up the bulk of the card's content. Moltin gives you the platform.
                            </p>
                        </div>
                        <div class="work-card-img">
                            <img src="img/work-2.png" alt="">
                        </div>
                    </div>
                    <div class="work-card">
                        <div class="work-card-img">
                            <img src="img/work-3.png" alt="">
                        </div>
                        <div class="work-card-text">
                            <div class="work-card-timeline timeline-left"></div>
                            <h3>Research and Develop</h3>
                            <p>
                                High life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Due to its widespread use as filler text for layouts, non-readability is of great importance.
                            </p>
                        </div>
                    </div>
                </div>
            </section>
            <!-- ------------ Section TEAM ------------ -->
            <section class="team" id="team">
                <div class="section-header">
                    <h1>We'r dynamic team of talented people of innovative & marketing expert</h1>
                    <p>
                        To achieve this, it would be necessary to have uniform grammar, pronunciation and more common
                        words.
                        If several languages of the resulting language.
                    </p>
                </div>
                <div class="stats">
                    <div class="row-center">
                        <div class="col-4">
                            <h2>1499+</h2>
                            <span>Complete Projects</span>
                        </div>
                        <div class="col-4">
                            <h2>1080K</h2>
                            <span>Satisfied Clients</span>
                        </div>
                        <div class="col-4">
                            <h2>608</h2>
                            <span>Team Members</span>
                        </div>
                        <div class="col-4">
                            <h2>252</h2>
                            <span>Employee</span>
                        </div>
                    </div>

                    <div class="team-members row-center">
                        <div class="col-4 card-member">
                            <div class="img-box">
                                <img src="img/team1.jpg" alt="">
                                <div class="social">
                                    <a href=""><i class="fa-brands fa-facebook-f"></i></a>
                                    <a href=""><i class="fa-brands fa-twitter"></i></a>
                                    <a href=""><i class="fa-brands fa-skype"></i></a>
                                </div>
                            </div>
                            <div class="text-box">
                                <h3>Anna G. Wilhite</h3>
                                <p>CEO/Founder</p>
                            </div>
                        </div>
                        <div class="col-4 card-member">
                            <div class="img-box">
                                <img src="img/team2.jpg" alt="">
                                <div class="social">
                                    <a href=""><i class="fa-brands fa-facebook-f"></i></a>
                                    <a href=""><i class="fa-brands fa-twitter"></i></a>
                                    <a href=""><i class="fa-brands fa-skype"></i></a>
                                </div>
                            </div>
                            <div class="text-box">
                                <h3>William S. Blay</h3>
                                <p>CTO/Co-Founder</p>
                            </div>
                        </div>
                        <div class="col-4 card-member">
                            <div class="img-box">
                                <img src="img/team3.jpg" alt="">
                                <div class="social">
                                    <a href=""><i class="fa-brands fa-facebook-f"></i></a>
                                    <a href=""><i class="fa-brands fa-twitter"></i></a>
                                    <a href=""><i class="fa-brands fa-skype"></i></a>
                                </div>
                            </div>
                            <div class="text-box">
                                <h3>Maria B. Morales</h3>
                                <p>Web Designer</p>
                            </div>
                        </div>
                        <div class="col-4 card-member">
                            <div class="img-box">
                                <img src="img/team4.jpg" alt="">
                                <div class="social">
                                    <a href=""><i class="fa-brands fa-facebook-f"></i></a>
                                    <a href=""><i class="fa-brands fa-twitter"></i></a>
                                    <a href=""><i class="fa-brands fa-skype"></i></a>
                                </div>
                            </div>
                            <div class="text-box">
                                <h3>Luke L. Johnston</h3>
                                <p>Web Developer</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- ------------ PARALLAX ------------ -->
            <div class="parallax">
                <div class="overlay"></div>
                <div class="content-text">
                    <h2>Let's get started with Beep</h2>
                    <p>
                        They are a good way to get you started if you want to build something similar or use from
                        existing apps which will reduce the cost, efforts and time of the developers.
                    </p>
                    <a href="">Get Started</a>
                </div>
            </div>

            <!-- ------------ Section TESTIMONIALS ------------ -->
            <section class="testimonials" id="clients">
                <div class="section-header">
                    <h1>What your client says</h1>
                    <p>
                        The Big Oxmox advised her not to do so, because there were thousands of bad Commas, wild
                        Question Marks and devious pulvinar metus molestie sed Semikoli.
                    </p>
                </div>

                <div class="swiper mySwiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="swiper-img">
                                <img src="img/img1.jpg" alt="">
                                <div class="quote-icon">
                                    <i class="fa-solid fa-quote-left"></i>
                                </div>
                            </div>
                            <div class="swiper-text">
                                <div class="swiper-user-info">
                                    <h3>Charlize Theron</h3>
                                    <p>Washington</p>
                                </div>
                                <div class="swiper-user-text">
                                    <p>
                                        "All your client websites if you are an agency orfreelancer. It got all the tools needs to create super fast responsive websites with amazing user experience. Our ever-growing library of components and pre-designed layouts will make your life easier."
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="swiper-img">
                                <img src="img/img2.jpg" alt="">
                                <div class="quote-icon">
                                    <i class="fa-solid fa-quote-left"></i>
                                </div>
                            </div>
                            <div class="swiper-text">
                                <div class="swiper-user-info">
                                    <h3>Peter McCallauway</h3>
                                    <p>New York</p>
                                </div>
                                <div class="swiper-user-text">
                                    <p>
                                        "It looks perfect on all major browsers, tablets,and mobile devices. All files are organized we believe it will be easy to use and edit them. This template is well organized and very easy to customize. We have added a Dark version with RTL supported."
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="swiper-img">
                                <img src="img/img3.jpg" alt="">
                                <div class="quote-icon">
                                    <i class="fa-solid fa-quote-left"></i>
                                </div>
                            </div>
                            <div class="swiper-text">
                                <div class="swiper-user-info">
                                    <h3>John Eston</h3>
                                    <p>Chicago</p>
                                </div>
                                <div class="swiper-user-text">
                                    <p>
                                        " Very well thought out and articulate communication. Clear milestones, deadlines and fast work. Patience. Infinite patience. No shortcuts. Even if the client is being careless. The best part...always solving problems with great original ideas!. "e-designed layouts will make your life easier. "
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>

                <div class="partners">
                    <img src="img/01.png" alt="">
                    <img src="img/02.png" alt="">
                    <img src="img/03.png" alt="">
                    <img src="img/04.png" alt="">
                    <img src="img/05.png" alt="">
                </div>
            </section>

            <!-- ------------ Section CREATIVITY ------------ -->
            <section class="creativity">
                <div class="row-center">
                    <div class="left col-2">
                        <h2>We are digital creative Landing Page</h2>
                        <p>
                            The difference between a successful person and others is not a lack of strength, not a lack
                            of knowledge, but rather a lack of will.Composed in a pseudo-Latin language which more or
                            less pseudo-Latin language corresponds.
                        </p>
                        <div class="stats">
                            <div>
                                <h4>4957</h4>
                                <p>Happy User</p>
                            </div>
                            <div>
                                <h4>1599</h4>
                                <p>Complete Project</p>
                            </div>
                        </div>
                        <a href="" class="btn">Learn More</a>
                    </div>
                    <div class="left col-2">
                        <img src="img/features.png" alt="">
                    </div>
                </div>
            </section>

            <!-- ------------ Section PRICING TABLES ------------ -->
            <section class="pricing gray" id="pricing">
                <div class="section-header">
                    <h1>Our Pricing</h1>
                    <p>
                        It is a long established fact that a reader will be of a page when established fact looking at
                        its layout.
                    </p>
                </div>
                <div class="pricing-cards row-center">
                    <div class="pricing-card col-3">
                        <h4>Starter</h4>
                        <div class="price">
                            <p><sup>$</sup>9<span>/ month</span></p>
                        </div>
                        <ul>
                            <li><span><i class="fa-regular fa-circle-check"></i> Bandwidth</span> <span>1GB</span></li>
                            <li><span><i class="fa-regular fa-circle-check"></i> Onlinespace</span> <span>500MB</span>
                            </li>
                            <li><span><i class="fa-regular fa-circle-xmark"></i> Support:No</span> <span>No</span></li>
                            <li><span><i class="fa-regular fa-circle-check"></i> Domain</span> <span>1</span></li>
                            <li><span><i class="fa-regular fa-circle-xmark"></i> Hidden Fees</span> <span>No</span></li>
                        </ul>
                        <div class="btn btn-white">Join Now</div>
                    </div>
                    <div class="pricing-card col-3">
                        <div class="sale">
                            <p>20% sale</p>
                        </div>
                        <h4>Advanced</h4>
                        <div class="price">
                            <p><sup>$</sup>19<span>/ month</span></p>
                        </div>
                        <ul>
                            <li><span><i class="fa-regular fa-circle-check"></i> Bandwidth</span> <span>2GB</span></li>
                            <li><span><i class="fa-regular fa-circle-check"></i> Onlinespace</span> <span>1GB</span>
                            </li>
                            <li><span><i class="fa-regular fa-circle-check"></i> Support:No</span> <span>Yes</span></li>
                            <li><span><i class="fa-regular fa-circle-check"></i> Domain</span> <span>3</span></li>
                            <li><span><i class="fa-regular fa-circle-check"></i> Hidden Fees</span> <span>No</span></li>
                        </ul>
                        <div class="btn">Join Now</div>
                    </div>
                    <div class="pricing-card col-3">
                        <h4>Professional</h4>
                        <div class="price">
                            <p><sup>$</sup>29<span>/ month</span></p>
                        </div>
                        <ul>
                            <li><span><i class="fa-regular fa-circle-check"></i> Bandwidth</span> <span>3GB</span></li>
                            <li><span><i class="fa-regular fa-circle-check"></i> Onlinespace</span> <span>2GB</span>
                            </li>
                            <li><span><i class="fa-regular fa-circle-check"></i> Support:No</span> <span>Yes</span></li>
                            <li><span><i class="fa-regular fa-circle-check"></i> Domain</span> <span>Unlimited</span>
                            </li>
                            <li><span><i class="fa-regular fa-circle-check"></i> Hidden Fees</span> <span>No</span></li>
                        </ul>
                        <div class="btn btn-white">Join Now</div>
                    </div>

                </div>
                </div>
            </section>

            <!-- ------------ Section BLOG ------------ -->
            <section class="blog" id="blog">
                <div class="section-header">
                    <h1>Our Blog</h1>
                    <p>
                        It is a long established fact that a reader will be of a page when established fact looking at
                        its layout.
                    </p>
                </div>
                <div class="blog-section row-center">
                    <div class="blog-card col-3">
                        <div class="img-box">
                            <img src="img/blog-01.jpg" alt="">
                            <div class="overlay">
                                <h4 class="title"><i class="fa-regular fa-user"></i> Calvin Carlo</h4>
                                <span class="date"><i class="fa-regular fa-clock"></i> 20th March 2021</span>
                            </div>
                        </div>
                        <div class="text-box">
                            <h3>Doing a cross country road trip</h3>
                            <p>We craft digital, graphic and dimensional thinking, to create category leading brand.</p>
                            <a href="">Read more <i class="fa-solid fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="blog-card col-3">
                        <div class="img-box">
                            <img src="img/blog-02.jpg" alt="">
                            <div class="overlay">
                                <h4 class="title"><i class="fa-regular fa-user"></i> Ruben Reed</h4>
                                <span class="date"><i class="fa-regular fa-clock"></i> 01th July 2021</span>
                            </div>
                        </div>
                        <div class="text-box">
                            <h3>New exhibition at our Museum</h3>
                            <p>Even the all-powerful Pointing has no control about the blind almost unorthographic.</p>
                            <a href="">Read more <i class="fa-solid fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="blog-card col-3">
                        <div class="img-box">
                            <img src="img/blog-03.jpg" alt="">
                            <div class="overlay">
                                <h4 class="title"><i class="fa-regular fa-user"></i> Theresa Sinclair</h4>
                                <span class="date"><i class="fa-regular fa-clock"></i> 25th July 2021</span>
                            </div>
                        </div>
                        <div class="text-box">
                            <h3>Design your apps in your own way</h3>
                            <p>Pityful a rethoric question ran over her cheek, then she continued her way.</p>
                            <a href="">Read more <i class="fa-solid fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </section>

            <!-- ------------ Section CONTACT FORM ------------ -->
            <section class="contact gray" id="contact">
                <div class="section-header">
                    <h1>Contact Us</h1>
                    <p>It is a long established fact that a reader will be of a page when established fact looking at its layout.</p>
                </div>
                <div class="contact-info row">
                    <div class="contact-address">
                        <p><i class="fa-regular fa-envelope"></i> support@website.com</p>
                        <p><i class="fa-solid fa-earth-americas"></i> www.website.com</p>
                        <p><i class="fa-solid fa-mobile"></i> +245 1234 5678</p>
                        <p><i class="fa-regular fa-clock"></i> 9:00 AM - 6:00 PM</p>
                        <p><i class="fa-solid fa-location-dot"></i> 412, Plantation Rd, Morehead City, NC, 28557.</p>
                    </div>
                    <div class="contact-form">
                        <form action="">
                            <div class="double-input">
                                <input class="form-control" type="text" name="" id="" placeholder="Enter your name *">
                                <input class="form-control" type="email" name="" id="" placeholder="Enter your email *">
                            </div>
                            <p><input class="form-control" type="text" name="" id="" placeholder="Subject *"></p>
                            <p><textarea class="form-control" name="" id="" cols="30" rows="10" placeholder="Your message *"></textarea></p>
                            <p><input class="btn" type="submit" value="Send Message"></p>
                        </form>
                    </div>
                </div>
            </section>
        </article>
    </main>

    <!-- ------------ FOOTER ------------ -->
    <footer>
        <div class="social">
            <ul>
                <li><a href=""><i class="fa-brands fa-facebook-f"></a></i></li>
                <li><a href=""><i class="fa-brands fa-twitter"></i></a></li>
                <li><a href=""><i class="fa-brands fa-linkedin"></i></a></li>
                <li><a href=""><i class="fa-brands fa-google-plus-g"></i></a></li>
            </ul>
        </div>
        <div class="links">
            <a href="">Terms & Condition</a>
            <span>|</span>
            <a href="">Privacy Policy</a>
            <span>|</span>
            <a href="">Contact Us</a>
        </div>
        <div class="credits">
            <p>
                <script>document.write(new Date().getFullYear())</script> &copy; Beep - Landing Page Template by 
                <a href="">Pichforest</a>
            </p>

        </div>
    </footer>

    <!-- Jaascripts -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <script src="js/script.js"></script>

    <script>
        var swiper = new Swiper(".mySwiper", {
          spaceBetween: 30,
          centeredSlides: true,
          loop: true,
          autoplay: {
            delay: 4000,
            disableOnInteraction: false,
          },
          pagination: {
            el: ".swiper-pagination",
            clickable: true,
          },
        });
      </script>
</body>

</html>