<div class="flex-1 p-4">
    <div class="bg-white p-6 rounded-lg border shadow-lg">
        <textarea placeholder="Question" class="w-full text-custom-black text-xl font-bold p-3 border-1 border-gray-200 rounded-lg mb-4" rows="4"></textarea>

        <div id="answers-container">
        </div>

        <div id="matching-key-container" class="hidden p-4 border rounded bg-gray-100 mb-4">
            <div class="flex items-center mb-4">
                <h2 class="text-xl font-semibold">Matching Keys</h2>
                <span id="reload-matching-key" class="cursor-pointer text-gray-500 hover:text-gray-700">
                    <i class="fas fa-sync-alt"></i>
                </span>
            </div>
            <div id="matching-key-list" class="space-y-2">
            </div>
            <button id="save-matching-key" class="bg-blue-500 text-white p-2 rounded">Save</button>
        </div>


        <div id="image-upload-container" class="hidden bg-gray-100 p-4 rounded mb-4">
            <div class="flex items-center">
                <h2 class="text-xl font-semibold">Upload an image for each master key</h2>
                <button id="add-file-upload" class="ml-2 text-blue-500 hover:text-blue-700">
                    <i class="fas fa-plus"></i>
                </button>
            </div>
            <div id="image-file-inputs" class="space-y-2">
            </div>
        </div>

        <div id="file-inputs-container" class="mb-4 mt-4">
        </div>

        <button id="add-answer-btn" class="bg-gray-200 p-3 rounded-lg shadow-sm mb-2">+ Add Answer</button>
        <button id="add-file-btn" class="bg-gray-200 p-3 rounded-lg shadow-sm mb-2">+ Add File</button>
        <button id="submit-question-btn" class="bg-blue-700 text-gray-100 p-3 rounded-lg shadow-lg hover:bg-blue-800">Submit Question</button>
    </div>
</div>
