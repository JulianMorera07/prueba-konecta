<x-admin-layout>
    <div class="row">
        <div class="col">
            <p class="lead">
                <a type="button" class="btn btn-primary" href="{{route('products.create')}}">Crear nuevo producto</a>
            </p>
        </div>
    </div>
    <div class="row">
        <table class="table">
            <thead>
                <th>ID</th>
                <th>Nombre de producto</th>
                <th>Referencia</th>
                <th>Precio</th>
                <th>Peso</th>
                <th>Categoría</th>
                <th>Stock</th>
                <th>Fecha de creación</th>
                <th>Actions</th>
            </thead>
            <tbody>
                @foreach($products as $product)
                    <tr>
                        <td>{{$product->id}}</td>
                        <td>{{$product->name}}</td>
                        <td>{{$product->reference}}</td>
                        <td>{{number_format($product->price)}}</td>
                        <td>{{$product->weight}}</td>
                        <td>{{$product->category}}</td>
                        <td>{{$product->stock}}</td>
                        <td>{{$product->created_at}}</td>
                        <td>
                            <div class="row">
                                <div class="col-md-1">
                                    <a class=""
                                       href="{{ route('products.edit', $product) }}">
                                        <i class="bi bi-pencil-fill"></i>
                                    </a>
                                </div>
                                <div class="col-md-1">
                                    <form action="{{ route('products.destroy', $product) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" style="border: none; background-color: white">
                                            <i class="bi bi-trash-fill"></i>
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-admin-layout>
