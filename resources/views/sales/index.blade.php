<x-admin-layout>
    <form method="POST" action="{{route('sales.store')}}">
        @csrf
        <div class="row">
            <div class="col">
                <label for="products">Productos</label>
                <select id="products" class="form-select product" aria-label="Default select example" name="product_id">
                    <option selected disabled>Seleccione un producto</option>
                    @foreach($products as $product)
                        <option value="{{$product->id}}" data-stock="{{$product->stock}}">{{$product->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="col">
                <label for="quantity" class="form-label">Cantidad</label>
                <input type="number" id="quantity" name="quantity" class="form-control">
            </div>
        </div>
        <button class="btn btn-primary" type="submit" name="action">Vender</button>
    </form>
</x-admin-layout>
