<?php require('./layout/header.php')?>
<body>

<style>
    .home-section{
  position: relative;
  background:url(Fondo.jpeg);
	background-size: 100vw 100vh;
  height: 100vh;
  left: 260px;
  width: calc(100% - 260px);
  transition: all 0.5s ease;
  padding: 12px;
}
</style>

    

<?php require('./layout/menu.php')?>
<section class="home-section">
    <div class="home-content">
      <i class='bx bx-menu' ></i>
      <span class="text">Evaluacion de Personal</span>
    </div>
  </section>
</body>
</html>