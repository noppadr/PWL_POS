<div class="sidebar">
    <!-- Sidebar Search Form -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex flex-column align-items-center"> {{-- Modified for centering --}}
        <div class="image mb-2"> {{-- Added margin bottom --}}
            {{-- Display user image or default --}}
            <img src="{{ Auth::user()->profile_image ? Storage::url(Auth::user()->profile_image) : asset('adminlte/dist/img/user2-160x160.jpg') }}"
                 class="img-circle elevation-2" alt="User Image" style="width: 60px; height: 60px; object-fit: cover;"> {{-- Added style --}}
        </div>
        <div class="info mb-2 text-center"> {{-- Added margin bottom and text center --}}
            {{-- Display user name --}}
            <a href="#" class="d-block">{{ Auth::user()->name }}</a>
        </div>
        {{-- Simple Form for Profile Photo Upload --}}
        <form action="{{ route('profile.photo.update') }}" method="POST" enctype="multipart/form-data" class="w-100 px-2"> {{-- Added width and padding --}}
            @csrf
            <div class="input-group input-group-sm">
                <input type="file" name="profile_photo" class="form-control form-control-sm" required>
                <div class="input-group-append">
                    <button type="submit" class="btn btn-sm btn-primary"><i class="fas fa-upload"></i></button>
                </div>
            </div>
             @error('profile_photo') {{-- Display validation error --}}
                <small class="text-danger d-block mt-1">{{ $message }}</small>
            @enderror
            @if (session('success')) {{-- Display success message --}}
                 <small class="text-success d-block mt-1">{{ session('success') }}</small>
            @endif
             @if (session('error')) {{-- Display error message --}}
                 <small class="text-danger d-block mt-1">{{ session('error') }}</small>
            @endif
        </form>
    </div>
    
    <div class="form-inline mt-2">
        <div class="input-group" data-widget="sidebar-search">
            <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
            <div class="input-group-append">
                <button class="btn btn-sidebar">
                    <i class="fas fa-search fa-fw"></i>
                </button>
            </div>
        </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-item">
                <a href="{{ url('/') }}" class="nav-link {{ $activeMenu == 'dashboard' ? 'active' : '' }}">
                    <i class="nav-icon fas fa-tachometer-alt"></i>
                    <p>Dashboard</p>
                </a>
            </li>

            <li class="nav-header">Data Pengguna</li>
            <li class="nav-item">
                <a href="{{ url('/level') }}" class="nav-link {{ $activeMenu == 'level' ? 'active' : '' }}">
                    <i class="nav-icon fas fa-layer-group"></i>
                    <p>Level User</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ url('/user') }}" class="nav-link {{ $activeMenu == 'user' ? 'active' : '' }}">
                    <i class="nav-icon far fa-user"></i>
                    <p>Data User</p>
                </a>
            </li>

            <li class="nav-header">Data Barang</li>
            <li class="nav-item">
                <a href="{{ url('/kategori') }}" class="nav-link {{ $activeMenu == 'kategori' ? 'active' : '' }}">
                    <i class="nav-icon far fa-bookmark"></i>
                    <p>Kategori Barang</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ url('/barang') }}" class="nav-link {{ $activeMenu == 'barang' ? 'active' : '' }}">
                    <i class="nav-icon far fa-list-alt"></i>
                    <p>Data Barang</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ url('/supplier') }}" class="nav-link {{ $activeMenu == 'supplier' ? 'active' : '' }}">
                    <i class="nav-icon fas fa-truck"></i>
                    <p>Supplier Barang</p>
                </a>
            </li>
            <li class="nav-header">Data Transaksi</li>
            <li class="nav-item">
                <a href="{{ url('/stok') }}" class="nav-link {{ $activeMenu == 'stok' ? 'active' : '' }}">
                    <i class="nav-icon fas fa-cubes"></i>
                    <p>Stok Barang</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ url('/penjualan') }}" class="nav-link {{ $activeMenu == 'penjualan' ? 'active' : '' }}">
                    <i class="nav-icon fas fa-cash-register"></i>
                    <p>Transaksi Penjualan</p>
                </a>
            </li>
            <li class="nav-header">Opsi</li>
            <li class="nav-item">
                <a href="{{ url('/logout') }}" class="nav-link {{ $activeMenu == 'stok' ? 'active' : '' }}">
                    <i class="nav-icon fas fa-sign-out-alt"></i>
                    <p>Logout</p>
                </a>
            </li>
        </ul>
    </nav>
</div>
