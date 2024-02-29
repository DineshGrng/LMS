<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
      <div class="sidebar-brand">
        <a href="index.html"> <img alt="image" src="/assets/img/logo.png" class="header-logo" /> <span
            class="logo-name">Otika</span>
        </a>
      </div>
      <ul class="sidebar-menu">
        <li class="menu-header">Main</li>
        <li class="dropdown active">
          <a href="/" class="nav-link"><i data-feather="monitor"></i><span>Dashboard</span></a>
        </li>
        <li class="dropdown ">
            <a href="{{ route('student.index') }}" class="nav-link"><i data-feather="user-plus"></i><span>Student</span></a>
          </li>
          <li class="dropdown ">
            <a href="{{ route('bookissue.index') }}" class="nav-link"><i data-feather="calendar"></i><span>Issue</span></a>
          </li>
          <li class="dropdown ">
            <a href="index.html" class="nav-link"><i data-feather="archive"></i><span>Collect</span></a>
          </li>
          <li class="dropdown ">
            <a href="{{ route('book.index') }}" class="nav-link"><i data-feather="book"></i><span>Book</span></a>
          </li>
          <li class="dropdown ">
            <a href="{{ route('book.index') }}" class="nav-link"><i data-feather="file-text"></i><span>Report</span></a>
          </li>
      </ul>
    </aside>
  </div>
