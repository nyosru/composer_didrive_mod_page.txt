<?php

/**
 * создаём файлы папки если чего то нет
 */

$dir_tpl0 = DR . dir_site_module_local . $vv['level'] . DS;
$dir_tpl = DR . dir_site_module_local . $vv['level'] . DS . 'tpl' . DS;

if (!is_dir(DR . dir_site_module_local)) {

    mkdir(DR . dir_site_module_local, 0755);

    if (!is_dir(DR . dir_site_module_local))
        throw new \Exception('Что то пошло не так, нет папки для файлов страницы');
}

if (!is_dir($dir_tpl0))
    mkdir($dir_tpl0, 0755);

if (!is_dir($dir_tpl)) {

    mkdir($dir_tpl, 0755);

        if (!is_dir($dir_tpl))
        throw new \Exception('Что то пошло не так, нет папки для файлов страницы');
}

$page = 'body.base.htm';

if (!file_exists($dir_tpl . $page)) {
    $vv['warn'] .= '<br>создан новый файл ' . $page;
    file_put_contents($dir_tpl . $page, ' {% include constant("dir_site_module_nowlev_tpl_local")~"body.page.htm" %}  ');
}

$page = 'body.page.htm';

if (!file_exists($dir_tpl . $page)) {
    $vv['warn'] .= '<br>создан новый файл ' . $page;
    file_put_contents($dir_tpl . $page, ' <p>новый файл + отредактируйте файл в панели управления</p> ');
}


//echo '<br/>';
//echo '<br/>';
//echo '<br/>';
//
//if (!is_dir(DR . dir_site_module_nowlev_tpl)) {
//    mkdir(DR . dir_site_module_nowlev_tpl, 0755);
//    $vv['warn'] .= '<br>создана папка для шаблонных файлов';
//}
//
//$page = 'body.base.htm';
//
//if (!file_exists(DR . dir_site_module_nowlev_tpl . $page)) {
//    $vv['warn'] .= '<br>создан новый файл ' . $page;
//    file_put_contents(DR . dir_site_module_nowlev_tpl . $page, ' {% include dir_site_module_nowlev_tpl~\'body.page.htm\' %} ');
//}
//
//$page = 'body.page.htm';
//
//if (!file_exists(DR . dir_site_module_nowlev_tpl . $page)) {
//    $vv['warn'] .= '<br>создан новый файл ' . $page;
//    file_put_contents(DR . dir_site_module_nowlev_tpl . $page, ' <p>новый файл + отредактируйте файл в панели управления</p> ');
//}

\f\pa(dir_site_module_nowlev_tpl_local . 'body.page.htm');

$vv['tpl_body_in'] = dir_site_module_nowlev_tpl_local . 'body.page.htm';

$vv['tpl_body'] = dir_site_module_nowlev_tpl_local . 'body.base.htm';

//\f\pa(get_defined_vars());