{% extends './layouts/app.volt' %}

{% block content %}
    <div class="card central-form">
        <div class="card-header">
            <h1>Register</h1>
        </div>
        <div class="card-body">
            <form action="#" method="POST">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="name">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" name="email">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password">
                </div>
                <div class="form-group">
                    <label for="password_confirmation">Confirmation</label>
                    <input type="password" name="password_confirmation">
                </div>
                <div class="form-group">
                    <button type="submit" class="blue">Send</button>
                </div>
            </form>
        </div>
    </div>
{% endblock %}