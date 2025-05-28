// js/m1.js
document.addEventListener('DOMContentLoaded', () => {
    // Sistema de cookies
    const cookieConsent = document.querySelector('.cookie-consent');
    const acceptButton = document.querySelector('.accept-button');
    
    if (cookieConsent && acceptButton) {
        if (!localStorage.getItem('cookiesAccepted')) {
            cookieConsent.style.display = 'block';
        }
        
        acceptButton.addEventListener('click', () => {
            localStorage.setItem('cookiesAccepted', 'true');
            cookieConsent.style.display = 'none';
        });
    }
    
    // Manejo de preguntas
    document.querySelectorAll('.option-button').forEach(button => {
        button.addEventListener('click', function() {
            const questionCard = this.closest('.question-card');
            const answer = questionCard.querySelector('.answer');
            
            // Mostrar respuesta
            answer.style.display = 'block';
            
            // Deshabilitar todos los botones en esta pregunta
            questionCard.querySelectorAll('.option-button').forEach(btn => {
                btn.disabled = true;
            });
        });
    });
    
    // Smooth scroll para posibles anclas
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
});