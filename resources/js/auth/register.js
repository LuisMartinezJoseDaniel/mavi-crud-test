import $ from "jquery";
import { renderErrors } from "../helpers/renderErrors";

$( function () {


    $("#register").on("submit", function (e) {
        e.preventDefault();
        const dataForm = $("#register").serialize();

        $.ajax({
            type: "POST",
            url: "/register",
            dataType: "json",
            data: dataForm
        }).done( function ( data ) {
           
                window.location.replace("/customers");
            })
            .fail(function (error) {
                const errors = error.responseJSON?.errors;

                if ( errors ) {
                    renderErrors(errors);
                }
            });
    } );

});
