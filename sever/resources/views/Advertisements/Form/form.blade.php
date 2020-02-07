<div class="row bg-white border border-secondary p-5 m-5 rounded ">
    <div class="col-12">
        <form_input></form_input>
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

            <div class="form-group col-5" >
                <label for="exampleInputEmail1">Price</label>
                <input type="text" name="price" class="form-control" value="{{ old('price') ?? $advertisement->price }}"  placeholder="Price">
            </div>

        <button type="submit" class="btn btn-primary ">Submit</button>
    </div>

</div>


