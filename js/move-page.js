// Obtén todos los enlaces internos
const enlacesInternos = document.querySelectorAll('a[href^="#"]');

enlacesInternos.forEach(enlace => {
  enlace.addEventListener('click', (event) => {
    event.preventDefault(); // Evita el comportamiento por defecto del enlace

    const targetId = enlace.getAttribute('href').substring(1);
    const targetElement = document.getElementById(targetId);

    // Desplázate suavemente al elemento
    targetElement.scrollIntoView({ behavior: 'smooth' });
  });
});