<script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>
<script>
    $.ajax({
        url: 'https://smkn1kotabaru.sch.id/api/data_siswa',
        type: 'GET',
        headers: {
            'Access-Control-Allow-Origin': '*'
        },
        success: function(data) {
            console.log(data);
        },
        error: function(error) {
            console.log(error);
        }
    });
</script>