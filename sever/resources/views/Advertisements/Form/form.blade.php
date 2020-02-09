<div class="row bg-white border border-secondary p-5 m-5 rounded ">
    <div class="col-12">
       <div class="row mb-3">
           <form_input></form_input>
       </div>
        <div class="row mb-3">
            <div class="col-4">
                <div class="from-group">
                    <form_picture_input></form_picture_input>
                </div>
            </div>
            <div class="col-8">
                <div class="form-group">
                    <label for="exampleInputEmail1">Main Name</label>
                    <input type="text" name="main_name" class="form-control" value="{{ old('main_name') ?? $advertisement->main_name }}" placeholder="Main Name">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Condition</label>
                    <select type="text" name="condition" class="form-control" value="" placeholder="Item Name">
                        <option value="brandnew">Brand New</option>
                        <option value="used">Used</option>
                    </select>
                </div>
            </div>
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


