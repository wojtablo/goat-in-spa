# Responsive Single Page Website build with TYPO3 CMS & Zurb Foundation 5 (front-end framework)

![alt tag](http://whatatimeline.com/covers/1345928591dea/one-small-step-for-man-one-giant-leap-for-mankind-facebook-cover.jpg)

## Requirements to edit and compile project

  * Ruby 1.9+
  * [compass](http://compass-style.org/): `gem install compass`
  * [sass](http://sass-lang.com/): v.3.3+
  * [bower](http://bower.io): `npm install bower -g`
  & [apache]: or another local server

## Requirements to run project in TYPO3

  * TYPO3 v. 6.x.x
  * Extension: TemplaVoila
  * Extension: tt_news
  * Extension: the_crew
  * Extension: status
  * Extension: DirectMail


## Quickstart

  * Download GIT repository
  * Run `bower install` to install the latest version of project's components
  
Then when you're working on your project, just run the following command:

```bash
compass watch
```

You can change Compass compilator settings in file config.rb

## Upgrading

If you'd like to upgrade to a newer version of Foundation down the road just run:

```bash
bower update
```
