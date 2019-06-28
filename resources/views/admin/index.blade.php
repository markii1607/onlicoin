@extends('master')
@section('content')
@include('admin.header')
<div class="container w-index">
    <div class="row">
        <div class="col-sm-4">
            <div class="card-box">
                <h5 class="m-t-0 m-b-30 panel-name">Current Balance</h5>
                <div class="row">
                    <p class="text-center current-value"><b>0</b></p>
                    <h3 class="text-center current-bal">OCT</h3>
                </div>
                <div class="row">
                    <div class="col-sm-4 text-center">2,888.00</div>
                    <div class="col-sm-4 text-center">0.00012</div>
                    <div class="col-sm-4 text-center">0.12345</div>
                </div>
                <div class="row">
                    <div class="col-sm-4 text-center">PHP</div>
                    <div class="col-sm-4 text-center">BTC</div>
                    <div class="col-sm-4 text-center">ETH</div>
                </div>
                <div class="row cin-cout-btn">
                    <div class="col-sm-6">
                        <a href="{{ route('auth-cin_remittance') }}"><button class=" btn btn-primary inline-block">COIN
                                IN</button></a>
                    </div>
                    <div class="col-sm-6">
                        <a href="{{ route('auth-cout_remittance') }}"><button class=" btn btn-primary inline-block">COIN
                                OUT</button></a>
                    </div>
                </div>
            </div>
            <div class="card-box">
                <h5 class="m-t-0 m-b-30 panel-name">Verification</h5>
                {{ csrf_field() }}
                <div id="verification-requests-container">
                    @unless($verification_requests->count())
                    No Verification Requests
                    @else
                    <ul>
                        @foreach($verification_requests as $verification_request)
                        <li>
                            {{ $verification_request->verification_requests->first_name . " " . $verification_request->verification_requests->middle_name . " " . $verification_request->verification_requests->last_name }} wants to verify your account.
                            <button class="btn btn-danger verification-request-button decline-verification-request" data-id="{{ $verification_request->id }}" data-name="{{ $verification_request->verification_requests->first_name . ' ' . $verification_request->verification_requests->middle_name . ' ' . $verification_request->verification_requests->last_name }}">Decline</button>
                            <button class="btn btn-default verification-request-button approve-verification-request" data-id="{{ $verification_request->id }}" data-name="{{ $verification_request->verification_requests->first_name . ' ' . $verification_request->verification_requests->middle_name . ' ' . $verification_request->verification_requests->last_name }}">Approve</button>
                        </li>
                        @endforeach
                    </ul>
                    @endunless
                </div>
                <button class="btn btn-default verification-request-button" id="verification-request-prompt">Verify an Account</button>
            </div>
        </div>

        <div class="col-sm-8">
            <div class="card-box">
                <h5 class="m-t-0 m-b-30 panel-name">Account Balance</h5>
                <div class="row">
                    <table class="table table-bordered tbl">
                        <tr>
                            <td>
                                <p>Current Account</p>
                            </td>
                            <td>
                                <p>0 OCT</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>Subscription Amount</p>
                            </td>
                            <td>
                                <p>200.0687 OCT</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>Manage Fund</p>
                            </td>
                            <td>
                                <p>0 OCT</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>TOTAL</p>
                            </td>
                            <td>
                                <p>200.0687 OCT</p>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>

            <div class="card-box">
                <h5 class="m-t-0 m-b-30 panel-name">Recent Activity</h5>
                <table class="table table-bordered tbl">
                    <tbody>
                        <tr>
                            <td>
                                <p>Date</p>
                            </td>
                            <td>
                                <p>Remarks</p>
                            </td>
                            <td>
                                <p>Amount</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>APR 21 2019</p>
                            </td>
                            <td>
                                <p>Received OCT from ismael</p>
                            </td>
                            <td>
                                <p>+0.80 OCT</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>APR 21 2019</p>
                            </td>
                            <td>
                                <p>Received OCT from ismael</p>
                            </td>
                            <td>
                                <p>+0.80 OCT</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>APR 21 2019</p>
                            </td>
                            <td>
                                <p>Received OCT from ismael</p>
                            </td>
                            <td>
                                <p>+0.80 OCT</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>APR 21 2019</p>
                            </td>
                            <td>
                                <p>Received OCT from ismael</p>
                            </td>
                            <td>
                                <p>+0.80 OCT</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>APR 21 2019</p>
                            </td>
                            <td>
                                <p>Received OCT from ismael</p>
                            </td>
                            <td>
                                <p>+0.80 OCT</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>APR 21 2019</p>
                            </td>
                            <td>
                                <p>Received OCT from ismael</p>
                            </td>
                            <td>
                                <p>+0.80 OCT</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>APR 21 2019</p>
                            </td>
                            <td>
                                <p>Received OCT from ismael</p>
                            </td>
                            <td>
                                <p>+0.80 OCT</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>APR 21 2019</p>
                            </td>
                            <td>
                                <p>Received OCT from ismael</p>
                            </td>
                            <td>
                                <p>+0.80 OCT</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>APR 21 2019</p>
                            </td>
                            <td>
                                <p>Received OCT from ismael</p>
                            </td>
                            <td>
                                <p>+0.80 OCT</p>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

        </div>
    </div>
</div>

<div class="modal fade" id="modal-verification-approval-warning" tabindex="-1" role="dialog" aria-hidden="true" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog modal-success" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Warning</h5>
            </div>
            <div class="modal-body">
                Are you sure you want to approve <span id="verification-requester"></span>'s verification request.
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                <form method="POST" action="/user_verifications/1/update">
                    <button type="button" class="btn btn-danger">Approve</button>
                </form>
            </div>
        </div>
    </div>
</div>

@include('admin.footer-inside')
@stop
@section('styles')
    <style>
        .footer{
            padding: 20px;
        }
        .footer ul li a{
            color: #fff;
        }
    </style>
@stop
@section('scripts')
    <script>
        $(document).ready(function () {
            var load_verification_requests = function(verification_requests) {
                var content = '';
                
                if(verification_requests.length) {
                    content += '    <ul>';
                    verification_requests.forEach(function(item, index) {
                        content += '    <li>';
                        content +=          item.verification_requests.first_name + ' ' + item.verification_requests.last_name + ' wants to verify your account.';
                        content += '        <button class="btn btn-danger verification-request-button decline-verification-request" data-id="' + item.id + '" data-name="' + item.verification_requests.first_name + ' ' + item.verification_requests.last_name + '">Decline</button>';
                        content += '        <button class="btn btn-default verification-request-button approve-verification-request" data-id="' + item.id + '" data-name="' + item.verification_requests.first_name + ' ' + item.verification_requests.last_name + '">Approve</button>';
                        content += '    </li>';
                    });
                    content += '    </ul>';
                } else {
                    content += "No Verification Requests";
                }
                
                $("#verification-requests-container").html(content);
            };

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                } 
            });

            $(document).on("click", "#verification-request-prompt", function() {
                alertify.prompt("Verify an Account", "Account's email address", "",
                    function(evt, value) {
                        $(".verification-request-button").prop("disabled", true);
                        alertify.set('notifier', 'position', 'bottom-left');
                        alertify.notify('Submitting verification request...', 'warning', 1000, function() {});

                        $.ajax({
                            method: "POST",
                            url: "{{ url('/verifications-create') }}",
                            data: {
                                email: value
                            }
                        }).done(function(response) {
                            if(response.error == "") {
                                alertify.dismissAll();
                                alertify.notify("Verification request successfully submitted to " + response.user_to_be_verified + ".", "success");
                            } else {
                                alertify.dismissAll();
                                alertify.notify(response.error, "error");
                            }
                        }).fail(function() {
                            alertify.dismissAll();
                            alertify.notify("Cannot connect to server.", "error");
                        }).always(function() {
                            $(".verification-request-button").prop("disabled", false);
                        });
                    }, function() { });
            });

            $(document).on("click", ".approve-verification-request", function() {
                var id = $(this).attr("data-id");
                var name = $(this).attr("data-name");
                
                alertify.confirm("Confirm Verification Request Approval", "Are you sure you want to approve " + name + "'s verification request?", function() {
                    $(".verification-request-button").prop("disabled", true);
                    alertify.set('notifier', 'position', 'bottom-left');
                    alertify.notify('Approving verification request...', 'warning', 1000, function() {});

                    $.ajax({
                        method: "POST",
                        url: "{{ url('/verifications-approve') }}",
                        data: {
                            _token: $('meta[name="_token"]').attr('content'),
                            id: id
                        }
                    }).done(function(response) {
                        if(response.error == "") {
                            load_verification_requests(response.verification_requests);
                            
                            alertify.dismissAll();
                            alertify.success("Verification request successfully approved.");
                        } else {
                            alertify.dismissAll();
                            alertify.notify(response.error, "error");
                        }
                    }).fail(function() {
                        alertify.dismissAll();
                        alertify.notify("Cannot connect to server.", "error");
                    }).always(function() {
                        $(".verification-request-button").prop("disabled", false);
                    });
                }, function() {});
            });

            $(document).on("click", ".decline-verification-request", function() {
                var id = $(this).attr("data-id");
                var name = $(this).attr("data-name");
                
                alertify.confirm("Confirm Verification Request Approval", "Are you sure you want to decline " + name + "'s verification request?", function() {
                    $(".verification-request-button").prop("disabled", true);
                    alertify.set('notifier', 'position', 'bottom-left');
                    alertify.notify('Declining verification request...', 'warning', 1000, function() {});

                    $.ajax({
                        method: "POST",
                        url: "{{ url('/verifications-decline') }}",
                        data: {
                            _token: $('meta[name="_token"]').attr('content'),
                            id: id
                        }
                    }).done(function(response) {
                        if(response.error == "") {
                            load_verification_requests(response.verification_requests);

                            alertify.dismissAll();
                            alertify.success("Verification request successfully declined.");
                        } else {
                            alertify.dismissAll();
                            alertify.notify(response.error, "error");
                        }
                    }).fail(function() {
                        alertify.dismissAll();
                        alertify.notify("Cannot connect to server.", "error");
                    }).always(function() {
                        $(".verification-request-button").prop("disabled", false);
                    });
                }, function() {});
            });
        });
    </script>
@stop