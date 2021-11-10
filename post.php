<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>

<div class="container post">
            <section class="article">
                <div class="title"><?php $this->title() ?></div>
                <div class="date">写于<?php $this->date('Y年m月d日'); ?></div>
                <div class="content">
                <?php $this->content(); ?>    
                </div>
                <div class="tags">
                <?php printTag($this); ?>
                </div>
            </section>
        </div>
        <div class="container">
            <ul class="nav">
              <?php $this->thePrev('<li>上一篇：%s </li>', '', array('title' => '', 'tagClass' => 'next')); ?>
				<?php $this->theNext(' <li>下一篇：%s </li>', '', array('title' => '', 'tagClass' => 'pre')); ?>
            </ul>
            <div class="comments">
            <?php $this->need('vcomments.php'); ?>
            </div>
        </div>

        <?php $this->need('footer.php'); ?>