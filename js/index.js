
const LogoDirection = document.querySelector('.logo').addEventListener('click',()=>{
    location.reload();
});
// Registro de plugins y configuración inicial
gsap.registerPlugin(ScrollTrigger, ScrollToPlugin);

let observer, scrollTween;
const panels = gsap.utils.toArray(".panel");

// Evento para recargar al hacer clic en el logo
document.querySelector('.logo').addEventListener('click', () => {
    location.reload();
});

// Normalización de scroll en dispositivos táctiles
if (ScrollTrigger.isTouch === 1) {
    observer = ScrollTrigger.normalizeScroll(true);
}

// Evita el desplazamiento táctil durante la animación
document.addEventListener("touchstart", e => {
    if (scrollTween) {
        e.preventDefault();
        e.stopImmediatePropagation();
    }
}, { capture: true, passive: false });

// Función para ir a la sección específica
function goToSection(i) {
    scrollTween = gsap.to(window, {
        scrollTo: { y: i * innerHeight, autoKill: false },
        onStart: () => {
            if (!observer) return;
            observer.disable();
            observer.enable();
        },
        duration: 1,
        onComplete: () => scrollTween = null,
        overwrite: true
    });
}

// Crear ScrollTrigger para cada panel
panels.forEach((panel, i) => {
    ScrollTrigger.create({
        trigger: panel,
        start: "top bottom",
        end: "+=199%",
        onToggle: self => self.isActive && !scrollTween && goToSection(i)
    });
});

// Configuración de Snap entre secciones
ScrollTrigger.create({
    start: 0,
    end: "max",
    snap: 1 / (panels.length - 1)
});


  