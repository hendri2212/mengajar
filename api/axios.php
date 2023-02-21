<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script>
    axios.get('https://smkn1kotabaru.sch.id/api/data_siswa', {
        headers: {
            // 'Access-Control-Allow-Origin': '*',
            'Content-Type': 'application/json'
        }
    })
    .then(response => {
        console.log(response.data);
    })
    .catch(error => {
        console.log(error);
    });

</script>