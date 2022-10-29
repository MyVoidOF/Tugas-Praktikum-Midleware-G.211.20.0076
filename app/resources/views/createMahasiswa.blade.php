<html>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <body >
        <h1>From Create Mahasiswa</h1>
        <hr/>
        <form action=/Mahasiswa/input method="post">
            <pre>
                NIM     : <input type=text name=nim>
                Nama    : <input type=text name=nama>
                Kelas   : <input type=text name=kelas>
                @csrf
                <input type=submit value=Kirim>
                <br/>
            </pre>
        </form>
        <hr/>
    </body>
</html>