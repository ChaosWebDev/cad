<main id="login">
    <form wire:submit.prevent='login'>
        <fieldset>
            <x-form.text name='username' autofocus />
            <x-form.password name='password' />

            <div class="buttons">
                <button class="btn secondary"
                    onclick="history.length > 1 ? history.back() : window.location.href='{{ route('desktop') }}'"
                    type='button'>Cancel</button>
                <button class="btn primary" type='submit'>Login</button>
            </div>
        </fieldset>
    </form>
</main>
