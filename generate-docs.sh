#!/bin/bash

# To run this file, ./generate-docs.sh 

# Check if docs directory exists, and create it if not

if [ ! -d "docs" ]; then
    mkdir -p docs
    echo "Created directory for markdown template inside docs."
else
    echo "Docs directory for markdown template already exists."
fi

# Generate documentation in Markdown format
 vendor/bin/wp-documentor parse test/bigcommerce --format=markdown --output=docs/bigcommerce-hooks.md