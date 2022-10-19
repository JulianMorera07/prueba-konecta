<x-admin-layout>
    <p class="lead">
        Bienvenidos a la cafeteria Konecta
    </p>
    <p>
        Aquí encontraras las querys necesarias, para saber cual es el producto con más stock y el producto más vendido
    </p>
    <div class="row">
        <div class="col card" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title">Mayor stock</h5>
                <h6 class="card-subtitle mb-2 text-muted">MySQL</h6>
                <p class="card-text">
                    <mark>SELECT id, name, stock
                        FROM products
                        WHERE
                        stock = (SELECT MAX(stock)
                        FROM products);</mark>
                </p>
            </div>
        </div>
        <div class="col card" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title">Más vendido</h5>
                <h6 class="card-subtitle mb-2 text-muted">MySQL</h6>
                <p class="card-text">
                    <mark>
                        SELECT COUNT(s.product_id) as product, p.name
                        FROM sales s
                        INNER JOIN products p on s.product_id = p.id
                        GROUP BY  product_id
                        ORDER BY product DESC
                        LIMIT 1;
                    </mark>
                </p>
            </div>
        </div>
    </div>
    <blockquote class="blockquote">
        <p><u>Recuerda que es importante primero crear productos para poder vender alguno, puedes empezar a crealos haciendo clic</u>
            <a href="{{route('products.index')}}">aquí</a></p>
    </blockquote>
</x-admin-layout>
