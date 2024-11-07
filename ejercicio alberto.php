//EJERCICIO FARRAGATAO
<!DOCTYPE html>
<html>
<head>
    <title>Pruebas</title>
</head>
<body>
<?php
class Alumno {
    private $nombre;
    private $nota1;
    private $nota2;
    private $nota3;

    public function inicializar($nom, $n1, $n2, $n3)
    {
        $this->nombre = $nom;
        $this->nota1 = $n1;
        $this->nota2 = $n2;
        $this->nota3 = $n3;
    }

    public function calcularMedia()
    {
        return ($this->nota1 + $this->nota2 + $this->nota3) / 3;
    }

    public function imprimir()
    {
        echo "Nombre: " . $this->nombre . "<br>";
        echo "Media: " . $this->calcularMedia() . "<br><br>";
    }
}

$alumno1 = new Alumno();
$alumno1->inicializar('Juan', 7, 8, 9);
$alumno1->imprimir();

$alumno2 = new Alumno();
$alumno2->inicializar('Ana', 6, 7, 5);
$alumno2->imprimir();
?>
</body>
</html>
