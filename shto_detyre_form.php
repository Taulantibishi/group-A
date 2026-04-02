<?php
include("header.php");
?>

<form action="shto_detyre.php" method="post">

<h3 class="my-4 text-center">Shto nje detyre:</h3>

<div class="mb-3">
<input type="text" name="emri" id="emri" placeholder="Sheno emrin" class="form-control">
</div>

<div class="mb-3">
<textarea  rows="5" name="pershkrimi" id="pershkrimi" placeholder="Sheno pershkrimin e detyres" class="form-control"></textarea>
</div> 

<div class="mb-3">
    <div class="row">
        <div class="col-6">
            <label for="data_fillimit" class="form-label">Data Fillimit:</label>
         <input type="date" name="data_fillimit" id="data_fillimit" class="form-control">
        </div>
        <div class="col-6">
        <label for="data_perfundimit" class="form-label">Data Perfundimit:</label>

         <input type="date" name="data_perfundimit" id="data_perfundimit" class="form-control">

        </div>
    </div>
</div>

<div class="mb-3">
    <button class="btn btn-dark w-100" type="submit">Shto Detyren</button>
</div>
</form>


<?php
include("footer.php");
?>