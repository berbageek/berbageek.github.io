<nav class="hidden lg:flex items-center justify-end text-lg px-8">
    <a title="{{ $page->siteName }} Laravel" href="/laravel"
        class="ml-6 text-blue-500 hover:text-blue-900 uppercase {{ $page->isActive('/laravel') ? 'active text-blue-900' : '' }}">
        Laravel
    </a>
    <a title="{{ $page->siteName }} Java" href="/java"
        class="ml-6 text-blue-500 hover:text-blue-900 uppercase {{ $page->isActive('/java') ? 'active text-blue-900' : '' }}">
        Java
    </a>
</nav>
