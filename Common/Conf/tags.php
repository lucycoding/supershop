<?php
return array(
    // 添加下面一行定义即可     国际化,定时任务,'Behavior\CronRunBehavior'
    'app_begin' => array('Common\Behavior\CheckLangBehavior'),
);
