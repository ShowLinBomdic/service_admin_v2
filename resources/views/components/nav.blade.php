<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="{{route('home')}}" class="nav-link">Home</a>
        </li>
    </ul>



    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        <li class="nav-item">
                <span class="nav-link show">
                    <i class="fas fa-user-circle"></i>&nbsp;{{Auth::user()->name}}
                </span>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="{{route('logout')}}" role="button"
               onclick="event.preventDefault();
                             document.getElementById('logout-form').submit();">
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
                <i class="fas fa-sign-out-alt"></i>
            </a>
        </li>
    </ul>
</nav>
