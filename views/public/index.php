<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php
  include_once '../../recursos/head.php';
  ?>
  <link rel="icon" href="../../recursos/media/icon/mundeandoLogo.ico">
  <title>Mundeando - Inicio </title>
</head>

<body class="bg-gray-300">

  <!-- Navbar -->

  <?php
  include_once '../../recursos/menu.php';
  ?>

  <!-- Navbar -->

  <!-- Section " Información " -->
  <main class="w-auto h-shv bg-gray-200">
    <!-- section hero principal -->
    <section class="py-2">
      <div
        class="flex flex-wrap md:flex-row items-center justify-center px-6 lg:px-8 mx-7 my-2 bg-gradient-to-r from-[#339C30] to-[#123611] rounded-3xl md:h-svh">
        <div class="mx-auto pt-10 max-w-2xl lg:w-1/2 sm:pt-1">
          <div class="text-center">
            <h1 class="text-4xl font-bold text-white sm:text-7xl">¡El mundo a tu alcance!</h1>
            <p class="mt-6 text-md  text-white sm:text-lg">Lorem ipsum dolor sit amet consectetur adipisicing elit.
              Ipsam,
              blanditiis sapiente minima repellat
              cupiditate laudantium ullam alias quisquam. Pariatur,
              dolore vitae quod fugiat quas nobis quis sunt a ipsa debitis.</p>
            <div class="my-5 flex items-center justify-center gap-x-6 sm:my-6">
              <a href="#" class="rounded-2xl bg-[#0C0469] px-10 py-2.5 text-sm font-semibold text-white shadow-sm
                 hover:bg-indigo-700 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2
                  focus-visible:outline-indigo-700  hover:drop-shadow-md transition duration-300 ease-in-out">Ver
                más</a>
            </div>
          </div>
        </div>
        <div class="flex justify-center items-center lg:w-1/2 md:flex md:justify-center md:items-center">
          <img class="size-3/4" src="../../recursos/media/mundo-transp.png" alt="">
        </div>
      </div>
    </section>
    <!-- Fin del section principal -->

    <!-- section paices -->

    <div class="flex flex-wrap h-auto bg-slate-300 px-36 py-10 justify-evenly gap-4 relative">
      <div class="flex flex-col justify-center items-center hover:scale-110 transition duration-300 ease-in-out">
        <div class=" h-64 w-64">
          <img class="rounded-full h-full pb-3 object-cover" src="../../recursos/media/colombia.jpg" alt="">
        </div>
        <div class="flex flex-col justify-center items-center">
          <h3 class="font-semibold text-lg ">Colonbia</h3>
          <p class="pb-5 text-center"> un lugar bla bla bla bla</p>
        </div>
      </div>

      <div class="flex flex-col justify-center items-center hover:scale-110 transition duration-300 ease-in-out">
        <div class=" h-64 w-64">
          <img class="rounded-full h-full pb-3 object-cover" src="../../recursos/media/peru.jpg" alt="">
        </div>
        <div class="flex flex-col justify-center items-center">
          <h3 class="font-semibold text-lg ">Peru</h3>
          <p class="pb-5 text-center"> un lugar bla bla bla bla</p>
        </div>
      </div>

      <div class="flex flex-col justify-center items-center hover:scale-110 transition duration-300 ease-in-out">
        <div class=" h-64 w-64">
          <img class="rounded-full h-full pb-3 object-cover" src="../../recursos/media/ecuador.jpg" alt="">
        </div>
        <div class="flex flex-col justify-center items-center">
          <h3 class="font-semibold text-lg ">Ecuador</h3>
          <p class="pb-5 text-center"> un lugar bla bla bla bla</p>
        </div>
      </div>

    </div>

    <!-- fin del section paices -->

    <!-- section de destinos  -->
    <section>
      <div class="px-2 py-14 lg:px-8 bg-gradient-to-r from-[#FE8F00] to-[#985600] mx-7 my-2 rounded-3xl md:flex-row">
        <div class="flex flex-col w-full pb-5 lg:py-15">
          <div class="flex flex-col justify-center items-start pb-6 pl-4 sm:pl-1">
            <h2 class="font-bold text-5xl text-white pb-3 ">Paquetes viajeros</h2>
            <p class="font-medium text-gray-300">Conoce nuestros paquetes más solicitados</p>
          </div>
          <div class="text-center w-full ">
            <div class="flex flex-wrap justify-evenly gap-6 items-center">

              <div
                class="flex flex-col border-slate-900 shadow-2xl hover:scale-110 transition duration-300 ease-in-out w-auto mx-5 h-auto sm:w-3/12 md:mx-0">
                <div class="">
                  <img src="../../recursos/media/bogota.jpg" class="rounded-t-2xl object-fill" alt="">
                </div>
                <div class=" bg-gray-300 bg-opacity-75 h-auto p-3 rounded-b-2xl">
                  <h3 class="font-bold">Bogotá</h3>
                  <p>Paquete vacacional</p>
                </div>
              </div>

              <div
                class="flex flex-col border-slate-900 shadow-2xl hover:scale-110 transition duration-300 ease-in-out w-auto mx-5 h-auto sm:w-3/12 md:mx-0">
                <div class="">
                  <img src="../../recursos/media/cancun.jpg" class="rounded-t-2xl object-fill" alt="">
                </div>
                <div class=" bg-gray-300 bg-opacity-75 h-auto p-3 rounded-b-2xl">
                  <h3 class="font-bold">Cancún</h3>
                  <p>Paquete vacacional</p>
                </div>
              </div>

              <div
                class="flex flex-col border-slate-900 shadow-2xl hover:scale-110 transition duration-300 ease-in-out w-auto mx-5 h-auto sm:w-3/12 md:mx-0">
                <div class="">
                  <img src="../../recursos/media/punta cana.jpg" class="rounded-t-2xl object-fill" alt="">
                </div>
                <div class=" bg-gray-300 bg-opacity-75 h-auto p-3 rounded-b-2xl">
                  <h3 class="font-bold">Punta cana</h3>
                  <p>Paquete vacacional</p>
                </div>
              </div>

              <div
                class="flex flex-col border-slate-900 shadow-2xl hover:scale-110 transition duration-300 ease-in-out w-auto mx-5 h-auto sm:w-3/12 md:mx-0">
                <div class="">
                  <img src="../../recursos/media/cartagena.jpg" class="rounded-t-2xl object-fill" alt="">
                </div>
                <div class=" bg-gray-300 bg-opacity-75 h-auto p-3 rounded-b-2xl">
                  <h3 class="font-bold">Cartagena</h3>
                  <p>Paquete vacacional</p>
                </div>
              </div>

              <div
                class="flex flex-col border-slate-900 shadow-2xl hover:scale-110 transition duration-300 ease-in-out w-auto mx-5 h-auto sm:w-3/12 md:mx-0">
                <div class="">
                  <img src="../../recursos/media/buenos aires.jpg" class="rounded-t-2xl object-fill" alt="">
                </div>
                <div class=" bg-gray-300 bg-opacity-75 h-auto p-3 rounded-b-2xl">
                  <h3 class="font-bold">Buenos aires</h3>
                  <p>Paquete vacacional</p>
                </div>
              </div>

              <div
                class="flex flex-col border-slate-900 shadow-2xl hover:scale-110 transition duration-300 ease-in-out w-auto mx-5 h-auto sm:w-3/12 md:mx-0">
                <div class="">
                  <img src="../../recursos/media/mexico.jpg" class="rounded-t-2xl object-fill" alt="">
                </div>
                <div class=" bg-gray-300 bg-opacity-75 h-auto p-3 rounded-b-2xl">
                  <h3 class="font-bold">C.D. México</h3>
                  <p>Paquete vacacional</p>
                </div>
              </div>


            </div>
          </div>
        </div>

    </section>
    <footer class="mx-auto mt-32 w-full max-w-container px-4 sm:px-6 lg:px-8">
      <div class="border-t border-slate-900/5 py-10">
        <div class="mt-16 flex items-center justify-center space-x-4 text-sm font-semibold leading-6 text-slate-700">
          <a href="">Contacto</a>
        </div>
        <div class="mt-5 text-center text-sm leading-6 text-slate-500">
          <p>Copyright</p>
        </div>
      </div>
    </footer>

  </main>

  <script src="../../js/assets.js" type="text/javascript"></script>
</body>

</html>