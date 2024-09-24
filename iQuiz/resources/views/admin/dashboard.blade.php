@extends('layouts.admin')

@section('title', 'Admin Dashboard')

@section('content')


    <div class="container mx-auto p-6">

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <!-- Categories Section -->
            <div class="bg-white p-4 rounded shadow">
                <h2 class="text-lg font-semibold mb-4">Categories</h2>
                <div class="bg-gray-200 p-4 rounded mb-2 flex flex-col items-center hover:bg-gray-300 transition duration-300 ease-in-out">
                    <i class="fas fa-plus-circle text-custombg-gray text-3xl mb-2"></i>
                    <span>Add Category</span>
                </div>
                <div class="bg-gray-200 p-4 rounded mb-2 flex flex-col items-center hover:bg-gray-300 transition duration-300 ease-in-out">
                    <i class="fas fa-list text-custombg-gray text-3xl mb-2"></i>
                    <span>View All Categories</span>
                </div>
            </div>

            <!-- Questionnaires Section -->
            <div class="bg-white p-4 rounded shadow">
                <h2 class="text-lg font-semibold mb-4">Questionnaires</h2>
                <div class="bg-gray-200 p-4 rounded mb-2 flex flex-col items-center hover:bg-gray-300 transition duration-300 ease-in-out">
                    <i class="fas fa-plus-square text-custombg-gray text-3xl mb-2"></i>
                    <span>Add Questionnaire</span>
                </div>
                <div class="bg-gray-200 p-4 rounded mb-2 flex flex-col items-center hover:bg-gray-300 transition duration-300 ease-in-out">
                    <i class="fas fa-list-alt text-custombg-gray text-3xl mb-2"></i>
                    <span>View Questionnaires</span>
                </div>
                <div class="bg-gray-200 p-4 rounded mb-2 flex flex-col items-center hover:bg-gray-300 transition duration-300 ease-in-out">
                    <i class="fas fa-question-circle text-custombg-gray text-3xl mb-2"></i>
                    <span>Student Exam Request</span>
                </div>
            </div>

            <!-- Manage Users Section -->
            <div class="bg-white p-4 rounded shadow">
                <h2 class="text-lg font-semibold mb-4">Manage Users</h2>
                <div class="bg-gray-200 p-4 rounded mb-2 flex flex-col items-center hover:bg-gray-300 transition duration-300 ease-in-out">
                    <i class="fas fa-user-plus text-custombg-gray text-3xl mb-2"></i>
                    <span>Add Trainer</span>
                </div>
                <div class="bg-gray-200 p-4 rounded mb-2 flex flex-col items-center hover:bg-gray-300 transition duration-300 ease-in-out">
                    <i class="fas fa-users text-custombg-gray text-3xl mb-2"></i>
                    <span>View All Trainers</span>
                </div>
                <div class="bg-gray-200 p-4 rounded mb-2 flex flex-col items-center hover:bg-gray-300 transition duration-300 ease-in-out">
                    <i class="fas fa-user-gear text-custombg-gray text-3xl mb-2"></i>
                    <span>View All Students</span>
                </div>
            </div>
        </div>
    </div>



@endsection
