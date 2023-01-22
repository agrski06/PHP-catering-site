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

        <div style="padding: 1rem;">
        <input type="submit" value="Register">
        </div>
    </form>
</div>