let current_question_index = 0

document.addEventListener('DOMContentLoaded', get_questions)
document.addEventListener('click', clicado)

function get_questions() {
    const QUESTION_CARD = document.getElementById('question-card')
    const QUESTION_ELEMENT = document.querySelector('question')
    const OPTIONS = document.querySelectorAll('input[type=radio]')
    const OPTIONS_LABELS = document.querySelectorAll('label')
    const BUTTON = document.getElementById('submit')
    const RESULT_DIV = document.getElementById('result')
    let questions = []
    console.log('oi')
    console.log(fetch('get_questions.php'))

    // fetch('get_questions.php').then(response => response.json()).then(data => {
    //     questions = data
    //     show_questions()
    //})

}

function show_questions() {
    if (current_question_index < questions.length) {
        const QUESTION = questions[current_question_index]
        QUESTION_ELEMENT.textContent = QUESTION.question
        OPTIONS_LABELS[0].textContent = QUESTION.option1
        OPTIONS_LABELS[1].textContent = QUESTION.option2
        OPTIONS_LABELS[2].textContent = QUESTION.option3
        OPTIONS_LABELS[3].textContent = QUESTION.option4
    }
    else {
        show_result()
    }
}

function show_result() {
    RESULT_DIV.textContent = 'Fim do Quiz'
}

function clicado() {
    const SELECT_OPTION = document.querySelector('input[name=option]:checked')
    if (SELECT_OPTION) {
        const ANSWER = SELECT_OPTION.nextElementSibling.textContent
        current_question_index++
        show_questions()
    }
    else {
        alert('Selecione uma opção antes de enviar')
    }
}