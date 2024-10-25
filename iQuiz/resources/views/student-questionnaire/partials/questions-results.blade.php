<div class="container mx-auto p-6">

    <div class="bg-white shadow-md rounded-lg p-4 w-1/2 mx-auto">
        <h2 class="text-2xl font-semibold mb-12 text-center">Exam Results</h2>

        <!-- Question 1: Multiple Choice -->
        <div class="flex p-6 mb-6 border border-gray-200 rounded-lg shadow-sm bg-white justify-center items-center">
            <div class="w-full flex flex-col">
                <h3 class="text-lg font-semibold mb-2">1. What is the capital of France?</h3>
                <div class="flex flex-col w-1/2">
                    <div class="mb-4">
                        <label class="flex items-center cursor-pointer p-2 rounded transition bg-green-100">
                            <input type="radio" name="q1" class="form-radio text-blue-500" disabled>
                            <span class="ml-3 text-gray-700 font-medium">Paris</span> <!-- Correct Answer -->
                        </label>
                    </div>
                    <div class="mb-4">
                        <label class="flex items-center cursor-pointer p-2 rounded transition bg-red-100">
                            <input type="radio" name="q1" class="form-radio text-blue-500" disabled  checked>
                            <span class="ml-3 text-gray-700 font-medium">London</span> <!-- Incorrect Answer -->
                        </label>
                    </div>
                </div>
            </div>
        </div>

        <!-- Question 2: Checkboxes -->
        <div class="flex p-6 mb-6 border border-gray-200 rounded-lg shadow-sm bg-white justify-center items-center">
            <div class="w-full flex flex-col">
                <h3 class="text-lg font-semibold mb-2">2. Select the primary colors</h3>
                <div class="flex flex-col w-1/2">
                    <div class="mb-4">
                        <label class="flex items-center cursor-pointer p-2 rounded transition bg-green-100">
                            <input type="checkbox" name="q2" class="form-checkbox text-blue-500" disabled checked>
                            <span class="ml-3 text-gray-700 font-medium">Red</span> <!-- Correct Answer -->
                        </label>
                    </div>
                    <div class="mb-4">
                        <label class="flex items-center cursor-pointer p-2 rounded transition bg-green-100">
                            <input type="checkbox" name="q2" class="form-checkbox text-blue-500" disabled checked>
                            <span class="ml-3 text-gray-700 font-medium">Blue</span> <!-- Correct Answer -->
                        </label>
                    </div>
                    <div class="mb-4">
                        <label class="flex items-center cursor-pointer p-2 rounded transition border">
                            <input type="checkbox" name="q2" class="form-checkbox text-blue-500" disabled>
                            <span class="ml-3 text-gray-700 font-medium">Green</span> <!-- Incorrect Answer -->
                        </label>
                    </div>
                </div>
            </div>
        </div>

        <!-- Question 3: Text -->
        <div class="flex p-6 mb-6 border border-gray-200 rounded-lg shadow-sm bg-white justify-center items-center">
            <div class="w-full flex flex-col">
                <h3 class="text-lg font-semibold mb-2">3. What is the powerhouse of the cell?</h3>
                <div class="flex flex-col w-1/2">
                    <p class="mb-2 text-gray-700">Your Answer: <span class="font-semibold">Nucleus</span></p>
                    <p class="mb-2 text-red-600">Correct Answer: Mitochondria</p> <!-- Incorrect Answer -->
                </div>
            </div>
        </div>

        <!-- Question 4: Paragraph -->
        <div class="flex p-6 mb-6 border border-gray-200 rounded-lg shadow-sm bg-white justify-center items-center">
            <div class="w-full flex flex-col">
                <h3 class="text-lg font-semibold mb-2">4. Explain the water cycle</h3>
                <div class="flex flex-col w-1/2">
                    <p class="mb-2 text-gray-700">Your Answer: <span class="font-semibold">The water cycle involves evaporation, condensation, and precipitation.</span></p>
                    <p class="mb-2 text-green-600">Correct Answer!</p> <!-- Correct Answer -->
                </div>
            </div>
        </div>

        <!-- Question 5: Matching Type -->
        <div class="flex p-6 mb-6 border border-gray-200 rounded-lg shadow-sm bg-white justify-center items-center">
            <div class="w-full flex flex-col">
                <h3 class="text-lg font-semibold mb-2">5. Match the following pairs:</h3>
                <div class="flex flex-col w-1/2">
                    <div class="mb-4">
                        <p class="text-gray-700">1. Sun → <span class="font-semibold">Star</span></p> <!-- Correct -->
                        <p class="text-green-600">Correct</p>
                    </div>
                    <div class="mb-4">
                        <p class="text-gray-700">2. Moon → <span class="font-semibold">Satellite</span></p> <!-- Correct -->
                        <p class="text-green-600">Correct</p>
                    </div>
                    <div class="mb-4">
                        <p class="text-gray-700">3. Earth → <span class="font-semibold">Planet</span></p> <!-- Incorrect -->
                        <p class="text-red-600">Incorrect, Correct Answer: Satellite</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Question 6: Drag and Drop (Assumed Simulation) -->
        <div class="flex p-6 mb-6 border border-gray-200 rounded-lg shadow-sm bg-white justify-center items-center">
            <div class="w-full flex flex-col">
                <h3 class="text-lg font-semibold mb-2">6. Drag and drop the planets in order from the Sun</h3>
                <div class="flex flex-col w-1/2">
                    <p class="mb-2 text-gray-700">Your Answer: <span class="font-semibold">Mercury, Venus, Earth, Mars</span></p>
                    <p class="mb-2 text-red-600">Correct Answer: Mercury, Venus, Earth, Mars, Jupiter, Saturn, Uranus, Neptune</p> <!-- Incorrect -->
                </div>
            </div>
        </div>
    </div>
</div>
