# ebre-escool ng

[![StyleCI](https://styleci.io/repos/56324538/shield?style=flat)](https://styleci.io/repos/56324538) [![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/INSEBRE/ebre-escool-ng/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/INSEBRE/ebre-escool-ng/?branch=master) [![Build Status](https://travis-ci.org/INSEBRE/ebre-escool-ng.svg?branch=master)](https://travis-ci.org/INSEBRE/ebre-escool-ng) [![Coverage Status](https://coveralls.io/repos/github/INSEBRE/ebre-escool-ng/badge.svg?branch=master)](https://coveralls.io/github/INSEBRE/ebre-escool-ng?branch=master)

Crèdit de Síntesi (Paolo Dàvila Bazalar - Roger Melich Curto).

ebre-escool ng és una aplicació de gestió de centres d'ensenyament. Centre Pilot [Institut de l'Ebre](http://www.iesebre.com).

## Presentació del Projecte ##
[Presentació](http://insebre.github.io/ebre-escool-ng-presentation)

## Funcionalitats ##
1. **Gestió de dades personals a alumnes, professors,...:** La gestió de les dades personals es realitza amb un wizard per tal de anar posant informació.
2. **Landing Page:** Disposa de una pàgina de informació del producte, tant com enllaços i/o informació del centre, com plans d'estudi, Xarxes Socials ...
3. **Autenticació:** Autenticació mitjançant email(centre/privat) i/o username del centre , també hi ha possibilitat de inci de sessió mitjançant les Xarxes Socials.
4. **Panell de Control:** L'Aplicació consta de un panell de control(Dashboard), per tal de veure-hi dades del centre com número d'alumnes, alumnes per cicles, ...
5. **Manteniment de dades del Centre:**
   * **Funcions Autenticació:**
        * **Remember Me a Login:** Opció Recordam, el navegador guarda la informació del Login.
        * **Validació email:** Permetre enviar codi de validació, per tal de fer login.
    * **Idiomes:** Suport d'idiomes.
    * **Gravatar:** Support per obtenir la foto de l'alumne.
    * **Estadístiques:** Oferir informació a temps real el que passa a l'aplicació.
    * **Mailing list:** Tenir un mailing list per tal de obtenir els correus dels alumnes, per tal de gestionar-ho el Centre.
    * **CRUD Usuaris** Fer operacions CRUD als usuaris (Afegir, Llegir, Actualitzar i Eliminar), més de canvi de paraula de pas, genera un de nova paraula de pas, cercador d'usuaris, CRUD Rols, Permisos i Usuaris.
    * **Perfil:** Reset de la paraula de pas, verificació del email, reenviar email.
    * **Menú:** Menu dinàmic.
    * **API** Base de codi Aprofitable.
    * **Wizard:** Wizard de Matricula i Creació de Usuari.

## Requeriments ##
* Apache: $ sudo apt-get install apache2
* Mysql: $ sudo apt-get install mysql-server
* PHP5: $ sudo apt-get install php5

## Instal·lació ##
* Instal·lació framework laravel: [http://acacha.org/mediawiki/Laravel](http://acacha.org/mediawiki/Laravel)
* Descarregar el codi font a: [https://github.com/INSEBRE/ebre-escool-ng](https://github.com/INSEBRE/ebre-escool-ng)
    * Clonar el Repository:

            $ git clone git@github.com:INSEBRE/ebre-escool-ng.git && cd ebre-escool-ng
* Instal·lació de paquets de tercers:

           $ composer install
     Actualitzar Paquets:

            $ composer update

* Modificar .env per canviar configuració de la base de dades.

## Colaboradors ##
* **Paolo Dàvila:**[https://github.com/pdavila13](https://github.com/pdavila13)
* **Roger Melich:**[https://github.com/rogermelich](https://github.com/rogermelich)
