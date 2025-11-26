<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Dashboard Kasir</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2/dist/tailwind.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(135deg, #f0f9ff 0%, #e0f2fe 100%);
        }
        
        .nav-item {
            transition: all 0.3s ease;
        }
        
        .nav-item:hover {
            transform: translateX(5px);
        }
        
        .nav-item.active {
            background: linear-gradient(135deg, #60a5fa 0%, #3b82f6 100%);
            color: white;
            box-shadow: 0 4px 6px rgba(59, 130, 246, 0.3);
        }
        
        .user-profile {
            transition: all 0.3s ease;
        }
        
        .user-profile:hover {
            background: #f0f9ff;
        }
        
        .logo-circle {
            background: linear-gradient(135deg, #60a5fa 0%, #3b82f6 100%);
            animation: pulse 2s ease-in-out infinite;
        }
        
        @keyframes pulse {
            0%, 100% { transform: scale(1); }
            50% { transform: scale(1.05); }
        }
    </style>
</head>
<body class="flex">

    <!-- Sidebar -->
    <aside class="w-64 bg-white shadow-2xl min-h-screen">
        <!-- Logo & Brand -->
        <div class="p-5 border-b border-gray-100">
            <div class="flex items-center space-x-3">
                <div class="logo-circle w-10 h-10 rounded-lg flex items-center justify-center shadow-lg">
                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path>
                    </svg>
                </div>
                <h2 class="font-bold text-xl" style="background: linear-gradient(to right, #3b82f6, #1d4ed8); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">
                    Kasir Serumpoen
                </h2>
            </div>
        </div>

        <!-- User Profile -->
        <div class="p-4 border-b border-gray-100">
            <div class="user-profile flex items-center space-x-3 p-3 rounded-lg cursor-pointer">
                <div class="w-12 h-12 rounded-full flex items-center justify-center text-white font-bold shadow-md" style="background: linear-gradient(to bottom right, #60a5fa, #3b82f6);">
                    <span class="text-lg">AS</span>
                </div>
                <div class="flex-1">
                    <p class="font-semibold text-gray-800">Admin Serumpoen</p>
                    <p class="text-xs text-gray-500">Kasir Utama</p>
                </div>
                <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                </svg>
            </div>
        </div>

        <!-- Navigation Menu -->
        <nav class="p-4 space-y-2">
            <a href="/dashboard" class="nav-item {{ request()->is('dashboard') ? 'active' : '' }} flex items-center space-x-3 p-3 rounded-lg hover:bg-blue-50 text-gray-700">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                </svg>
                <span class="font-medium">Dashboard</span>
            </a>
            
            <a href="/pos" class="nav-item {{ request()->is('pos') ? 'active' : '' }} flex items-center space-x-3 p-3 rounded-lg hover:bg-blue-50 text-gray-700">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path>
                </svg>
                <span class="font-medium">POS</span>
            </a>
            
            <a href="/transaction" class="nav-item {{ request()->is('transaction') ? 'active' : '' }} flex items-center space-x-3 p-3 rounded-lg hover:bg-blue-50 text-gray-700">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                </svg>
                <span class="font-medium">History Transaksi</span>
            </a>

            
            <div class="pt-4 mt-4 border-t border-gray-200">
                <a href="/logout" class="nav-item flex items-center space-x-3 p-3 rounded-lg hover:bg-red-50 text-red-500">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path>
                    </svg>
                    <span class="font-medium">Logout</span>
                </a>
            </div>
        </nav>
    </aside>

    <!-- Main Content -->
    <main class="flex-1 p-8">
        @yield('content')
    </main>

</body>
</html>