</div><?php if ($this->closeLink): ?></a><?php else: ?></div><?php endif; ?>
</div></div>
<?php if($this->buttons OR $this->position): ?>
<div id="noobControl" style="width:<?php echo $this->width;?>px;">
<?php if($this->buttons): ?>
<div class="handles_button">
<a href="#page-p" id="prev">&laquo;</a></span>
<a href="#page-p" id="next">&raquo;</a></span>
</div>
<?php endif; ?>
<?php if($this->position) : ?>
<div class="handles_more">
<?php for($x = 1; $x <= $this->total; $x++): ?>
<a href="#<?php echo $x-1; ?>"><?php echo $x; ?></a>
<?php endfor; ?>
</div>
<?php endif; ?>
  </div>
<?php endif; ?>
<script type="text/javascript">
<!--//--><![CDATA[//><!--

window.addEvent('domready', function () {

	var duration = <?php echo $this->duration; ?>,
		<?php if($this->position): ?>		
		divLinks = document.getElement('#<?php echo $this->articleId; ?> div.handles_more');
		links = divLinks.getElements('a'),
		<?php endif; ?>
		<?php if($this->buttons): ?>
		divButtons = document.getElement('#<?php echo $this->articleId; ?> div.handles_button');
		buttons = divButtons.getElements('a'),
		<?php endif; ?>
		carousel = new Carousel.Extra({
		activeClass: 'selected',
		container: document.getElement('#<?php echo $this->articleId; ?> .ce_carouselslider_container'),
		scroll: <?php echo $this->elements; ?>,
		circular: true,
		current: 0,
		<?php if($this->buttons): ?>
		previous: buttons.shift(),
		next: buttons.pop(),
		<?php endif; ?>
		<?php if($this->position): ?>
		tabs: links,
		<?php endif; ?>
		autostart: <?php if($this->autoplay): ?> true<?php else: ?> false<?php endif; ?>,
		interval: <?php echo $this->interval; ?>,
		mode: '<?php echo $this->orientation; ?>',
		fx: {
			link: 'cancel',
			transition: 'sine:out',
			duration: duration
		},
	});
	
	<?php if($this->mooSwipe): ?>
	new MooSwipe(document.getElement('#<?php echo $this->articleId; ?> .ce_carouselslider_container'), {
		onSwipeLeft: function() {
			carousel.next();
			
		},
		onSwipeRight: function() {
			carousel.previous();
		}
	});
	<?php endif; ?>
	
});
//--><!]]>
</script>

