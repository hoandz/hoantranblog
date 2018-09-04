#!/usr/bin/env bash
HOME_DIR="/app"
cd "${HOME_DIR}"

if [ ! -d "${HOME_DIR}/node_modules" ]; then
  npm install
fi

npm run watch