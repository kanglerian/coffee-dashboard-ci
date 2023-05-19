<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./css/all.min.css">
  <link href="https://cdn.datatables.net/v/dt/dt-1.13.4/datatables.min.css" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="<?= base_url()?>assets/css/sweetalert2.min.css">
  <link rel="stylesheet" href="<?= base_url()?>assets/css/custom.css">
  <script src="https://cdn.tailwindcss.com"></script>
  <title><?= $title ?> - Morning Coffee</title>
</head>

<body>
  <div class="flex flex-row h-screen bg-gray-50">
    <aside id="sidebar" class="hidden md:block fixed md:relative left-0 top-0 w-5/12 md:w-2/12 h-full z-10">
      <div class=" flex flex-col justify-between bg-gray-400 border-r bg-white shadow-lg md:shadow-none md:border-r h-full">
        <div>
          <div class="flex flex-col justify-center text-center items-center gap-2 p-2">
            <img src="<?= base_url()?>assets/img/logo.jpeg" alt="logo" class="w-14">
            <h2 class="text-lg font-bold text-emerald-800">Morning Coffee</h2>
          </div>
          <ul class="space-y-2 m-2 text-sm text-center">
            <li class="flex justify-center items-center hover:bg-gray-100 rounded-lg px-3 py-2">
              <a href="<?= base_url('dashboard')?>" class="flex flex-col justify-center items-center text-gray-800 hover:text-gray-900 gap-2">
                <i class="fa-solid fa-chart-pie text-lg"></i><span class="text-sm">Dashboard</span>
              </a>
            </li>
            <li class="flex justify-center items-center hover:bg-gray-100 rounded-lg px-3 py-2">
              <a href="<?= base_url('barang')?>" class="flex flex-col justify-center items-center text-gray-800 hover:text-gray-900 gap-2">
                <i class="fa-solid fa-database text-lg"></i><span class="text-sm">Data Barang</span>
              </a>
            </li>
            <li class="flex justify-center items-center hover:bg-gray-100 rounded-lg px-3 py-2">
              <a href="<?= base_url('transaksi')?>" class="flex flex-col justify-center items-center text-gray-800 hover:text-gray-900 gap-2">
                <i class="fa-solid fa-cash-register text-lg"></i><span class="text-sm">Transaksi</span>
              </a>
            </li>
            <li class="flex justify-center items-center hover:bg-gray-100 rounded-lg px-3 py-2">
              <a href="<?= base_url('rekap')?>" class="flex flex-col justify-center items-center text-gray-800 hover:text-gray-900 gap-2">
                <i class="fa-solid fa-file-invoice text-lg"></i><span class="text-sm">Rekap Transaksi</span>
              </a>
            </li>
            <li class="block md:hidden flex justify-center items-center">
              <button onclick="toggleSidebar()"
                class="flex justify-center items-center border border-gray-100 hover:bg-gray-100 h-8 w-8 p-2 rounded-lg text-gray-800 hover:text-gray-900">
                <i class="fa-solid fa-chevron-left"></i></span>
                </a>
            </li>
          </ul>
        </div>
        <div class="space-y-2 m-4 text-sm">
          <hr>
          <ul class="space-y-2 m-2 text-sm text-center">
            <li class="flex justify-center items-center hover:bg-gray-100 rounded-lg px-3 py-2">
              <a href="#" class="flex flex-col justify-center items-center text-gray-800 hover:text-gray-900 gap-2">
                <i class="fa-solid fa-gear text-lg"></i><span class="text-sm">Setting</span>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </aside>
    <div class="w-full md:w-11/12 flex flex-col overflow-x-hidden">
      <!-- Aside -->
      <nav class="w-full bg-emerald-600 text-emerald-50">
        <!-- Navbar content -->
        <div class="flex justify-between border-b items-center p-4 gap-3">

          <div class="flex justify-center items-center gap-2">
          <button onclick="toggleSidebar()" class="block md:hidden g-gray-100 hover:bg-emerald-50 hover:text-emerald-800 px-3 py-1 rounded-lg"><i
              class="fa-solid fa-bars"></i></button>
            <h2 class="font-bold text-xl"><?= $title ?></h2>
          </div>
          <div class="flex justify-center items-center gap-3">
            <h2 class="font-bold text-sm rounded-lg">Administrator</h2>
            <img src="<?= base_url()?>assets/img/user.jpg" alt="" class="rounded-full w-8">
            <a href="<?= base_url('/')?>"
              class="flex justify-center md:justify-start items-center rounded-lg">
              <i class="fa-solid fa-right-from-bracket"></i></span>
            </a>
          </div>
        </div>
      </nav>
      <!-- Main content -->