<?php
/*
Template Name: access Page
*/
get_header(); ?>
        <div class="sub_image">
            <img src="<?php echo get_template_directory_uri(); ?>/img/logo_name.png" alt="">
            <h1>Access</h1>
        </div>

        <div class="modal-container">
            <div class="modal-body">
                <div class="modal-close">×</div>
                <div class="modal-content">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/line_modal.png" alt="">
                </div>
                <a href="https://qr-official.line.me/gs/M_785cyyhi_BW.png?oat_content=qr"><img id="QR" src="<?php echo get_template_directory_uri(); ?>/img/LINE_QR.png" alt=""></a>
                <a href="https://lin.ee/5fRrlnq"><p id="add_friend">追加して予約はこちらをクリック</p></a>
            </div>
        </div>
    </header>

    <main>
        <div class="access_max">
            <section class="access_text">
                <h4>アクセス</h4>
                <ul>
                    <li class="title">所在地:</li>
                    <li class="text">〒491-0843<br>愛知県一宮市柳戸町１丁目６２−５</li>
                    <li class="title">電話番号:</li>
                    <li class="text"><a href="tel:080-4224-9931">080-4224-9931</a></li>
                    <li class="title">駐車場:</li>
                    <li class="text">あり<br>当サロンから道路・建物を挟み東側に駐車場があります。<br>そちらの３番へお停め頂く様によろしくお願いします。
                    </li>
                    <img src="<?php echo get_template_directory_uri(); ?>/img/parking.jpg" alt="">
                </ul>
    
            </section>
            <section class="map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3256.397387390788!2d136.80298517577742!3d35.29610615103392!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6003adae92093259%3A0x5e547f4254a546b!2zUmUuTGF4eSDjgJDjg6rjg6njgq_jgrfjg7zjgJE!5e0!3m2!1sja!2sjp!4v1715692093968!5m2!1sja!2sjp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </section>
        </div>
    </main>
<?php get_footer(); ?>