# WordPress Multisite Enhancements 
Enhance Multisite for Network Admins with different topics

## Description
When you work quite a bit with WordPress Multisites, sometimes you need more information or menu items. This plugin enhances the network area for super admins with useful functions.

* Adds Blog and User ID in network view [more](http://wpengineer.com/2188/view-blog-id-in-wordpress-multisite/)
* Enables an 'Add New' link under the Plugins menu for Network admins
* Adds several useful items to the multisite 'Network Admin' admin bar
* On the network plugins page, shows which site has this plugin active.
* On the network theme page, shows which blog has the theme active and is a Child theme.
  * If you have more as 4 sites active for an plugin, theme then is the list only available via click for an proper way to not overload the admin interface.
* Change Admin footer text for Administrators to view currently used RAM, SQL, RAM version fast
* Adds Favicon from theme folder to the admin area to easily identify the blog, use the `favicon.ico` file in the theme folder of the active theme in each blog
* Adds Favicon to each blog on the Admin Bar Item 'My Sites'. If you a like a custom path for each favicon, please see the [documentation](https://github.com/bueltge/WordPress-Multisite-Enhancements/wiki/Filter-Hook-for-Favicon-File-Path) for this feature.
* Removes also the 'W' logo and his sub-links in admin bar
* Adds the status to each site in the admin bar to identify fastly if the site has a `noindex` status and to see the external url.
* Add functions to be used in your install
   * The function `get_blog_list()` is currently deprecated in the WP Core, but currently usable. The plugin checks this and gets an alternative in [`inc/autoload/core.php`](./inc/autoload/core.php)
   * If you will develop with the alternative to this function from my source, then use the method `get_blog_list()` in class `Multisite_Core`. My source also use caching with the Transient API. More about the function in  [`inc/autoload/class-core.php`](./inc/autoload/class-core.php).
   * If you use WordPress version 3.7 and higher, then check the function `wp_get_sites()`, the new alternative function inside the core to get all sides inside the network. The function accepts a array with arguments, see the [description](http://wpseek.com/wp_get_sites/).
   * But if you use WordPress 4.6 and higher then that new alternative ;) - `get_sites()` - is the current function to get all sites in the network. The helper method of this plugin `Multisite_Core::get_blog_list()` or the function `get_blog_list()` have all checks included.
* Filter theme list to find your target fast. Works on single theme page and also network theme page.
* Handy ssl identifier to each site in network site view page.

### Installation
#### Composer Package
The plugin is available as Composer package and can be installed via Composer:  
`composer create-project bueltge/wordpress-multisite-enhancements --no-dev`.

The package is on [packagist](https://packagist.org/packages/bueltge/wordpress-multisite-enhancements) and the package name is `bueltge/wordpress-multisite-enhancements`.

#### WordPress backend
Use the installer via back-end. Find via search and install.

#### Manual mode, (s)FTP
1. Unpack the download-package.
2. Upload the files to the `/wp-content/plugins/` directory.
3. Activate the plugin through the **Network/Plugins** menu in WordPress and click **Network Activate**.

### Screenshots
 1. [Blog ID on Sites](./assets/screenshot-1.png)

 ![Blog ID on Sites](https://raw.github.com/bueltge/WordPress-Multisite-Enhancements/master/assets/screenshot-1.png)
 2. [User ID on Users](./assets/screenshot-2.png)

 ![User ID on Users](https://raw.github.com/bueltge/WordPress-Multisite-Enhancements/master/assets/screenshot-2.png)
 3. [Add New link to install new plugin on each blog](./assets/screenshot-3.png)

 ![Add New link to install new plugin on each blog](https://raw.github.com/bueltge/WordPress-Multisite-Enhancements/master/assets/screenshot-3.png)
 4. [Manage Comments with Counter on Admin Bar](./assets/screenshot-4.png)

 ![Manage Comments with Counter on Admin Bar](https://raw.github.com/bueltge/WordPress-Multisite-Enhancements/master/assets/screenshot-4.png)
 5. [On which blog is the plugin active](./assets/screenshot-5.png)

 ![On which blog is the plugin active](https://raw.github.com/bueltge/WordPress-Multisite-Enhancements/master/assets/screenshot-5.png)
 6. [On which blog is the theme active](./assets/screenshot-6.png)

 ![On which blog is the theme active](./assets/screenshot-6.png)
 7. [New Admin footer text](./assets/screenshot-7.png)

 ![New Admin footer text](./assets/screenshot-7.png)
 8. [Favicon on Admin bar](./assets/screenshot-8.png)

 ![Favicon on Admin bar](./assets/screenshot-8.png)
 9. [Filter Themes](./assets/screenshot-9.gif)

 ![Filter Themes](./assets/screenshot-9.gif)

## Other Notes
### Crafted by [Inpsyde](https://inpsyde.com) · The team is engineering the Web since 2006.

### Bugs, technical hints or contribute
Please give me feedback, contribute and file technical bugs on this 
[GitHub Repo](https://github.com/bueltge/WordPress-Multisite-Enhancements/issues), use Issues.

### License
Good news, this plugin is free for everyone! Since it's released under the GPL, 
you can use it free of charge on your personal or commercial blog. But if you enjoy this plugin, 
you can thank me and leave a 
[small donation](https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=6069955 "Paypal Donate link") 
for the time I've spent writing and supporting this plugin. 
And I really don't want to know how many hours of my life this plugin has already eaten ;)

### Contact & Feedback
The plugin is designed and developed by me [Frank Bültge](http://bueltge.de)

Please let me know if you like the plugin or you hate it or whatever ... 
Please fork it, add an issue for ideas and bugs.

### Disclaimer
I'm German and my English might be gruesome here and there. 
So please be patient with me and let me know of typos or grammatical parts. Thanks
