<?= $this->extend('Layout/template') ?>
<?= $this->section('content'); ?>
    <h1 class="text-center">Stanice v zemi <?= $zeme->name?></h1>
    
    <?php
    $table = new \CodeIgniter\View\Table();
    $template = array(
        'table_open'=> '<table class="table table-borderless table-hover">',
        'thead_open'=> '<thead>',
        'thead_close'=> '</thead>',
        'heading_row_start'=> '<tr>',
        'heading_row_end'=>' </tr>',
        'heading_cell_start'=> '<th class="h1">',
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

    $table->setHeading('Místo','Zeměpisná šířka', 'Zeměpisná délka', 'Nadmořská výška');

    foreach($stanice as $row) {
        $table->addRow(anchor('data/'. $row->S_ID, $row->place), $row->geo_longtitude, $row->geo_latitude, $row->height . ' m.n.m.');
    }
    echo $table->generate();
    ?>

<?= $this->endSection(); ?>
