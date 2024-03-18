#!/usr/bin/env bash

set -ex

composer --working-dir=source/ update -W --no-interaction --no-dev

# Generate stubs
echo "Generating stubs ..."
bash ./generate.sh

# Generate excludes
echo "Generating excludes ..."
php vendor/bin/generate-excludes --json --exclude-empty
