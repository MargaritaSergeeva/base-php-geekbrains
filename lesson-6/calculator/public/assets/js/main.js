let calculated = {
    main: function (value_1, value_2, getValue) {

        const errorElement = document.querySelector('#error');
        const successElement = document.querySelector('#success');

        const form_data = new FormData();

        form_data.append('operation', getValue);
        form_data.append('value_1', value_1);
        form_data.append('value_2', value_2);

        axios.post('./init.php', form_data).then((resp) => {
            errorElement.innerHTML = ''
            successElement.innerHTML = `Ответ: ${resp.data}`
        }, (error) => {
            successElement.innerHTML = '';
            errorElement.innerHTML = `Error: ${error.response.data}`
        })
    },
}


$(document).ready(() => {
    $('button[type=submit]').click((evt) => {
        let value_1 = document.getElementById("value-1").value;
        let value_2 = document.getElementById("value-2").value;
        let getOperation = document.getElementById("select");
        let getOperationValue = getOperation.options[getOperation.selectedIndex].value

        if (value_1.length != 0 && value_2.length != 0 && getOperationValue) {
            evt.preventDefault();
            calculated.main(value_1, value_2, getOperationValue);
        }
    })
});