function sendMessage() {
    var formData = JSON.stringify($("#contact-form").serializeArray());
    console.log(formData);
}

function validate() {
    let name = document.getElementById('name');
    let email = document.getElementById('email');
    let subject = document.getElementById('subject');
    let message = document.getElementById('message');

    let forName = document.getElementById('forName');
    let forEmail = document.getElementById('forEmail');
    let forSubject = document.getElementById('forSubject');
    let forMessage = document.getElementById('forMessage');
    let problem = document.querySelector('input[name="problem"]:checked').value;
    
    let nameRegex = /^[a-zA-Z -]+$/
    let emailRegex = /^\S+@\S+\.\S+$/
    let subjectRegex = /[A-Za-z0-9 -]/

    let isError = false

    if (name.value == '' || !nameRegex.test(name.value)) {
        forName.innerHTML = 'Podaj właściwe imię!'
        forName.style = 'color: red'
        isError = true
    } else {
        forName.innerHTML = 'Imię'
        forName.style = 'color: black'
    }

    if (email.value == '' || !emailRegex.test(email.value)) {
        forEmail.innerHTML = 'Podaj właściwy email!'
        forEmail.style = 'color: red'
        isError = true
    } else {
        forEmail.innerHTML = 'Email'
        forEmail.style = 'color: black'
    }

    if (subject.value == '' || !subjectRegex.test(subject.value)) {
        forSubject.innerHTML = 'Podaj właściwy temat!'
        forSubject.style = 'color: red'
        isError = true
    } else {
        forSubject.innerHTML = 'Temat'
        forSubject.style = 'color: black'
    }

    if (message.value == '') {
        forMessage.innerHTML = 'Podaj właściwą wiadomość!'
        forMessage.style = 'color: red'
        isError = true
    } else {
        forMessage.innerHTML = 'Opis'
        forMessage.style = 'color: black'
    }

    if(!isError) {
        alert(
            name.value + ', ' + email.value + ', ' + problem + ', ' + subject.value + ', ' + message.value
        )
        document.getElementById("contact-form").submit();
    }
    return;
}

function validateAddress() {
    let name = document.getElementById('name');
    let surname = document.getElementById('surname');
    let companyName = document.getElementById('companyName');
    let address = document.getElementById('address');
    let email = document.getElementById('email');
    let number = document.getElementById('number');
    let info = document.getElementById('info');

    let forName = document.getElementById('forName');
    let forSurname = document.getElementById('forSurname');
    let forCompanyName = document.getElementById('forCompanyName');
    let forAddress = document.getElementById('forAddress');
    let forEmail = document.getElementById('forEmail');
    let forNumber = document.getElementById('forNumber');
    let forInfo = document.getElementById('forInfo');
    
    let nameRegex = /^[a-zA-Z -]+$/
    let emailRegex = /^\S+@\S+\.\S+$/
    let subjectRegex = /[A-Za-z0-9 -]/
    let addressRegex = /[A-Za-z0-9'\.\-\s\,]/
    let numberRegex = /[0-9]/

    let isError = false

    if (name.value == '' || !nameRegex.test(name.value)) {
        forName.innerHTML = 'Podaj właściwe imię!'
        forName.style = 'color: red'
        isError = true
    } else {
        forName.innerHTML = 'Imię'
        forName.style = 'color: black'
    }

    if (surname.value == '' || !nameRegex.test(surname.value)) {
        forSurname.innerHTML = 'Podaj właściwe nazwisko!'
        forSurname.style = 'color: red'
        isError = true
    } else {
        forSurname.innerHTML = 'Nazwisko'
        forSurname.style = 'color: black'
    }

    if (companyName.value != '' && !nameRegex.test(companyName.value)) {
        forCompanyName.innerHTML = 'Podaj właściwą nazwę firmy!'
        forCompanyName.style = 'color: red'
        isError = true
    } else {
        forCompanyName.innerHTML = 'Nazwa firmy'
        forCompanyName.style = 'color: black'
    }

    if (address.value == '' || !addressRegex.test(address.value)) {
        forAddress.innerHTML = 'Podaj właściwy adres!'
        forAddress.style = 'color: red'
        isError = true
    } else {
        forAddress.innerHTML = 'Adres'
        forAddress.style = 'color: black'
    }

    if (email.value == '' || !emailRegex.test(email.value)) {
        forEmail.innerHTML = 'Podaj właściwy email!'
        forEmail.style = 'color: red'
        isError = true
    } else {
        forEmail.innerHTML = 'Email'
        forEmail.style = 'color: black'
    }

    if (number.value == '' || !numberRegex.test(number.value)) {
        forNumber.innerHTML = 'Podaj właściwy numer!'
        forNumber.style = 'color: red'
        isError = true
    } else {
        forNumber.innerHTML = 'Telefon'
        forNumber.style = 'color: black'
    }

    if(!isError) {
        alert(
            'Dziękujemy za zamówienie. Może kiedyś dojdzie...'
        )
        document.getElementById("contact-form").submit();
        localStorage.clear();
        localStorage.setItem('counter', 0);
        location.hash = "#home";
    }
    return;
    
}


