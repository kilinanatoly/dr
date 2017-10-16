<?php

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>
<div class="site-index">
   <div class="site-index__block1">
       <img src="/images/logo1.jpg" alt="">
   </div>
    <div class="site-index__block2">
        <?=$this->render('obrat',[
                'model'=>$model
        ])?>
    </div>
   <div class="site-index__text1">
       Как известно многим, 11 ноября у меня день рождения и по некоторым причинам я не буду никого обзванивать, дабы Вы
       разделили со мной этот значимый день(лень пиздец).
       Я буду рад видеть абсолютно всех, кто-то возможно держит на меня какую то обиду, но я не виноват, что не оправдал ваших ожиданий.
       По воле Аллаха мой день рождения выпадает на выходные, а именно на субботу. С большей вероятностью мероприятие будет проходить
       на базе отдыха «Олег», ориентировачно в 18:00 по татарскому времени. Время и место могут измениться, я буду держать Вас в курсе с
       помощью смс рассылок.
   </div>
    <hr>
    <div class="preim1">
        <div class="cmsl_wrapper1">
            <div class="preim1__wrap">
                <div class="preim1__wrap_list">
                    <div class="preim1__wrap_list_item">
                        <div class="preim1__wrap_list_item_img">
                            <img class="img_static" src="/images/preim-img1.png" alt="">
                            <img class="img_hover" src="/images/preim-img1_blue.png" alt="">
                        </div>
                        <div class="preim1__wrap_list_item_content">
                            <div class="preim1__wrap_list_item_content_title">
                                Гарантия
                            </div>
                            <div class="preim1__wrap_list_item_content_text1">
                                хорошего настроения
                            </div>
                        </div>
                    </div>
                    <div class="preim1__wrap_list_item">
                        <div class="preim1__wrap_list_item_img">
                            <img class="img_static" src="/images/preim-img1.png" alt="">
                            <img class="img_hover" src="/images/preim-img1_blue.png" alt="">
                        </div>
                        <div class="preim1__wrap_list_item_content">
                            <div class="preim1__wrap_list_item_content_title">
                                Безлимитный кальянн
                            </div>
                            <div class="preim1__wrap_list_item_content_text1">
                                Только дарксайд и танж
                            </div>
                        </div>
                    </div>
                    <div class="preim1__wrap_list_item">
                        <div class="preim1__wrap_list_item_img">
                            <img class="img_static" src="/images/preim-img1.png" alt="">
                            <img class="img_hover" src="/images/preim-img1_blue.png" alt="">
                        </div>
                        <div class="preim1__wrap_list_item_content">
                            <div class="preim1__wrap_list_item_content_title">
                                Никто не узнает
                            </div>
                            <div class="preim1__wrap_list_item_content_text1">
                                Подписывается договор о нераспространении каверзных фото
                            </div>
                        </div>
                    </div>


                    <div class="preim1__wrap_list_blue" style="left: 0px;"></div>
                </div>
                <div class="preim1__wrap_border">
                    <div class="preim1__wrap_border_wrap"></div>
                </div>
            </div>
        </div>
    </div>
    <hr>

    <div class="custom-block1">
        <div class="custom-block1__title">
            Категорически запрещается:
        </div>
        <div class="custom-block1__list1">
            <ul>
                <li><span class="img"><img src="/images/danger1.png" alt=""></span><span class="text">Вести разговоры про Путина и Навального (Леша, пожалуйста)</span></li>
                <li><span class="img"><img src="/images/danger1.png" alt=""></span><span class="text">Устраивать антикоррупционные митинги (Леша, прошу)</span></li>
                <li><span class="img"><img src="/images/danger1.png" alt=""></span><span class="text">Создавать любые конфликтные ситуации, драться (хотя бы при мне)</span></li>
                <li><span class="img"><img src="/images/danger1.png" alt=""></span><span class="text">Читать намаз (Артем, ты не мусульманин)</span></li>
                <li><span class="img"><img src="/images/danger1.png" alt=""></span><span class="text">Быть трезвым</span></li>
            </ul>
        </div>
        <div class="custom-block1__list1_img">
            <img src="/images/mem1.jpg" alt="">
        </div>
    </div>
    <hr>
    <div class="custom-block2">
        <div class="custom-block2__title">
            Приветствуется:
        </div>
        <div class="custom-block2__list1_img">
            <img src="/images/mem2.jpg" alt="">
        </div>
        <div class="custom-block2__list1">
            <ul>
                <li><span class="img"><img src="/images/like1.png" alt=""></span><span class="text">Позитивный настрой на хороший отдых</span></li>
                <li><span class="img"><img src="/images/like1.png" alt=""></span><span class="text">Искренние(повторюсь, искренние!) поздравления</span></li>
                <li><span class="img"><img src="/images/like1.png" alt=""></span><span class="text">Желание танцевать (я знаю, ты умеешь)</span></li>
                <li><span class="img"><img src="/images/like1.png" alt=""></span><span class="text">Твое присутствие</span></li>
            </ul>
        </div>

    </div>
    <hr>
    <div class="custom-block3">
        <div class="custom-block3__title">
            Распространите эту инфомацию, как вы это любите!
        </div>
        <div class="custom-block3__video">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/-EqxBnIVlS0" frameborder="0" allowfullscreen></iframe>
        </div>
    </div>
</div>
