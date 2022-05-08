<nav class="sidebar vertical-scroll dark_sidebar  ps-container ps-theme-default ps-active-y">
        <div class="logo d-flex justify-content-between">
            <a href="<?= $BASE_URL ?> " class="title"><h3 class="f_s_30 f_w_700 text_white">Admin Panel</h3></a>
            <div class="sidebar_close_icon d-lg-none">
                <i class="ti-close"></i>
            </div>
        </div>
        <ul id="sidebar_menu">
            <li class="mm-active">
                <a class="has-arrow" href="#" aria-expanded="false">
                    <div class="icon_menu">
                        <img src="./assest/img/menu-icon/dashboard.svg" alt="">
                    </div>
                    <span>Ayarlar</span>
                </a>
                <ul>
                    <li><a class="active"  href="<?= $BASE_URL ?>?link=settings">Ayarlar</a></li>
                    <li><a href="<?= $BASE_URL ?>?link=about" > Haqqnda</a></li>
                </ul>
            </li>
            <li class="mm-active">
                <a class="has-arrow" href="#" aria-expanded="false">
                    <div class="icon_menu">
                        <img src="./assest/img/menu-icon/dashboard.svg" alt="">
                    </div>
                    <span>Kateqoriya</span>
                </a>
                <ul>
                    <li><a class="active"  href="<?= $BASE_URL ?>?link=category-add">Kateqoriya</a></li>
                    <li><a href="<?= $BASE_URL ?>?link=category-list"> Kateqoriya Siyahi</a></li>
                </ul>
            </li>
            <li class="mm-active">
                <a class="has-arrow" href="#" aria-expanded="false">
                    <div class="icon_menu">
                        <img src="./assest/img/menu-icon/dashboard.svg" alt="">
                    </div>
                    <span>AltKateqoriya</span>
                </a>
                <ul>
                    <li><a class="active"  href="<?= $BASE_URL ?>?link=subcategory-add">Kateqoriya</a></li>
                    <li><a href="<?= $BASE_URL ?>?link=subcategory-list"> Kateqoriya Siyahi</a></li>
                </ul>
            </li>
            <li class="mm-active">
                <a class="has-arrow" href="#" aria-expanded="false">
                    <div class="icon_menu">
                        <img src="./assest/img/menu-icon/dashboard.svg" alt="">
                    </div>
                    <span>Elan</span>
                </a>
                <ul>
                    <li><a class="active"  href="<?= $BASE_URL ?>?link=announcement-add">Elan elave</a></li>
                    <li><a href="<?= $BASE_URL ?>?link=announcement-list"> elan Siyahi</a></li>
                </ul>
            </li>
        </ul>

</nav>