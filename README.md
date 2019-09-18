![alt text](https://github.com/ignitedcms/ignitedcms-pro/raw/master/img/ig.png "Logo Title Text 1")

Tested on PHP version 5.6 - 7.0.8


IgnitedCMS Pro is a content management system (CMS) that’s blends the power of codeigniter to create a dynamic content management system. The beauty is in its simplicity. Specifically targeted for developers and front end designers it allows the ultimate in customisation. 


## Installation

1. Download and extract main folder
2. Optional: Rename ignitedcms-pro-master to ignitedcms-pro
3. Move this folder to your localhost environment
4. Point your webbrowser to http://localhost/ignitedcms-pro and install 
5. That's it!
6. Uses Codeigniter 3.0

### Available fields

| Fields        | 
| ------------- |
| Text     | 
| Text Boxes     | 
| Select dropdowns | 
| Check Boxes |
|File Uploads|
| Colour Picker|
|Rich Text boxes|
| Date select |
|Switches

### Folder Structure
At first glance the sheer number of files and folder can seem daunting, but don't worry, there are only two real places you will be spending most of your time inside. The template directory which is under: 
```
application > views > custom
```
and possibly the custom controller directory which is under: 
```
application > controllers > custom
```
This is where you might write your own custom controllers to communicate with a new table in the database. 

The place where all your uploads are stored is contained within the folder: 
```
assets > uploads
```
You shouln't need to touch any other files, as the ignitedCMS engine does everything else
