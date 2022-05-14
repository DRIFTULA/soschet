<?php
    session_start();

    if ($_COOKIE['user'] =='') {
      header('Location: Регистрация.php');
    }
?>
<!DOCTYPE html>
<html style="font-size: 16px;" lang="ru">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="page_type" content="np-template-header-footer-from-plugin">
    <title>Профиль</title>
    <link rel="stylesheet" href="nicepage.css" media="screen">
    <link rel="stylesheet" href="Профиль.css" media="screen">
    <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 4.2.6, nicepage.com">
    <link rel="icon" href="images/favicon.png">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i">
    <link id="u-page-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i|Lobster:400">

    <meta name="theme-color" content="#478ac9">
    <meta name="twitter:site" content="@">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Профиль">
    <meta name="twitter:description" content="Site1">
    <meta property="og:title" content="Профиль">
    <meta property="og:description" content="">
    <meta property="og:type" content="website">
  </head>
  <body class="u-body"><header class="u-clearfix u-header u-header" id="sec-6a96"><div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-list u-list-1">
          <div class="u-repeater u-repeater-1">
            <div class="u-align-center u-container-style u-list-item u-repeater-item">
              <div class="u-container-layout u-similar-container u-valign-top u-container-layout-1">
                <a href="index.php" data-page-id="645514469" class="u-btn u-button-style u-custom-item u-none u-btn-1"><span class="u-custom-item u-file-icon u-icon u-icon-1" data-animation-name="" data-animation-duration="0" data-animation-delay="0" data-animation-direction=""><img src="images/846398.png" alt=""></span>&nbsp;​&nbsp;​
                </a>
              </div>
            </div>
            <div class="u-align-center u-container-style u-list-item u-repeater-item">
              <div class="u-container-layout u-similar-container u-valign-top u-container-layout-2">
                <a href="Со.html" data-page-id="2407327499" class="u-btn u-button-style u-custom-item u-none u-btn-2"><span class="u-custom-item u-file-icon u-icon u-icon-2" data-animation-name="" data-animation-duration="0" data-animation-delay="0" data-animation-direction=""><img src="images/3062634.png" alt=""></span>
                </a>
              </div>
            </div>
            <div class="u-align-center u-container-style u-list-item u-repeater-item">
              <div class="u-container-layout u-similar-container u-valign-top u-container-layout-3">
                <a href="#sec-b807" class="u-btn u-button-style u-custom-item u-dialog-link u-none u-btn-3"><span class="u-custom-item u-file-icon u-icon u-icon-3" data-animation-name="" data-animation-duration="0" data-animation-delay="0" data-animation-direction=""><img src="images/2891628.png" alt=""></span>
                </a>
              </div>
            </div>
            <div class="u-container-style u-list-item u-repeater-item">
              <div class="u-container-layout u-similar-container u-valign-top u-container-layout-4">
                <a href="Ре.html" data-page-id="79574197" class="u-btn u-button-style u-custom-item u-none u-btn-4"><span class="u-custom-item u-file-icon u-icon u-icon-4" data-animation-name="" data-animation-duration="0" data-animation-delay="0" data-animation-direction=""><img src="images/2964063.png" alt=""></span>
                </a>
              </div>
            </div>
            <div class="u-align-center u-container-style u-list-item u-repeater-item">
              <div class="u-container-layout u-similar-container u-valign-top u-container-layout-5">
                <a href="#sec-67c3" class="u-btn u-button-style u-custom-item u-dialog-link u-none u-btn-5"><span class="u-custom-item u-file-icon u-icon u-icon-5" data-animation-name="" data-animation-duration="0" data-animation-delay="0" data-animation-direction=""><img src="images/52433572.png" alt=""></span>
                </a>
              </div>
            </div>
             <div class="u-align-center u-container-style u-list-item u-repeater-item">
              <div class="u-container-layout u-similar-container u-valign-top u-container-layout-6">
				<div class="u-custom-menu u-nav-container">
					<ul class="u-nav u-unstyled u-nav-1"><li class="u-nav-item"><a class="u-button-style" href="Профиль.php"><a class="u-btn u-button-style u-custom-item u-none u-btn-6"><span class="u-custom-item u-file-icon u-icon u-icon-6" data-animation-name="" data-animation-duration="0" data-animation-delay="0" data-animation-direction=""><img src="images/1177568.png" alt=""></span>&nbsp;​&nbsp;​</a></a>
					<div class="u-nav-popup"><ul class="u-h-spacing-20 u-nav u-unstyled u-v-spacing-10 u-nav-2"><li class="u-nav-item"><a class="u-active-palette-4-light-1 u-button-style u-hover-palette-5-dark-1 u-nav-link u-white" href="Профиль.php">Профиль</a>
						</li><li class="u-nav-item"><a class="u-active-palette-4-light-1 u-button-style u-hover-palette-5-dark-1 u-nav-link u-white" href="#">Сохранённые</a>
						</li><li class="u-nav-item"><a class="u-active-palette-4-light-1 u-button-style u-hover-palette-5-dark-1 u-nav-link u-white" href="exit.php">Выход</a>
						</li></ul>
						</div>
						</li></ul>
				</div>

              </div>
            </div>
          </div>
        </div>
		<a class="kar" href="index.php">
        <img class="u-image u-image-default u-preserve-proportions u-image-1" src="images/favicon.png?rand=d0ec" alt="" data-image-width="200" data-image-height="202">
        <p class="u-custom-font u-font-lobster u-text u-text-1">emigram</p>
		</a>
        <form action="#" method="get" class="u-border-6 u-border-grey-15 u-radius-6 u-search u-search-left u-search-1">
          <button class="u-search-button" type="submit">
            <span class="u-border-4 u-border-grey-15 u-icon-rectangle u-search-icon u-spacing-2 u-white u-search-icon-1">
              <svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 56.966 56.966"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-9e6f"></use></svg>
              <svg id="svg-9e6f" x="0px" y="0px" viewBox="0 0 56.966 56.966" style="enable-background:new 0 0 56.966 56.966;" class="u-svg-content"><path d="M55.146,51.887L41.588,37.786c3.486-4.144,5.396-9.358,5.396-14.786c0-12.682-10.318-23-23-23s-23,10.318-23,23  s10.318,23,23,23c4.761,0,9.298-1.436,13.177-4.162l13.661,14.208c0.571,0.593,1.339,0.92,2.162,0.92  c0.779,0,1.518-0.297,2.079-0.837C56.255,54.982,56.293,53.08,55.146,51.887z M23.984,6c9.374,0,17,7.626,17,17s-7.626,17-17,17  s-17-7.626-17-17S14.61,6,23.984,6z"></path></svg>
            </span>
          </button>
          <input class="u-custom-font u-search-input u-text-font" type="search" name="search" value="" placeholder="Search">
        </form>
      </div></header>
    <section class="u-clearfix u-section-1" id="sec-59cc">
      <div class="u-clearfix u-sheet u-sheet-1"><span class="u-file-icon u-gradient u-icon u-icon-circle u-icon-1"><img src="images/1534082.png" alt=""></span>
        <p class="u-custom-font u-font-raleway u-text u-text-1"><?=$_COOKIE['user']?></p>
        <p class="u-custom-font u-font-arial u-text u-text-2">0 публикаций</p>
        <p class="u-custom-font u-font-arial u-text u-text-3">0 подписчиков</p>
        <p class="u-custom-font u-font-arial u-text u-text-4">0 подписок</p>
        <div class="u-expanded-width u-tab-links-align-center u-tabs u-tabs-1">
          <ul class="u-spacing-100 u-tab-list u-unstyled" role="tablist">
            <li class="u-tab-item" role="presentation">
              <a class="active u-button-style u-custom-font u-font-raleway u-tab-link u-text-active-black u-text-grey-40 u-tab-link-1" id="link-tab-93e2" href="#tab-93e2" role="tab" aria-controls="tab-93e2" aria-selected="true"><span class="u-file-icon u-icon u-icon-2"><img src="images/747496.png" alt=""></span>&nbsp; <span class="u-icon"></span>&nbsp;Публикации
              </a>
            </li>
            <li class="u-tab-item" role="presentation">
              <a class="u-button-style u-custom-font u-font-raleway u-tab-link u-text-active-black u-text-grey-40 u-tab-link-2" id="link-tab-6a66" href="#tab-6a66" role="tab" aria-controls="tab-6a66" aria-selected="false"><span class="u-file-icon u-icon u-icon-4"><img src="images/5599648.png" alt=""></span>&nbsp;Сохранённое
              </a>
            </li>
          </ul>
          <div class="u-tab-content">
            <div class="u-container-style u-tab-active u-tab-pane" id="tab-93e2" role="tabpanel" aria-labelledby="link-tab-93e2">
              <div class="u-container-layout u-container-layout-1">
                <div class="u-carousel u-gallery u-gallery-slider u-layout-carousel u-lightbox u-no-transition u-show-text-none u-gallery-1" data-interval="5000" data-u-ride="false" id="carousel-f64b" data-pause="false">
                  <ol class="u-absolute-hcenter u-carousel-indicators u-carousel-indicators-1">
                    <li data-u-target="#carousel-f64b" data-u-slide-to="0" class="u-active u-gradient u-shape-circle" style="width: 10px; height: 10px; background-image: linear-gradient(#72efe9, #478ac9);"></li>
                    <li data-u-target="#carousel-f64b" data-u-slide-to="1" class="u-gradient u-shape-circle" style="width: 10px; height: 10px; background-image: linear-gradient(#72efe9, #478ac9);"></li>
                    <li data-u-target="#carousel-f64b" data-u-slide-to="2" class="u-gradient u-shape-circle" style="width: 10px; height: 10px; background-image: linear-gradient(#72efe9, #478ac9);"></li>
                  </ol>
                  <div class="u-carousel-inner u-gallery-inner u-gallery-inner-1" role="listbox" data-image-width="1920" data-image-height="1080">
                    <div class="u-active u-carousel-item u-gallery-item u-carousel-item-1">
                      <div class="u-back-slide" data-image-width="1600" data-image-height="900">
                        <img class="u-back-image u-expanded" src="images/27-273288_chevrolet-camaro-full-hd.jpg">
                      </div>
                      <div class="u-align-center u-over-slide u-shading u-valign-bottom u-over-slide-1">
                        <h3 class="u-gallery-heading"></h3>
                        <p class="u-gallery-text"></p>
                      </div>
                    </div>
                    <div class="u-carousel-item u-gallery-item u-carousel-item-2">
                      <div class="u-back-slide" data-image-width="1600" data-image-height="900">
                        <img class="u-back-image u-expanded" src="images/post_5d1083d7a4dee.jpg">
                      </div>
                      <div class="u-align-center u-over-slide u-shading u-valign-bottom u-over-slide-2">
                        <h3 class="u-gallery-heading">Пример заголовка</h3>
                        <p class="u-gallery-text">Пример текста</p>
                      </div>
                    </div>
                    <div class="u-carousel-item u-gallery-item u-carousel-item-3" data-image-width="1600" data-image-height="900">
                      <div class="u-back-slide">
                        <img class="u-back-image u-expanded" src="images/The-Best-Wallpapers-Related-to-Lamborghini-Aventador-Blue-2.jpg">
                      </div>
                      <div class="u-align-center u-over-slide u-shading u-valign-bottom u-over-slide-3">
                        <h3 class="u-gallery-heading"></h3>
                        <p class="u-gallery-text"></p>
                      </div>
                      <style data-mode="XL"></style>
                      <style data-mode="LG"></style>
                      <style data-mode="MD"></style>
                      <style data-mode="SM"></style>
                      <style data-mode="XS"></style>
                    </div>
                  </div>
                  <a class="u-absolute-vcenter u-carousel-control u-carousel-control-prev u-icon-rectangle u-opacity u-opacity-70 u-text-hover-black u-text-white u-carousel-control-1" href="#carousel-f64b" role="button" data-u-slide="prev">
                    <span aria-hidden="true">
                      <svg viewBox="0 0 129 129"><path d="m64.5,122.6c32,0 58.1-26 58.1-58.1s-26-58-58.1-58-58,26-58,58 26,58.1 58,58.1zm0-108c27.5,5.32907e-15 49.9,22.4 49.9,49.9s-22.4,49.9-49.9,49.9-49.9-22.4-49.9-49.9 22.4-49.9 49.9-49.9z"></path><path d="m70,93.5c0.8,0.8 1.8,1.2 2.9,1.2 1,0 2.1-0.4 2.9-1.2 1.6-1.6 1.6-4.2 0-5.8l-23.5-23.5 23.5-23.5c1.6-1.6 1.6-4.2 0-5.8s-4.2-1.6-5.8,0l-26.4,26.4c-0.8,0.8-1.2,1.8-1.2,2.9s0.4,2.1 1.2,2.9l26.4,26.4z"></path></svg>
                    </span>
                    <span class="sr-only">
                      <svg viewBox="0 0 129 129"><path d="m64.5,122.6c32,0 58.1-26 58.1-58.1s-26-58-58.1-58-58,26-58,58 26,58.1 58,58.1zm0-108c27.5,5.32907e-15 49.9,22.4 49.9,49.9s-22.4,49.9-49.9,49.9-49.9-22.4-49.9-49.9 22.4-49.9 49.9-49.9z"></path><path d="m70,93.5c0.8,0.8 1.8,1.2 2.9,1.2 1,0 2.1-0.4 2.9-1.2 1.6-1.6 1.6-4.2 0-5.8l-23.5-23.5 23.5-23.5c1.6-1.6 1.6-4.2 0-5.8s-4.2-1.6-5.8,0l-26.4,26.4c-0.8,0.8-1.2,1.8-1.2,2.9s0.4,2.1 1.2,2.9l26.4,26.4z"></path></svg>
                    </span>
                  </a>
                  <a class="u-absolute-vcenter u-carousel-control u-carousel-control-next u-icon-rectangle u-opacity u-opacity-70 u-text-hover-black u-text-white u-carousel-control-2" href="#carousel-f64b" role="button" data-u-slide="next">
                    <span aria-hidden="true">
                      <svg viewBox="0 0 129 129"><path d="M64.5,122.6c32,0,58.1-26,58.1-58.1S96.5,6.4,64.5,6.4S6.4,32.5,6.4,64.5S32.5,122.6,64.5,122.6z M64.5,14.6    c27.5,0,49.9,22.4,49.9,49.9S92,114.4,64.5,114.4S14.6,92,14.6,64.5S37,14.6,64.5,14.6z"></path><path d="m51.1,93.5c0.8,0.8 1.8,1.2 2.9,1.2 1,0 2.1-0.4 2.9-1.2l26.4-26.4c0.8-0.8 1.2-1.8 1.2-2.9 0-1.1-0.4-2.1-1.2-2.9l-26.4-26.4c-1.6-1.6-4.2-1.6-5.8,0-1.6,1.6-1.6,4.2 0,5.8l23.5,23.5-23.5,23.5c-1.6,1.6-1.6,4.2 0,5.8z"></path></svg>
                    </span>
                    <span class="sr-only">
                      <svg viewBox="0 0 129 129"><path d="M64.5,122.6c32,0,58.1-26,58.1-58.1S96.5,6.4,64.5,6.4S6.4,32.5,6.4,64.5S32.5,122.6,64.5,122.6z M64.5,14.6    c27.5,0,49.9,22.4,49.9,49.9S92,114.4,64.5,114.4S14.6,92,14.6,64.5S37,14.6,64.5,14.6z"></path><path d="m51.1,93.5c0.8,0.8 1.8,1.2 2.9,1.2 1,0 2.1-0.4 2.9-1.2l26.4-26.4c0.8-0.8 1.2-1.8 1.2-2.9 0-1.1-0.4-2.1-1.2-2.9l-26.4-26.4c-1.6-1.6-4.2-1.6-5.8,0-1.6,1.6-1.6,4.2 0,5.8l23.5,23.5-23.5,23.5c-1.6,1.6-1.6,4.2 0,5.8z"></path></svg>
                    </span>
                  </a>
                </div>
                <div class="u-video u-video-contain u-video-1">
                  <div class="embed-responsive embed-responsive-1">
                    <iframe style="position: absolute;top: 0;left: 0;width: 100%;height: 100%;" class="embed-responsive-item" src="https://www.youtube.com/embed/anmN8IXVP-o?mute=0&amp;showinfo=0&amp;controls=0&amp;start=0" frameborder="0" allowfullscreen=""></iframe>
                  </div>
                </div>
                <div class="u-gallery u-layout-grid u-lightbox u-no-transition u-show-text-on-hover u-gallery-2">
                  <div class="u-gallery-inner u-gallery-inner-2">
                    <div class="u-effect-fade u-gallery-item">
                      <div class="u-back-slide" data-image-width="1920" data-image-height="1080">
                        <img class="u-back-image u-expanded" src="images/791038_original.jpg">
                      </div>
                      <div class="u-over-slide u-shading u-over-slide-4">
                        <h3 class="u-gallery-heading"></h3>
                        <p class="u-gallery-text"></p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="u-gallery u-layout-grid u-lightbox u-show-text-on-hover u-gallery-3">
                  <div class="u-gallery-inner u-gallery-inner-3">
                    <div class="u-effect-fade u-gallery-item">
                      <div class="u-back-slide" data-image-width="1920" data-image-height="1080">
                        <img class="u-back-image u-expanded" src="images/03762133.png">
                      </div>
                      <div class="u-over-slide u-shading u-over-slide-5">
                        <h3 class="u-gallery-heading"></h3>
                        <p class="u-gallery-text"></p>
                      </div>
                    </div>
                    <div class="u-effect-fade u-gallery-item">
                      <div class="u-back-slide" data-image-width="727" data-image-height="435">
                        <img class="u-back-image u-expanded" src="images/rgb-led-kit-1.jpg">
                      </div>
                      <div class="u-over-slide u-shading u-over-slide-6">
                        <h3 class="u-gallery-heading"></h3>
                        <p class="u-gallery-text"></p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="u-carousel u-gallery u-gallery-slider u-layout-carousel u-lightbox u-no-transition u-show-text-on-hover u-gallery-4" data-interval="5000" data-u-ride="false" id="carousel-29f7" data-pause="false">
                  <ol class="u-absolute-hcenter u-carousel-indicators u-carousel-indicators-2">
                    <li data-u-target="#carousel-29f7" data-u-slide-to="0" class="u-active u-gradient u-shape-circle" style="width: 10px; height: 10px; background-image: linear-gradient(#72efe9, #478ac9);"></li>
                    <li data-u-target="#carousel-29f7" data-u-slide-to="1" class="u-gradient u-shape-circle" style="width: 10px; height: 10px; background-image: linear-gradient(#72efe9, #478ac9);"></li>
                    <li data-u-target="#carousel-29f7" data-u-slide-to="2" class="u-gradient u-shape-circle" style="width: 10px; height: 10px; background-image: linear-gradient(#72efe9, #478ac9);"></li>
                    <li data-u-target="#carousel-29f7" data-u-slide-to="3" class="u-gradient u-shape-circle" style="width: 10px; height: 10px; background-image: linear-gradient(#72efe9, #478ac9);"></li>
                    <li data-u-target="#carousel-29f7" data-u-slide-to="4" class="u-gradient u-shape-circle" style="width: 10px; height: 10px; background-image: linear-gradient(#72efe9, #478ac9);"></li>
                  </ol>
                  <div class="u-carousel-inner u-gallery-inner" role="listbox">
                    <div class="u-active u-carousel-item u-effect-fade u-gallery-item u-carousel-item-4" data-image-width="1920" data-image-height="1080">
                      <div class="u-back-slide">
                        <img class="u-back-image u-expanded" src="images/abf5e0cbef791ea.jpg">
                      </div>
                      <div class="u-align-center u-over-slide u-shading u-valign-bottom u-over-slide-7">
                        <h3 class="u-gallery-heading"></h3>
                        <p class="u-gallery-text"></p>
                      </div>
                      <style data-mode="XL"></style>
                      <style data-mode="LG"></style>
                      <style data-mode="MD"></style>
                      <style data-mode="SM"></style>
                      <style data-mode="XS"></style>
                    </div>
                    <div class="u-carousel-item u-effect-fade u-gallery-item u-carousel-item-5" data-image-width="1920" data-image-height="1080">
                      <div class="u-back-slide" data-image-width="1600" data-image-height="900">
                        <img class="u-back-image u-expanded" src="images/picca-eda-stol-doska-bokal.jpg">
                      </div>
                      <div class="u-align-center u-over-slide u-shading u-valign-bottom u-over-slide-8">
                        <h3 class="u-gallery-heading"></h3>
                        <p class="u-gallery-text"></p>
                      </div>
                      <style data-mode="XL"></style>
                      <style data-mode="LG"></style>
                      <style data-mode="MD"></style>
                      <style data-mode="SM"></style>
                      <style data-mode="XS"></style>
                    </div>
                    <div class="u-carousel-item u-effect-fade u-gallery-item u-carousel-item-6" data-image-width="1920" data-image-height="1080">
                      <div class="u-back-slide" data-image-width="1600" data-image-height="900">
                        <img class="u-back-image u-expanded" src="images/9b6aaf631edd6892ec7a6abea17eb56e.jpg">
                      </div>
                      <div class="u-align-center u-over-slide u-shading u-valign-bottom u-over-slide-9">
                        <h3 class="u-gallery-heading"></h3>
                        <p class="u-gallery-text"></p>
                      </div>
                      <style data-mode="XL"></style>
                      <style data-mode="LG"></style>
                      <style data-mode="MD"></style>
                      <style data-mode="SM"></style>
                      <style data-mode="XS"></style>
                    </div>
                    <div class="u-carousel-item u-effect-fade u-gallery-item u-carousel-item-7" data-image-width="1920" data-image-height="1080">
                      <div class="u-back-slide" data-image-width="1600" data-image-height="900">
                        <img class="u-back-image u-expanded" src="images/168508.jpg">
                      </div>
                      <div class="u-align-center u-over-slide u-shading u-valign-bottom u-over-slide-10">
                        <h3 class="u-gallery-heading"></h3>
                        <p class="u-gallery-text"></p>
                      </div>
                      <style data-mode="XL"></style>
                      <style data-mode="LG"></style>
                      <style data-mode="MD"></style>
                      <style data-mode="SM"></style>
                      <style data-mode="XS"></style>
                    </div>
                    <div class="u-carousel-item u-effect-fade u-gallery-item u-carousel-item-8" data-image-width="1920" data-image-height="1080">
                      <div class="u-back-slide">
                        <img class="u-back-image u-expanded" src="images/5-623.jpg">
                      </div>
                      <div class="u-align-center u-over-slide u-shading u-valign-bottom u-over-slide-11">
                        <h3 class="u-gallery-heading"></h3>
                        <p class="u-gallery-text"></p>
                      </div>
                      <style data-mode="XL"></style>
                      <style data-mode="LG"></style>
                      <style data-mode="MD"></style>
                      <style data-mode="SM"></style>
                      <style data-mode="XS"></style>
                    </div>
                  </div>
                  <a class="u-absolute-vcenter u-carousel-control u-carousel-control-prev u-icon-rectangle u-opacity u-opacity-70 u-text-hover-black u-text-white u-carousel-control-3" href="#carousel-29f7" role="button" data-u-slide="prev">
                    <span aria-hidden="true">
                      <svg viewBox="0 0 129 129"><path d="m64.5,122.6c32,0 58.1-26 58.1-58.1s-26-58-58.1-58-58,26-58,58 26,58.1 58,58.1zm0-108c27.5,5.32907e-15 49.9,22.4 49.9,49.9s-22.4,49.9-49.9,49.9-49.9-22.4-49.9-49.9 22.4-49.9 49.9-49.9z"></path><path d="m70,93.5c0.8,0.8 1.8,1.2 2.9,1.2 1,0 2.1-0.4 2.9-1.2 1.6-1.6 1.6-4.2 0-5.8l-23.5-23.5 23.5-23.5c1.6-1.6 1.6-4.2 0-5.8s-4.2-1.6-5.8,0l-26.4,26.4c-0.8,0.8-1.2,1.8-1.2,2.9s0.4,2.1 1.2,2.9l26.4,26.4z"></path></svg>
                    </span>
                    <span class="sr-only">
                      <svg viewBox="0 0 129 129"><path d="m64.5,122.6c32,0 58.1-26 58.1-58.1s-26-58-58.1-58-58,26-58,58 26,58.1 58,58.1zm0-108c27.5,5.32907e-15 49.9,22.4 49.9,49.9s-22.4,49.9-49.9,49.9-49.9-22.4-49.9-49.9 22.4-49.9 49.9-49.9z"></path><path d="m70,93.5c0.8,0.8 1.8,1.2 2.9,1.2 1,0 2.1-0.4 2.9-1.2 1.6-1.6 1.6-4.2 0-5.8l-23.5-23.5 23.5-23.5c1.6-1.6 1.6-4.2 0-5.8s-4.2-1.6-5.8,0l-26.4,26.4c-0.8,0.8-1.2,1.8-1.2,2.9s0.4,2.1 1.2,2.9l26.4,26.4z"></path></svg>
                    </span>
                  </a>
                  <a class="u-absolute-vcenter u-carousel-control u-carousel-control-next u-icon-rectangle u-opacity u-opacity-70 u-text-hover-black u-text-white u-carousel-control-4" href="#carousel-29f7" role="button" data-u-slide="next">
                    <span aria-hidden="true">
                      <svg viewBox="0 0 129 129"><path d="M64.5,122.6c32,0,58.1-26,58.1-58.1S96.5,6.4,64.5,6.4S6.4,32.5,6.4,64.5S32.5,122.6,64.5,122.6z M64.5,14.6    c27.5,0,49.9,22.4,49.9,49.9S92,114.4,64.5,114.4S14.6,92,14.6,64.5S37,14.6,64.5,14.6z"></path><path d="m51.1,93.5c0.8,0.8 1.8,1.2 2.9,1.2 1,0 2.1-0.4 2.9-1.2l26.4-26.4c0.8-0.8 1.2-1.8 1.2-2.9 0-1.1-0.4-2.1-1.2-2.9l-26.4-26.4c-1.6-1.6-4.2-1.6-5.8,0-1.6,1.6-1.6,4.2 0,5.8l23.5,23.5-23.5,23.5c-1.6,1.6-1.6,4.2 0,5.8z"></path></svg>
                    </span>
                    <span class="sr-only">
                      <svg viewBox="0 0 129 129"><path d="M64.5,122.6c32,0,58.1-26,58.1-58.1S96.5,6.4,64.5,6.4S6.4,32.5,6.4,64.5S32.5,122.6,64.5,122.6z M64.5,14.6    c27.5,0,49.9,22.4,49.9,49.9S92,114.4,64.5,114.4S14.6,92,14.6,64.5S37,14.6,64.5,14.6z"></path><path d="m51.1,93.5c0.8,0.8 1.8,1.2 2.9,1.2 1,0 2.1-0.4 2.9-1.2l26.4-26.4c0.8-0.8 1.2-1.8 1.2-2.9 0-1.1-0.4-2.1-1.2-2.9l-26.4-26.4c-1.6-1.6-4.2-1.6-5.8,0-1.6,1.6-1.6,4.2 0,5.8l23.5,23.5-23.5,23.5c-1.6,1.6-1.6,4.2 0,5.8z"></path></svg>
                    </span>
                  </a>
                </div>
              </div>
            </div>
            <div class="u-container-style u-tab-pane" id="tab-6a66" role="tabpanel" aria-labelledby="link-tab-6a66">
              <div class="u-container-layout u-valign-middle u-container-layout-2">
                <div class="u-align-center u-container-style u-group u-group-1">
                  <div class="u-container-layout"><span class="u-border-2 u-border-black u-file-icon u-icon u-icon-circle u-spacing-5 u-icon-5"><img src="images/5599648.png" alt=""></span>
                    <p class="u-custom-font u-font-raleway u-text u-text-5">Сохра​нить</p>
                    <p class="u-custom-font u-font-raleway u-text u-text-6"> Сохраняйте фото и видео, которые хотите посмотреть снова. Никто не получит уведомления об этом, а сохраненные объекты сможете видеть только вы.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="u-clearfix u-section-2" id="sec-8a36">
      <div class="u-clearfix u-sheet u-sheet-1">
        <a href="https://about.instagram.com/about-us/careers" class="u-border-1 u-border-active-palette-2-base u-border-hover-palette-1-base u-btn u-button-style u-none u-text-hover-palette-5-dark-3 u-text-palette-5-dark-1 u-btn-1">Вакансии<span style="font-size: 0.875rem;">
            <span class="u-text-palette-5-base"></span>
          </span>
        </a>
        <a href="https://www.instagram.com/directory/hashtags/" class="u-border-1 u-border-active-palette-2-base u-border-hover-palette-1-base u-btn u-button-style u-none u-text-hover-palette-5-dark-3 u-text-palette-5-dark-1 u-btn-2">Хэштеги<span style="font-size: 0.875rem;">
            <span class="u-text-palette-5-base"></span>
          </span>
        </a>
        <a href="https://help.instagram.com/581066165581870" class="u-border-1 u-border-active-palette-2-base u-border-hover-palette-1-base u-btn u-button-style u-none u-text-hover-palette-5-dark-3 u-text-palette-5-dark-1 u-btn-3">Условия<span style="font-size: 0.875rem;">
            <span class="u-text-palette-5-base"></span>
          </span>
        </a>
        <a href="https://about.instagram.com/" class="u-border-1 u-border-active-palette-2-base u-border-hover-palette-1-base u-btn u-button-style u-none u-text-hover-palette-5-dark-3 u-text-palette-5-dark-1 u-btn-4"><span class="u-icon"></span>Информация<span style="font-size: 0.875rem;">
            <span class="u-text-palette-5-base"></span>
          </span>
        </a>
        <a href="https://developers.facebook.com/docs/instagram" class="u-border-1 u-border-active-palette-2-base u-border-hover-palette-1-base u-btn u-button-style u-none u-text-hover-palette-5-dark-3 u-text-palette-5-dark-1 u-btn-5">API</a>
        <a href="https://www.instagram.com/explore/locations/" class="u-border-1 u-border-active-palette-2-base u-border-hover-palette-1-base u-btn u-button-style u-none u-text-hover-palette-5-dark-3 u-text-palette-5-dark-1 u-btn-6">Места</a>
        <a href="https://www.instagram.com/directory/profiles/" class="u-border-1 u-border-active-palette-2-base u-border-hover-palette-1-base u-btn u-button-style u-none u-text-hover-palette-5-dark-3 u-text-palette-5-dark-1 u-btn-7">Популярные аккаунты</a>
        <a href="https://about.instagram.com/en_US/blog" class="u-border-1 u-border-active-palette-2-base u-border-hover-palette-1-base u-btn u-button-style u-none u-text-hover-palette-5-dark-3 u-text-palette-5-dark-1 u-btn-8">Преса</a>
        <a href="https://help.instagram.com/519522125107875" class="u-border-1 u-border-active-palette-2-base u-border-hover-palette-1-base u-btn u-button-style u-none u-text-hover-palette-5-dark-3 u-text-palette-5-dark-1 u-btn-9">Конфиденциальность</a>
        <a href="https://help.instagram.com/" class="u-border-1 u-border-active-palette-2-base u-border-hover-palette-1-base u-btn u-button-style u-none u-text-hover-palette-5-dark-3 u-text-palette-5-dark-1 u-btn-10"> Помощь</a>
        <p class="u-small-text u-text u-text-default u-text-palette-5-dark-1 u-text-variant u-text-1"> © 2022 DEMIGRAM FROM META</p>
      </div>
    </section>

  <section class="u-black u-clearfix u-container-style u-dialog-block u-opacity u-opacity-70 u-valign-middle u-section-5" id="sec-b807">
      <div class="u-align-center u-container-style u-dialog u-radius-20 u-shape-round u-white u-dialog-1">
        <div class="u-container-layout u-valign-top u-container-layout-1">
          <p class="u-custom-font u-font-roboto-slab u-text u-text-default u-text-palette-5-dark-2 u-text-1">Создание публикации</p><span class="u-file-icon u-icon u-icon-1"><img src="images/1055662.png" alt=""></span>
          <p class="u-custom-font u-font-raleway u-text u-text-default u-text-2">Перетащите сюда фото и видео</p>
          <a href="#" class="u-border-none u-btn u-btn-round u-button-style u-palette-1-base u-radius-10 u-btn-1">Выберать с компьютера</a>
        </div><button class="u-dialog-close-button u-icon u-text-grey-40 u-icon-2"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 16 16" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-efe9"></use></svg><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" xml:space="preserve" class="u-svg-content" viewBox="0 0 16 16" x="0px" y="0px" id="svg-efe9"><rect x="7" y="0" transform="matrix(0.7071 -0.7071 0.7071 0.7071 -3.3138 8.0002)" width="2" height="16"></rect><rect x="0" y="7" transform="matrix(0.7071 -0.7071 0.7071 0.7071 -3.3138 8.0002)" width="16" height="2"></rect></svg></button>
      </div>
    </section><style> .u-section-5 {
  min-height: 867px;
}

.u-section-5 .u-dialog-1 {
  width: 652px;
  min-height: 635px;
  height: auto;
  margin: 60px auto;
}

.u-section-5 .u-container-layout-1 {
  padding: 10px 30px 30px;
}

.u-section-5 .u-text-1 {
  font-size: 1rem;
  margin: 0 auto;
}

.u-section-5 .u-icon-1 {
  width: 157px;
  height: 157px;
  margin: 148px auto 0;
}

.u-section-5 .u-text-2 {
  font-size: 1.125rem;
  font-weight: 400;
  margin: 20px auto 0;
}

.u-section-5 .u-btn-1 {
  border-style: none;
  background-image: none;
  margin: 20px auto 0;
}

.u-section-5 .u-icon-2 {
  width: 20px;
  height: 20px;
}

@media (max-width: 767px) {
  .u-section-5 .u-dialog-1 {
    width: 540px;
  }

  .u-section-5 .u-container-layout-1 {
    padding-left: 10px;
    padding-right: 10px;
  }
}

@media (max-width: 575px) {
  .u-section-5 .u-dialog-1 {
    width: 340px;
  }

  .u-section-5 .u-text-2 {
    margin-left: 22px;
    margin-right: 22px;
  }
}</style><section class="u-black u-clearfix u-container-style u-dialog-block u-opacity u-opacity-0 u-section-6" id="sec-67c3">
      <div class="u-align-right u-border-1 u-border-palette-5-light-1 u-container-style u-dialog u-radius-15 u-shape-round u-white u-dialog-1">
        <div class="u-container-layout u-container-layout-1">
          <p class="u-text u-text-default u-text-1">В этом месяце уведомлений нет</p>
        </div><button class="u-dialog-close-button u-icon u-text-grey-40 u-icon-1"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 16 16" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-efe9"></use></svg><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" xml:space="preserve" class="u-svg-content" viewBox="0 0 16 16" x="0px" y="0px" id="svg-efe9"><rect x="7" y="0" transform="matrix(0.7071 -0.7071 0.7071 0.7071 -3.3138 8.0002)" width="2" height="16"></rect><rect x="0" y="7" transform="matrix(0.7071 -0.7071 0.7071 0.7071 -3.3138 8.0002)" width="16" height="2"></rect></svg></button>
      </div>
    </section><style> .u-section-6 {
  min-height: 867px;
}

.u-section-6 .u-dialog-1 {
  width: 491px;
  min-height: 331px;
  height: auto;
  margin: 77px calc(((100% - 1140px) / 2) + 79px) 60px auto;
}

.u-section-6 .u-container-layout-1 {
  padding: 0 30px 30px;
}

.u-section-6 .u-text-1 {
  margin: 10px auto 0 0;
}

.u-section-6 .u-icon-1 {
  width: 20px;
  height: 20px;
  left: auto;
  top: 10px;
  position: absolute;
  right: 9px;
}

@media (max-width: 1199px) {
  .u-section-6 .u-dialog-1 {
    margin-right: calc(((100% - 940px) / 2) + 79px);
  }
}

@media (max-width: 991px) {
  .u-section-6 .u-dialog-1 {
    margin-right: calc(((100% - 720px) / 2) + 79px);
  }
}

@media (max-width: 767px) {
  .u-section-6 .u-dialog-1 {
    margin-right: calc(((100% - 540px) / 2) + 49px);
  }

  .u-section-6 .u-container-layout-1 {
    padding-left: 10px;
    padding-right: 10px;
  }
}

@media (max-width: 575px) {
  .u-section-6 .u-dialog-1 {
    width: 340px;
    margin-right: calc(((100% - 340px) / 2));
  }
}</style></body>
</html>