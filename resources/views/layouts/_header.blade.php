<header class="shadow-sm">
    <div class="flex flex-row justify-between items-center w-1/2 mx-auto">
        <div class="font-bold text-2xl p-4">
            <a href="{{ url('/') }}" class="inline-block">Oung</a>
        </div>
        <div class="flex flex-row items-center">
            @auth
                {{-- <a href="#" class="text-s">{{ \Carbon\Carbon::now()->settings(['toStringFormat' => 'g:i a']) }}</a> --}}
                <a href="#" class="px-4 py-2 bg-gray-700 text-white text-xs">PRO</a>
                <a href="{{ route('profile.index') }}" class="p-4">{{ auth()->user()->name }}</a>
                {{-- <div class="relative">
                    <button class="p-4 block">                        
                        {{ auth()->user()->name }}
                    </button>
                    <div class="flex flex-col bg-white shadow py-2 absolute right-0 mr-4 w-32">
                        <a href="#" class="px-4 py-2 block">Profile</a>
                        <a href="#" class="px-4 py-2 block">Settings</a>
                        <a href="#" class="px-4 py-2 block">Logout</a>
                    </div>
                </div> --}}
    
            @else
                <a href="{{ route('login') }}" class="p-4 inline-block">Login</a>
                <a href="{{ route('register') }}" class="p-4 inline-block">Register</a>
            @endauth

        </div>
    </div>
</header>