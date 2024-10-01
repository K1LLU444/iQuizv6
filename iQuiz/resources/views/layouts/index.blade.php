<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'iQuiz Homepage')</title>
    <script src="//unpkg.com/alpinejs" defer></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Sortable/1.14.0/Sortable.min.js" integrity="sha512-r0dOv5VWXKpZGz7wLZBdyD8HmrAEblgD6OUYF6jL6FdqTEUdT2jVJyzf5FQ30W+UE8dT5G0TgMmnOnibozVQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap" rel="stylesheet">
    @vite('resources/css/app.css')
    <style>
        html, body {
            height: 100%;
        }
    </style>
</head>

<body class="text-gray-900 font-poppins bg-cover bg-no-repeat min-h-screen" style="background-image: url('/images/bg-img3.png');">
    <div class="flex flex-col min-h-full relative">
        <div class="absolute top-0 left-0 w-full h-full bg-bg-violet opacity-94 z-[-1]"></div>
        
        <div class="w-[1080px] place-self-center flex justify-between items-center mt-3">
            <img src="{{ asset('images/iquiz-logo.png') }}" alt="iquizlogo">
            <div class="text-white">
                <ul class="flex gap-6">
                    <li>Homepage</li>
                    <li>Homepage2</li>
                    <li>Homepage3</li>
                </ul>
            </div>
        </div>
        <div class="w-[1080px] mx-auto mt-24">
            <div class="flex flex-col justify-center items-center">
                <h1 class="text-white leading-none text-[120px]">WELCOME</h1>
                <h2 class="text-white mt-4 leading-none text-[35px] opacity-80">To Inventive Media IQUIZ</h2>
            </div>
            <div class="flex flex-col justify-center items-center">
                <hr class="border-2 border-blue-900 w-[300px] mt-7">
                <p class="text-white text-center w-[700px] opacity-80 mt-16">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi quae vel iusto, doloremque quidem ducimus vitae.</p>
            </div>
            <div class="flex justify-center gap-12 mt-6">
                <button class="text-white py-2 px-4 rounded w-[200px] h-[50px] explore">EXPLORE</button>
                <button class="border-1 text-white py-2 px-4 rounded hover:bg-b w-[200px] h-[50px] start-quiz">START QUIZ</button>
            </div>
        </div>
            
            

    </div>
    @vite('resources/js/app.js')
</body>
</html>
