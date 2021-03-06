<?php
$meta_title="CSS Cement - LESS powered CSS framework";
$slug="Home";
?>
<?php include("header.php"); ?>
				<div class="content">
					<div class="parent dt-1-1 tb-1-1 mb-1-1 collapse-top">
						<div>
							<div class="highlight">
								<h1>CSS Cement is a CSS / HTML framework that uses the power of LESS to make a system that you not only build on top of but build with.</h1>
							</div>

							<p>The drive behind CSS Cement was my disapointment with some of the leading front-end frameworks. I wanted a framework that was more semantic with less framework specific markup and classes and less reliance on changing markup to change the look of an element. I also wanted something lightweight enough to be usable on customer facing sites, meaning that the code had to be lightweight and therefore configurable rather than overridable.</p>
							<p>This is where the name CSS Cement came from, CSS Cement is supposed to be a framework you use to build your site with rather than a framework you build on top of.</p>

							<div class="parent dt-1-2 tb-1-2 mb-1-1">
								<div>
									<h2><a href="template-widgets.php">Widgets</a></h2>
									<p>A number of optional and highly configurable widgets are included from tabs to bar charts. If you don't need a feature, you can simply disable it and it's CSS wont be compiled.</p>
									<p>All the semantic widgets are documented in the Standard widgets page above. I have also created some non-semantic widgets that I didn't feel where apropriate to add with the semantic widgets but where nifty enough to include if needed. These are in the other widgets page.</p>
								</div>
								<div>
									<h2><a href="template-grid.php">The Grid</a></h2>
									<p>The grid system is based on fractions and allows you to switch the number of columns even on the same page and allows up to 20 columns. The grid system is nestable and fully responsive with configurable breakpoints and minimum / maximum site widths.</p>
									<p>Another feature of the grid is that multiple rows of child elements can be used without specifying an nth class or clearing at a certain point, making the system ideal for ecommerce sites.</p>
								</div>
								<div>
									<h2><a href="template-type.php">Type</a></h2>
									<p>I have only included basic type styles for now but plan to refine these at a later date.</p>
								</div>
								<div>
									<h2><a href="template-mixins.php">Mixins</a></h2>
									<p>CSS Cement contains a number of mixins designed to make using vendor extensions easier and also a number of page layout helpers and behaviour fixes.</p>
								</div>
								<div>
									<h2><a href="template-forms.php">Forms</a></h2>
									<p>The code used for these forms was first developed a few years ago with the aim that the markup should be simple and not dependent upon the form's layout. More recently I made the code responsive and add more options for styling.</p>
									<p>So no matter if your form is vertical, horizontal or inline, your markup stays the same and just a single class change is needed.</p>
								</div>
								<div>
									<h2><a href="themes.php">Themes</a></h2>
									<p>Themes are the key to building a site with CSS Cement, a theme will contain all of the necessary variables from CSS Cement along with any custom CSS and sample HTML to get you started. It is recommended that themes are used as starter points or for inspiration rather than as finished site designs.</p>
									<p>Hundreds of eaily configured variables allow complete control of how your website looks, meaning that no two websites built with CSS Cement should look the same.</p>
									<p>Though CSS Cement is built with LESS, it has been designed to be simple enough for anyone with basic web skills to use.</p>
								</div>
								<div class="dt-1-1 tb-1-1 mb-1-1">
									<h2>Getting started</h2>
									<p>The best way to get started is to download a theme and have a dig through it's files.</p>
									<p>You will need LESS to work with CSS Cement as we deliberately don't provide built versions. Rather than write lots of documenttaion here about how to use LESS I would rather point you to their very useful site at <a href="http://lesscss.org/">http://lesscss.org/</a></p>
								</div>
							</div>
						</div>
					</div>
				</div>
<?php include("footer.php"); ?>
