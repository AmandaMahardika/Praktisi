<?php 

class Stuff_Model{
    private $db;
    private $table = 'tb_barang';
    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllStuff()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function getStuffById($id)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }

    public function tambahDataBengkel($data)
    {
        $query = "INSERT INTO tb_barang
                    VALUES
                  ('', :nama, :noantri, :kerusakan, :perbaikan, :harga)";
        
        $this->db->query($query);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('nopart', $data['noantri']);
        $this->db->bind('tipe', $data['kerusakan']);
        $this->db->bind('jumlah', $data['perbaikan']);
        $this->db->bind('harga', $data['harga']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function hapusDataBengkel($id)
    {
        $query = "DELETE FROM tb_barang WHERE id = :id";
        
        $this->db->query($query);
        $this->db->bind('id', $id);

        $this->db->execute();

        return $this->db->rowCount();
    }


    public function ubahDataBengkel($data)
    {
        $query = "UPDATE tb_barang SET
                    nama = :nama,
                    noantri = :noantri,
                    kerusakan = :kerusakan,
                    perbaikan = :perbaikan,
                    harga = :harga
                  WHERE id = :id";
        
        $this->db->query($query);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('noantri', $data['noantri']);
        $this->db->bind('kerusakan', $data['kerusakan']);
        $this->db->bind('perbaikan', $data['perbaikan']);
        $this->db->bind('harga', $data['harga']);
        $this->db->bind('id', $data['id']);

        $this->db->execute();

        return $this->db->rowCount();
    }
    
    
}

?>