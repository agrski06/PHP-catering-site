<script>
    function validate() {
        let nameRegex = /^[A-Za-zżźćńółęąśŻŹĆĄŚĘŁÓŃ ]+$/;
        let usernameRegex = /^[a-zA-Z0-9]+$/;
        let passwordRegex = /^[a-zA-Z0-9*#@!.,/;:-_=+]+$/;
        let emailRegex = /^\S+@\S+\.\S+$/

        let login = document.getElementById("login").value
        let passwd = document.getElementById("password").value
        let firstname = document.getElementById("firstname").value
        let lastname = document.getElementById("lastname").value
        let email = document.getElementById("email").value
        let error = document.getElementById("err")
        error.style = 'color: red'

        if (login == '' || !usernameRegex.test(login)) {
            error.innerHTML = 'Podaj właściwy login!'
            return false
        } 
        if (passwd == '' || !passwordRegex.test(passwd)) {
            error.innerHTML = 'Podaj właściwe hasło!'
            return false
        } 
        if (firstname == '' || !nameRegex.test(firstname)) {
            error.innerHTML = 'Podaj właściwe imię!'
            return false
        } 
        if (lastname == '' || !nameRegex.test(lastname)) {
            error.innerHTML = 'Podaj właściwe nazwisko!'
            return false
        } 
        if (email == '' || !emailRegex.test(email)) {
            error.innerHTML = 'Podaj właściwy email!'
            return false
        } 

        return true;
    }
    var x = document.querySelector("[method='post']");
    x.addEventListener("submit",function() {
        return validate();
    });
</script>
<div class="main"> 
    <header></header>
    <form style="
        display: flex;
        width: 100%;
        justify-content: center;
        align-items: center;
        padding: 1rem;
        flex-direction: column;
        "
        onsubmit="return validate();"
        action="index.php?content_id=registerUser"
        method="post">

        <div>
        <label for="login">Login:</label> <br>
        <input type="text" name="login" id="login">
        </div>
        
        <div>
        <label for="password">Hasło:</label>
        <br>
        <input type="password" name="password" id="password">
        </div>

        <div>
        <label for="firstname">Imię:</label>
        <br>
        <input type="text" name="firstname" id="firstname">
        </div>

        <div>
        <label for="lastname">Nazwisko:</label>
        <br>
        <input type="text" name="lastname" id="lastname">
        </div>

        <div>
        <label for="email">Email:</label>
        <br>
        <input type="email" name="email" id="email">
        </div>

        <div id="err"></div>

        <div style="padding: 1rem;">
        <input type="submit" value="Register">
        </div>
    </form>
</div>