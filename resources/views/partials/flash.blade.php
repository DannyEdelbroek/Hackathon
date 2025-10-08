{{-- 
    Global Flash Messages System
    Displays all flash messages with auto-dismiss functionality
    Used globally across all pages for consistent messaging
--}}

@php
    $types = [
        'success' => [
            'classes' => 'bg-green-100 border-green-400 text-green-700',
            'icon' =>
                '<svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>',
            'duration' => 5000,
        ],
        'error' => [
            'classes' => 'bg-red-100 border-red-400 text-red-700',
            'icon' =>
                '<svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd"></path></svg>',
            'duration' => 7000,
        ],
        'warning' => [
            'classes' => 'bg-yellow-100 border-yellow-400 text-yellow-700',
            'icon' =>
                '<svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l5.58 9.92c.75 1.334-.213 2.98-1.742 2.98H4.42c-1.53 0-2.493-1.646-1.743-2.98l5.58-9.92zM11 13a1 1 0 11-2 0 1 1 0 012 0zm-1-8a1 1 0 00-1 1v3a1 1 0 002 0V6a1 1 0 00-1-1z" clip-rule="evenodd"></path></svg>',
            'duration' => 6000,
        ],
        'info' => [
            'classes' => 'bg-blue-100 border-blue-400 text-blue-700',
            'icon' =>
                '<svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>',
            'duration' => 5000,
        ],
    ];
@endphp

@foreach ($types as $type => $config)
    @if (session()->has($type))
        <div class="fixed inset-x-0 top-4 z-50 flex justify-center" data-flash="{{ $type }}"
            data-duration="{{ $config['duration'] }}">
            <div
                class="flex items-center px-6 py-4 border rounded-lg shadow-lg max-w-md w-full mx-4 {{ $config['classes'] }} transform transition-all duration-300 ease-in-out animate-fade-in-down">
                <!-- Icon -->
                <div class="flex-shrink-0">
                    {!! $config['icon'] !!}
                </div>

                <!-- Message -->
                <div class="flex-1">
                    {{ session($type) }}
                </div>

                <!-- Close Button -->
                <button type="button"
                    class="flex-shrink-0 ml-4 inline-flex text-sm rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 hover:opacity-75 transition-opacity duration-200"
                    onclick="dismissFlash(this.parentElement.parentElement)">
                    <span class="sr-only">Dismiss</span>
                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd"
                            d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                </button>
            </div>
        </div>
    @endif
@endforeach

{{-- JavaScript for auto-dismiss and manual close functionality --}}
@push('scripts')
    @vite('resources/js/flashMessages.js')
@endpush
