document.addEventListener('DOMContentLoaded', function() {
    const variantSelect = document.getElementById('variant-select');
    const answersContainer = document.getElementById('answers-container');
    const addAnswerBtn = document.getElementById('add-answer-btn');
    const matchingKeyContainer = document.getElementById('matching-key-container');
    const matchingKeyList = document.getElementById('matching-key-list');
    const saveMatchingKeyBtn = document.getElementById('save-matching-key');
    const reloadMatchingKeyBtn = document.getElementById('reload-matching-key');

    function updateAnswersContainer() {
        const selectedVariant = variantSelect.value;
        answersContainer.innerHTML = ''; // Clear existing answer inputs

        // Hide the matching key container if it's not relevant
        matchingKeyContainer.classList.add('hidden');

        if (selectedVariant === 'matching') {
            addMatchingItem();
        } else if (selectedVariant === 'drag-drop') {
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
    }

    function createDeleteButton(container) {
        const deleteButton = document.createElement('button');
        deleteButton.className = 'delete-button text-red-500 hover:text-red-700';
        deleteButton.innerHTML = '&times;'; // Unicode for multiplication sign
        deleteButton.addEventListener('click', function() {
            container.remove();
            createMatchingKey(); // Update matching key list after removal if matching variant is active
        });
        return deleteButton;
    }

    function addMatchingItem() {
        const matchingItemContainer = document.createElement('div');
        matchingItemContainer.className = 'matching-item-container mb-2 p-2 border rounded grid grid-cols-2 gap-4';

        const leftSide = document.createElement('div');
        leftSide.className = 'matching-left-side';

        const rightSide = document.createElement('div');
        rightSide.className = 'matching-right-side';

        // Add buttons to add items
        const addButtonContainer = document.createElement('div');
        addButtonContainer.className = 'flex justify-between items-center mb-2';

        const addLeftButton = document.createElement('button');
        addLeftButton.className = 'bg-blue-500 text-white p-2 rounded mr-2';
        addLeftButton.textContent = '+ Add Left Item';
        addLeftButton.addEventListener('click', function() {
            addLeftItem(leftSide);
        });

        const addRightButton = document.createElement('button');
        addRightButton.className = 'bg-yellow-500 text-white p-2 rounded';
        addRightButton.textContent = '+ Add Right Item';
        addRightButton.addEventListener('click', function() {
            addRightItem(rightSide);
        });

        addButtonContainer.appendChild(addLeftButton);
        addButtonContainer.appendChild(addRightButton);
        answersContainer.appendChild(addButtonContainer);

        matchingItemContainer.appendChild(leftSide);
        matchingItemContainer.appendChild(rightSide);

        answersContainer.appendChild(matchingItemContainer);

        // Add initial items
        addLeftItem(leftSide);
        addRightItem(rightSide);

        // Show matching key section
        matchingKeyContainer.classList.remove('hidden');
        createMatchingKey();
    }

    function addLeftItem(leftSide) {
        const letter = String.fromCharCode(65 + leftSide.children.length); // A, B, C, etc.

        const newMatchingItemLeft = document.createElement('div');
        newMatchingItemLeft.className = 'matching-item-left mb-2 p-2 border rounded flex items-center';
        newMatchingItemLeft.innerHTML = `<input type="text" value="${letter}" class="w-full border-0 rounded bg-gray-200">`;
        newMatchingItemLeft.appendChild(createDeleteButton(newMatchingItemLeft));

        leftSide.appendChild(newMatchingItemLeft);
        createMatchingKey(); // Update matching key
    }

    function addRightItem(rightSide) {
        const newMatchingItemRight = document.createElement('div');
        newMatchingItemRight.className = 'matching-item-right mb-2 p-2 border rounded flex items-center';
        newMatchingItemRight.innerHTML = `<input type="text" placeholder="Description" class="w-full border-0 rounded">`;
        newMatchingItemRight.appendChild(createDeleteButton(newMatchingItemRight));

        rightSide.appendChild(newMatchingItemRight);
        createMatchingKey(); // Update matching key
    }

    function createMatchingKey() {
        matchingKeyList.innerHTML = ''; // Clear existing keys

        const leftItems = Array.from(document.querySelectorAll('.matching-left-side input'));
        const rightItems = Array.from(document.querySelectorAll('.matching-right-side input'));

        leftItems.forEach((leftItem) => {
            const keyItem = document.createElement('div');
            keyItem.className = 'matching-key-item mb-2 p-2 border rounded flex items-center justify-between';

            const leftInput = document.createElement('input');
            leftInput.type = 'text';
            leftInput.value = leftItem.value;
            leftInput.className = 'w-1/2 border-0 rounded bg-gray-200';
            leftInput.disabled = true;

            const rightSelect = document.createElement('select');
            rightSelect.className = 'w-1/2 border rounded';

            // Ensure the select element is updated with fresh options
            function updateDropdown() {
                rightSelect.innerHTML = rightItems.map(item => `<option value="${item.value}">${item.value || 'No Description'}</option>`).join('');
            }

            updateDropdown();

            rightSelect.addEventListener('focus', updateDropdown); // Update on focus

            keyItem.appendChild(leftInput);
            keyItem.appendChild(rightSelect);

            matchingKeyList.appendChild(keyItem);
        });
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
        newDragDropItem.appendChild(createDeleteButton(newDragDropItem));
        answersContainer.appendChild(newDragDropItem);
    }

    function addMultipleChoiceItem() {
        const newMultipleChoiceItem = document.createElement('div');
        newMultipleChoiceItem.className = 'multiple-choice-item mb-2 p-2 border rounded flex items-center';
        newMultipleChoiceItem.innerHTML = `
            <input type="radio" name="multiple-choice" class="mr-2">
            <input type="text" placeholder="New Option" class="w-full border-0 rounded">
        `;
        newMultipleChoiceItem.appendChild(createDeleteButton(newMultipleChoiceItem));
        answersContainer.appendChild(newMultipleChoiceItem);
    }

    function addCheckboxItem() {
        const newCheckboxItem = document.createElement('div');
        newCheckboxItem.className = 'checkbox-item mb-2 p-2 border rounded flex items-center';
        newCheckboxItem.innerHTML = `
            <input type="checkbox" class="mr-2">
            <input type="text" placeholder="New Option" class="w-full border-0 rounded">
        `;
        newCheckboxItem.appendChild(createDeleteButton(newCheckboxItem));
        answersContainer.appendChild(newCheckboxItem);
    }

    function addTextItem() {
        const newTextItem = document.createElement('div');
        newTextItem.className = 'text-item mb-2 p-2 border rounded flex items-center';
        newTextItem.innerHTML = `
            <input type="text" placeholder="Short Text Answer" class="w-full border rounded">
        `;
        newTextItem.appendChild(createDeleteButton(newTextItem));
        answersContainer.appendChild(newTextItem);
    }

    function addParagraphItem() {
        const newParagraphItem = document.createElement('div');
        newParagraphItem.className = 'paragraph-item mb-2 p-2 border rounded flex items-center';
        newParagraphItem.innerHTML = `
            <textarea placeholder="Long Text Answer" class="w-full border rounded"></textarea>
        `;
        newParagraphItem.appendChild(createDeleteButton(newParagraphItem));
        answersContainer.appendChild(newParagraphItem);
    }

    variantSelect.addEventListener('change', updateAnswersContainer);
    addAnswerBtn.addEventListener('click', function() {
        const selectedVariant = variantSelect.value;
        if (selectedVariant === 'matching') {
            addMatchingItem();
        } else if (selectedVariant === 'drag-drop') {
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

    saveMatchingKeyBtn.addEventListener('click', function() {
        // Save matching keys logic here
    });

    reloadMatchingKeyBtn.addEventListener('click', function() {
        createMatchingKey();
    });
});