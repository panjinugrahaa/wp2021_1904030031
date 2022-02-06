<?php

    $conn = mysqli_connect('localhost','root','','uas_1904030047');

    //pemanggilan tabel

    function query($query)
    {
        global $conn;

        //mengambil seluruh data pada tabel
        $result = mysqli_query($conn,$query);
        if(mysqli_num_rows($result) ==1 ){
            return mysqli_fetch_assoc($result);
        }

        //pemanggilan elemen data dengan rapih
        $rows = [];
        while ($row = mysqli_fetch_assoc($result)){
            $rows[]=$row;
        }
        return $rows;
    }

    function tambah($data)
    {
          global $conn;
              $id = htmlspecialchars($data['id']);
              $nama     = htmlspecialchars ($data['nama']);
              $tempat   = htmlspecialchars ($data['tempat']);
              $mata_pelajaran   = htmlspecialchars ($data['mata_pelajaran']);
              $alamat   = htmlspecialchars($data['alamat']);
              $jenis_kelamin    = htmlspecialchars($data['jenis_kelamin']);
              $agama    = htmlspecialchars($data['agama']);
              $foto     = htmlspecialchars($data['foto']);

        $query = "INSERT INTO guru 
                 VALUES
              ('$id','$nama','$tempat','$mata_pelajaran','$alamat','$jenis_kelamin','$agama','$foto');";

                mysqli_query($conn,$query);
                echo mysqli_error($conn);
                return mysqli_affected_rows($conn);

          
    }

    function tambahmapel($data)
    {
          global $conn;
              $id = htmlspecialchars($data['id']);
              $mapel     = htmlspecialchars ($data['mapel']);
              $jurusan   = htmlspecialchars ($data['jurusan$jurusan']);
              $guru   = htmlspecialchars ($data['guru']);
              $kelas   = htmlspecialchars($data['kelas']);

        $query = "INSERT INTO mata_pel 
                 VALUES
              ('$id','$mapel','$jurusan','$guru','$kelas');";

                mysqli_query($conn,$query);
                echo mysqli_error($conn);
                return mysqli_affected_rows($conn);

          
    }
   



    function hapus($id)
    {
        global $conn;
    mysqli_query($conn, "DELETE FROM guru WHERE id= $id") or die(mysqli_error($conn));
    return mysqli_affected_rows($conn);
    }

    
    function hapusmapel($id)
    {
        global $conn;
    mysqli_query($conn, "DELETE FROM mata_pel WHERE id= $id") or die(mysqli_error($conn));
    return mysqli_affected_rows($conn);
    }

    // function hapusdosen($nidn)
    // {
    //     global $conn;
    // mysqli_query($conn, "DELETE FROM dosen WHERE nidn= $nidn") or die(mysqli_error($conn));
    // return mysqli_affected_rows($conn);
    // }

    function editt($data)
    {
          global $conn;
              $id = $data['id'];
              $nama     = htmlspecialchars ($data['nama']);
              $tempat   = htmlspecialchars ($data['tempat']);
              $mata_pelajaran   = htmlspecialchars ($data['mata_pelajaran']);
              $alamat   = htmlspecialchars($data['alamat']);
              $jenis_kelamin    = htmlspecialchars($data['jenis_kelamin']);
              $agama    = htmlspecialchars($data['agama']);
              $foto     = htmlspecialchars($data['foto']);

        $query = "UPDATE guru SET 
                nama ='$nama',
                tempat ='$tempat',
                mata_pelajaran ='$mata_pelajaran',
                alamat ='$alamat',
                jenis_kelamin ='$jenis_kelamin',
                agama ='$agama',
                foto ='$foto'
                WHERE id =$id;";
                 
              

                mysqli_query($conn,$query);
                echo mysqli_error($conn);
                return mysqli_affected_rows($conn);

          
    }

    function editmapel($data)
    {
          global $conn;
              $id = $data['id'];
              $mapel     = htmlspecialchars ($data['mapel']);
              $jurusan   = htmlspecialchars ($data['jurusan']);
              $guru   = htmlspecialchars ($data['guru']);
              $kelas   = htmlspecialchars($data['kelas']);

        $query = "UPDATE mata_pel SET 
                mapel ='$mapel',
                jurusan ='$jurusan',
                guru ='$guru',
                kelas ='$kelas'
                WHERE id =$id;";
                 
              

                mysqli_query($conn,$query);
                echo mysqli_error($conn);
                return mysqli_affected_rows($conn);

          
    }

    function cariguru($keyword)
    {
             global $conn;

        $query = "SELECT * FROM guru WHERE nama LIKE'%$keyword%'";
        $result = mysqli_query($conn, $query); 
        $rows = [];
        while ($row = mysqli_fetch_assoc($result)) {
            $rows[] = $row;
        }
        
        return $rows;

    }

    function caripel($keyword)
    {
             global $conn;

        $query = "SELECT * FROM mata_pel WHERE mapel LIKE'%$keyword%'";
        $result = mysqli_query($conn, $query); 
        $rows = [];
        while ($row = mysqli_fetch_assoc($result)) {
            $rows[] = $row;
        }
        
        return $rows;

    }
    






?>