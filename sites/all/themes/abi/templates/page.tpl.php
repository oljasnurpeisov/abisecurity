<?php

?>

<div id="page-wrapper"><div id="page">
  <!-- /.preloader -->
  <div id="preloader"></div>
  <div id="top"></div>
<!-- /.parallax full screen background image -->
  <header id="header" role="banner">
    <div class="fullscreen landing parallax" style="background-image:url('<?php print path_to_theme(); ?>/images/headphones-405886.jpg');"  data-img-width="1913" data-img-height="1003" data-diff="100">
    <div class="overlay">
        <div class="container">
            <div class="row">
              <div class="col-md-10 col-md-offset-1 text-center">


    <?php if ($logo): ?>
      <div class="logo wow fadeInDown">
        <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo" class="logo wow fadeInDown">

        </a>
      </div>
    <?php endif; ?>

    <?php if ($site_name || $site_slogan): ?>
      <div id="name-and-slogan">
        <?php if ($site_name): ?>
          <?php if ($title): ?>
            <div id="site-name"><strong>
              <h1 class="wow fadeInLeft"><?php print $site_name; ?></h1>
            </strong></div>
          <?php else: /* Use h1 when the content title is empty */ ?>
            <h1 id="site-name" class="wow fadeInLeft">
              <span><?php print $site_name; ?></span>
            </h1>
          <?php endif; ?>
        <?php endif; ?>

        <?php if ($site_slogan): ?>
          <div id="site-slogan" class="landing-text wow fadeInUp"><p><?php print $site_slogan; ?></p></div>
        <?php endif; ?>
      </div> <!-- /#name-and-slogan -->
    <?php endif; ?>
    <div class="head-btn wow fadeInLeft">
        <a href="#feature" class="btn-primary">Услуги</a>
        <a href="#contact" class="btn-default">Контакты</a>
    </div>

    <?php print render($page['header']); ?>

          </div>
        </div>
      </div>
    </div>
    </div>
  </header> <!-- /.section, /#header -->


<!-- NAVIGATION -->
  <div id="menu">
      <nav class="navbar-wrapper navbar-default" role="navigation">
          <div class="container">

            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-backyard">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand site-name" href="#top"><img src="<?php print $logo; ?>" alt="logo"></a>
            </div>

              <div id="navbar-scroll" class="collapse navbar-collapse navbar-backyard navbar-right">
                <?php if ($main_menu): ?>
                  <nav id="navigation" role="navigation"><div class="section">
                    <?php
  $menu = theme('links__system_main_menu', array('links' => $main_menu, 'attributes' => array('id' => 'main-menu', 'class' => array('nav', 'navbar-nav'))));
  print $menu;?>
                  </div></nav> <!-- /.section, /#navigation -->
                <?php endif; ?>
              </div>

          </div>
      </nav>
  </div>


  <div id="main-wrapper"><div id="main" class="clearfix<?php if ($main_menu) { print ' with-navigation'; } ?>">

    <div id="content" class="column" role="main"><div class="section">
      <?php if ($breadcrumb): ?>
        <div id="breadcrumb"><?php print $breadcrumb; ?></div>
      <?php endif; ?>
      <?php print $messages; ?>
      <?php print render($title_prefix); ?>
      <?php /* if ($title): ?>
        <h1 class="title" id="page-title"><?php print $title; ?></h1>
      <?php endif; */?>
      <?php print render($title_suffix); ?>
      <?php if ($tabs): ?>
        <div class="tabs"><?php print render($tabs); ?></div>
      <?php endif; ?>
      <?php print render($page['help']); ?>
      <?php if ($action_links): ?>
        <ul class="action-links"><?php print render($action_links); ?></ul>
      <?php endif; ?>
      <?php if (!$is_front): ?>
      <?php print render($page['content']); ?>
      <?php endif; ?>


      <!--- Highlated --->
      <?php if ($page['highlighted']): ?>
        <div id="highlighted"><?php print render($page['highlighted']); ?></div>
      <?php endif; ?>


        <!-- /.subscribe section
        <div id="download">
            <div class="action fullscreen parallax" style="background-image:url('<?php print path_to_theme(); ?>/images/macbook-336704.jpg');" data-img-width="1920" data-img-height="1281" data-diff="100">
                <div class="overlay">
                    <div class="container">
                        <div class="col-md-8 col-md-offset-2 col-sm-12 text-center">
                            <h2>Would like to know more?</h2>
                            <p class="download-text">We'll research the market, identify the right target audience, analyze competitors and avoid users churn to increase retention. Download now for free and join with thousands happy clients.</p>


                            <div class="subscribe-form wow fadeInUp">
                                <form class="news-letter mailchimp" action="http://moxdesign.us10.list-manage.com/subscribe/post" role="form" method="POST">
                                    <input type="hidden" name="u" value="503bdae81fde8612ff4944435">
                                    <input type="hidden" name="id" value="bfdba52708">
                                    <input class="form-control" type="email" name="MERGE0" placeholder="Your email..." required="">
                                    <button type="submit" class="subscribe-btn btn">SUBSCRIBE</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      -->
        <!-- /.contact section -->
        <div id="contact">
            <div class="contact fullscreen parallax" style="background-image:url('<?php print path_to_theme(); ?>/images/bg2.jpg');" data-img-width="2000" data-img-height="1334" data-diff="100">
                <div class="overlay">
                    <div class="container">
                        <div class="row contact-row">

                          <!--- Contact --->
                          <?php if ($page['contact']): ?>
                            <?php print render($page['contact']); ?>
                          <?php endif; ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>




      <?php // print $feed_icons; ?>
    </div></div> <!-- /.section, /#content -->

    <?php if ($page['sidebar_first']): ?>
      <aside id="sidebar-first" class="column sidebar" role="complementary"><div class="section">
        <?php print render($page['sidebar_first']); ?>
      </div></aside> <!-- /.section, /#sidebar-first -->
    <?php endif; ?>

    <?php if ($page['sidebar_second']): ?>
      <aside id="sidebar-second" class="column sidebar" role="complementary"><div class="section">
        <?php print render($page['sidebar_second']); ?>
      </div></aside> <!-- /.section, /#sidebar-second -->
    <?php endif; ?>

  </div></div> <!-- /#main, /#main-wrapper -->
  <footer id="footer" role="contentinfo"><div class="section">
    <?php print render($page['footer']); ?>
    <div class="text-center wow fadeInUp" style="font-size: 16px;">© Астана - ABI Security - <?php print date('Y')?></div>
    <a href="#" class="scrollToTop"><i class="pe-7s-up-arrow pe-va"></i></a>
  </div></footer> <!-- /.section, /#footer -->

</div></div> <!-- /#page, /#page-wrapper -->
