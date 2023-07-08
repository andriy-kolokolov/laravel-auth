<nav class="navbar navbar-expand-lg navbar-light bg-white border-bottom border-gray-100">
    <!-- Primary Navigation Menu -->
    <div class="container">
        <a class="navbar-brand" href="{{ route('admin.dashboard') }}">
            <x-application-logo class="block h-9 w-auto fill-current text-gray-800" />
        </a>

        <div class="collapse navbar-collapse">
            <!-- Navigation Links -->
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link{{ request()->routeIs('admin.dashboard') ? ' active' : '' }}" href="{{ route('admin.dashboard') }}">
                        {{ __('Dashboard') }}
                    </a>
                </li>
            </ul>

            <!-- Settings Dropdown -->
            <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="settingsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        {{ Auth::user()->name }}
                    </a>
                    <div class="dropdown-menu" aria-labelledby="settingsDropdown">
                        <a class="dropdown-item" href="{{ route('admin.profile.edit') }}">
                            {{ __('Profile') }}
                        </a>
                        <form class="dropdown-item" method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button class="dropdown-item" type="submit">
                                {{ __('Log Out') }}
                            </button>
                        </form>
                    </div>
                </li>
            </ul>
        </div>

        <!-- Hamburger -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    </div>

    <!-- Responsive Navigation Menu -->
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link{{ request()->routeIs('admin.dashboard') ? ' active' : '' }}" href="{{ route('admin.dashboard') }}">
                    {{ __('Dashboard') }}
                </a>
            </li>
        </ul>

        <!-- Responsive Settings Options -->
        <div class="border-top border-gray-200 pt-4 pb-1">
            <div class="px-4">
                <div class="font-weight-bold text-base text-gray-800">{{ Auth::user()->name }}</div>
                <div class="font-weight-bold text-sm text-gray-500">{{ Auth::user()->email }}</div>
            </div>

            <ul class="mt-3">
                <li>
                    <a class="dropdown-item" href="{{ route('admin.profile.edit') }}">
                        {{ __('Profile') }}
                    </a>
                </li>
                <li>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button class="dropdown-item" type="submit">
                            {{ __('Log Out') }}
                        </button>
                    </form>
                </li>
            </ul>
        </div>
    </div>
</nav>
