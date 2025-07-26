@extends('layouts.master')
@section('title', 'Mokshtube || Calculator')
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
                <h5 class="mb-3">Calculator</h5>

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
                        <h5 class="mb-3">Calculator for Steel sheets and plates</h5>

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
                                                <input type="number" class="form-control me-2" id="sheetThickness" placeholder="e.g. 1" oninput="calculateSteelSheetWeight()" />
                                                <span class="text-nowrap">mm</span>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Width -->
                                    <div class="col-12 mb-3">
                                        <div class="d-flex align-items-center">
                                            <label class="form-label mb-0 me-3" style="width: 120px;">Width, W</label>
                                            <div class="d-flex align-items-center flex-grow-1">
                                                <input type="number" class="form-control me-2" id="sheetWidth" placeholder="e.g. 1000" oninput="calculateSteelSheetWeight()" />
                                                <span class="text-nowrap">mm</span>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Length -->
                                    <div class="col-12 mb-3">
                                        <div class="d-flex align-items-center">
                                            <label class="form-label mb-0 me-3" style="width: 120px;">Length, L</label>
                                            <div class="d-flex align-items-center flex-grow-1">
                                                <input type="number" class="form-control me-2" id="sheetLength" placeholder="e.g. 2000" oninput="calculateSteelSheetWeight()" />
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
                                                <input type="number" class="form-control" id="sheetPieces" placeholder="e.g. 1" oninput="calculateSteelSheetWeight()" />
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Result -->
                                <div class="mt-2">
                                    <h6><strong>Result</strong></h6>
                                    <p>Single piece weight: <strong id="sheetSingleWeight" class="text-primary">15.7 kg</strong></p>
                                    <p>Total weight: <strong id="sheetTotalWeight" class="text-primary">15.7 kg</strong></p>
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
                                                <input type="number" class="form-control me-2" placeholder="e.g. 50" />
                                                <span class="text-nowrap">mm</span>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Thickness -->
                                    <div class="col-12 mb-3">
                                        <div class="d-flex align-items-center">
                                            <label class="form-label mb-0 me-3" style="width: 120px;">Thickness, t</label>
                                            <div class="d-flex align-items-center flex-grow-1">
                                                <input type="number" class="form-control me-2" placeholder="e.g. 5" />
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
                                                    placeholder="e.g. 2000" />
                                                <span class="text-nowrap">mm</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Result -->
                                <div class="mt-2">
                                    <h6><strong>Result</strong></h6>
                                    <p>Single piece weight: <strong class="text-primary">12.3 kg</strong></p>
                                    <p>Total weight: <strong class="text-primary">12.3 kg</strong></p>
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
                                                <input type="number" class="form-control me-2" placeholder="e.g. 60" />
                                                <span class="text-nowrap">mm</span>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Thickness -->
                                    <div class="col-12 mb-3">
                                        <div class="d-flex align-items-center">
                                            <label class="form-label mb-0 me-3" style="width: 120px;">Thickness, t</label>
                                            <div class="d-flex align-items-center flex-grow-1">
                                                <input type="number" class="form-control me-2" placeholder="e.g. 4" />
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
                                                    placeholder="e.g. 2500" />
                                                <span class="text-nowrap">mm</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Result -->
                                <div class="mt-2">
                                    <h6><strong>Result</strong></h6>
                                    <p>Single piece weight: <strong class="text-primary">9.8 kg</strong></p>
                                    <p>Total weight: <strong class="text-primary">9.8 kg</strong></p>
                                </div>
                            </div>

                            <!-- Right: Image -->
                            <div class="col-lg-6 d-flex align-items-center">
                                <img src="https://placehold.co/200x200" class="img-fluid rounded border w-100"
                                    alt="Placeholder Image for Pipe">
                            </div>
                        </div>
                    </div>

                    {{-- Hollow structural sections - square --}}
                    <div id="tab4" class="tab-content-item d-none">
                        <h5 class="mb-3">Hollow structural sections - square</h5>

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
                                                <input type="number" class="form-control me-2" placeholder="e.g. 50" />
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
                                                <input type="number" class="form-control me-2"
                                                    placeholder="e.g. 2000" />
                                                <span class="text-nowrap">mm</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Result -->
                                <div class="mt-2">
                                    <h6><strong>Result</strong></h6>
                                    <p>Single piece weight: <strong class="text-primary">10.2 kg</strong></p>
                                    <p>Total weight: <strong class="text-primary">10.2 kg</strong></p>
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
                                                <input type="number" class="form-control me-2" placeholder="e.g. 100" />
                                                <span class="text-nowrap">mm</span>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Side B -->
                                    <div class="col-12 mb-3">
                                        <div class="d-flex align-items-center">
                                            <label class="form-label mb-0 me-3" style="width: 120px;">Side, B</label>
                                            <div class="d-flex align-items-center flex-grow-1">
                                                <input type="number" class="form-control me-2" placeholder="e.g. 50" />
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
                                                <input type="number" class="form-control me-2"
                                                    placeholder="e.g. 2000" />
                                                <span class="text-nowrap">mm</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Result -->
                                <div class="mt-2">
                                    <h6><strong>Result</strong></h6>
                                    <p>Single piece weight: <strong class="text-primary">11.5 kg</strong></p>
                                    <p>Total weight: <strong class="text-primary">11.5 kg</strong></p>
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
                                    <p>Single piece weight: <strong class="text-primary">7.1 kg</strong></p>
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
                                    <p>Single piece weight: <strong class="text-primary">5.2 kg</strong></p>
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
                                    <p>Single piece weight: <strong class="text-primary">2.4 kg</strong></p>
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
                                    <p>Single piece weight: <strong class="text-primary">3.1 kg</strong></p>
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
                                    <p>Single piece weight: <strong class="text-primary">4.2 kg</strong></p>
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
                                    <p>Single piece weight: <strong class="text-primary">4.2 kg</strong></p>
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
                                    <p>Weight per meter: <strong class="text-primary">– kg/m</strong></p>
                                    <p>Total weight: <strong class="text-primary">– kg</strong></p>
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
                                    <!-- Height, h -->
                                    <div class="col-12 mb-3 d-flex align-items-center">
                                        <label class="form-label mb-0 me-3" style="width: 150px;">Height, h</label>
                                        <input type="number" class="form-control me-2" placeholder="e.g. 300">
                                        <span>mm</span>
                                    </div>
                                    <!-- Width of flange, b -->
                                    <div class="col-12 mb-3 d-flex align-items-center">
                                        <label class="form-label mb-0 me-3" style="width: 150px;">Flange width, b</label>
                                        <input type="number" class="form-control me-2" placeholder="e.g. 150">
                                        <span>mm</span>
                                    </div>
                                    <!-- Thickness of web, tw -->
                                    <div class="col-12 mb-3 d-flex align-items-center">
                                        <label class="form-label mb-0 me-3" style="width: 150px;">Web thickness,
                                            tw</label>
                                        <input type="number" class="form-control me-2" placeholder="e.g. 10">
                                        <span>mm</span>
                                    </div>
                                    <!-- Thickness of flange, tf -->
                                    <div class="col-12 mb-3 d-flex align-items-center">
                                        <label class="form-label mb-0 me-3" style="width: 150px;">Flange thickness,
                                            tf</label>
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
                                    <p>Single piece weight: <strong class="text-primary">N/A</strong></p>
                                    <p>Total weight: <strong class="text-primary">N/A</strong></p>
                                </div>
                            </div>

                            <!-- Right: Image -->
                            <div class="col-lg-6 d-flex align-items-center">
                                <img src="https://placehold.co/300x200?text=IPN" class="img-fluid rounded border w-100"
                                    alt="I-Beam Illustration" />
                            </div>
                        </div>
                    </div>

                    {{-- Beams - IPE --}}
                    <div id="tab14" class="tab-content-item d-none">
                        <h5 class="mb-3">Beams - IPE</h5>
                        <div class="row g-4">
                            <div class="col-6">
                                <label class="form-label">Thickness, t (mm)</label>
                                <input type="number" class="form-control" placeholder="e.g. 1" />
                            </div>
                            <div class="col-6">
                                <label class="form-label">Width, W (mm)</label>
                                <input type="number" class="form-control" placeholder="e.g. 1000" />
                            </div>
                            <div class="col-6">
                                <label class="form-label">Length, L (mm)</label>
                                <input type="number" class="form-control" placeholder="e.g. 2000" />
                            </div>
                            <div class="col-6">
                                <label class="form-label">Number of pieces</label>
                                <input type="number" class="form-control" placeholder="e.g. 1" />
                            </div>
                        </div>
                        <div class="mt-4">
                            <h6><strong>Result</strong></h6>
                            <p>Single piece weight: <strong class="text-primary">15.7 kg</strong></p>
                            <p>Total weight: <strong class="text-primary">15.7 kg</strong></p>
                        </div>
                        <div class="mt-4">
                            <img src="https://placehold.co/800x300" class="img-fluid rounded border"
                                alt="Placeholder Image">
                        </div>
                    </div>

                    {{-- Beams - HEA (IPBL) --}}
                    <div id="tab15" class="tab-content-item d-none">
                        <h5 class="mb-3">Beams - HEA (IPBL)</h5>
                        <div class="row g-4">
                            <div class="col-6">
                                <label class="form-label">Thickness, t (mm)</label>
                                <input type="number" class="form-control" placeholder="e.g. 1" />
                            </div>
                            <div class="col-6">
                                <label class="form-label">Width, W (mm)</label>
                                <input type="number" class="form-control" placeholder="e.g. 1000" />
                            </div>
                            <div class="col-6">
                                <label class="form-label">Length, L (mm)</label>
                                <input type="number" class="form-control" placeholder="e.g. 2000" />
                            </div>
                            <div class="col-6">
                                <label class="form-label">Number of pieces</label>
                                <input type="number" class="form-control" placeholder="e.g. 1" />
                            </div>
                        </div>
                        <div class="mt-4">
                            <h6><strong>Result</strong></h6>
                            <p>Single piece weight: <strong class="text-primary">15.7 kg</strong></p>
                            <p>Total weight: <strong class="text-primary">15.7 kg</strong></p>
                        </div>
                        <div class="mt-4">
                            <img src="https://placehold.co/800x300" class="img-fluid rounded border"
                                alt="Placeholder Image">
                        </div>
                    </div>

                    {{-- Beams - HEB (IPB) --}}
                    <div id="tab16" class="tab-content-item d-none">
                        <h5 class="mb-3">Beams - HEB (IPB)</h5>
                        <div class="row g-4">
                            <div class="col-6">
                                <label class="form-label">Thickness, t (mm)</label>
                                <input type="number" class="form-control" placeholder="e.g. 1" />
                            </div>
                            <div class="col-6">
                                <label class="form-label">Width, W (mm)</label>
                                <input type="number" class="form-control" placeholder="e.g. 1000" />
                            </div>
                            <div class="col-6">
                                <label class="form-label">Length, L (mm)</label>
                                <input type="number" class="form-control" placeholder="e.g. 2000" />
                            </div>
                            <div class="col-6">
                                <label class="form-label">Number of pieces</label>
                                <input type="number" class="form-control" placeholder="e.g. 1" />
                            </div>
                        </div>
                        <div class="mt-4">
                            <h6><strong>Result</strong></h6>
                            <p>Single piece weight: <strong class="text-primary">15.7 kg</strong></p>
                            <p>Total weight: <strong class="text-primary">15.7 kg</strong></p>
                        </div>
                        <div class="mt-4">
                            <img src="https://placehold.co/800x300" class="img-fluid rounded border"
                                alt="Placeholder Image">
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
    </script>
@endsection
