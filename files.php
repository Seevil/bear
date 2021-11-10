<?php 
/**
* 文章归档
*
* @package custom
*/
if (!defined('__TYPECHO_ROOT_DIR__')) exit;
$this->need('header.php');
?>

<div class="container">
    <?php
$this->widget('Widget_Contents_Post_Recent', 'pageSize=10000')->to($archives);   
    $year=0; $mon=0; $i=0; $j=0;  
    while($archives->next()):   
        $year_tmp = date('Y',$archives->created);   
        $mon_tmp = date('m',$archives->created);   
        $y=$year; $m=$mon;   
        if ($mon != $mon_tmp && $mon > 0) $output .= '';   
        if ($year != $year_tmp && $year > 0) $output .= '';   
        if ($year != $year_tmp) {   
            $year = $year_tmp;   
            @$output .= '<div class="year-wrap"><div class="year"><a class="title" >'. $year .'</a></div></div><div class="archives">'; //输出年份   
        }    
        $output .= '<div class="post-archive"><div class="post-archive__content"><div class="post-archive__month">'.date('m月 ',$archives->created).'</div><div class="post-archive__body"><a class="post-archive__title" href="'.$archives->permalink .'">'. $archives->title .'</a></div></div></div>'; //输出文章日期和标题   
    endwhile;   
    $output .= '</div>';
    echo $output;
?>

        </div>
	<?php $this->need('footer.php'); ?>
