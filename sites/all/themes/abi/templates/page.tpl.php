<?php

?>

<div id="page-wrapper"><div id="page">
  <!-- /.preloader -->
  <div id="preloader"></div>
  <div id="top"></div>
<!-- /.parallax full screen background image -->
  <header id="header" role="banner">
    <div class="fullscreen landing parallax" style="background-image:url('<?php print path_to_theme(); ?>/images/headphones-405886.jpg');"  data-img-width="2000" data-img-height="1125" data-diff="100">
    <div class="overlay">
        <div class="container">
            <div class="row">
              <div class="col-md-10 col-md-offset-1 text-center">


    <?php if ($logo): ?>
      <div class="logo wow fadeInDown">
        <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo" class="logo wow fadeInDown">
          <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
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
        <a href="#feature" class="btn-primary">Features</a>
        <a href="#download" class="btn-default">Download</a>
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
                    <?php function replace_active_link($text) {
  $pattern = "/<li[^>]* class=\"[^\"]*active[^\"]*\"[^>]*>([^<]*)<\/li>/";
  $replace = "<li class=\"\">\${1}</li>";
  return preg_replace($pattern, $replace, $text);
}
  $menu = theme('links__system_main_menu', array('links' => $main_menu, 'attributes' => array('id' => 'main-menu', 'class' => array('nav', 'navbar-nav'))));
  print replace_active_link($menu);?>
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



        <!-- /.intro section -->
        <div id="intro">
            <div class="container">
                <div class="row">

                    <!-- /.intro image -->
                    <div class="col-md-6 intro-pic wow slideInLeft">
                        <img src="<?php print path_to_theme(); ?>/images/sex.jpg" alt="ipad" class="img-responsive">
                    </div>

                    <!-- /.intro content -->
                    <div class="col-md-6 wow slideInRight">
                        <h2>Optimize performance through advanced targeting solutions</h2>
                        <p>Good marketing makes the company look smart. <a href="#">Great marketing</a> makes the customer feel smart, - Joe Chernov. Never doubt a small group of thoughtful, committed people can change the world. Indeed, it is the only thing that ever has, - Margaret Mead. The best way to predict the future is to create it, - Peter Drucker.
                        </p>

                        <div class="btn-section"><a href="#feature" class="btn-default">Learn More</a></div>

                    </div>
                </div>
            </div>
        </div>

        <!-- /.feature section -->
        <div id="feature">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 col-md-offset-1 col-sm-12 text-center feature-title">

                        <!-- /.feature title -->
                        <h2>Recreate your ideas and gain more success</h2>
                        <p>Increase your user loyalty by maintaining mutual communication and nurturing your online community.</p>
                    </div>
                </div>
                <div class="row row-feat">
                    <div class="col-md-4 text-center">

                        <!-- /.feature image -->
                        <div class="feature-img">
                            <img src="<?php print path_to_theme(); ?>/images/se.jpg" alt="" class="img-responsive wow fadeInLeft">
                        </div>
                    </div>

                    <div class="col-md-8">

                        <!-- /.feature 1 -->
                        <div class="col-sm-6 feat-list">
                            <i class="pe-7s-notebook pe-5x pe-va wow fadeInUp"></i>
                            <div class="inner">
                                <h4>Marketing Strategy</h4>
                                <p>Good marketing makes the company look smart. Great marketing makes the customer feel smart.
                                </p>
                            </div>
                        </div>

                        <!-- /.feature 2 -->
                        <div class="col-sm-6 feat-list">
                            <i class="pe-7s-cash pe-5x pe-va wow fadeInUp" data-wow-delay="0.2s"></i>
                            <div class="inner">
                                <h4>App Monetization</h4>
                                <p>Content builds relationships. Relationships are built on trust. Trust drives revenue. - Andrew Davis</p>
                            </div>
                        </div>

                        <!-- /.feature 3 -->
                        <div class="col-sm-6 feat-list">
                            <i class="pe-7s-cart pe-5x pe-va wow fadeInUp" data-wow-delay="0.4s"></i>
                            <div class="inner">
                                <h4>Store Optimization</h4>
                                <p>Never doubt a small group of thoughtful, committed people can change the world. Indeed, it is the only thing that ever has.</p>
                            </div>
                        </div>

                        <!-- /.feature 4 -->
                        <div class="col-sm-6 feat-list">
                            <i class="pe-7s-users pe-5x pe-va wow fadeInUp" data-wow-delay="0.6s"></i>
                            <div class="inner">
                                <h4>User Management</h4>
                                <p>Instead of using technology to automate processes, think about using technology to enhance human interaction.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- /.feature 2 section -->
        <div id="feature-2">
            <div class="container">
                <div class="row">

                    <!-- /.feature content -->
                    <div class="col-md-6 wow fadeInLeft">
                        <h2>Learn how to make your app marketing efficient</h2>
                        <p>Good marketing makes the company look smart. <span class="highlight">Great marketing</span> makes the customer feel smart, - Joe Chernov. Never doubt a small group of thoughtful, committed people can change the world. Indeed, it is the only thing that ever has, - Margaret Mead. The best way to predict the future is to create it, - Peter Drucker.
                        </p>

                        <div class="btn-section"><a href="#download" class="btn-default">Download Now</a></div>

                    </div>

                    <!-- /.feature image -->
                    <div class="col-md-6 feature-2-pic wow fadeInRight">
                        <img src="<?php print path_to_theme(); ?>/images/macbook.jpg" alt="macbook" class="img-responsive">
                    </div>
                </div>

            </div>
        </div>


        <!-- /.subscribe section -->
        <div id="download">
            <div class="action fullscreen parallax" style="background-image:url('<?php print path_to_theme(); ?>/images/macbook-336704.jpg');" data-img-width="1920" data-img-height="1281" data-diff="100">
                <div class="overlay">
                    <div class="container">
                        <div class="col-md-8 col-md-offset-2 col-sm-12 text-center">
                            <h2>Would like to know more?</h2>
                            <p class="download-text">We'll research the market, identify the right target audience, analyze competitors and avoid users churn to increase retention. Download now for free and join with thousands happy clients.</p>

                            <!-- /.subscribe form -->
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

        <!-- /.pricing section -->
        <div id="package">
            <div class="container">
                <div class="text-center">

                    <!-- /.pricing title -->
                    <h2 class="wow fadeInLeft">PACKAGES</h2>
                    <div class="title-line wow fadeInRight"></div>
                </div>
                <div class="row package-option">

                    <!-- /.package 1 -->
                    <div class="col-sm-3">
                        <div class="price-box wow fadeInUp">
                            <div class="price-heading text-center">

                                <!-- /.package icon -->
                                <i class="pe-7s-radio pe-5x"></i>

                                <!-- /.package name -->
                                <h3>Basic</h3>
                            </div>

                            <!-- /.price -->
                            <div class="price-group text-center">
                                <span class="dollar">$</span>
                                <span class="price">9</span>
                                <span class="time">/mo</span>
                            </div>

                            <!-- /.package features -->
                            <ul class="price-feature text-center">
                                <li><strong>100MB</strong> Disk Space</li>
                                <li><strong>200MB</strong> Bandwidth</li>
                                <li><strong>2</strong> Subdomains</li>
                                <li><strong>5</strong> Email Accounts</li>
                                <li><strike>Webmail Support</strike></li>
                            </ul>

                            <!-- /.package button -->
                            <div class="price-footer text-center">
                                <a class="btn btn-price" href="#">BUY NOW</a>
                            </div>
                        </div>
                    </div>

                    <!-- /.package 2 -->
                    <div class="col-sm-3">
                        <div class="price-box wow fadeInUp" data-wow-delay="0.2s">
                            <div class="price-heading text-center">

                                <!-- /.package icon -->
                                <i class="pe-7s-joy pe-5x"></i>

                                <!-- /.package name -->
                                <h3>Standard</h3>
                            </div>

                            <!-- /.price -->
                            <div class="price-group text-center">
                                <span class="dollar">$</span>
                                <span class="price">19</span>
                                <span class="time">/mo</span>
                            </div>

                            <!-- /.package features -->
                            <ul class="price-feature text-center">
                                <li><strong>300MB</strong> Disk Space</li>
                                <li><strong>400MB</strong> Bandwidth</li>
                                <li><strong>5</strong> Subdomains</li>
                                <li><strong>10</strong> Email Accounts</li>
                                <li><strike>Webmail Support</strike></li>
                            </ul>

                            <!-- /.package button -->
                            <div class="price-footer text-center">
                                <a class="btn btn-price" href="#">BUY NOW</a>
                            </div>
                        </div>
                    </div>

                    <!-- /.package 3 -->
                    <div class="col-sm-3">
                        <div class="price-box wow fadeInUp" data-wow-delay="0.4s">
                            <div class="price-heading text-center">

                                <!-- /.package icon -->
                                <i class="pe-7s-science pe-5x"></i>

                                <!-- /.package name -->
                                <h3>Advance</h3>
                            </div>

                            <!-- /.price -->
                            <div class="price-group text-center">
                                <span class="dollar">$</span>
                                <span class="price">29</span>
                                <span class="time">/mo</span>
                            </div>

                            <!-- /.package features -->
                            <ul class="price-feature text-center">
                                <li><strong>1GB</strong> Disk Space</li>
                                <li><strong>1GB</strong> Bandwidth</li>
                                <li><strong>10</strong> Subdomains</li>
                                <li><strong>25</strong> Email Accounts</li>
                                <li>Webmail Support</li>
                            </ul>

                            <!-- /.package button -->
                            <div class="price-footer text-center">
                                <a class="btn btn-price" href="#">BUY NOW</a>
                            </div>
                        </div>
                    </div>

                    <!-- /.package 4 -->
                    <div class="col-sm-3">
                        <div class="price-box wow fadeInUp" data-wow-delay="0.6s">
                            <div class="price-heading text-center">

                                <!-- /.package icon -->
                                <i class="pe-7s-tools pe-5x"></i>

                                <!-- /.package name -->
                                <h3>Ultimate</h3>
                            </div>

                            <!-- /.price -->
                            <div class="price-group text-center">
                                <span class="dollar">$</span>
                                <span class="price">49</span>
                                <span class="time">/mo</span>
                            </div>

                            <!-- /.package features -->
                            <ul class="price-feature text-center">
                                <li><strong>5GB</strong> Disk Space</li>
                                <li><strong>5GB</strong> Bandwidth</li>
                                <li><strong>50</strong> Subdomains</li>
                                <li><strong>50</strong> Email Accounts</li>
                                <li>Webmail Support</li>
                            </ul>

                            <!-- /.package button -->
                            <div class="price-footer text-center">
                                <a class="btn btn-price" href="#">BUY NOW</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!--- Highlated --->
        <?php if ($page['highlighted']): ?>
          <div id="highlighted"><?php print render($page['highlighted']); ?></div>
        <?php endif; ?>

        <!-- /.contact section -->
        <div id="contact">
            <div class="contact fullscreen parallax" style="background-image:url('<?php print path_to_theme(); ?>/images/bg2.jpg');" data-img-width="2000" data-img-height="1334" data-diff="100">
                <div class="overlay">
                    <div class="container">
                        <div class="row contact-row">

                            <!-- /.address and contact -->
                            <div class="col-sm-5 contact-left wow fadeInUp">
                                <h2><span class="highlight">Get</span> in touch</h2>
                                <ul class="ul-address">
                                    <li><i class="pe-7s-map-marker"></i>1600 Amphitheatre Parkway, Mountain View</br>
                                        California 55000
                                    </li>
                                    <li><i class="pe-7s-phone"></i>+1 (123) 456-7890</br>
                                        +2 (123) 456-7890
                                    </li>
                                    <li><i class="pe-7s-mail"></i><a href="mailto:info@yoursite.com">info@yoursite.com</a></li>
                                    <li><i class="pe-7s-look"></i><a href="#">www.yoursite.com</a></li>
                                </ul>

                            </div>

                            <!-- /.contact form -->
                            <div class="col-sm-7 contact-right">
                                <form method="POST" id="contact-form" class="form-horizontal" action="contactengine.php" onSubmit="alert( 'Thank you for your feedback!' );">
                                    <div class="form-group">
                                        <input type="text" name="Name" id="Name" class="form-control wow fadeInUp" placeholder="Name" required/>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="Email" id="Email" class="form-control wow fadeInUp" placeholder="Email" required/>
                                    </div>
                                    <div class="form-group">
                                        <textarea name="Message" rows="20" cols="20" id="Message" class="form-control input-message wow fadeInUp"  placeholder="Message" required></textarea>
                                    </div>
                                    <div class="form-group">
                                        <input type="submit" name="submit" value="Submit" class="btn btn-success wow fadeInUp" />
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- /.footer -->
        <footer id="footer">
            <div class="container">
                <div class="col-sm-4 col-sm-offset-4">
                    <!-- /.social links -->
                    <div class="social text-center">
                        <ul>
                            <li><a class="wow fadeInUp" href="https://twitter.com/"><i class="fa fa-twitter"></i></a></li>
                            <li><a class="wow fadeInUp" href="https://www.facebook.com/" data-wow-delay="0.2s"><i class="fa fa-facebook"></i></a></li>
                            <li><a class="wow fadeInUp" href="https://plus.google.com/" data-wow-delay="0.4s"><i class="fa fa-google-plus"></i></a></li>
                            <li><a class="wow fadeInUp" href="https://instagram.com/" data-wow-delay="0.6s"><i class="fa fa-instagram"></i></a></li>
                        </ul>
                    </div>
                    <div class="text-center wow fadeInUp" style="font-size: 14px;">Copyright Backyard 2015 - Template by  <a href="http://bootstrapthemes.co/" target="_blank">BootstrapThemes</a></div>
                    <a href="#" class="scrollToTop"><i class="pe-7s-up-arrow pe-va"></i></a>
                </div>
            </div>
        </footer>



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
  </div></footer> <!-- /.section, /#footer -->

</div></div> <!-- /#page, /#page-wrapper -->
