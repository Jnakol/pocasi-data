<?= $this->extend('Layout/template') ?>
<?= $this->section('content'); ?>
<div class="row my-5 pt-3">
    <h1 class="text-center">Přehled meteorologických stanic ve spolkové zemi <?= $zeme->name?></h1>
</div>
<div class="row">
    <?php
    foreach ($stanice as $row): ?>
        <div class="col-lg-3 col-md-6 col-12 mb-4">
                <div class="card shadow-sm h-100 border-start border-warning border-2">
                    <div class="card-body">
                        <h5 class="card-title mb-3 fw-bold text-center">
                            <?= anchor('data/' . $row->S_ID, $row->place, ['class' => 'text-decoration-none text-dark']); ?>
                        </h5>
                        
                        <ul class="list-unstyled small">
                            <li> Zeměpisná šířka: <?= $row->geo_latitude ?></li>
                            <li> Zeměpisná délka: <?= $row->geo_longtitude ?></li>
                            <li> Nadmořská výška: <?= $row->height ?> m. n. m.</li>
                        </ul>
                        
                        <?= anchor('data/' . $row->S_ID, 'Zobrazit data', "<button type='button' class='btn btn-sm btn-outline-info mt-2'></button>") ?>
                    </div>
                </div>
            </div>
    <?php endforeach; ?>
</div>
<?= $this->endSection(); ?>
