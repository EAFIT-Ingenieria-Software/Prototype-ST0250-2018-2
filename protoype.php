<?php
abstract class PrototipoLibro {
    protected $titulo;
    protected $tema;
    abstract function __clone();
    function obtenerTitulo() {
        return $this->titulo;
    }
    function establecerTitulo($tituloIn) {
        $this->titulo = $tituloIn;
    }
    function obtenerTema() {
        return $this->tema;
    }
}

class PrototipoLibroPHP extends PrototipoLibro {
    function __construct() {
        $this->tema = 'PHP';
    }
    function __clone() {
    }
}

class PrototipoLibroSQL extends PrototipoLibro {
    function __construct() {
        $this->tema = 'SQL';
    }
    function __clone() {
    }
}
 
  writeln('PRUEBA DEL PATRÓN PROTOTIPO');
  writeln('');

  $phpProto = new PrototipoLibroPHP();
  $sqlProto = new PrototipoLibroSQL();

  $libro1 = clone $sqlProto;
  $libro1->establecerTitulo('SQL para Gatos');
  writeln('Libro 1 tema: '.$libro1->obtenerTema());
  writeln('Libro 1 título: '.$libro1->obtenerTitulo());
  writeln('');

  $libro2 = clone $phpProto;
  $libro2->establecerTitulo('OReilly Learning PHP 5');
  writeln('Libro 2 tema: '.$libro2->obtenerTema());
  writeln('Libro 2 título: '.$libro2->obtenerTitulo());
  writeln('');

  $libro3 = clone $sqlProto;
  $libro3->establecerTitulo('OReilly Learning SQL');
  writeln('Libro 3 tema: '.$libro3->obtenerTema());
  writeln('Libro 3 título: '.$libro3->obtenerTitulo());
  writeln('');

  writeln('FIN PRUEBA PATRÓN PROTOTIPO');

  function writeln($line_in) {
    echo $line_in."<br/>";
  }
?>

PRUEBA PATRÓN PROTOTIPO
Libro 1 tema: SQL Libro 1 título: SQL Para Gatos
Libro 2 tema: PHP Libro 2 título: OReilly Learning PHP 5 
Libro 3 tema: SQL Libro 3 título: OReilly Learning SQL
FIN PRUEBA PATRÓN PROTOTIPO
