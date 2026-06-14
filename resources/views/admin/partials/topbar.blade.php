<header class="flex h-20 items-center justify-between bg-white/80 backdrop-blur-md px-6 shadow-sm border-b border-gray-100 z-30 sticky top-0">
    <div class="flex items-center gap-4">
        <!-- Mobile menu button -->
        <button @click="sidebarOpen = true" class="rounded-xl p-2 text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-primary lg:hidden transition-colors">
            <i class="fa-solid fa-bars text-xl"></i>
        </button>

        <!-- Breadcrumbs -->
        <div class="hidden md:flex items-center gap-2 text-sm text-gray-500 font-medium">
            <a href="{{ route('admin.dashboard') }}" class="hover:text-primary transition-colors">
                <i class="fa-solid fa-home"></i>
            </a>
            @isset($breadcrumbs)
                @foreach($breadcrumbs as $breadcrumb)
                    <span class="text-gray-300"><i class="fa-solid fa-chevron-right text-xs"></i></span>
                    @if(!$loop->last)
                        <a href="{{ $breadcrumb['url'] }}" class="hover:text-primary transition-colors">{{ $breadcrumb['label'] }}</a>
                    @else
                        <span class="text-gray-900 font-semibold">{{ $breadcrumb['label'] }}</span>
                    @endif
                @endforeach
            @else
                <span class="text-gray-300"><i class="fa-solid fa-chevron-right text-xs"></i></span>
                <span class="text-gray-900 font-semibold">@yield('title', 'Dashboard')</span>
            @endisset
        </div>
    </div>

    <div class="flex items-center gap-4 lg:gap-6">
        <!-- Clock / Date Realtime (AlpineJS) -->
        <div x-data="clock()" x-init="start()" class="hidden sm:flex items-center gap-2 text-sm text-gray-600 font-medium bg-gray-50 px-4 py-2 rounded-lg border border-gray-100">
            <i class="fa-regular fa-calendar text-primary"></i>
            <span x-text="date"></span>
            <span class="text-gray-300">|</span>
            <i class="fa-regular fa-clock text-primary"></i>
            <span x-text="time"></span>
        </div>

        <!-- Notification / Alerts placeholder -->
        <button class="relative rounded-full p-2 text-gray-400 hover:bg-gray-100 hover:text-gray-600 transition-colors">
            <i class="fa-regular fa-bell text-xl"></i>
            <span class="absolute top-1.5 right-1.5 flex h-2.5 w-2.5">
                <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-accent opacity-75"></span>
                <span class="relative inline-flex rounded-full h-2.5 w-2.5 bg-accent"></span>
            </span>
        </button>

        <!-- Profile Dropdown -->
        <div class="relative" x-data="{ open: false }">
            <button @click="open = !open" @click.away="open = false" class="flex items-center gap-3 focus:outline-none">
                <div class="hidden md:block text-right">
                    <p class="text-sm font-bold text-gray-900 leading-tight">{{ Auth::user()->name }}</p>
                    <p class="text-xs text-gray-500">Admin</p>
                </div>
                <div class="h-10 w-10 rounded-full bg-primary flex items-center justify-center text-white font-bold ring-4 ring-primary/10 shadow-sm">
                    {{ substr(Auth::user()->name, 0, 1) }}
                </div>
                <i class="fa-solid fa-chevron-down text-gray-400 text-xs hidden md:block"></i>
            </button>

            <!-- Dropdown Menu -->
            <div x-show="open" 
                 x-transition:enter="transition ease-out duration-200"
                 x-transition:enter-start="transform opacity-0 scale-95 translate-y-2"
                 x-transition:enter-end="transform opacity-100 scale-100 translate-y-0"
                 x-transition:leave="transition ease-in duration-75"
                 x-transition:leave-start="transform opacity-100 scale-100 translate-y-0"
                 x-transition:leave-end="transform opacity-0 scale-95 translate-y-2"
                 class="absolute right-0 mt-3 w-48 rounded-xl bg-white shadow-xl ring-1 ring-black ring-opacity-5 divide-y divide-gray-100 focus:outline-none" style="display: none;">
                <div class="px-4 py-3 md:hidden">
                    <p class="text-sm text-gray-900 font-semibold">{{ Auth::user()->name }}</p>
                    <p class="text-xs text-gray-500 font-medium truncate">{{ Auth::user()->email }}</p>
                </div>
                <div class="py-1">
                    <a href="{{ route('admin.profile.index') }}" class="group flex items-center px-4 py-2 text-sm text-gray-700 hover:bg-gray-50 hover:text-primary transition-colors">
                        <i class="fa-regular fa-user mr-3 text-gray-400 group-hover:text-primary"></i>
                        Profil Admin
                    </a>
                </div>
                <div class="py-1">
                    <form method="POST" action="{{ route('admin.logout') }}">
                        @csrf
                        <button type="submit" class="group flex w-full items-center px-4 py-2 text-sm text-red-600 hover:bg-red-50 transition-colors">
                            <i class="fa-solid fa-right-from-bracket mr-3 text-red-400 group-hover:text-red-600"></i>
                            Keluar
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</header>

<script>
    document.addEventListener('alpine:init', () => {
        Alpine.data('clock', () => ({
            time: '',
            date: '',
            start() {
                this.updateClock();
                setInterval(() => {
                    this.updateClock();
                }, 1000);
            },
            updateClock() {
                const now = new Date();
                this.time = now.toLocaleTimeString('id-ID', { hour: '2-digit', minute: '2-digit' });
                this.date = now.toLocaleDateString('id-ID', { weekday: 'short', day: '2-digit', month: 'short', year: 'numeric' });
            }
        }));
    });
</script>
