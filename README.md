I do not take credit for the designing of this template!

## What is it?

Grayscale Press is a WordPress reworking of [Grayscale](http://startbootstrap.com/template-overviews/grayscale/) & [Grayscale SASS](https://github.com/blackfyre/grayscale-sass), a multipurpose, one page HTML theme for [Bootstrap](http://getbootstrap.com/) created by [Start Bootstrap](http://startbootstrap.com/). It is designed to be a rapid-fire solution to a landing page for your WP installation. It is meant to stand oustide your theme, acting as a special-cases page for events, promotions, etc. It's also made to look bloody good, of course!

The template itself uses Gulp, Bower and SCSS for development. You do not need to use these things, if you want to work out of the box. If you want to do some customization, it should be easier thanks to the extras! 

## Getting Started

To use this template, choose one of the following options to get started:

### DIY, You Savvy Dev You
0. (required once if not already installed) Install bower(`npm install -g bower`) & sass (`gem install sass`)
1. Fork/download this repository on GitHub
2. Invest in some node dependencies(`npm install`)
3. Install bower dependencies (`bower update`)
4. Use Gulp to compile/update
5. Modify template to meet specific design / component needs
6. Upload directly to `Plugins` directory within `wp-content`
7. Add widget areas and enjoy! 

### Take the Shortcut
0. Download the packaged .zip file contained here in the repo
1. Throw it into your 'Plugins' directory
2. Pretend like you did all the work, receive all the accolades, and impress your friends


## Customizing

The Grayscale Press plugin comes with a couple of widget areas and a few built-in customizer points. To make the template display like the demo, create a new page and select the Grayscale Landing Page template.

Find your widgets, and to Grayscale Intro Section add title 'Grayscale' and content: 
  
 	<p>A free, responsive, one page Bootstrap theme.<br>Created originally by Start Bootstrap.</p>
	    <a href="#about" class="btn btn-circle page-scroll pulse">
	    <i class="fa fa-angle-double-down"></i>
	</a>

Grayscale About Section add title 'About Grayscale' and content:

    <p>Grayscale is a free Bootstrap 3 theme created by Start Bootstrap. It can be yours right now, simply download the template on <a href="http://startbootstrap.com/template-overviews/grayscale/">the preview page</a>. The theme is open source, and you can use it for any purpose, personal or commercial.</p>
    <p>This theme features stock photos by <a href="http://gratisography.com/">Gratisography</a> along with a custom Google Maps skin courtesy of <a href="http://snazzymaps.com/">Snazzy Maps</a>.</p>
    <p>This version of Grayscale includes full HTML, CSS, and custom JavaScript files along with SASS files and bower for an even easier customization.</p>
    
Grayscale Contact Section add title 'Contact Start Bootstrap' and content: 

    <p>Feel free to email us to provide some feedback on our templates, give us suggestions for new templates and themes, or to just say hello!</p>
                    <p><a href="mailto:feedback@startbootstrap.com">feedback@startbootstrap.com</a>
                    </p>
                    <ul class="list-inline banner-social-buttons">
                        <li>
                            <a href="https://twitter.com/SBootstrap" class="btn btn-default btn-lg"><i class="fa fa-twitter fa-fw"></i> <span class="network-name">Twitter</span></a>
                        </li>
                        <li>
                            <a href="https://github.com/IronSummitMedia/startbootstrap" class="btn btn-default btn-lg"><i class="fa fa-github fa-fw"></i> <span class="network-name">Github</span></a>
                        </li>
                        <li>
                            <a href="https://plus.google.com/+Startbootstrap/posts" class="btn btn-default btn-lg"><i class="fa fa-google-plus fa-fw"></i> <span class="network-name">Google+</span></a>
                        </li>
                    </ul>

Grayscale CTA Section add title 'Download Grayscale Press' and content: 

    <p>You can download the WordPress version of Grayscale for free on the GITHUB page.</p>
                    <a href="https://github.com/lukechanning/grayscale-press" class="btn btn-default btn-lg">Visit the Download Page</a>
                    
Grayscale Final Section add title 'Contact Blackfyre' and content:

    <p>If you have problems with the <b>SASS version</b> of the original template, please report it at the</p>
                <p><a href="https://github.com/blackfyre/grayscale-sass/issues">GITHUB Issues page</a>
                </p>
                <ul class="list-inline banner-social-buttons">
                    <li>
                        <a href="https://twitter.com/gnick666" class="btn btn-default btn-lg"><i class="fa fa-twitter fa-fw"></i> <span class="network-name">Twitter</span></a>
                    </li>
                    <li>
                        <a href="https://github.com/blackfyre" class="btn btn-default btn-lg"><i class="fa fa-github fa-fw"></i> <span class="network-name">Github</span></a>
                    </li>
                </ul>

Grayscale Map Section requires no title and content: 

    <!-- Google Maps API Key - Use your own API key to enable the map feature. More information on the Google Maps API can be found at https://developers.google.com/maps/ -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCRngKslUGJTlibkQ3FkfTxj3Xss1UlZDA&sensor=false"></script>

### Pro-Tips &copy;

* Create the menu using the default WordPress admin panel, then select the 'Grayscale Navigation' option.
* Use the WordPress 'Customize" option to change section colors, text color and link color
* You can also use it to change the section photos, as well as the header logo

## Updates

### 2015-07-14
* Instructions and final beta updates

### 2015-07-09
* Initial commit

## Bugs and Issues

Have a bug or an issue with this template? [Open a new issue](https://github.com/blackfyre/grayscale-sass/issues) here on GitHub.

## Creator

Start Bootstrap was created by and is maintained by **David Miller**, Managing Parter at [Iron Summit Media Strategies](http://www.ironsummitmedia.com/).

* https://twitter.com/davidmillerskt
* https://github.com/davidtmiller

Start Bootstrap is based on the [Bootstrap](http://getbootstrap.com/) framework created by [Mark Otto](https://twitter.com/mdo) and [Jacob Thorton](https://twitter.com/fat). Special thanks goes to [Blackfyre](https://github.com/blackfyre/grayscale-sass) for the excellent SASS setup.

## Copyright and License

Copyright 2015 Iron Summit Media Strategies, LLC. Code released under the [Apache 2.0](https://github.com/IronSummitMedia/startbootstrap-grayscale/blob/gh-pages/LICENSE) license.
