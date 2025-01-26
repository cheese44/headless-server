<p align="center">
  <a href="https://roots.io/bedrock/">
    <img alt="Bedrock" src="https://cdn.roots.io/app/uploads/logo-bedrock.svg" height="100">
  </a>
</p>

<p align="center">
  <a href="LICENSE.md">
    <img alt="MIT License" src="https://img.shields.io/github/license/roots/bedrock?color=%23525ddc&style=flat-square" />
  </a>

  <a href="https://packagist.org/packages/roots/bedrock">
    <img alt="Packagist" src="https://img.shields.io/packagist/v/roots/bedrock.svg?style=flat-square" />
  </a>

  <a href="https://github.com/roots/bedrock/actions/workflows/ci.yml">
    <img alt="Build Status" src="https://img.shields.io/github/workflow/status/roots/bedrock/CI?style=flat-square" />
  </a>

  <a href="https://twitter.com/rootswp">
    <img alt="Follow Roots" src="https://img.shields.io/twitter/follow/rootswp.svg?style=flat-square&color=1da1f2" />
  </a>
</p>

<p align="center">
  <strong>A modern WordPress stack</strong>
</p>

<p align="center">
  <a href="https://roots.io/"><strong><code>Website</code></strong></a> &nbsp;&nbsp; <a href="https://docs.roots.io/bedrock/master/installation/"><strong><code>Documentation</code></strong></a> &nbsp;&nbsp; <a href="https://github.com/roots/bedrock/releases"><strong><code>Releases</code></strong></a> &nbsp;&nbsp; <a href="https://discourse.roots.io/"><strong><code>Support</code></strong></a>
</p>

## Sponsors

**Bedrock** is an open source project and completely free to use.

However, the amount of effort needed to maintain and develop new features and products within the Roots ecosystem is not sustainable without proper financial backing. If you have the capability, please consider [sponsoring Roots](https://github.com/sponsors/roots).

<p align="center"><a href="https://github.com/sponsors/roots"><img height="32" src="https://img.shields.io/badge/sponsor%20roots-525ddc?logo=github&logoColor=ffffff&message=" alt="Sponsor Roots"></a></p>

<div align="center">
<a href="https://k-m.com/"><img src="https://cdn.roots.io/app/uploads/km-digital.svg" alt="KM Digital" width="148" height="111"></a> <a href="https://carrot.com/"><img src="https://cdn.roots.io/app/uploads/carrot.svg" alt="Carrot" width="148" height="111"></a> <a href="https://wordpress.com/"><img src="https://cdn.roots.io/app/uploads/wordpress.svg" alt="WordPress.com" width="148" height="111"></a> <a href="https://pantheon.io/"><img src="https://cdn.roots.io/app/uploads/pantheon.svg" alt="Pantheon" width="148" height="111"></a>
</div>

## Overview

Bedrock is a modern WordPress stack that helps you get started with the best development tools and project structure.

Much of the philosophy behind Bedrock is inspired by the [Twelve-Factor App](http://12factor.net/) methodology including the [WordPress specific version](https://roots.io/twelve-factor-wordpress/).

## Features

- Better folder structure
- Dependency management with [Composer](https://getcomposer.org)
- Easy WordPress configuration with environment specific files
- Environment variables with [Dotenv](https://github.com/vlucas/phpdotenv)
- Autoloader for mu-plugins (use regular plugins as mu-plugins)
- Enhanced security (separated web root and secure passwords with [wp-password-bcrypt](https://github.com/roots/wp-password-bcrypt))

## Requirements

- PHP >= 7.4
- Composer - [Install](https://getcomposer.org/doc/00-intro.md#installation-linux-unix-osx)

## Installation

1. Create a new project:
   ```sh
   $ composer create-project roots/bedrock
   ```
   By default, this installs the `dist` version of all dependent packages.  To install the `source` versions instead, update `composer.json` as follows:
   ```json
    "preferred-install": {
      "roots/wordpress-no-content": "dist",
      "*": "source"
    },
   ```
2. Update environment variables in the `.env` file. Wrap values that may contain non-alphanumeric characters with quotes, or they may be incorrectly parsed.

- Database variables
  - `DB_NAME` - Database name
  - `DB_USER` - Database user
  - `DB_PASSWORD` - Database password
  - `DB_HOST` - Database host
  - Optionally, you can define `DATABASE_URL` for using a DSN instead of using the variables above (e.g. `mysql://user:password@127.0.0.1:3306/db_name`)
- `WP_ENV` - Set to environment (`development`, `staging`, `production`)
- `WP_HOME` - Full URL to WordPress home (https://example.com)
- `WP_SITEURL` - Full URL to WordPress including subdirectory (https://example.com/wp)
- `AUTH_KEY`, `SECURE_AUTH_KEY`, `LOGGED_IN_KEY`, `NONCE_KEY`, `AUTH_SALT`, `SECURE_AUTH_SALT`, `LOGGED_IN_SALT`, `NONCE_SALT`
  - Generate with [wp-cli-dotenv-command](https://github.com/aaemnnosttv/wp-cli-dotenv-command)
  - Generate with [our WordPress salts generator](https://roots.io/salts.html)

3. Add theme(s) in `web/app/themes/` as you would for a normal WordPress site
4. Set the document root on your webserver to Bedrock's `web` folder: `/path/to/site/web/`
5. Access WordPress admin at `https://example.com/wp/wp-admin/`

## Community

Keep track of development and community news.

- Join us on Discord by [sponsoring us on GitHub](https://github.com/sponsors/roots)
- Participate on the [Roots Discourse](https://discourse.roots.io/)
- Follow [@rootswp on Twitter](https://twitter.com/rootswp)
- Read and subscribe to the [Roots Blog](https://roots.io/blog/)
- Subscribe to the [Roots Newsletter](https://roots.io/subscribe/)
# Journal of a Mad Adventurer

Setup a new environment made for CMS.

**Provide a pipeline deploying your code and building your environment.**
Da deployment involviert ist: Muss ich einen Server bereitstellen?

**Write an automated test as part of the continues delivery pipeline which ensures that the backend is properly installed and running.**

**Ensure your environment is able to serve different branches of your repository branch1.local.com, branch2.local.com and for each branch the ability to serve a different database.**

**Boot and compile your frontend headless from local continues delivery with a frontend framework you are familiar with and compatible with tailwind.**

Create a simple application serving a blog from the backend. A blog has a menu, showing the categories, each category is showing the blog posts which are assigned to this category and each blog post provides a comment functionality and displays as well more interesting other blog entries from same category. Provide a unit test for your crucial functionality. Feel free to use AI, Codegen, Cursor, Copilot. To accomplish provide access to the bitbucket or github repository.



Ist mit "continues delivery" "continuous delivery" gemeint?

**Provide a pipeline deploying your code and building your environment.**
Da deployment involviert ist: Muss ich einen Server bereitstellen?

**Create a simple application serving a blog from the backend. A blog has a menu, showing the categories, each category is showing the blog posts which are assigned to this category and each blog post provides a comment functionality and displays as well more interesting other blog entries from same category.**
Kann für das Backend Wordpress verwendet werden oder verfehlt das die Challenge? Wordpress
stellt die meiste Funktionalität bereits zur Verfügung und hat eine REST-Api, kann also Headless
verwendet werden.
