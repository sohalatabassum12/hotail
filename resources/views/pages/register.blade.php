<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    @include('sweetalert::alert')
    <body style="background-image: url('{{ asset('frontend/img/Reg.jpg') }}'); background-size: cover;">
    <h1 class="text-center py-10 text-5xl font-bold text-orange-600">User Registration</h1>
    <div class="flex justify-center">
        <form action="{{ route('signup.store') }}" class="flex flex-col space-y-5" method="POST">
            @csrf
            <input type="text" name="name" value="{{ old('name') }}" placeholder="Enter your name" class="py-3 px-4 border border-orange-500 text-base rounded-md min-w-[500px]"/>
            <input type="text" name="email" placeholder="Enter your email" class="py-3 px-4 border border-orange-500 text-base rounded-md min-w-[500px]"/>
            <input type="password" name="password" placeholder="Enter your password" class="py-3 px-4 border border-orange-500 text-base rounded-md min-w-[500px]"/>
            <input type="address" name="address" placeholder="Enter your address" class="py-3 px-4 border border-orange-500 text-base rounded-md min-w-[500px]"/>

            <button type="submit" class="py-3 px-4 border bg-orange-600 text-white mt-10 rounded-md">Submit</button>
        </form>
    </div>
</body>
</html>
