<header class="p-3 bg-dark text-white">
    <div class="container">
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
        <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
          <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"/></svg>
        </a>

        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
         
          <li><a href="{{ url('/') }}" class="nav-link px-2 text-secondary">Home</a></li>
          
          <li><a href="{{ route('posts.create') }}" class="nav-link px-2 text-white">Add Post</a></li>
         
          <li><a href="#" class="nav-link px-2 text-white">Pricing</a></li>
          <li><a href="#" class="nav-link px-2 text-white">FAQs</a></li>
          <li><a href="#" class="nav-link px-2 text-white">About</a></li>
        </ul>

        @Auth
        
        <div class="dropdown text-end">
            <a href="#" style="color: aliceblue" class="d-block link-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
             {{ Auth::user()->name }}
            </a>
            <ul class="dropdown-menu text-small" aria-labelledby="dropdownUser1">
              <li><a class="dropdown-item" href="{{ route('posts.create') }}">New Post</a></li>
              <li><a class="dropdown-item" href="#">Settings</a></li>
              <li><a class="dropdown-item" href="{{route('home')}}">Profile</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="{{ route('logout') }}"  onclick="event.preventDefault();document.getElementById('logout-form').submit();">Sign out</a></li>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
            </ul>
          </div>
                            
     
        @endauth

        <div class="text-end">
        @guest
          @if (Route::has('login'))
         <a href="{{ route('login') }}"><button type="button" class="btn btn-outline-light me-2">Login</button></a> 
          @endif

          @if (Route::has('register'))
          <a href="{{ route('register') }}"><button type="button" class="btn btn-warning">Sign-up</button></a>
          @endif
        @endguest
        </div>
      </div>
    </div>
  </header>