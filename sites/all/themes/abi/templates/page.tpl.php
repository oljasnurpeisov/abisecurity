<?php

/**
 * @file
 * Default theme implementation to display a single Drupal page.
 *
 * Available variables:
 *
 * General utility variables:
 * - $base_path: The base URL path of the Drupal installation. At the very
 *   least, this will always default to /.
 * - $directory: The directory the template is located in, e.g. modules/system
 *   or themes/garland.
 * - $is_front: TRUE if the current page is the front page.
 * - $logged_in: TRUE if the user is registered and signed in.
 * - $is_admin: TRUE if the user has permission to access administration pages.
 *
 * Site identity:
 * - $front_page: The URL of the front page. Use this instead of $base_path,
 *   when linking to the front page. This includes the language domain or
 *   prefix.
 * - $logo: The path to the logo image, as defined in theme configuration.
 * - $site_name: The name of the site, empty when display has been disabled
 *   in theme settings.
 * - $site_slogan: The slogan of the site, empty when display has been disabled
 *   in theme settings.
 *
 * Navigation:
 * - $main_menu (array): An array containing the Main menu links for the
 *   site, if they have been configured.
 * - $secondary_menu (array): An array containing the Secondary menu links for
 *   the site, if they have been configured.
 * - $breadcrumb: The breadcrumb trail for the current page.
 *
 * Page content (in order of occurrence in the default page.tpl.php):
 * - $title_prefix (array): An array containing additional output populated by
 *   modules, intended to be displayed in front of the main title tag that
 *   appears in the template.
 * - $title: The page title, for use in the actual HTML content.
 * - $title_suffix (array): An array containing additional output populated by
 *   modules, intended to be displayed after the main title tag that appears in
 *   the template.
 * - $messages: HTML for status and error messages. Should be displayed
 *   prominently.
 * - $tabs (array): Tabs linking to any sub-pages beneath the current page
 *   (e.g., the view and edit tabs when displaying a node).
 * - $action_links (array): Actions local to the page, such as 'Add menu' on the
 *   menu administration interface.
 * - $feed_icons: A string of all feed icons for the current page.
 * - $node: The node object, if there is an automatically-loaded node
 *   associated with the page, and the node ID is the second argument
 *   in the page's path (e.g. node/12345 and node/12345/revisions, but not
 *   comment/reply/12345).
 *
 * Regions:
 * - $page['help']: Dynamic help text, mostly for admin pages.
 * - $page['highlighted']: Items for the highlighted content region.
 * - $page['content']: The main content of the current page.
 * - $page['sidebar_first']: Items for the first sidebar.
 * - $page['sidebar_second']: Items for the second sidebar.
 * - $page['header']: Items for the header region.
 * - $page['footer']: Items for the footer region.
 *
 * @see template_preprocess()
 * @see template_preprocess_page()
 * @see template_process()
 */
?>

<div id="page-wrapper"><div id="page">
  <!-- <div id="preloader"></div> -->
  <div id="top"></div>
<!-- /.parallax full screen background image -->
  <header id="header" role="banner">
    <div class="fullscreen landing parallax" style="background-image:url('<?php print path_to_theme(); ?>/images/headphones-405886.jpg');" data-img-width="2000" data-img-height="1125" data-diff="100">
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
              <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home"><span><?php print $site_name; ?></span></a>
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
                    <?php print theme('links__system_main_menu', array('links' => $main_menu, 'attributes' => array('id' => 'main-menu', 'class' => array('nav', 'navbar-nav'))));  ?>
                  </div></nav> <!-- /.section, /#navigation -->
                <?php endif; ?>
              </div>

          </div>
      </nav>
  </div>


  <div class="post__text post__text-html js-mediator-article">JavaScript может быть кошмаром при отладке: некоторые ошибки, которые он выдает, могут быть очень трудны для понимания с первого взгляда, и выдаваемые номера строк также не всегда полезны. Разве не было бы полезно иметь список, глядя на который, можно понять смысл ошибок и как исправить их? Вот он!<br>
  <br>
  Ниже представлен список странных ошибок в JavaScript. Разные браузеры могут выдавать разные сообщения об одинаковых ошибках, поэтому приведено несколько примеров там, где возможно.<br>
  <a name="habracut"></a><br>
  <h3>Как читать ошибки?</h3><br>
  Перед самим списком, давайте быстро взглянем на структуру сообщения об ошибке. Понимание структуры помогает понимать ошибки, и вы получите меньше проблем, если наткнетесь на ошибки, не представленные в этом списке.<br>
  <br>
  Типичная ошибка из Chrome выглядит так:<br>
  <br>
  <pre><code class="javascript hljs">Uncaught <span class="hljs-built_in">TypeError</span>: <span class="hljs-literal">undefined</span> is not a <span class="hljs-function"><span class="hljs-keyword">function</span>
  </span></code></pre><br>
  Структура ошибки следующая:<br>
  <ol>
  <li><strong>Uncaught TypeError</strong>: эта часть сообщения обычно не особо полезна. <code>Uncaught</code> значит, что ошибка не была перехвачена в <code>catch</code>, а <code>TypeError</code> — это название ошибки.</li>
  <li><strong>undefined is not a function</strong>: это та самая часть про ошибку. В случае с сообщениями об ошибках, читать их нужно прямо буквально. Например, в этом случае, она значит то, что код попытался использовать значение <code>undefined</code> как функцию.</li>
  </ol><br>
  Другие webkit-браузеры, такие как Safari, выдают ошибки примерно в таком же формате, как и Chrome. Ошибки из Firefox похожи, но не всегда включают в себя первую часть, и последние версии Internet Explorer также выдают более простые ошибки, но в этом случае проще — не всегда значит лучше.<br>
  <br>
  Теперь к самим ошибкам.<br>
  <br>
  <h3>Uncaught TypeError: undefined is not a function</h3><br>
  <b>Связанные ошибки:</b> number is not a function, object is not a function, string is not a function, Unhandled Error: ‘foo’ is not a function, Function Expected<br>
  <br>
  Возникает при попытке вызова значения как функции, когда значение функцией не является. Например:<br>
  <br>
  <pre><code class="javascript hljs"><span class="hljs-keyword">var</span> foo = <span class="hljs-literal">undefined</span>;
  foo();
  </code></pre><br>
  Эта ошибка обычно возникает, если вы пытаетесь вызвать функцию для объекта, но опечатались в названии.<br>
  <br>
  <pre><code class="javascript hljs"><span class="hljs-keyword">var</span> x = <span class="hljs-built_in">document</span>.getElementByID(<span class="hljs-string">'foo'</span>);
  </code></pre><br>
  Несуществующие свойства объекта по-умолчанию имеют значение <code>undefined</code>, что приводит к этой ошибке.<br>
  <br>
  Другие вариации, такие как “number is not a function” возникают при попытке вызвать число, как будто оно является функцией.<br>
  <br>
  <b>Как исправить ошибку:</b> убедитесь в корректности имени функции. Для этой ошибки, номер строки обычно указывает в правильное место.<br>
  <br>
  <h3>Uncaught ReferenceError: Invalid left-hand side in assignment</h3><br>
  <b>Связанные ошибки:</b> Uncaught exception: ReferenceError: Cannot assign to ‘functionCall()’, Uncaught exception: ReferenceError: Cannot assign to ‘this’<br>
  <br>
  Вызвано попыткой присвоить значение тому, чему невозможно присвоить значение.<br>
  <br>
  Наиболее частый пример этой ошибки — это условие в if:<br>
  <br>
  <pre><code class="javascript hljs"><span class="hljs-keyword">if</span>(doSomething() = <span class="hljs-string">'somevalue'</span>)
  </code></pre><br>
  В этом примере программист случайно использовал один знак равенства вместо двух. Выражение “left-hand side in assignment” относится к левой части знака равенства, а, как можно видеть в данном примере, левая часть содержит что-то, чему нельзя присвоить значение, что и приводит к ошибке.<br>
  <br>
  <b>Как исправить ошибку:</b> убедитесь, что вы не пытаетесь присвоить значение результату функции или ключевому слову <code>this</code>.<br>
  <br>
  <h3>Uncaught TypeError: Converting circular structure to JSON</h3><br>
  <b>Связанные ошибки:</b> Uncaught exception: TypeError: JSON.stringify: Not an acyclic Object, TypeError: cyclic object value, Circular reference in value argument not supported<br>
  <br>
  Всегда вызвано циклической ссылкой в объекте, которая потом передается в <code>JSON.stringify</code>.<br>
  <br>
  <pre><code class="javascript hljs"><span class="hljs-keyword">var</span> a = { };
  <span class="hljs-keyword">var</span> b = { a: a };
  a.b = b;
  <span class="hljs-built_in">JSON</span>.stringify(a);
  </code></pre><br>
  Так как <code>a</code> и <code>b</code> в примере выше имеют ссылки друг на друга, результирующий объект не может быть приведен к JSON.<br>
  <br>
  <b>Как исправить ошибку:</b> удалите циклические ссылки, как в примере выше, из всех объектов, которые вы хотите сконвертировать в JSON.<br>
  <br>
  <h3>Unexpected token ;</h3><br>
  <b>Связанные ошибки:</b> Expected ), missing ) after argument list<br>
  <br>
  Интерпретатор JavaScript что-то ожидал, но не обнаружил там этого. Обычно вызвано пропущенными фигурными, круглыми или квадратными скобками.<br>
  <br>
  Токен в данной ошибке может быть разным — может быть написано “Unexpected token ]”, “Expected {” или что-то еще.<br>
  <br>
  <b>Как исправить ошибку:</b> иногда номер строки не указывает на правильное местоположение, что затрудняет исправление ошибки.<br>
  <br>
  Ошибка с [ ] { } ( ) обычно вызвано несовпадающей парой. Проверьте, все ли ваши скобки имеют закрывающую пару. В этом случае, номер строки обычно указывает на что-то другое, а не на проблемный символ.<br>
  <br>
  Unexpected / связано с регулярными выражениями. Номер строки для данного случая обычно правильный.<br>
  <br>
  Unexpected; обычно вызвано символом; внутри литерала объекта или массива, или списка аргументов вызова функции. Номер строки обычно также будет верным для данного случая.<br>
  <br>
  <h3>Uncaught SyntaxError: Unexpected token ILLEGAL</h3><br>
  <b>Связанные ошибки:</b> Unterminated String Literal, Invalid Line Terminator<br>
  <br>
  В строковом литерале пропущена закрывающая кавычка.<br>
  <br>
  <b>Как исправить ошибку:</b> убедитесь, что все строки имеют правильные закрывающие кавычки.<br>
  <br>
  <h3>Uncaught TypeError: Cannot read property ‘foo’ of null, Uncaught TypeError: Cannot read property ‘foo’ of undefined</h3><br>
  <b>Связанные ошибки:</b> TypeError: someVal is null, Unable to get property ‘foo’ of undefined or null reference<br>
  <br>
  Попытка прочитать <code>null</code> или <code>undefined</code> так, как будто это объект. Например:<br>
  <br>
  <pre><code class="javascript hljs"><span class="hljs-keyword">var</span> someVal = <span class="hljs-literal">null</span>;
  <span class="hljs-built_in">console</span>.log(someVal.foo);
  </code></pre><br>
  <b>Как исправить ошибку:</b> обычно вызвано опечатками. Проверьте, все ли переменные, использованные рядом со строкой, указывающей на ошибку, правильно названы.<br>
  <br>
  <h3>Uncaught TypeError: Cannot set property ‘foo’ of null, Uncaught TypeError: Cannot set property ‘foo’ of undefined</h3><br>
  <b>Связанные ошибки:</b> TypeError: someVal is undefined, Unable to set property ‘foo’ of undefined or null reference<br>
  <br>
  Попытка записать <code>null</code> или <code>undefined</code> так, как будто это объект. Например:<br>
  <br>
  <pre><code class="javascript hljs"><span class="hljs-keyword">var</span> someVal = <span class="hljs-literal">null</span>;
  someVal.foo = <span class="hljs-number">1</span>;
  </code></pre><br>
  <b>Как исправить ошибку:</b> это тоже обычно вызвано ошибками. Проверьте имена переменных рядом со строкой, указывающей на ошибку.<br>
  <br>
  <h3>Uncaught RangeError: Maximum call stack size exceeded</h3><br>
  <b>Связанные ошибки:</b> Uncaught exception: RangeError: Maximum recursion depth exceeded, too much recursion, Stack overflow<br>
  <br>
  Обычно вызвано неправильно программной логикой, что приводит к бесконечному вызову рекурсивной функции.<br>
  <br>
  <b>Как исправить ошибку:</b> проверьте рекурсивные функции на ошибки, которые могут вынудить их делать рекурсивные вызовы вечно.<br>
  <br>
  <h3>Uncaught URIError: URI malformed</h3><br>
  <b>Связанные ошибки:</b> URIError: malformed URI sequence<br>
  <br>
  Вызвано некорректным вызовом <code>decodeURIComponent</code>.<br>
  <br>
  <b>Как исправить ошибку:</b> убедитесь, что вызовы decodeURIComponent на строке ошибки получают корректные входные данные.<br>
  <br>
  <h3>XMLHttpRequest cannot load <a href="http://some/url/">some/url</a>. No ‘Access-Control-Allow-Origin’ header is present on the requested resource</h3><br>
  <b>Связанные ошибки:</b> Cross-Origin Request Blocked: The Same Origin Policy disallows reading the remote resource at <a href="http://some/url/">some/url</a><br>
  <br>
  Эта проблема всегда связана с использованием XMLHttpRequest.<br>
  <br>
  <b>Как исправить ошибку:</b> убедитесь в корректности запрашиваемого URL и в том, что он удовлетворяет <a href="https://developer.mozilla.org/en-US/docs/Web/Security/Same-origin_policy">same-origin policy</a>. Хороший способ найти проблемный код — посмотреть на URL в сообщении ошибки и найти его в своём коде.<br>
  <br>
  <h3>InvalidStateError: An attempt was made to use an object that is not, or is no longer, usable</h3><br>
  <b>Связанные ошибки:</b> InvalidStateError, DOMException code 11<br>
  <br>
  Означает то, что код вызвал функцию, которую нельзя было вызывать в текущем состоянии. Обычно связано c <code>XMLHttpRequest</code> при попытке вызвать на нём функции до его готовности.<br>
  <br>
  <pre><code class="javascript hljs"><span class="hljs-keyword">var</span> xhr = <span class="hljs-keyword">new</span> XMLHttpRequest();
  xhr.setRequestHeader(<span class="hljs-string">'Some-Header'</span>, <span class="hljs-string">'val'</span>);
  </code></pre><br>
  В данном случае вы получите ошибку потому, что функция <code>setRequestHeader</code> может быть вызвана только после вызова <code>xhr.open</code>.<br>
  <br>
  <b>Как исправить ошибку:</b> посмотрите на код в строке, указывающей на ошибку, и убедитесь, что он вызывается в правильный момент или добавляет нужные вызовы до этого (как с <code>xhr.open</code>).<br>
  <br>
  <h3>Заключение</h3><br>
  JavaScript содержит в себе одни из самых бесполезных ошибок, которые я когда-либо видел, за исключением печально известной <code>Expected T_PAAMAYIM_NEKUDOTAYIM</code> в PHP. Большая ознакомленность с ошибками привносит больше ясности. Современные браузеры тоже помогают, так как больше не выдают абсолютно бесполезные ошибки, как это было раньше.<br>
  <br>
  Какие самые непонятные ошибки вы встречали? Делитесь своими наблюдениями в комментариях.<br>
  <br>
  P.S. Этот перевод можно улучшить, отправив PR <a href="https://github.com/olegafx/translations/blob/master/JavaScript%20Errors%20and%20How%20to%20Fix%20Them.md">здесь</a>.</div>
  <div id="main-wrapper"><div id="main" class="clearfix<?php if ($main_menu) { print ' with-navigation'; } ?>">

    <div id="content" class="column" role="main"><div class="section">
      <?php if ($page['highlighted']): ?>
        <div id="highlighted"><?php print render($page['highlighted']); ?></div>
      <?php endif; ?>
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
