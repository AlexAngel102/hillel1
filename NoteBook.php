<?php


class NoteBook
{
    public $brand;
    public $countPages;
    public $color;
    public $material;


}

$notebook = new NoteBook();
$notebook->brand = 'Shkolyarik';
$notebook->countPages = 96;
$notebook->color = 'red/grey';
$notebook->material = 'cardboard';

echo $notebook->brand.'<br>';
echo $notebook->countPages.'<br>';
echo $notebook->color.'<br>';
echo $notebook->material.'<br>';