<?= $this->extend('Layout/template') ?>
<?= $this->section('content'); ?>
<div class="row my-3">
    <h1 class="text-center">Přehled meteorologických stanic ve spolkové zemi <?= $zeme->name ?></h1>
</div>
<div class="row">
    <div class="offset-5 col-2 d-flex justify-content-center mb-5">
        <?= anchor('/', '<button type="button" class="btn btn-sm btn-warning mt-2">Zpět na úvodní stránku</button>') ?>
    </div>
</div>
<div class="row">
    <?php
    foreach ($stanice as $row): ?>
        <div class="col-lg-3 col-md-6 col-12 mb-4">
            <div class="card shadow-sm h-100 border-start border-warning border-2">
                <div class="card-body">
                    <h5 class="card-title mb-3 fw-bold text-center">
                        <?= anchor('data/' . $zeme->id, $row->place, ['class' => 'text-decoration-none text-dark']); ?>
                    </h5>

                    <ul class="list-unstyled small">
                        <li> Zeměpisná šířka: <?= $row->geo_latitude ?></li>
                        <li> Zeměpisná délka: <?= $row->geo_longtitude ?></li>
                        <li> Nadmořská výška: <?= $row->height ?> m. n. m.</li>
                    </ul>

                    <?= anchor('data/' . $row->S_ID, '<button type="button" class="btn btn-sm btn-outline-info mt-2">Zobrazit data</button>') ?>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>
<div class="row mb-5">
    <div class="col-lg-6 col-md-8 col-12 d-flex justify-content-center">
            <img src="<?= base_url('obrazky/mapy/'. $zeme->map); ?>" class="img-fluid"
            style="border: 2px solid #ccc; max-height: 250px; object-fit: contain;"
            alt="Mapa <?= $zeme->name ?>">
    </div>
    <div class="col-lg-6 col-md-8 col-12">
        <img src="<?= base_url('obrazky/vlajky/' . $zeme->flag) ?>"
        style="border: 2px solid #ccc; max-height: 250px; object-fit: contain;" 
        alt="Vlajka <?= $zeme->name ?>">
    </div>
</div>
<?= $this->endSection(); ?>