<?php

require_once('backend/functions.php');
// if (UserInfo::get_ip() === "UNKNOW") {
  // userActivity();
// }

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Welkom op de website van Lex Brinkman, Software Developer in Hilversum.">
    <link name="lexbrinkman-favicon" rel="icon" type="image/x-icon" href="/assets/img/laptop.png">
    <!--=============== Remixicons ===============-->
    <link
      href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css"
      rel="stylesheet"
    />

    <!--=============== Swiper Css ===============-->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"
    />

    <!--=============== Css ===============-->
    <link rel="stylesheet" href="../assets/css/style.css" />
    <link rel="stylesheet" href="../assets/css/skins/color-1.css" />

    <!--=============== Skin Colors ===============-->
    <link
      rel="stylesheet"
      href="../assets/css/skins/color-1.css"
      class="alternate-style"
      title="color-1"
      disabled
    />
    <link
      rel="stylesheet"
      href="../assets/css/skins/color-2.css"
      class="alternate-style"
      title="color-2"
      disabled
    />

    <title>Lex Brinkman Portfolio</title>
    <style>
      .project__item {
        grid-template-columns: 5fr;
      }
    </style>
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-3160DRRB7K"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'G-3160DRRB7K');
    </script>
  </head>
  <body>
    <!--=============== Header ===============-->
    <header class="header" id="header">
      <nav class="nav container">
        <div class="nav__menu" id="nav-menu">
          <ul class="nav__list">
            <li>
              <a href="#home" class="nav__link active-link">Hello</a>
            </li>

            <li>
              <a href="#services" class="nav__link">Services</a>
            </li>

            <li>
              <a href="#resume" class="nav__link">Resume</a>
            </li>

            <li>
              <a href="#portfolio" class="nav__link">Portfolio</a>
            </li>

            <li>
              <a href="#contact" class="nav__link">Contact</a>
            </li>
          </ul>

          <div class="nav__close" id="nav-close">
            <i class="ri-close-fill"></i>
          </div>
        </div>

        <div class="nav__toggle" id="nav-toggle">
          <i class="ri-menu-fill"></i>
        </div>
      </nav>
    </header>

    <!--=============== Main ===============-->
    <main class="main">
      <!--=============== Home ===============-->
      <section class="home" id="home">
        <div class="home__container container grid">
          <img src="../assets/img/Lex_Brinkman.jpg" alt="" class="home__img" />

          <div class="home__data">
            <h1 class="home__name">Lex Brinkman</h1>
            <p class="home__work">Software Developer</p>
            <dl class="home__list">
              <dt>AGE:</dt>
              <dd>20</dd>
              <dt>PHONE:</dt>
              <dd>06 - 83 03 50 72</dd>
              <dt>EMAIL:</dt>
              <dd>lexbrinkman2002@gmail.com</dd>
              <dt>ADDRESS:</dt>
              <dd>Hilversum, Netherlands</dd>
            </dl>
            <div class="home__socials">
              <a
                href="https://github.com/lexbrinkman"
                target="_blank"
                class="home__social-link"
              >
                <i class="ri-github-fill"></i>
              </a>
              <a
                href="https://www.linkedin.com/in/lexbrinkman/"
                target="_blank"
                class="home__social-link"
              >
                <i class="ri-linkedin-box-fill"></i>
              </a>
              <a
                href="https://www.facebook.com/lexbrinkman1"
                target="_blank"
                class="home__social-link"
              >
                <i class="ri-facebook-box-fill"></i>
              </a>
              <a
                href="https://www.instagram.com/lexbrinkman/"
                target="_blank"
                class="home__social-link"
              >
                <i class="ri-instagram-fill"></i>
              </a>
            </div>
          </div>
        </div>
      </section>

      <!--=============== Hello ===============-->
      <section class="hello section container">
        <h2 class="section__title">Hi_</h2>

        <p class="hello__details text-lg">
          I'm currently studying on becoming a Software developer. I'm able to build a Web presence from the ground
          up - from concept, navigation, layout and programming to UX.
          Skilled at writing well-designed, testable and efficient code using
          current best practices in Web development. Fast learner, hard worker
          and team player who is proficient in an array of scripting languages
          and multimedia Web tools.
        </p>
        <a target="_blank" href="../assets/img/resume.pdf" class="button button--flex text-sm"
          ><i class="ri-download-line"></i> DOWNLOAD CV</a
        >
      </section>

      <!--=============== Services ===============-->
      <section class="services section container" id="services">
        <h2 class="section__title">Services_</h2>

        <div class="services__container grid">
          <div class="services__item">
            <div class="icon__box">
              <img
                src="../assets/img/web-design.png"
                alt=""
                class="services__icon"
              />
              <div class="services__dot">
                <span class="dot"></span>
              </div>
            </div>

            <h3 class="services__title text-lg">WEB DESIGN</h3>
            <p class="services__detail">
              
            </p>
          </div>

          <div class="services__item">
            <div class="icon__box">
              <img src="../assets/img/laptop.png" alt="" class="services__icon" />
              <div class="services__dot">
                <span class="dot"></span>
              </div>
            </div>

            <h3 class="services__title text-lg">WEB DEVELOPMENT</h3>
            <p class="services__detail">
              
            </p>
          </div>

    

          <div class="services__item">
            <div class="icon__box">
              <img
                src="../assets/img/smartphone-call.png"
                alt=""
                class="services__icon"
              />
              <div class="services__dot">
                <span class="dot"></span>
              </div>
            </div>

            <h3 class="services__title text-lg">RESPONSIVE DESIGN</h3>
            <p class="services__detail">
             
            </p>
          </div>

          <div class="services__item">
            <div class="icon__box">
              <img
                src="../assets/img/operator.png"
                alt=""
                class="services__icon"
              />
              <div class="services__dot">
                <span class="dot"></span>
              </div>
            </div>

            <h3 class="services__title text-lg">TROUBLE SHOOTING</h3>
            <p class="services__detail">
              I'm an experienced troubleshooter and fix bugs for website improvement.
            </p>
          </div>
        </div>
      </section>

      <!--=============== Resume ===============-->
      <section class="section container" id="resume">
        <h2 class="section__title">Resume_</h2>

        <div class="resume__container grid">
          <div class="resume__data">
            <h3 class="resume__title text-sm">EDUCATION</h3>

            <div class="resume__item">
              <h3 class="resume__subtitle text-sm">
                ROC MIDDEN NEDERLAND
              </h3>
              <p class="resume__date text-sm">August 2020 - Present</p>
              <p class="resume__description text-lg">
                MBO Niveau 4 Software Developer
              </p>
            </div>
            
            <div class="resume__item">
              <h3 class="resume__subtitle text-sm">
                ROC TOP
              </h3>
              <p class="resume__date text-sm">August 2018 - July 2020</p>
              <p class="resume__description text-lg">
                MBO Niveau 4 Teaching Assistent
              </p>
            </div>

            <div class="resume__item">
              <h3 class="resume__subtitle text-sm">
                BREDERO MAVO
              </h3>
              <p class="resume__date text-sm">August 2014 - May 2018</p>
              <p class="resume__description text-lg">
                High school diploma vmbo-t/mavo
              </p>
            </div>

          </div>

          <div class="resume__data">
            <h3 class="resume__title text-sm">EMPLOYMENT</h3>

            <div class="resume__item">
              <h3 class="resume__subtitle text-sm">HERGO </h3>
              <p class="resume__date text-sm">Januari 2020 - Present</p>
              <p class="resume__description text-lg">
                Sales employee of meat products
              </p>
            </div>

            <div class="resume__item">
              <h3 class="resume__subtitle text-sm">FLIRT CREATIVITY</h3>
              <p class="resume__date text-sm">August 2021 - Januari 2022</p>
              <p class="resume__description text-lg">
                Junior Creative Developer
              </p>
            </div>

            <div class="resume__item">
              <h3 class="resume__subtitle text-sm">EXTER </h3>
              <p class="resume__date text-sm">April 2019 - December 2019</p>
              <p class="resume__description text-lg">
                Production worker, managing spice ovens, grinding & packaging spices
              </p>
            </div>

            <div class="resume__item">
              <h3 class="resume__subtitle text-sm">LIDL </h3>
              <p class="resume__date text-sm">Juli 2018 - June 2019</p>
              <p class="resume__description text-lg">
                Cashier, stock clerk & warehouse worker
              </p>
            </div>
          </div>
        </div>
      </section>

      <!--=============== Skills ===============-->
      <section class="section container">
        <h2 class="section__title">Skills_</h2>

        <div class="skills__container grid">
          <div class="skills__content">
            <h3 class="skills__title text-sm">FRONTEND</h3>

            <div class="skills__list grid">
              <div class="skills__data">
                <div class="skills__titles">
                  <p class="skills__name text-sm">HTML</p>
                  <span class="skills__number text-sm">90%</span>
                </div>

                <div class="skills__bar">
                  <span class="skills__percentage" style="width: 90%"></span>
                </div>
              </div>

              <div class="skills__data">
                <div class="skills__titles">
                  <p class="skills__name text-sm">CSS</p>
                  <span class="skills__number text-sm">65%</span>
                </div>

                <div class="skills__bar">
                  <span class="skills__percentage" style="width: 65%"></span>
                </div>
              </div>

              <div class="skills__data">
                <div class="skills__titles">
                  <p class="skills__name text-sm">JavaScript</p>
                  <span class="skills__number text-sm">70%</span>
                </div>

                <div class="skills__bar">
                  <span class="skills__percentage" style="width: 70%"></span>
                </div>
              </div>

            </div>
          </div>

          <div class="skills__content">
            <h3 class="skills__title text-sm">BACKEND</h3>

            <div class="skills__list grid">
              <div class="skills__data">
                <div class="skills__titles">
                  <p class="skills__name text-sm">PHP</p>
                  <span class="skills__number text-sm">90%</span>
                </div>

                <div class="skills__bar">
                  <span class="skills__percentage" style="width: 90%"></span>
                </div>
              </div>

              <div class="skills__data">
                <div class="skills__titles">
                  <p class="skills__name text-sm">C#</p>
                  <span class="skills__number text-sm">65%</span>
                </div>

                <div class="skills__bar">
                  <span class="skills__percentage" style="width: 65%"></span>
                </div>
              </div>

              <div class="skills__data">
                <div class="skills__titles">
                  <p class="skills__name text-sm">Laravel</p>
                  <span class="skills__number text-sm">70%</span>
                </div>

                <div class="skills__bar">
                  <span class="skills__percentage" style="width: 70%"></span>
                </div>
              </div>
    
            </div>
          </div>
        </div>
      </section>

      <!--=============== Projects ===============-->
      <section class="work section container" id="portfolio">
        <h2 class="section__title">Work_</h2>

        <div class="project__categories">
          <button class="category__btn text-xs active-work" data-filter="all">
            ALL
          </button>
          <button class="category__btn text-xs" data-filter=".app">
            MOBILE APPS
          </button>
          <button class="category__btn text-xs" data-filter=".web">
            WEB-SITES
          </button>
          <!-- <button class="category__btn text-xs" data-filter=".landing">
            LANDING PAGES
          </button> -->
        </div>

        <div class="projects__container grid">
          <div class="project__item grid mix app web">

            <div class="project__data">
              <h3 class="project__title text-lg">
                DIGITAL PORTFOLIO
              </h3>
              <p class="project__description">
                A portfolio created with the purpose of introducing myself. A central place of   all my accomplishments and skills.
              </p>
              <h4 class="project__stack text-xs">USED STACK:</h4>
              <ul class="tags text-sm">
                <li>html5</li>
                <li>css3</li>
                <li>JavaScript</li>
                <li>Bootstrap</li>
                <a target="_blank" href="https://github.com/lexbrinkman/portfolio" class="project__link text-sm">Check out code</a>
              </ul>

            </div>
          </div>
          <div class="project__item grid mix app web">

            <div class="project__data">
              <h3 class="project__title text-lg">
                VAKANTIE WONINGEN
              </h3>
              <p class="project__description">
                We were asked to create a web application for a teacher wo wanted to display his properties. As an admin of the website you can add future properties and edit current ones. As a visitor you can react to properties you are interested in.
              </p>
              <h4 class="project__stack text-xs">USED STACK:</h4>
              <ul class="tags text-sm">
                <li>html5</li>
                <li>css3</li>
                <li>JavaScript</li>
                <li>PHP</li>
                <li>Bootstrap</li>
                <a target="_blank" href="https://github.com/lexbrinkman/vakantie_woningen" class="project__link text-sm">Check out code</a>
              </ul>

            </div>
          </div>

          <div class="project__item grid mix web">

            <div class="project__data">
              <h3 class="project__title text-lg">
                E-LEARNING
              </h3>
              <p class="project__description">
                This website is created for the purpose to exercise your english vocabulairy. You can practice your vocabulairy using the standard list, or create your own list and add the words you'd like to practice.
              </p>
              <h4 class="project__stack text-xs">USED STACK:</h4>
              <ul class="tags text-sm">
                <li>html5</li>
                <li>css3</li>
                <li>JavaScript</li>
                <li>PHP</li>
                <li>Bootstrap</li>
                <a target="_blank" href="https://github.com/lexbrinkman/e_learning" class="project__link text-sm">Check out code</a>
              </ul>

            </div>
          </div>

          <div class="project__item grid mix web">

            <div class="project__data">
              <h3 class="project__title text-lg">
                KNOW IT ALL
              </h3>
              <p class="project__description">
                For this project we were asked to make a website where people can publish facts. These facts can be funny, serieus, educating, they could be anything. Feel free to check out the website and perhaps share a fun fact. 
              </p>
              <h4 class="project__stack text-xs">USED STACK:</h4>
              <ul class="tags text-sm">
                <li>html5</li>
                <li>css3</li>
                <li>JavaScript</li>
                <li>PHP</li>
                <a target="_blank" href="https://github.com/lexbrinkman/know_it_all" class="project__link text-sm">Check out code</a>
              </ul>

            </div>
          </div>
          <div class="project__item grid mix web app">

            <div class="project__data">
              <h3 class="project__title text-lg">
                ERGOWIJZER
              </h3>
              <p class="project__description">
                A website were you get propperly educated about the healthy life of an office job. You'll read about tips that help you improve your health and posture. 
              </p>
              <h4 class="project__stack text-xs">USED STACK:</h4>
              <ul class="tags text-sm">
                <li>html5</li>
                <li>css3</li>
                <li>JavaScript</li>
                <a target="_blank" href="https://github.com/lexbrinkman/ergowijzer" class="project__link text-sm">Check out code</a>
              </ul>

              
            </div>
          </div>
          <div class="project__item grid mix web">

            <div class="project__data">
              <h3 class="project__title text-lg">
                DE BLIJE DOBBELSTEEN
              </h3>
              <p class="project__description">
                A school project where we had to make 2 games. There were no specific requirements for the games, they just had to fit in with the genre of typical dutch games. We choose for the games "Lingo" and "Memory". Feel free to look around and play a game.
              </p>
              <h4 class="project__stack text-xs">USED STACK:</h4>
              <ul class="tags text-sm">
                <li>html5</li>
                <li>css3</li>
                <li>JavaScript</li>
                <li>PHP</li>
                <a target="_blank" href="https://github.com/lexbrinkman/de_blije_dobbelsteen" class="project__link text-sm">Check out code</a>
              </ul>

             
            </div>
          </div>
        </div>
      </section>



      <!--=============== Contact ===============-->
      <section class="contact section" id="contact">
        <div class="contact__content container">
          <h2 class="section__title">Get in touch_</h2>

          <div class="contact__container grid">
            <div class="contact__info">
              <dl class="contact__list">
                <dt>Phone:</dt>
                <dd>06 - 83 03 50 72</dd>
                <dt>Email:</dt>
                <dd>lexbrinkman2002@gmail.com</dd>
              </dl>

              <ul class="contact__socials">
                <li>
                  <a
                    href="https://www.facebook.com/lexbrinkman1" target="_blank"
                    class="contact__social-link"
                    >Facebook</a
                  >
                </li>
                <li>
                  <a
                    href="https://www.linkedin.com/in/lexbrinkman/" target="_blank"
                    class="contact__social-link"
                    >Linkedin</a
                  >
                </li>
                <li>
                  <a href="https://github.com/lexbrinkman" class="contact__social-link" target="_blank"
                    >Github</a
                  >
                </li>
                <li>
                  <a href="https://www.instagram.com/lexbrinkman/" class="contact__social-link" target="_blank"
                    >Instagram</a
                  >
                </li>
              </ul>
            </div>


            <div class="contact__form">
              <p class="contact__form-title">Or just write me a letter here_</p>

              <form action="" id="contact-form">
              <input
                    type="hidden"
                    name="to_name"
                    value="Lex Brinkman"
                    class="contact__input"
                    id="to_name"
                  />
                <div class="contact__input-div">
                  <input
                    type="text"
                    name="from_name"
                    placeholder="Your name"
                    class="contact__input"
                    id="from_name"
                  />
                </div>

                <div class="contact__input-div">
                  <input
                    type="email"
                    name="reply_to"
                    placeholder="Your e-mail"
                    class="contact__input"
                    id="reply_to"
                  />
                </div>

                <div class="contact__input-div">
                  <textarea
                    name="message"
                    placeholder="Type the message here"
                    class="contact__input textarea"
                    id="message"
                    cols="30"
                    rows="10"
                  ></textarea>
                </div>

                <p class="contact__message text-sm" id="contact-message"></p>

                <button type="submit" name="newMessage" class="button contact__button">
                  SEND
                </button>
              </form>

              <p class="footer__copy">
                &copy; 2022 Lex Brinkman. All Rights Reserved
              </p>
            </div>
          </div>
        </div>
      </section>
    </main>

    <!--=============== Style Switcher ===============-->
    <div class="style__switcher">
      <div class="style__switcher-toggler">
        <i class="ri-settings-4-fill"></i>
      </div>

      <div class="colors">
        <span class="color-1" onclick="setActiveStyle('color-1')"></span>
        <span class="color-2" onclick="setActiveStyle('color-2')"></span>
      </div>
    </div>

    <!--=============== Mixitup ===============-->
    <script src="../assets/js/mixitup.min.js"></script>

    <!--=============== Swiper Js ===============-->
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>

    <!--=============== Email Js ===============-->
    <script
      type="text/javascript"
      src="https://cdn.jsdelivr.net/npm/@emailjs/browser@3/dist/email.min.js"
    ></script>

    <!--=============== Js ===============-->
    <script src="../assets/js/main.js"></script>

    <!--=============== Common ===============-->
    <script src="../assets/js/script.js"></script>
  </body>
</html>
