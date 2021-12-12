class Validation
{
    constructor(errors) {

        this.errors = errors;
    }

    cleanValidationFields()
    {
        const fields = document.querySelectorAll('.is-invalid');
        const errorMessages = document.querySelectorAll('.invalid-feedback');

        fields.forEach(field => field.classList.remove('is-invalid'));
        errorMessages.forEach(errorMessage => errorMessage.remove());
    }

    showErrorMessages()
    {
        for (const field in this.errors) {

            const element = $(`#${field}`)
            const parent = element.parent();
            parent.append(`
                <small id="invalid-feedback-${field}" class="invalid-feedback">
                    ${this.errors[field]}
                </smal>
            `);

            element.addClass('is-invalid');
        }
    }
}
