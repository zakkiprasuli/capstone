<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Login Kasir</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2/dist/tailwind.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(135deg, #60a5fa 0%, #3b82f6 100%);
            animation: gradientShift 15s ease infinite;
            background-size: 200% 200%;
        }
        
        @keyframes gradientShift {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }
        
        .login-card {
            backdrop-filter: blur(10px);
            background: rgba(255, 255, 255, 0.95);
            animation: slideUp 0.5s ease-out;
        }
        
        @keyframes slideUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        .floating {
            animation: float 3s ease-in-out infinite;
        }
        
        @keyframes float {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-10px); }
        }
        
        .input-field:focus {
            transform: scale(1.02);
            transition: all 0.3s ease;
        }
        
        .btn-login {
            transition: all 0.3s ease;
            background: linear-gradient(135deg, #60a5fa 0%, #3b82f6 100%);
        }
        
        .btn-login:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 20px rgba(96, 165, 250, 0.4);
        }
        
        .icon-circle {
            animation: pulse 2s ease-in-out infinite;
        }
        
        @keyframes pulse {
            0%, 100% { transform: scale(1); }
            50% { transform: scale(1.05); }
        }
    </style>
</head>
<body class="flex justify-center items-center h-screen">
    <!-- Decorative circles -->
    <div class="absolute top-10 left-10 w-32 h-32 bg-white opacity-10 rounded-full blur-xl"></div>
    <div class="absolute bottom-10 right-10 w-40 h-40 bg-white opacity-10 rounded-full blur-xl"></div>
    <div class="absolute top-1/2 right-20 w-24 h-24 bg-white opacity-10 rounded-full blur-xl"></div>

    <div class="login-card p-8 rounded-2xl shadow-2xl w-96 relative z-10">
  

        <h1 class="text-2xl font-bold text-center mb-6">Sign in</h1>

        <p class="text-center text-gray-500 mb-6 text-sm">
            Selamat datang! Silakan masuk untuk melanjutkan
        </p>

        <form>
            <div class="mb-4">
                <label class="text-sm font-semibold text-gray-700 block mb-2">Username</label>
                <div class="relative">
                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                        <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                        </svg>
                    </div>
                    <input type="text" class="input-field w-full pl-10 pr-4 py-3 border-2 border-gray-200 rounded-lg focus:ring-2 focus:ring-blue-400 focus:border-transparent outline-none" placeholder="Masukkan username">
                </div>
            </div>

            <div class="mb-6">
                <label class="text-sm font-semibold text-gray-700 block mb-2">Password</label>
                <div class="relative">
                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                        <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path>
                        </svg>
                    </div>
                    <input type="password" class="input-field w-full pl-10 pr-4 py-3 border-2 border-gray-200 rounded-lg focus:ring-2 focus:ring-blue-400 focus:border-transparent outline-none" placeholder="Masukkan password">
                </div>
            </div>

            <button type="submit" class="btn-login w-full text-white font-semibold py-3 rounded-lg shadow-lg">
                Masuk Sekarang
            </button>
        </form>

        <div class="mt-6 text-center">
            <p class="text-xs text-gray-500">
                 Kelola kasir Anda dengan mudah dan efisien
            </p>
        </div>
    </div>
</body>
</html>