import $ from "jquery";
export const renderErrors = (errors, containerName = "#errorsContainer") => {

    const errorsContainer = $(containerName);
    let errorsList = "";

    for (const error in errors) {
        errorsList += `<p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">${errors[error]}</p>`;
    }

    errorsContainer.html(errorsList);
};
