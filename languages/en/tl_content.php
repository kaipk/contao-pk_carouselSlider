<?php if (!defined('TL_ROOT')) die('You cannot access this file directly!');

/**
 * Contao Open Source CMS
 * Copyright (C) 2005-2011 Leo Feyer
 *
 * Formerly known as TYPOlight Open Source CMS.
 *
 * This program is free software: you can redistribute it and/or
 * modify it under the terms of the GNU Lesser General Public
 * License as published by the Free Software Foundation, either
 * version 3 of the License, or (at your option) any later version.
 * 
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU
 * Lesser General Public License for more details.
 * 
 * You should have received a copy of the GNU Lesser General Public
 * License along with this program. If not, please visit the Free
 * Software Foundation website at <http://www.gnu.org/licenses/>.
 *
 * PHP version 5
 * @copyright  Philipp Kaiblinger 2011
 * @author     Philipp Kaiblinger <philipp.kaiblinger@kaipo.at>
 * @license    http://opensource.org/licenses/lgpl-3.0.html
 * @version    $Id:
 */
 
 /**
 * Fields
 */

$GLOBALS['TL_LANG']['tl_content']['carouselSlider_size']			= array('Slider Size', 'Width and Height of the slider');
$GLOBALS['TL_LANG']['tl_content']['carouselSlider_orientation']		= array('Orientation', 'Select how to scroll the slider. Default: horicontal');
$GLOBALS['TL_LANG']['tl_content']['carouselSlider_elements']		= array('Number of Elements', 'Please insert the number of elements to be displayed per slide.');
$GLOBALS['TL_LANG']['tl_content']['carouselSlider_elementsmargin']	= array('Margin beetween Elements', 'in px.');
$GLOBALS['TL_LANG']['tl_content']['carouselSlider_interval']		= array('Interval', 'interval between 2 executions in seconds');
$GLOBALS['TL_LANG']['tl_content']['carouselSlider_duration']		= array('Einblendungsdauer', ' Enter the number of milliseconds a transition will take. 1000 is a good value.');
$GLOBALS['TL_LANG']['tl_content']['carouselSlider_autoplay']		= array('Autoplay', 'Check here to enable autoplay');
$GLOBALS['TL_LANG']['tl_content']['carouselSlider_buttons']			= array('Show buttons', 'Check here to enable previous/next buttons.');
$GLOBALS['TL_LANG']['tl_content']['carouselSlider_position']		= array('Show position', 'Check here to enable element numbers or positions.');
$GLOBALS['TL_LANG']['tl_content']['carouselSlider_background']		= array('Background image', 'Each section can have a background image. Make sure it fits the slider!');
$GLOBALS['TL_LANG']['tl_content']['carouselSlider_mooSwipe']		= array('Smartphone-Support', 'Gives easy access to left and right swipe events for iOS and other touch devices.');


/**
 * Reference
 */
$GLOBALS['TL_LANG']['tl_content']['carouselSlider_orientation']['horizontal']	= 'horicontal';
$GLOBALS['TL_LANG']['tl_content']['carouselSlider_orientation']['vertical']		= 'vertical';

/**
 * Legends
 */
$GLOBALS['TL_LANG']['tl_content']['carouselSlider_legend']		= 'Carousel Slider Configuration';