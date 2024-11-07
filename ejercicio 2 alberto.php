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

class Profesor {
    private $nombre;
    private $modulos;

    public function inicializar($nom, $mods)
    {
        $this->nombre = $nom;
        $this->modulos = $mods;
    }

    public function imprimir()
    {
        echo "Profesor: " . $this->nombre . "<br>";
        echo "Módulos: " . implode(", ", $this->modulos) . "<br><br>";
    }
}

// Crear alumnos y mostrar sus medias
$alumno1 = new Alumno();
$alumno1->inicializar('Juan', 7, 8, 9);
$alumno1->imprimir();

$alumno2 = new Alumno();
$alumno2->inicializar('Ana', 4, 5, 6);
$alumno2->imprimir();

// Crear profesores y mostrar los módulos que imparten
$profesor1 = new Profesor();
$profesor1->inicializar('Alberto', ['PHP', 'JAVA']);
$profesor1->imprimir();

$profesor2 = new Profesor();
$profesor2->inicializar('Santi', ['ISO', 'ASO']);
$profesor2->imprimir();
?>
</body>
</html>
