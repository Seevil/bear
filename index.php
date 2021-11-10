<?php
/**
 * Bear 又一个极简主题
 * HEXO同名主题移植 https://github.com/gary-Shen/hexo-theme-bear。
 * 祝贺EDG夺冠2021.11.8
 * @package Bear Theme
 * @author Xingr
 * @version 1.0.0
 * @link https://www.krsay.com/typecho/bear.html
 */
if (!defined('__TYPECHO_ROOT_DIR__')) exit;
$this->need('header.php');
$sticky = $this->options->sticky; 
if($sticky && $this->is('index') || $this->is('front')){
    $sticky_cids = explode('|',$sticky); //分割文本
    $sticky_html = "<span style='color:red'>[置顶] </span>"; //置顶标题的 html

    $db = Typecho_Db::get();
    $pageSize = $this->options->pageSize;
    $select1 = $this->select()->where('type = ?', 'post');
    $select2 = $this->select()->where('type = ? && status = ? && created < ?', 'post','publish',time());
    //清空原有文章的列队
    $this->row = [];
    $this->stack = [];
    $this->length = 0;

    $order = '';
    foreach($sticky_cids as $i => $cid) {
        if($i == 0) $select1->where('cid = ?', $cid);
        else $select1->orWhere('cid = ?', $cid);
        $order .= " when $cid then $i";
        $select2->where('table.contents.cid != ?', $cid); //避免重复
    }
    if ($order) $select1->order('', "(case cid$order end)"); //置顶文章的顺序 按 $sticky 中 文章ID顺序
    if (($this->_currentPage || $this->currentPage) == 1) foreach($db->fetchAll($select1) as $sticky_post){ //首页第一页才显示
        $sticky_post['sticky'] = $sticky_html;
        $this->push($sticky_post); //压入列队
    }
    if($this->user->hasLogin()){
    $uid = $this->user->uid; //登录时，显示用户各自的私密文章
    if($uid) $select2->orWhere('authorId = ? && status = ?', $uid, 'private');
    }
    $sticky_posts = $db->fetchAll($select2->order('table.contents.created', Typecho_Db::SORT_DESC)->page($this->_currentPage, $this->parameter->pageSize));
    foreach($sticky_posts as $sticky_post) $this->push($sticky_post); //压入列队
    $this->setTotal($this->getTotal()-count($sticky_cids)); //置顶文章不计算在所有文章内
}
?>
<div class="container home">
    <?php while($this->next()): ?>
            <section class="article">
                <a class="title" href="<?php $this->permalink() ?>"><?php $this->title();$this->sticky(38,'...') ?></a>
                <div class="content excerpt">
                <?php $this->excerpt();?>
                </div>
                <div class="tags">
                <?php printTag($this); ?>
                   
                </div>
                <div class="article-footer">
                    <a class="excerpt-link" href="<?php $this->permalink() ?>">全文...</a>
                    <div class="article-footer__right">
                        <span class="date">写于<?php $this->date('Y年m月d日'); ?></span>
                    </div>
                </div>
            </section>
         <?php endwhile; ?>

         <section class="list-pager">
	<?php $this->pageLink('上一页'); ?>
	<?php $this->pageLink('下一页','next'); ?>
	<div class="clear">
	</div>
	</section>
        </div>
<?php $this->need('footer.php'); ?>