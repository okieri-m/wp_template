<?php get_header(); ?>

<!-- タイトルの読み込み -->
<div class="entry-header">
<h2 class="pagetitle"><?php echo single_term_title('', false);?></h2>
</div>

<!-- 本文の読み込み -->
<div class="entry-content">
<?php if(have_posts()): //記事がある場合 ?>
<?php
//記事データがある間、1記事分ずつ指定の内容を出力させる（1ページ分の表示記事数は管理画面＞設定＞表示設定から変更できます）
while(have_posts()){
	the_post();
	get_template_part(content_archive, get_post_format());
}
?>

<?php
//ページネーションの表示
$pagination = get_the_posts_pagination();
//そのまま書き出すとデカデカと「投稿ナビゲーション」と表示されるのでそれを消したものを出力
$pagination = preg_replace('/\<h2(.*?)\<\/h2\>/', '', $pagination);
echo $pagination;
?>
<?php else: //記事が無い場合 ?>
<p>記事がありません。
<?php endif; ?>
</div>

<?php get_footer(); ?>