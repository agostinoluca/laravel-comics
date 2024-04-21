<header>
    <div class="bg-primary">
        <div class="container">
            <ul class="d-flex p-1 justify-content-end gap-3">
                <li><a class="text-light {{ Route::currentRouteName() === 'home' ? 'selected-dark' : '' }}"
                        href="{{ route('home') }}">Home</a></li>
                <li><a class="text-light {{ Route::currentRouteName() === 'about' ? 'selected-dark' : '' }}"
                        href="{{ route('about') }}">About</a></li>
            </ul>
        </div>
    </div>
    <div class="bg-light">
        <div class="container">
            <div class="row p-2 justify-content-between align-items-center bg-light">
                <div class="d-flex align-items-center">
                    <img src={{ Vite::asset('resources/images/dc-logo.png') }} alt="logo DC">
                </div>
                <!-- /.div for Logo image -->
                <nav>
                    <ul class="d-flex gap-3">
                        <li><a href="#">CHARACTERS</a></li>
                        <li><a class="{{ Route::currentRouteName() === 'shop' ? 'selected-nav' : '' }}"
                                href="{{ route('shop') }}">COMICS</a></li>
                        <li><a href="#">MOVIES</a></li>
                        <li><a href="#">TV</a></li>
                        <li><a href="#">GAMES</a></li>
                        <li><a href="#">COLLECTIBLES</a></li>
                        <li><a href="#">VIDEOS</a></li>
                        <li><a href="#">FANS</a></li>
                        <li><a href="#">NEWS</a></li>
                        <li><a href="#">SHOP</a></li>
                    </ul>
                </nav>
                <!-- /nav menù Header -->
            </div>
        </div>
    </div>
    <div class="jumbotron"></div>
</header>

<style scoped>
    nav a {
        color: var(--dc-dark);
        font-size: 0.75rem;
        font-weight: 700;
        position: relative;

        &:hover {
            color: var(--dc-primary);
            border-bottom: 5px solid var(--dc-primary);
            padding-bottom: 3.4rem;
        }
    }
</style>
