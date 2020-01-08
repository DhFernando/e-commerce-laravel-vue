<div class="row">
    <div class="col-12">
        <input_field></input_field>
        <div class="form-group">
            <label for="exampleInputEmail1">Brand</label>
            <input type="text" name="brand" class="form-control" value="{{ old('brand') ?? $advertisement->brand }}" placeholder="Brand">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Condition</label>
            <select type="text" name="condition" class="form-control" value="" placeholder="Item Name">
                <option value="brandnew">Brand New</option>
                <option value="used">Used</option>
            </select>
        </div>

        <div class="form-group">
            <label for="exampleInputPassword1">Description</label>
            <textarea type="text" class="form-control" name="description" value="{{ old('description') ?? $advertisement->description }}" placeholder="Description" cols="30" rows="10"></textarea>
        </div>
        <div class="col-12 d-flex">
            <div class="form-group">
                <label for="exampleInputEmail1">Price</label>
                <input type="text" name="price" class="form-control" value="{{ old('price') ?? $advertisement->price }}"  placeholder="Price">
            </div>

        </div>
    </div>
</div>
