#!/bin/sh

# Update repository description
curl -X PATCH \
  https://api.github.com/repos/${GITHUB_REPOSITORY}/ \
  -H 'Authorization: Bearer ${GITHUB_TOKEN}' \
  -H 'Content-Type: application/json' \
  -d '{"description": "New description"}'
