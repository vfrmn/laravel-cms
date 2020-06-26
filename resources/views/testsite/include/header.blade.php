@section('header')
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <a class="navbar-brand" href="#">👽</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault"
                aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse " id="navbarsExampleDefault">
            <ul class="navbar-nav ">
                <li class="nav-item @if(Route::currentRouteName() == 'home_page')active @endif">
                    <a class="nav-link" href="{{route('home_page')}}">Relationships</a>
                </li>
                <li class="nav-item @if(Route::currentRouteName() =='page')active @endif">
                    <a class="nav-link " href="{{route('page', ['main',null])}}">Pages</a>
                </li>
                @if(Route::currentRouteName() =='page' && $page->parent->id != 1)
                    <li class="nav-item">
                        <a href="{{route('page', $page->parent->caption)}}" type="button"
                           class="btn btn-secondary mr-auto text-white"><i class="fa fa-arrow-left text-white"></i> Back
                            to {{$page->parent->title}}</a>
                    </li>
                @endif
                <li class="nav-item @if(Route::getCurrentRoute()->getPrefix() =='/admin')active @endif">
                    <a class="nav-link " href="{{route('pages.index')}}">Admin</a>
                </li>
                @if(Route::getCurrentRoute()->getPrefix() =='/admin' && isset($page) && $page->parent->id != $page->id)
                    <li class="nav-item">
                        <a href="{{route('pages.index','parent='.$page->parent->id)}}" type="button"
                           class="btn btn-secondary mr-auto text-white"><i class="fa fa-arrow-left text-white"></i> Back
                            to {{$page->parent->title}}</a>
                    </li>
                @endif
                @if(Route::currentRouteName() =='pages.create')
                    <li class="nav-item">
                        <a href="{{route('pages.index','parent='.request()->parent)}}" type="button"
                           class="btn btn-secondary mr-auto text-white"><i class="fa fa-arrow-left text-white"></i> Back
                            to pages</a>
                    </li>
                @endif
            </ul>
            <ul class="navbar-nav ml-auto">
                <!-- Authentication Links -->
                @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>
        </div>
    </nav>
