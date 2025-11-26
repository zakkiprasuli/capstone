@extends('layouts.dashboard')

@section('content')
<div class="space-y-6">
    <div class="flex gap-6">
        <!-- Left Section: Product Selection -->
        <div class="w-2/3 bg-white p-6 rounded-xl shadow-lg space-y-4">
            <div class="flex items-center justify-between">
                <h2 class="text-xl font-bold text-gray-800">Pilih Produk</h2>
                <div class="flex items-center space-x-2">
                    <input type="text" placeholder="Cari produk..." class="px-4 py-2 border-2 border-gray-200 rounded-lg focus:ring-2 focus:ring-blue-400 focus:border-transparent outline-none">
                    <button class="bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600 transition">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                        </svg>
                    </button>
                </div>
            </div>

            <!-- Category Tabs -->
            <div class="flex gap-3">
                <button class="px-6 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600 shadow-md hover:shadow-lg transition transform hover:-translate-y-0.5 font-medium">
                    Semua
                </button>
                <button class="px-6 py-2 bg-gray-200 text-gray-700 rounded-lg hover:bg-gray-300 shadow-md hover:shadow-lg transition transform hover:-translate-y-0.5 font-medium">
                    Makanan
                </button>
                <button class="px-6 py-2 bg-gray-200 text-gray-700 rounded-lg hover:bg-gray-300 shadow-md hover:shadow-lg transition transform hover:-translate-y-0.5 font-medium">
                    Minuman
                </button>
                <button class="px-6 py-2 bg-gray-200 text-gray-700 rounded-lg hover:bg-gray-300 shadow-md hover:shadow-lg transition transform hover:-translate-y-0.5 font-medium">
                    Lainnya
                </button>
            </div>

            <!-- Product Grid -->
            <div class="grid grid-cols-3 gap-4 max-h-[500px] overflow-y-auto pr-2">
                <!-- Nasi Goreng -->
                <div class="border-2 border-gray-200 rounded-xl cursor-pointer hover:border-blue-400 hover:shadow-lg transition-all duration-300 transform hover:-translate-y-1 bg-white overflow-hidden">
                    <div class="aspect-square bg-gray-100 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1603133872878-684f208fb84b?w=400&h=400&fit=crop" alt="Nasi Goreng" class="w-full h-full object-cover hover:scale-110 transition-transform duration-300">
                    </div>
                    <div class="p-4">
                        <h3 class="font-semibold text-gray-800 text-base mb-1">Nasi Goreng</h3>
                        <p class="text-xs text-gray-500 mb-2">Stok: 50</p>
                        <p class="text-lg font-bold text-blue-600">Rp 15.000</p>
                    </div>
                </div>

                <!-- Mie Goreng -->
                <div class="border-2 border-gray-200 rounded-xl cursor-pointer hover:border-blue-400 hover:shadow-lg transition-all duration-300 transform hover:-translate-y-1 bg-white overflow-hidden">
                    <div class="aspect-square bg-gray-100 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1585032226651-759b368d7246?w=400&h=400&fit=crop" alt="Mie Goreng" class="w-full h-full object-cover hover:scale-110 transition-transform duration-300">
                    </div>
                    <div class="p-4">
                        <h3 class="font-semibold text-gray-800 text-base mb-1">Mie Goreng</h3>
                        <p class="text-xs text-gray-500 mb-2">Stok: 45</p>
                        <p class="text-lg font-bold text-blue-600">Rp 15.000</p>
                    </div>
                </div>
                <!-- Es Teh -->
                <div class="border-2 border-gray-200 rounded-xl cursor-pointer hover:border-yellow-400 hover:shadow-lg transition-all duration-300 transform hover:-translate-y-1 bg-white overflow-hidden">
                    <div class="aspect-square bg-gray-100 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1556679343-c7306c1976bc?w=400&h=400&fit=crop" alt="Es Teh" class="w-full h-full object-cover hover:scale-110 transition-transform duration-300">
                    </div>
                    <div class="p-4">
                        <h3 class="font-semibold text-gray-800 text-base mb-1">Es Teh</h3>
                        <p class="text-xs text-gray-500 mb-2">Stok: 100</p>
                        <p class="text-lg font-bold text-yellow-600">Rp 5.000</p>
                    </div>
                </div>

                <!-- Jus Jeruk -->
                <div class="border-2 border-gray-200 rounded-xl cursor-pointer hover:border-yellow-400 hover:shadow-lg transition-all duration-300 transform hover:-translate-y-1 bg-white overflow-hidden">
                    <div class="aspect-square bg-gray-100 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1600271886742-f049cd451bba?w=400&h=400&fit=crop" alt="Jus Jeruk" class="w-full h-full object-cover hover:scale-110 transition-transform duration-300">
                    </div>
                    <div class="p-4">
                        <h3 class="font-semibold text-gray-800 text-base mb-1">Jus Jeruk</h3>
                        <p class="text-xs text-gray-500 mb-2">Stok: 80</p>
                        <p class="text-lg font-bold text-yellow-600">Rp 8.000</p>
                    </div>
                </div>

                <!-- Es Alpukat -->
                <div class="border-2 border-gray-200 rounded-xl cursor-pointer hover:border-yellow-400 hover:shadow-lg transition-all duration-300 transform hover:-translate-y-1 bg-white overflow-hidden">
                    <div class="aspect-square bg-gray-100 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1623065422902-30a2d299bbe4?w=400&h=400&fit=crop" alt="Es Alpukat" class="w-full h-full object-cover hover:scale-110 transition-transform duration-300">
                    </div>
                    <div class="p-4">
                        <h3 class="font-semibold text-gray-800 text-base mb-1">Es Alpukat</h3>
                        <p class="text-xs text-gray-500 mb-2">Stok: 65</p>
                        <p class="text-lg font-bold text-yellow-600">Rp 10.000</p>
                    </div>
                </div>

                <!-- Kopi -->
                <div class="border-2 border-gray-200 rounded-xl cursor-pointer hover:border-yellow-400 hover:shadow-lg transition-all duration-300 transform hover:-translate-y-1 bg-white overflow-hidden">
                    <div class="aspect-square bg-gray-100 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1511920170033-f8396924c348?w=400&h=400&fit=crop" alt="Kopi" class="w-full h-full object-cover hover:scale-110 transition-transform duration-300">
                    </div>
                    <div class="p-4">
                        <h3 class="font-semibold text-gray-800 text-base mb-1">Kopi</h3>
                        <p class="text-xs text-gray-500 mb-2">Stok: 90</p>
                        <p class="text-lg font-bold text-yellow-600">Rp 8.000</p>
                    </div>
                </div>

                <!-- Susu Coklat -->
                <div class="border-2 border-gray-200 rounded-xl cursor-pointer hover:border-yellow-400 hover:shadow-lg transition-all duration-300 transform hover:-translate-y-1 bg-white overflow-hidden">
                    <div class="aspect-square bg-gray-100 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1576092768241-dec231879fc3?w=400&h=400&fit=crop" alt="Susu Coklat" class="w-full h-full object-cover hover:scale-110 transition-transform duration-300">
                    </div>
                    <div class="p-4">
                        <h3 class="font-semibold text-gray-800 text-base mb-1">Susu Coklat</h3>
                        <p class="text-xs text-gray-500 mb-2">Stok: 75</p>
                        <p class="text-lg font-bold text-yellow-600">Rp 12.000</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Right Section: Checkout -->
        <div class="w-1/3 bg-white p-6 rounded-xl shadow-lg flex flex-col">
            <h2 class="text-xl font-bold text-gray-800 mb-6 text-center">Transaksi</h2>

            <!-- Table Header -->
            <div class="grid grid-cols-12 gap-2 mb-3 pb-2 border-b border-gray-200">
                <div class="col-span-5 text-xs font-semibold text-gray-500 uppercase">Nama</div>
                <div class="col-span-4 text-xs font-semibold text-gray-500 uppercase text-center">QTY</div>
                <div class="col-span-3 text-xs font-semibold text-gray-500 uppercase text-right">Harga</div>
            </div>

            <!-- Cart Items -->
            <div class="flex-1 overflow-y-auto mb-4 space-y-3" style="max-height: 300px;">
                <!-- Empty State -->
                <div class="flex flex-col items-center justify-center h-full text-gray-400 py-8">
                    <svg class="w-16 h-16 mb-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path>
                    </svg>
                    <p class="font-medium text-sm">Belum ada item</p>
                </div>
            </div>

            <!-- Payment Summary -->
            <div class="space-y-3 pt-4 border-t-2 border-gray-200">
                <div class="flex justify-between items-center">
                    <span class="text-gray-600">Discount (%)</span>
                    <input type="number" value="0" class="w-16 px-2 py-1 border border-gray-300 rounded text-right text-sm focus:ring-2 focus:ring-blue-400 outline-none">
                </div>
                
                <div class="flex justify-between items-center">
                    <span class="text-gray-600">Sub Total</span>
                    <span class="font-semibold text-gray-800">Rp 0</span>
                </div>
                
                <div class="flex justify-between items-center">
                    <span class="text-gray-600">Tax <span class="text-green-600 font-semibold">1.5%</span></span>
                    <span class="font-semibold text-gray-800">Rp 0</span>
                </div>
                
                <div class="flex justify-between items-center pt-3 border-t border-gray-200">
                    <span class="text-lg font-bold text-gray-800">Total</span>
                    <span class="text-2xl font-bold text-green-600">Rp 0</span>
                </div>
            </div>

            <!-- Action Buttons -->
            <div class="space-y-3 mt-6">
                <button class="w-full bg-green-600 hover:bg-green-700 text-white py-3 rounded-xl font-semibold shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-0.5 flex items-center justify-center space-x-2">
                    <span>Proses Pembayaran</span>
                </button>

                <div class="grid grid-cols-2 gap-3">
                    <button class="bg-blue-500 hover:bg-blue-600 text-white py-2 rounded-lg font-medium transition-all duration-300 flex items-center justify-center space-x-2 text-sm">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 9V7a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2m2 4h10a2 2 0 002-2v-6a2 2 0 00-2-2H9a2 2 0 00-2 2v6a2 2 0 002 2zm7-5a2 2 0 11-4 0 2 2 0 014 0z"></path>
                        </svg>
                        <span>Cash</span>
                    </button>

                    <button class="bg-yellow-500 hover:bg-yellow-600 text-white py-2 rounded-lg font-medium transition-all duration-300 flex items-center justify-center space-x-2 text-sm">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v1m6 11h2m-6 0h-2v4m0-11v3m0 0h.01M12 12h4.01M16 20h4M4 12h4m12 0h.01M5 8h2a1 1 0 001-1V5a1 1 0 00-1-1H5a1 1 0 00-1 1v2a1 1 0 001 1zm12 0h2a1 1 0 001-1V5a1 1 0 00-1-1h-2a1 1 0 00-1 1v2a1 1 0 001 1zM5 20h2a1 1 0 001-1v-2a1 1 0 00-1-1H5a1 1 0 00-1 1v2a1 1 0 001 1z"></path>
                        </svg>
                        <span>QRIS</span>
                    </button>
                </div>

                <button class="w-full border-2 border-gray-300 hover:border-red-400 hover:bg-red-50 text-gray-700 hover:text-red-600 py-2 rounded-lg font-medium transition-all duration-300 flex items-center justify-center space-x-2">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                    </svg>
                    <span>Clear Cart</span>
                </button>
            </div>
        </div>
    </div>
</div>
@endsection