<div class="custom-nav-bar">
    <div class="row">
        <div class="col-md-8 col-12">
            <span class="nav-brand">
                <a href="/">
                    Library - Admin Dashboard
                </a>
            </span>
        </div>
        <div class="col-md-4 col-12">
            <div class="logout-btn">
                @if (\Auth::user()->email   == 'iamalishaacharya@gmail.com')

                <a href="/dashboard/manage-users" class="btn">
                    Manage Users
                </a>
                @endif
                <a href="/logout" class="btn">
                    Logout
                </a>
            </div>
        </div>
    </div>
</div>
