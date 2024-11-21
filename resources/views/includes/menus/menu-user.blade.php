<li
    class="sidebar-item active {{ Route::currentRouteName() === 'user.index' ? 'active' : '' }}">
    <a href="{{ route('user.index') }}" class="sidebar-link">
        <i class="bi bi-grid-fill">
        </i>
        <span>Dashboard</span>
    </a>
</li>
<li
    class="sidebar-item active">
    <a href="{{route('user.pendaftaran')}}" class="sidebar-link">
        <i class="bi bi-heart-pulse-fill">
        </i>
        <span>pendaftaran</span>
    </a>
</li>
<li
    class="sidebar-item active">
    <a href="{{route('user.user.dokter')}}" class="sidebar-link">
        <i class="bi bi-lungs">
        </i>
        <span>daftar dokter</span>
    </a>
</li>
<li
    class="sidebar-item active">
    <a href="" class="sidebar-link">
        <i class="bi bi-people-fill">
        </i>
        <span>nomor antrian</span>
    </a>
</li>
<li
    class="sidebar-item active">
    <a href="{{route('user.celender')}}" class="sidebar-link">
        <i class="bi bi-calendar-event">
        </i>
        <span>celender</span>
    </a>
</li>
