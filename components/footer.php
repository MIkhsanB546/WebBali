<footer class="mt-auto flex justify-center items-center h-22 bg-gray-50">
  <p class="text-gray-500">Copyright 2025 © WebBali</p>
</footer>

<script src="https://cdn.jsdelivr.net/gh/dixonandmoe/rellax@master/rellax.min.js"></script>
<script>
  new Rellax('.rellax');
  AOS.init();
</script>
<script>
  const burgerIcon = document.getElementById('burger');
  const navMenu = document.getElementById('nav-menu');

  burgerIcon.addEventListener('click', () => {
    if (burgerIcon.classList.contains('fa-bars')) {
      burgerIcon.classList.remove('fa-bars');
      burgerIcon.classList.add('fa-x');
      navMenu.classList.remove('hidden');
    } else {
      burgerIcon.classList.remove('fa-x');
      burgerIcon.classList.add('fa-bars');
      navMenu.classList.add('hidden')
    }
  });
</script>
</body>

</html>