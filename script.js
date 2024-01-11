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
        this.dischi = response.data.map((disco) => ({
          ...disco,
          flipped: false,
        }));
      })
      .catch((error) => {
        console.error("C'è stato un errore nell'API: ", error);
      });
  },
  methods: {
    flipCard(disco) {
      disco.flipped = !disco.flipped;
    },
  },
}).mount('#app');
