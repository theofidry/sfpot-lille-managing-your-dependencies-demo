#!/usr/bin/env bash

export INFO_COLOR="\e[34m"
export NO_COLOR="\e[0m"

log() {
    local message=$1;
    echo -en "${INFO_COLOR}${message}${NO_COLOR}\n";
}

set -e

PHPUNIT_FLAGS="--stop-on-failure --testdox"

log "Run Core library tests"
vendor/bin/phpunit $PHPUNIT_FLAGS

log "Run Symfony bridge tests"
vendor-bin/symfony/vendor/phpunit/phpunit/phpunit -c phpunit_symfony.xml.dist $PHPUNIT_FLAGS

log "Run Laravel bridge tests"
vendor-bin/laravel/vendor/phpunit/phpunit/phpunit -c phpunit_laravel.xml.dist $PHPUNIT_FLAGS
