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
        action="index.php?content_id=loginUser" 
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

        <div style="padding: 1rem;">
        <input type="submit" value="Login">
        </div>
    </form>
</div>