//
console.clear();

const navExpand = [].slice.call(document.querySelectorAll('.nav-expand'));
const backLink = `<li class="nav-item">
    <a class="mobile-nav-link nav-back-link" href="javascript:;">
        Back
    </a>
</li>`;

navExpand.forEach(item => {
 const expandContent = item.querySelector('.nav-expand-content');
  expandContent.insertAdjacentHTML('beforeend', backLink);
  item.querySelector('.mobile-nav-link').addEventListener('click', () => item.classList.add('active'));
  item.querySelector('.nav-back-link').addEventListener('click', () => item.classList.remove('active'));
});


// ---------------------------------------
// not-so-important stuff starts here

const ham = document.getElementById('ham');
ham.addEventListener('click', function () {
  document.body.classList.toggle('nav-is-toggled');

  document.body.addEventListener('click', function (event) {
    if (!event.target.closest('.mobile-menu2')) {
      setTimeout(function() {
        document.body.classList.remove('nav-is-toggled');
      }, 1000);
      // document.body.classList.remove('nav-is-toggled');    
      var navExpandElements = document.getElementsByClassName('nav-expand');
      for (var i = 0; i < navExpandElements.length; i++) {
        navExpandElements[i].classList.remove('active');
      }
    }
  });

  const navExpand = [].slice.call(document.querySelectorAll('.nav-expand'));
  navExpand.forEach(item => {
      item.classList.remove('active');
  });
});


document.body.addEventListener('click', function (event) {
  if (!event.target.closest('.mobile-menu2')) {
    document.body.classList.remove('nav-is-toggled');    
    var navExpandElements = document.getElementsByClassName('nav-expand');
    for (var i = 0; i < navExpandElements.length; i++) {
      navExpandElements[i].classList.remove('active');
    }
  }
});

const leftback = document.querySelector('.left-back');
if (leftback) {
    leftback.addEventListener('click', function () {
        document.body.classList.remove('nav-is-toggled');
    });
}