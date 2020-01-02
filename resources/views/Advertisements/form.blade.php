<div class="form-group">
    <label for="exampleInputEmail1">Item Name</label>
    <input type="text" name="itemName" class="form-control" value="{{ old('itemName') ?? $advertisement->itemName }}" placeholder="Item Name">
</div>
<div class="form-group">
    <label for="exampleInputPassword1">Description</label>
    <input type="text" class="form-control" name="description" value="{{ old('description') ?? $advertisement->description }}" placeholder="Description">
</div>
<div class="form-group">
    <label for="exampleInputEmail1">Item Price</label>
    <input type="text" name="price" class="form-control" value="{{ old('price') ?? $advertisement->price }}"  placeholder="Price">
</div>
