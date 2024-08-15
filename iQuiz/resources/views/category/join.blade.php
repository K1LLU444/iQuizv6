@extends('layouts.app')

@section('title', 'Form Elements')

@section('content')

    <x-join-button>
        Join an exam
    </x-join-button>

    <div class="card-container mt-6">
        @foreach ($cards as $card)
            <x-category-card 
                title="{{ $card->title }}" 
                description="{!! $card->description !!}" 
                url="{{ $card->url }}" 
                buttonText="{{ $card->buttonText }}" 
            />
        @endforeach
    </div>

@endsection
