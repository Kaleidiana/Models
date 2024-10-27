<h1>Products List</h1>

<ul>
    @foreach ($products as $product)
        <li>
            <form action="{{ route('products.destroy', $product->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit">Delete Product</button>
            </form>
            <a href="{{ route('products.show', $product->id) }}">{{ $product->name }}</a>
        </li>
    @endforeach
</ul>

<!-- Link to create a new product -->
<a href="{{ route('products.create') }}">Create Product</a>
