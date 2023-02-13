<!-- username  -->
<div class="field">
    <label class="label" for="username_<?php echo $params['type'] ?>">Username</label>
    <p class="control has-icons-left has-icons-right">
        <input class="input" type="text" placeholder="Username" name="username_<?php echo $params['type'] ?>" id="username_<?php echo $params['type'] ?>">
        <span class="icon is-small is-left">
            <img src="/assets/icon/user.svg" style="vertical-align:middle">
        </span>
        <!-- <span class="icon is-small is-right">
                                <img src="/assets/icon/check_green.svg" style="vertical-align:middle">
                            </span> -->
    </p>
    <p class="help">This is a help text</p>
</div>

<!-- email address  -->
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

<!-- password  -->
<div class="field">
    <label class="label" for="pass_<?php echo $params['type'] ?>">Password</label>
    <p class="control has-icons-left">
        <input class="input" type="password" placeholder="Password" name="pass_<?php echo $params['type'] ?>" id="pass_<?php echo $params['type'] ?>">
        <span class="icon is-small is-left">
            <img src="/assets/icon/lock.svg" style="vertical-align:middle">
        </span>
    </p>
    <p class="help"><a href="" class="has-text-weight-bold">Forget Password?</a></p>
    <p class="help">This is a help text</p>
</div>

<!-- re-enter password  -->
<div class="field">
    <label class="label" for="re_pass_<?php echo $params['type'] ?>">Confirm Password</label>
    <p class="control has-icons-left">
        <input class="input" type="password" placeholder="Re-enter Password" name="re_pass_<?php echo $params['type'] ?>" id="re_pass_<?php echo $params['type'] ?>">
        <span class="icon is-small is-left">
            <img src="/assets/icon/lock.svg" style="vertical-align:middle">
        </span>
    </p>
    <p class="help">This is a help text</p>
</div>

<p>Already have an account? <a class="has-text-weight-bold" href="/auth?type=login">Log in</a> here!</p>