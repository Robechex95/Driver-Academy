document.addEventListener('DOMContentLoaded', () => {
    // Sistema de cookies
    const cookieConsent = document.querySelector('.cookie-consent');
    const acceptButton = document.querySelector('.accept-button');

    if (!localStorage.getItem('cookiesAccepted')) {
        cookieConsent.style.display = 'block';
    }

    acceptButton.addEventListener('click', () => {
        localStorage.setItem('cookiesAccepted', 'true');
        cookieConsent.style.display = 'none';
    });

    // Navegación suave
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

    // Efectos hover para tarjetas
    document.querySelectorAll('.module-card').forEach(card => {
        card.addEventListener('mouseenter', () => {
            card.style.transform = 'translate(-2px, -2px)';
        });
        
        card.addEventListener('mouseleave', () => {
            card.style.transform = 'translate(0, 0)';
        });
    });
});