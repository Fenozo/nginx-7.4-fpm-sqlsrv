#!/bin/bash

git pull
docker compose up -d
docker exec -it  programwithgio-nginx74 sh