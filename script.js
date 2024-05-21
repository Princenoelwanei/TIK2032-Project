let menuIcon=document.querySelector('#menu-icon');
let navbar=document.querySelector('.navbar');

menuIcon.onclick=()=>{
    menuIcon.classList.toggle('bx-x');
    navbar.classList.toggle('active');
};


let section=document.querySelectorAll('section');
let navLinks=document.querySelectorAll('header nav a');

window.onscroll = () => {
    section.forEach(sec => {
        let top = window.scrollY;
        let offset = sec.offsetTop - 150;
        let height = sec.offsetHeight;
        let id = sec.getAttribute('id');

        if(top >= offset && top < offset + height){
            navLinks.forEach(links => {
                links.classList.remove('active');
                document.querySelector('header nav a[href*=' + id + ']').classList.add('active');
            });
        };

    });
    let header=document.querySelector('header');

    header.classList.toggle('sticky',window.screenY>100);
    menuIcon.classList.remove('bx-x');
    navbar.classList.remove('active');
};


const texts = ['Mahasiswa Teknik', 'Prodi Teknik Informatika'];
    let count = 0;
    let index = 0;
    let currentText = '';
    let letter = '';
    let isDeleting = false;

    (function type() {
        if (count === texts.length) {
            count = 0;
        }

        currentText = texts[count];
        if (!isDeleting) {
            letter = currentText.slice(0, ++index);
        } else {
            letter = currentText.slice(0, --index);
        }

        document.querySelector('.typing').textContent = letter;

        if (!isDeleting && letter.length === currentText.length) {
           
            isDeleting = true;
            setTimeout(type, 1000); 
        } else if (isDeleting && letter.length === 0) {
            isDeleting = false;
            count++;
            setTimeout(type, 500);
        } else {
            let typeSpeed = isDeleting ? 100 : 100;
            setTimeout(type, typeSpeed);
        }
    })
    ();


const sections = document.querySelectorAll('section');


function revealSection() {
    sections.forEach((section) => {
       
        if (window.scrollY + window.innerHeight > section.offsetTop) {
            section.classList.add('reveal');
        }
    });
}

window.addEventListener('scroll', revealSection);

revealSection();
