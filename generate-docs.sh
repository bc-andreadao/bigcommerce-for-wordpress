#!/bin/bash

# To run this file, ./generate-docs.sh 

# Check if docs directory exists, and create it if not

if [ ! -d "docs" ]; then
    mkdir -p docs
    echo "Created directory for markdown template inside docs."
else
    echo "Docs directory for markdown template already exists."
fi

# Generate hook documentation in Markdown format
 vendor/bin/wp-documentor parse test --format=markdown --output=docs/hooks.md

# Generate documentation for classes in Markdown format
 docker run --rm -v "$(pwd):/data" -v "/Users/andrea.dao/Documents/devFolder/phpDocumentor-markdown:/phpdoc" phpdoc/phpdoc:3 -d /data/test -t /data/docs --template=/phpdoc/themes/markdown