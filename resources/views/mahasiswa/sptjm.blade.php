<!DOCTYPE html>
<html>
<head>
    <title>Surat Pernyataan Tanggung Jawab Mutlak</title>
<style>
    .body{
        width: 100%;
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
        margin-right: 70px;
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
        margin-right: 50px;
        
    }
    .center-text {
    display: flex;
    justify-content: center;
    margin-left: 220px;
    }

    .right-align {
        text-align: right;
        margin-right: 100px;
    }
    .center-align {
        text-align: center;
    }
    .container2 {
    display: flex;
    justify-content: center;
    align-items: center;
    /* height: 100vh; */
        
    }
    
    .left-content,
    .right-content {
    text-align: center;
    flex: 1;
  }
</style>
</head>

@php
    use Carbon\Carbon;
@endphp

<body>
    <div class="body"> 
        <br>  
        <h4>SURAT PERNYATAAN TANGGUNG JAWAB MUTLAK (SPTJM) MAHASISWA <BR> PROGRAM MAGANG DAN STUDI INDEPENDEN BERSERTIFIKAT KAMPUS MERDEKA <BR>TAHUN 2023</BR></BR></h4>
    </div>
    <div class="content">
        <p>Yang bertanda tangan di bawah ini,</p>
            <div class="info">
                <p><span style="margin-right: 96px;">Nama</span>: {{$mahasiswa->nama}}</p>
                <p><span style="margin-right: 27px;">Perguruan Tinggi</span>: Universitas Gunadarma</p>
                <p><span>Jurusan/Prodi</span>: {{$mahasiswa->jurusan->nama_jurusan}}</p>
                <p><span style="margin-right: 103px;">NIM</span>: {{$mahasiswa->npm}}</p>
                <p><span style="margin-right: 81px;">Telp/HP</span>: {{$mahasiswa->no_telepon}}</p>
            </div>
                <p style="margin-top: 30px">Dengan ini menyatakan kesanggupan dan bertanggung jawab untuk mengikuti Program<br>Magang Dan Studi Independen Bersertifikat (MSIB) Kampus Merdeka yang diselenggarakan oleh Kemendikbudristek Angkatan 3 tahun 2023 dengan ketentuan sebagai berikut:</p>
                    <div style="margin-left: 20px;">
                        <p>a. Saya bersedia mengikuti Program Magang Dan Studi Independen Berssertifikat Kampus Merdeka penuh waktu selama satu semester</p>
                        <p>b. Saya bersedia untuk tidak mengambil mata kuliah lain selama mengikuti Program Magang Dan Studi Independen Bersertifikat Kampus Merdeka, kecuali diizinkan oleh mitra;</p>
                        <p>c. Saya sudah melaksanakan vaksin sebanyak minimal dua kali, jika ada kegiatan program MSIB yang bersifat tatap muka;</p>
                        <p>d. Saya bersedia ditempatkan diwilayah Mitra yang ditentukan oleh panitia MSIB;</p>
                        <p>e. Mentaati seluruh ketentuan Program Magang Dan Studi Independen Bersertifikat Kampus Merdeka yang ditetapkan oleh Kementrian Pendidikan, Kebudayaan, Riset, dan Teknologi (Kemendikbudristek) dalam buku panduan operasional baku dan kebijakan Kemendikbudristek lainnya yang ditetapkan kemudian;</p>
                        <p>f. menaati segala aturan hukum yang berlaku di indonesia;</p>
                        <p>g. Berkomitmen dengan sungguh-sungguh untuk menyelesaikan seluruh kegiatan Program Magang Dan Studi Independen Bersertifikat Kampus Merdeka dari awal hingga akhir serta melaporkan tepat waktu sesuai dengan ketentuan yang telah ditetapkan;</p>
                        <p>h. Jika saya melakukan tindakan plagiarisme, termasuk plagiasi diri, tindakan kriminal, tindakan kekerasan dan diskriminasi dalam segala bentuk, termasuk kekerasan seksual, perundungan dan tindakan intoleransi, dan/atau penyalahgunaan obat-obatan terlarang, maka saya tidak diberikan pengakuan sks untuk pembelajaran Program Magang Dan Studi Independen Bersertifikat Kampus Merdeka (seperti tertulis di Keputusan Menteri Pendidikan dan Kebudayaan RI Nomor 74/p/2021 tentang Pengakuan Satuan Kredit Semester Pembelajaran Kampus Merdeka), saya siap dikeluarkan dari Program Magang</p>  
                    </div>
            </div> 
                <p style ="text-align: center; font-size: 15px;" >Halaman 1 dari 2</p>
                    <div class="content">
                        <div style="margin-left: 20px;">
                            <p>Dan Studi Independen Bersertifikat Kampus Merdeka, menerima sanksi sesuai dengan peraturan yang berlaku dan tidak dapat mendaftar Program Kampus Merdeka lainnya;</p>
                            <p>i. Jika saya tidak menyelesaikan program sesuai dengan waktu yang telah ditentukan/mangkir, maka saya sanggup mengembalikan dana yang telah diberikan Kemendikbudristek.</p>
                        </div>
                        <p>Demikian surat pernyataan ini dibuat dengan sebenarnya tanpa ada paksaan dari pihak manapun dan apabila dikemudian hari pernyataan ini terbukti tidak benar, maka saya bersedia dituntut di muka pengadilan serta bersedia menerima segala tindakan yang diambil oleh Kementrian Pendidikan, Kebudayaan, Riset, dan Teknologi.</p>
                    </div>
                    <div class="content" style="text-align: right;">
                        <p>Depok, {{ Carbon::now()->locale('id')->isoFormat('D MMMM Y') }}
                    </div>
                
                <div class="center-align">
                    <p>Mengetahui dan menyetujui</p>
                </div>
                <div class="content" >
                    <div style="text-align: left;">
                        <p>Orang Tua/Wali Mahasiswa <span style="margin-left: 280px;">Mahasiwa</span></p>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <p>(Nama Orang Tua) <span style="margin-left: 280px;">({{$mahasiswa->nama}})</span></p>
                    </div>
                </div>
                <div class="center-align" style="font-size: 15px;">
                    <p>Wakil Rektor III Bidang Kemahasiswaan</p>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <p>(DR. Irwan Bastian, SKom, MMSI)</p>
                    <p>NIP/NIDN : 930390/0313116203</p>
                </div>
  
            <div class="content">
            <div style="font-size: 9.8px;">
            <p>*Wajib menggunakan tanda tangan basah atau dapat menggunakan docusign</p>
            <p>*Wajib menggunakan materai asli 10000, jika di kemudian hari ditemukan adanya pemalsuan, mahasiswa akan dicoret dari SK dan dikeluarkan dari program</p>
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
            <p style ="text-align: center; font-size: 15px;">Halaman 2 dari 2</p>
</body>
</html>
