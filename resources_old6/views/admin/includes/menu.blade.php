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
        <a href="{{route('admin.menu_top.index')}}" class="nav-link">
            <i class="nav-icon fas fa-th"></i>
            <p>
                Menus Top
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
    <li class="nav-item">
        <a href="{{route('admin.neww.index')}}" class="nav-link">
            <i class="nav-icon fas fa-th"></i>
            <p>
                News
            </p>
        </a>
    </li>
    <li class="nav-item">
        <a href="{{route('admin.media.index')}}" class="nav-link">
            <i class="nav-icon fas fa-th"></i>
            <p>
                Media
            </p>
        </a>
    </li>
    <li class="nav-item">
        <a href="{{route('admin.announce.index')}}" class="nav-link">
            <i class="nav-icon fas fa-th"></i>
            <p>
                Announces
            </p>
        </a>
    </li>
    <li class="nav-item">
        <a href="{{route('admin.separately.index')}}" class="nav-link">
            <i class="nav-icon fas fa-th"></i>
            <p>
                Separately one new
            </p>
        </a>
    </li>
    <li class="nav-item">
        <a href="#" class="nav-link">
            <i class="nav-icon fas fa-th"></i>
            <p>
                Time table
            </p>
        </a>
        <ul class="nav nav-treeview" style="display: none; background-color: #508AD0">
            <li class="nav-item tool-nav" style="position: relative">
                <a href="{{route('admin.lesson.timetable.index')}}" class="nav-link">
                    <p>
                        Lesson
                    </p>
                </a>
            </li>
            <li class="nav-item tool-nav" style="position: relative">
                <a href="" class="nav-link">
                    <p>
                        Session
                    </p>
                </a>
            </li>

        </ul>
    </li>
    <li class="nav-item">
        <a href="{{route('admin_young_scientist_new.index')}}" class="nav-link">
            <i class="nav-icon fas fa-th"></i>
            <p>
                Scientists news
            </p>
        </a>
    </li>

    <li class="nav-item">
        <a href="{{route('admin_scientific_article.index')}}" class="nav-link">
            <i class="nav-icon fas fa-th"></i>
            <p>
                Scientists articles
            </p>
        </a>
    </li>
    <li class="nav-item">
        <a href="{{route('admin_faculty.index')}}" class="nav-link">
            <i class="nav-icon fas fa-th"></i>
            <p>
                Faculties
            </p>
        </a>
    </li>
    <li class="nav-item">
        <a href="{{route('admin_section.index')}}" class="nav-link">
            <i class="nav-icon fas fa-th"></i>
            <p>
                Sections
            </p>
        </a>
    </li>
    <li class="nav-item">
        <a href="{{route('admin_rector.index')}}" class="nav-link">
            <i class="nav-icon fas fa-th"></i>
            <p>
                Rektor
            </p>
        </a>
    </li>
    <li class="nav-item">
        <a href="{{route('admin_center.index')}}" class="nav-link">
            <i class="nav-icon fas fa-th"></i>
            <p>
                Centers
            </p>
        </a>
    </li>
    <li class="nav-item">
        <a href="{{route('admin_ustav.index')}}" class="nav-link">
            <i class="nav-icon fas fa-th"></i>
            <p>
                Ustav
            </p>
        </a>
    </li>
    <li class="nav-item">
        <a href="{{route('admin_kafedra.index')}}" class="nav-link">
            <i class="nav-icon fas fa-th"></i>
            <p>
                Departments
            </p>
        </a>
    </li>
    <li class="nav-item">
        <a href="{{route('admin_management.index')}}" class="nav-link">
            <i class="nav-icon fas fa-th"></i>
            <p>
                Managements
            </p>
        </a>
    </li>
    <li class="nav-item">
        <a href="{{route('admin_ilmiy_nashr.index')}}" class="nav-link">
            <i class="nav-icon fas fa-th"></i>
            <p>
                Ilmiy nashrlar
            </p>
        </a>
    </li>
    <li class="nav-item">
        <a href="{{route('kafedra_admin.index')}}" class="nav-link">
            <i class="nav-icon fas fa-th"></i>
            <p>
                Kafedra admin
            </p>
        </a>
    </li>
    <li class="nav-item">
        <a href="{{route('superadmin.teachers.index')}}" class="nav-link">
            <i class="nav-icon fas fa-th"></i>
            <p>
                Teachers page
            </p>
        </a>
    </li>
    <li class="nav-item">
        <a href="{{route('requestment.index')}}" class="nav-link">
            <i class="nav-icon fas fa-th"></i>
            <p>
                Requestment
            </p>
        </a>
    </li>
    <li class="nav-header">Menus</li>
    <?php
    $menus = 'App\Menu'::where('leap', 0)->basic()->get();
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
                    <style>
                        .tool-box {
                            position: absolute;
                            /*width: 80%;*/
                            /*height: 100px;*/
                            background-color: black;
                            left: 10px;
                            bottom: 100%;
                            z-index: 10000;
                            display: none;
                            padding: 13px;
                            border-radius: 16px;
                            opacity: 0.9;
                            /*display: flex;*/
                            justify-content: flex-start;
                        }

                        .tool-box a {
                            margin-left: 8px;
                            margin-left: 8px;
                        }

                        .tool-nav:hover .tool-box {
                            display: flex !important;
                        }
                    </style>
                    <li class="nav-item tool-nav" style="position: relative">
                        <div class="tool-box">
                            <a href="/admin/admin-slug/{{$child->id}}">
                                <i class="fa fa-file" aria-hidden="true"></i>
                            </a>
                            <a href="" style="color: #005ED0 !important;">
                                <i class="fa fa-cogs" aria-hidden="true"></i>
                            </a>
                            <button class="change_eye_menu" type="button" data-id="{{$child->id}}"
                                    style="background-color: transparent; border: none; padding: 0; margin-left: 8px; margin-right: 8px; color: #D0C65A;outline: none;">
                                <i class="fa @if($child->status)fa-eye @else fa-eye-slash @endif"
                                   aria-hidden="true"></i>
                            </button>
                        </div>
                        <a href="/admin/admin-slug/{{$child->id}}"
                           class="nav-link @if(!$child->has_child()) hrefed @endif">
                            {{--                  <i class="far fa-circle nav-icon"></i>--}}
                            <p>
                                {{$child->name_ru}}
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        @if($child->has_child())
                            <ul class="nav nav-treeview" style="display: none;  background-color: #50C1D0">
                                @foreach($child->childs() as $chch)
                                    <li class="nav-item ">
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
    <li class="nav-header">Top Menus</li>
    <?php
    $menus_top = 'App\MenuTop'::where('leap', 0)->basic()->get();
    ?>
    @foreach($menus_top as $menu)
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
                    <style>
                        .tool-box {
                            position: absolute;
                            /*width: 80%;*/
                            /*height: 100px;*/
                            background-color: black;
                            left: 10px;
                            bottom: 100%;
                            z-index: 10000;
                            display: none;
                            padding: 13px;
                            border-radius: 16px;
                            opacity: 0.9;
                            /*display: flex;*/
                            justify-content: flex-start;
                        }

                        .tool-box a {
                            margin-left: 8px;
                            margin-left: 8px;
                        }

                        .tool-nav:hover .tool-box {
                            display: flex !important;
                        }
                    </style>
                    <li class="nav-item tool-nav" style="position: relative">
                        <div class="tool-box">
                            <a href="/admin/admin-slug-top/{{$child->id}}">
                                <i class="fa fa-file" aria-hidden="true"></i>
                            </a>
                            <a href="" style="color: #005ED0 !important;">
                                <i class="fa fa-cogs" aria-hidden="true"></i>
                            </a>
                            <button class="change_eye_menu_top" type="button" data-id="{{$child->id}}"
                                    style="background-color: transparent; border: none; padding: 0; margin-left: 8px; margin-right: 8px; color: #D0C65A;outline: none;">
                                <i class="fa @if($child->status)fa-eye @else fa-eye-slash @endif"
                                   aria-hidden="true"></i>
                            </button>
                        </div>
                        <a href="/admin/admin-slug-top/{{$child->id}}"
                           class="nav-link @if(!$child->has_child()) hrefed @endif">
                            {{--                  <i class="far fa-circle nav-icon"></i>--}}
                            <p>
                                {{$child->name_ru}}
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        @if($child->has_child())
                            <ul class="nav nav-treeview" style="display: none;  background-color: #50C1D0">
                                @foreach($child->childs() as $chch)
                                    <li class="nav-item ">
                                        <a href="/admin/admin-slug-top/{{$chch->id}}" class="nav-link ">
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

@if(Auth::user()->role == 1)
    <li class="nav-item">
        <a href="{{route('teachers.index')}}" class="nav-link">
            <i class="nav-icon fas fa-th"></i>
            <p>
                O'qituvchilar
            </p>
        </a>
    </li>
@endif
