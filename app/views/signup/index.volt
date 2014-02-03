<h2>Sign up using this form</h2>

{{ form("signup/register", 'method':'post') }}

    <p>
        <label for="name">Name</label>
        {{ text_field("name", "size": 32) }}
    </p>

    <p>
        <label for="email">Email</label>
        {{ text_field("email") }}
    </p>

    {{ submit_button("Register") }}

</form>