# Quotes Plugin

The quotes plugin adds quotes to a page using a shortcode. The quote plugin can also add html around a quote from a specified source and it will include an image, blockquote, and cite tag around the content. If no content is put between the shortcode tags then it will add default content.
Multiple default quotes can also be brought in.


## How it works:

The plugin creates a custom post type quotes. These have the citation for the quote, the default quote and the image for the quote. When the shortcode is added to a page it will get the quote and add it as a blockquote with an image.
To add multiple quotes add multiple quote ids to the Shortcode. If there is any content between the shortcode tags then it will over-write the default content so it can only add multiple default quotes at once.

## How to edit:

To change the html edit inc/shortcode.php. If you want to change the styles edit (and compile) css/quotes.less. If you require any javascript add it to js/quotes.js.
