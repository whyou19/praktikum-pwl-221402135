 <!-- Sidebar -->
 <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

<!-- Sidebar - Brand -->
<a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
    <div class="sidebar-brand-icon rotate-n-15">
        <i class="fas fa-laugh-wink"></i>
    </div>
    <div class="sidebar-brand-text mx-3">SB Admin <sup>2</sup></div>
</a>

<!-- Divider -->
<hr class="sidebar-divider my-0">

<!-- Nav Item - Dashboard -->
<li class="nav-item {{ request()->is('admin/dashboard') ? 'active' : ''}}">
    <a class="nav-link" href="/admin/dashboard">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Dashboard</span></a>
</li>

<!-- Divider -->
<hr class="sidebar-divider">

<!-- Nav Item -posts -->
<div class="sidebar-heading">
    Main Menu
</div>

<li class="nav-item {{ request()->is('admin/postingan') ? 'active' : ''}}">
    <a class="nav-link" href="/admin/postingan">
    <i class="fa-solid fa-paper-plane"></i>
        <span>Postingan</span></a>
</li>

<!-- Nav Item -archieve -->
<li class="nav-item {{ request()->is('admin/arsip') ? 'active' : ''}}">
    <a class="nav-link" href="/admin/arsip">
    <i class="fas fa-fw fa-table"></i>
        <span>Album</span></a>
</li>

 <!-- Nav Item -about -->
 <li class="nav-item {{ request()->is('admin/tentang') ? 'active' : ''}}">
    <a class="nav-link" href="/admin/tentang">
    <i class="fa-solid fa-person"></i>
        <span>Me</span></a>
</li>  

 <!-- Nav Item -news -->
 <li class="nav-item {{ request()->is('admin/news') ? 'active' : ''}}">
    <a class="nav-link" href="/admin/news">
    <i class="fa-solid fa-newspaper"></i>
        <span>News</span></a>
</li>

<!-- Nav Item -animal -->
<li class="nav-item {{ request()->is('admin/animal') ? 'active' : ''}}">
    <a class="nav-link" href="/admin/animal">
    <i class="fa-solid fa-paw"></i>
        <span>Animal</span></a>
</li>

<!-- Divider -->
<hr class="sidebar-divider d-none d-md-block">

<!-- Sidebar Toggler (Sidebar) -->
<div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
</div>

</ul>
<!-- End of Sidebar -->