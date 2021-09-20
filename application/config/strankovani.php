<?php


$config['num_links'] = 2;
$config['use_page_numbers'] = TRUE;
$config['full_tag_open'] = '<ul class="pagination">';
$config['full_tag_close'] = '</ul>';


$config['first_tag_open'] = '<li class="page-item"><a class="page-link" href="http://localhost/projekt2/valky/7/1""';
$config['first_tag_close'] = '</a></li>';

//při nastavení hodnoty first_link na false je to zbytečné, jinak se v Bootstrapu vše v rámci stránkování obaluje do <li>
$config['prev_link'] = '&laquo';
$config['prev_tag_open'] = '<li class="page-item"><a class="page-link"';
$config['prev_tag_close'] = '</a></li>';

//předcházející strana, jedná se o symbol dvojité šipky vlevo, opět vše obalujeme do <li>
$config['next_link'] = '&raquo';
$config['next_tag_open'] = '<li class="page-item"><a class="page-link"';
$config['next_tag_close'] = '</a></li>';

//následující strana, jedná se o symbol dvojité šipky vpravo, opět vše obalujeme do <li>

$config['last_tag_open'] = '<li class="page-item"><a class="page-link"href="http://localhost/projekt2/valky/7/5""';
$config['last_tag_close'] = '</a></li>';

//při nastavení hodnoty last_link na false je to zbytečné, jinak se v Bootstrapu vše v rámci stránkování obaluje do <li>
$config['cur_tag_open'] = '<li class="page-item"><a class="page-link" href="#">';
$config['cur_tag_close'] = '</a></li>';

//aktuální stránka, chceme ji zvýrazněnou, směřuje sama na sebe
$config['num_tag_open'] = '<li class="page-item active"><a class="page-link"';
$config['num_tag_close'] = '</a></li>';
?>