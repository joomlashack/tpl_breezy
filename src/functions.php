<?php
/**
 * @package     Breezy
 * @subpackage  Functions
 *
 * @copyright   Copyright (C) 2005 - 2016 Joomlashack. Meritage Assets.  All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

// Restrict Access to within Joomla
defined('_JEXEC') or die('Restricted access');


$background = $this->params->get('background', 2);

if($background == 1) {

    // The home background will be used in all pages
    JFactory::getDocument()->addStyleDeclaration(
        'body, body.home {
            background-image: url(' . Juri::base() . 'templates/js_breezy/images/' . $this->params->get('style', 'green') . '/bg-home.png);
        }'
    );

} elseif($background == 0) {

    // No image background in all pages, including home
    JFactory::getDocument()->addStyleDeclaration(
        'body, body.home {
            background-image: none;
        }'
    );
} else {

    // Nothing to do here
}