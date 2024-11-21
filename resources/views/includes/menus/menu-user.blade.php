<li class="sidebar-item {{ Route::currentRouteName() === 'user.index' ? 'active' : '' }}">
    <a href="{{ route('user.index') }}" class="sidebar-link">
        <i class="bi bi-grid-fill">
        </i>
        <span>Dashboard</span>
    </a>
</li>
<li class="sidebar-item">
    <a href="{{route('user.pendaftaran')}}" class="sidebar-link">
        <i class="bi bi-heart-pulse-fill">
        </i>
        <span>pendaftaran</span>
    </a>
</li>
<li class="sidebar-item">
    <a href="{{route('user.user.dokter')}}" class="sidebar-link">
        <i class="bi bi-lungs">
        </i>
        <span>daftar dokter</span>
    </a>
</li>
<li class="sidebar-item active">
    <a href="{{route('user.celender')}}" class="sidebar-link">
        <i class="bi bi-calendar-event">
        </i>
        <span>alat bantu</span>
    </a>
</li>
<li class="sidebar-item">
    <!-- Tombol Logout -->
       <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
          @csrf
       </form>

    <a href="{{ route('logout') }}" class="sidebar-link" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
        <i class="bi bi-door-open"></i>
        <span>logout</span>
    </a>
</li>
