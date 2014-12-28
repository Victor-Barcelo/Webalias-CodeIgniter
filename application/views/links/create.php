<div class="container">
  <!-- Example row of columns -->
  <div class="row">
    <div class="col-md-4 col-md-offset-2">
      <h2>Crea un alias</h2>
      <p>Crea tu propio alias. Para ello asocia un Tag con un Código y una dirección de página Web.</p>
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
    <div class="input-group input-group-lg">
        <span class="input-group-addon">></span>
        <input type="input" class="form-control" name="url" placeholder="Introduce la página Web" value="<?php echo set_value('url'); ?>">
      </div>

    </div>
  </div>

<?php if (isset($success) && !$success): ?>
  <div class="alert alert-danger" role="alert"><h4>Error! Ya existe una entrada con el tag <strong><?php echo set_value('tag'); ?></strong> y el código <strong><?php echo set_value('code'); ?></strong></h4></div>
<?php endif; ?>


<?php if (isset($success) && $success): ?>
  <div class="alert alert-success" role="alert"><h4>El alias #<strong><?php echo set_value('tag'); ?></strong>@<strong><?php echo set_value('code'); ?></strong> ha sido guardado correctamente.</h4></div>
<?php endif; ?>

<?php echo validation_errors('<div class="alert alert-danger" role="alert"><h4>', '</h4></div>'); ?>
  
  <div class="row text-center">
    <button type="submit" class="btn btn-default">Guarda el alias!</button>
    </form>
  </div>
</div>

<script type="text/javascript">
  window.onload = function(){
    $("#header-but-create").addClass("active");
    $("#header-but-search").removeClass("active");
    $("#header-but-search").addClass("btn-default");
  }
</script>
