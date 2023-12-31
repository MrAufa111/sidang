<div class="swal" data-swal="<?= $this->session->flashdata('notif'); ?>"></div>
<div class="swal-error" data-swalerror="<?= $this->session->flashdata('error'); ?>"></div>

<main id="main" class="main">

    <div class="pagetitle">
        <h1><?= $title ?></h1>
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
                        <h5 class="card-title"></h5>
                        <a href="<?= base_url('setupPengeluaran/tambahkategori') ?>" class="btn btn-primary">Tambah Kategori</a>
                        <div class="table table-responsive">
                            <table class="table" id="dataTable">
                                <thead>
                                    <tr>
                                        <th width="5%">NO</th>
                                        <th width="80%">Nama Kategori</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i = 1; ?>
                                    <?php foreach ($kategori as $k) : ?>
                                        <tr>
                                            <td><?= $i++ ?></td>
                                            <td><?= $k['name_kategori'] ?></td>
                                            <td>
                                                <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                                                    <a href="<?= base_url('setupPengeluaran/deletek/' . $k['id']) ?>" class="btn btn-danger btn-hapus"><i class="bi bi-trash"></i></a>
                                                    <a href="<?= base_url('setupPengeluaran/editKategori/' . $k['id']) ?>" class="btn btn-secondary"><i class="bi bi-pencil-square"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </section>

</main>

<script src="https://code.jquery.com/jquery-3.7.0.js"></script>
<script src="https://cdn.datatables.net/1.13.5/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.5/js/dataTables.bootstrap5.min.js"></script>

<script>
    $(document).ready(function() {
        let table = $("#dataTable").DataTable();
    });
</script>