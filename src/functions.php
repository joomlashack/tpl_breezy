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


$background = $this->params->get('background', 'home');
$style      = $this->params->get('style', 'green');

if($background == 'all') {

    if ($style == 'custom') {
        $style = 'green';
    }

    // The home background will be used in all pages
    JFactory::getDocument()->addStyleDeclaration(
        'body {
            background-image: url(' . Juri::base() . 'templates/js_breezy/images/' . $style . '/bg-home.png);
        }'
    );

}