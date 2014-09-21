# Require any additional compass plugins here.
add_import_path "bower_components/foundation/scss"

# To enable relative paths to assets via compass helper functions. Uncomment:
relative_assets     =   true

# Set this to the root of your project when deployed
# Relative path to assets used when relative_assets == true ...
css_dir             =   "stylesheets"
sass_dir            =   "scss"
images_dir          =   "gfx"
javascripts_dir     =   "js"
fonts_dir           =   "fonts"

## otherwise load from absolute path:
http_path           =   "http://beta.kozminski.edu.pl/fileadmin/templates/fundacjakozminski/"
http_images_dir     =   "gfx/"
http_images_fonts   =   "fonts/"
http_images_js      =   "js/"


# You can select your preferred output style here (can be overridden via the command line):
# output_style      =   :expanded or :nested or :compact or :compressed

# To disable debugging comments that display the original location of your selectors. Uncomment:
# line_comments     =   false

# If you prefer the indented syntax, you might want to regenerate this
# project again passing --syntax sass, or you can uncomment this:
# preferred_syntax = :sass
# and then run:
# sass-convert -R --from scss --to sass sass scss && rm -rf sass && mv scss sass
disable_warnings = true
