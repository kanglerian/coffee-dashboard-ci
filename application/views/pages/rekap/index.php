<main class="bg-gray-50 overflow-y-auto p-2 md:p-5">
        <!-- Main content -->
        <div class="bg-white p-5 md:p-8 rounded-lg shadow-sm space-y-3">
          <div class="space-y-2">
            <h1 class="font-bold text-2xl">Rekap Transaksi</h1>
            <p class="text-sm text-gray-700">Lorem ipsum dolor sit amet consectetur adipisicing elit. In, quis?</p>
          </div>
          <hr>
          <div class="relative overflow-x-auto">
            <table id="transaction" class="table-tailwindcss w-full text-sm text-left text-gray-800">
              <thead class="bg-gray-50">
                <tr>
                  <th class="px-6 py-2 rounded-l-lg">No. Transaksi</th>
                  <th class="px-6 py-2">No. Invoice</th>
                  <th class="px-6 py-2">Tanggal</th>
                  <th class="px-6 py-2">Total Item</th>
                  <th class="px-6 py-2">Total Harga</th>
                  <th class="px-6 py-2">Status</th>
                  <th class="px-6 py-2 rounded-r-lg">Aksi</th>
                </tr>
              </thead>
              <tbody class="text-gray-700" id="result">
                <tr class="bg-white border-b">
                  <td class="px-6 py-2">TRX202305160001</td>
                  <td class="px-6 py-2">INV001234545544</td>
                  <td class="px-6 py-2">16 Mei 2023</td>
                  <td class="px-6 py-2">23</td>
                  <td class="px-6 py-2">Rp50.000</td>
                  <td class="px-6 py-2">Selesai</td>
                  <td class="px-6 py-2 space-y-1 md:space-y-0">
                    <a href="<?= base_url('transaksi/detail')?>" class="px-2 py-1 bg-amber-400 hover:bg-amber-500 rounded-md text-white"><i class="fa-solid fa-edit"></i></a>
                    <button onclick="confirmDelete()" class="px-2 py-1 bg-red-500 hover:bg-red-600 rounded-md text-white"><i class="fa-solid fa-trash"></i></button>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </main>