<?php
/**
 * Open Source Social Network
 *
 * @package   TopbarFocusizer
 * @author    AT3META <at3meta@3ncircle.com>
 * @copyright (C) 3NCIRCLE Inc.
 * @license   https://www.gnu.org/licenses/gpl-3.0.en.html
 * @link      https://3ncircle.com/
 */
?>
//<script>
var prevScrollpos = window.pageYOffset;
window.onscroll = function() {
  var currentScrollPos = window.pageYOffset;
  if (prevScrollpos > currentScrollPos) {
    $('.topbar').css('top','0px');
  } else {
    $('.topbar').css('top','-60px');
  }
  prevScrollpos = currentScrollPos;
}
