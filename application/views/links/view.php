<?php if (isset($links) && count($links)>0): ?>
<div class="container">
   <!-- Example row of columns -->
   <div class="row">
      <div class="col-md-12">
         <h3>Enlaces</h3>
         <table class="table">
            <thead>
               <tr>
                  <th>Tag</th>
                  <th>Código</th>
                  <th>Url</th>
               </tr>
            </thead>
            <tbody>
               <?php foreach ($links as $item): ?>
               <tr>
                  <td><?=$item['tag']?></td>
                  <td><?=$item['code']?></td>
                  <td><a href="<?=$item['url']?>"><?=$item['url']?></a></td>
               </tr>
               <?php endforeach; ?>
            </tbody>
         </table>
      </div>
   </div>
</div> <!-- /container -->

<?php else: ?>
<div class="alert alert-danger" role="alert"><h4>No se han encontrado resultados</h4></div>

<?php endif; ?>

  <div class="row text-center">
    <form action="<?=$main_url?>">
          <button type="submit" class="btn btn-default" href="www.google.es">Realizar otra búsqueda</button>
    </form>
  </div>

<script type="text/javascript">
  window.onload = function(){
    $("#header-but-search").addClass("active");
    $("#header-but-create").removeClass("active");
    $("#header-but-create").addClass("btn-default");
  }
</script>
