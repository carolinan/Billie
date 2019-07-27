=== Billie ===
Contributors: Poena
Requires at least: 5.0
Tested up to: 5.2
Requires PHP: 5.6
License: GNU General Public License v2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html
Copyright: 2015-2019 Carolina Nymark

Billie is a responsive accessible blog theme with a call to action and search form in the header.


= Description ==
Billie is a responsive accessible blog theme. The theme has two optional menus (including a social menu),
several different sidebars and a footer widget area that will hold any number of widgets. 
The theme is compatible with the new block editor, and also includes a Call To Action button 
and two page sections that you can combine with your front page.
I recommend that you install the Jetpack plugin to make full use of supported features like featured content,
contact forms, testimonials, social sharing and more.
To create a portfolio, install Jetpack and create your projects, all the templates are already shipped with the theme.
Billie also works well with WooCommerce.


== Installation ==
1. Unzip `billie.zip` to the `/wp-content/themes/` directory
2. Activate the theme through the 'Appearance' menu in WordPress

== Change log ==

Version 1.1.0 2019-05-09
Added support for wp_body_open.
Added a block style for the gallery which hides the image captions.
Updated required WordPress version and PHP version.


Version 1.0.9 2018-11-28
Housekeeping: Updated links. Updated credits in the readme file. Removed admin.css since it was no longer used. 
Added a link to a new demo.
Updated Screenshot to comply with the new requirements.
Updated sanitization functions in the customizer.
CSS and PHP code style changes according to WordPress coding standards.
Removed the JavaScript in navigation.js that added the screen reader text to the tag cloud since this is no longer needed.
Main menu: Aligned sub menu items more to the left.
Header: fixed duplicate H1 tags for single posts.
Style changes for improved responsiveness.
Added starter content and rtl style sheet.
Added a footer link to the privacy policy page, if one exists.
Style improvements in preparation for the new block editor.


Version 1.0.8 2017-04-07
Fixed an error with the custom logo, removed backwards compatibility for Jetpack Site logo.
Fixed an error with the Jetpack featured posts.
Fixed an error with the section page template.
Fixed an error with a missing placeholder.
Fixed a problem with the WooCommerce shop page styling.
Removed code and files that remained from the help page.
Removed a customizer panel that was not needed.
Moved the call to action code to a separate function.
Improved support for customizer edit shortcuts (selective refresh).
Updated the checkbox sanitization.
Made featured images in archives clickable. Clicking the image will take you to the post or page.
Added an option to hide the footer credit links.


Version 1.0.7 2017-01-22
Removed unsed files. 
Removed the reset from the customizer.
Removed the set up help. -Unfortunately documentation in this format has proven too difficult to maintain and translate. :(
Simplified the code used to present the comments.
Moved the page sections into their own functions.
Added support for selective refresh.

Version 1.0.6 2016-09-24
Fixed errors with the setup help page.
Added an additional sidebar for archives and search pages.
Removed the language file.
Updated description and theme tags.

Version 1.0.5 2016-05-27
Added a page template with a visible sidebar.
Added support for custom logo (This setting is ignored if the Jetpack site logo is used).
Updated the theme tags.
Fixed php notices on the testimonial pages.

Version 1.0.4 2016-02-07
Reduced post and page padding on small screens.
Adjusted title sizes.

Version 1.0.3 2016-01-18
Minor changes to the css to improve accessibility
Made sure that the default Call to Action button is only shown if the user is logged in.
Fixed navigation issues for archive and search.
Removed unnecessary functions for navigation and archive title and description.

Version 1.0.2 2015-06-30
Fixed an issue with the site title in the customizer preview.

Version 1.0.1 2015-06-05
Removed sidebars that were not meant to display on archives.
Corrected attribution for Casper.
Changed comment navigation to paginate_comments_links.
Css changes, improved contrast.
New screenshot that shows the color changes.

Version 1.0 2015-05-24
Initial release

== Resources Used In This Theme ==
Billie is a derivative work of:
Underscores https://underscores.me/, (C) 2012-2018 Automattic, Inc. License: GNU General Public License v2 or later
Universal https://themes.joedolson.com/universal/ (C) Joseph C Dolson. License: GNU General Public License v2 or later
Sela https://wordpress.com/themes/sela/, based on Underscores https://underscores.me/, 
(C) 2012-2018 Automattic, Inc. License: GNU General Public License v2 or later
Aaron Copyright 2015-2018 Carolina Nymark License: GNU General Public License v2 or later
Casper Copyright (c) 2013-2018 Ghost Foundation - Released under the MIT License. https://github.com/TryGhost/Casper

Header image by Nick Graham. Source: https://tookapic.com/photos/8709#comment-8335, License: CC0. -Thank you!

Fonts
Font Awesome by @davegandy - https://fontawesome.com - @fontawesome
Icons — CC BY 4.0 License
In the Font Awesome Free download, the CC BY 4.0 license applies to all icons packaged as .svg and .js files types.
Fonts — SIL OFL 1.1 License
In the Font Awesome Free download, the SIL OLF license applies to all icons packaged as web and desktop font files.
Code — MIT License
In the Font Awesome Free download, the MIT license applies to all non-font and non-icon files.

JavaScript
Keyboard Accessible Dropdown Menus
Copyright 2013 Amy Hendrix (email : amy@amyhendrix.net), Graham Armfield (email : graham.armfield@coolfields.co.uk)
License: MIT

Sanitization
Copyright (c) 2015-2018, WordPress Theme Review Team
https://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU General Public License, v2 (or newer)
https://github.com/WPTRT/code-examples/blob/master/customizer/sanitization-callbacks.php

CSS
Blueprint, MIT License, https://github.com/joshuaclayton/blueprint-css/blob/master/LICENSE
https://github.com/joshuaclayton/blueprint-css

Normalize, MIT License, https://github.com/necolas/normalize.css/blob/master/LICENSE.md
https://necolas.github.io/normalize.css/