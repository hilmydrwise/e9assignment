<x-layout>
  <h1 class="text-3xl font-bold tracking-tight text-gray-900 py-3">Transaksi Aktif</h1>
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <div class="flex items-center justify-between flex-column flex-wrap md:flex-row space-y-4 md:space-y-0 py-4 px-4 bg-white dark:bg-gray-900">
                <div>
                    <button data-modal-target="tambah-modal" data-modal-toggle="tambah-modal" class="inline-flex items-center text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">
                        Tambah +
                        {{-- <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                        </svg> --}}
                    </button>
                    <!-- Dropdown menu -->
                    {{-- <div id="dropdownAction" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
                        <ul class="py-1 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownActionButton">
                            <li>
                                <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Compare Coin</a>
                            </li>
                        </ul>
                        <div class="py-1">
                            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Delete Market</a>
                        </div>
                    </div> --}}
                </div>
                <div id="tambah-modal" data-modal-backdrop="static" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 bottom-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                  <div class="relative p-4 w-full max-w-2xl max-h-full">
                      <!-- Modal content -->
                      <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                          <!-- Modal header -->
                          <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                              <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                                  Form Transaksi
                              </h3>
                              <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="tambah-modal">
                                  <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                      <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                                  </svg>
                                  <span class="sr-only">Close modal</span>
                              </button>
                          </div>
                          <!-- Modal body -->
                          <div class="p-4 md:p-5 space-y-4">
                            <form class="max-w-sm mx-auto">
                              <div class="mb-5">
                                <label for="namaCoin" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Coin</label>
                                <input type="text" id="namaCoin" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required />
                              </div>
                              <div class="mb-5">
                                <label for="jumlah" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jumlah/Modal</label>
                                <input type="text" id="jumlah" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required />
                              </div>
                              <div class="mb-5">
                                <label for="hargaBeli" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Harga Beli</label>
                                <input type="text" id="hargaBeli" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required />
                              </div>
                              <div class="mb-5">
                                <label for="marketBeli" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Market Beli</label>
                                <select id="marketBeli" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                  <option value="#">Indodax</option>
                                  <option value="#">Reku</option>
                                  <option value="#">Bittime</option>
                                  <option value="#">Binance</option>
                                  <option value="#">Huobi</option>
                                  <option value="#">Bybit</option>
                                  <option value="#">Kucoin</option>
                                  <option value="#">OKX</option>
                                  <option value="#">GateIO</option>
                                  <option value="#">MEXC</option>
                                  <option value="#">Bitget</option>
                                  <option value="#">Upbit</option>
                                </select>
                              </div>
                            </form>
                          </div>
                          <!-- Modal footer -->
                          <div class="flex items-center p-4 md:p-5 border-t border-gray-200 rounded-b dark:border-gray-600">
                              <button data-modal-hide="tambah-modal" type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Tambah</button>
                              <button data-modal-hide="tambah-modal" type="button" class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Batal</button>
                          </div>
                      </div>
                  </div>
              </div>
            </div>
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            Waktu
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Nama Coin
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Jumlah/Modal
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Harga Beli
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Market Beli
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Aksi
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                        <td class="px-6 py-4">
                            Selasa, 10/12/2024
                        </td>
                        <td class="px-6 py-4 text-base font-semibold">
                            GIGA
                        </td>
                        <td class="px-6 py-4">
                            30.000.000 IDR
                        </td>
                        <td class="px-6 py-4 text-green-600">
                            560 IDR
                        </td>
                        <th scope="row" class="flex items-center px-6 py-4 text-gray-900 whitespace-nowrap dark:text-white">
                            <img class="w-10 h-10 rounded-full" src="img/bybit-image.png" alt="Jese image">
                            <div class="ps-3">
                                <div class="text-base font-semibold">Bybit</div>
                            </div>  
                        </th>
                        <td class="px-6 py-4">
                            <a href="#" data-modal-target="jual-modal" data-modal-toggle="jual-modal" class="font-medium text-red-600 dark:text-red-500 hover:underline">Jual</a>
                        </td>
                    </tr>
                </tbody>
            </table>
            <div id="jual-modal" data-modal-backdrop="static" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 bottom-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
              <div class="relative p-4 w-full max-w-2xl max-h-full">
                  <!-- Modal content -->
                  <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                      <!-- Modal header -->
                      <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                          <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                              Form Jual
                          </h3>
                          <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="jual-modal">
                              <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                              </svg>
                              <span class="sr-only">Close modal</span>
                          </button>
                      </div>
                      <!-- Modal body -->
                      <div class="p-4 md:p-5 space-y-4">
                        <form class="max-w-sm mx-auto">
                          <div class="mb-5">
                            <label for="hargaJual" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Harga Jual</label>
                            <input type="text" id="hargaJual" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required />
                          </div>
                          <div class="mb-5">
                            <label for="marketJual" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Market Jual</label>
                            <select id="marketJual" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                              <option value="#">Indodax</option>
                              <option value="#">Reku</option>
                              <option value="#">Bittime</option>
                              <option value="#">Binance</option>
                              <option value="#">Huobi</option>
                              <option value="#">Bybit</option>
                              <option value="#">Kucoin</option>
                              <option value="#">OKX</option>
                              <option value="#">GateIO</option>
                              <option value="#">MEXC</option>
                              <option value="#">Bitget</option>
                              <option value="#">Upbit</option>
                            </select>
                          </div>
                        </form>
                      </div>
                      <!-- Modal footer -->
                      <div class="flex items-center p-4 md:p-5 border-t border-gray-200 rounded-b dark:border-gray-600">
                          <button data-modal-hide="jual-modal" type="button" class="text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800">Konfirmasi</button>
                          <button data-modal-hide="jual-modal" type="button" class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-red-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Batal</button>
                      </div>
                  </div>
              </div>
          </div>
        </div>
</x-layout>