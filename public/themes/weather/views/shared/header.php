<?php
defined('FIR') OR exit();
/**
 * The template for displaying the header section
 */
?>
<div id="header" class="header">
    <div class="header-content">
        <div class="header-col header-col-logo"><a href="<?=$data['url']?>/"><div class="logo"><img src="<?=$data['url'].'/'.PUBLIC_PATH.'/'.UPLOADS_PATH?>/brand/<?=$data['settings']['logo']?>"></div></a></div>
        <div class="header-col-content"><?=(isset($data['search_bar_view']) ? $data['search_bar_view'] : '')?></div>
    </div>
</div>