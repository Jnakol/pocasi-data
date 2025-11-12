<?= $this->extend('Layout/template') ?>
<?= $this->section('content'); ?>
    <h1>Přehled zemí</h1>
    
    <?php
    $table = new \CodeIgniter\View\Table();

    $template = array(
        'table_open'=> '<table class="table table-bordered">',
        'thead_open'=> '<thead>',
        'thead_close'=> '</thead>',
        'heading_row_start'=> '<tr>',
        'heading_row_end'=>' </tr>',
        'heading_cell_start'=> '<th>',
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

    $table->setHeading('ID','Název', 'Zkratka');

    foreach($zeme as $row) {
        $table->addRow($row->id, anchor()$row->name, $row->short_name);
    }
    echo $table->generate();
    ?>

<?= $this->endSection(); ?>
