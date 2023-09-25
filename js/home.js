// Get the modal and overlay elements
const modal = document.getElementById('myModal');
const overlay = document.getElementById('overlay');

// Get the button that opens the modal and the close button
const openModalBtn = document.getElementById('openModalBtn');
const closeModalBtn = document.getElementById('closeModalBtn');

// Function to open the modal
openModalBtn.addEventListener('click', () => {
    modal.style.display = 'block';
    overlay.style.display = 'block';

    // Apply overflow: hidden to the body
    document.body.style.overflow = 'hidden';
});

// Function to close the modal
closeModalBtn.addEventListener('click', () => {
    modal.style.display = 'none';
    overlay.style.display = 'none';

    // Remove overflow: hidden from the body
    document.body.style.overflow = 'auto';
});

// Function to close the modal when clicking outside of it
overlay.addEventListener('click', () => {
    modal.style.display = 'none';
    overlay.style.display = 'none';
});
