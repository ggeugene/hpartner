window.addEventListener('load', function() {
    let counters = document.querySelectorAll('.percent-value');

    for(let i = 1; i < counters.length; i++) {
        let prevContent = counters[i].outerHTML;
        let ancestor = counters[i].closest('p');
        ancestor.innerHTML = prevContent + '<span class="super-text">к</span>';
    }

    let popButtons = document.querySelectorAll('.price_row .fancybox');

    popButtons.forEach((item, index) => {
        item.addEventListener('click', function() {

            setProcedureInput(item);

        })
    });

});

function setProcedureInput(item) {

    let procedureInput = document.querySelector('input[name=procedure]');
    let value = item.closest('.price_row').children[1].querySelector('p');

    procedureInput.value = value.innerHTML;
    procedureInput.disabled = true;

}
