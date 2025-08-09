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
                                                <input type="number" class="form-control me-2" id="sheetThickness"
                                                    value="1" placeholder="e.g. 1"
                                                    oninput="calculateSteelSheetWeight()" />
                                                <span class="text-nowrap">mm</span>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Width -->
                                    <div class="col-12 mb-3">
                                        <div class="d-flex align-items-center">
                                            <label class="form-label mb-0 me-3" style="width: 120px;">Width, W</label>
                                            <div class="d-flex align-items-center flex-grow-1">
                                                <input type="number" class="form-control me-2" id="sheetWidth"
                                                    value="1000" placeholder="e.g. 1000"
                                                    oninput="calculateSteelSheetWeight()" />
                                                <span class="text-nowrap">mm</span>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Length -->
                                    <div class="col-12 mb-3">
                                        <div class="d-flex align-items-center">
                                            <label class="form-label mb-0 me-3" style="width: 120px;">Length, L</label>
                                            <div class="d-flex align-items-center flex-grow-1">
                                                <input type="number" class="form-control me-2" id="sheetLength"
                                                    value="2000" placeholder="e.g. 2000"
                                                    oninput="calculateSteelSheetWeight()" />
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
                                                <input type="number" class="form-control" id="sheetPieces"
                                                    value="1" placeholder="e.g. 1"
                                                    oninput="calculateSteelSheetWeight()" />
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Result -->
                                <div class="mt-2">
                                    <h6><strong>Result</strong></h6>
                                    <p>Single piece weight: <strong id="sheetSingleWeight" class="text-primary">15.7
                                            kg</strong></p>
                                    <p>Total weight: <strong id="sheetTotalWeight" class="text-primary">15.7 kg</strong>
                                    </p>
                                </div>
                            </div>

                            <!-- Right: Image -->
                            <div class="col-lg-6 d-flex align-items-center">
                                <img src="https://placehold.co/200x200" class="img-fluid rounded border w-100"
                                    alt="Placeholder Image">
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
                                                <input type="number" id="pipeDiameter" class="form-control me-2"
                                                    placeholder="e.g. 8" value="8"
                                                    oninput="calculatePipeWeight()" />
                                                <span class="text-nowrap">mm</span>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Thickness -->
                                    <div class="col-12 mb-3">
                                        <div class="d-flex align-items-center">
                                            <label class="form-label mb-0 me-3" style="width: 120px;">Thickness, t</label>
                                            <div class="d-flex align-items-center flex-grow-1">
                                                <input type="number" id="pipeThickness" class="form-control me-2"
                                                    placeholder="e.g. 1.5" value="1.5"
                                                    oninput="calculatePipeWeight()" />
                                                <span class="text-nowrap">mm</span>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Length -->
                                    <div class="col-12 mb-3">
                                        <div class="d-flex align-items-center">
                                            <label class="form-label mb-0 me-3" style="width: 120px;">Length, L</label>
                                            <div class="d-flex align-items-center flex-grow-1">
                                                <input type="number" id="pipeLength" class="form-control me-2"
                                                    placeholder="e.g. 1" value="1"
                                                    oninput="calculatePipeWeight()" />
                                                <span class="text-nowrap">m</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Result -->
                                <div class="mt-2">
                                    <h6><strong>Result</strong></h6>
                                    {{-- <p>Weight per meter: <strong class="text-primary">0.24 kg/m</strong></p>
                                    <p>Total weight: <strong class="text-primary">0.24 kg</strong></p> --}}
                                    <p>Weight per meter: <strong id="pipeWeightPerMeter" class="text-primary">0.24
                                            kg/m</strong></p>
                                    <p>Total weight: <strong id="pipeTotalWeight" class="text-primary">0.24 kg</strong>
                                    </p>
                                </div>
                            </div>

                            <!-- Right: Image -->
                            <div class="col-lg-6 d-flex align-items-center">
                                <img src="https://placehold.co/200x200" class="img-fluid rounded border w-100"
                                    alt="Placeholder Image of Rod or Pipe">
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
                                                <input type="number" class="form-control me-2" id="hollowDiameter"
                                                    value="21.3" placeholder="e.g. 21.3"
                                                    oninput="calculateHollowSectionWeight()" />
                                                <span class="text-nowrap">mm</span>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Thickness -->
                                    <div class="col-12 mb-3">
                                        <div class="d-flex align-items-center">
                                            <label class="form-label mb-0 me-3" style="width: 120px;">Thickness, t</label>
                                            <div class="d-flex align-items-center flex-grow-1">
                                                <input type="number" class="form-control me-2" id="hollowThickness"
                                                    value="2" placeholder="e.g. 2"
                                                    oninput="calculateHollowSectionWeight()" />
                                                <span class="text-nowrap">mm</span>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Length -->
                                    <div class="col-12 mb-3">
                                        <div class="d-flex align-items-center">
                                            <label class="form-label mb-0 me-3" style="width: 120px;">Length, L</label>
                                            <div class="d-flex align-items-center flex-grow-1">
                                                <input type="number" class="form-control me-2" id="hollowLength"
                                                    value="1" placeholder="e.g. 1"
                                                    oninput="calculateHollowSectionWeight()" />
                                                <span class="text-nowrap">m</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Result -->
                                <div class="mt-2">
                                    <h6><strong>Result</strong></h6>
                                    <p>Weight per meter: <strong id="hollowWeightPerMeter" class="text-primary">0.95
                                            kg/m</strong></p>
                                    <p>Total weight: <strong id="hollowTotalWeight" class="text-primary">0.95 kg</strong>
                                    </p>
                                </div>
                            </div>

                            <!-- Right: Image -->
                            <div class="col-lg-6 d-flex align-items-center">
                                <img src="https://placehold.co/200x200" class="img-fluid rounded border w-100"
                                    alt="Placeholder Image for Pipe">
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
                                    <p>Weight per meter: <strong id="rectangularWeightPerMeter" class="text-primary">1.08
                                            kg/m</strong></p>
                                    <p>Total weight: <strong id="rectangularTotalWeight" class="text-primary">1.08
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
                                                <input type="number" class="form-control me-2" placeholder="e.g. 25" />
                                                <span class="text-nowrap">mm</span>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Length -->
                                    <div class="col-12 mb-3">
                                        <div class="d-flex align-items-center">
                                            <label class="form-label mb-0 me-3" style="width: 120px;">Length, L</label>
                                            <div class="d-flex align-items-center flex-grow-1">
                                                <input type="number" class="form-control me-2"
                                                    placeholder="e.g. 6000" />
                                                <span class="text-nowrap">mm</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Result -->
                                <div class="mt-2">
                                    <h6><strong>Result</strong></h6>
                                    <p>Weight per meter: <strong class="text-primary">7.1 kg/m</strong></p>
                                    <p>Total weight: <strong class="text-primary">7.1 kg</strong></p>
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
                                                <input type="number" class="form-control me-2" placeholder="e.g. 20" />
                                                <span class="text-nowrap">mm</span>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Length -->
                                    <div class="col-12 mb-3">
                                        <div class="d-flex align-items-center">
                                            <label class="form-label mb-0 me-3" style="width: 120px;">Length, L</label>
                                            <div class="d-flex align-items-center flex-grow-1">
                                                <input type="number" class="form-control me-2"
                                                    placeholder="e.g. 6000" />
                                                <span class="text-nowrap">mm</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Result -->
                                <div class="mt-2">
                                    <h6><strong>Result</strong></h6>
                                    <p>Weight per meter: <strong class="text-primary">5.2 kg/m</strong></p>
                                    <p>Total weight: <strong class="text-primary">5.2 kg</strong></p>
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
                                                <input type="number" class="form-control me-2" placeholder="e.g. 10" />
                                                <span class="text-nowrap">mm</span>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Thickness -->
                                    <div class="col-12 mb-3">
                                        <div class="d-flex align-items-center">
                                            <label class="form-label mb-0 me-3" style="width: 120px;">Thickness, t</label>
                                            <div class="d-flex align-items-center flex-grow-1">
                                                <input type="number" class="form-control me-2" placeholder="e.g. 3" />
                                                <span class="text-nowrap">mm</span>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Length -->
                                    <div class="col-12 mb-3">
                                        <div class="d-flex align-items-center">
                                            <label class="form-label mb-0 me-3" style="width: 120px;">Length, L</label>
                                            <div class="d-flex align-items-center flex-grow-1">
                                                <input type="number" class="form-control me-2" placeholder="e.g. 1" />
                                                <span class="text-nowrap">m</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Result -->
                                <div class="mt-2">
                                    <h6><strong>Result</strong></h6>
                                    <p>Weight per meter: <strong class="text-primary">2.4 kg/m</strong></p>
                                    <p>Total weight: <strong class="text-primary">2.4 kg</strong></p>
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
                                                <input type="number" class="form-control me-2" placeholder="e.g. 20" />
                                                <span class="text-nowrap">mm</span>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Thickness -->
                                    <div class="col-12 mb-3">
                                        <div class="d-flex align-items-center">
                                            <label class="form-label mb-0 me-3" style="width: 120px;">Thickness, t</label>
                                            <div class="d-flex align-items-center flex-grow-1">
                                                <input type="number" class="form-control me-2" placeholder="e.g. 3" />
                                                <span class="text-nowrap">mm</span>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Length -->
                                    <div class="col-12 mb-3">
                                        <div class="d-flex align-items-center">
                                            <label class="form-label mb-0 me-3" style="width: 120px;">Length, L</label>
                                            <div class="d-flex align-items-center flex-grow-1">
                                                <input type="number" class="form-control me-2" placeholder="e.g. 1" />
                                                <span class="text-nowrap">m</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Result -->
                                <div class="mt-2">
                                    <h6><strong>Result</strong></h6>
                                    <p>Weight per meter: <strong class="text-primary">3.1 kg/m</strong></p>
                                    <p>Total weight: <strong class="text-primary">3.1 kg</strong></p>
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
                                            <label class="form-label mb-0 me-3" style="width: 120px;">Side, A x B</label>
                                            <div class="d-flex align-items-center flex-grow-1">
                                                <input type="text" class="form-control me-2"
                                                    placeholder="e.g. 30x20" />
                                                <span class="text-nowrap">mm</span>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Thickness -->
                                    <div class="col-12 mb-3">
                                        <div class="d-flex align-items-center">
                                            <label class="form-label mb-0 me-3" style="width: 120px;">Thickness, t</label>
                                            <div class="d-flex align-items-center flex-grow-1">
                                                <input type="number" class="form-control me-2" placeholder="e.g. 3" />
                                                <span class="text-nowrap">mm</span>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Length -->
                                    <div class="col-12 mb-3">
                                        <div class="d-flex align-items-center">
                                            <label class="form-label mb-0 me-3" style="width: 120px;">Length, L</label>
                                            <div class="d-flex align-items-center flex-grow-1">
                                                <input type="number" class="form-control me-2" placeholder="e.g. 1" />
                                                <span class="text-nowrap">m</span>
                                            </div>
                                        </div>
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
                                    <select class="form-select">
                                        <option selected>№ 6.5</option>
                                        <option>№ 8</option>
                                        <option>№ 10</option>
                                        <option>№ 12</option>
                                        <option>№ 14</option>
                                        <option>№ 16</option>
                                        <option>№ 18</option>
                                        <option>№ 20</option>
                                        <option>№ 22</option>
                                        <option>№ 24</option>
                                        <option>№ 27</option>
                                        <option>№ 30</option>
                                        <!-- Add more options as needed -->
                                    </select>
                                </div>

                                <!-- Height, h -->
                                <div class="mb-3 d-flex align-items-center">
                                    <label class="form-label mb-0 me-3" style="width: 140px;">Height, h:</label>
                                    <input type="number" class="form-control me-2" placeholder="e.g. 65" />
                                    <span class="text-nowrap">mm</span>
                                </div>

                                <!-- Width, b -->
                                <div class="mb-3 d-flex align-items-center">
                                    <label class="form-label mb-0 me-3" style="width: 140px;">Width, b:</label>
                                    <input type="number" class="form-control me-2" placeholder="e.g. 36" />
                                    <span class="text-nowrap">mm</span>
                                </div>

                                <!-- Thickness, s -->
                                <div class="mb-3 d-flex align-items-center">
                                    <label class="form-label mb-0 me-3" style="width: 140px;">Thickness, s:</label>
                                    <input type="number" class="form-control me-2" placeholder="e.g. 4.4" />
                                    <span class="text-nowrap">mm</span>
                                </div>

                                <!-- Thickness, t -->
                                <div class="mb-3 d-flex align-items-center">
                                    <label class="form-label mb-0 me-3" style="width: 140px;">Thickness, t:</label>
                                    <input type="number" class="form-control me-2" placeholder="e.g. 7.2" />
                                    <span class="text-nowrap">mm</span>
                                </div>

                                <!-- Length, L -->
                                <div class="mb-3 d-flex align-items-center">
                                    <label class="form-label mb-0 me-3" style="width: 140px;">Length, L:</label>
                                    <input type="number" class="form-control me-2" placeholder="e.g. 1" />
                                    <span class="text-nowrap">m</span>
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
@endsection
