# PHP Dischi JSON

## Descrizione

Questo progetto è una web app che visualizza una collezione di album musicali. Gli utenti possono visualizzare dettagli sugli album cliccando sulle card che rappresentano ciascun disco. Al click, la card si gira mostrando una descrizione dettagliata dell'album sul retro.

## Funzionalità

- **Visualizzazione dinamica degli album**: L'applicazione carica e mostra dinamicamente i dischi da un file JSON.
- **Animazione flip card**: Ogni card con i dettagli dell'album può essere cliccata per rivelare ulteriori informazioni sul retro della card.
- **Design responsivo**: L'interfaccia utente è completamente responsiva e adatta a vari dispositivi e dimensioni di schermo.
- **Stili Bootstrap**: Utilizza Bootstrap per uno stile pulito e moderno.

## Struttura del Progetto

- `index.php`: Il file principale che contiene la struttura della web app.
- `style.css`: File CSS che definisce gli stili di tutte le componenti della web app.
- `script.js`: Contiene la logica Vue.js per gestire lo stato delle card e l'animazione di flip.
- `api.php`: Uno script PHP che legge i dati da `dischi.json` e li fornisce alla frontend in formato JSON.
- `dischi.json`: Un file JSON contenente i dati degli album, inclusi titolo, artista, anno, copertina e descrizione.

## Tecnologie Utilizzate

- HTML
- CSS
- JavaScript
- Vue.js
- Bootstrap
- PHP
- Axios per le richieste HTTP
