<?php
defined( '_JEXEC' ) or die( 'Access to this location is RESTRICTED.' );
echo '<?xml version="1.0" encoding="utf-8"?'.'>'; 
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" >
<head>
<jdoc:include type="head" />
<meta name="designer" content="Juergen Koller - http://www.lernvid.com" />
<meta name="licence" content="Copyright LernVid.com - Creative Commons Sharalike 3.0" />
<link href="templates/<?php echo $this->template ?>/css/reset.css" rel="stylesheet" type="text/css" media="all" />
<link href="templates/<?php echo $this->template ?>/css/template.css" rel="stylesheet" type="text/css" media="all" />
<!--[if IE 7]>
	<link href="templates/<?php echo $this->template ?>/css/ie7.css" rel="stylesheet" type="text/css" media="all" />
<![endif]-->
<!--[if lt IE 7]>
	<link href="templates/<?php echo $this->template ?>/css/ie5x6x.css" rel="stylesheet" type="text/css" media="all" />
<![endif]-->

<?php
	if($this->countModules("right")&&!$this->countModules("left")){ $contentwidth="right";}
	if($this->countModules("left")&&$this->countModules("right")) {$contentwidth="middle"; }
?>
</head>
<body>
<?php if (($this->params->get('showFlashBg')) !=0) : ?>
	<div id="flashhg" style="position:absolute; top:0; left:0; z-index:0;">
		<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" codebase="http://fpdownload.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,0,0" width="100%" height="100%" id="recursion_tree_branch" align="middle">
			<param name="allowScriptAccess" value="sameDomain" />
			<param name="wmode" value="transparent" />
			<param name="movie" value="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template?>/fl/hg.swf" />
			<param name="quality" value="high" />
			<param name="bgcolor" value="#000" />
			<embed src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template?>/fl/hg.swf" mce_src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template?>/fl/wow3_header.swf" wmode="transparent" quality="high" bgcolor="#000" width="100%" height="100%" name="yourmovie" align="middle" allowScriptAccess="sameDomain" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
		</object>
	</div>
<?php endif; ?>		
<div id="allout" style="position:relative;  z-index:5;">
	<div id="header_container">
		<div id="header">
			<?php if (($this->params->get('showTextLogo')) !=0) : ?>
				<a href=""><div id="text_logo">
					<div id="logo_text"><?php echo  $this->params->get('LogoText');  ?></div>
					<div id="logo_slogan"><?php echo  $this->params->get('LogoSlogan');  ?></div>
				</div></a>
			<?php endif; ?>					
			<?php if (($this->params->get('showTextLogo')) !=1) : ?>
				<a href=""><div id="image_logo"></div></a>
			<?php endif; ?>					
			<?php if($this->countModules('user4')) : ?>
				<div id="search">
					<div id="search_inner">
			             <jdoc:include type="modules" name="user4" style="xhtml" />
					</div>
				</div>
			<?php endif; ?>		
		</div>
	</div>
	<?php if($this->countModules('user3')) : ?>
		<div id="navigation_container">
			<div id="navigation">
	             <jdoc:include type="modules" name="user3" style="xhmtl" />
			</div> 
		</div> 
	<?php endif; ?>	
	<?php if ($this->countModules('dropdown_menu')) : ?>
		<div id="dropdown_menu_container">
			<div id="dropdown_menu">
				<jdoc:include type="modules" name="dropdown_menu" style="xmhtl" />
			</div>
		</div>
	<?php endif; ?>
	<?php if($this->countModules('user5 or user6 or user7')) : ?>
		<div id="user_modules1_container">
			<div id="user_modules1">
				<div id="user_modules1_float">
					<?php if($this->countModules('user5')) : ?>
						<div id="user5_outer">
							<div id="user5">
					           <jdoc:include type="modules" name="user5" style="rounded" />
							</div>
						</div>
					<?php endif; ?>			
					<?php if($this->countModules('user6')) : ?>
						<div id="user6_outer">
							<div id="user6">
					           <jdoc:include type="modules" name="user6" style="rounded" />
							</div>
						</div>
					<?php endif; ?>			
					<?php if($this->countModules('user7')) : ?>
						<div id="user7_outer">
							<div id="user7">
					           <jdoc:include type="modules" name="user7" style="rounded" />
							</div>
						</div>
					<?php endif; ?>			
				</div>					
			</div>					
		</div>
	<?php endif; ?>		
	<div class="clr"></div>
	<div class="line"></div>
	<div id="wrapper">
		<div class="clr"></div>
		<div id="container">
			<div id="page_content">
				<?php if($this->countModules('right')) : ?>
					<div id="right_outer">
						<div id="right_top"></div>
		                <div id="right_inner_float">
			                <div id="right_inner">
			                	<jdoc:include type="modules" name="right" style="rounded" />
			                </div>
		                </div>
		                <div id="right_bottom"></div>
	                </div>					
				<?php endif; ?>		
			    <div id="content_out<?php echo $contentwidth; ?>">
					<div id="content_outer">
						<div id="content">
							 <jdoc:include type="message" />
							 <jdoc:include type="component" />
						</div>
						<div class="clr"></div>
					</div>
				</div>
			</div>	
			<div id="container2">
				<?php if($this->countModules('user8 or user9 or user10')) : ?>
					<div id="user_modules3">
						<?php if($this->countModules('user8')) : ?>
							<div id="user8_outer">
								<div id="user8">
						           <jdoc:include type="modules" name="user8" style="rounded" />
								</div>
							</div>
						<?php endif; ?>			
						<?php if($this->countModules('user9')) : ?>
							<div id="user9_outer">
								<div id="user9">
						           <jdoc:include type="modules" name="user9" style="rounded" />
								</div>
							</div>
						<?php endif; ?>			
						<?php if($this->countModules('user10')) : ?>
							<div id="user10_outer">
								<div id="user10">
						           <jdoc:include type="modules" name="user10" style="rounded" />
								</div>
							</div>
						<?php endif; ?>			
					</div>					
				<?php endif; ?>		
				<div class="clr"></div>
			</div>
			<div class="clr"></div>
		</div>
	</div>
	<?php if($this->countModules('user1 or user2')) : ?>
		<div id="user_modules2_container">
			<div id="user_modules2">
				<div id="user_modules2_float">
					<?php if($this->countModules('user1')) : ?>
						<div id="user1">
				           <jdoc:include type="modules" name="user1" style="rounded" />
						</div>
					<?php endif; ?>			
					<?php if($this->countModules('user2')) : ?>
						<div id="user2">
				           <jdoc:include type="modules" name="user2" style="rounded" />
						</div>
					<?php endif; ?>			
				</div>
			</div>					
		</div>
	<?php endif; ?>		
	<div class="clr"></div>			
	<div class="line"></div>
	<div id="footer_outer">
		<div id="footer">
			<div id="copyright_info">
				<p><?php echo  $this->params->get('CopyrightInfo');  ?></p>
			</div>
			<?php if($this->countModules('footer')) : ?>
				<jdoc:include type="modules" name="footer" />
			<?php endif; ?>
		</div>
		<div id="designed_by">
			<p>Design by: <a href="http://www.lernvid.com" target="_blank">LernVid.com</a></p>
		</div>
	</div>
	<jdoc:include type="modules" name="debug" style="rounded" />
</div>
</body>
</html>