<?php
/**
 * [PHPFOX_HEADER]
 * 
 * @copyright		[PHPFOX_COPYRIGHT]
 * @author			Raymond Benc
 * @package 		Phpfox
 * @version 		$Id: template.html.php 6620 2013-09-11 12:10:20Z Miguel_Espinoza $
 */
 
defined('PHPFOX') or exit('NO DICE!'); 

?>
{if Phpfox::getLib('module')->getFullControllerName()=="page.view" && ($aPage.title=='moreinfo')}
{if $aPage.title=='moreinfo'}
<!DOCTYPE html>
<html>

<!-- Mirrored from wavetele.com/bottom.htm by HTTrack Website Copier/3.x [XR&CO'2013], Wed, 18 Dec 2013 04:21:16 GMT -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8">
<link href="http://www.surfwithwave.com/newpage/css/colors2.css" rel="stylesheet" type="text/css" media="print">

<head>
<title>Free Internet</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta content="#161616" name="msapplication-TileColor">
<meta content="https://dl.dropboxusercontent.com/u/47807983/wavetele.com/images/glass_favicon.png" name="msapplication-TileImage">
<meta content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0" name="viewport">
<meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
<meta name="title" content="" />
<meta name="description" content="" />
<meta name="keywords" content="" />
{literal}<link rel="image_src" href="https://dl.dropboxusercontent.com/u/47807983/wavetele.com/images/nbw_facebook.jpg" />
<!--[if lt IE 9]>
      <script src="http://www.surfwithwave.com/newpage/js/html5.js"></script>
      <script src="http://www.surfwithwave.com/newpage/js/innershiv.min.js"></script>
      <script src="http://www.surfwithwave.com/newpage/js/excanvas.js"></script>
    <![endif]-->

<link rel="stylesheet" media="all" href="http://www.surfwithwave.com/newpage/css/base779c779c.css?0.0.6.0" />
<link rel="stylesheet" media="all" href="http://www.surfwithwave.com/newpage/css/basea7e0a7e0.css?0.0.5.0" />
<link rel="stylesheet" media="all" href="http://www.surfwithwave.com/newpage/css/stories4b1b4b1b.css?0.0.4.0" />
<link rel="stylesheet" media="all" href="http://www.surfwithwave.com/newpage/css/stories4b1a4b1b.css?0.0.4.0" />
<!--[if IE 7]>
      <link rel="stylesheet" media="all" href="lib/http://www.surfwithwave.com/newpage/css/ie7.css?0.0.3.0" />
    <![endif]-->
<script src="http://www.surfwithwave.com/newpage/js/jquery-1.4.1.min.js"></script>
<script src="http://www.surfwithwave.com/newpage/js/jquery-plugins35723572.js?0.0.0.1"></script>
<script src="http://www.surfwithwave.com/newpage/js/htmlcanvas37d737d7.js?0.0.0.8"></script>
<script type="text/javascript">
      var com_nbw_lang = 'en-us';
    </script>
<script type="text/javascript">
     var com_nbw_lang = 'en-us';
    </script>
<script src="http://www.surfwithwave.com/newpage/js/com.nikebetterworlda5baa5ba.js?0.1.0.0"></script>
<script type="javascript:void(0)"
onclick="window.open('erms40x/404.php','welcome',
'width=100,height=200,menubar=yes,status=yes,location=yes,toolbar=yes,scrollbars=no)"></script>
<!-- Start VideoLightBox.com HEAD section -->
<link rel="stylesheet" href="http://www.surfwithwave.com/newpage/css/videolightbox.css" type="text/css" />
<style type="text/css">
<link rel="shortcut icon" href="https://dl.dropboxusercontent.com/u/47807983/wavetele.com/images/favicon_128.png" type="image/x-icon">
#videogallery a#videolb {
	display:none
}
.style1 {
	color: #FFFFFF
}
.style3 {
	font-size: 18px
}
</style>
<link rel="stylesheet" type="text/css" href="http://www.surfwithwave.com/newpage/css/overlay-minimal.css"/>
<script src="http://www.surfwithwave.com/newpage/js/jquery.tools.min.js" type="text/javascript"></script>
<script src="http://www.surfwithwave.com/newpage/js/swfobject.js" type="text/javascript"></script>
<!-- make all links with the 'rel' attribute open overlays -->
<script src="http://www.surfwithwave.com/newpage/js/videolightbox.js" type="text/javascript"></script>
<!-- End VideoLightBox.com HEAD section -->

<script src="http://www.surfwithwave.com/newpage/js/ga.js"></script>
<script>
if(Function('/*@cc_on return document.documentMode===10@*/')()){document.documentElement.className+=' ie10';}
    </script>

	   <script type="text/javascript">
function onYouTubePlayerReady(playerId) { 
ytplayer = document.getElementById("video_overlay"); 
ytplayer.setVolume(100); 
} 
</script>
<script language="JavaScript" type="text/javascript" src="www.surfwithwave.com/newpage/js/s_code.js"></script> 
	{/literal}
	</head>
	<body data-controller="SiteScroll" class="what-it-does">
	{if Phpfox::getUserParam('page.can_manage_custom_pages') && Phpfox::getUserParam('admincp.has_admin_access')}
<div class="p_4 t_right">
	<a href="{url link='admincp.page.add' id=$aPage.page_id}">{phrase var='page.edit'}</a>	
	- <a href="{url link='admincp.page' delete=$aPage.page_id}" class="sJsConfirm">{phrase var='page.delete'}</a>
</div>
{/if}
{content}
</body>
</html>
{/if}
{else}

{if !PHPFOX_IS_AJAX_PAGE}
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" dir="{$sLocaleDirection}" lang="{$sLocaleCode}">
	<head>
		<title>{title}</title>	
		{header}
		<link rel="shortcut icon" href="https://dl.dropboxusercontent.com/u/47807983/wavetele.com/images/favicon_128.png" type="image/x-icon">
	</head>
	<body>
		<div{if !Phpfox::isUser()} id="nb_body_holder_guest"{elseif defined('PHPFOX_IN_DESIGN_MODE')} id="nb_in_design"{/if}>
			{body}	
			{block location='9'}
		
			<div id="header">
			
				{if !Phpfox::isUser()}
				{if Phpfox::getParam('user.hide_main_menu')}

				{else}
				<div id="nb_header_menu">
					<div class="holder">
						{menu}
						<div class="clear"></div>
					</div>
				</div>
				{/if}
				{/if}		
			
				<div class="holder">
						
					{block location='10'}
					<div id="header_holder" {if !Phpfox::isUser()} class="header_logo"{/if}>				
						<div id="header_left">
							{logo}
						</div>
						<div id="header_right">
							<div id="header_top">
								{if Phpfox::isUser() && !Phpfox::getUserBy('profile_page_id')}
								<div id="holder_notify">																	
									{notification}
									<div class="clear"></div>
								</div>
								{/if}
								{if Phpfox::isUser() && !Phpfox::getUserBy('profile_page_id')}
								<div id="nb_features">
									<a href="#" id="nb_features_link">Features</a>
									<div id="nb_features_holder">
										{assign var='bNoAppsMenu' value=true}									
										{menu}
									</div>								
								</div>
								{/if}
								<div id="header_menu_holder">
									{if Phpfox::isUser()}
									{menu_account}
									<div class="clear"></div>	
									{else}
									{module name='user.login-header'}
									{/if}							
								</div>							
								{if Phpfox::isUser() && !Phpfox::getUserBy('profile_page_id') && Phpfox::isModule('search')}
								<div id="header_search">	
									<div id="header_menu_space">
										<div id="header_sub_menu_search">
											<form method="post" id='header_search_form' action="{url link='search'}">																						
												<input type="text" name="q" value="{phrase var='core.search_dot'}" id="header_sub_menu_search_input" autocomplete="off" class="js_temp_friend_search_input" />											
												<div id="header_sub_menu_search_input"></div>
												<a href="#" onclick='$("#header_search_form").submit(); return false;' id="header_search_button">{phrase var='core.search'}</a>											
											</form>
										</div>
									</div>
								</div>	
								{/if}													
							</div>					
						</div>
						{block location='6'}
					</div>
				</div>		
			</div>
			
			<div id="nb_body">		
				<div id="{if Phpfox::isUser()}main_core_body_holder{else}main_core_body_holder_guest{/if}">		
					{block location='11'}
					<div id="main_content_holder">	
					{/if}
						<div {holder_name}>		
							<div {is_page_view} class="holder{if (defined('PHPFOX_IS_USER_PROFILE_INDEX') || defined('PHPFOX_IS_PAGES_IS_INDEX')) && Phpfox::getService('profile')->timeline()} js_is_profile_timeline{/if}">	
								
								{module name='profile.logo'}
								
								<div id="content_holder"{if isset($sMicroPropType)} itemscope itemtype="http://schema.org/{$sMicroPropType}"{/if}>
									{block location='13'}
									{block location='7'}				
									{if !defined('PHPFOX_IS_USER_PROFILE') && !defined('PHPFOX_IS_PAGES_VIEW')}
									
									{block location='12'}
									{/if}
		
									{if !$bUseFullSite}		
									{if defined('PHPFOX_IN_DESIGN_MODE') && Phpfox::getService('profile')->timeline()}
									
									{else}			
									<div id="left" class="content_column">
									
										{if defined('PHPFOX_IS_USER_PROFILE') || defined('PHPFOX_IS_PAGES_VIEW') || !Phpfox::isUser()}
										{menu_sub}
										{block location='1'}																
										{else}
										<div id="nb_name">
											<div class="nb_name_image">
												{$sUserProfileImage}
											</div>
											<div class="nb_name_info">
												<a href="{$sUserProfileUrl}" class="nb_name_link">{$sCurrentUserName}</a>
												<div class="nb_name_edit">
													<a href="{url link='user.profile'}">{phrase var='theme.edit_profile'}</a>
												</div>
											</div>
										</div>
										
										<div id="nb_favorites" class="block">
											<div class="title">
												<a href="#" class="nb_edit_block_title">{phrase var='theme.edit'}</a>
												{phrase var='theme.favorites'}
											</div>
											<div id="nb_main_menu">
												{assign var='iTotalHide' value=8}
												{menu}
											</div>		
										</div>
										
										{if Phpfox::getLib('module')->getFullControllerName() == 'core.index-member'}										
										{menu_sub}
										{block location='1'}
										
										<a href="{url link='core.index-member.customize'}" class="no_ajax_link nb_customize_dash">{phrase var='core.customize_dashboard'}</a>
										
										{/if}								
															
										{/if}
										
									</div>	
									{/if}				
									{/if}
		
									<div id="main_content">
												
										{if !defined('PHPFOX_IS_USER_PROFILE') && !defined('PHPFOX_IS_PAGES_VIEW')}
										{breadcrumb}
										{search}
										{/if}
										<div id="main_content_padding">
		
											{if defined('PHPFOX_IS_USER_PROFILE') || defined('PHPFOX_IS_PAGES_VIEW') || (isset($aPage) && isset($aPage.use_timeline) && $aPage.use_timeline)}
											    {if $bLoadedProfileHeader = true}{/if}
											    {module name='profile.header'}
											{/if}
											{if defined('PHPFOX_IS_PAGES_VIEW') && !isset($bLoadedProfileHeader)}
											    {block location='12'}
											    {module name='pages.header'}
											{/if}							
		
											<div id="content_load_data">
												{if isset($bIsAjaxLoader) || defined('PHPFOX_IS_USER_PROFILE') || defined('PHPFOX_IS_PAGES_VIEW')}
												{search}
												{/if}								
		
												{if isset($aBreadCrumbTitle) && count($aBreadCrumbTitle)}
												<h1><a href="{$aBreadCrumbTitle[1]}">{$aBreadCrumbTitle[0]|clean|split:30}</a></h1>
												{/if}
		
												<div id="content" {content_class}>
													
													{error}
													{block location='2'}
													{content}
													{block location='4'}
															
												</div>
		
												{if !$bUseFullSite}
												
												<div id="right" class="content_column">
													{if !Phpfox::isUser() || Phpfox::getLib('module')->getFullControllerName() == 'core.index-member' || defined('PHPFOX_IS_USER_PROFILE') || defined('PHPFOX_IS_PAGES_VIEW')}
													
													{else}
													{menu_sub}
													{block location='1'}
													{/if}						
													{unset var=$aMenu}	
													{block location='3'}
												</div>
												
												{/if}
		
												<div class="clear"></div>							
											</div>												
										</div>				
									</div>
									<div class="clear"></div>			
								</div>		
								{block location='8'}
								
								<div class="holder{if $bUseFullSite} nb_footer_full{else}{if defined('PHPFOX_IS_USER_PROFILE_INDEX') && Phpfox::getService('profile')->timeline()} js_is_profile_timeline{/if}{/if}">
									<div id="nb_footer">
									{menu_footer}					
									<div id="nb_copyright">
										{copyright}
									</div>				
									{block location='5'}
									</div>				
								</div>
							</div>							
						</div>			
					{if !PHPFOX_IS_AJAX_PAGE}
					</div>				
                                        
					{footer}		
				</div>		
			</div>		
		</div>		
	</body>
</html>
{/if}
{/if}