<script>
    var xhr = new XMLHttpRequest();
    xhr.open('GET', 'https://smkn1kotabaru.sch.id/api/data_siswa');
    xhr.setRequestHeader('Access-Control-Allow-Origin', '*');
    xhr.onload = function() {
    if (xhr.status === 200) {
        console.log(xhr.response);
    } else {
        console.log('Request failed.  Returned status of ' + xhr.status);
    }
    };
    xhr.send();
</script>