
<form wire:submit.prevent="submit">
<div class="form-group">
    <label>Razon social</label>
    <input type="text" class="form-control" wire:model='razonsocial'>
    @error('razonsocial') <span>{{ $message }}</span> @enderror
</div>

<div class="form-group">
    <label>Representante legal</label>
    <textarea class="form-control" wire:model='representantelegal'></textarea>
    @error('representantelegal') <span>{{ $message }}</span> @enderror
</div>

<div class="form-group">
    <label>RFC</label>
    <input  class="form-control" wire:model='rfc'>
    @error('rfc') <span>{{ $message }}</span> @enderror
</div>

<div class="form-group">
    <label>Direccion</label>
    <input type="text" class="form-control" wire:model='direccion' step=".01">
    @error('direccion') <span>{{ $message }}</span> @enderror
</div>
<div class="form-group">
    <label>Ciudad</label>
    <input type="text" class="form-control" wire:model='ciudad' step=".01">
    @error('ciudad') <span>{{ $message }}</span> @enderror
</div>
<div class="form-group">
    <label>Pais</label>
    <input type="text" class="form-control" wire:model='pais' step=".01">
    @error('pais') <span>{{ $message }}</span> @enderror
</div>

<div class="form-group">
    <label>Correo Electronico</label>
    <input type="email" class="form-control" wire:model='correo' step=".01">
    @error('correo') <span>{{ $message }}</span> @enderror
</div>
<div class="form-group">
    <label>Telefono</label>
    <input type="number" class="form-control" wire:model='telefono' step=".01">
    @error('telefono') <span>{{ $message }}</span> @enderror
</div>
<div class="form-group">
    <label>Fecha de registro</label>
    <input type="date" class="form-control" wire:model='date' step=".01">
    @error('date') <span>{{ $message }}</span> @enderror
</div>
<div class="form-group">
    <label>Matricula</label>
    <input type="text" class="form-control" wire:model='matriculaid2' step=".01">
    @error('matriculaid2') <span>{{ $message }}</span> @enderror
</div>


           
    </form>       
           
           
     