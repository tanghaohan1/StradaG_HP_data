<?php get_header("sg");
/* Template Name: Front Page SG */
session_start();
$_SESSION['url_type']="sg";
$_SESSION['page_type']="top";
?>
<!-- .l-main | メインコンテンツ -->
<main class="l-main p-top">
  <!-- start imageplay -->
  <div class="imageplay">
    <!-- picture area -->
    <ul>
      <li>
        <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/top_SG/Strada_Admin_Slider_01.png"
            alt="" /></a>
      </li>
      <li>
        <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/top_SG/Strada_Admin_Slider_01.png"
            alt="" /></a>
      </li>
      <li>
        <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/top_SG/Strada_Admin_Slider_01.png"
            alt="" /></a>
      </li>
    </ul>
    <!-- left,right arrow -->
    <div class="left"><img src="<?php echo get_template_directory_uri(); ?>/images/top_SZ/arrow-left.png" alt=""
        class="arrowstyle-left" /></div>
    <div class="right"><img src="<?php echo get_template_directory_uri(); ?>/images/top_SZ/arrow-right.png" alt=""
        class="arrowstyle-right" /></div>
    <!-- dot -->
    <ol>
    </ol>
  </div>
  <!-- end imageplay -->
  <!-- start What’s New -->
  <div class="block_wrap">
    <div class="border-bt">
      <div class="l-container">
        <div style="display:flex">
          <div id="block_wrap" class="title_item_wrap active">
            <p class="chapter_title">What's New
            <div class="circle"></div>
            </p>
          </div>
          <div id="text" class="border-text border-text-controll">更新のご案内</div>
        </div>
      </div>
    </div>
    <div class="l-container">
      <div id="list_wrap" class="node_wrap node_wrap_show">
<!--        <div class="news_style1"><iframe src="https://www.youtube.com/embed/D5-5j3AoQvw" frameborder="0"-->
<!--            allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen-->
<!--            style="width:100%;height:90%"></iframe>-->
<!--          <p class="Youtube_text">ストラーダ公認会計士事務所紹介動画 Youtube</p>-->
<!--        </div>-->
        <div class="news_style2">
          <div class="t-news_list_topbox">
            <div style="display: flex;overflow-x: hidden;width:100%;border-bottom:1px dotted #707070;">
              <div class="news_title">ニュース</div>
              <a href="<?php echo home_url('admin/adminnewslist'); ?>" style="text-decoration:none">
                 <div class="news_title_readmore">READ MORE</div>
                <div style="position:relative;top:-5px">
                  <img src="<?php echo get_template_directory_uri(); ?>/images/top/news_more.png" alt=""
                    style="width:30px" />
                </div>
              </a>
            </div>
            <?php
            // $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : '1';
            $args = array(
              'post_type' => 'news', // 文章类型
              'posts_per_page' => 10,
              'paged' => $paged,
              'company' => 'SG', // 自定义字段名
            );
            $query = new WP_Query($args); // 执行查询
            ?>
            <ul>
              <?php
              if($query->have_posts()) :
                while($query->have_posts()) : $query->the_post(); ?>
              <li>
                <a href="<?php echo get_permalink(get_the_ID()); ?>">
                  <div class="t-news_list_topbox time" style="float: left; width: 10%;">
                    <?php echo get_the_date('Y.m.d') ?>
                  </div>
                  <div class="t-news_list_topbox time" style="float: right; width: 90%;">
                    <?php echo get_the_title(); ?>
                  </div>
                </a>
              </li>
              <?php endwhile;
                wp_reset_postdata();
              else:
                ?>
              <div class="title">
                <li>
                  <p>
                    <?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?>
                  </p>
                </li>
              </div>
              <?php endif;?>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- end What’s New -->

  <!-- start Message -->
  <div class="block_wrap1">
    <div class="border-text1"></div>
    <div class="border-bt">
      <div class="l-container">
        <div style="display:flex">
          <div id="block_wrap1" class="title_item_wrap1 active1">
            <p class="chapter_title1">Message
            <div class="circle1"></div>
            </p>
          </div>
          <div id="text1" class="border-text border-text-controll">トップメッセージ</div>
        </div>
      </div>
    </div>
    <div id="list_wrap1" class="node_wrap1 node_wrap_show1">
      <div class="l-container Message_style1_extra">
        <div class="Message_style1">
          <p class="Message_style1_p3">
            　「ストラーダ」とは、イタリア語で「道」という意味があります。<br />
            　お客様と歩む長い道をともに歩み続けられるような行政書士となりたいという意味を込めて、「ストラーダ行政書士法人」と名付けました。<br /><br />
            　行政書士の特徴は、お客様の新しい生活・事業に寄り添うパートナーとしての性質を有しています。<br />
            　そのため、長期に渡ってお客様へ価値を提供できるように自己研鑽に励み、行政への申請面はもちろん他の面においてもグループ内法人と共に価値を提供できるように努めてまいります。<br />
            　また、企業に価値を提供するスタッフが長期に渡って働けるような社内環境を整え、新しいことに挑戦し続ける事務所経営を行います。<br /><br />
          </p>
          <p class="Message_style1_p4">ストラーダ行政書士法人　代表社員</p>
          <p class="Message_style1_p5">星野 隆介</p>
        </div>
        <div class="Message_style2">
          <img src="<?php echo get_template_directory_uri(); ?>/images/top_SG/SG_TOP_Massage.png" alt="" />
        </div>
      </div>
    </div>
  </div>
  <!-- end Message -->

  <!-- start Strada Group -->
  <a id="StradaGroup" class="target-fix"></a>
  <div class="block_wrap2">
    <div class="border-text2"></div>
    <div class="border-bt">
      <div class="l-container">
        <div style="display:flex">
          <div id="block_wrap2" class="title_item_wrap2 active2">
            <p class="chapter_title2">Strada Group
            <div class="circle2"></div>
            </p>
          </div>
          <div id="text2" class="border-text border-text-controll">ストラーダグループ</div>
        </div>
      </div>
    </div>
      <div id="list_wrap2" class="node_wrap2 node_wrap_show2">
      <div class="l-container">
                <div class="l-container Group_style2_extra">
                    <div class="Group_style_left">
                        <div class="image_div2">
                            <div class="title_div_p_2">
                                <p class="Group_style1_p1">ワンストップの集団だからこそできる部分最適ではなく全体最適な提案を。</p>
                                <!-- <p class="Group_style1_p2">部分最適ではなく全体最適な提案を。</p> -->
                            </div>
                            <div id="mainDiv" class="div-relative">
                                <div id="firstDiv" class="div-a">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/common/groupImg.png"
                                        alt="" />
                                </div>
                                <div id="secendDiv" class="div-b"></div>
                            </div>
                        </div>
                    </div>
                    <div class="Group_style_right">
                        <div class="youtube_div_2">
                            <div class="Group_youtube_style1">
                                <iframe src="https://www.youtube.com/embed/D5-5j3AoQvw" frameborder="0"
                                    allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                    allowfullscreen style="width:100%;height:90%"></iframe>
                                <p class="Youtube_text">ストラーダグループ紹介動画 Youtube</p>
                            </div>
                            <div class="StradaStyle_div">
                                <p class="StradaStyle">ストラーダグループとは、　 <br>
                                    <a href="<?php echo home_url('tax'); ?>" style="text-decoration: none;"><span
                                            class="StradaStyle_span1">■税理士：ストラーダ税理士法人　</span></a> <br>
                                    <a href="<?php echo home_url('bs'); ?>" style="text-decoration: none;"><span
                                            class="StradaStyle_span2">■ビジネスコンサル：ストラーダビジネスサポート株式会社　</span></a> <br>
                                    <span class="StradaStyle_span3">■公認会計士：ストラーダ公認会計士　</span> <br>
                                    <a href="<?php echo home_url('sr'); ?>" style="text-decoration: none;"><span
                                            class="StradaStyle_span4">■社会保険労務士：ストラーダ社会保険労務士</span></a> <br>
                                    <a href="<?php echo home_url('chushoukigyouroudou'); ?>"
                                        style="text-decoration: none;"><span
                                            class="StradaStyle_span5">■労働保険事業組合業務：中小企業労働企画開発協会</span></a> <br>
                                    <a href="<?php echo home_url('admin'); ?>" style="text-decoration: none;"><span
                                            class="StradaStyle_span6">■行政書士：ストラーダ行政書士　</span></a> <br>
                                    <a href="<?php echo home_url('taxria'); ?>" style="text-decoration: none;"><span
                                            class="StradaStyle_span7">■不動産：株式会社タックス・リアルティ　</span></a> <br>
                                    <span class="StradaStyle_span8">■AI・DXコンサル：ストラーダAIDX株式会社　</span> <br>
                                    <span
                                        class="StradaStyle_span9">が在籍しています。ストラーダグループとして、企業の戦略を下支する、バックオフィス業務の専門家集団です。バックオフィス業務を総合的な支援をさせて頂くことにより、
                                        会社の全体戦略に基づいたアドバイスを可能としております。</span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<!--    <div class="l-container">-->
<!--      <div id="list_wrap2" class="node_wrap2 node_wrap_show2">-->
<!--        <div class="Strada_style">-->
<!--          <div class="Strada_style_img1">-->
<!--            <img src="--><?php //echo get_template_directory_uri(); ?><!--/images/top_SZ/Strada Group_icon.png" alt=""-->
<!--              class="Strada_style_img1_1" />-->
<!--          </div>-->
<!--          <p class="StradaStyle">ストラーダグループとは、　-->
<!--            <span style="color: #00a159; font-weight: bold;">■ビジネスコンサル：ストラーダビジネスサポート株式会社　</span>-->
<!--            <span style="color: #003e75; font-weight: bold;">■税理士：ストラーダ税理士法人　</span>-->
<!--            <span style="color: #684799; font-weight: bold;">■公認会計士：ストラーダ公認会計士　</span>-->
<!--            <span style="color: #e17401; font-weight: bold;">■社会保険労務士：ストラーダ</span>-->
<!--            <span style="color: #e17401; font-weight: bold;">社会保険労務士　</span>-->
<!--            <span style="color: #b3752a; font-weight: bold;">■中小企業診断士：中小企業労働企画開発協会　</span>-->
<!--            <span style="color: #808c96; font-weight: bold;">■行政書士：ストラーダ行政書士　</span>-->
<!--            <span style="color: #b8183f; font-weight: bold;">■不動産：株式会社タックス・リアルティ　</span>-->
<!--            <span style="color: #221815;">が在籍しています。ストラーダグループとして、企</span>-->
<!--            <span style="color: #221815;">業の戦略を下支する、バックオフィス業務の専門家集団です。バックオフィス業務を総合的な支援をさせて頂くことにより、-->
<!--              会社の全体戦略に基づいたアドバイスを可能としております。</span>-->
<!--          </p>-->
<!--        </div>-->
<!--      </div>-->
<!--    </div>-->
  </div>
  <!-- end Strada Group -->

  <!-- start Service -->
  <a id="Service" class="target-fix"></a>
  <div class="block_wrap3">
    <div class="border-text3"></div>
    <div class="border-bt">
      <div class="l-container">
        <div style="display:flex">
          <div id="block_wrap3" class="title_item_wrap3 active3">
            <p class="chapter_title3">Service
            <div class="circle3"></div>
            </p>
          </div>
          <div id="text3" class="border-text border-text-controll">業務内容</div>
        </div>
      </div>
    </div>
    <div id="list_wrap3" class="node_wrap3 node_wrap_show3">
      <?php get_template_part('template', 'sg-service'); ?>
    </div>
  </div>
  <!-- end Service -->

  <!-- start Case Study 一旦非表示
  <a id="CaseStudy" class="target-fix"></a>
  <div class="block_wrap5">
    <div class="border-text5"></div>
    <div class="border-bt">
      <div class="l-container">
        <div style="display:flex">
          <div id="block_wrap5" class="title_item_wrap5 active5">
            <p class="chapter_title5">Case Study
            <div class="circle5"></div>
            </p>
          </div>
          <div id="text5" class="border-text border-text-controll">当社事例</div>
        </div>
      </div>
    </div>
    <div id="list_wrap5" class="node_wrap5 node_wrap_show5">
      <?php //get_template_part('template', ''); ?>
    </div>
  </div>
  一旦非表示 end Case Study -->

  <!-- start About -->
  <a id="About" class="target-fix"></a>
  <div class="block_wrap7">
    <div class="border-text7"></div>
    <div class="border-bt">
      <div class="l-container">
        <div style="display:flex">
          <div id="block_wrap7" class="title_item_wrap7 active7">
            <p class="chapter_title7">About
            <div class="circle7"></div>
            </p>
          </div>
          <div id="text7" class="border-text border-text-controll">会社概要、アクセス、メンバー</div>
        </div>
      </div>
    </div>
    <div id="list_wrap7" class="node_wrap7 node_wrap_show7">
      <?php get_template_part('template', 'about_sg'); ?>
    </div>
  </div>
  </div>
  </div>
  <!-- end About -->

  <!-- start Price -->
  <a id="Price" class="target-fix"></a>
  <div class="block_wrap6">
    <div class="border-text6"></div>
    <div class="border-bt">
      <div class="l-container">
        <div style="display:flex">
          <div id="block_wrap6" class="title_item_wrap6 active6">
            <p class="chapter_title6">Price
            <div class="circle6"></div>
            </p>
          </div>
          <div id="text6" class="border-text border-text-controll">Price</div>
        </div>
      </div>
    </div>
    <div id="list_wrap6" class="node_wrap6 node_wrap_show6">
      <?php get_template_part('template', 'price_sg'); ?>
    </div>
  </div>
  <!-- end Price -->

  <!-- start Contact -->
  <a id="Contact" class="target-fix"></a>
  <div class="block_wrap8">
    <div class="border-text8"></div>
    <div class="border-bt">
      <div class="l-container">
        <div style="display:flex">
          <div id="block_wrap8" class="title_item_wrap8 active8">
            <p class="chapter_title8">Contact
            <div class="circle8"></div>
            </p>
          </div>
          <div id="text8" class="border-text border-text-controll">お問い合わせ</div>
        </div>
      </div>
    </div>
    <div id="list_wrap8" class="node_wrap8 node_wrap_show8">
      <?php get_template_part('template', 'contact_sg'); ?>
    </div>
  </div>
  <!-- end Contact -->

  <!-- start Recruit -->
  <a id="Recruit" class="target-fix"></a>
  <div class="block_wrap9">
    <div class="border-text9"></div>
    <div class="border-bt">
      <div class="l-container">
        <div style="display:flex">
          <div id="block_wrap9" class="title_item_wrap9 active9">
            <p class="chapter_title9">Recruit
            <div class="circle9"></div>
            </p>
          </div>
          <div id="text9" class="border-text border-text-controll">採用情報</div>
        </div>
      </div>
    </div>
    <div id="list_wrap9" class="node_wrap9 node_wrap_show_new">
      <?php get_template_part('template', 'recruit_sg'); ?>
    </div>
  </div>
  <!-- end Recruit -->
</main>

<?php get_footer("sg"); ?>
<script>
function $(id) {
    return document.getElementById(id)
}

function setHeightWidth() {
    $("secendDiv").style.height = $("firstDiv").offsetHeight + "px";
    $("secendDiv").style.width = $("mainDiv").offsetWidth + "px";
    $("mainDiv").style.height = $("firstDiv").offsetHeight + "px";
}

function creatCircle() {
    const circleContainer = document.querySelector('#secendDiv');
    let childElements = circleContainer.querySelectorAll('*'); // 获取所有子元素刪除
      childElements.forEach((element) => {
        element.parentNode.removeChild(element);
    });
    // const list = ['ストラーダAIDX株式会社', 'ストラーダ税理士法人', 'ストラーダビジネスサポート株式会社', 'ストラーダ公認会計士事務所', 'ストラーダ社会保険労務士法人',
    //'中小企業労働企画開発協会', 'ストラーダ行政書士法人', 'タックスリアルティ株式会社'];
    const list = ['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'i'];
    list.forEach((item, index) => {
        const circle = document.createElement('a');
        if (item == 'i') {
            circle.classList.add('circle10');
            // circle.textContent = item;
            circle.addEventListener('click', () => {
                circle.href = '<?php echo home_url('/'); ?>';
            });
        } else {
            circle.classList.add('circle100');
            // circle.textContent = item;
            circle.addEventListener('click', () => {
                // alert(item)
                //if(item == 'A'){
                //    circle.href= '<?php //echo home_url(''); ?>//';
                //}
                if (item == 'B') {
                    circle.href = '<?php echo home_url('tax'); ?>';
                }
                if (item == 'C') {
                    circle.href = '<?php echo home_url('bs'); ?>';
                }
                //if(item == 'D'){
                //    circle.href= '<?php /*echo home_url(''); */?>//';
                //}
                if (item == 'E') {
                    circle.href = '<?php echo home_url('sr'); ?>';
                }
                if (item == 'F') {
                    circle.href = '<?php echo home_url('chushoukigyouroudou'); ?>';
                }
                if (item == 'G') {
                    circle.href = '<?php echo home_url('admin'); ?>';
                }
                if (item == 'H') {
                    circle.href = '<?php echo home_url('taxria'); ?>';
                }

            });
        }
      circleContainer.appendChild(circle);
    });
}
window.onload = function() {
    setHeightWidth();
    creatCircle();
    console.log("creat circle");
}

window.addEventListener('resize', () => {
    // 宽度变化的处理逻辑
    setHeightWidth();
    creatCircle();
    console.log("update circle");
});
</script>