@extends('admin.layouts.mainlayouts')
@section('title', 'Invoice Edit')
@section('content')
    <link rel="icon" type="image/x-icon" href="assets/src/assets/img/favicon.ico"/>
    <link href="assets/layouts/vertical-dark-menu/css/light/loader.css" rel="stylesheet" type="text/css" />
    <link href="assets/layouts/vertical-dark-menu/css/dark/loader.css" rel="stylesheet" type="text/css" />
    <script src="assets/layouts/vertical-dark-menu/loader.js"></script>
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">
    <link href="assets/src/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/layouts/vertical-dark-menu/css/light/plugins.css" rel="stylesheet" type="text/css" />
    <link href="assets/layouts/vertical-dark-menu/css/dark/plugins.css" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->

    <!--  BEGIN CUSTOM STYLE FILE  -->
    <link href="assets/src/plugins/src/flatpickr/flatpickr.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="assets/src/plugins/src/filepond/filepond.min.css">
    <link rel="stylesheet" href="assets/src/plugins/src/filepond/FilePondPluginImagePreview.min.css">

    <link href="assets/src/plugins/css/light/filepond/custom-filepond.css" rel="stylesheet" type="text/css" />
    <link href="assets/src/plugins/css/light/flatpickr/custom-flatpickr.css" rel="stylesheet" type="text/css">
    <link href="assets/src/assets/css/light/apps/invoice-edit.css" rel="stylesheet" type="text/css" />

    <link href="assets/src/plugins/css/dark/filepond/custom-filepond.css" rel="stylesheet" type="text/css" />
    <link href="assets/src/plugins/css/dark/flatpickr/custom-flatpickr.css" rel="stylesheet" type="text/css">
    <link href="assets/src/assets/css/dark/apps/invoice-edit.css" rel="stylesheet" type="text/css" />
    <!--  END CUSTOM STYLE FILE  -->
    <div class="row invoice layout-top-spacing layout-spacing">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

            <div class="doc-container">

                <div class="row">
                    <div class="col-xl-9">

                        <div class="invoice-content">

                            <div class="invoice-detail-body">

                                <div class="invoice-detail-title">

                                    <div class="invoice-logo">
                                        <div class="profile-image">

                                            <!-- // The classic file input element we'll enhance
                                            // to a file pond, we moved the configuration
                                            // properties to JavaScript -->

                                            <div class="img-uploader-content">
                                                <input type="file" class="filepond"
                                                    name="filepond" accept="image/png, image/jpeg, image/gif"/>
                                            </div>

                                        </div>
                                    </div>

                                    <div class="invoice-title">
                                        <input type="text" class="form-control" placeholder="Invoice Label" value="Cork Inc.">
                                    </div>

                                </div>

                                <div class="invoice-detail-header">

                                    <div class="row justify-content-between">
                                        <div class="col-xl-5 invoice-address-company">

                                            <h4>From:-</h4>

                                            <div class="invoice-address-company-fields">

                                                <div class="form-group row">
                                                    <label for="company-name" class="col-sm-3 col-form-label col-form-label-sm">Name</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" class="form-control form-control-sm" id="company-name" placeholder="Business Name" value="Cork Inc.">
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label for="company-email" class="col-sm-3 col-form-label col-form-label-sm">Email</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" class="form-control form-control-sm" id="company-email" placeholder="name@company.com" value="info@company.com">
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label for="company-address" class="col-sm-3 col-form-label col-form-label-sm">Address</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" class="form-control form-control-sm" id="company-address" placeholder="XYZ Street" value="XYZ Delta Street">
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label for="company-phone" class="col-sm-3 col-form-label col-form-label-sm">Phone</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" class="form-control form-control-sm" id="company-phone" placeholder="(123) 456 789" value="(120) 456 789">
                                                    </div>
                                                </div>

                                            </div>

                                        </div>


                                        <div class="col-xl-5 invoice-address-client">

                                            <h4>Bill To:-</h4>

                                            <div class="invoice-address-client-fields">

                                                <div class="form-group row">
                                                    <label for="client-name" class="col-sm-3 col-form-label col-form-label-sm">Name</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" class="form-control form-control-sm" id="client-name" placeholder="Client Name" value="Jesse Cory">
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label for="client-email" class="col-sm-3 col-form-label col-form-label-sm">Email</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" class="form-control form-control-sm" id="client-email" placeholder="name@company.com" value="redq@company.com">
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label for="client-address" class="col-sm-3 col-form-label col-form-label-sm">Address</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" class="form-control form-control-sm" id="client-address" placeholder="XYZ Street" value="405 Mulberry Rd. Mc Grady, NC, 28649">
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label for="client-phone" class="col-sm-3 col-form-label col-form-label-sm">Phone</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" class="form-control form-control-sm" id="client-phone" placeholder="(123) 456 789" value="(128) 666 070">
                                                    </div>
                                                </div>

                                            </div>

                                        </div>


                                    </div>

                                </div>

                                <div class="invoice-detail-terms">

                                    <div class="row justify-content-between">

                                        <div class="col-md-3">

                                            <div class="form-group mb-4">
                                                <label for="number">Invoice Number</label>
                                                <input type="text" class="form-control form-control-sm" id="number" placeholder="#0001" value="#0001">
                                            </div>

                                        </div>

                                        <div class="col-md-3">

                                            <div class="form-group mb-4">
                                                <label for="date">Invoice Date</label>
                                                <input type="text" class="form-control form-control-sm" id="date" placeholder="Add date picker">
                                            </div>
                                        </div>

                                        <div class="col-md-3">
                                            <div class="form-group mb-4">
                                                <label for="due">Due Date</label>
                                                <input type="text" class="form-control form-control-sm" id="due" placeholder="None">
                                            </div>

                                        </div>

                                    </div>

                                </div>


                                <div class="invoice-detail-items">

                                    <div class="table-responsive">
                                        <table class="table item-table">
                                            <thead>
                                                <tr>
                                                    <th class=""></th>
                                                    <th>Description</th>
                                                    <th class="">Rate</th>
                                                    <th class="">Qty</th>
                                                    <th class="text-right">Amount</th>
                                                    <th class="text-center">Tax</th>
                                                </tr>
                                                <tr aria-hidden="true" class="mt-3 d-block table-row-hidden"></tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="delete-item-row">
                                                        <ul class="table-controls">
                                                            <li><a href="javascript:void(0);" class="delete-item" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x-circle"><circle cx="12" cy="12" r="10"></circle><line x1="15" y1="9" x2="9" y2="15"></line><line x1="9" y1="9" x2="15" y2="15"></line></svg></a></li>
                                                        </ul>
                                                    </td>
                                                    <td class="description"><input type="text" class="form-control form-control-sm" placeholder="Item Description" value="Calendar App Customization"> <textarea class="form-control" placeholder="Additional Details">Make Calendar App Dynamic</textarea></td>
                                                    <td class="rate">
                                                        <input type="text" class="form-control form-control-sm" placeholder="Price" value="65">
                                                    </td>
                                                    <td class="text-right qty"><input type="text" class="form-control form-control-sm" placeholder="Quantity" value="1"></td>
                                                    <td class="text-right amount"><span class="editable-amount"><span class="currency">$</span> <span class="amount">120.00</span></span></td>
                                                    <td class="text-center tax">
                                                        <div class="n-chk">
                                                            <div class="form-check form-check-primary form-check-inline me-0 mb-0">
                                                                <input class="form-check-input inbox-chkbox contact-chkbox" type="checkbox">
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td class="delete-item-row">
                                                        <ul class="table-controls">
                                                            <li><a href="javascript:void(0);" class="delete-item" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x-circle"><circle cx="12" cy="12" r="10"></circle><line x1="15" y1="9" x2="9" y2="15"></line><line x1="9" y1="9" x2="15" y2="15"></line></svg></a></li>
                                                        </ul>
                                                    </td>
                                                    <td class="description"><input type="text" class="form-control form-control-sm" placeholder="Item Description" value="Chat App Customization"> <textarea class="form-control" placeholder="Additional Details">Customized Chat Application to resolve some Bug Fixes</textarea></td>
                                                    <td class="rate">
                                                        <input type="text" class="form-control form-control-sm" placeholder="Price" value="25">
                                                    </td>
                                                    <td class="text-right qty"><input type="text" class="form-control form-control-sm" placeholder="Quantity" value="1"></td>
                                                    <td class="text-right amount"><span class="editable-amount"><span class="currency">$</span> <span class="amount">25.00</span></span></td>
                                                    <td class="text-center tax">
                                                        <div class="n-chk">
                                                            <div class="form-check form-check-primary form-check-inline me-0 mb-0">
                                                                <input class="form-check-input inbox-chkbox contact-chkbox" type="checkbox">
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>

                                    <button class="btn btn-dark additem">Add Item</button>

                                </div>


                                <div class="invoice-detail-total">

                                    <div class="row">

                                        <div class="col-md-6">

                                            <div class="form-group row invoice-created-by">
                                                <label for="payment-method-account" class="col-sm-3 col-form-label col-form-label-sm">Account #:</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control form-control-sm" id="payment-method-account" placeholder="Bank Account Number" value="1234567890">
                                                </div>
                                            </div>

                                            <div class="form-group row invoice-created-by">
                                                <label for="payment-method-bank-name" class="col-sm-3 col-form-label col-form-label-sm">Bank Name:</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control form-control-sm" id="payment-method-bank-name" placeholder="Insert Bank Name" value="Bank of America">
                                                </div>
                                            </div>

                                            <div class="form-group row invoice-created-by">
                                                <label for="payment-method-code" class="col-sm-3 col-form-label col-form-label-sm">SWIFT code:</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control form-control-sm" id="payment-method-code" placeholder="Insert Code" value="VS70134">
                                                </div>
                                            </div>

                                            <div class="form-group row invoice-created-by">
                                                <label for="payment-method-country" class="col-sm-3 col-form-label col-form-label-sm">Country:</label>
                                                <div class="col-sm-9">
                                                    <select name="country_code" class="form-select country_code  form-control-sm" id="payment-method-country">
                                                        <option value="">Choose Country</option>
                                                        <option value="Tunisia">Tunisia</option>
                                                        <option value="Vanuatu" selected>Vanuatu</option>
                                                        <option value="Venezuela">Venezuela</option>
                                                        <option value="Vietnam">Vietnam</option>
                                                        <option value="Yemen">Yemen</option>
                                                        <option value="Zambia">Zambia</option>
                                                        <option value="Zimbabwe">Zimbabwe</option>
                                                        </select>
                                                </div>
                                            </div>

                                        </div>

                                        <div class="col-md-6">
                                            <div class="totals-row">
                                                <div class="invoice-totals-row invoice-summary-subtotal">

                                                    <div class="invoice-summary-label">Subtotal</div>

                                                    <div class="invoice-summary-value">
                                                        <div class="subtotal-amount">
                                                            <span class="currency">$</span><span class="amount">145</span>
                                                        </div>
                                                    </div>

                                                </div>


                                                <div class="invoice-totals-row invoice-summary-total">

                                                    <div class="invoice-summary-label">Discount</div>

                                                    <div class="invoice-summary-value">
                                                        <div class="total-amount">
                                                            <span class="currency">$</span><span>10</span>
                                                        </div>
                                                    </div>

                                                </div>

                                                <div class="invoice-totals-row invoice-summary-tax">

                                                    <div class="invoice-summary-label">Tax</div>

                                                    <div class="invoice-summary-value">
                                                        <div class="tax-amount">
                                                            <span>5%</span>
                                                        </div>
                                                    </div>

                                                </div>

                                                <div class="invoice-totals-row invoice-summary-balance-due">

                                                    <div class="invoice-summary-label">Total</div>

                                                    <div class="invoice-summary-value">
                                                        <div class="balance-due-amount">
                                                            <span class="currency">$</span><span>135</span>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                </div>

                                <div class="invoice-detail-note">

                                    <div class="row">

                                        <div class="col-md-12 align-self-center">

                                            <div class="form-group row invoice-note">
                                                <label for="invoice-detail-notes" class="col-sm-12 col-form-label col-form-label-sm">Notes:</label>
                                                <div class="col-sm-12">
                                                    <textarea class="form-control" id="invoice-detail-notes" placeholder='Notes - For example, "Thank you for doing business with us"' style="height: 88px;">Thank you for doing business with us.</textarea>
                                                </div>
                                            </div>

                                        </div>

                                    </div>

                                </div>


                            </div>

                        </div>

                    </div>

                    <div class="col-xl-3">

                        <div class="invoice-actions">

                            <div class="invoice-action-currency">

                                <div class="form-group mb-0">
                                    <label>Currency</label>
                                    <div class="dropdown selectable-dropdown invoice-select">
                                        <a id="currencyDropdown" href="javascript:void(0);" class="dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="assets/src/assets/img/flag-us.svg" class="flag-width" alt="flag"> <span class="selectable-text">USD - US Dollar</span> <span class="selectable-arrow"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg></span></a>
                                        <div class="dropdown-menu" aria-labelledby="currencyDropdown">
                                            <a class="dropdown-item" data-img-value="assets/src/assets/img/flag-us.svg" data-value="USD - US Dollar" href="javascript:void(0);"><img src="assets/src/assets/img/flag-us.svg" class="flag-width" alt="flag"> USD - US Dollar</a>
                                            <a class="dropdown-item" data-img-value="assets/src/assets/img/flag-gbp.svg" data-value="GBP - British Pound" href="javascript:void(0);"><img src="assets/src/assets/img/flag-gbp.svg" class="flag-width" alt="flag"> GBP - British Pound</a>
                                            <a class="dropdown-item" data-img-value="assets/src/assets/img/flag-idr.svg" data-value="IDR - Indonesian Rupiah" href="javascript:void(0);"><img src="assets/src/assets/img/flag-idr.svg" class="flag-width" alt="flag"> IDR - Indonesian Rupiah</a>
                                            <a class="dropdown-item" data-img-value="assets/src/assets/img/flag-inr.svg" data-value="INR - Indian Rupee" href="javascript:void(0);"><img src="assets/src/assets/img/flag-inr.svg" class="flag-width" alt="flag"> INR - Indian Rupee</a>
                                            <a class="dropdown-item" data-img-value="assets/src/assets/img/flag-brl.svg" data-value="BRL - Brazilian Real" href="javascript:void(0);"><img src="assets/src/assets/img/flag-brl.svg" class="flag-width" alt="flag"> BRL - Brazilian Real</a>
                                            <a class="dropdown-item" data-img-value="assets/src/assets/img/flag-de.svg" data-value="EUR - Germany (Euro)" href="javascript:void(0);"><img src="assets/src/assets/img/flag-de.svg" class="flag-width" alt="flag"> EUR - Germany (Euro)</a>
                                            <a class="dropdown-item" data-img-value="assets/src/assets/img/flag-try.svg" data-value="TRY - Turkish Lira" href="javascript:void(0);"><img src="assets/src/assets/img/flag-try.svg" class="flag-width" alt="flag"> TRY - Turkish Lira</a>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="invoice-action-tax">

                                <h5>Tax</h5>

                                <div class="invoice-action-tax-fields">

                                    <div class="row">

                                        <div class="col-6">

                                            <div class="form-group mb-0">
                                                <label>Type</label>

                                                <div class="dropdown selectable-dropdown invoice-tax-select">
                                                    <a id="taxTypeDropdown" href="javascript:void(0);" class="dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <span class="selectable-text">On Total</span> <span class="selectable-arrow"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg></span></a>
                                                    <div class="dropdown-menu" aria-labelledby="taxTypeDropdown">
                                                        <a class="dropdown-item" data-value="Deducted" href="javascript:void(0);">Deducted</a>
                                                        <a class="dropdown-item" data-value="Per Item" href="javascript:void(0);">Per Item</a>
                                                        <a class="dropdown-item" data-value="On Total" href="javascript:void(0);">On Total</a>
                                                        <a class="dropdown-item" data-value="None" href="javascript:void(0);">None</a>
                                                    </div>
                                                </div>

                                            </div>

                                        </div>

                                        <div class="col-6">
                                            <div class="form-group mb-0 tax-rate-deducted" style="display: none;">
                                                <label for="rate1">Rate (%)</label>
                                                <input type="number" class="form-control input-rate" id="rate1" placeholder="Rate" value="10">
                                            </div>

                                            <div class="form-group mb-0 tax-rate-per-item" style="display: none;">
                                                <label for="rate2">Rate (%)</label>
                                                <input type="number" class="form-control input-rate" id="rate2" placeholder="Rate" value="5">
                                            </div>

                                            <div class="form-group mb-0 tax-rate-on-total">
                                                <label for="rate3">Rate (%)</label>
                                                <input type="number" class="form-control input-rate" id="rate3" placeholder="Rate" value="25">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>


                            <div class="invoice-action-discount">

                                <h5>Discount</h5>

                                <div class="invoice-action-discount-fields">

                                    <div class="row">

                                        <div class="col-6">
                                            <div class="form-group mb-0">
                                                <label>Type</label>

                                                <div class="dropdown selectable-dropdown invoice-discount-select">
                                                    <a id="discountTypeDropdown" href="javascript:void(0);" class="dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <span class="selectable-text">Flat Amount</span> <span class="selectable-arrow"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg></span></a>
                                                    <div class="dropdown-menu" aria-labelledby="discountTypeDropdown">
                                                        <a class="dropdown-item" data-value="Percent" href="javascript:void(0);">Percent</a>
                                                        <a class="dropdown-item" data-value="Flat Amount" href="javascript:void(0);">Flat Amount</a>
                                                        <a class="dropdown-item" data-value="None" href="javascript:void(0);">None</a>
                                                    </div>
                                                </div>

                                            </div>

                                        </div>

                                        <div class="col-6">
                                            <div class="form-group mb-0 discount-amount">
                                                <label for="rated1">Amount</label>
                                                <input type="number" class="form-control input-rate" id="rated1" placeholder="Rate" value="25">
                                            </div>

                                            <div class="form-group mb-0 discount-percent" style="display: none;">
                                                <label for="rated2">Percent</label>
                                                <input type="number" class="form-control input-rate" id="rated2" placeholder="Rate" value="10">
                                            </div>
                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>

                        <div class="invoice-actions-btn">

                            <div class="invoice-action-btn">

                                <div class="row">
                                    <div class="col-xl-12 col-md-4">
                                        <a href="javascript:void(0);" class="btn btn-primary btn-send">Send Invoice</a>
                                    </div>
                                    <div class="col-xl-12 col-md-4">
                                        <a href="./app-invoice-preview.html" class="btn btn-secondary btn-preview">Preview</a>
                                    </div>
                                    <div class="col-xl-12 col-md-4">
                                        <a href="javascript:void(0);" class="btn btn-success btn-download">Save</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--  BEGIN FOOTER  -->
    <div class="footer-wrapper">
        <div class="footer-section f-section-1">
            <p class="">Copyright © <span class="dynamic-year">2023</span> <a target="_blank" href="/index">ENIGMA</a>, All rights reserved.</p>
        </div>
    </div>
    <!--  END FOOTER  -->

    <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
    <script src="assets/src/plugins/src/global/vendors.min.js"></script>
    <script src="assets/src/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/src/plugins/src/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="assets/src/plugins/src/mousetrap/mousetrap.min.js"></script>
    <script src="assets/src/plugins/src/waves/waves.min.js"></script>
    <script src="assets/layouts/vertical-dark-menu/app.js"></script>
    <!-- END GLOBAL MANDATORY SCRIPTS -->

    <script src="assets/src/plugins/src/filepond/filepond.min.js"></script>
    <script src="assets/src/plugins/src/filepond/FilePondPluginFileValidateType.min.js"></script>
    <script src="assets/src/plugins/src/filepond/FilePondPluginImageExifOrientation.min.js"></script>
    <script src="assets/src/plugins/src/filepond/FilePondPluginImagePreview.min.js"></script>
    <script src="assets/src/plugins/src/filepond/FilePondPluginImageCrop.min.js"></script>
    <script src="assets/src/plugins/src/filepond/FilePondPluginImageResize.min.js"></script>
    <script src="assets/src/plugins/src/filepond/FilePondPluginImageTransform.min.js"></script>
    <script src="assets/src/plugins/src/filepond/filepondPluginFileValidateSize.min.js"></script>

    <script src="assets/src/plugins/src/flatpickr/flatpickr.js"></script>
    <script src="assets/src/assets/js/apps/invoice-edit.js"></script>
@endsection
