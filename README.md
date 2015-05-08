Kickoff
===

Kickoff is a fork of Automattic's [_s](https://github.com/Automattic/_s) WordPress starter theme that includes Gulp. 

# Pre-Installation

Basic knowledge of the command line and the following dependencies are required to use kickoff:

- Node ([http://nodejs.org/](http://nodejs.org/)) -`npm install`
- Gulp ([http://gulpjs.com/](http://gulpjs.com/)) - `npm install --global gulp`


## Manual Installation

##### 1) Navigate to the /themes folder of your project
`cd /your-project/wordpress/wp-content/themes`

##### 2) Clone

`git clone https://github.com/braginteractive/kickoff.git`

##### 3) Find & Replace

You'll need to change all instances of the names: `kickoff` to your project name.

- Search for: `'kickoff'` and replace with: `'project-name'` (inside single quotations) to capture the text domain
- Search for: `kickoff_` and replace with: `project-name_` to capture all the function names
- Search for: `Text Domain: kickoff` and replace with: `Text Domain: project-name` in style.css
- Search for (and include the leading space): <code>&nbsp;kickoff</code> and replace with: <code>&nbsp;Project Name</code>(with a space before it) to capture DocBlocks
- Search for: `kickoff-` and replace with: `project-name-` to capture prefixed handles

##### 4) Install Grunt and Dependencies
- Run `npm install && bower install` from the command line to install Grunt and pull down any dependencies via Bower.

That's it! Now you can begin using Grunt.

# Usage
After you've installed kickoff, and run `npm install` and `npm install --save-dev gulp` from the command line you can start using gulp.

## Gulp

##### 1) Navigate to your new theme
`cd /your-project/wordpress/wp-content/themes/your-new-theme`

##### 2) Gulp tasks available:

`gulp` - Automatically handle changes to CSS, javascript, and image optimization. Also Livereload!

`gulp scripts` - Concatenate and minify javascript files

`gulp sass` - Compile, prefix, and minify CSS files