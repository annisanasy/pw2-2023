<?php
    include_once 'header.php';
?>
<div class="container">
  <h2>Data Mahasiswa</h2>
  <hr/>
  <table class="table">
      <thead>
          <tr>
              <th>No</th>
              <th>Nama Lengkap</th>
              <th>Mata Kuliah</th>
              <th>UTS</th>
              <th>UAS</th>
              <th>Tugas</th>
              <th>Rerata</th>
              <th>Keterangan</th>
              <th>Grade</th>
              <th>Predikat</th>
          </tr>
      </thead>
      <tbody>
          <tr>
              <td>1</td>
              <td>Annisa Nasywa</td>
              <td>Statistika dan Probabilitas</td>
              <td>89</td>
              <td>95</td>
              <td>80</td>
              <td>87.95</td>
              <td>Lulus</td>
              <td>A</td>
              <td>Sangat Memuaskan</td>
          </tr>
          <tr>
              <td>2</td>
              <td>Cintantya Wamsa</td>
              <td>Pemrograman Web</td>
              <td>78</td>
              <td>81</td>
              <td>80</td>
              <td>79.75</td>
              <td>Lulus</td>
              <td>B</td>
              <td>Memuaskan</td>            
          </tr>

          <?php      
            require_once 'libfungsi.php';
                $no = 3;
                $nama = $_POST ['nama_lengkap'];
                $matkul = $_POST ['matkul'];
                $uts = $_POST ['nilai_uts'];
                $uas = $_POST ['nilai_uas'];
                $tugas = $_POST ['nilai_tugas'];
                $dn = dataNilai($uts, $uas, $tugas);
                $kelulusan = kelulusan($dn);
                $grade = grade($dn);
                $predikat = predikat($dn);

                echo '<td>' . $no;
                echo '<td>' . $nama;
                echo '<td>' . $matkul;
                echo '<td>' . $uts;
                echo '<td>' . $uas;
                echo '<td>' . $tugas;
                echo '<td>' . $dn;
                echo '<td>' . $kelulusan;
                echo '<td>' . $grade;
                echo '<td>' . $predikat;
            
            ?>
      </tbody>
  </table>
</div>
<?php
    include_once 'footer.php';
?>