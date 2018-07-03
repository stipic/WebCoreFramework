# Informacije za razvoj

### Upute za podešavanje

Nakon kloniranja potrebno izvršiti

```
composer install
```

I nakon toga unutar **config.php** dodati naziv trenutnog računala u željeni **env_hostnames** i kreirati unutar **EnvConfig** novi .php file koji odgovara nazivu navedenog računala, isti naziv koji ste dodali pod **env_hostnames** i u njega podesiti svoj vlastiti $config array (po uzoru na zajednički **config.php**).

-----


### Cron Job (cli akcije)

Primjer CLI akcije

```
php index.php user/delete 5
```

I sada će se triggerati endpoint ruta koja je definirana u **endpoints.php** i koja vodi na '/user/delete/{user_id}'

Unutar endpoints.php u kategoriji **$single_routes**, postoji FLAG '**only_cli**' => TRUE, koji zabranjuje javni pristup toj ruti. Pristup je moguć samo i isključivo preko CLI naredbe.

-----

### Pregled templatea - /src/templates

Pokrenuti Symfony server i nakon toga koristiti endpoint /t/{naziv_templatea}
npr. ukoliko pokreneš symfony na **localhost:8000** i napravio si novi template unutar
**/src/templates/NekiDirektorij/neki_template.twig**, dovoljno je upisati u browser http://localhost:8000/neki_template.twig i otvorit će ga.

### Pregled svih dostupnih templatea odnsno screenova - /src/templates

Pokrenuti Symfony server i nakon toga koristiti endpoint /dev/sitemap
npr. ukoliko pokreneš symfony na **localhost:8000**, dovoljno je upisati u browser http://localhost:8000/dev/sitemap i otvorit će listu s linkovima za svaki template.

### Encore WebPack, razvoj frontend-a

Prije svega, trebali bi imati instalirano:

1. Yarn
2. NodeJS (preporuka verzije: 8.9.0)

Yarn:

```
curl -sS https://dl.yarnpkg.com/debian/pubkey.gpg | sudo apt-key add -
echo "deb https://dl.yarnpkg.com/debian/ stable main" | sudo tee /etc/apt/sources.list.d/yarn.list
sudo apt-get update && sudo apt-get install yarn
```
*Ovo je instalacija na Debian/Ubuntu*

NodeJS:

```
node -v
npm install -g n
n 8.9.0
```

Nakon što imamo NodeJs i Yarn spremne pointamo terminal u root direktorij projekta i izvršavamo naredbu:

`yarn install`

On će nam instalirati sve pakete koje smo requireali unutar **package.json**

Kada smo napravili inicijalizaciju, možemo buildati assete, koristimo ove naredbe:


```
yarn run encore dev
```
Ova naredba (yarn run encore dev) builda assete jednom


```
yarn run encore dev --watch
```
Ova naredba (yarn run encore dev --watch) builda assete čim dođe do promjene u kodu (/assets/...)


```
yarn run encore production
```
Ova naredba (yarn run encore production) builda assete ali i minificira i optimizira, ovo je za produkciju.


Sve SCSS i JS fileove držimo unutar /assets/... i tu je sav source kod!