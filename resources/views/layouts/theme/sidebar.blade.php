<!-- ============================================================== -->
<!-- Left Sidebar - style you can find in sidebar.scss  -->
<!-- ============================================================== -->
<aside class="left-sidebar" style="background-color: #7460ee">
  <!-- Sidebar scroll-->
  <div class="scroll-sidebar">
    @if (auth()->user()->admin)
    <!-- Sidebar navigation for Admin-->
    <nav class="sidebar-nav">
      <ul id="sidebarnav" class="pt-4">
        <li class="sidebar-item">
          <a class="sidebar-link waves-effect  sidebar-link" href="{{ route('admin.home') }}" aria-expanded="false">
            <i class="fas fa-chalkboard"></i><span class="hide-menu">DASHBOARD</span></a>
        </li>
        <li class="sidebar-item">
          <a class="sidebar-link waves-effect  sidebar-link" href="{{route('admin.events')}}" aria-expanded="false">
            <i class="fas fa-calendar-week"></i><span class="hide-menu">EVENTS</span></a>
        </li>
        <li class="sidebar-item">
          <a class="sidebar-link waves-effect  sidebar-link" href="{{route('admin.participants')}}" aria-expanded="false">
          <i class="fas fa-walking"></i><span class="hide-menu">PARTICIPANTS</span></a>
        </li>
        <li class="sidebar-item">
          <a class="sidebar-link waves-effect  sidebar-link" href="#" aria-expanded="false">
            <i class="fas fa-project-diagram"></i><span class="hide-menu">REPORTS</span></a>
        </li>



      </ul>
    </nav>
    <!-- End Sidebar navigation for Admin-->

    @else

    <!-- Sidebar navigation for Participant-->
    <nav class="sidebar-nav">
        <ul id="sidebarnav" class="pt-4">
            <li class="sidebar-item">
                <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{route('web.home')}}" aria-expanded="false">
                <i class="fas fa-home-lg-alt"></i><span class="hide-menu">HOME</span></a>
            </li>
            <li class="sidebar-item">
                <a class="sidebar-link waves-effect waves-dark sidebar-link" href="#" aria-expanded="false">
                <i class="fas fa-list-ul"></i><span class="hide-menu">EVENTS LIST</span></a>
            </li>



        </ul>
      </nav>
      <!-- End Sidebar navigation for Participant-->

    @endif
  </div>
  <!-- End Sidebar scroll-->
</aside>

