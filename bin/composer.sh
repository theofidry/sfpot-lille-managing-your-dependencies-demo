#!/usr/bin/env bash

# From https://github.com/travis-ci/travis-ci/issues/5780#issuecomment-196308406
set -e
XDEBUG_INI="/home/travis/.phpenv/versions/$(phpenv version-name)/etc/conf.d/xdebug.ini"

if [ ! -f "$XDEBUG_INI" ]; then
    return
fi

function composer()
{
  mv $XDEBUG_INI ~/xdebug.ini
  COMPOSER="$(which composer)"
  $COMPOSER "$@"
  STATUS=$?
  mv ~/xdebug.ini $XDEBUG_INI

  return $STATUS
}
