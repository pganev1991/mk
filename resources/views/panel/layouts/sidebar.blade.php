  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">
      @php
        $PermissionUser = App\Models\PermissionRoleModel::getPermission('User', Auth::user()->role_id);
        $PermissionRole = App\Models\PermissionRoleModel::getPermission('Role', Auth::user()->role_id);
        $PermissionCategory = App\Models\PermissionRoleModel::getPermission('Category', Auth::user()->role_id);
        $PermissionSubcategory = App\Models\PermissionRoleModel::getPermission('Subcategory', Auth::user()->role_id);
        $PermissionQuestion = App\Models\PermissionRoleModel::getPermission('Question', Auth::user()->role_id);
        $PermissionSettings = App\Models\PermissionRoleModel::getPermission('Settings', Auth::user()->role_id);
      @endphp
      <li class="nav-item">
        <a class="nav-link @if(Request::segment(2) != 'dashboard') collapsed @endif " href="{{ url('panel/dashboard') }}">
          <i class="bi bi-grid"></i>
          <span>Контролен панел</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-layout-text-window-reverse"></i><span>Банки с въпроси</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>

        <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
        @if(!empty($PermissionCategory))
        <li class="nav-item">
          <a class="nav-link @if(Request::segment(2) != 'category') collapsed @endif " href="{{ url('panel/category') }}">
          <i class="bi bi-bookmark"></i>
            <span>Категории</span>
          </a>
        </li>
        @endif
        @if(!empty($PermissionSubcategory))
        <li class="nav-item">
          <a class="nav-link @if(Request::segment(2) != 'subcategory') collapsed @endif " href="{{ url('panel/subcategory') }}">
          <i class="bi bi-bookmarks"></i>
            <span>Подкатегории</span>
          </a>
        </li>
        @endif
        @if(!empty($PermissionQuestion))
        <li class="nav-item">
          <a class="nav-link @if(Request::segment(2) != 'question') collapsed @endif " href="{{ url('panel/question') }}">
          <i class="bi bi-question-circle"></i>
            <span>Въпроси</span>
          </a>
        </li>
        @endif
        </ul>
      </li><!-- End Tables Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#charts-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-bar-chart"></i><span>Статистики</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="charts-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="charts-chartjs.html">
              <i class="bi bi-circle"></i><span>Музикант</span>
            </a>
          </li>
          <li>
            <a href="charts-chartjs.html">
              <i class="bi bi-circle"></i><span>Актьор</span>
            </a>
          </li>
          <li>
            <a href="charts-chartjs.html">
              <i class="bi bi-circle"></i><span>Балет</span>
            </a>
          </li>
          <li>
            <a href="charts-chartjs.html">
              <i class="bi bi-circle"></i><span>Художник</span>
            </a>
          </li>
        </ul>
      </li><!-- End Charts Nav -->

  <li class="nav-heading">Настройки</li>
    <ul>
    @if(!empty($PermissionSettings))
    <li class="nav-item">
          <a class="nav-link @if(Request::segment(2) != 'settings') collapsed @endif " href="{{ url('panel/settings') }}">
          <i class="bi bi-gear"></i>
            <span>Настройки</span>
          </a>
        </li>
    @endif
    @if(!empty($PermissionUser))
      <li class="nav-item">
        <a class="nav-link @if(Request::segment(2) != 'user') collapsed @endif "  href="{{ url('panel/user') }}">
        <i class="bi bi-people-fill"></i>
          <span>Потребители</span>
        </a>
      </li>
    @endif
    @if(!empty($PermissionRole))
      <li class="nav-item">
        <a class="nav-link @if(Request::segment(2) != 'role') collapsed @endif "  href="{{ url('panel/role') }}">
        <i class="bi bi-universal-access"></i>
          <span>Роли</span>
        </a>
      </li>
    @endif
    </ul>

      <li class="nav-item">
        <a class="nav-link collapsed" href="{{ url('') }}">
          <i class="bi bi-envelope"></i>
          <span>Контакти</span>
        </a>
      </li>

    </ul>
  </aside>