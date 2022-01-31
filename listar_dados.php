<?php

include_once('conexao_alimentador.php');

$pagina = filter_input(INPUT_POST, "pagina", FILTER_SANITIZE_NUMBER_INT);
$qnt_result_pg = filter_input(INPUT_POST, "qnt_result_pg", FILTER_SANITIZE_NUMBER_INT);
//calcular o inicio da visualização
$inicio = ($pagina * $qnt_result_pg) - $qnt_result_pg;


//consultando no BD
$result_ativacao = "SELECT * FROM tbdados ORDER BY id DESC LIMIT $inicio, $qnt_result_pg";
$resultado_ativacao = mysqli_query($conexao, $result_ativacao);
?>

<?php
//Verificar se encontrou resultado na tabela "tbdados"
if (($resultado_ativacao) AND ($resultado_ativacao -> num_rows != 0)) {
    ?>
      <table class="table table-sm table-striped table-bordered table-hover" style="background-color:#87CEFA;" >
        <caption>Lista de ativações</caption>
          <thead >
              <tr>
                    <th>ID</th>
                    <th>Hora</th>
                    <th>Data</th>
              </tr>
          </thead>
      <tbody>
    <?php
      while ($row_ativacao = mysqli_fetch_assoc ($resultado_ativacao)) {
        ?>
        <tr>
          <th><?php echo $row_ativacao['id']; ?></th>
          <td><?php echo $row_ativacao['hora']; ?></td>
          <td><?php echo $row_ativacao['data']; ?></td>
        </tr>
        <?php
      } ?>
      </tbody>
    </table>
<?php
//Paginação
$result_pg = "SELECT COUNT(id) AS num_result FROM tbdados";
$resultado_pg = mysqli_query($conexao, $result_pg);
$row_pg = mysqli_fetch_assoc($resultado_pg);

//quantidade de páginas
$quantidade_pg = ceil($row_pg['num_result'] / $qnt_result_pg);

//limitar links antes e depois
$max_links = 2;

echo '<nav aria-label="pafinacao">';
echo '<ul class="pagination">';
echo '<li class="page-item">';
echo "<a href='#' class='page-link' onclick='listar_dados(1, $qnt_result_pg)'> Primeira </a>";
echo '</li>';
for($pag_ant = $pagina - $max_links; $pag_ant <= $pagina - 1; $pag_ant++){
  if($pag_ant >= 1){
  echo "<li class='page-item'><a class='page-link' href='#' onclick='listar_dados($pag_ant, $qnt_result_pg)'> $pag_ant </a></li>";
  }
}
echo '<li class="page-item active">';
echo "<span class='page-link'>";
echo "$pagina";
echo '</span>';
echo '</li>';
for ($pag_dep = $pagina + 1; $pag_dep <= $pagina + $max_links; $pag_dep++) {
  if($pag_dep <= $quantidade_pg){
  echo "<li class='page-item'><a class='page-link' href='#' onclick='listar_dados($pag_dep, $qnt_result_pg)'> $pag_dep </a></li>";
  }
}
echo '<li class="page-item">';
echo "<a class='page-link' href='#' onclick='listar_dados($quantidade_pg, $qnt_result_pg)'> Última </a>";
echo '</li>';
echo '</ul>';
echo '</nav>';

} else{
  echo "<div class='alert alert-danger' role='alert'>'Nenhum dado encontrado'; </div>";
  
}
?>
  