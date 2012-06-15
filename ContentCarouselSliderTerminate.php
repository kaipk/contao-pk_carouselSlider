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
 
 
 class ContentCarouselSliderTerminate extends ContentElement
{

	/**
	 * Template
	 * @var string
	 */
	protected $strTemplate = 'ce_CarouselSlider_terminate';
	
	
	public function generate()
	{
		if (TL_MODE == 'BE')
		{
			$objTemplate = new BackendTemplate('be_wildcard');
			$objTemplate->wildcard = '### CAROUSELSLIDER - TERMINATE ###';
			return $objTemplate->parse();
		}
		
		return parent::generate();
	}
	

	protected function compile()
	{	
		$this->Template->closeLink = $GLOBALS['CAROUSELSLIDER'][$this->pid]['sectionLink'] ? true : false;
		$this->Template->articleId = $GLOBALS['CAROUSELSLIDER'][$this->pid]['id'];
		$this->Template->width = $GLOBALS['CAROUSELSLIDER'][$this->pid]['width'];
		$this->Template->elements = $GLOBALS['CAROUSELSLIDER'][$this->pid]['carouselSlider_elements'];
		$this->Template->buttons = $GLOBALS['CAROUSELSLIDER'][$this->pid]['buttons'];
		$this->Template->position = $GLOBALS['CAROUSELSLIDER'][$this->pid]['position'];
		$this->Template->interval = $GLOBALS['CAROUSELSLIDER'][$this->pid]['interval'];
		$this->Template->duration = $GLOBALS['CAROUSELSLIDER'][$this->pid]['duration'];
		$this->Template->sliderId = $this->pid;
		$this->Template->autoplay = $GLOBALS['CAROUSELSLIDER'][$this->pid]['autoplay'];
		$this->Template->orientation = $GLOBALS['CAROUSELSLIDER'][$this->pid]['orientation'];	
		$this->Template->total = $GLOBALS['CAROUSELSLIDER'][$this->pid]['total'];
	}
}

