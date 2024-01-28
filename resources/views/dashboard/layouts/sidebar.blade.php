<div class="sidebar border border-right col-md-3 col-lg-2 p-0 bg-body-tertiary">
    <div class="offcanvas-md offcanvas-end bg-body-tertiary" tabindex="-1" id="sidebarMenu" aria-labelledby="sidebarMenuLabel">
        <div class="offcanvas-body d-md-flex flex-column p-0 pt-lg-3 overflow-y-auto">
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link d-flex align-items-center pt-3 gap-2 {{ Request::is('dashboard') ? 'text-success-emphasis' : '' }}" aria-current="page" href="/dashboard"><i class="bi bi-houses"></i> Dashboard
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link d-flex align-items-center gap-2 {{ Request::is('dashboard/posts*') ? 'text-success-emphasis' : '' }}" href="/dashboard/posts"><i class="bi bi-file-earmark"></i> My Posts
                    </a>
                </li>
            </ul>

            <hr class="my-3">

            <ul class="nav flex-column mb-auto">
                <li class="nav-item">
                    <form action="/logout" method="post">
                    @csrf
                    <button type="submit" class="nav-link d-flex align-items-center gap-2"><i class="bi bi-box-arrow-left"></i> Logout</button>
                    </form>
                </li>
            </ul>
@can('admin')
<h3 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">Administrator</h3>
<ul class="nav flex-column">
    <li class="nav-item">
        <a class="nav-link d-flex align-items-center pt-3 gap-2 {{ Request::is('dashboard/categories*') ? 'text-success-emphasis' : '' }}" aria-current="page" href="/dashboard/categories"><i class="bi bi-houses"></i> Atur Kategori
        </a>
</ul>
@endcan
        </div>
    </div>
</div>