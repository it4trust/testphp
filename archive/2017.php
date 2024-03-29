<?php

$_SERVER['BASE_PAGE'] = 'archive/2017.php';
include_once __DIR__ . '/../include/prepend.inc';
include_once __DIR__ . '/../include/pregen-news.inc';
news_archive_sidebar();
site_header("News Archive - 2017");
?>

<h1>News Archive - 2017</h1>

<p>
 Here are the most important news items we have published in 2017 on PHP.net.
</p>

<hr>

<?php

print_news($NEWS_ENTRIES, null, 500, 2017);

/* %s/<a href="\(.*\)"><img src="\/images\/news\/\(.*\)" alt="\(.*\)" width.*><\/a>/<?php news_image("\1", "\2", "\3"); ?>/g */
site_footer(['elephpants' => true, 'sidebar' => $SIDEBAR_DATA]);
