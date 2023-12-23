<?php
/*
Template Name: テンプレート名
Template Post Type: post
single-.phpで複数作成する場合はこちらを記述。必要ない場合は削除
*/
?>
<?php get_header(); ?>
<div id="template-single">

<!-- タイトルなど基本情報の読み込み -->
<div class="entry-header">
<!--タイトル-->
<h2 class="pagetitle"><?php the_title();?></h2>
<!--投稿日-->
<p class="entry-date"><?php echo mysql2date('Y年n月j日', $post->post_date); ?></p>
<!--投稿者-->
<p class="entry-author"><?php the_author_posts_link(); ?></p>
<!--投稿カテゴリ-->
<p class="entry-cat">
<?php
$categories = get_the_category();
//選択したカテゴリ全て表示
foreach($categories as $category){
	echo '<a href="'.get_category_link($category->term_id).'">'.$category->name.'</a>';
}
/* // 最初の一つだけ表示する場合はこちら //
echo '<a href="'.get_category_link($categories[0]->term_id).'">'.$categories[0]->name.'</a>';
*/
?>
</p>
<!--投稿タグ-->
<p class="entry-tag">
<?php
$tags = get_the_tags();
foreach($tags as $tag){
	echo '<a href="'.get_tag_link($tag->term_id).'">'.$tag->name.'</a>';
}
?>
</p>
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

<!-- 前後の記事リンク -->
<?php if( get_previous_post()|| get_next_post()): ?>
<div class="entry-pager">
	<?php
	//前の記事へ
	previous_post_link('%link', '<span>%title</span>', TRUE, '');
	
	//次の記事へ
	next_post_link('%link', '<span>%title</span>', TRUE, '');
	?>
</div>
<?php endif; ?>

</div>

<?php get_footer(); ?>