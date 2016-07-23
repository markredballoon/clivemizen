# FAQs Plugin.

The FAQs Plugin creates an faq section on a page using a shortcode [faqs][/faqs]. These questions and answers are stored as a post with a specific type in the back end and are sorted by category.
Required jQuery to be loaded to work.

## How it works:
The FAQ content gets brought into the page by getting all posts with the post_type of ‘FAQs’. This can also be narrowed down further by requiring specific categories as well. This goes through a loop with the content being brought out of each of these and output where the shortcode is located. As well as the html that gets added to the page  faqs.min.css and faqs.js are also enqueued to be loaded.


## How to edit output:
To change the styles edit css/faqs.less and compile into faqs.min.css.
To add a new image for the close icon add it to the images folder and then edit the styles to add a new class that uses that image.

To change how the javascript works edit js/faqs.js.
When the element starts sliding a "faq:start" event is fired, which can be used to hook in other functions.
