BUILD A THEME WITH TATSU
------------------------

Tatsu is already a sub-theme of Basis and in theory you can simply rename TATSU 
and begin to edit the files and customize them to your needs. However, we 
recommend that you create a sub-theme of Tatsu. That way, it will be possible 
to get updates future updates to Tatsu should we add any features or fix 
any bugs. 


CREATING A SUB-THEME
--------------------

At this stage, the only supported way to create a sub-theme will be the 
following manual steps. 

NOTE: Everywhere you see the word STARTERKIT, be sure to change the name to
the name of your new sub-theme. You need to be consistent in spelling and 
capitalization. We will list all of the places you need to do this below. 
You should also be able to use a search and replace feature in your text 
editor or IDE.

IMPORTANT: The name of your sub-theme must start with an alphabetic character 
and can only contain lowercase letters, numbers and underscores.

Please, be sure to review the official Backdrop CMS documentation for creating
a sub-theme at: 

https://api.backdropcms.org/documentation/creating-sub-themes

1) Copy the STARTERKIT directory from Tatsu directly into your themes directory
and change the name to whatever you would like to call your new sub-theme. 
Tatsu should already be in your themes directory, so you just need to remove 
this directory from Tatsu. 

2) Remove ".txt" from "STARTERKIT.info.txt" and rename the file.

3) Set your website's default theme.
   
Log in as an administrator on your Backdrop CMS site, go to the Appearance 
page at admin/appearance and click the "Enable and set default" link next 
to your new sub-theme.


