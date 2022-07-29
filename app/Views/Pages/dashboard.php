<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<!-- Isian dari konten dibawah ini-->

<div class="row">

    <div class="col s2">
        <!-- Grey navigation panel -->

    </div>

    <div class="col s8">
        <!-- Teal page content  -->
        <h1>Selamat Datang </h1>
        <div class="dlg_postingan">
            <div class="dlg_header">
                <img class="img-fluid circle " src="images/person_4.jpg">
                <div class="detail">
                    <div class="user black-text">Mohhamed James Bond</div>
                    <div class="time blue-grey-text text-darken-3">12 Des 2019</div>
                </div>
            </div>

            <div class="dlg_body">
                <div class="bdy_header">
                    Judul
                </div>
                <div class="bdy_body">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima excepturi eligendi voluptatem, deserunt illo possimus vel soluta expedita itaque ea eos inventore blanditiis ducimus laudantium. Repellat reprehenderit eaque illo culpa?
                </div>
            </div>
            <div class="dlg_footer">
                <div class="viewer">
                    <a href="#" class="black-text">
                        <i class="material-icons black-text left">remove_red_eye</i>
                        100
                    </a>
                </div>
                <div class="relpy">
                    <a href="#" class="black-text">
                        <i class="material-icons black-text left">reply</i>
                        99 Komentar
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Isian dari konten diatas ini-->
<?= $this->endSection(); ?>