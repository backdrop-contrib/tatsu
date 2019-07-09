# Tatsu
A flexible sub theme of BASIS (theme provided by core).

The purpose of this theme is to create a simple and flexible 
theme in the contrib space (based on Basis) in ways that make it easier for 
users to modify an out of the box theme through the UI. 

We think that there is demand for this kind of theme in the contrib space 
and welcome both feature and design suggestions.

NOTE: We are still early in development and will try to keep things as stabile
as possible, however be prepared for changes. 

We found the name Tatsu on a list of good names for Dragons and later 
learned that it is also the name of a roller coaster in California, USA.  

## INSTALLATION

- Install this theme using the official Backdrop CMS instructions at
  https://backdropcms.org/guide/themes
  
### Recommended (as reflected in screenshot)

- Go to /admin/appearance/list and set Tatsu to default theme

To get benefits of color module support for multiple hero regions
enable tatsu_hero layout
- Move from: /themes/tatsu/tatsu_hero 
- Move to:   /layouts/tatsu_hero
  
Go to /admin/structure/layouts/manage/home  
- Remove "Primary Navigation" block from Header region
- Set "Header" block to use "Primary navigation" menu
- Move "Welcome" block to first Hero region

Other tips
- To center content in hero regions add "container" class to region
  
## ISSUES

Bugs and Feature requests should be reported in the Issue Queue:
https://github.com/backdrop-contrib/tatsu/issues

## CHANGES / FEATURES

* Small changes to hero blocks to make them fit gether nicely.
* Removed the background color from behind the site name.
* Adding some useful css classes that can be added to blocks through UI

### Special CSS Classes

- hero-large         {height: 600px;}
- hero-medium        {height: 400px;}
- hero-small         {height: 200px;}
- hero-extra-small   {height: 100px;}
- content-narrow     {padding-left: 30%; padding-right: 30%;}
- content-medium     {padding-left: 20%; padding-right: 20%;}
- content-wide       {padding-left: 10%;padding-right: 10%;}
- content-center     {text-align: center;}

(We are open to better naming conventions or recommendations for libraries to use.)

### Recommended Layouts (included in theme)

- Tatsu Hero (front page)
  Provided as part of theme, but must be moved to layouts directory

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
