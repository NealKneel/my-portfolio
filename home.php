<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="./css/styles.css">
    <script src="https://unpkg.com/typed.js@2.0.16/dist/typed.umd.js"></script>
    <script defer src="./js/home.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/@emailjs/browser@3/dist/email.min.js"></script>
    <title>My Portfolio</title>
    <link rel="icon" href="./images/favicon.png" type="image/x-icon">

</head>
<body>
    <?php
        include "./include/navbar.php";
    ?>
    
    <main>
        <section id="home-section" class="sections">
            <div class="home-left">
                <img src="./images/home-me.png" alt="My Image" id="fixed-image" class="left">
            </div>
            <div class="home-right">
                    <div class="typed-strings">
                        <p>Hi, I'm</p>
                        <span class="auto-type"></span>
                    </div>
            </div>
        </section>
        <section id="about-me-section" class="sections">



            <div id="about-me-img" class="left">
                <img src="./images/grad-pic.jpg" alt="Graduation Picture">
            </div>
            
            <div class="about-me-txt">
                <div class="right about-me-title">
                    <p>About Me</p>
                </div>
                <p class="right">
                    I am <b>Neal Andrus M. Mancilla</b>, a graduate of Batangas State University, holding a <b>Bachelor of Science in Information Technology</b> degree I completed my studies in 2023 with a major in Business Analytics.
                    <br><br>
                    In my roles during my Capstone and OJT experiences, I primarily focused on <b>backend</b> development. However, I am also capable of contributing to the <b>frontend</b> development to a certain degree.
                    <br><br>
                    I am always eager to learn new programming languages to expand my skill set, specially when it comes to <b>web development</b>. My dedication and strong work ethic, a keen attention to detail coupled with my ability to adapt and contribute effectively within a team, makes me a flexible and valuable asset in various roles.
                </p>
                <br>
                <p class="right">Feel free to view my&nbsp;<button id="openModalBtn">RESUME</button></p>

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
                            <span class="button-text">w/o image</span>
                        </a>
                        <a href="./files/MANCILLA-NAM.pdf" class="option-button" id="option2" download="MANCILLA-NAM.pdf">
                        <i class="fa-solid fa-file-image" style="color: var(--color-6)"></i>
                            <span class="button-text">w/ image</span>
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
            <div class="left">
                <div class="wrapper">
                    <div class="single-card">
                        <div class="proj1 front-card">
                            <div class="proj1 front-content">
                                <img src="./images/aidukasyon-logo.png" alt="Aidukasyon Logo">
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
            <div class="right">
                <div class="wrapper">
                    <div class="single-card">
                        <div class="proj2 front-card">
                            <div class="proj2 front-content">
                                <img src="./images/rms-logo.png" alt="RMS Logo">
                            </div>
                        </div>
                        <div class="proj2 back-card" id="proj2-back-card">
                            <div class="proj2 back-content">
                                <div class="proj2 header"><img src="./images/rms.webp" alt="Aidukasyon Header"></div>
                                <div class="proj2 body">
                                    <p><b>RMS</b> is a web-based project developed for the Batangas State University Research Management Department. It is designed to serve as a comprehensive catalog and repository for intellectual property assets and research publications. For this project, I was responsible for the <b>CRUD functionalities</b> of the admin-side with substantial contributions to the frontend development.</p>
                                    <!-- <p><b>RMS </b>is a web-based project developed for the Batangas State University Research Management Department. It is designed to serve as a comprehensive catalog and repository for intellectual property assets and research endeavors. For this project where I was responsible for the CRUD functionalities of the admin-side with substantial contributions to the frontend development.
                                    <div class="card-button"><a href="https://github.com/NealKneel/new-rms-webdev" target="_blank">Go to repository</a></div> -->
                                </div>
                                <div class="proj2 card-button"><a href="https://github.com/NealKneel/new-rms-webdev" target="_blank">Go to repository</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="contact-section" class="sections">

        <div class="contact-container">
            <h2>Contact Form</h2>
            <div class="form-container">
                <div id="email-fields" class="contact-form show-form">
                    <div class="contact-info">
                        <label for="user_name">Your Name</label>
                        <input type="text" id="user_name" required>

                        <label for="user_email">Email</label>
                        <input type="email" id="user_email" required>

                        <label for="email_subject">Subject</label>
                        <input type="text" id="email_subject"required>
                    </div>
                    <div class="contact-message">
                        <label for="email_message">Message</label>
                        <textarea id="email_message" required></textarea>
                    </div>
                </div>
                <div class="contact-button">
                    <button onclick="SendMail()">Send</button>
                </div>
            </div>
        </div>

        </section>
    </main>
</body>
</html>