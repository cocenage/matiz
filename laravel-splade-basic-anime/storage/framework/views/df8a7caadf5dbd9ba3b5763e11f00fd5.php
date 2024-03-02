<header class="application__header header" id="header">
    <div class="container header__container">
        <div class="header__inner">
            <a title="Главная" href="#" class="header__logo logo">
                <img width="190" src="<?php echo e(asset('/assets/images/svg/logo1.svg')); ?>" height="107" alt="Логотип сайта  аренда авто" class="logo__brand">
            </a>
            <div class="header__right">
                <div class="header__row header__row--top" >
                    <nav title="Навигация" class="header__navbar navbar">
                        <input class="navbar__input" id="menu__toggle" type="checkbox" />
                        <label class="navbar__btn menu__btn" for="menu__toggle">
                            <span></span>
                        </label>
                        <menu class="navbar__menu hamburger-menu menu__box">
                            <li class="navbar__item">
                                <a title="Главная" href="#main"  class="navbar__link menu__item">Главная</a>
                            </li>
                            <li class="navbar__item">
                                <a title="О компании" href="#company" class="navbar__link menu__item">О компании</a>
                            </li>
                            <li class="navbar__item">
                                <a title="Автопарк" href="#car" class="navbar__link menu__item">Автопарк</a>
                            </li>
                            <li class="navbar__item">
                                <a title="Галерея" href="#gall" class="navbar__link menu__item">Галерея</a>
                            </li>
                            <li class="navbar__item">
                                <a title="Отзывы" href="#rev" class="navbar__link menu__item">Отзывы</a>
                            </li>
                            <li class="navbar__item">
                                <a title="Заказать авто" href="#order" class="navbar__link menu__item">Заказать авто</a>
                            </li>
                            <li class="navbar__item">
                                <a title="Новости и акции" href="#news" class="navbar__link menu__item">Новости и акции</a>
                            </li>
                            <li class="navbar__item">
                                <a title="Контакты" href="#cont" class="navbar__link menu__item">Контакты</a>
                            </li>
                        </menu>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>
<?php /**PATH C:\OSPanel\domains\laravel-splade-basic-anime\resources\views/client/include/header.blade.php ENDPATH**/ ?>