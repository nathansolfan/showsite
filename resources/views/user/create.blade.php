<x-layout>

    <div>
        <x-forms.userForm
            title="Create your account"
            :value="null"
            paragraph=""
            btn-login="Login"
            btn-submit="Create"
            action="/user/"
            alternative-text="Already have an account?"
            alternative-link="/login"
        />
    </div>





</x-layout>
