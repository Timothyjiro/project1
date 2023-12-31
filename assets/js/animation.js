const tl = gsap.timeline({ defaults: { ease: "power1.out" } });
let intro = document.querySelector('.intro');

tl.to(".text", { y: "5%", duration: 1, stagger: 0.25 });
tl.to(".slider", { y: "-100%", duration: 1.5, delay: 0.5 });
tl.to(".intro", { y: "-100%", duration: 0.5 }, "-=1");
tl.fromTo("nav", { opacity: 0 }, { opacity: 1, duration: 0.2 });

window.addEventListener('DOMContentLoaded',()=>{

    setTimeout(()=>{

        setTimeout(()=>{
            intro.style.top = '-10vh';
        },2300)
    }
    )

})