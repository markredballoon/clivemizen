# Calls to action readme.

The calls to action plugin adds call to action section that can be brought in on any page. The calls to action that are brought in can be different on every page. The cta section is added to a page by a shortcode.


## How it works

The plugin creates a custom post type called Call To Actions. Each of these calls to action has an image, a title and a link address. These calls to action get added to the page together in a group. These groups are created by making all calls to action that will be brought out together share the same parent post. When the shortcode is called it will bring in all children of a selected parent.

If there are multiple cta groups then each of these will have their own parent in the admin section.

## How to edit output:

To change the html that gets output then edit inc/shortcode.php
To change the styles edit css/cta.less (and compile it). This means that the styles wont be brought onto a page that they are not required. These are just default styles.
For dynamic CTAs that require JS add a js/cta.js file and wp_enqueue it in cta.php with the styles.
