# Generate The Library From YAML

We've cached a copy of the swagger.yaml to avoid annoying their API so you can do something like this.

```sh
docker run --rm -v "$(pwd):/local" openapitools/openapi-generator-cli generate \
    --input-spec /local/swagger-3.0.0.json \
    --config /local/generate/config.yaml \
    --generator-name php-nextgen \
    --git-user-id synergitech \
    --git-repo-id cinolla-php \
    --global-property apiTests=false,modelTests=false \
    --output /local
```
