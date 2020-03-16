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
                <select id="publish-dwelling-currency-dropdown" class="form-control sm-text">
                    @foreach ($currency as $curr)
                        <option value={{$curr->id}}>{{$curr->name}}</option>
                    @endforeach
                        <option value="other">Otra</option>
                </select>
            </div>
        </div>
        <div class="row m-4 d-none" id='other-currency-container'>
            <div class="col-md-6">
                <span class="badge badge-info">Coloque las siglas de la moneda</span>
            </div>
            <div class="col-md-6">
                <input type="text" class="form-control" id="dwelling-other-currency-input" name='other-currency'>
            </div>
    </div>

    </div>    
</div>