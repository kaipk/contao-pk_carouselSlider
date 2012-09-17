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
 * Palettes
 */
$GLOBALS['TL_DCA']['tl_content']['palettes']['carouselSlider_setup']		= '{type_legend},type;{carouselSlider_legend},carouselSlider_size,carouselSlider_orientation,carouselSlider_elements,carouselSlider_elementsmargin,carouselSlider_interval,carouselSlider_duration,carouselSlider_autoplay,carouselSlider_buttons,carouselSlider_position,carouselSlider_mooSwipe;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID,space';

$GLOBALS['TL_DCA']['tl_content']['palettes']['carouselSlider_section']		= '{type_legend},type;{image_legend},carouselSlider_background;{link_legend:hide},carouselSlider_url,carouselSlider_target;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID,space';


/**
 * Fields
 */
//SETUP

$GLOBALS['TL_DCA']['tl_content']['fields']['carouselSlider_size'] = array
(
	'label'				=> &$GLOBALS['TL_LANG']['tl_content']['carouselSlider_size'],
	'exclude'			=> true,
	'inputType'			=> 'text',
	'eval'				=> array('mandatory'=>true, 'multiple'=>true, 'size'=>2, 'maxlength'=>6, 'rgpx'=>'digit', 'tl_class'=>'w50'),
);

$GLOBALS['TL_DCA']['tl_content']['fields']['carouselSlider_orientation'] = array
(
	'label'				=> &$GLOBALS['TL_LANG']['tl_content']['carouselSlider_orientation'],
	'exclude'			=> true,
	'inputType'			=> 'select',
	'options'			=> array('horizontal', 'vertical'),
	'reference'			=> &$GLOBALS['TL_LANG']['tl_content']['carouselSlider_orientation'],
	'eval'				=> array('mandatory'=>true, 'tl_class'=>'w50'),
);

$GLOBALS['TL_DCA']['tl_content']['fields']['carouselSlider_elements'] = array
(
	'label'				=> &$GLOBALS['TL_LANG']['tl_content']['carouselSlider_elements'],
	'exclude'			=> true,
	'default'			=> '1',
	'inputType'			=> 'text',
	'eval'				=> array('mandatory'=>true, 'maxlength'=>2, 'rgpx'=>'digit', 'tl_class'=>'w50'),
);

$GLOBALS['TL_DCA']['tl_content']['fields']['carouselSlider_elementsmargin'] = array
(
	'label'				=> &$GLOBALS['TL_LANG']['tl_content']['carouselSlider_elementsmargin'],
	'exclude'			=> true,
	'default'			=> '0',
	'inputType'			=> 'text',
	'eval'				=> array('mandatory'=>true, 'maxlength'=>2, 'rgpx'=>'digit', 'tl_class'=>'w50'),
);




$GLOBALS['TL_DCA']['tl_content']['fields']['carouselSlider_interval'] = array
(
	'label'				=> &$GLOBALS['TL_LANG']['tl_content']['carouselSlider_interval'],
	'exclude'			=> true,
	'default'			=> '6',
	'inputType'			=> 'text',
	'eval'				=> array('mandatory'=>true, 'maxlength'=>2, 'rgpx'=>'digit', 'tl_class'=>'w50'),
);

$GLOBALS['TL_DCA']['tl_content']['fields']['carouselSlider_duration'] = array
(
	'label'				=> &$GLOBALS['TL_LANG']['tl_content']['carouselSlider_duration'],
	'exclude'			=> true,
	'default'			=> '1000',
	'inputType'			=> 'text',
	'eval'				=> array('mandatory'=>true, 'maxlength'=>6, 'rgpx'=>'digit', 'tl_class'=>'w50'),
);

$GLOBALS['TL_DCA']['tl_content']['fields']['carouselSlider_buttons'] = array
(
	'label'				=> &$GLOBALS['TL_LANG']['tl_content']['carouselSlider_buttons'],
	'exclude'			=> true,
	'inputType'			=> 'checkbox',
	'eval'				=> array('tl_class'=>'w50'),
);

$GLOBALS['TL_DCA']['tl_content']['fields']['carouselSlider_position'] = array
(
	'label'				=> &$GLOBALS['TL_LANG']['tl_content']['carouselSlider_position'],
	'exclude'			=> true,
	'inputType'			=> 'checkbox',
	'eval'				=> array('tl_class'=>'w50'),
);

$GLOBALS['TL_DCA']['tl_content']['fields']['carouselSlider_autoplay'] = array
(
	'label'				=> &$GLOBALS['TL_LANG']['tl_content']['carouselSlider_autoplay'],
	'exclude'			=> true,
	'inputType'			=> 'checkbox',
	'eval'				=> array('tl_class'=>'w50'),
);

$GLOBALS['TL_DCA']['tl_content']['fields']['carouselSlider_background'] = array
(
	'label'				=> &$GLOBALS['TL_LANG']['tl_content']['carouselSlider_background'],
	'exclude'			=> true,
	'inputType'			=> 'fileTree',
	'eval'				=> array('fieldType'=>'radio', 'files'=>true, 'filesOnly'=>true, 'extensions'=>'png,gif,jpg,jpeg', 'tl_class'=>'clr'),
);

$GLOBALS['TL_DCA']['tl_content']['fields']['carouselSlider_url'] = array
(
	'label'				=> &$GLOBALS['TL_LANG']['MSC']['url'],
	'exclude'			=> true,
	'search'			=> true,
	'inputType'			=> 'text',
	'eval'				=> array('rgxp'=>'url', 'decodeEntities'=>true, 'maxlength'=>255, 'tl_class'=>'w50 wizard'),
	'wizard' => array
	(
		array('tl_content', 'pagePicker')
	),
);

$GLOBALS['TL_DCA']['tl_content']['fields']['carouselSlider_target'] = array
(
	'label'				=> &$GLOBALS['TL_LANG']['MSC']['target'],
	'exclude'			=> true,
	'inputType'			=> 'checkbox',
	'eval'				=> array('tl_class'=>'w50 m12')
);

$GLOBALS['TL_DCA']['tl_content']['fields']['carouselSlider_mooSwipe'] = array
(
  'label'					=> &$GLOBALS['TL_LANG']['tl_content']['carouselSlider_mooSwipe'],
  'inputType'				=> 'checkbox',
  'eval'              		=> array('tl_class'=>'w50')
);



