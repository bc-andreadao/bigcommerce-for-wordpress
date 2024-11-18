#!/bin/bash

# To run this file, ./generate-docs.sh 

# Check if docs directory exists, and create it if not
if [ ! -d "docs/default" ]; then
    mkdir -p docs/default
    echo "Created directory for default template inside docs."
else
    echo "Docs directory for default template already exists."
fi

if [ ! -d "docs/markdown" ]; then
    mkdir -p docs/markdown
    echo "Created directory for markdown template inside docs."
else
    echo "Docs directory for markdown template already exists."
fi

# Generate documentation in default format
 vendor/bin/wp-documentor parse test --format=default --output=docs/default/hooks.md

# Generate documentation in Markdown format
 vendor/bin/wp-documentor parse test --format=markdown --output=docs/markdown/hooks.md