import $ from "jquery";
import { getCustomers } from "./getCustomers";

$(function () {
    $.ajaxSetup({
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },
    } );

    getCustomers();



    $("body").on("click", "#btnEliminar", function (e) {
        e.preventDefault();
        const id = $(this).data("id");

        const isConfirmed = confirm(
            `¿Deseas eliminar el registro con el [id] = ${id} ?`
        );

        if (!isConfirmed) return;

        $.ajax({
            type: "DELETE",
            url: `/customers/${id}`,
            dataType: "json",
        }).done(function (data) {

            getCustomers(); //Retornar data sin recargar

        });
    } );



});
