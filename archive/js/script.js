document.addEventListener('DOMContentLoaded', function() {
  const menuItems = document.querySelectorAll('.menu > li > a');
  menuItems.forEach((menuItem) => {
    if (menuItem.nextElementSibling) {
      menuItem.addEventListener('click', () => {
        menuItem.nextElementSibling.classList.toggle('active');
      });
    }
  });
  
  let sections = document.querySelectorAll('section');
  let navLinks = document.querySelectorAll('header ul li a');
  
  window.onscroll = () => {
    sections.forEach(sec => {
      let top = window.scrollY;
      let offset = sec.offsetTop;
      let height = sec.offsetHeight;
      let id = sec.getAttribute('id');
      if (top >= offset && top < offset + height) {
        navLinks.forEach(links => {
          links.classList.remove('active');
          document.querySelector("header ul li a[href*='" + id + "']").classList.add('active');
        });
      };
    });
  };

  var menuLinks = document.querySelectorAll('.menu a');
  menuLinks.forEach(function (link) {
    link.addEventListener('click', function () {
      var menuBtn = document.getElementById('menu-btn');
      menuBtn.checked = false;
    });
  });
});
