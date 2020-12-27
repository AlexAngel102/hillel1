<?php


class NoteBook
{
    public string $brand;
    public int $countPages;
    public string $size;
    public string $color;
    public string $material;


}

$notebook = new NoteBook();
$notebook->brand = 'Shkolyarik';
$notebook->countPages = 96;
$notebook->size = '20x15';
$notebook->color = 'red/grey';
$notebook->material = 'cardboard';

echo $notebook->brand.'<br>';
echo $notebook->countPages.'<br>';
echo $notebook->size.'<br>';
echo $notebook->color.'<br>';
echo $notebook->material.'<br>';