<nav x-data="{ open: false }" class="p-3 bg-dark text-white">
    <div class="container">
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
            <a href="{{ route('main') }}" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
                <x-application-logo class="block h-10 w-auto fill-current text-gray-600" />
            </a>

            <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                    <!--left menu-->
            </ul>


            <div class="d-flex flex-wrap text-end ">
                <button type="button" class="btn btn-warning m-2">
                    <a href="{{route('main')}}">Зареєструвати помешкання</a>
                </button>
                @guest
                    @if (Route::has('login'))
                        <button type="button" class="btn btn-outline-light m-2">
                            <a href="{{route('login')}}">Увійти</a>
                        </button>
                    @endif
                    @if(Route::has('register'))
                        <button type="button" class="btn btn-outline-light m-2">
                            <a href="{{route('register')}}">Зареєструватись</a>
                        </button>
                    @endif
                @else
                    <li class="nav-item dropdown ">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle " href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item " href="#">Керувати аккаунтом</a>
                            <a class="dropdown-item" href="#">Бронювання</a>
                            <a class="dropdown-item" href="#">Програма лояльності</a>
                            <a class="dropdown-item" href="#">Гаманець</a>

                            <a class="dropdown-item " href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                               document.getElementById('logout-form').submit();">
                               Вийти
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </div>
        </div>
    </div>

</nav>
