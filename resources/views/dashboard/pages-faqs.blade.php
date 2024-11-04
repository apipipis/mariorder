@extends('layouts.master')
@section('title')
    FAQs
@endsection
@section('content')

@section('page-title')
    <x-breadcrumb pagetitle="Dashboard" title="Pusat Bantuan" />
@endsection

<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-xl-4">
                <h5 class="card-title mb-3">Pertanyaan Umum</h5>
                <p class="text-muted">
                    Bagian ini mencakup pertanyaan-pertanyaan dasar mengenai aplikasi, layanan yang disediakan, serta informasi umum tentang bagaimana aplikasi bekerja.
                    Tujuan dari bagian ini adalah memberikan pemahaman awal kepada pengguna tentang aplikasi, cara penggunaannya, dan dukungan yang tersedia.
                    Pertanyaan di sini sering kali tentang gambaran umum aplikasi, fitur-fitur khusus, dan hal-hal teknis yang mungkin dihadapi pengguna.
                </p>
            </div>
            <!--end col-->
            <div class="col-xl-8">
                <div class="accordion accordion-border-box" id="genques-accordion">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="genques-headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#genques-collapseOne" aria-expanded="true"
                                aria-controls="genques-collapseOne">
                                Apa itu Mari Order?
                            </button>
                        </h2>
                        <div id="genques-collapseOne" class="accordion-collapse collapse show"
                            aria-labelledby="genques-headingOne" data-bs-parent="#genques-accordion">
                            <div class="accordion-body">
                                Mari Order adalah aplikasi e-commerce yang memudahkan pengguna untuk menemukan, membeli, 
                                dan menjual berbagai produk dengan kategori yang beragam. Kami menyediakan platform yang 
                                aman dan mudah digunakan untuk penjual dan pembeli.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="genques-headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#genques-collapseTwo" aria-expanded="false"
                                aria-controls="genques-collapseTwo">
                                Bagaimana cara menghubungi layanan pelanggan?
                            </button>
                        </h2>
                        <div id="genques-collapseTwo" class="accordion-collapse collapse"
                            aria-labelledby="genques-headingTwo" data-bs-parent="#genques-accordion">
                            <div class="accordion-body">
                                Anda dapat menghubungi kami melalui fitur "Bantuan" di aplikasi 
                                atau melalui nomor <a href="https://wa.me/6282123471389" target="_blank" rel="noopener noreferrer" style="color: blue; text-decoration: none;">WhatsApp support</a> kami 
                                jika memiliki pertanyaan atau masalah.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="genques-headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#genques-collapseThree" aria-expanded="false"
                                aria-controls="genques-collapseThree">
                                Apakah ada program loyalitas atau diskon?
                            </button>
                        </h2>
                        <div id="genques-collapseThree" class="accordion-collapse collapse"
                            aria-labelledby="genques-headingThree" data-bs-parent="#genques-accordion">
                            <div class="accordion-body">
                                Kami sering mengadakan promosi dan diskon khusus bagi pengguna. Pantau halaman "Promo" 
                                atau ikuti media sosial kami untuk informasi terbaru.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="genques-headingFour">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#genques-collapseFour" aria-expanded="false"
                                aria-controls="genques-collapseFour">
                                Apa saja metode pembayaran yang tersedia?
                            </button>
                        </h2>
                        <div id="genques-collapseFour" class="accordion-collapse collapse"
                            aria-labelledby="genques-headingFour" data-bs-parent="#genques-accordion">
                            <div class="accordion-body">
                                Kami mendukung berbagai metode pembayaran seperti transfer bank, kartu kredit, e-wallet, 
                                dan metode pembayaran lain yang populer di Indonesia. Detailnya dapat dilihat saat proses checkout.
                            </div>
                        </div>
                    </div>
                </div>
                <!--end accordion-->
            </div>
        </div>
        <!--end row-->
    </div>
</div>

<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-xl-4">
                <h5 class="card-title mb-3">Manajemen Akun</h5>
                <p class="text-muted">Bagian Manajemen Akun berfokus pada informasi yang berkaitan dengan pembuatan, pengelolaan, 
                    dan penghapusan akun pengguna. Ini mencakup cara mendaftar, masuk, mengubah informasi akun, dan mengatasi masalah 
                    akun. Bagian ini bertujuan untuk membantu pengguna memahami cara mengelola akun mereka dengan aman dan efektif, 
                    serta menjawab pertanyaan tentang masalah akses atau pemulihan akun.
                </p>
            </div>
            <!--end col-->
            <div class="col-xl-8">
                <div class="accordion accordion-border-box" id="manageaccount-accordion">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="manageaccount-headingOne">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#manageaccount-collapseOne" aria-expanded="false"
                                aria-controls="manageaccount-collapseOne">
                                Bagaimana cara membuat akun di Mari Order?
                            </button>
                        </h2>
                        <div id="manageaccount-collapseOne" class="accordion-collapse collapse"
                            aria-labelledby="manageaccount-headingOne" data-bs-parent="#manageaccount-accordion">
                            <div class="accordion-body">
                                Klik tombol "Daftar" di halaman utama, isi informasi yang diperlukan seperti email, nama, 
                                dan kata sandi, lalu ikuti instruksi untuk verifikasi. Setelah terverifikasi, Anda bisa 
                                mulai berbelanja atau berjualan.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="manageaccount-headingTwo">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#manageaccount-collapseTwo" aria-expanded="true"
                                aria-controls="manageaccount-collapseTwo">
                                Mengapa saya mengalami masalah saat login?
                            </button>
                        </h2>
                        <div id="manageaccount-collapseTwo" class="accordion-collapse collapse show"
                            aria-labelledby="manageaccount-headingTwo" data-bs-parent="#manageaccount-accordion">
                            <div class="accordion-body">
                                Pastikan email dan kata sandi yang dimasukkan sudah benar. Jika masih ada masalah, 
                                gunakan fitur "Lupa Kata Sandi" atau hubungi tim dukungan kami.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="manageaccount-headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#manageaccount-collapseThree" aria-expanded="false"
                                aria-controls="manageaccount-collapseThree">
                                Bagaimana cara menghapus akun saya?
                            </button>
                        </h2>
                        <div id="manageaccount-collapseThree" class="accordion-collapse collapse"
                            aria-labelledby="manageaccount-headingThree" data-bs-parent="#manageaccount-accordion">
                            <div class="accordion-body">
                                Anda bisa menghapus akun kapan saja melalui pengaturan akun. Namun, perlu 
                                diperhatikan bahwa setelah akun dihapus, data Anda tidak dapat dipulihkan.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="manageaccount-headingFour">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#manageaccount-collapseFour" aria-expanded="false"
                                aria-controls="manageaccount-collapseFour">
                                Apakah saya bisa mengganti informasi akun setelah terdaftar?
                            </button>
                        </h2>
                        <div id="manageaccount-collapseFour" class="accordion-collapse collapse"
                            aria-labelledby="manageaccount-headingFour" data-bs-parent="#manageaccount-accordion">
                            <div class="accordion-body">
                                Ya, Anda bisa memperbarui informasi akun di menu pengaturan. Informasi seperti nama, 
                                alamat, dan metode pembayaran dapat diperbarui kapan saja.
                            </div>
                        </div>
                    </div>
                </div>
                <!--end accordion-->
            </div>
            <!--end col-->
        </div>
        <!--end row-->
    </div>
</div>
<!--ene card-->

<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-xl-4">
                <h5 class="card-title mb-3">Privasi & Keamanan</h5>
                <p class="text-muted">Bagian Privasi & Keamanan berfokus pada perlindungan data pribadi pengguna dan keamanan akun. 
                    Pengguna sering kali ingin tahu bagaimana data mereka akan digunakan, langkah-langkah keamanan yang diterapkan 
                    oleh aplikasi, serta tips untuk menjaga keamanan akun mereka. Bagian ini bertujuan untuk memberikan rasa aman dan 
                    kepercayaan kepada pengguna dengan menjelaskan komitmen aplikasi dalam menjaga privasi dan keamanan data mereka.
                </p>
            </div>
            <!--end col-->
            <div class="col-xl-8">
                <div class="accordion accordion-border-box" id="privacy-accordion">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="privacy-headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#privacy-collapseOne" aria-expanded="true"
                                aria-controls="privacy-collapseOne">
                                Apakah informasi pribadi saya aman?
                            </button>
                        </h2>
                        <div id="privacy-collapseOne" class="accordion-collapse collapse show"
                            aria-labelledby="privacy-headingOne" data-bs-parent="#privacy-accordion">
                            <div class="accordion-body">
                                Ya, kami menjaga keamanan data pribadi pengguna sesuai dengan Kebijakan Privasi kami. 
                                Kami tidak akan membagikan informasi pribadi Anda tanpa izin.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="privacy-headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#privacy-collapseTwo" aria-expanded="false"
                                aria-controls="privacy-collapseTwo">
                                Bagaimana data saya digunakan oleh Mari Order?
                            </button>
                        </h2>
                        <div id="privacy-collapseTwo" class="accordion-collapse collapse"
                            aria-labelledby="privacy-headingTwo" data-bs-parent="#privacy-accordion">
                            <div class="accordion-body">
                                Data Anda hanya digunakan untuk meningkatkan layanan dan pengalaman pengguna di aplikasi kami, 
                                seperti menyarankan produk yang relevan. Detail lengkap dapat dilihat di Kebijakan Privasi kami.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="privacy-headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#privacy-collapseThree" aria-expanded="false"
                                aria-controls="privacy-collapseThree">
                                Bagaimana cara menjaga keamanan akun saya?
                            </button>
                        </h2>
                        <div id="privacy-collapseThree" class="accordion-collapse collapse"
                            aria-labelledby="privacy-headingThree" data-bs-parent="#privacy-accordion">
                            <div class="accordion-body">
                                Pastikan untuk menggunakan kata sandi yang kuat dan tidak membagikan informasi akun Anda kepada siapa pun. 
                                Kami juga menganjurkan pengguna untuk mengganti kata sandi secara berkala.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="privacy-headingFour">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#privacy-collapseFour" aria-expanded="false"
                                aria-controls="privacy-collapseFour">
                                Apa yang harus dilakukan jika akun saya diretas?
                            </button>
                        </h2>
                        <div id="privacy-collapseFour" class="accordion-collapse collapse"
                            aria-labelledby="privacy-headingFour" data-bs-parent="#privacy-accordion">
                            <div class="accordion-body">
                                Segera ubah kata sandi Anda dan hubungi layanan pelanggan kami untuk bantuan lebih lanjut. 
                                Kami akan membantu memulihkan akun Anda dan mengamankan informasi Anda.
                            </div>
                        </div>
                    </div>
                </div>
                <!--end accordion-->
            </div>
        </div>
    </div>
</div>
<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-xl-4">
                <h5 class="card-title mb-3">Pembelian & Penjualan</h5>
                <p class="text-muted">Bagian Pembelian & Penjualan berisi panduan terkait proses transaksi di aplikasi, 
                    baik untuk pembeli maupun penjual. Pertanyaan di sini mencakup cara melakukan pembelian, metode pembayaran, 
                    kebijakan pengembalian, dan proses penjualan produk bagi penjual. Bagian ini dirancang untuk memberikan 
                    pemahaman menyeluruh tentang proses jual-beli dan mempermudah pengguna dalam menjalankan transaksi di aplikasi.
                </p>
            </div>
            <!--end col-->
            <div class="col-xl-8">
                <div class="accordion accordion-border-box" id="privacy-accordion">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="privacy-headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#privacy-collapseOne" aria-expanded="true"
                                aria-controls="privacy-collapseOne">
                                Bagaimana cara melakukan pembelian?
                            </button>
                        </h2>
                        <div id="privacy-collapseOne" class="accordion-collapse collapse show"
                            aria-labelledby="privacy-headingOne" data-bs-parent="#privacy-accordion">
                            <div class="accordion-body">
                                Cari produk yang ingin Anda beli, tambahkan ke keranjang, 
                                dan pilih metode pembayaran. Setelah pembayaran terkonfirmasi, 
                                penjual akan memproses pesanan Anda.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="privacy-headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#privacy-collapseTwo" aria-expanded="false"
                                aria-controls="privacy-collapseTwo">
                                Apa saja metode pembayaran yang tersedia?
                            </button>
                        </h2>
                        <div id="privacy-collapseTwo" class="accordion-collapse collapse"
                            aria-labelledby="privacy-headingTwo" data-bs-parent="#privacy-accordion">
                            <div class="accordion-body">
                                Kami mendukung berbagai metode pembayaran seperti transfer bank, 
                                kartu kredit, e-wallet, dan metode lainnya. Detailnya dapat dilihat saat checkout.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="privacy-headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#privacy-collapseThree" aria-expanded="false"
                                aria-controls="privacy-collapseThree">
                                Apakah saya bisa membatalkan pesanan?
                            </button>
                        </h2>
                        <div id="privacy-collapseThree" class="accordion-collapse collapse"
                            aria-labelledby="privacy-headingThree" data-bs-parent="#privacy-accordion">
                            <div class="accordion-body">
                                Anda dapat membatalkan pesanan sebelum penjual memprosesnya. 
                                Jika sudah dalam tahap pengiriman, Anda perlu mengikuti prosedur pengembalian.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="privacy-headingFour">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#privacy-collapseFour" aria-expanded="false"
                                aria-controls="privacy-collapseFour">
                                Bagaimana cara menjual produk di Mari Order?
                            </button>
                        </h2>
                        <div id="privacy-collapseFour" class="accordion-collapse collapse"
                            aria-labelledby="privacy-headingFour" data-bs-parent="#privacy-accordion">
                            <div class="accordion-body">
                                Buat akun penjual, kemudian pilih opsi "Jual Produk" di akun Anda. Unggah foto produk, 
                                tambahkan deskripsi, harga, dan detail lainnya. Setelah disetujui, produk Anda akan tersedia di aplikasi.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="privacy-headingFour">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#privacy-collapseFour" aria-expanded="false"
                                aria-controls="privacy-collapseFour">
                                Bagaimana jika saya menerima produk yang rusak atau tidak sesuai?
                            </button>
                        </h2>
                        <div id="privacy-collapseFour" class="accordion-collapse collapse"
                            aria-labelledby="privacy-headingFour" data-bs-parent="#privacy-accordion">
                            <div class="accordion-body">
                                Jika Anda menerima produk yang rusak atau tidak sesuai, segera hubungi penjual melalui fitur "Bantuan" di aplikasi. 
                                Pengajuan pengembalian akan memerlukan bukti foto sebagai bagian dari prosesnya.
                            </div>
                        </div>
                    </div>
                </div>
                <!--end accordion-->
            </div>
        </div>
    </div>
</div>
@endsection
@section('scripts')
<!-- App js -->
<script src="{{ URL::asset('build/js/app.js') }}"></script>
@endsection
