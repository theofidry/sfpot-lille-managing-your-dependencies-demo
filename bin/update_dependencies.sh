#!/usr/bin/env bash

set -e

if [ -n "$SYMFONY_VERSION" ]; then
    composer bin symfony require --dev --no-update "symfony/framework-bundle:${SYMFONY_VERSION}"
elif [ -n "$LARAVEL_VERSION" ]; then
    composer bin laravel require --dev --no-update "laravel/framework:${LARAVEL_VERSION}"
fi;
