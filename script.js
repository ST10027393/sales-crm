const nextBtns = document.querySelectorAll('.btn-next');
const progress = document.getElementById('progress');
const formSteps = document.querySelectorAll('.form-step');
const progressSteps = document.querySelectorAll('.progress-step');
const saveButtons = document.querySelectorAll('.btn-save');
const lostButtons = document.querySelectorAll('.btn-lost');
const promoteButtons = document.querySelectorAll('.btn-next');
const saveMessage = document.getElementById('saveMessage');

let formStepsNum = 0;
let isSaveClicked = false;

nextBtns.forEach((btn, index) => {
    btn.addEventListener('click', () => {
        if (formStepsNum === 0 && !isSaveClicked) {
            // If at the Lead stage and Save button hasn't been clicked, show a message
            saveMessage.textContent = 'Please save your work before proceeding.';
            return;
        } else if (formStepsNum !== 0 && !isSaveClicked) {
            // If at the Opportunity stage and Save button hasn't been clicked, show a message
            saveMessage.textContent = 'Please save your work before proceeding.';
            return;
        }
        formStepsNum++;
        updateFormSteps();
        updateProgressbar();
    });

    // Add click event listener to "Save" button to mark it as clicked and display a message
    saveButtons[index].addEventListener('click', (e) => {
        e.preventDefault();
        saveButtons[index].classList.add('clicked');
        isSaveClicked = true;
        saveMessage.textContent = 'Your work has been saved.';
        // Enable Lost and Promote buttons
        enableDisableButtons();
    });

    // Add click event listener to "Lost" buttons
    lostButtons[index].addEventListener('click', (e) => {
        e.preventDefault();
        if (formStepsNum === 0 && !isSaveClicked) {
            // If at the Lead stage and Save button hasn't been clicked, show a message
            saveMessage.textContent = 'Please save your work before proceeding.';
        } else if (formStepsNum !== 0 && !isSaveClicked) {
            saveMessage.textContent = 'Please save your work before proceeding.';
        }
    });

    // Add click event listener to "Promote" button to change the colors
    promoteButtons[index].addEventListener('click', (e) => {
        e.preventDefault();
        if (formStepsNum === 0 && !isSaveClicked) {
            // If at the Lead stage and Save button hasn't been clicked, show a message
            saveMessage.textContent = 'Please save your work before proceeding.';
        } else if (formStepsNum !== 0 && !isSaveClicked) {
            saveMessage.textContent = 'Please save your work before proceeding.';
        } else {
            progressSteps[formStepsNum - 1].classList.add('completed');
            progressSteps[formStepsNum - 1].classList.remove('active'); // Remove the active class
            progressSteps[formStepsNum - 1].style.backgroundColor = 'var(--primary-red)';
            updateProgressbar();
        }
    });
});

function updateFormSteps() {
    formSteps.forEach(formStep => {
        formStep.classList.contains('active') &&
            formStep.classList.remove('active');
    });
    formSteps[formStepsNum].classList.add('active');

    enableDisableButtons();
}

function updateProgressbar() {
    progressSteps.forEach((progressStep, idx) => {
        if (idx < formStepsNum + 1) {
            progressStep.classList.add('active');
        } else {
            progressStep.classList.remove('active');
        }
    });

    const progressActive = document.querySelectorAll('.progress-step.active');

    progress.style.width = (progressActive.length - 1) / (progressSteps.length - 1) * 100 + '%';

    enableDisableButtons();
}

function enableDisableButtons() {
    if (formStepsNum === 0) {
        lostButtons.forEach(btn => (btn.disabled = true));
        promoteButtons.forEach(btn => (btn.disabled = true));
    } else {
        if (isSaveClicked) {
            lostButtons.forEach(btn => (btn.disabled = false));
            promoteButtons.forEach(btn => (btn.disabled = false));
        }
    }
}
