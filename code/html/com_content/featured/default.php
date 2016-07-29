<?php
/**
 * @package     Wright
 * @subpackage  Overrider
 *
 * @copyright   Copyright (C) 2005 - 2015 Joomlashack. Meritage Assets.  All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

// No direct access.
defined('_JEXEC') or die;

$app = JFactory::getApplication();

$this->wrightLeadingItemElementsStructure = Array(
    "icons",
    "article-info",
    "image",
    "title",
    "legendtop",
    "content",
    "legendbottom"
);

$this->wrightIntroItemElementsStructure = Array(
    "icons",
    "article-info",
    "image",
    "title",
    "legendtop",
    "content",
    "legendbottom"
);

require_once(JPATH_THEMES.'/'.$app->getTemplate().'/'.'wright'.'/'.'html'.'/'.'overrider.php');
include(Overrider::getOverride('com_content.featured'));
?>
