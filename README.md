# Veikals (PHP MVC project)

## Funkcionalitāte
- Klientu saraksts
- Pasūtījumu glabāšana
- Klienti + pasūtījumi (hierarhija)
- MVC struktūra
- .env konfigurācija

## Routes
- /customers
- /customers?with-orders=full

## Struktūra
public/ → entry point
src/controllers → kontrolieri
src/models → biznesa loģika
src/views → HTML
db → SQL + DB
config.php + .env → konfigurācija

## Uzstādīšana
1. Importēt db/schema.sql
2. Izveidot .env failu
3. php -S localhost:8000 -t public