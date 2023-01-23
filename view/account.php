<div class="main">
    <header>
        <div class="mask">
            <div class="content">
                <h1><?php echo $user->getUserName(); ?></h1>
            </div>
        </div>
    </header>
    <form style="
        display: flex;
        width: 100%;
        justify-content: center;
        align-items: center;
        padding: 1rem;
        flex-direction: column;
        " action="index.php?content_id=logout" method="post">

        <div style="padding: 1rem;">
            <input type="submit" value="Logout">
        </div>
    </form>
</div>