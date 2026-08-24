#!/usr/bin/env bash
#
# Generate stubs from the source directory, one file per plugin.
#

set -ex

# One header per plugin. A single shared header put "Tribe Events Calendar &
# Addons" and a link to evnt.is at the top of the Message Board and
# Knowledgebase stubs, which have nothing to do with either.
header() {
    printf '/**\n * Generated stub declarations for %s.\n * @see %s\n * @see https://github.com/saas786/php-scoper-wp-excludes\n */' "$1" "$2"
}

HEADER_TEC=$(header "The Events Calendar" "https://evnt.is")
HEADER_ET=$(header "Event Tickets" "https://evnt.is")
HEADER_MB=$(header "Message Board" "https://github.com/saas786/message-board")
HEADER_KB=$(header "Knowledgebase" "https://github.com/saas786/saas-knowledgebase")

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
    --header="$HEADER_TEC" \
    --functions \
    --classes \
    --interfaces \
    --traits \
    --out="$FILE"

"$(dirname "$0")/vendor/bin/generate-stubs" \
    --include-inaccessible-class-nodes \
    --force \
    --finder=finder-event-tickets.php \
    --header="$HEADER_ET" \
    --functions \
    --classes \
    --interfaces \
    --traits \
    --out="$FILE_ET"

"$(dirname "$0")/vendor/bin/generate-stubs" \
    --include-inaccessible-class-nodes \
    --force \
    --finder=finder-message-board.php \
    --header="$HEADER_MB" \
    --functions \
    --classes \
    --interfaces \
    --traits \
    --out="$FILE_MB"

"$(dirname "$0")/vendor/bin/generate-stubs" \
    --include-inaccessible-class-nodes \
    --force \
    --finder=finder-knowledgebase.php \
    --header="$HEADER_KB" \
    --functions \
    --classes \
    --interfaces \
    --traits \
    --out="$FILE_KB"

