{% extends './layouts/app.volt' %}

{% block content %}
    <div class="card central-form">
        <div class="card-header">
            <h1>Login</h1>
        </div>
        <div class="card-body">
            <form action="#" method="POST">

                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" name="email">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password">
                </div>

                <div class="form-group">
                    <button type="submit" class="blue">Send</button>
                </div>
            </form>
            Don't have account ? <a href="/register">zRegister #</a>
        </div>
    </div>
{% endblock %}