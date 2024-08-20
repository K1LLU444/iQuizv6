@extends('layouts.admin')

@section('title', 'Create Questionnaire')

@section('content')
<div class="max-w-4xl mx-auto bg-white p-8 rounded-lg shadow-md">
    <a href="#" class="text-indigo-600 hover:text-indigo-700 font-medium mb-6 inline-block">&larr; Back</a>

    <h1 class="text-3xl font-semibold mb-6">Create Questionnaire</h1>

    <form action="#" method="POST" class="space-y-6">
        @csrf

        <div class="grid grid-cols-1 gap-6">
            <!-- Questionnaire Name spanning full width -->
            <div class="flex items-center">
                <label for="name" class="w-1/4 text-lg font-medium text-gray-700">Questionnaire Name:</label>
                <input type="text" id="name" name="name" class="block w-3/4 border border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm p-2" required>
            </div>

            <!-- Remaining fields in two columns -->
            <div class="grid grid-cols-2 gap-6">
                <div class="flex items-center">
                    <label for="number_of_items" class="w-full text-lg font-medium text-gray-700">Number of Items:</label>
                    <input type="number" id="number_of_items" name="number_of_items" class="block w-full border border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm p-2" required>
                </div>

                <div class="flex items-center">
                    <label for="time_interval" class="w-full text-lg font-medium text-gray-700">Time Interval (mins):</label>
                    <input type="number" id="time_interval" name="time_interval" class="block w-full border border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm p-2" required>
                </div>

                <div class="flex items-center">
                    <label for="passing_grade" class="w-full text-lg font-medium text-gray-700">Passing Grade (%):</label>
                    <input type="number" id="passing_grade" name="passing_grade" class="block w-full border border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm p-2" required>
                </div>

                <div class="flex items-center">
                    <label for="category" class="w-full text-lg font-medium text-gray-700">Category:</label>
                    <select id="category" name="category_id" class="block w-full border border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm p-2" required>
                        <option value="" disabled selected>Select a category</option>
                        <option value="1">Category 1</option>
                        <option value="2">Category 2</option>
                        <option value="3">Category 3</option>
                    </select>
                </div>

                <div class="flex items-center">
                    <label for="trainer" class="w-full text-lg font-medium text-gray-700">Trainer Name:</label>
                    <select id="trainer" name="trainer_id" class="block w-full border border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm p-2" required>
                        <option value="" disabled selected>Select a trainer</option>
                        <option value="1">Trainer 1</option>
                        <option value="2">Trainer 2</option>
                        <option value="3">Trainer 3</option>
                    </select>
                </div>

                <div class="flex items-center">
                    <label for="shuffle" class="w-1/6 text-lg font-medium text-gray-700">Shuffle:</label>
                    <input type="checkbox" id="shuffle" name="shuffle" class="border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500" />
                </div>
            </div>
        </div>

        <div>
            <button type="submit" class="bg-indigo-600 text-white px-4 py-2 mt-6 rounded-md shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Submit</button>
        </div>
    </form>
</div>
@endsection
