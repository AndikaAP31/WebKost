<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>MYKOST - Register</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }
    </style>
</head>

<body class="bg-gray-50 h-screen overflow-hidden">
    <div class="flex h-screen">
        <!-- Left Side -->
        <div class="w-full lg:w-1/2 flex items-center justify-center px-6">
            <div class="w-full max-w-md">
                <!-- Logo -->
                <div class="text-center mb-6">
                    <h1 class="text-4xl font-bold">
                        <span class="text-orange-500">MY</span><span class="text-indigo-900">KOST</span>
                    </h1>
                </div>
                <!-- Welcome -->
                <div class="text-center mb-8">
                    <h2 class="text-2xl font-bold text-gray-800 mb-1">Hi, Welcome!!</h2>
                    <p class="text-sm text-gray-500">Create your MYKOST account</p>
                </div>

                <!-- Form -->
                <form action="{{ route('login') }}" method="POST" class="space-y-5">
                    @csrf

                    <div>
                        <p>Email</p>
                        <input type="email" name="email" placeholder="Example@email.com"
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg placeholder-gray-400 focus:ring-2 focus:ring-blue-500"
                            value="{{ old('email') }}" required />
                        @error('email')
                            <p class="text-sm text-red-600 mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <p class="mb-1">Password</p>
                        <input type="password" name="password" placeholder="At least 8 characters"
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg placeholder-gray-400 focus:ring-2 focus:ring-blue-500"
                            required />
                        @error('password')
                            <p class="text-sm text-red-600 mt-1">{{ $message }}</p>
                        @enderror

                        <!-- Wrapper untuk align kanan -->
                        <div class="w-full flex justify-end mt-2">
                            <a href="#" class="text-blue-600 underline text-sm">Forgot Password?</a>
                        </div>
                    </div>



                    <button type="submit"
                        class="w-full bg-blue-600 hover:bg-blue-700 text-white font-medium py-3 rounded-lg transition">
                        Sign In
                    </button>
                </form>

                <div class="mt-6 text-center text-xs text-gray-500">
                    By registering, you agree to our
                    <a href="#" class="text-blue-600 hover:underline">Terms of Service</a> and
                    <a href="#" class="text-blue-600 hover:underline">Privacy Policy</a>.
                </div>
            </div>
        </div>

        <!-- Right Side -->
        <div class="w-1/2 hidden lg:flex relative">
            <img src="assets/images/Login Art.png"
                class="max-w-[90%] max-h-[90%] object-contain mx-auto my-auto rounded-[40px] bg-cover bg-center alt="Background" />
            {{-- <div class="absolute inset-0 bg-black bg-opacity-50 rounded-[40px]"></div> --}}
            <div class="absolute inset-0 flex flex-col justify-center items-center text-white text-center px-8">
                <div>
                    <h1 class="text-5xl font-bold mb-4">MYKOST</h1>
                </div>
                <div class="mt-20">
                    <p class="text-lg mb-6">New to our platform? Sign Up now. </p>
                    <a href="{{ route('register') }}"
                        class="bg-blue-600 hover:bg-blue-700 text-white font-medium py-2.5 px-8 rounded-lg transition">
                        Sign Up
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Flash Messages -->
    @if (session('success'))
        <div class="fixed top-4 right-4 bg-green-500 text-white px-6 py-3 rounded-lg shadow-lg z-50">
            {{ session('success') }}
        </div>
    @endif

    @if (session('error'))
        <div class="fixed top-4 right-4 bg-red-500 text-white px-6 py-3 rounded-lg shadow-lg z-50">
            {{ session('error') }}
        </div>
    @endif

    <script>
        setTimeout(() => {
            document.querySelectorAll('.fixed.top-4.right-4').forEach(el => {
                el.style.opacity = '0';
                setTimeout(() => el.remove(), 300);
            });
        }, 3000);
    </script>
</body>

</html>
