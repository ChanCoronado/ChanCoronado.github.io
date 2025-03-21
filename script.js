const navLinks = document.querySelectorAll('header nav a');
const logoLink = document.querySelector('.logo'); 
const sections = document.querySelectorAll('section');
const menuIcon = document.querySelector('#menu-icon'); 
const navbar = document.querySelector('header nav'); 

menuIcon.addEventListener('click', () => {
    menuIcon.classList.toggle('bx-x');
    navbar.classList.toggle('active');
});

const activePage = () => {
    const header = document.querySelector('header');
    const barsBox = document.querySelector('.bars-box');

    header.classList.remove('active');
    setTimeout(() => {
        header.classList.add('active');
    }, 800);

    navLinks.forEach(link => {
        link.classList.remove('active');
    });

    barsBox.classList.remove('active');
    setTimeout(() => {
        barsBox.classList.add('active');
    }, 800);

    sections.forEach(section => {
        section.classList.remove('active');
    });

    menuIcon.classList.remove('bx-x');
    navbar.classList.remove('active');
}

navLinks.forEach((link, idx) => {
    link.addEventListener('click', () => {
        if (!link.classList.contains('active')) {
            activePage();

            link.classList.add('active');

            setTimeout(() => {
                sections[idx].classList.add('active');
            }, 800);
        }
    });
});

if (logoLink) { 
    logoLink.addEventListener('click', () => {
        if (!navLinks[0].classList.contains('active')) {
            activePage();

            navLinks[0].classList.add('active');

            setTimeout(() => {
                sections[0].classList.add('active');
            }, 800);
        }
    });
}

const arrowRight = document.querySelector('.project-box .navigation .arrow-right');
const arrowLeft = document.querySelector('.project-box .navigation .arrow-left');

let index = 0;

const activeproject = () => {
    const imgSlide = document.querySelector('.project-carousel .img-slide');
    const projectDetails = document.querySelectorAll('.project-detail');

    imgSlide.style.transform = `translateX(${index * -100}%)`; 

    projectDetails.forEach(detail => {
        detail.classList.remove('active');
    });

    if (projectDetails[index]) { 
        projectDetails[index].classList.add('active');
    }

    arrowLeft.classList.toggle('disabled', index === 0);
    arrowRight.classList.toggle('disabled', index === 1);
};

arrowRight.addEventListener('click', () => {
    if (index === 0) { 
        index = 1;
        activeproject();
    }
});

arrowLeft.addEventListener('click', () => {
    if (index === 1) { 
        index = 0;
        activeproject();
    }
});

activeproject();
