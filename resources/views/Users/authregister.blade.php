<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MYKOST - Register</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }
    </style>
</head>
<body class="bg-gray-50 min-h-screen">
    <div class="min-h-screen flex">
        <!-- Left Side - Image Section -->
        <div class="hidden lg:flex lg:w-1/2 relative">
            <div class="absolute inset-0 bg-gradient-to-br from-black/40 to-black/60"></div>
            <img src="assets/images/Login Art.png" 
                 alt="Modern Building" 
                 class="w-full h-full object-cover">
            
            <!-- Logo and Content Overlay -->
            <div class="absolute inset-0 flex flex-col justify-between items-center p-8 lg:p-12">
                <!-- Logo -->
                <div class="flex items-center">
                    <h1 class="text-white text-4xl lg:text-5xl font-bold tracking-tight">
                        MY KOST
                    </h1>
                </div>
                
                <!-- Bottom Content -->
                <div class="text-white items-center text-center">
                    <p class="text-lg mb-6 opacity-90">Already have an account? Sign in now.</p>
                    <a href="{{ route('login') }}" 
                       class="inline-block bg-blue-600 hover:bg-blue-700 text-white font-medium py-3 px-8 rounded-lg transition-colors duration-200 ">
                        Sign In
                    </a>
                </div>
            </div>
        </div>

        <!-- Right Side - Registration Form -->
        <div class="w-full lg:w-1/2 flex items-center justify-center p-6 lg:p-8">
            <div class="w-full max-w-md">
                <!-- Mobile Logo -->
                <div class="lg:hidden text-center mb-8">
                    <h1 class="text-3xl font-bold text-gray-800">
                        MY<span class="text-blue-600">KOST</span>
                    </h1>
                </div>

                <!-- Welcome Header -->
                <div class="text-center lg:text-left mb-8">
                    <h2 class="text-2xl lg:text-3xl font-bold text-gray-800 mb-2">
                        Hi, Welcome!!
                    </h2>
                    <p class="text-gray-600">Create your MYKOST account</p>
                </div>

                <!-- Registration Form -->
                <form action="{{ route('register') }}" method="POST" class="space-y-6">
                    @csrf
                    
                    <!-- Username Field -->
                    <div>
                        <label for="username" class="block text-sm font-medium text-gray-700 mb-2">
                            Username
                        </label>
                        <input type="text" 
                               id="username" 
                               name="username" 
                               placeholder="@Example123"
                               value="{{ old('username') }}"
                               class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-200 placeholder-gray-400"
                               required>
                        @error('username')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Email Field -->
                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700 mb-2">
                            Email
                        </label>
                        <input type="email" 
                               id="email" 
                               name="email" 
                               placeholder="Example@email.com"
                               value="{{ old('email') }}"
                               class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-200 placeholder-gray-400"
                               required>
                        @error('email')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Password Field -->
                    <div>
                        <label for="password" class="block text-sm font-medium text-gray-700 mb-2">
                            Password
                        </label>
                        <input type="password" 
                               id="password" 
                               name="password" 
                               placeholder="At least 8 characters"
                               class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-200 placeholder-gray-400"
                               required>
                        @error('password')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Confirm Password Field -->
                    <div>
                        <label for="password_confirmation" class="block text-sm font-medium text-gray-700 mb-2">
                            Confirm Password
                        </label>
                        <input type="password" 
                               id="password_confirmation" 
                               name="password_confirmation" 
                               placeholder="At least 8 characters"
                               class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-200 placeholder-gray-400"
                               required>
                    </div>

                    <!-- Register Button -->
                    <button type="submit" 
                            class="w-full bg-blue-600 hover:bg-blue-700 text-white font-medium py-3 px-4 rounded-lg transition-colors duration-200 focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
                        Register
                    </button>
                </form>

                <!-- Mobile Sign In Link -->
                <div class="lg:hidden mt-6 text-center">
                    <p class="text-gray-600 mb-4">Already have an account?</p>
                    <a href="{{ route('login') }}" 
                       class="inline-block bg-gray-800 hover:bg-gray-900 text-white font-medium py-3 px-8 rounded-lg transition-colors duration-200">
                        Sign In
                    </a>
                </div>

                <!-- Terms and Privacy -->
                <div class="mt-6 text-center">
                    <p class="text-xs text-gray-500">
                        By registering, you agree to our 
                        <a href="#" class="text-blue-600 hover:text-blue-700">Terms of Service</a> 
                        and 
                        <a href="#" class="text-blue-600 hover:text-blue-700">Privacy Policy</a>
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- Success/Error Messages -->
    @if(session('success'))
        <div class="fixed top-4 right-4 bg-green-500 text-white px-6 py-3 rounded-lg shadow-lg z-50">
            {{ session('success') }}
        </div>
    @endif

    @if(session('error'))
        <div class="fixed top-4 right-4 bg-red-500 text-white px-6 py-3 rounded-lg shadow-lg z-50">
            {{ session('error') }}
        </div>
    @endif

    <script>
        // Auto-hide flash messages
        setTimeout(function() {
            const messages = document.querySelectorAll('.fixed.top-4.right-4');
            messages.forEach(function(message) {
                message.style.opacity = '0';
                setTimeout(function() {
                    message.remove();
                }, 300);
            });
        }, 3000);
    </script>
</body>
</html>