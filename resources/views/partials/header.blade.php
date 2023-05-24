<header class="bg-dark text-center py-4">
    <nav class="nav justify-content-center pt-4 pb-1 ">
        <a class="nav-link {{ Route::currentRouteName() === 'home' ? 'bg-danger text-white' : '' }}"
            href="{{ route('home') }}" aria-current="page">Home</a>
        <a class="nav-link {{ Route::currentRouteName() === 'about' ? 'bg-danger text-white' : '' }}"
            href="{{ route('about') }}">About Us</a>
        <a class="nav-link {{ Route::currentRouteName() === 'contacts' ? 'bg-danger text-white' : '' }}"
            href="{{ route('contacts') }}">Contacts</a>
    </nav>
</header>
