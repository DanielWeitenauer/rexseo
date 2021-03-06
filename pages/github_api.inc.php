<?php
/**
 * RexSEO - URLRewriter Addon
 *
 * @link https://github.com/gn2netwerk/rexseo
 *
 * @author dh[at]gn2-netwerk[dot]de Dave Holloway
 * @author code[at]rexdev[dot]de jdlx
 *
 * Based on url_rewrite Addon by
 * @author markus.staab[at]redaxo[dot]de Markus Staab
 *
 * @package redaxo 4.3.x/4.4.x/4.5.x
 * @version 1.6.4
 */

global $REX;

$myself = 'rexseo';
$myroot = $REX['INCLUDE_PATH'].'/addons/'.$myself;


try {
  $gc = new rexseo_github_functions('gn2netwerk','rexseo');
  echo $gc->getList(rex_request('chapter', 'string'));
} catch (Exception $e) {
  echo rex_warning($e->getMessage());
}
