// JS code to indicate active page
document.addEventListener("DOMContentLoaded", () => {
       const links = document.querySelectorAll("nav a");
       const currentUrl = window.location.href.split('?');
       links.forEach(link => {
           if (link.href === currentUrl[0]) {
               link.classList.add("active");
           }
       });
   });

// JS code for hambuger Menu Slider
function menuSlider(){       
       const navBar = document.querySelector('nav');
       const body = document.body;
       navBar.classList.toggle('disabled');
       body.classList.toggle('allfit');
}

const hambuger = document.getElementById('hambuger-icon');
hambuger.addEventListener('click', menuSlider);      


if(innerWidth <= 500){       
       const navLinks = document.querySelectorAll('nav a');
       navLinks.forEach(element => {
              element.addEventListener('click', menuSlider);       
       }); 
}

// Code to download Result as PDF... 
function downloadPDF() {
       const result = document.querySelector(".result"); // change to your result class
       html2pdf().from(result).save('result.pdf');
}