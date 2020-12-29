<nav x-data="{ open: false }" class="bg-white border-b border-gray-100">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                <!-- Logo -->
                <div class="flex-shrink-0 flex items-center">
                    <a href="{{ route('dashboard') }}">
                        <x-jet-application-mark class="block h-9 w-auto" />
                    </a>
                </div>

                <!-- Navigation Links -->
                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                    <x-jet-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
                        {{ __('Dashboard') }}
                    </x-jet-nav-link>
                    <x-jet-nav-link href="{{ route('user.countries') }}" :active="request()->routeIs('user.countries')">
                        {{ __('List Country') }}
                    </x-jet-nav-link>
                    <x-jet-nav-link href="{{ route('user.countries.create') }}" :active="request()->routeIs('user.countries.create')">
                        {{ __('Create Country') }}
                    </x-jet-nav-link>
                    <x-jet-nav-link href="{{ route('admin.countries') }}" :active="request()->routeIs('admin.countries')">
                        {{ __('Admin') }}
                    </x-jet-nav-link>
                    <x-jet-nav-link href="{{ route('mail') }}" :active="request()->routeIs('mail')">
                        {{ __('Send Mail') }}
                    </x-jet-nav-link>

                </div>
            </div>

            <!-- Settings Dropdown -->
            <div class="hidden sm:flex sm:items-center sm:ml-6">

                <x-jet-dropdown align="right" width="48">
                    <x-slot name="trigger">


                        @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                            <button class="flex text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300 transition duration-150 ease-in-out">
                                <img class="h-8 w-8 rounded-full object-cover" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
                            </button>
                        @else


                            <button class="flex items-center text-sm font-medium text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out">
                                <div>{{ Auth::user()->name }}</div>

                                <div class="ml-1">
                                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                    </svg>
                                </div>
                            </button>
                        @endif
                    </x-slot>

                    <x-slot name="content">
                        <!-- Account Management -->

                        <div class="block px-4 py-2 text-xs text-gray-400">
                            {{ __('Manage Account') }}
                        </div>

                        <x-jet-dropdown-link href="{{ route('profile.show') }}">
                            {{ __('Profile') }}
                        </x-jet-dropdown-link>


                        @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
                            <x-jet-dropdown-link href="{{ route('api-tokens.index') }}">
                                {{ __('API Tokens') }}
                            </x-jet-dropdown-link>
                        @endif

                        <div class="border-t border-gray-100"></div>

                        <!-- Team Management -->
                        @if (Laravel\Jetstream\Jetstream::hasTeamFeatures())
                            <div class="block px-4 py-2 text-xs text-gray-400">
                                {{ __('Manage Team') }}
                            </div>

                            <!-- Team Settings -->
                            <x-jet-dropdown-link href="{{ route('teams.show', Auth::user()->currentTeam->id) }}">
                                {{ __('Team Settings') }}
                            </x-jet-dropdown-link>

                            @can('create', Laravel\Jetstream\Jetstream::newTeamModel())
                                <x-jet-dropdown-link href="{{ route('teams.create') }}">
                                    {{ __('Create New Team') }}
                                </x-jet-dropdown-link>
                            @endcan

                            <div class="border-t border-gray-100"></div>

                            <!-- Team Switcher -->
                            <div class="block px-4 py-2 text-xs text-gray-400">
                                {{ __('Switch Teams') }}
                            </div>

                            @foreach (Auth::user()->allTeams() as $team)
                                <x-jet-switchable-team :team="$team" />
                            @endforeach

                            <div class="border-t border-gray-100"></div>
                        @endif

                        <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-jet-dropdown-link href="{{ route('logout') }}"
                                                onclick="event.preventDefault();
                                                            this.closest('form').submit();">
                                {{ __('Logout') }}
                            </x-jet-dropdown-link>
                        </form>
                        <x-jet-dropdown-link href="{{ route('language.index', ['vi']) }}">
                            <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAARMAAAC3CAMAAAAGjUrGAAAAh1BMVEXaJR3//wDZEx7qlxTXAB7ZHR3aIB3//QDzxg7pkBXZGB3YCx7rmxTqlhTbKB320wz1zg3iZBnwtxD99wPhXRn88QXiaRj54gntpxLjcBjkdhf65gjcMxzurBL76wfsohP43AroihXnhBbmfhfvshHgVRrfTRvyvw/dPBv10AzzyA7wthHeSBszN/CXAAAEGElEQVR4nO3d6XaiQBAFYLst2hHc17jFJTFxEt//+UZEkIYGcZmjVN/v98wcqPE22FRJpQIAAAAAAAAAAAAAAAAAAAAAAAAAZ61nH8DroT/07EN4NWondurZB/FiZEM05LMP4sXQWIwRHo2aCyHmCE+cbB5q0kR44mh1qMkK4YlRLeFrITxnsn6sSR3hOTtGR4g2whNRSgQUwhOS61NN1ghPiNqnmiA8EVeE3GcfyqtwN1FNNihKgDpRTToIT8ATZ96zD+Y1uB+xmnwgPD76idXkB+HxkYhDTQ7cqVaTKcLjb05rNcFWdSUZHYTnwJ0kajJBeOg7UZNvfFColqhJzfqaOCORNHKefVBP5iWjcwiP7ff3qeggPE43VRIhunaHx+sZatKzOzzUN9Skb3V4nIGhJEIMbA6P92msyafN4aGhsSZDi8PjbI0lEWLLMDyOLIQWGTVZULF/oESlcybLahF1c3QO4akX+vvLaYmK4ppuOx6vV6ptBRql79kfblSypdh12pdP6i5tVboH7oqa/7UkVSpjX4b3lbWE3m/4VbLchJzUvuKjfFOJLjgJNL18fjf4KOmHJCDn44dXZDwv3eKqU/T24JK8lXJx1dHAtEdyq9qg1LkJubJz+VwL+uuW6tY1m6L1g0pSZ5CbkLd7f0BFhntWe00O3f+tsFfimxIzSj4rv9aExeKqk63VHRVZtUp+U2KmqHFzSZaMFlcdbW+7VelvGeYm5Hh/Llcg5cfjtrjqaHO5Bgkbxh+SgJzPrqrIbMdycdWpzCcYJp9sF1cddYsutf2ybUPfjoqutBY1y3qXq3HC6gtOHm0QI581YxraIEY+a8Y0kt3keSypiXvNZr4lYxqFrzo+S64810THkvCkBjHyWTGmceUDUyvGNAzd5Hls6DQ3DGLks2BMw9hNnseCTvMro2NDp7lxEOMoc+llP6bh/ZpPfLilrLamX+7hMQ5iHG5XPafiZNzgcg9PxiDGaRuazJsIzMc0jIMYs6jxyLyBzXxMwzSIsYhtQxs3sHmPaRgGMWpd/Yypm75YcxzTiHipT0E71XjkuqkO7AXn8KSi0zQ8vlFUtyg8ap8414zGI2+fqN2e74MvqfeFZndDJzuw3/g+HyWtq22alwi9A/udbXi06IwvNB7JVrwDm2145PJ8kpcbjxTF/zjX8FB0k1qs8SjW1jRjGh61C8+wI4ttPLte1IHN9IUAMmzxWxf/T486sJm+EICCRfN9d81dadiBzfOFAMef9Rfi98rGI0XBV2mWLwSQVf/Ubmg8CuZyqxzD4/82+eqm+VepVjxfCOD/rH/jxoY9RVWWLwSQjf4d86/01Wd45XGrd/0KhSOrDB+m33tKDEsCAAAAAAAAAAAAAAAAAAAAAAAAAAAAAADAzD+q9i3I9cDwkgAAAABJRU5ErkJggg==" alt="" class="logo">

                        </x-jet-dropdown-link>
                        <x-jet-dropdown-link href="{{ route('language.index', ['en']) }}">
                            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/ae/Flag_of_the_United_Kingdom.svg/300px-Flag_of_the_United_Kingdom.svg.png" alt="" class="logo">
                        </x-jet-dropdown-link>


                    </x-slot>
                </x-jet-dropdown>
            </div>

            <!-- Hamburger -->
            <div class="-mr-2 flex items-center sm:hidden">
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
            <x-jet-responsive-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
                {{ __('Dashboard') }}
            </x-jet-responsive-nav-link>
        </div>

        <!-- Responsive Settings Options -->
        <div class="pt-4 pb-1 border-t border-gray-200">
            <div class="flex items-center px-4">
                <div class="flex-shrink-0">
                    <img class="h-10 w-10 rounded-full" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
                </div>

                <div class="ml-3">
                    <div class="font-medium text-base text-gray-800">{{ Auth::user()->name }}</div>
                    <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
                </div>
            </div>

            <div class="mt-3 space-y-1">
                <!-- Account Management -->
                <x-jet-responsive-nav-link href="{{ route('profile.show') }}" :active="request()->routeIs('profile.show')">
                    {{ __('Profile') }}
                </x-jet-responsive-nav-link>

                @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
                    <x-jet-responsive-nav-link href="{{ route('api-tokens.index') }}" :active="request()->routeIs('api-tokens.index')">
                        {{ __('API Tokens') }}
                    </x-jet-responsive-nav-link>
                @endif

                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-jet-responsive-nav-link href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                        {{ __('Logout') }}
                    </x-jet-responsive-nav-link>
                </form>



                <!-- Team Management -->
                @if (Laravel\Jetstream\Jetstream::hasTeamFeatures())
                    <div class="border-t border-gray-200"></div>

                    <div class="block px-4 py-2 text-xs text-gray-400">
                        {{ __('Manage Team') }}
                    </div>

                    <!-- Team Settings -->
                    <x-jet-responsive-nav-link href="{{ route('teams.show', Auth::user()->currentTeam->id) }}" :active="request()->routeIs('teams.show')">
                        {{ __('Team Settings') }}
                    </x-jet-responsive-nav-link>

                    <x-jet-responsive-nav-link href="{{ route('teams.create') }}" :active="request()->routeIs('teams.create')">
                        {{ __('Create New Team') }}
                    </x-jet-responsive-nav-link>

                    <div class="border-t border-gray-200"></div>

                    <!-- Team Switcher -->
                    <div class="block px-4 py-2 text-xs text-gray-400">
                        {{ __('Switch Teams') }}
                    </div>

                    @foreach (Auth::user()->allTeams() as $team)
                        <x-jet-switchable-team :team="$team" component="jet-responsive-nav-link" />
                    @endforeach
                @endif
            </div>
        </div>
    </div>
</nav>
