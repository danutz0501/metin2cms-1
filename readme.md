Metin2CMS
=========

Metin2CMS is an opensource cms made for Metin2. In the future I'll consider offering support for other online games.

The main feautures that will include:
  - Enterprise quality code
  - Plugin support (via our site)
  - Themes support (via our site)
  - Assets compress
  - Smart installer
  - Database seeders with fake data for testing
  - Billing
  - Avanced admin panel
  - Cache support via memcached / apc / filebased 
  - Future integration with other games

Workflow
----
Commit to master branch until we release a version 1.0.0 stable branch, then we'll move to develop branch.

Version
----

No version bump.


Installation
--------------

```sh
git clone https://github.com/ionutxp/metin2cms.git metin2cms
cd metin2cms
composer update
php artisan dump-autoload
# vi config/local/database.php
# Add your machine hostname to boostrap/start.php
```

License
----
```txt
Metin2CMS
Copyright (C) 2014  Ionut Milica

This program is free software; you can redistribute it and/or modify it under the terms of
the GNU General Public License as published by the Free Software Foundation; either
version 3 of the License, or any later version.

This program is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY;
without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
See the GNU General Public License for more details.

You should have received a copy of the GNU General Public License along with this program;
if not, see <http://www.gnu.org/licenses/>.
```