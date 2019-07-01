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
