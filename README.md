# UM Post Grid
Ultimate Member Custom template for "Post Grid" plugin integration for the Profile page's Posts tab.
## UM Settings
None
## Custom template activation
Install and activate the "Post Grid" plugin https://wordpress.org/plugins/post-grid/

Create a "Post Grid" layout. An easy "Post Grid" setup guide by WPBeginner 
https://www.wpbeginner.com/plugins/how-to-display-your-wordpress-posts-in-a-grid-layout/#create-grid-layout-post-grid-plugin

Insert the "Post Grid" shortcode Id number into the Custom template script file with current value <code>$post_grid_id = '6554';</code>
## "Post Grid" integration changes
Filter hook <code>post_grid_filter_query_args</code> for adding the <code>user_id</code> of the Profile page owner to the "Post Grid" database query.
## UM template update
The "Post Grid" template is independent of UM and is not out of date if UM default template is being updated later.
## Reference
"Post Grid" plugin homepage https://pickplugins.com/post-grid
## Installation
Download the <code>posts.php</code> script file and upload the template file to your Active theme's folder .../ultimate-member/profile/

Create the folders if non existent.

Verify with UM Settings -> Advanced -> Override templates that UM is locating the template at .../ultimate-member/profile/posts.php

Read the UM guide about "Template structure & Overriding templates via a theme" https://docs.ultimatemember.com/article/1516-templates-map
