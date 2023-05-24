<header class="bg-dark text-center py-4">
    <img src="{{ Vite::asset('resources/img/logo.png') }}" alt="" class="py-4">
    <nav class="nav justify-content-center ">
        <a class="nav-link {{ Route::currentRouteName() === 'home' ? 'bg-primary text-white' : '' }}"
            href="{{ route('home') }}" aria-current="page">Home</a>
        <a class="nav-link {{ Route::currentRouteName() === 'about' ? 'bg-primary text-white' : '' }}"
            href="{{ route('about') }}">About Us</a>
        <a class="nav-link {{ Route::currentRouteName() === 'contacts' ? 'bg-primary text-white' : '' }}"
            href="{{ route('contacts') }}">Contacts</a>
    </nav>
</header>
