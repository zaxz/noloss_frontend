<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  @vite(['resources/css/app.css', 'resources/js/app.js'])
  {{-- <link rel="stylesheet" href="build/assets/app-DLUosU8O.css">
  <script src="build/assets/app-Bi08MZ8-.js"></script> --}}
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&display=swap" rel="stylesheet">
  <title>Document</title>
</head>

<body>
  <main class="max-w-screen-xl mx-auto md:px-10">
    {{-- navbar section --}}
    <nav class="bg-white">
      <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
        <a href="#" class="flex items-center space-x rtl:space-x-reverse">
          <img src="assets/img/nolosslogo.svg" class="h-8" alt="NOLOSS Logo" />
          {{-- <span class="self-center text-2xl font-bold whitespace-nowrap dark:text-white">NOLOSS</span> --}}
        </a>
        <button data-collapse-toggle="navbar-default" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-default" aria-expanded="false">
          <span class="sr-only">Open main menu</span>
          <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15" />
          </svg>
        </button>
        <div class="hidden w-full md:block md:w-auto" id="navbar-default">
          <ul class="font-medium flex flex-col p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 rtl:space-x-reverse md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
            <li>
              <a href="/" class="block py-2 px-3 text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0 dark:text-white md:dark:text-blue-500"aria-current="page">Home</a>
            </li>
            <li>
              <a href="#about" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">About</a>
            </li>
            <li>
              <a href="#produk" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Products</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    {{-- end navbar section --}}

    {{-- heading section --}}
    {{-- <section class="flex flex-col md:flex-row mb-20">

      <div class="flex flex-col justify-center items-center p-5 lg:p-0">
        <div class="text-5xl py-3 font-extrabold tracking-tighter md:text-5xl lg:text-8xl ">
          NOLOSS <span class="font-thin">COLLECTION</span>
        </div>
        <p class="text-lg font-medium text-center text-gray-700 lg:text-2xl lg:text-left dark:text-gray-400">
          Lorem ipsum dolor sit, amet consectetur adipisicing elit. Odit, sed provident tenetur enim
          reprehenderit ratione beatae in dignissimos dolorum minus.
        </p>
      </div>
      <img src="/assets/img/header.webp" alt="">
      
    </section> --}}
    <section class="grid grid-rows-[auto_1fr] lg:grid-cols-2 lg:grid-rows-none mb-20">

      <div class="flex flex-col justify-center items-center p-5 lg:p-0">
        <div class="text-5xl py-3 font-extrabold tracking-tighter md:text-5xl lg:text-8xl ">
          NOLOSS <span class="font-thin">COLLECTION</span>
        </div>
        <p class="text-lg font-medium text-center text-gray-700 lg:text-2xl lg:text-left dark:text-gray-400">
          Lorem ipsum dolor sit, amet consectetur adipisicing elit. Odit, sed provident tenetur enim
          reprehenderit ratione beatae in dignissimos dolorum minus.
        </p>
      </div>

      <div class="h-screen bg-contain bg-no-repeat bg-center" style="background-image: url('/assets/img/header.webp')">
      </div>
      
    </section>

    {{-- end heading section --}}

    {{-- about section --}}
    <section class="px-5 mb-20 md:px-0">
      <h1 id="about" class="text-5xl md:text-7xl lg:text-8xl text-transparent bg-clip-text bg-gradient-to-r from-fuchsia-600 to-purple-600 py-10  font-extrabold tracking-tighter ">
        Tentang Kami
        <h1 />
        <div class="flex flex-col lg:flex-row">
          <img class="lg:h-96" src="/assets/img/batik.webp" alt="">
          <p class="text-lg font-medium lg:text-2xl text-justify text-gray-600 dark:text-gray-400">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia, laudantium nulla rerum assumenda expedita officiis qui ipsum! Ex veniam consequuntur tempora quo quos quidem debitis, sint officia atque animi repellendus. Quis suscipit recusandae nobis vitae temporibus eligendi nostrum dolorum quaerat accusantium, laboriosam facere molestias sequi quae exercitationem numquam dolor?
            Vel odio eius aut, laboriosam saepe earum, at esse eaque illum corrupti officia dolore ullam exercitationem, odit voluptatem recusandae aliquid dignissimos!
          </p>
        </div>
        {{-- <div class="grid grid-rows-[auto_1fr] border lg:grid-cols-2 lg:grid-rows-none mb-20">
          <div class="h-96 bg-contain bg-no-repeat " style="background-image: url('/assets/img/batik.png')">
          </div>
          <div class="flex flex-col items-center lg:p-0">
            <p class="text-lg font-medium lg:text-2xl text-justify dark:text-gray-400">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia, laudantium nulla rerum assumenda expedita officiis qui ipsum! Ex veniam consequuntur tempora quo quos quidem debitis, sint officia atque animi repellendus. Quis suscipit recusandae nobis vitae temporibus eligendi nostrum dolorum quaerat accusantium, laboriosam facere molestias sequi quae exercitationem numquam dolor?
              Vel odio eius aut, laboriosam saepe earum, at esse eaque illum corrupti officia dolore ullam exercitationem, odit voluptatem recusandae aliquid dignissimos!
            </p>
          </div>
        </div> --}}
    </section>
    {{-- end about section --}}

    {{-- produk section --}}
    <section class="px-5 mb-20 md:px-0">
      <h1 id="produk" class="text-5xl md:text-7xl lg:text-8xl text-transparent bg-clip-text bg-gradient-to-r from-emerald-400 to-cyan-400 py-10 font-extrabold tracking-tighter">
        Katalog Produk
        <h1 />
        <div class="flex flex-col justify-center items-center gap-8">
          <div class="flex flex-col md:w-full mx-auto  bg-white border border-gray-200 rounded-lg shadow md:flex-row dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
            <img class="object-cover w-full rounded-t-lg md:h-auto md:w-80 md:rounded-none md:rounded-s-lg" src="assets/img/sarung1.jpg" alt="">
            <div class="flex flex-col justify-between p-4">
              <div class="md:h-100 leading-normal">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Sarung Batik
                  Jlamprang Semangkan</h5>
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Lorem ipsum dolor, sit amet
                  consecteucimus velit ipsum natus accusantias velit perspiciatis distinctio impedit
                  accusantium repellendus eos iste laudantium alias, dignissimos ducimus amet perferendis
                  culpa eum debitis vitae optio fugiat incidunt at consectetur. Quisquam ipsum sed inventore
                  vitae. Accusamus optio, iusto nulla esse quas maxime! Sed nobis temporibus at, corporis modi
                  est necessitatibus, pariatur libero illum sunt nulla aliquid doloribus quam enim, ipsa
                  soluta.</p>
              </div>
              <div class="flex flex-col ml-auto items-end">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Harga :
                  Rp285.000</h5>
                <a href="#" class="inline-flex w-fit px-5 py-3 text-base font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 dark:focus:ring-blue-900">
                  Pesan Sekarang
                </a>
              </div>
            </div>
          </div>
          <div class="flex flex-col md:w-full mx-auto  bg-white border border-gray-200 rounded-lg shadow md:flex-row dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
            <img class="object-cover w-full rounded-t-lg md:h-auto md:w-80 md:rounded-none md:rounded-s-lg" src="assets/img/sarung3.jpg" alt="">
            <div class="flex flex-col justify-between p-4">
              <div class="md:h-100 leading-normal">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Sarung Batik
                  Jlamprang Moto 8</h5>
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Lorem ipsum dolor, sit amet
                  consectetur adipisicing elit. Eum, deserunt? Illo ducimus velit ipsum natus accusantium
                  voluptate cum praesentium repudiandae voluptatibus officia! Quia, molestiae dolorum
                  molestias velit perspiciatis distinctio impedit accusantium repellendus eos iste laudantium
                  alias, dignissimos ducimus amet perferendis culpa eum debitis vitae optio fugiat incidunt at
                  consectetur. Quisquam ipsum sed inventore vitae. Accusamus optio, iusto nulla esse quas
                  maxime! Sed nobis temporibus at, corporis modi est necessitatibus, pariatur libero illum
                  sunt nulla aliquid doloribus quam enim, ipsa soluta.</p>
              </div>
              <div class="flex flex-col ml-auto items-end">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Harga :
                  Rp285.000</h5>
                <a href="#" class="inline-flex w-fit px-5 py-3 text-base font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 dark:focus:ring-blue-900">
                  Pesan Sekarang
                </a>
              </div>
            </div>
          </div>
          <div class="flex flex-col md:w-full mx-auto  bg-white border border-gray-200 rounded-lg shadow md:flex-row dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
            <img class="object-cover w-full rounded-t-lg md:h-auto md:w-80 md:rounded-none md:rounded-s-lg" src="assets/img/sarung2.jpg" alt="">
            <div class="flex flex-col justify-between p-4">
              <div class="md:h-100 leading-normal">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Sarung Batik
                  Jlamprang Cinde Ageng</h5>
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Lorem ipsum dolor, sit amet
                  consectetur adipisicing elit. Eum, deserunt? Illo ducimus velit ipsum natus accusantium
                  voluptate cum praesentium repudiandae voluptatibus officia! Quia, molestiae dolorum
                  molestias velit perspiciatis distinctio impedit accusantium repellendus eos iste laudantium
                  alias, dignissimos ducimus amet perferendis culpa eum debitis vitae optio fugiat incidunt at
                  consectetur. Quisquam ipsum sed inventore vitae. Accusamus optio, iusto nulla esse quas
                  maxime! Sed nobis temporibus at, corporis modi est necessitatibus, pariatur libero illum
                  sunt nulla aliquid doloribus quam enim, ipsa soluta.</p>
              </div>
              <div class="flex flex-col ml-auto items-end">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Harga :
                  Rp285.000</h5>
                <a href="#" class="inline-flex w-fit px-5 py-3 text-base font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 dark:focus:ring-blue-900">
                  Pesan Sekarang
                </a>
              </div>
            </div>
          </div>
        </div>
    </section>
    {{-- end produk section --}}

    {{--  kontak section --}}
    {{-- <h2 class="text-4xl text-center font-bold dark:text-white pb-5" id="produk">Produk Kami</h2> --}}
    {{-- end kontak section --}}
    
  </main>
  <section class="py-20 flex flex-col justify-center items-center bg-emerald-100">
    <p class="text-xl text-center font-bold text-transparent bg-clip-text bg-gradient-to-r from-emerald-400 to-cyan-400  dark:text-white pb-5" id="produk">CONNECT WITH US</p>
    <h1 class="text-transparent bg-clip-text bg-gradient-to-r from-fuchsia-600 to-purple-600 text-4xl text-center font-extrabold  dark:text-white pb-5 " id="produk">@nolosscollection</h1>
    <a href="https://instagram.com/nolosscollection" class="w-fit text-2xl inline-flex items-center px-6 py-2 font-bold border-2 text-cyan-400 border-cyan-400 rounded-full hover:bg-gradient-to-r hover:from-emerald-400 hover:to-cyan-400 hover:text-white">
      <img class="h-6 pr-3" src="assets/img/instagram.svg" alt="">
      Follow
    </a>
  </section>
</body>

</html>
