var expCertApp = new Vue({
  el: '#expCertApp',
  data: {
    ExpCerts: []
  },
  methods: {
    fetchExpCerts() {
      fetch('../api/expCerts.php')
      .then(response => response.json())
      .then(json => { expCertApp.ExpCerts = json })
    }
  },
  created() {
    this.fetchExpCerts();
  }
});