<div class="container">
  <!-- Example row of columns -->
  <div class="row">
    <div class="col-md-4 col-md-offset-2">
      <h2>Consulta un alias</h2>
      <p>Puedes introducir un tag y un código y la página asociada aparecerá! También puedes introducir unicamente un tag y ver todas las páginas asociadas a ese tag.</p>
    </div>
    <div class="col-md-4 my-search">
      <?php echo form_open('',array('role'=>'form')) ?>
      <div class="input-group input-group-lg">
        <span class="input-group-addon">#</span>
        <input type="input" class="form-control" name="tag" placeholder="Introduce el Tag" value="<?php echo set_value('tag'); ?>">
      </div>
      <div class="input-group input-group-lg">
        <span class="input-group-addon">@</span>
        <input type="input" class="form-control" name="code" placeholder="Introduce el Código" value="<?php echo set_value('code'); ?>">
      </div>
    </div>
  </div>

<?php if (isset($has_links) && !$has_links): ?>
<?php if ($has_code): ?>
  <div class="alert alert-danger" role="alert"><h4>No se han encontrado resultados para el tag <strong><?php echo set_value('tag'); ?></strong> y el código <strong><?php echo set_value('code'); ?></strong></h4></div>
<?php else: ?>
  <div class="alert alert-danger" role="alert"><h4>No se han encontrado resultados para el tag <strong><?php echo set_value('tag'); ?></strong></h4></div>
  <script type="text/javascript">
  </script>
<?php endif; ?>
<?php endif; ?>

<?php if (validation_errors()) : ?>
  <?php echo validation_errors('<div class="alert alert-danger" role="alert"><h4>', '</h4></div>'); ?>
<?php endif; ?>
  
  <div class="row text-center">
    <button type="submit" class="btn btn-default">Hazte con el link!</button>
    </form>
  </div>
</div>

<script type="text/javascript">
  window.onload = function(){
    $("#header-but-search").addClass("active");
    $("#header-but-create").removeClass("active");
    $("#header-but-create").addClass("btn-default");
  }
</script>
