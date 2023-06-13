import $ from "jquery";
import { renderErrors } from "../helpers/renderErrors";

$(function () {
    $("#customersFormUpdate").on("submit", function (e) {
        e.preventDefault();
        const id = $( "#customerId" ).val();
        const dataForm = $( "#customersFormUpdate" ).serialize();

        const url = `/customers/${id}`;

        $.ajaxSetup({
            headers: {
                "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
            },
        });

        $.ajax({
            type: "PUT",
            url,
            dataType: "json",
            data: dataForm,
        })
            .done(function (data) {
                window.location.replace('/customers')
            })
            .fail(function (error) {
                const errors = error.responseJSON?.errors;

                renderErrors(errors);
            });
    });
});
