<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme and one of the
 * two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * For example, it puts together the home page when no home.php file exists.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">
			<div id="topBar">  
				<ul> 	 
					<li>
						<a href="https://www.facebook.com/RubysOfficialpage" target="_blank">
							<img alt="" src="http://lowermedia.net/ruby-gettinger/assets/sites/23/2013/08/facebook.png"/>
						</a>
					</li>  
					<li>
						<a href="http://twitter.com/RubyGettinger_" target="_blank">
							<img alt="" src="http://lowermedia.net/ruby-gettinger/assets/sites/23/2013/08/twitter.png" />
						</a>
					</li>  
					<li><a href="http://instagram.com/rubygettinger/" target="_blank"><img alt="" src="http://lowermedia.net/ruby-gettinger/assets/sites/23/2013/08/instagram.png" /></a></li> 		 
					<li><a href="http://www.youtube.com/writerubygettinger" target="_blank"><img alt="" src="http://lowermedia.net/ruby-gettinger/assets/sites/23/2013/08/youtube.png" /></a></li>  
					<li><a href="http://pinterest.com/rubygettinger/" target="_blank">
						<img alt="" src="http://lowermedia.net/ruby-gettinger/assets/sites/23/2013/08/pinterest.png" /></a></li> 	 
					<li><a href="http://www.whosay.com/rubygettinger" target="_blank">
					<img alt="" src="http://lowermedia.net/ruby-gettinger/assets/sites/23/2013/08/whosay.png" /></a></li> 	 
					<li><a href="http://www.linkedin.com/pub/ruby-gettinger/28/4a4/468" target="_blank"><img alt="" src="http://lowermedia.net/ruby-gettinger/assets/sites/23/2013/08/linkedin.png" /></a></li>  
				</ul> 
			</div>  
			<div id="logoImg"> 
				<img src="http://lowermedia.net/ruby-gettinger/assets/sites/23/2013/08/ruby_gettinger_facebook_twitter_ownnetwork_video-01.png" alt="" width="600" /> 
			</div> 
			<h2>Spiritually,  Emotionally, Mentally, Physically</h2> 
			<br /> 
			<br />  
			<div id="bodyContainer"> 
			<h3>For media, business, events, speaking engagements contact <a href="mailto:Rubysmanager@gmail.com">Rubysmanager@gmail.com</a></h3> 
			<div class="videoWrapper"> 
				<iframe width="640" height="480" src="//www.youtube.com/embed/yv3Vwgf8i78" frameborder="0" allowfullscreen></iframe>
			</div>
			<br /> 
			<br />  
			<br /> 
			<br />  
			<p style="text-align:right;">
			<em>This site is still under construction. Please come back soon for more news from Ruby! <br /></em>
			</p> 
		</div><!-- #content -->
	</div><!-- #primary -->

<?php //get_sidebar(); ?>
<?php get_footer(); ?>