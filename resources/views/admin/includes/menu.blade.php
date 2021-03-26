@if(Auth::user()->role == 777)
    <li class="nav-item">
            <a href="{{route('edu-types.index')}}" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Ta`lim turlari
                <span class="right badge badge-danger">New</span>
              </p>
            </a>
          </li>
    <li class="nav-item">
            <a href="{{route('template.index')}}" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Shablonlar
              </p>
            </a>
          </li>

    @endif

@if(Auth::user()->role == 1)
    <li class="nav-item">
            <a href="{{route('exam.index')}}" class="nav-link">
              <i class="nav-icon far fa-calendar-alt"></i>
              <p>
                Imtihonlar
              </p>
            </a>
          </li>
    @endif
@if(Auth::user()->role == 5)
        <li class="nav-item">
            <a href="{{route('exams_for_student')}}" class="nav-link">
              <i class="nav-icon far fa-calendar-alt"></i>
              <p>
                Mavjud imtihonlar
              </p>
            </a>
          </li>
    <li class="nav-item">
            <a href="{{route('student.test.templates')}}" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Shablon testlar
              </p>
            </a>
          </li>
    <li class="nav-item">
            <a href="{{route('student.test.subjects')}}" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Fanlar bo'yicha testlar
              </p>
            </a>
          </li>
    <li class="nav-item">
            <a href="{{route('student.my.results')}}" class="nav-link">
              <i class="nav-icon fas fa-columns"></i>
              <p>
                Natijalarim
              </p>
            </a>
          </li>

    @endif
