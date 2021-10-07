<div class="nav-left-sidebar sidebar-dark">
    <div class="menu-list">
        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="d-xl-none d-lg-none" href="#">Dashboard</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav flex-column">
                    <li class="nav-divider">
                        Menu
                    </li>
                    <li class="nav-item">
                        <a class="nav-link @if(\Request::route()->getName() == 'admin')active @else @endif" href="{{route('admin')}}" ><i class="fa fa-fw fa-rocket"></i>Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link @if(\Request::route()->getName() == 'admin.dashboard.product.index')active @else @endif" href="{{route('admin.dashboard.product.index')}}" ><i class="fa fa-fw fa-rocket"></i>Products</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link @if(\Request::route()->getName() == 'admin.dashboard.user.index')active @else @endif" href="{{route('admin.dashboard.user.index')}}" ><i class="fa fa-fw fa-user"></i>Customers</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link @if(\Request::route()->getName() == 'admin.dashboard.order.index')active @else @endif" href="{{route('admin.dashboard.order.index')}}"><i class="fa fa-fw fa-rocket"></i>Transactions</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link @if(\Request::route()->getName() == 'admin.dashboard.admin.index')active @else @endif" href="{{route('admin.dashboard.admin.index')}}"><i class="fa fa-user"></i>Admin</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link @if(\Request::route()->getName() == 'admin.dashboard.vendor.index')active @else @endif" href="{{route('admin.dashboard.vendor.index')}}"><i class="fa fa-user"></i>Vendor</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link @if(\Request::route()->getName() == 'admin.dashboard.category.index')active @else @endif" href="{{route('admin.dashboard.category.index')}}" ><i class="fa fa-fw fa-rocket"></i>Category</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link @if(\Request::route()->getName() == 'admin.dashboard.banner.index')active @else @endif" href="{{route('admin.dashboard.banner.index')}}" ><i class="fa fa-fw fa-rocket"></i>Banner</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link @if(\Request::route()->getName() == 'admin.dashboard.career.index')active @else @endif" href="{{route('admin.dashboard.career.index')}}" ><i class="fa fa-fw fa-rocket"></i>Career</a>
                    </li>


                    <li class="nav-item">
                        <a class="nav-link @if(\Request::route()->getName() == 'admin.dashboard.dispatch.index')active @else @endif" href="{{route('admin.dashboard.dispatch.index')}}"><i class="fa fa-fw fa-rocket"></i>Dispatchs</a>
                    </li>


                </ul>
            </div>
        </nav>
    </div>
</div>
