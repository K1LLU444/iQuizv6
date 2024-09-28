@extends('layouts.admin')

@section('title', 'Edit Category')

@section('content')
<div class="max-w-4xl mx-auto bg-white p-8 rounded-lg shadow-md">
<main class="flex-1 p-6">
    <a href="#" class="text-indigo-600 hover:text-indigo-700 font-medium mb-6 inline-block">&larr; Back</a>

    <header class="mb-6">
        <h1 class="text-3xl font-bold text-gray-800">Edit Category</h1>
    </header>

        <div class="mb-4">
            <label for="title" class="block text-gray-700 font-bold mb-2">Title:</label>
            <input type="text" name="title" id="title" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
        </div>
        
        <!-- Description -->
        <div class="mb-4">
            <label for="description" class="block text-gray-700 font-bold mb-2">Description:</label>
            <textarea name="description" id="description" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"></textarea>
        </div>
        
        <!-- Trainer -->
        <div class="mb-4">
            <label for="trainers" class="block text-gray-700 font-bold mb-2">Trainers:</label>
            <select id="trainers" multiple class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
   
                    <option>
			Nigel
                    </option>
  
            </select>
        </div>
        
        <!-- Submit Button -->
        <div class="flex justify-end">
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600 transition duration-200">Update Category</button>
        </div>
    </form>
</main>
</div>



@endsection
