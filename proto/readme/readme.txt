# This is the readme for the proto folder.

The proto folder contains examples of a lot of front end development that can be easily slotted into new projects. It also contains examples of different CSS and JS uses which are tricky or otherwise obtuse.


## Demos and Examples

The index.php file contains a link to all of the different demo pages. Each of the demo pages has a different page that showcases what it is demoing with description of what files are being brought in on that page. Each of the linked to files are documented to include how the plugin/function works and how to expand upon it or integrate it within a larger project.

The pages are in php so they can use file_get_contents() for inline svg images. It also means that the folder could be used to contain demo php functions, such as loops or forms.


## Starting development

The first step of using this proto folder to create a new project is to create all of the correct font files and add the variables from the design into the less files. The less files to edit are in "proto/bootstrap/less/rb/" . The first files to edit will be variables.less and type.less. Variables creates the grid system and the variables used in other less files. Type.less contains all of the base typography styles, including article specific styles towards the bottom of the page. waterfall.php file contains an example of most of the text content that may be used on a site.

When creating new prototype pages for a new project they should start from the startpage.php file. Copy and paste the contents of that file into a new php file with an appropriate name. This file includes the custom.js file and the bootstrap css along with meta tags in the head of the html. startpage.php also includes a skeleton header that is structured in a way that rb_header_nav.less will work nicely with.

During proto development the js that is used on all of the pages should be included in the custom.js file. Any page specific pages should be clearly documented in the html of the page. These files will be loaded in using wp_enqueue when the project gets moved over to php.


## File structure

      proto
        |
        |_[php files]
        |
        |_ bootstrap
        |   |_ [bootstrap files]
        |   |
        |   |_ less
        |   |    |_ [base bootstrap less files]
        |   |    |_ rb
        |   |        |_ [less files to edit]
        |   |
        |   |_ dist (these are the distribution files from bootstrap)
        |      |_ css
        |      |_ js
        |      |_ fonts
        |
        |_ js
        |   |_ demos
        |   |   |_ [demo js pages]
        |   |
        |   |_ mobile
        |   |   |_ [js files for mobile. jQuery mobile]
        |   |
        |   |_ social
        |   |   |_ [js for twitter and facebook]
        |   |
        |   |_ velocity
        |   |   |_ [js for velocity and velocity ui]
        |   |
        |   |_ jQuery.js
        |   |
        |   |_ custom.js
        |
        |_ css
        |   |_fonts
        |   |  |_ (font-files)
        |   |
        |   |_ fonts.css (links to all fonts)
        |   |
        |   |_ reset.css (base for css)
        |   |
        |   |_ [any extra css files]
        |
        |_ images (images go here)
        |
        |_ inline_svgs (svgs go here)
        |
        |_ videos (videos go here)


Some of the demo files also link to their respective wordpress plugin folders: rbd_clean/wp-content/plugins/[plugin name]


## Extra info

### Terminal commands:

    # Add this to the .bash_profile file in your user directory (e.g. users/mark/.bash_profile)
    # If the bash_profile file doesn't exist then create it.

    #Installs less and less plugins. Only needs to be run once.
    alias rb-lessc-setup='sudo npm install -g less; sudo npm install -g; sudo less-plugin-autoprefixyou; sudo npm install -g less-plugin-clean-css; sudo npm install -g less-plugin-group-css-media-queries'

    function rb-lessc() {
      # Example: $ rb-lessc faqs
      #          input  : faqs.less
      #          output : faqs.min.css
      # Compiles a less file. Autopreffixes all of the css, combines media queries and then minifies all the styles.
      lessc  --group-css-media-queries --autoprefix="Android >= 2.3,BlackBerry >= 7,Firefox >= 4,Chrome >= 9,Explorer >= 9,iOS >= 5,Opera >= 11,Safari >= 5,OperaMobile >= 11,OperaMini >= 6,ChromeAndroid >= 9,FirefoxAndroid >= 4,ExplorerMobile >= 9" $1.less $1.min.css --clean-css
    }
    # latest version: https://gist.github.com/markredballoon/7bedd81e121bb022ce090c67eafd6efa
