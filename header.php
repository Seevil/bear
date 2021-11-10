<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="renderer" content="webkit">
        <?php $this->header('generator=&pingback=&xmlrpc=&commentReply='); ?>
<title><?php $this->archiveTitle(array(
            'category'  =>  _t('分类 %s 下的文章'),
            'search'    =>  _t('包含关键字 %s 的文章'),
            'tag'       =>  _t('标签 %s 下的文章'),
            'author'    =>  _t('%s 发布的文章')
        ), '', ' - '); ?><?php $this->options->title(); ?></title>
        <link rel="shortcut icon" href="<?php $this->options->themeUrl('images/avatar.jpg'); ?>" type="image/x-icon">
        <link href="<?php $this->options->themeUrl('css/style.css'); ?>" rel="stylesheet">
    </head>
    <body>
        <header class="container" id="header">
            <div class="header">
                <div class="header-left">
                    <div class="avatar">
					<?php if($this->options->logoUrl): ?><img src="<?php $this->options->logoUrl();?>" alt="<?php $this->options->title() ?>" /><?php else : ?><img src="<?php $this->options->themeUrl('images/avatar.jpg'); ?>"/><?php endif; ?>
                  
                    </div>
                    <div class="author">
                        <div class="author-name">
                            <a href="<?php $this->options->siteUrl();?>"><?php $this->options->title(); ?></a>
                        </div>
                        <div class="about-me"><?php $this->options->description() ?></div>
                    </div>
                </div>
                <div class="header-right">
                    <ul class="navigation">
                      
                        <?php $this->widget('Widget_Contents_Page_List')->parse('<li><a href="{permalink}" >{title}</a></li>'); ?>
                      
                    </ul>
                </div>
                <div class="about-me-mask">
                    <div class="about-me-wrap">
                        <div class="about-me__header">
                            <div class="avatar">
							<?php if($this->options->logoUrl): ?><img src="<?php $this->options->logoUrl();?>" alt="<?php $this->options->title() ?>" /><?php else : ?><img src="<?php $this->options->themeUrl('images/avatar.jpg'); ?>"/><?php endif; ?>
                            </div>
                        </div>
                        <ul class="socials">
						<?php if($this->options->github): ?>
                            <li class="social-item">
                                <span class="label">
                                    <img src="<?php $this->options->themeUrl('images/socials/github.svg'); ?>" alt="<?php $this->options->github();?>">
                                </span>
                                <a href="<?php $this->options->github();?>" target="_blank" title="<?php $this->options->github();?>"><?php $this->options->github();?></a>
                            </li>
							<?php endif; ?>
							<?php if($this->options->urldiy): ?> 
                            <li class="social-item">
                                <span class="label">
                                    <img src="<?php $this->options->themeUrl('images/socials/flickr.svg'); ?>">
                                </span>
                                <?php $this->options->urldiy();?>
                            </li>
							<?php endif; ?>
							<?php if($this->options->email): ?>
                            <li class="social-item">
                                <span class="label">
                                    <img src="<?php $this->options->themeUrl('images/socials/email.svg'); ?>" alt="<?php $this->options->email();?>">
                                </span>
                                <span><?php $this->options->email();?></span>
                            </li>
							<?php endif; ?>
							<?php if($this->options->wechat): ?>
                            <li class="social-item">
                                <span class="label">
                                    <img src="<?php $this->options->themeUrl('images/socials/wechat.svg'); ?>" alt="<?php $this->options->wechat();?>">
                                </span>
                                <span><?php $this->options->wechat();?></span>
                            </li>
							<?php endif; ?>
                        </ul>
                    </div>
                </div>
            </div>
        </header>