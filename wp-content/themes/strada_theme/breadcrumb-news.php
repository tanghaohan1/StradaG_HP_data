<?php
$newsurl = get_post_type_archive_link('news');
$homeurl = str_replace("/news", "", $newsurl);
$homeurl2 = $homeurl."news";
?>
<span property="itemListElement" typeof="ListItem">
    <a property="item" typeof="WebPage" title="Go to 中央区日本橋の税理士法人【ストラーダ税理士法人】." href="<?php echo $homeurl ?>" class="home">
        <span property="name">TOP</span>
    </a>
    <meta property="position" content="1">
</span>
&gt;
<span property="itemListElement" typeof="ListItem">
    <a property="item" typeof="WebPage" title="Go to ニュース." href="<?php echo $homeurl2 ?>" class="post post-page">
        <span property="name">ニュース</span>
    </a>
    <meta property="position" content="2">
</span>
&gt;
<span property="itemListElement" typeof="ListItem">
    <span property="name" class="post post-page current-item"><?php echo $get_post_type_archive_link ?><?php the_title() ?></span>
    <meta property="url" content="">
    <meta property="position" content="3">
</span>