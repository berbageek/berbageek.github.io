<nav id="js-nav-menu" class="nav-menu hidden lg:hidden">
    <ul class="list-reset my-0">
        <li class="pl-4">
            <a
                title="{{ $page->siteName }} Blog"
                href="/laravel"
                class="nav-menu__item hover:text-blue {{ $page->isActive('/laravel') ? 'active text-blue' : '' }}"
            >Laravel</a>
        </li>
    </ul>
</nav>
