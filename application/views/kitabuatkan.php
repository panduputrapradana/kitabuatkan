<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tw-elements/dist/css/index.min.css" />
  <script src="https://cdn.tailwindcss.com"></script>
  <title><?= $basic['title_basic']; ?></title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Berkshire+Swash&display=swap" rel="stylesheet">
  <style type="text/tailwindcss">
    @layer utilities {
        .hamburger-line {
          @apply w-[28px] h-[2px] bg-slate-500 active:bg-white block my-2;
      }

      .hamburger-active {
        @apply bg-red-700 pl-2 rounded-md transition duration-300;
      }

      .hamburger-active > .hamburger-line {
        @apply w-[28px] h-[2px] bg-white active:bg-white block;
      }

      .hamburger-active > span:nth-child(1){
        @apply  rotate-45; 
      }

      .hamburger-active > span:nth-child(2){
        @apply scale-0; 
      }

      .hamburger-active > span:nth-child(3){
        @apply -rotate-45; 
      }

      .navbar-fixed {
        @apply fixed z-[9999] duration-500;
      }
    }
  </style>
</head>

<body>
  <!-- Container for demo purpose -->
  <div>

    <!-- Section: Design Block -->
    <section class="mb-24">

      <header class="bg-sky-50 absolute top-0 left-0 w-full flex items-center z-10">
        <div class="container lg:px-4">
          <div class="flex items-center justify-between relative">
            <div class="px-4">
              <a href="#" class="font-bold text-xl text-sky-500 block py-6 uppercase" style="font-family: 'Berkshire Swash', cursive;"><?= $basic['nama_basic']; ?></a>
            </div>
            <div class="flex items-center px-4">
              <button id="hamburger" name="hamburger" type="button" class="block absolute right-4 lg:hidden">
                <span class="hamburger-line transition duration-500 ease-in-out origin-top-left"></span>
                <span class="hamburger-line transition duration-500 ease-in-out"></span>
                <span class="hamburger-line transition duration-500 ease-in-out origin-bottom-left"></span>
              </button>
              <nav id="nav-menu" class="hidden absolute py-5 bg-white shadow-lg rounded-lg max-w-[250px] w-full right-4 top-full lg:block lg:static lg:bg-transparent lg:max-w-full lg:shadow-none lg:rounded-none">
                <ul class="block lg:flex">
                  <li class="group">
                    <a href="#" class="text-base text-slate-900 py-2 mx-8 flex group-hover:text-sky-500">Beranda</a>
                  </li>
                  <li class="group">
                    <a href="#keunggulan" class="text-base text-slate-900 py-2 mx-8 flex group-hover:text-sky-500">Keunggulan</a>
                  </li>
                  <li class="group">
                    <a href="#harga" class="text-base text-slate-900 py-2 mx-8 flex group-hover:text-sky-500">Harga</a>
                  </li>
                  <li class="group">
                    <a href="#portfolio" class="text-base text-slate-900 py-2 mx-8 flex group-hover:text-sky-500">Portofolio</a>
                  </li>
                  <li class="group">
                    <a href="#testi" class="text-base text-slate-900 py-2 mx-8 flex group-hover:text-sky-500">Testimonials</a>
                  </li>
                  <li class="group">
                    <a href="#kontak" class="text-base text-slate-900 py-2 mx-8 flex group-hover:text-sky-500">Kontak Kami</a>
                  </li>
                  <li class="group">
                    <a href="#clients" class="text-base text-slate-900 py-2 mx-8 flex group-hover:text-sky-500">Clients</a>
                  </li>
                </ul>
              </nav>
            </div>
          </div>
        </div>
      </header>

      <div class="relative overflow-hidden bg-no-repeat bg-cover" style="background-position: 50%; background-image: url('<?= base_url('assets/dist/img/dashboard2.jpg'); ?>'); height: 500px;"></div>

      <div class="container mx-auto px-6 md:px-12 xl:px-32">
        <div class="text-center text-gray-800">
          <div class="block rounded-lg shadow-lg px-6 py-12 md:py-16 md:px-12" style="margin-top: -170px; background: hsla(0, 0%, 100%, 0.7); backdrop-filter: blur(30px);">
            <h1 class="text-5xl md:text-6xl xl:text-7xl font-bold tracking-tight mb-12"><?= $beranda['kata1']; ?> <br /><span class="text-sky-500"><?= $beranda['kata2']; ?></span></h1>
          </div>
        </div>
      </div>
    </section>
    <!-- Section: Design Block -->

  </div>
  <!-- Container for demo purpose -->

  <!-- Container for demo purpose -->
  <div id="keunggulan" class="container px-6 mx-auto">

    <!-- Section: Design Block -->
    <section class="mb-32 text-gray-800 text-center lg:text-left">
      <div class="block rounded-lg shadow-lg bg-white">
        <div class="flex flex-wrap items-center">
          <div class="block w-full lg:flex grow-0 shrink-0 basis-auto lg:w-6/12 xl:w-4/12">
            <img src="<?= base_url('assets/dist/img/keunggulan.jpg'); ?>" alt="Trendy Pants and Shoes" class="w-full rounded-t-lg lg:rounded-tr-none lg:rounded-bl-lg" />
          </div>
          <div class="grow-0 shrink-0 basis-auto w-full lg:w-6/12 xl:w-8/12">
            <div class="px-6 py-12 md:px-12">
              <h2 class="text-3xl font-bold mb-4 text-sky-500 display-5"><?= $keunggulan['judul_keunggulan']; ?></h2>
              <p class="text-gray-500 mb-12">
                <?= $keunggulan['deskripsi_keunggulan']; ?>
              </p>

              <div class="grid lg:gap-x-12 md:grid-cols-3">
                <div class="mb-12 md:mb-0">
                  <h2 class="text-3xl font-bold text-sky-500 mb-4"><?= $keunggulan['kepuasan']; ?>%</h2>
                  <h5 class="text-lg font-medium text-gray-500 mb-0">Kepuasan</h5>
                </div>

                <div class="mb-12 md:mb-0">
                  <h2 class="text-3xl font-bold text-sky-500 mb-4"><?= $keunggulan['kecepatan']; ?>%</h2>
                  <h5 class="text-lg font-medium text-gray-500 mb-0">Kecepatan</h5>
                </div>

                <div class="">
                  <h2 class="text-3xl font-bold text-sky-500 mb-4"><?= $keunggulan['project']; ?></h2>
                  <h5 class="text-lg font-medium text-gray-500 mb-0">Project</h5>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Section: Design Block -->

  </div>
  <!-- Container for demo purpose -->

  <!-- Container for demo purpose -->
  <div id="harga" class="container my-24 px-6 mx-auto">

    <!-- Section: Design Block -->
    <section class="mb-32 text-gray-800">
      <h2 class="text-3xl font-bold text-center mb-12">Harga</h2>

      <div class="grid lg:grid-cols-3 gap-6 lg:gap-x-12">
        <?php
        foreach ($harga as $row) { ?>
          <div class="mb-6 lg:mb-0">
            <div class="block rounded-lg shadow-lg bg-white h-full">
              <div class="p-6 border-b border-gray-300 text-center">
                <p class="uppercase mb-4 text-sm">
                  <strong><?= $row->nama_paket; ?></strong>
                </p>
                <h3 class="text-2xl mb-6">
                  <strong><?= "Rp." . number_format($row->harga, 0) . ",00"; ?></strong>
                </h3>
              </div>
            </div>
          </div>
        <?php } ?>
      </div>
    </section>
    <!-- Section: Design Block -->

  </div>
  <!-- Container for demo purpose -->

  <!-- Container for demo purpose -->
  <div id="portfolio" class="container my-24 px-6 mx-auto">

    <!-- Section: Design Block -->
    <section class="mb-32 text-gray-800">

      <h2 class="text-3xl font-bold mb-12 text-center">Portfolio</h2>

      <div class="grid lg:grid-cols-3 gap-6">
        <?php
        foreach ($portfolio as $row) { ?>
          <div class="relative overflow-hidden bg-no-repeat bg-cover shadow-lg rounded-lg" style="background-position: 50%;" data-mdb-ripple="true" data-mdb-ripple-color="light">
            <img src="<?= base_url('assets/images/') . $row->gambar_portfolio; ?>" class="w-full" />
            <a href="#!">
              <div class="absolute top-0 right-0 bottom-0 left-0 w-full h-full overflow-hidden bg-fixed" style="background-color: rgba(0, 0, 0, 0.4)">
                <div class="flex justify-start items-end h-full">
                  <div class="text-white m-6">
                    <h5 class="font-bold text-lg mb-3"><?= $row->judul; ?></h5>
                    <p>
                      <small><?= $row->waktu; ?></small>
                    </p>
                  </div>
                </div>
              </div>
            </a>
          </div>
        <?php } ?>
      </div>

    </section>
    <!-- Section: Design Block -->

  </div>
  <!-- Container for demo purpose -->


  <!-- Container for demo purpose -->
  <div id="testi" class="container my-24 px-6 mx-auto">

    <!-- Section: Design Block -->
    <section class="mb-32 text-gray-800 text-center">

      <h2 class="text-3xl font-bold mb-12">Testimonials</h2>

      <div id="carouselExampleCaptions" class="carousel slide relative carousel-dark" data-bs-ride="carousel">
        <div class="carousel-inner relative w-full overflow-hidden">
          <?php
          $no = 0;
          foreach ($testimonials as $row) {  ?>
            <div class="carousel-item <?php if ($no == 0) {
              echo 'active';
              } else {
                echo 'notactive';
              } ?> relative float-left w-full">
              <img class="rounded-full shadow-lg mb-6 mx-auto" src="<?= base_url('assets/images/') . $row->foto_testi; ?>" alt="avatar" style="width: 150px" />
              <div class="flex flex-wrap justify-center">
                <div class="grow-0 shrink-0 basis-auto w-full lg:w-8/12 px-3">
                  <h5 class="text-lg font-bold mb-3"><?= $row->nama_testi; ?></h5>
                  <p class="font-medium text-gray-700 mb-4"><?= $row->profesi; ?></p>
                  <p class="text-gray-500 mb-6">
                    <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="quote-left" class="w-6 pr-2 inline-block" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                      <path fill="currentColor" d="M464 256h-80v-64c0-35.3 28.7-64 64-64h8c13.3 0 24-10.7 24-24V56c0-13.3-10.7-24-24-24h-8c-88.4 0-160 71.6-160 160v240c0 26.5 21.5 48 48 48h128c26.5 0 48-21.5 48-48V304c0-26.5-21.5-48-48-48zm-288 0H96v-64c0-35.3 28.7-64 64-64h8c13.3 0 24-10.7 24-24V56c0-13.3-10.7-24-24-24h-8C71.6 32 0 103.6 0 192v240c0 26.5 21.5 48 48 48h128c26.5 0 48-21.5 48-48V304c0-26.5-21.5-48-48-48z"></path>
                      </svg><?= $row->deskripsi_testi; ?>
                    </p>
                  </div>
                </div>
              </div>
              <?php $no++;
            } ?>
          </div>
          <button class="carousel-control-prev absolute top-0 bottom-0 flex items-center justify-center p-0 text-center border-0 hover:outline-none hover:no-underline focus:outline-none focus:no-underline left-0" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon inline-block bg-no-repeat" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next absolute top-0 bottom-0 flex items-center justify-center p-0 text-center border-0 hover:outline-none hover:no-underline focus:outline-none focus:no-underline right-0" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon inline-block bg-no-repeat" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>

      </section>
      <!-- Section: Design Block -->

    </div>
    <!-- Container for demo purpose -->

    <!-- Container for demo purpose -->
    <div id="kontak" class="container my-24 px-6 mx-auto">

      <!-- Section: Design Block -->
      <section class="mb-32 text-gray-800">
        <div class="flex justify-center">
          <div class="text-center lg:max-w-3xl md:max-w-xl">
            <h2 class="text-3xl font-bold mb-12 px-6">Contact us</h2>
          </div>
        </div>

        <div class="flex flex-wrap">
          <div class="grow-0 shrink-0 basis-auto mb-12 lg:mb-0 w-full lg:w-5/12 px-3 lg:px-6">
            <?php echo form_open_multipart('welcome/form/');
            echo form_hidden('redirect_page', str_replace('index.php/', '', current_url()));
            ?>
            <div class="form-group mb-6" hidden>
              <input type="text" class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="exampleInput7" name="id_form" placeholder="ID">
            </div>
            <div class="form-group mb-6">
              <input type="text" class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="exampleInput7" name="nama_form" placeholder="Name" required>
            </div>
            <div class="form-group mb-6">
              <input type="email" class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="exampleInput8" name="email_form" placeholder="Email address" required>
            </div>
            <div class="form-group mb-6">
              <textarea class=" form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none " id="exampleFormControlTextarea13" rows="3" name="pesan" placeholder="Message" required></textarea>
            </div>
            <div class="form-group form-check text-center mb-6">
              <?= $this->session->flashdata('form'); ?>
            </div>
            <button type="submit" class="w-full px-6 py-2.5 bg-sky-500 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-sky-600 hover:shadow-lg focus:bg-sky-600 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-sky-700 active:shadow-lg transition duration-150 ease-in-out">Send</button>
            <?= form_close(); ?>
          </div>
          <div class="grow-0 shrink-0 basis-auto w-full lg:w-7/12">
            <div class="flex flex-wrap">
              <div class="mb-12 grow-0 shrink-0 basis-auto w-full lg:w-6/12 px-3 lg:px-6">
                <div class="flex items-start">
                  <div class="shrink-0">
                    <div class="p-4 bg-sky-500 rounded-md shadow-md w-14 h-14 flex items-center justify-center">
                      <svg role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false" data-prefix="fas" class="w-3 text-white">
                        <title>WhatsApp</title>
                        <path fill="currentColor" d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z" />
                      </svg>
                    </div>
                  </div>
                  <div class="grow ml-6">
                    <p class="font-bold mb-1">Whatsapp</p>
                    <a href="https://wa.me/<?= $kontak['whatsapp']; ?>">
                      <p class="text-gray-500"><?= $kontak['whatsapp']; ?></p>
                    </a>
                  </div>
                </div>
              </div>
              <div class="mb-12 grow-0 shrink-0 basis-auto w-full lg:w-6/12 px-3 lg:px-6">
                <div class="flex items-start">
                  <div class="shrink-0">
                    <div class="p-4 bg-sky-500 rounded-md shadow-md w-14 h-14 flex items-center justify-center">
                      <svg role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false" data-prefix="fas" class="w-3 text-white">
                        <title>Gmail</title>
                        <path fill="currentColor" d="M24 5.457v13.909c0 .904-.732 1.636-1.636 1.636h-3.819V11.73L12 16.64l-6.545-4.91v9.273H1.636A1.636 1.636 0 0 1 0 19.366V5.457c0-2.023 2.309-3.178 3.927-1.964L5.455 4.64 12 9.548l6.545-4.91 1.528-1.145C21.69 2.28 24 3.434 24 5.457z" />
                      </svg>
                    </div>
                  </div>
                  <div class="grow ml-6">
                    <p class="font-bold mb-1">Email</p>
                    <a href="mailto:<?= $kontak['email']; ?>">
                      <p class="text-gray-500"><?= $kontak['email']; ?></p>
                    </a>
                  </div>
                </div>
              </div>
              <div class="mb-12 grow-0 shrink-0 basis-auto w-full lg:w-6/12 px-3 lg:px-6">
                <div class="flex align-start">
                  <div class="shrink-0">
                    <div class="p-4 bg-sky-500 rounded-md shadow-md w-14 h-14 flex items-center justify-center">
                      <svg role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false" data-prefix="fas" class="w-3 text-white">
                        <title>Instagram</title>
                        <path fill="currentColor" d="M12 0C8.74 0 8.333.015 7.053.072 5.775.132 4.905.333 4.14.63c-.789.306-1.459.717-2.126 1.384S.935 3.35.63 4.14C.333 4.905.131 5.775.072 7.053.012 8.333 0 8.74 0 12s.015 3.667.072 4.947c.06 1.277.261 2.148.558 2.913.306.788.717 1.459 1.384 2.126.667.666 1.336 1.079 2.126 1.384.766.296 1.636.499 2.913.558C8.333 23.988 8.74 24 12 24s3.667-.015 4.947-.072c1.277-.06 2.148-.262 2.913-.558.788-.306 1.459-.718 2.126-1.384.666-.667 1.079-1.335 1.384-2.126.296-.765.499-1.636.558-2.913.06-1.28.072-1.687.072-4.947s-.015-3.667-.072-4.947c-.06-1.277-.262-2.149-.558-2.913-.306-.789-.718-1.459-1.384-2.126C21.319 1.347 20.651.935 19.86.63c-.765-.297-1.636-.499-2.913-.558C15.667.012 15.26 0 12 0zm0 2.16c3.203 0 3.585.016 4.85.071 1.17.055 1.805.249 2.227.415.562.217.96.477 1.382.896.419.42.679.819.896 1.381.164.422.36 1.057.413 2.227.057 1.266.07 1.646.07 4.85s-.015 3.585-.074 4.85c-.061 1.17-.256 1.805-.421 2.227-.224.562-.479.96-.899 1.382-.419.419-.824.679-1.38.896-.42.164-1.065.36-2.235.413-1.274.057-1.649.07-4.859.07-3.211 0-3.586-.015-4.859-.074-1.171-.061-1.816-.256-2.236-.421-.569-.224-.96-.479-1.379-.899-.421-.419-.69-.824-.9-1.38-.165-.42-.359-1.065-.42-2.235-.045-1.26-.061-1.649-.061-4.844 0-3.196.016-3.586.061-4.861.061-1.17.255-1.814.42-2.234.21-.57.479-.96.9-1.381.419-.419.81-.689 1.379-.898.42-.166 1.051-.361 2.221-.421 1.275-.045 1.65-.06 4.859-.06l.045.03zm0 3.678c-3.405 0-6.162 2.76-6.162 6.162 0 3.405 2.76 6.162 6.162 6.162 3.405 0 6.162-2.76 6.162-6.162 0-3.405-2.76-6.162-6.162-6.162zM12 16c-2.21 0-4-1.79-4-4s1.79-4 4-4 4 1.79 4 4-1.79 4-4 4zm7.846-10.405c0 .795-.646 1.44-1.44 1.44-.795 0-1.44-.646-1.44-1.44 0-.794.646-1.439 1.44-1.439.793-.001 1.44.645 1.44 1.439z" />
                      </svg>
                    </div>
                  </div>
                  <div class="grow ml-6">
                    <p class="font-bold mb-1">Instagram</p>
                    <a href="https://instagram.com/<?= $kontak['instagram']; ?>/" target="_blank">
                      <p class="text-gray-500"><?= $kontak['instagram']; ?></p>
                    </a>
                  </div>
                </div>
              </div>
              <div class="mb-12 grow-0 shrink-0 basis-auto w-full lg:w-6/12 px-3 lg:px-6">
                <div class="flex align-start">
                  <div class="shrink-0">
                    <div class="p-4 bg-sky-500 rounded-md shadow-md w-14 h-14 flex items-center justify-center">
                      <svg role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false" data-prefix="fas" class="w-3 text-white">
                        <title>Facebook</title>
                        <path fill="currentColor" d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z" />
                      </svg>
                    </div>
                  </div>
                  <div class="grow ml-6">
                    <p class="font-bold mb-1">Facebook</p>
                    <a href="<?= $kontak['facebook']; ?>">
                      <p class="text-gray-500"><?= $kontak['facebook']; ?></p>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Section: Design Block -->

    </div>
    <!-- Container for demo purpose -->

    <!-- Client section start -->
    <section id="clients" class="pt-36 pb-32 bg-slate-700">
      <div class="container lg:px-4">
        <div class="w-full px-4">
          <div class="mx-auto text-center mb-16">
            <h4 class="font-semibold text-lg text-sky-500 mb-2 sm:text-xl lg:text-2xl">Clients</h4>
            <h2 class="font-bold text-white text-3xl mb-4 sm:text-4xl lg:text-5xl">Yang Pernah Bekerjasama</h2>
            <p class="font-medium text-md text-slate-400 md:text-lg">Berikut adalah beberapa perusahaan/pihak yang pernah bekerjasama.</p>
          </div>
        </div>
        <div class="w-full px-4">
          <div class="flex flex-wrap items-center justify-center">
            <?php
            foreach ($clients as $row) { ?>
              <a href="#" class="max-w-[120px] mx-4 py-4 grayscale opacity-60 transition hover:grayscale-0 hover:opacity-100 duration-500 lg:mx-6 xl:mx-8">
                <img src="<?= base_url('assets/images/') . $row->logo_clients; ?>" alt="Google">
              </a>
            <?php } ?>
          </div>
        </div>
      </div>
    </section>
    <!-- Client section end -->




    <!-- Tombol Back to top -->
    <div class="fixed z-[9999] right-10 bottom-10">
      <a href="#">
        <h1 class="text-4xl hidden text-zinc-500 hover:text-violet-700 duration-500" id="scrollatas">
          <i class="fas fa-angle-up"></i>
        </h1>
      </a>
    </div>
    <!-- End Tombol Back to top -->

    <!-- Footer Start -->
    <footer class="bg-slate-900 pt-24 pb-12">
      <div class="container lg:px-4">
        <div class="flex flex-wrap">
          <div class="w-full px-4 mb-12 text-slate-300 font-medium md:w-1/3">
            <h2 class="font-bold text-4xl text-white mb-5 uppercase"><?= $basic['nama_basic']; ?></h2>
            <h3 class="font-bold text-2xl mb-2">Hubungi Kami</h3>
            <a href="mailto:panduandro17@gmail.com" class="hover:text-violet-700">
              <p><?= $kontak['email']; ?></p>
            </a>
            <a href="https://goo.gl/maps/AhNq3Brj3TxC3dyo6" class="hover:text-violet-700">
              <p><?= $basic['alamat_basic']; ?></p>
            </a>
          </div>
          <div class="w-full px-4 mb-12 md:w-1/3 text-slate-300">
            <h3 class="font-semibold text-xl text-white mb-5">Soft Skill</h3>
            <ul>
              <li>
                <a href="#!" class="inline-block text-base hover:text-violet-700 mb-3">Cepat</a>
              </li>
              <li>
                <a href="#!" class="inline-block text-base hover:text-violet-700 mb-3">Terpercaya</a>
              </li>
              <li>
                <a href="#!" class="inline-block text-base hover:text-violet-700 mb-3">Memuaskan</a>
              </li>
            </ul>
          </div>
          <div class="w-full px-4 mb-12 md:w-1/3 text-slate-300">
            <h3 class="font-semibold text-xl text-white mb-5">Tautan</h3>
            <ul>
              <li>
                <a href="#" class="inline-block text-base hover:text-violet-700 mb-3">Beranda</a>
              </li>
              <li>
                <a href="#keunggulan" class="inline-block text-base hover:text-violet-700 mb-3">Keunggulan</a>
              </li>
              <li>
                <a href="#harga" class="inline-block text-base hover:text-violet-700 mb-3">Harga</a>
              </li>
              <li>
                <a href="#portfolio" class="inline-block text-base hover:text-violet-700 mb-3">Portfolio</a>
              </li>
              <li>
                <a href="#testi" class="inline-block text-base hover:text-violet-700 mb-3">Testimonials</a>
              </li>
              <li>
                <a href="#kontak" class="inline-block text-base hover:text-violet-700 mb-3">Kontak Kami</a>
              </li>
              <li>
                <a href="#clients" class="inline-block text-base hover:text-violet-700 mb-3">Clients</a>
              </li>
            </ul>
          </div>
        </div>
        <div class="w-full pt-10 border-t border-slate-700">
          <div class="flex items-center justify-center mb-5">
            <!-- Instagram -->
            <a href="https://instagram.com/<?= $kontak['instagram']; ?>/" class="w-9 h-9 mr-3 rounded-full flex justify-center items-center border border-slate-400 hover:border-zinc-400 hover:bg-zinc-400 transition duration-500 ease-in-out hover:text-white text-slate-400" target="_blank">
              <svg width="20" role="img" viewBox="0 0 24 24" class="fill-current" xmlns="http://www.w3.org/2000/svg">
                <title>Instagram</title>
                <path d="M12 0C8.74 0 8.333.015 7.053.072 5.775.132 4.905.333 4.14.63c-.789.306-1.459.717-2.126 1.384S.935 3.35.63 4.14C.333 4.905.131 5.775.072 7.053.012 8.333 0 8.74 0 12s.015 3.667.072 4.947c.06 1.277.261 2.148.558 2.913.306.788.717 1.459 1.384 2.126.667.666 1.336 1.079 2.126 1.384.766.296 1.636.499 2.913.558C8.333 23.988 8.74 24 12 24s3.667-.015 4.947-.072c1.277-.06 2.148-.262 2.913-.558.788-.306 1.459-.718 2.126-1.384.666-.667 1.079-1.335 1.384-2.126.296-.765.499-1.636.558-2.913.06-1.28.072-1.687.072-4.947s-.015-3.667-.072-4.947c-.06-1.277-.262-2.149-.558-2.913-.306-.789-.718-1.459-1.384-2.126C21.319 1.347 20.651.935 19.86.63c-.765-.297-1.636-.499-2.913-.558C15.667.012 15.26 0 12 0zm0 2.16c3.203 0 3.585.016 4.85.071 1.17.055 1.805.249 2.227.415.562.217.96.477 1.382.896.419.42.679.819.896 1.381.164.422.36 1.057.413 2.227.057 1.266.07 1.646.07 4.85s-.015 3.585-.074 4.85c-.061 1.17-.256 1.805-.421 2.227-.224.562-.479.96-.899 1.382-.419.419-.824.679-1.38.896-.42.164-1.065.36-2.235.413-1.274.057-1.649.07-4.859.07-3.211 0-3.586-.015-4.859-.074-1.171-.061-1.816-.256-2.236-.421-.569-.224-.96-.479-1.379-.899-.421-.419-.69-.824-.9-1.38-.165-.42-.359-1.065-.42-2.235-.045-1.26-.061-1.649-.061-4.844 0-3.196.016-3.586.061-4.861.061-1.17.255-1.814.42-2.234.21-.57.479-.96.9-1.381.419-.419.81-.689 1.379-.898.42-.166 1.051-.361 2.221-.421 1.275-.045 1.65-.06 4.859-.06l.045.03zm0 3.678c-3.405 0-6.162 2.76-6.162 6.162 0 3.405 2.76 6.162 6.162 6.162 3.405 0 6.162-2.76 6.162-6.162 0-3.405-2.76-6.162-6.162-6.162zM12 16c-2.21 0-4-1.79-4-4s1.79-4 4-4 4 1.79 4 4-1.79 4-4 4zm7.846-10.405c0 .795-.646 1.44-1.44 1.44-.795 0-1.44-.646-1.44-1.44 0-.794.646-1.439 1.44-1.439.793-.001 1.44.645 1.44 1.439z" />
              </svg>
            </a>
            <!-- Whatsapp -->
            <a href="https://wa.me/<?= $kontak['whatsapp']; ?>" class="w-9 h-9 mr-3 rounded-full flex justify-center items-center border border-slate-400 hover:border-green-500 hover:bg-green-500 transition duration-500 ease-in-out hover:text-white text-slate-400" target="_blank">
              <svg width="20" role="img" viewBox="0 0 24 24" class="fill-current" xmlns="http://www.w3.org/2000/svg">
                <title>WhatsApp</title>
                <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z" />
              </svg>
            </a>
            <!-- Telegram -->
            <a href="<?= $kontak['facebook']; ?>" class="w-9 h-9 mr-3 rounded-full flex justify-center items-center border border-slate-400 hover:border-cyan-400 hover:bg-cyan-400 transition duration-500 ease-in-out hover:text-white text-slate-400" target="_blank">
              <svg width="20" role="img" viewBox="0 0 24 24" class="fill-current" xmlns="http://www.w3.org/2000/svg">
                <title>Facebook</title>
                <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z" />
              </svg>
            </a>
            <!-- Gmail -->
            <a href="mailto:<?= $kontak['email']; ?>" class="w-9 h-9 mr-3 rounded-full flex justify-center items-center border border-slate-400 hover:border-red-500 hover:bg-red-500 transition duration-500 ease-in-out hover:text-white text-slate-400" target="_blank">
              <svg width="20" role="img" viewBox="0 0 24 24" class="fill-current" xmlns="http://www.w3.org/2000/svg">
                <title>Gmail</title>
                <path d="M24 5.457v13.909c0 .904-.732 1.636-1.636 1.636h-3.819V11.73L12 16.64l-6.545-4.91v9.273H1.636A1.636 1.636 0 0 1 0 19.366V5.457c0-2.023 2.309-3.178 3.927-1.964L5.455 4.64 12 9.548l6.545-4.91 1.528-1.145C21.69 2.28 24 3.434 24 5.457z" />
              </svg>
            </a>
          </div>
          <p class="font-medium text-sm text-slate-500 text-center">Develoved By <a class="font-bold text-violet-700" href="https://instagram.com/<?= $kontak['instagram']; ?>/" target="_blank">KBT</a>, Menggunakan Framework <a class="font-bold text-sky-500" href="https://tailwindcss.com/" target="_blank">TailwindCSS</a>.</p>
        </div>
      </div>
    </footer>
    <!-- Footer End -->


    <script>
      // Navbar Fixed
      window.onscroll = function() {
        const header   = document.querySelector('header');
        const scroll   = document.querySelector('#scrollatas');
        const fixedNav = header.offsetTop;

        if (window.pageYOffset > fixedNav) {
          header.classList.add('navbar-fixed');
          scroll.classList.remove('hidden');
        } else {
          header.classList.remove('navbar-fixed');
          scroll.classList.add('hidden');
        }
      };



      // Hamburger
      const hamburger = document.querySelector('#hamburger');
      const navMenu = document.querySelector('#nav-menu');

      hamburger.addEventListener('click', function() {
        hamburger.classList.toggle('hamburger-active');
        navMenu.classList.toggle('hidden');
      });
    </script>
  </body>

  </html>