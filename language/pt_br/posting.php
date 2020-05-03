<?php

/**
 * Hide extension for phpBB.
 * Brazilian Portuguese translation by eunaumtenhoid [2020][ver 2.0.0] (https://github.com/phpBBTraducoes)
 * @author Alfredo Ramos <alfredo.ramos@yandex.com>
 * @copyright 2017 Alfredo Ramos
 * @license GPL-2.0-only
 */

/**
 * @ignore
 */
if (!defined('IN_PHPBB'))
{
	exit;
}

/**
 * @ignore
 */
if (empty($lang) || !is_array($lang))
{
	$lang = [];
}

$lang = array_merge($lang, [
	'HIDE' => 'Ocultar',
	'HIDE_HELPLINE' => 'Uso: [hide]texto[/hide] ou [hide inline=1]texto[/hide]',
	'HIDDEN_CONTENT' => 'Conteúdo oculto',
	'HIDDEN_CONTENT_EXPLAIN' => 'Conteúdo exclusivo para usuários logados.'
]);
