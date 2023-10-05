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
    console.log(entry)
    if (entry.isIntersecting) {
        entry.target.classList.add('show');
    }else{
        entry.target.classList.remove('show');
    }
    })
})

const hiddenElements = document.querySelectorAll('.slide');
hiddenElements.forEach((el) => observer.observe(el));


//////////////////////////TYPED.JS///////////////////////////////
var typed = new Typed(".auto-type", {
    strings: ["Neal Andrus!", "an aspiring Web Developer"],
    typeSpeed: 100,
    backSpeed: 50,
    loop: false
})