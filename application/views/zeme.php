
<div class="col-md-8 offset-md-2" > 
<?php

    echo anchor('pridej', 'přidat', 'class = "btn btn-success btn-block"');
    $this->table->set_heading('Název');
    foreach($data as $key => $row){
        $this->table->add_row($row->nazevZeme);
    }
    $template = array(
        'table_open'            => '<table class="table table-striped text-center ">',
    
        'thead_open'            => '<thead>',
        'thead_close'           => '</thead>',
    
        'heading_row_start'     => '<tr>',
        'heading_row_end'       => '</tr>',
        'heading_cell_start'    => '<th>',
        'heading_cell_end'      => '</th>',
    
        'tbody_open'            => '<tbody>',
        'tbody_close'           => '</tbody>',
    
        'row_start'             => '<tr>',
        'row_end'               => '</tr>',
        'cell_start'            => '<td>',
        'cell_end'              => '</td>',
    
        'row_alt_start'         => '<tr>',
        'row_alt_end'           => '</tr>',
        'cell_alt_start'        => '<td>',
        'cell_alt_end'          => '</td>',
    
        'table_close'           => '</table>'
    );
    
    $this->table->set_template($template);
    echo $this->table->generate();
    
    
    ?>

    </div>