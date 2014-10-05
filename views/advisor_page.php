<!DOCTYPE html>
<!-- saved from url=(0023)https://wisebanyan.com/ -->
<html class=" js flexbox flexboxlegacy no-touch backgroundsize fontface generatedcontent svg cookies bgpositionshorthand cubicbezierrange bgsizecover no-bgrepeatround no-bgrepeatspace csscalc lastchild mediaqueries no-csshyphens softhyphens softhyphensfind json cssremunit pointerevents no-ie8compat scriptasync unicode datauri" lang="en"><!--<![endif]-->
    <head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

        <meta charset="utf-8">
        <link rel="dns-prefetch" href="https://google-analytics.com/">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>WiseBanyan | The First Free Online-Based Financial Advisor</title>
        <meta name="description" content="WiseBanyan builds and manages your investment portfolios for free. We personalize and manage your individual, IRA, Roth IRA, and rollover 401(k) accounts.">
        <meta name="HandheldFriendly" content="True">
        <meta name="MobileOptimized" content="320">
        <meta name="viewport" content="width=device-width,initial-scale=1,minimal-ui"><!-- add `minimal-ui` to content for iOS7 -->
        <meta http-equiv="cleartype" content="on">
        <link href="https://wisebanyan.com/assets/stylesheets/master.css" rel="stylesheet">
        <link href="https://wisebanyan.com/assets/stylesheets/free.css" rel="stylesheet">
        <link href="https://wisebanyan.com/assets/stylesheets/normalize.css" rel="stylesheet">
        <meta class="foundation-mq-small"><meta class="foundation-mq-medium"><meta class="foundation-mq-large"><meta class="foundation-mq-xlarge"><meta class="foundation-mq-xxlarge"><style></style><style type="text/css"></style><style type="text/css"></style><meta class="foundation-mq-topbar">
        <script>
          (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
          (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
          m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
          })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
          //Demo track code
          ga('create', 'UA-55350366-1', 'auto');
          ga('send', 'pageview');
        </script>
    </head>

    <body role="document" class="home">

        <header role="banner" class="masthead">
            <div class="inner inner-banner">
                <a role="link" href="#" accesskey="1" id="header-img"><h1 role="heading" class="logo"></h1></a>
                <nav role="navigation" class="navbar">
                </nav>
            </div>
        </header>

        <main role="main" class="free">
            <div class="row">
            </div>

            <div class="subhead">
                <section>
                    <h1><?php echo $homepageTest->get('main_title') ?></h1>
                    <h3><?php echo $homepageTest->get('main_description') ?></h3>
                    <div role="form" id="email-form" class="beta-invite-form">
                        <form onsubmit="return false;">
                            <label for="email" hidden="">Email Address</label>
                            <input type="hidden" value="homet-invite" name="FORMALIAS">
                            <input type="email" name="EMAIL" id="email" placeholder="Email Address">
                            <button onclick="ga('send', 'event', 'Homepage', 'Subscribe Click', '<?php echo $homepageTest->getVariation() ?>');alert('Event sent to ganalytics')" role="button" value="SUBSCRIBE" name="subscribe" id="submit-page" class="button radius alert">
                                <?php echo $homepageTest->get('button_text') ?>
                            </button>
                            <div id="waitSpin"></div>
                        </form>
                    </div>
                    <div id="ResendEmail"></div>
                </section>

                <?php if ($homepageTest->get('show_main_image')): ?>
                  <section>
                      <figure>
                          <img role="img" src="views/assets/monitor.png" class="monitor-img">
                      </figure>
                  </section>
                <?php endif ?>
            </div>
            <article role="article" class="end-of-abstract">
                <div class="inner flex">
                    <section>
                        <h3 role="heading">Goodbye fees</h3>
                        <p>Most agree that financial advisory fees are too high. Fees now seem outdated
                            considering how technology allows advisors to create, invest, and manage
                            multiple portfolios faster than ever before.</p>
                        <p>WiseBanyan has built the leanest technology-driven financial advisor. This
                            means we can offer the same investment portfolios as a traditional advisor, but
                            never at your expense.</p>
                        <p><a id="earnmoney-link" onclick="trackOutboundLink(this, & #39; link & #39; , & #39; click & #39; , & #39; earnmoney & #39; ); return false;" href="https://wisebanyan.com/faq#how-is-it-free">Learn how we make money</a>
                        </p>
                    </section>
                    <aside style="-webkit-align-self: flex-end;-ms-flex-item-align: end;align-self: flex-end;text-align:center;">
                        <img role="img" src="views/assets/list.png" alt="">
                    </aside>
                </div>
            </article>
        </main>

        <footer role="contentinfo" class="colophon" style="position: initial;"></footer>
        <script src="views/assets/jquery-1.11.0.min.js"></script>
    </body>
</html>