<nav class="sidebar sidebar-offcanvas" id="sidebar">
  <ul class="nav">
    <li class="nav-item">
      <a class="nav-link" href="index.html">
        <i class="ti-home menu-icon"></i>
        <span class="menu-title">Dashboard</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="collapse" href="#form-elements" aria-expanded="false" aria-controls="form-elements">
        <i class="ti-clipboard menu-icon"></i>
        <span class="menu-title">Creation</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="form-elements">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"><a class="nav-link" href="/addcourses">Add courses</a></li>
          <li class="nav-item"><a class="nav-link" href="/addteacher">Add Teacher</a></li>
          <li class="nav-item"><a class="nav-link" href="/addslider">add slider</a></li>
          <li class="nav-item"><a class="nav-link" href="wizard.html">Wizard</a></li>
        </ul>
      </div>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="collapse" href="#tables" aria-expanded="false" aria-controls="tables">
        <i class="ti-layout menu-icon"></i>
        <span class="menu-title">Views</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="tables">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"> <a class="nav-link" href="{{URL::to('/courses')}}">show courses</a></li>
          <li class="nav-item"> <a class="nav-link" href="{{URL::to('/slides')}}">show sliders</a></li>
          <li class="nav-item"> <a class="nav-link" href="{{URL::to('/orders')}}">show orders</a></li>
          <li class="nav-item"> <a class="nav-link" href="data-table.html">show teachers</a></li>
          <li class="nav-item"> <a class="nav-link" href="sortable-table.html">show students</a></li>
        </ul>
      </div>
    </li>
  </ul>
</nav>
