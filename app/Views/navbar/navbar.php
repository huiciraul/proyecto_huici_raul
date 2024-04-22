<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SportClub</title>
  <link rel="stylesheet" href="..\assets/css/navbar.css">
  <script src="https://kit.fontawesome.com/a25933befb.js" crossorigin="anonymous"></script>
</head>
<body>
  <section class="navBarSection">
    <div class="headernav">
      <div class="logoDiv">
        <a href="<?= base_url('/')?>" class="logo">
          <strong>SportClub</strong>
        </a>
      </div>
      <div id="navBar" class="navBar">
        <ul class="navList flex">
          <li class="navItem">
            <a href="<?= base_url('/')?>" class="navLink">Inicio</a>
          </li>
          <li class="navItem">
            <a href="<?= base_url('/productos')?>" class="navLink">Productos</a>
          </li>
          <li class="navItem">
            <a href="<?= base_url('/contacto')?>" class="navLink">Contacto</a>
          </li>
          <li class="navItem">
            <button class="btn loginBtn">
              <a href="<?= base_url('/login')?>" class="login">Ingresa a tu cuenta</a>
            </button>
          </li>
          <li class="navItem">
            <button class="btn signUp">
              <a href="<?= base_url('/login')?>" class="signUp">Registrate</a>
            </button>
          </li>
        </ul>
      </div>
    </div>
  </section>
  <script>
    function handleScroll() {
      var headernav = document.querySelector('.headernav');
      var scrollPosition = window.scrollY;

      if (scrollPosition > 0) {
          headernav.classList.add('scrolled');
      } else {
          headernav.classList.remove('scrolled');
      }
    }

    window.addEventListener('scroll', handleScroll);
  </script>
</body>
</html>
