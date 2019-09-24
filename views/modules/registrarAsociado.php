<h3 class="pt-2">REGISTRAR ASOCIADO</h3>
<hr>

<form>
  <div class="form-row">
    <div class="col-md-4 mb-3">
      <label for="validationDefault01">Nombre titular</label>
      <input type="text" class="form-control" id="validationDefault01" placeholder="Nombre" value="Lenyn" required>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationDefault02">Apellidos</label>
      <input type="text" class="form-control" id="validationDefault02" placeholder="Apellidos" value="Flores Balandra" required>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationDefaultUsername">DNI</label>
      <div class="input-group">
        <div class="input-group-prepend">
          <span class="input-group-text" id="inputGroupPrepend2">DNI</span>
        </div>
        <input type="text" class="form-control" id="validationDefaultUsername" placeholder="Username" aria-describedby="inputGroupPrepend2" required>
      </div>
    </div>
  </div>
  <div class="form-row">
    <div class="col-md-6 mb-3">
      <label for="validationDefault03">Ubicación</label>
      <input type="text" class="form-control" id="validationDefault03" placeholder="Ubicación" required>
    </div>
    <div class="col-md-3 mb-3">
      <label for="validationDefault04">Distrito</label>
      <input type="text" class="form-control" id="validationDefault04" placeholder="Distrito" required>
    </div>
    <div class="col-md-3 mb-3">
      <label for="validationDefault05">Zip</label>
      <input type="text" class="form-control" id="validationDefault05" placeholder="Zip" required>
    </div>
  </div>
  <div class="form-group">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
      <label class="form-check-label" for="invalidCheck2">
        Corte de Agua
      </label>
    </div>
    <div class="custom-control custom-switch">
      <input type="checkbox" class="custom-control-input" id="customSwitch1">
      <label class="custom-control-label" for="customSwitch1">Corte de agua</label>
    </div>
  </div>
  <button class="btn btn-primary" type="submit">Submit form</button>
</form>