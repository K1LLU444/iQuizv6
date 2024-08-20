@extends('layouts.admin')

@section('title', 'Questionnaires')

@section('content')
<div class="max-w-5xl mx-auto bg-white p-8 rounded-lg shadow-md">
    <a href="#" class="text-indigo-600 hover:text-indigo-700 font-medium mb-6 inline-block">&larr; Back</a>
    <div>
        <h1 class="text-3xl font-semibold mb-6">Questionnaires</h1>
        <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50">
                <tr>
                    <th class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">Name</th>
                    <th class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">Number of Items</th>
                    <th class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">Time Interval</th>
                    <th class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">Passing Grade</th>
                    <th class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">Category</th>
                    <th class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">Trainer</th>
                    <th class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                <tr>
                    <td class="px-6 py-4 text-center whitespace-nowrap">Questionnaire 1</td>
                    <td class="px-6 py-4 text-center whitespace-nowrap">10</td>
                    <td class="px-6 py-4 text-center whitespace-nowrap">30 mins</td>
                    <td class="px-6 py-4 text-center whitespace-nowrap">75%</td>
                    <td class="px-6 py-4 text-center whitespace-nowrap">Category 1</td>
                    <td class="px-6 py-4 text-center whitespace-nowrap">Trainer 1</td>
                    <td class="px-6 py-4 text-center whitespace-nowrap">
                        <a href="#" class="text-indigo-600 hover:text-indigo-700 mr-4">Edit</a>
                        <a href="#" class="text-red-600 hover:text-red-700">Delete</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection
