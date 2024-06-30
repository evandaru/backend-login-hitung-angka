<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body>
    <div class="bg-white">
        <div class="flex h-screen flex-col items-center justify-center">
            <div class="max-h-auto mx-auto max-w-xl">
                <div class="mb-8 space-y-3">
                    <p class="text-xl font-semibold">Login</p>
                    <p class="text-gray-500">Masukkan Email dan Password untuk Login.</p>
                </div>
                <form action="{{ route('login') }}" method="POST" class="w-full">
                    @csrf
                    <div class="mb-10 space-y-3">
                        <div class="space-y-2">
                            <label class="text-sm font-medium leading-none" for="email">Email</label>
                            <input
                                class=" bg-background ring-offset-background placeholder:text-muted-foreground focus-visible:ring-ring flex h-10 w-full rounded-md border px-3 py-2 text-sm file:border-0 file:bg-transparent file:text-sm file:font-medium focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50"
                                type="email" name="email" id="email" placeholder="mail@example.com" required>
                        </div>
                        <div class="space-y-2">
                            <label class="text-sm font-medium leading-none" for="password">Password</label>
                            <input
                                class=" bg-background ring-offset-background placeholder:text-muted-foreground focus-visible:ring-ring flex h-10 w-full rounded-md border px-3 py-2 text-sm file:border-0 file:bg-transparent file:text-sm file:font-medium focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50"
                                type="password" name="password" id="password" placeholder="Your password" required>
                        </div>
                        <button
                            class="ring-offset-background focus-visible:ring-ring flex h-10 w-full items-center justify-center whitespace-nowrap rounded-md bg-black px-4 py-2 text-sm font-medium text-white transition-colors hover:bg-black/90 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50"
                            type="submit">Login</button>
                    </div>
                </form>
                <div class="text-center"> Tidak memiliki akun? <a class="text-blue-500" href="/register">Buat Akun</a>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
