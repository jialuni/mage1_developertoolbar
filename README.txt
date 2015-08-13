
Magento 1.x Developer Toolbar
===============================

Profiler (version, queries, layouts...) and block inspector

Based on a fork of Wee/DeveloperToolbar, enhanced by ECA


Installation
-------------------------------

1. Copy all theses files, except README.txt, in you magento project directory.

2. If you use git, add this to your projet .gitignore file :

# Dev debug
index.php
/app/code/local/Varien
/app/code/local/Varien/Profiler.php
# Dev toolbar module
/app/code/local/Wee/DeveloperToolbar/
/app/etc/modules/Wee_DeveloperToolbar.xml
wee_developertoolbar/

3. If you don't use the default/default theme, move app/design/frontend/* and skin/frontend/* files in your current theme
4. Uncomment (or add) in /index.php : Varien_Profiler::enable();
5. In the magento backend, in the top left corner, select the Store View you want to debug, then enable options in Advanced > Developer
6. Clear cache (in magento backend, or : rm -r var/cache)
