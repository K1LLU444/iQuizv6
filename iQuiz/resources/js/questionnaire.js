document.addEventListener('DOMContentLoaded', function() {
    const variantSelect = document.getElementById('variant-select');
    const answersContainer = document.getElementById('answers-container');
    const addAnswerBtn = document.getElementById('add-answer-btn');

    function updateAnswersContainer() {
        const selectedVariant = variantSelect.value;
        answersContainer.innerHTML = ''; // Clear existing answer inputs

        if (selectedVariant === 'drag-drop') {
            addDragDropItem(); // Initialize for drag-drop items
            Sortable.create(answersContainer, {
                animation: 150,
                handle: '.drag-handle',
                onEnd: function(evt) {
                    console.log('Reordered:', evt.oldIndex, evt.newIndex);
                }
            });
        } else if (selectedVariant === 'multiple-choice') {
            addMultipleChoiceItem(); // Initialize for multiple choice items
        } else if (selectedVariant === 'checkboxes') {
            addCheckboxItem(); // Initialize for checkbox items
        } else if (selectedVariant === 'text') {
            addTextItem(); // Initialize for text input items (identification)
        } else if (selectedVariant === 'paragraph') {
            addParagraphItem(); // Initialize for paragraph (essay) items
        }
    }

    function addDragDropItem() {
        const newDragDropItem = document.createElement('div');
        newDragDropItem.className = 'drag-drop-item mb-2 p-2 border rounded flex items-center';
        newDragDropItem.innerHTML = `
            <div class="drag-handle bg-blue-500 text-white p-2 rounded-l flex-shrink-0 cursor-grab">
                <i class="fas fa-grip-vertical"></i>
            </div>
            <input type="text" placeholder="New Option" class="w-full border rounded">
        `;
        answersContainer.appendChild(newDragDropItem);
    }

    function addMultipleChoiceItem() {
        const newMultipleChoiceItem = document.createElement('div');
        newMultipleChoiceItem.className = 'multiple-choice-item mb-2 p-2 border rounded flex items-center';
        newMultipleChoiceItem.innerHTML = `
            <input type="radio" name="multiple-choice" class="mr-2">
            <input type="text" placeholder="New Option" value="" class="w-full border-0 rounded">
        `;
        answersContainer.appendChild(newMultipleChoiceItem);
    }

    function addCheckboxItem() {
        const newCheckboxItem = document.createElement('div');
        newCheckboxItem.className = 'checkbox-item mb-2 p-2 border rounded flex items-center';
        newCheckboxItem.innerHTML = `
            <input type="checkbox" class="mr-2">
            <input type="text" placeholder="New Option" class="w-full border-0 rounded">
        `;
        answersContainer.appendChild(newCheckboxItem);
    }

    function addTextItem() {
        const newTextItem = document.createElement('div');
        newTextItem.className = 'text-item mb-2 p-2 border rounded flex items-center';
        newTextItem.innerHTML = `
            <input type="text" placeholder="Enter Answer" class="w-full border-0 rounded">
        `;
        answersContainer.appendChild(newTextItem);
    }

    function addParagraphItem() {
        const newParagraphItem = document.createElement('div');
        newParagraphItem.className = 'paragraph-item mb-2 p-2 border rounded flex items-center';
        newParagraphItem.innerHTML = `
            <textarea placeholder="Enter your answer" class="w-full border-0 rounded"></textarea>
        `;
        answersContainer.appendChild(newParagraphItem);
    }

    // Initialize answers container based on the default variant
    updateAnswersContainer();

    // Add event listener to update answers when variant changes
    variantSelect.addEventListener('change', function() {
        updateAnswersContainer();
    });

    // Add event listener to dynamically add one answer input
    addAnswerBtn.addEventListener('click', function() {
        const selectedVariant = variantSelect.value;
        if (selectedVariant === 'drag-drop') {
            addDragDropItem();
        } else if (selectedVariant === 'multiple-choice') {
            addMultipleChoiceItem();
        } else if (selectedVariant === 'checkboxes') {
            addCheckboxItem();
        } else if (selectedVariant === 'text') {
            addTextItem();
        } else if (selectedVariant === 'paragraph') {
            addParagraphItem();
        }
    });
});
