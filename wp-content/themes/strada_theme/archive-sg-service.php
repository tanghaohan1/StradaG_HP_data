<?php
/* Template Name: Archive SG Service */
get_header("sg");
session_start();
$_SESSION['url_type']="sg";
$_SESSION['page_type']="service";
?>

<!-- .l-main | メインコンテンツ -->
<main class="l-main p-service">
  <div class="c-breakcrumds">
    <div class="l-container">
      <?php if (function_exists('bcn_display')) { bcn_display(); }?>
    </div>
  </div>
  <!-- end c-breakcrumds -->
  <div class="c-mainTitle">
    <div class="c-mainTitle_content">
      <div class="c-tlt01 c-tlt01__black">
        <h1 class="c-tlt01__line c-tlt01__line--gray">
        </h1>
      </div>
    </div>
  </div>
    <div class="l-container">
        <div class="template-service-title">
            <hr class="service-line-bottom-top" />
            <p>入管業務に関する申請作業は多種の書類を揃えねばならず、一度申請が却下されてしまうと二度目の申請は難易度が増してしまいます。</p>
            <p>ご自分で申請しようと煩雑な作業で時間を取られるより、行政書士への依頼をおすすめします。</p>
            <hr class="service-line-bottom-top2" />
            <div style="margin-top: 3%;"></div>
        </div>
    </div>
  <!-- end c-mainTitle -->
    <div class="c-new-content">
        <div class="l-content">
            <div class="l-container">
                <?php
                $terms = get_terms( 'taxonomy_servicesg', array(
                    'hide_empty' => false,
                    'parent' => 0,
                    'order' => 'ASC',
                    'orderby' => 'menu_order'
                ) );
                ?>
                <div class="c-serviceList">
                    <div class="menberTtile">サービス案内</div>
                    <div style="height: 10px;"></div>
                    <?php
                    $index=0;
                    foreach ( $terms as $term ) :
                        $tax_link = get_term_link($term->slug, 'taxonomy_servicesg');
                        $tax_name = $term->name;
                        $tax_slug = $term->slug;
                        $img = get_field('service_cat_thumbnail', $term);
                        $slug = $term->slug;
                        $wp_term_url = get_term_link($term);
                        $index++;
                        ?>
                        <div class="<?php
                        if($index%3==1){
                            echo "serviceItem_top";
                        }else{
                            echo "serviceItem_top2";
                        }
                        ?>">
                            <div class="thumb">
                                <img src="<?php echo $img['url'] ?>" alt="">
                            </div>
                            <?php
                            if($slug==="buppantax"){
                                echo '<a  href="https://'.$slug.'.com" style="text-decoration:none;">
                  <div class="service_title_icon">
                      <span>'.$tax_name.'</span>
                  </div>
              </a>';
                            }else{
                                echo '<a  href="'.$wp_term_url.'" style="text-decoration:none;">
                  <div class="service_title_icon">
                     <span>'.$tax_name.'</span>
                  </div>
              </a>';

                            }

                            ?>

                            <div class="content">
                                <div>
                                    <p class="description_box"><?php echo nl2br($term->description); ?></p>
                                    <!--              <div class="c-btn01 ">-->
                                </div>
                                <!--               <div class="ttl2 c-btn01__blue">-->
                                <!--                <a href="--><?php //echo get_term_link($term) ?><!--">詳細はこちら</a>-->
                                <!--              </div>-->
                            </div>

                        </div>
                    <?php
                    endforeach;
                    ?>
                </div>
            </div>
        </div>
    </div>
</main>

<?php get_footer('sg'); ?>