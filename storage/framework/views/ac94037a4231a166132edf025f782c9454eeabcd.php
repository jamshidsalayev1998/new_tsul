

<?php $__env->startSection('content'); ?>
    <?php
    $locale = app()->getLocale();
    $main_rektor_word_locale = 'main_rektor_word_' . $locale;
    $short_info_locale = 'short_info_' . $locale;
    $duties_locale = 'duties_' . $locale;
    $biography_locale = 'biography_' . $locale;
    $reception_days_locale = 'reception_days_' . $locale;
    $full_name_locale = 'full_name_' . $locale;
        ?>
    <div class="rectors_page pb-5">
        <div class="rectors_page_main">
            <div>
                <!-- <div>
                            <?php echo $data->$main_rektor_word_locale; ?>

                        </div> -->
            </div>
            <div>
                <img style="width: 100%; height: auto;" src="<?php echo e(asset('')); ?><?php echo e($data->main_image); ?>" alt="">
                <span class="col-12">
                    <h4 class="col-12 col-md-12 col-lg-6"><?php echo e($data->$full_name_locale); ?></h4>
                    <h5 class="col-12 col-md-12 col-lg-6"><?php echo app('translator')->get('index.Huquqshunos, 1-darajali adliya maslahatchisi'); ?></h5>
                </span>
            </div>
        </div>
        <div class="container mt-5">
            <div class="my-3 py-1"
                style="padding-top: 56px !important; margin: 20px auto; border-bottom: 1px solid #233585; font-size: 24px; color: #233585; font-weight: 500;">
                
            </div>
            <div class="rp_appeal">
                <div>
                    <div class="rp_video_materials wow fadeIn" data-wow-duration="0.2s" data-wow-delay="0.2s">
                        <div class="rp_vm_play_box rp_video-play-button">
                            <i class="fas fa-play" id="rp_vm_play_i"></i>
                            <button id="rp_vm_play"></button>
                        </div>
                        <video poster="<?php echo e(asset('video/new_rolik-image.jpg')); ?>" id="rp_vm_id">
                            <source src="<?php echo e(asset('video/new_rolik.mp4')); ?>" type="video/mp4">
                            <source src="movie.ogg" type="video/ogg">
                            Your browser does not support the video tag.
                        </video>
                    </div>
                </div>
                <div>
                    <?php echo $data->$short_info_locale; ?>

                </div>
            </div>
        </div>


        <div class="container">
            <div class="mt-3">
                <ul class="rp_tabs">
                    <li data-tab-target="#biograpghy" class="active rp_tab"><?php echo app('translator')->get('index.Biograpghy'); ?></li>
                    <li data-tab-target="#duties_of_rector" class="rp_tab"><?php echo app('translator')->get('index.Duties of the rector'); ?>:</li>
                    <!-- <li data-tab-target="#Speeches_and_publications" class="rp_tab"><?php echo app('translator')->get('index.Speeches and publications'); ?></li> -->
                </ul>

                <div class="rp_tab-content">
                    <div id="biograpghy" data-tab-content class="active rp_biograpghy">
                        <?php echo $data->$biography_locale; ?>

                    </div>
                    <div id="duties_of_rector" data-tab-content>
                        <div>
                            <?php echo $data->$duties_locale; ?>

                        </div>
                    </div>
                    <div id="Speeches_and_publications" data-tab-content>
                        <div class="container rp_speeches">
                            <div class="row">

                                <div class="col-xl-3 mt-3">
                                    <div class="rp_speeches_items">
                                        <p>
                                            <i class="fas fa-calendar-alt"></i>
                                            <span>Lorem, ipsum dolor sit</span>
                                        </p>
                                        <span>
                                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quidem alias
                                            exercitationem suscipit delectus! Quos commodi, illum veritatis facere
                                            cum
                                            exercitationem numquam quas. Aliquam minima minus provident at eos vel
                                            officia?
                                        </span>
                                        <a href="#!">Read more <i class="fas fa-chevron-right ml-2"></i></a>
                                    </div>
                                </div>
                                <div class="col-xl-3 mt-3">
                                    <div class="rp_speeches_items">
                                        <p>
                                            <i class="fas fa-calendar-alt"></i>
                                            <span>Lorem, ipsum dolor sit</span>
                                        </p>
                                        <span>
                                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quidem alias
                                            exercitationem suscipit delectus! Quos commodi, illum veritatis facere
                                            cum
                                            exercitationem numquam quas. Aliquam minima minus provident at eos vel
                                            officia?
                                        </span>
                                        <a href="#!">Read more <i class="fas fa-chevron-right ml-2"></i></a>
                                    </div>
                                </div>
                                <div class="col-xl-3 mt-3">
                                    <div class="rp_speeches_items">
                                        <p>
                                            <i class="fas fa-calendar-alt"></i>
                                            <span>Lorem, ipsum dolor sit</span>
                                        </p>
                                        <span>
                                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quidem alias
                                            exercitationem suscipit delectus! Quos commodi, illum veritatis facere
                                            cum
                                            exercitationem numquam quas. Aliquam minima minus provident at eos vel
                                            officia?
                                        </span>
                                        <a href="#!">Read more <i class="fas fa-chevron-right ml-2"></i></a>
                                    </div>
                                </div>
                                <div class="col-xl-3 mt-3">
                                    <div class="rp_speeches_items">
                                        <p>
                                            <i class="fas fa-calendar-alt"></i>
                                            <span>Lorem, ipsum dolor sit</span>
                                        </p>
                                        <span>
                                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quidem alias
                                            exercitationem suscipit delectus! Quos commodi, illum veritatis facere
                                            cum
                                            exercitationem numquam quas. Aliquam minima minus provident at eos vel
                                            officia?
                                        </span>
                                        <a href="#!">Read more <i class="fas fa-chevron-right ml-2"></i></a>
                                    </div>
                                </div>
                                <div class="col-xl-3 mt-3">
                                    <div class="rp_speeches_items">
                                        <p>
                                            <i class="fas fa-calendar-alt"></i>
                                            <span>Lorem, ipsum dolor sit</span>
                                        </p>
                                        <span>
                                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quidem alias
                                            exercitationem suscipit delectus! Quos commodi, illum veritatis facere
                                            cum
                                            exercitationem numquam quas. Aliquam minima minus provident at eos vel
                                            officia?
                                        </span>
                                        <a href="#!">Read more <i class="fas fa-chevron-right ml-2"></i></a>
                                    </div>
                                </div>
                                <div class="col-xl-3 mt-3">
                                    <div class="rp_speeches_items">
                                        <p>
                                            <i class="fas fa-calendar-alt"></i>
                                            <span>Lorem, ipsum dolor sit</span>
                                        </p>
                                        <span>
                                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quidem alias
                                            exercitationem suscipit delectus! Quos commodi, illum veritatis facere
                                            cum
                                            exercitationem numquam quas. Aliquam minima minus provident at eos vel
                                            officia?
                                        </span>
                                        <a href="#!">Read more <i class="fas fa-chevron-right ml-2"></i></a>
                                    </div>
                                </div>
                                <div class="col-xl-3 mt-3">
                                    <div class="rp_speeches_items">
                                        <p>
                                            <i class="fas fa-calendar-alt"></i>
                                            <span>Lorem, ipsum dolor sit</span>
                                        </p>
                                        <span>
                                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quidem alias
                                            exercitationem suscipit delectus! Quos commodi, illum veritatis facere
                                            cum
                                            exercitationem numquam quas. Aliquam minima minus provident at eos vel
                                            officia?
                                        </span>
                                        <a href="#!">Read more <i class="fas fa-chevron-right ml-2"></i></a>
                                    </div>
                                </div>
                                <div class="col-xl-3 mt-3">
                                    <div class="rp_speeches_items">
                                        <p>
                                            <i class="fas fa-calendar-alt"></i>
                                            <span>Lorem, ipsum dolor sit</span>
                                        </p>
                                        <span>
                                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quidem alias
                                            exercitationem suscipit delectus! Quos commodi, illum veritatis facere
                                            cum
                                            exercitationem numquam quas. Aliquam minima minus provident at eos vel
                                            officia?
                                        </span>
                                        <a href="#!">Read more <i class="fas fa-chevron-right ml-2"></i></a>
                                    </div>
                                </div>
                                <div class="col-xl-3 mt-3">
                                    <div class="rp_speeches_items">
                                        <p>
                                            <i class="fas fa-calendar-alt"></i>
                                            <span>Lorem, ipsum dolor sit</span>
                                        </p>
                                        <span>
                                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quidem alias
                                            exercitationem suscipit delectus! Quos commodi, illum veritatis facere
                                            cum
                                            exercitationem numquam quas. Aliquam minima minus provident at eos vel
                                            officia?
                                        </span>
                                        <a href="#!">Read more <i class="fas fa-chevron-right ml-2"></i></a>
                                    </div>
                                </div>
                                <div class="col-xl-3 mt-3">
                                    <div class="rp_speeches_items">
                                        <p>
                                            <i class="fas fa-calendar-alt"></i>
                                            <span>Lorem, ipsum dolor sit</span>
                                        </p>
                                        <span>
                                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quidem alias
                                            exercitationem suscipit delectus! Quos commodi, illum veritatis facere
                                            cum
                                            exercitationem numquam quas. Aliquam minima minus provident at eos vel
                                            officia?
                                        </span>
                                        <a href="#!">Read more <i class="fas fa-chevron-right ml-2"></i></a>
                                    </div>
                                </div>
                                <div class="col-xl-3 mt-3">
                                    <div class="rp_speeches_items">
                                        <p>
                                            <i class="fas fa-calendar-alt"></i>
                                            <span>Lorem, ipsum dolor sit</span>
                                        </p>
                                        <span>
                                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quidem alias
                                            exercitationem suscipit delectus! Quos commodi, illum veritatis facere
                                            cum
                                            exercitationem numquam quas. Aliquam minima minus provident at eos vel
                                            officia?
                                        </span>
                                        <a href="#!">Read more <i class="fas fa-chevron-right ml-2"></i></a>
                                    </div>
                                </div>
                                <div class="col-xl-3 mt-3">
                                    <div class="rp_speeches_items">
                                        <p>
                                            <i class="fas fa-calendar-alt"></i>
                                            <span>Lorem, ipsum dolor sit</span>
                                        </p>
                                        <span>
                                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quidem alias
                                            exercitationem suscipit delectus! Quos commodi, illum veritatis facere
                                            cum
                                            exercitationem numquam quas. Aliquam minima minus provident at eos vel
                                            officia?
                                        </span>
                                        <a href="#!">Read more <i class="fas fa-chevron-right ml-2"></i></a>
                                    </div>
                                </div>
                                <div class="col-xl-3 mt-3">
                                    <div class="rp_speeches_items">
                                        <p>
                                            <i class="fas fa-calendar-alt"></i>
                                            <span>Lorem, ipsum dolor sit</span>
                                        </p>
                                        <span>
                                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quidem alias
                                            exercitationem suscipit delectus! Quos commodi, illum veritatis facere
                                            cum
                                            exercitationem numquam quas. Aliquam minima minus provident at eos vel
                                            officia?
                                        </span>
                                        <a href="#!">Read more <i class="fas fa-chevron-right ml-2"></i></a>
                                    </div>
                                </div>
                                <div class="col-xl-3 mt-3">
                                    <div class="rp_speeches_items">
                                        <p>
                                            <i class="fas fa-calendar-alt"></i>
                                            <span>Lorem, ipsum dolor sit</span>
                                        </p>
                                        <span>
                                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quidem alias
                                            exercitationem suscipit delectus! Quos commodi, illum veritatis facere
                                            cum
                                            exercitationem numquam quas. Aliquam minima minus provident at eos vel
                                            officia?
                                        </span>
                                        <a href="#!">Read more <i class="fas fa-chevron-right ml-2"></i></a>
                                    </div>
                                </div>
                                <div class="col-xl-3 mt-3">
                                    <div class="rp_speeches_items">
                                        <p>
                                            <i class="fas fa-calendar-alt"></i>
                                            <span>Lorem, ipsum dolor sit</span>
                                        </p>
                                        <span>
                                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quidem alias
                                            exercitationem suscipit delectus! Quos commodi, illum veritatis facere
                                            cum
                                            exercitationem numquam quas. Aliquam minima minus provident at eos vel
                                            officia?
                                        </span>
                                        <a href="#!">Read more <i class="fas fa-chevron-right ml-2"></i></a>
                                    </div>
                                </div>
                                <div class="col-xl-3 mt-3">
                                    <div class="rp_speeches_items">
                                        <p>
                                            <i class="fas fa-calendar-alt"></i>
                                            <span>Lorem, ipsum dolor sit</span>
                                        </p>
                                        <span>
                                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quidem alias
                                            exercitationem suscipit delectus! Quos commodi, illum veritatis facere
                                            cum
                                            exercitationem numquam quas. Aliquam minima minus provident at eos vel
                                            officia?
                                        </span>
                                        <a href="#!">Read more <i class="fas fa-chevron-right ml-2"></i></a>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
        <div class="container">
            <div class="short_card_about_rector">
                <div>
                    <div class="rp_about_img bg-none" style="margin-left: 0 !important;">
                        <img style="width: 100%;  object-fit: contain;"
                            src="<?php echo e(asset('')); ?><?php echo e($data->main_image); ?>" alt="">
                    </div>
                </div>
                <div class="d-flex align-items-center justify-content-center">
                    <div class="rp_contact">
                        <h3 class="font-weight-bold text-center"><?php echo app('translator')->get('index.Contact Info'); ?></h3>
                        <p>
                            <span class="font-weight-bold"><i
                                    class="fas fa-phone-square-alt mr-2"></i><?php echo app('translator')->get('index.Phone'); ?>:</span>
                            <span><?php echo e($data->phone); ?></span>
                        </p>
                        <p class="rp_contact_details_element">
                            <span class="font-weight-bold"><i
                                    class="fas fa-envelope-square mr-2"></i><?php echo app('translator')->get('index.Email'); ?>:</span>
                            <span> <?php echo e($data->email); ?></span>
                        </p>
                        <p class="rp_contact_details_element">
                            <span class="font-weight-bold"><i
                                    class="fas fa-user-clock mr-2"></i><?php echo app('translator')->get('index.Время приема'); ?>:</span>
                            <span><?php echo e($data->$reception_days_locale); ?></span>
                        </p>
                        <p class="rp_contact_details_element">
                            <a href="#!" class="mr-2"><i class="fab fa-twitter-square"></i></a>
                            <a href="#!" class="mr-2"><i class="fab fa-facebook-square"></i></a>
                            <a href="#!"><i class="fab fa-linkedin"></i></a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        
            
                
                    
                        
                        
                            
                        
                            
                            
                                
                                
                            
                        
                    
                
                    
                        
                        
                            
                            
                            
                        
                            
                            
                            
                        
                            
                                
                            
                            
                        
                            
                            
                            
                            
                        
                    
                
            

    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('simple.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/resources/views/simple/rektor.blade.php ENDPATH**/ ?>