<?php
$aluno = $_POST["nomedoaluno"];
$disciplina = $_POST["nomedadisciplina"];
$curso = $_POST["nomedocurso"];

$linkimagem = $_POST["linkimagem"];

$va1 = $_POST["notasva1"];
$va2 = $_POST["notasva2"];
$va3 = $_POST["notasva3"];
$trabalhos = $_POST["notastrab"];
$prof = $_POST["professor"];
$coord = $_POST["coordenador"];


$decl = "DECLARAÇÃO";
$nomefacul = "PROMOVE";
$nao = '';

/*Cáculos*/
function calc ($notaaluno,$total) {
   return round (($notaaluno/$total)*100);
}

$notastotal = $va1 + $va2 + $va3 + $trabalhos;

if ( $notastotal >= 90) {
$resultado = "Excelente";
}
elseif ( $notastotal >= 80){
$resultado = "Ótimo";
}
elseif ( $notastotal >= 70){
$resultado = "Bom";
}
elseif ( $notastotal >= 60){
$resultado = "Ruim";
}
elseif ( $notastotal < 60){
$resultado = "Péssimo";
$nao = "<span class='nao'> NÃO</span>";
}


?>

<!DOCTYPE html>
<html>
<head>
    <title>Declaração</title>
    <link rel="stylesheet" type="text/css" href="css/index.css" >
</head>
<body>
<center>
    <img src=<?php echo '"'.$linkimagem.'"' ?> title=<?php echo '"'.$nomefacul.'"' ?> alt='Faculdade' width="420">
    <h1><?php echo $decl ?></h1>
</center>
<hr>
<p>
    Declaramos, para os devido fins, que <?php echo $aluno ?> <span class="nao"><?php echo $nao ?></span> concluiu satisfatoriamente as atividades da 
    disciplina <?php echo $disciplina ?> do Curso <?php echo $curso ?>.<br><br>
    Segue o desempenho de <?php echo $aluno ?>:
</p>
<br>
<center>
<table border="1">
    <thead>
        <th>Critérios</th>
        <th>Valor Total</th>
        <th>Nota do Aluno</th>
        <th>Desempenho</th>
    </thead>
    <tbody>
        <tr>
            <td>Prova 1</td>
            <td>15</td>
            <td><?php echo $va1 ?></td>
            <td><?php echo calc ($va1,15) ?></td>
        </tr>
        <tr>
            <td>Prova 2</td>
            <td>25</td>
            <td><?php echo $va1 ?></td>
            <td><?php echo calc ($va2,25) ?></td>
        </tr>
        <tr>
            <td>Prova 3</td>
            <td>35</td>
            <td><?php echo $va1 ?></td>
            <td><?php echo calc ($va3,35) ?></td>
        </tr>
        <tr>
            <td>Trabalhos</td>
            <td>25</td>
            <td><?php echo $trabalhos ?></td>
            <td><?php echo calc($trabalhos,25) ?></td>
        </tr>
    </tbody>
</table>
<p> Com esse resultado, o conceito de <?php echo $aluno ?> 
    foi <span class="resultado"><?php echo $resultado . ','?></span> 
    já que sua nota total foi de    <span class="pontos"><?php echo $notastotal?></span> 
    pontos </span>

    <center>
      <p> Belo Horizonte, <?php echo date('d/m/y'); ?> </p>
      <p> ____________________________________ <br> <?php echo $prof?> - Professor(a)</p>
      <p> ____________________________________ <br> <?php echo $coord?> - Coordenador(a) </p>
    </center>
</center>

</body>
</html>