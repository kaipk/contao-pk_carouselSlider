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



class ContentCarouselSliderSetup extends ContentElement
{

	/**
	 * Template
	 * @var string
	 */
	protected $strTemplate = 'ce_CarouselSlider_setup';
	
	
	public function generate()
	{
		if (TL_MODE == 'BE')
		{
			$objTemplate = new BackendTemplate('be_wildcard');
			$objTemplate->wildcard = '### CAROUSELSLIDER - SETUP ###';
			return $objTemplate->parse();
		}
		
		$objArticle = $this->Database->execute("SELECT tl_article.*, COUNT(tl_content.id) AS sections FROM tl_content LEFT JOIN tl_article ON tl_content.pid=tl_article.id WHERE tl_content.type='carouselSlider_section' AND tl_content.pid={$this->pid} GROUP BY tl_content.pid");
		
		$cssID = deserialize($objArticle->cssID, true);
		$GLOBALS['CAROUSELSLIDER'][$this->pid]['id'] = $cssID[0] != '' ? $cssID[0] : standardize($objArticle->alias);
		$GLOBALS['CAROUSELSLIDER'][$this->pid]['sections'] = 0;
		$GLOBALS['CAROUSELSLIDER'][$this->pid]['total'] = (int)$objArticle->sections;
		
		return parent::generate();
	}
	
	
	protected function compile()
	{
		$GLOBALS['TL_JAVASCRIPT'][] = 'system/modules/pk_carouselSlider/html/PeriodicalExecuter.js';
		$GLOBALS['TL_JAVASCRIPT'][] = 'system/modules/pk_carouselSlider/html/Carousel.js';
		$GLOBALS['TL_JAVASCRIPT'][] = 'system/modules/pk_carouselSlider/html/Carousel.Extra.js';
		$GLOBALS['TL_JAVASCRIPT'][] = 'system/modules/pk_carouselSlider/html/class.MooSwipe.packed.js';
		
		if($this->carouselSlider_mooSwipe)
		{
			$GLOBALS['TL_CSS'][] = 'system/modules/pk_carouselSlider/html/CarouselSlider.css';
		}
		
		$GLOBALS['CAROUSELSLIDER'][$this->pid]['buttons'] = $this->carouselSlider_buttons ? true : false;
		$GLOBALS['CAROUSELSLIDER'][$this->pid]['position'] = $this->carouselSlider_position ? true : false;
		$GLOBALS['CAROUSELSLIDER'][$this->pid]['orientation'] = $this->carouselSlider_orientation;
		$GLOBALS['CAROUSELSLIDER'][$this->pid]['interval'] = $this->carouselSlider_interval;
		$GLOBALS['CAROUSELSLIDER'][$this->pid]['duration'] = $this->carouselSlider_duration;
		$GLOBALS['CAROUSELSLIDER'][$this->pid]['autoplay'] = $this->carouselSlider_autoplay ? true : false;
		$GLOBALS['CAROUSELSLIDER'][$this->pid]['carouselSlider_elements'] = $this->carouselSlider_elements;
		$GLOBALS['CAROUSELSLIDER'][$this->pid]['carouselSlider_elementsmargin'] = $this->carouselSlider_elementsmargin;
		
		$arrSize = deserialize($this->carouselSlider_size, true);
		$GLOBALS['CAROUSELSLIDER'][$this->pid]['width'] = (int)$arrSize[0];
		$GLOBALS['CAROUSELSLIDER'][$this->pid]['height'] = (int)$arrSize[1];
		$GLOBALS['CAROUSELSLIDER'][$this->pid]['mooSwipe'] = $this->carouselSlider_mooSwipe ? true : false;
	}
}

