<form action="" autocomplete="on" method="post">

    <div class="field">
        <label class="label" for="email_<?php echo $params['type'] ?>">Email</label>
        <p class="control has-icons-left has-icons-right">
            <input class="input" type="email" placeholder="Email" name="email_<?php echo $params['type'] ?>" id="email_<?php echo $params['type'] ?>">
            <span class="icon is-small is-left">
                <img src="/assets/icon/mail.svg" style="vertical-align:middle">
            </span>
            <!-- <span class="icon is-small is-right">
                                <img src="/assets/icon/check_green.svg" style="vertical-align:middle">
                            </span> -->
        </p>
        <p class="help">This is a help text</p>
    </div>
    <div class="field">
        <label class="label" for="pass_<?php echo $params['type'] ?>">Password</label>
        <p class="control has-icons-left">
            <input class="input" type="password" placeholder="Password" name="pass_<?php echo $params['type'] ?>" id="pass_<?php echo $params['type'] ?>">
            <span class="icon is-small is-left">
                <img src="/assets/icon/lock.svg" style="vertical-align:middle">
            </span>
        </p>
        <p class="help">This is a help text</p>
    </div>
    <div class="field">
        <p class="control">
            <button class="button is-success" type="submit">
                Login
            </button>
        </p>
    </div>

</form>