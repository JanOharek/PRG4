// Scroll to top functionality
const scrollToTopBtn = document.getElementById('scrollToTopBtn');
window.onscroll = function() {
    if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
        scrollToTopBtn.style.display = "block";
    } else {
        scrollToTopBtn.style.display = "none";
    }
};

scrollToTopBtn.addEventListener('click', function() {
    window.scrollTo({ top: 0, behavior: 'smooth' });
});

// Form validation and submission
const form = document.getElementById('contactForm');
form.addEventListener('submit', function(event) {
    event.preventDefault();

    const email = document.getElementById('email').value;
    if (!validateEmail(email)) {
        alert('Please enter a valid email address.');
        return;
    }

    // Show loader
    const loader = document.getElementById('loader');
    loader.classList.remove('hidden');

    // Simulate form processing
    setTimeout(() => {
        alert('Form submitted successfully!');
        loader.classList.add('hidden');
    }, 2000);
});

function validateEmail(email) {
    const re = /^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/;
    return re.test(String(email).toLowerCase());
}
