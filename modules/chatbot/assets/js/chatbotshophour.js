import {Form} from "./form";
import {vars} from './vars';

export const ChatbotShopHour = {
    disabledFieldForm(checkboxStatus, formInputs) {
        for (const formInput of formInputs) {
            if (formInput.type !== 'hidden' && formInput.type !== 'checkbox') {
                if (formInput.type === 'textarea') {
                    if (checkboxStatus === true) {
                        document.getElementById('block_' + formInput.id).classList.remove("d-none");
                    } else {
                        document.getElementById('block_' + formInput.id).classList.add("d-none");
                    }

                    formInput.disabled = checkboxStatus === true ? false : true;
                } else {
                    formInput.disabled = checkboxStatus === true ? false : true;
                }
            }
        }
    },
    changeHour() {
        const inputs = Form.getAllFieldForm();
        for (const input of inputs) {
            input.addEventListener('change', function (event) {
                let formActive = event.currentTarget.closest('form');
                let data = Form.getFormData(formActive);

                if (event.currentTarget.type === 'checkbox') {
                    if (event.currentTarget.checked === true) {
                        const formInputs = formActive.querySelectorAll(vars.inputClass);
                        ChatbotShopHour.disabledFieldForm(true, formInputs)
                    } else {
                        const formInputs = formActive.querySelectorAll(vars.inputClass);
                        ChatbotShopHour.disabledFieldForm(false, formInputs)
                    }
                }
            });
        }
    }
};
