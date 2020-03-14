<!-- precio y moneda -->
<div class="row m-3">
    <div class="col-md-6">
        <div class="row">
            <div class="col-md-12">
                <span class="badge badge-info">Precio</span>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Precio">
            </div>
        </div>
    </div>

    <div class="col-md-6">
        <div class="row">
            <div class="col-md-12">
                <span class="badge badge-info">Moneda</span>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <select id="country" class="form-control sm-text" onchange="">
                    @foreach ($currency as $curr)
                        <option value={{$curr->id}}>{{$curr->name}}</option>
                    @endforeach
                </select>
            </div>
        </div>
    </div>
    
</div>