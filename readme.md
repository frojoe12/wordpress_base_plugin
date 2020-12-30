# Wordpress Plugin template with Composer, namespacing and classes


important notes for composer usage:

if changing the composer.json autoload

eg

"autoload": {
        "psr-4": {"Inc\\": "./inc"}
    }

to

"autoload": {
        "psr-4": {"Main\\": "./main"}
    }

run: composer dump-autoload    

to regenerate autoload files