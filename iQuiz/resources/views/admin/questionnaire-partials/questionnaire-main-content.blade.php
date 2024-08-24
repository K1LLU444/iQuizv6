<div class="flex-1 p-4">
    <h3 class="text-lg font-semibold mb-4">Build Questions</h3>
    <form action="#" method="POST">
        @csrf
        <div class="bg-white p-4 rounded border">
            <input type="text" name="question" placeholder="Question" class="w-full p-2 border rounded mb-4" required>

            <div id="answers-container">
                <div class="answer-group mb-4">
                    <input type="text" name="answers[]" placeholder="Answer" class="w-full p-2 border rounded" required>
                </div>
            </div>

            <button type="button" id="add-answer-btn" class="bg-gray-200 p-2 rounded">+ Add Answer</button>
            <button type="submit" class="bg-button-bg text-white p-2 rounded mt-4">Save Question</button>
        </div>
    </form>
</div>

<script>
    document.getElementById('add-answer-btn').addEventListener('click', function() {
        const newAnswerGroup = document.createElement('div');
        newAnswerGroup.className = 'answer-group mb-4';

        const newInput = document.createElement('input');
        newInput.type = 'text';
        newInput.name = 'answers[]';  // Ensure name attribute is an array for multiple values
        newInput.placeholder = 'Answer';
        newInput.className = 'w-full p-2 border rounded';

        newAnswerGroup.appendChild(newInput);
        document.getElementById('answers-container').appendChild(newAnswerGroup);
    });
</script>
