<?php
/*
Template Name: イベント投稿ページ
Template Post Type: post
*/
?>
-<!-- header.php ここから -->
<!-- -<!DOCTYPE html>
-
-<head>
-  <title>samurai university</title>
-  <meta charset="utf-8" />
-  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
-  <meta name="description" content="samurai university" />
-  <meta name="viewport" content="width=device-width, initial-scale=1" />
-  <link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css" />
-  <link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
-  <link rel="stylesheet" type="text/css" href="styles/main_styles.css" />
-</head>
-
-<body>
-  <div class="super_container"> -->
-    <!-- ヘッダーここから -->
<!-- -    <header class="header">
-      <div class="header_container">
-        <div class="">
-          <nav class="navbar navbar-expand-lg">
-            <div class="logo_container">
-              <a href="index.php">
-                <div class="logo_text">
-                  <a href="index.html">
-                    <img src="images/logo_big.png" />
-                    <span>Samurai University</span>
-                  </a>
-                </div>
-              </a>
-            </div>
-            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
-              aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
-              <i class="fa fa-bars toggle-menu" aria-hidden="true"></i>
-            </button>
-            <div class="collapse navbar-collapse" id="navbarSupportedContent">
-              <ul class="navbar-nav flex-row ml-md-auto d-md-flex main_nav">
-                <li class="nav-item">
-                  <a class="nav-link" href="news.html">
-                    NEWS
-                    <p>ニュース</p>
-                  </a>
-                </li>
-                <li class="nav-item">
-                  <a class="nav-link" href="events.html">
-                    EVENT
-                    <p>イベント</p>
-                  </a>
-                </li>
-                <li class="nav-item">
-                  <a class="nav-link" href="courses.html">
-                    COURSES
-                    <p>コース</p>
-                  </a>
-                </li>
-                <li class="nav-item">
-                  <a class="nav-link" href="about.html">
-                    ABOUT US
-                    <p>侍大学について</p>
-                  </a>
-                </li>
-              </ul>
-            </div>
-          </nav>
-        </div>
-      </div>
-    </header> -->
-    <!-- ヘッダー ここまで -->
-    <!-- header.php ここまで -->
    <?php get_header(); ?>

    <?php if(have_posts()) :?>
    <?php while (have_posts()) : the_post() ; ?>
    <!-- Home -->

    <div class="home">
      <div class="breadcrumbs_container">
        <div class="image_header">
          <div class="header_info">
            <!-- <div>Event</div>
            <div>イベント</div> -->
            <?php
             $cat = get_the_category();
             $catslug = $cat[0]->slug;
             $catname = $cat[0]->cat_name;
           ?>
             <div><?php echo $catslug; ?></div>
             <div><?php echo $catname; ?></div>
          </div>
        </div>
      </div>
    </div>

    <!-- Post 部分 -->
    <div class="course">
      <div class="row content-body">
        <!-- Course -->
        <div class="col-lg-8">
          <!-- Course Tabs -->
          <div class="course_tabs_container">
            <div class="tab_panels">
              <!-- Description -->
              <div class="tab_panel">
                <!-- <div class="tab_panel_title">イベント</div> -->
                <div class="tab_panel_title"><?php echo $catname; ?></div>
                <div class="tab_panel_content">
                  <div class="tab_panel_text">
                    <div class="news_posts_small">
                      <div class="row">
                        <div class="col-lg-2 col-md-2 col-sx-12">
                          <div class="calendar_news_border">
                            <div class="calendar_news_border_1">
<!-- -                              <div class="calendar_month">OCT</div> -->
                            <div class="calendar_month"><?php echo post_custom('month'); ?></div>
                                <div class="calendar_day">
<!-- -                                <span>15</span> -->
                                <span><?php echo post_custom('day'); ?></span><span>日</span>
                              </div>
                            </div>
                          </div>
<!-- -                          <div class="calendar_hour">AM9:30-12:00</div> -->
                        <div class="calendar_hour"><?php echo post_custom('time'); ?></div>
                        </div>
                        <div class="col-lg-10 col-md-10 col-sx-12">
                          <div class="news_post_small_header">
<!-- -                            <img src="images/tags-solid.png" alt="" /> NEWS -->
<!-- +                            <img src="<?php echo get_template_directory_uri( );?>/images/tags-solid.png" alt="" /> イベント -->
                                    <img src="<?php echo get_template_directory_uri( );?>/images/tags-solid.png" alt="" /> <?php echo $catname; ?>  
                        </div>
                          <div class="news_detail_title">
<!-- -                            AWSハンズオンセミナー -->
                            <?php the_title(); ?>
                          </div>
                          <div class="news_time">
                            <div>
<!-- -                              <img src="images/clock-regular.png" alt="" /> -->
<!-- -                              <span>日付：2019年08月18日</span> -->
                                <img src="<?php echo get_template_directory_uri();?>/images/clock-regular.png" alt="" />
                                <span>日付：<?php echo post_custom('date'); ?> </span>
                            </div>
                            <div>
<!-- -                              <img src="images/yen-sign-solid.png" alt="" /> -->
<!-- -                              <span>参加費：無料</span> -->
                                <img src="<?php echo get_template_directory_uri(); ?>/images/yen-sign-solid.png" alt="" />
                                <!-- <span>参加費：<?php echo post_custom('fee'); ?></span> -->
                                    <span>参加費：<?php 
                                      if(post_custom('fee') == 0) {
                                        echo '無料';
                                      } else {
                                        echo '¥' . number_format(post_custom('fee'));
                                      }
                                    ?></span>
                            </div>
                          </div>
                          <div class="news_post_meta">
<!-- -                            10月8日　新宿〇〇ビル8Fにて、AWSハンズオンセミナーを開催します。AWSを実際に構築してみます。参加希望者は... -->
                            <?php the_content(); ?>
                          </div>

                          <hr />
                          <div class="social_share">
<!-- -                            <img src="images/facebook-square-brands.png" alt="" /> -->
<!-- -                            <img src="images/twitter-square-brands.png" alt="" /> -->
                            <img src="<?php echo get_template_directory_uri(); ?>/images/facebook-square-brands.png" alt=""/>
                            <img src="<?php echo get_template_directory_uri(); ?>/images/twitter-square-brands.png" alt="" />
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <?php endwhile; ?>
        <?php endif; ?>

        <!--  Sidebar -->
        <!-- <div class="col-lg-4" style="background-color: #2b7b8e33">
-          <div class="sidebar">
-            <div class="category">
-              <div class="section_title_container category_title">
-                <h2>CATEGORY</h2>
-                <div class="section_subtitle">カテゴリー</div>
-              </div>
-              <div class="sidebar_categories">
-                <ul>
-                  <li><a href="#">News ニュース</a></li>
-                  <li><a href="#">Event イベント</a></li>
-                  <li><a href="#">CampusLife 侍の学生</a></li>
-                </ul>
-              </div>
-            </div>
-            <div class="category">
-              <div class="section_title_container category_title">
-                <h2>Latest Post</h2>
-                <div class="section_subtitle">最新記事</div>
-              </div>
-              <div class="sidebar_categories">
-                <ul>
-                  <li><a href="#">AWS ハンズオンセミ…</a></li>
-                  <li><a href="#">AWS ハンズオンセミ…</a></li>
-                  <li><a href="#">AWS ハンズオンセミ…</a></li>
-                </ul>
-              </div>
-            </div>
-          </div> -->
            <?php get_sidebar(); ?>
        </div>
      </div>
    </div>
-    <!-- footer.php ここから -->
<!-- -    <footer class="footer">
-      <div class="row footer_row">
-        <div class="col">
-          <div class="footer_content">
-            <div class="row">
-              <div class="col-lg-4 footer_col">
-                <div class="footer_section footer_about">
-                  <div class="footer_logo_container">
-                    <img src="images/logo_big.png" alt="" />
-                    <a href="">
-                      <div class="footer_logo_text">Samurai University</div>
-                    </a>
-                  </div>
-                  <div class="footer_contact_info">
-                    <div>〒150-0043</div>
-                    <div>東京都渋谷区道玄坂2丁目11-1 Gスクエア渋谷道玄坂4F</div>
-                    <ul>
-                      <li><span>TEL: </span>03-2222-11</li>
-                      <li><span>MAIL: </span>: sample@sejuku.net</li>
-                    </ul>
-                  </div>
-                  <div class="footer_social">
-                    <ul>
-                      <li>
-                        <a href=""><i class="fa fa-twitter" aria-hidden="true"></i></a>
-                      </li>
-                      <li>
-                        <a href=""><i class="fa fa-facebook" aria-hidden="true"></i></a>
-                      </li>
-                    </ul>
-                  </div>
-                </div>
-              </div>
-              <div class="col-lg-3 footer_col">
-                <div class="footer_section footer_links">
-                  <div class="footer_links_container">
-                    <ul>
-                      <li><a href="news.html">ニュース</a></li>
-                      <li><a href="events.html">イベント</a></li>
-                      <li><a href="courses.html">コース</a></li>
-                      <li><a href="about.html">侍大学について</a></li>
-                    </ul>
-                  </div>
-                </div>
-              </div>
-              <div class="col-lg-5 footer_col clearfix">
-                ※ここにTwitterのタイムラインを埋め込みます
-              </div>
-            </div>
-          </div>
-        </div>
-      </div>
-      <div class="row copyright_row">
-        <div class="col">
-          <div class="copyright d-flex flex-lg-row flex-column align-items-center justify-content-start">
-            <div class="cr_text">
-              Copyright &copy; Samurai University All Rights Reserved.
-            </div>
-          </div>
-        </div>
-      </div>
-    </footer>
-  </div> -->
-
-  <!--jQuery-->
<!-- -  <script src="js/jquery-3.2.1.min.js"></script>
-  <script src="styles/bootstrap4/popper.js"></script>
-  <script src="styles/bootstrap4/bootstrap.min.js"></script>
-  <script type="text/javascript">
-    $(".carousel").carousel();
-  </script>
-
-</body>
-
-</html> -->
-<!-- footer.php ここまで -->
    <?php get_footer(); ?>
