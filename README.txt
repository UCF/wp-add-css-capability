=== WP Add CSS Capability ===
Contributors: ucfwebcom
Requires at least: 5.3
Tested up to: 6.6
Stable tag: 1.0.1
Requires PHP: 7.4
License: GPLv3 or later
License URI: http://www.gnu.org/copyleft/gpl-3.0.html

Allows site administrators to access the "Additional CSS" customizer field.


== Description ==

Allows site administrators to access the "Additional CSS" customizer field.


== Documentation ==

Head over to the [WP Add CSS Capability wiki](https://github.com/UCF/wp-add-css-capability/wiki) for detailed information about this plugin, installation instructions, and more.


== Changelog ==

= 1.0.1 =
Bug Fixes:
* Corrected an issue where a newline was being added to all pages.

= 1.0.0 =
* Initial release


== Upgrade Notice ==

n/a


== Development ==

[Enabling debug mode](https://codex.wordpress.org/Debugging_in_WordPress) in your `wp-config.php` file is recommended during development to help catch warnings and bugs.

= Requirements =
* node v16+
* gulp-cli

= Instructions =
1. Clone the wp-add-css-capability repo into your local development environment, within your WordPress installation's `plugins/` directory: `git clone https://github.com/UCF/wp-add-css-capability.git`
2. `cd` into the new wp-add-css-capability directory, and run `npm install` to install required packages for development into `node_modules/` within the repo
3. Optional: If you'd like to enable [BrowserSync](https://browsersync.io) for local development, or make other changes to this project's default gulp configuration, copy `gulp-config.template.json`, make any desired changes, and save as `gulp-config.json`.

    To enable BrowserSync, set `sync` to `true` and assign `syncTarget` the base URL of a site on your local WordPress instance that will use this plugin, such as `http://localhost/wordpress/my-site/`.  Your `syncTarget` value will vary depending on your local host setup.

    The full list of modifiable config values can be viewed in `gulpfile.js` (see `config` variable).
3. Run `gulp default` to process front-end assets.
4. If you haven't already done so, create a new WordPress site on your development environment to test this plugin against.
5. Activate this plugin on your development WordPress site.

= Other Notes =
* This plugin's README.md file is automatically generated. Please only make modifications to the README.txt file, and make sure the `gulp readme` command has been run before committing README changes.  See the [contributing guidelines](https://github.com/UCF/wp-add-css-capability/blob/master/CONTRIBUTING.md) for more information.


== Contributing ==

Want to submit a bug report or feature request?  Check out our [contributing guidelines](https://github.com/UCF/wp-add-css-capability/blob/master/CONTRIBUTING.md) for more information.  We'd love to hear from you!
