@extends('rider.app')
@section('title', $title)


@section('content')

    <!-- Content wrapper -->
    <div class="content-wrapper">
        <!-- Content -->

        <div class="container-xxl flex-grow-1 container-p-y">
            <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Dashboard / </span>PickDrop Details</h4>

            <!-- Basic Layout & Basic with Icons -->
            <div class="row">
                <!-- Basic Layout -->
                <div class="col-xxl">
                    <div class="card mb-4">
                        <div class="card-header d-flex align-items-center justify-content-between">
                            <h5 class="mb-0">PickDrop Delivery</h5>
                            <!-- <small class="text-muted float-end">Default label</small> -->
                        </div>
                        <div class="card-body">
                            <form action="{{ route('processing_pickdrop_store', $pick_drop->id) }}"
                                enctype="multipart/form-data" method="post">
                                @csrf
                                {{-- <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label" for="basic-default-name">Vendor Name :</label>
                                    <div class="col-sm-10">
                                        <input readonly type="text" class="form-control"
                                            id="basic-default-name" value="{{ $delivery->vendor->vendor_name }}" />
                                        <input type="hidden" name="vendor_id" class="form-control"
                                            id="basic-default-name" value="{{ $delivery->vendor_id }}" />
                                    </div>
                                </div> --}}
                                {{-- <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label" for="basic-default-email">Delivery Type :</label>
                                    <div class="col-sm-10">
                                        <div class="input-group input-group-merge">
                                            <select id="vendor_id" name="vendor_id" class="form-control">
                                                <option selected="selected" value="{{$delivery->vendor->id}}">{{ $delivery->vendor->vendor_name }}</option>
                                            </select>
                                        </div>

                                    </div>
                                </div> --}}
                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label" for="basic-default-name">Item Name :</label>
                                    <div class="col-sm-10">
                                        <input readonly type="text" name="item_name" class="form-control"
                                            id="basic-default-name" value="{{ $pick_drop->item_name }}" />
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label" for="basic-default-company">Qty :</label>
                                    <div class="col-sm-10">
                                        <input readonly type="number" name="qty" class="form-control"
                                            id="basic-default-company" value="{{ $pick_drop->qty }}" />
                                    </div>
                                </div>


                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label" for="basic-default-phone">Item Price :</label>
                                    <div class="col-sm-10">
                                        <input readonly type="number" name="item_price" id="item_price"
                                            class="form-control phone-mask" value="{{ $pick_drop->item_price }}"
                                            aria-label="658 799 8941" aria-describedby="basic-default-phone" />
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label" for="basic-default-email">Destination :</label>
                                    <div class="col-sm-10">
                                        <div class="input-group input-group-merge">
                                            <select id="delivery_des" name="delivery_des" class="form-control">
                                                <option disabled selected="selected">{{ $pick_drop->delivery_des }}</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label" for="basic-default-email">Delivery Type :</label>
                                    <div class="col-sm-10">
                                        <div class="input-group input-group-merge">
                                            <select id="delivery_type" name="delivery_type" class="form-control">
                                                <option disabled selected="selected">{{ $pick_drop->delivery_type }}</option>
                                            </select>
                                        </div>

                                    </div>
                                </div>


                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label" for="basic-default-phone">Delivery Charge
                                        :</label>
                                    <div class="col-sm-10">
                                        <input type="number" readonly name="delivery_charge" id="delivery_charge"
                                            class="form-control phone-mask" value="{{ $pick_drop->delivery_charge }}"
                                            aria-label="658 799 8941" aria-describedby="basic-default-phone" />
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label" for="basic-default-phone">Total Price :</label>
                                    <div class="col-sm-10">
                                        <input type="number" readonly name="total_price" id="total_price"
                                            class="form-control phone-mask" value="{{ $pick_drop->total_price }}"
                                            aria-label="658 799 8941" aria-describedby="basic-default-phone" />
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label" for="basic-default-address">Delivery Time
                                        :</label>
                                    <div class="col-sm-10">
                                        <input readonly name="delivery_time" type="datetime" class="form-control"
                                            id="basic-default-address" value="{{ $pick_drop->delivery_time }}" />
                                    </div>
                                </div>
                                <h1>PickUp Receiver Info</h1>
                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label" for="basic-default-address">PickUp Receiver Name
                                        :</label>
                                    <div class="col-sm-10">
                                        <input readonly name="pick_name" type="text" class="form-control"
                                            id="basic-default-address" value="{{ $pick_drop->pick_name }}" />
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label" for="basic-default-address">PickUp Receiver
                                        Number:</label>
                                    <div class="col-sm-10">
                                        <input readonly name="pick_number" type="number" class="form-control"
                                            id="basic-default-address" value="{{ $pick_drop->pick_number }}" />
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label" for="basic-default-address">PickUp Receiver Address
                                        :</label>
                                    <div class="col-sm-10">
                                        <input readonly name="pick_address" type="text" class="form-control"
                                            id="basic-default-address" value=" {{ $pick_drop->pick_address }}" />
                                    </div>
                                </div>

                                <h1>Drop Receiver Info</h1>
                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label" for="basic-default-address">PickUp Receiver Name
                                        :</label>
                                    <div class="col-sm-10">
                                        <input readonly name="pick_name" type="text" class="form-control"
                                            id="basic-default-address" value="{{ $pick_drop->drop_name }}" />
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label" for="basic-default-address">PickUp Receiver
                                        Number:</label>
                                    <div class="col-sm-10">
                                        <input readonly name="pick_number" type="number" class="form-control"
                                            id="basic-default-address" value="{{ $pick_drop->drop_number }}" />
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label" for="basic-default-address">PickUp Receiver Address
                                        :</label>
                                    <div class="col-sm-10">
                                        <input readonly name="pick_address" type="text" class="form-control"
                                            id="basic-default-address" value=" {{ $pick_drop->drop_address }}" />
                                    </div>
                                </div>

								
                               
								<div class="row mb-3">
                                    <label class="col-sm-2 col-form-label" for="basic-default-email">Status :</label>
                                    <div class="col-sm-10">
                                        <div class="input-group input-group-merge">
                                            <select id="pick_status" name="drop_status" class="form-control">
                                                <option value="" disabled selected="selected">{{ $pick_drop->pick_status }}</option>
												<option value="Completed">Completed</option>
                                                <option value="Cancel">Cancel</option>
												
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="row d-flex justify-content-center align-items-center">
                                    <div
                                        class="col-lg-12 d-flex justify-content-center align-items-center gap-4 form-button">
                                        <button type="submit" class="btn btn-primary">SUBMIT</button>
                                        <a href="{{ URL::previous() }}">
                                            <button type="button"
                                            class="btn rounded-pill btn-outline-warning">Back</button>
                                        </a>
                                        
                                    </div>

                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- / Content -->
        <div class="content-backdrop fade"></div>
    </div>
    <!-- Content wrapper -->
@endsection