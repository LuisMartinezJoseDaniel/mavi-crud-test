import $ from "jquery";
import { renderErrors } from "../helpers/renderErrors";

$(function () {
    $("#login").on("submit", function (e) {
        e.preventDefault();
        const dataForm = $("#login").serialize();

        $.ajax({
            type: "POST",
            url: "/login",
            dataType: "json",
            data: dataForm,
        })
            .done(function (data) {
                window.location.replace("/customers");
            })
            .fail( function ( error ) {

                const errors = error.responseJSON?.errors;
                const message = error.responseJSON?.message;

                if (errors) {
                    renderErrors(errors);
                }
                if (message) {
                    renderErrors([message]);
                }
            });
    });
});
