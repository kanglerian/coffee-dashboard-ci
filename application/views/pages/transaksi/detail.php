<main class="bg-gray-50 overflow-y-auto p-3 md:p-5">
        <!-- Main content -->
        <div class="bg-white p-4 md:p-8 rounded-lg shadow-sm space-y-3">
          <div class="space-y-2">
            <h1 class="font-bold text-2xl">Edit Transaksi</h1>
            <p class="text-sm text-gray-700">Lorem ipsum dolor sit amet consectetur adipisicing elit. In, quis?</p>
          </div>
          <hr>
          <div>
            <form action="#" method="post">
              <div class="flex flex-col md:flex-row gap-5">
                <div class="w-full md:w-1/3">
                  <div class="flex flex-col">
                    <label class="text-sm mb-1">ID Transaksi:</label>
                    <input type="text" value="TRX00236732878" class="border px-2 py-1 rounded-md text-gray-900 bg-gray-50 text-sm">
                  </div>
                </div>
                <div class="w-full md:w-1/3">
                  <div class="flex flex-col">
                    <label class="text-sm mb-1">No Invoice:</label>
                    <input type="text" value="IN2022545462314" class="border px-2 py-1 rounded-md text-gray-900 bg-gray-50 text-sm">
                  </div>
                </div>
                <div class="w-full md:w-1/3">
                  <div class="flex flex-col">
                    <label class="text-sm mb-1">Tanggal:</label>
                    <input type="date" class="border px-2 py-1 rounded-md text-gray-900 bg-gray-50 text-sm">
                  </div>
                </div>
              </div>
            </form>
          </div>
          <hr>
          <div class="relative overflow-x-auto">
            <table id="transaction" class="table-tailwindcss w-full text-sm text-left text-gray-800">
              <thead class="bg-gray-50">
                <tr>
                  <th class="px-6 py-2 rounded-l-lg">Kode</th>
                  <th class="px-6 py-2">Nama Barang</th>
                  <th class="px-6 py-2">Harga</th>
                  <th class="px-6 py-2">Kuantitas</th>
                  <th class="px-6 py-2">Total</th>
                  <th class="px-6 py-2 rounded-r-lg">Aksi</th>
                </tr>
              </thead>
              <tbody class="text-gray-700" id="result">
                <tr class="bg-white border-b">
                  <td class="px-6 py-2">BC001</td>
                  <td class="px-6 py-2">
                    <select class="product" name="states[]">
                      <option value="AL">Alabama</option>
                      <option value="WY">Wyoming</option>
                    </select>
                  </td>
                  <td class="px-6 py-2">Rp3.000</td>
                  <td class="px-6 py-2">
                    <input type="number" placeholder="0" class="border px-2 py-1 rounded-md text-gray-900 bg-gray-50 text-sm">
                  </td>
                  <td class="px-6 py-2">Rp6.000</td>
                  <td class="px-6 py-2 space-y-1 md:space-y-0">
                    <button onclick="deleteItem(this)" class="px-2 py-1 bg-red-500 hover:bg-red-600 rounded-md text-white"><i class="fa-solid fa-circle-xmark"></i></button>
                    <button onclick="addItem()" class="px-2 py-1 bg-sky-500 hover:bg-sky-600 rounded-md text-white"><i class="fa-solid fa-circle-plus"></i></button>
                  </td>
                </tr>
              </tbody>
            </table>
            <div class="flex flex-col md:flex-row justify-between items-center gap-3 mt-3 border bg-gray-50 p-4 rounded-lg">
              <div class="px-6 py-2 bg-sky-600 rounded-lg text-white">
                <h3 class="text-xl">Total: <span class="font-bold">Rp15.000</span></h3>
              </div>
              <div class="flex gap-3">
                <button class="bg-gray-200 hover:bg-gray-300 px-3 py-2 rounded-lg"><i class="fa-solid fa-print"></i></button>
                <button onclick="checkout()" class="bg-red-500 hover:bg-red-600 px-3 py-2 rounded-lg text-white"><i class="fa-solid fa-cash-register"></i> Checkout</button>
              </div>
            </div>
          </div>
        </div>
      </main>