<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Exam</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    @vite('resources/css/app.css') {{-- Ensure Tailwind CSS is included --}}
    
</head>
<body class="bg-gray-100 text-gray-900 font-satoshi">

    <div class="flex flex-col h-screen">

        <header class="bg-custombg-gray text-white py-4">
            @include('student-questionnaire.partials.header')
        </header>

        <div class="flex flex-1 overflow-hidden">

            <main class="flex-1 bg-gray-100 p-6 overflow-y-auto">
                @yield('content')
            </main>

        </div>

        <footer class="bg-white p-4 border-t">
            <div class="flex justify-between items-center">
                <button class="bg-gray-300 px-4 py-2 rounded" id="prev-btn">Prev</button>
                
                <div class="flex items-center space-x-2">
                    <label for="question-number" class="text-gray-700">Question</label>
                    <input 
                        type="number" 
                        id="question-number" 
                        min="1" 
                        max="50" 
                        value="1"
                        class="w-12 text-center bg-gray-100 border border-gray-300 rounded-md focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition-all duration-200 ease-in-out no-spinner" 
                        oninput="this.value = Math.max(Math.min(this.value, 50), 1)" 
                    />
                    <span class="text-gray-700">/ 50</span>
                </div>

                <button class="bg-gray-300 px-4 py-2 rounded" id="next-btn">Next</button>


            </div>
        </footer>

    </div>

    <script>
        // JavaScript to control the countdown and progress bar depletion
        const totalDuration = 60 * 60; // Total time in seconds (e.g., 1 hour)
        let remainingTime = totalDuration;

        const timeText = document.getElementById('time-text');
        const progressBar = document.getElementById('progress-bar');

        function updateTimer() {
            // Update time text in hh:mm:ss format
            const hours = Math.floor(remainingTime / 3600);
            const minutes = Math.floor((remainingTime % 3600) / 60);
            const seconds = remainingTime % 60;
            timeText.textContent = `${String(hours).padStart(2, '0')}:${String(minutes).padStart(2, '0')}:${String(seconds).padStart(2, '0')}`;

            // Calculate and update progress bar width
            const progressWidth = (remainingTime / totalDuration) * 100;
            progressBar.style.width = `${progressWidth}%`;

            // Decrement remaining time
            remainingTime--;

            // Stop timer at zero
            if (remainingTime >= 0) {
                setTimeout(updateTimer, 1000);
            }
        }

        // Start the timer
        updateTimer();
    </script>
</body>
</html>
