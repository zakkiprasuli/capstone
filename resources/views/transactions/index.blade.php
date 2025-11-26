@extends('layouts.dashboard')

@section('content')
<div class="space-y-6">
    <!-- Header -->
    <div class="flex items-center justify-between">
        <div>
            <h1 class="text-3xl font-bold text-gray-800">History Transaksi</h1>
            <p class="text-gray-500 mt-1">Riwayat semua transaksi kasir</p>
        </div>
        <div class="flex items-center space-x-3">
            <button class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-lg flex items-center space-x-2 transition shadow-md">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                </svg>
                <span>Export PDF</span>
            </button>
            <button class="bg-green-500 hover:bg-green-600 text-white px-4 py-2 rounded-lg flex items-center space-x-2 transition shadow-md">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                </svg>
                <span>Export Excel</span>
            </button>
        </div>
    </div>

    <!-- Filter Section -->
    <div class="bg-white p-6 rounded-xl shadow-lg">
        <h2 class="text-lg font-semibold text-gray-800 mb-4">Filter Transaksi</h2>
        <div class="grid grid-cols-4 gap-4">
            <div>
                <label class="text-sm font-medium text-gray-700 block mb-2">Tanggal Mulai</label>
                <input type="date" class="w-full px-4 py-2 border-2 border-gray-200 rounded-lg focus:ring-2 focus:ring-blue-400 focus:border-transparent outline-none">
            </div>
            <div>
                <label class="text-sm font-medium text-gray-700 block mb-2">Tanggal Akhir</label>
                <input type="date" class="w-full px-4 py-2 border-2 border-gray-200 rounded-lg focus:ring-2 focus:ring-blue-400 focus:border-transparent outline-none">
            </div>
            <div>
                <label class="text-sm font-medium text-gray-700 block mb-2">Metode Pembayaran</label>
                <select class="w-full px-4 py-2 border-2 border-gray-200 rounded-lg focus:ring-2 focus:ring-blue-400 focus:border-transparent outline-none">
                    <option value="">Semua</option>
                    <option value="cash">Cash</option>
                    <option value="qris">QRIS</option>
                </select>
            </div>
            <div class="flex items-end">
                <button class="w-full bg-blue-500 hover:bg-blue-600 text-white py-2 rounded-lg font-medium transition shadow-md">
                    Terapkan Filter
                </button>
            </div>
        </div>
    </div>

    <!-- Stats Cards -->
    <div class="grid grid-cols-4 gap-4">
        <div class="bg-white p-5 rounded-xl shadow-lg border-l-4 border-blue-500">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-sm text-gray-500 mb-1">Total Transaksi</p>
                    <p class="text-2xl font-bold text-gray-800">150</p>
                </div>
                <div class="bg-blue-100 p-3 rounded-lg">
                    <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                    </svg>
                </div>
            </div>
        </div>

        <div class="bg-white p-5 rounded-xl shadow-lg border-l-4 border-green-500">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-sm text-gray-500 mb-1">Total Pendapatan</p>
                    <p class="text-2xl font-bold text-gray-800">Rp 3.5 Jt</p>
                </div>
                <div class="bg-green-100 p-3 rounded-lg">
                    <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                </div>
            </div>
        </div>

        <div class="bg-white p-5 rounded-xl shadow-lg border-l-4 border-purple-500">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-sm text-gray-500 mb-1">Rata-rata Transaksi</p>
                    <p class="text-2xl font-bold text-gray-800">Rp 23.3K</p>
                </div>
                <div class="bg-purple-100 p-3 rounded-lg">
                    <svg class="w-6 h-6 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 7h6m0 10v-3m-3 3h.01M9 17h.01M9 14h.01M12 14h.01M15 11h.01M12 11h.01M9 11h.01M7 21h10a2 2 0 002-2V5a2 2 0 00-2-2H7a2 2 0 00-2 2v14a2 2 0 002 2z"></path>
                    </svg>
                </div>
            </div>
        </div>

        <div class="bg-white p-5 rounded-xl shadow-lg border-l-4 border-yellow-500">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-sm text-gray-500 mb-1">Item Terjual</p>
                    <p class="text-2xl font-bold text-gray-800">320</p>
                </div>
                <div class="bg-yellow-100 p-3 rounded-lg">
                    <svg class="w-6 h-6 text-yellow-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"></path>
                    </svg>
                </div>
            </div>
        </div>
    </div>

    <!-- Transaction Table -->
    <div class="bg-white rounded-xl shadow-lg overflow-hidden">
        <div class="p-6 border-b border-gray-200">
            <div class="flex items-center justify-between">
                <h2 class="text-xl font-semibold text-gray-800">Daftar Transaksi</h2>
                <input type="text" placeholder="Cari transaksi..." class="px-4 py-2 border-2 border-gray-200 rounded-lg focus:ring-2 focus:ring-blue-400 focus:border-transparent outline-none">
            </div>
        </div>

        <div class="overflow-x-auto">
            <table class="w-full">
                <thead class="bg-blue-50">
                    <tr>
                        <th class="px-6 py-4 text-left text-xs font-semibold text-gray-700 uppercase">ID Transaksi</th>
                        <th class="px-6 py-4 text-left text-xs font-semibold text-gray-700 uppercase">Tanggal</th>
                        <th class="px-6 py-4 text-left text-xs font-semibold text-gray-700 uppercase">Kasir</th>
                        <th class="px-6 py-4 text-left text-xs font-semibold text-gray-700 uppercase">Item</th>
                        <th class="px-6 py-4 text-left text-xs font-semibold text-gray-700 uppercase">Total</th>
                        <th class="px-6 py-4 text-left text-xs font-semibold text-gray-700 uppercase">Pembayaran</th>
                        <th class="px-6 py-4 text-center text-xs font-semibold text-gray-700 uppercase">Aksi</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200">
                    <!-- Transaction Row 1 -->
                    <tr class="hover:bg-blue-50 transition">
                        <td class="px-6 py-4">
                            <span class="font-semibold text-gray-800">#TRX001</span>
                        </td>
                        <td class="px-6 py-4 text-gray-600">
                            23 Nov 2025<br>
                            <span class="text-xs text-gray-400">14:30 WIB</span>
                        </td>
                        <td class="px-6 py-4 text-gray-600">Admin Serumpoen</td>
                        <td class="px-6 py-4">
                            <span class="text-gray-600">3 item</span>
                        </td>
                        <td class="px-6 py-4">
                            <span class="font-bold text-gray-800">Rp 53.000</span>
                        </td>
                        <td class="px-6 py-4">
                            <span class="bg-blue-100 text-blue-700 px-3 py-1 rounded-full text-sm font-medium">Cash</span>
                        </td>
                        <td class="px-6 py-4">
                            <div class="flex items-center justify-center space-x-2">
                                <button class="bg-blue-500 hover:bg-blue-600 text-white px-3 py-1 rounded-lg text-sm transition">
                                    Detail
                                </button>
                                <button class="bg-gray-500 hover:bg-gray-600 text-white px-3 py-1 rounded-lg text-sm transition">
                                    Print
                                </button>
                            </div>
                        </td>
                    </tr>

                    <!-- Transaction Row 2 -->
                    <tr class="hover:bg-blue-50 transition">
                        <td class="px-6 py-4">
                            <span class="font-semibold text-gray-800">#TRX002</span>
                        </td>
                        <td class="px-6 py-4 text-gray-600">
                            23 Nov 2025<br>
                            <span class="text-xs text-gray-400">13:15 WIB</span>
                        </td>
                        <td class="px-6 py-4 text-gray-600">Admin Serumpoen</td>
                        <td class="px-6 py-4">
                            <span class="text-gray-600">2 item</span>
                        </td>
                        <td class="px-6 py-4">
                            <span class="font-bold text-gray-800">Rp 35.000</span>
                        </td>
                        <td class="px-6 py-4">
                            <span class="bg-purple-100 text-purple-700 px-3 py-1 rounded-full text-sm font-medium">QRIS</span>
                        </td>
                        <td class="px-6 py-4">
                            <div class="flex items-center justify-center space-x-2">
                                <button class="bg-blue-500 hover:bg-blue-600 text-white px-3 py-1 rounded-lg text-sm transition">
                                    Detail
                                </button>
                                <button class="bg-gray-500 hover:bg-gray-600 text-white px-3 py-1 rounded-lg text-sm transition">
                                    Print
                                </button>
                            </div>
                        </td>
                    </tr>

                    <!-- Transaction Row 3 -->
                    <tr class="hover:bg-blue-50 transition">
                        <td class="px-6 py-4">
                            <span class="font-semibold text-gray-800">#TRX003</span>
                        </td>
                        <td class="px-6 py-4 text-gray-600">
                            23 Nov 2025<br>
                            <span class="text-xs text-gray-400">12:45 WIB</span>
                        </td>
                        <td class="px-6 py-4 text-gray-600">Admin Serumpoen</td>
                        <td class="px-6 py-4">
                            <span class="text-gray-600">5 item</span>
                        </td>
                        <td class="px-6 py-4">
                            <span class="font-bold text-gray-800">Rp 78.000</span>
                        </td>
                        <td class="px-6 py-4">
                            <span class="bg-blue-100 text-blue-700 px-3 py-1 rounded-full text-sm font-medium">Cash</span>
                        </td>
                        <td class="px-6 py-4">
                            <div class="flex items-center justify-center space-x-2">
                                <button class="bg-blue-500 hover:bg-blue-600 text-white px-3 py-1 rounded-lg text-sm transition">
                                    Detail
                                </button>
                                <button class="bg-gray-500 hover:bg-gray-600 text-white px-3 py-1 rounded-lg text-sm transition">
                                    Print
                                </button>
                            </div>
                        </td>
                    </tr>

                    <!-- Transaction Row 4 -->
                    <tr class="hover:bg-blue-50 transition">
                        <td class="px-6 py-4">
                            <span class="font-semibold text-gray-800">#TRX004</span>
                        </td>
                        <td class="px-6 py-4 text-gray-600">
                            23 Nov 2025<br>
                            <span class="text-xs text-gray-400">11:20 WIB</span>
                        </td>
                        <td class="px-6 py-4 text-gray-600">Admin Serumpoen</td>
                        <td class="px-6 py-4">
                            <span class="text-gray-600">1 item</span>
                        </td>
                        <td class="px-6 py-4">
                            <span class="font-bold text-gray-800">Rp 20.000</span>
                        </td>
                        <td class="px-6 py-4">
                            <span class="bg-purple-100 text-purple-700 px-3 py-1 rounded-full text-sm font-medium">QRIS</span>
                        </td>
                        <td class="px-6 py-4">
                            <div class="flex items-center justify-center space-x-2">
                                <button class="bg-blue-500 hover:bg-blue-600 text-white px-3 py-1 rounded-lg text-sm transition">
                                    Detail
                                </button>
                                <button class="bg-gray-500 hover:bg-gray-600 text-white px-3 py-1 rounded-lg text-sm transition">
                                    Print
                                </button>
                            </div>
                        </td>
                    </tr>

                    <!-- Transaction Row 5 -->
                    <tr class="hover:bg-blue-50 transition">
                        <td class="px-6 py-4">
                            <span class="font-semibold text-gray-800">#TRX005</span>
                        </td>
                        <td class="px-6 py-4 text-gray-600">
                            22 Nov 2025<br>
                            <span class="text-xs text-gray-400">16:50 WIB</span>
                        </td>
                        <td class="px-6 py-4 text-gray-600">Admin Serumpoen</td>
                        <td class="px-6 py-4">
                            <span class="text-gray-600">4 item</span>
                        </td>
                        <td class="px-6 py-4">
                            <span class="font-bold text-gray-800">Rp 62.000</span>
                        </td>
                        <td class="px-6 py-4">
                            <span class="bg-blue-100 text-blue-700 px-3 py-1 rounded-full text-sm font-medium">Cash</span>
                        </td>
                        <td class="px-6 py-4">
                            <div class="flex items-center justify-center space-x-2">
                                <button class="bg-blue-500 hover:bg-blue-600 text-white px-3 py-1 rounded-lg text-sm transition">
                                    Detail
                                </button>
                                <button class="bg-gray-500 hover:bg-gray-600 text-white px-3 py-1 rounded-lg text-sm transition">
                                    Print
                                </button>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <!-- Pagination -->
        <div class="bg-blue-50 px-6 py-4 border-t border-gray-200">
            <div class="flex items-center justify-between">
                <div class="text-sm text-gray-600">
                    Menampilkan <span class="font-semibold">1-5</span> dari <span class="font-semibold">150</span> transaksi
                </div>
                <div class="flex items-center space-x-2">
                    <button class="px-3 py-1 border border-gray-300 rounded-lg hover:bg-white transition text-sm">
                        Previous
                    </button>
                    <button class="px-3 py-1 bg-blue-500 text-white rounded-lg text-sm">1</button>
                    <button class="px-3 py-1 border border-gray-300 rounded-lg hover:bg-white transition text-sm">2</button>
                    <button class="px-3 py-1 border border-gray-300 rounded-lg hover:bg-white transition text-sm">3</button>
                    <button class="px-3 py-1 border border-gray-300 rounded-lg hover:bg-white transition text-sm">...</button>
                    <button class="px-3 py-1 border border-gray-300 rounded-lg hover:bg-white transition text-sm">30</button>
                    <button class="px-3 py-1 border border-gray-300 rounded-lg hover:bg-white transition text-sm">
                        Next
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection