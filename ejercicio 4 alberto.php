declarar una clase persona qeu contenga solo el nombre, con las funciones inicializae y visualizar y a continucacion dos clases hijas, una se llama clase profesor y otra clase alumno, el profesor con le modulo que imparte y el aluumno con sus medias

<!DOCTYPE html>
<html>
<head>
    <title>Pruebas</title>
</head>
<body>
<?php
class Persona {
    protected $nombre;

    public function inicializar($nom)
    {
        $this->nombre = $nom;
    }

    public function visualizar()
    {
        echo "Nombre: " . $this->nombre . "<br>";
    }
}

class Alumno extends Persona {
    private $nota1;
    private $nota2;
    private $nota3;

    public function inicializarAlumno($nom, $n1, $n2, $n3)
    {
        $this->inicializar($nom);  // Inicializa el nombre usando el método de Persona
        $this->nota1 = $n1;
        $this->nota2 = $n2;
        $this->nota3 = $n3;
    }

    public function calcularMedia()
    {
        return ($this->nota1 + $this->nota2 + $this->nota3) / 3;
    }

    public function visualizar()
    {
        parent::visualizar();  // Muestra el nombre de Persona
        echo "Media: " . $this->calcularMedia() . "<br><br>";
    }
}

class Profesor extends Persona {
    private $modulo;

    public function inicializarProfesor($nom, $mod)
    {
        $this->inicializar($nom);  // Inicializa el nombre usando el método de Persona
        $this->modulo = $mod;
    }

    public function visualizar()
    {
        parent::visualizar();  // Muestra el nombre de Persona
        echo "Módulo: " . $this->modulo . "<br><br>";
    }
}

// Crear alumnos y mostrar sus medias
$alumno1 = new Alumno();
$alumno1->inicializarAlumno('Juan', 7, 8, 9);
$alumno1->visualizar();

$alumno2 = new Alumno();
$alumno2->inicializarAlumno('Ana', 4, 5, 6);
$alumno2->visualizar();

// Crear profesores y mostrar los módulos que imparten
$profesor1 = new Profesor();
$profesor1->inicializarProfesor('Alberto', 'PHP');
$profesor1->visualizar();

$profesor2 = new Profesor();
$profesor2->inicializarProfesor('Santi', 'ISO');
$profesor2->visualizar();
?>
</body>
</html>
