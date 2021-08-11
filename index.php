<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- ===== SWIPER CSS ===== -->
        <link rel="stylesheet" href="./css/swiper-bundle.min.css">
        
        <!-- ===== BOX ICONS ===== -->
        <link href='https://unpkg.com/boxicons@2.0.8/css/boxicons.min.css' rel='stylesheet'>

        <!-- ===== CSS ===== -->
        <link rel="stylesheet" href="./css/styless.css">

        <title>Portfolio Personal</title>
        <script>
        
        function goLogin() {
            window.location.href=("login.php");    
        };
        
        function showAlert(){
          alert("Sent all information!");
        };
/*===== SHOW MENU =====*/
const showMenu = (toggleId, navId)=>{
    const toggle = document.getElementById(toggleId),
    nav = document.getElementById(navId)

    if(toggle && nav){
        toggle.addEventListener('click', ()=>{
            nav.classList.toggle('show-menu')
        })
    }
}
showMenu('nav-toggle', 'nav-menu');

        </script>
    </head>
    <body>
        <!--===== SCROLL TOP =====-->
        <a href="#" class="scrolltop" id="scroll-top">
            <i class='bx bx-chevron-up scrolltop__icon'></i>
        </a>
        
        <!--===== HEADER =====-->
        <header class="l-header" id="header">
            <nav class="nav bd-container">
                <a href="#" class="nav__logo"> Rakhmonov Abdukhamid</a>
                <div class="nav__menu" id="nav-menu">
                    <ul class="nav__list">
                        <li class="nav__item"><a href="#home" class="nav__link active-link">Home</a></li>
                        <li class="nav__item"><a href="#about" class="nav__link">About</a></li>
                        <li class="nav__item"><a href="#services" class="nav__link">Services</a></li>
                        <li class="nav__item"><a href="#portfolio" class="nav__link">Portfolio</a></li>
                        <li class="nav__item"><a href="#contact" class="nav__link">Contact</a></li>
                    </ul>
                </div>
                <div class="nav__toggle" id="nav-toggle">
                    <i class='bx bx-menu'></i>
                </div>
            </nav>
        </header>

        <main class="l-main">
            <!--===== HOME =====-->
            <section class="home" id="home">
                <div class="home__container bd-container bd-grid">
                    <div class="home__data">
                        <span class="home__greeting">Hello, My name is</span>
                        <h1 class="home__name">Rakhmonov Abdukhamid</h1>
                        <span class="home__profession">Web Developer</span>
                        <a download="" href="./pdf/Abdukhamid's Resume.pdf" class="button button-light home__button">Download CV</a>
                    </div>
                    <div class="home__social">
                        <a href="#" class="home__social-icon"><i class="bx bvl-facebook-square"></i></a>
                        <a href="#" class="home__social-icon"><i class="bx bvl-instagram"></i></a>
                        <a href="#" class="home__social-icon"><i class="bx bvl-twitter"></i></a>
                    </div>
                    <div class="home__img">
                        <img src="" alt="">
                    </div>
                </div>
            </section>
            
            <!--===== ABOUT =====-->
            <section class="about section bd-container" id="about">
                <span class="section-subtitle">My history</span>
                <h2 class="section-title">About me</h2>
                <div class="about__container bd-grid">
                    <div class="about__data bd-grid">
                        <p class="about__description"><span>Hello, I am <br></span>Fullstack Web developer, I am passionate about creating and developing web interfaces.With years of experience in web design and development.</p>
                    <div>
                        <span class="about__number">02</span>
                        <span class="about__achievement">Years off Experience</span>
                    </div>
                    <div>
                        <span class="about__number">9+</span>
                        <span class="about__achievement">Projects completes</span>
                    </div>
                    <div>
                        <span class="about__number">02</span>
                        <span class="about__achievement">Best work awards</span>
                    </div>
                    </div>
                    <img src="./img/2.jpg" alt="" class="about__img">
                </div>
            </section>

            <!--===== QUALIFICATION =====-->
            <section class="qualification section bd-container">
                <span class="section-subtitle">Experience and education</span>
                <h2 class="section-title">Qualification</h2>

                <div class="qualification__container bd-grid">
                    <div class="qualification__content">
                        <h2 class="qualification__title">
                            <i class="bx bx-briefcase-alt qualification__title-icon"></i>
                            Work Experience
                        </h2>
                        <div class="bd-grid">
                            <div class="qualification__data">
                                <h3 class="qualification__area">Fullstack Web Developer</h3>

                                <div class="qualification__box">
                                    <span class="qualification__work">
                                        <i class="bx bx-briefcase-alt qualification__icon"></i>
                                        Bootcamp - Fergana 
                                    </span>

                                    <span class="qualification__work">
                                        <i class="bx bx-calendar-alt qualification__icon"></i>
                                        Jan 2019 - Aug 2019 
                                    </span>
                                </div>
                            </div>
                            
                            <div class="qualification__data">
                                <h3 class="qualification__area">UI / Ux Designer</h3>

                                <div class="qualification__box">
                                    <span class="qualification__work">
                                        <i class="bx bx-briefcase-alt qualification__icon"></i>
                                        Figma - TeamPro 
                                    </span>

                                    <span class="qualification__work">
                                        <i class="bx bx-calendar-alt qualification__icon"></i>
                                        Oct 2020 - Dec 2020 
                                    </span>
                                </div>
                            </div>

                            <div class="qualification__data">
                                <h3 class="qualification__area">Ionic App</h3>

                                <div class="qualification__box">
                                    <span class="qualification__work">
                                        <i class="bx bx-briefcase-alt qualification__icon"></i>
                                       TeamPro - Tashkent
                                    </span>

                                    <span class="qualification__work">
                                        <i class="bx bx-calendar-alt qualification__icon"></i>
                                        Jan 2021 - May 2021 
                                    </span>
                                </div>
                            </div>

                        </div>
                    </div>

                  
                    <div class="qualification__content">
                        <h2 class="qualification__title">
                            <i class="bx bx-book-bookmark qualification__title-icon"></i>
                            Education
                        </h2>
                        <div class="bd-grid">
                            <div class="qualification__data">
                                <h3 class="qualification__area">University</h3>

                                <div class="qualification__box">
                                    <span class="qualification__work">
                                        <i class="bx bx-book-alt qualification__icon"></i>
                                        Fergana - Tashkent Information Technology University 
                                    </span>

                                    <span class="qualification__work">
                                        <i class="bx bx-calendar-alt qualification__icon"></i>
                                        Sen 2016 - Jul 2020 
                                    </span>
                                </div>
                            </div>
                            
                            <div class="qualification__data">
                                <h3 class="qualification__area">Master in web developer</h3>

                                <div class="qualification__box">
                                    <span class="qualification__work">
                                        <i class="bx bx-book-alt qualification__icon"></i>
                                        Fergana - Bootcamp
                                    </span>

                                    <span class="qualification__work">
                                        <i class="bx bx-calendar-alt qualification__icon"></i>
                                        Jan 2019 - Aug 2019 
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </section>
            <!--===== SERVICES =====-->
            <section class="services section bd-container" id="services">
                <span class="section-subtitle">What is offer</span>
                <h2 class="section-title">Services</h2>

                <div class="services__container bd-grid">
                    <div class="services__data">
                        <i class='bx bx-palette services__icon'></i>
                        <h3 class="services__title">Ui/Ux Design</h3>
                        <p class="services__description">
                            Services that I offer and work, with years of experience in the work area.
                        </p>
                        <a href="#" class="button">Know More</a>
                    </div>
                    <div class="services__data">
                        <i class='bx bx-laptop services__icon'></i>
                        <h3 class="services__title">Web development</h3>
                        <p class="services__description">
                            Services that I offer and work, with years of experience in the work area.
                        </p>
                        <a href="#" class="button">Know More</a>
                    </div>
                    <div class="services__data">
                        <i class='bx bx-mobile services__icon'></i>
                        <h3 class="services__title">Ionic app</h3>
                        <p class="services__description">
                            Services that I offer and work, with years of experience in the work area.
                        </p>
                        <a href="#" class="button">Know More</a>
                    </div>
                </div>
            </section>
            
            <!--===== PROJECT IN MIND =====-->
            <section class="project section bd-container">
             <div class="project__container bd-grid">
                 <div class="project__data">
                     <i class='bx bx-chat project__icon'></i>
                     <div>
                         <h2 class="project__title">Project in Github</h2>
                        <p class="project__description">You can see my portfolio projects.</p> 
                    </div>
                    <div>
                        <a href="https://github.com/AbduhamidDev" class="button button-white">Go there</a>
                    </div>
                 </div>
             </div>
            </section>

            <!--===== PORTFOLIO =====-->
            <section class="portfolio section bd-container" id="portfolio">
                <span class="section-subtitle">My recent works</span>
                <h2 class="section-title">Portfolio</h2>
                <div class="portfolio__nav">
                    <span class="portfolio__item active-portfolio" data-filter="all">All</span>
                    <span class="portfolio__item" data-filter=".web">Web</span>
                    <span class="portfolio__item" data-filter=".ux">Ui/Ux</span>
                    <span class="portfolio__item" data-filter=".app">Ionic App</span>
                </div>
                <div class="portfolio__container bd-grid">
                    <div class="portfolio__content mix web">
                        <a href="#"><img src="./img/full.jpeg" alt="" class="portfolio__img"></a>
                    <div class="portfolio__data">
                        <span class="portfolio__subtitle">Web development</span>
                        <a href="#"><h2 class="portfolio__title">New portfolio of work done for a client.</h2></a>
                      <a href="#" class="button button-link">View Details</a>
                    </div>
                    </div>

                    <div class="portfolio__content mix web">
                        <a href="#"><img src="./img/shop.png" alt="" class="portfolio__img"></a>
                    <div class="portfolio__data">
                        <span class="portfolio__subtitle">Web development</span>
                        <a href="#"><h2 class="portfolio__title">New portfolio of work done for a client.</h2></a>
                      <a href="#" class="button button-link">View Details</a>
                    </div>
                    </div>

                    <div class="portfolio__content mix ux">
                        <a href="#"><img src="./img/full1.jpeg" alt="" class="portfolio__img"></a>
                    <div class="portfolio__data">
                        <span class="portfolio__subtitle">Ux design</span>
                        <a href="#"><h2 class="portfolio__title">New portfolio of work done for a client.</h2></a>
                      <a href="#" class="button button-link">View Details</a>
                    </div>
                    </div>
                   
                    <div class="portfolio__content mix ux">
                        <a href="#"><img src="./img/webb.jpg" alt="" class="portfolio__img"></a>
                    <div class="portfolio__data">
                        <span class="portfolio__subtitle">Ux design</span>
                        <a href="#"><h2 class="portfolio__title">New portfolio of work done for a client.</h2></a>
                      <a href="#" class="button button-link">View Details</a>
                    </div>
                    </div>
                    
                    <div class="portfolio__content mix app">
                        <a href="#"><img src="./img/mobile.jpg" alt="" class="portfolio__img"></a>
                    <div class="portfolio__data">
                        <span class="portfolio__subtitle">Ionic Mobile app</span>
                        <a href="#"><h2 class="portfolio__title">New portfolio of work done for a client.</h2></a>
                      <a href="#" class="button button-link">View Details</a>
                    </div>
                    </div>
                    
                    <div class="portfolio__content mix app">
                        <a href="#"><img src="./img/mobileapp.jpg" alt="" class="portfolio__img"></a>
                    <div class="portfolio__data">
                        <span class="portfolio__subtitle">Ionic Mobile app</span>
                        <a href="#"><h2 class="portfolio__title">New portfolio of work done for a client.</h2></a>
                      <a href="#" class="button button-link">View Details</a>
                    </div>
                    </div>

                </div>
            </section>

            <!--===== TESTIMONIAL =====-->
            <section class="testimonial section bd-container">
                <span class="section-subtitle">My client saying</span>
                <h2 class="section-title">Testimonial</h2>

                <div class="testimonial__container swiper-container">
                    <div class="swiper-wrapper">
                        <div class="testimonial__content swiper-slide">
                            <img src="./img/frenkiy.jpg" alt="" class="testimonial__img">
                            <h3 class="testimonial__title">Frenkiy</h3>
                            <span class="testimonial__client">Client</span>
                            <p class="testimonial__description">This company does a very good service, offers the best deals and does a good job, I recommend it.</p>                    
                        </div>

                        <div class="testimonial__content swiper-slide">
                            <img src="./img/testimonial2.jpg" alt="" class="testimonial__img">
                            <h3 class="testimonial__title">Bro</h3>
                            <span class="testimonial__client">Client</span>
                            <p class="testimonial__description">This company does a very good service, offers the best deals and does a good job, I recommend it.</p>                    
                        </div>

                        <div class="testimonial__content swiper-slide">
                            <img src="./img/testimonial3.jpg" alt="" class="testimonial__img">
                            <h3 class="testimonial__title">Friend</h3>
                            <span class="testimonial__client">Client</span>
                            <p class="testimonial__description">This company does a very good service, offers the best deals and does a good job, I recommend it.</p>                    
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </section>

            <!--===== CONTACTME =====-->
            <section class="contact section bd-container" id="contact">
                <span class="section-subtitle">For projects</span>
                <h2 class="section-title">Contact Me</h2>

                <div class="contact1--container bd-grid">
                    <div class="contact__content bd-grid">
                        <div class="contact__box">
                            <i class="bx bx-home contact-icon"></i>
                            <h3 class="contact__title">Location</h3>
                            <span class="contact__description">Uzbekistan Kokand</span>
                        </div>

                        <div class="contact__box">
                            <i class="bx bx-phone contact-icon"></i>
                            <h3 class="contact__title">Phone</h3>
                            <span class="contact__description">+99890-550-52-84</span>
                        </div>

                        <div class="contact__box">
                            <i class="bx bx-envelope contact-icon"></i>
                            <h3 class="contact__title">Gmail</h3>
                            <span class="contact__description">pythondeveloper533@gmail.com</span>
                        </div>

                        <div class="contact__box">
                            <i class="bx bx-chat contact-icon"></i>
                            <h3 class="contact__title">Chat</h3>
                            <div>
                                <a href="#" class="contact__social"><i class='bx bxl-instagram'></i></a>
                                <a href="http://t.me/PWCSgroup" class="contact__social"><i class='bx bxl-telegram'></i></a>
                                <a href="#" class="contact__social"><i class='bx bxl-facebook'></i></a>
                            </div>
                        </div>
                    </div>
                    <form class="contact__form" method="POST">
                    
                        <div class="contact__inputs">
                            <input type="text" placeholder="Name" name="name" class="contact__input">
                            <input type="email" placeholder="Email" name="email" class="contact__input">
                        </div>

                        <div class="contact__inputs">
                            <input type="text" placeholder="Project" name="project" class="contact__input">
                            <input type="number" placeholder="Number" name= "number" class="contact__input">
                        </div>

                        <textarea name="text"  id="" cols="0" rows="7" placeholder="Message" class="contact__input"></textarea>
                        <input type="submit" onClick="showAlert()" value="Send Message" name="submit" class="button contact__button">

                    </form>
                </div>
            </section>
        </main>

        <!--===== FOOTER =====-->
        <footer class="footer">
            <div class="footer__container bd-container">
                <h1 onClick="goLogin()" class="footer__title">Rakhmonov Abdukhamid</h1>
                <p class="footer__description">I am Rakhmonov Abdukhamid and this is my personal website, consult me here</p>

                <div class="footer__social">
                    <a href="https://www.linkedin.com/in/abdukhamid-rakhmonov-4719b4212" class="footer__link"><i class='bx bxl-linkedin'></i></a>
                    <a href="https://github.com/AbduhamidDev" class="footer__link"><i class='bx bxl-github'></i></a>
                    <a href="https://portfolioabdukhamid.000webhostapp.com/" class="footer__link"><i class='bx bxl-dribbble'></i></a>
                </div>
                <p class="footer__copy">&#169; 2021 Bedimcode. All right reserved</p>
            </div>
        </footer>
        
        <!-- ===== MIXITUP FILTER ===== -->
        <script src="./js/mixitup.min.js"></script>
        
        <!-- ===== SWIPER JS ===== -->
        <script src="./js/swiper-bundle.min.js"></script>
        
        <!-- ===== GSAP ===== -->
        <script src="./js/gsap.min.js"></script>
        
        <!--===== MAIN JS =====-->
        <script src=""></script>
    </body>
</html>