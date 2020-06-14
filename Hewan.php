<?php
	/*
		Object-oriented Programming
		Common terms:
		- Class
		- Property
		- Method
		- Object
	*/
	class Hewan{
		
		//di dalam Class, variabel disebut dengan 'Properties'

		#6 Restricting Access to property: public, private, protected

		var $namaHewan;
		public $jumlahKaki;
		protected $spesies;
		private $habitat;

		#5 Constructor: sebuah method built-in yang dimiliki object, dapat menginisialisasi property object (memberikan value pada property) secara otomatis ketika sebuah object dibuat. Kita bisa membuat berbagai argumen di dalam constructor, misal: function setter.
		function __construct($namaBaru){
			$this->namaHewan = $namaBaru; //setter
		}

		//Class method (method setter dan getter merupakan common method yang terdapat dalam OOP, berfungsi untuk mengambil dan menetapkan nilai property dalam suatu Class)
		//Nama method untuk setter dan getter disesuaikan dengan penggunaan property yang bersangkutan
		
		function getNamaHewan(){
			return $this->namaHewan;
		}

		function setHabitat($habitatBaru){
			$this->habitat = $habitatBaru;
		}

		function getHabitat(){
			return $this->habitat;
		}

		protected function setSpesies($spesiesBaru){
			$this->spesies = $spesiesBaru;
		}

		function getSpesies(){
			return $this->spesies;
		}
		//$this merupakan variabel built-in (bawaan dari bahasa pemrograman) yang menunjuk pada objek saat ini
		//merupakan self-referencing variabel
		//digunakan untuk mengakses properti dan memanggil method lainnya yang masih dalam satu Class

		#7 Restricting access to method: public, protected, private
		/*private function getHabitat(){
			return $this->$habitat;
		}*/
	}
?>