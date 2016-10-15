#!/usr/bin/env bash

# Setup
set -e

export INFO_COLOR="\e[34m"
export NO_COLOR="\e[0m"

log() {
    local message=$1
    echo -en "${INFO_COLOR}${message}${NO_COLOR}\n"
}

if [ -z "$PHPUNIT_FLAGS" ]; then
    PHPUNIT_FLAGS="--stop-on-failure --testdox"
fi

if [ -n "$COVERAGE" ]; then
    PHPUNIT="phpdbg -qrr"
fi


# Run tests
if [ -z "$SYMFONY_VERSION"] && [ -z "$LARAVEL_VERSION" ]; then
    log "Run Core library tests"
    $PHPUNIT vendor/bin/phpunit $PHPUNIT_FLAGS
fi;

if [ -z "$LARAVEL_VERSION"]; then
    log "Run Symfony bridge tests"
    $PHPUNIT vendor-bin/symfony/vendor/phpunit/phpunit/phpunit -c phpunit_symfony.xml.dist $PHPUNIT_FLAGS
fi;

if [ -z "$SYMFONY_VERSION"]; then
    log "Run Laravel bridge tests"
    $PHPUNIT vendor-bin/laravel/vendor/phpunit/phpunit/phpunit -c phpunit_laravel.xml.dist $PHPUNIT_FLAGS
fi;
