{{-- <!-- Create Design Form -->
<form action="/admin.app-ecommerce-product-add" method="POST" enctype="multipart/form-data">
    @csrf
    <label for="name">Name:</label>
    <input type="text" name="name" id="name" required>
    <br>

    <label for="detail">Detail:</label>
    <textarea name="detail" id="detail" rows="5" required></textarea>
    <br>

    <label for="harga">Harga:</label>
    <input type="text" name="harga" id="harga" required>
    <br>

    <label for="image">Image:</label>
    <input type="file" name="image" id="image">
    <br>

    <label for="categories">Category: </label>
    <select name="category_id" id="category_id" class="form-control select">
        @if (!empty($categories) && count($categories) > 0)
            @foreach ($categories as $item)
                <option value="{{ $item->id }}">{{ $item->name }}</option>
            @endforeach
        @endif
    </select>

    <br>

    <button type="submit">Submit</button>
</form>

<!-- Design List -->
@if (!empty($designs) && count($designs) > 0)
    <ul>
        @foreach ($designs as $design)
            <li>
                <h3>{{ $design->name }}</h3>
                <p>{{ $design->detail }}</p>
                <p>{{ $design->harga }}</p>
                @if ($design->gambar)
                    <img src="{{ asset('storage/' . $design->gambar) }}" alt="Design Image">
                @endif
                <form action="{{ route('admin.destroy', $design->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </li>
        @endforeach
    </ul>
@else
    <p>No designs found.</p>
@endif --}}


<!-- Create Design Form -->
<form action="/admin.app-ecommerce-product-add" method="POST" enctype="multipart/form-data">
    @csrf
    <label for="name">Name:</label>
    <input type="text" name="name" id="name" required>
    <br>

    <label for="detail">Detail:</label>
    <textarea name="detail" id="detail" rows="5" required></textarea>
    <br>

    <label for="harga">Harga:</label>
    <input type="text" name="harga" id="harga" required>
    <br>

    <label for="image">Image:</label>
    <input type="file" name="image" id="image">
    <br>

    <label for="categories">Category:</label>
    <select name="category_id" id="category_id" required>
        @if (!empty($categories) && count($categories) > 0)
            @foreach ($categories as $category)
                <option value="{{ $category->id }}">{{ $category->name }}</option>
            @endforeach
        @else
            <option value="0">No categories found</option>
        @endif
    </select>

    <br>

    <button type="submit">Submit</button>
</form>

<!-- Design List -->
@if (!empty($designs) && count($designs) > 0)
    <ul>
        @foreach ($designs as $design)
            <li>
                <h3>{{ $design->name }}</h3>
                <p>{{ $design->detail }}</p>
                <p>{{ $design->harga }}</p>
                @if ($design->gambar)
                    <img src="{{ asset('storage/' . $design->gambar) }}" alt="Design Image">
                @endif
                <form action="{{ route('admin.destroy', $design->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </li>
        @endforeach
    </ul>
@else
    <p>No designs found.</p>
@endif
