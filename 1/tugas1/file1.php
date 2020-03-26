<?php

	abstract class Buku{
		public	$jenis,
				$penerbit,
				$tahun;

		public function __construct($jenis, $penerbit, $tahun){
			$this->jenis	= $jenis;
			$this->penerbit	= $penerbit;
			$this->tahun	= $tahun;
		}

		abstract function Klasifikasi();
	}

	trait Id{
		public	$judul,
				$penulis;

		public function identiti($judul, $penulis){
			$this->judul	= $judul;
			$this->penulis	= $penulis;
		}
	}

	trait Print{
		public function print_book(){
			echo "Judul: " . $this->judul . "<br>Penulis: " . $this->penulis;
		}
	}

	class Book extends Buku{
		use Id;
		use Print;

		public function Klasifikasi(){
			echo "<br>Jenis: " . $this->jennis . "<br>Penerbit: " . $this->penerbit . "<br>Tahun: " . $this->tahun;
		}
	}	

?>