<?php require('header.php'); ?>
    <div class="uk-section">
        <div class="uk-container">
            <div class="uk-grid-large" data-uk-grid>
                <?php require_once('sidebar.php'); ?>
                <div class="uk-width-1-1 uk-width-expand@m">
                    <article class="uk-article">
                        <h1 class="uk-article-title">Trang cá nhân</h1>
                        <p class="uk-text-lead uk-text-muted">Hiển thị cập nhật thông tin cá nhân của người dùng.</p>
                        <div class="uk-article-meta uk-margin-top uk-margin-medium-bottom uk-flex uk-flex-middle">
                            <img class="uk-border-circle avatar" src="https://via.placeholder.com/80"
                                 alt="Sara Galen">
                            <div>
                                Written by
                                <span>dev.thang@myauris.vn</span><br>
                                <time datetime="2019-10-05">5-11-2020</time>
                            </div>
                        </div>
                        <div class="article-content link-primary">
                            <figure data-uk-lightbox="animation: slide">
                                <a class="uk-inline" href="modules/images/user-profile/user-profile-menu.png"
                                   data-caption="Trang chủ">
                                    <img src="modules/images/user-profile/user-profile-menu.png" alt="menu">
                                    <div class="uk-position-center">
                                        <span data-uk-overlay-icon></span>
                                    </div>
                                </a>
                                <figcaption data-uk-grid class="uk-flex-right uk-grid uk-grid-stack"><span
                                            class="uk-width-auto uk-first-column">Menu người dùng.</span></figcaption>
                            </figure>
                            Chọn <strong>Thông tin cá nhân</strong> để vào trang cá nhân.
                            Bạn luôn có thể thay đổi thông tin cá nhân của bạn và bạn chịu trách nhiệm về thông tin của
                            bạn với nhà quản lý.
                            <figure data-uk-lightbox="animation: slide">
                                <a class="uk-inline" href="modules/images/user-profile/user-profile.png"
                                   data-caption="Trang chủ">
                                    <img src="modules/images/user-profile/user-profile.png" alt="Trang chủ">
                                    <div class="uk-position-center">
                                        <span data-uk-overlay-icon></span>
                                    </div>
                                </a>
                                <figcaption data-uk-grid class="uk-flex-right uk-grid uk-grid-stack"><span
                                            class="uk-width-auto uk-first-column">Hình ảnh trang chủ</span></figcaption>
                            </figure>
                            <ol>
                                <li>Họ và tên</li>
                                <li>Ngày sinh</li>
                                <li>Biệt Danh</li>
                                <li>Địa Chỉ</li>
                                <li>Email</li>
                                <li>Số Điện Thoại</li>
                                <li>ID Pancake: Manager/user online thay đổi ID để chia tương tác.</li>
                                <li>Facebook</li>
                                <li>Ghi Chú</li>
                                <li>Ảnh Đại Diện</li>
                                <li>Hình nền đăng nhập.</li>
                            </ol>

                            <hr class="uk-margin-medium">
                            <div class="uk-margin-large-top paginate-post">
                                <div class="uk-child-width-expand@s uk-grid-large" data-uk-grid>
                                    <div>
                                    </div>
                                    <div>
                                        <div class="uk-text-right"><a class="remove-underline hvr-forward"
                                                                      href="doc.html">Next
                                                →</a></div>
                                    </div>
                                </div>
                            </div>
                            <div class="uk-margin-large-top">
                                <h3>Related Docs</h3>
                                <ul class="uk-list link-secondary">
                                    <!--                                    <li><a href="doc.html">Creating a changelog</a></li>-->
                                    <!--                                    <li><a href="doc.html">Contact form</a></li>-->
                                    <!--                                    <li><a href="doc.html">Creating docs posts</a></li>-->
                                    <!--                                    <li><a href="doc.html">Footer options</a></li>-->
                                </ul>
                            </div>
                    </article>
                </div>
            </div>
        </div>
    </div>

    <div id="offcanvas-docs" data-uk-offcanvas="overlay: true">
        <div class="uk-offcanvas-bar">
            <button class="uk-offcanvas-close" type="button" data-uk-close></button>
            <h5 class="uk-margin-top">Getting Started</h5>
            <ul class="uk-nav uk-nav-default doc-nav">
                <li class="uk-active"><a href="doc.html">Template setup</a></li>
                <li><a href="doc.html">Basic theme setup</a></li>
                <li><a href="doc.html">Navigation bar</a></li>
                <li><a href="doc.html">Footer options</a></li>
                <li><a href="doc.html">Creating your first post</a></li>
                <li><a href="doc.html">Creating docs posts</a></li>
                <li><a href="doc.html">Enabling comments</a></li>
                <li><a href="doc.html">Google Analytics</a></li>
            </ul>
            <h5 class="uk-margin-top">Product Features</h5>
            <ul class="uk-nav uk-nav-default doc-nav">
                <li><a href="doc.html">Hero page header</a></li>
                <li><a href="doc.html">Category boxes section</a></li>
                <li><a href="doc.html">Fearured docs section</a></li>
                <li><a href="doc.html">Video lightbox boxes section</a></li>
                <li><a href="doc.html">Frequently asked questions section</a></li>
                <li><a href="doc.html">Team members section</a></li>
                <li><a href="doc.html">Call to action section</a></li>
                <li><a href="doc.html">Creating a changelog</a></li>
                <li><a href="doc.html">Contact form</a></li>
                <li><a href="doc.html">Adding media to post and doc content</a></li>
                <li><a href="doc.html">Adding table of contents to docs</a></li>
                <li><a href="doc.html">Adding alerts to content</a></li>
            </ul>
            <h5 class="uk-margin-top">Customization</h5>
            <ul class="uk-nav uk-nav-default doc-nav">
                <li><a href="doc.html">Translation</a></li>
                <li><a href="doc.html">Customization</a></li>
                <li><a href="doc.html">Development</a></li>
                <li><a href="doc.html">Sources and credits</a></li>
            </ul>
            <h5 class="uk-margin-top">Help</h5>
            <ul class="uk-nav uk-nav-default doc-nav">
                <li><a href="doc.html">Contacting support</a></li>
            </ul>
        </div>
    </div>

    <div id="offcanvas" data-uk-offcanvas="flip: true; overlay: true">
        <div class="uk-offcanvas-bar">
            <a class="uk-logo" href="index.html">Docs</a>
            <button class="uk-offcanvas-close" type="button" data-uk-close></button>
            <ul class="uk-nav uk-nav-primary uk-nav-offcanvas uk-margin-top">
                <li><a href="index.html">Home</a></li>
                <li class="uk-active"><a href="doc.html">Docs</a></li>
                <li><a href="blog.html">Blog</a></li>
                <li><a href="contact.html">Contact</a></li>
                <li>
                    <div class="uk-navbar-item"><a class="uk-button uk-button-success"
                                                   href="contact.html">Contact</a>
                    </div>
                </li>
            </ul>
            <div class="uk-margin-top uk-text-center">
                <div data-uk-grid class="uk-child-width-auto uk-grid-small uk-flex-center">
                    <div>
                        <a href="https://twitter.com/" data-uk-icon="icon: twitter" class="uk-icon-link"
                           target="_blank"></a>
                    </div>
                    <div>
                        <a href="https://www.facebook.com/" data-uk-icon="icon: facebook" class="uk-icon-link"
                           target="_blank"></a>
                    </div>
                    <div>
                        <a href="https://www.instagram.com/" data-uk-icon="icon: instagram" class="uk-icon-link"
                           target="_blank"></a>
                    </div>
                    <div>
                        <a href="https://vimeo.com/" data-uk-icon="icon: vimeo" class="uk-icon-link"
                           target="_blank"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php require('footer.php') ?>