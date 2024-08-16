<!-- resources/views/admin/all-categories.blade.php -->

@extends('layouts.admin')

@section('title', 'All Categories')

@section('content')
        
        <main class="flex-1 p-6">
            <header class="mb-6">
                <h1 class="text-3xl font-bold text-gray-800">All Categories</h1>
            </header>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="bg-white p-6 rounded-lg shadow-lg hover:shadow-xl transition ease-in-out duration-300">
                    <h2 class="text-2xl font-semibold text-gray-900 mb-3">Microsoft Azure</h2>
                    <p class="text-gray-700 mb-3">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quibusdam dicta odio laudantium obcaecati veritatis minima placeat aperiam, exercitationem eligendi suscipit nihil beatae officia doloremque molestias cumque, hic mollitia, esse fugiat!</p>
                    <p class="text-gray-800"><strong class="font-semibold">Trainer: </strong>Jameer Aguilar</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-lg hover:shadow-xl transition ease-in-out duration-300">
                    <h2 class="text-2xl font-semibold text-gray-900 mb-3">ITILv4 Foundations</h2>
                    <p class="text-gray-700 mb-3">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Blanditiis veritatis, doloremque mollitia iure autem veniam quibusdam assumenda maxime architecto rem odit tenetur quo quam accusamus, magni, labore saepe possimus eaque.</p>
                    <p class="text-gray-800"><strong class="font-semibold">Trainer: </strong>Jameer Aguilar</p>
                </div>
            </div>
        </main>

@endsection
