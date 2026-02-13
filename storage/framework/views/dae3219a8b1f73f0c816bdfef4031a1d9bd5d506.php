<div class="left_side_title_top mt-3 card-text"><?php echo app('translator')->get('index.НЕ ПРОПУСТИТЕ ВАЖНОЕ'); ?></div>
<div class="left_social_box">
    <a href="https://twitter.com/tashkentlaw" class="left_social_box_items"
       target="_blank" rel="noopener noreferrer">
        <i class="fab fa-twitter" style="color: #03A9F5;"></i>
        <span class="card-text" style="font-size: 13px; font-weight: bold;"><?php echo app('translator')->get('index.tw'); ?></span>
        <span class="font-weight-bold"
              style="font-size: 13px; color: grey;"><?php echo app('translator')->get('index.подписчиков'); ?></span>
    </a>
    <a href="https://www.youtube.com/channel/UCTAhGEQDYohjqmDAsD9yRBg"
       class="left_social_box_items" target="_blank" rel="noopener noreferrer">
        <i class="fab fa-youtube" style="color: #FE0000;"></i>
        <span class="card-text" style="font-size: 13px; font-weight: bold;"><?php echo app('translator')->get('index.yb'); ?></span>
        <span class="font-weight-bold"
              style="font-size: 13px; color: grey;"><?php echo app('translator')->get('index.подписчиков'); ?></span>
    </a>
    <a href="https://t.me/tsulofficial" class="left_social_box_items" target="_blank"
       rel="noopener noreferrer">
        <i class="fab fa-telegram-plane" style="color: #03A9F5;"></i>
        <span class="card-text" style="font-size: 13px; font-weight: bold;"><?php echo app('translator')->get('index.tg'); ?></span>
        <span class="font-weight-bold"
              style="font-size: 13px; color: grey;"><?php echo app('translator')->get('index.подписчиков'); ?></span>
    </a>
    <a href="https://www.fb.com/tsulofficial" class="left_social_box_items"
       target="_blank" rel="noopener noreferrer">
        <i class="fab fa-facebook-f" style="color: #4267B8;"></i>
        <span class="card-text" style="font-size: 13px; font-weight: bold;"><?php echo app('translator')->get('index.fb'); ?></span>
        <span class="font-weight-bold"
              style="font-size: 13px; color: grey;"><?php echo app('translator')->get('index.подписчиков'); ?></span>
    </a>

</div>
<script>
    const key = 'AIzaSyDm-Ba4mnpnm8aSQcllbk8qnC_6-ofuxPk';
    const user = 'UC3fxnjAs9HwaTTF9ECh2Mpg';

    let getsubcribers = () => {
        fetch('https://www.googleapis.com/youtube/v3/channels?part=statistics&id=' + user + '&key=' + key)
            .then(response => {
                return response.json()
            })
            .then(data => {
                console.log(data.items[0].statistics.subscriberCount);
            })
    }

    getsubcribers();


</script>
<?php /**PATH /var/www/html/resources/views/simple/includes/socials_box.blade.php ENDPATH**/ ?>