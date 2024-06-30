<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <div class="flex min-h-screen px-20 flex-col justify-center items-start py-10 ">
        <div class="mb-8 space-y-3">
            <p class="text-xl font-semibold">Menampilkan Angka</p>
            <p class="text-gray-500">Angka dari 1 sampai seratus.</p>
        </div>
        <div class="flex flex-wrap ">
            @foreach ($angka as $angkas)
                <div class="bg-black text-white m-1 rounded-md py-2 px-4">{{ $angkas }} :
                    {{ $angkas % 2 == 0 ? 'genap' : 'ganjil' }}</div>
            @endforeach
        </div>
        <a class="bg-red-500 text-white m-1 rounded-md py-2 px-4 " href="/">Kembali ke Welcome</a>
    </div>
</body>

</html>
