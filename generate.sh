#!/usr/bin/env bash
#
# Generate Tribe Events Calendar & Addons stubs from the source directory.
#

set -ex

HEADER=$'/**\n * Generated stub declarations for Tribe Events Calendar & Addons.\n * @see https://evnt.is\n * @see https://github.com/saas786/php-scoper-wp-excludes\n */'

FILE="stubs/the-events-calendar-stubs.php"
FILE_ET="stubs/event-tickets-stubs.php"
FILE_MB="stubs/message-board-stubs.php"
FILE_KB="stubs/knowledgebase-stubs.php"

# Only proceed if these files / folders exists
# test -f "$FILE"
# test -f "$FILE_ET"
test -d "source/vendor/the-events-calendar"
test -d "source/vendor/event-tickets"
test -d "source/vendor/message-board"
test -d "source/vendor/knowledgebase"

"$(dirname "$0")/vendor/bin/generate-stubs" \
    --include-inaccessible-class-nodes \
    --force \
    --finder=finder-the-events-calendar.php \
    --header="$HEADER" \
    --functions \
    --classes \
    --interfaces \
    --traits \
    --out="$FILE"

"$(dirname "$0")/vendor/bin/generate-stubs" \
    --include-inaccessible-class-nodes \
    --force \
    --finder=finder-event-tickets.php \
    --header="$HEADER" \
    --functions \
    --classes \
    --interfaces \
    --traits \
    --out="$FILE_ET"

"$(dirname "$0")/vendor/bin/generate-stubs" \
    --include-inaccessible-class-nodes \
    --force \
    --finder=finder-message-board.php \
    --header="$HEADER" \
    --functions \
    --classes \
    --interfaces \
    --traits \
    --out="$FILE_MB"

"$(dirname "$0")/vendor/bin/generate-stubs" \
    --include-inaccessible-class-nodes \
    --force \
    --finder=finder-knowledgebase.php \
    --header="$HEADER" \
    --functions \
    --classes \
    --interfaces \
    --traits \
    --out="$FILE_KB"

