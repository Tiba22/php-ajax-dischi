function initVue() {
  new Vue({
    el: "#app",

    data: {
      array: []
    },

    mounted() {
      axios
      .get('data.php')
      .then(response => {
        let data = response.data;
        this.array = data;
      })
    }
  })
}


function init() {
  initVue();
}
document.addEventListener('DOMContentLoaded', init);
