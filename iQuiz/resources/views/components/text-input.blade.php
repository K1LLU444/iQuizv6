@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'border-gray-700 bg-gray-400 text-gray-900 focus:border-indigo-500 focus:border-indigo-600 focus:ring-indigo-500 focus:ring-indigo-600 rounded-md shadow-sm']) !!}>
