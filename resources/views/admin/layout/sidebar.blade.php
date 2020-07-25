<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

  <!-- Sidebar - Brand -->
  <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/admin/home">
    <div class="sidebar-brand-icon rotate-n-15">
      <i class="fas fa-laugh-wink"></i>
    </div>
    <div class="sidebar-brand-text mx-3">MMI ITI Admin</div>
  </a>

  <!-- Divider -->
  <hr class="sidebar-divider my-0">

  <!-- Nav Item - Dashboard -->
  <li class="nav-item active">
    <a class="nav-link" href="/admin/home">
      <i class="fas fa-fw fa-tachometer-alt"></i>
      <span>Dashboard</span></a>
  </li>

  <hr class="sidebar-divider">

  <li class="nav-item">
    <a class="nav-link" href="{{ route('course.create')}}">
      <i class="fas fa-fw fa-plus"></i>
      <span>Add Course</span>
    </a>
  </li>

  <li class="nav-item">
    <a class="nav-link" href="/admin/course">
      <i class="fas fa-fw fa-folder"></i>
      <span>List Courses</span>
    </a>
  </li>

  <li class="nav-item">
    <a class="nav-link" href="{{ route('news.create')}}">
      <i class="fas fa-fw fa-plus"></i>
      <span>Add News/Announcement</span>
    </a>
  </li>

  <li class="nav-item">
    <a class="nav-link" href="/admin/news">
      <i class="fas fa-fw fa-folder"></i>
      <span>List News/Announcements</span>
    </a>
  </li>

  <li class="nav-item">
    <a class="nav-link" href="{{ route('gallery.create')}}">
      <i class="fas fa-fw fa-plus"></i>
      <span>Add Gallery</span>
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="/admin/gallery">
      <i class="fas fa-fw fa-folder"></i>
      <span>List Gallery</span>
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="/admin/messages">
      <i class="fas fa-fw fa-envelope "></i>
      <span>Messages</span>
    </a>
  </li>

  <li class="nav-item">
    <a class="nav-link" href="/admin/banner">
      <i class="far fa-edit"></i>
      <span>Manage Banner Images</span>
    </a>
  </li>

  <hr class="sidebar-divider">
  
  <!-- Sidebar Toggler (Sidebar) -->
  <div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
  </div>

</ul>