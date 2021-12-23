<div class="flex justify-between p-6">
    <button class="text-2xl border border-gray-300" wire:click="goToPreviousMonth">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-gray-600" fill="none" viewBox="0 0 24 24"
             stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 19l-7-7 7-7m8 14l-7-7 7-7"/>
        </svg>
    </button>

    <h2 class="text-4xl text-gray-800">{{ $this->startsAt->format('M Y') }}</h2>

    <button class="text-2xl border border-gray-300" wire:click="goToNextMonth">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-gray-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 5l7 7-7 7M5 5l7 7-7 7"/>
        </svg>
    </button>


</div>
