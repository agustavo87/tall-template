# TALL Template
Simple Tailwind, Alpine.js, Laravel, Livewire boilerplate.

Also:
- SQLite DB preconfigured and pre-migrated.
- Assets compiled


## Instalación
Para instalar por ej. en el directorio _tall-blog_ se puede usar composer dle siguiente modo
```bash
composer create-project agustavo87/tall-template --repository "{\"type\":\"vcs\", \"url\":\"https://github.com/agustavo87/tall-template.git\"}" -s dev --remove-vcs tall-blog

cd tall-blog

php artisan serve
```

Ready to code. Also it can be launched with npm watching changes in the assets:
```bash
npm install
npm run watch
```
