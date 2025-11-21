<?= $this->extend('Layout/template') ?>
<?= $this->section('content'); ?>
    <h1 class="text-center">Meteorologická data stanice <?= $stanice->place ?></h1>

    <div class="row">
    <?php
    $table = new \CodeIgniter\View\Table();
    $template = array(
        'table_open'=> '<table class="table table-border table-hover text-center">',
        'thead_open'=> '<thead>',
        'thead_close'=> '</thead>',
        'heading_row_start'=> '<tr>',
        'heading_row_end'=>' </tr>',
        'heading_cell_start'=> '<th class="h6">',
        'heading_cell_end' => '</th>',
        'tbody_open' => '<tbody>',
        'tbody_close' => '</tbody>',
        'row_start' => '<tr>',
        'row_end'  => '</tr>',
        'cell_start' => '<td>',
        'cell_end' => '</td>',
        'row_alt_start' => '<tr>',
        'row_alt_end' => '</tr>',
        'cell_alt_start' => '<td>',
        'cell_alt_end' => '</td>',
        'table_close' => '</table>'
        );
        $table->setTemplate($template);

    $table->setHeading('Datum', 'Kvalita', 'Minimum 5cm', 'Minimum 2m', 'Prostřední 2m', 'Maximální 2m', 'Vlhkost', 'Mid vítr', 'Max vírt', 'Délka slunce', 'Prostřední mrak', 'Srážky','Prostřední vzduch tlak');
    
    foreach($dataPocasi as $row) {

        $table->addRow(date('d.m.Y', strtotime($row->date)), $row->quality, $row->min_5cm, $row->min_2m, $row->mid_2m, $row->max_2m, $row->humidity, $row->mid_wind, $row->max_wind, $row->sun_length, $row->mid_cloud, $row->precipitation,$row->mid_air_pressure);
    }
    
    echo $table->generate();
    ?>
    </div>
    <div class="row mt-4">
        <div class="justify-content-center mt-4">
        <?php if ($pager): ?>
        <?= $pager->links('default', 'pager') ?>
        <?php endif ?>
    </div>
    </div>
<?= $this->endSection(); ?>
