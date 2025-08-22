@extends('layouts.master')
@section('title', 'Pipe & Tube Weight Calculator | Accurate & Easy to Use | Mokshtubes')
@section('meta_description',
    'Use Mokshtubes’ accurate pipe and tube weight calculator for precise measurements, helping
    you plan projects efficiently with reliable data.')
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
            <div class="col-md-4 d-none d-md-block">
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
                                                <input type="number" class="form-control me-2" id="sheetThickness1"
                                                    value="1" placeholder="e.g. 1" />
                                                <span class="text-nowrap">mm</span>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Width -->
                                    <div class="col-12 mb-3">
                                        <div class="d-flex align-items-center">
                                            <label class="form-label mb-0 me-3" style="width: 120px;">Width, W</label>
                                            <div class="d-flex align-items-center flex-grow-1">
                                                <input type="number" class="form-control me-2" id="sheetWidth1"
                                                    value="1000" placeholder="e.g. 1000" />
                                                <span class="text-nowrap">mm</span>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Length -->
                                    <div class="col-12 mb-3">
                                        <div class="d-flex align-items-center">
                                            <label class="form-label mb-0 me-3" style="width: 120px;">Length, L</label>
                                            <div class="d-flex align-items-center flex-grow-1">
                                                <input type="number" class="form-control me-2" id="sheetLength1"
                                                    value="2000" placeholder="e.g. 2000" />
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
                                                <input type="number" class="form-control" id="sheetPieces1"
                                                    value="1" placeholder="e.g. 1" />
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
                                </div>
                            </div>

                            <!-- Right: Image -->
                            <div class="col-lg-6 d-flex align-items-center">
                                <img src="https://placehold.co/200x200" class="img-fluid rounded border w-100"
                                    alt="Steel Sheet Image">
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
                                                <input type="number" id="pipeDiameter2" class="form-control me-2"
                                                    placeholder="e.g. 8" value="8" />
                                                <span class="text-nowrap">mm</span>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Thickness -->
                                    <div class="col-12 mb-3">
                                        <div class="d-flex align-items-center">
                                            <label class="form-label mb-0 me-3" style="width: 120px;">Thickness, t</label>
                                            <div class="d-flex align-items-center flex-grow-1">
                                                <input type="number" id="pipeThickness2" class="form-control me-2"
                                                    placeholder="e.g. 1.5" value="1.5" />
                                                <span class="text-nowrap">mm</span>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Length -->
                                    <div class="col-12 mb-3">
                                        <div class="d-flex align-items-center">
                                            <label class="form-label mb-0 me-3" style="width: 120px;">Length, L</label>
                                            <div class="d-flex align-items-center flex-grow-1">
                                                <input type="number" id="pipeLength2" class="form-control me-2"
                                                    placeholder="e.g. 1" value="1" />
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
                                </div>
                            </div>

                            <!-- Right: Image -->
                            <div class="col-lg-6 d-flex align-items-center">
                                <img src="https://placehold.co/200x200" class="img-fluid rounded border w-100"
                                    alt="Pipe Image">
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
                                                <input type="number" id="hollowDiameter3" class="form-control me-2"
                                                    value="21.3" placeholder="e.g. 21.3" />
                                                <span class="text-nowrap">mm</span>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Thickness -->
                                    <div class="col-12 mb-3">
                                        <div class="d-flex align-items-center">
                                            <label class="form-label mb-0 me-3" style="width: 120px;">Thickness, t</label>
                                            <div class="d-flex align-items-center flex-grow-1">
                                                <input type="number" id="hollowThickness3" class="form-control me-2"
                                                    value="2" placeholder="e.g. 2" />
                                                <span class="text-nowrap">mm</span>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Length -->
                                    <div class="col-12 mb-3">
                                        <div class="d-flex align-items-center">
                                            <label class="form-label mb-0 me-3" style="width: 120px;">Length, L</label>
                                            <div class="d-flex align-items-center flex-grow-1">
                                                <input type="number" id="hollowLength3" class="form-control me-2"
                                                    value="1" placeholder="e.g. 1" />
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
                                </div>
                            </div>

                            <!-- Right: Image -->
                            <div class="col-lg-6 d-flex align-items-center">
                                <img src="https://placehold.co/200x200" class="img-fluid rounded border w-100"
                                    alt="Pipe Image">
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
                                                <input type="number" class="form-control me-2" id="squareSide"
                                                    value="15" placeholder="e.g. 15"
                                                    oninput="calculateSquareHollowSectionWeight()" />
                                                <span class="text-nowrap">mm</span>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Thickness -->
                                    <div class="col-12 mb-3">
                                        <div class="d-flex align-items-center">
                                            <label class="form-label mb-0 me-3" style="width: 120px;">Thickness, t</label>
                                            <div class="d-flex align-items-center flex-grow-1">
                                                <input type="number" class="form-control me-2" id="squareThickness"
                                                    value="1.5" placeholder="e.g. 1.5"
                                                    oninput="calculateSquareHollowSectionWeight()" />
                                                <span class="text-nowrap">mm</span>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Length -->
                                    <div class="col-12 mb-3">
                                        <div class="d-flex align-items-center">
                                            <label class="form-label mb-0 me-3" style="width: 120px;">Length, L</label>
                                            <div class="d-flex align-items-center flex-grow-1">
                                                <input type="number" class="form-control me-2" id="squareLength"
                                                    value="1" placeholder="e.g. 1"
                                                    oninput="calculateSquareHollowSectionWeight()" />
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
                                </div>
                            </div>

                            <!-- Right: Image -->
                            <div class="col-lg-6 d-flex align-items-center">
                                <img src="https://placehold.co/200x200" class="img-fluid rounded border w-100"
                                    alt="Placeholder Image for Square Section">
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
                                                <input type="number" class="form-control me-2" id="rectangularSideA"
                                                    value="30" placeholder="e.g. 30"
                                                    oninput="calculateRectangularHollowSectionWeight()" />
                                                <span class="text-nowrap">mm</span>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Side B -->
                                    <div class="col-12 mb-3">
                                        <div class="d-flex align-items-center">
                                            <label class="form-label mb-0 me-3" style="width: 120px;">Side, B</label>
                                            <div class="d-flex align-items-center flex-grow-1">
                                                <input type="number" class="form-control me-2" id="rectangularSideB"
                                                    value="20" placeholder="e.g. 20"
                                                    oninput="calculateRectangularHollowSectionWeight()" />
                                                <span class="text-nowrap">mm</span>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Thickness -->
                                    <div class="col-12 mb-3">
                                        <div class="d-flex align-items-center">
                                            <label class="form-label mb-0 me-3" style="width: 120px;">Thickness, t</label>
                                            <div class="d-flex align-items-center flex-grow-1">
                                                <input type="number" class="form-control me-2" id="rectangularThickness"
                                                    value="1.5" placeholder="e.g. 1.5"
                                                    oninput="calculateRectangularHollowSectionWeight()" />
                                                <span class="text-nowrap">mm</span>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Length -->
                                    <div class="col-12 mb-3">
                                        <div class="d-flex align-items-center">
                                            <label class="form-label mb-0 me-3" style="width: 120px;">Length, L</label>
                                            <div class="d-flex align-items-center flex-grow-1">
                                                <input type="number" class="form-control me-2" id="rectangularLength"
                                                    value="1" placeholder="e.g. 1"
                                                    oninput="calculateRectangularHollowSectionWeight()" />
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
                                </div>
                            </div>

                            <!-- Right: Image -->
                            <div class="col-lg-6 d-flex align-items-center">
                                <img src="https://placehold.co/200x200" class="img-fluid rounded border w-100"
                                    alt="Placeholder Image for Rectangular HSS">
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
                                                <input type="number" class="form-control me-2" id="roundDiameter"
                                                    value="8" placeholder="e.g. 8"
                                                    oninput="calculateRoundBarWeight()" />
                                                <span class="text-nowrap">mm</span>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Length -->
                                    <div class="col-12 mb-3">
                                        <div class="d-flex align-items-center">
                                            <label class="form-label mb-0 me-3" style="width: 120px;">Length, L</label>
                                            <div class="d-flex align-items-center flex-grow-1">
                                                <input type="number" class="form-control me-2" id="roundLength"
                                                    value="1" placeholder="e.g. 6"
                                                    oninput="calculateRoundBarWeight()" />
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
                                    </p>
                                </div>
                            </div>

                            <!-- Right: Image -->
                            <div class="col-lg-6 d-flex align-items-center">
                                <img src="https://placehold.co/200x200" class="img-fluid rounded border w-100"
                                    alt="Placeholder Image for Round Steel Bar">
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
                                                <input type="number" class="form-control me-2" id="squareSideA7"
                                                    value="10" placeholder="e.g. 10" />
                                                <span class="text-nowrap">mm</span>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Length -->
                                    <div class="col-12 mb-3">
                                        <div class="d-flex align-items-center">
                                            <label class="form-label mb-0 me-3" style="width: 120px;">Length, L</label>
                                            <div class="d-flex align-items-center flex-grow-1">
                                                <input type="number" class="form-control me-2" id="squareLength7"
                                                    value="1" placeholder="e.g. 1" />
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
                                </div>
                            </div>

                            <!-- Right: Image -->
                            <div class="col-lg-6 d-flex align-items-center">
                                <img src="https://placehold.co/200x200" class="img-fluid rounded border w-100"
                                    alt="Placeholder Image for Square Steel Bar">
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
                                                <input type="number" class="form-control me-2" id="flatWidth8"
                                                    value="10" placeholder="e.g. 10"
                                                    oninput="calculateFlatBarWeight8()" />
                                                <span class="text-nowrap">mm</span>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Thickness -->
                                    <div class="col-12 mb-3">
                                        <div class="d-flex align-items-center">
                                            <label class="form-label mb-0 me-3" style="width: 120px;">Thickness, t</label>
                                            <div class="d-flex align-items-center flex-grow-1">
                                                <input type="number" class="form-control me-2" id="flatThickness8"
                                                    value="3" placeholder="e.g. 3"
                                                    oninput="calculateFlatBarWeight8()" />
                                                <span class="text-nowrap">mm</span>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Length -->
                                    <div class="col-12 mb-3">
                                        <div class="d-flex align-items-center">
                                            <label class="form-label mb-0 me-3" style="width: 120px;">Length, L</label>
                                            <div class="d-flex align-items-center flex-grow-1">
                                                <input type="number" class="form-control me-2" id="flatLength8"
                                                    value="1" placeholder="e.g. 1"
                                                    oninput="calculateFlatBarWeight8()" />
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
                                </div>
                            </div>

                            <!-- Right: Image -->
                            <div class="col-lg-6 d-flex align-items-center">
                                <img src="https://placehold.co/200x200" class="img-fluid rounded border w-100"
                                    alt="Placeholder Image for Flat Bar">
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
                                                <input type="number" class="form-control me-2" id="angleSide9"
                                                    value="20" placeholder="e.g. 20"
                                                    oninput="calculateEqualAngleWeight9()" />
                                                <span class="text-nowrap">mm</span>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Thickness -->
                                    <div class="col-12 mb-3">
                                        <div class="d-flex align-items-center">
                                            <label class="form-label mb-0 me-3" style="width: 120px;">Thickness, t</label>
                                            <div class="d-flex align-items-center flex-grow-1">
                                                <input type="number" class="form-control me-2" id="angleThickness9"
                                                    value="3" placeholder="e.g. 3"
                                                    oninput="calculateEqualAngleWeight9()" />
                                                <span class="text-nowrap">mm</span>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Length -->
                                    <div class="col-12 mb-3">
                                        <div class="d-flex align-items-center">
                                            <label class="form-label mb-0 me-3" style="width: 120px;">Length, L</label>
                                            <div class="d-flex align-items-center flex-grow-1">
                                                <input type="number" class="form-control me-2" id="angleLength9"
                                                    value="1" placeholder="e.g. 1"
                                                    oninput="calculateEqualAngleWeight9()" />
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
                                </div>
                            </div>

                            <!-- Right: Image -->
                            <div class="col-lg-6 d-flex align-items-center">
                                <img src="https://placehold.co/200x200" class="img-fluid rounded border w-100"
                                    alt="Placeholder Image for Equal Angles">
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
                                                <select id="angleSize10" class="form-control me-2"
                                                    onchange="updateThicknessOptions10(); calculateUnequalAngleWeight10()">
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
                                                <select id="angleThickness10" class="form-control me-2"
                                                    onchange="calculateUnequalAngleWeight10()">
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
                                                <input type="number" class="form-control me-2" id="angleLength10"
                                                    value="1" placeholder="e.g. 1"
                                                    oninput="calculateUnequalAngleWeight10()" />
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
                                </div>
                            </div>

                            <!-- Right: Image -->
                            <div class="col-lg-6 d-flex align-items-center">
                                <img src="https://placehold.co/200x200" class="img-fluid rounded border w-100"
                                    alt="Placeholder Image for Unequal Angles">
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
                                <img src="https://placehold.co/200x200" class="img-fluid rounded border w-100"
                                    alt="Placeholder Image for Channels - GOST">
                            </div>
                        </div>
                    </div>


                    {{-- Channels - UPN --}}
                    <div id="tab12" class="tab-content-item d-none">
                        <h5 class="mb-3">Channels - UPN</h5>
                        <p>Input your values in the fields below:</p>

                        <div class="row">
                            <div class="col-lg-6 mb-4 mb-lg-0">
                                <div class="row">
                                    <!-- Profile Dropdown -->
                                    <div class="mb-3 d-flex align-items-center">
                                        <label class="form-label me-3 mb-0" style="min-width: 80px;">Profile:</label>
                                        <select class="form-select" style="max-width: 250px;">
                                            <option selected>UPN 50 x 25</option>
                                            <option>UPN 50</option>
                                            <option>UPN 60</option>
                                            <option>UPN 65</option>
                                            <option>UPN 80</option>
                                            <option>UPN 100</option>
                                            <option>UPN 120</option>
                                            <option>UPN 140</option>
                                            <option>UPN 160</option>
                                            <option>UPN 180</option>
                                            <option>UPN 200</option>
                                            <option>UPN 220</option>
                                            <option>UPN 240</option>
                                            <option>UPN 260</option>
                                            <option>UPN 280</option>
                                            <option>UPN 300</option>
                                            <option>UPN 320</option>
                                            <option>UPN 350</option>
                                            <option>UPN 380</option>
                                            <option>UPN 400</option>
                                        </select>
                                    </div>
                                    <!-- Height -->
                                    <div class="col-12 mb-3">
                                        <div class="d-flex align-items-center">
                                            <label class="form-label mb-0 me-3" style="width: 120px;">Height, h:</label>
                                            <input type="number" class="form-control" placeholder="e.g. 50" />
                                            <span class="ms-2">mm</span>
                                        </div>
                                    </div>

                                    <!-- Width -->
                                    <div class="col-12 mb-3">
                                        <div class="d-flex align-items-center">
                                            <label class="form-label mb-0 me-3" style="width: 120px;">Width, b:</label>
                                            <input type="number" class="form-control" placeholder="e.g. 25" />
                                            <span class="ms-2">mm</span>
                                        </div>
                                    </div>

                                    <!-- Thickness s -->
                                    <div class="col-12 mb-3">
                                        <div class="d-flex align-items-center">
                                            <label class="form-label mb-0 me-3" style="width: 120px;">Thickness,
                                                s:</label>
                                            <input type="number" class="form-control" placeholder="e.g. 5" />
                                            <span class="ms-2">mm</span>
                                        </div>
                                    </div>

                                    <!-- Thickness t -->
                                    <div class="col-12 mb-3">
                                        <div class="d-flex align-items-center">
                                            <label class="form-label mb-0 me-3" style="width: 120px;">Thickness,
                                                t:</label>
                                            <input type="number" class="form-control" placeholder="e.g. 6" />
                                            <span class="ms-2">mm</span>
                                        </div>
                                    </div>

                                    <!-- Length -->
                                    <div class="col-12 mb-3">
                                        <div class="d-flex align-items-center">
                                            <label class="form-label mb-0 me-3" style="width: 120px;">Length, L:</label>
                                            <input type="number" class="form-control" placeholder="e.g. 1" />
                                            <span class="ms-2">m</span>
                                        </div>
                                    </div>
                                </div>

                                <div class="mt-2">
                                    <h6><strong>Result</strong></h6>
                                    <p>Weight per meter: <strong class="text-primary">4.2 kg/m</strong></p>
                                    <p>Total weight: <strong class="text-primary">4.2 kg</strong></p>
                                </div>
                            </div>

                            <!-- Right: Image -->
                            <div class="col-lg-6 d-flex align-items-center">
                                <img src="https://placehold.co/200x200" class="img-fluid rounded border w-100"
                                    alt="Placeholder Image">
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
                                        <select class="form-select">
                                            <option selected>IPN 80</option>
                                            <option>IPN 100</option>
                                            <option>IPN 120</option>
                                            <option>IPN 140</option>
                                            <option>IPN 160</option>
                                            <option>IPN 180</option>
                                            <option>IPN 200</option>
                                            <option>IPN 220</option>
                                            <option>IPN 240</option>
                                            <option>IPN 260</option>
                                            <option>IPN 280</option>
                                            <option>IPN 300</option>
                                            <option>IPN 320</option>
                                            <option>IPN 340</option>
                                            <option>IPN 360</option>
                                            <option>IPN 380</option>
                                            <option>IPN 400</option>
                                            <option>IPN 450</option>
                                            <option>IPN 500</option>
                                            <option>IPN 550</option>
                                        </select>
                                    </div>

                                    <!-- Height, h -->
                                    <div class="col-12 mb-3 d-flex align-items-center">
                                        <label class="form-label mb-0 me-3" style="width: 150px;">Height, h: </label>
                                        <input type="number" class="form-control me-2" placeholder="e.g. 300">
                                        <span>mm</span>
                                    </div>
                                    <!-- Width of flange, b -->
                                    <div class="col-12 mb-3 d-flex align-items-center">
                                        <label class="form-label mb-0 me-3" style="width: 150px;">width, b: </label>
                                        <input type="number" class="form-control me-2" placeholder="e.g. 150">
                                        <span>mm</span>
                                    </div>
                                    <!-- Thickness of web, tw -->
                                    <div class="col-12 mb-3 d-flex align-items-center">
                                        <label class="form-label mb-0 me-3" style="width: 150px;">thickness,s: </label>
                                        <input type="number" class="form-control me-2" placeholder="e.g. 10">
                                        <span>mm</span>
                                    </div>
                                    <!-- Thickness of flange, tf -->
                                    <div class="col-12 mb-3 d-flex align-items-center">
                                        <label class="form-label mb-0 me-3" style="width: 150px;">thickness, t: </label>
                                        <input type="number" class="form-control me-2" placeholder="e.g. 15">
                                        <span>mm</span>
                                    </div>
                                    <!-- Length -->
                                    <div class="col-12 mb-3 d-flex align-items-center">
                                        <label class="form-label mb-0 me-3" style="width: 150px;">Length, L: </label>
                                        <input type="number" class="form-control me-2" placeholder="e.g. 6000">
                                        <span>mm</span>
                                    </div>
                                </div>
                                <!-- Result -->
                                <div class="mt-2">
                                    <h6><strong>Result</strong></h6>
                                    <p>Weight per meter: <strong class="text-primary">4.2 kg/m</strong></p>
                                    <p>Total weight: <strong class="text-primary">4.2 kg</strong></p>
                                </div>
                            </div>

                            <!-- Right: Image -->
                            <div class="col-lg-6 d-flex align-items-center">
                                <img src="https://placehold.co/200x200?text=IPN" class="img-fluid rounded border w-100"
                                    alt="I-Beam Illustration" />
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
                                        <select class="form-select">
                                            <option selected>IPE 80</option>
                                            <option>IPE 100</option>
                                            <option>IPE 120</option>
                                            <option>IPE 140</option>
                                            <option>IPE 160</option>
                                            <option>IPE 180</option>
                                            <option>IPE 200</option>
                                            <option>IPE 220</option>
                                            <option>IPE 240</option>
                                            <option>IPE 270</option>
                                            <option>IPE 300</option>
                                            <option>IPE 330</option>
                                            <option>IPE 360</option>
                                            <option>IPE 400</option>
                                            <option>IPE 450</option>
                                            <option>IPE 500</option>
                                            <option>IPE 550</option>
                                            <option>IPE 600</option>
                                        </select>
                                    </div>

                                    <!-- Height, h -->
                                    <div class="col-12 mb-3 d-flex align-items-center">
                                        <label class="form-label mb-0 me-3" style="width: 150px;">Height, h</label>
                                        <input type="number" class="form-control me-2" placeholder="e.g. 300">
                                        <span>mm</span>
                                    </div>
                                    <!-- Width of flange, b -->
                                    <div class="col-12 mb-3 d-flex align-items-center">
                                        <label class="form-label mb-0 me-3" style="width: 150px;">width, b</label>
                                        <input type="number" class="form-control me-2" placeholder="e.g. 150">
                                        <span>mm</span>
                                    </div>
                                    <!-- Thickness of web, tw -->
                                    <div class="col-12 mb-3 d-flex align-items-center">
                                        <label class="form-label mb-0 me-3" style="width: 150px;">thickness,s</label>
                                        <input type="number" class="form-control me-2" placeholder="e.g. 10">
                                        <span>mm</span>
                                    </div>
                                    <!-- Thickness of flange, tf -->
                                    <div class="col-12 mb-3 d-flex align-items-center">
                                        <label class="form-label mb-0 me-3" style="width: 150px;">thickness,t</label>
                                        <input type="number" class="form-control me-2" placeholder="e.g. 15">
                                        <span>mm</span>
                                    </div>
                                    <!-- Length -->
                                    <div class="col-12 mb-3 d-flex align-items-center">
                                        <label class="form-label mb-0 me-3" style="width: 150px;">Length</label>
                                        <input type="number" class="form-control me-2" placeholder="e.g. 6000">
                                        <span>mm</span>
                                    </div>
                                </div>
                                <!-- Result -->
                                <div class="mt-2">
                                    <h6><strong>Result</strong></h6>
                                    <p>Weight per meter: <strong class="text-primary">4.2 kg/m</strong></p>
                                    <p>Total weight: <strong class="text-primary">4.2 kg</strong></p>
                                </div>
                            </div>

                            <!-- Right: Image -->
                            <div class="col-lg-6 d-flex align-items-center">
                                <img src="https://placehold.co/200x200?text=IPE" class="img-fluid rounded border w-100"
                                    alt="I-Beam Illustration" />
                            </div>
                        </div>
                    </div>

                    {{-- Beams - HEA (IPBL) --}}
                    <div id="tab15" class="tab-content-item d-none">
                        <h5 class="mb-3">Calculator for Beams - IPE</h5>
                        <div class="row">
                            <!-- Left: Form Inputs -->
                            <div class="col-lg-6 mb-4 mb-lg-0">
                                <p>Input your values in the fields below:</p>
                                <div class="row">
                                    <!-- Profile -->
                                    <div class="mb-3 d-flex align-items-center">
                                        <label class="form-label mb-0 me-3" style="width: 140px;">Profile:</label>
                                        <select class="form-select">
                                            <option selected>HEA 100</option>
                                            <option>HEA 120</option>
                                            <option>HEA 140</option>
                                            <option>HEA 160</option>
                                            <option>HEA 180</option>
                                            <option>HEA 200</option>
                                            <option>HEA 220</option>
                                            <option>HEA 240</option>
                                            <option>HEA 260</option>
                                            <option>HEA 280</option>
                                            <option>HEA 300</option>
                                            <option>HEA 320</option>
                                            <option>HEA 340</option>
                                            <option>HEA 360</option>
                                            <option>HEA 400</option>
                                            <option>HEA 450</option>
                                            <option>HEA 500</option>
                                            <option>HEA 550</option>
                                            <option>HEA 600</option>
                                            <option>HEA 650</option>
                                            <option>HEA 700</option>
                                            <option>HEA 800</option>
                                            <option>HEA 900</option>
                                            <option>HEA 1000</option>
                                        </select>
                                    </div>

                                    <!-- Height, h -->
                                    <div class="col-12 mb-3 d-flex align-items-center">
                                        <label class="form-label mb-0 me-3" style="width: 150px;">Height, h</label>
                                        <input type="number" class="form-control me-2" placeholder="e.g. 300">
                                        <span>mm</span>
                                    </div>
                                    <!-- Width of flange, b -->
                                    <div class="col-12 mb-3 d-flex align-items-center">
                                        <label class="form-label mb-0 me-3" style="width: 150px;">width, b</label>
                                        <input type="number" class="form-control me-2" placeholder="e.g. 150">
                                        <span>mm</span>
                                    </div>
                                    <!-- Thickness of web, tw -->
                                    <div class="col-12 mb-3 d-flex align-items-center">
                                        <label class="form-label mb-0 me-3" style="width: 150px;">thickness,s</label>
                                        <input type="number" class="form-control me-2" placeholder="e.g. 10">
                                        <span>mm</span>
                                    </div>
                                    <!-- Thickness of flange, tf -->
                                    <div class="col-12 mb-3 d-flex align-items-center">
                                        <label class="form-label mb-0 me-3" style="width: 150px;">thickness,t</label>
                                        <input type="number" class="form-control me-2" placeholder="e.g. 15">
                                        <span>mm</span>
                                    </div>
                                    <!-- Length -->
                                    <div class="col-12 mb-3 d-flex align-items-center">
                                        <label class="form-label mb-0 me-3" style="width: 150px;">Length</label>
                                        <input type="number" class="form-control me-2" placeholder="e.g. 6000">
                                        <span>mm</span>
                                    </div>
                                </div>
                                <!-- Result -->
                                <div class="mt-2">
                                    <h6><strong>Result</strong></h6>
                                    <p>Weight per meter: <strong class="text-primary">4.2 kg/m</strong></p>
                                    <p>Total weight: <strong class="text-primary">4.2 kg</strong></p>
                                </div>
                            </div>

                            <!-- Right: Image -->
                            <div class="col-lg-6 d-flex align-items-center">
                                <img src="https://placehold.co/200x200?text=IPBL" class="img-fluid rounded border w-100"
                                    alt="I-Beam Illustration" />
                            </div>
                        </div>
                    </div>

                    {{-- Beams - HEB (IPB) --}}
                    <div id="tab16" class="tab-content-item d-none">
                        <h5 class="mb-3">Calculator for Beams - IPE</h5>
                        <div class="row">
                            <!-- Left: Form Inputs -->
                            <div class="col-lg-6 mb-4 mb-lg-0">
                                <p>Input your values in the fields below:</p>
                                <div class="row">
                                    <!-- Profile -->
                                    <div class="mb-3 d-flex align-items-center">
                                        <label class="form-label mb-0 me-3" style="width: 140px;">Profile:</label>
                                        <select class="form-select">
                                            <option selected>HEB 100</option>
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

                                    <!-- Height, h -->
                                    <div class="col-12 mb-3 d-flex align-items-center">
                                        <label class="form-label mb-0 me-3" style="width: 150px;">Height, h</label>
                                        <input type="number" class="form-control me-2" placeholder="e.g. 300">
                                        <span>mm</span>
                                    </div>
                                    <!-- Width of flange, b -->
                                    <div class="col-12 mb-3 d-flex align-items-center">
                                        <label class="form-label mb-0 me-3" style="width: 150px;">width, b</label>
                                        <input type="number" class="form-control me-2" placeholder="e.g. 150">
                                        <span>mm</span>
                                    </div>
                                    <!-- Thickness of web, tw -->
                                    <div class="col-12 mb-3 d-flex align-items-center">
                                        <label class="form-label mb-0 me-3" style="width: 150px;">thickness,s</label>
                                        <input type="number" class="form-control me-2" placeholder="e.g. 10">
                                        <span>mm</span>
                                    </div>
                                    <!-- Thickness of flange, tf -->
                                    <div class="col-12 mb-3 d-flex align-items-center">
                                        <label class="form-label mb-0 me-3" style="width: 150px;">thickness,t</label>
                                        <input type="number" class="form-control me-2" placeholder="e.g. 15">
                                        <span>mm</span>
                                    </div>
                                    <!-- Length -->
                                    <div class="col-12 mb-3 d-flex align-items-center">
                                        <label class="form-label mb-0 me-3" style="width: 150px;">Length</label>
                                        <input type="number" class="form-control me-2" placeholder="e.g. 6000">
                                        <span>mm</span>
                                    </div>
                                </div>
                                <!-- Result -->
                                <div class="mt-2">
                                    <h6><strong>Result</strong></h6>
                                    <p>Weight per meter: <strong class="text-primary">4.2 kg/m</strong></p>
                                    <p>Total weight: <strong class="text-primary">4.2 kg</strong></p>
                                </div>
                            </div>

                            <!-- Right: Image -->
                            <div class="col-lg-6 d-flex align-items-center">
                                <img src="https://placehold.co/200x200?text=IPE" class="img-fluid rounded border w-100"
                                    alt="I-Beam Illustration" />
                            </div>
                        </div>
                    </div>


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
        function calculateSteelSheetWeight() {
            const thickness = parseFloat(document.getElementById('sheetThickness').value) || 0;
            const width = parseFloat(document.getElementById('sheetWidth').value) || 0;
            const length = parseFloat(document.getElementById('sheetLength').value) || 0;
            const pieces = parseInt(document.getElementById('sheetPieces').value) || 0;

            const density = 7.85; // in g/cm³ = 7850 kg/m³

            // Calculate weight of one sheet in kg
            const singleWeight = (length * width * thickness * density) / 1_000_000;
            const totalWeight = singleWeight * pieces;

            // Display result
            document.getElementById('sheetSingleWeight').textContent = singleWeight.toFixed(2) + " kg";
            document.getElementById('sheetTotalWeight').textContent = totalWeight.toFixed(2) + " kg";
        }

        // Seamless steel pipes - circular
        function calculatePipeWeight() {
            const D = parseFloat(document.getElementById('pipeDiameter').value) || 0; // Outer diameter (mm)
            const t = parseFloat(document.getElementById('pipeThickness').value) || 0; // Thickness (mm)
            const L_meters = parseFloat(document.getElementById('pipeLength').value) || 0; // Length in meters

            const density = 7.85; // g/cm³ (for steel)

            if (D <= 0 || t <= 0 || L_meters <= 0 || D <= 2 * t) {
                document.getElementById('pipeWeightPerMeter').textContent = "NaN";
                document.getElementById('pipeTotalWeight').textContent = "NaN";
                return;
            }

            const d = D - 2 * t; // Inner diameter (mm)
            const area = (Math.PI / 4) * (Math.pow(D, 2) - Math.pow(d, 2)); // mm²

            // Convert mm² to cm² and multiply by density to get g/mm, then convert to kg/mm
            const weightPerMm = area * density * 1e-6; // kg/mm
            const weightPerMeter = weightPerMm * 1000; // kg/m
            const totalWeight = weightPerMeter * L_meters; // kg

            document.getElementById('pipeWeightPerMeter').textContent = weightPerMeter.toFixed(2) + " kg/m";
            document.getElementById('pipeTotalWeight').textContent = totalWeight.toFixed(2) + " kg";
        }

        // Hollow structural sections - circular
        function calculateHollowSectionWeight() {
            const D = parseFloat(document.getElementById('hollowDiameter').value) || 0; // Outer diameter (mm)
            const t = parseFloat(document.getElementById('hollowThickness').value) || 0; // Thickness (mm)
            const L_meters = parseFloat(document.getElementById('hollowLength').value) || 0; // Length in meters

            const density = 7.85; // g/cm³ (for steel)

            if (D <= 0 || t <= 0 || L_meters <= 0 || D <= 2 * t) {
                document.getElementById('hollowWeightPerMeter').textContent = "NaN";
                document.getElementById('hollowTotalWeight').textContent = "NaN";
                return;
            }

            const d = D - 2 * t; // Inner diameter (mm)
            const area = (Math.PI / 4) * (Math.pow(D, 2) - Math.pow(d, 2)); // mm²

            // Convert mm² to cm² and multiply by density to get g/mm, then convert to kg/mm
            const weightPerMm = area * density * 1e-6; // kg/mm
            const weightPerMeter = weightPerMm * 1000; // kg/m
            const totalWeight = weightPerMeter * L_meters; // kg

            document.getElementById('hollowWeightPerMeter').textContent = weightPerMeter.toFixed(2) + " kg/m";
            document.getElementById('hollowTotalWeight').textContent = totalWeight.toFixed(2) + " kg";
        }

        // ===========
        function calculateSquareHollowSectionWeight() {
            const A = parseFloat(document.getElementById('squareSide').value) || 0;
            const t = parseFloat(document.getElementById('squareThickness').value) || 0;
            const L = parseFloat(document.getElementById('squareLength').value) || 0;

            if (A <= 0 || t <= 0 || L <= 0 || t >= A / 2) {
                document.getElementById('squareWeightPerMeter').textContent = '0.00 kg/m';
                document.getElementById('squareTotalWeight').textContent = '0.00 kg';
                return;
            }

            const outerArea = A * A;
            const innerArea = (A - 2 * t) * (A - 2 * t);
            const area = outerArea - innerArea; // in mm²
            const density = 7.85e-6; // steel density in kg/mm³
            const weightPerMeter = area * density * 1000; // per meter
            const totalWeight = weightPerMeter * L;

            document.getElementById('squareWeightPerMeter').textContent = `${weightPerMeter.toFixed(2)} kg/m`;
            document.getElementById('squareTotalWeight').textContent = `${totalWeight.toFixed(2)} kg`;
        }

        // ===========


        // Hollow Structural Sections – Rectangular
        function calculateRectangularHollowSectionWeight() {
            const A = parseFloat(document.getElementById('rectangularSideA').value) || 0; // Side A (mm)
            const B = parseFloat(document.getElementById('rectangularSideB').value) || 0; // Side B (mm)
            const t = parseFloat(document.getElementById('rectangularThickness').value) || 0; // Thickness (mm)
            const L_meters = parseFloat(document.getElementById('rectangularLength').value) || 0; // Length (m)

            const density = 7.85; // g/cm³ (for steel)

            if (A <= 0 || B <= 0 || t <= 0 || L_meters <= 0 || A <= 2 * t || B <= 2 * t) {
                document.getElementById('rectangularWeightPerMeter').textContent = "NaN";
                document.getElementById('rectangularTotalWeight').textContent = "NaN";
                return;
            }

            // Area of hollow rectangular section
            const area = (2 * (A * t)) + (2 * (B * t)) - (4 * (t * t)); // mm²

            // Convert mm² to cm² and multiply by density to get g/mm, then convert to kg/mm
            const weightPerMm = area * density * 1e-6; // kg/mm
            const weightPerMeter = weightPerMm * 1000; // kg/m
            const totalWeight = weightPerMeter * L_meters; // kg

            document.getElementById('rectangularWeightPerMeter').textContent = weightPerMeter.toFixed(2) + " kg/m";
            document.getElementById('rectangularTotalWeight').textContent = totalWeight.toFixed(2) + " kg";
        }
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

                // Volume in m³
                let volume_m3 = (t / 1000) * (W / 1000) * (L / 1000);
                let weight_single = volume_m3 * density;
                let weight_total = weight_single * pieces;

                singleOutput.innerText = weight_single.toFixed(2) + " kg";
                totalOutput.innerText = weight_total.toFixed(2) + " kg";
            }

            // Add event listeners
            tInput.addEventListener('input', calculate);
            wInput.addEventListener('input', calculate);
            lInput.addEventListener('input', calculate);
            piecesInput.addEventListener('input', calculate);

            // Initial calculation
            calculate();
        }

        // Initialize tab1 calculator
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
            "30x20": [3, 4],
            "40x20": [3, 4],
            "40x25": [4],
            "45x30": [3, 4, 5],
            "50x30": [4, 5],
            "60x30": [5],
            "60x40": [5, 6, 7],
            "60x50": [5, 6, 8, 10],
            "65x50": [5],
            "70x50": [6],
            "75x50": [5, 6, 8, 9, 10],
            "75x55": [5, 7, 9],
            "75x60": [5, 6, 8, 10],
            "80x40": [6, 8, 10],
            "80x60": [7],
            "90x60": [6, 8, 10],
            "90x75": [6, 8, 10],
            "100x50": [6, 8, 10, 12],
            "100x65": [7, 8, 9, 10],
            "100x75": [6, 7, 8, 9, 10, 12],
            "100x90": [6, 8, 10, 12],
            "120x80": [8, 10, 12],
            "125x75": [8, 10, 12],
            "125x80": [8, 10, 12, 15],
            "125x90": [8, 10, 12, 15],
            "130x65": [8, 10, 12],
            "130x75": [8, 10, 12, 15],
            "130x90": [10, 12],
            "150x75": [9, 10, 12, 15],
            "150x90": [10, 12, 15],
            "150x100": [10, 12],
            "180x90": [10, 12],
            "200x100": [10, 12, 15],
            "200x150": [12, 15]
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
                h: 65,
                b: 36,
                s: 4.4,
                t: 7.2,
                w: 5.90
            },
            "8": {
                h: 80,
                b: 40,
                s: 4.2,
                t: 7.4,
                w: 7.03
            },
            "10": {
                h: 100,
                b: 46,
                s: 4.3,
                t: 7.6,
                w: 8.58
            },
            "12": {
                h: 120,
                b: 52,
                s: 4.3,
                t: 7.9,
                w: 10.22
            },
            "14": {
                h: 140,
                b: 58,
                s: 4.4,
                t: 8.2,
                w: 12.07
            },
            "16": {
                h: 160,
                b: 64,
                s: 4.4,
                t: 8.5,
                w: 13.83
            },
            "18": {
                h: 180,
                b: 70,
                s: 4.5,
                t: 9.2,
                w: 16.60
            },
            "20": {
                h: 200,
                b: 76,
                s: 4.6,
                t: 9.6,
                w: 18.41
            },
            "22": {
                h: 220,
                b: 80,
                s: 4.6,
                t: 10.0,
                w: 20.53
            },
            "24": {
                h: 240,
                b: 90,
                s: 4.8,
                t: 10.6,
                w: 23.70
            },
            "27": {
                h: 270,
                b: 95,
                s: 6.0,
                t: 10.5,
                w: 27.70
            },
            "30": {
                h: 300,
                b: 100,
                s: 6.3,
                t: 11.4,
                w: 32.09
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

@endsection
