<?php
/*
Template Name: テンプレート名
Template Post Type: page
page-.phpで複数作成する場合はこちらを記述。必要ない場合は削除
*/
?>
<?php get_header(); ?>

<div id="template-page">

<!-- タイトルの読み込み -->
<div class="entry-header">
<h2 class="pagetitle"><?php the_title();?></h2>
<p>テストテキストテキストテキすとテストテキストテキストテキすとテストテキストテキストテキすと</p>
</div>

<!-- 本文の読み込み -->
<div class="entry-content">
<?php
if(have_posts()){
	while(have_posts()){
		the_post();
		the_content();
	}
} ?>
</div>

</div>

<?php get_footer(); ?>