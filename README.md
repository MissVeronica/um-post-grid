# UM Post Grid
Ultimate Member Custom template for "Post Grid" plugin integration for the Profile page's Posts tab.
## UM Settings
None
## Installation
### UM Guide
Read the UM guide about "Template structure & Overriding templates via a theme" https://docs.ultimatemember.com/article/1516-templates-map
### Download template
Download the <code>posts.php</code> script file from this link and upload the template file to your Active theme's folder 

* Active theme's folder: .../wp-content/themes/{active theme}/ultimate-member/profile/posts.php

* Link: https://raw.githubusercontent.com/MissVeronica/um-post-grid/refs/heads/main/posts.php

Create the folders ( ultimate-member, profile ) with your filemanager or FTP client if non existent.
### Verify installation
Verify correct installation with "UM Settings -> Advanced -> Override templates" that UM is locating the template at .../ultimate-member/profile/posts.php

If you don't find the 'Override templates' tab the template file <code>posts.php</code> is either not uploaded or uploaded to the wrong folder/wrong file name.
### Custom template activation
Install and activate the "Post Grid" plugin https://wordpress.org/plugins/post-grid/

Create a "Post Grid" layout. An easy "Post Grid" setup guide by WPBeginner 
https://www.wpbeginner.com/plugins/how-to-display-your-wordpress-posts-in-a-grid-layout/#create-grid-layout-post-grid-plugin

Insert the "Post Grid" shortcode Id number into the Custom template script file <code>posts.php</code> where current value is <code>$post_grid_id = '6554';</code>
## "Post Grid" integration changes
Filter hook <code>post_grid_filter_query_args</code> for adding the <code>user_id</code> of the Profile page owner to the "Post Grid" database query.
## UM template update
The "Post Grid" template is independent of UM and is not out of date if UM default template is being updated later.
## Reference
"Post Grid" plugin homepage https://pickplugins.com/post-grid
## Updates
None


