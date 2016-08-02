<?php
/**
 * @package     Breezy
 * @subpackage  Overrider
 *
 * @copyright   Copyright (C) 2005 - 2016 Joomlashack. Meritage Assets.  All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */
// No direct access.
defined('_JEXEC') or die;

$app = JFactory::getApplication();

require_once JPATH_THEMES . '/' . $app->getTemplate() . '/wright/html/overrider.php';


$this->item->wrightElementsStructure = Array(
    "image",
    "div.article-content",
    "title",
    "icons",
    "article-info",
    "content",
    "/div"
);

include Overrider::getOverride('com_content.featured', 'default_item');