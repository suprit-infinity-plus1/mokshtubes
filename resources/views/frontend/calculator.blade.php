@extends('layouts.master')
@section('title', 'Pipe & Tube Weight Calculator | Easy & Accurate | MokshTubes')
@section('meta_description',
'Use MokshTubes’ pipe and tube weight calculator for accurate measurements, helping you plan projects efficiently with reliable and precise data.')
@section('og_image', asset('assets/images/about/about-materials_11zon.webp'))
@section('og_type', 'website')

@section('extracss')
<style>
    .list-group-item.active {
        background-color: transparent !important;
        color: #174268 !important;
        font-weight: bold;
        border-left: 4px solid #174268;
    }

    ..list-group-item.active {
        border-color: #174268 !important;
    }

    /* Hide spinners in number inputs */
    input[type="number"]::-webkit-inner-spin-button,
    input[type="number"]::-webkit-outer-spin-button {
        -webkit-appearance: none;
        margin: 0;
    }

    input[type="number"] {
        -moz-appearance: textfield;
        /* Firefox */
    }

</style>
@endsection


@section('content')
<div class="container mt-5">
    <div class="row">
        <!-- Mobile dropdown -->
        <div class="col-12 d-md-none mb-3">
            <select class="form-select" id="tabSelect">
                <option value="tab1">Steel sheets and plates</option>
                <option value="tab2">Seamless steel pipes - circular</option>
                <option value="tab3">Hollow structural sections - circular</option>
                <option value="tab4">Hollow structural sections - square</option>
                <option value="tab5">Hollow structural sections - rectangular</option>
                <option value="tab6">Round steel bars</option>
                <option value="tab7">Square steel bars</option>
                <option value="tab8">Flat bars</option>
                <option value="tab9">Equal angles</option>
                <option value="tab10">Unequal angles</option>
                <option value="tab11">Channels - GOST</option>
                <option value="tab12">Channels - UPN</option>
                <option value="tab13">Beams - IPN</option>
                <option value="tab14">Beams - IPE</option>
                <option value="tab15">Beams - HEA (IPBL)</option>
                <option value="tab16">Beams - HEB (IPB)</option>
            </select>
        </div>

        <!-- Left nav -->
        <div class="col-md-4 d-none d-md-block mb-5">
            <h1 class="mb-3 fs-3">Calculator</h1>

            <div class="list-group" id="tabList">
                <button class="list-group-item list-group-item-action active" data-target="tab1">Steel sheets and
                    plates</button>
                <button class="list-group-item list-group-item-action" data-target="tab2">Seamless steel pipes -
                    circular</button>
                <button class="list-group-item list-group-item-action" data-target="tab3">Hollow structural sections -
                    circular</button>
                <button class="list-group-item list-group-item-action" data-target="tab4">Hollow structural sections -
                    square</button>
                <button class="list-group-item list-group-item-action" data-target="tab5">Hollow structural sections -
                    rectangular</button>
                <button class="list-group-item list-group-item-action" data-target="tab6">Round steel bars</button>
                <button class="list-group-item list-group-item-action" data-target="tab7">Square steel bars</button>
                <button class="list-group-item list-group-item-action" data-target="tab8">Flat bars</button>
                <button class="list-group-item list-group-item-action" data-target="tab9">Equal angles</button>
                <button class="list-group-item list-group-item-action" data-target="tab10">Unequal angles</button>
                <button class="list-group-item list-group-item-action" data-target="tab11">Channels - GOST</button>
                <button class="list-group-item list-group-item-action" data-target="tab12">Channels - UPN</button>
                <button class="list-group-item list-group-item-action" data-target="tab13">Beams - IPN</button>
                <button class="list-group-item list-group-item-action" data-target="tab14">Beams - IPE</button>
                <button class="list-group-item list-group-item-action" data-target="tab15">Beams - HEA (IPBL)</button>
                <button class="list-group-item list-group-item-action" data-target="tab16">Beams - HEB (IPB)</button>
            </div>
        </div>

        <!-- Right content -->
        <div class="col-md-8">
            <div id="tabContents">
                {{-- Steel sheets and plates --}}
                <div id="tab1" class="tab-content-item">
                    <h2 class="mb-3 fs-3">Calculator for Steel sheets and plates</h2>

                    <div class="row">
                        <!-- Left: Input Fields -->
                        <div class="col-lg-6 mb-4 mb-lg-0">
                            <p>Input your values in the fields below:</p>

                            <div class="row">
                                <!-- Thickness -->
                                <div class="col-12 mb-3">
                                    <div class="d-flex align-items-center">
                                        <label class="form-label mb-0 me-3" style="width: 120px;">Thickness, t</label>
                                        <div class="d-flex align-items-center flex-grow-1">
                                            <input type="number" class="form-control me-2" id="sheetThickness1" value="1" placeholder="e.g. 1" />
                                            <span class="text-nowrap">mm</span>
                                        </div>
                                    </div>
                                </div>

                                <!-- Width -->
                                <div class="col-12 mb-3">
                                    <div class="d-flex align-items-center">
                                        <label class="form-label mb-0 me-3" style="width: 120px;">Width, W</label>
                                        <div class="d-flex align-items-center flex-grow-1">
                                            <input type="number" class="form-control me-2" id="sheetWidth1" value="1000" placeholder="e.g. 1000" />
                                            <span class="text-nowrap">mm</span>
                                        </div>
                                    </div>
                                </div>

                                <!-- Length -->
                                <div class="col-12 mb-3">
                                    <div class="d-flex align-items-center">
                                        <label class="form-label mb-0 me-3" style="width: 120px;">Length, L</label>
                                        <div class="d-flex align-items-center flex-grow-1">
                                            <input type="number" class="form-control me-2" id="sheetLength1" value="2000" placeholder="e.g. 2000" />
                                            <span class="text-nowrap">mm</span>
                                        </div>
                                    </div>
                                </div>

                                <!-- Number of pieces -->
                                <div class="col-12 mb-3">
                                    <div class="d-flex align-items-center">
                                        <label class="form-label mb-0 me-3" style="width: 120px;">No. of
                                            pieces</label>
                                        <div class="flex-grow-1">
                                            <input type="number" class="form-control" id="sheetPieces1" value="1" placeholder="e.g. 1" />
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Result -->
                            <div class="mt-2">
                                <h6><strong>Result</strong></h6>
                                <p>Single piece weight: <strong id="sheetSingleWeight1" class="text-primary">0
                                        kg</strong></p>
                                <p>Total weight: <strong id="sheetTotalWeight1" class="text-primary">0 kg</strong></p>
                                <p>Density used: <strong id="sheetDensity1" class="text-secondary">7850 kg/m³</strong>
                                </p>
                            </div>
                        </div>

                        <!-- Right: Image -->
                        <div class="col-lg-6 d-flex align-items-center">
                            <img src="{{ asset('assets/images/calculator/steel-sheets-plates.webp') }}" class="img-fluid rounded border w-100" alt="Steel Sheet Image">
                        </div>
                    </div>
                </div>



                {{-- Seamless steel pipes - circular --}}
                <div id="tab2" class="tab-content-item d-none">
                    <h5 class="mb-3">Seamless steel pipes - circular</h5>

                    <div class="row">
                        <!-- Left: Input Fields -->
                        <div class="col-lg-6 mb-4 mb-lg-0">
                            <p>Input your values in the fields below:</p>

                            <div class="row">
                                <!-- Diameter -->
                                <div class="col-12 mb-3">
                                    <div class="d-flex align-items-center">
                                        <label class="form-label mb-0 me-3" style="width: 120px;">Diameter, D</label>
                                        <div class="d-flex align-items-center flex-grow-1">
                                            <input type="number" id="pipeDiameter2" class="form-control me-2" placeholder="e.g. 8" value="8" />
                                            <span class="text-nowrap">mm</span>
                                        </div>
                                    </div>
                                </div>

                                <!-- Thickness -->
                                <div class="col-12 mb-3">
                                    <div class="d-flex align-items-center">
                                        <label class="form-label mb-0 me-3" style="width: 120px;">Thickness, t</label>
                                        <div class="d-flex align-items-center flex-grow-1">
                                            <input type="number" id="pipeThickness2" class="form-control me-2" placeholder="e.g. 1.5" value="1.5" />
                                            <span class="text-nowrap">mm</span>
                                        </div>
                                    </div>
                                </div>

                                <!-- Length -->
                                <div class="col-12 mb-3">
                                    <div class="d-flex align-items-center">
                                        <label class="form-label mb-0 me-3" style="width: 120px;">Length, L</label>
                                        <div class="d-flex align-items-center flex-grow-1">
                                            <input type="number" id="pipeLength2" class="form-control me-2" placeholder="e.g. 1" value="1" />
                                            <span class="text-nowrap">m</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Result -->
                            <div class="mt-2">
                                <h6><strong>Result</strong></h6>
                                <p>Weight per meter: <strong id="pipeWeightPerMeter2" class="text-primary">0
                                        kg/m</strong></p>
                                <p>Total weight: <strong id="pipeTotalWeight2" class="text-primary">0 kg</strong></p>
                                <p>Density used: <strong id="pipeDensity" class="text-secondary">7850 kg/m³</strong>
                                </p>
                            </div>
                        </div>

                        <!-- Right: Image -->
                        <div class="col-lg-6 d-flex align-items-center">
                            <img src="{{ asset('assets/images/calculator/seamless_steel_circular.webp') }}" class="img-fluid rounded border w-100" alt="Pipe Image">
                        </div>
                    </div>
                </div>

                {{-- Hollow structural sections - circular --}}
                <div id="tab3" class="tab-content-item d-none">
                    <h5 class="mb-3">Hollow structural sections - circular</h5>

                    <div class="row">
                        <!-- Left: Input Fields -->
                        <div class="col-lg-6 mb-4 mb-lg-0">
                            <p>Input your values in the fields below:</p>

                            <div class="row">
                                <!-- Diameter -->
                                <div class="col-12 mb-3">
                                    <div class="d-flex align-items-center">
                                        <label class="form-label mb-0 me-3" style="width: 120px;">Diameter, D</label>
                                        <div class="d-flex align-items-center flex-grow-1">
                                            <input type="number" id="hollowDiameter3" class="form-control me-2" value="21.3" placeholder="e.g. 21.3" />
                                            <span class="text-nowrap">mm</span>
                                        </div>
                                    </div>
                                </div>

                                <!-- Thickness -->
                                <div class="col-12 mb-3">
                                    <div class="d-flex align-items-center">
                                        <label class="form-label mb-0 me-3" style="width: 120px;">Thickness, t</label>
                                        <div class="d-flex align-items-center flex-grow-1">
                                            <input type="number" id="hollowThickness3" class="form-control me-2" value="2" placeholder="e.g. 2" />
                                            <span class="text-nowrap">mm</span>
                                        </div>
                                    </div>
                                </div>

                                <!-- Length -->
                                <div class="col-12 mb-3">
                                    <div class="d-flex align-items-center">
                                        <label class="form-label mb-0 me-3" style="width: 120px;">Length, L</label>
                                        <div class="d-flex align-items-center flex-grow-1">
                                            <input type="number" id="hollowLength3" class="form-control me-2" value="1" placeholder="e.g. 1" />
                                            <span class="text-nowrap">m</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Result -->
                            <div class="mt-2">
                                <h6><strong>Result</strong></h6>
                                <p>Weight per meter: <strong id="hollowWeightPerMeter3" class="text-primary">0
                                        kg/m</strong></p>
                                <p>Total weight: <strong id="hollowTotalWeight3" class="text-primary">0 kg</strong>
                                </p>
                                <p>Density used: <strong id="hollowDensity" class="text-secondary">7850 kg/m³</strong>
                                </p>
                            </div>
                        </div>

                        <!-- Right: Image -->
                        <div class="col-lg-6 d-flex align-items-center">
                            <img src="{{ asset('assets/images/calculator/seamless_steel_circular.webp') }}" class="img-fluid rounded border w-100" alt="Pipe Image">
                        </div>
                    </div>
                </div>

                <div id="tab4" class="tab-content-item d-none">
                    <h5 class="mb-3">Hollow Structural Sections - Square</h5>

                    <div class="row">
                        <!-- Left: Input Fields -->
                        <div class="col-lg-6 mb-4 mb-lg-0">
                            <p>Input your values in the fields below:</p>

                            <div class="row">
                                <!-- Side, A -->
                                <div class="col-12 mb-3">
                                    <div class="d-flex align-items-center">
                                        <label class="form-label mb-0 me-3" style="width: 120px;">Side, A</label>
                                        <div class="d-flex align-items-center flex-grow-1">
                                            <input type="number" class="form-control me-2" id="squareSide" value="15" placeholder="e.g. 15" oninput="calculateSquareHollowSectionWeight()" />
                                            <span class="text-nowrap">mm</span>
                                        </div>
                                    </div>
                                </div>

                                <!-- Thickness -->
                                <div class="col-12 mb-3">
                                    <div class="d-flex align-items-center">
                                        <label class="form-label mb-0 me-3" style="width: 120px;">Thickness, t</label>
                                        <div class="d-flex align-items-center flex-grow-1">
                                            <input type="number" class="form-control me-2" id="squareThickness" value="1.5" placeholder="e.g. 1.5" oninput="calculateSquareHollowSectionWeight()" />
                                            <span class="text-nowrap">mm</span>
                                        </div>
                                    </div>
                                </div>

                                <!-- Length -->
                                <div class="col-12 mb-3">
                                    <div class="d-flex align-items-center">
                                        <label class="form-label mb-0 me-3" style="width: 120px;">Length, L</label>
                                        <div class="d-flex align-items-center flex-grow-1">
                                            <input type="number" class="form-control me-2" id="squareLength" value="1" placeholder="e.g. 1" oninput="calculateSquareHollowSectionWeight()" />
                                            <span class="text-nowrap">m</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Result -->
                            <div class="mt-2">
                                <h6><strong>Result</strong></h6>
                                <p>Weight per meter: <strong id="squareWeightPerMeter" class="text-primary">0.61
                                        kg/m</strong></p>
                                <p>Total weight: <strong id="squareTotalWeight" class="text-primary">0.61 kg</strong>
                                </p>
                                <p>Density used: <strong id="squareDensity" class="text-secondary">7530 kg/m³</strong>
                                </p>
                            </div>
                        </div>

                        <!-- Right: Image -->
                        <div class="col-lg-6 d-flex align-items-center">
                            <img src="{{ asset('assets/images/calculator/Hollow_structural_sections-square.webp') }}" class="img-fluid rounded border w-100" alt="Placeholder Image for Square Section">
                        </div>
                    </div>
                </div>

                {{-- Hollow Structural Sections – Rectangular --}}
                <div id="tab5" class="tab-content-item d-none">
                    <h5 class="mb-3">Hollow Structural Sections – Rectangular</h5>

                    <div class="row">
                        <!-- Left: Input Fields -->
                        <div class="col-lg-6 mb-4 mb-lg-0">
                            <p>Input your values in the fields below:</p>

                            <div class="row">
                                <!-- Side A -->
                                <div class="col-12 mb-3">
                                    <div class="d-flex align-items-center">
                                        <label class="form-label mb-0 me-3" style="width: 120px;">Side, A</label>
                                        <div class="d-flex align-items-center flex-grow-1">
                                            <input type="number" class="form-control me-2" id="rectangularSideA" value="30" placeholder="e.g. 30" oninput="calculateRectangularHollowSectionWeight()" />
                                            <span class="text-nowrap">mm</span>
                                        </div>
                                    </div>
                                </div>

                                <!-- Side B -->
                                <div class="col-12 mb-3">
                                    <div class="d-flex align-items-center">
                                        <label class="form-label mb-0 me-3" style="width: 120px;">Side, B</label>
                                        <div class="d-flex align-items-center flex-grow-1">
                                            <input type="number" class="form-control me-2" id="rectangularSideB" value="20" placeholder="e.g. 20" oninput="calculateRectangularHollowSectionWeight()" />
                                            <span class="text-nowrap">mm</span>
                                        </div>
                                    </div>
                                </div>

                                <!-- Thickness -->
                                <div class="col-12 mb-3">
                                    <div class="d-flex align-items-center">
                                        <label class="form-label mb-0 me-3" style="width: 120px;">Thickness, t</label>
                                        <div class="d-flex align-items-center flex-grow-1">
                                            <input type="number" class="form-control me-2" id="rectangularThickness" value="1.5" placeholder="e.g. 1.5" oninput="calculateRectangularHollowSectionWeight()" />
                                            <span class="text-nowrap">mm</span>
                                        </div>
                                    </div>
                                </div>

                                <!-- Length -->
                                <div class="col-12 mb-3">
                                    <div class="d-flex align-items-center">
                                        <label class="form-label mb-0 me-3" style="width: 120px;">Length, L</label>
                                        <div class="d-flex align-items-center flex-grow-1">
                                            <input type="number" class="form-control me-2" id="rectangularLength" value="1" placeholder="e.g. 1" oninput="calculateRectangularHollowSectionWeight()" />
                                            <span class="text-nowrap">m</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Result -->
                            <div class="mt-2">
                                <h6><strong>Result</strong></h6>
                                <p>Weight per meter: <strong id="rectangularWeightPerMeter" class="text-primary">0.00
                                        kg/m</strong></p>
                                <p>Total weight: <strong id="rectangularTotalWeight" class="text-primary">0.00
                                        kg</strong></p>
                                <p>Constant Z : 0.0157</p>
                                <p>Constant Q : 0.044877</p>

                            </div>
                        </div>

                        <!-- Right: Image -->
                        <div class="col-lg-6 d-flex align-items-center">
                            <img src="{{ asset('assets/images/calculator/hollow_sections_rectangular.webp') }}" class="img-fluid rounded border w-100" alt="Placeholder Image for Rectangular HSS">
                        </div>
                    </div>
                </div>


                {{-- Round Steel Bars --}}
                <div id="tab6" class="tab-content-item d-none">
                    <h5 class="mb-3">Round Steel Bars</h5>

                    <div class="row">
                        <!-- Left: Input Fields -->
                        <div class="col-lg-6 mb-4 mb-lg-0">
                            <p>Input your values in the fields below:</p>

                            <div class="row">
                                <!-- Diameter -->
                                <div class="col-12 mb-3">
                                    <div class="d-flex align-items-center">
                                        <label class="form-label mb-0 me-3" style="width: 120px;">Diameter, D</label>
                                        <div class="d-flex align-items-center flex-grow-1">
                                            <input type="number" class="form-control me-2" id="roundDiameter" value="8" placeholder="e.g. 8" oninput="calculateRoundBarWeight()" />
                                            <span class="text-nowrap">mm</span>
                                        </div>
                                    </div>
                                </div>

                                <!-- Length -->
                                <div class="col-12 mb-3">
                                    <div class="d-flex align-items-center">
                                        <label class="form-label mb-0 me-3" style="width: 120px;">Length, L</label>
                                        <div class="d-flex align-items-center flex-grow-1">
                                            <input type="number" class="form-control me-2" id="roundLength" value="1" placeholder="e.g. 6" oninput="calculateRoundBarWeight()" />
                                            <span class="text-nowrap">mm</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Result -->
                            <div class="mt-2">
                                <h6><strong>Result</strong></h6>
                                <p>Weight per meter: <strong id="roundWeightPerMeter" class="text-primary">0.00
                                        kg/m</strong></p>
                                <p>Total weight: <strong id="roundTotalWeight" class="text-primary">0.00 kg</strong>
                                    <p>Density used: <strong>7850 kg/m³</strong></p>
                            </div>
                        </div>

                        <!-- Right: Image -->
                        <div class="col-lg-6 d-flex align-items-center">
                            <img src="{{ asset('assets/images/calculator/roundbar.webp') }}" class="img-fluid rounded border w-100" alt="Placeholder Image for Round Steel Bar">
                        </div>
                    </div>
                </div>

                {{-- Square Steel Bars --}}
                <div id="tab7" class="tab-content-item d-none">
                    <h5 class="mb-3">Square Steel Bars</h5>

                    <div class="row">
                        <!-- Left: Input Fields -->
                        <div class="col-lg-6 mb-4 mb-lg-0">
                            <p>Input your values in the fields below:</p>

                            <div class="row">
                                <!-- Side -->
                                <div class="col-12 mb-3">
                                    <div class="d-flex align-items-center">
                                        <label class="form-label mb-0 me-3" style="width: 120px;">Side, A</label>
                                        <div class="d-flex align-items-center flex-grow-1">
                                            <input type="number" class="form-control me-2" id="squareSideA7" value="10" placeholder="e.g. 10" />
                                            <span class="text-nowrap">mm</span>
                                        </div>
                                    </div>
                                </div>

                                <!-- Length -->
                                <div class="col-12 mb-3">
                                    <div class="d-flex align-items-center">
                                        <label class="form-label mb-0 me-3" style="width: 120px;">Length, L</label>
                                        <div class="d-flex align-items-center flex-grow-1">
                                            <input type="number" class="form-control me-2" id="squareLength7" value="1" placeholder="e.g. 1" />
                                            <span class="text-nowrap">mm</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Result -->
                            <div class="mt-2">
                                <h6><strong>Result</strong></h6>
                                <p>Weight per meter: <strong id="squareWeightPerMeter7" class="text-primary">0.00
                                        kg/m</strong></p>
                                <p>Total weight: <strong id="squareTotalWeight7" class="text-primary">0.00 kg</strong>
                                </p>
                                <p>Density used: <strong>7850 kg/m³</strong></p>
                            </div>
                        </div>

                        <!-- Right: Image -->
                        <div class="col-lg-6 d-flex align-items-center">
                            <img src="{{ asset('assets\images\calculator\squaresteelbars.webp') }}" class="img-fluid rounded border w-100" alt="Placeholder Image for Square Steel Bar">
                        </div>
                    </div>
                </div>



                {{-- Flat Bars --}}
                <div id="tab8" class="tab-content-item d-none">
                    <h5 class="mb-3">Flat Bars</h5>

                    <div class="row">
                        <!-- Left: Input Fields -->
                        <div class="col-lg-6 mb-4 mb-lg-0">
                            <p>Input your values in the fields below:</p>

                            <div class="row">
                                <!-- Width -->
                                <div class="col-12 mb-3">
                                    <div class="d-flex align-items-center">
                                        <label class="form-label mb-0 me-3" style="width: 120px;">Width, W</label>
                                        <div class="d-flex align-items-center flex-grow-1">
                                            <input type="number" class="form-control me-2" id="flatWidth8" value="10" placeholder="e.g. 10" oninput="calculateFlatBarWeight8()" />
                                            <span class="text-nowrap">mm</span>
                                        </div>
                                    </div>
                                </div>

                                <!-- Thickness -->
                                <div class="col-12 mb-3">
                                    <div class="d-flex align-items-center">
                                        <label class="form-label mb-0 me-3" style="width: 120px;">Thickness, t</label>
                                        <div class="d-flex align-items-center flex-grow-1">
                                            <input type="number" class="form-control me-2" id="flatThickness8" value="3" placeholder="e.g. 3" oninput="calculateFlatBarWeight8()" />
                                            <span class="text-nowrap">mm</span>
                                        </div>
                                    </div>
                                </div>

                                <!-- Length -->
                                <div class="col-12 mb-3">
                                    <div class="d-flex align-items-center">
                                        <label class="form-label mb-0 me-3" style="width: 120px;">Length, L</label>
                                        <div class="d-flex align-items-center flex-grow-1">
                                            <input type="number" class="form-control me-2" id="flatLength8" value="1" placeholder="e.g. 1" oninput="calculateFlatBarWeight8()" />
                                            <span class="text-nowrap">m</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Result -->
                            <div class="mt-2">
                                <h6><strong>Result</strong></h6>
                                <p>Weight per meter: <strong id="flatWeightPerMeter8" class="text-primary">0.00
                                        kg/m</strong></p>
                                <p>Total weight: <strong id="flatTotalWeight8" class="text-primary">0.00 kg</strong>
                                </p>
                                <p>Density used: <strong>7850 kg/m³</strong></p>
                            </div>
                        </div>

                        <!-- Right: Image -->
                        <div class="col-lg-6 d-flex align-items-center">
                            <img src="{{ asset('assets/images/calculator/Flatbars.webp') }}" class="img-fluid rounded border w-100" alt="Placeholder Image for Flat Bar">
                        </div>
                    </div>
                </div>

                {{-- Equal Angles --}}
                <div id="tab9" class="tab-content-item d-none">
                    <h5 class="mb-3">Equal Angles</h5>

                    <div class="row">
                        <!-- Left: Input Fields -->
                        <div class="col-lg-6 mb-4 mb-lg-0">
                            <p>Input your values in the fields below:</p>

                            <div class="row">
                                <!-- Side A -->
                                <div class="col-12 mb-3">
                                    <div class="d-flex align-items-center">
                                        <label class="form-label mb-0 me-3" style="width: 120px;">Side, A</label>
                                        <div class="d-flex align-items-center flex-grow-1">
                                            <input type="number" class="form-control me-2" id="angleSide9" value="20" placeholder="e.g. 20" oninput="calculateEqualAngleWeight9()" />
                                            <span class="text-nowrap">mm</span>
                                        </div>
                                    </div>
                                </div>

                                <!-- Thickness -->
                                <div class="col-12 mb-3">
                                    <div class="d-flex align-items-center">
                                        <label class="form-label mb-0 me-3" style="width: 120px;">Thickness, t</label>
                                        <div class="d-flex align-items-center flex-grow-1">
                                            <input type="number" class="form-control me-2" id="angleThickness9" value="3" placeholder="e.g. 3" oninput="calculateEqualAngleWeight9()" />
                                            <span class="text-nowrap">mm</span>
                                        </div>
                                    </div>
                                </div>

                                <!-- Length -->
                                <div class="col-12 mb-3">
                                    <div class="d-flex align-items-center">
                                        <label class="form-label mb-0 me-3" style="width: 120px;">Length, L</label>
                                        <div class="d-flex align-items-center flex-grow-1">
                                            <input type="number" class="form-control me-2" id="angleLength9" value="1" placeholder="e.g. 1" oninput="calculateEqualAngleWeight9()" />
                                            <span class="text-nowrap">m</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Result -->
                            <div class="mt-2">
                                <h6><strong>Result</strong></h6>
                                <p>Weight per meter: <strong id="angleWeightPerMeter9" class="text-primary">0.00
                                        kg/m</strong></p>
                                <p>Total weight: <strong id="angleTotalWeight9" class="text-primary">0.00 kg</strong>
                                </p>
                                <p>Density used: <strong>7850 kg/m³</strong></p>
                            </div>
                        </div>

                        <!-- Right: Image -->
                        <div class="col-lg-6 d-flex align-items-center">
                            <img src="{{ asset('assets\images\calculator\equal-angles.webp') }}" class="img-fluid rounded border w-100 object-fit-cover" alt="Placeholder Image for Equal Angles">
                        </div>
                    </div>
                </div>



                {{-- Unequal Angles --}}
                <div id="tab10" class="tab-content-item d-none">
                    <h5 class="mb-3">Unequal Angles</h5>

                    <div class="row">
                        <!-- Left: Input Fields -->
                        <div class="col-lg-6 mb-4 mb-lg-0">
                            <p>Input your values in the fields below:</p>

                            <div class="row">
                                <!-- Side A x B -->
                                <div class="col-12 mb-3">
                                    <div class="d-flex align-items-center">
                                        <label class="form-label mb-0 me-3" style="width: 120px;">Side, A × B</label>
                                        <div class="d-flex align-items-center flex-grow-1">
                                            <select id="angleSize10" class="form-control me-2" onchange="updateThicknessOptions10(); calculateUnequalAngleWeight10()">
                                                <option value="30x20">30x20</option>
                                                <option value="40x20">40x20</option>
                                                <option value="40x25">40x25</option>
                                                <option value="45x30">45x30</option>
                                                <option value="50x30">50x30</option>
                                                <option value="60x30">60x30</option>
                                                <option value="60x40">60x40</option>
                                                <option value="60x50">60x50</option>
                                                <option value="65x50">65x50</option>
                                                <option value="70x50">70x50</option>
                                                <option value="75x50">75x50</option>
                                                <option value="75x55">75x55</option>
                                                <option value="75x60">75x60</option>
                                                <option value="80x40">80x40</option>
                                                <option value="80x60">80x60</option>
                                                <option value="90x60">90x60</option>
                                                <option value="90x75">90x75</option>
                                                <option value="100x50">100x50</option>
                                                <option value="100x65">100x65</option>
                                                <option value="100x75">100x75</option>
                                                <option value="100x90">100x90</option>
                                                <option value="120x80">120x80</option>
                                                <option value="125x75">125x75</option>
                                                <option value="125x80">125x80</option>
                                                <option value="125x90">125x90</option>
                                                <option value="130x65">130x65</option>
                                                <option value="130x75">130x75</option>
                                                <option value="130x90">130x90</option>
                                                <option value="150x75">150x75</option>
                                                <option value="150x90">150x90</option>
                                                <option value="150x100">150x100</option>
                                                <option value="180x90">180x90</option>
                                                <option value="200x100">200x100</option>
                                                <option value="200x150">200x150</option>
                                            </select>
                                            <span class="text-nowrap">mm</span>
                                        </div>
                                    </div>
                                </div>

                                <!-- Thickness -->
                                <div class="col-12 mb-3">
                                    <div class="d-flex align-items-center">
                                        <label class="form-label mb-0 me-3" style="width: 120px;">Thickness, t</label>
                                        <div class="d-flex align-items-center flex-grow-1">
                                            <select id="angleThickness10" class="form-control me-2" onchange="calculateUnequalAngleWeight10()">
                                            </select>
                                            <span class="text-nowrap">mm</span>
                                        </div>
                                    </div>
                                </div>

                                <!-- Length -->
                                <div class="col-12 mb-3">
                                    <div class="d-flex align-items-center">
                                        <label class="form-label mb-0 me-3" style="width: 120px;">Length, L</label>
                                        <div class="d-flex align-items-center flex-grow-1">
                                            <input type="number" class="form-control me-2" id="angleLength10" value="1" placeholder="e.g. 1" oninput="calculateUnequalAngleWeight10()" />
                                            <span class="text-nowrap">m</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Result -->
                            <div class="mt-2">
                                <h6><strong>Result</strong></h6>
                                <p>Weight per meter: <strong id="angleWeightPerMeter10" class="text-primary">0.00
                                        kg/m</strong></p>
                                <p>Total weight: <strong id="angleTotalWeight10" class="text-primary">0.00 kg</strong>
                                </p>
                                <p>Density used: <strong>7850 kg/m³</strong></p>
                            </div>
                        </div>

                        <!-- Right: Image -->
                        <div class="col-lg-6 d-flex align-items-center">
                            <img src="{{ asset('assets/images/calculator/unequal-angles.webp') }}" class="img-fluid rounded border w-100" alt="Placeholder Image for Unequal Angles">
                        </div>
                    </div>
                </div>



                {{-- Channels - GOST --}}
                <div id="tab11" class="tab-content-item d-none">
                    <h5 class="mb-3">Channels - GOST</h5>

                    <div class="row">
                        <!-- Left: Input Fields -->
                        <div class="col-lg-6 mb-4 mb-lg-0">
                            <p>Input your values in the fields below:</p>

                            <!-- Profile -->
                            <div class="mb-3 d-flex align-items-center">
                                <label class="form-label mb-0 me-3" style="width: 140px;">Profile:</label>
                                <select id="gostProfile" class="form-select"></select>
                            </div>

                            <!-- Height, h -->
                            <div class="mb-3 d-flex align-items-center">
                                <label class="form-label mb-0 me-3" style="width: 140px;">Height, h:</label>
                                <input id="gostH" type="number" class="form-control me-2" readonly />
                                <span class="text-nowrap">mm</span>
                            </div>

                            <!-- Width, b -->
                            <div class="mb-3 d-flex align-items-center">
                                <label class="form-label mb-0 me-3" style="width: 140px;">Width, b:</label>
                                <input id="gostB" type="number" class="form-control me-2" readonly />
                                <span class="text-nowrap">mm</span>
                            </div>

                            <!-- Thickness, s -->
                            <div class="mb-3 d-flex align-items-center">
                                <label class="form-label mb-0 me-3" style="width: 140px;">Thickness, s:</label>
                                <input id="gostS" type="number" class="form-control me-2" readonly />
                                <span class="text-nowrap">mm</span>
                            </div>

                            <!-- Thickness, t -->
                            <div class="mb-3 d-flex align-items-center">
                                <label class="form-label mb-0 me-3" style="width: 140px;">Thickness, t:</label>
                                <input id="gostT" type="number" class="form-control me-2" readonly />
                                <span class="text-nowrap">mm</span>
                            </div>

                            <!-- Length, L -->
                            <div class="mb-3 d-flex align-items-center">
                                <label class="form-label mb-0 me-3" style="width: 140px;">Length, L:</label>
                                <input id="gostLength" type="number" class="form-control me-2" value="1" />
                                <span class="text-nowrap">m</span>
                            </div>

                            <!-- Result -->
                            <div class="mt-2">
                                <h6><strong>Result</strong></h6>
                                <p>Weight per meter: <strong id="gostWeightPerMeter" class="text-primary">0.00
                                        kg/m</strong></p>
                                <p>Total weight: <strong id="gostTotalWeight" class="text-primary">0.00 kg</strong>
                                </p>
                            </div>
                        </div>

                        <!-- Right: Image -->
                        <div class="col-lg-6 d-flex align-items-center">
                            <img src="{{ asset('assets/images/calculator/Channels-GOST.webp') }}" class="img-fluid rounded border w-100" alt="Placeholder Image for Channels - GOST">
                        </div>
                    </div>
                </div>


                {{-- Channels - UPN --}}
                <div id="tab12" class="tab-content-item d-none">
                    <h5 class="mb-3">Channels - UPN</h5>
                    <p>Input your values in the fields below:</p>

                    <div class="row">
                        <!-- Inputs -->
                        <div class="col-lg-6 mb-4 mb-lg-0">
                            <div class="row">
                                <!-- Profile Dropdown -->
                                <div class="mb-3 d-flex align-items-center">
                                    <label class="form-label me-3 mb-0" style="min-width: 80px;">Profile:</label>
                                    <select id="upnProfile" class="form-select" style="max-width: 250px;"></select>
                                </div>

                                <!-- Height -->
                                <div class="col-12 mb-3">
                                    <div class="d-flex align-items-center">
                                        <label class="form-label mb-0 me-3" style="width: 120px;">Height, h:</label>
                                        <input id="upnH" type="number" class="form-control" readonly />
                                        <span class="ms-2">mm</span>
                                    </div>
                                </div>

                                <!-- Width -->
                                <div class="col-12 mb-3">
                                    <div class="d-flex align-items-center">
                                        <label class="form-label mb-0 me-3" style="width: 120px;">Width, b:</label>
                                        <input id="upnB" type="number" class="form-control" readonly />
                                        <span class="ms-2">mm</span>
                                    </div>
                                </div>

                                <!-- Thickness s -->
                                <div class="col-12 mb-3">
                                    <div class="d-flex align-items-center">
                                        <label class="form-label mb-0 me-3" style="width: 120px;">Thickness,
                                            s:</label>
                                        <input id="upnS" type="number" class="form-control" readonly />
                                        <span class="ms-2">mm</span>
                                    </div>
                                </div>

                                <!-- Thickness t -->
                                <div class="col-12 mb-3">
                                    <div class="d-flex align-items-center">
                                        <label class="form-label mb-0 me-3" style="width: 120px;">Thickness,
                                            t:</label>
                                        <input id="upnT" type="number" class="form-control" readonly />
                                        <span class="ms-2">mm</span>
                                    </div>
                                </div>

                                <!-- Length -->
                                <div class="col-12 mb-3">
                                    <div class="d-flex align-items-center">
                                        <label class="form-label mb-0 me-3" style="width: 120px;">Length, L:</label>
                                        <input id="upnLength" type="number" class="form-control" value="1" min="0.01" step="0.01" />
                                        <span class="ms-2">m</span>
                                    </div>
                                </div>
                            </div>

                            <!-- Result -->
                            <div class="mt-2">
                                <h6><strong>Result</strong></h6>
                                <p>Weight per meter: <strong id="upnWeightPerMeter" class="text-primary">0.00
                                        kg/m</strong></p>
                                <p>Total weight: <strong id="upnTotalWeight" class="text-primary">0.00 kg</strong></p>
                            </div>
                        </div>

                        <!-- Right: Image -->
                        <div class="col-lg-6 d-flex align-items-center">
                            <img src="{{ asset('assets/images/calculator/Channels-UPN.webp') }}" class="img-fluid rounded border w-100" alt="Placeholder Image for Channels - UPN">
                        </div>
                    </div>
                </div>





                {{-- Beams - IPN --}}
                <div id="tab13" class="tab-content-item d-none">
                    <h5 class="mb-3">Calculator for Beams - IPN</h5>
                    <div class="row">
                        <!-- Left: Form Inputs -->
                        <div class="col-lg-6 mb-4 mb-lg-0">
                            <p>Input your values in the fields below:</p>
                            <div class="row">
                                <!-- Profile -->
                                <div class="mb-3 d-flex align-items-center">
                                    <label class="form-label mb-0 me-3" style="width: 140px;">Profile:</label>
                                    <select id="ipnProfile" class="form-select" style="max-width: 250px;"></select>
                                </div>

                                <!-- Height -->
                                <div class="col-12 mb-3 d-flex align-items-center">
                                    <label class="form-label mb-0 me-3" style="width: 150px;">Height, h:</label>
                                    <input id="ipnH" type="number" class="form-control me-2" readonly>
                                    <span>mm</span>
                                </div>

                                <!-- Width -->
                                <div class="col-12 mb-3 d-flex align-items-center">
                                    <label class="form-label mb-0 me-3" style="width: 150px;">Width, b:</label>
                                    <input id="ipnB" type="number" class="form-control me-2" readonly>
                                    <span>mm</span>
                                </div>

                                <!-- Thickness s -->
                                <div class="col-12 mb-3 d-flex align-items-center">
                                    <label class="form-label mb-0 me-3" style="width: 150px;">Thickness, s:</label>
                                    <input id="ipnS" type="number" class="form-control me-2" readonly>
                                    <span>mm</span>
                                </div>

                                <!-- Thickness t -->
                                <div class="col-12 mb-3 d-flex align-items-center">
                                    <label class="form-label mb-0 me-3" style="width: 150px;">Thickness, t:</label>
                                    <input id="ipnT" type="number" class="form-control me-2" readonly>
                                    <span>mm</span>
                                </div>

                                <!-- Length -->
                                <div class="col-12 mb-3 d-flex align-items-center">
                                    <label class="form-label mb-0 me-3" style="width: 150px;">Length, L:</label>
                                    <input id="ipnLength" type="number" class="form-control me-2" value="1" min="0.01" step="0.01">
                                    <span>m</span>
                                </div>
                            </div>

                            <!-- Result -->
                            <div class="mt-2">
                                <h6><strong>Result</strong></h6>
                                <p>Weight per meter: <strong id="ipnWeightPerMeter" class="text-primary">0.00
                                        kg/m</strong></p>
                                <p>Total weight: <strong id="ipnTotalWeight" class="text-primary">0.00 kg</strong></p>
                            </div>
                        </div>

                        <!-- Right: Image -->
                        <div class="col-lg-6 d-flex align-items-center">
                            <img src="{{ asset('assets/images/calculator/Beams-IPN.webp') }}" class="img-fluid rounded border w-100" alt="I-Beam Illustration" />
                        </div>
                    </div>
                </div>

                {{-- Beams - IPE --}}
                <div id="tab14" class="tab-content-item d-none">
                    <h5 class="mb-3">Calculator for Beams - IPE</h5>
                    <div class="row">
                        <!-- Left: Form Inputs -->
                        <div class="col-lg-6 mb-4 mb-lg-0">
                            <p>Input your values in the fields below:</p>
                            <div class="row">
                                <!-- Profile -->
                                <div class="mb-3 d-flex align-items-center">
                                    <label class="form-label mb-0 me-3" style="width: 140px;">Profile:</label>
                                    <select id="ipeProfile" class="form-select" style="max-width: 200px;">
                                        <option value="IPE 80">IPE 80</option>
                                        <option value="IPE 100">IPE 100</option>
                                        <option value="IPE 120">IPE 120</option>
                                        <option value="IPE 140">IPE 140</option>
                                        <option value="IPE 160">IPE 160</option>
                                        <option value="IPE 180">IPE 180</option>
                                        <option value="IPE 200">IPE 200</option>
                                        <option value="IPE 220">IPE 220</option>
                                        <option value="IPE 240">IPE 240</option>
                                        <option value="IPE 270">IPE 270</option>
                                        <option value="IPE 300">IPE 300</option>
                                        <option value="IPE 330">IPE 330</option>
                                        <option value="IPE 360">IPE 360</option>
                                        <option value="IPE 400">IPE 400</option>
                                        <option value="IPE 450">IPE 450</option>
                                        <option value="IPE 500">IPE 500</option>
                                        <option value="IPE 550">IPE 550</option>
                                        <option value="IPE 600">IPE 600</option>
                                    </select>
                                </div>

                                <!-- Height, h -->
                                <div class="col-12 mb-3 d-flex align-items-center">
                                    <label class="form-label mb-0 me-3" style="width: 150px;">Height, h:</label>
                                    <input id="ipeH" type="number" class="form-control me-2" readonly />
                                    <span>mm</span>
                                </div>

                                <!-- Width of flange, b -->
                                <div class="col-12 mb-3 d-flex align-items-center">
                                    <label class="form-label mb-0 me-3" style="width: 150px;">Width, b:</label>
                                    <input id="ipeB" type="number" class="form-control me-2" readonly />
                                    <span>mm</span>
                                </div>

                                <!-- Thickness of web, s -->
                                <div class="col-12 mb-3 d-flex align-items-center">
                                    <label class="form-label mb-0 me-3" style="width: 150px;">Thickness, s:</label>
                                    <input id="ipeS" type="number" class="form-control me-2" readonly />
                                    <span>mm</span>
                                </div>

                                <!-- Thickness of flange, t -->
                                <div class="col-12 mb-3 d-flex align-items-center">
                                    <label class="form-label mb-0 me-3" style="width: 150px;">Thickness, t:</label>
                                    <input id="ipeT" type="number" class="form-control me-2" readonly />
                                    <span>mm</span>
                                </div>

                                <!-- Length -->
                                <div class="col-12 mb-3 d-flex align-items-center">
                                    <label class="form-label mb-0 me-3" style="width: 150px;">Length, L:</label>
                                    <input id="ipeLength" type="number" class="form-control me-2" value="1" min="0.01" step="0.01" />
                                    <span>m</span>
                                </div>
                            </div>

                            <!-- Result -->
                            <div class="mt-2">
                                <h6><strong>Result</strong></h6>
                                <p>Weight per meter: <strong id="ipeWeightPerMeter" class="text-primary">0.00
                                        kg/m</strong></p>
                                <p>Total weight: <strong id="ipeTotalWeight" class="text-primary">0.00 kg</strong></p>
                            </div>
                        </div>

                        <!-- Right: Image -->
                        <div class="col-lg-6 d-flex align-items-center">
                            <img src="{{ asset('assets/images/calculator/Beams-IPE.webp') }}" class="img-fluid rounded border w-100" alt="IPE Beam Illustration" />
                        </div>
                    </div>
                </div>

                {{-- Beams - HEA (IPBL) --}}
                <div id="tab15" class="tab-content-item d-none">
                    <h5 class="mb-3">Calculator for Beams - HEA</h5>
                    <div class="row">
                        <!-- Left: Form Inputs -->
                        <div class="col-lg-6 mb-4 mb-lg-0">
                            <p>Input your values in the fields below:</p>
                            <div class="row">
                                <!-- Profile -->
                                <div class="mb-3 d-flex align-items-center">
                                    <label class="form-label mb-0 me-3" style="width: 140px;">Profile:</label>
                                    <select id="heaProfile" class="form-select" style="max-width: 200px;">
                                        <option value="HEA 100">HEA 100</option>
                                        <option value="HEA 120">HEA 120</option>
                                        <option value="HEA 140">HEA 140</option>
                                        <option value="HEA 160">HEA 160</option>
                                        <option value="HEA 180">HEA 180</option>
                                        <option value="HEA 200">HEA 200</option>
                                        <option value="HEA 220">HEA 220</option>
                                        <option value="HEA 240">HEA 240</option>
                                        <option value="HEA 260">HEA 260</option>
                                        <option value="HEA 280">HEA 280</option>
                                        <option value="HEA 300">HEA 300</option>
                                        <option value="HEA 320">HEA 320</option>
                                        <option value="HEA 340">HEA 340</option>
                                        <option value="HEA 360">HEA 360</option>
                                        <option value="HEA 400">HEA 400</option>
                                        <option value="HEA 450">HEA 450</option>
                                        <option value="HEA 500">HEA 500</option>
                                        <option value="HEA 550">HEA 550</option>
                                        <option value="HEA 600">HEA 600</option>
                                        <option value="HEA 650">HEA 650</option>
                                        <option value="HEA 700">HEA 700</option>
                                        <option value="HEA 800">HEA 800</option>
                                        <option value="HEA 900">HEA 900</option>
                                        <option value="HEA 1000">HEA 1000</option>
                                    </select>
                                </div>

                                <!-- Height, h -->
                                <div class="col-12 mb-3 d-flex align-items-center">
                                    <label class="form-label mb-0 me-3" style="width: 150px;">Height, h:</label>
                                    <input id="heaH" type="number" class="form-control me-2" readonly />
                                    <span>mm</span>
                                </div>

                                <!-- Width of flange, b -->
                                <div class="col-12 mb-3 d-flex align-items-center">
                                    <label class="form-label mb-0 me-3" style="width: 150px;">Width, b:</label>
                                    <input id="heaB" type="number" class="form-control me-2" readonly />
                                    <span>mm</span>
                                </div>

                                <!-- Thickness of web, s -->
                                <div class="col-12 mb-3 d-flex align-items-center">
                                    <label class="form-label mb-0 me-3" style="width: 150px;">Thickness, s:</label>
                                    <input id="heaS" type="number" class="form-control me-2" readonly />
                                    <span>mm</span>
                                </div>

                                <!-- Thickness of flange, t -->
                                <div class="col-12 mb-3 d-flex align-items-center">
                                    <label class="form-label mb-0 me-3" style="width: 150px;">Thickness, t:</label>
                                    <input id="heaT" type="number" class="form-control me-2" readonly />
                                    <span>mm</span>
                                </div>

                                <!-- Length -->
                                <div class="col-12 mb-3 d-flex align-items-center">
                                    <label class="form-label mb-0 me-3" style="width: 150px;">Length, L:</label>
                                    <input id="heaLength" type="number" class="form-control me-2" value="1" min="0.01" step="0.01" />
                                    <span>m</span>
                                </div>
                            </div>

                            <!-- Result -->
                            <div class="mt-2">
                                <h6><strong>Result</strong></h6>
                                <p>Weight per meter: <strong id="heaWeightPerMeter" class="text-primary">0.00
                                        kg/m</strong></p>
                                <p>Total weight: <strong id="heaTotalWeight" class="text-primary">0.00 kg</strong></p>
                            </div>
                        </div>

                        <!-- Right: Image -->
                        <div class="col-lg-6 d-flex align-items-center">
                            <img src="{{ asset('assets/images/calculator/Beams-HEA(IPBL).webp') }}" class="img-fluid rounded border w-100" alt="HEA Beam Illustration" />
                        </div>
                    </div>
                </div>


                {{-- Beams - HEB (IPB) --}}
                <!-- HTML for HEB Calculator -->
                <div id="tab16" class="tab-content-item d-none">
                    <h5 class="mb-3">Calculator for Beams – HEB (IPB)</h5>
                    <div class="row">
                        <div class="col-lg-6 mb-4 mb-lg-0">
                            <!-- Profile Selector -->
                            <div class="mb-3 d-flex align-items-center">
                                <label for="hebProfile" class="form-label mb-0 me-3" style="width:140px;">Profile:</label>
                                <select id="hebProfile" class="form-select">
                                    <option>HEB 100</option>
                                    <option>HEB 120</option>
                                    <option>HEB 140</option>
                                    <option>HEB 160</option>
                                    <option>HEB 180</option>
                                    <option>HEB 200</option>
                                    <option>HEB 220</option>
                                    <option>HEB 240</option>
                                    <option>HEB 260</option>
                                    <option>HEB 280</option>
                                    <option>HEB 300</option>
                                    <option>HEB 320</option>
                                    <option>HEB 340</option>
                                    <option>HEB 360</option>
                                    <option>HEB 400</option>
                                    <option>HEB 450</option>
                                    <option>HEB 500</option>
                                    <option>HEB 550</option>
                                    <option>HEB 600</option>
                                    <option>HEB 650</option>
                                    <option>HEB 700</option>
                                    <option>HEB 800</option>
                                    <option>HEB 900</option>
                                    <option>HEB 1000</option>
                                </select>
                            </div>
                            <!-- Dimension Fields (readonly) -->
                            <div class="row">
                                <div class="col-12 mb-3 d-flex align-items-center">
                                    <label class="form-label mb-0 me-3" style="width:150px;">Height, h:</label>
                                    <input id="hebH" type="number" class="form-control me-2" readonly />
                                    <span>mm</span>
                                </div>
                                <div class="col-12 mb-3 d-flex align-items-center">
                                    <label class="form-label mb-0 me-3" style="width:150px;">Width, b:</label>
                                    <input id="hebB" type="number" class="form-control me-2" readonly />
                                    <span>mm</span>
                                </div>
                                <div class="col-12 mb-3 d-flex align-items-center">
                                    <label class="form-label mb-0 me-3" style="width:150px;">Thickness, s:</label>
                                    <input id="hebS" type="number" class="form-control me-2" readonly />
                                    <span>mm</span>
                                </div>
                                <div class="col-12 mb-3 d-flex align-items-center">
                                    <label class="form-label mb-0 me-3" style="width:150px;">Thickness, t:</label>
                                    <input id="hebT" type="number" class="form-control me-2" readonly />
                                    <span>mm</span>
                                </div>
                                <div class="col-12 mb-3 d-flex align-items-center">
                                    <label class="form-label mb-0 me-3" style="width:150px;">Length, L:</label>
                                    <input id="hebLength" type="number" class="form-control me-2" value="1" step="0.01" min="0.01" />
                                    <span>m</span>
                                </div>
                            </div>
                            <!-- Results -->
                            <div class="mt-2">
                                <h6><strong>Result</strong></h6>
                                <p>Weight per meter: <strong id="hebWeightPerMeter" class="text-primary">0.00
                                        kg/m</strong></p>
                                <p>Total weight: <strong id="hebTotalWeight" class="text-primary">0.00 kg</strong></p>
                            </div>
                        </div>
                        <!-- Right: Image -->
                        <div class="col-lg-6 d-flex align-items-center">
                            <img src="{{ asset('assets/images/calculator/Beams-HEB-(IPB).webp') }}" class="img-fluid rounded border w-100" alt="HEA Beam Illustration" />
                        </div>
                    </div>
                </div>

                <script>
                    document.addEventListener('DOMContentLoaded', () => {
                        const specs = {
                            // data per Maiak (h, b, s, t, weight per meter)
                            "HEB 100": {
                                h: 100
                                , b: 100
                                , s: 6
                                , t: 10
                                , w: 20.4
                            }
                            , "HEB 120": {
                                h: 120
                                , b: 120
                                , s: 6.5
                                , t: 11
                                , w: 26.7
                            }
                            , "HEB 140": {
                                h: 140
                                , b: 140
                                , s: 7
                                , t: 12
                                , w: 33.7
                            }
                            , "HEB 160": {
                                h: 160
                                , b: 160
                                , s: 8
                                , t: 13
                                , w: 42.6
                            }
                            , "HEB 180": {
                                h: 180
                                , b: 180
                                , s: 8.5
                                , t: 14
                                , w: 51.2
                            }
                            , "HEB 200": {
                                h: 200
                                , b: 200
                                , s: 9
                                , t: 15
                                , w: 61.3
                            }
                            , "HEB 220": {
                                h: 220
                                , b: 220
                                , s: 9.5
                                , t: 16
                                , w: 71.5
                            }
                            , "HEB 240": {
                                h: 240
                                , b: 240
                                , s: 10
                                , t: 17
                                , w: 83.2
                            }
                            , "HEB 260": {
                                h: 260
                                , b: 260
                                , s: 10
                                , t: 17.5
                                , w: 93.0
                            }
                            , "HEB 280": {
                                h: 280
                                , b: 280
                                , s: 10.5
                                , t: 18
                                , w: 103
                            }
                            , "HEB 300": {
                                h: 300
                                , b: 300
                                , s: 11
                                , t: 19
                                , w: 117
                            }
                            , "HEB 320": {
                                h: 320
                                , b: 300
                                , s: 11.5
                                , t: 20.5
                                , w: 127
                            }
                            , "HEB 340": {
                                h: 340
                                , b: 300
                                , s: 12
                                , t: 21.5
                                , w: 134
                            }
                            , "HEB 360": {
                                h: 360
                                , b: 300
                                , s: 12.5
                                , t: 22.5
                                , w: 142
                            }
                            , "HEB 400": {
                                h: 400
                                , b: 300
                                , s: 13.5
                                , t: 24
                                , w: 155
                            }
                            , "HEB 450": {
                                h: 450
                                , b: 300
                                , s: 14
                                , t: 26
                                , w: 171
                            }
                            , "HEB 500": {
                                h: 500
                                , b: 300
                                , s: 14.5
                                , t: 28
                                , w: 187
                            }
                            , "HEB 550": {
                                h: 550
                                , b: 300
                                , s: 15
                                , t: 29
                                , w: 199
                            }
                            , "HEB 600": {
                                h: 600
                                , b: 300
                                , s: 15.5
                                , t: 30
                                , w: 212
                            }
                            , "HEB 650": {
                                h: 650
                                , b: 300
                                , s: 16
                                , t: 31
                                , w: 225
                            }
                            , "HEB 700": {
                                h: 700
                                , b: 300
                                , s: 17
                                , t: 32
                                , w: 241
                            }
                            , "HEB 800": {
                                h: 800
                                , b: 300
                                , s: 17.5
                                , t: 33
                                , w: 262
                            }
                            , "HEB 900": {
                                h: 900
                                , b: 300
                                , s: 18.5
                                , t: 35
                                , w: 291
                            }
                            , "HEB 1000": {
                                h: 1000
                                , b: 300
                                , s: 19
                                , t: 36
                                , w: 314
                            }
                        };

                        const profile = document.getElementById('hebProfile');
                        const inpH = document.getElementById('hebH');
                        const inpB = document.getElementById('hebB');
                        const inpS = document.getElementById('hebS');
                        const inpT = document.getElementById('hebT');
                        const inpLength = document.getElementById('hebLength');
                        const outWpm = document.getElementById('hebWeightPerMeter');
                        const outTW = document.getElementById('hebTotalWeight');

                        function update() {
                            const p = specs[profile.value];
                            if (!p) return;

                            inpH.value = p.h;
                            inpB.value = p.b;
                            inpS.value = p.s;
                            inpT.value = p.t;

                            const length = parseFloat(inpLength.value) || 0;
                            const wpm = p.w;
                            outWpm.textContent = `${wpm.toFixed(2)} kg/m`;
                            outTW.textContent = `${(wpm * length).toFixed(2)} kg`;
                        }

                        profile.addEventListener('change', update);
                        inpLength.addEventListener('input', update);

                        // Initialize
                        inpLength.value = 1;
                        update();
                    });

                </script>




            </div>
        </div>
    </div>
</div>
@endsection
@section('extrajs')
<script>
    // Handle tab switch from sidebar
    document.querySelectorAll('#tabList button').forEach(btn => {
        btn.addEventListener('click', () => {
            document.querySelectorAll('#tabList button').forEach(b => b.classList.remove('active'));
            btn.classList.add('active');
            const target = btn.getAttribute('data-target');
            switchTab(target);
            document.querySelector('#tabSelect').value = target;
        });
    });

    // Handle dropdown change on mobile
    document.querySelector('#tabSelect').addEventListener('change', (e) => {
        const target = e.target.value;
        switchTab(target);
        document.querySelectorAll('#tabList button').forEach(btn => {
            btn.classList.toggle('active', btn.getAttribute('data-target') === target);
        });
    });

    function switchTab(targetId) {
        document.querySelectorAll('.tab-content-item').forEach(el => {
            el.classList.toggle('d-none', el.id !== targetId);
        });
    }


    // Steel sheets and plates
    // function calculateSteelSheetWeight() {
    //     const thickness = parseFloat(document.getElementById('sheetThickness').value) || 0;
    //     const width = parseFloat(document.getElementById('sheetWidth').value) || 0;
    //     const length = parseFloat(document.getElementById('sheetLength').value) || 0;
    //     const pieces = parseInt(document.getElementById('sheetPieces').value) || 0;

    //     const density = 7.85; 

    //     const singleWeight = (length * width * thickness * density) / 1_000_000;
    //     const totalWeight = singleWeight * pieces;

    //     document.getElementById('sheetSingleWeight').textContent = singleWeight.toFixed(2) + " kg";
    //     document.getElementById('sheetTotalWeight').textContent = totalWeight.toFixed(2) + " kg";
    // }

    // Seamless steel pipes - circular
    // function calculatePipeWeight() {
    //     const D = parseFloat(document.getElementById('pipeDiameter').value) || 0; // Outer diameter (mm)
    //     const t = parseFloat(document.getElementById('pipeThickness').value) || 0; // Thickness (mm)
    //     const L_meters = parseFloat(document.getElementById('pipeLength').value) || 0; // Length in meters

    //     const density = 7.85; 

    //     if (D <= 0 || t <= 0 || L_meters <= 0 || D <= 2 * t) {
    //         document.getElementById('pipeWeightPerMeter').textContent = "NaN";
    //         document.getElementById('pipeTotalWeight').textContent = "NaN";
    //         return;
    //     }

    //     const d = D - 2 * t; 
    //     const area = (Math.PI / 4) * (Math.pow(D, 2) - Math.pow(d, 2)); // mm²

    //     const weightPerMm = area * density * 1e-6; 
    //     const weightPerMeter = weightPerMm * 1000; 
    //     const totalWeight = weightPerMeter * L_meters; 

    //     document.getElementById('pipeWeightPerMeter').textContent = weightPerMeter.toFixed(2) + " kg/m";
    //     document.getElementById('pipeTotalWeight').textContent = totalWeight.toFixed(2) + " kg";
    // }

    // Hollow structural sections - circular
    // function calculateHollowSectionWeight() {
    //     const D = parseFloat(document.getElementById('hollowDiameter').value) || 0; // Outer diameter (mm)
    //     const t = parseFloat(document.getElementById('hollowThickness').value) || 0; // Thickness (mm)
    //     const L_meters = parseFloat(document.getElementById('hollowLength').value) || 0; // Length in meters

    //     const density = 7.85; 

    //     if (D <= 0 || t <= 0 || L_meters <= 0 || D <= 2 * t) {
    //         document.getElementById('hollowWeightPerMeter').textContent = "NaN";
    //         document.getElementById('hollowTotalWeight').textContent = "NaN";
    //         return;
    //     }

    //     const d = D - 2 * t; 
    //     const area = (Math.PI / 4) * (Math.pow(D, 2) - Math.pow(d, 2)); // mm²

    //     const weightPerMm = area * density * 1e-6; 
    //     const weightPerMeter = weightPerMm * 1000; 
    //     const totalWeight = weightPerMeter * L_meters; 

    //     document.getElementById('hollowWeightPerMeter').textContent = weightPerMeter.toFixed(2) + " kg/m";
    //     document.getElementById('hollowTotalWeight').textContent = totalWeight.toFixed(2) + " kg";
    // }

    // ===========
    // function calculateSquareHollowSectionWeight() {
    //     const A = parseFloat(document.getElementById('squareSide').value) || 0;
    //     const t = parseFloat(document.getElementById('squareThickness').value) || 0;
    //     const L = parseFloat(document.getElementById('squareLength').value) || 0;

    //     if (A <= 0 || t <= 0 || L <= 0 || t >= A / 2) {
    //         document.getElementById('squareWeightPerMeter').textContent = '0.00 kg/m';
    //         document.getElementById('squareTotalWeight').textContent = '0.00 kg';
    //         return;
    //     }

    //     const outerArea = A * A;
    //     const innerArea = (A - 2 * t) * (A - 2 * t);
    //     const area = outerArea - innerArea; 
    //     const density = 7.85e-6; 
    //     const weightPerMeter = area * density * 1000; 
    //     const totalWeight = weightPerMeter * L;

    //     document.getElementById('squareWeightPerMeter').textContent = `${weightPerMeter.toFixed(2)} kg/m`;
    //     document.getElementById('squareTotalWeight').textContent = `${totalWeight.toFixed(2)} kg`;
    // }

    // ===========


    // Hollow Structural Sections – Rectangular
    // function calculateRectangularHollowSectionWeight() {
    //     const A = parseFloat(document.getElementById('rectangularSideA').value) || 0; // Side A (mm)
    //     const B = parseFloat(document.getElementById('rectangularSideB').value) || 0; // Side B (mm)
    //     const t = parseFloat(document.getElementById('rectangularThickness').value) || 0; // Thickness (mm)
    //     const L_meters = parseFloat(document.getElementById('rectangularLength').value) || 0; // Length (m)

    //     const density = 7.85; 

    //     if (A <= 0 || B <= 0 || t <= 0 || L_meters <= 0 || A <= 2 * t || B <= 2 * t) {
    //         document.getElementById('rectangularWeightPerMeter').textContent = "NaN";
    //         document.getElementById('rectangularTotalWeight').textContent = "NaN";
    //         return;
    //     }

    //     const area = (2 * (A * t)) + (2 * (B * t)) - (4 * (t * t)); 

    //     const weightPerMm = area * density * 1e-6;
    //     const weightPerMeter = weightPerMm * 1000; 
    //     const totalWeight = weightPerMeter * L_meters; 

    //     document.getElementById('rectangularWeightPerMeter').textContent = weightPerMeter.toFixed(2) + " kg/m";
    //     document.getElementById('rectangularTotalWeight').textContent = totalWeight.toFixed(2) + " kg";
    // }

</script>

<script>
    function initSteelSheetCalculator(tabNumber, density = 7850) {
        const tInput = document.getElementById('sheetThickness' + tabNumber);
        const wInput = document.getElementById('sheetWidth' + tabNumber);
        const lInput = document.getElementById('sheetLength' + tabNumber);
        const piecesInput = document.getElementById('sheetPieces' + tabNumber);

        const singleOutput = document.getElementById('sheetSingleWeight' + tabNumber);
        const totalOutput = document.getElementById('sheetTotalWeight' + tabNumber);

        function calculate() {
            let t = parseFloat(tInput.value) || 0;
            let W = parseFloat(wInput.value) || 0;
            let L = parseFloat(lInput.value) || 0;
            let pieces = parseInt(piecesInput.value) || 1;

            let volume_m3 = (t / 1000) * (W / 1000) * (L / 1000);
            let weight_single = volume_m3 * density;
            let weight_total = weight_single * pieces;

            singleOutput.innerText = weight_single.toFixed(2) + " kg";
            totalOutput.innerText = weight_total.toFixed(2) + " kg";
        }

        tInput.addEventListener('input', calculate);
        wInput.addEventListener('input', calculate);
        lInput.addEventListener('input', calculate);
        piecesInput.addEventListener('input', calculate);
        calculate();
    }

    initSteelSheetCalculator(1);

</script>
<script>
    function initPipeCalculator(tabNumber, density = 7850) {
        const DInput = document.getElementById('pipeDiameter' + tabNumber);
        const tInput = document.getElementById('pipeThickness' + tabNumber);
        const LInput = document.getElementById('pipeLength' + tabNumber);

        const perMeterOutput = document.getElementById('pipeWeightPerMeter' + tabNumber);
        const totalOutput = document.getElementById('pipeTotalWeight' + tabNumber);

        function calculate() {
            let D = parseFloat(DInput.value) || 0; // outer diameter in mm
            let t = parseFloat(tInput.value) || 0; // thickness in mm
            let L = parseFloat(LInput.value) || 0; // length in meters

            // Convert to meters
            D = D / 1000;
            t = t / 1000;

            if (t >= D / 2) {
                perMeterOutput.innerText = "0 kg/m";
                totalOutput.innerText = "0 kg";
                return;
            }

            // Cross-sectional area of hollow pipe: π/4 * (D^2 - (D-2t)^2)
            let area = Math.PI / 4 * (Math.pow(D, 2) - Math.pow(D - 2 * t, 2)); // m²

            let weight_per_meter = area * density; // kg/m
            let total_weight = weight_per_meter * L;

            perMeterOutput.innerText = weight_per_meter.toFixed(2) + " kg/m";
            totalOutput.innerText = total_weight.toFixed(2) + " kg";
        }

        // Event listeners
        DInput.addEventListener('input', calculate);
        tInput.addEventListener('input', calculate);
        LInput.addEventListener('input', calculate);

        // Initial calculation
        calculate();
    }

    // Initialize tab2 calculator
    initPipeCalculator(2);

</script>
<script>
    function initHollowCircularCalculator(tabNumber, density = 7850) {
        const DInput = document.getElementById('hollowDiameter' + tabNumber);
        const tInput = document.getElementById('hollowThickness' + tabNumber);
        const LInput = document.getElementById('hollowLength' + tabNumber);

        const perMeterOutput = document.getElementById('hollowWeightPerMeter' + tabNumber);
        const totalOutput = document.getElementById('hollowTotalWeight' + tabNumber);

        function calculate() {
            let D = parseFloat(DInput.value) || 0; // outer diameter in mm
            let t = parseFloat(tInput.value) || 0; // thickness in mm
            let L = parseFloat(LInput.value) || 0; // length in meters

            // Convert to meters
            D = D / 1000;
            t = t / 1000;

            if (t >= D / 2) {
                perMeterOutput.innerText = "0 kg/m";
                totalOutput.innerText = "0 kg";
                return;
            }

            // Cross-sectional area of hollow circular section: π/4 * (D^2 - (D-2t)^2)
            let area = Math.PI / 4 * (Math.pow(D, 2) - Math.pow(D - 2 * t, 2)); // m²

            let weight_per_meter = area * density; // kg/m
            let total_weight = weight_per_meter * L;

            perMeterOutput.innerText = weight_per_meter.toFixed(2) + " kg/m";
            totalOutput.innerText = total_weight.toFixed(2) + " kg";
        }

        // Event listeners
        DInput.addEventListener('input', calculate);
        tInput.addEventListener('input', calculate);
        LInput.addEventListener('input', calculate);

        // Initial calculation
        calculate();
    }

    // Initialize tab3 calculator
    initHollowCircularCalculator(3);

</script>

<script>
    function calculateSquareHollowSectionWeight() {
        // Get input values
        let A = parseFloat(document.getElementById('squareSide').value); // mm
        let t = parseFloat(document.getElementById('squareThickness').value); // mm
        let L = parseFloat(document.getElementById('squareLength').value); // m

        if (isNaN(A) || isNaN(t) || isNaN(L)) return;

        // Convert mm to meters
        A = A / 1000;
        t = t / 1000;

        // Density in kg/m³
        const density = 7530;

        // Calculate inner side
        let A_inner = A - 2 * t;
        if (A_inner < 0) A_inner = 0;

        // Cross-sectional area
        let area = Math.pow(A, 2) - Math.pow(A_inner, 2);

        // Weight per meter
        let weightPerMeter = area * density;

        // Total weight
        let totalWeight = weightPerMeter * L;

        // Round to 2 decimal places
        weightPerMeter = weightPerMeter.toFixed(2);
        totalWeight = totalWeight.toFixed(2);

        // Display results
        document.getElementById('squareWeightPerMeter').textContent = weightPerMeter + ' kg/m';
        document.getElementById('squareTotalWeight').textContent = totalWeight + ' kg';
    }

    // Trigger calculation on page load
    calculateSquareHollowSectionWeight();

</script>
<script>
    // Constants from MAIAK
    const MAIAK = {
        Z: 0.0157, // Constant Z
        Q: 0.044877 // Constant Q
    };

    // Function to calculate the weight based on the provided inputs
    function calculateRectangularHollowSectionWeight() {
        // Get the inputs from HTML elements
        const a = parseFloat(document.getElementById("rectangularSideA").value); // Side A in mm
        const b = parseFloat(document.getElementById("rectangularSideB").value); // Side B in mm
        const t = parseFloat(document.getElementById("rectangularThickness").value); // Thickness in mm
        const L = parseFloat(document.getElementById("rectangularLength").value); // Length in meters

        // Convert length to mm
        const L_mm = L * 1000; // Length in mm

        // Check if the thickness is valid (not greater than half of either side)
        if (t > a / 2 || t > b / 2) {
            alert("Thickness is too large for the given dimensions.");
            return;
        }

        // Calculate weight per meter using the formula
        const weightPerMeter = t * (MAIAK.Z * (a + b) - MAIAK.Q * t);

        // Calculate total weight (weight per meter multiplied by length in meters)
        const totalWeight = weightPerMeter * L;

        // Display the results
        document.getElementById("rectangularWeightPerMeter").textContent = weightPerMeter.toFixed(2) + " kg/m";
        document.getElementById("rectangularTotalWeight").textContent = totalWeight.toFixed(2) + " kg";
    }

</script>

<script>
    function calculateRoundBarWeight() {
        const density = 7850; // kg/m³

        // Input values
        const D = parseFloat(document.getElementById("roundDiameter").value) || 0; // mm
        const L = parseFloat(document.getElementById("roundLength").value) || 0; // m (already in meters)

        // Convert D mm → m
        const Dm = D / 1000;

        // Cross-sectional area of circle
        const area = Math.PI * Math.pow(Dm, 2) / 4;

        // Weight per meter
        const weightPerMeter = area * density;

        // Total weight
        const totalWeight = weightPerMeter * L; // L already in meters

        // Update results
        document.getElementById("roundWeightPerMeter").innerText = weightPerMeter.toFixed(2) + " kg/m";
        document.getElementById("roundTotalWeight").innerText = totalWeight.toFixed(2) + " kg";
    }

    // Initial calculation
    calculateRoundBarWeight();

</script>

<script>
    function calculateSquareBarWeight7() {
        const density = 7850; // kg/m³

        // Input values
        const A = parseFloat(document.getElementById("squareSideA7").value) || 0; // mm
        const L = parseFloat(document.getElementById("squareLength7").value) || 0; // m (in meters, not mm)

        // Convert mm → m
        const Am = A / 1000;

        // Cross-sectional area (m²)
        const area = Am * Am;

        // Weight per meter (kg/m)
        const weightPerMeter = area * density;

        // Total weight (kg)
        const totalWeight = weightPerMeter * L;

        // Update results
        document.getElementById("squareWeightPerMeter7").innerText = weightPerMeter.toFixed(2) + " kg/m";
        document.getElementById("squareTotalWeight7").innerText = totalWeight.toFixed(2) + " kg";
    }

    // Run once at page load
    document.addEventListener("DOMContentLoaded", function() {
        // Attach events
        document.getElementById("squareSideA7").addEventListener("input", calculateSquareBarWeight7);
        document.getElementById("squareLength7").addEventListener("input", calculateSquareBarWeight7);

        calculateSquareBarWeight7(); // initial calc
    });

</script>

<script>
    function calculateFlatBarWeight8() {
        const density = 7850; // kg/m³

        // Get input values
        const W = parseFloat(document.getElementById("flatWidth8").value) || 0; // mm
        const T = parseFloat(document.getElementById("flatThickness8").value) || 0; // mm
        const L = parseFloat(document.getElementById("flatLength8").value) || 0; // m

        // Convert mm → m
        const Wm = W / 1000;
        const Tm = T / 1000;

        // Cross-sectional area (m²)
        const area = Wm * Tm;

        // Weight per meter
        const weightPerMeter = area * density;

        // Total weight
        const totalWeight = weightPerMeter * L;

        // Update results
        document.getElementById("flatWeightPerMeter8").innerText = weightPerMeter.toFixed(2) + " kg/m";
        document.getElementById("flatTotalWeight8").innerText = totalWeight.toFixed(2) + " kg";
    }

    // Run once on page load
    calculateFlatBarWeight8();

</script>

<script>
    function calculateEqualAngleWeight9() {
        const density = 7850; // kg/m³

        // Input values
        const A = parseFloat(document.getElementById("angleSide9").value) || 0; // mm
        const t = parseFloat(document.getElementById("angleThickness9").value) || 0; // mm
        const L = parseFloat(document.getElementById("angleLength9").value) || 0; // m

        // Convert mm → m
        const Am = A / 1000;
        const tm = t / 1000;

        // Cross-sectional area = 2*(A*t) - (t*t)
        const area = (2 * Am * tm) - (tm * tm);

        // Weight per meter
        const weightPerMeter = area * density;

        // Total weight
        const totalWeight = weightPerMeter * L;

        // Update results
        document.getElementById("angleWeightPerMeter9").innerText = weightPerMeter.toFixed(2) + " kg/m";
        document.getElementById("angleTotalWeight9").innerText = totalWeight.toFixed(2) + " kg";
    }

    // Run once at load
    calculateEqualAngleWeight9();

</script>
<script>
    // Mapping of Side (A×B) → available thickness options
    const thicknessOptions10 = {
        "30x20": [3, 4]
        , "40x20": [3, 4]
        , "40x25": [4]
        , "45x30": [3, 4, 5]
        , "50x30": [4, 5]
        , "60x30": [5]
        , "60x40": [5, 6, 7]
        , "60x50": [5, 6, 8, 10]
        , "65x50": [5]
        , "70x50": [6]
        , "75x50": [5, 6, 8, 9, 10]
        , "75x55": [5, 7, 9]
        , "75x60": [5, 6, 8, 10]
        , "80x40": [6, 8, 10]
        , "80x60": [7]
        , "90x60": [6, 8, 10]
        , "90x75": [6, 8, 10]
        , "100x50": [6, 8, 10, 12]
        , "100x65": [7, 8, 9, 10]
        , "100x75": [6, 7, 8, 9, 10, 12]
        , "100x90": [6, 8, 10, 12]
        , "120x80": [8, 10, 12]
        , "125x75": [8, 10, 12]
        , "125x80": [8, 10, 12, 15]
        , "125x90": [8, 10, 12, 15]
        , "130x65": [8, 10, 12]
        , "130x75": [8, 10, 12, 15]
        , "130x90": [10, 12]
        , "150x75": [9, 10, 12, 15]
        , "150x90": [10, 12, 15]
        , "150x100": [10, 12]
        , "180x90": [10, 12]
        , "200x100": [10, 12, 15]
        , "200x150": [12, 15]
    };

    // Update thickness dropdown based on selected size
    function updateThicknessOptions10() {
        const size = document.getElementById("angleSize10").value;
        const thicknessSelect = document.getElementById("angleThickness10");

        // Clear old options
        thicknessSelect.innerHTML = "";

        // Populate new options
        if (thicknessOptions10[size]) {
            thicknessOptions10[size].forEach(t => {
                let opt = document.createElement("option");
                opt.value = t;
                opt.text = t;
                thicknessSelect.add(opt);
            });
        }
    }

    // Calculate weight
    function calculateUnequalAngleWeight10() {
        const density = 7850; // kg/m³

        const size = document.getElementById("angleSize10").value;
        const [A, B] = size.split("x").map(Number); // mm

        const t = parseFloat(document.getElementById("angleThickness10").value) || 0; // mm
        const L = parseFloat(document.getElementById("angleLength10").value) || 0; // m

        // Convert mm → m
        const Am = A / 1000;
        const Bm = B / 1000;
        const tm = t / 1000;

        // Cross-sectional area (m²) = (A*t + B*t - t²)
        const area = (Am * tm) + (Bm * tm) - (tm * tm);

        const weightPerMeter = area * density;
        const totalWeight = weightPerMeter * L;

        // Update results
        document.getElementById("angleWeightPerMeter10").innerText = weightPerMeter.toFixed(2) + " kg/m";
        document.getElementById("angleTotalWeight10").innerText = totalWeight.toFixed(2) + " kg";
    }

    // Initialize on page load
    updateThicknessOptions10();
    calculateUnequalAngleWeight10();

</script>

<script>
    const gostChannels = {
        "6.5": {
            h: 65
            , b: 36
            , s: 4.4
            , t: 7.2
            , w: 5.90
        }
        , "8": {
            h: 80
            , b: 40
            , s: 4.2
            , t: 7.4
            , w: 7.03
        }
        , "10": {
            h: 100
            , b: 46
            , s: 4.3
            , t: 7.6
            , w: 8.58
        }
        , "12": {
            h: 120
            , b: 52
            , s: 4.3
            , t: 7.9
            , w: 10.22
        }
        , "14": {
            h: 140
            , b: 58
            , s: 4.4
            , t: 8.2
            , w: 12.07
        }
        , "16": {
            h: 160
            , b: 64
            , s: 4.4
            , t: 8.5
            , w: 13.83
        }
        , "18": {
            h: 180
            , b: 70
            , s: 4.5
            , t: 9.2
            , w: 16.60
        }
        , "20": {
            h: 200
            , b: 76
            , s: 4.6
            , t: 9.6
            , w: 18.41
        }
        , "22": {
            h: 220
            , b: 80
            , s: 4.6
            , t: 10.0
            , w: 20.53
        }
        , "24": {
            h: 240
            , b: 90
            , s: 4.8
            , t: 10.6
            , w: 23.70
        }
        , "27": {
            h: 270
            , b: 95
            , s: 6.0
            , t: 10.5
            , w: 27.70
        }
        , "30": {
            h: 300
            , b: 100
            , s: 6.3
            , t: 11.4
            , w: 32.09
        }
    };

    // Populate dropdown
    function populateGostProfiles() {
        const select = document.getElementById("gostProfile");
        select.innerHTML = Object.keys(gostChannels).map(p => `<option value="${p}">№ ${p}</option>`).join('');
    }

    // Update fields & calculation
    function updateGostUI() {
        const profile = document.getElementById("gostProfile").value;
        const data = gostChannels[profile];
        if (!data) return;

        document.getElementById("gostH").value = data.h;
        document.getElementById("gostB").value = data.b;
        document.getElementById("gostS").value = data.s;
        document.getElementById("gostT").value = data.t;

        const length = parseFloat(document.getElementById("gostLength").value) || 0;
        document.getElementById("gostWeightPerMeter").textContent = data.w.toFixed(2) + " kg/m";
        document.getElementById("gostTotalWeight").textContent = (data.w * length).toFixed(2) + " kg";
    }

    // Init
    document.addEventListener("DOMContentLoaded", () => {
        populateGostProfiles();
        document.getElementById("gostProfile").addEventListener("change", updateGostUI);
        document.getElementById("gostLength").addEventListener("input", updateGostUI);
        document.getElementById("gostProfile").selectedIndex = 0;
        updateGostUI();
    });

</script>

<script>
    const upnChannels = {
        "UPN 50×25": {
            h: 50
            , b: 25
            , s: 5.0
            , t: 6.0
            , w: 3.86
        }
        , "UPN 50×38": {
            h: 50
            , b: 38
            , s: 5.0
            , t: 7.0
            , w: 5.59
        }
        , "UPN 60": {
            h: 60
            , b: 30
            , s: 6.0
            , t: 6.0
            , w: 5.07
        }
        , "UPN 65": {
            h: 65
            , b: 42
            , s: 5.5
            , t: 7.5
            , w: 7.09
        }
        , "UPN 80": {
            h: 80
            , b: 45
            , s: 6.0
            , t: 8.0
            , w: 8.64
        }
        , "UPN 100": {
            h: 100
            , b: 50
            , s: 6.0
            , t: 8.5
            , w: 10.6
        }
        , "UPN 120": {
            h: 120
            , b: 55
            , s: 7.0
            , t: 9.0
            , w: 13.4
        }
        , "UPN 140": {
            h: 140
            , b: 60
            , s: 7.0
            , t: 10.0
            , w: 16.0
        }
        , "UPN 160": {
            h: 160
            , b: 65
            , s: 7.5
            , t: 10.5
            , w: 18.8
        }
        , "UPN 180": {
            h: 180
            , b: 70
            , s: 8.0
            , t: 11.0
            , w: 22.0
        }
        , "UPN 200": {
            h: 200
            , b: 75
            , s: 8.5
            , t: 11.5
            , w: 25.3
        }
        , "UPN 220": {
            h: 220
            , b: 80
            , s: 9.0
            , t: 12.5
            , w: 29.4
        }
        , "UPN 240": {
            h: 240
            , b: 85
            , s: 9.5
            , t: 13.0
            , w: 33.2
        }
        , "UPN 260": {
            h: 260
            , b: 90
            , s: 10.0
            , t: 14.0
            , w: 37.9
        }
        , "UPN 280": {
            h: 280
            , b: 95
            , s: 10.0
            , t: 15.0
            , w: 41.8
        }
        , "UPN 300": {
            h: 300
            , b: 100
            , s: 10.0
            , t: 16.0
            , w: 46.2
        }
        , "UPN 320": {
            h: 320
            , b: 100
            , s: 14.0
            , t: 17.5
            , w: 59.5
        }
        , "UPN 350": {
            h: 350
            , b: 100
            , s: 14.0
            , t: 16.0
            , w: 60.6
        }
        , "UPN 380": {
            h: 380
            , b: 102
            , s: 13.5
            , t: 16.0
            , w: 63.1
        }
        , "UPN 400": {
            h: 400
            , b: 110
            , s: 14.0
            , t: 18.0
            , w: 71.8
        }
    };

    function populateUpnProfiles() {
        const select = document.querySelector('#tab12 select');
        select.innerHTML = Object.keys(upnChannels)
            .map(p => `<option value="${p}">${p}</option>`)
            .join('');
    }

    function updateUpnUI() {
        const selectEl = document.querySelector('#tab12 select');
        const data = upnChannels[selectEl.value];
        if (!data) return;

        const inputs = document.querySelectorAll('#tab12 input');
        inputs[0].value = data.h;
        inputs[1].value = data.b;
        inputs[2].value = data.s;
        inputs[3].value = data.t;

        const length = parseFloat(inputs[4].value) || 1;
        const weightPerMeter = data.w;
        const totalWeight = weightPerMeter * length;

        const results = document.querySelectorAll('#tab12 .text-primary');
        results[0].textContent = weightPerMeter.toFixed(2) + " kg/m";
        results[1].textContent = totalWeight.toFixed(2) + " kg";
    }

    document.addEventListener('DOMContentLoaded', () => {
        populateUpnProfiles();
        const select = document.querySelector('#tab12 select');
        select.selectedIndex = 0; // Select the first profile by default
        updateUpnUI();
        select.addEventListener('change', updateUpnUI);
        document.querySelector('#tab12 input:nth-of-type(5)').addEventListener('input', updateUpnUI);
    });

</script>



<!-- === JavaScript === -->
<script>
    const ipnChannels = {
        "IPN 80": {
            h: 80
            , b: 42
            , s: 3.9
            , t: 5.9
            , w: 5.94
        }
        , "IPN 100": {
            h: 100
            , b: 50
            , s: 4.5
            , t: 6.8
            , w: 8.34
        }
        , "IPN 120": {
            h: 120
            , b: 58
            , s: 5.1
            , t: 7.7
            , w: 11.1
        }
        , "IPN 140": {
            h: 140
            , b: 66
            , s: 5.7
            , t: 8.6
            , w: 14.3
        }
        , "IPN 160": {
            h: 160
            , b: 74
            , s: 6.3
            , t: 9.5
            , w: 17.9
        }
        , "IPN 180": {
            h: 180
            , b: 82
            , s: 6.9
            , t: 10.4
            , w: 21.9
        }
        , "IPN 200": {
            h: 200
            , b: 90
            , s: 7.5
            , t: 11.3
            , w: 26.2
        }
        , "IPN 220": {
            h: 220
            , b: 98
            , s: 8.1
            , t: 12.2
            , w: 31.1
        }
        , "IPN 240": {
            h: 240
            , b: 106
            , s: 8.7
            , t: 13.1
            , w: 36.2
        }
        , "IPN 260": {
            h: 260
            , b: 113
            , s: 9.4
            , t: 14.1
            , w: 41.9
        }
        , "IPN 280": {
            h: 280
            , b: 119
            , s: 10.1
            , t: 15.2
            , w: 47.9
        }
        , "IPN 300": {
            h: 300
            , b: 125
            , s: 10.8
            , t: 16.2
            , w: 54.2
        }
        , "IPN 320": {
            h: 320
            , b: 131
            , s: 11.5
            , t: 17.3
            , w: 61.0
        }
        , "IPN 340": {
            h: 340
            , b: 137
            , s: 12.2
            , t: 18.3
            , w: 68.0
        }
        , "IPN 360": {
            h: 360
            , b: 143
            , s: 13.0
            , t: 19.5
            , w: 76.1
        }
        , "IPN 380": {
            h: 380
            , b: 149
            , s: 13.7
            , t: 20.5
            , w: 84.0
        }
        , "IPN 400": {
            h: 400
            , b: 155
            , s: 14.4
            , t: 21.6
            , w: 92.4
        }
        , "IPN 450": {
            h: 450
            , b: 170
            , s: 16.2
            , t: 24.3
            , w: 115.0
        }
        , "IPN 500": {
            h: 500
            , b: 185
            , s: 18.0
            , t: 27.0
            , w: 141.0
        }
        , "IPN 550": {
            h: 550
            , b: 200
            , s: 19.0
            , t: 30.0
            , w: 166.0
        }
    };

    function populateIpnProfiles() {
        const select = document.getElementById('ipnProfile');
        select.innerHTML = Object.keys(ipnChannels)
            .map(profile => `<option value="${profile}">${profile}</option>`)
            .join('');
    }

    function updateIpnUI() {
        const select = document.getElementById('ipnProfile');
        const profile = select.value;
        const data = ipnChannels[profile];

        if (!data) return;

        // Set dimensions
        document.getElementById('ipnH').value = data.h;
        document.getElementById('ipnB').value = data.b;
        document.getElementById('ipnS').value = data.s;
        document.getElementById('ipnT').value = data.t;

        // Calculate weight
        const length = parseFloat(document.getElementById('ipnLength').value) || 0;
        const weightPerMeter = data.w;
        const totalWeight = weightPerMeter * length;

        // Set results
        document.getElementById('ipnWeightPerMeter').textContent = weightPerMeter.toFixed(2) + " kg/m";
        document.getElementById('ipnTotalWeight').textContent = totalWeight.toFixed(2) + " kg";
    }

    document.addEventListener('DOMContentLoaded', () => {
        populateIpnProfiles();
        document.getElementById('ipnProfile').addEventListener('change', updateIpnUI);
        document.getElementById('ipnLength').addEventListener('input', updateIpnUI);

        // Set default values
        updateIpnUI();
    });

</script>

<script>
    // EN 10365:2017 — Standard IPE sections (not IPE A / O / V)
    // Fields: h, b, s (web), t (flange), weight (kg/m), area (cm²)
    const IPE_DATA = {
        "IPE 80": {
            h: 80.0
            , b: 46.0
            , s: 3.8
            , t: 5.2
            , weight: 6.0
            , area: 7.6
        }
        , "IPE 100": {
            h: 100.0
            , b: 55.0
            , s: 4.1
            , t: 5.7
            , weight: 8.1
            , area: 10.3
        }
        , "IPE 120": {
            h: 120.0
            , b: 64.0
            , s: 4.4
            , t: 6.3
            , weight: 10.4
            , area: 13.2
        }
        , "IPE 140": {
            h: 140.0
            , b: 73.0
            , s: 4.7
            , t: 6.9
            , weight: 12.9
            , area: 16.4
        }
        , "IPE 160": {
            h: 160.0
            , b: 82.0
            , s: 5.0
            , t: 7.4
            , weight: 15.8
            , area: 20.1
        }
        , "IPE 180": {
            h: 180.0
            , b: 91.0
            , s: 5.3
            , t: 8.0
            , weight: 18.8
            , area: 23.9
        }
        , "IPE 200": {
            h: 200.0
            , b: 100.0
            , s: 5.6
            , t: 8.5
            , weight: 22.4
            , area: 28.5
        }
        , "IPE 220": {
            h: 220.0
            , b: 110.0
            , s: 5.9
            , t: 9.2
            , weight: 26.2
            , area: 33.4
        }
        , "IPE 240": {
            h: 240.0
            , b: 120.0
            , s: 6.2
            , t: 9.8
            , weight: 30.7
            , area: 39.1
        }
        , "IPE 270": {
            h: 270.0
            , b: 135.0
            , s: 6.6
            , t: 10.2
            , weight: 36.1
            , area: 45.9
        }
        , "IPE 300": {
            h: 300.0
            , b: 150.0
            , s: 7.1
            , t: 10.7
            , weight: 42.2
            , area: 53.8
        }
        , "IPE 330": {
            h: 330.0
            , b: 160.0
            , s: 7.5
            , t: 11.5
            , weight: 49.1
            , area: 62.6
        }
        , "IPE 360": {
            h: 360.0
            , b: 170.0
            , s: 8.0
            , t: 12.7
            , weight: 57.1
            , area: 72.7
        }
        , "IPE 400": {
            h: 400.0
            , b: 180.0
            , s: 8.6
            , t: 13.5
            , weight: 66.3
            , area: 84.5
        }
        , "IPE 450": {
            h: 450.0
            , b: 190.0
            , s: 9.4
            , t: 14.6
            , weight: 77.6
            , area: 98.8
        }
        , "IPE 500": {
            h: 500.0
            , b: 200.0
            , s: 10.2
            , t: 16.0
            , weight: 90.7
            , area: 115.5
        }
        , "IPE 550": {
            h: 550.0
            , b: 210.0
            , s: 11.1
            , t: 17.2
            , weight: 106.0
            , area: 134.4
        }
        , "IPE 600": {
            h: 600.0
            , b: 220.0
            , s: 12.0
            , t: 19.0
            , weight: 122.0
            , area: 156.0
        }
    };
    const profileEl = document.getElementById('ipeProfile');
    const hEl = document.getElementById('ipeH');
    const bEl = document.getElementById('ipeB');
    const sEl = document.getElementById('ipeS');
    const tEl = document.getElementById('ipeT');
    const lenEl = document.getElementById('ipeLength');
    const wpmEl = document.getElementById('ipeWeightPerMeter');
    const totalEl = document.getElementById('ipeTotalWeight');

    function updateIPE() {
        const key = profileEl.value;
        const d = IPE_DATA[key];
        if (!d) return;
        hEl.value = d.h;
        bEl.value = d.b;
        sEl.value = d.s;
        tEl.value = d.t;
        const wpm = d.weight; // kg/m from standard
        const total = wpm * (parseFloat(lenEl.value) || 0);
        wpmEl.textContent = `${wpm.toFixed(1)} kg/m`;
        totalEl.textContent = `${total.toFixed(2)} kg`;
    }

    profileEl.addEventListener('change', updateIPE);
    lenEl.addEventListener('input', updateIPE);

    // init on load
    updateIPE();

</script>

<script>
    const heaData = {
        "HEA 100": {
            h: 96
            , b: 100
            , s: 5.0
            , t: 8.0
            , weight: 16.7
        }
        , "HEA 120": {
            h: 114
            , b: 120
            , s: 5.0
            , t: 8.0
            , weight: 19.9
        }
        , "HEA 140": {
            h: 133
            , b: 140
            , s: 5.5
            , t: 8.5
            , weight: 24.7
        }
        , "HEA 160": {
            h: 152
            , b: 160
            , s: 6.0
            , t: 9.0
            , weight: 30.4
        }
        , "HEA 180": {
            h: 171
            , b: 180
            , s: 6.0
            , t: 9.5
            , weight: 35.5
        }
        , "HEA 200": {
            h: 190
            , b: 200
            , s: 6.5
            , t: 10.0
            , weight: 42.3
        }
        , "HEA 220": {
            h: 210
            , b: 220
            , s: 7.0
            , t: 11.0
            , weight: 50.5
        }
        , "HEA 240": {
            h: 230
            , b: 240
            , s: 7.5
            , t: 12.0
            , weight: 60.3
        }
        , "HEA 260": {
            h: 250
            , b: 260
            , s: 7.5
            , t: 12.5
            , weight: 68.2
        }
        , "HEA 280": {
            h: 270
            , b: 280
            , s: 8.0
            , t: 13.0
            , weight: 76.4
        }
        , "HEA 300": {
            h: 290
            , b: 300
            , s: 8.5
            , t: 14.0
            , weight: 88.3
        }
        , "HEA 320": {
            h: 310
            , b: 300
            , s: 9.0
            , t: 15.5
            , weight: 97.6
        }
        , "HEA 340": {
            h: 330
            , b: 300
            , s: 9.5
            , t: 16.5
            , weight: 105.0
        }
        , "HEA 360": {
            h: 350
            , b: 300
            , s: 10.0
            , t: 17.5
            , weight: 112.0
        }
        , "HEA 400": {
            h: 390
            , b: 300
            , s: 11.0
            , t: 19.0
            , weight: 125.0
        }
        , "HEA 450": {
            h: 440
            , b: 300
            , s: 11.5
            , t: 21.0
            , weight: 140.0
        }
        , "HEA 500": {
            h: 490
            , b: 300
            , s: 12.0
            , t: 23.0
            , weight: 155.0
        }
        , "HEA 550": {
            h: 540
            , b: 300
            , s: 12.5
            , t: 24.0
            , weight: 166.0
        }
        , "HEA 600": {
            h: 590
            , b: 300
            , s: 13.0
            , t: 25.0
            , weight: 178.0
        }
        , "HEA 650": {
            h: 640
            , b: 300
            , s: 13.5
            , t: 26.0
            , weight: 190.0
        }
        , "HEA 700": {
            h: 690
            , b: 300
            , s: 14.5
            , t: 27.0
            , weight: 204.0
        }
        , "HEA 800": {
            h: 790
            , b: 300
            , s: 15.0
            , t: 28.0
            , weight: 224.0
        }
        , "HEA 900": {
            h: 890
            , b: 300
            , s: 16.0
            , t: 30.0
            , weight: 252.0
        }
        , "HEA 1000": {
            h: 990
            , b: 300
            , s: 16.5
            , t: 31.0
            , weight: 272.0
        }
    };

    // DOM elements
    const profileSelect = document.getElementById("heaProfile");
    const hInput = document.getElementById("heaH");
    const bInput = document.getElementById("heaB");
    const sInput = document.getElementById("heaS");
    const tInput = document.getElementById("heaT");
    const lengthInput = document.getElementById("heaLength");
    const weightPerMeterEl = document.getElementById("heaWeightPerMeter");
    const totalWeightEl = document.getElementById("heaTotalWeight");

    function updateHEA() {
        const profile = profileSelect.value;
        const data = heaData[profile];
        if (!data) return;

        // Fill inputs
        hInput.value = data.h;
        bInput.value = data.b;
        sInput.value = data.s;
        tInput.value = data.t;

        // Calculate
        const weightPerMeter = data.weight;
        const length = parseFloat(lengthInput.value) || 0;
        const totalWeight = weightPerMeter * length;

        // Update UI
        weightPerMeterEl.textContent = weightPerMeter.toFixed(2) + " kg/m";
        totalWeightEl.textContent = totalWeight.toFixed(2) + " kg";
    }

    // Events
    profileSelect.addEventListener("change", updateHEA);
    lengthInput.addEventListener("input", updateHEA);

    // Initialize on page load
    updateHEA();

</script>


<script>
    document.addEventListener('DOMContentLoaded', () => {
        const specs = {
            // data per Maiak (h, b, s, t, weight per meter)
            "HEB 100": {
                h: 100
                , b: 100
                , s: 6
                , t: 10
                , w: 20.4
            }
            , "HEB 120": {
                h: 120
                , b: 120
                , s: 6.5
                , t: 11
                , w: 26.7
            }
            , "HEB 140": {
                h: 140
                , b: 140
                , s: 7
                , t: 12
                , w: 33.7
            }
            , "HEB 160": {
                h: 160
                , b: 160
                , s: 8
                , t: 13
                , w: 42.6
            }
            , "HEB 180": {
                h: 180
                , b: 180
                , s: 8.5
                , t: 14
                , w: 51.2
            }
            , "HEB 200": {
                h: 200
                , b: 200
                , s: 9
                , t: 15
                , w: 61.3
            }
            , "HEB 220": {
                h: 220
                , b: 220
                , s: 9.5
                , t: 16
                , w: 71.5
            }
            , "HEB 240": {
                h: 240
                , b: 240
                , s: 10
                , t: 17
                , w: 83.2
            }
            , "HEB 260": {
                h: 260
                , b: 260
                , s: 10
                , t: 17.5
                , w: 93.0
            }
            , "HEB 280": {
                h: 280
                , b: 280
                , s: 10.5
                , t: 18
                , w: 103
            }
            , "HEB 300": {
                h: 300
                , b: 300
                , s: 11
                , t: 19
                , w: 117
            }
            , "HEB 320": {
                h: 320
                , b: 300
                , s: 11.5
                , t: 20.5
                , w: 127
            }
            , "HEB 340": {
                h: 340
                , b: 300
                , s: 12
                , t: 21.5
                , w: 134
            }
            , "HEB 360": {
                h: 360
                , b: 300
                , s: 12.5
                , t: 22.5
                , w: 142
            }
            , "HEB 400": {
                h: 400
                , b: 300
                , s: 13.5
                , t: 24
                , w: 155
            }
            , "HEB 450": {
                h: 450
                , b: 300
                , s: 14
                , t: 26
                , w: 171
            }
            , "HEB 500": {
                h: 500
                , b: 300
                , s: 14.5
                , t: 28
                , w: 187
            }
            , "HEB 550": {
                h: 550
                , b: 300
                , s: 15
                , t: 29
                , w: 199
            }
            , "HEB 600": {
                h: 600
                , b: 300
                , s: 15.5
                , t: 30
                , w: 212
            }
            , "HEB 650": {
                h: 650
                , b: 300
                , s: 16
                , t: 31
                , w: 225
            }
            , "HEB 700": {
                h: 700
                , b: 300
                , s: 17
                , t: 32
                , w: 241
            }
            , "HEB 800": {
                h: 800
                , b: 300
                , s: 17.5
                , t: 33
                , w: 262
            }
            , "HEB 900": {
                h: 900
                , b: 300
                , s: 18.5
                , t: 35
                , w: 291
            }
            , "HEB 1000": {
                h: 1000
                , b: 300
                , s: 19
                , t: 36
                , w: 314
            }
        };

        const profile = document.getElementById('hebProfile');
        const inpH = document.getElementById('hebH');
        const inpB = document.getElementById('hebB');
        const inpS = document.getElementById('hebS');
        const inpT = document.getElementById('hebT');
        const inpLength = document.getElementById('hebLength');
        const outWpm = document.getElementById('hebWeightPerMeter');
        const outTW = document.getElementById('hebTotalWeight');

        function update() {
            const p = specs[profile.value];
            if (!p) return;

            inpH.value = p.h;
            inpB.value = p.b;
            inpS.value = p.s;
            inpT.value = p.t;

            const length = parseFloat(inpLength.value) || 0;
            const wpm = p.w;
            outWpm.textContent = `${wpm.toFixed(2)} kg/m`;
            outTW.textContent = `${(wpm * length).toFixed(2)} kg`;
        }

        profile.addEventListener('change', update);
        inpLength.addEventListener('input', update);

        // Initialize
        inpLength.value = 1;
        update();
    });

</script>
@endsection
