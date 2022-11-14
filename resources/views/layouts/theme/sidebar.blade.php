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
          <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ route('admin.home') }}" aria-expanded="false"><i
              class="mdi mdi-view-dashboard"></i><span class="hide-menu">TABLERO</span></a>
        </li>
        <li class="sidebar-item">
          <a class="sidebar-link waves-effect waves-dark sidebar-link" href="#" aria-expanded="false"><i
              class="mdi mdi-tag"></i><span class="hide-menu">EVENTOS</span></a>
        </li>
        <li class="sidebar-item">
          <a class="sidebar-link waves-effect waves-dark sidebar-link" href="#" aria-expanded="false"><i
              class="fas fa-shopping-cart"></i><span class="hide-menu">PARTICIPANTES</span></a>
        </li>
        <li class="sidebar-item">
          <a class="sidebar-link waves-effect waves-dark sidebar-link" href="#" aria-expanded="false"><i
              class="mdi mdi-cash"></i><span class="hide-menu">REPORTE</span></a>
        </li>



      </ul>
    </nav>
    <!-- End Sidebar navigation for Admin-->

    @else

    <!-- Sidebar navigation for Participant-->
    <nav class="sidebar-nav">
        <ul id="sidebarnav" class="pt-4">
            <li class="sidebar-item">
                <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{route('web.home')}}" aria-expanded="false"><i
                    class="mdi mdi-home"></i><span class="hide-menu">HOME</span></a>
              </li>
          <li class="sidebar-item">
            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="#" aria-expanded="false"><i
                class="mdi mdi-tag"></i><span class="hide-menu">LISTA DE EVENTOS</span></a>
          </li>



        </ul>
      </nav>
      <!-- End Sidebar navigation for Participant-->

    @endif
  </div>
  <!-- End Sidebar scroll-->
</aside>

