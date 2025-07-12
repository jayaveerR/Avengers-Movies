
var swiper = new Swiper(".coming-container", {
    spaceBetween: 20,
    loop: true,
    centeredSlides: true,
    autoplay: {
      delay: 2000,
      disableOnInteraction: false,
    },
    breakpoints: {
        0: {
            slidesPerView: 2,
        },
        568: {
            slidesPerView: 3,
        },
        768: {
            slidesPerView: 4,
        },
        968: {
            slidesPerView: 5,
        },

    }
  });

// JavaScript for enhanced functionality
document.addEventListener('DOMContentLoaded', function() {
    // Close mobile menu when clicking a link
    const navLinks = document.querySelectorAll('.nav-link');
    const navbarCollapse = document.querySelector('.navbar-collapse');
    
    navLinks.forEach(link => {
        link.addEventListener('click', () => {
            if (navbarCollapse.classList.contains('show')) {
                const toggle = document.querySelector('.navbar-toggler');
                toggle.click();
            }
        });
    });

    // Smooth scroll behavior for navigation links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                target.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        });
    });

    // Add scroll animation to navbar
    window.addEventListener('scroll', function() {
        const navbar = document.querySelector('.navbar');
        if (window.scrollY > 50) {
            navbar.style.transform = 'translateY(-10px)';
            navbar.style.opacity = '0.9';
            setTimeout(() => {
                navbar.style.transform = 'translateY(0)';
            }, 300);
        } else {
            navbar.style.opacity = '1';
        }
    });
});
//click movies//
document.addEventListener('DOMContentLoaded', function() {
    // Smooth scroll functionality
    document.querySelectorAll('.nav-link').forEach(link => {
        link.addEventListener('click', function(e) {
            // Check if it's a section link
            if(this.hash !== "" && this.hash !== "#") {
                e.preventDefault();
                
                const hash = this.hash;
                const target = document.querySelector(hash);
                
                if(target) {
                    // Close mobile menu if open
                    if(document.querySelector('.navbar-collapse').classList.contains('show')) {
                        document.querySelector('.navbar-toggler').click();
                    }

                    // Smooth scroll animation
                    window.scrollTo({
                        top: target.offsetTop - 70, // Adjust for fixed navbar height
                        behavior: 'smooth'
                    });
                }
            }
        });
    });
});
