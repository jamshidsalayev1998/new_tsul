<?php if(Auth::user()->role == 7): ?>

    <li class="nav-item">
        <a href="<?php echo e(route('admin.slider.index')); ?>" class="nav-link">
            <i class="nav-icon fas fa-th"></i>
            <p>
                Slider
            </p>
        </a>
    </li>
    <li class="nav-item">
        <a href="<?php echo e(route('admin.system_card.index')); ?>" class="nav-link">
            <i class="nav-icon fas fa-th"></i>
            <p>
                System Cards
            </p>
        </a>
    </li>
    <li class="nav-item">
        <a href="<?php echo e(route('admin.menu.index')); ?>" class="nav-link">
            <i class="nav-icon fas fa-th"></i>
            <p>
                Menus
            </p>
        </a>
    </li>
    <li class="nav-item">
        <a href="<?php echo e(route('admin.menu_top.index')); ?>" class="nav-link">
            <i class="nav-icon fas fa-th"></i>
            <p>
                Menus Top
            </p>
        </a>
    </li>
    <li class="nav-item">
        <a href="<?php echo e(route('admin.page.index')); ?>" class="nav-link">
            <i class="nav-icon fas fa-th"></i>
            <p>
                Pages
            </p>
        </a>
    </li>
    <li class="nav-item">
        <a href="<?php echo e(route('admin.about_university.index')); ?>" class="nav-link">
            <i class="nav-icon fas fa-th"></i>
            <p>
                About university
            </p>
        </a>
    </li>
    <li class="nav-item">
        <a href="<?php echo e(route('admin.neww.index')); ?>" class="nav-link">
            <i class="nav-icon fas fa-th"></i>
            <p>
                News
            </p>
        </a>
    </li>
    <li class="nav-item">
        <a href="<?php echo e(route('admin.media.index')); ?>" class="nav-link">
            <i class="nav-icon fas fa-th"></i>
            <p>
                Media
            </p>
        </a>
    </li>
    <li class="nav-item">
        <a href="<?php echo e(route('admin.announce.index')); ?>" class="nav-link">
            <i class="nav-icon fas fa-th"></i>
            <p>
                Announces
            </p>
        </a>
    </li>
    <li class="nav-item">
        <a href="<?php echo e(route('admin.separately.index')); ?>" class="nav-link">
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
                <a href="<?php echo e(route('admin.lesson.timetable.index')); ?>" class="nav-link">
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
        <a href="<?php echo e(route('admin_young_scientist_new.index')); ?>" class="nav-link">
            <i class="nav-icon fas fa-th"></i>
            <p>
                Scientists news
            </p>
        </a>
    </li>

    <li class="nav-item">
        <a href="<?php echo e(route('admin_scientific_article.index')); ?>" class="nav-link">
            <i class="nav-icon fas fa-th"></i>
            <p>
                Scientists articles
            </p>
        </a>
    </li>
    <li class="nav-item">
        <a href="<?php echo e(route('admin_faculty.index')); ?>" class="nav-link">
            <i class="nav-icon fas fa-th"></i>
            <p>
                Faculties
            </p>
        </a>
    </li>
    <li class="nav-item">
        <a href="<?php echo e(route('admin_section.index')); ?>" class="nav-link">
            <i class="nav-icon fas fa-th"></i>
            <p>
                Sections
            </p>
        </a>
    </li>
    <li class="nav-item">
        <a href="<?php echo e(route('admin_rector.index')); ?>" class="nav-link">
            <i class="nav-icon fas fa-th"></i>
            <p>
                Rektor
            </p>
        </a>
    </li>
    <li class="nav-item">
        <a href="<?php echo e(route('admin_center.index')); ?>" class="nav-link">
            <i class="nav-icon fas fa-th"></i>
            <p>
                Centers
            </p>
        </a>
    </li>
    <li class="nav-item">
        <a href="<?php echo e(route('admin_ustav.index')); ?>" class="nav-link">
            <i class="nav-icon fas fa-th"></i>
            <p>
                Ustav
            </p>
        </a>
    </li>
    <li class="nav-item">
        <a href="<?php echo e(route('admin_kafedra.index')); ?>" class="nav-link">
            <i class="nav-icon fas fa-th"></i>
            <p>
                Departments
            </p>
        </a>
    </li>
    <li class="nav-item">
        <a href="<?php echo e(route('admin_management.index')); ?>" class="nav-link">
            <i class="nav-icon fas fa-th"></i>
            <p>
                Managements
            </p>
        </a>
    </li>
    <li class="nav-item">
        <a href="<?php echo e(route('admin_ilmiy_nashr.index')); ?>" class="nav-link">
            <i class="nav-icon fas fa-th"></i>
            <p>
                Ilmiy nashrlar
            </p>
        </a>
    </li>
    <li class="nav-item">
        <a href="<?php echo e(route('kafedra_admin.index')); ?>" class="nav-link">
            <i class="nav-icon fas fa-th"></i>
            <p>
                Kafedra admin
            </p>
        </a>
    </li>
    <li class="nav-item">
        <a href="<?php echo e(route('superadmin.teachers.index')); ?>" class="nav-link">
            <i class="nav-icon fas fa-th"></i>
            <p>
                Teachers page
            </p>
        </a>
    </li>
    <li class="nav-item">
        <a href="<?php echo e(route('requestment.index')); ?>" class="nav-link">
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
    <?php $__currentLoopData = $menus; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $menu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <li class="nav-item">
            <a href="#" class="nav-link">
                
                
                <p>
                    <?php echo e($menu->name_ru); ?>

                </p>
            </a>
            <ul class="nav nav-treeview" style="display: none; background-color: #508AD0">
                <?php $__currentLoopData = $menu->childs(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $child): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
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
                            <a href="/admin/admin-slug/<?php echo e($child->id); ?>">
                                <i class="fa fa-file" aria-hidden="true"></i>
                            </a>
                            <a href="" style="color: #005ED0 !important;">
                                <i class="fa fa-cogs" aria-hidden="true"></i>
                            </a>
                            <button class="change_eye_menu" type="button" data-id="<?php echo e($child->id); ?>"
                                    style="background-color: transparent; border: none; padding: 0; margin-left: 8px; margin-right: 8px; color: #D0C65A;outline: none;">
                                <i class="fa <?php if($child->status): ?>fa-eye <?php else: ?> fa-eye-slash <?php endif; ?>"
                                   aria-hidden="true"></i>
                            </button>
                        </div>
                        <a href="/admin/admin-slug/<?php echo e($child->id); ?>"
                           class="nav-link <?php if(!$child->has_child()): ?> hrefed <?php endif; ?>">
                            
                            <p>
                                <?php echo e($child->name_ru); ?>

                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <?php if($child->has_child()): ?>
                            <ul class="nav nav-treeview" style="display: none;  background-color: #50C1D0">
                                <?php $__currentLoopData = $child->childs(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $chch): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li class="nav-item ">
                                        <a href="/admin/admin-slug/<?php echo e($chch->id); ?>" class="nav-link ">
                                            
                                            <p><?php echo e($chch->name_ru); ?></p>
                                        </a>
                                    </li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                        <?php endif; ?>
                    </li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </li>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <li class="nav-header">Top Menus</li>
    <?php
    $menus_top = 'App\MenuTop'::where('leap', 0)->basic()->get();
    ?>
    <?php $__currentLoopData = $menus_top; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $menu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <li class="nav-item">
            <a href="#" class="nav-link">
                
                
                <p>
                    <?php echo e($menu->name_ru); ?>

                </p>
            </a>
            <ul class="nav nav-treeview" style="display: none; background-color: #508AD0">
                <?php $__currentLoopData = $menu->childs(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $child): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
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
                            <a href="/admin/admin-slug-top/<?php echo e($child->id); ?>">
                                <i class="fa fa-file" aria-hidden="true"></i>
                            </a>
                            <a href="" style="color: #005ED0 !important;">
                                <i class="fa fa-cogs" aria-hidden="true"></i>
                            </a>
                            <button class="change_eye_menu_top" type="button" data-id="<?php echo e($child->id); ?>"
                                    style="background-color: transparent; border: none; padding: 0; margin-left: 8px; margin-right: 8px; color: #D0C65A;outline: none;">
                                <i class="fa <?php if($child->status): ?>fa-eye <?php else: ?> fa-eye-slash <?php endif; ?>"
                                   aria-hidden="true"></i>
                            </button>
                        </div>
                        <a href="/admin/admin-slug-top/<?php echo e($child->id); ?>"
                           class="nav-link <?php if(!$child->has_child()): ?> hrefed <?php endif; ?>">
                            
                            <p>
                                <?php echo e($child->name_ru); ?>

                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <?php if($child->has_child()): ?>
                            <ul class="nav nav-treeview" style="display: none;  background-color: #50C1D0">
                                <?php $__currentLoopData = $child->childs(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $chch): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li class="nav-item ">
                                        <a href="/admin/admin-slug-top/<?php echo e($chch->id); ?>" class="nav-link ">
                                            
                                            <p><?php echo e($chch->name_ru); ?></p>
                                        </a>
                                    </li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                        <?php endif; ?>
                    </li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </li>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php endif; ?>
<li class="nav-item">
    <a href="<?php echo e(route('admin.feedbacks.index')); ?>" class="nav-link">
        <i class="nav-icon fas fa-th"></i>
        <p>
            Feedbacks
        </p>
    </a>
</li>
<li class="nav-item">
    <a href="<?php echo e(route('admin.feedbacks.ratingStats')); ?>" class="nav-link">
        <i class="nav-icon fas fa-th"></i>
        <p>
            ratingStats
        </p>
    </a>
</li>
<?php if(Auth::user()->role == 1): ?>
    <li class="nav-item">
        <a href="<?php echo e(route('teachers.index')); ?>" class="nav-link">
            <i class="nav-icon fas fa-th"></i>
            <p>
                O'qituvchilar
            </p>
        </a>
    </li>
<?php endif; ?>
<?php /**PATH /var/www/html/resources/views/admin/includes/menu.blade.php ENDPATH**/ ?>