# Homepage Slides Plugin.

The homepage slides plugin adds a bootstrap carousel onto a page using a shortcode. The slides of the carousel can link to different pages on the site (or elsewhere).

## How it works:

A new post type is creates called slides. Slides added to that section of the backend will be brought in as slides where the shortcode is located.
For sites where there are multiple different carousels set up the slides as a child of another slide. The plugin will then loop through all the children of that parent slide and output those slides.

Each of the slides can have some custom attributes set.
* slideMainClass: CSS class that gets added to the slide item.
* slideBGClass: CSS class that gets added to the background-image element.
* slideLink: URL for slide link href.

This plugin loads no extra files but does depend on Bootstrap and Jquery.

## How to edit output:

To change the html that gets output edit shortcode.php.
To add styles it is recommended that they are written in a specific css file that gets enqueued by the plugin.

## Extra notes
This plugin has different requirements other plugins:
* Without swipe effect: jQuery, Bootstrap
* With swipe effect: jQuery, Bootstrap, jQuery Mobile
