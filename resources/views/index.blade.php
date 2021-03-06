@extends('layouts.app')
@section('content') 
    <div class="section back">
        <div class="container block_first">
            <div class="row">
                <div class="col-xs-12 promo">
                    <h2>Сервис для выгула собак </h2>
                    <h1>Walkie-Doggie</h1>
                    <span class="button__span">МЫ ПОМОЖЕМ ВАМ НЕСТИ ОТВЕСТВЕННОСТЬ ЗА ТЕХ, КОГО ВЫ ПРИРУЧИЛИ</span>
                </div>
            </div>
        </div>
    </div>      
<div class="section bgc2">
    <div class="container">
        <div id="about" class="row">
            <div class="col-xs-12 block_4">
                <h2 class="items__h2">Почему мы вам нужны</h2>
                <span class="items__span"><!-- Нередко бывают ситуации, когда мы не можем погулять с собакой: -->
                Вы владелец собаки, и нередко бывают ситуации, когда некому погулять с питомцем?
                Или, может быть, 
                вы заинтересованы в выгуле питомцев и хотите стать волкером (от англ. Walk – гулять)?</span>
            <div class="container__items">
                <div class="items__row">
                    <div class="row_item">
                    <img src="{{ asset('img/heal.png') }}">
                        <div class="item__span">
                            <h2>Плохое самочувствие</h2>
                        </div>
                    <span class="span_desc">Чувствуете себя плохо, но надо выгулять собаку?
                        Наш выгульщик позаботится о вашем питомце</span>
                    </div>
                    <div class="row_item">
                        <img src="{{ asset('img/zzz.png') }}">
                        <div class="item__span">
                            <h2>Усталость</h2>
                        </div>
                        <span class="span_desc">Бывают случаи когда вы пришли с учебы или работы совсем без сил, 
                            но гулять с собакой все равно надо? Наш сервис решит эту проблему</span>
                    </div>
                    <div class="row_item">
                        <img src="{{ asset('img/case.png') }}">
                        <div class="item__span">
                            <h2>Высокая занятость</h2>
                        </div>
                        <span class="span_desc">Уезжаете на несколько дней и не знаете кто позаботится о вашем любимце? 
                            Наши работники могут гулять 
                            с вашей собакой несколько раз в день на протяжении определенного вами срока</span>
                    </div>
               <!--  <div class="row_item">
                    <img src="{{ asset('img/dog.png') }}">
                    <div class="item__span">
                        <h2>Интерес к животным</h2>
                    </div>
                    <span class="span_desc">Если вы любите животных и хотели найти
                         подработку связанную с заботой о них, то у нас есть для вас вакансия</span>
                        </div> -->
                </div>
               <!--  <span class="items__span"></span>
                <div class="items__row">
                    <div class="row_item">
                    <img src="{{ asset('img/heal.png') }}">
                        <div class="item__span">
                            <h2>Желание помогать <br /> животным</h2>
                        </div>
                    <span class="span_desc">Вы всегда любили помогать животным, но не могли найти подработку
                    ,связанную с ними? Вступите в команду Walkie-Doggie и начните работать в дружном коллективе,
                    помогая нуждающимся питомцам</span>
                    </div>
                    <div class="row_item">
                        <img src="{{ asset('img/zzz.png') }}">
                        <div class="item__span">
                            <h2>Отсутствие возможности завести свою собаку</h2>
                        </div>
                        <span class="span_desc">Если по каким-то причинам вы не можете завести собаку,
                        то наш сервис предоставит вам возможность позаботиться о питомце, оставшимся на время
                        без хозяина </span>
                    </div>
                    <div class="row_item">
                        <img src="{{ asset('img/case.png') }}">
                        <div class="item__span">
                            <h2>Желание оценить свои силы перед тем, как завести свою собаку</h2>
                        </div>
                        <span class="span_desc">Думаете над идеей завести своего собственного питомца, но
                        сомневаетесь? Наш сервис поможет вам определиться, сможете ли справляться со
                        своим, возможно будущим, любимцем</span>
                    </div> -->
               <!--  <div class="row_item">
                    <img src="{{ asset('img/dog.png') }}">
                    <div class="item__span">
                        <h2>Интерес к животным</h2>
                    </div>
                    <span class="span_desc">Если вы любите животных и хотели найти
                         подработку связанную с заботой о них, то у нас есть для вас вакансия</span>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="section block_choose">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 block_5">
                <h2 class="items__h2">Почему Walkie-Doggie?</h2>
                <span class="items__span">Мы предлагаем нечто новое, 
                но при этом заботимся о безопасности наших клиентов</span>
                <div class="items__column">
                    <div class="row_item_1">
                        <img src="{{ asset('img/1.svg') }}" alt="">
                        <div class="span_good">
                            <h2 class="good__h2">Выгульщики проходят тщательный отбор</h2>
                            <span class="good__span">Волкеры допускаются к работе только после 
                            прохождения специализированных курсов</span>
                        </div>
                    </div>
                     <div class="row_item_1">
                        <img src="{{ asset('img/2.svg') }}" alt="">
                        <div class="span_good">
                            <h2 class="good__h2">Система анти-аукциона</h2>
                            <span class="good__span">Цена, которою платит хозяин только уменьшается!
                            Волкеры постоянно сбивают цену, чтобы именно они могли погулять с собакой</span>
                        </div>
                    </div>
                     <div class="row_item_1">
                        <img src="{{ asset('img/4.svg') }}" alt="">
                        <div class="span_good">
                            <h2 class="good__h2">Выгульщики работают сами на себя</h2>
                            <span class="good__span">Мы не принуждаем никого работать определенное количество часов. 
                            Волкеры сами выбирают сколько работать.</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="section block_about">
    <div class="container">
        <div id="service" class="row">
            <div class="col-xs-12 ">
                <div class="container__status">
                    <h2 class="items__h2_about">Как работает наш сервис</h2>
                    <div class="items__row serviceRow">
                        <div class="row_item">
                            <div class="row_circle">
                                1
                            </div>
                            <div class="item__span">
                                <h2>Зарегистрируйтесь</h2>
                            </div>
                            <span class="span_desc">После регистрации вы можете разместить заказ на прогулку,
                            указав все необходимые детали.</span>
                        </div>
                        <div class="row_item">
                            <div class="row_circle">
                                2
                            </div>
                            <div class="item__span">
                                <h2>Свяжитесь с выгульщиком</h2>
                            </div>
                            <span class="span_desc">Получите отклик на заказ от волкера. 
                            После подтверждения он отправится в указанную владельцем точку, чтобы забрать собаку и начать прогулку.</span>
                        </div>
                        <div class="row_item">
                            <div class="row_circle">
                                3
                            </div>
                            <div class="item__span">
                                <h2>Уделите время себе</h2>
                            </div>
                            <span class="span_desc">Проведите время с пользой, пока наш волкер гуляет с вашей собакой.</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="section offers">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 trio">
                <h2 class="items__h2">Наши предложения</h2>
                <div class="offerMargin col-xs-offset-1 col-xs-10">
                    <div class=" thumbs offer o1 col-xs-4">
                            <div class="name"><h3>Первая прогулка</h3></div>
                        <div class="caption description">
                            <span class="info">Стоимость первой прогулки - 150р</span>
                            <span class="pay"><button>Купить</button></span>
                        </div>
                    </div>
                    <div class="thumbs offer o2 col-xs-4">
                            <div class="name"><h3>1 прогулка</h3></div>
                        <div class="caption description">
                            <span class="info">Стоимость одной прогулки - 250р</span>
                            <span class="pay"><button>Купить</button></span>
                        </div>
                    </div>
                    <div class="thumbs offer o3 col-xs-4">
                             <div class="name">
                                <h3>10 прогулок</h3>
                            </div>
                        <div class="caption description">
                            <span class="info">Стоимость 10 прогулок - 2000р</span>
                            <span class="pay"><button>Купить</button></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="section youtube_reviewsSection">
    <div class="container">
        <div id="rewiews" class="row">
            <div class="col-xs-12 ">
                <div class="youtube_container">
                     <h2 class="items__h2">Отзывы наших клиентов</h2>
                    <div class="container_video">
                        <div class="video">
                            <iframe src="https://www.youtube.com/embed/nLTTa0ToTU8" frameborder="0" 
                            allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            <h2 class="youtube__h2">
                                Дмитрий Строков
                            </h2>
                            <span class="youtube__span">
                                Пользовался услугой выгула собаки и остался доволен. 
                                Очень дружелюбные выгульщики!
                            </span>
                        </div>
                        <div class="video">
                            <iframe src="https://www.youtube.com/embed/Nc9o9GiuEbI?start=49" frameborder="0" 
                            allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            <h2 class="youtube__h2">
                                Даниил Жилин
                            </h2>
                            <span class="youtube__span">
                                Заболел и не мог выгулять собаку, обратился в сервис, погуляли и помыли собаку,
                                очень вежливый выгульщик.
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="section">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="join_container">
                    <h2 class="items__h2">Хотите стать волкером?</h2>
                    <div class="cointainer_text">
                        <span class="text_info">Если вы чувствуете в себе силы и желание помогать животным,
                        хотите работать в дружном коллективе и без обязательных часов отработки, то мы ждем
                        именно вас! Пройдите наше обучение и станьте профессиональным волкером.
                        </span>
                        <a href="{{ route('walker') }}" class="buttonA buttonA-4 btn-4a">
                            Узнать больше
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="section bg_quests">
    <div class="container">
        <div id="questions"  class="row">
            <div class="col-xs-12 container_questions">
                <h2 class="items__h2">Часто задаваемые вопросы</h2>
                <div class="quest_item">
                    <div id="demo" class="demoVue">
                    <h3 id="h3_item" v-on:click="show=!show" class="h3_quest" onclick="Pseudo()">Моя собака будет гулять на поводке?</h3>
                       <transition name="fade">
                       <span id="quest1" class="quest__span" v-if='show'>Да, конечно! Мы не отпускаем собак с поводка, кроме собачьих площадок. 
                    Каждый выгульщик гуляет на специальной амуниции: страхующий ошейник, поводок и пояс,
                    которые сделаны из репшнуров, никогда не порвутся и прикреплены друг к другу 
                    альпинистскими карабинами.
                    Поэтому можем давать гарантию, что собака не убежит.</span>
                        </transition>
                    </div>
                </div>
                <div class="quest_item">
                    <div id="demo1" class="demoVue">
                    <h3 id="h3_item1" v-on:click="show1=!show1" class="h3_quest" onclick="Pseudo1()">Справится ли выгульщик с моей собакой?</h3>
                       <transition name="fade">
                       <span id="quest1" class="quest__span" v-if='show1'>Все выгульщики проходят отбор и обучение,
                        которые включают онлайн-курсы и стажировки на разных выгулах с наставниками.
                        Если у вас сложная собака - мы подберем опытного человека, который точно справится.</span>
                        </transition>
                    </div>
                </div>
          
                <div class="quest_item">
                    <div id="demo2" class="demoVue demo3">
                    <h3 id="h3_item2" v-on:click="show2=!show2" class="h3_quest" onclick="Pseudo2()">Как происходит оплата в нашем сервисе?</h3>
                       <transition name="fade">
                       <span id="quest1" class="quest__span" v-if='show2'>Мы отправим вам ссылку на оплату. 
                       Оплачивать выгулы можно с помощью банковской карты.</span>
                        </transition>
                    </div>
                </div>

                <div class="quest_item">
                    <div id="demo3" class="demoVue">
                    <h3 id="h3_item3" v-on:click="show3=!show3" class="h3_quest" onclick="Pseudo3()">Безопасно ли оплачивать услуги по  ссылке?</h3>
                       <transition name="fade">
                       <span id="quest1" class="quest__span" v-if='show3'>Да! Данные вашей карты передаются через безопасный SSL-протокол. 
                       Оплату мы принимаем через Яндекс.Кассу, 
                       этот сервис используют большое число IT-компании в стране.</span>
                       </transition>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>   



@endsection


<script>

</script>
</body>
</html>