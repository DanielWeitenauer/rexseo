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
 * @package redaxo 4.3.x
 * @version 1.4.284 dev
 */

global $REX;

$myself = 'rexseo';
$myroot = $REX['INCLUDE_PATH'].'/addons/'.$myself;


try {
  $gc = new github_connect('gn2netwerk','rexseo');
  echo $gc->getList(rex_request('chapter', 'string'));
} catch (Exception $e) {
  echo rex_warning($e->getMessage());
}
