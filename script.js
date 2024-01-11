const { createApp } = Vue;

createApp({
  data() {
    return {
      // Array per i dischi
      dischi: [],
    };
  },
  mounted() {
    axios
      .get('api.php')
      .then((response) => {
        this.dischi = response.data;
      })
      .catch((error) => {
        console.error("C'è stato un errore nell'API: ", error);
      });
  },
}).mount('#app');
