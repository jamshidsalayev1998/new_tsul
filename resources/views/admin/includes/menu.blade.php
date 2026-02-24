@role('super-admin')
<li class="nav-item">
    <a href="{{route('admin.slider.index')}}" class="nav-link">
        <i class="nav-icon fas fa-th"></i>
        <p>Slider</p>
    </a>
</li>
<li class="nav-item">
    <a href="{{route('admin.system_card.index')}}" class="nav-link">
        <i class="nav-icon fas fa-th"></i>
        <p>System Cards</p>
    </a>
</li>
<li class="nav-item">
    <a href="{{route('admin.menu.index')}}" class="nav-link">
        <i class="nav-icon fas fa-th"></i>
        <p>Menus</p>
    </a>
</li>
<li class="nav-item">
    <a href="{{route('admin.menu_top.index')}}" class="nav-link">
        <i class="nav-icon fas fa-th"></i>
        <p>Menus Top</p>
    </a>
</li>
<li class="nav-item">
    <a href="{{route('admin.page.index')}}" class="nav-link">
        <i class="nav-icon fas fa-th"></i>
        <p>Pages</p>
    </a>
</li>
<li class="nav-item">
    <a href="{{route('admin.about_university.index')}}" class="nav-link">
        <i class="nav-icon fas fa-th"></i>
        <p>About university</p>
    </a>
</li>
<li class="nav-item">
    <a href="{{route('admin.neww.index')}}" class="nav-link">
        <i class="nav-icon fas fa-th"></i>
        <p>News</p>
    </a>
</li>
<li class="nav-item">
    <a href="{{route('admin.media.index')}}" class="nav-link">
        <i class="nav-icon fas fa-th"></i>
        <p>Media</p>
    </a>
</li>
<li class="nav-item">
    <a href="{{route('admin.announce.index')}}" class="nav-link">
        <i class="nav-icon fas fa-th"></i>
        <p>Announces</p>
    </a>
</li>
<li class="nav-item">
    <a href="{{route('admin.separately.index')}}" class="nav-link">
        <i class="nav-icon fas fa-th"></i>
        <p>Separately one new</p>
    </a>
</li>
<li class="nav-item">
    <a href="#" class="nav-link">
        <i class="nav-icon fas fa-clock"></i>
        <p>Time table <i class="fas fa-angle-left right"></i></p>
    </a>
    <ul class="nav nav-treeview" style="display: none; background-color: #508AD0">
        <li class="nav-item tool-nav" style="position: relative">
            <a href="{{route('admin.lesson.timetable.index')}}" class="nav-link">
                <p>Lesson</p>
            </a>
        </li>
    </ul>
</li>
<li class="nav-item">
    <a href="{{route('admin_young_scientist_new.index')}}" class="nav-link">
        <i class="nav-icon fas fa-graduation-cap"></i>
        <p>Scientists news</p>
    </a>
</li>
<li class="nav-item">
    <a href="{{route('admin_scientific_article.index')}}" class="nav-link">
        <i class="nav-icon fas fa-file-alt"></i>
        <p>Scientists articles</p>
    </a>
</li>
<li class="nav-item">
    <a href="{{route('admin_faculty.index')}}" class="nav-link">
        <i class="nav-icon fas fa-university"></i>
        <p>Faculties</p>
    </a>
</li>
<li class="nav-item">
    <a href="{{route('admin_kafedra.index')}}" class="nav-link">
        <i class="nav-icon fas fa-building"></i>
        <p>Departments (Kafedralar)</p>
    </a>
</li>
<li class="nav-item">
    <a href="{{route('kafedra_admin.index')}}" class="nav-link">
        <i class="nav-icon fas fa-users-cog"></i>
        <p>Kafedra admin</p>
    </a>
</li>
<li class="nav-item">
    <a href="{{route('superadmin.teachers.index')}}" class="nav-link">
        <i class="nav-icon fas fa-chalkboard-teacher"></i>
        <p>Teachers page</p>
    </a>
</li>

<li class="nav-header">System Management</li>
<li class="nav-item">
    <a href="{{route('users.index')}}" class="nav-link">
        <i class="nav-icon fas fa-users"></i>
        <p>User Management</p>
    </a>
</li>
<li class="nav-item">
    <a href="{{route('roles.index')}}" class="nav-link">
        <i class="nav-icon fas fa-user-tag"></i>
        <p>Roles</p>
    </a>
</li>
<li class="nav-item">
    <a href="{{route('permissions.index')}}" class="nav-link">
        <i class="nav-icon fas fa-user-shield"></i>
        <p>Permissions</p>
    </a>
</li>
<li class="nav-item">
    <a href="{{route('admin.feedbacks.index')}}" class="nav-link">
        <i class="nav-icon fas fa-comments"></i>
        <p>Feedbacks</p>
    </a>
</li>

<li class="nav-header">Bo'limlar boshqaruvi</li>
@endrole

@hasanyrole('super-admin|youth-sport-admin')
<li class="nav-item">
    <a href="{{route('youth-sport.index')}}" class="nav-link">
        <i class="nav-icon fas fa-running"></i>
        <p>Yoshlar va Sport</p>
    </a>
</li>
@endhasanyrole

@hasanyrole('super-admin|legal-research-admin')
<li class="nav-item">
    <a href="{{route('scientific.index')}}" class="nav-link">
        <i class="nav-icon fas fa-microscope"></i>
        <p>Ilmiy tadbirlar</p>
    </a>
</li>
@endhasanyrole

@hasanyrole('super-admin|international-admin')
<li class="nav-item">
    <a href="{{route('international.index')}}" class="nav-link">
        <i class="nav-icon fas fa-globe-americas"></i>
        <p>Xalqaro imkoniyatlar</p>
    </a>
</li>
@endhasanyrole

@role('kafedra-admin')
<li class="nav-item">
    <a href="{{route('teachers.index')}}" class="nav-link">
        <i class="nav-icon fas fa-th"></i>
        <p>O'qituvchilar</p>
    </a>
</li>
@endrole