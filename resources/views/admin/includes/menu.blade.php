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
    <li class="nav-item">
            <a href="{{route('admin.page.index')}}" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Pages
              </p>
            </a>
    </li>
    <li class="nav-item">
            <a href="{{route('admin.about_university.index')}}" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                About university
              </p>
            </a>
    </li>
    <li class="nav-header">Menus</li>
    <?php
        $menus = 'App\Menu'::where('leap' , 0)->basic()->get();
    ?>
    @foreach($menus as $menu)
         <li class="nav-item">
            <a href="#" class="nav-link">
{{--              <i class="nav-icon fas fa-th"></i>--}}
{{--                  <i class="fas fa-angle-left right"></i>--}}
              <p>
                {{$menu->name_ru}}
              </p>
            </a>
             <ul class="nav nav-treeview" style="display: none; background-color: #508AD0">
                 @foreach($menu->childs() as $child)
              <li class="nav-item" style="">
                <a href="/admin/admin-slug/{{$child->id}}" class="nav-link @if(!$child->has_child()) hrefed @endif">
{{--                  <i class="far fa-circle nav-icon"></i>--}}
                  <p>
                      {{$child->name_ru}}
                      <i class="fas fa-angle-left right"></i>
                  </p>
                </a>
                  @if($child->has_child())
                  <ul class="nav nav-treeview" style="display: none;  background-color: #50C1D0">
                 @foreach($child->childs() as $chch)
                      <li class="nav-item">
                        <a href="/admin/admin-slug/{{$chch->id}}" class="nav-link ">
{{--                          <i class="far fa-circle nav-icon"></i>--}}
                          <p>{{$chch->name_ru}}</p>
                        </a>
                      </li>
                         @endforeach
                    </ul>
                      @endif
              </li>
                 @endforeach
            </ul>
    </li>
    @endforeach
    @endif

