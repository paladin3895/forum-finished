<a href="{{ route('dashboard.notifications.index') }}" class="relative w-8">
    @if($hasNotifications)
    <div class="relative flex items-center justify-center w-6 h-6">
        <span class="absolute inline-flex w-full h-full bg-primary-400 rounded-full opacity-75 animate-ping">
        </span>
        <span class="relative inline-flex w-4 h-4 text-primary-400 rounded-full">
            <x-zondicon-notifications-outline />
        </span>

    </div>
    <span class="absolute top-0 right-0 px-1 text-xs text-white bg-primary-500 rounded-full">
        <livewire:notifications.count />
    </span>
    @endif
</a>
