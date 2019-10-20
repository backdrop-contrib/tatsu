# Tatsu
A flexible sub theme of BASIS that allows a site editor or manager to make
maximum color/visual customizations through the user interface. 

We think that there is demand for this kind of theme in the contrib space 
and welcome both feature and design suggestions. Let's make this a community
project. 

Tatsu currently includes Bootstrap css and js files. 

NOTE: We are still early in development and will try to keep things as stabile
as possible, however be prepared for significant changes. 

We found the name Tatsu on a list of good names for Dragons and later 
learned that it is also the name of a roller coaster in California, USA.  

## INSTALLATION

- Install this theme using the official Backdrop CMS instructions at
  https://backdropcms.org/guide/themes
  
### Recommended (to acheive results in screen shot)

- Go to /admin/appearance/list and set Tatsu to default theme

- Experiment with the power of a flexible layout template
  admin/structure/layouts/settings/flexible-template/add
  
Go to /admin/structure/layouts/manage/home  
- Remove "Primary Navigation" block from Header region
- Set "Header" block to use "Primary navigation" menu
- Move "Welcome" block to first Hero region

Other tips
- [Configurable Block Style](https://backdropcms.org/project/configurable_block_style) for custom 
  block styling through the user interface.
  
## ISSUES

Bugs and Feature requests should be reported in the Issue Queue:
https://github.com/backdrop-contrib/tatsu/issues

## CHANGES (from Basis)

* Small changes to hero blocks to make them fit gether nicely.
* Removed the background color from behind the site name.
* Adding some useful css classes that can be added to blocks through UI

### Special CSS Classes 

We included these classes early on as a short cut to acheive results 
that can now be better acheived through use of flexible layout templates 
and the recently released [Configurable Block Style](https://backdropcms.org/project/configurable_block_style) module. 

- hero-large         {height: 600px;}
- hero-medium        {height: 400px;}
- hero-small         {height: 200px;}
- hero-extra-small   {height: 100px;}
- content-narrow     {padding-left: 30%; padding-right: 30%;}
- content-medium     {padding-left: 20%; padding-right: 20%;}
- content-wide       {padding-left: 10%;padding-right: 10%;}
- content-center     {text-align: center;}

(We are open to better naming conventions or recommendations for libraries to use.)

### Recommended Layouts

- Eary version of this theme included a custom layout template. We have removed that 
  from recent versions and recommend using flexible layout templates introduced to
  Backdrop CMS in version 1.14.

## MAINTAINERS

- Tim Erickson (https://github.com/stpaultim).
- Seeking co-maintainers

## CREDITS

- Thanks to Wes Ruvalcaba (https://github.com/wesruv) for 
  all the work he did on Basis along with anyone else who 
  helped with Basis.
  
- Work on Tatsu is support by Triplo LLC (https://www.triplo.co)

## LICENSE

This project is GPL v2 software. See the LICENSE.txt file in this directory for
complete text.
