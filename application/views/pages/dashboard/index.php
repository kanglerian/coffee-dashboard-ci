<!-- Main content -->
<main class="bg-gray-50 overflow-y-auto p-2 md:p-5 space-y-3">
        <!-- Main content -->
        <div class="w-full flex flex-col md:flex-row gap-3">
          <div class="w-full md:w-1/3 bg-white p-4 md:p-8 rounded-lg shadow-sm space-y-3">
            <div class="flex justify-between items-center">
              <div class="space-y-1">
                <h3 class="text-gray-700 text-sm md:text-base">Omset Hari Ini</h3>
                <h3 class="text-lg md:text-2xl font-bold text-gray-800">Rp2.300.000</h3>
              </div>
              <div class="text-gray-600">
                <i class="fa-solid fa-wallet fa-2x"></i>
              </div>
            </div>
          </div>
          <div class="w-full md:w-1/3 bg-white p-4 md:p-8 rounded-lg shadow-sm space-y-3">
            <div class="flex justify-between items-center">
              <div class="space-y-1">
                <h3 class="text-gray-700 text-sm md:text-base">Laba Hari Ini</h3>
                <h3 class="text-lg md:text-2xl font-bold text-gray-800">Rp300.000</h3>
              </div>
              <div class="text-gray-600">
                <i class="fa-solid fa-coins fa-2x"></i>
              </div>
            </div>
          </div>
          <div class="w-full md:w-1/3 bg-white p-4 md:p-8 rounded-lg shadow-sm space-y-3">
            <div class="flex justify-between items-center">
              <div class="space-y-1">
                <h3 class="text-gray-700 text-sm md:text-base">Barang terlaris</h3>
                <h3 class="text-lg md:text-2xl font-bold text-gray-800">Indomie Goreng</h3>
              </div>
              <div class="text-gray-600">
                <i class="fa-solid fa-boxes-stacked fa-2x"></i>
              </div>
            </div>
          </div>
        </div>
        <div class="w-full bg-white p-4 md:p-8 rounded-lg shadow-sm space-y-3">
          <div class="space-y-2">
            <h1 class="font-bold text-2xl">Riwayat Penjualan</h1>
            <p class="text-sm text-gray-700">Lorem ipsum dolor sit amet consectetur adipisicing elit. In, quis?</p>
          </div>
          <hr>
          <div class="relative overflow-x-auto">
            <table id="transaction" class="table-tailwindcss w-full text-sm text-left text-gray-800">
              <thead class="bg-gray-50">
                <tr>
                  <th class="px-6 py-2 rounded-l-lg">Tanggal</th>
                  <th class="px-6 py-2">No. Invoice</th>
                  <th class="px-6 py-2">Total</th>
                  <th class="px-6 py-2 rounded-r-lg">Aksi</th>
                </tr>
              </thead>
              <tbody class="text-gray-700" id="result">
                <tr class="bg-white border-b">
                  <td class="px-6 py-2">17 Mei 2023</td>
                  <td class="px-6 py-2">IN2022545462314</td>
                  <td class="px-6 py-2">Rp15.000</td>
                  <td class="px-6 py-2 space-y-1 md:space-y-0">
                    <a href="<?= base_url('transaksi/detail')?>" class="px-2 py-1 bg-amber-500 hover:bg-amber-600 rounded-md text-white"><i
                        class="fa-solid fa-pen-to-square"></i></button>
                  </td>
                </tr>
              </tbody>
            </table>

          </div>
        </div>
      </main>