<?php
/**
 * @package     Breezy
 * @subpackage  Functions
 *
 * @copyright   Copyright (C) 2005 - 2020 Joomlashack. Meritage Assets.  All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

// Restrict Access to within Joomla
defined('_JEXEC') or die('Restricted access');


$background = $this->params->get('background', 'home');
$style      = $this->params->get('style', 'green');
$app        = JFactory::getApplication();

if ($style == 'custom') {
    $style = 'green';
}

if($background == 'all') {

    // The home background will be used in all pages
    JFactory::getDocument()->addStyleDeclaration(
        'body, body.home {
            background-image: url(' . Juri::base() . 'templates/' . $app->getTemplate() . '/images/' . $style . '/bg-home.png);
        }'
    );

} elseif($background == '0') {

    // The default background will be used in all pages
    JFactory::getDocument()->addStyleDeclaration(
        'body, body.home {
            background-image: url(' . Juri::base() . 'templates/' . $app->getTemplate() . '/images/' . $style . '/bg-default.png);
        }'
    );

} else {

    // Nothing to do here

}