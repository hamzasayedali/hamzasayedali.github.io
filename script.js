var buttons = document.querySelectorAll('button');
buttons.forEach(function(button) {
    button.addEventListener('click', function() {
        setActiveButton(button);
        showOnlyOneDiv(button.getAttribute('data-target'));
    });
});

function setActiveButton(selectedButton) {
    buttons.forEach(function(button) {
        button.classList.remove('active');
    });
    selectedButton.classList.add('active');
}

function showOnlyOneDiv(divIdToShow) {
    var allDivs = ['div1', 'div2', 'div3'];

    allDivs.forEach(function(divId) {
        var div = document.getElementById(divId);
        if (divId === divIdToShow) {
            div.style.display = 'block';
        } else {
            div.style.display = 'none';
        }
    });
}