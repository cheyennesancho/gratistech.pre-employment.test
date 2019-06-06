<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>


@media (min-width: 576px)
.form-container {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
}
.form-group {
    margin-bottom: 1rem;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}

}

.inventory-form {
    width: 100%;
    padding: 5%;
}
*, ::after, ::before {
    box-sizing: border-box;
}
@media (min-width: 576px)
.d-sm-flex {
    display: -ms-flexbox!important;
    display: flex!important;
}

.d-none {
    display: none!important;
}
.input-group {
    position: relative;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
    -ms-flex-align: stretch;
    align-items: stretch;
    width: 100%;
}
div {
    display: block;
}

form-control, .single-line {
    background-color: #FFFFFF;
    background-image: none;
    border: 1px solid #e5e6e7;
    border-radius: 1px;
    color: inherit;
    display: block;
    padding: 6px 12px;
    transition: border-color 0.15s ease-in-out 0s, box-shadow 0.15s ease-in-out 0s;
    width: 100%;
}

.form-control {
    font-size: 0.9rem;
}
</style>
</head>
<body>

<div class="sidenav">
<div class="form-group form-container">
        <div class="inventory-form-container sticky">
            <div class="inventory-form">
                <div class="loader" id="vehicle_loader" style="display: none;"></div>
                <label for="description" class=" d-none d-sm-block">Keywords:</label>
                <div class="input-group d-none d-sm-flex">

                    <input type="text" placeholder="Search Vehicles" name="quickSearchVehicleValue" id="quickSearchFilterVehicleValue" class="form-control  d-none d-sm-block" value="">
                    <div class="input-group-btn">
                        <button class="btn btn-lg btn-primary" onclick="quickSearch()">
                            Search
                        </button>
                    </div>
                </div>
                <label for="description">Condition:</label>
                <select class="form-control onChangeElements" name="description" id="description">
                    <option value="">All</option>
                                                                        <option value="New">New</option>
                                                                                                <option value="Used">Used</option>
                                                            </select>

                <label for="vehicleFilterYear">Year:</label>
                <select class="form-control onChangeElements" name="year" id="vehicleFilterYear">
                    <option value="">All</option>
                                                                        <option value="2019">2019</option>
                                                                                                <option value="2018">2018</option>
                                                                                                <option value="2017">2017</option>
                                                                                                <option value="2016">2016</option>
                                                                                                <option value="2015">2015</option>
                                                                                                <option value="2014">2014</option>
                                                                                                <option value="2011">2011</option>
                                                                                                <option value="2010">2010</option>
                                                                                                <option value="2009">2009</option>
                                                                                                <option value="2007">2007</option>
                                                                                                <option value="2006">2006</option>
                                                                                                <option value="2005">2005</option>
                                                                                                <option value="2003">2003</option>
                                                                                                <option value="2001">2001</option>
                                                            </select>

                <label for="vehicleFilterMake">Make:</label>
                <select class="form-control onChangeElements" name="make" id="vehicleFilterMake">
                    <option value="">All</option>
                                                                        <option value="Buick">Buick</option>
                                                                                                <option value="Cadillac">Cadillac</option>
                                                                                                <option value="Chevrolet">Chevrolet</option>
                                                                                                <option value="Chrysler">Chrysler</option>
                                                                                                <option value="Dodge">Dodge</option>
                                                                                                <option value="Ford">Ford</option>
                                                                                                <option value="GMC">GMC</option>
                                                                                                <option value="Hyundai">Hyundai</option>
                                                                                                <option value="Jeep">Jeep</option>
                                                                                                <option value="Kia">Kia</option>
                                                                                                <option value="Mazda">Mazda</option>
                                                                                                <option value="Mercedes-benz">Mercedes-benz</option>
                                                                                                <option value="Mini">Mini</option>
                                                                                                <option value="Mitsubishi">Mitsubishi</option>
                                                                                                <option value="Nissan">Nissan</option>
                                                                                                <option value="Toyota">Toyota</option>
                                                            </select>

                <label for="vehicleFilterModel">Model:</label>
                <select class="form-control onChangeElements" name="model" id="vehicleFilterModel" disabled="">
                                            <option value="">Please Select a Make</option>
                                    </select>


                <label for="price_range" class="mt-3">Price Range:</label>
                <span class="irs irs--big js-irs-0 irs-with-grid"><span class="irs"><span class="irs-line" tabindex="0"></span><span class="irs-min" style="visibility: hidden;">$1,000</span><span class="irs-max" style="visibility: hidden;">$50,000+</span><span class="irs-from" style="visibility: visible; left: -2.90369%;">$1,000</span><span class="irs-to" style="visibility: visible; left: 84.2904%;">$50,000+</span><span class="irs-single" style="visibility: hidden; left: 31.0698%;">$1,000 — $50,000+</span></span><span class="irs-grid" style="width: 89.5728%; left: 5.11362%;"><span class="irs-grid-pol" style="left: 0%"></span><span class="irs-grid-text js-grid-text-0" style="left: 0%; margin-left: -6.26359%;">1,000</span><span class="irs-grid-pol small" style="left: 20%"></span><span class="irs-grid-pol small" style="left: 15%"></span><span class="irs-grid-pol small" style="left: 10%"></span><span class="irs-grid-pol small" style="left: 5%"></span><span class="irs-grid-pol" style="left: 25%"></span><span class="irs-grid-text js-grid-text-1" style="left: 25%; visibility: visible; margin-left: -7.42216%;">13,250</span><span class="irs-grid-pol small" style="left: 45%"></span><span class="irs-grid-pol small" style="left: 40%"></span><span class="irs-grid-pol small" style="left: 35%"></span><span class="irs-grid-pol small" style="left: 30%"></span><span class="irs-grid-pol" style="left: 50%"></span><span class="irs-grid-text js-grid-text-2" style="left: 50%; visibility: visible; margin-left: -7.42216%;">25,500</span><span class="irs-grid-pol small" style="left: 70%"></span><span class="irs-grid-pol small" style="left: 65%"></span><span class="irs-grid-pol small" style="left: 60%"></span><span class="irs-grid-pol small" style="left: 55%"></span><span class="irs-grid-pol" style="left: 75%"></span><span class="irs-grid-text js-grid-text-3" style="left: 75%; visibility: visible; margin-left: -7.42216%;">37,750</span><span class="irs-grid-pol small" style="left: 95%"></span><span class="irs-grid-pol small" style="left: 90%"></span><span class="irs-grid-pol small" style="left: 85%"></span><span class="irs-grid-pol small" style="left: 80%"></span><span class="irs-grid-pol" style="left: 100%"></span><span class="irs-grid-text js-grid-text-4" style="left: 100%; margin-left: -7.42216%;">50,000</span></span><span class="irs-bar" style="left: 5.21362%; width: 89.5728%;"></span><span class="irs-shadow shadow-from" style="display: none;"></span><span class="irs-shadow shadow-to" style="display: none;"></span><span class="irs-handle from" style="left: 0%;"><i></i><i></i><i></i></span><span class="irs-handle to" style="left: 89.5728%;"><i></i><i></i><i></i></span></span><input id="price_range" type="text" class="js-range-slider irs-hidden-input" name="price_range" value="" data-type="double" data-min="1000" data-max="50000" data-from="0" data-to="50000" data-grid="true" data-prefix="$" data-max-postfix="+" tabindex="-1" readonly="">

                <label for="mileage_range" class="mt-3">Mileage:</label>
                <span class="irs irs--big js-irs-1 irs-with-grid"><span class="irs"><span class="irs-line" tabindex="0"></span><span class="irs-min" style="visibility: hidden;">0</span><span class="irs-max" style="visibility: hidden;">150,000+</span><span class="irs-from" style="visibility: visible; left: 2.31354%;">0</span><span class="irs-to" style="visibility: visible; left: 84.2904%;">150,000+</span><span class="irs-single" style="visibility: hidden; left: 38.8993%;">0 — 150,000+</span></span><span class="irs-grid" style="width: 89.5728%; left: 5.11362%;"><span class="irs-grid-pol" style="left: 0%"></span><span class="irs-grid-text js-grid-text-0" style="left: 0%; margin-left: -2.20493%;">0</span><span class="irs-grid-pol small" style="left: 20%"></span><span class="irs-grid-pol small" style="left: 15%"></span><span class="irs-grid-pol small" style="left: 10%"></span><span class="irs-grid-pol small" style="left: 5%"></span><span class="irs-grid-pol" style="left: 25%"></span><span class="irs-grid-text js-grid-text-1" style="left: 25%; visibility: visible; margin-left: -7.42216%;">37,500</span><span class="irs-grid-pol small" style="left: 45%"></span><span class="irs-grid-pol small" style="left: 40%"></span><span class="irs-grid-pol small" style="left: 35%"></span><span class="irs-grid-pol small" style="left: 30%"></span><span class="irs-grid-pol" style="left: 50%"></span><span class="irs-grid-text js-grid-text-2" style="left: 50%; visibility: visible; margin-left: -7.42216%;">75,000</span><span class="irs-grid-pol small" style="left: 70%"></span><span class="irs-grid-pol small" style="left: 65%"></span><span class="irs-grid-pol small" style="left: 60%"></span><span class="irs-grid-pol small" style="left: 55%"></span><span class="irs-grid-pol" style="left: 75%"></span><span class="irs-grid-text js-grid-text-3" style="left: 75%; visibility: visible; margin-left: -8.42868%;">112,500</span><span class="irs-grid-pol small" style="left: 95%"></span><span class="irs-grid-pol small" style="left: 90%"></span><span class="irs-grid-pol small" style="left: 85%"></span><span class="irs-grid-pol small" style="left: 80%"></span><span class="irs-grid-pol" style="left: 100%"></span><span class="irs-grid-text js-grid-text-4" style="left: 100%; margin-left: -8.58436%;">150,000</span></span><span class="irs-bar" style="left: 5.21362%; width: 89.5728%;"></span><span class="irs-shadow shadow-from" style="display: none;"></span><span class="irs-shadow shadow-to" style="display: none;"></span><span class="irs-handle from" style="left: 0%;"><i></i><i></i><i></i></span><span class="irs-handle to" style="left: 89.5728%;"><i></i><i></i><i></i></span></span><input id="mileage_range" type="text" class="js-range-slider irs-hidden-input" name="mileage_range" value="" data-type="double" data-min="0" data-max="150000" data-from="0" data-to="150000" data-grid="true" data-max-postfix="+" tabindex="-1" readonly="">

                <label for="vehicleFilterClearFilters"></label>
                <button class="btn btn-primary form-control" id="vehicleFilterClearFilters">Reset Filters</button>
            </div>
        </div>
    </div>
</div> 