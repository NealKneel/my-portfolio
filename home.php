
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="./css/styles.css">
    <script defer src="./js/home.js"></script>
    <title>Document</title>
</head>
<body>
    <?php
        include "./include/navbar.php";
    ?>
    
    <main>
        <section id="home-section" class="sections">
            <div class="home-left">
                <img src="./images/my-image.2jpg.png" alt="My Image" id="fixed-image">
            </div>
            <div class="home-right">
                <p class="typing" id="home-txt-1">Hi, I'm</p>
                <p class="typing" id="home-txt-2">Neal Andrus!</p>
                <p class="slide right" id="home-txt-3">
                    As an aspiring web developer, I'm excited to share with you my journey and the projects I've created along the way.
                </p>
            </div>
        </section>
        <section id="about-me-section" class="sections">



            <div id="about-me-img" class="slide">
                <img src="./images/grad-pic.jpg" alt="Graduation Picture">
            </div>
            
            <div class="about-me-txt">
                <div class="about-me-title">
                    <p>About Me</p>
                </div>
                <p>
                    I am <b>Neal Andrus M. Mancilla</b>, a graduate of Batangas State University, holding a <b>Bachelor of Science in Information Technology</b> degree I completed my studies in 2023 with a major in Business Analytics.
                    <br><br>
                    In my roles during my Capstone and OJT experiences, I primarily focused on <b>backend</b> development. However, I am also capable of contributing to the <b>frontend</b> development to a certain degree.
                    <br><br>
                    I am always eager to learn new programming languages to expand my skill set, specially when it comes to <b>web development</b>. My dedication and strong work ethic, a keen attention to detail coupled with my ability to adapt and contribute effectively within a team, makes me a flexible and valuable asset in various roles.
                </p>
                <br>
                <span>Feel free to view my&nbsp;<button id="openModalBtn">RESUME</button></span>

                <div id="myModal" class="modal">
                    <div class="modal-content">
                    <div class="close" id="closeModalBtn">
                        <i class="fa-solid fa-circle-xmark fa-s" ></i>
                    </div>

                    <button class="download-button" id="dl-btn">
                        <i class="fa-solid fa-download fa-2xl"></i>
                    </button>

                    <div class="extra-options">
                        <a href="./files/MANCILLA_NAM.pdf" class="option-button" id="option1" download="MANCILLA_NAM.pdf">
                            <i class="fa-solid fa-file-arrow-down" style="color: var(--color-6);"></i>
                            <span class="button-text">w/ image</span>
                        </a>
                        <a href="./files/MANCILLA-NAM.pdf" class="option-button" id="option2" download="MANCILLA_NAM.pdf">
                        <i class="fa-solid fa-file-image" style="color: var(--color-6)"></i>
                            <span class="button-text">w/o image</span>
                        </a>
                    </div>
                        <?php
                        include "./include/resume.php"
                        ?>
                    </div>
                </div>
                
                <div id="overlay" class="overlay"></div>
            </div>
        </section>
        
        <section id="projects-section" class="sections">
            <div class="slide">
                <div class="wrapper">
                    <div class="single-card">
                        <div class="proj1 front-card">
                            <div class="proj1 front-content">
                                <img class="front-img" src="./images/aidukasyon-logo.png" alt="Aidukasyon Logo">
                            </div>
                        </div>
                        <div class="proj1 back-card">
                            <div class="proj1 back-content">
                                <div class="proj1 headar"><img  src="./images/logo1.png" alt="Aidukasyon Header"></div>
                                <div class="proj1 body">
                                    <p><b>AIDukasyon </b>serves as a web portal aimed at streamlining the application procedure for the educational aid program offered by the Municipality of Alitagtag. This project served as our Capstone Project/Thesis, and my responsibilities encompassed both <b>backend</b> and <b>frontend development</b> for the admin interface, with a focus on backend development.</p>
                                </div>
                                <div class="proj1 card-button"><a href="https://alitagtag.aidukasyon.online" target="_blank">Go to website</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slide">
                <div class="wrapper">
                    <div class="single-card">
                        <div class="proj2 front-card">
                            <div class="proj2 front-content">
                                <img class="front-img" src="./images/favicon.png" alt="Aidukasyon Logo">
                            </div>
                        </div>
                        <div class="proj2 back-card">
                            <div class="proj2 back-content">
                                <div class="proj2 header"><img src="./images/background_img.webp" alt="Aidukasyon Header"></div>
                                <div class="proj2 body">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                </div>
                                <div class="proj2 card-button"><a href="https://alitagtag.aidukasyon.online" target="_blank">Go to website</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- <div class="slide">
                <div class="wrapper">
                    <div class="single-card">
                        <div class="proj2 front-card">
                            <div class="proj2 front-content">
                                <img class="proj2 front" src="./images/favicon.png" alt="BSU BG">
                                <h1>RMS</h1>
                            </div>
                        </div>
                        <div class="proj-2 back-card">
                            <div class="proj2 back-content">
                                <div class="top">
                                    <img class="proj2-back" src="./images/background_img.webp" alt="BSU BG">
                                </div>
                                <div class="bot">
                                    <p><b>RMS </b>is a web-based project developed for the Batangas State University Research Management Department. It is designed to serve as a comprehensive catalog and repository for intellectual property assets and research endeavors. For this project where I was responsible for the CRUD functionalities of the admin-side with substantial contributions to the frontend development.
                                    <div class="card-button"><a href="https://github.com/NealKneel/new-rms-webdev" target="_blank">Go to repository</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
        </section>
        <section id="contact-section" class="sections">
            <p>CONTACT</p>
        </section>
    </main>
</body>
</html>