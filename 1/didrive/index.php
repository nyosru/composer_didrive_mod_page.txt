<?php

$vv['krohi'] = [];
$vv['krohi'][1] = array(
    'text' => $vv['now_level']['name'],
    'uri' => $vv['now_level']['cfg.level']
);

if (isset($_POST['editor'])) {
    $vv['warn'] .= '<div class="warn" >Данные записаны (<a href="/' . $vv['level'] . '/" target="_blank" >страница на сайте</a>)</div>';
    file_put_contents(DR . dir_site_module_nowlev_tpl . 'body.page.htm', $_POST['editor']);
}

$vv['in_body_end'][] = '<script type="text/javascript" charset="utf-8" src="/js/ckeditor.4.5.11/ckeditor.js"></script>';
$vv['in_body_end'][] = '<script  type="text/javascript" charset="utf-8"  >'
        . ' CKEDITOR.replace("editor1", { '
        . ' height: 400, '
        . ' toolbar: [ '
        . ' { name: "document", groups: ["mode", "document", "doctools"], items: [\'Source\', \'Maximize\', \'ShowBlocks\', \'Templates\'] }, '
        . ' { name: "clipboard", groups: ["clipboard", "undo"], items: [\'Cut\', \'Copy\', \'Paste\', \'PasteText\', \'PasteFromWord\', \'-\', \'Undo\', \'Redo\'] }, '
        . ' { name: "clipboard", groups: [ "clipboard", "undo" ], items: [ "Cut", "Copy", "PasteText", "-", "Undo", "Redo" ] }, '
        . ' { name: \'editing\', groups: [\'find\', \'selection\', \'spellchecker\'], items: [\'Find\', \'Replace\', \'-\', \'SelectAll\', \'-\', \'Scayt\'] }, '
        . ' { name: "colors", items: [ "TextColor", "BGColor" ] }, '
        . ' { name: "basicstyles", groups: [ "basicstyles", "cleanup" ], items: [ "Bold", "Italic", "Underline", "Strike", "Subscript", "Superscript", "-", "RemoveFormat" ] }, '
        . ' { name: "basicstyles", groups: [ "basicstyles", "cleanup" ], items: [ "Bold", "Italic", "Underline", "-", "RemoveFormat" ] }, '
        . ' { name: "paragraph", groups: [ "list", "indent", "blocks", "align", "bidi" ], items: [ "NumberedList", "BulletedList", "-", "Outdent", "Indent", "-", "Blockquote", "CreateDiv", "-", "JustifyLeft", "JustifyCenter", "JustifyRight", "JustifyBlock" ] }, '
        . ' { name: "paragraph", groups: [ "list", "indent", "align" ], items: [ "NumberedList", "BulletedList" ] }, '
        . ' { name: "links", items: [ "Link", "Unlink" ] }, '
        . ' { name: "insert", items: [ "Image", "Flash", "Table", "HorizontalRule", "Smiley", "SpecialChar", "PageBreak", "Iframe" ] }, '
        . ' { name: "styles", items: [ "Styles", "Format", "Font", "FontSize" ] } '
        . ' ] } ); </script>';

// mini
/*
  $vv['in_body_end'][] = '<script  type="text/javascript" charset="utf-8"  >'
  . ' CKEDITOR.replace(\'' . addslashes($k) . '\', { toolbar: [ '
  . ' { name: "clipboard", groups: [ "clipboard", "undo" ], items: [ "Cut", "Copy", "PasteText", "-", "Undo", "Redo" ] }, '
  . ' { name: "colors", items: [ "TextColor", "BGColor" ] }, '
  . ' { name: "basicstyles", groups: [ "basicstyles", "cleanup" ], items: [ "Bold", "Italic", "Underline", "-", "RemoveFormat" ] }, '
  . ' { name: "paragraph", groups: [ "list", "indent", "align" ], items: [ "NumberedList", "BulletedList" ] } '
  . ' ] } ); </script>';
 */

$vv['html'] = file_exists(DR . dir_site_module_nowlev_tpl . 'body.page.htm') ? file_get_contents(DR . dir_site_module_nowlev_tpl . 'body.page.htm') : '';

$vv['tpl_body'] = \f\like_tpl('body', dir_mods_mod_vers_didrive_tpl, dir_site_module_nowlev_tpldidr, DR);
