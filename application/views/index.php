<body>

    <header style="background-image: url(<?=base_url()?>assets/img/h_p_bg.jpg);">

        <div class="center">

            <div class="language_div">
                <span data-value="ru" class="lng lng_rus">rus</span>
                <span data-value="am" class="lng lng_arm">arm</span>
            </div>
    
            <main>
                <h1 class="title wow bounceIn">What is Lorem Ipsum</h1>
                <p class="main_text">
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book...
                </p>

                <div class="main_buttons">
                    <button class="m_btn learn_more_btn">learn more</button>
                    <a class="buttons_href" href="#" >
                        <button class="m_btn begin_btn">begin</button>
                    </a>
                </div>
            </main>

        </div>

    </header>

    <div class="center" id="elementtoScrollToID">

        <div class="challenge">
            <div class="img_left_div wow bounceIn">
                <img src="<?=base_url()?>assets/img/challenge.jpg" alt="challenge">
            </div>
            <div class="text_right_div">
                <h2>challenge</h2>
                <hr>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book ...</p>
            </div>
        </div>

        <div class="solution">
            <div class="text_left_div">
                <h2>Solution</h2>
                <hr>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book ...</p>
            </div>

            <div class="img_right_div wow bounceIn">
                <img src="<?=base_url()?>assets/img/solution.jpg" alt="challenge">
            </div>
        </div>

    </div>



    <div class="center">
    
        <h2 class="functional">Functional</h2>

        <div class="cards">

            <div class="card card_1 wow zoomIn" style="background-image: url(<?=base_url()?>assets/img/1.jpg);">
                <div class="card_text">
                    <h3>Lorem ipsum</h3>
                </div>
            </div>

            <div class="card card_2 wow zoomIn" style="background-image: url(<?=base_url()?>assets/img/4.jpg);">
                <div class="card_text">
                    <h3>Lorem ipsum dolor</h3>
                </div>    
            </div>

            <div class="card card_3 wow zoomIn" style="background-image: url(<?=base_url()?>assets/img/3.jpg);">
                <div class="card_text">
                    <h3>Lorem ipsum</h3>
                </div>
            </div>

            <div class="card card_4 wow zoomIn" style="background-image: url(<?=base_url()?>assets/img/2.jpg);">
                <div class="card_text">
                    <h3>Lorem ipsum dolor</h3>
                </div>
            </div>

            <div class="card card_5 wow zoomIn" style="background-image: url(<?=base_url()?>assets/img/5.jpg);">
                <div class="card_text">
                    <h3>Lorem ipsum dolor</h3>
                </div>
            </div>

            <div class="card card_6 wow zoomIn" style="background-image: url(<?=base_url()?>assets/img/6.jpg);">
                <div class="card_text">
                    <h3>Lorem ipsum</h3>
                </div>
            </div>

        </div>

    </div> ff


    <div class="center text_center">
        <p class="join_text">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed, id quis consequatur magnam natus assumenda autem magni modi eveniet quam molestias eligendi corporis amet ad laboriosam sapiente odio! Voluptas, at possimus? Perspiciatis beatae, ratione eaque enim totam repudiandae aliquam neque quia? Quibusdam doloribus, id laudantium labore magni sapiente, asperiores sed expedita dolorum omnis dignissimos corporis. Doloribus pariatur numquam ipsum nostrum, quasi deleniti repellat vitae. Provident maxime vel consequatur possimus animi molestias distinctio quae quibusdam omnis tempora recusandae expedita laudantium ad vitae, laborum culpa ullam corporis a aspernatur minima ex delectus, saepe excepturi? Vero, non aliquam. Eum quisquam adipisci consequuntur debitis.
        </p>

        <div class="main_buttons begin_buttons">
            <a class="buttons_href" href="#" >
                <button class="m_btn btn_begin"><?=$this->lang->line('join');?></button>
            </a>
        </div>
    </div>


<script>

    /* Change Language */
    $('.language_div>span').click(function(){
            window.location.href = '<?php echo base_url(); ?>LangSwitch/switchLanguage/'+$(this).data('value');
    });
    
</script>