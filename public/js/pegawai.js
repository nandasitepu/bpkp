
var vm = new Vue({
    http: {
      root:'/root',
      headers: {
        'X-CSRF-TOKEN': document.querySelector('#token').getAttribute('value')
      },
      emulateJSON: true,
      emulateHTTP: true
    },


    el: '#vue',

    data:{
        pegawai: [],
        newPegawai: {
          nama:'NS',
          nip:'NS',
          pangkat:'NS',
          jabatan:'NS'
        },

      
    },

    mounted: function(){
        this.fetchPegawai();
    },

    methods: {
      fetchPegawai: function(){
        this.$http.get('/api/pegawai')
          .then(response => {
            this.pegawai = response.data;
          })
          .catch(response => {
            // Error Handling
          })
        },

      addPegawai: function(){
        // New Input
        var pegawai = this.newPegawai

        // Clear Form
        this.newPegawai = { nama:'', nip:'', pangkat:'', jabatan:'' }

        // Send Post Request
        this.$http.post('/api/pegawai', pegawai)

        // Reload page
        this.fetchPegawai()

      },


    },

    computed: {
      validation: function(){
        return {
          nama: !!this.newPegawai.nama.trim(),
          nip: !!this.newPegawai.nip.trim(),
          pangkat: !!this.newPegawai.pangkat.trim(),
          jabatan: !!this.newPegawai.jabatan.trim()
        }
      },

      isValid: function (){
        var validation = this.validation
        return Object.keys(validation).every(function(key) {
          return validation[key]
        })
      }
    }

});
