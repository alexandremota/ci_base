   <!-- Page Content -->
<div class="container">
  
<h3 class="mt-3"><?php echo $titulo; ?></h3>

<nav class="navbar navbar-light bg-light">
    <form class="form-inline" action="<?php echo base_url('home/buscarotas'); ?>" method="post">
        <select class="form-control mr-sm-2 form-control-sm" id="origem" name="origem">
            <option value=""></option>
            <option value="BELA VISTA DE GOIÁS">BVG</option>
            <option value="MARAVILHA">MRV</option>
            <option value="GOVERNADOR VALADARES">GRV</option>
            <option value="ITAPETININGA">ITA</option>
        </select>
        <select class="form-control mr-sm-2 form-control-sm" id="uf_destino" name="uf_destino">
            <option value=""></option>
            <option value="SP">SP</option>
            <option value="GO">GO</option>
            <option value="MG">MG</option>
            <option value="BA">BA</option>
        </select>
        <input class="form-control mr-sm-2 form-control-sm" type="search" placeholder="Cidade Destino" aria-label="Search" name="cidade">
        <button class="btn btn-outline-success my-2 my-sm-0 btn-sm" type="submit">Busca</button>
    </form>
</nav>

 <?php //var_dump($rotas); ?>

<table class="table table-striped table-sm">
   
    <tr>
        <th>Origem</th>
        <th>Cidade</th>
        <th>km</th>
        <th>Lead Time</th>

    </tr>
    <?php foreach ($rotas as $c):  ?>   
    <tr>
        <td><?php echo $c['origem']; ?></td>
        <td><?php echo $c['cidade'] . " - " . $c['uf_destino']; ?></td>
        <td><?php echo $c['distancia_txt'] ;?></td>
        <td><?php echo $c['duracao_txt'] ;?></td>
    </tr>
    <?php endforeach; ?>    
</table>


<?php 

// se a variavel $paginação não tiver nenhum valo retornar vazio senão mostra os links da paginação
if($paginacao) echo $paginacao;

?>





</div><!--Fecha container v_content -->

