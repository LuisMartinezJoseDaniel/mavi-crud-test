import $ from "jquery";
import { renderErrors } from "../helpers/renderErrors";

$(function () {
    let errors = {};

    $("#customersForm").on("submit", function (e) {
        e.preventDefault();
        const dataForm = $("#customersForm").serialize();

        $.ajax({
            type: "POST",
            url: "/customers",
            dataType: "json",
            data: dataForm,
        })
            .done(function (data) {
                window.location.replace('/customers')
            })
            .fail(function (error) {
                const errors = error.responseJSON?.errors;

                renderErrors(errors)
            });
    });
});
