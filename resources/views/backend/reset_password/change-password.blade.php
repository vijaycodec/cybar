@extends('backend.layouts.app')
<style>
    .custom-padding {
        padding-left: 200px;
    position: relative;
    top: -20px; /* Moves text up */
    color: red;
}

</style>
@section('content')
    <div class="main-content-inner">
        <div class="main-content-wrap">
            <div class="flex items-center flex-wrap justify-between gap20 mb-27">
                <h3>Change Password</h3>
            </div>

            <div class="wg-box">
                <form id="change-password-form" class="form-new-brand form-style-1" method="POST">
                    @csrf
                    <a class="tf-button style-1 w208" style="padding-left: 75px;" href="{{ route('admin.dashboard') }}">
                        Back</a>

                    <fieldset class="name">
                        <div class="body-title">Current Password <span class="tf-color-1">*</span></div>
                        <input type="password" id="current_password" class="form-control alert alert-danger" placeholder="Current Password" name="current_password"> 
                    </fieldset>
                    <span id="current_password-error" class="text-danger custom-padding"></span>


                    <fieldset class="name">
                        <div class="body-title  ">New Password <span class="tf-color-1">*</span></div>
                        <input type="password" id="new_password" class="form-control" placeholder="New Password" name="new_password">
                    </fieldset>
                    <span id="new_password-error" class="text-danger custom-padding"></span>

                    <fieldset class="name">
                        <div class="body-title">Confirm New Password <span class="tf-color-1">*</span></div>
                        <input type="password" id="confirm_password" class="form-control" placeholder="Confirm New Password" name="confirm_password">
                    </fieldset>
                    <span id="confirm_password-error" class="text-danger custom-padding"></span>

                    <div class="bot">
                        <div></div>
                        <button class="tf-button w208" type="submit">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
<script>
   $(document).ready(function() {
    $("#change-password-form").submit(function(event) {
        event.preventDefault(); // Prevent default form submission

        let isValid = true;
        $(".text-danger").text("").hide(); // Clear previous errors

        // Current Password Validation (Min 6 characters)
        let currentPassword = $("#current_password").val().trim();
        if (currentPassword.length < 8) {
            $("#current_password-error").text("Current password must be at least 8 characters.").show();
            isValid = false;
        }

        // New Password Validation (Min 8 characters, must include letter, number, and special character)
        let newPassword = $("#new_password").val().trim();
        let passwordPattern = /^(?=.*[A-Za-z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/;
        if (!passwordPattern.test(newPassword)) {
            $("#new_password-error").text(
                "New password must be 8 chars with a letter, number & special character."
            ).show();
            isValid = false;
        }

        // Confirm Password Validation (Must match new password)
        let confirmPassword = $("#confirm_password").val().trim();
        if (confirmPassword === "") {
            $("#confirm_password-error").text("Confirm password is required.").show();
            isValid = false;
        } else if (confirmPassword !== newPassword) {
            $("#confirm_password-error").text("Confirm password does not match the new password.").show();
            isValid = false;
        }

        // If all validations pass, submit form via AJAX
        if (isValid) {
            $.ajax({
                url: "{{ route('password.update') }}",
                type: "POST",
                data: $("#change-password-form").serialize(),
                dataType: "json",
                headers: {
                    "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content") // CSRF token for security
                },
                beforeSend: function() {
                    $("button[type=submit]").attr("disabled", true).text("Updating...");
                },
                success: function(response) {
                    if (response.success) {
                        Swal.fire({
                            title: "Success!",
                            text: response.message,
                            icon: "success",
                            confirmButtonText: "OK"
                        }).then(() => {
                            $("#change-password-form")[0].reset();
                            window.location.headers.location =
                        });
                    } else {
                        Swal.fire({
                            title: "Error!",
                            text: response.message || "Something went wrong. Please try again.",
                            icon: "error",
                            confirmButtonText: "OK"
                        });
                    }
                },
                error: function(xhr) {
                    Swal.fire({
                        title: "Error!",
                        text: "An error occurred: " + xhr.responseText,
                        icon: "error",
                        confirmButtonText: "OK"
                    });
                },
                complete: function() {
                    $("button[type=submit]").attr("disabled", false).text("Update");
                }
            });
        }
    });
});

</script>
@endpush
