<main id="login">
    <form wire:submit.prevent='login'>
        <fieldset>
            <legend>
                <h3>Please log in</h3>
            </legend>

            <x-form.text name='username' autofocus />
            <x-form.password name='password' />

            <div class="buttons">
                <button class="btn primary" type='submit'>Login</button>
            </div>
        </fieldset>
    </form>
</main>
