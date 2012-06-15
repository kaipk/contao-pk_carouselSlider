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
 
 
 class ContentCarouselSliderSection extends ContentElement
{

	/**
	 * Template
	 * @var string
	 */
	protected $strTemplate = 'ce_CarouselSlider_section';
	
	
	public function generate()
	{
		++$GLOBALS['CAROUSELSLIDER'][$this->pid]['sections'];
		
		if (TL_MODE == 'BE')
		{
			$objTemplate = new BackendTemplate('be_wildcard');
			$objTemplate->wildcard = '### CAROUSELSLIDER - SECTION ' . $GLOBALS['CAROUSELSLIDER'][$this->pid]['sections'] . ' ###';
			return $objTemplate->parse();
		}
		
		$strBuffer = parent::generate();
		
		// Start the carouselslider container
		if ($GLOBALS['CAROUSELSLIDER'][$this->pid]['sections'] == 1)
		{
			$strBuffer = '<div class="ce_carouselslider_container" style="width:'.$GLOBALS['CAROUSELSLIDER'][$this->pid]['width'].'px;height:'.$GLOBALS['CAROUSELSLIDER'][$this->pid]['height'].'px">' . $strBuffer;
		}
		
		return $strBuffer;
	}
	
	
	protected function compile()
	{
		$this->Template->first = false;
		$this->Template->last = false;
		$this->Template->closeLink = false;
		$this->Template->openLink = false;
		$this->Template->target = '';
		$this->Template->href = $this->carouselSlider_url;
		
		
		if ($GLOBALS['CAROUSELSLIDER'][$this->pid]['carouselSlider_elements']  == 1)
				$this->Template->width = $GLOBALS['CAROUSELSLIDER'][$this->pid]['width'];
		else
				$this->Template->width = ($GLOBALS['CAROUSELSLIDER'][$this->pid]['width']/($GLOBALS['CAROUSELSLIDER'][$this->pid]['carouselSlider_elements'])-$GLOBALS['CAROUSELSLIDER'][$this->pid]['carouselSlider_elementsmargin']);
			
		$this->Template->height = $GLOBALS['CAROUSELSLIDER'][$this->pid]['height'];
		
		if ($GLOBALS['CAROUSELSLIDER'][$this->pid]['sections'] == 1)
		{
			$this->Template->first = true;
		}
		else
		{
			$this->Template->closeLink = $GLOBALS['CAROUSELSLIDER'][$this->pid]['sectionLink'] ? true : false;
		}
		
		if ($GLOBALS['CAROUSELSLIDER'][$this->pid]['sections'] == $GLOBALS['CAROUSELSLIDER'][$this->pid]['total'])
		{
			$this->Template->last = true;
		}
		
		if (is_file(TL_ROOT . '/' . $this->carouselSlider_background))
		{
			$this->Template->background = ('background-image:url(' . $this->carouselSlider_background . ');');
		}
		
		// Override the link target
		if ($this->carouselSlider_target)
		{
			global $objPage;
			$this->Template->target = ($objPage->outputFormat == 'html5') ? ' target="_blank"' : ' onclick="window.open(this.href); return false;"';
		}
		
		$GLOBALS['CAROUSELSLIDER'][$this->pid]['sectionLink'] = $this->carouselSlider_url == '' ? false : true;
		$this->Template->openLink = $GLOBALS['CAROUSELSLIDER'][$this->pid]['sectionLink'];
	}
}