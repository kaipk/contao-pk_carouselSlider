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

$GLOBALS['TL_LANG']['tl_content']['carouselSlider_size']			= array('Slider Größenangabe', 'Wählen Sie bitte die Breite und die Höhe des Sliders.');
$GLOBALS['TL_LANG']['tl_content']['carouselSlider_orientation']		= array('Orientierung', 'Wählen Sie bitte wie der Slider blättern soll. Standard: Horizontal ');
$GLOBALS['TL_LANG']['tl_content']['carouselSlider_elements']		= array('Anzahl Elemente', 'Bitte geben Sie die Anzahl der Elemente an, die pro Slide angezeigt werden sollen.');
$GLOBALS['TL_LANG']['tl_content']['carouselSlider_elementsmargin']	= array('Abstand zwischen Elemente', 'Angabe in px.');
$GLOBALS['TL_LANG']['tl_content']['carouselSlider_interval']		= array('Interval', 'interval between 2 executions in seconds');
$GLOBALS['TL_LANG']['tl_content']['carouselSlider_duration']		= array('Einblendungsdauer', ' Wählen Sie bitte eine Zahl in Millisekunden. 1000 ist ein guter Wert.');
$GLOBALS['TL_LANG']['tl_content']['carouselSlider_autoplay']		= array('Automatischen Abspielen', 'Wählen Sie diese Option um das automatische abspielen zu aktivieren. Standardmäßig eingeschaltet');
$GLOBALS['TL_LANG']['tl_content']['carouselSlider_buttons']			= array('Zeige Buttons', 'Wählen Sie diese Option um die Vor- und Zurückbuttons zu aktivieren.');
$GLOBALS['TL_LANG']['tl_content']['carouselSlider_position']		= array('Zeige Navigation', 'Wählen Sie diese Option um die Elementnummern und die aktuelle Position anzuzeigen.');
$GLOBALS['TL_LANG']['tl_content']['carouselSlider_background']		= array('Hintergrundbild', 'Jeder Abschnitt kann ein Hintegrundbild beinhalten. Beachten Sie, dass das Bild in den Slider passt. Größe und Höhe beachten!');
$GLOBALS['TL_LANG']['tl_content']['carouselSlider_mooSwipe']		= array('Smartphone-Support', 'Wischgesten aktivieren (MooSwipe)');


/**
 * Reference
 */
$GLOBALS['TL_LANG']['tl_content']['carouselSlider_orientation']['horizontal']	= 'Horizontal';
$GLOBALS['TL_LANG']['tl_content']['carouselSlider_orientation']['vertical']		= 'Vertikal';

/**
 * Legends
 */
$GLOBALS['TL_LANG']['tl_content']['carouselSlider_legend']		= 'Carousel Slider Konfiguration';