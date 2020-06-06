<?php
//cara menggambil data dari array ada 4 cara yaitu denga fetch
// mysqli_fetch_row() mengemmbalikan array numerik
// mysqli_fetch_assoc() mengembalikan array assosiatif
// mysqli_fetch_array() mengembalikan keduanya
// mysqli_fetch_object()

//koneksi ke database
$coneksi = mysqli_connect("localhost","root","","phpdasar");

// menailkan data 
function query($query){
	global $coneksi;
	$result = mysqli_query($coneksi,$query);
	$rows = [];
	while($row = mysqli_fetch_assoc($result)){
		$rows[] = $row;
	}
	return $rows;
}

//menambahkan data
function tambahData($data){
	global $coneksi;
	$nama = htmlspecialchars($data['nama']);
	$tahun = htmlspecialchars($data['tahun']);
	$sudradara = htmlspecialchars($data['sudradara']);
	$gendre = htmlspecialchars($data['gendre']);
	$pemain = htmlspecialchars($data['pemain']);
	$produser = htmlspecialchars($data['produser']);
	$untung = htmlspecialchars($data['untung']);
	$negara = htmlspecialchars($data['negara']);
	$durasi = htmlspecialchars($data['durasi']);

	//upload Gambar
	$gambar = upload();
	if(!$gambar){
		return false;
	}


	$code = "INSERT INTO tbl_film VALUES ('','$nama','$tahun','$sudradara','$gendre','$pemain','$produser','$untung','$negara','$durasi','$gambar')";

	mysqli_query($coneksi,$code);
	return mysqli_affected_rows($coneksi);
}
	//function upload
	function upload(){
		$namaFile = $_FILES['gambar']['name'];
		$ukuranFile = $_FILES['gambar']['size'];
		$error = $_FILES['gambar']['error'];
		$tmpFile = $_FILES['gambar']['tmp_name'];

		//cek apakah gambar kosong
		if($error === 4){
			echo "
				<script>
					alert('Gambar kosong sehingg gagal ditambah');
				</script>
			";
			return false;
		}

		//cek apakah yag diupload adalah gambar
				$ekstensiGambarValid = ['jpg','jpeg','png'];
				//ambil ekstensi gambar dan pecah menjadi array
				$ekstensiGambar =  explode('.', $namaFile);
				//ambil ekstensi gambar paling akhir dan ubah menjadi huruf kecil semua
				$ekstensiGambar = strtolower(end($ekstensiGambar));
				if(!in_array($ekstensiGambar, $ekstensiGambarValid)){
					echo "
						<script>
							alert('YANG ANDA UPLOAD BUKAN GAMBAR');
						</script>
					";
					return false;
				}
		//cek ukuran gambar apakah terlalu besar 
		if($ukuranFile > 1000000){
			echo "
				<script>
					alert('Gambar terlalu besar');
				</script>
			";
			return false;
		}


		//lolos pengecekan dan siap diupload
		// untuk membuat nama baru agar tidak ada nama gambar yang sama dengan user lain ketika mengupload gambar
		$namaBaru = uniqid();
		$namaBaru .= '.';
		$namaBaru .= $ekstensiGambar;


		move_uploaded_file($tmpFile,'images/'.$namaBaru);
		return $namaBaru;
	}

//menghapus data
function hapus($id){
	global $coneksi;
	mysqli_query($coneksi,"DELETE FROM tbl_film WHERE id_film=$id");
	return mysqli_affected_rows($coneksi);
}

//menmabpilkan data pada tampilan update
function tampilUpdateData($query){
	global $coneksi;
	$code = mysqli_query($coneksi,$query);
	$rows = [];
	while($row = mysqli_fetch_assoc($code)){
		$rows[] = $row;
	}
	return $rows;
}


//update data
function updateData($data){
	global $coneksi;
	$id = $data['id'];
	$nama = htmlspecialchars($data['nama']);
	$tahun = htmlspecialchars($data['tahun']);
	$sudradara = htmlspecialchars($data['sudradara']);
	$gendre = htmlspecialchars($data['gendre']);
	$pemain = htmlspecialchars($data['pemain']);
	$produser = htmlspecialchars($data['produser']);
	$untung = htmlspecialchars($data['untung']);
	$negara = htmlspecialchars($data['negara']);
	$durasi = htmlspecialchars($data['durasi']);
	$gambarlama = htmlspecialchars($data['gambarlama']);

	//cek apakah gamabr lama ingin diubah atau tidak
	if($_FILES['gambar']['error'] === 4){
		$gambar = $gambarlama;
	}else{
		//jika gmabr diubah maka jalankan fungsi upload
		$gambar = upload();
	}
	$code = "UPDATE tbl_film SET 
			nama = '$nama',
			tahun = '$tahun',
			sudradara = '$sudradara',
			gendre = '$gendre',
			pemain = '$pemain',
			produser = '$produser',
			untung = '$untung',
			negara = '$negara',
			durasi = '$durasi',
			cover = '$gambar'

			WHERE id_film=$id
			";

	mysqli_query($coneksi,$code);
	return mysqli_affected_rows($coneksi);

}

// searshing
	function cari($keyword){

		$query = "SELECT * FROM tbl_film 
				WHERE 
				nama LIKE '%$keyword%' OR
				tahun LIKE '%$keyword%' OR
				sudradara LIKE '%$keyword%' OR
				gendre LIKE '%$keyword%' OR
				pemain LIKE '%$keyword%' OR
				produser LIKE '%$keyword%' OR
				untung LIKE '%$keyword%' OR
				negara LIKE '%$keyword%' OR
				durasi LIKE '%$keyword%'

				";

		//memanfaat fungsion query sebumnya pada fungsi paling atas
		return query($query);

	}
?>

  