@extends('layouts.dashboard')

@section('content')
<div class="space-y-6">
  
    <div class="flex items-center justify-between">
        <div>
            <h1 class="text-3xl font-bold bg-gradient-to-r from-blue-500 to-blue-700 bg-clip-text text-transparent">
                Dashboard Kasir
            </h1>
            <p class="text-gray-500 mt-1">Pantau performa kasir Anda hari ini</p>
        </div>
        <div class="text-right">
            <p class="text-sm text-gray-500">Hari ini</p>
            <p class="text-lg font-semibold text-gray-800">{{ date('d M Y') }}</p>
        </div>
    </div>

    <div class="grid grid-cols-3 gap-6">
        <div class="bg-gradient-to-br from-blue-50 to-white border border-blue-100 shadow-lg p-6 rounded-xl hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1">
            <div class="flex items-center justify-between mb-3">
                <div class="bg-gradient-to-br from-blue-400 to-blue-600 w-12 h-12 rounded-lg flex items-center justify-center shadow-md">
                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                </div>
                <span class="text-green-500 text-sm font-semibold bg-green-50 px-2 py-1 rounded-full">+0%</span>
            </div>
            <h2 class="text-sm font-medium text-gray-600">Total Transaksi Hari Ini</h2>
            <p class="text-3xl font-bold text-gray-800 mt-2">Rp 0</p>
            <p class="text-xs text-gray-500 mt-2">0 transaksi berhasil</p>
        </div>

        <div class="bg-gradient-to-br from-green-50 to-white border border-green-100 shadow-lg p-6 rounded-xl hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1">
            <div class="flex items-center justify-between mb-3">
                <div class="bg-gradient-to-br from-green-400 to-green-600 w-12 h-12 rounded-lg flex items-center justify-center shadow-md">
                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"></path>
                    </svg>
                </div>
                <span class="text-green-500 text-sm font-semibold bg-green-50 px-2 py-1 rounded-full">+0%</span>
            </div>
            <h2 class="text-sm font-medium text-gray-600">Jumlah Barang Terjual</h2>
            <p class="text-3xl font-bold text-gray-800 mt-2">0</p>
            <p class="text-xs text-gray-500 mt-2">Item terjual hari ini</p>
        </div>

        <div class="bg-gradient-to-br from-purple-50 to-white border border-purple-100 shadow-lg p-6 rounded-xl hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1">
            <div class="flex items-center justify-between mb-3">
                <div class="bg-gradient-to-br from-purple-400 to-purple-600 w-12 h-12 rounded-lg flex items-center justify-center shadow-md">
                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                    </svg>
                </div>
                <span class="text-green-500 text-sm font-semibold bg-green-50 px-2 py-1 rounded-full">+0%</span>
            </div>
            <h2 class="text-sm font-medium text-gray-600">Total Pelanggan</h2>
            <p class="text-3xl font-bold text-gray-800 mt-2">0</p>
            <p class="text-xs text-gray-500 mt-2">Pelanggan hari ini</p>
        </div>
    </div>


    <div class="bg-white rounded-xl shadow-lg p-6">
        <h2 class="text-xl font-semibold text-gray-800 mb-4">Aksi Cepat</h2>
        <div class="grid grid-cols-2 gap-4">
            <a href="/pos" class="group flex items-center justify-between bg-gradient-to-r from-blue-500 to-blue-600 hover:from-blue-600 hover:to-blue-700 text-white py-4 px-6 rounded-xl shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1">
                <div class="flex items-center space-x-3">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path>
                    </svg>
                    <div>
                        <p class="font-bold text-lg">Mulai Transaksi</p>
                        <p class="text-sm text-blue-100">Buka POS Kasir</p>
                    </div>
                </div>
                <svg class="w-6 h-6 group-hover:translate-x-2 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                </svg>
            </a>

            <a href="/history" class="group flex items-center justify-between bg-gradient-to-r from-purple-500 to-purple-600 hover:from-purple-600 hover:to-purple-700 text-white py-4 px-6 rounded-xl shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1">
                <div class="flex items-center space-x-3">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                    </svg>
                    <div>
                        <p class="font-bold text-lg">Lihat Riwayat</p>
                        <p class="text-sm text-purple-100">History Transaksi</p>
                    </div>
                </div>
                <svg class="w-6 h-6 group-hover:translate-x-2 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                </svg>
            </a>
        </div>
    </div>
</div>
@endsection