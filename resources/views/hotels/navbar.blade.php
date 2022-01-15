<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
            {{__('الصفحه الرئيسيه')}}
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">

            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                <!-- Authentication Links -->
                @guest
                    @if (Route::has('login'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('تسجيل الدخول') }}</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#">{{ __('حجز فنادق') }}</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#">{{ __('حجز رحلات سفر') }}</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#">{{ __('حجز عطلات') }}</a>
                        </li>


                    @endif

                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('تسجيل حساب') }}</a>
                        </li>
                    @endif
                @else
                    <a id="navbarDropdown" class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                           {{ Auth::user()->name }} مرحبا بك
                    </a>
                    <a id="navbarDropdown" class="nav-link" href="{{route('rooms.create')}}" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        <span>انشاء حجز<i style="padding:5px " class="fa fa-pen"></i></span>

                    </a>
                    <a id="navbarDropdown" class="nav-link" href="{{route('trash')}}" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        <span>السجلات المحذوفه<i style="padding:5px " class="fa fa-box"></i></span>

                    </a>
                  @if(Auth::user()->role == 'admin')
                        <a id="navbarDropdown" class="nav-link" href="{{route('users.index')}}" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            <span>قائمه المستخدمين<i style="padding:5px " class="fa fa-users"></i></span>

                        </a>
                    @endif

                    <a id="navbarDropdown" class="nav-link" href="{{route('home')}}" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                       <span>سجل الحجوزات<i style="padding:5px " class="fa fa-user"></i></span>
                    </a>




                    <a class="nav-link" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                        {{ __('تسجيل الخروج') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf

                    </form>


                @endguest
            </ul>
        </div>
    </div>
</nav>

