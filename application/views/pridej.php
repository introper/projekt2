<div style="padding-top: 3rem;">
<h2>Přídej zemi</h2>

<?php
$this->load->helper('form');

echo form_open('pridej/send');
?>
<div class="form-group">
<?php
echo form_label('Název země', 'name');
echo form_input('name', '', 'class="form-control"');
?>
</div>
<?php
echo form_submit('submit', 'odeslat', 'class="btn btn-primary"');
?>
</div>