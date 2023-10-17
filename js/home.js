/////////////////////////////EMAIL.JS//////////////////////////

(function() {
    emailjs.init('afh1OpJDSNJocyEWn');
})();

function SendMail() {
    var params = {
        user_name : document.getElementById("user_name").value,
        user_number : document.getElementById("user_number").value,
        user_email : document.getElementById("user_email").value,
        email_subject : document.getElementById("subject").value,
        email_message : document.getElementById("message").value
    }
    emailjs.send("service_0pznqny", "template_y0omqpb", params).then(function (res) {
        alert("Success! " + res.status);
    })
}

////////////////////RESUME-MODAL////////////////////////////

// Get the modal and overlay elements
const modal = document.getElementById('myModal');
const overlay = document.getElementById('overlay');

// Get the button that opens the modal and the close button
const openModalBtn = document.getElementById('openModalBtn');
const closeModalBtn = document.getElementById('closeModalBtn');

// Function to open the modal
openModalBtn.addEventListener('click', () => {
    modal.classList.add('active');
    overlay.style.display = 'block';

    // Apply overflow: hidden to the body
    document.body.style.overflow = 'hidden';
});

// Function to close the modal
closeModalBtn.addEventListener('click', () => {
    modal.classList.remove('active');
    overlay.style.display = 'none';

    // Remove overflow: hidden from the body
    document.body.style.overflow = 'auto';
});

// Function to close the modal when clicking outside of it
overlay.addEventListener('click', () => {
    modal.classList.remove('active');
    overlay.style.display = 'none';
});


/////////////////////RESUME-BUTTON///////////////////////

// Get references to the elements
const dlBtn = document.getElementById('dl-btn');
const extraOptions = document.querySelector('.extra-options');
const option1 = document.getElementById('option1');
const option2 = document.getElementById('option2');
let optionsVisible = false;

// Add a click event listener to the download button
dlBtn.addEventListener('click', function() {
    if (optionsVisible) {
        // Hide the extra options and set the flag to false
        dlBtn.style.backgroundColor = 'var(--color-5)';

        option1.style.transform = 'scale(0.1)';
        option2.style.transform = 'scale(0.1)';

        option1.style.top = '0.6rem';
        option1.style.left = '3.8rem';

        option2.style.bottom = '-3rem';
        option2.style.left = '3.8rem';
        optionsVisible = false;
    } else {
        // Show the extra options and set the flag to true
        dlBtn.style.backgroundColor = 'var(--color-6)';

        option1.style.transform = 'scale(1)';
        option2.style.transform = 'scale(1)';

        option1.style.top = '-2rem';
        option1.style.left = '0.5rem';

        option2.style.bottom = '-5.5rem';
        option2.style.left = '0.5rem';
        optionsVisible = true;
    }
});


/////////////////////SCROLL-ANIMATION//////////////////////////
// https://www.youtube.com/watch?v=T33NN_pPeNI


const observer = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
        if (entry.isIntersecting) {
            entry.target.classList.add('show');
        
            if (entry.target.classList.contains('fade-in')) {
                entry.target.classList.add('showFade');
            }
        } else {
            entry.target.classList.remove('show');
            

            if (entry.target.classList.contains('fade-in')) {
                entry.target.classList.remove('showFade');
            }
        }
    });
});

const slideLeft = document.querySelectorAll('.left');
const slideRight = document.querySelectorAll('.right');
const fadeIn = document.querySelectorAll('.fade-in');

slideLeft.forEach((el) => observer.observe(el));
slideRight.forEach((el) => observer.observe(el));
fadeIn.forEach((el) => observer.observe(el));


/////////////////////////CONTACTS-SECTION-ANIMATION///////////////////////////////


// Get references to the elements
const elementToHide = document.querySelector('.icon-container');
const contactSection = document.getElementById('contact-section');

// Create an Intersection Observer
const contacntsObserver = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
        if (entry.isIntersecting) {
            // Add the "hide-class" to the element
            elementToHide.classList.add('hide-class');
        } else {
            // Remove the "hide-class" if it's not in the "contact" section
            elementToHide.classList.remove('hide-class');
        }
    });
}, { threshold: 0.5 }); // Adjust the threshold value as needed

// Observe the "contact" section
contacntsObserver.observe(contactSection);



//////////////////////////TYPED.JS///////////////////////////////
var typed = new Typed(".auto-type", {
    strings: ["","Neal Andrus!", "an aspiring Web Developer!"],
    typeSpeed: 100,
    backSpeed: 50,
    loop: true
})


    const sendMailBtn = document.getElementById("sendMailBtn");
    const inputFields = document.querySelectorAll(".inputBox input");
    const textarea = document.getElementById("message");

    // Function to check if all input fields and the textarea are not empty
    function checkFields() {
        for (const inputField of inputFields) {
            if (inputField.value.trim() === "") {
                return false;
            }
        }
        return textarea.value.trim() !== "";
    }

    // Function to enable or disable the button
    function toggleButtonState() {
        if (checkFields()) {
            sendMailBtn.removeAttribute("disabled");
            sendMailBtn.classList.add("send-mail-btn");
        } else {
            sendMailBtn.setAttribute("disabled", true);
            sendMailBtn.classList.remove("send-mail-btn");
        }
    }

    // Add event listeners to input fields and textarea for real-time validation
    inputFields.forEach((inputField) => {
        inputField.addEventListener("input", toggleButtonState);
    });

    textarea.addEventListener("input", toggleButtonState);

    // Initial button state check
    toggleButtonState();


    const emailInput = document.getElementById('user_email');
    const spanEmail = document.getElementById('span_email');
    const sendBtn = document.getElementById("sendMailBtn");


    emailInput.addEventListener('input', function () {
        if (this.value === "") {
            spanEmail.classList.remove('invalidEmail');
            spanEmail.classList.add('input-span');
            spanEmail.innerHTML = 'Email';
        }
        else if (isValidEmail(this.value)) {
            spanEmail.classList.add('input-span');
            spanEmail.classList.remove('invalidEmail');
            spanEmail.innerHTML = 'Email';
            sendBtn.removeAttribute("disabled");
            sendBtn.classList.add("send-mail-btn");
        } else {
            spanEmail.classList.remove('input-span');
            spanEmail.classList.add('invalidEmail');
            spanEmail.innerHTML = '<i class="fa-solid fa-circle-exclamation" style="color: rgb(192, 38, 38);"></i> Email';
            sendBtn.setAttribute("disabled", true);
            sendBtn.classList.remove("send-mail-btn");
        }
    });
    
    function isValidEmail(email) {
        // Regular expression to validate email
        const emailRegex = /^[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,}$/i;
        return emailRegex.test(email);
    }
    
    