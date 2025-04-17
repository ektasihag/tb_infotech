function openCity(evt, cityName) {
    var i, tabcontent, tablinks;
  
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
      tabcontent[i].style.display = "none";
    }
  
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
      tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
  
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
  }
  
  // Function to set the first tab as active by default
  function setDefaultTab() {
    var defaultTab = document.getElementsByClassName("tablinks")[0];
    if (defaultTab) {
      defaultTab.click();
    }
  }
  
  // Call the function to set the default tab when the page loads
  window.onload = setDefaultTab;



 let slideIndex = 1;
let slideInterval;
const autoplaySpeed = 3000; // Adjust this value to set the speed in milliseconds

window.onload = function() {
  showSlides();
  startAutoplay();
};

function changeSlide(n) {
  slideIndex += n;
  showSlides();
}

function currentSlide(n) {
  slideIndex = n;
  showSlides();
}

function showSlides() {
  let slides = document.getElementsByClassName("slide");
  let dots = document.getElementsByClassName("dot");

  if (slideIndex > slides.length) { slideIndex = 1 }
  if (slideIndex < 1) { slideIndex = slides.length }

  // Hide all slides
  for (let i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }

  // Remove active class from all dots
  for (let i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }

  // Show the appropriate slides and set active dots
  let startIndex = slideIndex - 1;
  for (let i = startIndex; i < startIndex + 5 && i < slides.length; i++) {
    slides[i].style.display = "block";
  }

  if (dots[slideIndex - 1]) {
    dots[slideIndex - 1].className += " active";
  }
}

function startAutoplay() {
  slideInterval = setInterval(function() {
    changeSlide(1); // Change to the next slide every `autoplaySpeed` milliseconds
  }, autoplaySpeed);
}

function stopAutoplay() {
  clearInterval(slideInterval);
}

  

document.addEventListener('DOMContentLoaded', function () {
  var header = document.querySelector('.top-header');
  window.addEventListener('scroll', function () {
      if (window.scrollY > 300) { // Adjust the value to when you want the class to be added
          header.classList.add('scrolled');
      } else {
          header.classList.remove('scrolled');
      }
  });
});