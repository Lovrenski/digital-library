<nav class="sidenav navbar navbar-vertical  fixed-left  navbar-expand-xs navbar-light bg-white" id="sidenav-main">
    <div class="scrollbar-inner">
        <!-- Brand -->
        <div class="sidenav-header  align-items-center">
            <a class="navbar-brand" href="/">
                <img src="{{ asset('/backend/img/brand/blue.png') }}" class="navbar-brand-img" alt="logo">
            </a>
        </div>
        <div class="navbar-inner">
            <!-- Collapse -->
            <div class="collapse navbar-collapse" id="sidenav-collapse-main">
                <!-- Nav items -->
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" href="/dashboard">
                            <i class="ni ni-tv-2 text-primary"></i>
                            <span class="nav-link-text">Dashboard</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/books">
                            <i class="ni ni-books text-orange"></i>
                            <span class="nav-link-text">Books</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/categories">
                            <i class="ni ni-collection text-primary"></i>
                            <span class="nav-link-text">Categories</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/permissions">
                            <i class="ni ni-align-left-2 text-yellow"></i>
                            <span class="nav-link-text">Read Permissions</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/librarian-list">
                            <i class="ni ni-badge text-default"></i>
                            <span class="nav-link-text">Librarian</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/users">
                            <i class="ni ni-single-02 text-info"></i>
                            <span class="nav-link-text">Users</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>
