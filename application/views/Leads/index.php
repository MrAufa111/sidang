<div class="swal" data-swal="<?= $this->session->flashdata('notif'); ?>"></div>
<!-- <section class="wrapper">
    <div class="content-wrapper">
        <div class="card mt-5 ml-1 mr-1 shadow">
            <div class="card mt-5 ml-2 mr-2 shadow">
                <div class="card-body">
                    <a href="<?= base_url('leads/addl'); ?>" class="btn btn-success btn-sm mb-3" style="float: right;"><i class="fas fa-plus"></i> Add Data</a>
                    <form action="" method="post">
                        <div class="table table-responsive ">
                            <table id="dataTable" class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Nama Kampus</th>
                                        <th>Kabupaten/Kota</th>
                                        <th>Provinsi</th>
                                        <th>Alamat</th>
                                        <th>Jenis pT</th>
                                        <th>PIC</th>
                                        <th>Whatsapp</th>
                                        <th>Email</th>
                                        <th>Status Member</th>
                                        <th>SPH</th>
                                        <th>SPK</th>
                                        <th>SLA</th>
                                        <th>Instalasi</th>
                                        <th>Migrasi Data</th>
                                        <th>Pelatihan</th>
                                        <th>Invoice</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i = 1; ?>
                                    <?php foreach ($tables as $t) : ?>
                                        <tr>
                                            <td><?= $i; ?></td>
                                            <td><?= $t['name']; ?></td>
                                            <td><?= $t['kota']; ?></td>
                                            <td><?= $t['provinsi']; ?></td>
                                            <td><?= $t['alamat']; ?></td>
                                            <td><?= $t['name_pt']; ?></td>
                                            <td><?= $t['pic']; ?></td>
                                            <td><?= $t['whatsapp']; ?></td>
                                            <td><?= $t['email']; ?></td>
                                            <td><?= $t['name_mem']; ?></td>
                                            <td><?= $t['name_sp']; ?></td>
                                            <td><?= $t['name_sur']; ?></td>
                                            <td><?= $t['name_sl']; ?></td>
                                            <td><?= $t['name_inst']; ?></td>
                                            <td><?= $t['name_mig']; ?></td>
                                            <td><?= $t['name_pelat']; ?></td>
                                            <td><?= $t['name_inv']; ?></td>
                                            <td>
                                                <div class="btn-group">
                                                    <a href="<?= base_url('leads/edit/' . $t['id']); ?>" class="btn btn-primary btn-sm"><i class="fas fa-pen"></i></a>
                                                    <a href="<?= base_url('leads/delete/' . $t['id']); ?>" class="btn btn-danger btn-sm btn-hapus"><i class="fas fa-trash"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                        <?php $i++; ?>
                                    <?php endforeach; ?>
                            </table>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section> -->

<main id="main" class="main">

    <div class="pagetitle">
        <h1>Data Tables</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item">Tables</li>
                <li class="breadcrumb-item active">Data</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"> <a href="<?= base_url('leads/addl'); ?>" class="btn btn-success btn-sm mb-3"><i class="fas fa-plus"></i> Add Data</a></h5>
                        <div class="table table-responsive ">
                            <table id="dataTable" class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Nama Kampus</th>
                                        <th>Kabupaten/Kota</th>
                                        <th>Provinsi</th>
                                        <th>Alamat</th>
                                        <th>Jenis pT</th>
                                        <th>PIC</th>
                                        <th>Whatsapp</th>
                                        <th>Email</th>
                                        <th>Status Member</th>
                                        <th>SPH</th>
                                        <th>SPK</th>
                                        <th>SLA</th>
                                        <th>Instalasi</th>
                                        <th>Migrasi Data</th>
                                        <th>Pelatihan</th>
                                        <th>Invoice</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i = 1; ?>
                                    <?php foreach ($tables as $t) : ?>
                                        <tr>
                                            <td><?= $i; ?></td>
                                            <td><?= $t['name_client']; ?></td>
                                            <td><?= $t['kota']; ?></td>
                                            <td><?= $t['provinsi']; ?></td>
                                            <td><?= $t['alamat']; ?></td>
                                            <td><?= $t['name_pt']; ?></td>
                                            <td><?= $t['pic']; ?></td>
                                            <td><?= $t['whatsapp']; ?></td>
                                            <td><?= $t['email']; ?></td>
                                            <td><?= $t['name_mem']; ?></td>
                                            <td><?= $t['name_sp']; ?></td>
                                            <td><?= $t['name_sur']; ?></td>
                                            <td><?= $t['name_sl']; ?></td>
                                            <td><?= $t['name_inst']; ?></td>
                                            <td><?= $t['name_mig']; ?></td>
                                            <td><?= $t['name_pelat']; ?></td>
                                            <td><?= $t['name_inv']; ?></td>
                                            <td>
                                                <div class="btn-group">
                                                    <a href="<?= base_url('leads/edit/' . $t['id']); ?>" class="btn btn-primary btn-sm"><i class="bi bi-pencil-square"></i></a>
                                                    <a href="<?= base_url('leads/delete/' . $t['id']); ?>" class="btn btn-danger btn-sm btn-hapus"><i class="bi bi-trash"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                        <?php $i++; ?>
                                    <?php endforeach; ?>
                            </table>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

</main>
<script src="https://code.jquery.com/jquery-3.7.0.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.7.32/sweetalert2.all.min.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>
<script>
    var table = $("#dataTable").DataTable({
        responsive: true
    });
    $("#dataTable tbody").on("click", "tr", function() {
        var data = table.row(this).data();
    });
</script>
<script>
    $(document).on("click", ".btn-hapus", function(e) {
        e.preventDefault();
        const href = $(this).attr("href");

        Swal.fire({
            title: "Apakah Kamu Yakin?",
            text: "Data Akan Terhapus Permanent",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Hapus!",
        }).then((result) => {
            if (result.isConfirmed) {
                document.location.href = href;
            }
        });
    });
</script>
<script>
    const swal = $(".swal").data("swal");
    if (swal) {
        Swal.fire({
            title: "Success",
            text: swal,
            icon: "success",
        });
    }
</script>