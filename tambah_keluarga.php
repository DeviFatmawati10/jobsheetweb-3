<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
    <h2>KELUARGA DEVI</h2>
    <br/>
    <br/>
    <br/>
    <h3>TAMBAH DATA KELUARGA</h3>
    <form method="post" action="proses_keluarga.php">;
        <table>
            <tr>
                <td>ID Anggota</td>
                <td><input type="number" name="id"></td>
            </tr>
            <tr>
                <td>Nama Anggota</td>
                <td><input type="text" name="nama_anggota"></td>
            </tr>

            <tr>
                <td>Alamat</td>
                <td><input type="text" name="alamat"></td>
            </tr>

            <tr>
                <td>Tanggal Lahir</td>
                <td><input type="date" name="tanggal_lahir"></td>
            </tr>

            <tr>
                <td></td>
                <td><input type="submit" value="SIMPAN"></td>
            </tr>    
        </table>
    </form>
</body>
</html>