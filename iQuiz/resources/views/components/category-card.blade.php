<div class="category-card relative bg-white p-6 rounded-lg shadow-lg">
    <a href="{{ $url }}">
        <h5 class="mb-2 text-2xl font-bold tracking-tight text-[#261212]">
            {{ $title }}
        </h5>
    </a>
    <hr class="my-4 border-gray-300">
    <p class="mb-24 font-normal text-[#261212]">
        {{ $description }}
    </p>
    <div class="absolute bottom-4 right-4">
        <a href="{{ $url }}" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300">
            {{ $buttonText }}
            <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
            </svg>
        </a>
    </div>
    <div class="absolute bottom-4 left-6 space-y-2 text-sm font-medium text-[#261212]">
        <p><strong>Passing Score:</strong> {{ $passingScore ?? 'N/A' }}</p>
        <p><strong>No. of Items:</strong> {{ $numItems ?? 'N/A' }}</p>
        <p><strong>Time Limit:</strong> {{ $timeLimit ?? 'N/A' }}</p>
    </div>
</div>
