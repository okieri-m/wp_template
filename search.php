<?php get_header(); ?>

<?php $serchword = get_search_query(); //検索された文字列を取得 ?>

<!-- タイトルの読み込み -->
<div class="entry-header">
<h2 class="pagetitle">「<?php echo $serchword);?>」検索結果</h2>
</div>

<!-- 本文の読み込み -->
<div class="entry-content">
<?php if(have_posts()): //記事がある場合 ?>
<?php
//記事データの表示
while(have_posts()){
	the_post();
	get_template_part(content_archive, get_post_format());
}
?>

<?php
//ページネーションの表示
$pagination = get_the_posts_pagination();
$pagination = preg_replace('/\<h2(.*?)\<\/h2\>/', '', $pagination);
echo $pagination;
?>

<?php else: //記事が無い場合 ?>
<p>「<?php echo $serchword; ?>」記事はまだありません。
<?php endif; ?>
</div>

<?php get_footer(); ?>