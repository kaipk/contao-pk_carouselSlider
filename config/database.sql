-- **********************************************************
-- *                                                        *
-- * IMPORTANT NOTE                                         *
-- *                                                        *
-- * Do not import this file manually but use the TYPOlight *
-- * install tool to create and maintain database tables!   *
-- *                                                        *
-- **********************************************************

-- 
-- Table `tl_content`
-- 

CREATE TABLE `tl_content` (
  `carouselSlider_size` varchar(128) NOT NULL default '',
  `carouselSlider_orientation` varchar(16) NOT NULL default '',
  `carouselSlider_elements` int(2) unsigned NOT NULL default '1',
  `carouselSlider_elementsmargin` int(2) unsigned NOT NULL default '0',
  `carouselSlider_interval` int(2) unsigned NOT NULL default '0',
  `carouselSlider_duration` int(6) unsigned NOT NULL default '0',
  `carouselSlider_buttons` char(1) NOT NULL default '',
  `carouselSlider_position` char(1) NOT NULL default '',
  `carouselSlider_autoplay` char(1) NOT NULL default '1',
  `carouselSlider_background` varchar(255) NOT NULL default '',
  `carouselSlider_url` varchar(255) NOT NULL default '',
  `carouselSlider_target` char(1) NOT NULL default '',
) ENGINE=MyISAM DEFAULT CHARSET=utf8;