<div class="col-md-3">
    <div class="card">
        <div class="card-header">
            Sidebar
        </div>
        <ul class="nav" role="tablist">
            <div class="card-body">

                <li role="presentation">
                    <a href="{{ url('/home') }}">
                        Dashboard
                    </a>

                </li>
                <li role="presentation">

                    <a href="{{ url('/admin/role') }}">
                        Role
                    </a>
                </li>
                <li role="presentation">

                    <a href="{{ url('/admin/permission') }}">
                        Permission
                    </a>
                </li>

                <li role="presentation">
                    <a href="{{ url('/admin/user') }}">
                        Users
                    </a>
                </li>

            </div>
        </ul>
    </div>
</div>