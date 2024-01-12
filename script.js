const { createApp } = Vue;

createApp({
  data() {
    return {
      dischi: [],
    };
  },
  mounted() {
    axios
      .get('api.php')
      .then((response) => {
        //Carica i dati senza descrizione
        this.dischi = response.data.map((disco) => ({
          ...disco,
          flipped: false,
          descrizione: '',
        }));
      })
      .catch((error) => {
        console.error("C'è stato un errore nell'API: ", error);
      });
  },
  methods: {
    flipCard(disco) {
      // Controlla se la descrizione del disco è già stata caricata
      if (!disco.descrizione) {
        axios
          .get(`api.php?titolo=${encodeURIComponent(disco.titolo)}`)
          .then((response) => {
            // Imposta la descrizione del disco con i dati ottenuti dalla chiamata API
            disco.descrizione = response.data.descrizione;
          })
          .catch((error) => {
            console.error("C'è stato un errore nell'API: ", error);
          });
      }

      // Effettua il flip della card
      disco.flipped = !disco.flipped;
    },
  },
}).mount('#app');
