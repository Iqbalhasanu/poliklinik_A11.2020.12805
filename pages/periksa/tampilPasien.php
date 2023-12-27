<?php
    include 'koneksi.php';
    $query = "SELECT * FROM pasien NATURAL JOIN daftar_poli";
    $result = mysqli_query($mysqli, $query);
    
    while ($row = mysqli_fetch_assoc($result)) {
       
        
       
        echo "<tr>
                <td>{$row['id']}</td>
                <td>{$row['nama']}</td>
                <td>{$row['no_rm']}</td>
                <td>{$row['keluhan']}</td>
                <td>{$row['no_antrian']}</td>
                <td>
                    
                    <a href='pages/obat/hapusObat.php?id={$row['id']}' class='btn btn-sm btn-danger' onclick='return confirm(\"Anda yakin ingin hapus?\");'>sudah diperiksa</a>
                    <button type='button' class='btn btn-sm btn-warning edit-btn' data-obatid='{$row['id']}'> Catatan Pasien</button>
                </td>
            </tr>";
    }
    mysqli_close($mysqli);

?>