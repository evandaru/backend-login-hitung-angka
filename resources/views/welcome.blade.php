<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>

    </style>
</head>

<body>
    <!-- Main container -->
    <div class="bg-white">
        <!-- Flex container for centering items -->
        <div class="flex h-screen flex-col items-center justify-center">
            <!-- Container for home content -->
            <div class="max-h-auto mx-auto max-w-xl text-center flex flex-col gap-4">
                <div class="mb-8 space-y-3">
                    <h1 class="text-xl font-semibold">Welcome, {{ Auth::check() ? Auth::user()->name : 'Guest' }}!</h1>
                    <p class="text-gray-500">Lorem ipsum dolor sit amet </p>
                </div>
                <a href="/angka">
                    <button
                        class="ring-offset-background focus-visible:ring-ring flex h-10 w-full items-center justify-center whitespace-nowrap rounded-md bg-black px-4 py-2 text-sm font-medium text-white transition-colors hover:bg-black focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50"
                        type="submit">Tampilkan angka</button>
                </a>
                @if (Auth::check())
                    <!-- Logout form -->
                    <form action="{{ route('logout') }}" method="POST" class="mb-8">
                        @csrf
                        <button
                            class="ring-offset-background focus-visible:ring-ring flex h-10 w-full items-center justify-center whitespace-nowrap rounded-md bg-red-500 px-4 py-2 text-sm font-medium text-white transition-colors hover:bg-red-600 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50"
                            type="submit">Logout</button>
                    </form>
                @else
                    <!-- Login and Register links -->
                    <div class="mb-8 space-y-3">
                        <a href="{{ route('login') }}"
                            class="ring-offset-background focus-visible:ring-ring flex h-10 w-full items-center justify-center whitespace-nowrap rounded-md bg-slate-500 px-4 py-2 text-sm font-medium text-white transition-colors hover:bg-black focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50">Login</a>
                        <a href="{{ route('register') }}"
                            class="ring-offset-background focus-visible:ring-ring flex h-10 w-full items-center justify-center whitespace-nowrap rounded-md bg-slate-600 px-4 py-2 text-sm font-medium text-white transition-colors hover:bg-slate-950 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50">Register</a>
                    </div>
                @endif
                <!-- Welcome message -->

            </div>
        </div>
    </div>
</body>

</html>
