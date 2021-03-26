@if(Auth::user()->role == 7)
    <li class="nav-item">
            <a href="{{route('admin.slider.index')}}" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Slider
              </p>
            </a>
          </li>
    <li class="nav-item">
            <a href="{{route('admin.system_card.index')}}" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                System Cards
              </p>
            </a>
    </li>
    <li class="nav-item">
            <a href="{{route('admin.menu.index')}}" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Menus
              </p>
            </a>
    </li>
    @endif

