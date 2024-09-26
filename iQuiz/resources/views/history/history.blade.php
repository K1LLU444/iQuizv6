@extends('layouts.app')

@section('title', 'Form Elements')

@section('content')
    <div class="container mx-auto p-6">
        <h2 class="text-xl font-semibold mb-4">History of Tests</h2>

        <div class="bg-white shadow-md rounded-lg p-6">
            <table class="min-w-full table-auto border-collapse">
                <thead>
                    <tr class="bg-gray-200">
                        <th class="px-4 py-2 border">Exam Name</th>
                        <th class="px-4 py-2 border">Score</th>
                        <th class="px-4 py-2 border">Date</th>
                        <th class="px-4 py-2 border">Status</th>
                        <th class="px-4 py-2 border">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="px-4 py-2 border">Ms Azure</td>
                        <td class="px-4 py-2 border">85/100</td>
                        <td class="px-4 py-2 border">2024-08-15</td>
                        <td class="px-4 py-2 border">
                            <span class="bg-green-100 text-green-800 px-2 py-1 rounded">Passed</span>
                        </td>
                        <td class="px-4 py-2 border">
                            <button class="px-2 py-1 rounded bg-blue-100 text-blue-700 hover:bg-blue-200 hover:text-blue-900 rounded inline-flex items-center">
                                Review
                                <i class="fa-solid fa-arrow-up-right-from-square ml-2"></i>
                            </button>
                        </td>

                    </tr>
                    <tr class="bg-gray-50">
                        <td class="px-4 py-2 border">Laravel</td>
                        <td class="px-4 py-2 border">65/100</td>
                        <td class="px-4 py-2 border">2024-08-18</td>
                        <td class="px-4 py-2 border">
                            <span class="bg-yellow-100 text-yellow-800 px-2 py-1 rounded">Pending</span>
                        </td>
                        <td class="px-4 py-2 border">
                            <button class="px-2 py-1 rounded bg-blue-100 text-blue-700 hover:bg-blue-200 hover:text-blue-900 rounded inline-flex items-center">
                                Review
                                <i class="fa-solid fa-arrow-up-right-from-square ml-2"></i>
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td class="px-4 py-2 border">PHP</td>
                        <td class="px-4 py-2 border">45/100</td>
                        <td class="px-4 py-2 border">2024-08-20</td>
                        <td class="px-4 py-2 border">
                            <span class="bg-red-100 text-red-800 px-2 py-1 rounded">Failed</span>
                        </td>
                        <td class="px-4 py-2 border">
                            <button class="px-2 py-1 rounded bg-blue-100 text-blue-700 hover:bg-blue-200 hover:text-blue-900 rounded inline-flex items-center">
                                Review
                                <i class="fa-solid fa-arrow-up-right-from-square ml-2"></i>
                            </button>
                        </td>
                    </tr>
                    <tr class="bg-gray-50">
                        <td class="px-4 py-2 border">SEO</td>
                        <td class="px-4 py-2 border">75/100</td>
                        <td class="px-4 py-2 border">2024-08-22</td>
                        <td class="px-4 py-2 border">
                            <span class="bg-green-100 text-green-800 px-2 py-1 rounded">Passed</span>
                        </td>
                        <td class="px-4 py-2 border">
                            <button class="px-2 py-1 rounded bg-blue-100 text-blue-700 hover:bg-blue-200 hover:text-blue-900 rounded inline-flex items-center">
                                Review
                                <i class="fa-solid fa-arrow-up-right-from-square ml-2"></i>
                            </button>
                        </td>
                    </tr>
                    <!-- Add more static rows as needed -->
                </tbody>
            </table>
        </div>
    </div>
@endsection
