<!-- Inicio navbar -->
<nav class="py-5 bg-[#ECEAEA] top-0 border-b border-gray-100 before:">
    <div class="md:px-12 md:flex md:items-center md:justify-between">
      <div class="flex items-center justify-between">
        <a href="./index.php" class="flex items-center">
          <img src="../../recursos/media/Mundeando_logo_blanco.png" class="h-10 mr-3" alt="logo">
          <span class="text-2xl text-gray-900 font-sans font-bold"></span>
        </a>
        <span class="block mx-2 text-3xl bg-[#ECEAEA] p-2 rounded-lg md:hidden">
          <svg name="menu" onclick="Menu(this)" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
            stroke-width="1.7" stroke="currentColor" class="w-8 h-8">
            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
          </svg>
        </span>
      </div>
      <ul
        class="p-5 z-10 absolute bg-[#ECEAEA] backdrop-blur w-full left-0 py-4 opacity-0 top-[-400px] transition-all ease-in duration-500 md:p-0 md:flex md:items-center md:space-x-8 md:static md:w-auto md:opacity-100">
        <li class="md:my-0">
          <a href="index.php" class="font-medium duration-500 text-[#1506BF] hover:text-indigo-600"
            aria-current="page">Inicio</a>
        </li>
        <li class="my-6 md:my-0">
          <a href="./destinos.php" class="font-medium duration-500 text-gray-900 hover:text-indigo-600"
            aria-current="page">Destinos</a>
        </li>
        <li class="my-6 md:my-0">
          <a href="./paquetes.php" class="font-medium duration-500 text-gray-900 hover:text-indigo-600"
            aria-current="page">Paquetes</a>
        </li>
        <li class="my-6 md:my-0">
          <a href="./contacto.php" class="font-medium duration-500 text-gray-900 hover:text-indigo-600"
            aria-current="page">Contacto</a>
        </li>
        <a href="../../validar.php" type="button"
          class="w-full text-white bg-[#0C0469] font-medium rounded-xl text-md px-7 py-2 text-center hover:bg-indigo-700 hover:drop-shadow-md transition duration-300 ease-in-out">Login</a>
      </ul>
    </div>
  </nav>
  <!-- Fin navbar -->

  <script src="../../js/assets.js" type="text/javascript"></script>
