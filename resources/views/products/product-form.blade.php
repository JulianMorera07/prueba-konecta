<div class="row g-3">
    <div class="col">
        <label class="form-label" for="name">Nombre de producto</label>
        <input id="name" name="name" class="form-control" type="text" value="{{old('name',$product->name ?? '')}}" required>
    </div>
    <div class="col">
        <label class="form-label" for="reference">Referencia</label>
        <input id="reference" name="reference" class="form-control" type="text" value="{{old('reference',$product->reference ?? '')}}" required>
    </div>
    <div class="col">
        <label class="form-label" for="price">Precio</label>
        <input id="price" name="price" class="form-control" type="number"  min="1" step="any" value="{{old('price',$product->price ?? '')}}" required>
    </div>
</div>
<div class="row g-3">
    <div class="col">
        <label class="form-label" for="weight">Peso</label>
        <input id="weight" name="weight" class="form-control" type="number"  min="1" step="any" value="{{old('weight',$product->weight ?? '')}}" required>
    </div>
    <div class="col">
        <label class="form-label" for="category">Categoria</label>
        <input id="category" name="category" class="form-control" type="text"  min="1" step="any" value="{{old('category',$product->category ?? '')}}" required>
    </div>
    <div class="col">
        <label class="form-label" for="stock">Stock</label>
        <input id="stock" name="stock" class="form-control" type="number"  min="0" step="any" value="{{old('stock',$product->stock ?? '')}}" required>
    </div>
</div>
