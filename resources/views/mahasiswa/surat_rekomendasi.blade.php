<style>
    .body{
        width: 90%;
        margin: 0 auto;
        text-align: center;
        margin-right: 5px;
        margin-left: 5px;
    }
    .container {
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .content {
        margin-left: 50px;
        margin-top: 30px;
        margin-right: 50px;
        font-size: 15px;
        text-align: justify;
    }

    h3 {
        flex: 1;
        margin-right: 20px;
    }

    .info p {
        display: flex;
        align-items: center;
        margin-bottom: 10px;
        margin-top: 5px; 
        
    }

    .info p span {
        flex-basis: 150px;
        margin-right: 1px;
    }

    .info2 p {
        display: flex;
        align-items: center;
        margin-bottom: 10px;
        margin-top: 5px;  
    }

    .info2 p span {
        flex-basis: 290px;
        margin-right: 5px;
    }

    .centered-left{
        /* margin-right: 5px;
        margin-left: 450px; */
        display: flex;
        justify-content: flex-start;
    }
    

</style>

@php
    use Carbon\Carbon;
@endphp

    <div class="body">
        <div class="container">
            <!-- Isi surat -->
            <img src="{{ asset('storage/template/logo_gunadarma.png')}}" alt="" width="120">
            <img src="{{ url('storage/template/template_nama_gunadarma.png')}}" alt="" width="500">
        </div>    
        <h4>SURAT REKOMENDASI MAHASISWA PROGRAM MAGANG DAN STUDI<br>INDEPENDEN BERSERTIFIKAT KAMPUS MERDEKA</h4>
        <h3>No: 695/JUR-SI/UG/E/VII/2022</h3>
    </div>
    <div class="content">
        <p>Yang bertanda tangan di bawah ini:</p>
            <div class="info">
                <p><span style="margin-right: 133px;">Nama</span>: Dr. Setia Wirawan, S.Kom., MMSI</p>
                <p><span style="margin-right: 124px;">Jabatan</span>: Ketua Program Studi Sistem Informasi</p>
                <p><span style="margin-right: 145px;">NIP</span>: 929321</p>
                <p><span style="margin-right: 128px;">E-mail</span>: setia@staff.gunadarma.ac.id</p>
                <p><span style="margin-right: 119px;">No Telp</span>: 08129449161</p>
            </div>
                <p style="margin-top: 30px;">memberikan rekomendasi kepada mahasiswa berikut:</p>
            <div class="info2">
                <p><span style="margin-right: 233px;">Nama</span>: {{$mahasiswa->nama}}</p>
                <p><span style="margin-right: 242px;">Nim</span>: {{$mahasiswa->npm}}</p>
                <p><span style="margin-right: 132px;">Program Studi/Jurusan</span>: {{$mahasiswa->jurusan->nama_jurusan}}</p>
                <p><span style="margin-right: 223px;">Fakutas</span>: {{$mahasiswa->fakultas->nama_fakultas}}</p>
                <p><span style="margin-right: 215px;">Semester</span>: {{$mahasiswa->semester->semester}}</p>
                <p><span style="margin-right: 251px;">ipk</span>: {{$mahasiswa->ipk}}</p>
                <p><span>Jumlah SKS yang sudah ditempuh dan lulus</span>: 100</p>
                <p><span style="margin-right: 84px;">Nama Koordinator PT MSIB 3</span>: Dr. Wardoyo, SE., MM</p>
                <p><span style="margin-right: 107px;">Nomor Hp Koordinator PT</span>: 08159942991</p>  
            </div>
                <p style="margin-top: 30px;">untuk menjadi peserta program Magang dan Studi Independen Bersertifikat Tahun 2022 dengan ketentuan:</p>
                <p>1. Mahasiswa akan mengikuti Program Magang dan Studi Independen Bersertifikat Tahun 2022 secara penuh dan bertanggung jawab;</p>
                <p>2. Mahasiswa sanggup ditempatkan di mitra - mitra program Magang dan Studi Independen Bersertifikat di seluruh wilayah Indonesia sesuai dengan hasil seleksi dan proses konsolidasi antara prodi asal mahasiswa terpilih dengan Mitra Industri yang telah ditetapkan;</p>
            </div> 
                <p class ="container" style ="text-align: center; font-size: 15px;">Halaman 1 dari 2</p>
            <div class="content">
                <p>3. Mahasiswa sanggup melakukan perjalanan lintas kabupaten/kota/provinsi/negara jika diperlukan sesuai penempatan yang ditetapkan oleh mitra program Magang dan Studi Independen Bersertifikat dengan memperhatikan secara ketat protokol kesehatan.</p>
                <p style="margin-top: 30px;">Selain hal tersebut di atas, sebagai bentuk dukungan dan fasilitasi bagi mahasiswa, kami menyatakan kesediaan untuk:</p>
                <p>1. Memberikan dukungan sepenuhnya serta bertanggung jawab atas mahasiswa selama mengikuti program Magang dan Studi Independen Bersertifikat Tahun 2022 sejak awal sampai akhir program;</p>
                <p>2. Mendukung proses belajar mahasiswa melalui pengalaman Magang dan Studi Independen Bersertifikat Tahun 2022;</p>
                <p>3. Memberikan pengakuan dan konversi 20 sks atau hal-hal yang sudah menjadi kesepakatan antara prodi asal mahasiswa dengan mitra industri bagi mahasiswa setelah penyelesaian program Magang dan Studi Independen Bersertifikat Tahun 2022.</p>
                <p style="margin-top: 30px;">Demikian surat rekomendasi ini kami sampaikan untuk dipergunakan sebagaimana mestinya.</p>
            </div>
            <div class="d-flex flex-row-reverse" style="float: right">
                <div class="p-2">
                    
                    <p style="padding:50px; font-size: 15px;">Jakarta, {{ Carbon::now()->locale('id')->isoFormat('D MMMM Y') }}</p>
                    <br>
                    <br>
                    <p style="font-size: 15px;">(Dr. Setia Wirawan, S. Kom., MMSI)*</p>
                </div>
            </div>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <div class="content">
            <div style="font-size: 9.8px;"">
            <p>Notes :</p>
            <p>*Tandatangan minimal di level Kepala Program Studi tanpa cap diperkenankan</p>
            <p>*Tandatangan digital yang disertai cap dapat diterima dan dianggap sah.</p>
            <p>*Dalam mengajukan surat rekomendasi, mahasiswa perlu melampirkan daftar program yang akan dilamar sebagai informasi kepada perguruan tinggi</p>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <p style ="text-align: center; font-size: 15px;">Halaman 2 dari 2</p>
            </div>
            </div>