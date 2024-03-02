<?php $__env->startSection('title'); ?> <?php echo e(__('Главная страница')); ?> <?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <section class="main-wrapper__section slider" id="slider"   style="background-image: url('<?php echo e(asset('/assets/images/main.png')); ?>');" >
        <div class="container slider__container" id="main">
            <div class="slider__inner">
                <div class="slider__wrapper">
                    <div class="slider__slide" >
                        <div class="slider__slide-info">
                            <h2 class="slider__slide-title" id="logo-text">AutoRentHub</h2>
                            <h3 class="slider__slide-title" id="main-text">АРЕНДА АВТО</h3>
                            <p class="slider__slide-text">Большой выбор популярных и надежных машин</p>
                        </div>
                        <div class="slider__slide-button">
                            <button class="slider__button">Заказать</button>
                            <button class="slider__button" id="autoparck">Автопарк</button>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <section class="main-wrapper__section info" id="company">
        <div class="container info__container">
            <div class="info__inner">
                <div class="info__wrapper">
                    <div class="info__main" >
                        <h1 class="info__main-text">О компании</h1>
                    </div>
                    <div class="info__descr">
                        <div class="info__descr-text">
                            <p class="info__text">Добро пожаловать в AutoRentHub - вашему надежному партнеру по аренде автомобилей! <br><br> Мы компания, специализирующаяся на предоставлении широкого выбора автомобилей для аренды, чтобы удовлетворить все ваши потребности в передвижении.<br><br> Независимо от того, нужен ли вам транспортное средство на короткий срок для деловой встречи, отпуска или просто чтобы путешествовать с комфортом, AutoRentHub всегда готов предложить вам лучшие варианты по доступным ценам.</p>
                        </div>
                        <div class="info__descr-advant">
                            <div class="info__advant-item">
                                <div class="info__item-linia">
                                    <hr height="75px" class="info__linia">
                                </div>
                                <div class="info__item-text">
                                    <h3 class="info__text-main">50 + успешных заказов</h3>
                                    <p class="info__text-descr">И больше всего довольных клиентов</p>
                                </div>
                            </div>
                            <div class="info__advant-item">
                                <div class="info__item-linia">
                                    <hr class="info__linia">
                                </div>
                                <div class="info__item-text">
                                    <h3 class="info__text-main">В любой точке Волгограда</h3>
                                    <p class="info__text-descr">Мы находимся не далеко и нас много!</p>
                                </div>
                            </div>
                            <div class="info__advant-item">
                                <div class="info__item-linia">
                                    <hr class="info__linia">
                                </div>
                                <div class="info__item-text">
                                    <h3 class="info__text-main">30 + авто</h3>
                                    <p class="info__text-descr">Надежные, новые и популярные</p>
                                </div>
                            </div>
                            <div class="info__advant-item">
                                <div class="info__item-linia">
                                    <hr class="info__linia">
                                </div>
                                <div class="info__item-text">
                                    <h3 class="info__text-main">Гарантия</h3>
                                    <p class="info__text-descr">Мы гарантируем вам наше качество</p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <section class="main-wrapper__section cards" id="car">
        <div class="container cards__container">
            <div class="cards__inner">
                <h2 class="cards__title">Автопарк</h2>
                <div class="cards__title-tabs">
                    <div class="cards__tabs-content">
                        <div class="cards__content-img">
                            <img src="<?php echo e(asset('/assets/images/Group 25.png')); ?>" alt="" class="cards__img-circle" id="one">
                            <img src="<?php echo e(asset('/assets/images/biznes.png')); ?>" alt="машины бизнес класс"  id="onne" class="cards__img">
                        </div>
                        <p class="cards__content-tabs" id="accent" >Бизнес</p>
                    </div>
                    <div class="cards__tabs-content">
                        <div class="cards__content-img">
                            <img src="<?php echo e(asset('/assets/images/Group 25.png')); ?>" alt="" class="cards__img-circle" id="two">
                            <img src="<?php echo e(asset('/assets/images/2009 Rolls-Royce Ghost 014 1.png')); ?>"  id="ttwo" alt="машины премиум класс" class="cards__img">
                        </div>
                        <p class="cards__content-tabs" id="accent1" >Премиум</p>
                    </div>
                    <div class="cards__tabs-content">
                        <div class="cards__content-img">
                            <img src="<?php echo e(asset('/assets/images/Group 25.png')); ?>" alt="" class="cards__img-circle" id="fre">
                            <img src="<?php echo e(asset('/assets/images/2009 Rolls-Royce Ghost 014 1.png')); ?>" alt="машины внедорожник класс"  id="frre" class="cards__img">
                        </div>
                        <p class="cards__content-tabs" id="accent2" >Внедорожник</p>
                    </div>
                    <div class="cards__tabs-content">
                        <div class="cards__content-img">
                            <img src="<?php echo e(asset('/assets/images/Group 25.png')); ?>" alt="" class="cards__img-circle" id="fo">
                            <img src="<?php echo e(asset('/assets/images/Remove-bg 3.png')); ?>" alt="машины спорткар класс"  id="ffo" class="cards__img">
                        </div>
                        <p class="cards__content-tabs" id="accent3" >Спорткар</p>
                    </div>
                </div>
                <div class="cards__filter">
                    <p class="cards__filter-price">Цена ˄</p>
                    <p class="cards__filter-moch">Мощность ˄</p>
                </div>
                <ul class="cards__list">
                    <?php $__empty_1 = true; $__currentLoopData = $cards; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $card): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <li class="cards__item" id="bis1">
                        <article class="cards__card">
                            <img loading="lazy"  src="<?php echo e(Storage::url($card->image)); ?>" alt="Изображение машины" class="cards__card-img">
                            <div class="cards__card-main">
                                <h3 class="cards__main-text"><?php echo e($card->name); ?></h3>
                            </div>
                            <div class="cards__card-content">
                                <div class="cards__content-text">
                                    <p class="cards__text-name">Аренда</p>
                                    <p class="cards__text-info"><?php echo e($card->rent); ?></p>
                                </div>
                                <div class="cards__content-text">
                                    <p class="cards__text-name">Объем</p>
                                    <p class="cards__text-info"><?php echo e($card->volume); ?></p>
                                </div>
                                <div class="cards__content-text">
                                    <p class="cards__text-name">Мощность</p>
                                    <p class="cards__text-info"><?php echo e($card->power); ?></p>
                                </div>
                                <div class="cards__content-text">
                                    <p class="cards__text-name">Коробка</p>
                                    <p class="cards__text-info"><?php echo e($card->box); ?></p>
                                </div>
                                <div class="cards__content-text">
                                    <p class="cards__text-name">Топливо</p>
                                    <p class="cards__text-info"><?php echo e($card->fuel); ?></p>
                                </div>
                                <div class="cards__content-text">
                                    <p class="cards__text-name">Привод</p>
                                    <p class="cards__text-info"><?php echo e($card->drive); ?></p>
                                </div>
                                <div class="cards__card-button">
                                    <button class="cards__button">Забронировать</button>
                                </div>
                            </div>


                        </article>
                    </li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                        <?php echo e(__('карточек нет')); ?>

                    <?php endif; ?>

                    <li class="cards__item" id="prem1">
                        <article class="cards__card">
                            <img loading="lazy"  src="/img/prem/6f553404k412-480.png" alt="Изображение машины" class="cards__card-img">
                            <div class="cards__card-main">
                                <h3 class="cards__main-text">Jaguar XF</h3>
                            </div>
                            <div class="cards__card-content">
                                <div class="cards__content-text">
                                    <p class="cards__text-name">Аренда</p>
                                    <p class="cards__text-info">4 000 ₽/д</p>
                                </div>
                                <div class="cards__content-text">
                                    <p class="cards__text-name">Объем</p>
                                    <p class="cards__text-info">2.0л</p>
                                </div>
                                <div class="cards__content-text">
                                    <p class="cards__text-name">Мощность</p>
                                    <p class="cards__text-info">200 л.с.</p>
                                </div>
                                <div class="cards__content-text">
                                    <p class="cards__text-name">Коробка</p>
                                    <p class="cards__text-info">Автомат</p>
                                </div>
                                <div class="cards__content-text">
                                    <p class="cards__text-name">Топливо</p>
                                    <p class="cards__text-info">АИ-92</p>
                                </div>
                                <div class="cards__content-text">
                                    <p class="cards__text-name">Привод</p>
                                    <p class="cards__text-info">Задний</p>
                                </div>
                                <div class="cards__card-button">
                                    <button class="cards__button">Забронировать</button>
                                </div>
                            </div>
                        </article>
                    </li>
                    <li class="cards__item" id="prem2" >
                        <article class="cards__card">
                            <img loading="lazy"  src="/img/prem/8c7cfc30076cf06dcf05e630a6f531155610f642.png" alt="Изображение машины" class="cards__card-img">
                            <div class="cards__card-main">
                                <h3 class="cards__main-text">Jaguar XF</h3>
                            </div>
                            <div class="cards__card-content">
                                <div class="cards__content-text">
                                    <p class="cards__text-name">Аренда</p>
                                    <p class="cards__text-info">4 000 ₽/д</p>
                                </div>
                                <div class="cards__content-text">
                                    <p class="cards__text-name">Объем</p>
                                    <p class="cards__text-info">2.0л</p>
                                </div>
                                <div class="cards__content-text">
                                    <p class="cards__text-name">Мощность</p>
                                    <p class="cards__text-info">200 л.с.</p>
                                </div>
                                <div class="cards__content-text">
                                    <p class="cards__text-name">Коробка</p>
                                    <p class="cards__text-info">Автомат</p>
                                </div>
                                <div class="cards__content-text">
                                    <p class="cards__text-name">Топливо</p>
                                    <p class="cards__text-info">АИ-92</p>
                                </div>
                                <div class="cards__content-text">
                                    <p class="cards__text-name">Привод</p>
                                    <p class="cards__text-info">Задний</p>
                                </div>
                                <div class="cards__card-button">
                                    <button class="cards__button">Забронировать</button>
                                </div>
                            </div>
                        </article>
                    </li>
                    <li class="cards__item" id="prem3">
                        <article class="cards__card">
                            <img loading="lazy"  src="/img/prem/1636784887_1-hdpic-club-p-mersedes-nochyu-1.png" alt="Изображение машины" class="cards__card-img">
                            <div class="cards__card-main">
                                <h3 class="cards__main-text">Jaguar XF</h3>
                            </div>
                            <div class="cards__card-content">
                                <div class="cards__content-text">
                                    <p class="cards__text-name">Аренда</p>
                                    <p class="cards__text-info">4 000 ₽/д</p>
                                </div>
                                <div class="cards__content-text">
                                    <p class="cards__text-name">Объем</p>
                                    <p class="cards__text-info">2.0л</p>
                                </div>
                                <div class="cards__content-text">
                                    <p class="cards__text-name">Мощность</p>
                                    <p class="cards__text-info">200 л.с.</p>
                                </div>
                                <div class="cards__content-text">
                                    <p class="cards__text-name">Коробка</p>
                                    <p class="cards__text-info">Автомат</p>
                                </div>
                                <div class="cards__content-text">
                                    <p class="cards__text-name">Топливо</p>
                                    <p class="cards__text-info">АИ-92</p>
                                </div>
                                <div class="cards__content-text">
                                    <p class="cards__text-name">Привод</p>
                                    <p class="cards__text-info">Задний</p>
                                </div>
                                <div class="cards__card-button">
                                    <button class="cards__button">Забронировать</button>
                                </div>
                            </div>
                        </article>
                    </li>
                    <li class="cards__item" id="prem4">
                        <article class="cards__card">
                            <img loading="lazy"  src="/img/prem/mercedesbenz-gl-class--2021.png" alt="Изображение машины" class="cards__card-img">
                            <div class="cards__card-main">
                                <h3 class="cards__main-text">Jaguar XF</h3>
                            </div>
                            <div class="cards__card-content">
                                <div class="cards__content-text">
                                    <p class="cards__text-name">Аренда</p>
                                    <p class="cards__text-info">4 000 ₽/д</p>
                                </div>
                                <div class="cards__content-text">
                                    <p class="cards__text-name">Объем</p>
                                    <p class="cards__text-info">2.0л</p>
                                </div>
                                <div class="cards__content-text">
                                    <p class="cards__text-name">Мощность</p>
                                    <p class="cards__text-info">200 л.с.</p>
                                </div>
                                <div class="cards__content-text">
                                    <p class="cards__text-name">Коробка</p>
                                    <p class="cards__text-info">Автомат</p>
                                </div>
                                <div class="cards__content-text">
                                    <p class="cards__text-name">Топливо</p>
                                    <p class="cards__text-info">АИ-92</p>
                                </div>
                                <div class="cards__content-text">
                                    <p class="cards__text-name">Привод</p>
                                    <p class="cards__text-info">Задний</p>
                                </div>
                                <div class="cards__card-button">
                                    <button class="cards__button">Забронировать</button>
                                </div>
                            </div>
                        </article>
                    </li>

                    <li class="cards__item" id="vnedorog">
                        <article class="cards__card">
                            <img loading="lazy"  src="/img/vnedorog/a69fa0629656534d3f92979ba70bc27b.png" alt="Изображение машины" class="cards__card-img">
                            <div class="cards__card-main">
                                <h3 class="cards__main-text">Jaguar XF</h3>
                            </div>
                            <div class="cards__card-content">
                                <div class="cards__content-text">
                                    <p class="cards__text-name">Аренда</p>
                                    <p class="cards__text-info">4 000 ₽/д</p>
                                </div>
                                <div class="cards__content-text">
                                    <p class="cards__text-name">Объем</p>
                                    <p class="cards__text-info">2.0л</p>
                                </div>
                                <div class="cards__content-text">
                                    <p class="cards__text-name">Мощность</p>
                                    <p class="cards__text-info">200 л.с.</p>
                                </div>
                                <div class="cards__content-text">
                                    <p class="cards__text-name">Коробка</p>
                                    <p class="cards__text-info">Автомат</p>
                                </div>
                                <div class="cards__content-text">
                                    <p class="cards__text-name">Топливо</p>
                                    <p class="cards__text-info">АИ-92</p>
                                </div>
                                <div class="cards__content-text">
                                    <p class="cards__text-name">Привод</p>
                                    <p class="cards__text-info">Задний</p>
                                </div>
                                <div class="cards__card-button">
                                    <button class="cards__button">Забронировать</button>
                                </div>
                            </div>
                        </article>
                    </li>
                    <li class="cards__item" id="vnedorog1">
                        <article class="cards__card">
                            <img loading="lazy"  src="/img/vnedorog/article_C-X17_Guangzhou_23.png" alt="Изображение машины" class="cards__card-img">
                            <div class="cards__card-main">
                                <h3 class="cards__main-text">Jaguar XF</h3>
                            </div>
                            <div class="cards__card-content">
                                <div class="cards__content-text">
                                    <p class="cards__text-name">Аренда</p>
                                    <p class="cards__text-info">4 000 ₽/д</p>
                                </div>
                                <div class="cards__content-text">
                                    <p class="cards__text-name">Объем</p>
                                    <p class="cards__text-info">2.0л</p>
                                </div>
                                <div class="cards__content-text">
                                    <p class="cards__text-name">Мощность</p>
                                    <p class="cards__text-info">200 л.с.</p>
                                </div>
                                <div class="cards__content-text">
                                    <p class="cards__text-name">Коробка</p>
                                    <p class="cards__text-info">Автомат</p>
                                </div>
                                <div class="cards__content-text">
                                    <p class="cards__text-name">Топливо</p>
                                    <p class="cards__text-info">АИ-92</p>
                                </div>
                                <div class="cards__content-text">
                                    <p class="cards__text-name">Привод</p>
                                    <p class="cards__text-info">Задний</p>
                                </div>
                                <div class="cards__card-button">
                                    <button class="cards__button">Забронировать</button>
                                </div>
                            </div>
                        </article>
                    </li>

                    <li class="cards__item" id="sport">
                        <article class="cards__card">
                            <img loading="lazy"  src="/img/sport/d912fedb729c11ee90003abd0be4d755 upscaled.png" alt="Изображение машины" class="cards__card-img">
                            <div class="cards__card-main">
                                <h3 class="cards__main-text">Jaguar XF</h3>
                            </div>
                            <div class="cards__card-content">
                                <div class="cards__content-text">
                                    <p class="cards__text-name">Аренда</p>
                                    <p class="cards__text-info">4 000 ₽/д</p>
                                </div>
                                <div class="cards__content-text">
                                    <p class="cards__text-name">Объем</p>
                                    <p class="cards__text-info">2.0л</p>
                                </div>
                                <div class="cards__content-text">
                                    <p class="cards__text-name">Мощность</p>
                                    <p class="cards__text-info">200 л.с.</p>
                                </div>
                                <div class="cards__content-text">
                                    <p class="cards__text-name">Коробка</p>
                                    <p class="cards__text-info">Автомат</p>
                                </div>
                                <div class="cards__content-text">
                                    <p class="cards__text-name">Топливо</p>
                                    <p class="cards__text-info">АИ-92</p>
                                </div>
                                <div class="cards__content-text">
                                    <p class="cards__text-name">Привод</p>
                                    <p class="cards__text-info">Задний</p>
                                </div>
                                <div class="cards__card-button">
                                    <button class="cards__button">Забронировать</button>
                                </div>
                            </div>
                        </article>
                    </li>
                    <li class="cards__item" id="sport1">
                        <article class="cards__card">
                            <img loading="lazy"  src="/img/sport/tmb_169076_1287.png" alt="Изображение машины" class="cards__card-img">
                            <div class="cards__card-main">
                                <h3 class="cards__main-text">Jaguar XF</h3>
                            </div>
                            <div class="cards__card-content">
                                <div class="cards__content-text">
                                    <p class="cards__text-name">Аренда</p>
                                    <p class="cards__text-info">4 000 ₽/д</p>
                                </div>
                                <div class="cards__content-text">
                                    <p class="cards__text-name">Объем</p>
                                    <p class="cards__text-info">2.0л</p>
                                </div>
                                <div class="cards__content-text">
                                    <p class="cards__text-name">Мощность</p>
                                    <p class="cards__text-info">200 л.с.</p>
                                </div>
                                <div class="cards__content-text">
                                    <p class="cards__text-name">Коробка</p>
                                    <p class="cards__text-info">Автомат</p>
                                </div>
                                <div class="cards__content-text">
                                    <p class="cards__text-name">Топливо</p>
                                    <p class="cards__text-info">АИ-92</p>
                                </div>
                                <div class="cards__content-text">
                                    <p class="cards__text-name">Привод</p>
                                    <p class="cards__text-info">Задний</p>
                                </div>
                                <div class="cards__card-button">
                                    <button class="cards__button">Забронировать</button>
                                </div>
                            </div>
                        </article>
                    </li>

                </ul>
            </div>
            <script>
                const imgOnne = document.getElementById('onne');
                const imgPremium = document.getElementById('ttwo');
                const imgFrre = document.getElementById('frre');
                const imgFfo = document.getElementById('ffo');

                const imgOne = document.getElementById('one');
                const imgTwo = document.getElementById('two');
                const imgThree = document.getElementById('fre');
                const imgFour = document.getElementById('fo');

                const accent = document.getElementById('accent');
                const accent2 = document.getElementById('accent2');
                const accent3 = document.getElementById('accent3');
                const accent4 = document.getElementById('accent4');

                const prem = document.getElementById('prem1');
                const prem1 = document.getElementById('prem2');
                const prem2 = document.getElementById('prem3');
                const prem3 = document.getElementById('prem4');

                const bis1 = document.getElementById('bis1');
                const bis2 = document.getElementById('bis2');
                const bis3 = document.getElementById('bis3');
                const bis4 = document.getElementById('bis4');

                const vnedorog = document.getElementById('vnedorog');
                const vnedorog1 = document.getElementById('vnedorog1');

                const sport = document.getElementById('sport');
                const sport1 = document.getElementById('sport1');




                const fadeOpacity = (element, value, duration) => {
                    element.style.transition = `opacity ${duration}s`;
                    element.style.opacity = value;
                };

                imgOnne.addEventListener('click', () => {
                    fadeOpacity(imgTwo, 0, 0.5);
                    fadeOpacity(imgOne, 1, 0.5);
                    fadeOpacity(imgThree, 0, 0.5);
                    fadeOpacity(imgFour, 0, 0.5);
                    accent3.style.color = 'var(--secondary-color)';
                    accent2.style.color = 'var(--secondary-color)';
                    accent1.style.color = 'var(--secondary-color)';
                    accent.style.color = 'var(--acccent-color)';

                    bis1.style.display = 'block';
                    bis2.style.display = 'block';
                    bis3.style.display = 'block';
                    bis4.style.display = 'block';
                    prem1.style.display = 'none';
                    prem2.style.display = 'none';
                    prem3.style.display = 'none';
                    prem.style.display = 'none';
                    vnedorog.style.display = 'none';
                    vnedorog1.style.display = 'none';
                    sport.style.display = 'none';
                    sport1.style.display = 'none';

                });

                imgPremium.addEventListener('click', () => {
                    fadeOpacity(imgTwo, 1, 0.5);
                    fadeOpacity(imgOne, 0, 0.5);
                    fadeOpacity(imgThree, 0, 0.5);
                    fadeOpacity(imgFour, 0, 0.5);
                    accent3.style.color = 'var(--secondary-color)';
                    accent2.style.color = 'var(--secondary-color)';
                    accent1.style.color = 'var(--acccent-color)';
                    accent.style.color = 'var(--secondary-color)';

                    bis1.style.display = 'none';
                    bis2.style.display = 'none';
                    bis3.style.display = 'none';
                    bis4.style.display = 'none';
                    prem1.style.display = 'block';
                    prem2.style.display = 'block';
                    prem3.style.display = 'block';
                    prem.style.display = 'block';
                    vnedorog.style.display = 'none';
                    vnedorog1.style.display = 'none';
                    sport.style.display = 'none';
                    sport1.style.display = 'none';

                });

                imgFrre.addEventListener('click', () => {
                    fadeOpacity(imgThree, 1, 0.5);
                    fadeOpacity(imgTwo, 0, 0.5);
                    fadeOpacity(imgOne, 0, 0.5);
                    fadeOpacity(imgFour, 0, 0.5);
                    accent3.style.color = 'var(--secondary-color)';
                    accent2.style.color = 'var(--acccent-color)';
                    accent1.style.color = 'var(--secondary-color)';
                    accent.style.color = 'var(--secondary-color)';
                    bis1.style.display = 'none';
                    bis2.style.display = 'none';
                    bis3.style.display = 'none';
                    bis4.style.display = 'none';
                    prem1.style.display = 'none';
                    prem2.style.display = 'none';
                    prem3.style.display = 'none';
                    prem.style.display = 'none';
                    vnedorog.style.display = 'block';
                    vnedorog1.style.display = 'block';
                    sport.style.display = 'none';
                    spor1.style.display = 'none';
                });

                imgFfo.addEventListener('click', () => {
                    fadeOpacity(imgTwo, 0, 0.5);
                    fadeOpacity(imgOne, 0, 0.5);
                    fadeOpacity(imgThree, 0, 0.5);
                    fadeOpacity(imgFour, 1, 0.5);
                    accent3.style.color = 'var(--acccent-color)';
                    accent2.style.color = 'var(--secondary-color)';
                    accent1.style.color = 'var(--secondary-color)';
                    accent.style.color = 'var(--secondary-color)';
                    bis1.style.display = 'none';
                    bis2.style.display = 'none';
                    bis3.style.display = 'none';
                    bis4.style.display = 'none';
                    prem1.style.display = 'none';
                    prem2.style.display = 'none';
                    prem3.style.display = 'none';
                    prem.style.display = 'none';
                    vnedorog.style.display = 'none';
                    vnedorog1.style.display = 'none';
                    sport.style.display = 'block';
                    sport1.style.display = 'block';
                });


            </script>
        </div>
    </section>
    <section class="main-wrapper__section gallery" id="gall">
        <div class="container gallery__container">
            <div class="gallery__inner">
                <h2 class="gallery__title">Галерея</h2>
                <div class="gallery__title-photo">
                    <div class="gallery__photo-block flex w-20 gap-3" style="width: 20%">
                        <?php $__empty_1 = true; $__currentLoopData = $galleries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $gallery): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                            <img src="<?php echo e(Storage::url($gallery->image)); ?>" id="myImg"   data-fancybox="gallery" alt="" class="gallery__img">
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                            <?php echo e(__('карточек нет')); ?>

                        <?php endif; ?>


                        <div id="myModal" class="modal">
                            <span class="close">×</span>
                            <img class="modal-content" id="img01">
                            <div class="caption" id="caption"></div>
                        </div>
                    </div>
                    <!-- Trigger the Modal -->








                    <!-- The Modal -->

                </div>
            </div>
            <script>
                var modal = document.getElementById('myModal');
                var modal1 = document.getElementById('myModal1');
                var modal2 = document.getElementById('myModal2');
                var modal3 = document.getElementById('myModal3');
                var modal4 = document.getElementById('qwee');

                // Get the image and insert it inside the modal - use its "alt" text as a caption
                var img = document.getElementById('myImg');
                var img1 = document.getElementById('myImg1');
                var img2 = document.getElementById('myImg2');
                var img3 = document.getElementById('myImg3');
                var img4 = document.getElementById('qwee');
                var modalImg = document.getElementById("img01");
                var captionText = document.getElementById("caption");
                img.onclick = function(){
                    modal.style.display = "block";
                    modalImg.src = this.src;
                    captionText.innerHTML = this.alt;
                }
                img1.onclick = function(){
                    modal.style.display = "block";
                    modalImg.src = this.src;
                    captionText.innerHTML = this.alt;
                }
                img2.onclick = function(){
                    modal.style.display = "block";
                    modalImg.src = this.src;
                    captionText.innerHTML = this.alt;
                }
                img3.onclick = function(){
                    modal.style.display = "block";
                    modalImg.src = this.src;
                    captionText.innerHTML = this.alt;
                }
                img4.onclick = function(){
                    modal.style.display = "block";
                    modalImg.src = this.src;
                    captionText.innerHTML = this.alt;
                }

                // Get the <span> element that closes the modal
                var span = document.getElementsByClassName("close")[0];

                // When the user clicks on <span> (x), close the modal
                span.onclick = function() {
                    modal.style.display = "none";
                }
            </script>
        </div>

    </section>
    <section class="main-wrapper__section reviews" id="rev">
        <div class="container reviews__container">
            <div class="reviews__inner">
                <div class="reviews__wrapper">
                    <div class="reviews__main" >
                        <h1 class="reviews__main-text">Отзывы</h1>
                    </div>
                    <div class="reviews__descr swiper">
                        <div class="swiper-wrapper reviews__descr" style=" display: flex; gap: 30px; user-select: none;" >
                            <div class="swiper-slide reviews__descr-content" style="display: flex; flex-wrap: wrap;">
                                <?php $__empty_1 = true; $__currentLoopData = $reviews; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $review): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                    <div class="reviews__content-review">
                                        <div class="reviews__review-name">
                                            <div class="reviews__name">
                                                <div class="reviews__name-content" style="justify-content: space-around;">
                                                    <h3 class="reviews__content-text" style="margin-left: 10px; "><?php echo e($review->name); ?></h3>
                                                    <div class="reviews__content-stars">
                                                        <?php if($review->rating == 1): ?>
                                                            <img src="<?php echo e(asset('/assets/images/svg/star_6uw3mlgd55bi 11.svg')); ?>" alt="" class="reviews__stars">
                                                        <?php elseif($review->rating == 2): ?>
                                                            <img src="<?php echo e(asset('/assets/images/svg/star_6uw3mlgd55bi 11.svg')); ?>" alt="" class="reviews__stars">  <img src="<?php echo e(asset('/assets/images/svg/star_6uw3mlgd55bi 11.svg')); ?>" alt="" class="reviews__stars">
                                                        <?php elseif($review->rating == 3): ?>
                                                            <img src="<?php echo e(asset('/assets/images/svg/star_6uw3mlgd55bi 11.svg')); ?>" alt="" class="reviews__stars">  <img src="<?php echo e(asset('/assets/images/svg/star_6uw3mlgd55bi 11.svg')); ?>" alt="" class="reviews__stars">  <img src="<?php echo e(asset('/assets/images/svg/star_6uw3mlgd55bi 11.svg')); ?>" alt="" class="reviews__stars">
                                                        <?php elseif($review->rating == 4): ?>
                                                            <img src="<?php echo e(asset('/assets/images/svg/star_6uw3mlgd55bi 11.svg')); ?>" alt="" class="reviews__stars">  <img src="<?php echo e(asset('/assets/images/svg/star_6uw3mlgd55bi 11.svg')); ?>" alt="" class="reviews__stars">  <img src="<?php echo e(asset('/assets/images/svg/star_6uw3mlgd55bi 11.svg')); ?>" alt="" class="reviews__stars">  <img src="<?php echo e(asset('/assets/images/svg/star_6uw3mlgd55bi 11.svg')); ?>" alt="" class="reviews__stars">
                                                        <?php elseif($review->rating == 5): ?>
                                                            <img src="<?php echo e(asset('/assets/images/svg/star_6uw3mlgd55bi 11.svg')); ?>" alt="" class="reviews__stars">  <img src="<?php echo e(asset('/assets/images/svg/star_6uw3mlgd55bi 11.svg')); ?>" alt="" class="reviews__stars">  <img src="<?php echo e(asset('/assets/images/svg/star_6uw3mlgd55bi 11.svg')); ?>" alt="" class="reviews__stars">  <img src="<?php echo e(asset('/assets/images/svg/star_6uw3mlgd55bi 11.svg')); ?>" alt="" class="reviews__stars">  <img src="<?php echo e(asset('/assets/images/svg/star_6uw3mlgd55bi 11.svg')); ?>" alt="" class="reviews__stars">
                                                        <?php endif; ?>



                                                    </div>
                                                </div>
                                                <div class="reviews__name-order">
                                                    <img src="<?php echo e(asset('/assets/images/svg/keys_rzqydpxvbjs1 4.svg')); ?>" alt="заказы" class="reviews__order">
                                                    <p class="reviews__order-text"><?php echo e($review->order); ?></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="reviews__review-text">
                                            <p class="reviews__text"><?php echo e($review->text); ?></p>
                                        </div>
                                    </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                    <?php echo e(__('отзывов нет')); ?>

                                <?php endif; ?>


                            </div>



























































                        <div class="swiper-pagination"></div>



                        <!-- If we need scrollbar -->
                        <div class="swiper-scrollbar"></div>
                    </div>
                </div>
            </div>
            <script>


                const wrapper = document.querySelector('.swiper');
                let pressed = false;
                let startX = 0;
                let scrollX = 0;

                wrapper.addEventListener('mousedown', function (e) {
                    pressed = true;
                    startX = e.clientX;
                    this.style.cursor = 'grabbing';
                    scrollX = this.scrollLeft;
                });

                wrapper.addEventListener('mouseleave', function () {
                    if (pressed) {
                        pressed = false;
                        this.style.cursor = 'grab';
                    }
                });

                window.addEventListener('mouseup', function () {
                    if (pressed) {
                        pressed = false;
                        wrapper.style.cursor = 'grab';
                    }
                });

                wrapper.addEventListener('mousemove', function (e) {
                    if (!pressed) return;
                    const x = e.clientX - startX;
                    this.scrollLeft = scrollX - x;
                });

                window.addEventListener('resize', function () {
                    scrollX = wrapper.scrollLeft;
                });





            </script>


        </div>
    </section>
    <section class="main-wrapper__section order" id="order">
        <div class="container order__container">
            <div class="order__inner">
                <div class="order__wrapper">
                    <div class="order__main" >
                        <h1 class="order__main-text">Заказать авто</h1>
                    </div>
                    <div class="order__order-content">
                        <div class="order__content-img">
                            <img src="/img/Rectangle 191.png" alt="выбранное авто" class="order__img">
                        </div>
                        <div class="order__content-form">
                            <form action="" class="order__form">
                                <label for="" class="order__form-text">Имя:</label>
                                <input required type="text" placeholder="Мориарти" class="order__form-input">

                                <label for="" class="order__form-text">Фамилия:</label>
                                <input required type="text" placeholder="Ефремов" class="order__form-input">

                                <label for="" class="order__form-text">Номер телефона:</label>
                                <input required type="tel" placeholder="88007438428" class="order__form-input">

                                <label required for="" class="order__form-text">Машина:</label>
                                <select name="" id="" class="order__form-input">
                                    <option value="Daewoo Matiz" class="order__input-select">Daewoo Matiz</option>
                                    <option value="Audi A6" class="order__input-select">Audi A6</option>
                                    <option value="BMW 5" class="order__input-select">BMW 5</option>
                                    <option value="Jaguar XF" class="order__input-select">Jaguar XF</option>
                                </select>
                                <div class="order__fotm-arend">
                                    <div class="order__arend-input">
                                        <label required for="" class="order__form-text">Начало аренды:</label>
                                        <input type="date" placeholder="12.12.2002"  class="order__input">
                                    </div>
                                    <div class="order__arend-input">
                                        <label required for="" class="order__form-text">Конец аренды:</label>
                                        <input type="date" placeholder="1.2.2003"  class="order__input">
                                    </div>
                                </div>
                                <div class="order__form-button">
                                    <button class="order__button">Заказать</button>
                                </div>


                        </form>
                    </div>
                </div>
            </div>
        </div>

        </div>
    </section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('client.layout.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OSPanel\domains\laravel-splade-basic-anime\resources\views/client/index.blade.php ENDPATH**/ ?>