#!/bin/zsh
# usage: dev/serve.sh free|pro
cd "$(dirname $0)/.."
pkill -f "@wp-playground/[c]li" ; sleep 2
BP=dev/blueprint.json; [ "$1" = pro ] && BP=dev/blueprint-pro.json
exec npx -y @wp-playground/cli@latest server --port=9400 \
  --mount-before-install="$PWD:/wordpress/wp-content/themes/unhurried" \
  --mount-before-install="$HOME/Desktop/unhurried-pro:/wordpress/wp-content/themes/unhurried-pro" \
  --blueprint=$BP
