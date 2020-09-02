import {vars} from './vars';

export const Form = {
    getAllFieldForm() {
        return document.querySelectorAll(vars.inputClass);
    },
    getFormData(formActive) {
        return new FormData(formActive);
    },
    submitForm(request) {}
};
