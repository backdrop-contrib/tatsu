<img src="https://raw.githubusercontent.com/backdrop-contrib/tatsu/1.x-2.x/images/tatsu.png" alt="Tatsu the Dragon" align="right" width="150" height="150">

# Tatsu
A flexible theme derived from the BASIS theme that allows a site editor or manager to make maximum color/visual customizations through the user interface. 

The latest release is 1.x-2.x, which completely removes the dependency on the BASIS theme.  

We will continue to support Version 1.x-1.x was a sub-theme of Basis, but no new features will be added to that version.  

We think that there is demand for this kind of theme in the contrib space and welcome both feature and design suggestions. Let's make this a community project. 

Tatsu currently includes Bootstrap css and js files. Version 1.x-2.x also includes a UI for supplemental CSS changes, based on the Color module.

We found the name Tatsu on a list of good names for Dragons and later 
learned that it is also the name of a roller coaster in California, USA.  

## INSTALLATION

- Install this theme using the official Backdrop CMS instructions at
  https://backdropcms.org/guide/themes
  
### Recommended (to acheive results in screen shot)

- Go to /admin/appearance/list and set Tatsu to default theme
- Experiment with the power of a flexible layout template admin/structure/layouts/settings/flexible-template/add
  
Go to /admin/structure/layouts/manage/home  
- Remove "Primary Navigation" block from Header region
- Set "Header" block to use "Primary navigation" menu
- Move "Welcome" block to first Hero region

Other tips
- [Configurable Block Style](https://backdropcms.org/project/configurable_block_style) for custom block styling through the user interface.
- Color Module - enable the color module, which gives a UI for changing the theme colors without commiting any code.  
  
## VERSION 1.x-2.x CHANGES

- Menu Dropdown Arrow appears as small dot 
  https://github.com/backdrop-contrib/tatsu/issues/61
- Create a logo for Tatsu 
  https://github.com/backdrop-contrib/tatsu/issues/38
- Front page with new content type 
  https://github.com/backdrop-contrib/tatsu/issues/63
- Need to remove border bottom from first item primary menu.
  https://github.com/backdrop-contrib/tatsu/issues/65
- Add new updated screenshot, and update README.md for latest 1.2 release
  https://github.com/backdrop-contrib/tatsu/issues/69
- Removed dependency on Basis. 
  https://github.com/backdrop-contrib/tatsu/issues/50
- Adding UI for adding custom CSS rules
  https://github.com/backdrop-contrib/tatsu/issues/54
- Removed color module support for special hero blocks which are
  no longer needed.
- Adding support for Config Recipes
  https://github.com/backdrop-contrib/config_recipes
- Adding support for Utility CSS module
  https://backdropcms.org/project/utlility_css
  
## ISSUES

Bugs and Feature requests should be reported in the Issue Queue:
https://github.com/backdrop-contrib/tatsu/issues

## CHANGES (from Basis)

* Small changes to hero blocks to make them fit gether nicely.
* Removed the background color from behind the site name.
* Adding some useful css classes that can be added to blocks through UI
  
## Configuration Recipes

We are also creating a library of configuration recipes that should work well with this theme. 
https://github.com/backdrop-contrib/config_recipes

## MAINTAINERS

- Tim Erickson (https://github.com/stpaultim).
- Wilbur Ince (https://github.com/Wylbur).
- Seeking co-maintainers


## CREDITS

- Thanks to Wes Ruvalcaba (https://github.com/wesruv) for all the work he did on the BASIS theme along with anyone else who helped with BASIS.
  
- Work on Tatsu is support by Triplo LLC (https://www.triplo.co)

- Thanks to everyone that has worked on the Zen Theme for Drupal.  We have been inspired by your work and borrowed as heavily as possible from your ideas and documentation.

## LICENSE

This project is GPL v2 software. See the LICENSE.txt file in this directory for complete text.
