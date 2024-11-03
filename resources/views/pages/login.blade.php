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
    <body style="background-image: url('{{ asset('frontend/img/') }}'); background-size: cover;">
    <h1 class="text-center py-10 text-5xl font-bold text-orange-600">User Login</h1>
    <div class="max-w-[600px] mx-auto">
        <div class="flex justify-center flex-col gap-y-5 ">
            <form action="{{ route('loginCheck') }}" class="flex flex-col space-y-5" method="POST" >
                @csrf
                <input type="text" name="email" value="{{ old('email') }}" placeholder="Enter your email" class="py-3 px-4 border border-orange-500 text-base rounded-md min-w-[500px]"/>
                <input type="password" name="password" placeholder="Enter your password" class="py-3 px-4 border border-orange-500 text-base rounded-md min-w-[500px]"/>

                <button type="submit" class="py-3 px-4 border bg-orange-600 text-white mt-10 rounded-md">Submit</button>
            </form>
            <p class="">Are you a new member? Please <a href="{{ url('/register') }}" class="text-orange-500 hover:underline">register</a></p>
           

        </div>
    </div>
</body>
</html>
