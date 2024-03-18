
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php
  include_once './recursos/head.php';
  ?>
  <link rel="icon" href="../recursos/media/icon/mundeandoLogo.ico">
  <title>Login</title>
</head>

<body class="h-dvh">
  <!-- Inicio navbar -->
  <nav class="py-5 bg-[#ECEAEA] top-0 border-b border-gray-100">
    <div class="md:px-12 md:flex md:items-center md:justify-between">
      <div class="flex items-center justify-between">
        <a href="../vistas/index.php" class="flex items-center">
          <img src="../recursos/media/Mundeando_logo_blanco.png" class="h-10 mr-3" alt="logo">
          <span class="text-2xl text-gray-900 font-sans font-bold"></span>
        </a>
        <span class="block mx-2 text-3xl bg-[#ECEAEA] p-2 rounded-lg md:hidden">
          <svg name="menu" onclick="Menu(this)" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
            stroke-width="1.7" stroke="currentColor" class="w-6 h-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
          </svg>
        </span>
      </div>
      <ul
        class="p-5 z-10 absolute bg-[#ECEAEA] backdrop-blur w-full left-0 py-4 opacity-0 top-[-400px] transition-all ease-in duration-500 md:p-0 md:flex md:items-center md:space-x-8 md:static md:w-auto md:opacity-100">
        <li class="md:my-0">
          <a href="./views/public/index.php" class="font-medium duration-500 text-[#1506BF] hover:text-indigo-600"
            aria-current="page">Inicio</a>
        </li>
        <li class="my-6 md:my-0">
          <a href="./views/public/destinos.php" class="font-medium duration-500 text-gray-900 hover:text-indigo-600"
            aria-current="page">Destinos</a>
        </li>
        <li class="my-6 md:my-0">
          <a href="./views/public/paquetes.php" class="font-medium duration-500 text-gray-900 hover:text-indigo-600"
            aria-current="page">Paquetes</a>
        </li>
        <li class="my-6 md:my-0">
          <a href="./views/public/contacto.php" class="font-medium duration-500 text-gray-900 hover:text-indigo-600"
            aria-current="page">Contacto</a>
        </li>       
      </ul>
    </div>
  </nav>
  <!-- Fin navbar -->

  <main class="h-auto md:h-svh min-[300px]:h-full md:p-7 min-[300px]:p-7 bg-[#7E7E7E] flex items-center justify-center">
    <section class="flex flex-cols-2 flex-wrap justify-center items-stretch">
      <div class="p-4 h-auto w-full max-w-sm bg-[#00003B] rounded-lg border border-[#00003B] shadow-md sm:p-6 md:p-8">
        <div class="p-5 items-center">
          <span style="font-size: 20px" for=""
            class="pt-7 text-center block mb-2 text-sm font-bold text-white pb-5">¡Bienvenido!</span>
          <img src="../recursos/media/mundo-transp.png" alt="">
        </div>
      </div>
      <div class="p-4 w-full max-w-sm bg-white rounded-lg border border-gray-200 shadow-md sm:p-6 md:p-8 ">
        <form method="POST" action="" class="space-y-6">
          <a href="#" class="flex items-center mb-6 text-2xl font-semibold text-gray-900 ">
            <img src="../recursos/media/Mundeando_logo_blanco.png" alt="logo"
              style="display: block; margin-left: auto; margin-right: auto; width: 75%;">
          </a>

          <div class="flex flex-col gap-6 py-3">
            <div>
              <span style="font-size: 18px" for=""
                class="block mb-2 text-sm font-medium text-gray-900 text-center">Iniciar Sesión</span>
              <span style="font-size: 14px" for=""
                class="block mb-2 text-sm font-normal text-gray-900 text-center">Ingresar con credenciales</span>
            </div>
          </div>
          <div class="flex flex-col gap-2">
            <input type="text" name="username" placeholder="Usuario" style="font-size: 16px"
              class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
              required="">
            <div id="errorUsuario"></div>
            <input type="password" name="password" placeholder="••••••••" style="font-size: 16px"
              class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
              required="">
            <div id="errorContra"></div>
          </div>
          <?php
          if (isset ($errorLogin)) {
            echo $errorLogin;
          }
          ?>
          <input type="hidden" value="login" id="action" name="action">
          <!-- class de boton:   -->
          <button name="btnIngresar" type="submit" style="font-size: 16px"
            class="w-full focus:outline-none text-white bg-[#00003B] hover:bg-[#000080] focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2">
            Ingresar</button>
          <div style="font-size: 15px" class="text-sm text-center font-medium text-gray-500 ">
            <br> <a href="#" class="text-[#7E7E7E] underline hover:underline ">Olvidé mi contraseña</a>
          </div>

          <div id="errorLogin"></div>
        </form>
    </section>
  </main>
  <script src="../../js/assets.js" type="text/javascript"></script>
</body>

</html>