<?php
/**
 * Open Source Social Network
 * @link      https://www.opensource-socialnetwork.org/
 * @package   Topbar Focusizer
 * @author    AT3META <at3meta@3ncircle.com>
 * @copyright (C) 3NCIRCLE Inc.
 * @license   https://www.gnu.org/licenses/gpl-3.0.en.html
 */

define('__TOPBAR_FOCUSIZER__', ossn_route()->com . 'TopbarFocusizer/');
function com_topbar_focusizer_init() {
	ossn_extend_view('css/ossn.default','css/topbarfocusizer');
	ossn_extend_view('js/ossn.site', 'js/topbarfocusizer');
}
ossn_register_callback('ossn', 'init', 'com_topbar_focusizer_init');

