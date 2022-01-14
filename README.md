Esame:
La startup Treebù vuole creare un catalogo nazionale delle terre incolte chiamato "Banca della Terra".
La piattaforma dovrà permettere ad ogni proprietario di inserire, visionare e modificare le informazioni dei terreni agricoli
In particolare:
1 Comune di appartenenza
2 Foto area (url web)
3 Dimensioni in ettari
4 Foglio catastale (stringa)
5 Mappale catastale (stringa)
6 Parcella catastale (stringa)
7 Tipologia di terreno(con scelta multipla):
-argilloso
-sabbioso
-ghiaioso
-tufo

8 Tipologia di irrigazione(con scelta multipla):
-a scorrimento
-pozzo
-canale
-senz'acqua

9 Tipo di offerta (con scelta multipla):
-vendita
-affitto
-affido gratuito

10 Canone offeta(costo affido/vendita)
11 Disponibile da subito

Installazione:
Nella cartella client, fare i comandi
- npm install
- npm run serve
- 
Nellla cartella server, modificare il file '.env' inserendo il nome del database creato su xampp, poi fare i comandi:
- composer update
- php artisan migrate
- php artisan serve
