
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
        <section id="home-section">
            <div class="home-left">
                <img src="./images/my-image.2jpg.png" alt="My Image" id="fixed-image">
            </div>
            <div class="home-right">
                <p class="typing" id="home-txt-1">Hi, I'm</p>
                <p class="typing" id="home-txt-2">Neal Andrus!</p>
            </div>
        </section>
        <section id="about-me-section">
            <div class="about-me-img">
                <img src="./images/grad-pic.jpg" alt="Graduation Picture">
            </div>
            <div class="about-me-txt">
                <p>
                    I am <b>Neal Andrus M. Mancilla</b>, a graduate of Batangas State University, holding a <b>Bachelor of Science in Information Technology</b> degree I completed my studies in 2023 with a major in Business Analytics.
                    <br><br>
                    In my roles during my Capstone and OJT experiences, I primarily focused on <b>backend</b> development. However, I am also capable of contributing to the <b>frontend</b> development to a certain degree.
                    <br><br>
                    I am always eager to learn new programming languages to expand my skill set, specially when it comes to <b>web development</b>. My dedication and strong work ethic, a keen attention to detail coupled with my ability to adapt and contribute effectively within a team, makes me a flexible and valuable asset in various roles.
                </p>
                <br>
                <span>Feel free to view my<button id="openModalBtn">RESUME</button></span>
                <div id="myModal" class="modal">
                    <div class="close" id="closeModalBtn">
                        <i class="fa-solid fa-circle-xmark fa-s" style="color: #0d0221;"></i>
                    </div>
                    <div class="resume-download">                        
                        <a href="./files/MANCILLA_NAM.pdf" download="MANCILLA_NAM.pdf"><i class="fa-solid fa-file-arrow-down fa-2xl"  style="color: var(--color-6)"></i></a>
                    </div>
                    <div class="modal-content">
                        <?php
                        include "./include/resume.php"
                        ?>
                    </div>
                </div>
        
                <div id="overlay" class="overlay"></div>
            </div>
        </section>
        <section id="messages-section">
            <p>MESSAGES</p>
        </section>
        <section id="contact-section">
            <p>CONTACT</p>
        </section>
    </main>
</body>
</html>