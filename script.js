document.addEventListener('DOMContentLoaded', () => {

    /* ==========================================================================
       1. SCROLL EFFECT OP HEADER
       ========================================================================== */
    const header = document.querySelector('.header');
    
    const checkScroll = () => {
        if (window.scrollY > 20) {
            header.classList.add('scrolled');
        } else {
            header.classList.remove('scrolled');
        }
    };

    window.addEventListener('scroll', checkScroll);
    checkScroll(); // Initiële check bij laden pagina


    /* ==========================================================================
       2. MOBIEL MENU TOGGLE
       ========================================================================== */
    const mobileToggle = document.getElementById('mobile-toggle');
    const mobileOverlay = document.getElementById('mobile-overlay');
    const mobileLinks = document.querySelectorAll('.mobile-nav-link');
    const body = document.body;

    const toggleMenu = () => {
        mobileToggle.classList.toggle('open');
        mobileOverlay.classList.toggle('open');
        // Voorkom scrollen op de achtergrond als het menu open is
        body.classList.toggle('no-scroll');
    };

    mobileToggle.addEventListener('click', toggleMenu);

    // Sluit menu als er op een link wordt geklikt
    mobileLinks.forEach(link => {
        link.addEventListener('click', () => {
            if (mobileOverlay.classList.contains('open')) {
                toggleMenu();
            }
        });
    });


    /* ==========================================================================
       3. SCROLLSPY (Actieve link indicator tijdens scrollen)
       ========================================================================== */
    const sections = document.querySelectorAll('section[id]');
    const navLinks = document.querySelectorAll('.nav-link');
    const mobileNavLinks = document.querySelectorAll('.mobile-nav-link');

    const scrollActive = () => {
        const scrollY = window.pageYOffset;

        sections.forEach(current => {
            const sectionHeight = current.offsetHeight;
            const sectionTop = current.offsetTop - 120; // marge voor de header
            const sectionId = current.getAttribute('id');

            if (scrollY > sectionTop && scrollY <= sectionTop + sectionHeight) {
                // Voeg active class toe aan desktop nav link
                navLinks.forEach(link => {
                    link.classList.remove('active');
                    if (link.getAttribute('href') === `#${sectionId}`) {
                        link.classList.add('active');
                    }
                });
                
                // Voeg active class toe aan mobiele nav link
                mobileNavLinks.forEach(link => {
                    link.classList.remove('active');
                    if (link.getAttribute('href') === `#${sectionId}`) {
                        link.classList.add('active');
                    }
                });
            }
        });
    };

    window.addEventListener('scroll', scrollActive);
    scrollActive(); // Initiële check


    /* ==========================================================================
       4. E-MAIL KOPIEER FUNCTIONALITEIT
       ========================================================================== */
    const copyBtn = document.getElementById('copy-email-btn');
    const emailLink = document.getElementById('email-link');
    const tooltip = document.getElementById('copy-tooltip');

    if (copyBtn && emailLink && tooltip) {
        copyBtn.addEventListener('click', () => {
            const emailAddress = emailLink.innerText || emailLink.textContent;
            
            // Kopieer naar klembord
            navigator.clipboard.writeText(emailAddress).then(() => {
                // Update tooltip tekst
                tooltip.textContent = 'Gekopieerd!';
                copyBtn.classList.add('copied');
                
                // Reset tooltip na 2 seconden
                setTimeout(() => {
                    tooltip.textContent = 'Kopieer';
                    copyBtn.classList.remove('copied');
                }, 2000);
            }).catch(err => {
                console.error('Fout bij kopiëren: ', err);
                tooltip.textContent = 'Fout!';
            });
        });
    }


    /* ==========================================================================
       5. CONTACT FORMULIER (Interactieve feedback & Demo status)
       ========================================================================== */
    const contactForm = document.getElementById('contact-form');
    const formStatus = document.getElementById('form-status');

    if (contactForm && formStatus) {
        contactForm.addEventListener('submit', (e) => {
            e.preventDefault(); // Voorkom standaard form submission

            // Verkrijg data
            const name = document.getElementById('name').value;
            const email = document.getElementById('email-input').value;
            const message = document.getElementById('message').value;

            // Toon laad/verzending status
            formStatus.className = 'form-status';
            formStatus.textContent = 'Verzenden...';
            formStatus.style.display = 'block';

            // Simuleer een API call naar een mailer service (bijv. Formspree/EmailJS of PHP)
            setTimeout(() => {
                // Succes status tonen
                formStatus.classList.add('success');
                formStatus.innerHTML = `Bedankt voor je bericht, <strong>${name}</strong>! <br> Dit formulier is momenteel ingesteld als demo. Je kunt deze functionaliteit later koppelen aan een backend service of PHP script.`;
                
                // Formulier leegmaken
                contactForm.reset();

                // Verberg succesbericht na 7 seconden
                setTimeout(() => {
                    formStatus.style.display = 'none';
                    formStatus.className = 'form-status';
                    formStatus.innerHTML = '';
                }, 7000);
                
            }, 1000);
        });
    }

});
