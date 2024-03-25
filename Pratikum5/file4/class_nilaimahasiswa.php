<?php

class NilaiMahasiswa {
    private $nama;
    private $nilai;
    private $matakuliah;

    // Konstruktor dengan parameter
    public function __construct($nama, $nilai,$matakuliah) {
        $this->nama = $nama;
        $this->nilai = $nilai;
        $this->matakuliah = $matakuliah;
    }

    // Getter untuk properti nama
    public function getNama() {
        return $this->nama;
    }
    public function getMatakuliah(){
        return $this->matakuliah;
    }

    // Getter untuk properti nilai
    public function getNilai() {
        return $this->nilai;
    }

    // Fungsi untuk menentukan kelulusan
    public function gethasil(){
        if ($this->nilai >= 85 && $this->nilai <= 100) {
            return "A";
        } elseif ($this->nilai >= 70 && $this->nilai <= 84) {
            return "B";
        } elseif ($this->nilai >= 56 && $this->nilai <= 69) {
            return "C";
        } elseif ($this->nilai >= 36 && $this->nilai <= 55) {
            return "D";
        } elseif ($this->nilai >= 0 && $this->nilai <= 35) {
            return "E";
        }
    }

    // Fungsi untuk menentukan grade
    public function grade() {
        if ($this->nilai >= 85 && $this->nilai <= 100) {
            return "lulus";
        } elseif ($this->nilai >= 70 && $this->nilai <= 84) {
            return "lulus";
        } elseif ($this->nilai >= 56 && $this->nilai <= 69) {
            return "lulus";
        } elseif ($this->nilai >= 36 && $this->nilai <= 55) {
            return "tidak lulus";
        } elseif ($this->nilai >= 0 && $this->nilai <= 35) {
            return "tidak lulus";
        } else {
            return "Nilai tidak valid";
        }
    }
}

?>
