<header>
    <div class="container d-flex align-items-center">
        <img src="{{ Vite::asset('resources/img/dc-logo.png') }}">
        <nav>
            <ul class="d-flex justify-content-center gap-5 ">
                <li>
                    <a href="{{ route('home') }}">Home</a>
                </li>
                <li>
                    <a href="{{ route('products') }}">Products</a>
                </li>
                <li>
                    <a href="{{ route('news') }}">News</a>
                </li>
            </ul>

        </nav>

    </div>
</header>
