import $ from "jquery";
export const getCustomers = () => {
    $.ajax({
        type: "GET",
        url: "getCustomers",
        dataType: "json",
    }).done(function ({ data }) {
        const tableBody = $( "#customersTableBody" );
        tableBody.html( '' );
        data.forEach((customer) => {
            const row = `
                <tr class="border-b border-gray-200 dark:border-gray-700">
                    <td class="px-6 py-4">${customer.nombres}</td>
                    <td class="px-6 py-4">${customer.apellido_paterno}</td>
                    <td class="px-6 py-4">${customer.apellido_materno}</td>
                    <td class="px-6 py-4">${customer.domicilio}</td>
                    <td class="px-6 py-4">${customer.correo}</td>
                    <td class="px-6 py-4">
                        <div class="flex flex-wrap justify-between items-center gap-2">
                            <a href="/customers/${customer.id}/edit" data-id=${customer.id}
                                class="bg-amber-500 px-4 py-2 rounded text-white block"
                            >
                                Editar
                            </a>
                            <a href="#" data-id="${customer.id}" id="btnEliminar"
                                class="bg-red-500 px-4 py-2 rounded text-white block"
                            >Eliminar </a>
                        </div>
                    </td>

                </tr>
            `;
            tableBody.append(row);
        });
    });
};
