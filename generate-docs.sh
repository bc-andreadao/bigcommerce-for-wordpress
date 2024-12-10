#!/bin/bash

# To run this file, run the command `./generate-docs.sh` in the terminal

# Create a /docs directory if it doesn't exist

if [ ! -d "docs" ]; then
    mkdir -p docs
    echo "Created directory for markdown template inside docs."
else
    echo "Docs directory for markdown template already exists."
fi

# Generate hook documentation in Markdown format using Pronamic WP Documentor
 vendor/bin/wp-documentor parse src --format=markdown --output=docs/hooks.md

# Generate documentation for classes in Markdown format using PHPDocumentor
docker run --rm \
  -v "$PWD:/data" \
  -v "$PWD/vendor/saggre/phpdocumentor-markdown:/phpdoc" \
  phpdoc/phpdoc:3 \
  -d /data/src \
  -t /data/docs \
  --template=/phpdoc/themes/markdown \
  --visibility=public,protected