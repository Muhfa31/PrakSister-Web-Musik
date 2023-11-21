<?php
error_reporting(1); //error ditampilkan

class Database
{   private $host="192.168.31.194";
    private $dbname="musikku";
    private $user="root";
    private $password="";
    private $port="3308";
    private $conn;

    //function yang pertama kali di-load saat class dipanggil
    public function __construct()
    { //koneksi database
        try
        { $this->conn = new PDO("mysql:host=$this->host;port=$this->port;dbname=$this->dbname;charset=utf8",$this->user,$this->password);
        
        } catch (PDOException $e)
        {    echo "Koneksi Tidak Berhasil";
        }  
    }

    public function tampil_semua_artis()
    {   
        $query = $this->conn->prepare("select id_artis, nama_artis, genre_lagu, production, popularitas from artis order by id_artis");
        $query->execute();
        //mengambil banyak data dengan fetchAll
        $data = $query->fetchAll(PDO::FETCH_ASSOC);
        //mengembalikan data
        return $data;
        $query->closeCursor();
        unset($data);
     }

    public function tampil_semua_lagu()
    {   $query = $this->conn->prepare("select id_lagu, id_artis, id_album, nama_lagu, tahun_rilis from lagu order by id_lagu");
        $query->execute();
        //mengambil banyak data dengan fetchAll
        $data = $query->fetchAll(PDO::FETCH_ASSOC);
        //mengembalikan data
        return $data;
        $query->closeCursor();
        unset($data);
     }

    public function tampil_semua_album()
    {   $query = $this->conn->prepare("select id_album, id_artis, nama_album, tanggal_rilis, deskripsi from album order by id_album");
        $query->execute();
        //mengambil banyak data dengan fetchAll
        $data = $query->fetchAll(PDO::FETCH_ASSOC);
        //mengembalikan data
        return $data;
        $query->closeCursor();
        unset($data);
     }

    //  FUNGSI UNTUK TAMPIL
    public function tampil_artis($id_artis)
    {  $query = $this->conn->prepare("select id_artis, nama_artis, genre_lagu, production, popularitas FROM artis WHERE id_artis=?");
       $query->execute(array($id_artis));
       //mengambil satu data dengan fetch
       $data = $query->fetch(PDO::FETCH_ASSOC);
       //mengembalikan data
       return $data;
       //hapus variable dari memory
       $query->closeCursor();
       unset($id_artis,$data);
    }

    public function tampil_lagu($id_lagu)
    {  $query = $this->conn->prepare("select lagu.id_lagu, artis.id_artis, lagu.id_album, lagu.nama_lagu, lagu.tahun_rilis FROM lagu JOIN artis ON lagu.id_artis = artis.id_artis where id_lagu=?");
       $query->execute(array($id_lagu));
       //mengambil satu data dengan fetch
       $data = $query->fetch(PDO::FETCH_ASSOC);
       //mengembalikan data
       return $data;
       //hapus variable dari memory
       $query->closeCursor();
       unset($id_lagu, $data);
    }

    public function tampil_album($id_album)
    {  $query = $this->conn->prepare("select album.id_album, artis.id_artis, album.nama_album, album.tanggal_rilis, album.deskripsi FROM album JOIN artis ON album.id_artis = artis.id_artis where id_album=?");
       $query->execute(array($id_album));
       //mengambil satu data dengan fetch
       $data = $query->fetch(PDO::FETCH_ASSOC);
       //mengembalikan data
       return $data;
       //hapus variable dari memory
       $query->closeCursor();
       unset($id_album,$data);
    }

    // FUNGSI UNTUK TAMBAH DATA PADA TABEL 
     public function tambah_artis($data)
     {   $query = $this->conn->prepare("insert ignore into artis (id_artis, nama_artis, genre_lagu, production, popularitas) values (?,?,?,?,?)");
         $query->execute(array($data['id_artis'], $data['nama_artis'], $data['genre_lagu'], $data['production'], $data['popularitas']));
         $query->closeCursor();
         unset($data);
      }
      
     public function tambah_lagu($data)
     {   $query = $this->conn->prepare("insert ignore into lagu (id_lagu, id_artis, id_album, nama_album, tahun_rilis) values (?,?,?,?,?)");
         $query->execute(array($data['id_lagu'], $data['id_artis'], $data['id_album'], $data['nama_album'], $data['tahun_rilis']));
         $query->closeCursor();
         unset($data);
      }

     public function tambah_album($data)
     {   $query = $this->conn->prepare("insert ignore into album (id_album, id_artis, nama_album, tanggal_rilis, deskripsi) values (?,?,?,?,?)");
         $query->execute(array($data['id_album'],$data['id_artis'],$data['nama_album'],$data['tanggal_rilis'],$data['deskripsi']));
         $query->closeCursor();
         unset($data);
      }

    // FUNGSI UNTUK UBAH DATA PADA TABEL
      public function ubah_artis($data)
     {   $query = $this->conn->prepare("update artis set id_artis=?, nama_artis=?, genre_lagu=?, production=?, popularitas=? where id_artis=?");
         $query->execute(array($data['id_artis'], $data['nama_artis'], $data['genre_lagu'], $data['production'], $data['popularitas'], $data['id_artis']));
         $query->closeCursor();
         unset($data);
      }

      public function ubah_lagu($data)
     {   $query = $this->conn->prepare("update lagu set id_lagu=?, id_artis=?, id_album=?, nama_lagu=?, tahun_rilis=? where id_lagu=?");
         $query->execute(array($data['id_lagu'], $data['id_artis'], $data['id_album'], $data['nama_lagu'], $data['tahun_rilis'], $data['id_lagu']));
         $query->closeCursor();
         unset($data);
      }

      public function ubah_album($data)
     {   $query = $this->conn->prepare("update album set id_album=?, id_artis=?, nama_album=?, tanggal_rilis=?, deskripsi=? where id_album=?");
         $query->execute(array($data['id_album'], $data['id_artis'], $data['nama_album'], $data['tanggal_rilis'], $data['deskripsi'], $data['id_album']));
         $query->closeCursor();
         unset($data);
      }

    //   FUNGSI UNTUK HAPUS DATA PADA TABEL
      public function hapus_artis($id_artis)
     {   $query = $this->conn->prepare("delete from artis where id_artis=?");
         $query->execute(array($id_artis));
         $query->closeCursor();
         unset($id_artis);
      }

      public function hapus_lagu($id_lagu)
     {   $query = $this->conn->prepare("delete from lagu where id_lagu=?");
         $query->execute(array($id_lagu));
         $query->closeCursor();
         unset($id_lagu);
      }

      public function hapus_album($id_album)
     {   $query = $this->conn->prepare("delete from album where id_album=?");
         $query->execute(array($id_album));
         $query->closeCursor();
         unset($id_album);
      }

}
?>