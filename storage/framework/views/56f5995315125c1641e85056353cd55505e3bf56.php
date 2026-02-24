<?php
$about = 'App\AboutUniversity'::where('status' , 1)->first();
$locale = app()->getLocale();
        $name_locale = 'name_'.$locale;
        $short_desc_locale = 'short_description_'.$locale;
        $full_inf_locale = 'full_information_'.$locale;
        $address_locale = 'address_'.$locale;
        $logo_locale = 'front_assets/assets/img/logo_university/TDYU_'.$locale.'_white.png';
?>
<footer class="eighth-part w-100">
            <div class="footer_img_box">
                <img src="<?php echo e(asset('front_assets/assets/img/img1.jpg')); ?>" alt="img not found">
            </div>
            <div class="footer_data_box">
                <div class="container">
                    <div class="footer_box">
                        <div>
                            <div>
                                <div style="height: auto !important; width:auto;" class="footer_logo_box">
                                    <img src="<?php echo e(asset($logo_locale)); ?>" alt="">
                                </div>
                                <h5 class="footer_about_universty">
                                    <?php echo $about->$short_desc_locale; ?>

                                </h5>
                            </div>
                        </div>
                        <div>
                            <h5 class="footer_title_columns"><?php echo app('translator')->get('index.Контакт'); ?></h5>
                            <div>
                                 <p class="mt-3" style="font-size: 16px; font-weight: 600;">
                                    <i class="fas fa-phone-alt mr-2"></i>
                                    <span>Kommutator: +998 71-236-28-06 
                                        <br>+998 71 233-66-36</span>
                                </p>
                                <p class="mt-3" style="font-size: 16px; font-weight: 600;">
                                    <i class="fas fa-phone-alt mr-2"></i>
                                    <!-- <span><?php echo app('translator')->get('index.Тел'); ?>: <?php echo e($about->phone); ?></span> -->
                                    <span>Qabul bo'limi: +998 71 233-13-95</span>
                                </p>
                                <p class="mt-3" style="font-size: 16px; font-weight: 600;">
                                    <i class="fas fa-fax mr-2"></i>
                                    <span><?php echo app('translator')->get('index.Факс'); ?>: <?php echo e($about->faks); ?></span>
                                </p>
                                 <p class="mt-3" style="font-size: 16px; font-weight: 600;">
                                    <i class="fas fa-phone-alt mr-2"></i>
                                    <span>Korrupsiya haqida xabar berish uchun ishonch telefoni: +998 71 233-42-09</span>
                                </p>
                                <p class="mt-3" style="font-size: 16px; font-weight: 600;">
                                    <i class="fas fa-envelope mr-2"></i>
                                    <span><?php echo app('translator')->get('index.e-mail'); ?>: <a class="owlItems" href="#"
                                            style="font-size: 16px; font-weight: 600; color: white;"><?php echo e($about->email); ?></a></span>
                                </p>
                                <!-- <p>
                                    <i class="fas fa-map-marker-alt mr-2"></i>
                                    <span style="font-size: 16px; font-weight: 600;"><?php echo e($about->$address_locale); ?></span>
                                </p> -->
                                <p class="mt-4">
                                    <a href="<?php echo e($about->twitter); ?>" class="footer_icons" target="_blank"
                                        rel="noopener noreferrer">
                                        <i class="fab fa-twitter"></i></a>
                                    <a href="<?php echo e($about->telegram); ?>" target="_blank" class="footer_icons"
                                        rel="noopener noreferrer">
                                        <i class="fab fa-telegram-plane"></i>
                                    </a>
                                    <a href="<?php echo e($about->youtube); ?>"
                                        class="footer_icons" target="_blank" rel="noopener noreferrer">
                                        <i class="fab fa-youtube"></i>
                                    </a>
                                    <a href="<?php echo e($about->instagram); ?>" class="footer_icons"
                                        target="_blank" rel="noopener noreferrer">
                                        <i class="fab fa-instagram"></i></a>
                                    <a href="<?php echo e($about->facebook); ?>" target="_blank" class="footer_icons"
                                        rel="noopener noreferrer">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>

                                </p>
                            </div>
                        </div>
                        <div>
                            <div>
                                <h5 class="footer_title_columns"><?php echo app('translator')->get('index.Локация'); ?> </h5>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>









<?php /**PATH /var/www/html/resources/views/simple/includes/footer.blade.php ENDPATH**/ ?>