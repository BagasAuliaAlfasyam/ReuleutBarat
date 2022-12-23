<header class="sticky-top">
  <nav class="navbar bg-dark navbar-dark">
    <div class="container-fluid px-5">
      <a href="/admin/dashboard" class="navbar-brand mb-0 h1">Dashboard</a>

      @auth
        <div class="dropdown">
          <div class="nav-link text-light d-flex align-items-center gap-2" data-bs-toggle="dropdown">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
              <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0Zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4Zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10Z"/>
            </svg>
            <span>{{ auth()->user()->name }}</span>
          </div>
          
          <ul class="dropdown-menu dropdown-account">
            <li class="dropdown-item">
              <form action="/logout" class="nav-link" method="post">
                @csrf
                <button type="submit">Logout</button>
              </form>
            </li>
          </ul>
        </div>
      @endauth
    </div>
  </nav>
</header>